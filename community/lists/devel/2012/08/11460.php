<?
$subject_val = "[OMPI devel] trunk broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 10:50:38 2012" -->
<!-- isoreceived="20120830145038" -->
<!-- sent="Thu, 30 Aug 2012 10:50:29 -0400" -->
<!-- isosent="20120830145029" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk broken?" -->
<!-- id="503F7DB5.4050005_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk broken?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 10:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="11459.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<li><strong>Reply:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trunk broken?  Last night, Oracle's MTT trunk runs all came up empty 
<br>
handed.  E.g.,
<br>
<p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: (nil)
<br>
[ 0] [0xffffe600]
<br>
[ 1] /lib/libc.so.6(strlen+0x33) [0x3fa0a3]
<br>
[ 2] /lib/libc.so.6(__strdup+0x25) [0x3f9de5]
<br>
[ 3] .../lib/openmpi/mca_db_hash.so [0xf7bbdd34]
<br>
[ 4] .../lib/libmpi.so.0(orte_util_decode_pidmap+0x5f4) [0xf7e46654]
<br>
[ 5] .../lib/libmpi.so.0(orte_util_nidmap_init+0x1b4) [0xf7e46d54]
<br>
[ 6] .../lib/openmpi/mca_ess_env.so [0xf7bc4f62]
<br>
[ 7] .../lib/libmpi.so.0(orte_init+0x160) [0xf7e2d250]
<br>
[ 8] .../lib/libmpi.so.0(ompi_mpi_init+0x163) [0xf7de2133]
<br>
[ 9] .../lib/libmpi.so.0(MPI_Init+0x13f) [0xf7dfb6df]
<br>
[10] ./c_ring [0x8048759]
<br>
[11] /lib/libc.so.6(__libc_start_main+0xdc) [0x3a0dec]
<br>
[12] ./c_ring [0x80486a1]
<br>
*** End of error message ***
<br>
<p>r27182.  The previous night, with r27175, ran fine.  Quick peek at 27178 
<br>
seems fine (I think).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<li><strong>Previous message:</strong> <a href="11459.php">Eugene Loh: "Re: [OMPI devel] r27078 and OMPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
<li><strong>Reply:</strong> <a href="11461.php">Ralph Castain: "Re: [OMPI devel] trunk broken?"</a>
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
