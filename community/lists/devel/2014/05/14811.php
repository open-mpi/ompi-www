<?
$subject_val = "Re: [OMPI devel] RFC: fix leak of bml endpoints";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 15 13:44:06 2014" -->
<!-- isoreceived="20140515174406" -->
<!-- sent="Thu, 15 May 2014 11:44:05 -0600" -->
<!-- isosent="20140515174405" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: fix leak of bml endpoints" -->
<!-- id="20140515174405.GD25411_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AFE887F0-5E46-4278-B856-6C7CC0E79A06_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2014-05-15 13:44:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 15, 2014 at 01:33:31PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The solution you propose here is definitively not OK. It is 1) ugly and 2) break the separation barrier that we hold dear.
</span><br>
<p>Which is why I asked :)
<br>
<p><span class="quotelev1">&gt; Regarding your other suggestion I don&#226;&#128;&#153;t see any reasons not to call the delete_proc on MPI_COMM_WORLD as the last action we do before tearing down everything else.
</span><br>
<p>I spoke too soon. It looks like we *are* calling del_procs but I am not
<br>
seeing the call reach the bml.... I will try and track this down.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14811/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Previous message:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>In reply to:</strong> <a href="14810.php">George Bosilca: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<li><strong>Reply:</strong> <a href="14812.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
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
