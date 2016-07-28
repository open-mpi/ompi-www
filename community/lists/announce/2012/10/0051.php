<?
$subject_val = "[Open MPI Announce] Open MPI v1.6.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 30 19:22:07 2012" -->
<!-- isoreceived="20121030232207" -->
<!-- sent="Tue, 30 Oct 2012 19:22:02 -0400" -->
<!-- isosent="20121030232202" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.6.3 released" -->
<!-- id="6126AAAF-36DE-4C94-9103-CC65C96F77E5_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.6.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-30 19:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/02/0052.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.6.4 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/09/0050.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.3.
<br>
<p>Version 1.6.3 is a minor bugfix release. All users are encouraged to upgrade to v1.6.3 when possible. 
<br>
<p>Note that v1.6.3 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology. 
<br>
<p>Version 1.6.3 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries may be available eventually; Open MPI needs a new Windows maintainer -- let us know on the developers' list if you're interested in helping out).
<br>
<p>Here is a list of changes in v1.6.3 as compared to v1.6.2:
<br>
<p>- Fix mpirun --launch-agent behavior when a prefix is specified.
<br>
&nbsp;&nbsp;Thanks to Reuti for identifying the issue.
<br>
- Fixed memchecker configury.
<br>
- Brought over some compiler warning squashes from the development trunk.
<br>
- Fix spawning from a singleton to multiple hosts when the &quot;add-host&quot;
<br>
&nbsp;&nbsp;MPI_Info key is used.  Thanks to Brian Budge for pointing out the
<br>
&nbsp;&nbsp;problem.
<br>
- Add Mellanox ConnextIB IDs and max inline value.
<br>
- Fix rankfile when no -np is given.
<br>
- FreeBSD detection improvement.  Thanks to Brooks Davis for the
<br>
&nbsp;&nbsp;patch.
<br>
- Removed TCP warnings on Windows.
<br>
- Improved collective algorithm selection for very large messages.
<br>
- Fix PSM MTL affinity settings.
<br>
- Fix issue with MPI_OP_COMMUTATIVE in the mpif.h bindings.  Thanks to
<br>
&nbsp;&nbsp;Ake Sandgren for providing a patch to fix the issue.
<br>
- Fix issue with MPI_SIZEOF when using CHARACTER and LOGICAL types in
<br>
&nbsp;&nbsp;the mpi module.  Thanks to Ake Sandgren for providing a patch to fix
<br>
&nbsp;&nbsp;the issue.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/02/0052.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI v1.6.4 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/09/0050.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.2 released"</a>
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
