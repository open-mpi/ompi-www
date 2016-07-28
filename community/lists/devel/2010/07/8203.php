<?
$subject_val = "[OMPI devel] MPI_GET_COUNT in v1.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 22:31:52 2010" -->
<!-- isoreceived="20100722023152" -->
<!-- sent="Wed, 21 Jul 2010 22:32:30 -0400" -->
<!-- isosent="20100722023230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_GET_COUNT in v1.4" -->
<!-- id="16CC9C9D-1DE3-4F88-9EFF-7CC0051CA399_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_GET_COUNT in v1.4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 22:32:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For those watching the SVN commits / trac postings, note that we can't fix #2241 (&quot;MPI_GET_COUNT returns wrong value for large counts&quot;) in the v1.4 series because it requires increasing the size of the internal &quot;count&quot; field in the public MPI_Status struct (which would break ABI).
<br>
<p>We're fixing it in v1.5[.0] so that we can have a constant ABI for the duration of the v1.5 series (thanks to Jed Brown for pointing this out before we released v1.5!).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2241">https://svn.open-mpi.org/trac/ompi/ticket/2241</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8202.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
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
