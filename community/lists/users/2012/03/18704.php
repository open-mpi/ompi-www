<?
$subject_val = "Re: [OMPI users] parallelising ADI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 16:26:51 2012" -->
<!-- isoreceived="20120306212651" -->
<!-- sent="Tue, 06 Mar 2012 13:26:56 -0800" -->
<!-- isosent="20120306212656" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallelising ADI" -->
<!-- id="4F568120.4040604_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04649ABFF695C94F8E6CF3BBBA9B16650F327035_at_BHEXMBX1.livad.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallelising ADI<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 16:26:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18703.php">Gustavo Correa: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Parallelize in distributed-memory fashion or is multi-threaded good 
<br>
enough?  Anyhow, you should be able to find many resources with an 
<br>
Internet search.  This particular mailing list is more for users of 
<br>
OMPI, a particular MPI implementation.  One approach would be to 
<br>
distribute only one axis, solve locally, and transpose axes as 
<br>
necessary.  But, I see Gus also just provided an answer...  :^)
<br>
<p>On 3/6/2012 12:59 PM, Kharche, Sanjay wrote:
<br>
<span class="quotelev1">&gt; I am working on a 3D ADI solver for the heat equation. I have implemented it as serial. Would anybody be able to indicate the best and more straightforward way to parallelise it. Apologies if this is going to the wrong forum.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18703.php">Gustavo Correa: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18706.php">Tim Prince: "Re: [OMPI users] parallelising ADI"</a>
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
