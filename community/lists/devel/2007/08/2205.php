<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 09:39:05 2007" -->
<!-- isoreceived="20070823133905" -->
<!-- sent="Thu, 23 Aug 2007 15:38:58 +0200" -->
<!-- isosent="20070823133858" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="[OMPI devel] MX/BTL initialization issue" -->
<!-- id="46CD8DF2.2050002_at_cs.vu.nl" -->
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
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 09:38:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am currently working on an app that is to be run at multiple
<br>
clusters simultaneously, each with a private Myri-10G network
<br>
(see also my recent mail to the users list, 2007-08-21:
<br>
&quot;MX/BTL eager_limit/min_send_size&quot;).
<br>
<p>Simultaneous use of the MX and TCP BTL used to work fine after a
<br>
patch r14963 by George Bosilca, but in latest ompi revisions
<br>
I am getting the initialization crash shown below in case I start
<br>
the app on multiple clusters with the MX BTL enabled.  After some
<br>
further searching among the revisions since r14963, the problem
<br>
appears to occur consistently as of revision r15011 (related to
<br>
the mutex implementation).  Maybe someone could have a look?
<br>
If you need more info, just let me know.
<br>
<p>Thanks!
<br>
Kees Verstoep
<br>
<p>-----
<br>
[node010:11628] *** Process received signal ***
<br>
[node010:11628] Signal: Segmentation fault (11)
<br>
[node010:11628] Signal code: Address not mapped (1)
<br>
[node010:11628] Failing at address: 0xc0
<br>
[node010:11628] [ 0] /lib64/tls/libpthread.so.0 [0x38cf60c4f0]
<br>
[node010:11628] [ 1] 
<br>
/usr/local/package/openmpi-trunk/r15011/lib/openmpi/mca_btl_mx.so(mca_btl_mx_add_procs+0x3f8) 
<br>
[0x2b5008abbb04]
<br>
[node010:11628] [ 2] 
<br>
/usr/local/package/openmpi-trunk/r15011/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x2d2) 
<br>
[0x2b50089b4acf]
<br>
[node010:11628] [ 3] 
<br>
/usr/local/package/openmpi-trunk/r15011/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x10f) 
<br>
[0x2b5008566ccd]
<br>
[node010:11628] [ 4] 
<br>
/usr/local/package/openmpi-trunk/default/lib/libmpi.so.0(ompi_mpi_init+0x9de) 
<br>
[0x2b5005d04426]
<br>
[node010:11628] [ 5] 
<br>
/usr/local/package/openmpi-trunk/default/lib/libmpi.so.0(MPI_Init+0x159) 
<br>
[0x2b5005d4b5fd]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2206.php">Terry D. Dontje: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
<li><strong>Previous message:</strong> <a href="2204.php">Rainer Keller: "Re: [OMPI devel] Potential issue with PERUSE_COMM_MSG_MATCH_POSTED_REQ event called for unexpected matches"</a>
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
