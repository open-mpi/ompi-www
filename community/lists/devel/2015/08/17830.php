<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 15:45:38 2015" -->
<!-- isoreceived="20150824194538" -->
<!-- sent="Mon, 24 Aug 2015 13:45:36 -0600" -->
<!-- isosent="20150824194536" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="20150824194536.GC35597_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A89EE9F6-AE32-4F18-8BB9-A012DA89BE68_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 15:45:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17831.php">Jeff Squyres (jsquyres): "[OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17833.php">Christopher Samuel: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Mon, Aug 24, 2015 at 07:08:02PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; FWIW, we have had verbal agreement in the past that the v1.8 series was the last one to contain MX support.  I think it would be fine for all MX-related components to disappear from v1.10.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't forget that Myricom as an HPC company no longer exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 24, 2015, at 2:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 24, 2015 at 10:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thus if this newly reported problem is (as I am going to guess) in config/ompi_check_mx.m4 then it may go unfixed.
</span><br>
<span class="quotelev2">&gt; &gt; You say you and I are the only ones to care, and I think we both care for reasons related to software quality rather than any desire to use MX.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I looked to see where the -rpath options are coming from.
</span><br>
<span class="quotelev2">&gt; &gt; I am 95% certain that libtool is constructing them from the network-specific .la files (such as libfabric.la).
</span><br>
<span class="quotelev2">&gt; &gt; That is also the reason why libfabric gets linked by full path instead of a &quot;-l&quot; option.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, my conclusions:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. Since there is no libmyriexpress.la, one should either
</span><br>
<span class="quotelev2">&gt; &gt;    1a.  add the MX libdir to LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;    1b.  use the wrapper-ldflags family of configure arguments to add an rpath
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2. There is *probably* no Open MPI bug here assuming the authors of MX support assumed &quot;1a&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In support of these conclusion, the following is quoted from the MX installation instructions:
</span><br>
<span class="quotelev2">&gt; &gt;         For Linux, FreeBSD and Solaris, add the MX library directory to the
</span><br>
<span class="quotelev2">&gt; &gt;         system library search path. Otherwise, individual users will have to
</span><br>
<span class="quotelev2">&gt; &gt;         either manage their LD_LIBRARY_PATH(_64) environment variable or link
</span><br>
<span class="quotelev2">&gt; &gt;         their program with an &quot;-rpath/-R&quot; option for the dynamic linker to
</span><br>
<span class="quotelev2">&gt; &gt;         locate the MX shared library.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So, I am actually wondering if Ralph's changes yesterday to &quot;fix&quot; $(WRAPPER_EXTRA_LDFLAGS) might have been unnecessary.
</span><br>
<span class="quotelev2">&gt; &gt; Instead, I think *removing* those [testname]_LDFLAGS lines may be the correct solution - they were *empty* until rc6.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; IMHO:  dropping MX support in 1.10 is probably wise given the lack of vendor support .
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17827.php">http://www.open-mpi.org/community/lists/devel/2015/08/17827.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17829.php">http://www.open-mpi.org/community/lists/devel/2015/08/17829.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17830/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17831.php">Jeff Squyres (jsquyres): "[OMPI devel] esslingen MTT?"</a>
<li><strong>Previous message:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>In reply to:</strong> <a href="17829.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17833.php">Christopher Samuel: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
