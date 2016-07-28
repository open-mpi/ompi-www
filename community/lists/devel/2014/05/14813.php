<?
$subject_val = "Re: [OMPI devel] RFC: fix leak of bml endpoints";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 14:20:59 2014" -->
<!-- isoreceived="20140515182059" -->
<!-- sent="Thu, 15 May 2014 12:20:58 -0600" -->
<!-- isosent="20140515182058" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix leak of bml endpoints" -->
<!-- id="20140515182058.GF25411_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140515175227.GE25411_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: fix leak of bml endpoints<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-15 14:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok figured it out. There were three problems with the del_procs code:
<br>
<p>&nbsp;1) ompi_mpi_finalize used ompi_proc_all to get the list of procs but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;never released the reference to them (ompi_proc_all called
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RETAIN on all the procs returned). When calling del_procs at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;finalize it should suffice to call ompi_proc_world which does not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;increment the reference count.
<br>
<p>&nbsp;2) del_procs is called BEFORE ompi_comm_finalize. This leaves the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;references to the procs from calling the pml_add_comm function. The
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fix is to reorder the calls to do omp_comm_finalize, del_procs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pml_finalize instead of del_procs, pml_finalize,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_comm_finalize.
<br>
<p>&nbsp;3) The check in del_procs in r2 checked for a reference count of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1. This is incorrect. At this point there should be 2 references: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from ompi_proc, and another from the add_procs. The fix is to change
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this check to look for 2. This check makes me extremely uncomforable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;as nothing will call del_procs if the reference count of a procs is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;not 2 when del_procs is called. Maybe there should be an assert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;since this is a developer error IMHO.
<br>
<p>Committing a patch to fix all three of these issues.
<br>
<p>-Nathan
<br>
<p>On Thu, May 15, 2014 at 11:52:27AM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Thu, May 15, 2014 at 11:44:05AM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, May 15, 2014 at 01:33:31PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The solution you propose here is definitively not OK. It is 1) ugly and 2) break the separation barrier that we hold dear.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Which is why I asked :)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regarding your other suggestion I don&#226;&#128;&#153;t see any reasons not to call the delete_proc on MPI_COMM_WORLD as the last action we do before tearing down everything else.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I spoke too soon. It looks like we *are* calling del_procs but I am not
</span><br>
<span class="quotelev2">&gt; &gt; seeing the call reach the bml.... I will try and track this down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bml/btl/ .. I see what is happening. The proc reference counts are all
</span><br>
<span class="quotelev1">&gt; larger than 1 when we call del_procs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stderr&gt;:Deleting proc 0x7b83190 with reference count 5
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:Deleting proc 0x7b83180 with reference count 5
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stderr&gt;:Deleting proc 0x7b832b0 with reference count 5
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:Deleting proc 0x7b832a0 with reference count 7
</span><br>
<span class="quotelev1">&gt; [1,2]&lt;stderr&gt;:Deleting proc 0x7b83360 with reference count 7
</span><br>
<span class="quotelev1">&gt; [1,1]&lt;stderr&gt;:Deleting proc 0x7b833a0 with reference count 5
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:Deleting proc 0x7b83190 with reference count 7
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:Deleting proc 0x7b83300 with reference count 5
</span><br>
<span class="quotelev1">&gt; [1,0]&lt;stderr&gt;:Deleting proc 0x7b833b0 with reference count 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will track that down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14812.php">http://www.open-mpi.org/community/lists/devel/2014/05/14812.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14813/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14814.php">Gilles Gouaillardet: "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Previous message:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
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
