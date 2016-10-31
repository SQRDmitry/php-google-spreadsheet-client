### How to use

Create instance from CellFeedInsert providing WorkSheet you want insert to.

```php
$spreadsheet = 'MyTable.xlsx';
$sheet = 'List1';

$service = new Google\Spreadsheet\SpreadsheetService();

$worksheet = $service->getSpreadsheets()
    ->getByTitle($spreadsheet)
    ->getWorksheets()
    ->getByTitle($sheet);
            
$cellFeed = new Google\Spreadsheet\CellFeedInsert($worksheet);

$batchRequest = new Google\Spreadsheet\Batch\BatchRequest();

$batchRequest->addEntry($cellFeed->createCell(2, 1, '111'));
$batchRequest->addEntry($cellFeed->createCell(3, 1, '222'));
$batchRequest->addEntry($cellFeed->createCell(4, 1, '333'));
$batchRequest->addEntry($cellFeed->createCell(5, 1, '=SUM(A2:A4)'));
$batchRequest->addEntry($cellFeed->createCell(100, 1, 'Very important cell'));

$cellFeed->insertBatch($batchRequest);
```
