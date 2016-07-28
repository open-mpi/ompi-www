<?
$subject_val = "Re: [OMPI users] Linking failure on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 16:36:43 2012" -->
<!-- isoreceived="20121002203643" -->
<!-- sent="Tue, 02 Oct 2012 14:36:29 -0600" -->
<!-- isosent="20121002203629" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linking failure on Windows" -->
<!-- id="506B504D.8010002_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="506B4DD6.3070608_at_auckland.ac.nz" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linking failure on Windows<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 16:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20382.php">mostafa.barmshory_at_[hidden]: "[OMPI users] Load and link MPI Host at runtime"</a>
<li><strong>Previous message:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No worries.  It's good to see that it compiles.
<br>
<p>Damien
<br>
<p>On 02/10/2012 2:25 PM, Gib Bogle wrote:
<br>
<span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your post made me realize my mistake!  I was thinking only of the 
</span><br>
<span class="quotelev1">&gt; preprocessor definitions for compiling cvAdvDiff_non_p.c, forgetting 
</span><br>
<span class="quotelev1">&gt; about the previously built library sundials_nvecparallel.lib, which is 
</span><br>
<span class="quotelev1">&gt; of course where nvector_parallel.c was compiled.  When I rebuild that 
</span><br>
<span class="quotelev1">&gt; library with OMPI_IMPORTS my problem disappears.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Shiqing, and sorry Damien!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gib
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20382.php">mostafa.barmshory_at_[hidden]: "[OMPI users] Load and link MPI Host at runtime"</a>
<li><strong>Previous message:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<li><strong>In reply to:</strong> <a href="20380.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20369.php">Gib Bogle: "Re: [OMPI users] Linking failure on Windows"</a>
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
