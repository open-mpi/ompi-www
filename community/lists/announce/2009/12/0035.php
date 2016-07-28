<?
$subject_val = "[Open MPI Announce] Open MPI v1.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 17:36:28 2009" -->
<!-- isoreceived="20091208223628" -->
<!-- sent="Tue, 8 Dec 2009 17:36:23 -0500" -->
<!-- isosent="20091208223623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.4 released" -->
<!-- id="CBBCAA04-B3B5-4CCC-A3B7-5C94067291A1_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.4 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 17:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/01/0036.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Ralph Castain: "[Open MPI Announce] New subproject: Open Resilient Cluster Manager"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners is releasing Open MPI version 1.4 in reaction to the GNU Libtool 2.2.6b security update release (see <a href="http://security-tracker.debian.org/tracker/CVE-2009-3736">http://security-tracker.debian.org/tracker/CVE-2009-3736</a> for more details).
<br>
<p>This release closes a potential security vulnerability associated with the embedded version of GNU Libtool used in the Open MPI v1.3 series.  This release also represents the transition from the v1.3 series of functional enhancement releases to the stable v1.4 series of bug fix releases.  We recommend that all users currently on the v1.3 series upgrade to this v1.4 release.  As this represents the transition to the v1.4 stable branch, we also encourage all v1.2.x users to upgrade to v1.4.
<br>
<p>*** More details about this release were sent to the Open MPI user's list: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2009/12/11460.php">http://www.open-mpi.org/community/lists/users/2009/12/11460.php</a>
<br>
&nbsp;
<br>
Version 1.4 can be downloaded from the main Open MPI web site or any of its mirrors (mirrors will be updating shortly). 
<br>
&nbsp;
<br>
As indicated above, there is only one change from the 1.4 release:
<br>
<p>&nbsp;- Use GNU Libtool 2.2.6b to build Open MPI, which updates the
<br>
&nbsp;&nbsp;&nbsp;embedded &quot;libltdl&quot; library to fix a potential security
<br>
&nbsp;&nbsp;&nbsp;vulnerability.  There are no other changes compared to Open MPI
<br>
&nbsp;&nbsp;&nbsp;v1.3.4.
<br>
<p>Note that the GNU Libtool libltdl problem extends back quite a few versions; it includes the version that was used to build Open MPI v1.2.9.  There are no plans to release a patched v1.2.10 at this time; we are recommending that v1.2.x users upgrade to v1.4.  If you have a need for v1.2.10, please send mail to the Open MPI users' mailing list.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2010/01/0036.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.4.1 released"</a>
<li><strong>Previous message:</strong> <a href="0034.php">Ralph Castain: "[Open MPI Announce] New subproject: Open Resilient Cluster Manager"</a>
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
