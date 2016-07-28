<?
$subject_val = "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 15:08:06 2015" -->
<!-- isoreceived="20150824190806" -->
<!-- sent="Mon, 24 Aug 2015 19:08:02 +0000" -->
<!-- isosent="20150824190802" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem" -->
<!-- id="A89EE9F6-AE32-4F18-8BB9-A012DA89BE68_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15xCFG9b89PMXA-pLdwYekj1M0V5t6=b8N1xL83LW=+zQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-24 15:08:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>In reply to:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we have had verbal agreement in the past that the v1.8 series was the last one to contain MX support.  I think it would be fine for all MX-related components to disappear from v1.10.
<br>
<p>Don't forget that Myricom as an HPC company no longer exists.
<br>
<p><p><span class="quotelev1">&gt; On Aug 24, 2015, at 2:34 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 24, 2015 at 10:52 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thus if this newly reported problem is (as I am going to guess) in config/ompi_check_mx.m4 then it may go unfixed.
</span><br>
<span class="quotelev1">&gt; You say you and I are the only ones to care, and I think we both care for reasons related to software quality rather than any desire to use MX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked to see where the -rpath options are coming from.
</span><br>
<span class="quotelev1">&gt; I am 95% certain that libtool is constructing them from the network-specific .la files (such as libfabric.la).
</span><br>
<span class="quotelev1">&gt; That is also the reason why libfabric gets linked by full path instead of a &quot;-l&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, my conclusions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Since there is no libmyriexpress.la, one should either
</span><br>
<span class="quotelev1">&gt;    1a.  add the MX libdir to LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;    1b.  use the wrapper-ldflags family of configure arguments to add an rpath
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. There is *probably* no Open MPI bug here assuming the authors of MX support assumed &quot;1a&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In support of these conclusion, the following is quoted from the MX installation instructions:
</span><br>
<span class="quotelev1">&gt;         For Linux, FreeBSD and Solaris, add the MX library directory to the
</span><br>
<span class="quotelev1">&gt;         system library search path. Otherwise, individual users will have to
</span><br>
<span class="quotelev1">&gt;         either manage their LD_LIBRARY_PATH(_64) environment variable or link
</span><br>
<span class="quotelev1">&gt;         their program with an &quot;-rpath/-R&quot; option for the dynamic linker to
</span><br>
<span class="quotelev1">&gt;         locate the MX shared library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I am actually wondering if Ralph's changes yesterday to &quot;fix&quot; $(WRAPPER_EXTRA_LDFLAGS) might have been unnecessary.
</span><br>
<span class="quotelev1">&gt; Instead, I think *removing* those [testname]_LDFLAGS lines may be the correct solution - they were *empty* until rc6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMHO:  dropping MX support in 1.10 is probably wise given the lack of vendor support .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17827.php">http://www.open-mpi.org/community/lists/devel/2015/08/17827.php</a>
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
<li><strong>Next message:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Previous message:</strong> <a href="17828.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - Solaris &quot;make check&quot; problem (regression vs. rc5)"</a>
<li><strong>In reply to:</strong> <a href="17827.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
<li><strong>Reply:</strong> <a href="17830.php">Nathan Hjelm: "Re: [OMPI devel] 1.10.0rc6 - slightly different mx problem"</a>
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
