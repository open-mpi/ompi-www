<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 24 16:02:22 2015" -->
<!-- isoreceived="20150324200222" -->
<!-- sent="Tue, 24 Mar 2015 21:02:20 +0100" -->
<!-- isosent="20150324200220" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="5511C2CC.8060505_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4D7185E4-EF0E-403B-9C79-04FF0B0D17E5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-24 16:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/03/2015 20:47, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; I talked to Peter off-list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We got a successful build going for him.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like we've identified a few issues here, though:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. ./configure with gcc 4.7.2 on Debian (I didn't catch the precise version of Debian) results in a Lhwloc1 duplicate symbol in OMPI's embedded hwloc.  This feels very much like a compiler error -- we got a successful builds when we forced the use of -O2 instead of the default -O3.  Peter and I will investigate further.
</span><br>
<p>4.7.2 is gcc in Debian wheezy (current stable).
<br>
Looks like the upcoming jessie will have 4.9.2
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17152.php">Nathan Hjelm: "Re: [OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17150.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
