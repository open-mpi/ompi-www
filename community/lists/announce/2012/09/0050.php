<?
$subject_val = "[Open MPI Announce] Open MPI v1.6.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 08:53:01 2012" -->
<!-- isoreceived="20120925125301" -->
<!-- sent="Tue, 25 Sep 2012 14:52:59 +0200" -->
<!-- isosent="20120925125259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.6.2 released" -->
<!-- id="FE058B01-F059-4998-90C4-7E68D6A837A1_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.6.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 08:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/10/0051.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/08/0049.php">Jeff Squyres: "[Open MPI Announce] Open MPI 1.6.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.2. 
<br>
<p>Version 1.6.2 is a minor bugfix release.  All users are encouraged to upgrade to v1.6.2 when possible. 
<br>
<p>Note that v1.6.2 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology. 
<br>
<p>Version 1.6.2 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries will be available shortly; mirrors will also be updating soon). 
<br>
<p>Here is a list of changes in v1.6.2 as compared to v1.6.1:
<br>
<p>- Fix issue with MX MTL.  Thanks to Doug Eadline for raising the issue.
<br>
- Fix singleton MPI_COMM_SPAWN when the result job spans multiple nodes.
<br>
- Fix MXM hang, and update for latest version of MXM.
<br>
- Update to support Mellanox FCA 2.5.
<br>
- Fix startup hang for large jobs.
<br>
- Ensure MPI_TESTANY / MPI_WAITANY properly set the empty status when
<br>
&nbsp;&nbsp;count==0.
<br>
- Fix MPI_CART_SUB behavior of not copying periods to the new
<br>
&nbsp;&nbsp;communicator properly.  Thanks to John Craske for the bug report.
<br>
- Add btl_openib_abort_not_enough_reg_mem MCA parameter to cause Open
<br>
&nbsp;&nbsp;MPI to abort MPI jobs if there is not enough registered memory
<br>
&nbsp;&nbsp;available on the system (vs. just printing a warning).  Thanks to
<br>
&nbsp;&nbsp;Brock Palen for raising the issue.
<br>
- Minor fix to Fortran MPI_INFO_GET: only copy a value back to the
<br>
&nbsp;&nbsp;user's buffer if the flag is .TRUE.
<br>
- Fix VampirTrace compilation issue with the PGI compiler suite.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/10/0051.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/08/0049.php">Jeff Squyres: "[Open MPI Announce] Open MPI 1.6.1 released"</a>
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
