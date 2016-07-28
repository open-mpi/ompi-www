<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:34:56 2009" -->
<!-- isoreceived="20090304213456" -->
<!-- sent="Wed, 4 Mar 2009 16:34:49 -0500" -->
<!-- isosent="20090304213449" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="D07623F7-5A8B-42DA-B3BF-2593DD37E360_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090304211620.GG30193_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 16:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8301.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8301.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2009, at 4:16 PM, Jan Lindheim wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Mar 04, 2009 at 04:02:06PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This *usually* indicates a physical / layer 0 problem in your IB
</span><br>
<span class="quotelev2">&gt; &gt; fabric.  You should do a diagnostic on your HCAs, cables, and  
</span><br>
<span class="quotelev1">&gt; switches.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Increasing the timeout value should only be necessary on very  
</span><br>
<span class="quotelev1">&gt; large IB
</span><br>
<span class="quotelev2">&gt; &gt; fabrics and/or very congested networks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks Jeff!
</span><br>
<span class="quotelev1">&gt; What is considered to be very large IB fabrics?
</span><br>
<span class="quotelev1">&gt; I assume that with just over 180 compute nodes,
</span><br>
<span class="quotelev1">&gt; our cluster does not fall into this category.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I was a little misleading in my note -- I should clarify.  It's really  
<br>
congestion that matters, not the size of the fabric.  Congestion is  
<br>
potentially more likely to happen in larger fabrics, since packets may  
<br>
have to flow through more switches, there's likely more apps running  
<br>
on the cluster, etc.  But it's all very application/cluster-specific;  
<br>
only you can know if your fabric is heavily congested based on what  
<br>
you run on it, etc.
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
<li><strong>Next message:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8301.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8301.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8303.php">Jan Lindheim: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
