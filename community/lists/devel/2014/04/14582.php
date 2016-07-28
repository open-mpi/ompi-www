<?
$subject_val = "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 01:58:53 2014" -->
<!-- isoreceived="20140423055853" -->
<!-- sent="Wed, 23 Apr 2014 14:58:45 +0900" -->
<!-- isosent="20140423055845" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="53575695.4030108_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140423055552.GB8665_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-04-23 01:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my bad :-(
<br>
<p>this has just been fixed
<br>
<p>Gilles
<br>
<p>On 2014/04/23 14:55, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; The ompi_datatype_flatten.c file appears to be missing. Let me know once
</span><br>
<span class="quotelev1">&gt; it is committed and I will take a look. I will see if I can write the
</span><br>
<span class="quotelev1">&gt; RMA code using it over the next week or so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14583.php">Piotr Lesnicki: "[OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>Previous message:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14581.php">Nathan Hjelm: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14689.php">George Bosilca: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
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
