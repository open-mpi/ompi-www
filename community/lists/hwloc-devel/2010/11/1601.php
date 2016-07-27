<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 08:35:56 2010" -->
<!-- isoreceived="20101124133556" -->
<!-- sent="Wed, 24 Nov 2010 14:35:51 +0100" -->
<!-- isosent="20101124133551" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED14B7.4060302_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECDB7C.1030302_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 08:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/11/2010 10:31, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are maintaining a few patches for hwloc within mpich2. I have just
</span><br>
<span class="quotelev1">&gt; updated to 1.1rc3, and wanted to pass them through you guys to see if
</span><br>
<span class="quotelev1">&gt; (1) these are still relevant, and (2) if they can be merged upstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Gracefully abort at configure time if the compiler doesn't support
</span><br>
<span class="quotelev1">&gt; C99:
</span><br>
<span class="quotelev1">&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is this actually still needed?
<br>
<p>I get this error when configuring with a gcc that forces -std=c89:
<br>
<p>checking for /home/bgoglin/bin/gcc-c89 option to accept ISO C99...
<br>
unsupported
<br>
configure: WARNING: C99 support is required by hwloc
<br>
configure: error: Cannot build hwloc core
<br>
&lt;stop&gt;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1600.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
