<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 14:31:26 2008" -->
<!-- isoreceived="20080205193126" -->
<!-- sent="Tue, 5 Feb 2008 14:31:16 -0500" -->
<!-- isosent="20080205193116" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF82C07208.68F180F2-ON852573E6.0067F4D5-852573E6.006B3B94_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080205182624.GB29047_at_ratbert.sandia.gov" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 14:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4992.php">Daniël Mantione: "[OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ron's comments are probably dead on for an application like bug3.
<br>
<p>If bug3 is long running and libmpi is doing eager protocol buffer
<br>
management as I contend the standard requires then the producers will not
<br>
get far ahead of the consumer before they are forced to synchronous send
<br>
under the covers anyway.  From then on, producers will run no faster than
<br>
their output can be absorbed.  They will spent the nonproductive parts of
<br>
their time blocked on either MPI_Send or MPI_Ssend.  The job will not
<br>
finish until the consumer finishes because the consumer is a constant
<br>
bottleneck anyway.  The slow consumer is the major drag on scalability. As
<br>
long as the producers can be expected to outrun the consumer for the life
<br>
of the job you will probably find it hard to measure a difference between
<br>
synchronous send and flow controlled standard send.
<br>
<p>Eager protocol gets more interesting when the pace of the consumer and of
<br>
the producers is variable.  If the consumer can absorb a message per
<br>
millisecond and the production rate is close to one message per millisecond
<br>
but fluctuates a bit then eager protocol may speed the whole job
<br>
significantly. The producers can never get ahead with synchronous send even
<br>
in a phase when they might be able to create a message every 1/2
<br>
millisecond. The producers spend half this easy phase blocked in MPI_Ssend.
<br>
If producers now enter a compute intensive phase where messages can only be
<br>
generated once every 2 milliseconds the consumer spends time idle.  If the
<br>
consumer had been able to accumulate queued messages with eager protocol
<br>
when the producers were able to run faster it could now make itself useful
<br>
catching up.
<br>
<p>Both producers and consumer would come closer to 100% productive work and
<br>
the job would finish sooner..
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/05/2008 01:26:24 PM:
<br>
<p><span class="quotelev2">&gt; &gt; Re: MPI_Ssend(). This indeed fixes bug3, the process at rank 0 has
</span><br>
<span class="quotelev2">&gt; &gt; reasonable memory usage and the execution proceeds normally.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re scalable: One second. I know well bug3 is not scalable, and when to
</span><br>
<span class="quotelev2">&gt; &gt; use MPI_Isend. The point is programmers want to count on the MPI spec
</span><br>
as
<br>
<span class="quotelev2">&gt; &gt; written, as Richard pointed out. We want to send small messages quickly
</span><br>
<span class="quotelev2">&gt; &gt; and efficiently, without the danger of overloading the receiver's
</span><br>
<span class="quotelev2">&gt; &gt; resources. We can use MPI_Ssend() but it is slow compared MPI_Send().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your last statement is not necessarily true.  By synchronizing processes
</span><br>
<span class="quotelev1">&gt; using MPI_Ssend(), you can potentially avoid large numbers of unexpected
</span><br>
<span class="quotelev1">&gt; messages that need to be buffered and copied, and that also need to be
</span><br>
<span class="quotelev1">&gt; searched every time a receive is posted.  There is no guarantee that the
</span><br>
<span class="quotelev1">&gt; protocol overhead on each message incurred with MPI_Ssend() slows down an
</span><br>
<span class="quotelev1">&gt; application more than the buffering, copying, and searching overhead of a
</span><br>
<span class="quotelev1">&gt; large number of unexpected messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is true that MPI_Ssend() is slower than MPI_Send() for ping-pong
</span><br>
<span class="quotelev1">&gt; micro-benchmarks, but the length of the unexpected message queue doesn't
</span><br>
<span class="quotelev1">&gt; have to get very long before they are about the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since identifying this behavior we have implemented the desired flow
</span><br>
<span class="quotelev2">&gt; &gt; control in our application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be interesting to see performance results comparing doing flow
</span><br>
<span class="quotelev1">&gt; control in the application versus having MPI do it for you....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ron
</span><br>
<span class="quotelev1">&gt;
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4991/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4992.php">Daniël Mantione: "[OMPI users] Infinipath context limit"</a>
<li><strong>Previous message:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4990.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4977.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
