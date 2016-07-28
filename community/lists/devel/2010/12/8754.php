<?
$subject_val = "Re: [OMPI devel] confusion between slot and procs on mca/rmaps";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 05:29:45 2010" -->
<!-- isoreceived="20101201102945" -->
<!-- sent="Wed, 01 Dec 2010 11:37:36 +0100" -->
<!-- isosent="20101201103736" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] confusion between slot and procs on mca/rmaps" -->
<!-- id="4CF62570.2090905_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CFDC6C72-90AF-446C-B3F5-185C4C9FD1FD_at_open-mpi.org" -->
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
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 05:37:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, you can commit it. All problem is on &quot;procs&quot; work, on source code, 
<br>
&quot;processes&quot; AND &quot;cores&quot; definition is used.
<br>
<p>Thank you for your help.
<br>
Damien
<br>
<p>Le 01/12/2010 10:47, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I just checked and it appears bycore does correctly translate to byslot. So your patch does indeed appear to be correct. If you don't mind, I'm going to apply it for you as I'm working on a correction for how we handle oversubscribe flags, and I want to ensure the patch gets included so we compute oversubscribe correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for catching this!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 30, 2010, at 10:33 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Afraid I don't speak much slurm any more (thank goodness!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From your output, It looks like the system is mapping bynode instead of byslot. IIRC, isn't bycore just supposed to be a pseudonym for byslot? So perhaps the problem is that &quot;bycore&quot; causes us to set the &quot;bynode&quot; flag by mistake. Did you check that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW: when running cpus-per-proc, a slot doesn't have X processes. I suspect this is just a language thing, but it will create confusion. A slot consists of X cpus - we still assign only one process to each slot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 30, 2010, at 10:47 AM, Damien Guinier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Many time, there are no difference between &quot;proc&quot; and &quot;slot&quot;. But when you use &quot;mpirun -cpus-per-proc X&quot;, slot have X procs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On orte/mca/rmaps/base/rmaps_base_common_mappers.c, there are a confusion between proc and slot. this little error impact mapping action:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On OMPI last version with 32 cores compute node:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc -n 8 -c 8 mpirun -bind-to-core -bycore ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:1]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:3]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:4]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:6]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with patch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:1]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:3]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:4]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:6]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you say, if my patch is correct ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;patch_cpu_per_rank.txt&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8753.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
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
