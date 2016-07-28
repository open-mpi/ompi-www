<?
$subject_val = "Re: [hwloc-devel] Man pages and gather-topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 07:01:42 2011" -->
<!-- isoreceived="20110120120142" -->
<!-- sent="Thu, 20 Jan 2011 13:01:29 +0100" -->
<!-- isosent="20110120120129" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Man pages and gather-topology" -->
<!-- id="4D382419.4010406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C6746C8-7CEC-4D6E-9D28-9ECC61F43EF3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Man pages and gather-topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 07:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/01/2011 12:23, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I ran some quick tests on the rc1 tarball and ran into problems with the get-API man page and the gather-topology scripts (ie they weren't there and make install failed). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you guys have a look?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The online tarball doesn't build here either. It doesn't contain the
<br>
gather-topology.1in manpage. But make dist (and distcheck) in v1.1
<br>
branch work fine here.
<br>
<p>I don't know what happen during your make dist. Apart from the missing
<br>
manpage. Your tarball contains all files that configure and make
<br>
generates (Makefile, .deps, .o, .libs). Your doxygen also created
<br>
additional files with -e prefix for each expected html and manpages.
<br>
<p>I don't see anything wrong with get_api_version. Once I manually worked
<br>
around the missing manpage, make worked fine.
<br>
<p>FWIW, you used autoconf 2.68 and doxygen 1.7.2. I use 2.67 and 1.7.1.
<br>
Which machine/distrib did you use?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres (jsquyres): "[hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1847.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
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
