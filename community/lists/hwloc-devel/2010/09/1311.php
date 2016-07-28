<?
$subject_val = "Re: [hwloc-devel] hwloc trouble with the PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 19 09:44:58 2010" -->
<!-- isoreceived="20100919134458" -->
<!-- sent="Sun, 19 Sep 2010 15:44:54 +0200" -->
<!-- isosent="20100919134454" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trouble with the PGI compiler" -->
<!-- id="4C9613D6.7070106_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C960F6B.8010701_at_mcs.anl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-19 09:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1310.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1315.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Pavan,
<br>
<p>I suggest you report the problem to PGI. I looks like it is entirely
<br>
caused by PGI doing strange stuff with sched.h. I'd like a clear
<br>
explanation from PGI of what they're trying to do and some guarantee
<br>
that we won't have to add newer hacks everytime they release a new
<br>
compiler. I am not in favor of adding random and unmaintainable hacks
<br>
unless we know why, which is not the case so far.
<br>
<p>Brice
<br>
<p><p><p>Le 19/09/2010 15:26, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any news on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How are other projects using hwloc dealing with this? This failure is
</span><br>
<span class="quotelev1">&gt; causing the MPICH2 trunk to fail at &quot;make&quot; time with the PGI
</span><br>
<span class="quotelev1">&gt; compilers. We have a sandbox configure for hwloc, so if it fails at
</span><br>
<span class="quotelev1">&gt; configure time, MPICH2 can still proceed, but that's not helping in
</span><br>
<span class="quotelev1">&gt; this case. So from our perspective, if hwloc were to fail, we always
</span><br>
<span class="quotelev1">&gt; want it to fail at configure time, not make (or make install) time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/03/2010 05:16 PM, Pavan Balaji wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the time being, can you add a test to the configure to error out in
</span><br>
<span class="quotelev2">&gt;&gt; this case, instead of failing at make time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    -- Pavan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/01/2010 12:47 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (forwarding to the list)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like another problem with the PGI compiler custom sched.h header.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did anybody ever ask PGI why they do this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------- Message original --------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sujet:     Re: hwloc-devel post from balaji_at_[hidden] requires
</span><br>
<span class="quotelev3">&gt;&gt;&gt; approval
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date :     Sun, 01 Aug 2010 12:17:08 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De :     Pavan Balaji&lt;balaji_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pour :     Brice Goglin&lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D'oh! I forgot to forward stderr to the files. I've reattached them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- Pavan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/01/2010 04:07 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   I don't see any error in your attachments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavan Balaji
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1310.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1310.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1312.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Reply:</strong> <a href="1315.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
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
