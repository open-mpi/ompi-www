<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 15 12:42:52 2013" -->
<!-- isoreceived="20130815164252" -->
<!-- sent="Thu, 15 Aug 2013 16:41:11 +0000" -->
<!-- isosent="20130815164111" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2" -->
<!-- id="CE325F99.12E52%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CF009CA7-6EFB-447C-AE78-D8B34D264A42_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-15 12:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12732.php">Jeff Squyres (jsquyres): "[OMPI devel] Trunk build failures"</a>
<li><strong>Previous message:</strong> <a href="12730.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12730.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12778.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/15/13 10:30 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Aug 15, 2013, at 18:06 , Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this is a stupid question, but in this case (I believe this goes
</span><br>
<span class="quotelev2">&gt;&gt;all the way back to our initial discussion on OSHMEM), how does one fall
</span><br>
<span class="quotelev2">&gt;&gt;back onto send/recv semantics when the call is made at the SHMEM level
</span><br>
<span class="quotelev2">&gt;&gt;to do a put?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The same way our current OSC (one-sided component) is falling back on the
</span><br>
<span class="quotelev1">&gt;pt2pt component when no underlying BTL supports RDMA operation.
</span><br>
<p>in general, I agree with everything George said.  Except that if the OSC
<br>
rdma component finds BTLs that don't support RDMA, it falls back to the AM
<br>
interface.  The pt2pt component is only used when there are no BTLs (such
<br>
as when the CM PML is used).  Which, by the way, is a case that OSHMEM
<br>
should figure out how to deal with (if only by initializing the BML/BTLs)
<br>
<p>Brian
<br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12731/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12732.php">Jeff Squyres (jsquyres): "[OMPI devel] Trunk build failures"</a>
<li><strong>Previous message:</strong> <a href="12730.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>In reply to:</strong> <a href="12730.php">George Bosilca: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12778.php">Joshua Ladd: "Re: [OMPI devel] OpenSHMEM round 2"</a>
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
