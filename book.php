<?php
session_start();
require_once(__DIR__ . '/library/config.php');
if(isset($_GET['booking_token'])){
    $token_id = $_GET['booking_token'];
    $data = $db->table("booking_form")
        ->select("booking_form.id as booking_id", "booking_form.shipper", "booking_form.consignee", "booking_form.package_weight", "ratelist.estimated_delivery", "ratelist.charge", "service.fuel_surcharge", "service.name as service", "service.discount", "service.logo", "csc_country.name as country_name")
        ->join("ratelist", "ratelist.id", "=", "booking_form.ratelist")
        ->join("service", "service.id", "=", "ratelist.service")
        ->join("csc_country", "csc_country.id", "=", "ratelist.country")
        ->join("package_type", "package_type.id", "=", "booking_form.package_type")
        ->where("booking_token", $token_id)
        ->first();

    $charge_obj = json_decode($data->charge);
    $charge = new stdClass();
    $actual_charge = null;
    $charge_amount  = null;
    foreach ($charge_obj as $key => $value) {
        $newKey = str_replace(' ', '', $key);
        $value = str_replace(' ', '', $value);
        if($newKey==$data->package_weight){
            $actual_charge  =  $value-$value*$data->discount/100;
            $charge_amount  =  $value;
        }
    }
    $data->charge = $charge_amount;
    $data->actual_charge = $actual_charge;

}else {
    $data = array_map("trim", $_POST);
    if(isset($_SESSION['csrf_token']) && $_SESSION['csrf_token']==$data['csrf_token']){
        $data['shipper'] = json_encode(array("pincode"=>$data['pickup_pincode'], "phone_no"=>$data['phone_no'])) ;
        unset($data['pickup_pincode']); unset($data['phone_no']); unset($data['csrf_token']);
        $data['booking_token'] = "shipmiles_".bin2hex(random_bytes(32));

        $db->table("booking_form")->insert($data);
        unset($_SESSION['csrf_token']);
        header("Location: book.php?booking_token=".$data['booking_token']);
        exit;
    }else  {
        echo "303 BAD REQUEST";
        exit;
    }
}

?>


<?php include('header.php'); ?>

    <section class="page-title page-title-4 bg-overlay bg-overlay-dark-our bg-parallax" id="page-title">
        <div class="bg-section">
            <!--<img src="assets/images/bg4.png" alt="Background" />-->
            <!--<img src="assets/images/page-titles/10.jpg" alt="Background" />-->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title text-lg-left">

                        <div class="title-heading">
                            <h1>Book Now :)</h1>
                        </div>
                        <div class="clearfix"></div>
                        <ol class="breadcrumb justify-content-lg-start">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Booking Form</li>
                        </ol>
                    </div>

                </div>

            </div>

        </div>

    </section>

<style>
    .box-shadow {
        box-shadow: 0px 0px 8px #888888;
    }
</style>
    <section class="contact-info" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="accordion" id="accordionExample">
                        <!--shipper  form-->
                        <div class="card-header box-shadow" id="shipperForm">
                            <button data-toggle="collapse"  data-target="#collapseShipper" aria-expanded="true" aria-controls="collapseShipper">
                                Shipper/Sender Information
                            </button>
                        </div>
                        <div id="collapseShipper" class="collapse show" aria-labelledby="shipperForm" data-parent="#accordionExample">
                            <form id="shipper_information" class="form-bg box-shadow" method="post">
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <input class="form-control" type="text" name="name" placeholder="name" required=""/>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <input class="form-control" type="email" name="email" placeholder="email" required=""/>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <input class="form-control" type="text"  name="phone" placeholder="Phone" required=""/>
                                    </div>
                                    <div class="col-12">
                                <textarea class="form-control" name="message" cols="30" rows="2" placeholder="message"
                                          required=""></textarea>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn--primary" type="submit" name="contact_submit" value="Submit"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--end shipper  form-->

                        <!--consignee form-->
                        <div class="card-header box-shadow mt-4" id="consigneeForm">
                            <button data-toggle="collapse"  data-target="#collapseConsignee" aria-expanded="true" aria-controls="collapseConsignee">
                                Consignee/Receiver Information
                            </button>
                        </div>
                        <div id="collapseConsignee" class="collapse show" aria-labelledby="consigneeForm" data-parent="#accordionExample">
                        </div>
                        <!--end consignee form-->


                    </div>
                </div>
                <div class="col-4">
                    <div class="box-shadow form-bg">
                        <br>                             <center><img src="adminiwebs/photo/RAPIDEX-Economy-a9c24.jpg" width="200px"></center>
                        <br>

                        <style>
                            .finaltable table tr td {
                                padding: 10px
                            }

                        </style>

                        <table class="table finaltable" id="finaltable">

                            <tbody><tr>
                                <td><strong>Service Type</strong></td>
                                <td style="text-align: right">RAPIDEX Economy</td>
                            </tr>
                            <tr>
                                <td><strong>Sending to</strong></td>
                                <td style="text-align: right; padding-left:0;">Bahrain</td>
                            </tr>
                            <tr>

                                <td><strong>Charged Weight </strong></td>                                    <td style="text-align: right">
                                    8.0 Kg    </td>
                            </tr>
                            <tr>
                                <td><strong>Package Type</strong></td>
                                <td style="text-align: right"> Artificial Jewellary   </td>
                            </tr>
                            <tr>
                                <td><strong>Estimated Delivery</strong></td>
                                <td style="text-align: right">10-12 Days</td>
                            </tr>
                            <tr>
                                <td><strong style="color:#cd1212; font-size:18px"> Charges</strong></td>
                                <td style="text-align: right">
                                    <strong style="color:#037b06; font-family:arial; font-size:18px">₹ <span id="get_charge">4140</span>
                                        /-</strong>

                                </td>
                            </tr>
                            <tr id="remote_charge" style="display: none;"> <td><strong style=" font-size:15px">Remote Area Charge</strong></td>
                                <td style="text-align: right">
                                        <span style="color:; font-family:arial; font-size:18px">
                                                                                           ₹  <span id="remote_charge1"> 0</span> /-

                                        </span>
                                </td>

                            </tr>
                            <tr id="sub_total_charges" style="display: none;">
                                <td><strong style="color:#cd1212; font-size:18px">Total Charges</strong></td>

                                <td style="text-align: right">
                                    <strong style="color:#037b06; font-family:arial; font-size:18px">
                                        ₹ <span id="sub_total_charges1"></span> /-
                                    </strong>

                                </td>
                            </tr>
                            <tr>
                                <td><strong style="; font-size:18px">GST 18%</strong></td>
                                <td style="text-align: right" id="gst_charges">
                                    <span style="font-family: arial; font-size:18px">₹ <span id="gst_charge"> 745 </span> /- </span>

                                </td>
                            </tr>
                            <tr>
                                <td><strong style="color:#cd1212; font-size:18px" id="grand_total_text">Total</strong></td>
                                <td style="text-align: right">
                                    <strong style="color:#037b06; font-family:arial; font-size:18px">
                                        ₹ <span id="total_charge"> 4885 </span> /-</strong>

                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>

        </div>

    </section>


<?php include('footer.php'); ?>