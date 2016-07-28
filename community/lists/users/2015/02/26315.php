<?
$subject_val = "[OMPI users] How to disable the MCA MTL setting at run time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 14:45:53 2015" -->
<!-- isoreceived="20150211194553" -->
<!-- sent="Wed, 11 Feb 2015 11:45:52 -0800 (PST)" -->
<!-- isosent="20150211194552" -->
<!-- name="Avalon Johnson" -->
<!-- email="avalonjo_at_[hidden]" -->
<!-- subject="[OMPI users] How to disable the MCA MTL setting at run time" -->
<!-- id="alpine.LRH.2.00.1502111129520.27419_at_indigo.usc.edu" -->
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
<strong>Subject:</strong> [OMPI users] How to disable the MCA MTL setting at run time<br>
<strong>From:</strong> Avalon Johnson (<em>avalonjo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 14:45:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a cluster which is a combination of Myrinet and Infiniband nodes.
<br>
<p>We are using a common openmpi 1.8.4 software tree accessible to both set of nodes.
<br>
<p>Our Infiniband nodes do NOT have the libmyriexpress.so library installed (since it is not needed).
<br>
Likewise the Myrinet nodes do not have the OFED libraries installed.
<br>
<p><p>When running an MPI program on the Infiniband node, openmpi in trying to determine what transport methods are available, tries to load the libmyriexpress.so, and then complains that it is not found.
<br>
<p><p>I would like to disable this behavior. I had hoped to use the OMPI_MCA_mtl environment variable to do this.
<br>
But I unable to come up with a setting that accomplishes this. That is have OMPI_MCA_btl set to 'self,sm,openib,tcp' and no MCA mtl checked or used.
<br>
<p><p>For the equivalent problem on our Myrinet cluster I set OMPI_MCA_btl, to 'self,sm,tcp' and OMPI_MCA_mtl to 'mx'
<br>
<p>Does anyone know how to disable the MCA mtl at run time, since it's not needed on the Infiniband nodes?
<br>
<p><p>Thanks in advance.
<br>
<p>My apologies if this has been addressed before,  I did not find it when searching the list.
<br>
<p><p>Avalon Johnson 
<br>
ITS HPCC
<br>
USC
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;It takes a village ...&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
<li><strong>Reply:</strong> <a href="26317.php">Avalon Johnson: "Re: [OMPI users] How to disable the MCA MTL setting at run time"</a>
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
