<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Collection::range(1, 10)->each(function () {
            $user = User::create([
                'name' => fake()->name(),
                'email' => fake()->email(),
                'password' => Hash::make('password'),
            ]);

            $user->save();

            Collection::range(1, 20)->each(function () use ($user) {
                $event = new Event();

                $event->user_id = $user->id;
                $event->name = fake()->company();
                $event->dates = Collection::range(0, random_int(1, 10))
                    ->map(fn() => fake()->date())
                    ->toArray();

                $event->save();
            });
        });

    }
}
