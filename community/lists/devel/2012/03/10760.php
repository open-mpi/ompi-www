<?
$subject_val = "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 16:01:52 2012" -->
<!-- isoreceived="20120322200152" -->
<!-- sent="Thu, 22 Mar 2012 14:01:47 -0600 (MDT)" -->
<!-- isosent="20120322200147" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise" -->
<!-- id="alpine.OSX.2.00.1203221400071.81297_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84AFDDC3-BF77-4403-84B1-C0040D9998C1_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 16:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>In reply to:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 22 Mar 2012, Shamis, Pavel wrote:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What: Change coll tuned default to pairwise exchange
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why: The linear algorithm does not scale to any reasonable number of PEs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When: Timeout in 2 days (Fri)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any reason the default should not be changed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see why people think the linear algorithm is bad. However I think it depends on the application communication pattern in the alltoallv. Do you have any numbers to back your claim?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; In addition the above list of dependencies it also depends on network technology. The linear algorithm does not play well with IB.
</span><br>
<p>Nor does it play well with Gemini. I will get some hard numbers early next week on both our XE6 and one of our infiniband clusters.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10761.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>In reply to:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
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
