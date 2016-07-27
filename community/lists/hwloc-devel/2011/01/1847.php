<?
$subject_val = "Re: [hwloc-devel] Man pages and gather-topology";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 07:18:39 2011" -->
<!-- isoreceived="20110120121839" -->
<!-- sent="Thu, 20 Jan 2011 13:18:31 +0100" -->
<!-- isosent="20110120121831" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Man pages and gather-topology" -->
<!-- id="4D382817.4060306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D382419.4010406_at_inria.fr" -->
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
<strong>Date:</strong> 2011-01-20 07:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1849.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/01/2011 13:01, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The online tarball doesn't build here either. It doesn't contain the
</span><br>
<span class="quotelev1">&gt; gather-topology.1in manpage. But make dist (and distcheck) in v1.1
</span><br>
<span class="quotelev1">&gt; branch work fine here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what happen during your make dist. Apart from the missing
</span><br>
<span class="quotelev1">&gt; manpage. Your tarball contains all files that configure and make
</span><br>
<span class="quotelev1">&gt; generates (Makefile, .deps, .o, .libs). Your doxygen also created
</span><br>
<span class="quotelev1">&gt; additional files with -e prefix for each expected html and manpages.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I meant &quot;-e&quot; *suffix*.
<br>
<p>Your tarball:
<br>
<p>$ tar tvfz hwloc-1.1.1rc1.tar.gz | grep get_api_
<br>
-rw-r--r-- jsquyres/staff      34 2011-01-19 14:21 hwloc-1.1.1rc1/doc/doxygen-doc/man/man3/hwloc_get_api_version.3
<br>
-rw-r--r-- jsquyres/staff      34 2011-01-19 14:21 hwloc-1.1.1rc1/doc/doxygen-doc/man/man3/hwloc_get_api_version.3-e
<br>
<p><p>My tarball:
<br>
<p>$ tar tvfz hwloc-1.1.1rc1r3097.tar.gz | grep get_api_ 
<br>
-rw-r--r-- bgoglin/users      34 2011-01-20 13:12 hwloc-1.1.1rc1r3097/doc/doxygen-doc/man/man3/hwloc_get_api_version.3
<br>
<p><p><p><span class="quotelev1">&gt; I don't see anything wrong with get_api_version. Once I manually worked
</span><br>
<span class="quotelev1">&gt; around the missing manpage, make worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you used autoconf 2.68 and doxygen 1.7.2. I use 2.67 and 1.7.1.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Upgrading from doxygen 1.7.1 to 1.7.3 didn't change anything (it didn't
<br>
create &quot;-e&quot; suffixed files).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Previous message:</strong> <a href="1846.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>In reply to:</strong> <a href="1846.php">Brice Goglin: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1848.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
<li><strong>Reply:</strong> <a href="1849.php">Jeff Squyres: "Re: [hwloc-devel] Man pages and gather-topology"</a>
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
