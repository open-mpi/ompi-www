<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep 23 07:15:04 2007" -->
<!-- isoreceived="20070923111504" -->
<!-- sent="Sun, 23 Sep 2007 13:14:56 +0200 (IST)" -->
<!-- isosent="20070923111456" -->
<!-- name="David Erukhimovich" -->
<!-- email="daviderukh_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with adding new component" -->
<!-- id="010709231313570.4940_at_mos204.cs.huji.ac.il" -->
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
<strong>From:</strong> David Erukhimovich (<em>daviderukh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-23 07:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<li><strong>Previous message:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<li><strong>Reply:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I created a new component by modifying round_robin (on rmaps) a bit. I 
<br>
compiled it using autogen. configure and make in the development (1.3) 
<br>
version and it works fine.
<br>
Now I tried to copy the the new library I made (.so and .la files) to the 
<br>
lib folder of a stable release (1.2.3).
<br>
the release sees the new component but it doesn't work. the output when I 
<br>
run the following is:
<br>
<p>&nbsp;&nbsp;$ mpirun --mca rmaps mos_round_robin --mca rmaps_base_verbose 1 hostname
<br>
[mos204:04929] Scheduling policy: unspec
<br>
[mos204:04929] orte:base:open: querying component mos_round_robin
<br>
[mos204:04929] orte:base:open: component mos_round_robin does NOT want to 
<br>
be considered for selection
<br>
[mos204:04929] orte:rmaps:base:map: no components available!
<br>
[mos204:04929] [0,0,0] ORTE_ERROR_LOG: Not found in file 
<br>
base/rmaps_base_map_job.c at line 201
<br>
[mos204:04929] *** Process received signal ***
<br>
[mos204:04929] Signal: Segmentation fault (11)
<br>
[mos204:04929] Signal code: Address not mapped (1)
<br>
[mos204:04929] Failing at address: 0xf7f1eb
<br>
[mos204:04929] [ 0] [0xffffe440]
<br>
[mos204:04929] [ 1] /lib/i686/cmov/libc.so.6(vasprintf+0xbc) [0xb7d8eb6c]
<br>
[mos204:04929] [ 2] 
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0 [0xb7f18572]
<br>
[mos204:04929] [ 3] 
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-pal.so.0(opal_output+0x1e) 
<br>
[0xb7f18a5e]
<br>
[mos204:04929] [ 4] 
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/libopen-rte.so.0(orte_rmaps_base_map_job+0x5f6) 
<br>
[0xb7f870b6]
<br>
[mos204:04929] [ 5] 
<br>
/cs/mosna/daviderukh/openmpi-install2/lib/openmpi/mca_rmgr_urm.so 
<br>
[0xb7c7c368]
<br>
[mos204:04929] [ 6] mpirun(orterun+0x3d9) [0x804a1e9]
<br>
[mos204:04929] [ 7] mpirun(main+0x22) [0x8049e06]
<br>
[mos204:04929] [ 8] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe0) 
<br>
[0xb7d44050]
<br>
[mos204:04929] [ 9] mpirun [0x8049d81]
<br>
[mos204:04929] *** End of error message ***
<br>
Segmentation fault
<br>
<p><p>So... what am I doing wrong and how can I fix it?
<br>
<p>Thank you
<br>
--David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<li><strong>Previous message:</strong> <a href="2358.php">Tim Prins: "Re: [OMPI devel] Malloc segfaulting?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
<li><strong>Reply:</strong> <a href="2360.php">Tim Mattox: "Re: [OMPI devel] Problem with adding new component"</a>
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
