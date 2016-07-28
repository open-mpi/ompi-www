<?
$subject_val = "Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 18:33:24 2011" -->
<!-- isoreceived="20111214233324" -->
<!-- sent="Wed, 14 Dec 2011 18:33:19 -0500" -->
<!-- isosent="20111214233319" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?" -->
<!-- id="CAHwLALMkiWYpbg--ujEdq3387YFSFOXpaN-O89YYG_DmOe0XCQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDhGCETKWcWfN_zuEkuTNH462zCYtm-2Puyn7Khw_GJ8iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to justify the use MPI codes on multicore systems/PCs?<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 18:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17980.php">Ralph Castain: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a project called &quot;MVAPICH2-GPU&quot;, which is developed by D. K.
<br>
Panda's research group at Ohio State University. You will find lots of
<br>
references on Google... and I just briefly gone through the slides of
<br>
&quot;MVAPICH2-&#173;GPU: Optimized GPU to GPU Communication for InfiniBand
<br>
Clusters&quot;&quot;:
<br>
<p><a href="http://nowlab.cse.ohio-state.edu/publications/conf-presentations/2011/hao-isc11-slides.pdf">http://nowlab.cse.ohio-state.edu/publications/conf-presentations/2011/hao-isc11-slides.pdf</a>
<br>
<p>It takes advantage of CUDA 4.0's Unified Virtual Addressing (UVA) to
<br>
pipeline &amp; optimize cudaMemcpyAsync() &amp; RMDA transfers. (MVAPICH
<br>
1.8a1p1 also supports Device-Device, Device-Host, Host-Device
<br>
transfers.)
<br>
<p>Open MPI also supports similar functionality, but as OpenMPI is not an
<br>
academic project, there are less academic papers documenting the
<br>
internals of the latest developments (not saying that it's bad - many
<br>
products are not academic in nature and thus have less published
<br>
papers...)
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
<p><p>On Mon, Dec 12, 2011 at 11:40 AM, Durga Choudhury &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I think this is a *great* topic for discussion, so let me throw some
</span><br>
<span class="quotelev1">&gt; fuel to the fire: the mechanism described in the blog (that makes
</span><br>
<span class="quotelev1">&gt; perfect sense) is fine for (N)UMA shared memory architectures. But
</span><br>
<span class="quotelev1">&gt; will it work for asymmetric architectures such as the Cell BE or
</span><br>
<span class="quotelev1">&gt; discrete GPUs where the data between the compute nodes have to be
</span><br>
<span class="quotelev1">&gt; explicitly DMA'd in? Is there a middleware layer that makes it
</span><br>
<span class="quotelev1">&gt; transparent to the upper layer software?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 12, 2011 at 11:00 AM, Rayson Ho &lt;raysonlogin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Dec 10, 2011 at 3:21 PM, amjad ali &lt;amjad11_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) The latest MPI implementations are intelligent enough that they use some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; efficient mechanism while executing&#160;MPI based codes on shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (multicore) machines.&#160; (please tell me any reference to quote this fact).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not an academic paper, but from a real MPI library developer/architect:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport/</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/">http://blogs.cisco.com/performance/shared-memory-as-an-mpi-transport-part-2/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is used by Japan's K computer (current #1 TOP 500 computer)
</span><br>
<span class="quotelev2">&gt;&gt; and LANL's RoadRunner (#1 Jun 08 &#150; Nov 09), and &quot;10^16 Flops Can't Be
</span><br>
<span class="quotelev2">&gt;&gt; Wrong&quot; and &quot;10^15 Flops Can't Be Wrong&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf">http://www.open-mpi.org/papers/sc-2008/jsquyres-cisco-booth-talk-2up.pdf</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =================================
</span><br>
<span class="quotelev2">&gt;&gt; Grid Engine / Open Grid Scheduler
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please help me in formally justifying this and comment/modify above two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; justifications. Better if I you can suggent me to quote&#160;some reference of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any suitable publication in this regard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Amjad Ali
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Beowulf mailing list, Beowulf_at_[hidden] sponsored by Penguin Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To change your subscription (digest mode or unsubscribe) visit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==================================================
</span><br>
<span class="quotelev2">&gt;&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17982.php">Shiqing Fan: "Re: [OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17980.php">Ralph Castain: "Re: [OMPI users] MPI 2 support in sm btl"</a>
<li><strong>In reply to:</strong> <a href="17934.php">Durga Choudhury: "Re: [OMPI users] [Beowulf] How to justify the use MPI codes on multicore systems/PCs?"</a>
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
