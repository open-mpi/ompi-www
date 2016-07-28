<?
$subject_val = "Re: [OMPI users] parallelising ADI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 17:23:50 2012" -->
<!-- isoreceived="20120306222350" -->
<!-- sent="Tue, 06 Mar 2012 17:23:42 -0500" -->
<!-- isosent="20120306222342" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallelising ADI" -->
<!-- id="4F568E6E.4020905_at_aol.com" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 17:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Reply:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 03/06/2012 03:59 PM, Kharche, Sanjay wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on a 3D ADI solver for the heat equation. I have implemented it as serial. Would anybody be able to indicate the best and more straightforward way to parallelise it. Apologies if this is going to the wrong forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
If it's to be implemented in parallelizable fashion (not SSOR style 
<br>
where each line uses updates from the previous line), it should be 
<br>
feasible to divide the outer loop into an appropriate number of blocks, 
<br>
or decompose the physical domain and perform ADI on individual blocks, 
<br>
then update and repeat.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Previous message:</strong> <a href="18705.php">Timothy Stitt: "[OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>In reply to:</strong> <a href="18702.php">Kharche, Sanjay: "[OMPI users] parallelising ADI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
<li><strong>Reply:</strong> <a href="18707.php">Jed Brown: "Re: [OMPI users] parallelising ADI"</a>
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
