<?
$subject_val = "Re: [hwloc-devel] 2 minor glitches in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 14:24:43 2012" -->
<!-- isoreceived="20120501182443" -->
<!-- sent="Tue, 01 May 2012 20:24:37 +0200" -->
<!-- isosent="20120501182437" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 2 minor glitches in trunk" -->
<!-- id="4FA02A65.7080006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D98A2BC3-D4D3-47BF-9A4F-F8EB94AA46F1_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 14:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>In reply to:</strong> <a href="3056.php">Jeff Squyres: "[hwloc-devel] 2 minor glitches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/05/2012 19:52, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; 1. On an admittedly pre-production Cisco sandy bridge server, I ran &quot;lstopo foo.xml&quot;, which ended up putting a ctrl-A in the value of the following line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., the value was quote ^A quote.  This caused barfage when trying to use that xml file as input to lstopo (it called it an illegal character).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we filter characters that we know the input parser won't accept?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Are you using libxml2 or the basic XML support ?
<br>
<p>I remember thinking about filtering in the past, but I don't remember
<br>
what the exact problem and solution was.
<br>
<p>Ideally, we should filter info when they are added to the topology by
<br>
the backends, so that we never have to filter on export. But filtering
<br>
on export may be easier for now.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3061.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<li><strong>Previous message:</strong> <a href="3059.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>In reply to:</strong> <a href="3056.php">Jeff Squyres: "[hwloc-devel] 2 minor glitches in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3062.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
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
