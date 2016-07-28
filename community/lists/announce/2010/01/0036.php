<?
$subject_val = "[Open MPI Announce] Open MPI v1.4.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 02:42:45 2010" -->
<!-- isoreceived="20100115074245" -->
<!-- sent="Fri, 15 Jan 2010 00:42:38 -0700" -->
<!-- isosent="20100115074238" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.4.1 released" -->
<!-- id="E05C488A-C6F0-4E96-A97D-4DC541EB850C_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.4.1 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 02:42:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/05/0037.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/12/0035.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.4 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.4.1. This release is strictly a bug fix release over the v1.4
<br>
release.
<br>
<p>Version 1.4.1 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.4.1 as compared to v1.4
<br>
<p>- Update to PLPA v1.3.2, addressing a licensing issue identified by
<br>
&nbsp;&nbsp;the Fedora project.  See
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/plpa/changeset/262">https://svn.open-mpi.org/trac/plpa/changeset/262</a> for details.
<br>
- Add check for malformed checkpoint metadata files (Ticket #2141).
<br>
- Fix error path in ompi-checkpoint when not able to checkpoint
<br>
&nbsp;&nbsp;(Ticket #2138).
<br>
- Cleanup component release logic when selecting checkpoint/restart
<br>
&nbsp;&nbsp;enabled components (Ticket #2135).
<br>
- Fixed VT node name detection for Cray XT platforms, and fixed some
<br>
&nbsp;&nbsp;broken VT documentation files.
<br>
- Fix a possible race condition in tearing down RDMA CM-based
<br>
&nbsp;&nbsp;connections.
<br>
- Relax error checking on MPI_GRAPH_CREATE.  Thanks to David Singleton
<br>
&nbsp;&nbsp;for pointing out the issue.
<br>
- Fix a shared memory &quot;hang&quot; problem that occurred on x86/x86_64
<br>
&nbsp;&nbsp;platforms when used with the GNU &gt;=4.4.x compiler series.
<br>
- Add fix for Libtool 2.2.6b's problems with the PGI 10.x compiler
<br>
&nbsp;&nbsp;suite.  Inspired directly from the upstream Libtool patches that fix
<br>
&nbsp;&nbsp;the issue (but we need something working before the next Libtool
<br>
&nbsp;&nbsp;release).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/05/0037.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/12/0035.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.4 released"</a>
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
