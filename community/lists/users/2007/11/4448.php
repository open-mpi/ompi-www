<?
$subject_val = "[OMPI users] multi-threaded MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 23:05:01 2007" -->
<!-- isoreceived="20071108040501" -->
<!-- sent="Wed, 7 Nov 2007 20:04:56 -0800" -->
<!-- isosent="20071108040456" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] multi-threaded MPI" -->
<!-- id="5b7094580711072004y5af42115xc0ca83b01f3be5e5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 23:04:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4447.php">Murat Knecht: "[OMPI users] MPI Spawn terminates application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<li><strong>Reply:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All -
<br>
<p>I am working on a networked cache for an out-of-core application, and
<br>
currently I have it set up where I have several worker threads, and
<br>
one &quot;request&quot; thread per node.  The worker threads check the cache on
<br>
their own node first, and if there's a miss, they make a request to
<br>
the other nodes in the cluster to see who has the data.  The request
<br>
thread answers requests, and if a node is chosen to deliver data, the
<br>
request thread spawns another thread to handle that particular
<br>
request.
<br>
<p>Currently my application dies in MPI_Barrier before any computation
<br>
begins (but after my request threads are spawned).  After looking into
<br>
this a bit, it seems that OpenMPI has to have thread support to handle
<br>
a model like this (i.e. multiple Sends and Recvs happening at once per
<br>
process).  According to
<br>
<p><span class="quotelev1">&gt;  ompi_info | grep Thread
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
<p>I don't have this thread support.  I am running OpenMPI v 1.1.2 (the
<br>
latest openmpi package in Gentoo).  Can anyone make a recommendation
<br>
for what would be the version to try?
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4449.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openib errors as user, but not root"</a>
<li><strong>Previous message:</strong> <a href="4447.php">Murat Knecht: "[OMPI users] MPI Spawn terminates application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
<li><strong>Reply:</strong> <a href="4454.php">Brian Budge: "Re: [OMPI users] multi-threaded MPI"</a>
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
