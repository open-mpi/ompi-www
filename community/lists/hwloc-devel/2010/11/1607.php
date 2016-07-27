<?
$subject_val = "Re: [hwloc-devel] hwloc patches for upstream";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 17:08:29 2010" -->
<!-- isoreceived="20101124220829" -->
<!-- sent="Wed, 24 Nov 2010 16:08:22 -0600" -->
<!-- isosent="20101124220822" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc patches for upstream" -->
<!-- id="4CED8CD6.6090408_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="228FE1C4-E18D-443A-867A-E83B3C3445D2_at_cisco.com" -->
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
<strong>Date:</strong> 2010-11-24 17:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1619.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/24/2010 09:14 AM, Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; 1. Disable doxygen builds by default:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc">https://trac.mcs.anl.gov/projects/mpich2/changeset/7498/mpich2/trunk/src/pm/hydra/tools/bind/hwloc/hwloc</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree with Brice on this one; you should be using embedded mode to
</span><br>
<span class="quotelev1">&gt; disable a bunch of stuff by default. This will save you lots of
</span><br>
<span class="quotelev1">&gt; hassles; not just doxygen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question -- per prior email -- is: why not use
</span><br>
<span class="quotelev1">&gt; --disable-embedded-mode, and --disable-shared --enable-static? (vs.
</span><br>
<span class="quotelev1">&gt; patching) IIRC, I put --disable-embedded-mode there exactly for the
</span><br>
<span class="quotelev1">&gt; case of projects that want to embed but don't want to call our m4
</span><br>
<span class="quotelev1">&gt; directly.
</span><br>
<p>We use an AC_CONFIG_SUBDIR-style macro for launching the hwloc configure 
<br>
(but slightly modified to do a sandbox-configure so we can catch 
<br>
errors). So, the configure arguments come from what the user specified. 
<br>
We have capability to internally add extra configure arguments 
<br>
specifically for hwloc, but I was trying to avoid that. Besides, other 
<br>
projects might not have the same macros that MPICH2 has.
<br>
<p>With respect to using embedded mode, the reason is the same as above -- 
<br>
if hwloc's configure fails, we don't want MPICH2's configure to fail as 
<br>
well. Using a sandbox configure allows us to catch hwloc's configure 
<br>
errors and disable it for cases where it doesn't work.
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
<li><strong>Next message:</strong> <a href="1608.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Pavan Balaji: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1609.php">Brice Goglin: "Re: [hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Reply:</strong> <a href="1619.php">Jeff Squyres: "Re: [hwloc-devel] hwloc patches for upstream"</a>
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
