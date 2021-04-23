<?php
if (!class_exists('Product')) {
    class Product
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
        static protected function columnValueList( $vars, $sep = ', ' ){
            // = رشته‌ای شامل زوج اسامی و مقادیر جدول جدا شده با
            foreach($vars as $key => $value){
                $varPairs[] = "{$key} = '{$value}'";
            }
            return join($sep , $varPairs);
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
                alerts('محصول با موفقیت ثبت شد!', 'success');
        }

        static  function update( $params ){
            $columnValueString = self::columnValueList( $params );
            $tableName = get_class(); // self::class // __CLASS__

            // 2. create insert query
            $sql = "UPDATE {$tableName}
						SET {$columnValueString}
						WHERE id = {$params['id']}";
            $result = $GLOBALS['db'] -> execute( $sql );
            // C. success message
            //اگر با موفقیت درج شد
            if( $result ){
                alerts("{$tableName} با موفقیت ویرایش شد!", 'success');
            }
        }

        static function delete()
        {
        }
        static function find($where='TRUE',$order='id DESC',$count=4,$ofset=0)
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
?>