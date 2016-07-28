<?
$subject_val = "[Open MPI Announce] v1.8 Released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 12:22:07 2014" -->
<!-- isoreceived="20140331162207" -->
<!-- sent="Mon, 31 Mar 2014 09:21:46 -0700" -->
<!-- isosent="20140331162146" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] v1.8 Released" -->
<!-- id="D32FF8F2-D12F-4508-98AC-40D6D40A4719_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] v1.8 Released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 12:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/04/0062.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.7.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8. 
<br>
<p><p>This is the initial release of the new OMPI stable series, replacing the v1.6 series which is now retired.
<br>
<p>Changes in this release include:
<br>
<p>- Commit upstream ROMIO fix for mixed NFS+local filesystem environments.
<br>
- Several fixes for MPI-3 one-sided support.  For example,
<br>
&nbsp;&nbsp;arbitrary-length datatypes are now supported.
<br>
- Add config support for the Mellanox ConnectX 4 card.
<br>
- Add missing MPI_COMM_GET|SET_INFO functions, and missing
<br>
&nbsp;&nbsp;MPI_WEIGHTS_EMPTY and MPI_ERR_RMA_SHARED constants.  Thanks to
<br>
&nbsp;&nbsp;Lisandro Dalcin for pointing out the issue.
<br>
- Update some help messages in OSHMEM, the usnic BTL, the TCP BTL, and
<br>
&nbsp;&nbsp;ORTE, and update documentation about ompi_info's --level option.
<br>
- Fix some compiler warnings.
<br>
- Ensure that ORTE daemons are not bound to a single processor
<br>
&nbsp;&nbsp;if TaskAffinity is set on by default in Slurm. Thanks to Artem Polyakov
<br>
&nbsp;&nbsp;for identifying the problem and providing a patch
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/04/0062.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0060.php">Ralph Castain: "[Open MPI Announce] Open MPI 1.7.5 released"</a>
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
