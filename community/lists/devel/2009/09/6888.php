<?
$subject_val = "[OMPI devel] bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 19:38:34 2009" -->
<!-- isoreceived="20090924233834" -->
<!-- sent="Thu, 24 Sep 2009 16:39:29 -0700" -->
<!-- isosent="20090924233929" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] bug?" -->
<!-- id="4ABC0331.30604_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] bug?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 19:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I assume this is a bug?
<br>
<p><p><p>% mpirun -np 2 -slot-list 1,3 hostname
<br>
[saem9:10337] [[455,0],0] ORTE_ERROR_LOG: Not found in file 
<br>
base/odls_base_default_fns.c at line 875
<br>
[saem9:10337] *** Process received signal ***
<br>
[saem9:10337] Signal: Segmentation fault (11)
<br>
[saem9:10337] Signal code: Address not mapped (1)
<br>
[saem9:10337] Failing at address: 0x4c
<br>
[saem9:10337] [ 0] [0xffffe600]
<br>
[saem9:10337] [ 1] 
<br>
/home/eugene/CTperf/test-CT821/paff_bug2/src/myopt/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0x78a) 
<br>
[0xf7f8c206]
<br>
[saem9:10337] [ 2] 
<br>
/home/eugene/CTperf/test-CT821/paff_bug2/src/myopt/lib/openmpi/mca_plm_rsh.so 
<br>
[0xf7d13564]
<br>
[saem9:10337] [ 3] mpirun [0x804b49d]
<br>
[saem9:10337] [ 4] mpirun [0x804a456]
<br>
[saem9:10337] [ 5] /lib/libc.so.6(__libc_start_main+0xdc) [0xf7d348ac]
<br>
[saem9:10337] [ 6] mpirun(orte_daemon_recv+0x201) [0x804a3b1]
<br>
[saem9:10337] *** End of error message ***
<br>
Segmentation fault
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Previous message:</strong> <a href="6887.php">Shaun Jackman: "Re: [OMPI devel] MPI_Request_get_status and opal_progress [PATCH]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
<li><strong>Reply:</strong> <a href="6889.php">Ralph Castain: "Re: [OMPI devel] bug?"</a>
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
