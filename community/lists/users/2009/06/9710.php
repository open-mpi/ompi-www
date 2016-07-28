<?
$subject_val = "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 08:49:18 2009" -->
<!-- isoreceived="20090625124918" -->
<!-- sent="Thu, 25 Jun 2009 08:49:09 -0400" -->
<!-- isosent="20090625124909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications" -->
<!-- id="8BC72F3A-9244-405B-9EDD-E990DC615477_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A436E08.30406_at_dps.uibk.ac.at" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 08:49:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>In reply to:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: there's also work going on to use direct process-to-process  
<br>
copies (vs. using shared memory bounce buffers).  Various MPI  
<br>
implementations have had this technology for a while (e.g., QLogic's  
<br>
PSM-based MPI); the Open-MX guys are publishing the knem open source  
<br>
kernel module for this purpose these days (<a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a> 
<br>
), etc.
<br>
<p><p>On Jun 25, 2009, at 8:31 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; At the moment, I believe the answer is the main memory route. We  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev2">&gt; &gt; a project just starting here (LANL) to implement the cache-level
</span><br>
<span class="quotelev2">&gt; &gt; exchange, but it won't be ready for release for awhile.
</span><br>
<span class="quotelev1">&gt; Interesting, actually I am a PhD student and my topic is  
</span><br>
<span class="quotelev1">&gt; optimization of
</span><br>
<span class="quotelev1">&gt; MPI applications on multi-core architectures. I will be very  
</span><br>
<span class="quotelev1">&gt; interested
</span><br>
<span class="quotelev1">&gt; in collaborating in such project. Can you give me more details about  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; (links/pointers)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards, Simone
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 25, 2009, at 2:39 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a simple question for the shared memory (sm) module  
</span><br>
<span class="quotelev1">&gt; developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the current implementation, is there any advantage of having
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shared cache among processes communicating?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For example let say we have P1 and P2 placed in the same CPU on 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different physical cores with shared cache, P1 wants to send a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message to P2 and the message is already in the cache.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How the message is being actually exchanged? Is the cache line
</span><br>
<span class="quotelev3">&gt; &gt;&gt; invalidated, written to main memory and exchanged by using some DMA
</span><br>
<span class="quotelev3">&gt; &gt;&gt; transfer... or is the message in the cache used (avoiding access to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the main memory)?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; thanks in advance, Simone P.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Previous message:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>In reply to:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
<li><strong>Reply:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI users] Shared Memory (SM) module and sharedcache	implications"</a>
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
