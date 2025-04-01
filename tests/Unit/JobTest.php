<?php

use App\Models\Employer;
use App\Models\Job;


it('it belongs to employer', function () {
    // expect(true)->toBeFalse(); // AAA pripravit, expect, overit
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();

});

it('can have a tags', function () {

    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);




});
