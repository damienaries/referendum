<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Idea;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_of_ideas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'description of my first title'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My second idea',
            'description' => 'description of my second title'
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);
        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    public function test_show_single_idea_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'description of my first title'
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    public function test_does_pagination_works()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');

        $response->assertSuccessful();
        $response->assertDontSee($ideaOne->title);
        $response->assertSee($ideaEleven->title);
    }

    public function test_same_idea_title_different_slugs()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'description of my first title'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My first idea',
            'description' => 'description of my second title'
        ]);

        $response = $this->get(route('idea.show', $ideaOne));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() === 'ideas/my-first-idea');

        $response = $this->get(route('idea.show', $ideaTwo));

        $response->assertSuccessful();
        $this->assertTrue(request()->path() !== 'ideas/my-first-idea');
    }
}
