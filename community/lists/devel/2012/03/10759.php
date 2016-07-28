<?
$subject_val = "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 15:56:41 2012" -->
<!-- isoreceived="20120322195641" -->
<!-- sent="Thu, 22 Mar 2012 15:56:35 -0400" -->
<!-- isosent="20120322195635" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise" -->
<!-- id="84AFDDC3-BF77-4403-84B1-C0040D9998C1_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1A08DBD3-11D2-4CD1-B997-51985B2E80FB_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 15:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>In reply to:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Reply:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: Change coll tuned default to pairwise exchange
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Why: The linear algorithm does not scale to any reasonable number of PEs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: Timeout in 2 days (Fri)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any reason the default should not be changed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see why people think the linear algorithm is bad. However I think it depends on the application communication pattern in the alltoallv. Do you have any numbers to back your claim?
</span><br>
<p>George,
<br>
In addition the above list of dependencies it also depends on network technology. The linear algorithm does not play well with IB.
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>In reply to:</strong> <a href="10758.php">George Bosilca: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Reply:</strong> <a href="10760.php">Nathan Hjelm: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
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
