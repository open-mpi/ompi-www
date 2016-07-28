<?
$subject_val = "Re: [OMPI users] OpenMPI extremely slow with progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 21 12:18:10 2009" -->
<!-- isoreceived="20090821161810" -->
<!-- sent="Fri, 21 Aug 2009 18:18:02 +0200" -->
<!-- isosent="20090821161802" -->
<!-- name="tomek" -->
<!-- email="t.koziara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI extremely slow with progress threads" -->
<!-- id="8237492B-0824-457F-9ABA-BC0E9B030A81_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A58D28FA-3B5D-403D-B189-277AE4F6B9DA_at_cisco.com" -->
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
<strong>From:</strong> tomek (<em>t.koziara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-21 12:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10445.php">Jeff Squyres: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>I am using OMPI on a MacBook Pro (for the moment).
<br>
<p><span class="quotelev1">&gt; What's &quot;extremely slowly&quot;, and what does your test program do?
</span><br>
<p>For example, test programs of Zoltan (load balancing library from  
<br>
sandia) never finish, while normally
<br>
they take a fraction of second to finish.
<br>
<p><span class="quotelev1">&gt; By &quot;asynchronous progress&quot;, do you mean that you used the --enable- 
</span><br>
<span class="quotelev1">&gt; progress-threads option to OMPI's configure, or that you are using  
</span><br>
<span class="quotelev1">&gt; non-blocking MPI function calls?
</span><br>
<p>I meant using --enable-progress-threads. When disabled - doesn't it  
<br>
mean that block and non-blocking communication are basically same (and  
<br>
blocking)? (at least on a gigabit ethernet TCPIP based network)
<br>
<p><span class="quotelev1">&gt; I'd say that the progress threads stuff in OMPI is immature at  
</span><br>
<span class="quotelev1">&gt; best.  At worst, it may crash.  It's likely very untested.
</span><br>
<p>Yes, I could see that myself.
<br>
<p><span class="quotelev1">&gt; The non-blocking function calls should work just as well as the  
</span><br>
<span class="quotelev1">&gt; blocking function calls -- depending on your application, hardware,  
</span><br>
<span class="quotelev1">&gt; communication patterns, etc., you can get significant speedup by  
</span><br>
<span class="quotelev1">&gt; using the non-blocking communication calls.
</span><br>
<p>I am not very knowledgeable in terms of networking, but is gigabit  
<br>
ethernet/TCPIP capable of asynchronous comm?
<br>
<p><span class="quotelev1">&gt; FWIW, some types of networks effectively have asynchronous progress  
</span><br>
<span class="quotelev1">&gt; anyway (which is one of the reasons we haven't done too much on the  
</span><br>
<span class="quotelev1">&gt; OMPI software side of enabling async. progress).  If your network  
</span><br>
<span class="quotelev1">&gt; has hardware (or software) offload of message passing, then you  
</span><br>
<span class="quotelev1">&gt; might be getting it &quot;for free&quot; by OMPI's normal operating modes  
</span><br>
<span class="quotelev1">&gt; anyway.  Note that asynchronous progress is typically most useful  
</span><br>
<span class="quotelev1">&gt; when sending large messages.
</span><br>
<p>Will need to learn more and see on which from the available clusters  
<br>
should I be able to have good support for asynch. which is needed in  
<br>
my application.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10453.php">tomek: "Re: [OMPI users] Blocking communication a thread better thenasynchronous progress?"</a>
<li><strong>Previous message:</strong> <a href="10451.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10445.php">Jeff Squyres: "Re: [OMPI users] OpenMPI extremely slow with progress threads"</a>
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
