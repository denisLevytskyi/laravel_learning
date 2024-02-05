<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\MyModel
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $myText
 * @property string|null $MyTime
 * @property int|null $MyInt
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereMyInt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereMyText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereMyTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MyModel whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MyModel extends Model
{
    use HasFactory;
}
