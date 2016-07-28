<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 13:51:38 2014" -->
<!-- isoreceived="20140428175138" -->
<!-- sent="Mon, 28 Apr 2014 11:51:37 -0600" -->
<!-- isosent="20140428175137" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="20140428175137.GA80196_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2C8687F4-73E9-42C7-9404-C0FC69C0C2EA_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 13:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 28, 2014 at 01:44:28PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 28, 2014, at 13:39 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This part of the heterogeneous support being broken was my fault. I
</span><br>
<span class="quotelev2">&gt; &gt; fixed it in r31535. I will try to spend some time over the next month or
</span><br>
<span class="quotelev2">&gt; &gt; so fixing heterogeneous support in the one-sided code. Right now the
</span><br>
<span class="quotelev2">&gt; &gt; packed datatype representation will not work if sizeof (int) is not
</span><br>
<span class="quotelev2">&gt; &gt; consistent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are consistently using length-aware types (uint32_t) which have the same length. However, I would guess that RMA has the same issue as the datatype H functions (where the remote displacement cannot be correctly computed because we only know the local byte-level displacement).
</span><br>
<p>Currently, the displacement is computed on the remote side so as long as
<br>
the datatype functions in osc/base support heterogenous we should be
<br>
good there. Once I finish the optimizations for RDMA networks that may
<br>
no longer be the case. I will try to keep the heterogeneous case in mind
<br>
as I write this code.
<br>
<p><span class="quotelev2">&gt; &gt; Not sure if we ever claimed to support this case though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is need for conversion, I guess one will have to switch back to the pt2pt mode &#226;&#128;&#166; mode we don&#226;&#128;&#153;t have anymore.
</span><br>
<p>The rdma component is more or less the pt2pt component right now. I am
<br>
working on re-adding direct RDMA (and atomic) support for a EuroMPI
<br>
poster. I don't do any of the header conversion at the moment but it
<br>
won't be hard to add.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14637/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14636.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14638.php">George Bosilca: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
