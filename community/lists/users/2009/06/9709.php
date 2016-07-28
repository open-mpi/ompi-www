<?
$subject_val = "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 08:31:09 2009" -->
<!-- isoreceived="20090625123109" -->
<!-- sent="Thu, 25 Jun 2009 14:31:04 +0200" -->
<!-- isosent="20090625123104" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory (SM) module and shared cache	implications" -->
<!-- id="4A436E08.30406_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A2AE760D-14E7-4BDF-AFF5-F2D67049D353_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory (SM) module and shared cache	implications<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 08:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; At the moment, I believe the answer is the main memory route. We have 
</span><br>
<span class="quotelev1">&gt; a project just starting here (LANL) to implement the cache-level 
</span><br>
<span class="quotelev1">&gt; exchange, but it won't be ready for release for awhile.
</span><br>
Interesting, actually I am a PhD student and my topic is optimization of 
<br>
MPI applications on multi-core architectures. I will be very interested 
<br>
in collaborating in such project. Can you give me more details about it 
<br>
(links/pointers)?
<br>
<p>regards, Simone
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 2:39 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I have a simple question for the shared memory (sm) module developers 
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the current implementation, is there any advantage of having 
</span><br>
<span class="quotelev2">&gt;&gt; shared cache among processes communicating?
</span><br>
<span class="quotelev2">&gt;&gt; For example let say we have P1 and P2 placed in the same CPU on 2 
</span><br>
<span class="quotelev2">&gt;&gt; different physical cores with shared cache, P1 wants to send a 
</span><br>
<span class="quotelev2">&gt;&gt; message to P2 and the message is already in the cache.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How the message is being actually exchanged? Is the cache line 
</span><br>
<span class="quotelev2">&gt;&gt; invalidated, written to main memory and exchanged by using some DMA 
</span><br>
<span class="quotelev2">&gt;&gt; transfer... or is the message in the cache used (avoiding access to 
</span><br>
<span class="quotelev2">&gt;&gt; the main memory)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks in advance, Simone P.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>In reply to:</strong> <a href="9708.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
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
