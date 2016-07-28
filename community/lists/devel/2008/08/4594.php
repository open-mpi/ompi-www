<?
$subject_val = "[OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 07:22:18 2008" -->
<!-- isoreceived="20080821112218" -->
<!-- sent="Thu, 21 Aug 2008 07:22:09 -0400" -->
<!-- isosent="20080821112209" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] SM initialization race condition" -->
<!-- id="48AD4FE1.2060202_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] SM initialization race condition<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 07:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4593.php">Ralph Castain: "[OMPI devel] IOF redesign notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been seeing an intermittent (once every 4 hours looping on a quick 
<br>
initialization program) segv with the following stack trace.
<br>
<p>=&gt;[1] mca_btl_sm_add_procs(btl = 0xfffffd7ffdb67ef0, nprocs = 2U, procs 
<br>
= 0x591560, peers = 0x591580, reachability = 0xfffffd7fffdff000), line 
<br>
519 in &quot;btl_sm.c&quot;
<br>
&nbsp;&nbsp;[2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560, bml_endpoints 
<br>
= 0x591500, reachable = 0xfffffd7fffdff000), line 222 in &quot;bml_r2.c&quot;
<br>
&nbsp;&nbsp;[3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248 in 
<br>
&quot;pml_ob1.c&quot;
<br>
&nbsp;&nbsp;[4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested = 0, 
<br>
provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
<br>
&nbsp;&nbsp;[5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv = 0xfffffd7fffdff2e0), 
<br>
line 90 in &quot;pinit.c&quot;
<br>
&nbsp;&nbsp;[6] main(argc = 1, argv = 0xfffffd7fffdff318), line 82 in &quot;buffer.c&quot;
<br>
<p>I believe the problem is that mca_btl_sm_component.shm_fifo[j] contains 
<br>
uninitialized data causes the loop on line 504 in btl_sm.c to think that 
<br>
a remote rank has set its fifo address.
<br>
<p>Has anyone else seen the above happening?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4593.php">Ralph Castain: "[OMPI devel] IOF redesign notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
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
