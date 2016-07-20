<?
$subject_val = "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 17:48:23 2012" -->
<!-- isoreceived="20120119224823" -->
<!-- sent="Thu, 19 Jan 2012 23:48:18 +0100" -->
<!-- isosent="20120119224818" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)" -->
<!-- id="20120119224818.GQ4201_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="442511396.461001.1327009730557.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2012-01-19 17:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Reply:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hartmut Kaiser, le Thu 19 Jan 2012 22:48:50 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; We are using hwloc with VS2010 and were happy to realize that after the (for
</span><br>
<span class="quotelev1">&gt; us) totally broken Windows binary distribution in V1.3
</span><br>
<p>Broken?  How so?  It worked for me.
<br>
<p>Not-reported bugs are usually not fixed.
<br>
<p><span class="quotelev1">&gt; Some investigation showed that the file libhwloc.lib was compiled for 32bit
</span><br>
<span class="quotelev1">&gt; and therefore causes trouble in 64bit builds.
</span><br>
<p>Oh, that's possible indeed, I need to fix the build script to pass
<br>
whatever flag is needed to make a 64bit .lib.  You should be able to do
<br>
it from the provided .def file, using the lib.exe tool from VS.
<br>
<p><span class="quotelev1">&gt; While it is trivial to regenerate the corresponding 64bit import library
</span><br>
<span class="quotelev1">&gt; from the supplied definition file, it would be nice to be able to directly
</span><br>
<span class="quotelev1">&gt; use the distributive from your site.
</span><br>
<p>Sure, thanks for the report!
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Reply:</strong> <a href="0527.php">Hartmut Kaiser: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
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
