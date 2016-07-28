<?
$subject_val = "Re: [OMPI devel] RFC: fix leak of bml endpoints";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 13:52:29 2014" -->
<!-- isoreceived="20140515175229" -->
<!-- sent="Thu, 15 May 2014 11:52:27 -0600" -->
<!-- isosent="20140515175227" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix leak of bml endpoints" -->
<!-- id="20140515175227.GE25411_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20140515174405.GD25411_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-05-15 13:52:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 15, 2014 at 11:44:05AM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Thu, May 15, 2014 at 01:33:31PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The solution you propose here is definitively not OK. It is 1) ugly and 2) break the separation barrier that we hold dear.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is why I asked :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regarding your other suggestion I don&#226;&#128;&#153;t see any reasons not to call the delete_proc on MPI_COMM_WORLD as the last action we do before tearing down everything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I spoke too soon. It looks like we *are* calling del_procs but I am not
</span><br>
<span class="quotelev1">&gt; seeing the call reach the bml.... I will try and track this down.
</span><br>
<p>/bml/btl/ .. I see what is happening. The proc reference counts are all
<br>
larger than 1 when we call del_procs:
<br>
<p><p>[1,2]&lt;stderr&gt;:Deleting proc 0x7b83190 with reference count 5
<br>
[1,1]&lt;stderr&gt;:Deleting proc 0x7b83180 with reference count 5
<br>
[1,2]&lt;stderr&gt;:Deleting proc 0x7b832b0 with reference count 5
<br>
[1,1]&lt;stderr&gt;:Deleting proc 0x7b832a0 with reference count 7
<br>
[1,2]&lt;stderr&gt;:Deleting proc 0x7b83360 with reference count 7
<br>
[1,1]&lt;stderr&gt;:Deleting proc 0x7b833a0 with reference count 5
<br>
[1,0]&lt;stderr&gt;:Deleting proc 0x7b83190 with reference count 7
<br>
[1,0]&lt;stderr&gt;:Deleting proc 0x7b83300 with reference count 5
<br>
[1,0]&lt;stderr&gt;:Deleting proc 0x7b833b0 with reference count 5
<br>
<p><p>I will track that down.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14812/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14811.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
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
