<?
$subject_val = "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 19:48:36 2012" -->
<!-- isoreceived="20120317234836" -->
<!-- sent="Sun, 18 Mar 2012 00:48:30 +0100" -->
<!-- isosent="20120317234830" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed" -->
<!-- id="20120317234830.GK19679_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="389329177.100874.1331880532387.JavaMail.root_at_zmbs5.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-17 19:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4409)"</a>
<li><strong>Previous message:</strong> <a href="2935.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4403)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2928.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 16 Mar 2012 07:48:52 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 16/03/2012 02:44, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Thu 15 Mar 2012 17:36:29 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looks like g++ doesn't like __hwloc_attribute_unused in hwloc/helper.h
</span><br>
<span class="quotelev2">&gt; &gt; I wonder what Hydra uses for g++. I have tested various versions (from
</span><br>
<span class="quotelev2">&gt; &gt; 4.1 to 4.7), without problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like &quot;fedora2&quot; in the title is really what it means :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:4653: checking for g++
</span><br>
<span class="quotelev1">&gt; configure:4669: found /usr/bin/g++
</span><br>
<span class="quotelev1">&gt; configure:4680: result: g++
</span><br>
<span class="quotelev1">&gt; configure:4707: checking for C++ compiler version
</span><br>
<span class="quotelev1">&gt; configure:4716: g++ --version &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; g++ (GCC) 3.3.3 20040412 (Red Hat Linux 3.3.3-7)
</span><br>
<p>Ouch indeed! And it's the last version of g++ that wasn't understanding
<br>
attributes.  I have dropped attribute usage for these.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2937.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4409)"</a>
<li><strong>Previous message:</strong> <a href="2935.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4403)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2928.php">Brice Goglin: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
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
