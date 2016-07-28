<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 16:55:16 2008" -->
<!-- isoreceived="20080714205516" -->
<!-- sent="Mon, 14 Jul 2008 16:55:10 -0400" -->
<!-- isosent="20080714205510" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="F9E0C09E-34A1-47EC-8161-EAB9956AEEDA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="000201c8e5d5$826793c0$9d37170a_at_amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 16:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2008, at 1:17 PM, Sean Hefty wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I talked to Sean Hefty about it, but we never figured out a  
</span><br>
<span class="quotelev2">&gt;&gt; definitive
</span><br>
<span class="quotelev2">&gt;&gt; cause or solution.  My best guess is that there is something wonky
</span><br>
<span class="quotelev2">&gt;&gt; about multiple processes simultaneously interacting with the IBCM
</span><br>
<span class="quotelev2">&gt;&gt; kernel driver from userspace; but I don't know jack about kernel
</span><br>
<span class="quotelev2">&gt;&gt; stuff, so that's a total SWAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only reason I can think of why ib_cm_listen() fails is if  
</span><br>
<span class="quotelev1">&gt; there's a conflict
</span><br>
<span class="quotelev1">&gt; with the service_id and/or service_mask from multiple threads.  What  
</span><br>
<span class="quotelev1">&gt; does OMPI
</span><br>
<span class="quotelev1">&gt; pass in for these parameters?
</span><br>
<p><p>The service ID that it uses is its PID and the mask is always 0.   
<br>
There will only be one call to ib_cm_listen() per device per MPI  
<br>
process.
<br>
<p>Open MPI certainly could be buggy with IBCM, of course -- but it's  
<br>
fishy that the same exact &quot;mpirun ...&quot; command line works one time and  
<br>
fails the next (it's kinda random when the problem occurs).
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
<li><strong>Next message:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4344.php">Ralph H. Castain: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4343.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4346.php">Sean Hefty: "Re: [OMPI devel] IBCM error"</a>
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
