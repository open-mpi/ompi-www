<?
$subject_val = "Re: [OMPI devel] still supporting pgi?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 17:12:40 2014" -->
<!-- isoreceived="20141211221240" -->
<!-- sent="Thu, 11 Dec 2014 14:12:37 -0800" -->
<!-- isosent="20141211221237" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] still supporting pgi?" -->
<!-- id="CAAvDA15N-eFRDhEMMZPYZAeHv-ZZAZkduKySEwezTkRPC3-YnQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B313FAB1-FC37-40C5-8BAC-845AC501B970_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 17:12:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>I regularly test release candidates against the PGI installations on
<br>
NERSC's systems (and sometimes elsewhere).  In fact, have a test of
<br>
1.8.4rc2 against pgi-14.4 &quot;in the pipe&quot; right now.
<br>
<p>I believe Larry Baker of USGS is also a PGI user (in production, rather
<br>
than just testing as I do).
<br>
<p>-Paul
<br>
<p>On Thu, Dec 11, 2014 at 1:34 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Howard --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing I neglected to say -- if libfabric/usnic support on master is
</span><br>
<span class="quotelev1">&gt; causing problems for you, you can configure without libfabric:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure --without-libfabric ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (which will, of course, also disable anything that requires libfabric)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The intent is that we build things by default so that we can get at least
</span><br>
<span class="quotelev1">&gt; smoke testing of as many features as possible -- especially testing that
</span><br>
<span class="quotelev1">&gt; they don't interfere with others.  But we tend to put in options to shut
</span><br>
<span class="quotelev1">&gt; off such things if they *do* cause problems.  Right now, libfabric is
</span><br>
<span class="quotelev1">&gt; causing a few problems for you, so you should feel free to disable it until
</span><br>
<span class="quotelev1">&gt; we figure out the integration problems (and if you could send me the
</span><br>
<span class="quotelev1">&gt; details, I can have a look at what's going wrong).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry; I should have mentioned this earlier, but I assumed you knew
</span><br>
<span class="quotelev1">&gt; about it / keep forgetting that you're still kinda new to our community and
</span><br>
<span class="quotelev1">&gt; don't know all the conventions that we typically put in place!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My bad.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 11, 2014, at 10:45 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 11, 2014, at 9:58 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Okay, I'll try to fix things.  problem in opal_datatype_internal.h,
</span><br>
<span class="quotelev1">&gt; then a meltdown with libfabric owing to the fact that its probably
</span><br>
<span class="quotelev3">&gt; &gt;&gt; only been used in a gnu env.  I'll open an issue on that one and assign
</span><br>
<span class="quotelev1">&gt; it to Jeff.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: I test with gcc and the intel compiler suite.  I do not have a PGI
</span><br>
<span class="quotelev1">&gt; license to test with.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think we should be turning this libfabric build off unless one asks
</span><br>
<span class="quotelev1">&gt; for it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously, I disagree.  :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry for the annoyances, but we have long since found out that
</span><br>
<span class="quotelev1">&gt; features that are not enabled by default do not get tested in the wild and
</span><br>
<span class="quotelev1">&gt; therefore do not get debugged.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you send me the details of the PGI problem, I'll be happy to look in
</span><br>
<span class="quotelev1">&gt; to it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16511.php">http://www.open-mpi.org/community/lists/devel/2014/12/16511.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Previous message:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>In reply to:</strong> <a href="16511.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] still supporting pgi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
<li><strong>Reply:</strong> <a href="16513.php">Larry Baker: "Re: [OMPI devel] still supporting pgi?"</a>
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
