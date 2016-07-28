<?
$subject_val = "Re: [OMPI devel] Multi-Rail and Open IB BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 13 09:59:49 2007" -->
<!-- isoreceived="20071113145949" -->
<!-- sent="Mon, 12 Nov 2007 06:03:07 -0500" -->
<!-- isosent="20071112110307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-Rail and Open IB BTL" -->
<!-- id="31FF06F4-F140-4515-9122-FEBC28C3AC10_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4734A5C2.2030907_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-12 06:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 9, 2007, at 1:24 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; both, I was thinking of listing what I think are multi-rail  
</span><br>
<span class="quotelev1">&gt; requirements
</span><br>
<span class="quotelev1">&gt; but wanted to understand what the current state of things are
</span><br>
<p>I believe the OF portion of the FAQ describes what we do in the v1.2  
<br>
series (right Gleb?); I honestly don't remember what we do today on  
<br>
the trunk (I'm pretty sure that Gleb has tweaked it recently).
<br>
<p>As for what we *should* do, it's a very complicated question.  :-\
<br>
<p>This is where all these discussions regarding affinity, NUMA, and NUNA  
<br>
(non uniform network architecture) come into play.  A &quot;very simple&quot;  
<br>
scenario may be something like this:
<br>
<p>- host A is UMA (perhaps even a uniprocessor) with 2 ports that are  
<br>
equidistant from the 1 MPI process on that host
<br>
- host B is the same, except it only has 1 active port on the same IB  
<br>
subnet as host A's 2 ports
<br>
- the ports on both hosts are all the same speed (e.g., DDR)
<br>
- the ports all share a single, common, non-blocking switch
<br>
<p>But even with this &quot;simple&quot; case, the answer as to what you should do  
<br>
is still unclear.  If host A is able to drive both of its DDR links at  
<br>
full speed, you're could cause congestion at the link to host B if the  
<br>
MPI process on host A opens two connections.  But if host A is only  
<br>
able to drive the same effective bandwidth out of its two ports as it  
<br>
is through a single port, then the end effect is probably fairly  
<br>
negligible -- it might not make much of a difference at all as to  
<br>
whether the MPI process A opens 1 or 2 connections to host B.
<br>
<p>But then throw in other effects that I mentioned above (NUMA, NUNA,  
<br>
etc.), and the equation becomes much more complex.  In some cases, it  
<br>
may be good to open 1 connection (e.g., bandwidth load balancing); in  
<br>
other cases it may be good to open 2 (e.g., congestion avoidance /  
<br>
spreading traffic around the network, particularly in the presence of  
<br>
other MPI jobs on the network).  :-\
<br>
<p>Such NUNA architectures may sound unusual to some, but both IBM and HP  
<br>
sell [many] blade-based HPC solutions with NUNA internal IB networks.   
<br>
Specifically: this is a fairly common scenario.
<br>
<p>So this is a difficult question without a great answer.  The hope is  
<br>
that the new carto framework that Sharon sent requirements around for  
<br>
will be able to at least make topology information available from both  
<br>
the host and the network so that BTLs can possibly make some  
<br>
intelligent decisions about what to do in these kinds of scenarios.
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
<li><strong>Next message:</strong> <a href="2608.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Previous message:</strong> <a href="2606.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>In reply to:</strong> <a href="2603.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>Reply:</strong> <a href="2617.php">Don Kerr: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
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
