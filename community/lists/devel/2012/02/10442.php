<?
$subject_val = "Re: [OMPI devel] VT build failure with Clang++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 22:22:49 2012" -->
<!-- isoreceived="20120216032249" -->
<!-- sent="Wed, 15 Feb 2012 19:22:33 -0800" -->
<!-- isosent="20120216032233" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT build failure with Clang++" -->
<!-- id="4F3C7679.5010501_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+Y5xYfn-K0-7+HMVFEJrc908T0P8TmZwVv-obTLi_nCJ7pBZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT build failure with Clang++<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 22:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dmitri,
<br>
<p>Since I have not seen any error like this from gcc, pgi, pathcc, xlc, 
<br>
icc, open64 or suncc, I am pretty sure the problem is Clang-specific 
<br>
even if not a true &quot;bug&quot; in Clang.
<br>
<p>I just test everything I can get my hands on and report what I find.
<br>
If there is not a simple fix for this then it is not a big deal YET.
<br>
However, it is widely expected that Apple will move to a Clang-only (no 
<br>
gcc/g++) release of Xcode as soon as they are able.
<br>
So, it *might* become a concern in the near future.
<br>
<p>So, how should we proceed on this?
<br>
<p>-Paul
<br>
<p>On 2/15/2012 8:38 AM, Dmitri Gribenko wrote:
<br>
<span class="quotelev1">&gt; I don't know if it is a Clang bug, but here's my understanding of the problem.
</span><br>
[...excellent description removed...]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is a bug in Clang because I don't know if Clang
</span><br>
<span class="quotelev1">&gt; should have tried to instantiate create().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dmitri
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10443.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10446.php">Matthias Jurenz: "Re: [OMPI devel] VT build failure with Clang++"</a>
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
