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
        $this->load->model('Product_model');
        $products = $this->Product_model->all();
        $categories = $this->Product_model->categories();
        $data = array();
        $data['categories'] = $categories;
        $data['products'] = $products;
        $this->load->view('productScreen', $data);
    }
    function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect(base_url() . 'index.php/UserController');
        }
    }
    function fetch()
    {
        $output = '';
        $query = '';
        $this->load->model('Product_model');
        if ($this->input->post('query')) {
            $query = $this->input->post('query');
        }
        $data = $this->Product_model->search($query);

        if ($data->num_rows() > 0) {
            foreach ($data->result() as $row) {
                $output .= '
                <div class="prod">
                <a style="
                text-decoration: none;
                color: black;
                cursor:pointer;
                href="javascript:" onclick="edit(' . $row->id . ')"><h5>' . $row->name . '</h5></a>
                </div>
                    
               
                ';
            }
        } else {
            $output .= '
        
            <h5>no data found</h5>
        
        ';
        }
        echo $output;
    }
    function edit($id)
    {
        $output = '';
        $this->load->model('Product_model');
        $product = $this->Product_model->getProduct($id);
        $output .= '
                <form action="http://localhost/index.php/ProductScreenController/update/' . $product["name"] . '" method="post" accept-charset="utf-8">
                    <div class="row form">
                    <div class="col-md-4" height:30vh;">
                    <img style="height:30vh;" src ="' . base_url() . 'upload/' . $product["images"] . '">
                    </div>
                        <div class="col-md-8">
                            <div class="row">
                            <div class="col-md-12 formPad">
                            <input type="text" id="productname" name="productname" class="form-control" placeholder="Product Name" value="' . $product["name"] . '">
                        </div>
                        <div class="col-md-3 formPad">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                                <input type="radio" name="type" value="veg" id="option1" autocomplete="off" checked> Veg
                            </label>
                            <label class="btn btn-secondary">
                                <input type="radio" name="type" value="nonveg" id="option2" autocomplete="off"> Non veg
                            </label>
                        </div>
                    </div>
                    <div class="col-md-4 cat formPad">
                     <select id="roll" name="roll[]" class="form-control " multiple="multiple">
                    <option value="' . $product["category"] . '"  hidden selected>' . $product["category"] . ' </option>';
        $categories = $this->Product_model->categories();
        if (!empty($categories)) {
            foreach ($categories as $category) {
                if($category['categoryName']===$product["category"]){
                    $output .= null;
                }
                else{
                    $output .= '  <option value="' . $category['categoryName'] . '">' . $category['categoryName'] . '</option>';
                }
                
            }
        }
        $output .= ' </select>
                                   

                                </div>
                                <div class="col-md-4 formPad">
                                <input type="text" id="price" name="price" class="form-control" placeholder="Product Price" value="' . $product["price"] . '">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        </div>
                        <div class=" col-md-2">
                        </div>
                        <div class=" buttons col-md-4">
                            <button name="submit" type="submit" class="btn"> <span><i class="fa fa-plus" aria-hidden="true"></i></span>&nbsp;Update Product</button>
                            <button style="background-color:#A8201A;" type="button" onclick="remove(' . $id . ')" class="btn"> <span><i class="fa fa-minus" aria-hidden="true"></i></span>&nbsp;Remove Product</button>
                        </div>
                    </div>
                            </form>
                    </div>
                ';
        echo $output;
    }
    function update($name)
    {
        if (isset($_POST['submit'])) {


            $this->load->model('Product_model');
	if (isset($_POST['submit'])) {
            $formArray = array (
                    'category' => implode(",", $this->input->post('roll')),
                    'name'=> $this->input->post('productname'),
                    'price'=>$this->input->post('price'),
                    'type'=>$this->input->post('type')
                );
                $this->Product_model->update($name, $formArray);
            }

            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/productScreenController');
        }
    }
    function delete($id)
    {
        $this->load->model('Product_model');
        $this->Product_model->deleteProduct($id);
        $this->session->set_flashdata('success', 'Record Deleted!');
        redirect(base_url() . 'index.php/productScreenController');
    }
    function add()
    {
        $this->load->model('Product_model');
         $formArray = array (
            'category' => implode(",", $this->input->post('roll')),
            'name'=> $this->input->post('productname'),
            'price'=>$this->input->post('price'),
            'type'=>$this->input->post('type')
        );
         if (isset($_FILES['product']['name'])) {
            $temp = end(explode(".", $_FILES["product"]["name"]));
            $size= $_FILES['product']['size'];
            $extension = strtolower($temp);
            if (($extension == "jpg" || "png" || "jpeg") && ($size < 50971520)){
                $image = $_FILES['product']['name'];
                $imagetmp = $_FILES['product']['tmp_name'];
                move_uploaded_file($imagetmp, "upload/$image");
                $formArray['images'] = $image;
                echo var_dump($imagetmp);
            }else{
                echo "wrong image extension";
            }
        }
       $this->Product_model->create($formArray);
        redirect(base_url() . 'index.php/HomeScreenController');
    }
    // category

    function addCategory()
    {
        $formArray = array();
        if (empty($this->input->post('categoryName'))) {
            echo "<script>window.open('index?EmptyCat= category field is empty','_self')</script>";
        } else {
            $this->load->model('Product_model');
            $formArray['categoryName'] = $this->input->post('categoryName');
            // echo  var_dump($formArray);
            $this->Product_model->createCategory($formArray);
            $this->session->set_flashdata('success', 'Record Added!');
            redirect(base_url() . 'index.php/productScreenController');
        }
    }
}

