<?
$subject_val = "Re: [hwloc-devel] xml invalid characters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 07:44:23 2012" -->
<!-- isoreceived="20120509114423" -->
<!-- sent="Wed, 09 May 2012 13:44:16 +0200" -->
<!-- isosent="20120509114416" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] xml invalid characters" -->
<!-- id="4FAA5890.7000200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6759B5E3-50AE-4FE4-93A4-17D7639C8107_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] xml invalid characters<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 07:44:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3069.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4470)"</a>
<li><strong>In reply to:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/05/2012 20:39, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On May 1, 2012, at 11:24 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should we filter characters that we know the input parser won't accept?
</span><br>
<span class="quotelev2">&gt;&gt; Are you using libxml2 or the basic XML support ?
</span><br>
<span class="quotelev1">&gt; In both cases (input and output), libxml2.
</span><br>
<p>FWIW, I just met a possibly similar problem on a i386 machine running
<br>
solaris10:
<br>
<p>#utils/lstopo -.xml &gt; prout.xml
<br>
error : xmlEncodeEntitiesReentrant : input not UTF-8
<br>
CPUType was getting value &quot;\302\250&quot;
<br>
<p>There's likely a problem in Terry's code that gathers CPUType, but we
<br>
should do something about it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3071.php">Brice Goglin: "Re: [hwloc-devel] Hardware locality (hwloc) v1.4.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3069.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4470)"</a>
<li><strong>In reply to:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
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
