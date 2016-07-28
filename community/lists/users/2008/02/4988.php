<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 12:56:25 2008" -->
<!-- isoreceived="20080205175625" -->
<!-- sent="Tue, 5 Feb 2008 12:56:17 -0500" -->
<!-- isosent="20080205175617" -->
<!-- name="Sacerdoti, Federico" -->
<!-- email="Federico.Sacerdoti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="A14F91CBBBA3014385A806944C9BEF1BAE7C4E_at_maildrd1.nyc.deshaw.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080204213441.GI20614_at_ratbert.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Sacerdoti, Federico (<em>Federico.Sacerdoti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 12:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Re: MPI_Ssend(). This indeed fixes bug3, the process at rank 0 has
<br>
reasonable memory usage and the execution proceeds normally.
<br>
<p>Re scalable: One second. I know well bug3 is not scalable, and when to
<br>
use MPI_Isend. The point is programmers want to count on the MPI spec as
<br>
written, as Richard pointed out. We want to send small messages quickly
<br>
and efficiently, without the danger of overloading the receiver's
<br>
resources. We can use MPI_Ssend() but it is slow compared MPI_Send(). 
<br>
<p>Since identifying this behavior we have implemented the desired flow
<br>
control in our application. 
<br>
Thanks,
<br>
fds
<br>
<p>-----Original Message-----
<br>
From: Brightwell, Ronald [mailto:rbbrigh_at_[hidden]] 
<br>
Sent: Monday, February 04, 2008 4:35 PM
<br>
To: Sacerdoti, Federico
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] openmpi credits for eager messages
<br>
<p>On Mon Feb  4, 2008 14:23:13... Sacerdoti, Federico wrote
<br>
<span class="quotelev1">&gt; To keep this out of the weeds, I have attached a program called &quot;bug3&quot;
</span><br>
<span class="quotelev1">&gt; that illustrates this problem on openmpi 1.2.5 using the openib BTL.
</span><br>
In
<br>
<span class="quotelev1">&gt; bug3 process with rank 0 uses all available memory buffering
</span><br>
<span class="quotelev1">&gt; &quot;unexpected&quot; messages from its neighbors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bug3 is a test-case derived from a real, scalable application (desmond
</span><br>
<span class="quotelev1">&gt; for molecular dynamics) that several experienced MPI developers have
</span><br>
<span class="quotelev1">&gt; worked on. Note the MPI_Send calls of processes N&gt;0 are *blocking*;
</span><br>
the
<br>
<span class="quotelev1">&gt; openmpi silently sends them in the background and overwhelms process 0
</span><br>
<span class="quotelev1">&gt; due to lack of flow control.
</span><br>
<p>This looks like an N-&gt;1 communication pattern to me.  This is the
<br>
definition
<br>
not scalable.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It may not be hard to change desmond to work around openmpi's small
</span><br>
<span class="quotelev1">&gt; message semantics, but a programmer should reasonably be allowed to
</span><br>
<span class="quotelev1">&gt; think a blocking send will block if the receiver cannot handle it yet.
</span><br>
<p>It's actually pretty easy -- change MPI_Send() to MPI_Ssend().
<br>
<p>It sounds like you may be confused by what the term &quot;blocking&quot; means in
<br>
MPI...
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Previous message:</strong> <a href="4987.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4971.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
