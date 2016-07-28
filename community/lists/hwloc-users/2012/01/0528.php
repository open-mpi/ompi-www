<?
$subject_val = "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 18:46:33 2012" -->
<!-- isoreceived="20120119234633" -->
<!-- sent="Fri, 20 Jan 2012 00:46:27 +0100" -->
<!-- isosent="20120119234627" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)" -->
<!-- id="20120119234627.GR4201_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="546833464.461499.1327016612274.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 18:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0529.php">Brice Goglin: "[hwloc-users] hwloc and HTX device ?"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hartmut Kaiser, le Fri 20 Jan 2012 00:43:32 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; Hartmut Kaiser, le Thu 19 Jan 2012 22:48:50 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We are using hwloc with VS2010 and were happy to realize that after
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the (for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; us) totally broken Windows binary distribution in V1.3
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Broken?  How so?  It worked for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try it, the autoconf/config.h has settings not compatible with VC++, for
</span><br>
<span class="quotelev1">&gt; instance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Maybe before gcc 2.95 too */
</span><br>
<span class="quotelev1">&gt; #if !defined(HWLOC_HAVE_ATTRIBUTE_UNUSED) &amp;&amp; defined(__GNUC__)
</span><br>
<span class="quotelev1">&gt; # define HWLOC_HAVE_ATTRIBUTE_UNUSED 1
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define HWLOC_HAVE_ATTRIBUTE_UNUSED 1
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #if HWLOC_HAVE_ATTRIBUTE_UNUSED
</span><br>
<span class="quotelev1">&gt; # define __hwloc_attribute_unused __attribute__((__unused__))
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; # define __hwloc_attribute_unused
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; etc. This essentially always defines __hwloc_attribute_unused to expand to
</span><br>
<span class="quotelev1">&gt; the __attribute__() (from hwloc-win64-build-1.3.1.zip).
</span><br>
<p>Ok, so the problem is not actually in the binaries, but the headers :)
<br>
<p>This was also reported in another case and already fixed for the next
<br>
1.3 release.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0529.php">Brice Goglin: "[hwloc-users] hwloc and HTX device ?"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
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
