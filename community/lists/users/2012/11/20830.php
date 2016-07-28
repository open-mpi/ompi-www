<?
$subject_val = "[OMPI users] OpenMPI-1.6.3 &amp; MXM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 15:35:59 2012" -->
<!-- isoreceived="20121130203559" -->
<!-- sent="Fri, 30 Nov 2012 20:33:39 +0000" -->
<!-- isosent="20121130203339" -->
<!-- name="Konz, Jeffrey (SSA Solution Centers)" -->
<!-- email="jeffrey.konz_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.6.3 &amp;amp; MXM" -->
<!-- id="77486CDD5CFC9449BEE3C555886D8A90731EE172_at_G4W3213.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-1.6.3 &amp; MXM<br>
<strong>From:</strong> Konz, Jeffrey (SSA Solution Centers) (<em>jeffrey.konz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 15:33:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried building the latest OpenMPI-1.6.3 with MXM support and got this error:
<br>
<p><p><p>make[2]: Entering directory `Src/openmpi-1.6.3/ompi/mca/mtl/mxm'
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_cancel.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_component.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_endpoint.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_probe.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_recv.lo
<br>
<p>&nbsp;&nbsp;CC     mtl_mxm_send.lo
<br>
<p>mtl_mxm_send.c: In function 'ompi_mtl_mxm_send':
<br>
<p>mtl_mxm_send.c:96: error: 'mxm_wait_t' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:96: error: (Each undeclared identifier is reported only once
<br>
<p>mtl_mxm_send.c:96: error: for each function it appears in.)
<br>
<p>mtl_mxm_send.c:96: error: expected ';' before 'wait'
<br>
<p>mtl_mxm_send.c:104: error: 'MXM_REQ_FLAG_BLOCKING' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:118: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c:134: error: 'wait' undeclared (first use in this function)
<br>
<p>mtl_mxm_send.c: In function 'ompi_mtl_mxm_isend':
<br>
<p>mtl_mxm_send.c:183: error: 'MXM_REQ_FLAG_SEND_SYNC' undeclared (first use in this function)
<br>
<p>make[2]: *** [mtl_mxm_send.lo] Error 1
<br>
<p><p><p><p><p>Our OFED is 1.5.3 and our MXM version is 1.0.601.
<br>
<p><p><p>Thanks,
<br>
<p><p><p>-Jeff
<br>
<p><p><p>/**********************************************************/
<br>
<p>/* Jeff Konz                          jeffrey.konz_at_[hidden] */
<br>
<p>/* Solutions Architect                   HPC Benchmarking */
<br>
<p>/* Americas Shared Solutions Architecture (SSA)           */
<br>
<p>/* Hewlett-Packard Company                                */
<br>
<p>/* Office: 248-491-7480              Mobile: 248-345-6857 */
<br>
<p>/**********************************************************/
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20831.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20829.php">Shane Hart: "Re: [OMPI users] MPI_Allreduce with F90 Handles"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
<li><strong>Reply:</strong> <a href="20834.php">Joseph Farran: "Re: [OMPI users] OpenMPI-1.6.3 &amp; MXM"</a>
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
