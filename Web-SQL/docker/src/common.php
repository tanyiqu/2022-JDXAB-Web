<?php 

include_once('string.class.php');


header("Content-Type: text/html;charset=utf-8");

/* 验证表单数据
 * $type 1:post数据，2:get数据 否则为$type
 * $pe 是否转义
 * $sql 是否验证sql非法字符
 * $mysql 是否验证mysql保留字符
 */
function p($type=1,$pe=false,$sql=false,$mysql=false){
    if($type == 1){
        $data = $_POST;
    }else if($type == 2){
        $data = $_GET;
    }else{
        $data = $type;
    }
    if($sql) filter_sql($data);
    if($mysql) mysql_retain($data);
    foreach($data as $k => $v){
        if(is_array($v)){
            $newdata[$k] = p($v,$pe,$sql,$mysql);
        }else{
            if($pe){
                $newdata[$k] = string::addslashes($v);
            }else{
                $newdata[$k] = trim($v);
            }
        }
    }
    return $newdata;
}

//过滤非法提交信息，防止sql注入
function filter_sql(array $data){
    foreach($data as $v){
        if(is_array($v)){
            filter_sql($v);
        }else{
            //转换小写
            $v = strtolower($v);
            if(preg_match('/count|create|delete|select|update|use|drop|insert|info|from/',$v)){
                echo '<script>alert("【'.$v.'】数据非法")</script>';
            }
        }
    }
}

//mysql保留关键字，不允许使用
function mysql_retain($arr){
        $retain = array('ADD','ALL','ALTER','ANALYZE','AND','AS','ASC','ASENSITIVE','BEFORE','BETWEEN','BIGINT','BINARY','BLOB','BOTH','BY','CALL','CASCADE','CASE','CHANGE','CHAR','CHARACTER','CHECK','COLLATE','COLUMN','CONDITION','CONNECTION','CONSTRAINT','CONTINUE','CONVERT','CREATE','CROSS','CURRENT_DATE','CURRENT_TIME','CURRENT_TIMESTAMP','CURRENT_USER','CURSOR','DATABASE','DATABASES','DAY_HOUR','DAY_MICROSECOND','DAY_MINUTE','DAY_SECOND','DEC','DECIMAL','DECLARE','DEFAULT','DELAYED','DELETE','DESC','DESCRIBE','DETERMINISTIC','DISTINCT','DISTINCTROW','DIV','DOUBLE','DROP','DUAL','EACH','ELSE','ELSEIF','ENCLOSED','ESCAPED','EXISTS','EXIT','EXPLAIN','FALSE','FETCH','FLOAT','FLOAT4','FLOAT8','FOR','FORCE','FOREIGN','FROM','FULLTEXT','GOTO','GRANT','GROUP','HAVING','HIGH_PRIORITY','HOUR_MICROSECOND','HOUR_MINUTE','HOUR_SECOND','IF','IGNORE','IN','INDEX','INFILE','INNER','INOUT','INSENSITIVE','INSERT','INT','INT1','INT2','INT3','INT4','INT8','INTEGER','INTERVAL','INTO','IS','ITERATE','JOIN','KEY','KEYS','KILL','LABEL','LEADING','LEAVE','LEFT','LIKE','LIMIT','LINEAR','LINES','LOAD','LOCALTIME','LOCALTIMESTAMP','LOCK','LONG','LONGBLOB','LONGTEXT','LOOP','LOW_PRIORITY','MATCH','MEDIUMBLOB','MEDIUMINT','MEDIUMTEXT','MIDDLEINT','MINUTE_MICROSECOND','MINUTE_SECOND','MOD','MODIFIES','NATURAL','NOT','NO_WRITE_TO_BINLOG','NULL','NUMERIC','ON','OPTIMIZE','OPTION','OPTIONALLY','OR','ORDER','OUT','OUTER','OUTFILE','PRECISION','PRIMARY','PROCEDURE','PURGE','RAID0','RANGE','READ','READS','REAL','REFERENCES','REGEXP','RELEASE','RENAME','REPEAT','REPLACE','REQUIRE','RESTRICT','RETURN','REVOKE','RIGHT','RLIKE','SCHEMA','SCHEMAS','SECOND_MICROSECOND','SELECT','SENSITIVE','SEPARATOR','SET','SHOW','SMALLINT','SPATIAL','SPECIFIC','SQL','SQLEXCEPTION','SQLSTATE','SQLWARNING','SQL_BIG_RESULT','SQL_CALC_FOUND_ROWS','SQL_SMALL_RESULT','SSL','STARTING','STRAIGHT_JOIN','TABLE','TERMINATED','THEN','TINYBLOB','TINYINT','TINYTEXT','TO','TRAILING','TRIGGER','TRUE','UNDO','UNION','UNIQUE','UNLOCK','UNSIGNED','UPDATE','USAGE','USE','USING','UTC_DATE','UTC_TIME','UTC_TIMESTAMP','VALUES','VARBINARY','VARCHAR','VARCHARACTER','VARYING','WHEN','WHERE','WHILE','WITH','WRITE','X509','XOR','YEAR_MONTH','ZEROFILL');
    foreach($arr as $v){
        if(is_array($v)){
            mysql_retain($v);
        }else{
            $v = strtoupper($v);
            if(in_array($v,$retain)){
                echo '<script>alert("【'.$v.'】为mysql保留关键字，禁止使用")</script>';
            }
        }
    }
}
?>