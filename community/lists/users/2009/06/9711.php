<?
$subject_val = "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 09:12:56 2009" -->
<!-- isoreceived="20090625131256" -->
<!-- sent="Thu, 25 Jun 2009 07:12:39 -0600" -->
<!-- isosent="20090625131239" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications" -->
<!-- id="1A20032C-A53B-47A3-BA01-A2A02801E66F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8BC72F3A-9244-405B-9EDD-E990DC615477_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 09:12:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>In reply to:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doesn't that still pull the message off-socket? I thought it went  
<br>
through the kernel for that method, which means moving it to main  
<br>
memory.
<br>
<p><p>On Jun 25, 2009, at 6:49 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: there's also work going on to use direct process-to-process  
</span><br>
<span class="quotelev1">&gt; copies (vs. using shared memory bounce buffers).  Various MPI  
</span><br>
<span class="quotelev1">&gt; implementations have had this technology for a while (e.g., QLogic's  
</span><br>
<span class="quotelev1">&gt; PSM-based MPI); the Open-MX guys are publishing the knem open source  
</span><br>
<span class="quotelev1">&gt; kernel module for this purpose these days (<a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a> 
</span><br>
<span class="quotelev1">&gt; ), etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 8:31 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; At the moment, I believe the answer is the main memory route. We  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a project just starting here (LANL) to implement the cache-level
</span><br>
<span class="quotelev3">&gt;&gt; &gt; exchange, but it won't be ready for release for awhile.
</span><br>
<span class="quotelev2">&gt;&gt; Interesting, actually I am a PhD student and my topic is  
</span><br>
<span class="quotelev2">&gt;&gt; optimization of
</span><br>
<span class="quotelev2">&gt;&gt; MPI applications on multi-core architectures. I will be very  
</span><br>
<span class="quotelev2">&gt;&gt; interested
</span><br>
<span class="quotelev2">&gt;&gt; in collaborating in such project. Can you give me more details  
</span><br>
<span class="quotelev2">&gt;&gt; about it
</span><br>
<span class="quotelev2">&gt;&gt; (links/pointers)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards, Simone
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jun 25, 2009, at 2:39 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I have a simple question for the shared memory (sm) module  
</span><br>
<span class="quotelev2">&gt;&gt; developers
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; In the current implementation, is there any advantage of having
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; shared cache among processes communicating?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For example let say we have P1 and P2 placed in the same CPU on 2
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; different physical cores with shared cache, P1 wants to send a
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; message to P2 and the message is already in the cache.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; How the message is being actually exchanged? Is the cache line
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; invalidated, written to main memory and exchanged by using some  
</span><br>
<span class="quotelev2">&gt;&gt; DMA
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; transfer... or is the message in the cache used (avoiding access  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the main memory)?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; thanks in advance, Simone P.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>In reply to:</strong> <a href="9710.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
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
