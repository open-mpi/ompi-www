<?
$subject_val = "Re: [OMPI devel] Network atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 12:55:49 2016" -->
<!-- isoreceived="20160304175549" -->
<!-- sent="Fri, 4 Mar 2016 10:55:47 -0700" -->
<!-- isosent="20160304175547" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Network atomic operations" -->
<!-- id="20160304175547.GB88724_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDgOPP=JOS2KtQeZqsbAZzRtkZN3YGMgWJGrj6OVgzJfqQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 12:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Previous message:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that will be a problem. We made large changes to the BTL interface
<br>
with v2.x. If your customer requires a version that works with v1.10 I
<br>
suggest looking that the usnic btl to see how it might be possible to
<br>
write a btl that supports both the new and the old interface. You can
<br>
also use an older template and then later update it for BTL v3. I have
<br>
attached an older version of the template btl. It has the correct
<br>
interfaces but may be somewhat out of date (we updated it for BTL v3).
<br>
<p>You will not be able to use atomics with RMA in v1.10.x. It would take
<br>
significant work to get a BTL v3 interface into v1.10 and port osc/rdma
<br>
to v1.10. I don't know about oshmem.
<br>
<p>-Nathan
<br>
HPC-5, LANL
<br>
<p>On Fri, Mar 04, 2016 at 12:37:47PM -0500, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt;    Hello Nathan, Mike and all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thank you for your responses. Let me rephrase them to make sure I
</span><br>
<span class="quotelev1">&gt;    understood them correctly, and please correct me if I didn't:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Atomics are (have been) used in OSHMEM in the current (v1) release
</span><br>
<span class="quotelev1">&gt;    2. They are (will be) used in the MPI RMA in v2 release, which has not
</span><br>
<span class="quotelev1">&gt;    happened yet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am sorry if I sound like I am nitpicking, but the reason I ask is that I
</span><br>
<span class="quotelev1">&gt;    am trying to implement a new BTL that I am supposed to demo on a
</span><br>
<span class="quotelev1">&gt;    customer's existing OMPI code base (which is obviously v1) but I am doing
</span><br>
<span class="quotelev1">&gt;    the development out of the master branch (to avoid porting later), so I am
</span><br>
<span class="quotelev1">&gt;    in a bit of spaghetti situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thank you
</span><br>
<span class="quotelev1">&gt;    Durga
</span><br>
<span class="quotelev1">&gt;    Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;    On Fri, Mar 4, 2016 at 11:06 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Thu, Mar 03, 2016 at 05:26:45PM -0500, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    Hello all
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    Here is a 101 level question:
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    OpenMPI supports many transports, out of the box, and can be
</span><br>
<span class="quotelev1">&gt;      extended to
</span><br>
<span class="quotelev2">&gt;      &gt;    support those which it does not. Some of these transports, such as
</span><br>
<span class="quotelev2">&gt;      &gt;    infiniband, provide hardware atomic operations on remote memory,
</span><br>
<span class="quotelev1">&gt;      whereas
</span><br>
<span class="quotelev2">&gt;      &gt;    others, such as iWARP, do not.
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt;    My question is: how (and where in the code base) does openMPI use
</span><br>
<span class="quotelev1">&gt;      this
</span><br>
<span class="quotelev2">&gt;      &gt;    feature, on those hardware that support it? What is the penalty, in
</span><br>
<span class="quotelev1">&gt;      terms
</span><br>
<span class="quotelev2">&gt;      &gt;    of additional code, runtime performance and all other
</span><br>
<span class="quotelev1">&gt;      considerations, on a
</span><br>
<span class="quotelev2">&gt;      &gt;    hardware that does not support it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Network atomics are used for oshmem (see Mike's email) and MPI RMA. For
</span><br>
<span class="quotelev1">&gt;      RMA they are exposed through the BTL 3.0 interface on the v2.x branch
</span><br>
<span class="quotelev1">&gt;      and master. So far we have only really implemented compare-and-swap,
</span><br>
<span class="quotelev1">&gt;      atomic add, and atomic fetch-and-add. Compare-and-swap and fetch-and-add
</span><br>
<span class="quotelev1">&gt;      are required by our optimized RMA component (ompi/mca/osc/rdma).
</span><br>
<span class="quotelev1">&gt;      -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      devel mailing list
</span><br>
<span class="quotelev1">&gt;      devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18688.php">http://www.open-mpi.org/community/lists/devel/2016/03/18688.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18689.php">http://www.open-mpi.org/community/lists/devel/2016/03/18689.php</a>
</span><br>
<p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-tar-gz attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18690/btl_template.tgz">btl_template.tgz</a>
</ul>
<!-- attachment="btl_template.tgz" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18690/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18691.php">dpchoudh .: "[OMPI devel] Thread safety in the BTL layer"</a>
<li><strong>Previous message:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
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
