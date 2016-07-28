<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 10 10:29:39 2013" -->
<!-- isoreceived="20130610142939" -->
<!-- sent="Mon, 10 Jun 2013 14:29:12 +0000" -->
<!-- isosent="20130610142912" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away" -->
<!-- id="CDDB3E98.1111E%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F676A96_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-10 10:29:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12441.php">Jeff Squyres (jsquyres): "[OMPI devel] glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12441.php">Jeff Squyres (jsquyres): "[OMPI devel] glibc malloc hooks going away"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Maybe reply:</strong> <a href="12449.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/10/13 8:23 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;If you saw Mellanox's commit this morning, you noticed a comment about
</span><br>
<span class="quotelev1">&gt;how the glibc malloc hooks are deprecated.  I pinged Mike D. about this
</span><br>
<span class="quotelev1">&gt;off-list, and he sent me the following reference from the glibc 2.14
</span><br>
<span class="quotelev1">&gt;release notes at 
</span><br>
<span class="quotelev1">&gt;<a href="http://sourceware.org/ml/libc-alpha/2011-05/msg00103.html">http://sourceware.org/ml/libc-alpha/2011-05/msg00103.html</a>:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    * The malloc hook implementation is marked deprecated and will be
</span><br>
<span class="quotelev1">&gt;removed
</span><br>
<span class="quotelev1">&gt;      from the default implementation in the next version.  The design
</span><br>
<span class="quotelev1">&gt;never
</span><br>
<span class="quotelev1">&gt;      worked ever since the introduction of threads.  Even programs which
</span><br>
<span class="quotelev1">&gt;do
</span><br>
<span class="quotelev1">&gt;      not create threads themselves can use multiple threads created
</span><br>
<span class="quotelev1">&gt;internally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yoinks.
</span><br>
<p>At least they've finally come to that conclusion.  I look forward to not
<br>
shipping a memory allocator with our communication library ;).
<br>
<p><span class="quotelev1">&gt;The OpenFabrics community had better come up with something to replace
</span><br>
<span class="quotelev1">&gt;the glibc malloc hooks implementation fairly soon...  (e.g., push
</span><br>
<span class="quotelev1">&gt;ummunotify upstream, or push something else -- Mellanox is currently
</span><br>
<span class="quotelev1">&gt;arguing that On Demand Paging will obviate the need for something like
</span><br>
<span class="quotelev1">&gt;ummunotify; see the linux-rdma mailing list for an ongoing discussion
</span><br>
<span class="quotelev1">&gt;about this exact topic)
</span><br>
<p>+1.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12442/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12443.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<li><strong>Previous message:</strong> <a href="12441.php">Jeff Squyres (jsquyres): "[OMPI devel] glibc malloc hooks going away"</a>
<li><strong>In reply to:</strong> <a href="12441.php">Jeff Squyres (jsquyres): "[OMPI devel] glibc malloc hooks going away"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12445.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Maybe reply:</strong> <a href="12449.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
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
