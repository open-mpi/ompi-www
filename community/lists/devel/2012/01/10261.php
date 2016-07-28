<?
$subject_val = "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 27 08:34:57 2012" -->
<!-- isoreceived="20120127133457" -->
<!-- sent="Fri, 27 Jan 2012 08:34:52 -0500" -->
<!-- isosent="20120127133452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue" -->
<!-- id="F4D2E003-0880-4BEE-B7C5-3E9850FBF8E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA15sqJKhDNQQUSYcf8-sTS0ObR_3mbZDNdzvvJtcdVxaRQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-27 08:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>In reply to:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Reply:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2012, at 8:54 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; libtool: link: pgcc -O -DNDEBUG -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a /Users/paul/openmpi-1.4.5rc2/BLD-pgi-11.10/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<p>I'm not quite sure how that can happen -- orte_odls appears to be prototyped properly in orte/mca/odls/odls.h (i.e., it has ORTE_DECLSPEC, for visibility), and is properly instantiated in orte/mca/odls/base/odls_base_open.c.
<br>
<p>Paul: can you run some nm's and see how the orte_odls symbol appears in libopen-rte.a?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10262.php">Hugo Daniel Meyer: "[OMPI devel] Pessimist Event Logger"</a>
<li><strong>Previous message:</strong> <a href="10260.php">Jeff Squyres: "Re: [OMPI devel] 1.4.5rc2 testing linux/ppc/IBM"</a>
<li><strong>In reply to:</strong> <a href="10258.php">Paul Hargrove: "[OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
<li><strong>Reply:</strong> <a href="10267.php">Paul Hargrove: "Re: [OMPI devel] 1.4.5rc2 tests on MacOSX Lion (2 pass, 1 FAIL): orte_odls visibility issue"</a>
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
