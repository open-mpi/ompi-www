<?
$subject_val = "Re: [OMPI devel] 1.6.4rc1 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 19:38:06 2013" -->
<!-- isoreceived="20130118003806" -->
<!-- sent="Thu, 17 Jan 2013 16:37:20 -0800" -->
<!-- isosent="20130118003720" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc1 has been posted" -->
<!-- id="CAAvDA17APAHr4R8Xqx1yO7J0kGfbCXW+EQhg-7Z7nrXMg12t=Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="000001cdf510$8e2391b0$aa6ab510$_at_wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.4rc1 has been posted<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 19:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11940.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11938.php">Kenneth A. Lloyd: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="11938.php">Kenneth A. Lloyd: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kenneth,
<br>
<p>I've built ompi w/ clang on other platforms before (incl. MacOSX Mountain
<br>
Lion), but not on OpenBSD.
<br>
I just now ran tests on OpenBSD-5.2/i386 and OpenBSD-5.2/amd64, using
<br>
Clang-3.1.
<br>
Unfortunately, there is a mass of linker error building libmpi_cxx.la (on
<br>
both systems)
<br>
I am trying again with --disable-mpi-cxx and will report my results later.
<br>
<p>Also, I had no problem with llvm-gcc on OpenBSD-5.2/i386; only on amd64 did
<br>
I see a problem.
<br>
<p>-Paul
<br>
<p><p>On Thu, Jan 17, 2013 at 4:12 PM, Kenneth A. Lloyd &lt;kenneth.lloyd_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried llvm with clang?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Paul Hargrove
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, January 17, 2013 4:58 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI devel] 1.6.4rc1 has been posted****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 17, 2013 at 2:26 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BAD news is a new failure (SEGV in orted at exit) on
</span><br>
<span class="quotelev1">&gt; OpenBSD-5.2/amd64, which I will report in a separate email once I've
</span><br>
<span class="quotelev1">&gt; completed some triage.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can disregard the &quot;BAD news&quot; above.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything was fine with gcc, but fails with llvm-gcc.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking deeper (details upon request) the SEGV appears to be caused by a
</span><br>
<span class="quotelev1">&gt; bug in llvm-gcc.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Future Technologies Group****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900****
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11940.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="11938.php">Kenneth A. Lloyd: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="11938.php">Kenneth A. Lloyd: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<li><strong>Reply:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
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
