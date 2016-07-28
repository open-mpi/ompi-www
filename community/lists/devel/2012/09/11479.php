<?
$subject_val = "[OMPI devel] 1.6.2rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 13:30:22 2012" -->
<!-- isoreceived="20120907173022" -->
<!-- sent="Fri, 7 Sep 2012 13:30:18 -0400" -->
<!-- isosent="20120907173018" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.2rc2 is out" -->
<!-- id="7EBA9405-A8EC-4345-B867-F639A1F1CB76_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.2rc2 is out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 13:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11478.php">Jeff Squyres: "[OMPI devel] OMPI git / mercurial mirrors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please test:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Changes since 1.6.1:
<br>
<p>- Fix singleton MPI_COMM_SPAWN when the result job spans multiple nodes.
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
<li><strong>Next message:</strong> <a href="11480.php">Dmitry N. Mikushin: "[OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11478.php">Jeff Squyres: "[OMPI devel] OMPI git / mercurial mirrors"</a>
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
