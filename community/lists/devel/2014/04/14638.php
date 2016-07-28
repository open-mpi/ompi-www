<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 13:58:13 2014" -->
<!-- isoreceived="20140428175813" -->
<!-- sent="Mon, 28 Apr 2014 13:58:13 -0400" -->
<!-- isosent="20140428175813" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="08A7714F-2D89-4B93-A479-74F3DDC89538_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140428175137.GA80196_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 13:58:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14637.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14637.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My concern was more about the &#147;what&quot; factor: what do you write on remote memory in a heterogeneous case. I imagine you can either write the converted data or you can convert remotely after writing. Anyway, on both cases you need intermediary buffers to do the conversion (especially if we are looking a size mismatch), so the interest of RMA is quickly vanishing.
<br>
<p>For now, I would just not support heterogeneous environments for RMA. We might want to add a check at windows creation time, so at least the users are warned.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 28, 2014, at 13:51 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Apr 28, 2014 at 01:44:28PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 28, 2014, at 13:39 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This part of the heterogeneous support being broken was my fault. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixed it in r31535. I will try to spend some time over the next month or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so fixing heterogeneous support in the one-sided code. Right now the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; packed datatype representation will not work if sizeof (int) is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; consistent.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are consistently using length-aware types (uint32_t) which have the same length. However, I would guess that RMA has the same issue as the datatype H functions (where the remote displacement cannot be correctly computed because we only know the local byte-level displacement).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, the displacement is computed on the remote side so as long as
</span><br>
<span class="quotelev1">&gt; the datatype functions in osc/base support heterogenous we should be
</span><br>
<span class="quotelev1">&gt; good there. Once I finish the optimizations for RDMA networks that may
</span><br>
<span class="quotelev1">&gt; no longer be the case. I will try to keep the heterogeneous case in mind
</span><br>
<span class="quotelev1">&gt; as I write this code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure if we ever claimed to support this case though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there is need for conversion, I guess one will have to switch back to the pt2pt mode &#133; mode we don&#146;t have anymore.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The rdma component is more or less the pt2pt component right now. I am
</span><br>
<span class="quotelev1">&gt; working on re-adding direct RDMA (and atomic) support for a EuroMPI
</span><br>
<span class="quotelev1">&gt; poster. I don't do any of the header conversion at the moment but it
</span><br>
<span class="quotelev1">&gt; won't be hard to add.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14637.php">http://www.open-mpi.org/community/lists/devel/2014/04/14637.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="14637.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>In reply to:</strong> <a href="14637.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14639.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
