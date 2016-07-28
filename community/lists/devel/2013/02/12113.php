<?
$subject_val = "[OMPI devel] RFC: update lustre check to use only -llustreapi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 13:35:23 2013" -->
<!-- isoreceived="20130205183523" -->
<!-- sent="Tue, 5 Feb 2013 11:35:19 -0700" -->
<!-- isosent="20130205183519" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: update lustre check to use only -llustreapi" -->
<!-- id="20130205183519.GE69096_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: update lustre check to use only -llustreapi<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 13:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Previous message:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Update OMPI_CHECK_LUSTRE to link against only -llustreapi. From what I can tell we do not need to link against -llustre. Also remove --with-lustre-libs option.
<br>
<p>Why: Some platforms do not have liblustre and we shouldn't need to link against liblustre anyway.
<br>
<p>When: I need some feedback from Edgar. Timeout is this Thursday @ 12:00 PM MST
<br>
<p>Is there any reason --with-lustre-libs is needed? Is there some configuration where -llustre is required? Let me know and I can modify the patch.
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12113/lustre_config.patch">lustre_config.patch</a>
</ul>
<!-- attachment="lustre_config.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12114.php">George Bosilca: "Re: [OMPI devel] MCA variable system slides and notes"</a>
<li><strong>Previous message:</strong> <a href="12112.php">Nathan Hjelm: "[OMPI devel] MCA variable system slides and notes"</a>
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
