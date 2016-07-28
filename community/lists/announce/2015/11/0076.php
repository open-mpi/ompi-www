<?
$subject_val = "[Open MPI Announce] v1.10.1 Released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 22:11:26 2015" -->
<!-- isoreceived="20151104031126" -->
<!-- sent="Tue, 3 Nov 2015 19:11:20 -0800" -->
<!-- isosent="20151104031120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] v1.10.1 Released" -->
<!-- id="C29FE5E3-23B7-4376-AD11-D409EAD04D1B_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] v1.10.1 Released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-03 22:11:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/10/0075.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI State of the Union BOF @SC15"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.10.1. 
<br>
v1.10.1 is a bug release and expected to be the final installment in the 1.10 series. All users are therefore encouraged to upgrade to v1.10.1 when possible. 
<br>
Version 1.10.1 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
1.10.1
<br>
------
<br>
<p>- Fix use of MPI_LB and MPI_UB in subarray and darray datatypes.
<br>
&nbsp;&nbsp;Thanks to Gus Correa and Dimitar Pashov for pointing out the issue.
<br>
- Minor updates to mpi_show_mpi_alloc_mem_leaks and
<br>
&nbsp;&nbsp;ompi_debug_show_handle_leaks functionality.
<br>
- Fix segv when invoking non-blocking reductions with a user-defined
<br>
&nbsp;&nbsp;operation.  Thanks to Rupert Nash and Georg Geiser for identifying
<br>
&nbsp;&nbsp;the issue.
<br>
- No longer probe for PCI topology on Solaris (unless running as root).
<br>
- Fix for Intel Parallel Studio 2016 ifort partial support of the
<br>
&nbsp;&nbsp;!GCC$ pragma.  Thanks to Fabrice Roy for reporting the problem.
<br>
- Bunches of Coverity / static analysis fixes.
<br>
- Fixed ROMIO to look for lstat in &lt;sys/stat.h&gt;.  Thanks to William
<br>
&nbsp;&nbsp;Throwe for submitting the patch both upstream and to Open MPI.
<br>
- Fixed minor memory leak when attempting to open plugins.
<br>
- Fixed type in MPI_IBARRIER C prototype.  Thanks to Harald Servat for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
- Add missing man pages for MPI_WIN_CREATE_DYNAMIC, MPI_WIN_ATTACH,
<br>
&nbsp;&nbsp;MPI_WIN_DETACH, MPI_WIN_ALLOCATE, MPI_WIN_ALLOCATE_SHARED.
<br>
- When mpirun-launching new applications, only close file descriptors
<br>
&nbsp;&nbsp;that are actually open (resulting in a faster launch in some
<br>
&nbsp;&nbsp;environments).
<br>
- Fix &quot;test ==&quot; issues in Open MPI's configure script.  Thank to Kevin
<br>
&nbsp;&nbsp;Buckley for pointing out the issue.
<br>
- Fix performance issue in usnic BTL: ensure progress thread is
<br>
&nbsp;&nbsp;throttled back to not aggressively steal CPU cycles.
<br>
- Fix cache line size detection on POWER architectures.
<br>
- Add missing #include in a few places.  Thanks to Orion Poplawski for
<br>
&nbsp;&nbsp;supplying the patch.
<br>
- When OpenSHMEM building is disabled, no longer install its header
<br>
&nbsp;&nbsp;files, help files, or man pages.  Add man pages for oshrun, oshcc,
<br>
&nbsp;&nbsp;and oshfort.
<br>
- Fix mpi_f08 implementations of MPI_COMM_SET_INFO, and profiling
<br>
&nbsp;&nbsp;versions of MPI_BUFFER_DETACH, MPI_WIN_ALLOCATE,
<br>
&nbsp;&nbsp;MPI_WIN_ALLOCATE_SHARED, MPI_WTICK, and MPI_WTIME.
<br>
- Add orte_rmaps_dist_device MCA param, allowing users to map near a
<br>
&nbsp;&nbsp;specific device.
<br>
- Various updates/fixes to the openib BTL.
<br>
- Add missing defaults for the Mellanox ConnectX 3 card to the openib BTL.
<br>
- Minor bug fixes in the OFI MTL.
<br>
- Various updates to Mellanox's MXM, hcoll, and FCA components.
<br>
- Add OpenSHMEM man pages.  Thanks to Tony Curtis for sharing the man
<br>
&nbsp;&nbsp;pages files from openshmem.org.
<br>
- Add missing &quot;const&quot; attributes to MPI_COMPARE_AND_SWAP,
<br>
&nbsp;&nbsp;MPI_FETCH_AND_OP, MPI_RACCUMULATE, and MPI_WIN_DETACH prototypes.
<br>
&nbsp;&nbsp;Thanks to Michael Knobloch and Takahiro Kawashima for bringing this
<br>
&nbsp;&nbsp;to our attention.
<br>
- Fix linking issues on some platforms (e.g., SLES 12).
<br>
- Fix hang on some corner cases when MPI applications abort.
<br>
- Add missing options to mpirun man page. Thanks to Daniel Letai
<br>
&nbsp;&nbsp;for bringing this to our attention.
<br>
- Add new --with-platform-patches-dir configure option
<br>
- Adjust relative selection priorities to ensure that MTL
<br>
&nbsp;&nbsp;support is favored over BTL support when both are available
<br>
- Use CUDA IPC for all sized messages for performance
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0076/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0077.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI State of the Union BOF: this Wednesday!"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/10/0075.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI State of the Union BOF @SC15"</a>
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
