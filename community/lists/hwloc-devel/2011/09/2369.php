<?
$subject_val = "Re: [hwloc-devel] Something lighter-weight than XML?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 11:04:25 2011" -->
<!-- isoreceived="20110905150425" -->
<!-- sent="Mon, 05 Sep 2011 17:04:20 +0200" -->
<!-- isosent="20110905150420" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Something lighter-weight than XML?" -->
<!-- id="4E64E4F4.2090007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9958F1CE-A359-4649-8AF8-01B32D6AB347_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Something lighter-weight than XML?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 11:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regarding XML encoding:
<br>
<p>It seems that libxml2 rewrites the following characters as XML entities:
<br>
\n
<br>
\r
<br>
\t
<br>
&quot;
<br>
&lt;
<br>
<span class="quotelev1">&gt;
</span><br>
&amp;
<br>
<p><p>hwloc already tells libxml2 to export as UTF-8. However, a quick check
<br>
seems to say that the output is not UTF8 when the locale isn't UTF8. We
<br>
may need to cdouble-check/clarify/fix this.
<br>
<p>Or we can enforce ASCII-only for all strings. Should be OK for all
<br>
strings we import from the OS. Will need to be enforced for user-given
<br>
strings (object info attributes).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2370.php">Brice Goglin: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>In reply to:</strong> <a href="2368.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
<li><strong>Reply:</strong> <a href="2383.php">Jeff Squyres: "Re: [hwloc-devel] Something lighter-weight than XML?"</a>
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
