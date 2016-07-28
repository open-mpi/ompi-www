<?
$subject_val = "Re: [OMPI devel] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 12:47:23 2013" -->
<!-- isoreceived="20130906164723" -->
<!-- sent="Fri, 6 Sep 2013 16:47:20 +0000" -->
<!-- isosent="20130906164720" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (no subject)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F873137_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAoBEvm6x_UUeFSzC3y4hhZgnE=LwgscS_M5Xms2o3U-dR6=xw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] (no subject)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 12:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12877.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2013, at 8:06 AM, Alex Margolin &lt;alex.margolin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the title and the html... send button got pressed too earl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I tried to build OMPI without threads at all with the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/cs/mosna/alexam02/ompi CFLAGS=-m64 CXXFLAGS=-m64 --without-threads --without-hwloc --enable-mca-no-build=maffinity,paffinity --enable-contrib-no-build=libnbc,vt
</span><br>
<p>FWIW, there's no maffinifty/paffinity any more.  And you can just --disable-vt.
<br>
<p><span class="quotelev1">&gt; Sadly, the build failed very early:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CC     runtime/opal_info_support.lo
</span><br>
<span class="quotelev1">&gt; runtime/opal_info_support.c: In function 'opal_info_do_params':
</span><br>
<span class="quotelev1">&gt; runtime/opal_info_support.c:444:9: error: 'errno' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; runtime/opal_info_support.c:444:9: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev1">&gt; make[2]: *** [runtime/opal_info_support.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/a/store-04/h/lab/mosix/alexam02/ompi-jeff/opal'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/a/store-04/h/lab/mosix/alexam02/ompi-jeff/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should this be a trac ticket?
</span><br>
<p>Seems like it should be an easy fix (e.g., a missing header file?) -- can you submit a patch?
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
<li><strong>Next message:</strong> <a href="12877.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Alex Margolin: "Re: [OMPI devel] (no subject)"</a>
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
