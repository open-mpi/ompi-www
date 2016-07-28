<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  4 11:11:44 2010" -->
<!-- isoreceived="20100404151144" -->
<!-- sent="Sun, 04 Apr 2010 17:11:36 +0200" -->
<!-- isosent="20100404151136" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910" -->
<!-- id="4BB8AC28.2080005_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004041320.o34DKSLc026460_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-04 11:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Reply:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sthibaul_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-04 09:20:28 EDT (Sun, 04 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1910
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1910">https://svn.open-mpi.org/trac/hwloc/changeset/1910</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; add --top option to lstopo to show bound processes
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Great, thanks!
<br>
<p>I think it'd be better if lstopo in non-verbose mode would print those
<br>
Misc objects after everything else with same cpuset. Right now we get
<br>
<p>Machine (32GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 8191MB) + Socket #0 + L3 #0 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (512KB) + L1 #0 (64KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (512KB) + L1 #1 (64KB) + Core #1 + PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;15887 /home/bgoglin/hwloc/build/utils/.libs/lt-lstopo + L2 #2 (512KB) + L1 #2 (64KB) + Core #2 + PU #2 (phys=2)
<br>
<p>while I would prefer
<br>
<p>Machine (32GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 8191MB) + Socket #0 + L3 #0 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (512KB) + L1 #0 (64KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (512KB) + L1 #1 (64KB) + Core #1 + PU #1 (phys=1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (512KB) + L1 #2 (64KB) + Core #2 + PU #2 (phys=2) + 15887 /home/bgoglin/hwloc/build/utils/.libs/lt-lstop
<br>
<p><p>In non-verbose mode, I am not sure what's best between
<br>
<p>Machine (phys=0 total=33553780KB Supermicro H8QM8)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 local=8387956KB total=8387956KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache #0 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16972 /home/bgoglin/hwloc/build/utils/.libs/lt-lstopo &quot;16972 /home/bgoglin/hwloc/build/utils/.libs/lt-lstopo&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #2 (512KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #2 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
<p>and
<br>
<p>Machine (phys=0 total=33553780KB Supermicro H8QM8)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 local=8387956KB total=8387956KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache #0 (2048KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache #2 (512KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache #2 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16972 /home/bgoglin/hwloc/build/utils/.libs/lt-lstopo &quot;16972 /home/bgoglin/hwloc/build/utils/.libs/lt-lstopo&quot;
<br>
<p><p>So, do we want something like:
<br>
1) insert_misc_by_cpuset() to always insert below objects with same cpusets? Might be better for some use cases, and worse for others...
<br>
2) have a parameter to switch between current behavior and (1) ?
<br>
3) add a quirk to lstopo to show Misc objects last? this one would also let us replace &quot;+&quot; with another character right before the PID in the non-verbose output
<br>
<p>/me going back to easter eggs...
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Previous message:</strong> <a href="0880.php">Samuel Thibault: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
<li><strong>Reply:</strong> <a href="0882.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1910"</a>
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
