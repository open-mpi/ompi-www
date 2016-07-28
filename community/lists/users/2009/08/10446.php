<?
$subject_val = "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 08:52:53 2009" -->
<!-- isoreceived="20090820125253" -->
<!-- sent="Thu, 20 Aug 2009 08:52:48 -0400" -->
<!-- isosent="20090820125248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?" -->
<!-- id="66F38F57-7538-4909-9F9A-A83F9E1669CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87BCEEB2-197F-4705-99D7-2F0D2DB53990_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-20 08:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Previous message:</strong> <a href="10445.php">Jeff Squyres: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Reply:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 20, 2009, at 5:14 AM, tomek wrote:
<br>
<p><span class="quotelev1">&gt; Is doing blocking communication in a separate thread better then
</span><br>
<span class="quotelev1">&gt; asynchronous progress?
</span><br>
<span class="quotelev1">&gt; (At least as a workaround until the proper implementation gets  
</span><br>
<span class="quotelev1">&gt; improved)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>At the moment, yes.  OMPI's asynchronous progress is &quot;loosely  
<br>
tested&quot; (at best).
<br>
<p>OMPI's threading support is somewhat stable for some devices (e.g.,  
<br>
not OpenFabrics-based networks), but it's still somewhat new, so  
<br>
feedback would be welcome here.
<br>
<p>Per my other mail, depending on your network/etc., you might get  
<br>
asynchronous behavior using non-blocking MPI functions.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10447.php">Jean Potsam: "[OMPI users] problem with installing openmp 1.3"</a>
<li><strong>Previous message:</strong> <a href="10445.php">Jeff Squyres: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>In reply to:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Reply:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
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
