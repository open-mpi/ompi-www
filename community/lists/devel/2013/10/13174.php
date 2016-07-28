<?
$subject_val = "Re: [OMPI devel] oshmem and CFLAGS removal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 16:12:13 2013" -->
<!-- isoreceived="20131031201213" -->
<!-- sent="Thu, 31 Oct 2013 20:12:12 +0000" -->
<!-- isosent="20131031201212" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem and CFLAGS removal" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A0D1A_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3600803E6C6_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem and CFLAGS removal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 16:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2013, at 3:46 PM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; # Strip off problematic arguments
</span><br>
<span class="quotelev1">&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-pedantic//g'`&quot;
</span><br>
<span class="quotelev1">&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wundef//g'`&quot;
</span><br>
<span class="quotelev1">&gt; oshmem_CFLAGS=&quot;`echo $oshmem_CFLAGS | sed 's/-Wno-long-double//g'`&quot;
</span><br>
<p>I think the solution is simple -- delete this line:
<br>
<p><span class="quotelev1">&gt; CFLAGS=&quot;$oshmem_CFLAGS&quot;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Previous message:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>In reply to:</strong> <a href="13173.php">Rolf vandeVaart: "[OMPI devel] oshmem and CFLAGS removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
<li><strong>Reply:</strong> <a href="13175.php">Rolf vandeVaart: "Re: [OMPI devel] oshmem and CFLAGS removal"</a>
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
