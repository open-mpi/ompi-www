<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec 20 10:47:56 2006" -->
<!-- isoreceived="20061220154756" -->
<!-- sent="Wed, 20 Dec 2006 15:47:48 +0000" -->
<!-- isosent="20061220154748" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)" -->
<!-- id="d9b9d95f0612200747j5d582125w9ac7f3be58b796c4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="137685.32977.qm_at_web52212.mail.yahoo.com" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-20 10:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing"</a>
<li><strong>Previous message:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>In reply to:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2388.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Reply:</strong> <a href="2388.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/20/06, Harakiri &lt;harakiri_23_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I will study through the suggested paper, however
</span><br>
<span class="quotelev1">&gt; i actually read a different paper which suggested
</span><br>
<span class="quotelev1">&gt; using less messages, i would imagine that for arrays
</span><br>
<span class="quotelev1">&gt; of numbers lets say 100 Millions - the network
</span><br>
<span class="quotelev1">&gt; messages become the critical factor.
</span><br>
<p>IMHO,
<br>
<p>It depends completely on your network topology and technology (ie.
<br>
bandwidth and latency). It's very hard to predict a generic behaviour
<br>
other than: &quot;more data is worse&quot;.
<br>
<p>Ethernet is quite good at bandwidth but not at latency so a few big
<br>
chunks are better than lots of small chunks but it also depends how
<br>
the network is carrying your packages along the way.
<br>
<p>The network is a critical factor only if it's running time is
<br>
comparable or greater than the processing time. Copying 1Mb between
<br>
nodes is critical for a nanosecond computation but not if it'll take
<br>
days.
<br>
<p>cheers,
<br>
--renato
<br>
<p>Reclaim your digital rights, eliminate DRM, learn more at
<br>
<a href="http://www.defectivebydesign.org/what_is_drm">http://www.defectivebydesign.org/what_is_drm</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing"</a>
<li><strong>Previous message:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<li><strong>In reply to:</strong> <a href="2385.php">Harakiri: "Re: [OMPI users] Suggestions needed for parallelisation of sorting algorithms (quicksort)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2388.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
<li><strong>Reply:</strong> <a href="2388.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] How do I compile OpenMPI with PGI compilers and F90 support?"</a>
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
