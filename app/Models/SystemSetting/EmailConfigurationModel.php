<?php

namespace App\Models\SystemSetting;

use Illuminate\Database\Eloquent\Model;

class EmailConfigurationModel extends Model
{
    protected $table="email_config";
    protected $fillable=[
            'mail_encription',
            'mail_mailer',
            'mail_host',
            'mail_port',
            'mail_username',
            'mail_password',
            'mail_fromaddress',
            'mail_fromname',
            'is_active',
            'user_id',
    ];
}
