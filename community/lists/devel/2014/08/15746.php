<?
$subject_val = "[OMPI devel] segfault in openib component on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 17:19:52 2014" -->
<!-- isoreceived="20140828211952" -->
<!-- sent="Thu, 28 Aug 2014 16:19:46 -0500" -->
<!-- isosent="20140828211946" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="[OMPI devel] segfault in openib component on trunk" -->
<!-- id="53FF9CF2.2080409_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] segfault in openib component on trunk<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 17:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
we are having recently problems running trunk with openib component 
<br>
enabled on one of our clusters. The problem occurs right in the 
<br>
initialization part, here is the stack right before the segfault:
<br>
<p>---snip---
<br>
(gdb) where
<br>
#0  mca_btl_openib_tune_endpoint (openib_btl=0x762a40, 
<br>
endpoint=0x7d9660) at btl_openib.c:470
<br>
#1  0x00007f1062f105c4 in mca_btl_openib_add_procs (btl=0x762a40, 
<br>
nprocs=2, procs=0x759be0, peers=0x762440, reachable=0x7fff22dd16f0) at 
<br>
btl_openib.c:1093
<br>
#2  0x00007f106316102c in mca_bml_r2_add_procs (nprocs=2, 
<br>
procs=0x759be0, reachable=0x7fff22dd16f0) at bml_r2.c:201
<br>
#3  0x00007f10615c0dd5 in mca_pml_ob1_add_procs (procs=0x70dc00, 
<br>
nprocs=2) at pml_ob1.c:334
<br>
#4  0x00007f106823ed84 in ompi_mpi_init (argc=1, argv=0x7fff22dd1da8, 
<br>
requested=0, provided=0x7fff22dd184c) at runtime/ompi_mpi_init.c:790
<br>
#5  0x00007f1068273a2c in MPI_Init (argc=0x7fff22dd188c, 
<br>
argv=0x7fff22dd1880) at init.c:84
<br>
#6  0x00000000004008e7 in main (argc=1, argv=0x7fff22dd1da8) at 
<br>
hello_world.c:13
<br>
---snip---
<br>
<p><p>in line 538 of the file containing the mca_btl_openib_tune_endpoint 
<br>
routine, the strcmp operation fails, because  recv_qps is a NULL pointer.
<br>
<p><p>---snip---
<br>
<p>if(0 != strcmp(mca_btl_openib_component.receive_queues, recv_qps)) {
<br>
<p>---snip---
<br>
<p>Does anybody have an idea on what might be going wrong and how to 
<br>
resolve it? Just to confirm, everything works perfectly with the 1.8 
<br>
series on that very same  cluster
<br>
<p>Thanks
<br>
Edgar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15747.php">Edgar Gabriel: "Re: [OMPI devel] segfault in openib component on trunk"</a>
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
