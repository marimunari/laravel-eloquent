<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    const TYPE_INDIVIDUAL = 'individual';

    const TYPE_LEGAL = 'legal';

    const MARITAL_STATUS = [
        1 => 'Solteiro',
        2 => 'Casado',
        3 => 'Divorciado'
    ];

    protected $fillable = [
        'name',
        'document',
        'email',
        'phone',
        'defaulter',
        'dateBirth',
        'gender',
        'maritalStatus',
        'physicalDesability',
        'companyName',
        'clientType',
        'soccer_team_id'
    ];

    public function soccerTeam()
    {
        return $this->belongsTo(SoccerTeam::class);
    }

    public function clientProfile()
    {
        return $this->hasOne(ClientProfile::class);
    }
}
