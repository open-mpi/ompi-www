<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 14:54:55 2008" -->
<!-- isoreceived="20080204195455" -->
<!-- sent="Mon, 4 Feb 2008 14:54:46 -0500" -->
<!-- isosent="20080204195446" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="OF49B8F722.08D78CC7-ON852573E5.00697FFF-852573E5.006D6298_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080204190319.GA15424_at_minantech.com" -->
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
<strong>Date:</strong> 2008-02-04 14:54:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb
<br>
<p>In my example, each sender task 1 to n-1 will have one rendezvous message
<br>
to task 0 at a time.  The MPI standard suggests descriptors be small enough
<br>
and  there be enough descriptor space for reasonable programs . The
<br>
standard is clear that unreasonable programs can run out of space and fail.
<br>
The standard does not try to quantify reasonableness.
<br>
<p>This gets really interesting when we talk about hundreds of thousands of
<br>
tasks.  If  on a general purpose MPI there are 16 tasks and task 0 cannot
<br>
hold 1 envelop from each of the other 15, it is probably a poor quality
<br>
MPI.    If there are a million tasks and task 0 can only hold 100,000
<br>
envelops then it is fair to argue that holding 100,000 evelopes is generous
<br>
and the million task job is not being reasonable.  This little example
<br>
could be reasonable for small task counts and unreasonable for huge task
<br>
counts.
<br>
<p>If there are 2 tasks and and the single sender posts 15 MPI_ISENDs to task
<br>
0, a quality MPI should probably handle that too.  If the sender tries to
<br>
post a million MPI_ISENDs and either sender or receiver run out of
<br>
descriptor space after 100,000 it is again fair to fail the job and argue
<br>
the program is not being reasonable.  The line between reasonable and
<br>
unreasonable application behavior is not a bright, sharp line.
<br>
<p>A big part of my reason for prodding this is that I think it is bettter to
<br>
have the MPI Forum discuss changes to the standard than to have MPI
<br>
implementors deciding what parts to ignore.  If the MPI Forum does bless a
<br>
mode that allows my example to crash, IBM MPI will support that mode and
<br>
some of our users will chose to run in that mode.  If their applications
<br>
are &quot;well structured&quot; in certain specific ways they will never have a
<br>
problem with early arrival oveflow.
<br>
<p>If the standard is unclear then this is the time to make it clear.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIck
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 02/04/2008 02:03:20 PM:
<br>
<p><span class="quotelev1">&gt; On Mon, Feb 04, 2008 at 09:08:45AM -0500, Richard Treumann wrote:
</span><br>
<span class="quotelev2">&gt; &gt; To me, the MPI standard is clear that a program like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; task 0:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; sleep(3000);
</span><br>
<span class="quotelev2">&gt; &gt; start receiving messages
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; each of tasks 1 to n-1:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; loop 5000 times
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Send(small message to 0)
</span><br>
<span class="quotelev2">&gt; &gt; end loop
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; May send some small messages eagerly if there is space at task 0 but
</span><br>
must
<br>
<span class="quotelev2">&gt; &gt; block each task 1 to  n-1 before allowing task 0 to run out of eager
</span><br>
buffer
<br>
<span class="quotelev2">&gt; &gt; space.  Doing this requires a token or credit management system in
</span><br>
which
<br>
<span class="quotelev2">&gt; &gt; each task has credits for known buffer space at task 0. Each task will
</span><br>
send
<br>
<span class="quotelev2">&gt; &gt; eagerly to task 0 until the sender runs out of credits and then must
</span><br>
switch
<br>
<span class="quotelev2">&gt; &gt; to rendezvous protocol.
</span><br>
<span class="quotelev1">&gt; And rendezvous messages are not free either. So this approach will only
</span><br>
<span class="quotelev1">&gt; postpone failure a little bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;          Gleb.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
