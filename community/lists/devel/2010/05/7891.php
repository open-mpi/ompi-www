<?
$subject_val = "[OMPI devel] Open MPI 1.4.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 13:48:29 2010" -->
<!-- isoreceived="20100504174829" -->
<!-- sent="Tue, 4 May 2010 11:48:18 -0600" -->
<!-- isosent="20100504174818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.4.2 released" -->
<!-- id="DE293D96-DE8D-4968-8ED7-A910EB29E96B_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.4.2 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 13:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.4.2.  This release is mainly a bug fix release over the v1.4.1 release. We strongly recommend that all users upgrade to version 1.4.2 if possible.
<br>
<p>Version 1.4.2 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.4.2 as compared to v1.4.1
<br>
<p>- Fixed problem when running in heterogeneous environments.  Thanks to
<br>
&nbsp;&nbsp;Timur Magomedov for helping to track down this issue.
<br>
- Update LSF support to ensure that the path is passed correctly.
<br>
&nbsp;&nbsp;Thanks to Teng Lin for submitting a patch.
<br>
- Fixed some miscellaneous oversubscription detection bugs.
<br>
- IBM re-licensed its LoadLeveler code to be BSD-compliant.
<br>
- Various OpenBSD and NetBSD build and run-time fixes.  Many thanks to
<br>
&nbsp;&nbsp;the OpenBSD community for their time, expertise, and patience
<br>
&nbsp;&nbsp;getting these fixes incorporated into Open MPI's main line.
<br>
- Various fixes for multithreading deadlocks, race conditions, and
<br>
&nbsp;&nbsp;other nefarious things.
<br>
- Fixed ROMIO's handling of &quot;nearly&quot; contiguous issues (e.g., with
<br>
&nbsp;&nbsp;non-zero true_lb).  Thanks for Pascal Deveze for the patch.
<br>
- Bunches of Windows build fixes.  Many thanks to several Windows
<br>
&nbsp;&nbsp;users for their help in improving our support on Windows.
<br>
- Now allow the graceful failover from MTLs to BTLs if no MTLs can
<br>
&nbsp;&nbsp;initialize successfully.
<br>
- Added &quot;clobber&quot; information to various atomic operations, fixing
<br>
&nbsp;&nbsp;erroneous behavior in some newer versions of the GNU compiler suite.
<br>
- Update various iWARP and InfiniBand device specifications in the
<br>
&nbsp;&nbsp;OpenFabrics .ini support file.
<br>
- Fix the use of hostfiles when a username is supplied.
<br>
- Various fixes for rankfile support.
<br>
- Updated the internal version of VampirTrace to 5.4.12.
<br>
- Fixed OS X TCP wireup issues having to do with IPv4/IPv6 confusion
<br>
&nbsp;&nbsp;(see <a href="https://svn.open-mpi.org/trac/ompi/changeset/22788">https://svn.open-mpi.org/trac/ompi/changeset/22788</a> for more
<br>
&nbsp;&nbsp;details).
<br>
- Fixed some problems in processor affinity support, including when
<br>
&nbsp;&nbsp;there are &quot;holes&quot; in the processor namespace (e.g., offline
<br>
&nbsp;&nbsp;processors). 
<br>
- Ensure that Open MPI's &quot;session directory&quot; (usually located in /tmp)
<br>
&nbsp;&nbsp;is cleaned up after process termination.
<br>
- Fixed some problems with the collective &quot;hierarch&quot; implementation
<br>
&nbsp;&nbsp;that could occur in some obscure conditions.
<br>
- Various MPI_REQUEST_NULL, API parameter checking, and attribute
<br>
&nbsp;&nbsp;error handling fixes.  Thanks to Lisandro Dalc&#226;&#136;&#154;&#226;&#137;&#160;n for reporting the
<br>
&nbsp;&nbsp;issues.
<br>
- Fix case where MPI_GATHER erroneously used datatypes on non-root
<br>
&nbsp;&nbsp;nodes.  Thanks to Michael Hofmann for investigating the issue.
<br>
- Patched ROMIO support for PVFS2 &gt; v2.7 (patch taken from MPICH2
<br>
&nbsp;&nbsp;version of ROMIO).
<br>
- Fixed &quot;mpirun --report-bindings&quot; behavior when used with
<br>
&nbsp;&nbsp;mpi_paffinity_alone=1.  Also fixed mpi_paffinity_alone=1 behavior
<br>
&nbsp;&nbsp;with non-MPI applications.  Thanks to Brice Goglin for noticing the
<br>
&nbsp;&nbsp;problem.
<br>
- Ensure that all OpenFabrics devices have compatible receive_queues
<br>
&nbsp;&nbsp;specifications before allowing them to communicate.  See the lengthy
<br>
&nbsp;&nbsp;comment in <a href="https://svn.open-mpi.org/trac/ompi/changeset/22592">https://svn.open-mpi.org/trac/ompi/changeset/22592</a> for
<br>
&nbsp;&nbsp;more details.
<br>
- Fix some issues with checkpoint/restart.
<br>
- Improve the pre-MPI_INIT/post-MPI_FINALIZE error messages.
<br>
- Ensure that loopback addresses are never advertised to peer
<br>
&nbsp;&nbsp;processes for RDMA/OpenFabrics support.
<br>
- Fixed a CSUM PML false positive.
<br>
- Various fixes for Catamount support.
<br>
- Minor update to wrapper compilers in how user-specific argv is
<br>
&nbsp;&nbsp;ordered on the final command line.  Thanks to Jed Brown for the
<br>
&nbsp;&nbsp;suggestions. 
<br>
- Removed flex.exe binary from Open MPI tarballs; now generate flex
<br>
&nbsp;&nbsp;code from a newer (Windows-friendly) flex when we make official
<br>
&nbsp;&nbsp;tarballs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7892.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
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
