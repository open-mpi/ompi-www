<?
$subject_val = "Re: [hwloc-devel] hwloc trouble with the PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 19 09:26:10 2010" -->
<!-- isoreceived="20100919132610" -->
<!-- sent="Sun, 19 Sep 2010 08:26:03 -0500" -->
<!-- isosent="20100919132603" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trouble with the PGI compiler" -->
<!-- id="4C960F6B.8010701_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C58954E.5080703_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trouble with the PGI compiler<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-19 09:26:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1309.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2468)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1242.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1313.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any news on this?
<br>
<p>How are other projects using hwloc dealing with this? This failure is 
<br>
causing the MPICH2 trunk to fail at &quot;make&quot; time with the PGI compilers. 
<br>
We have a sandbox configure for hwloc, so if it fails at configure time, 
<br>
MPICH2 can still proceed, but that's not helping in this case. So from 
<br>
our perspective, if hwloc were to fail, we always want it to fail at 
<br>
configure time, not make (or make install) time.
<br>
<p>Thanks,
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 08/03/2010 05:16 PM, Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the time being, can you add a test to the configure to error out in
</span><br>
<span class="quotelev1">&gt; this case, instead of failing at make time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/01/2010 12:47 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; (forwarding to the list)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like another problem with the PGI compiler custom sched.h header.
</span><br>
<span class="quotelev2">&gt;&gt; Did anybody ever ask PGI why they do this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------- Message original --------
</span><br>
<span class="quotelev2">&gt;&gt; Sujet: 	Re: hwloc-devel post from balaji_at_[hidden] requires approval
</span><br>
<span class="quotelev2">&gt;&gt; Date : 	Sun, 01 Aug 2010 12:17:08 -0500
</span><br>
<span class="quotelev2">&gt;&gt; De : 	Pavan Balaji&lt;balaji_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pour : 	Brice Goglin&lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D'oh! I forgot to forward stderr to the files. I've reattached them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- Pavan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/01/2010 04:07 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I don't see any error in your attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Pavan Balaji
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1309.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2468)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/08/1242.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1313.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
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
