
<?php
echo str_word_count("Hello world!") . "<br>"; // outputs: 2 
//Hàm str_word_count() sẽ lấy thông tin về các từ có trong chuỗi, bao gồm số từ, vị trí xuất hiện .v.v.

echo strrev("Hello world!") . "<br>"; // outputs: !dlrow olleH
// Hàm strrev() sẽ đảo ngược chuỗi được truyền vào.
// Hàm trả về chuỗi bị đảo ngược so với chuỗi ban đầu.

echo strpos("Hello world!", "world") . "<br>"; // outputs : 6
//Hàm strpos() sẽ tìm kiếm vị trí đầu tiên của kí tự hoặc chuỗi con xuất hiện trong chuỗi nguồn.
// Hàm trả về số nguyên là vị trí đầu tiên xuất hiện của kí tự hoặc chuỗi con trong chuỗi nguồn, 
//lưu ý là chuỗi sẽ bắt đầu từ vị trí 0, không phải 1.



echo str_replace("world", "Dolly", "Hello world!") . "<br>"; // outputs : Hello Dolly!
// Cú pháp: str_replace($search, $replace, $subject);
// Hàm str_replace() sẽ thay thế tất cả các ký tự $strSearch nằm trong $subject bằng ký tự $strReplace.

// Trong đó:
// $search là kí tự, chuỗi kí tự hoặc mảng các chuỗi ký tự cần tìm kiếm để thay thế.
// $replace là kí tự, chuỗi kí tự hoặc mảng các chuỗi ký để thay thế cho kí tự, chuỗi kí tự hoặc mảng các chuỗi ký $sreach.
// $subject là chuỗi ký tự hoặc mảng các chuỗi ký tự gốc cần được chỉnh sửa.


echo substr("Hello world", 10) . "<br>"; // d
echo substr("Hello world", -1) . "<br>"; // d
echo substr("Hello world", 0, 10) . "<br>"; // Hello worl
echo substr("Hello world", 0, -1) . "<br>"; // Hello worl
//Hàm substr() sẽ trích xuất một phần của chuỗi, phần chuỗi được trích xuất sẽ tùy thuộc vào tham số truyền vào.

echo strtolower("Hello WORLD") . "<br>"; //hello world
//Hàm strtolower() dùng để chuyển đổi các kí tự trong chuỗi thành kí tự in thường.
// Nếu trong chuỗi truyền vào có các kí tự in hoa( A, B, C . . .Z), sau khi gọi hàm strtolower();
// chúng sẽ trở thành in thường( a, b, c ... z).


echo strtoupper("Hello WORLD!"); //HELLO WORLD!
//Hàm strtoupper() trong php có tác dụng chuyển các chữ viết thường của chuỗi về dạng chữ in hoa,
// Nó không hỗ trợ chuyển các ký tự đặc biệt về dạng chữ hoa, 
//vì thế các bạn lưu ý vấn đề này khi sử dụng hàm.


$str = "Hello World!";
echo $str . "<br>";
echo trim($str, "Hed!"); // llo Worl  
//Hàm trim() sẽ loại bỏ khoẳng trắng( hoặc bất kì kí tự nào được cung cấp) dư thừa ở đầu và cuối chuỗi.