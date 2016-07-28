<?
$subject_val = "Re: [OMPI devel] Remote key sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 21:35:56 2011" -->
<!-- isoreceived="20111109023556" -->
<!-- sent="Wed, 9 Nov 2011 02:35:26 +0000" -->
<!-- isosent="20111109023526" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remote key sizes" -->
<!-- id="CADF2F66.8271%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="66B9F672-E668-40A7-B0BE-04A89061C43B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remote key sizes<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 21:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/8/11 5:25 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;2. one sided: A quick look in the OSC seems to indicate there are some
</span><br>
<span class="quotelev1">&gt;special handling to be done in the RDMA one. Look at
</span><br>
<span class="quotelev1">&gt;ompi_osc_rdma_sendreq_t in osc_rdma_sendreq.h, it is using a trick to
</span><br>
<span class="quotelev1">&gt;store the remote segments. First, the mca_btl_base_segment_t are stored
</span><br>
<span class="quotelev1">&gt;at the end of the structure, in order to allow for dynamic allocation.
</span><br>
<span class="quotelev1">&gt;Second, OSC doesn't seems to manipulate pointers to
</span><br>
<span class="quotelev1">&gt;mca_btl_base_segment_t, but the content itself. I didn't went too deep
</span><br>
<span class="quotelev1">&gt;here, but I think particular attention should be payed to OSC.
</span><br>
<p>I don't entirely remember what I was doing when I wrote that code :).  The
<br>
OSC only does puts/gets from the initiator to a single segment on the
<br>
target, so the component contains an array of segments, one per peer.  I
<br>
only do RDMA when the source is contiguous, so the one in the sendreq is
<br>
the segment, not a malloc trick.
<br>
<p>I'm planning on rewriting the RDMA one-sided component to implement the
<br>
MPI 3 semantics. I think we can make it a whole lot cleaner than the
<br>
current implementation.  Which means that if we come up with some rational
<br>
semantics for dealing with segments, I can make it work.  If we can get
<br>
them implemented before January, even better.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9965.php">Y.MATSUMOTO: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Previous message:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
<li><strong>In reply to:</strong> <a href="9963.php">George Bosilca: "Re: [OMPI devel] Remote key sizes"</a>
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
