<?php
namespace App\Models;

use CodeIgniter\Model;
class ModelAuth extends Model{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'nama','username','password','role_id'
    ];
    public function cek_login($username,$password)
    {
        $result   = $this->getWhere(['username'=>$username,'password'=>$password])->getRow();
        return $result;      
    }
}