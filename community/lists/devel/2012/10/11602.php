<?
$subject_val = "[OMPI devel] 1.6.3rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 11:26:48 2012" -->
<!-- isoreceived="20121017152648" -->
<!-- sent="Wed, 17 Oct 2012 11:26:42 -0400" -->
<!-- isosent="20121017152642" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.3rc1 posted" -->
<!-- id="FAC84276-093F-47AD-9BC7-906F34132318_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.3rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 11:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11601.php">Shigang Li: "[OMPI devel] question about Open MPI collectives on shared memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Changes since 1.6.2:
<br>
<p>- Add Mellanox ConnextIB IDs
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
<li><strong>Next message:</strong> <a href="11603.php">Gutierrez, Samuel K: "[OMPI devel] Cross Memory Attach: What am I Missing?"</a>
<li><strong>Previous message:</strong> <a href="11601.php">Shigang Li: "[OMPI devel] question about Open MPI collectives on shared memory"</a>
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
