<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:58:18 2014" -->
<!-- isoreceived="20140207225818" -->
<!-- sent="Fri, 7 Feb 2014 22:58:17 +0000" -->
<!-- isosent="20140207225817" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="2E0BEE6B-A9D8-4FE1-B336-F36C633C1FC3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3E73D97D-EA33-4C11-92E5-2C613B432851_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new CRS component added (criu)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-07 17:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2014, at 5:08 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;   AS_IF([test $crs_criu_happy -eq 1],
</span><br>
<span class="quotelev1">&gt;         [$2],
</span><br>
<span class="quotelev1">&gt;         [AS_IF([test &quot;$with_criu&quot; != &quot;x&quot; &amp;&amp; &quot;x$with_criu&quot; != &quot;xno&quot;],
</span><br>
<span class="quotelev1">&gt;                [AC_MSG_WARN([You asked for CRIU support, but I can't find it.])
</span><br>
<span class="quotelev1">&gt;                 AC_MSG_ERROR([Cannot continue])],
</span><br>
<span class="quotelev1">&gt;                [$1])
</span><br>
<span class="quotelev1">&gt;          ])
</span><br>
<p>Heh.  I got $1 and $2 backwards.  But you get the idea.  :-)
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
<li><strong>Next message:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14047.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Add an OPAL rand and srand"</a>
<li><strong>In reply to:</strong> <a href="14040.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
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
