<?
$subject_val = "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 12 11:00:28 2011" -->
<!-- isoreceived="20111212160028" -->
<!-- sent="Mon, 12 Dec 2011 11:00:23 -0500" -->
<!-- isosent="20111212160023" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?" -->
<!-- id="CAHwLALMDP66PBR6yYrqhjSb3meoHXL11qF_7g_v9BW6zKAyFJw_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+bTOHr2Yyo0yNpU+0s7JQbKst9kx9uJidFSXY9R-PsDA=6EQQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-12 11:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Dec 10, 2011 at 3:21 PM, amjad ali &lt;amjad11_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; (2) The latest MPI implementations are intelligent enough that they use some
</span><br>
<span class="quotelev1">&gt; efficient mechanism while executing&#160;MPI based codes on shared memory
</span><br>
<span class="quotelev1">&gt; (multicore) machines.&#160; (please tell me any reference to quote this fact).
</span><br>
<p>Not an academic paper, but from a real MPI library developer/architect:
<br>
<p><a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/</a>
<br>
<a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/</a>
<br>
<p>Open MPI is used by Japan's K computer (current #1 TOP 500 computer)
<br>
and LANL's RoadRunner (#1 Jun 08 &#150; Nov 09), and &quot;10^16 Flops Can't Be
<br>
Wrong&quot; and &quot;10^15 Flops Can't Be Wrong&quot;:
<br>
<p><a href="http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf">http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf</a>
<br>
<p>Rayson
<br>
<p>=================================
<br>
Grid Engine / Open Grid Scheduler
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me in formally justifying this and comment/modify above two
</span><br>
<span class="quotelev1">&gt; justifications. Better if I you can suggent me to quote&#160;some reference of
</span><br>
<span class="quotelev1">&gt; any suitable publication in this regard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Amjad Ali
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; Beowulf mailing list, Beowulf_at_[hidden] sponsored by Penguin Computing
</span><br>
<span class="quotelev1">&gt; To change your subscription (digest mode or unsubscribe) visit
</span><br>
<span class="quotelev1">&gt; <a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17932.php">Patrick Begou: "[OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
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
