<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 16:34:45 2014" -->
<!-- isoreceived="20141211213445" -->
<!-- sent="Thu, 11 Dec 2014 21:34:44 +0000" -->
<!-- isosent="20141211213444" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="B313FAB1-FC37-40C5-8BAC-845AC501B970_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5FC79A6A-D106-4987-9D3A-77CB7BBEB3B2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] still supporting pgi?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 16:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>In reply to:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard --
<br>
<p>One thing I neglected to say -- if libfabric/usnic support on master is causing problems for you, you can configure without libfabric:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure --without-libfabric ...
<br>
<p>(which will, of course, also disable anything that requires libfabric)
<br>
<p>The intent is that we build things by default so that we can get at least smoke testing of as many features as possible -- especially testing that they don't interfere with others.  But we tend to put in options to shut off such things if they *do* cause problems.  Right now, libfabric is causing a few problems for you, so you should feel free to disable it until we figure out the integration problems (and if you could send me the details, I can have a look at what's going wrong).
<br>
<p>I'm sorry; I should have mentioned this earlier, but I assumed you knew about it / keep forgetting that you're still kinda new to our community and don't know all the conventions that we typically put in place!  
<br>
<p>My bad.  :-(
<br>
<p><p><p>On Dec 11, 2014, at 10:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2014, at 9:58 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I'll try to fix things.  problem in opal_datatype_internal.h, then a meltdown with libfabric owing to the fact that its probably
</span><br>
<span class="quotelev2">&gt;&gt; only been used in a gnu env.  I'll open an issue on that one and assign it to Jeff.   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I test with gcc and the intel compiler suite.  I do not have a PGI license to test with.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think we should be turning this libfabric build off unless one asks for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously, I disagree.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry for the annoyances, but we have long since found out that features that are not enabled by default do not get tested in the wild and therefore do not get debugged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you send me the details of the PGI problem, I'll be happy to look in to it.
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
<li><strong>Next message:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16510.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Introducing memkind + Adding component in mpool	framework"</a>
<li><strong>In reply to:</strong> <a href="16507.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16512.php">Paul Hargrove: "Re: [OMPI devel] still supporting pgi?"</a>
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
