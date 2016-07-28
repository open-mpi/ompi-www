<?
$subject_val = "Re: [OMPI devel] RFC: remove --disable-smp-locks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 10:52:05 2015" -->
<!-- isoreceived="20150107155205" -->
<!-- sent="Wed, 7 Jan 2015 15:52:04 +0000" -->
<!-- isosent="20150107155204" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: remove --disable-smp-locks" -->
<!-- id="C4A26508-8357-4383-8F18-BE0FAB5060D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkWmfUaCmFb-MZ9wkAENTxKxkwatsL64uD9BDCnpUdnJEg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: remove --disable-smp-locks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 10:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 6, 2015, at 6:16 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is correct. We need the memory fences and atomic operations for shared memory in all cases. When thread support is enabled we also need them in various other places. However, this option also turns on the lock prefix for the atomic operations, forcing them to always be atomic. I am not sure that this has no unexpected side-effects on the code.
</span><br>
<p>Mmm.
<br>
<p>Is this right?
<br>
<p>Right now, the default is --enable-smp-locks.  This enables the sm/vader BTLs to be correct.  It also turns on some other required atomic magic which is necessary for correctness.
<br>
<p>If you use --disable-smp-locks, the sm/vader BTLs will be incorrect.  Atomics won't necessarily be atomic, so they might/will be incorrect in multi-threaded scenarios.
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
<li><strong>Next message:</strong> <a href="16750.php">Jeff Squyres (jsquyres): "[OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16748.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi-master build error : make	can	require	autotools"</a>
<li><strong>In reply to:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16755.php">Nathan Hjelm: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
