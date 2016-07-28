<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 16:11:08 2011" -->
<!-- isoreceived="20110106211108" -->
<!-- sent="Thu, 6 Jan 2011 22:10:58 +0100" -->
<!-- isosent="20110106211058" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance" -->
<!-- id="4D262FE2.40004_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F268E08-8BC9-44EE-8F55-23B03AC04A01_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 16:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>In reply to:</strong> <a href="15283.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;&nbsp;Where's located lstopo command on SuseLinux, please ?
<br>
And/or hwloc-bind, which seems related to it ?
<br>
<p>&nbsp;&nbsp;Thanks,   G.
<br>
<p><p><p><p>Le 06/01/2011 21:21, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; (now that we're back from vacation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, this could be an issue.  Is hyperthreading enabled on your machine?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the text output from running hwloc's &quot;lstopo&quot; command on your compute nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ask because if hyperthreading is enabled, OMPI might be assigning one process per *hyerthread* (vs. one process per *core*).  And that could be disastrous for performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 22, 2010, at 2:25 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi David,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I set mpi_affinity_alone to 1. Is that right and sufficient, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,   Best,   G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 22/12/2010 20:18, David Singleton a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the same level of processes and memory affinity or binding being used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/21/2010 07:45 AM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes, there is definitely only 1 process per core with both MPI implementations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, G.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 20/12/2010 20:39, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are your processes places the same way with the two MPI implementations? Per-node vs. per-core ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15287.php">Jeremiah Willcock: "[OMPI users] MPI_ERR_INTERN with MPI_Accumulate using MPI_REPLACE"</a>
<li><strong>In reply to:</strong> <a href="15283.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores :	very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15289.php">Jeff Squyres: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores	:	very poor performance"</a>
<li><strong>Reply:</strong> <a href="15305.php">John Hearns: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores : very poor performance"</a>
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
