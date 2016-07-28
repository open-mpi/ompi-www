<?
$subject_val = "Re: [OMPI users] MPI one-sided passive synchronization.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 16:12:05 2011" -->
<!-- isoreceived="20110413201205" -->
<!-- sent="Wed, 13 Apr 2011 16:11:40 -0400" -->
<!-- isosent="20110413201140" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI one-sided passive synchronization." -->
<!-- id="BANLkTikniwm5uLLO6NB_YR0FaKid7wr=oQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C9CB49C1.3C3D%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI one-sided passive synchronization.<br>
<strong>From:</strong> Abhishek Kulkarni (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 16:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 13, 2011 at 2:49 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; This is mostly an issue of how MPICH2 and Open MPI implement lock/unlock.
</span><br>
<span class="quotelev1">&gt; Some might call what I'm about to describe erroneous.  I wrote the
</span><br>
<span class="quotelev1">&gt; one-sided code in Open MPI and may be among those people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In both implementations, one-sided communication is not necessarily truly
</span><br>
<span class="quotelev1">&gt; asynchronous.  That is, the target of an operation may have to enter the
</span><br>
<span class="quotelev1">&gt; MPI library (MPI_Wtime does not count as entering the library in this
</span><br>
<span class="quotelev1">&gt; case) to progress Lock/Unlock calls.  So rank 2 calls lock (which is a
</span><br>
<span class="quotelev1">&gt; no-op in both implementations), calls put, calls unlock, and waits for a
</span><br>
<span class="quotelev1">&gt; response.  Ranks 0 and 1 wait for a second and enter lock, get, and
</span><br>
<span class="quotelev1">&gt; unlock.  At this point, data actually starts to move.  Chances are, rank 0
</span><br>
<span class="quotelev1">&gt; is going to process it's request first, hence the get from rank 0
</span><br>
<span class="quotelev1">&gt; returning 0.  Then rank 0 will perhaps process some other requests before
</span><br>
<span class="quotelev1">&gt; it leaves unlock (perhaps not), and enter barrier.  At this point, it will
</span><br>
<span class="quotelev1">&gt; progress everything until the other ranks enter barrier, meaning rank 2's
</span><br>
<span class="quotelev1">&gt; put and rank 2 and 3s get will finally be processed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Brian,
<br>
<p>Ok, that helps explain what's going on.
<br>
<p>I understand the difficulty in implementing truly asynchronous RMA
<br>
especially
<br>
when the remote process does not yield to the progress engine periodically.
<br>
Although the standard is lacking and ambiguous on the details (ordering of
<br>
RMA calls,
<br>
behavior of Lock/Unlock) of passive synchronization, it gives a sense that
<br>
only the
<br>
origin process is explicitly involved in the transfer and passive target
<br>
communication
<br>
can further be used to emulate a shared memory model via MPI calls.
<br>
<p>But given the existing behavior, all bets are off and it renders passive
<br>
synchronization
<br>
(MPI_Win_unlock) mostly similar to active synchronization (MPI_Win_fence).
<br>
In trying to emulate a distributed shared memory model, I was hoping to do
<br>
things
<br>
like:
<br>
<p>MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
<br>
MPI_Get(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
<br>
if (out % 2 == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out++;
<br>
MPI_Accumulate(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, MPI_REPLACE, win);
<br>
MPI_Win_unlock(0, win);
<br>
<p>but it is impossible to implement such atomic sections given no semantic
<br>
guarantees
<br>
on ordering of the RMA calls.
<br>
<p>Thanks,
<br>
Abhishek
<br>
<p><p><span class="quotelev1">&gt; In case you're wondering, the specification wasn't disobeyed in the
</span><br>
<span class="quotelev1">&gt; communication order; the lock description is very loose and is relative to
</span><br>
<span class="quotelev1">&gt; other MPI events.  So if you put the barrier before the lock/get/unlock,
</span><br>
<span class="quotelev1">&gt; you'd get the answer you wanted because rank 2's lock would have to occur
</span><br>
<span class="quotelev1">&gt; before rank 0's.  With no other MPI synchronization, there's no
</span><br>
<span class="quotelev1">&gt; requirement that be true, and the locking order could be 0, 1, 2, 2 if it
</span><br>
<span class="quotelev1">&gt; really wanted to be (ie, it would be perfectly legal for rank 1 to also
</span><br>
<span class="quotelev1">&gt; return 0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is obviously not ideal, and one of the areas of focus for the MPI-3
</span><br>
<span class="quotelev1">&gt; standardization effort.  In Open MPI, adding true asynchronous behavior is
</span><br>
<span class="quotelev1">&gt; difficult.  The original design assumed that the lowest communication
</span><br>
<span class="quotelev1">&gt; layers would be able to provide asynchronous completion events to progress
</span><br>
<span class="quotelev1">&gt; the one-sided implementation.  Thus far, only the authors of the TCP stack
</span><br>
<span class="quotelev1">&gt; have provided such behavior and it's not as well tested as other modes of
</span><br>
<span class="quotelev1">&gt; operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/13/11 12:31 PM, &quot;Abhishek Kulkarni&quot; &lt;abbyzcool_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am trying to better understand the semantics of passive synchronization
</span><br>
<span class="quotelev2">&gt; &gt;in one-sided communication calls. Doesn't MPI_Win_unlock()
</span><br>
<span class="quotelev2">&gt; &gt;block to ensure that all the preceeding RMA calls in that epoch have been
</span><br>
<span class="quotelev2">&gt; &gt;synced?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;In that case, why is an undefined value returned when trying to load from
</span><br>
<span class="quotelev2">&gt; &gt;a local window? (see below)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Alloc_mem(128, MPI_INFO_NULL, &amp;ptr);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_create(ptr, 128, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    // write to the target window of the head node
</span><br>
<span class="quotelev2">&gt; &gt;    if (rank == (size - 1)) {
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
</span><br>
<span class="quotelev2">&gt; &gt;        in = 10;
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Put(&amp;in, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Win_unlock(0, win);
</span><br>
<span class="quotelev2">&gt; &gt;    } else {
</span><br>
<span class="quotelev2">&gt; &gt;        // busy wait
</span><br>
<span class="quotelev2">&gt; &gt;        start = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;        end = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;        while ((end - start) &lt; 1)
</span><br>
<span class="quotelev2">&gt; &gt;            end = MPI_Wtime();
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    // read from the head node's window
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Get(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_unlock(0, win);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    printf(&quot;R%d: %d\n&quot;, rank, out);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The output of the above program with 1.5.3rc1 (and also with MPICH2
</span><br>
<span class="quotelev2">&gt; &gt;1.4rc2) is:
</span><br>
<span class="quotelev2">&gt; &gt;R2: 10
</span><br>
<span class="quotelev2">&gt; &gt;R1: 10
</span><br>
<span class="quotelev2">&gt; &gt;R0: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;whereas I expect to see:
</span><br>
<span class="quotelev2">&gt; &gt;R2: 10
</span><br>
<span class="quotelev2">&gt; &gt;R1: 10
</span><br>
<span class="quotelev2">&gt; &gt;R0: 10
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;Abhishek
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16236.php">James Dinan: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
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
