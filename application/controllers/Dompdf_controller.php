<?php defined('BASEPATH') or exit('No direct script access allowed');
class Dompdf_controller extends CI_Controller
{
    public function index()
    {
        // Get output html
        $html = $this->output->get_output();
        $this->load->library('pdf');
        // Load pdf library
        ob_start();
?>
        <div class="container">
            <div >
                <div >
                </div>
                <div >
                    <div class="center">
                        <img src="http://via.placeholder.com/200x90?text=logo">
                    </div>
                    <div class="center" >
                        <p > Restaurant Management Systems</p>
                        <p >Phone number: 8889898989</p>
                    </div>
                    <table style="width:100%">
                        <tr  >
                            <td>Date: 15/2/2020</td>
                            <td>Time: 3:00pm</td>
                        </tr>
                        <tr>
                            <td>Table Num:1</td>
                            <td>Bill Num:123</td>
                        </tr>
                    </table>
                    <hr>
                    <hr>
                    <div class="center">
                        <h3 >Order Summary</h3>
                        <div class="food">
                            <div >
                                <table style="width:100%">
                                    <thead>
                                        <tr >
                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Butter Chicken</td>
                                            <td>10</td>
                                            <td>18</td>
                                            <td>180</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Paneer Masala</td>
                                            <td>6</td>
                                            <td>59</td>
                                            <td>254</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Chicken Xakuti</td>
                                            <td>4</td>
                                            <td>95</td>
                                            <td>285</td>
                                        </tr>
                                        <tr class="last-row">
                                            <td>4</td>
                                            <td>Fried Rice</td>
                                            <td>1</td>
                                            <td>300</td>
                                            <td>300</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="border-top: 1px dashed black;">
                            <table style="width:100%">
                                <thead>
                                    <tr >
                                        <th>Food Sub-Total</th>
                                        <th>GST</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <td>432</td>
                                            <td>5%</td>
                                            <td>10%</td>
                                            <td>&#x20B9 Rs 234</td>
                                    </tr>
                                </thead>
                            </table>
                            <hr>
                        </div>
                        <!-- food end -->
                        <div class="liquor">
                            <div>
                                <table style="width:100%" >
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>liquor</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Amount</th>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Crown Royal.</td>
                                            <td>1</td>
                                            <td>180</td>
                                            <td>180</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Kingfisher</td>
                                            <td>1</td>
                                            <td>254</td>
                                            <td>254</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <hr style="border-top: 1px dashed black;">
                            <table style="width:100%">
                                <thead>
                                    <tr >
                                        <th>liquor Sub-Total</th>
                                        <th>GST</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                    <tr>
                                    <td>432</td>
                                            <td>5%</td>
                                            <td>10%</td>
                                            <td>&#x20B9  Rs  234</td>
                                    </tr>
                                </thead>
                            </table>
                            <hr>
                        </div>
                        <div>
                            <hr>
                            <div >
                                <h2>Grand Total
                                    &#x20B9   Rs   234 /-</h2>
                            </div>
                        </div>
                        <div >**************** Thank You. Visit Again ****************</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
        </div>
        </div>
        <style>
            * {
                margin: 5px;
                padding: 0cm;
            }
.center{
    text-align: center ;
}
th,td {
            margin-left: 2px;
                padding: 5px;
                text-align: center;
            }
        </style>
<?php
        $html = ob_get_clean();
        // Load HTML content
        $this->dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation
        $this->dompdf->setPaper('A4', 'potrait');
        // Render the HTML as PDF
        $this->dompdf->render();
        // Output the generated PDF (1 = download and 0 = preview)
        $this->dompdf->stream("invoice.pdf", array("Attachment" => 0));
    }
}
