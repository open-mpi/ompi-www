<?
$subject_val = "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 18:43:34 2012" -->
<!-- isoreceived="20120119234334" -->
<!-- sent="Thu, 19 Jan 2012 17:43:16 -0600" -->
<!-- isosent="20120119234316" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)" -->
<!-- id="00a501ccd704$1ea4ce60$5bee6b20$_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120119224818.GQ4201_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 18:43:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>In reply to:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hartmut Kaiser, le Thu 19 Jan 2012 22:48:50 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; We are using hwloc with VS2010 and were happy to realize that after
</span><br>
<span class="quotelev2">&gt; &gt; the (for
</span><br>
<span class="quotelev2">&gt; &gt; us) totally broken Windows binary distribution in V1.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Broken?  How so?  It worked for me.
</span><br>
<p>Try it, the autoconf/config.h has settings not compatible with VC++, for
<br>
instance:
<br>
<p>/* Maybe before gcc 2.95 too */
<br>
#if !defined(HWLOC_HAVE_ATTRIBUTE_UNUSED) &amp;&amp; defined(__GNUC__)
<br>
# define HWLOC_HAVE_ATTRIBUTE_UNUSED 1
<br>
#else
<br>
# define HWLOC_HAVE_ATTRIBUTE_UNUSED 1
<br>
#endif
<br>
#if HWLOC_HAVE_ATTRIBUTE_UNUSED
<br>
# define __hwloc_attribute_unused __attribute__((__unused__))
<br>
#else
<br>
# define __hwloc_attribute_unused
<br>
#endif
<br>
<p>etc. This essentially always defines __hwloc_attribute_unused to expand to
<br>
the __attribute__() (from hwloc-win64-build-1.3.1.zip).
<br>
<p><span class="quotelev1">&gt; Not-reported bugs are usually not fixed.
</span><br>
<p>Sure, I was about to report it when I found the V1.4rc1 to be usable.
<br>
<p><span class="quotelev2">&gt; &gt; Some investigation showed that the file libhwloc.lib was compiled for
</span><br>
<span class="quotelev2">&gt; &gt; 32bit and therefore causes trouble in 64bit builds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oh, that's possible indeed, I need to fix the build script to pass
</span><br>
<span class="quotelev1">&gt; whatever flag is needed to make a 64bit .lib.  You should be able to do it
</span><br>
<span class="quotelev1">&gt; from the provided .def file, using the lib.exe tool from VS.
</span><br>
<p>Yep, that's what I did.
<br>
<p><span class="quotelev2">&gt; &gt; While it is trivial to regenerate the corresponding 64bit import
</span><br>
<span class="quotelev2">&gt; &gt; library from the supplied definition file, it would be nice to be able
</span><br>
<span class="quotelev2">&gt; &gt; to directly use the distributive from your site.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure, thanks for the report!
</span><br>
<p>Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>In reply to:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
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
