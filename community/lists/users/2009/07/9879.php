<?
$subject_val = "[OMPI users] Is there any correctness tests for openmpi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 07:04:26 2009" -->
<!-- isoreceived="20090708110426" -->
<!-- sent="Wed, 08 Jul 2009 20:04:16 +0900 (JST)" -->
<!-- isosent="20090708110416" -->
<!-- name="Nobuyuki Yamaguchi" -->
<!-- email="nyama_at_[hidden]" -->
<!-- subject="[OMPI users] Is there any correctness tests for openmpi?" -->
<!-- id="20090708.200416.02837560.nyama_at_opentech.co.jp" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Is there any correctness tests for openmpi?<br>
<strong>From:</strong> Nobuyuki Yamaguchi (<em>nyama_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 07:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9880.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9878.php">Jose Gracia: "Re: [OMPI users] users Digest, Vol 1275, Issue 2; btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've rebuilt openmpi-1.0.7 included in OFED-1.4 package on our own
<br>
32bit PPC machine succesfully.  The OS is OpenSUSE 11.1.  Some simple
<br>
tests are OK and mpich-test provided by ANL is also except for the
<br>
MPI_Cancel function.  But I cannot find any good correctness test
<br>
&nbsp;for openmpi covering MPI-2 part.
<br>
<p>As mentioned here, ompi-test suites are not accessible from outside of
<br>
the developer's group.  If so, how can I know whether it's working
<br>
right or not?
<br>
<p>I'm new to MPI.  Let me know what is the typical way to check
<br>
openmpi's health on a certain environment.
<br>
<p>Thanks,
<br>
nobu
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9880.php">Lengyel, Florian: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<li><strong>Previous message:</strong> <a href="9878.php">Jose Gracia: "Re: [OMPI users] users Digest, Vol 1275, Issue 2; btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp"</a>
<!-- nextthread="start" -->
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
