<?
$subject_val = "Re: [hwloc-devel] 2 minor glitches in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 14:39:15 2012" -->
<!-- isoreceived="20120501183915" -->
<!-- sent="Tue, 1 May 2012 11:39:11 -0700" -->
<!-- isosent="20120501183911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 2 minor glitches in trunk" -->
<!-- id="6759B5E3-50AE-4FE4-93A4-17D7639C8107_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FA02A65.7080006_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 2 minor glitches in trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 14:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3063.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4463)"</a>
<li><strong>Previous message:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3070.php">Brice Goglin: "Re: [hwloc-devel] xml invalid characters"</a>
<li><strong>Reply:</strong> <a href="3070.php">Brice Goglin: "Re: [hwloc-devel] xml invalid characters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2012, at 11:24 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Should we filter characters that we know the input parser won't accept?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you using libxml2 or the basic XML support ?
</span><br>
<p>In both cases (input and output), libxml2.  configure footer says:
<br>
<p>(Mac -- input)
<br>
<p>-----------------------------------------------------------------------------
<br>
Hwloc optional build support status (more details can be found above):
<br>
<p>Probe / display PCI devices: no
<br>
Graphical output (Cairo):    yes
<br>
XML input / output:          full
<br>
-----------------------------------------------------------------------------
<br>
<p>(Linux -- output):
<br>
<p>-----------------------------------------------------------------------------
<br>
Hwloc optional build support status (more details can be found above):
<br>
<p>Probe / display PCI devices: yes
<br>
Graphical output (Cairo):    no
<br>
XML input / output:          full
<br>
libnuma memory support:      yes
<br>
-----------------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; I remember thinking about filtering in the past, but I don't remember
</span><br>
<span class="quotelev1">&gt; what the exact problem and solution was.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ideally, we should filter info when they are added to the topology by
</span><br>
<span class="quotelev1">&gt; the backends, so that we never have to filter on export. But filtering
</span><br>
<span class="quotelev1">&gt; on export may be easier for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3063.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4463)"</a>
<li><strong>Previous message:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>In reply to:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3070.php">Brice Goglin: "Re: [hwloc-devel] xml invalid characters"</a>
<li><strong>Reply:</strong> <a href="3070.php">Brice Goglin: "Re: [hwloc-devel] xml invalid characters"</a>
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
