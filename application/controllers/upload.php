 <?php echo form_open_multipart('karlwtf/do_upload'); ?>
    Select image to upload:
    <input type="file" name="userfile">
    <input type="submit" value="upload" name="upload" align="left">
    </form>
      <?php echo form_close();?>


<?php


function do_upload()
{
if($this->input->post('upload'))
{
$config['upload_path'] = './uploads/';
$config['allowed_types'] = 'gif|jpg|png|jpeg';
$config['max_size']    = '5000';
$config['max_width']  = '5000';
$config['max_height']  = '5000';
$this->load->library('upload', $config);
if ( ! $this->upload->do_upload())
{
$error = array('error' => $this->upload->display_errors());
//$this->load->view('editprofile', $error);
//print_r($post);
}

else
{
$data=$this->upload->data();
$this->thumb($data);
$file=array(
'img_name'=>$data['raw_name'],
'thumb_name'=>$data['raw_name'].'_thumb',
'ext'=>$data['file_ext']
);
$this->databasety->add_image($file);

$user2=$this->databasety->printfeeds();
		//$data=array();

$data = array('upload_data' => $this->upload->data(),'comments'=> $user2);
$this->load->view('profile', $data);
}
}
else
{
redirect(site_url('upload'));
}
}










models

 public function add_image($data)
            {
            $id= $this->session->userdata('id');
            $this->db->where('id', $id);
            $this->db->update('home',$data);
            }





            <?php echo base_url('uploads/'.$result['img_name'].$result['ext']);?>?>


database

image_id
img_name
thumb_name
ext 
