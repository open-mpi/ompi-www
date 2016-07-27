<?
$subject_val = "[hwloc-devel] 2 minor glitches in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 13:52:23 2012" -->
<!-- isoreceived="20120501175223" -->
<!-- sent="Tue, 1 May 2012 10:52:18 -0700" -->
<!-- isosent="20120501175218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 2 minor glitches in trunk" -->
<!-- id="D98A2BC3-D4D3-47BF-9A4F-F8EB94AA46F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] 2 minor glitches in trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 13:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. On an admittedly pre-production Cisco sandy bridge server, I ran &quot;lstopo foo.xml&quot;, which ended up putting a ctrl-A in the value of the following line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
<p>I.e., the value was quote ^A quote.  This caused barfage when trying to use that xml file as input to lstopo (it called it an illegal character).
<br>
<p>Should we filter characters that we know the input parser won't accept?
<br>
<p>2. Somehow, when I configure and build the hwloc trunk on my mac, it won't provide any graphical output formats.  But when I configure and build the hwloc 1.4 branch on my mac, all the graphical output formats are supported.  This is at the HEAD of both:
<br>
<p>-----
<br>
[10:50] jsquyres-mac:~/svn/hwloc % ./utils/lstopo --help | grep Supported
<br>
Supported output file formats: console, txt, fig, xml, synthetic
<br>
[10:50] jsquyres-mac:~/svn/hwloc % cd ../hwloc-1.4/
<br>
[10:50] jsquyres-mac:~/svn/hwloc-1.4 % ./utils/lstopo --help | grep Supported
<br>
Supported output file formats: console, txt, fig, pdf, ps, png, svg, xml, synthetic
<br>
[10:50] jsquyres-mac:~/svn/hwloc-1.4 % 
<br>
-----
<br>
<p>What changed?  The stdout from configure doesn't show any major differences; Cairo is found on both (and they're both obviously using the same Cairo).
<br>
<p>I'm pretty sure I've used the trunk hwloc to output a PDF on my mac within the last 2-3 weeks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Previous message:</strong> <a href="3055.php">Brice Goglin: "Re: [hwloc-devel] hwloc/windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3057.php">Jeff Squyres: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
<li><strong>Reply:</strong> <a href="3060.php">Brice Goglin: "Re: [hwloc-devel] 2 minor glitches in trunk"</a>
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
