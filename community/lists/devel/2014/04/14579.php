<?
$subject_val = "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 01:43:16 2014" -->
<!-- isoreceived="20140423054316" -->
<!-- sent="Wed, 23 Apr 2014 14:43:12 +0900" -->
<!-- isosent="20140423054312" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="535752F0.6060905_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D7153A8A972B_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 01:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>In reply to:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>i uploaded this part to github :
<br>
<a href="https://github.com/ggouaillardet/ompi-svn-mirror/tree/flatten-datatype">https://github.com/ggouaillardet/ompi-svn-mirror/tree/flatten-datatype</a>
<br>
<p>you really need to check the last commit :
<br>
<a href="https://github.com/ggouaillardet/ompi-svn-mirror/commit/a8d014c6f144fa573eeee2bdd25f8b6b05b07ea8">https://github.com/ggouaillardet/ompi-svn-mirror/commit/a8d014c6f144fa573eeee2bdd25f8b6b05b07ea8</a>
<br>
<p>please consider this as experimental and poorly tested.
<br>
that being said, this is only addition to existing code, so it does not
<br>
break anything and could be pushed to the trunk.
<br>
<p>Gilles
<br>
<p>On 2014/04/23 0:05, Hjelm, Nathan T wrote:
<br>
<span class="quotelev1">&gt; I need the flatten datatype call for handling true rdma in the one-sided code as well. Is there a plan to implement this feature soon?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14578.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>In reply to:</strong> <a href="14573.php">Hjelm, Nathan T: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
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
