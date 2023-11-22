<!-- <?php
function getData($sql) {
    $conn = connect_db();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();
    return $result;
}

function getDataWidthParams($sql, $params) {
    $conn = connect_db();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $result = $stmt->fetchAll();
    return $result;
}

function executeCUD($sql, $params) {
    $conn = connect_db();
    $stmt = $conn->prepare($sql);
    $stmt->execute($params);
    $count = $stmt->rowCount();
    return $count;
}

function pdo_execute($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn); //dong connect
    }
}
function pdo_query($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetchAll();
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn); //dong connect
    }
}
//truy van 1 du lieu
function pdo_query_one($sql)
{
    $sql_args = array_slice(func_get_args(), 1);
    try {
        $conn = connect_db();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn); //dong connect
    }
}


?>



?> -->