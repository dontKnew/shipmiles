<?= $this->extend('include/admin') ?>
<?= $this->section('main-contents') ?>

<!--start main content-->
<div class="container-fluid">

    <h4 class="page-title">
        <a href="<?= route_to("admin/ratelist") ?>" class="btn btn-warning">
            <i class="la la-arrow-left"></i> Back
        </a>
    </h4>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Charges Rates</div>
                </div>
                <div class="card-body">
                    <div class="row" style="display: flex;justify-content: center;">
                        <?php foreach($data['charge'] as $weight=>$amount): ?>
                            <div class="col-md-3 col-sm-4 m-1 p-2 border">
                                  <strong><?=$weight?> Kg of <?=($amount=="")?'Null':$amount." ₹"?> Charge </strong>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--end main content-->
<?= $this->endSection('main-contents') ?>
