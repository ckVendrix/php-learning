<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Quest
{
    public $body;

    public function __construct($body) {

        $this->body = $body;
    }

    public static function find($slug) {
        if(!file_exists($path = resource_path("quests/{$slug}.html"))) {
            throw new ModelNotFoundException("pfad: {$path}");
        }

        return cache()->remember("quests.{$slug}", now()->addDay(), fn() => file_get_contents($path));
    }

    public static function all() {
        return collect(File::files(resource_path("quests/")))->map(function ($file) {
            return new Quest($file->getContents());
        });
    }
}
