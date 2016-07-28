<?
$subject_val = "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 15:09:36 2013" -->
<!-- isoreceived="20130903190936" -->
<!-- sent="Tue, 3 Sep 2013 19:09:35 +0000" -->
<!-- isosent="20130903190935" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F863353_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CANFHntBixpex_xaXh-ni84SWpWZChKSPpusFrtWtUnS-t9Rm7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 15:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12845.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12843.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 2, 2013, at 1:53 AM, Bibrak Qamar &lt;bibrakc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yes you are right, it does distribute the ltdl in the source library. But isn't it installed by default when OpenMPI is installed?
</span><br>
<p>It certainly should.  But it's part of libopen-pal.so -- not a standalone libltdl.so.
<br>
<p>If you're running your own copies of the autotools (vs. just using a bootstrapped tarball), you probably need to ensure that you have a recent enough version of the autotools (libtool, in particular).
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
<li><strong>Next message:</strong> <a href="12845.php">Rolf vandeVaart: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12843.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12833.php">Bibrak Qamar: "Re: [OMPI devel] NO LT_DLADVISE - CANNOT LOAD LIBOMPI JAVA BINDINGS"</a>
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
