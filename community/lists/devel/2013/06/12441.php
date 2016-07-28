<?
$subject_val = "[OMPI devel] glibc malloc hooks going away";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 10 10:23:50 2013" -->
<!-- isoreceived="20130610142350" -->
<!-- sent="Mon, 10 Jun 2013 14:23:45 +0000" -->
<!-- isosent="20130610142345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] glibc malloc hooks going away" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F676A96_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] glibc malloc hooks going away<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-10 10:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12440.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you saw Mellanox's commit this morning, you noticed a comment about how the glibc malloc hooks are deprecated.  I pinged Mike D. about this off-list, and he sent me the following reference from the glibc 2.14 release notes at <a href="http://sourceware.org/ml/libc-alpha/2011-05/msg00103.html">http://sourceware.org/ml/libc-alpha/2011-05/msg00103.html</a>:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* The malloc hook implementation is marked deprecated and will be removed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from the default implementation in the next version.  The design never
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;worked ever since the introduction of threads.  Even programs which do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not create threads themselves can use multiple threads created internally.
<br>
<p>Yoinks.
<br>
<p>The OpenFabrics community had better come up with something to replace the glibc malloc hooks implementation fairly soon...  (e.g., push ummunotify upstream, or push something else -- Mellanox is currently arguing that On Demand Paging will obviate the need for something like ummunotify; see the linux-rdma mailing list for an ongoing discussion about this exact topic)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Previous message:</strong> <a href="12440.php">George Bosilca: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
<li><strong>Reply:</strong> <a href="12442.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  glibc malloc hooks going away"</a>
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
