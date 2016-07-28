<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 10:26:35 2014" -->
<!-- isoreceived="20140306152635" -->
<!-- sent="Thu, 6 Mar 2014 15:26:34 +0000" -->
<!-- isosent="20140306152634" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="63FA0C10-C902-40E0-8333-39EDF792CF79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53186546.5000105_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2014-03-06 10:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2014, at 4:08 AM, Vasily Filipov &lt;vasily_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev2">&gt;&gt;    rc = try_using_af_ib();
</span><br>
<span class="quotelev2">&gt;&gt;    if (OMPI_ERR_NOT_AVAILABLE == rc) {
</span><br>
<span class="quotelev2">&gt;&gt;        rc = try_the_other_way();
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;    rc = try_the_other_way();
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev1">&gt;    I mean I cannot  use &quot;another way&quot; if func call for &quot;try_using_af_ib&quot; fails (call for &quot;try_the_other_way()&quot;) because RDMACM was compiled for AF_IB   usage (different fields in structs, different functions prototypes).
</span><br>
<p>Ok, that means the implementation is reduced to:
<br>
<p>#if HAVE_DECL_AF_IB
<br>
&nbsp;&nbsp;&nbsp;rc = try_using_af_ib();
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;rc = try_the_other_way();
<br>
#endif
<br>
<p>Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is easily detectable as to which way it is compiled (because it has, for example, different fields), then AC_CHECK_DECLS should be enough, right?
<br>
<p>I must be missing something...?
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
<li><strong>Next message:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14305.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14307.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
