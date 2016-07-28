<?
$subject_val = "[OMPI devel] RFC: remove opal progress recursion depth counter";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 18:23:21 2013" -->
<!-- isoreceived="20131218232321" -->
<!-- sent="Wed, 18 Dec 2013 16:23:18 -0700" -->
<!-- isosent="20131218232318" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove opal progress recursion depth counter" -->
<!-- id="20131218232318.GF41700_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove opal progress recursion depth counter<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 18:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Remove the opal_progress_recursion_depth_counter from
<br>
opal_progress.
<br>
<p>Why: This counter adds two atomic adds to the critical path when
<br>
OPAL_HAVE_THREADS is set (which is the case for most builds). I grepped
<br>
through ompi, orte, and opal to find where this value was being used and
<br>
did not find anything either inside or outside opal_progress.
<br>
<p>When: I want this change to go into 1.7.4 (if possible) so setting a
<br>
quick timeout for next Tuesday.
<br>
<p>Let me know if there is a good reason to keep this counter and it will
<br>
be spared.
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13474/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>Previous message:</strong> <a href="13473.php">Ralph Castain: "Re: [OMPI devel] Q: MPI-RTE / ompi_proc_t vs. ompi_process_info_t ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
<li><strong>Reply:</strong> <a href="13475.php">Ralph Castain: "Re: [OMPI devel] RFC: remove opal progress recursion depth counter"</a>
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
