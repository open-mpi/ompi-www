<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:02:12 2013" -->
<!-- isoreceived="20130206150212" -->
<!-- sent="Wed, 06 Feb 2013 16:02:07 +0100" -->
<!-- isosent="20130206150207" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="5112706F.4070407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51126495.5020205_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-06 10:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3506.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/02/2013 15:11, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 06/02/2013 15:06, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2013, at 10:11 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's a Xorg dependency, so it's available on many platforms and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prepackaged in many distributions, including darwin if I remember correctly.
</span><br>
<span class="quotelev2">&gt;&gt; I'm thinking that we should actually release a new version for all hwloc versions that defaulted to use libpci -- that's 1.3.x and beyond.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll need to update the version that's bundled all versions of OMPI (1.6.x., 1.7.x, trunk), for example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'll volunteer to do the configury stuff.  I see Brice just made a svn branch; do you want me to commit the updates there?  Or did you want to just do it all?
</span><br>
<span class="quotelev1">&gt; I am already doing it. Will push things within an hour.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are we removing the possibility of using libpci?
</span><br>
<span class="quotelev1">&gt; Not yet. Samuel's nvidia card isn't properly recognized, and I haven't
</span><br>
<span class="quotelev1">&gt; tested on many machines yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Just pushed Samuel's patch + the configury + one fix for object names.
<br>
The code currently uses libpciaccess by default. pciutils is only used
<br>
when libpciaccess isn't available. I am not sure yet if we should add a
<br>
--disable-gpl or --enable-gpl, or just remove libpci entirely.
<br>
<p>lstopo --whole-io exports the exact same XML on the all our local
<br>
machines (from Clovertown to E5, one AMD Bulldozer, with IB, 10G and
<br>
AMD/NVIDIA GPUs, from Dell, IBM and Supermicro, and one Qemu VM). In
<br>
short, it looks pretty good, but I'd like to understand Samuel's problem.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3506.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3506.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Reply:</strong> <a href="3508.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
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
