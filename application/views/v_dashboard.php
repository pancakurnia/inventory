<script type="text/javascript">
    function select_data($material_id,$material_code,$material_name,$material_desc)
    {
        $('#id_mat').val($material_id);
        $('#kd_mat').val($material_code);
        $('#nama_mat').val($material_name);
        $('#des_mat').val($material_desc);
    }
</script>


<div class="container">
    <?php echo $this->session->flashdata('mess_sukses');?>
</div>

<button class="btn btn-default btn-info" data-toggle="modal" data-target="#myModal1" type="submit">
    <span class="glyphicon glyphicon-plus"></span> Tambah Data
</button>


<!-- Table Material -->
<br>
<br>
<table class="table table-striped table-bordered" id="material">
    <thead>
        <tr>
            <th>No</th>            
            <th>Kode Material</th>
            <th>Material</th>
            <th>Deskripsi</th>
            <th>Created date</th>
            <th>Created by</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $id =1;
            foreach ($menu as $row) {
        ?>
        <tr>
            <td><?php echo $id++;?></td>                
            <td><?php echo $row->material_code;?></td>
            <td><?php echo $row->material_name;?></td>
            <td><?php echo $row->material_desc;?></td>
            <td><?php echo $row->material_created_date;?></td>
            <td><?php echo $row->material_created_by;?></td>
            <td>
                <a style="cursor: pointer: " onclick="select_data(
                '<?=$row->material_id?>',
                '<?=$row->material_code?>',
                '<?=$row->material_name?>',
                '<?=$row->material_desc?>'
                );" data-toggle="modal" data-target="#myModal"><i class="glyphicon glyphicon-pencil"></i></a>
                <a href="#"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
    <?php } ?>       
    </tbody>
</table>
<!--End Material-->



<!--Modal Bootstrap Edit-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Ubah Data Inventori</h4>
                </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">ID Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="id_mat" aria-describedby="emailHelp" placeholder="Material ID" disabled="">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Kode Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="kd_mat" aria-describedby="emailHelp" placeholder="Material Code">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Nama Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="nama_mat" aria-describedby="emailHelp" placeholder="Material Code">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" id="des_mat" aria-describedby="emailHelp" placeholder="Description">
                                </div>
                                <br>
                            </div>
                        </form>
                    </div>
                    <br>
                    <br>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Ubah</button>
                    </div>
                </div>
        </div>
    </div>
</div>
<!--End Modal Bootstrap Edit-->



<!--Modal Bootstrap Tambah-->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="gridSystemModalLabel">Tambah Data Inventori</h4>
                </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url();?>c_dashboard/addMaterial">
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Kode Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="kd_mat" name="kdmat"  placeholder="Material Code">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Nama Material</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nama_mat" name="namamat" placeholder="Material Code">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Deskripsi</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="des_mat" name="desmat" placeholder="Description">
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Tanggal Catat</label>
                                </div>
                                  <?php
                                    $tgl = date('Y-m-d h:i:s');
                                   ?>
                                <div class="col-md-6" id>
                                    <div class='input-group date'>
                                        <input type="text" class="form-control" id="tgl_mat" name="tglmat" value="<?php echo $tgl;?>">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="col-md-4">
                                    <label for="exampleInputEmail1">Tanggal Update</label>
                                </div>
                                <div class="col-md-6" id>
                                  
                                    <div class='input-group date'>
                                        <input type="text" class="form-control" id="upd_mat" name="updmat" value="<?php echo $tgl;?>"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <br>
                    <br>
                <div class="modal-footer">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!--End Modal Bootstrap Tambah-->


