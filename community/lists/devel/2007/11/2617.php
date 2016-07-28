<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 16:16:27 2007" -->
<!-- isoreceived="20071114211627" -->
<!-- sent="Wed, 14 Nov 2007 16:16:20 -0500" -->
<!-- isosent="20071114211620" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="473B65A4.9070706_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="31FF06F4-F140-4515-9122-FEBC28C3AC10_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Multi-Rail and Open IB BTL<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 16:16:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2618.php">Terry Frankcombe: "[OMPI devel] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Nov 9, 2007, at 1:24 PM, Don Kerr wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;both, I was thinking of listing what I think are multi-rail  
</span><br>
<span class="quotelev2">&gt;&gt;requirements
</span><br>
<span class="quotelev2">&gt;&gt;but wanted to understand what the current state of things are
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I believe the OF portion of the FAQ describes what we do in the v1.2  
</span><br>
<span class="quotelev1">&gt;series (right Gleb?); I honestly don't remember what we do today on  
</span><br>
<span class="quotelev1">&gt;the trunk (I'm pretty sure that Gleb has tweaked it recently).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Gleb's response answered this.
<br>
<p><span class="quotelev1">&gt;As for what we *should* do, it's a very complicated question.  :-\
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
OK. I knew the &quot;close to NIC&quot; was a concern but was not aware an attempt 
<br>
to tackle this began. I will look at the &quot;carto&quot; framework.
<br>
<p>Thanks
<br>
-DON
<br>
<p><span class="quotelev1">&gt;This is where all these discussions regarding affinity, NUMA, and NUNA  
</span><br>
<span class="quotelev1">&gt;(non uniform network architecture) come into play.  A &quot;very simple&quot;  
</span><br>
<span class="quotelev1">&gt;scenario may be something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- host A is UMA (perhaps even a uniprocessor) with 2 ports that are  
</span><br>
<span class="quotelev1">&gt;equidistant from the 1 MPI process on that host
</span><br>
<span class="quotelev1">&gt;- host B is the same, except it only has 1 active port on the same IB  
</span><br>
<span class="quotelev1">&gt;subnet as host A's 2 ports
</span><br>
<span class="quotelev1">&gt;- the ports on both hosts are all the same speed (e.g., DDR)
</span><br>
<span class="quotelev1">&gt;- the ports all share a single, common, non-blocking switch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But even with this &quot;simple&quot; case, the answer as to what you should do  
</span><br>
<span class="quotelev1">&gt;is still unclear.  If host A is able to drive both of its DDR links at  
</span><br>
<span class="quotelev1">&gt;full speed, you're could cause congestion at the link to host B if the  
</span><br>
<span class="quotelev1">&gt;MPI process on host A opens two connections.  But if host A is only  
</span><br>
<span class="quotelev1">&gt;able to drive the same effective bandwidth out of its two ports as it  
</span><br>
<span class="quotelev1">&gt;is through a single port, then the end effect is probably fairly  
</span><br>
<span class="quotelev1">&gt;negligible -- it might not make much of a difference at all as to  
</span><br>
<span class="quotelev1">&gt;whether the MPI process A opens 1 or 2 connections to host B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But then throw in other effects that I mentioned above (NUMA, NUNA,  
</span><br>
<span class="quotelev1">&gt;etc.), and the equation becomes much more complex.  In some cases, it  
</span><br>
<span class="quotelev1">&gt;may be good to open 1 connection (e.g., bandwidth load balancing); in  
</span><br>
<span class="quotelev1">&gt;other cases it may be good to open 2 (e.g., congestion avoidance /  
</span><br>
<span class="quotelev1">&gt;spreading traffic around the network, particularly in the presence of  
</span><br>
<span class="quotelev1">&gt;other MPI jobs on the network).  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Such NUNA architectures may sound unusual to some, but both IBM and HP  
</span><br>
<span class="quotelev1">&gt;sell [many] blade-based HPC solutions with NUNA internal IB networks.   
</span><br>
<span class="quotelev1">&gt;Specifically: this is a fairly common scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So this is a difficult question without a great answer.  The hope is  
</span><br>
<span class="quotelev1">&gt;that the new carto framework that Sharon sent requirements around for  
</span><br>
<span class="quotelev1">&gt;will be able to at least make topology information available from both  
</span><br>
<span class="quotelev1">&gt;the host and the network so that BTLs can possibly make some  
</span><br>
<span class="quotelev1">&gt;intelligent decisions about what to do in these kinds of scenarios.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2618.php">Terry Frankcombe: "[OMPI devel] Memory manager"</a>
<li><strong>Previous message:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2607.php">Jeff Squyres: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
