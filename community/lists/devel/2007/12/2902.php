<?
$subject_val = "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 21 12:14:41 2007" -->
<!-- isoreceived="20071221171441" -->
<!-- sent="Fri, 21 Dec 2007 17:13:26 +0000" -->
<!-- isosent="20071221171326" -->
<!-- name="Tang, Changqing" -->
<!-- email="changquing.tang_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process" -->
<!-- id="D89C2C212795564B837FA1665CAE02990FE239C7D1_at_G5W0278.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200712211031.59761.jackm_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2007-12-21 12:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Maybe in reply to:</strong> <a href="2893.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Jack Morgenstein [mailto:jackm_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, December 21, 2007 2:32 AM
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
<span class="quotelev1">&gt; On Thursday 20 December 2007 18:24, Tang, Changqing wrote:
</span><br>
<span class="quotelev2">&gt; &gt;        If I have a MPI server processes on a node, many other MPI
</span><br>
<span class="quotelev2">&gt; &gt; client processes will dynamically connect/disconnect with
</span><br>
<span class="quotelev1">&gt; the server. The server use same XRC domain.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Will this cause accumulating the &quot;kernel&quot; QP for such
</span><br>
<span class="quotelev2">&gt; &gt; application ? we want the server to run 365 days a year.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it will.  I have no way of knowing when a given
</span><br>
<span class="quotelev1">&gt; receiving XRC QP is no longer needed -- except when the
</span><br>
<span class="quotelev1">&gt; domain it belongs to is finally closed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see that adding a userspace &quot;destroy&quot; verb for this
</span><br>
<span class="quotelev1">&gt; QP will help:
</span><br>
<p>This kernel QP is for receiving only, so when there is no activity on this QP,
<br>
can the kernel sends a heart-beat message to check if the remote sending QP
<br>
is still there (still connected) ? if not, the kernel is safe to cleanup
<br>
this qp.
<br>
<p>So whenever the RC connection is broken, kernel can destroy this QP.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only one who actually knows that the XRC QP is no longer
</span><br>
<span class="quotelev1">&gt; required is the userspace process which created the QP at the
</span><br>
<span class="quotelev1">&gt; remote end of the RC connection of the receiving XRC QP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This remote process can only send a request to destroy the QP
</span><br>
<span class="quotelev1">&gt; to some local process (via its own private protocol).
</span><br>
<span class="quotelev1">&gt; However, you pointed out that the process which originally
</span><br>
<span class="quotelev1">&gt; created the QP may not be around any more (this was the
</span><br>
<span class="quotelev1">&gt; source of the problem which led to the RFC in this thread) --
</span><br>
<span class="quotelev1">&gt; and sending the destroy request to all the remote processes
</span><br>
<span class="quotelev1">&gt; on that node which it communicates with is REALLY ugly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not familiar with MPI, so this may be a silly question:
</span><br>
<span class="quotelev1">&gt; Can the MPI server process create a new domain for each
</span><br>
<span class="quotelev1">&gt; client process, and destroy that domain when the client
</span><br>
<span class="quotelev1">&gt; process is done (i.e., is this MPI server process a
</span><br>
<span class="quotelev1">&gt; supervisor of resources for distributed computations (but is
</span><br>
<span class="quotelev1">&gt; not a participant in these computations)?).
</span><br>
<p>The server could be process group across multiple nodes, there are
<br>
parallel database searching engine, for example.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Actually, what I'm asking -- is it possible to allocate a
</span><br>
<span class="quotelev1">&gt; new XRC domain for a distributed computation, and destroy
</span><br>
<span class="quotelev1">&gt; that domain at the end of that computation?)
</span><br>
<p>Yes, it could, but it makes MPI harder to manage the code. And also
<br>
we have a connect/accept speed concern.
<br>
<p>We hope not to do it this way.
<br>
<p><p>--CQ
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2903.php">Jeff Squyres: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Maybe in reply to:</strong> <a href="2893.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2904.php">Tang, Changqing: "Re: [OMPI devel] [ofa-general] [RFC] XRC -- make receiving XRC QP independent of any	one user process"</a>
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
