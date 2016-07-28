<?
$subject_val = "Re: [OMPI users] OpenMPI extremely slow with progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 08:47:13 2009" -->
<!-- isoreceived="20090820124713" -->
<!-- sent="Thu, 20 Aug 2009 08:47:08 -0400" -->
<!-- isosent="20090820124708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI extremely slow with progress threads" -->
<!-- id="A58D28FA-3B5D-403D-B189-277AE4F6B9DA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="82B87B56-6475-4F5E-92D0-2910CAD0F8B9_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI extremely slow with progress threads<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-20 08:47:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<li><strong>In reply to:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>Reply:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2009, at 7:48 PM, tomek wrote:
<br>
<p><span class="quotelev1">&gt; Now that I have complied my code with OpenMPI 1.3.3 here is a new
</span><br>
<span class="quotelev1">&gt; problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When asynchronous progress is enabled even a simplest test problems
</span><br>
<span class="quotelev1">&gt; run extremely slowly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>What's &quot;extremely slowly&quot;, and what does your test program do?
<br>
<p>By &quot;asynchronous progress&quot;, do you mean that you used the --enable- 
<br>
progress-threads option to OMPI's configure, or that you are using non- 
<br>
blocking MPI function calls?
<br>
<p>I'd say that the progress threads stuff in OMPI is immature at best.   
<br>
At worst, it may crash.  It's likely very untested.
<br>
<p>The non-blocking function calls should work just as well as the  
<br>
blocking function calls -- depending on your application, hardware,  
<br>
communication patterns, etc., you can get significant speedup by using  
<br>
the non-blocking communication calls.
<br>
<p>FWIW, some types of networks effectively have asynchronous progress  
<br>
anyway (which is one of the reasons we haven't done too much on the  
<br>
OMPI software side of enabling async. progress).  If your network has  
<br>
hardware (or software) offload of message passing, then you might be  
<br>
getting it &quot;for free&quot; by OMPI's normal operating modes anyway.  Note  
<br>
that asynchronous progress is typically most useful when sending large  
<br>
messages.
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
<li><strong>Next message:</strong> <a href="10446.php">Jeff Squyres: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10444.php">tomek: "[OMPI users] Blocking communication a thread better then asynchronous progress?"</a>
<li><strong>In reply to:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>Reply:</strong> <a href="10452.php">tomek: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
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
