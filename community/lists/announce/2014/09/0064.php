<?
$subject_val = "[Open MPI Announce] Open MPI 1.8.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 17:17:13 2014" -->
<!-- isoreceived="20140926211713" -->
<!-- sent="Fri, 26 Sep 2014 21:17:12 +0000" -->
<!-- isosent="20140926211712" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.8.3 released" -->
<!-- id="F9E32CD9-797D-41AD-B041-C63EE8C7E372_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.8.3 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 17:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/10/0065.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI at SC14"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/08/0063.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.8.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.8.3.
<br>
<p>v1.8.3 is a bug fix release.  All users are encouraged to upgrade to v1.8.3 when possible. 
<br>
<p>Version 1.8.3 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>Here is a list of changes in v1.8.3 as compared to v1.8.2:
<br>
<p>- Fixed application abort bug to ensure that MPI_Abort exits appropriately
<br>
&nbsp;&nbsp;and returns the provided exit status
<br>
- Fixed some alignment (not all) issues identified by Clang
<br>
- Allow CUDA-aware to work with nonblocking collectives. Forces packing to
<br>
&nbsp;&nbsp;happen when using GPU buffers.
<br>
- Fixed configure test issue with Intel 2015 Fortran compiler
<br>
- Fixed some PGI-related errors
<br>
- Provide better help message when encountering a firewall
<br>
- Fixed MCA parameter quoting to protect multi-word params and params
<br>
&nbsp;&nbsp;that contain special characters
<br>
- Improved the bind-to help message to clarify the defaults
<br>
- Add new MPI-3.1 tools interface
<br>
- Several performance optimizations and memory leak cleanups
<br>
- Turn off the coll/ml plugin unless specifically requested as it
<br>
&nbsp;&nbsp;remains in an experimental state
<br>
- Fix LSF support by adding required libraries for the latest LSF
<br>
&nbsp;&nbsp;releases.  Thanks to Joshua Randal for supplying the initial
<br>
&nbsp;&nbsp;patches.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/10/0065.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI at SC14"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2014/08/0063.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.8.2 released"</a>
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
