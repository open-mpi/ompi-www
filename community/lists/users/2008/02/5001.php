<?
$subject_val = "Re: [OMPI users] Infinipath context limit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 08:43:47 2008" -->
<!-- isoreceived="20080207134347" -->
<!-- sent="Thu, 7 Feb 2008 14:43:36 +0100 (CET)" -->
<!-- isosent="20080207134336" -->
<!-- name="Dani&#235;l Mantione" -->
<!-- email="daniel.mantione_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infinipath context limit" -->
<!-- id="Pine.LNX.4.63.0802071439240.30091_at_druifje.clustervision.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080206193400.GC9818_at_mv.qlogic.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infinipath context limit<br>
<strong>From:</strong> Dani&#235;l Mantione (<em>daniel.mantione_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 08:43:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 6 Feb 2008, Christian Bell wrote:
<br>
<p><span class="quotelev1">&gt; Hi Daniel --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   PSM should determine your node setup and enable shared contexts
</span><br>
<span class="quotelev1">&gt;   accordingly, but it looks like something isn't working right.  You
</span><br>
<span class="quotelev1">&gt;   can apply the patch I've attached to this e-mail and things should
</span><br>
<span class="quotelev1">&gt;   work again.
</span><br>
<p>Alas, it doesn't compile (patch was applied to OpenMPI 1.2.5):
<br>
<p>mtl_psm.c(109): error: struct &quot;orte_proc_info_t&quot; has no field &quot;num_local_procs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orte_process_info.num_local_procs &gt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>mtl_psm.c(111): error: struct &quot;orte_proc_info_t&quot; has no field &quot;num_local_procs&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snprintf(buf, sizeof buf - 1, &quot;%d&quot;, orte_process_info.num_local_procs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>mtl_psm.c(113): error: struct &quot;orte_proc_info_t&quot; has no field &quot;local_rank&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snprintf(buf, sizeof buf - 1, &quot;%d&quot;, orte_process_info.local_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for mtl_psm.c (code 2)
<br>
<p>&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt;   However, it would be useful to identify what's going wrong.  Can
</span><br>
<span class="quotelev1">&gt;   you compile a hello world program and run it with the machinefile
</span><br>
<span class="quotelev1">&gt;   you're trying to use.  Send me the output from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun -machinefile .... env PSM_TRACEMASK=0x101 ./hello_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I understand your failure mode only if somehow the 8-core node is
</span><br>
<span class="quotelev1">&gt;   detected to be a 4-core node.  The output should tell us this.
</span><br>
<p>Attached. It seems it does try to enable context sharing but for some 
<br>
reason /dev/ipath still returns a busy code.
<br>
<p>Dani&#235;l
<br>

<br><hr>
<ul>
<li>TEXT/PLAIN attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5001/output">output</a>
</ul>
<!-- attachment="output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>Previous message:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="4997.php">Christian Bell: "Re: [OMPI users] Infinipath context limit"</a>
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
