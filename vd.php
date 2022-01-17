<?php
class Node {
    public $value;  //biến nhận giá trị hiện tại
    public $next;   //biến nhận giá trị tiếp theo
    public function __construct() {
    }
}
class Queue {
    public $front;  //biến trỏ trị phía trước của hàng đợi/ hàng chờ
    public $back;   // biến trỏ trị sau của hàng đợi/ hàng chờ
    // kiểm tra $front có trống hay không
    public function isEmpty() {
        return is_null($this->front); //is_null kiểm tra xem giá trị $this-front có phải là null hay không
    }
    // thêm giá trị vào
    /*
    enqueue thực hiện hành động tạo biến trung gian và truy cập(đưa con trỏ đến) thông qua head và tail của giá trị đầu tiên
    đến head và tail của giá trị cuối cùng, cho đến khi vị trí tail của dữ liệu cuối cùng là rỗng, thì thực hiện
    thêm dữ liệu($value) vào.
    */
    public function enqueue($value)
    {
        $oldBack = $this->back;         //khởi tạo biến oldBack nhận giá trị phía sau của queue(tức $this->back)
        $this->back = new Node();       //khởi tạo đối tượng $this->back từ lớp Node ở trên
        $this->back->value = $value;    //truy cập thuộc tính value của class Node từ đổi tượng $this->back
        if ($this->isEmpty()) {         //gọi isEmpty để kiểm tra $this->front có trống hay không
            $this->front = $this->back; //nếu trống thì chuyển con trỏ phía trước đến vị trí đằng sau và chuyển con trỏ từ front sang back
        } else { 
            $oldBack->next = $this->back;   // ngược lại nếu có dữ liệu thì gán $next của thuộc tính cho vị trí đằng sau
        }
    }
    //lấy giá trị ra 
    public function dequeue()
    {
        if ($this->isEmpty()) { //gọi isEmpty để kiểm tra xem có dữ liệu hay không
            return null;        // nếu không trả về null
        }
        $removedValue = $this->front->value;    // nếu có thì gán dữ liệu cần xóa ($this->front->value) cho biến $removeValue 
        $this->front = $this->front->next;      // sau đó gán giá trị đầu tiên cho giá trị đằng sau nó
        return $removedValue;                   // trả về giá trị vừa xóa lúc nãy => lấy giá trị đó ra khỏi queue
    }
}
// khởi tạo đối tượng và truy cập các phương thức enqueue + dequere + isEmpty...
$queue = new Queue();
$queue->enqueue("start");
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);
$queue->enqueue(4);
$queue->enqueue("End");
$queue->dequeue();

//var_dump để hiển thị giá trị boolean
var_dump($queue->isEmpty());
echo "<pre>";
print_r($queue);