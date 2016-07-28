<?
$subject_val = "Re: [OMPI devel] confusion between slot and procs on mca/rmaps";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 00:33:10 2010" -->
<!-- isoreceived="20101201053310" -->
<!-- sent="Tue, 30 Nov 2010 22:33:01 -0700" -->
<!-- isosent="20101201053301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] confusion between slot and procs on mca/rmaps" -->
<!-- id="8B4011A1-F3AF-4F3A-BA0E-9A28B014095F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF538AC.5090609_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] confusion between slot and procs on mca/rmaps<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 00:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8749.php">Damien Guinier: "[OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I don't speak much slurm any more (thank goodness!).
<br>
<p><span class="quotelev1">&gt;From your output, It looks like the system is mapping bynode instead of byslot. IIRC, isn't bycore just supposed to be a pseudonym for byslot? So perhaps the problem is that &quot;bycore&quot; causes us to set the &quot;bynode&quot; flag by mistake. Did you check that?
</span><br>
<p>BTW: when running cpus-per-proc, a slot doesn't have X processes. I suspect this is just a language thing, but it will create confusion. A slot consists of X cpus - we still assign only one process to each slot.
<br>
<p>On Nov 30, 2010, at 10:47 AM, Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many time, there are no difference between &quot;proc&quot; and &quot;slot&quot;. But when you use &quot;mpirun -cpus-per-proc X&quot;, slot have X procs.
</span><br>
<span class="quotelev1">&gt; On orte/mca/rmaps/base/rmaps_base_common_mappers.c, there are a confusion between proc and slot. this little error impact mapping action:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On OMPI last version with 32 cores compute node:
</span><br>
<span class="quotelev1">&gt; salloc -n 8 -c 8 mpirun -bind-to-core -bycore ./a.out
</span><br>
<span class="quotelev1">&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:1]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:3]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:4]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:6]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with patch:
</span><br>
<span class="quotelev1">&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:1]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:3]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev1">&gt; [rank:4]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:6]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you say, if my patch is correct ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;patch_cpu_per_rank.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8751.php">Ralph Castain: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8749.php">Damien Guinier: "[OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
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
