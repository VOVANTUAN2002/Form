<?php
class customerModel
{
    protected $connect;
    public function __construct()
    {
        $this->connect = $this->connect();
    }

    //trong phần này lưu ý: vì là function nên gần như tất cả đều cần return để trả về kết quả
    public function getList()
    {
        $sql = "SELECT * FROM customer";              //lưu cú pháp vào biến sql
        $query = $this->connect->prepare($sql);       //chuẩn bị
        $query->execute();                            //thực hiện cú pháp
        $customers = array();                         //khởi tạo mảng customers
        //trả về một số dữ liệu dưới dạng đối tượng
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            array_push($customers, $result);          //thêm giá trị $result vào mảng $customers
        }
        return $customers;
    }

    public function detail($id)
    {
        $sql = "SELECT * FROM customer WHERE id = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $customer = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $customer = $result;
        }
        return $customer;
    }

    public function add($data)
    {
        $sql = "INSERT INTO customer(fullname, age, address) VALUES('" . $data['fullname'] . "','" . $data['age'] . "','" . $data['address'] . "')";
        //thực hiện cú pháp được lưu ở biến $sql
        $this->connect->exec($sql);
    }

    public function edit($id)
    {
        $sql = "SELECT * FROM customer WHERE id = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $customer = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $customer = $result;
        }
        return $customer;
    }

    public function update($data)
    {
        $sql = "UPDATE customer SET fullname ='" . $data['fullname'] . "',age ='" . $data['age'] . "',address ='" . $data['address'] . "' WHERE id = '" . $data['id'] . "'";
        $this->connect->exec($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM customer WHERE id = '" . $id . "'";
        $query = $this->connect->prepare($sql);
        $query->execute();
        $customer = array();
        while ($result = $query->fetch(PDO::FETCH_OBJ)) {
            $customer = $result;
        }
        return $customer;
    }


    //hàm kết nối đến cơ sở dữ liệu
    public function connect()
    {
        $hostname = 'localhost';
        $db_name = 'demo_pd0';
        $username = 'root';
        $password = '';
        $dsn = "mysql:host=$hostname; dbname=$db_name";

        try {
            $connect = new PDO($dsn, $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
        } catch (PDOException $e) {
            echo 'Kết nối thất bại: ' . $e->getMessage();
        }
    }
}
