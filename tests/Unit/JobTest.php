<?php

use App\Models\Job;

test('example', function () {
    expect(true)->toBeTrue();
});

it('belongs to na employer', function () {
    $employer = \App\Models\Employer::factory()->create();
    $job = \App\Models\Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
