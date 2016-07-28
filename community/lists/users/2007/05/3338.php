<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 07:09:33 2007" -->
<!-- isoreceived="20070529110933" -->
<!-- sent="Tue, 29 May 2007 13:14:14 +0200" -->
<!-- isosent="20070529111414" -->
<!-- name="Marcin Skoczylas" -->
<!-- email="Marcin.Skoczylas_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault in MPI_Barrier" -->
<!-- id="465C0B06.2010502_at_lnl.infn.it" -->
<!-- charset="ISO-8859-2" -->
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
<strong>From:</strong> Marcin Skoczylas (<em>Marcin.Skoczylas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-29 07:14:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
<li><strong>Previous message:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>recently my administrator made some changes on our cluster and now I 
<br>
have a crash during MPI_Barrier:
<br>
<p>[our-host:12566] *** Process received signal ***
<br>
[our-host:12566] Signal: Segmentation fault (11)
<br>
[our-host:12566] Signal code: Address not mapped (1)
<br>
[our-host:12566] Failing at address: 0x4
<br>
[our-host:12566] [ 0] /lib/tls/libpthread.so.0 [0xa22f80]
<br>
[our-host:12566] [ 1] 
<br>
/usr/lib/openmpi/mca_btl_sm.so(mca_btl_sm_component_progress+0x68f) 
<br>
[0xcd86d7]
<br>
[our-host:12566] [ 2] 
<br>
/usr/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress+0x32) [0xcb7e3a]
<br>
[our-host:12566] [ 3] /usr/lib/libopen-pal.so.0(opal_progress+0xed) 
<br>
[0xc2b221]
<br>
[our-host:12566] [ 4] /usr/lib/libmpi.so.0 [0x3aecc5]
<br>
[our-host:12566] [ 5] /usr/lib/libmpi.so.0(ompi_request_wait_all+0xec) 
<br>
[0x3ae784]
<br>
[our-host:12566] [ 6] 
<br>
/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x77) 
<br>
[0xd025bb]
<br>
[our-host:12566] [ 7] 
<br>
/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling+0xde) 
<br>
[0xd05e3a]
<br>
[our-host:12566] [ 8] 
<br>
/usr/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_dec_fixed+0x44) 
<br>
[0xd027d8]
<br>
[our-host:12566] [ 9] /usr/lib/libmpi.so.0(PMPI_Barrier+0x176) [0x3c0cea]
<br>
<p>Actually, I made small investigation and I realised that:
<br>
<p>[user_at_our-host]$ ssh our-host
<br>
ssh(12704) ssh: connect to host our-host port 22: No route to host
<br>
<p>that could be the thing, I'm going to talk with my admin soon about this 
<br>
routing change, however if it is really this problem, shouldn't it be 
<br>
recognised during startup, f.e. in MPI_Init? Actually, I'm not sure... 
<br>
your comments?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;greetings, Marcin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3339.php">smairal_at_[hidden]: "[OMPI users] OpenMPI on shared memory."</a>
<li><strong>Previous message:</strong> <a href="3337.php">Terry Frankcombe: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
<li><strong>Reply:</strong> <a href="3345.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] segmentation fault in MPI_Barrier"</a>
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
