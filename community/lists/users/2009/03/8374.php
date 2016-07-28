<?
$subject_val = "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 00:05:06 2009" -->
<!-- isoreceived="20090310040506" -->
<!-- sent="Tue, 10 Mar 2009 00:05:00 -0400" -->
<!-- isosent="20090310040500" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node" -->
<!-- id="cb60cbc40903092105o719f855bv9dbbfab31b262416_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A57C685C-D226-4C22-BA89-18D0A4FC20EE_at_cisco.com" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 00:05:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8375.php">Åke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8365.php">Jeff Squyres: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph &amp; Jeff,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This is the same issue - but this time the job is running on a single node.
<br>
<p>The two systems on which the jobs are run, have the same hardware/OS
<br>
configuration. The only differences are:
<br>
<p>One node has 4 GB RAM and it is part of infiniband connected nodes.
<br>
<p>The other node has 8 GB RAM and it is part of gigabit connected nodes.
<br>
<p>For both jobs only 4 processes are used.
<br>
<p>All the processes are run on a single node.
<br>
<p>But why the GB node is taking more time than IB node?
<br>
<p>{ELAPSED TIME = WALL CLOCK TIME}
<br>
<p>Hope you are now clear with the problem.
<br>
<p>Thanks,
<br>
Sangamesh
<br>
On Mon, Mar 9, 2009 at 10:56 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It depends on the characteristics of the nodes in question.  You mention the
</span><br>
<span class="quotelev1">&gt; CPU speeds and the RAM, but there are other factors as well: cache size,
</span><br>
<span class="quotelev1">&gt; memory architecture, how many MPI processes you're running, etc.  Memory
</span><br>
<span class="quotelev1">&gt; access patterns, particularly across UMA machines like clovertown and
</span><br>
<span class="quotelev1">&gt; follow-in intel architectures can really get bogged down by the RAM
</span><br>
<span class="quotelev1">&gt; bottlneck (all 8 cores hammering on memory simultaneously via a single
</span><br>
<span class="quotelev1">&gt; memory bus).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2009, at 10:30 AM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI team,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      With Open MPI-1.3, the fortran application CPMD is installed on
</span><br>
<span class="quotelev2">&gt;&gt; Rocks-4.3 cluster - Dual Processor Quad core Xeon @ 3 GHz. (8 cores
</span><br>
<span class="quotelev2">&gt;&gt; per node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Two jobs (4 processes job) are run on two nodes, separately - one node
</span><br>
<span class="quotelev2">&gt;&gt; has a ib connection ( 4 GB RAM)  and the other node has gigabit
</span><br>
<span class="quotelev2">&gt;&gt; connection (8 GB RAM).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that, the network-connectivity may not be or not required to be
</span><br>
<span class="quotelev2">&gt;&gt; used as the two jobs are running in stand alone mode.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the jobs are running on single node - no intercommunication
</span><br>
<span class="quotelev2">&gt;&gt; between nodes - so the performance of both the jobs should be same
</span><br>
<span class="quotelev2">&gt;&gt; irrespective of network connectivity. But here this is not the case.
</span><br>
<span class="quotelev2">&gt;&gt; The gigabit job is taking double the time of infiniband job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Following are the details of two jobs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband Job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      CPU TIME :    0 HOURS 10 MINUTES 21.71 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;   ELAPSED TIME :    0 HOURS 10 MINUTES 23.08 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  301192/ 571044 kBYTES ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gigabit Job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       CPU TIME :    0 HOURS 12 MINUTES  7.93 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;   ELAPSED TIME :    0 HOURS 21 MINUTES  0.07 SECONDS
</span><br>
<span class="quotelev2">&gt;&gt;  ***      CPMD| SIZE OF THE PROGRAM IS  123420/ 384344 kBYTES ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More details are attached here in a file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why there is a long difference between CPU TIME and ELAPSED TIME for
</span><br>
<span class="quotelev2">&gt;&gt; Gigabit job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could be an issue with Open MPI itself. What could be the reason?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any flags need to be set?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;cpmd_gb_ib_1node&gt;&lt;ATT3915213.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8375.php">Åke Sandgren: "[OMPI users] valgrind complaint in openmpi 1.3 (mca_mpool_sm_alloc)"</a>
<li><strong>Previous message:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>In reply to:</strong> <a href="8365.php">Jeff Squyres: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Reply:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
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
