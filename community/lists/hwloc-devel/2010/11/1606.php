<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 17:02:29 2010" -->
<!-- isoreceived="20101124220229" -->
<!-- sent="Wed, 24 Nov 2010 16:02:21 -0600" -->
<!-- isosent="20101124220221" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED8B6D.2080203_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CED14B7.4060302_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc patches for upstream<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 17:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2010 07:35 AM, Brice Goglin wrote:
<br>
<span class="quotelev2">&gt;&gt; 1. Gracefully abort at configure time if the compiler doesn't support
</span><br>
<span class="quotelev2">&gt;&gt; C99:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7497/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this actually still needed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get this error when configuring with a gcc that forces -std=c89:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for /home/bgoglin/bin/gcc-c89 option to accept ISO C99...
</span><br>
<span class="quotelev1">&gt; unsupported
</span><br>
<span class="quotelev1">&gt; configure: WARNING: C99 support is required by hwloc
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot build hwloc core
</span><br>
<span class="quotelev1">&gt; &lt;stop&gt;
</span><br>
<p>Thanks. I see now that the error is being caught in the top-level 
<br>
configure.ac. I'll discard this patch.
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
<li><strong>Next message:</strong> <a href="1607.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1602.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
