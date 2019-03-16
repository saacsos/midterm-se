<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>รายละเอียดตั๋วโดยสารรถไฟ</title>
</head>
<body>

<div class="jumbotron">
    <h1 class="display-4 text-center">การรถไฟแห่งประเทศไทย</h1>
    <h2 class="display-8 text-center">STATE RAILWAY OF THAILAND</h2>
    <h3 class="display-8 text-center">ตั๋วโดยสารรถไฟ</h3>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-right">
                ต้นทาง: <?= $ticket->getSourceStation() ?>
            </div>
            <div class="col-sm-4 text-right">
                ปลายทาง: <?= $ticket->getDestinationStation() ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                ขบวน: <?= $ticket->getTrainNumber() ?>
            </div>
            <div class="col-sm-4">
                เวลาออก: <?= $ticket->getDepartureTime() ?> น.
            </div>
            <div class="col-sm-4">
                เวลาถึง: <?= $ticket->getArrivalTime() ?> น.
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                ราคา: <?= number_format($ticket->getPrice(), 2) ?> บาท
            </div>
            <div class="col-sm-4 text-right">
                คันที่: <?= $ticket->getBogieNumber() ?>
            </div>
            <div class="col-sm-4">
                เลขที่นั่ง: <?= $ticket->getSeatNumber() ?>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <h4 class="text-center display-8">ขอให้เดินทางโดยสวัสดิภาพ</h4>
    <br><br><br>
    <a class="btn btn-primary btn-lg" href="#" role="button">QR Code เพื่อตรวจสอบ</a>
</div>
</body>
</html>