<?php

namespace App\Models;

use CodeIgniter\Model;

class MenuModel extends Model
{
    // กำหนดชื่อของตารางในฐานข้อมูล
    protected $table = 'menus';

    // กำหนด primary key
    protected $primaryKey = 'id';

    // กำหนดฟิลด์ที่สามารถแก้ไขได้
    protected $allowedFields = ['system_name_full', 'status'];

    // กำหนดเวลาที่จะใช้ในแต่ละแถว
    protected $useTimestamps = true;

    // กำหนดชื่อคอลัมน์ timestamp
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // คุณสามารถเพิ่มฟังก์ชันสำหรับ query หรือ logic อื่นๆ ที่ต้องการได้
    public function getMenus()
    {
        return $this->findAll();  // ดึงข้อมูลทั้งหมดจากตาราง
    }
}
