<?
$subject_val = "Re: [OMPI devel] ofi/mtl causing problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 14:53:36 2014" -->
<!-- isoreceived="20141217195336" -->
<!-- sent="Wed, 17 Dec 2014 19:53:34 +0000" -->
<!-- isosent="20141217195334" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ofi/mtl causing problems" -->
<!-- id="01C7477B-8C6F-4CC2-883A-E218C0317C84_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF1Cqj53giP0V5v2He8+ZMkTMHEhOLadvZSkL01rCd6f_93kYw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ofi/mtl causing problems<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 14:53:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16648.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 17, 2014, at 2:19 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I did another mtt run with --disable-libfabric included on the configure line and still failed with the same problem, mtl/ofi thinks its okay to build...
</span><br>
<p>FWIW: this problem is because the switch is --without-libfabric, not --disable-libfabric.  
<br>
<p>If you use --disable-libfabric, configure immediately warns you that that is an unrecognized switch, but it keeps going (just like any other unrecognized switch).
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
<li><strong>Next message:</strong> <a href="16650.php">Paul Hargrove: "[OMPI devel] Solaris/x86-64 SEGV with 1.8-latest"</a>
<li><strong>Previous message:</strong> <a href="16648.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>In reply to:</strong> <a href="16645.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
<li><strong>Reply:</strong> <a href="16654.php">Howard Pritchard: "Re: [OMPI devel] ofi/mtl causing problems"</a>
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
