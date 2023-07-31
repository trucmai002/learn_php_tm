<?php


namespace Tests\Unit;


class YourTestClass extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected function setUp(): void
{
    parent::setUp();
   
    // Kết nối với cơ sở dữ liệu
    $this->getModule('Db')->_initialize();
   
    // Thiết lập cấu hình kết nối cơ sở dữ liệu
    $this->getModule('Db')->_cleanup();
    $this->getModule('Db')->_loadDump('tests/_data/dump.sql');
}
public function testInsertData()
{
    // Chèn dữ liệu vào cơ sở dữ liệu
    $this->getModule('Db')->haveInDatabase('customer', [
        'name' => 'Pham Thi D',
        'email' => 'phamthid@example.com',
    ]);
   
    // Kiểm tra sự tồn tại của dữ liệu trong cơ sở dữ liệu
    $this->getModule('Db')->seeInDatabase('customer', [
        'name' => 'Pham Thi D',
        'email' => 'phamthid@example.com',
    ]);
}
public function testUpdateData()
{
    // Cập nhật dữ liệu trong cơ sở dữ liệu
    $this->getModule('Db')->updateInDatabase('customer', [
        'email' => 'nguyenvanb1@gmail.com',
    ], [
        'name' => 'Nguyen Van B',
    ]);
   
    // Kiểm tra dữ liệu đã được cập nhật trong cơ sở dữ liệu
    $this->getModule('Db')->seeInDatabase('customer', [
        'name' => 'Nguyen Van B',
        'email' => 'nguyenvanb1@gmail.com',
    ]);
}
public function testNumRecordsNguyenThiA()
{
    // Kiểm tra số lượng bản ghi có name='Nguyen Thi A' có đúng là 2 bản ghi không
    $this->getModule('Db')->seeNumRecords(2, 'customer', ['name' => 'Nguyen Thi A']);
}
}
?>
