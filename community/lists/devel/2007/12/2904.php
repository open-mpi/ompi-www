<?
$subject_val = "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 13:23:46 2007" -->
<!-- isoreceived="20071221182346" -->
<!-- sent="Fri, 21 Dec 2007 18:22:29 +0000" -->
<!-- isosent="20071221182229" -->
<!-- name="Tang, Changqing" -->
<!-- email="changquing.tang_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process" -->
<!-- id="D89C2C212795564B837FA1665CAE02990FE241E196_at_G5W0278.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200712212009.26816.jackm_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process<br>
<strong>From:</strong> Tang, Changqing (<em>changquing.tang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-21 13:22:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2905.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Maybe in reply to:</strong> <a href="2893.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What we do for heart-beat is using zero-byte rdma_write, the message goes to the peer QP only, there is no need to post anything
<br>
on remote side, no need for pinned memory.
<br>
<p><p>--CQ
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jack Morgenstein [mailto:jackm_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 21, 2007 12:09 PM
</span><br>
<span class="quotelev1">&gt; To: Tang, Changqing
</span><br>
<span class="quotelev1">&gt; Cc: pasha_at_[hidden];
</span><br>
<span class="quotelev1">&gt; mvapich-discuss_at_[hidden];
</span><br>
<span class="quotelev1">&gt; general_at_[hidden]; Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [ofa-general] [RFC] XRC -- make receiving XRC QP
</span><br>
<span class="quotelev1">&gt; independent of any one user process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 21 December 2007 19:13, Tang, Changqing wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This kernel QP is for receiving only, so when there is no
</span><br>
<span class="quotelev1">&gt; activity on
</span><br>
<span class="quotelev2">&gt; &gt; this QP, can the kernel sends a heart-beat message to check if the
</span><br>
<span class="quotelev2">&gt; &gt; remote sending QP is still there (still connected) ? if not, the
</span><br>
<span class="quotelev2">&gt; &gt; kernel is safe to cleanup this qp.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So whenever the RC connection is broken, kernel can destroy this QP.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; This increases the XRC complexity considerably:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Need to have a separate kernel thread which will scan ALL
</span><br>
<span class="quotelev1">&gt; xrc domains on this host for XRC receive QPs.
</span><br>
<span class="quotelev1">&gt;    This thread will need to do some form of RDMA_READ/WRITE,
</span><br>
<span class="quotelev1">&gt; because otherwise it will interfere with
</span><br>
<span class="quotelev1">&gt;    the remote (sending side) operation.  Furthermore, the
</span><br>
<span class="quotelev1">&gt; sending-side XRC QP may not have anyone listening
</span><br>
<span class="quotelev1">&gt;    on an associated XRC SRQ qp -- it is not meant to be set
</span><br>
<span class="quotelev1">&gt; up to receive.  We only need an operation that
</span><br>
<span class="quotelev1">&gt;    will yield a RETRY_EXCEEDED error completion if the
</span><br>
<span class="quotelev1">&gt; connection has broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. This opens the door for all sorts of nasty race
</span><br>
<span class="quotelev1">&gt; conditions, since we will now have a bi-directional
</span><br>
<span class="quotelev1">&gt;    protocol. For example, what if this feature is being
</span><br>
<span class="quotelev1">&gt; combined with APM (valid for RC QPs), and we
</span><br>
<span class="quotelev1">&gt;    are simply in the middle of a migration, and maybe
</span><br>
<span class="quotelev1">&gt; communication is temporarily interrupted.
</span><br>
<span class="quotelev1">&gt;    We will be killing off the QP without allowing any error
</span><br>
<span class="quotelev1">&gt; recovery mechanism to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. The application complexity goes up -- we now need the
</span><br>
<span class="quotelev1">&gt; sending-side QP to declare a memory region and send
</span><br>
<span class="quotelev1">&gt;    this region's address to the receiving side so that the
</span><br>
<span class="quotelev1">&gt; receiving side (the kernel thread mentioned above)
</span><br>
<span class="quotelev1">&gt;    can periodically try to read from this region.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, I'll give this some thought.  For example, maybe we
</span><br>
<span class="quotelev1">&gt; can rdma_read some random (illegal) address -- If the
</span><br>
<span class="quotelev1">&gt; connection is alive, we'll get a &quot;remote access error&quot;
</span><br>
<span class="quotelev1">&gt; completion, while if its dead, we'll get retry exceeded (need
</span><br>
<span class="quotelev1">&gt; to check that the bad rdma read request does not cause the
</span><br>
<span class="quotelev1">&gt; QPs to enter an error state).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2905.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Maybe in reply to:</strong> <a href="2893.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
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
