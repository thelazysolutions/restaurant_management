<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ProductScreenController extends CI_Controller
{
    public function __construct()
	{
        parent::__construct();
        $this->logged_in();
	}

    // product

    function index()
    {   
        $this->load->model('productModel');
        $products = $this->productModel->all();
        $categories = $this->productModel->categories();
        $data = array();
        $data['categories'] = $categories;
        $data['products'] = $products;
        $this->load->view('productScreen',$data);
    }
    function logged_in(){
        if(! $this->session->userdata('authenticated')){
            redirect(base_url() . 'index.php/UserController');
        }
    }
    function fetch()
    {
        $output = '';
        $query = '';
        $this->load->model('productModel');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }
        $data = $this->productModel->search($query);
        
        if($data->num_rows() > 0){
            foreach($data->result() as $row){
                $output .= '
                <div class="prod">
                <a href="javascript:" onclick="edit('.$row->id.')"><h5>'.$row->name.'</h5></a>
                </div>
                    
               
                ';
            }
        }else{
            $output .= '
        
            <h5>no data found</h5>
        
        ';
        }
        echo $output;
    }
    function edit($id){
        $output = '';
        $this->load->model('productModel');
        $product = $this->productModel->getProduct($id);
                $output .= '
                <form action="http://localhost/restaurant_management-main/index.php/ProductScreenController/update/'.$product["name"].'" method="post" accept-charset="utf-8">
                <div class="fullSection">
                    <div style="text-align: center; padding-top: 10px; ">
                        <h3>Add Product</h3>
                    </div>
                    <div class="row topSection">
                        <div class="col-md-4">
                            <input type="text" name="productname" class="form-control" placeholder="Product Name" value="'.$product["name"].'">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="price" class="form-control" placeholder="Product Price" value="'.$product["price"].'">
                        </div>
                        

                    </div>
                    <div class="row bottomSection">
                    <div class="pri col-md-4">
                    <label>Type</label>
                    <br>
                    <div class="radio">
                        <label><input type="radio" style="text-align: center;" class="price" name="type" value="veg" checked>Veg</label>
                        <label><input type="radio" style="text-align: center;" class="price" name="type" value="nonveg">Non Veg</label>
                    </div>

                </div>
                        &nbsp;
                        <div class="cat col-md-7 cat">
                        <label>Category</label>
                        <br>
                        <select name="roll" class="form-control" >
                            <option value="" disabled hidden selected>'.$product["category"].' </option>';
                            $categories = $this->productModel->categories();
                            if (!empty($categories)) {
                                foreach ($categories as $category) {  
                                    $output .= '  <option value="'.$category['categoryName']. '">'.$category['categoryName']. '</option>';
                           
                                }
                            } 
                            $output .= ' </select>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class=" col-md-2">
                        </div>
                        <div class=" buttons col-md-4">
                            <button name="submit" type="submit" class="btn btn-success"> <span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp;Update Product</button>
                            <button type="button" onclick="remove('.$id.')" class="btn btn-danger"> <span><i class="fa fa-minus" aria-hidden="true"></i></span>&nbsp;Remove Product</button>
                        </div>
                    </div>
                </div>
                </form>
                ';
                echo $output;
            
        
    }
    function update($name)
    {
        if (isset($_POST['submit'])) {
          

                $this->load->model('productModel');
                $formArray = array();
                if (isset($_POST['submit'])) {
                //     // Retrieving each selected option 
                //     if (isset($_POST["roll"])) {
                //     foreach ($_POST['roll'] as $category) {
                //         $formArray['category'] = $category;
                        
                //     }
                // }
                $formArray['category'] = $_POST['roll'];
                    $formArray['name'] = $_POST['productname'];
                        $formArray['type'] = $_POST['type'];
                        $formArray['price'] = $_POST['price'];
                        print_r($formArray);
                        $this->productModel->update($name,$formArray);
                }
                
                // $formArray['name'] = $_POST['productname'];
                // $formArray['type'] = $_POST['type'];
                // $formArray['price'] = $_POST['price'];
                // $formArray['category'] = $_POST['roll'];
                // $this->productModel->update($name,$formArray);
                  
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/productScreenController');
        }
    }
    function delete($id){
        $this->load->model('productModel');
        $this->productModel->deleteProduct($id);
        $this->session->set_flashdata('success', 'Record Deleted!');
        redirect(base_url() . 'index.php/productScreenController');
    }
    function add()
    {
        if (isset($_POST['submit'])) {
            if (empty($_POST['productname']) || empty($_POST['price']) || empty($_POST['roll'])) {
                echo "<script>window.open('product?Empty= please fill blank fields','_self')</script>";
            } else {

                $this->load->model('productModel');
                $formArray = array();
                $cat = array();
                $image = $_FILES['product']['name'];
                $imagetmp = $_FILES['product']['tmp_name'];
                move_uploaded_file($imagetmp, "upload/$image");
                
                        $formArray['category'] = $_POST['roll'];
                        $formArray['name'] = $_POST['productname'];
                        $formArray['type'] = $_POST['type'];
                        $formArray['price'] = $_POST['price'];
                        $formArray['images'] = $image;
                        print_r($formArray);
                        $this->productModel->create($formArray);
                    
            }
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/productScreenController');
        }
    }
    // category
    function addCategory(){
        if (isset($_POST['submit'])) {
            if (empty($_POST['categoryname']) ) {
                echo "<script>window.open('product?Empty= please fill blank fields','_self')</script>";
            }
            else{
            $this->load->model('productModel');
            $formArray['categoryName'] = $_POST['categoryname'];
            $this->productModel->createCategory($formArray );
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/productScreenController');
            }
            
        }
    }
}
?>
