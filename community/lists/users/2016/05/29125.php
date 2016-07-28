<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 20:58:41 2016" -->
<!-- isoreceived="20160507005841" -->
<!-- sent="Fri, 6 May 2016 19:58:08 -0500" -->
<!-- isosent="20160507005808" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBSxbdKvpWgra0VO1DhbYumz5ajTgbWpOJk7hU0ubwizTQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="F92D6154-69E3-462E-A9AF-A821BE0BECF8_at_cisco.com" -->
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
<strong>From:</strong> Zhen Wang (<em>toddwz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 20:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29124.php">dpchoudh .: "[OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>The hardware limitation doesn't allow me to use anything other than TCP...
<br>
<p>I think I have a good understanding of what's going on, and may have a
<br>
solution. I'll test it out. Thanks to you all.
<br>
<p>Best regards,
<br>
Zhen
<br>
<p>On Fri, May 6, 2016 at 7:13 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2016, at 10:09 PM, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's taking so long because you are sleeping for .1 second between
</span><br>
<span class="quotelev1">&gt; calling MPI_Test().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The TCP transport is only sending a few fragments of your message during
</span><br>
<span class="quotelev1">&gt; each iteration through MPI_Test (because, by definition, it has to return
</span><br>
<span class="quotelev1">&gt; &quot;immediately&quot;).  Other transports do better handing off large messages like
</span><br>
<span class="quotelev1">&gt; this to hardware for asynchronous progress.
</span><br>
<span class="quotelev2">&gt; &gt; This agrees with what I observed. Larger messages needs more calls of
</span><br>
<span class="quotelev1">&gt; MPI_Test. What do you mean by other transports?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The POSIX sockets API, commonly used with TCP over Ethernet, is great for
</span><br>
<span class="quotelev1">&gt; most network-based applications, but it has some inherent constraints that
</span><br>
<span class="quotelev1">&gt; limit its performance in HPC types of applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, many people just take a bunch of servers and run MPI over
</span><br>
<span class="quotelev1">&gt; over TCP/Ethernet, and it works well enough for them.  Because of this
</span><br>
<span class="quotelev1">&gt; &quot;good enough&quot; performance, and the fact that every server in the world
</span><br>
<span class="quotelev1">&gt; supports some type of Ethernet capability, all MPI implementations support
</span><br>
<span class="quotelev1">&gt; TCP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But there are more demanding HPC applications that require higher
</span><br>
<span class="quotelev1">&gt; performance from the network in order to get good overall performance.  As
</span><br>
<span class="quotelev1">&gt; such, other networking APIs -- most commonly provided by vendors for
</span><br>
<span class="quotelev1">&gt; HPC-class networks (Ethernet or otherwise) -- do not have the same
</span><br>
<span class="quotelev1">&gt; performance constraints as the POSIX sockets API, and are usually preferred
</span><br>
<span class="quotelev1">&gt; by HPC applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's usually two kinds of performance improvements that such networking
</span><br>
<span class="quotelev1">&gt; APIs offer (in conjunction with the underlying NIC for the HPC-class
</span><br>
<span class="quotelev1">&gt; network):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Improving software API efficiency (e.g., avoid extra memory copies,
</span><br>
<span class="quotelev1">&gt; bypassing the OS and exposing NIC hardware directly into userspace, etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Exploiting NIC hardware capabilities, usually designed for MPI and/or
</span><br>
<span class="quotelev1">&gt; general high performance (e.g., polling for progress instead of waiting for
</span><br>
<span class="quotelev1">&gt; interrupts, hardware demultiplex of incoming messages directly to target
</span><br>
<span class="quotelev1">&gt; processes, direct data placement at the target, etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, when I say &quot;other transports&quot;, I'm referring to these HPC-class
</span><br>
<span class="quotelev1">&gt; networks (and associated APIs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Additionally, in the upcoming v2.0.0 release is a non-default option to
</span><br>
<span class="quotelev1">&gt; enable an asynchronous progress thread for the TCP transport.  We're up to
</span><br>
<span class="quotelev1">&gt; v2.0.0rc2; you can give that async TCP support a whirl, if you want.  Pass
</span><br>
<span class="quotelev1">&gt; &quot;--mca btl_tcp_progress_thread 1&quot; on the mpirun command line to enable the
</span><br>
<span class="quotelev1">&gt; TCP progress thread to try it.
</span><br>
<span class="quotelev2">&gt; &gt; Does this mean there's an additional thread to transfer data in
</span><br>
<span class="quotelev1">&gt; background?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29112.php">http://www.open-mpi.org/community/lists/users/2016/05/29112.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29126.php">Siegmar Gross: "[OMPI users] slot problem on &quot;SUSE Linux, Enterprise Server 12 (x86_64)&quot;"</a>
<li><strong>Previous message:</strong> <a href="29124.php">dpchoudh .: "[OMPI users] No core dump in some cases"</a>
<li><strong>In reply to:</strong> <a href="29112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29138.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
