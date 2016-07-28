<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 08:13:06 2016" -->
<!-- isoreceived="20160506121306" -->
<!-- sent="Fri, 6 May 2016 12:13:04 +0000" -->
<!-- isosent="20160506121304" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="F92D6154-69E3-462E-A9AF-A821BE0BECF8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CALb_wBTka-wZdYKxfmpu8pv0BKX8jQ6uNDxgU7HUxJcmnESfSQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 08:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29113.php">Dave Love: "[OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29111.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2016, at 10:09 PM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's taking so long because you are sleeping for .1 second between calling MPI_Test().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The TCP transport is only sending a few fragments of your message during each iteration through MPI_Test (because, by definition, it has to return &quot;immediately&quot;).  Other transports do better handing off large messages like this to hardware for asynchronous progress.
</span><br>
<span class="quotelev1">&gt; This agrees with what I observed. Larger messages needs more calls of MPI_Test. What do you mean by other transports?
</span><br>
<p>The POSIX sockets API, commonly used with TCP over Ethernet, is great for most network-based applications, but it has some inherent constraints that limit its performance in HPC types of applications.
<br>
<p>That being said, many people just take a bunch of servers and run MPI over over TCP/Ethernet, and it works well enough for them.  Because of this &quot;good enough&quot; performance, and the fact that every server in the world supports some type of Ethernet capability, all MPI implementations support TCP.
<br>
<p>But there are more demanding HPC applications that require higher performance from the network in order to get good overall performance.  As such, other networking APIs -- most commonly provided by vendors for HPC-class networks (Ethernet or otherwise) -- do not have the same performance constraints as the POSIX sockets API, and are usually preferred by HPC applications.  
<br>
<p>There's usually two kinds of performance improvements that such networking APIs offer (in conjunction with the underlying NIC for the HPC-class network):
<br>
<p>1. Improving software API efficiency (e.g., avoid extra memory copies, bypassing the OS and exposing NIC hardware directly into userspace, etc.)
<br>
<p>2. Exploiting NIC hardware capabilities, usually designed for MPI and/or general high performance (e.g., polling for progress instead of waiting for interrupts, hardware demultiplex of incoming messages directly to target processes, direct data placement at the target, etc.)
<br>
<p>Hence, when I say &quot;other transports&quot;, I'm referring to these HPC-class networks (and associated APIs).
<br>
<p><span class="quotelev1">&gt; Additionally, in the upcoming v2.0.0 release is a non-default option to enable an asynchronous progress thread for the TCP transport.  We're up to v2.0.0rc2; you can give that async TCP support a whirl, if you want.  Pass &quot;--mca btl_tcp_progress_thread 1&quot; on the mpirun command line to enable the TCP progress thread to try it.
</span><br>
<span class="quotelev1">&gt; Does this mean there's an additional thread to transfer data in background? 
</span><br>
<p>Yes.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29113.php">Dave Love: "[OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29111.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>In reply to:</strong> <a href="29106.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
