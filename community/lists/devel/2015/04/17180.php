<?
$subject_val = "[OMPI devel] 1.8.5rc1 is ready for testing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  5 17:42:34 2015" -->
<!-- isoreceived="20150405214234" -->
<!-- sent="Sun, 5 Apr 2015 14:42:30 -0700" -->
<!-- isosent="20150405214230" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.5rc1 is ready for testing" -->
<!-- id="A1436B51-2454-40D6-9E07-80663F1D0775_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.5rc1 is ready for testing<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-05 17:42:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usual place:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
<br>
<p>I'm happy to receive suggestions about the NEWS - here is what I have:
<br>
<p>1.8.5
<br>
-----
<br>
- Updated the internal HWLOC with several bug fixes
<br>
- Fixed several bugs in OpenSHMEM support
<br>
- Extended vader shared memory support to 32-bit architectures
<br>
- Fixed a bug in handling subarray datatypes
<br>
- Don't use inline functions with Clang compiler
<br>
- Multiple bug fixes for cleanup during finalize
<br>
&nbsp;&nbsp;in unusual situations
<br>
- Added support for TCP keepalive signals to ensure
<br>
&nbsp;&nbsp;timely termination when sockets between daemons
<br>
&nbsp;&nbsp;cannot be created (e.g., due to a firewall)
<br>
- Added MCA parameter to allow full use of a SLURM
<br>
&nbsp;&nbsp;allocation when started from a tool (supports LLNL
<br>
&nbsp;&nbsp;debugger)
<br>
- Fixed several bugs in the configure logic for PMI
<br>
&nbsp;&nbsp;and HWLOC
<br>
- Cleaned up documentation in a few places (e.g.,
<br>
&nbsp;&nbsp;MPI_Comm_split_type)
<br>
- Fixed prototypes for MPI_Barrier
<br>
- Fixed a number of one-sided bugs
<br>
- Fixed singleton MPI_Comm_spawn
<br>
- Fixed a number of minor issues with CUDA support,
<br>
&nbsp;&nbsp;including registering of shared memory
<br>
- Improved support for Cray
<br>
- Fixed performance regression introduced by
<br>
&nbsp;&nbsp;inadvertent default enabling of thread support
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17179.php">Rolf vandeVaart: "Re: [OMPI devel] Problems with some IBM neighbor tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17181.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17189.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Reply:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
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
