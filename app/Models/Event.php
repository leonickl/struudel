<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

/**
 * @property int $id
 * @property string $uuid
 * @property string $name
 * @property array $dates
 * @property Collection $answers
 */
class Event extends Model
{
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string)Str::uuid();
        });
    }

    protected function casts(): array
    {
        return [
            'dates' => 'array',
        ];
    }

    protected function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    private function score(array $answers): float|null
    {
        return count($answers) > 0 ? array_sum($answers) : null;
    }

    public function ranking(): array
    {
        $dates = [];

        foreach ($this->dates as $date) {
            $dates[$date] = [];
        }

        foreach ($this->answers as $answer) {
            foreach ($answer->dates as $date => $status) {
                if (key_exists($date, $dates)) {
                    $dates[$date][] = (int)$status;
                }
            }
        }

        return array_map(fn(array $answers) => $this->score($answers), $dates);
    }

    public function best(): array|null
    {
        $ranking = array_filter($this->ranking());

        arsort($ranking);

        if (count($ranking) === 0) {
            return null;
        }

        $max = $ranking[array_key_first($ranking)];

        return array_keys($ranking, $max);
    }
}
