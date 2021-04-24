<?php
if (!class_exists('Tables')) {
    class Tables
    {
        static protected function columnsList($vars, $sep = ', ')
        {
            $columns = array_keys($vars);
            return join($sep, $columns);
        }

        static protected function valuesList($vars, $sep = "', '")
        {
            $values = array_values($vars);
            return "'" . join($sep, $values) . "'";
        }
        static protected function columnValueList( $vars, $sep = ', ' ){
            foreach($vars as $key => $value){
                $varPairs[] = "{$key} = '{$value}'";
            }
            return join($sep , $varPairs);
        }
        static public function add($params)
        {
            $params['status'] = 'default';
            $columnsString = self::columnsList($params);
            $valuesString = self::valuesList($params);
            $tableName = static::class;
            $sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
            $result = $GLOBALS['db']->execute($sql);
            if ($result)
                alerts('محصول با موفقیت ثبت شد!', 'success');
        }

        static  public function update( $params ){
            $columnValueString = self::columnValueList( $params );
            $tableName = static::class;
            $sql = "UPDATE {$tableName}
						SET {$columnValueString}
						WHERE id = {$params['id']}";
            $result = $GLOBALS['db'] -> execute( $sql );
            if( $result ){
                alerts("{$tableName} با موفقیت ویرایش شد!", 'success');
            }
        }

        static public function delete($id){
            $tableName = static::class;
            $sql = "UPDATE {$tableName}
						SET status = 'deleted'
						WHERE id = {$id}";
            $result = $GLOBALS['db'] -> execute( $sql );
            alerts("{$tableName} با موفقیت حذف شد!", 'success');
        }
        static public function find($where='TRUE',$order='id DESC',$count=4,$ofset=0
        )
        {
            $tablename = static::class;
            $sql="SELECT * FROM {$tablename}
           WHERE {$where} AND status != 'deleted'
            ORDER BY {$order}
            LIMIT $ofset,$count
            ";
            $result = $GLOBALS['db']->execute($sql);
            return $result;
        }
    }
}
?>