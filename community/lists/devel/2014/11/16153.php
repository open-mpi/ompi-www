<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:58:20 2014" -->
<!-- isoreceived="20141103165820" -->
<!-- sent="Mon, 3 Nov 2014 16:58:19 +0000" -->
<!-- isosent="20141103165819" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac" -->
<!-- id="18ABCB55-28A1-4B69-AC94-88A8E759D790_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="255e4555a496427b9e6dae1f77a7bcaf_at_DBXPR05MB046.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 11:58:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16152.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac"</a>
<li><strong>In reply to:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2014, at 10:50 AM, Alexander Mikheev &lt;alexm_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is --amend of my previous commit.  When I tried to push my amended commit, the merge was required. 
</span><br>
<p>Ah, I just spotted the minor difference between the two commits.  The second argument to setenv() was changed from integer zero to a string &quot;0&quot;.
<br>
<p>In the future, it would be better to just create a new single commit fixing the mistake directly instead of amending, merging, and pushing, since that difference was not obvious from just looking at the email diffs flying by.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16154.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16152.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master	updated.	dev-206-g87dffac"</a>
<li><strong>In reply to:</strong> <a href="16150.php">Alexander Mikheev: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-206-g87dffac"</a>
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
