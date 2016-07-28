<?
$subject_val = "Re: [OMPI users] multi-threaded MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  8 22:11:18 2007" -->
<!-- isoreceived="20071109031118" -->
<!-- sent="Thu, 8 Nov 2007 19:11:14 -0800" -->
<!-- isosent="20071109031114" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-threaded MPI" -->
<!-- id="5b7094580711081911m90a2f3cmbb86405f36aced11_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5b7094580711072004y5af42115xc0ca83b01f3be5e5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-threaded MPI<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-08 22:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4455.php">Clement Kam Man Chu: "[OMPI users] PML failed"</a>
<li><strong>Previous message:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4448.php">Brian Budge: "[OMPI users] multi-threaded MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the noise.  I found MPI_Init_thread and installed 1.2.4.
<br>
Seems to be fine now!
<br>
<p>Thanks for the great work on the multi-threaded MPI codes!
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Nov 7, 2007 8:04 PM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi All -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working on a networked cache for an out-of-core application, and
</span><br>
<span class="quotelev1">&gt; currently I have it set up where I have several worker threads, and
</span><br>
<span class="quotelev1">&gt; one &quot;request&quot; thread per node.  The worker threads check the cache on
</span><br>
<span class="quotelev1">&gt; their own node first, and if there's a miss, they make a request to
</span><br>
<span class="quotelev1">&gt; the other nodes in the cluster to see who has the data.  The request
</span><br>
<span class="quotelev1">&gt; thread answers requests, and if a node is chosen to deliver data, the
</span><br>
<span class="quotelev1">&gt; request thread spawns another thread to handle that particular
</span><br>
<span class="quotelev1">&gt; request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently my application dies in MPI_Barrier before any computation
</span><br>
<span class="quotelev1">&gt; begins (but after my request threads are spawned).  After looking into
</span><br>
<span class="quotelev1">&gt; this a bit, it seems that OpenMPI has to have thread support to handle
</span><br>
<span class="quotelev1">&gt; a model like this (i.e. multiple Sends and Recvs happening at once per
</span><br>
<span class="quotelev1">&gt; process).  According to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_info | grep Thread
</span><br>
<span class="quotelev1">&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have this thread support.  I am running OpenMPI v 1.1.2 (the
</span><br>
<span class="quotelev1">&gt; latest openmpi package in Gentoo).  Can anyone make a recommendation
</span><br>
<span class="quotelev1">&gt; for what would be the version to try?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;   Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4455.php">Clement Kam Man Chu: "[OMPI users] PML failed"</a>
<li><strong>Previous message:</strong> <a href="4453.php">Harald Servat: "Re: [OMPI users] fail to link when looking in other directories containing other MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="4448.php">Brian Budge: "[OMPI users] multi-threaded MPI"</a>
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
