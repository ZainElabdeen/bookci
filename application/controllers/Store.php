<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {
    
    private function _getData($id)
    {
        // Select row from products table where id = $id
        $query = $this->db->get_where('products', ['id' => $id]);
        $result = $query->row_array();
        return $result;
    }

    public function products($id)
    {
        // Create view data array
        $data = [];

        // Load product data using id
        $product = $this->_getData($id);
        
        // Place product inside data
        $data['product'] = $product;
        
        // Pass the data into the view
        $this->load->view('product', $data);
    }
    
    public function insert()
    {
        // Create a array of products
        $products = [];
        
        // Add products to array
        $products[] = ['name' => 'Ball', 'price' => 2];
        $products[] = ['name' => 'Glove', 'price' => 20];
        
        // Insert products one by one
        foreach ($products as $product) {
            $result = $this->db->insert('products', $product);
            if ($result) {
                echo 'Inserted product: ' . $product['name'];
            } else {
                echo 'Problem inserting product: ' . $product['name'];
            }
        }
    }
    
}