<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'loginName';
    protected $table = 'usuarios';

    protected $fillable =[
      'loginName', 'nombre', 'clave',
    ];

    protected $hidden = [
        'clave',
    ];    

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->clave;
    }
}
