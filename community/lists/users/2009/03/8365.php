<?
$subject_val = "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 10:56:43 2009" -->
<!-- isoreceived="20090309145643" -->
<!-- sent="Mon, 9 Mar 2009 10:56:35 -0400" -->
<!-- isosent="20090309145635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node" -->
<!-- id="A57C685C-D226-4C22-BA89-18D0A4FC20EE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40903090730v168686a4g7c968af790c75acc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 10:56:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8366.php">Borenstein, Bernard S: "[OMPI users] only see ras info doing ompi_info for sge"</a>
<li><strong>Previous message:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>In reply to:</strong> <a href="8363.php">Sangamesh B: "[OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It depends on the characteristics of the nodes in question.  You  
<br>
mention the CPU speeds and the RAM, but there are other factors as  
<br>
well: cache size, memory architecture, how many MPI processes you're  
<br>
running, etc.  Memory access patterns, particularly across UMA  
<br>
machines like clovertown and follow-in intel architectures can really  
<br>
get bogged down by the RAM bottlneck (all 8 cores hammering on memory  
<br>
simultaneously via a single memory bus).
<br>
<p><p><p>On Mar 9, 2009, at 10:30 AM, Sangamesh B wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI team,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       With Open MPI-1.3, the fortran application CPMD is installed on
</span><br>
<span class="quotelev1">&gt; Rocks-4.3 cluster - Dual Processor Quad core Xeon @ 3 GHz. (8 cores
</span><br>
<span class="quotelev1">&gt; per node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two jobs (4 processes job) are run on two nodes, separately - one node
</span><br>
<span class="quotelev1">&gt; has a ib connection ( 4 GB RAM)  and the other node has gigabit
</span><br>
<span class="quotelev1">&gt; connection (8 GB RAM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that, the network-connectivity may not be or not required to be
</span><br>
<span class="quotelev1">&gt; used as the two jobs are running in stand alone mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the jobs are running on single node - no intercommunication
</span><br>
<span class="quotelev1">&gt; between nodes - so the performance of both the jobs should be same
</span><br>
<span class="quotelev1">&gt; irrespective of network connectivity. But here this is not the case.
</span><br>
<span class="quotelev1">&gt; The gigabit job is taking double the time of infiniband job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following are the details of two jobs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Infiniband Job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CPU TIME :    0 HOURS 10 MINUTES 21.71 SECONDS
</span><br>
<span class="quotelev1">&gt;    ELAPSED TIME :    0 HOURS 10 MINUTES 23.08 SECONDS
</span><br>
<span class="quotelev1">&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  301192/ 571044 kBYTES ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gigabit Job:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        CPU TIME :    0 HOURS 12 MINUTES  7.93 SECONDS
</span><br>
<span class="quotelev1">&gt;    ELAPSED TIME :    0 HOURS 21 MINUTES  0.07 SECONDS
</span><br>
<span class="quotelev1">&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  123420/ 384344 kBYTES ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details are attached here in a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why there is a long difference between CPU TIME and ELAPSED TIME for
</span><br>
<span class="quotelev1">&gt; Gigabit job?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be an issue with Open MPI itself. What could be the reason?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any flags need to be set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;cpmd_gb_ib_1node&gt;&lt;ATT3915213.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8366.php">Borenstein, Bernard S: "[OMPI users] only see ras info doing ompi_info for sge"</a>
<li><strong>Previous message:</strong> <a href="8364.php">Ralph Castain: "Re: [OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<li><strong>In reply to:</strong> <a href="8363.php">Sangamesh B: "[OMPI users] Lower performance on a Gigabit node compared to infiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
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
