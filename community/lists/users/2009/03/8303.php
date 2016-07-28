<?
$subject_val = "Re: [OMPI users] RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 16:46:01 2009" -->
<!-- isoreceived="20090304214601" -->
<!-- sent="Wed, 4 Mar 2009 13:45:56 -0800" -->
<!-- isosent="20090304214556" -->
<!-- name="Jan Lindheim" -->
<!-- email="lindheim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RETRY EXCEEDED ERROR" -->
<!-- id="20090304214554.GH30193_at_cacr.caltech.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D07623F7-5A8B-42DA-B3BF-2593DD37E360_at_cisco.com" -->
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
<strong>From:</strong> Jan Lindheim (<em>lindheim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 16:45:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Mar 04, 2009 at 04:34:49PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Mar 4, 2009, at 4:16 PM, Jan Lindheim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;On Wed, Mar 04, 2009 at 04:02:06PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This *usually* indicates a physical / layer 0 problem in your IB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fabric.  You should do a diagnostic on your HCAs, cables, and  
</span><br>
<span class="quotelev2">&gt; &gt;switches.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Increasing the timeout value should only be necessary on very  
</span><br>
<span class="quotelev2">&gt; &gt;large IB
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fabrics and/or very congested networks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks Jeff!
</span><br>
<span class="quotelev2">&gt; &gt;What is considered to be very large IB fabrics?
</span><br>
<span class="quotelev2">&gt; &gt;I assume that with just over 180 compute nodes,
</span><br>
<span class="quotelev2">&gt; &gt;our cluster does not fall into this category.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was a little misleading in my note -- I should clarify.  It's really  
</span><br>
<span class="quotelev1">&gt; congestion that matters, not the size of the fabric.  Congestion is  
</span><br>
<span class="quotelev1">&gt; potentially more likely to happen in larger fabrics, since packets may  
</span><br>
<span class="quotelev1">&gt; have to flow through more switches, there's likely more apps running  
</span><br>
<span class="quotelev1">&gt; on the cluster, etc.  But it's all very application/cluster-specific;  
</span><br>
<span class="quotelev1">&gt; only you can know if your fabric is heavily congested based on what  
</span><br>
<span class="quotelev1">&gt; you run on it, etc.
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
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks again Jeff!
<br>
Time to dig up diagnostics tools and look at port statistics.
<br>
<p>Jan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8304.php">Terry Frankcombe: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8302.php">Jeff Squyres: "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Reply:</strong> <a href="8309.php">Pavel Shamis (Pasha): "Re: [OMPI users] RETRY EXCEEDED ERROR"</a>
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
