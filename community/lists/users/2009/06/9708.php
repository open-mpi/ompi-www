<?
$subject_val = "Re: [OMPI users] Shared Memory (SM) module and shared cache implications";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 07:43:43 2009" -->
<!-- isoreceived="20090625114343" -->
<!-- sent="Thu, 25 Jun 2009 05:43:29 -0600" -->
<!-- isosent="20090625114329" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Shared Memory (SM) module and shared cache implications" -->
<!-- id="A2AE760D-14E7-4BDF-AFF5-F2D67049D353_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4337D8.2060605_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Shared Memory (SM) module and shared cache implications<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 07:43:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>Previous message:</strong> <a href="9707.php">Simone Pellegrini: "[OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>In reply to:</strong> <a href="9707.php">Simone Pellegrini: "[OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>Reply:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment, I believe the answer is the main memory route. We have  
<br>
a project just starting here (LANL) to implement the cache-level  
<br>
exchange, but it won't be ready for release for awhile.
<br>
<p><p>On Jun 25, 2009, at 2:39 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have a simple question for the shared memory (sm) module  
</span><br>
<span class="quotelev1">&gt; developers of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the current implementation, is there any advantage of having  
</span><br>
<span class="quotelev1">&gt; shared cache among processes communicating?
</span><br>
<span class="quotelev1">&gt; For example let say we have P1 and P2 placed in the same CPU on 2  
</span><br>
<span class="quotelev1">&gt; different physical cores with shared cache, P1 wants to send a  
</span><br>
<span class="quotelev1">&gt; message to P2 and the message is already in the cache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How the message is being actually exchanged? Is the cache line  
</span><br>
<span class="quotelev1">&gt; invalidated, written to main memory and exchanged by using some DMA  
</span><br>
<span class="quotelev1">&gt; transfer... or is the message in the cache used (avoiding access to  
</span><br>
<span class="quotelev1">&gt; the main memory)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance, Simone P.
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
<li><strong>Next message:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>Previous message:</strong> <a href="9707.php">Simone Pellegrini: "[OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<li><strong>In reply to:</strong> <a href="9707.php">Simone Pellegrini: "[OMPI users] Shared Memory (SM) module and shared cache implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
<li><strong>Reply:</strong> <a href="9709.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory (SM) module and shared cache	implications"</a>
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
