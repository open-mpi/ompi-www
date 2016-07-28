<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 16:15:42 2016" -->
<!-- isoreceived="20160225211542" -->
<!-- sent="Thu, 25 Feb 2016 13:15:35 -0800" -->
<!-- isosent="20160225211535" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="CAAvDA16LfpfeiDaBUHCxyKgsNTaHN_QPjM6NT9hVKRRHqrUcog_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5BB2ABB6-DDE7-4285-AE1A-D87E80E37FDF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 16:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 25, 2016 at 1:05 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Feb 25, 2016, at 2:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not an error - a new API in C++11 to get number of dimensions in a
</span><br>
<span class="quotelev1">&gt; multi-dimensional array.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://en.cppreference.com/w/cpp/types/rank">http://en.cppreference.com/w/cpp/types/rank</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you can't have a local variable named &quot;rank&quot; any more?  That's...
</span><br>
<span class="quotelev1">&gt; terrible!
</span><br>
<p><p>If (and only if) one is &quot;using namespace std;&quot; you can no longer use &quot;rank&quot;.
<br>
You already can't use &quot;string&quot; or &quot;list&quot; (among others) as identifiers
<br>
under the same conditions.
<br>
<p>So, removing &quot;using namespace std;&quot; from the C++ code (and adding std:: as
<br>
necessary) should fix the problem.
<br>
If it does not, *then* I'd say there is a bug somewhere.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18620.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
