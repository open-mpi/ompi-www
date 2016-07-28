<?
$subject_val = "[OMPI users] parameters for newer IB card on older OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 15:14:13 2010" -->
<!-- isoreceived="20100210201413" -->
<!-- sent="Wed, 10 Feb 2010 15:14:06 -0500" -->
<!-- isosent="20100210201406" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] parameters for newer IB card on older OpenMPI" -->
<!-- id="E14980C5-4CBC-4304-8A76-9AE6342EE8A6_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] parameters for newer IB card on older OpenMPI<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 15:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12073.php">Addepalli, Srirangam V: "[OMPI users] orte-checkpoint hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We added some Qlogic IB to our system that is newer than our MPI that  
<br>
we are running (1.3.2)  When we run we get an (expected) warning about  
<br>
tuning options:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: No preset parameters were found for the device that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:            nyx0878.engin.umich.edu
<br>
&nbsp;&nbsp;&nbsp;Device name:           qib0
<br>
&nbsp;&nbsp;&nbsp;Device vendor ID:      0x1175
<br>
&nbsp;&nbsp;&nbsp;Device vendor part ID: 29474
<br>
<p>Default device parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_device_param_files MCA parameter to set values for your
<br>
device.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found to 0.
<br>
<p><p>Is there any reason I can not unpack a newer MPI and backport the  
<br>
config for these newer cards to this version of openMPI?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12073.php">Addepalli, Srirangam V: "[OMPI users] orte-checkpoint hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Reply:</strong> <a href="12075.php">Jeff Squyres: "Re: [OMPI users] parameters for newer IB card on older OpenMPI"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
