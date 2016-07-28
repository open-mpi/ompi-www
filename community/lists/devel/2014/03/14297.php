<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 11:08:22 2014" -->
<!-- isoreceived="20140305160822" -->
<!-- sent="Wed, 5 Mar 2014 16:08:06 +0000" -->
<!-- isosent="20140305160806" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="0681A424-C525-409B-A745-526F4447D3FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="531579D7.8040006_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-05 11:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>In reply to:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2014, at 10:59 PM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes, it is possible, but there is some different if I will do it this way -
</span><br>
<span class="quotelev1">&gt;  With the current implementation (today into a trunk) if AC_RUN_IFELSE fails =&gt; old code of RDMACM will rise,
</span><br>
<span class="quotelev1">&gt;  And by way you suggest, if we postpone the decision to a run time and the check fails =&gt;
</span><br>
<span class="quotelev1">&gt;  we have to abort  RDMACM  at all, because it was compiled for working with AF_IB.
</span><br>
<span class="quotelev1">&gt;  So my question to you, if we take into account all this stuff above -
</span><br>
<span class="quotelev1">&gt;   What's the right way to implement it ? What do you think ?
</span><br>
<p>I'm not sure I understand.  Can't you write something like:
<br>
<p>#if HAVE_DECL_AF_IB
<br>
&nbsp;&nbsp;&nbsp;rc = try_using_af_ib();
<br>
&nbsp;&nbsp;&nbsp;if (OMPI_ERR_NOT_AVAILABLE == rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = try_the_other_way();
<br>
&nbsp;&nbsp;&nbsp;}
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;rc = try_the_other_way();
<br>
#endif
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
<li><strong>Next message:</strong> <a href="14298.php">Adrian Reber: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14296.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mercurial mirror stuck to 02-19-2014"</a>
<li><strong>In reply to:</strong> <a href="14283.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
