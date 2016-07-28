<?
$subject_val = "Re: [OMPI devel] confusion between slot and procs on mca/rmaps";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 07:03:29 2010" -->
<!-- isoreceived="20101201120329" -->
<!-- sent="Wed, 01 Dec 2010 13:11:23 +0100" -->
<!-- isosent="20101201121123" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] confusion between slot and procs on mca/rmaps" -->
<!-- id="4CF63B6B.4020903_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF62570.2090905_at_bull.net" -->
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
<strong>Date:</strong> 2010-12-01 07:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8754.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8754.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
oups
<br>
<p>Ok, you can commit it. All problem is on &quot;procs&quot; word, on source code, 
<br>
&quot;processes&quot; AND &quot;cores&quot; definition is used.
<br>
<p><p>Le 01/12/2010 11:37, Damien Guinier a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok, you can commit it. All problem is on &quot;procs&quot; work, on source code, 
</span><br>
<span class="quotelev1">&gt; &quot;processes&quot; AND &quot;cores&quot; definition is used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help.
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/12/2010 10:47, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I just checked and it appears bycore does correctly translate to 
</span><br>
<span class="quotelev2">&gt;&gt; byslot. So your patch does indeed appear to be correct. If you don't 
</span><br>
<span class="quotelev2">&gt;&gt; mind, I'm going to apply it for you as I'm working on a correction 
</span><br>
<span class="quotelev2">&gt;&gt; for how we handle oversubscribe flags, and I want to ensure the patch 
</span><br>
<span class="quotelev2">&gt;&gt; gets included so we compute oversubscribe correctly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for catching this!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 30, 2010, at 10:33 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Afraid I don't speak much slurm any more (thank goodness!).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From your output, It looks like the system is mapping bynode 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of byslot. IIRC, isn't bycore just supposed to be a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pseudonym for byslot? So perhaps the problem is that &quot;bycore&quot; causes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; us to set the &quot;bynode&quot; flag by mistake. Did you check that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW: when running cpus-per-proc, a slot doesn't have X processes. I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect this is just a language thing, but it will create confusion. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A slot consists of X cpus - we still assign only one process to each 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 30, 2010, at 10:47 AM, Damien Guinier wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Many time, there are no difference between &quot;proc&quot; and &quot;slot&quot;. But 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when you use &quot;mpirun -cpus-per-proc X&quot;, slot have X procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On orte/mca/rmaps/base/rmaps_base_common_mappers.c, there are a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; confusion between proc and slot. this little error impact mapping 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; action:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On OMPI last version with 32 cores compute node:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; salloc -n 8 -c 8 mpirun -bind-to-core -bycore ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:1]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:3]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:4]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:6]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with patch:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:0]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:1]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:2]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:3]&lt;stdout&gt;: host:compute18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:4]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:5]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:6]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rank:7]&lt;stdout&gt;: host:compute19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you say, if my patch is correct ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;patch_cpu_per_rank.txt&gt;_______________________________________________ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8754.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="8754.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Reply:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
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
