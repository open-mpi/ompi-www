<?
$subject_val = "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 11:40:04 2011" -->
<!-- isoreceived="20111212164004" -->
<!-- sent="Mon, 12 Dec 2011 11:40:00 -0500" -->
<!-- isosent="20111212164000" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?" -->
<!-- id="CAHXxYDhGCETKWcWfN_zuEkuTNH462zCYtm-2Puyn7Khw_GJ8iA_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHwLALMDP66PBR6yYrqhjSb3meoHXL11qF_7g_v9BW6zKAyFJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?<br>
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 11:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a *great* topic for discussion, so let me throw some
<br>
fuel to the fire: the mechanism described in the blog (that makes
<br>
perfect sense) is fine for (N)UMA shared memory architectures. But
<br>
will it work for asymmetric architectures such as the Cell BE or
<br>
discrete GPUs where the data between the compute nodes have to be
<br>
explicitly DMA'd in? Is there a middleware layer that makes it
<br>
transparent to the upper layer software?
<br>
<p>Best regards
<br>
Durga
<br>
<p>On Mon, Dec 12, 2011 at 11:00 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sat, Dec 10, 2011 at 3:21 PM, amjad ali &lt;amjad11_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; (2) The latest MPI implementations are intelligent enough that they use some
</span><br>
<span class="quotelev2">&gt;&gt; efficient mechanism while executing&#160;MPI based codes on shared memory
</span><br>
<span class="quotelev2">&gt;&gt; (multicore) machines.&#160; (please tell me any reference to quote this fact).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not an academic paper, but from a real MPI library developer/architect:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI is used by Japan's K computer (current #1 TOP 500 computer)
</span><br>
<span class="quotelev1">&gt; and LANL's RoadRunner (#1 Jun 08 &#150; Nov 09), and &quot;10^16 Flops Can't Be
</span><br>
<span class="quotelev1">&gt; Wrong&quot; and &quot;10^15 Flops Can't Be Wrong&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf">http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Grid Engine / Open Grid Scheduler
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please help me in formally justifying this and comment/modify above two
</span><br>
<span class="quotelev2">&gt;&gt; justifications. Better if I you can suggent me to quote&#160;some reference of
</span><br>
<span class="quotelev2">&gt;&gt; any suitable publication in this regard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Amjad Ali
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Beowulf mailing list, Beowulf_at_[hidden] sponsored by Penguin Computing
</span><br>
<span class="quotelev2">&gt;&gt; To change your subscription (digest mode or unsubscribe) visit
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17935.php">Gary Gorbet: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>In reply to:</strong> <a href="17933.php">Rayson Ho: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17981.php">Rayson Ho: "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
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
