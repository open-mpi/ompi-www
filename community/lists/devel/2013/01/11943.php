<?
$subject_val = "Re: [OMPI devel] 1.6.4rc1 has been posted";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 21:14:34 2013" -->
<!-- isoreceived="20130118021434" -->
<!-- sent="Thu, 17 Jan 2013 18:14:25 -0800" -->
<!-- isosent="20130118021425" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc1 has been posted" -->
<!-- id="CAAvDA14XEASuFig4eb3mduRORQukk2hgFOfQh0CLMHCHhM55WA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17Z857YRnuzCyp7TqgR5NieqEm4-WXh-FW84rOj5cjSbA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-17 21:14:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11940.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 17, 2013 at 5:36 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Jan 17, 2013 at 4:37 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just now ran tests on OpenBSD-5.2/i386 and OpenBSD-5.2/amd64, using
</span><br>
<span class="quotelev2">&gt;&gt; Clang-3.1.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, there is a mass of linker error building libmpi_cxx.la(on both systems)
</span><br>
<span class="quotelev2">&gt;&gt; I am trying again with --disable-mpi-cxx and will report my results later.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using  --disable-mpi-cxx I still have linker problems, now from the C++
</span><br>
<span class="quotelev1">&gt; lib(s) in VT.
</span><br>
<span class="quotelev1">&gt; So, I've just gone ahead and tried CC=clang CXX=g++, which worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given the VT failure, I am guessing that the issue is clang++, rather than
</span><br>
<span class="quotelev1">&gt; something in OMPI &quot;proper&quot;.
</span><br>
<span class="quotelev1">&gt; OR, perhaps is because my Clang install pre-dates my upgrade from
</span><br>
<span class="quotelev1">&gt; OpenBSD-5.1 to 5.2.
</span><br>
<span class="quotelev1">&gt; I'll re-install Clang and post new results when I have them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Re-installing clang made no difference.
<br>
This failure (clang++-3,1 on OpenBSD-5.2) doesn't bother me one iota.
<br>
However, if somebody wants to look into it, let me know and I can provide
<br>
the details (on- or off-list as determined by the requester).
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11943/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11942.php">Kawashima, Takahiro: "[OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11941.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11940.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
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
