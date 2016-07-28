<?
$subject_val = "[OMPI devel] RFC: more ob1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 16:18:02 2014" -->
<!-- isoreceived="20140408201802" -->
<!-- sent="Tue, 8 Apr 2014 14:18:01 -0600" -->
<!-- isosent="20140408201801" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: more ob1 optimizations" -->
<!-- id="20140408201801.GB69178_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: more ob1 optimizations<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 16:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14477.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI www repo now at github"</a>
<li><strong>Previous message:</strong> <a href="14475.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Network change of the CREST SVN/trac server (tiger)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Add an optimization for isend in pml/ob1. This optimization is a
<br>
companion to the optimizations recently committed to 1.8.1. The basic
<br>
idea is if the btl supports inline sends and the message is small
<br>
(currently hardcoded but planned to be configurable) then try to send it
<br>
with the inline send function. If this succeeds return
<br>
ompi_request_empty for the request. From what I can tell the only
<br>
requirement on a request returned by MPI_Isend is that the status
<br>
indicates whether the request was cancelled so this should be ok. 
<br>
<p>Why: This optimization should improve small message rates when the btl
<br>
provides an inline send function. This commit may or may not help
<br>
application performance but it certainly gives better results with
<br>
osu_bibw and osu_mbw_mr.
<br>
<p>When: This is targeted for 1.8.1 so I would like this to soak on the
<br>
trunk for a little while before being moved over. As I said, it is
<br>
conceptually the same as the other ob1 optimization. Setting the timeout
<br>
for two weeks (April 29).
<br>
<p>The patch is attached. It has been tested with btl/ugni and btl/vader
<br>
and I have seen a 10-30% improvement in the small message rate.
<br>
<p>-Nathan
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14476/ob1_isend_opt.patch">ob1_isend_opt.patch</a>
</ul>
<!-- attachment="ob1_isend_opt.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14476/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14477.php">Jeff Squyres (jsquyres): "[OMPI devel] OMPI www repo now at github"</a>
<li><strong>Previous message:</strong> <a href="14475.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Network change of the CREST SVN/trac server (tiger)"</a>
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
