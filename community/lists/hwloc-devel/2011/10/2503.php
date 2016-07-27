<?
$subject_val = "Re: [hwloc-devel] 1.3 -- wait!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 09:47:39 2011" -->
<!-- isoreceived="20111011134739" -->
<!-- sent="Tue, 11 Oct 2011 07:47:29 -0600" -->
<!-- isosent="20111011134729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3 -- wait!" -->
<!-- id="77DC7657-5F5B-4371-8A7E-564C080429E1_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E9445D7.8050808_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 09:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Guy Streeter: "Re: [hwloc-devel] final v1.3?"</a>
<li><strong>Previous message:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>In reply to:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2011, at 7:34 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 11/10/2011 15:04, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Looks like Ralph's size/linesize patch didn't make it to v1.3:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: src/traversal.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- src/traversal.c	(revision 3883)
</span><br>
<span class="quotelev2">&gt;&gt; +++ src/traversal.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -478,7 +478,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 	*assoc = '\0';
</span><br>
<span class="quotelev2">&gt;&gt;       else
</span><br>
<span class="quotelev2">&gt;&gt; 	snprintf(assoc, sizeof(assoc), &quot;%sways=%d&quot;, separator, obj-&gt;attr-&gt;cache.associativity);
</span><br>
<span class="quotelev2">&gt;&gt; -      res = hwloc_snprintf(tmp, tmplen, &quot;%s%lu%s%sline=%u%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; +      res = hwloc_snprintf(tmp, tmplen, &quot;%ssize=%lu%s%slinesize=%u%s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; 			   prefix,
</span><br>
<span class="quotelev2">&gt;&gt; 			   (unsigned long) hwloc_memory_size_printf_value(obj-&gt;attr-&gt;cache.size, verbose),
</span><br>
<span class="quotelev2">&gt;&gt; 			   hwloc_memory_size_printf_unit(obj-&gt;attr-&gt;cache.size, verbose),
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can this go in before 1.3 is released?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't think it was that important. I can backport it for sure.
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev1">&gt; Do you
</span><br>
<span class="quotelev1">&gt; want it in v1.2-ompi too?
</span><br>
<p>Not necessary for v1.2-ompi - I already inserted it in our local copy, and I imagine we'll update to 1.3 shortly.
<br>
<p><span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2504.php">Guy Streeter: "Re: [hwloc-devel] final v1.3?"</a>
<li><strong>Previous message:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
<li><strong>In reply to:</strong> <a href="2502.php">Brice Goglin: "Re: [hwloc-devel] 1.3 -- wait!"</a>
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
