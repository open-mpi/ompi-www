<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 15:55:04 2006" -->
<!-- isoreceived="20061116205504" -->
<!-- sent="Thu, 16 Nov 2006 15:54:56 -0500" -->
<!-- isosent="20061116205456" -->
<!-- name="Beth Tibbitts" -->
<!-- email="tibbitts_at_[hidden]" -->
<!-- subject="[OMPI devel] Building OpenMPI on windows" -->
<!-- id="OFC51C3F63.FFA370F2-ON85257228.0070A5E2-85257228.0072E4CC_at_us.ibm.com" -->
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
<strong>From:</strong> Beth Tibbitts (<em>tibbitts_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 15:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Tim Mattox: "[OMPI devel] IU's OMPI services will be down Dec. 19th 2006"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build OpenMPI on windows with cygwin, to at least be able to
<br>
demo the Eclipse PTP(Parallel Tools Platform)
<br>
on my laptop.
<br>
<p>I configured OpenMPI version 1.2 (openmpi-1.2b1) with the following
<br>
command:
<br>
./configure --with-devel-headers  --enable-mca-no-build=timer-windows
<br>
<p>then did make all and make install, which all seemed to finish ok
<br>
When i try to compile a small test mpi program I get a segfault
<br>
<p>$ mpicc mpitest.c
<br>
Signal:11 info.si_errno:0(No error) si_code:23()
<br>
Failing at addr:0x401a06
<br>
*** End of error message ***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15 [main] mpicc 7036 _cygtls::handle_exceptions: Error while dumping
<br>
state
<br>
&nbsp;(probably corrupted stack)
<br>
Segmentation fault (core dumped)
<br>
<p><p>...Beth
<br>
<p>Beth Tibbitts  (859) 243-4981  (TL 545-4981)
<br>
High Productivity Tools / Parallel Tools  <a href="http://eclipse.org/ptp">http://eclipse.org/ptp</a>
<br>
IBM T.J.Watson Research Center
<br>
Mailing Address:  IBM Corp., 455 Park Place, Lexington, KY 40511
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Tim Mattox: "[OMPI devel] IU's OMPI services will be down Dec. 19th 2006"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
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
