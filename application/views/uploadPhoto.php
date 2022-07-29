<?php $this->load->view('include/header'); ?>
<div class="upload">
            <form action="<?= base_url("createPost") ?>" method="POST">
                <table class="table">
                    <tbody>
                            <tr><td>Create Post</td><td></td></tr>
                            <tr>
                                <td>Select Post</td>
                                <td><input type="file" name="user-photo" id=""></td>
                            </tr>
                            <tr>
                                <td>Few Words</td>
                                <td><input type="text" name="desc" id=""></td>
                            </tr>
                    </tbody>
                </table>
                <input type="submit" name="submit" value="Post" class="submitbtn">
            </form>
    
</div>
<?php  $this->load->view('include/footer'); ?>
