<?
$subject_val = "Re: [hwloc-devel] 1.3 -- wait!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 09:34:20 2011" -->
<!-- isoreceived="20111011133420" -->
<!-- sent="Tue, 11 Oct 2011 15:34:15 +0200" -->
<!-- isosent="20111011133415" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3 -- wait!" -->
<!-- id="4E9445D7.8050808_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D259E5CF-8552-4EFC-BA39-3BDBF62BAB0E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3 -- wait!<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 09:34:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Previous message:</strong> <a href="2501.php">Jeff Squyres: "[hwloc-devel] 1.3 -- wait!"</a>
<li><strong>In reply to:</strong> <a href="2501.php">Jeff Squyres: "[hwloc-devel] 1.3 -- wait!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Reply:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/10/2011 15:04, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Looks like Ralph's size/linesize patch didn't make it to v1.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: src/traversal.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/traversal.c	(revision 3883)
</span><br>
<span class="quotelev1">&gt; +++ src/traversal.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -478,7 +478,7 @@
</span><br>
<span class="quotelev1">&gt;  	*assoc = '\0';
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;  	snprintf(assoc, sizeof(assoc), &quot;%sways=%d&quot;, separator, obj-&gt;attr-&gt;cache.associativity);
</span><br>
<span class="quotelev1">&gt; -      res = hwloc_snprintf(tmp, tmplen, &quot;%s%lu%s%sline=%u%s&quot;,
</span><br>
<span class="quotelev1">&gt; +      res = hwloc_snprintf(tmp, tmplen, &quot;%ssize=%lu%s%slinesize=%u%s&quot;,
</span><br>
<span class="quotelev1">&gt;  			   prefix,
</span><br>
<span class="quotelev1">&gt;  			   (unsigned long) hwloc_memory_size_printf_value(obj-&gt;attr-&gt;cache.size, verbose),
</span><br>
<span class="quotelev1">&gt;  			   hwloc_memory_size_printf_unit(obj-&gt;attr-&gt;cache.size, verbose),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this go in before 1.3 is released?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I didn't think it was that important. I can backport it for sure. Do you
<br>
want it in v1.2-ompi too?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Previous message:</strong> <a href="2501.php">Jeff Squyres: "[hwloc-devel] 1.3 -- wait!"</a>
<li><strong>In reply to:</strong> <a href="2501.php">Jeff Squyres: "[hwloc-devel] 1.3 -- wait!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>Reply:</strong> <a href="2503.php">Ralph Castain: "Re: [hwloc-devel] 1.3 -- wait!"</a>
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
