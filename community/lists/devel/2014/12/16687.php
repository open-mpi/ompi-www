<?
$subject_val = "Re: [OMPI devel] Still getting DDT test assert fails";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 09:02:51 2014" -->
<!-- isoreceived="20141219140251" -->
<!-- sent="Fri, 19 Dec 2014 14:02:49 +0000" -->
<!-- isosent="20141219140249" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still getting DDT test assert fails" -->
<!-- id="69665FCB-C10E-415F-9ACD-9DF6CAD7EED5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CEED8BB0-3FB5-417E-AE91-68B9EE00D10B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still getting DDT test assert fails<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 09:02:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<li><strong>Previous message:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>In reply to:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I posted the full output from running the test on the still-open issue about this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/issues/294#issuecomment-67638568">https://github.com/open-mpi/ompi/issues/294#issuecomment-67638568</a>
<br>
<p><p>On Dec 19, 2014, at 6:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You uncommented the &quot;#if 0 ...&quot; section in the opal datatype test yesterday (<a href="https://github.com/open-mpi/ompi/commit/1895f29537820ee06492ae3b2e66c1cf5ef78c70">https://github.com/open-mpi/ompi/commit/1895f29537820ee06492ae3b2e66c1cf5ef78c70</a>), but we're still getting assert fails on opal_datatype_test.  It caused the nightly tarball to fail last night, and I'm able to reproduce this on a Linux x86_64 machine (but not on my Mac laptop):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #0  0x0000003491632925 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000003491634105 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x000000349162ba4e in __assert_fail_base () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x000000349162bb10 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000403bb5 in local_copy_with_convertor (pdt=0x60e550, count=4500, 
</span><br>
<span class="quotelev1">&gt;    chunk=956) at opal_datatype_test.c:438
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000405a86 in main (argc=1, argv=0x7fffffffd2a8)
</span><br>
<span class="quotelev1">&gt;    at opal_datatype_test.c:667
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, it fails on this line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;    if(outputFlags &amp; QUIT_ON_FIRST_ERROR) { assert(0); exit(-1); }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16686.php">http://www.open-mpi.org/community/lists/devel/2014/12/16686.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16688.php">Adrian Reber: "[OMPI devel] FT code (again)"</a>
<li><strong>Previous message:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>In reply to:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
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
