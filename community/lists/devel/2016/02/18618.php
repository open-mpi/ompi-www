<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 15:59:08 2016" -->
<!-- isoreceived="20160225205908" -->
<!-- sent="Thu, 25 Feb 2016 12:59:02 -0800" -->
<!-- isosent="20160225205902" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="CAAvDA17e3SwXGm0pH6j+kYYsprcWHFq0QNL0HTGK6abhXuFe6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="98E0C0ED-F490-4ADF-96DB-C80CB26A5143_at_cisco.com" -->
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
<strong>Date:</strong> 2016-02-25 15:59:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18617.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18617.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Not an error - a new API in C++11 to get number of dimensions in a
<br>
multi-dimensional array.
<br>
<a href="http://en.cppreference.com/w/cpp/types/rank">http://en.cppreference.com/w/cpp/types/rank</a>
<br>
<p>-Paul
<br>
<p>On Thu, Feb 25, 2016 at 12:06 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That looks like the c++ headers in gcc 6.0 beta are busted - it looks like
</span><br>
<span class="quotelev1">&gt; there's a &quot;rank&quot; variable in the local scope from the STL headers
</span><br>
<span class="quotelev1">&gt; somehow...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 25, 2016, at 10:52 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I installed a pre-release gcc 6.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcc version 6.0.0 20160221 (experimental) (GCC)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; on my MTT systems (ppc64 and x86_64) and I now get a
</span><br>
<span class="quotelev2">&gt; &gt; test build failure:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://mtt.open-mpi.org/index.php?do_redir=2269">https://mtt.open-mpi.org/index.php?do_redir=2269</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just as a FYI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        Adrian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18616.php">http://www.open-mpi.org/community/lists/devel/2016/02/18616.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/02/18617.php">http://www.open-mpi.org/community/lists/devel/2016/02/18617.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18617.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18617.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18619.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
