<?
$subject_val = "Re: [OMPI devel] Network atomic operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 11:06:54 2016" -->
<!-- isoreceived="20160304160654" -->
<!-- sent="Fri, 4 Mar 2016 09:06:44 -0700" -->
<!-- isosent="20160304160644" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Network atomic operations" -->
<!-- id="20160304160644.GA88724_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjCL-i+Azzvz5razmLhO3PzK=7eiRBVh7SGwygUnRbcpg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-04 11:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 03, 2016 at 05:26:45PM -0500, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt;    Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Here is a 101 level question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OpenMPI supports many transports, out of the box, and can be extended to
</span><br>
<span class="quotelev1">&gt;    support those which it does not. Some of these transports, such as
</span><br>
<span class="quotelev1">&gt;    infiniband, provide hardware atomic operations on remote memory, whereas
</span><br>
<span class="quotelev1">&gt;    others, such as iWARP, do not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    My question is: how (and where in the code base) does openMPI use this
</span><br>
<span class="quotelev1">&gt;    feature, on those hardware that support it? What is the penalty, in terms
</span><br>
<span class="quotelev1">&gt;    of additional code, runtime performance and all other considerations, on a
</span><br>
<span class="quotelev1">&gt;    hardware that does not support it?
</span><br>
<p>Network atomics are used for oshmem (see Mike's email) and MPI RMA. For
<br>
RMA they are exposed through the BTL 3.0 interface on the v2.x branch
<br>
and master. So far we have only really implemented compare-and-swap,
<br>
atomic add, and atomic fetch-and-add. Compare-and-swap and fetch-and-add
<br>
are required by our optimized RMA component (ompi/mca/osc/rdma).
<br>
<p>-Nathan
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18688/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Previous message:</strong> <a href="18687.php">Mike Dubman: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>In reply to:</strong> <a href="18670.php">dpchoudh .: "[OMPI devel] Network atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
<li><strong>Reply:</strong> <a href="18689.php">dpchoudh .: "Re: [OMPI devel] Network atomic operations"</a>
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
