<?
$subject_val = "Re: [OMPI devel] Network atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 12:37:48 2016" -->
<!-- isoreceived="20160304173748" -->
<!-- sent="Fri, 4 Mar 2016 12:37:47 -0500" -->
<!-- isosent="20160304173747" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Network atomic operations" -->
<!-- id="CAHXxYDgOPP=JOS2KtQeZqsbAZzRtkZN3YGMgWJGrj6OVgzJfqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20160304160644.GA88724_at_mordor.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Network atomic operations<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 12:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Nathan, Mike and all
<br>
<p>Thank you for your responses. Let me rephrase them to make sure I
<br>
understood them correctly, and please correct me if I didn't:
<br>
<p>1. Atomics are (have been) used in OSHMEM in the current (v1) release
<br>
2. They are (will be) used in the MPI RMA in v2 release, which has not
<br>
happened yet
<br>
<p>I am sorry if I sound like I am nitpicking, but the reason I ask is that I
<br>
am trying to implement a new BTL that I am supposed to demo on a customer's
<br>
existing OMPI code base (which is obviously v1) but I am doing the
<br>
development out of the master branch (to avoid porting later), so I am in a
<br>
bit of spaghetti situation.
<br>
<p>Thank you
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Fri, Mar 4, 2016 at 11:06 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 03, 2016 at 05:26:45PM -0500, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Hello all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Here is a 101 level question:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    OpenMPI supports many transports, out of the box, and can be extended
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;    support those which it does not. Some of these transports, such as
</span><br>
<span class="quotelev2">&gt; &gt;    infiniband, provide hardware atomic operations on remote memory,
</span><br>
<span class="quotelev1">&gt; whereas
</span><br>
<span class="quotelev2">&gt; &gt;    others, such as iWARP, do not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    My question is: how (and where in the code base) does openMPI use this
</span><br>
<span class="quotelev2">&gt; &gt;    feature, on those hardware that support it? What is the penalty, in
</span><br>
<span class="quotelev1">&gt; terms
</span><br>
<span class="quotelev2">&gt; &gt;    of additional code, runtime performance and all other considerations,
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev2">&gt; &gt;    hardware that does not support it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Network atomics are used for oshmem (see Mike's email) and MPI RMA. For
</span><br>
<span class="quotelev1">&gt; RMA they are exposed through the BTL 3.0 interface on the v2.x branch
</span><br>
<span class="quotelev1">&gt; and master. So far we have only really implemented compare-and-swap,
</span><br>
<span class="quotelev1">&gt; atomic add, and atomic fetch-and-add. Compare-and-swap and fetch-and-add
</span><br>
<span class="quotelev1">&gt; are required by our optimized RMA component (ompi/mca/osc/rdma).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18688.php">http://www.open-mpi.org/community/lists/devel/2016/03/18688.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18689/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18688.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18690.php">Nathan Hjelm: "Re: [OMPI devel] Network atomic operations"</a>
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
