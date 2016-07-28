<?
$subject_val = "Re: [OMPI users] could oversubscription clobber an executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 12:32:01 2009" -->
<!-- isoreceived="20090514163201" -->
<!-- sent="Thu, 14 May 2009 12:31:55 -0400" -->
<!-- isosent="20090514163155" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] could oversubscription clobber an executable?" -->
<!-- id="CFF5380F-7F90-463E-8275-2D9859657AC7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A0C2694.80703_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] could oversubscription clobber an executable?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 12:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9341.php">Bouguerra mohamed slim: "[OMPI users] bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>In reply to:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9344.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2009, at 10:11 AM, Valmor de Almeida wrote:
<br>
<p><span class="quotelev2">&gt; &gt; This sounds like memory badness is occurring somewhere in your
</span><br>
<span class="quotelev2">&gt; &gt; application which eventually corrupts things to make them stop  
</span><br>
<span class="quotelev1">&gt; working
</span><br>
<span class="quotelev2">&gt; &gt; (e.g., writing beyond the end of arrays, etc.).  Have you run your  
</span><br>
<span class="quotelev1">&gt; app
</span><br>
<span class="quotelev2">&gt; &gt; through a memory-checking debugger, perchance?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I have the compiler flag for array bounds checking turned on. Is this
</span><br>
<span class="quotelev1">&gt; sufficient?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Probably not; there are many different kinds of memory corruption.
<br>
<p><span class="quotelev1">&gt; I have not used a debugger for this purpose. Would gdb do it with mpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Try valgrind.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9341.php">Bouguerra mohamed slim: "[OMPI users] bug in ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="9339.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>In reply to:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9344.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
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
