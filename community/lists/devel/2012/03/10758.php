<?
$subject_val = "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 22 15:38:50 2012" -->
<!-- isoreceived="20120322193850" -->
<!-- sent="Thu, 22 Mar 2012 15:38:45 -0400" -->
<!-- isosent="20120322193845" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise" -->
<!-- id="1A08DBD3-11D2-4CD1-B997-51985B2E80FB_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1203211011370.81297_at_panthera.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-22 15:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Reply:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2012, at 12:14 , Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; What: Change coll tuned default to pairwise exchange
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: The linear algorithm does not scale to any reasonable number of PEs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Timeout in 2 days (Fri)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any reason the default should not be changed?
</span><br>
<p>Nathan,
<br>
<p>I can see why people think the linear algorithm is bad. However I think it depends on the application communication pattern in the alltoallv. Do you have any numbers to back your claim?
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Previous message:</strong> <a href="10757.php">Jeffrey Squyres: "Re: [OMPI devel] MPI_Init_thread problem on ubuntu ARM (open-mpi 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="10747.php">Nathan Hjelm: "[OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
<li><strong>Reply:</strong> <a href="10759.php">Shamis, Pavel: "Re: [OMPI devel] RFC: change default for tuned alltoallv to pairwise"</a>
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
