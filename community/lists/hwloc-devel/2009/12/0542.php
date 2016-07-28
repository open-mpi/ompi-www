<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1506";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 07:46:37 2009" -->
<!-- isoreceived="20091217124637" -->
<!-- sent="Thu, 17 Dec 2009 07:46:32 -0500" -->
<!-- isosent="20091217124632" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1506" -->
<!-- id="05E0AB62-9778-41F8-8F86-D46D9D6A8D47_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200912171231.nBHCVbNs014735_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1506<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 07:46:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh.  Coulda sworn that I fixed that one already.  Bummer.
<br>
<p>Thanks for the catch!
<br>
<p><p>On Dec 17, 2009, at 7:31 AM, &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2009-12-17 07:31:37 EST (Thu, 17 Dec 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1506
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1506">https://svn.open-mpi.org/trac/hwloc/changeset/1506</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fix README generation by adding HWLOC_ prefix to W3_GENERATOR
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/config/hwloc.m4 |     4 ++--                                   
</span><br>
<span class="quotelev1">&gt;    1 files changed, 2 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/hwloc.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/hwloc.m4       (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/hwloc.m4       2009-12-17 07:31:37 EST (Thu, 17 Dec 2009)
</span><br>
<span class="quotelev1">&gt; @@ -641,10 +641,10 @@
</span><br>
<span class="quotelev1">&gt;      AC_MSG_CHECKING([if can build top-level README])
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;x$W3M&quot; != &quot;x&quot;],
</span><br>
<span class="quotelev1">&gt;            [hwloc_generate_readme=yes
</span><br>
<span class="quotelev1">&gt; -           W3_GENERATOR=$W3M],
</span><br>
<span class="quotelev1">&gt; +           HWLOC_W3_GENERATOR=$W3M],
</span><br>
<span class="quotelev1">&gt;            [AS_IF([test &quot;x$LYNX&quot; != &quot;x&quot;],
</span><br>
<span class="quotelev1">&gt;                   [hwloc_generate_readme=yes
</span><br>
<span class="quotelev1">&gt; -                  W3_GENERATOR=&quot;$LYNX -dump -nolist&quot;],
</span><br>
<span class="quotelev1">&gt; +                  HWLOC_W3_GENERATOR=&quot;$LYNX -dump -nolist&quot;],
</span><br>
<span class="quotelev1">&gt;                   [hwloc_generate_readme=no])])
</span><br>
<span class="quotelev1">&gt;      AC_SUBST(HWLOC_W3_GENERATOR)
</span><br>
<span class="quotelev1">&gt;      AC_MSG_RESULT([$hwloc_generate_readme])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0543.php">Jeff Squyres: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
