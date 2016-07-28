<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 16:27:06 2016" -->
<!-- isoreceived="20160225212706" -->
<!-- sent="Thu, 25 Feb 2016 21:27:04 +0000" -->
<!-- isosent="20160225212704" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="69722888-10B9-4914-B8D7-81BBEA736DBA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="60752BF8-D8C2-4956-ADF9-4C220E13FEFC_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 16:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18621.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18620.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2016, at 3:14 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So you can't have a local variable named &quot;rank&quot; any more?  That's... terrible!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or you could avoid &quot;using namespace std&quot;.  Or qualify it using &quot;::rank&quot; (I think, my C++ is rusty).
</span><br>
<p>Yeah, fair enough.  But I don't think we can guarantee that the user won't &quot;using namespace std&quot;, so prefixing with :: is probably the right thing to do.
<br>
<p>I still find it fairly astounding that the naked word &quot;rank&quot; (vs &quot;rank()&quot;) is ambiguous with a variable and a function call.  I wouldn't be surprised by this in a scripting language; if this really is true in C++, that's quite surprising to me.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18621.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18620.php">Dave Goodell (dgoodell): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18623.php">Paul Hargrove: "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
