<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Str;
use Monolog\Processor\TagProcessor;

class GenerateSlugs extends Command
{
    protected $signature = 'generate:slugs';
    protected $description = 'Generate slugs for existing category';

    public function handle()
    {
        $tags = Tag::all();

        foreach ($tags as $tag) {
            if (empty($tag->slug)) {
                $tag->slug = Str::slug($tag->name);
                $tag->save();
            }
        }

        $this->info('Slugs generated successfully!');
    }
}
