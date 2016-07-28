<?
$subject_val = "[OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 15:54:10 2013" -->
<!-- isoreceived="20130116205410" -->
<!-- sent="Wed, 16 Jan 2013 20:54:05 +0000" -->
<!-- isosent="20130116205405" -->
<!-- name="Gutierrez, Samuel K" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] Question About &amp;quot;mpi_leaved_pinned 1&amp;quot; Option" -->
<!-- id="2F7AEC0555CE39418857F909CEE0451B186500BD_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Question About &quot;mpi_leaved_pinned 1&quot; Option<br>
<strong>From:</strong> Gutierrez, Samuel K (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 15:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11928.php">KAWASHIMA Takahiro: "[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone else noticed that mpi_leave_pinned 1 with the openib BTL (and potentially others) isn't working in 1.7rc6 and the trunk head? On the same system and within the same allocation everything seems to be working fine with 1.6.3, for example. When I try it with the latest 1.7 rc and the trunk head I get an error stating that &quot;no memory registration hooks were found.&quot;
<br>
<p>Any info is greatly appreciated!
<br>
<p>Sam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11930.php">George Bosilca: "Re: [OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
<li><strong>Previous message:</strong> <a href="11928.php">KAWASHIMA Takahiro: "[OMPI devel] [patch] MPI-2.2: Ordering of attribution deletion callbacks on MPI_COMM_SELF"</a>
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
