<?
$subject_val = "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 17:50:49 2010" -->
<!-- isoreceived="20100111225049" -->
<!-- sent="Mon, 11 Jan 2010 23:50:43 +0100" -->
<!-- isosent="20100111225043" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;quot;file name is too long&amp;quot; error during	make	distwith libpci branch" -->
<!-- id="4B4BAB43.6010902_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="565C9B57-8428-4C31-9841-19EF874942D4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 17:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I don't think we should let doxygen dictate the code that we write.
</span><br>
<p>Agreed. Headers are already kind of the horrible :)
<br>
<p><span class="quotelev1">&gt; 1. make doxy do what we want
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Setting SHORT_NAMES to YES in doxygen.cfg seems to help. html and latex
<br>
filenames are replaced with things like a00026.html.
<br>
<p>But SHORT_NAMES does not rename manpages obviously. Fortunately, the
<br>
long filenames are only for useless manpages, things like unions, and we
<br>
don't even actually install them. So I tried replacing $(DOX_MAN_DIR) in
<br>
make dist with $(man3_MANS) but it doesn't seem to help. I wonder
<br>
whether EXTRA_DIST is actually used in doc/Makefile.am.
<br>
<p>Anyway, if we're going to drop latex files before building the tarball,
<br>
maybe we can drop manpages that are not in $(man3_MANS) too?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Previous message:</strong> <a href="0593.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support andv1.0semanticfixes"</a>
<li><strong>In reply to:</strong> <a href="0567.php">Jeff Squyres: "Re: [hwloc-devel] &quot;file name is too long&quot; error during make	distwith libpci branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
<li><strong>Reply:</strong> <a href="0595.php">Samuel Thibault: "Re: [hwloc-devel] &quot;file name is too long&quot; error during	make	distwith libpci branch"</a>
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
