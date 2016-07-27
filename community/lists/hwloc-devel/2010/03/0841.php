<?
$subject_val = "Re: [hwloc-devel] Strange difference";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 30 05:59:00 2010" -->
<!-- isoreceived="20100330095900" -->
<!-- sent="Tue, 30 Mar 2010 11:58:55 +0200" -->
<!-- isosent="20100330095855" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange difference" -->
<!-- id="4BB1CB5F.5070803_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201003302041.27746.chris_at_csamuel.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange difference<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-30 05:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0844.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chris Samuel wrote:
<br>
<span class="quotelev1">&gt; On Sat, 27 Mar 2010 05:15:50 am Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; At least on my machine, the output width is still far less than 80
</span><br>
<span class="quotelev2">&gt;&gt; characters, so the full word should be no problem.  But I don't know if
</span><br>
<span class="quotelev2">&gt;&gt; there are other strange topologies out there that would take up more
</span><br>
<span class="quotelev2">&gt;&gt; space...?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be interesting to see what it would look like on a large SGI UV, for 
</span><br>
<span class="quotelev1">&gt; instance..
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>On a old Altix 4700 with 256 itanium cores, it's still far from 80 columns:
<br>
<p>Machine (493GB)
<br>
&nbsp;&nbsp;Misc1 #0 (123GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Misc0 #0 (31GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUMANode #0 (phys=0 7875MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket #0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #0 + P #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #1 + P #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 + P #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[...]
<br>
<p><p>And in verbose mode:
<br>
<p>Machine (phys=0 total=516912176KB)
<br>
&nbsp;&nbsp;Misc1 #0 (total=129224048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Misc0 #0 (total=32296336KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NUMANode #0 (phys=0 local=8064400KB total=8064400KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P #1 (phys=1)
<br>
<p><p>(generated from sysfs tarballs, but shouldn't be different from the
<br>
actual machine)
<br>
<p>On a small Altix UV with 24 Nehalem-EX cores with HT, the width is similar.
<br>
<p>IIRC, the largest UV is 2048 cores, the hierarchy should be
<br>
* 1 machine
<br>
* 256 NUMA nodes grouped in 3 or 4 levels of &quot;misc&quot; objects depending on
<br>
their distances
<br>
* in each NUMA Node, 1 socket x 1 L3 x 8 L2 x 1 L1 x 1 core x 2 threads
<br>
That's 12 levels of hierarchy, which means 22 characters of indentation
<br>
in the lstopo output. Each line is usually 10-20 characters, except when
<br>
you have some memory (it could be 40-50 characters in this case). So we
<br>
should be ok.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0842.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Strange difference"</a>
<li><strong>Previous message:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<li><strong>In reply to:</strong> <a href="0840.php">Chris Samuel: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0844.php">Brice Goglin: "Re: [hwloc-devel] Strange difference"</a>
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
