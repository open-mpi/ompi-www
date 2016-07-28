<?
$subject_val = "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 01:56:03 2014" -->
<!-- isoreceived="20140423055603" -->
<!-- sent="Tue, 22 Apr 2014 23:55:52 -0600" -->
<!-- isosent="20140423055552" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks" -->
<!-- id="20140423055552.GB8665_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="535752F0.6060905_at_iferc.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 01:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ompi_datatype_flatten.c file appears to be missing. Let me know once
<br>
it is committed and I will take a look. I will see if I can write the
<br>
RMA code using it over the next week or so.
<br>
<p>-Nathan
<br>
<p>On Wed, Apr 23, 2014 at 02:43:12PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i uploaded this part to github :
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ggouaillardet/ompi-svn-mirror/tree/flatten-datatype">https://github.com/ggouaillardet/ompi-svn-mirror/tree/flatten-datatype</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you really need to check the last commit :
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/ggouaillardet/ompi-svn-mirror/commit/a8d014c6f144fa573eeee2bdd25f8b6b05b07ea8">https://github.com/ggouaillardet/ompi-svn-mirror/commit/a8d014c6f144fa573eeee2bdd25f8b6b05b07ea8</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please consider this as experimental and poorly tested.
</span><br>
<span class="quotelev1">&gt; that being said, this is only addition to existing code, so it does not
</span><br>
<span class="quotelev1">&gt; break anything and could be pushed to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/04/23 0:05, Hjelm, Nathan T wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I need the flatten datatype call for handling true rdma in the one-sided code as well. Is there a plan to implement this feature soon?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14579.php">http://www.open-mpi.org/community/lists/devel/2014/04/14579.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14581/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Previous message:</strong> <a href="14580.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>In reply to:</strong> <a href="14579.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
<li><strong>Reply:</strong> <a href="14582.php">Gilles Gouaillardet: "Re: [OMPI devel] coll/tuned MPI_Bcast can crash or silently fail when using distinct datatypes across tasks"</a>
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
