<?
$subject_val = "[Open MPI Announce] Open MPI v1.4.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 20:49:02 2012" -->
<!-- isoreceived="20120215014902" -->
<!-- sent="Tue, 14 Feb 2012 19:48:49 -0600" -->
<!-- isosent="20120215014849" -->
<!-- name="Brad Benton" -->
<!-- email="brad.benton_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.4.5 released" -->
<!-- id="OF6650640A.2D39636F-ON862579A5.0009DE1A-862579A5.0009F75A_at_us.ibm.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.4.5 released<br>
<strong>From:</strong> Brad Benton (<em>brad.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 20:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/03/0047.php">Jeffrey Squyres: "[Open MPI Announce] Open MPI v1.5.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/10/0045.php">George Bosilca: "[Open MPI Announce] Open MPI 1.4.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and 
<br>
industry partners, is pleased to announce the release of Open MPI version 
<br>
1.4.5. This release is mainly a bug fix release over the v1.4.4 release. 
<br>
We strongly recommend that all users upgrade to version 1.4.5 if possible.
<br>
<p>Version 1.4.5 can be downloaded from the main Open MPI web site or any of 
<br>
its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.4.5 as compared to v1.4.4
<br>
- Fixed the --disable-memory-manager configure switch.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix typos in code and man pages.  Thanks to Fujitsu for these fixes.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Improve management of the registration cache; when full, try freeing
<br>
&nbsp;&nbsp;old entries and attempt to re-register.
<br>
- Fixed a data packing pointer alignment issue.  Thanks to Fujitsu
<br>
&nbsp;&nbsp;for the patch.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Add ability to turn off warning about having the shared memory backing
<br>
&nbsp;&nbsp;store over a networked filesystem.  Thanks to Chris Samuel for this
<br>
&nbsp;&nbsp;suggestion.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Removed an unnecessary memmove() and plugged a couple of small memory 
<br>
leaks
<br>
&nbsp;&nbsp;in the openib OOB connection setup code.
<br>
- Fixed some QLogic bugs. Thanks to Mark Debbage from QLogic for the 
<br>
patches.
<br>
- Fixed problem with MPI_IN_PLACE and other sentinel Fortran constants
<br>
&nbsp;&nbsp;on OS X.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix SLURM cpus-per-task allocation.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix the datatype engine for when data left over from the previous
<br>
&nbsp;&nbsp;pack was larger than the allowed space in the pack buffer. Thanks to
<br>
&nbsp;&nbsp;Yuki Matsumoto and Takahiro Kawashima for the bug report and the
<br>
&nbsp;&nbsp;patch.
<br>
- Fix Fortran value for MPI_MAX_PORT_NAME.  Thanks to Enzo Dari for
<br>
&nbsp;&nbsp;raising the issue.
<br>
- Workaround an Intel compiler v12.1.0 2011.6.233 vector optimization
<br>
&nbsp;&nbsp;bug.
<br>
- Fix issues on Solaris with the openib BTL.
<br>
- Fixes for the Oracle Studio 12.2 Fortran compiler.
<br>
- Update iWARP parameters for the Intel NICs.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
- Fix obscure cases where MPI_ALLGATHER could crash.  Thanks to Andrew
<br>
&nbsp;&nbsp;Senin for reporting the problem.
<br>
&nbsp;&nbsp;(** also to appear in 1.5.5)
<br>
<p><pre>
--
Brad Benton
Linux Technology Center, IBM 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/03/0047.php">Jeffrey Squyres: "[Open MPI Announce] Open MPI v1.5.5 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2011/10/0045.php">George Bosilca: "[Open MPI Announce] Open MPI 1.4.4 released"</a>
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
