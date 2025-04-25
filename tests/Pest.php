<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Pest\Laravel\{get, post, actingAs};

uses(Tests\TestCase::class,
    RefreshDatabase::class,

)->in('Feature', 'Unit');
