<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class baseDB extends Model
{
    use HasFactory;
    public function __construct()
    {
    }
    public function getAllData($tableName)
    {
        $data = DB::select('SELECT * from users ORDER BY create_at');
        return $data;
    }

    public function addData($tableName, $data)
    {
        $keys = [];
        $values = [];
        $dataInsert = "";
        foreach ($data as $key => $value) {
            array_push($keys, $key);
            array_push($values, $value);
            if ($key === array_key_first($data)) {
                $dataInsert = $dataInsert . "(" . $key . ",";
            } else if ($key === array_key_last($data)) {
                $dataInsert = $dataInsert . $key . ")";
            } else {
                $dataInsert = $dataInsert . $key . ",";
            }
        }

        return DB::insert("INSERT INTO $tableName " . $dataInsert . " values (?,?,?)", $values);
    }

    public function getDataDetail($tableName, $id)
    {
        return DB::select("SELECT * FROM " . $tableName . "  WHERE id = ?", [$id]);
    }

    public function updateData($tableName, $data, $id)
    {
        $keys = [];
        $values = [];
        $dataInsert = "";

        foreach ($data as $key => $value) {
            array_push($keys, $key);
            array_push($values, $value);
            if ($key === array_key_last($data)) {
                $dataInsert = $dataInsert . $key . "=? ";
            } else {
                $dataInsert = $dataInsert . $key . "=?, ";
            }
        }
        array_push($values, $id);

        dd("UPDATE " . $tableName . '  SET ' . $dataInsert . ' WHERE id = ? ', $values);
        return DB::update("UPDATE " . $tableName . '  SET ' . $dataInsert . ' WHERE id = ? ', $values);
    }

    public function deleteOne($tableName, $id)
    {
        return DB::delete("DELETE FROM $tableName WHERE id=?", [$id]);
    }

}
