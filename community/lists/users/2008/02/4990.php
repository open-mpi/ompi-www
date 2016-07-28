<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 13:33:08 2008" -->
<!-- isoreceived="20080205183308" -->
<!-- sent="Tue, 5 Feb 2008 11:26:24 -0700" -->
<!-- isosent="20080205182624" -->
<!-- name="Brightwell, Ronald" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080205182624.GB29047_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A14F91CBBBA3014385A806944C9BEF1BAE7C4E_at_maildrd1.nyc.deshaw.com" -->
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
<strong>From:</strong> Brightwell, Ronald (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 13:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Re: MPI_Ssend(). This indeed fixes bug3, the process at rank 0 has
</span><br>
<span class="quotelev1">&gt; reasonable memory usage and the execution proceeds normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re scalable: One second. I know well bug3 is not scalable, and when to
</span><br>
<span class="quotelev1">&gt; use MPI_Isend. The point is programmers want to count on the MPI spec as
</span><br>
<span class="quotelev1">&gt; written, as Richard pointed out. We want to send small messages quickly
</span><br>
<span class="quotelev1">&gt; and efficiently, without the danger of overloading the receiver's
</span><br>
<span class="quotelev1">&gt; resources. We can use MPI_Ssend() but it is slow compared MPI_Send().
</span><br>
<p>Your last statement is not necessarily true.  By synchronizing processes
<br>
using MPI_Ssend(), you can potentially avoid large numbers of unexpected
<br>
messages that need to be buffered and copied, and that also need to be
<br>
searched every time a receive is posted.  There is no guarantee that the
<br>
protocol overhead on each message incurred with MPI_Ssend() slows down an
<br>
application more than the buffering, copying, and searching overhead of a
<br>
large number of unexpected messages.
<br>
<p>It is true that MPI_Ssend() is slower than MPI_Send() for ping-pong
<br>
micro-benchmarks, but the length of the unexpected message queue doesn't
<br>
have to get very long before they are about the same.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since identifying this behavior we have implemented the desired flow
</span><br>
<span class="quotelev1">&gt; control in our application.
</span><br>
<p>It would be interesting to see performance results comparing doing flow
<br>
control in the application versus having MPI do it for you....
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4991.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
