<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 11:16:05 2014" -->
<!-- isoreceived="20140128161605" -->
<!-- sent="Tue, 28 Jan 2014 08:16:03 -0800" -->
<!-- isosent="20140128161603" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2 is out" -->
<!-- id="CAAvDA148dWdPNB+Rc1oQdVUPSHqeD+C23xsT9bVN5jGdMo+ziQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF055241-C237-4B7F-A5FF-1DAA27168A1E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2 is out<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 11:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>In reply to:</strong> <a href="13933.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13946.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My posts normally convey bad news.
<br>
So, I figured I'd take this opportunity to provide some good news for a
<br>
change.
<br>
<p>Nearly all my tests have completed and there are no failures (other than
<br>
ones know to be due compiler bugs or similar).
<br>
The only &quot;work-arounds&quot; (patches applied or extra configure switches) I've
<br>
used are for issues clearly identified for resolution 1.7.5 (e.g. ia64
<br>
atomics).
<br>
<p>My SPARC, MIPS and ARM platforms are still running, but based on previous
<br>
testing of nightly v1.7 tarballs I don't expect to find any issues there.
<br>
<p>-Paul
<br>
<p><p>On Mon, Jan 27, 2014 at 7:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just as an inducement: I believe 1.7.4 is complete at this time. The MTT
</span><br>
<span class="quotelev1">&gt; runs look exceptionally clean, and we thoroughly beat this version up in
</span><br>
<span class="quotelev1">&gt; the time since rc1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So this is going to be a quick &quot;smoke test&quot; period prior to final release.
</span><br>
<span class="quotelev1">&gt; Please give it a once-over to confirm nothing was inadvertently broken.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barring any problems, release is scheduled for Fri 1/31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2014, at 7:54 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the usual location:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Lots of changes since 1.7.4rc1, but we didn't keep a good NEWS file
</span><br>
<span class="quotelev1">&gt; between the two, so I can't list them all here.
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="13935.php">Ralph Castain: "Re: [OMPI devel] SNAPC: dynamic send buffers"</a>
<li><strong>In reply to:</strong> <a href="13933.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2 is out"</a>
<li><strong>Reply:</strong> <a href="13946.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2 is out"</a>
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
