<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 06:15:02 2011" -->
<!-- isoreceived="20111209111502" -->
<!-- sent="Fri, 09 Dec 2011 12:14:56 +0100" -->
<!-- isosent="20111209111456" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030" -->
<!-- id="4EE1EDB0.2030407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201112091110.pB9BA2Op017781_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 06:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Previous message:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Reply:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/12/2011 12:10, jsquyres_at_[hidden] a &#233;crit :
<br>
<p><span class="quotelev1">&gt; ''Really'' fix the $HWLOC_PKG_CONFIG --&gt; $PKG_CONFIG issue.  Don't
</span><br>
<span class="quotelev2">&gt; &gt; just rename it in HWLOC_PKG_PROG_PKG_CONFIG, but everywhere throughout
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_pkg.m4.  
</span><br>
Thanks, I had pretty much the same in my tree, and it seems to work fine.
<br>
<p><p><span class="quotelev2">&gt; &gt; -Consider adjusting the HWLOC_PKG_CONFIG_PATH environment variable if you
</span><br>
<span class="quotelev2">&gt; &gt; +Consider adjusting the PKG_CONFIG environment variable if you
</span><br>
<span class="quotelev2">&gt; &gt;  installed software in a non-standard prefix.
</span><br>
Shouldn't this one be PKG_CONFIG_PATH instead?
<br>
<p>PKG_CONFIG appears in another error message a couple lines below this one:
<br>
&quot;The pkg-config script could not be found or is too old.  Make sure it
<br>
is in your PATH or set the PKG_CONFIG environment variable to the full
<br>
path to pkg-config.&quot;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Previous message:</strong> <a href="2588.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4022"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
<li><strong>Reply:</strong> <a href="2590.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4030"</a>
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
