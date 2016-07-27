<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 09:56:41 2011" -->
<!-- isoreceived="20111128145641" -->
<!-- sent="Mon, 28 Nov 2011 22:56:23 +0800" -->
<!-- isosent="20111128145623" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="4ED3A117.4080603_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ED39982.1010800_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 0.9.2 autogen issue<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 09:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>On 11/28/2011 10:24 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; This was indeed changed a long time ago when Jeff brought the embedding
</span><br>
<span class="quotelev1">&gt; support. I have nothing against bumping prereq to 2.64. But I'd rather
</span><br>
<span class="quotelev1">&gt; have Jeff look at the missing &quot;-I m4&quot;.
</span><br>
<p>Ok. I upgraded to newer versions of autoconf on most of my machines, and 
<br>
have not noticed it till now. In fact, I just upgraded the last of my 
<br>
machines as well, so I'll likely not notice it even if it remains broken 
<br>
:-). So I guess this bug report is just an FYI.
<br>
<p>Btw, the patch is pretty straightforward and should apply cleanly even 
<br>
with the current version. It's just an additional -I path that's missing 
<br>
in Makefile.am.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
