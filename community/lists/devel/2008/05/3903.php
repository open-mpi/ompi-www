<?
$subject_val = "Re: [OMPI devel] heterogeneous OpenFabrics adapters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 12:33:27 2008" -->
<!-- isoreceived="20080513163327" -->
<!-- sent="Tue, 13 May 2008 12:33:14 -0400" -->
<!-- isosent="20080513163314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] heterogeneous OpenFabrics adapters" -->
<!-- id="54F16CA1-EA86-4590-8389-08882FE76C18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200805131124.42397.jon_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] heterogeneous OpenFabrics adapters<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-13 12:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 13, 2008, at 12:24 PM, Jon Mason wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Because the BSRQ info is on the component (i.e., global), we should
</span><br>
<span class="quotelev2">&gt;&gt; detect when multiple different receive_queues values are specified  
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; gracefully abort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How would we verify that the remote receive_queues values are the  
</span><br>
<span class="quotelev1">&gt; same?  By
</span><br>
<span class="quotelev1">&gt; passing around the receive_queues values in the modex (which I  
</span><br>
<span class="quotelev1">&gt; thought we
</span><br>
<span class="quotelev1">&gt; were trying to reduce) or would we pass this around during cpc setup  
</span><br>
<span class="quotelev1">&gt; (for
</span><br>
<span class="quotelev1">&gt; those that can support this)?
</span><br>
<p>I was specifically talking about one MPI process here -- it can detect  
<br>
that it finds multiple adapters and they have different receive_queues  
<br>
values.
<br>
<p>As for different processes having different receive_queues values,  
<br>
yep, we're kinda hosed there at the moment.  This is what I was  
<br>
referring to in my first mail by &quot;it will have scalability  
<br>
issues&quot; (adding info to the modex).  I think we just say for v1.3 that  
<br>
it's not supported and come back to the issue in v1.4.
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
<li><strong>Next message:</strong> <a href="3904.php">Don Kerr: "Re: [OMPI devel] btl_openib_iwarp.c : making platform specific calls"</a>
<li><strong>Previous message:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3902.php">Jon Mason: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
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
