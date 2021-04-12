<?php

if (!class_exists('Users')) {
    class Users
    {
        static function columnsList($vars, $sep = ', ')
        {
            $columns = array_keys($vars);
            return join($sep, $columns);
        }

        static function valuesList($vars, $sep = "', '")
        {
            $values = array_values($vars);
            return "'" . join($sep, $values) . "'";
        }

        static function add($params)
        {
            $columnsString = self::columnsList($params);
            $valuesString = self::valuesList($params);
            $tableName = __CLASS__;
            $sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
            $result = $GLOBALS['db']->execute($sql);
            if ($result)
                alerts('کاربر با موفقیت ثبت شد!', 'success');
        }

        static function update()
        {
        }

        static function delete()
        {
        }

        static function find($where='TRUE',$order='id DESC',$count=4,$ofset=0
        )
        {
            $tablename=get_class();
            $sql="SELECT * FROM {$tablename}
           WHERE {$where}
            ORDER BY {$order}
            LIMIT $ofset,$count
            ";
            $result = $GLOBALS['db']->execute($sql);
            return $result;
        }
    }
}