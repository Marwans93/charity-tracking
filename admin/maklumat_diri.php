
<!-- ##################################################MAKLUMAT PENGUNA##################################################### -->
<?php
        $user = "select * from users where email = '$email'";
        $q = mysql_query($user) or die (mysql_error());
        $dataUser = mysql_fetch_array($q);
    ?>

<center>
<section id="content">
    <div class="container">
            <div class="col-lg-4">
                <div class="pricing-box-alt special">
                    <div class="pricing-heading">
                        <h3>User  <strong>Information</strong></h3>
                    </div>
                    <div class="pricing-terms">
                        <h6><font face="Arial, Helvetica, sans-serif" size="2" ><?php echo $email;?></font></h6>
                    </div>
                    <div class="pricing-content">
                        <ul>
                            <li><i class="icon-ok"></i> <font face="Arial, Helvetica, sans-serif" size="2" ><?php echo $name;?></li>
                            <li><i class="icon-ok"></i><font face="Arial, Helvetica, sans-serif" size="2" ><?php echo $dataUser['fon'];?></li>
                        </ul>
                    </div>
                    <div class="pricing-action">
                        <a href="../user/proses_log_keluar.php" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> LOGOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</center>
    <!-- #################################################TUTUP MAKLUMAT PENGGUNA###################################################### -->