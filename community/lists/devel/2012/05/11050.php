<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 07:20:07 2012" -->
<!-- isoreceived="20120530112007" -->
<!-- sent="Wed, 30 May 2012 07:20:04 -0400" -->
<!-- isosent="20120530112004" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="F29E61A0-BE13-4879-A640-2E88CE82EF65_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAL3GGtr2a8pAJEMHXKMdETWY+OzcoVeW=5FYe-ejGga+7yLK5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 07:20:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 30, 2012, at 5:05 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt;  Not good:
</span><br>
<p>@#$%@#%@#!!  But I guess this is why we test.  :-(
<br>
<p><span class="quotelev1">&gt; /labhome/alexm/workspace/openmpi-1.6.1a1hge06c2f2a0859/inst/bin/mpirun --host h-qa-017,h-qa-017,h-qa-017,h-qa-017,h-qa-018,h-qa-018,h-qa-018,h-qa-018 -np 8 --bind-to-core -bynode -display-map /usr/mpi/gcc/mlnx-openmpi-1.6rc4/tests/osu_benchmarks-3.1.1/osu_alltoall
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Data for node: h-qa-017               Num procs: 4
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 6
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Data for node: h-qa-018               Num procs: 4
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 5
</span><br>
<span class="quotelev1">&gt;                 Process OMPI jobid: [36855,1] Process rank: 7
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An invalid physical processor ID was returned when attempting to bind
</span><br>
<span class="quotelev1">&gt; an MPI process to a unique processor.
</span><br>
<span class="quotelev1">&gt; [snip] 
</span><br>
<span class="quotelev1">&gt; $hwloc-ls --of console
</span><br>
<span class="quotelev1">&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2 L#0 (256KB) + L1 L#0 (32KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;     PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;     PU L#1 (P#2)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2 L#1 (256KB) + L1 L#1 (32KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;     PU L#2 (P#1)
</span><br>
<span class="quotelev1">&gt;     PU L#3 (P#3)
</span><br>
<p>Is this hwloc output exactly the same on both nodes?
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
<li><strong>Next message:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>In reply to:</strong> <a href="11049.php">Mike Dubman: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11051.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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
