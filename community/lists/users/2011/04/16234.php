<?
$subject_val = "Re: [OMPI users] MPI one-sided passive synchronization.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 14:51:26 2011" -->
<!-- isoreceived="20110413185126" -->
<!-- sent="Wed, 13 Apr 2011 18:49:14 +0000" -->
<!-- isosent="20110413184914" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI one-sided passive synchronization." -->
<!-- id="C9CB49C1.3C3D%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=-TGW-aTY9iEhtNCbTePMepPk11Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 14:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16233.php">Abhishek Kulkarni: "[OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16233.php">Abhishek Kulkarni: "[OMPI users] MPI one-sided passive synchronization."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is mostly an issue of how MPICH2 and Open MPI implement lock/unlock.
<br>
Some might call what I'm about to describe erroneous.  I wrote the
<br>
one-sided code in Open MPI and may be among those people.
<br>
<p>In both implementations, one-sided communication is not necessarily truly
<br>
asynchronous.  That is, the target of an operation may have to enter the
<br>
MPI library (MPI_Wtime does not count as entering the library in this
<br>
case) to progress Lock/Unlock calls.  So rank 2 calls lock (which is a
<br>
no-op in both implementations), calls put, calls unlock, and waits for a
<br>
response.  Ranks 0 and 1 wait for a second and enter lock, get, and
<br>
unlock.  At this point, data actually starts to move.  Chances are, rank 0
<br>
is going to process it's request first, hence the get from rank 0
<br>
returning 0.  Then rank 0 will perhaps process some other requests before
<br>
it leaves unlock (perhaps not), and enter barrier.  At this point, it will
<br>
progress everything until the other ranks enter barrier, meaning rank 2's
<br>
put and rank 2 and 3s get will finally be processed.
<br>
<p>In case you're wondering, the specification wasn't disobeyed in the
<br>
communication order; the lock description is very loose and is relative to
<br>
other MPI events.  So if you put the barrier before the lock/get/unlock,
<br>
you'd get the answer you wanted because rank 2's lock would have to occur
<br>
before rank 0's.  With no other MPI synchronization, there's no
<br>
requirement that be true, and the locking order could be 0, 1, 2, 2 if it
<br>
really wanted to be (ie, it would be perfectly legal for rank 1 to also
<br>
return 0).
<br>
<p>This is obviously not ideal, and one of the areas of focus for the MPI-3
<br>
standardization effort.  In Open MPI, adding true asynchronous behavior is
<br>
difficult.  The original design assumed that the lowest communication
<br>
layers would be able to provide asynchronous completion events to progress
<br>
the one-sided implementation.  Thus far, only the authors of the TCP stack
<br>
have provided such behavior and it's not as well tested as other modes of
<br>
operation.
<br>
<p>Brian
<br>
<p>On 4/13/11 12:31 PM, &quot;Abhishek Kulkarni&quot; &lt;abbyzcool_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to better understand the semantics of passive synchronization
</span><br>
<span class="quotelev1">&gt;in one-sided communication calls. Doesn't MPI_Win_unlock()
</span><br>
<span class="quotelev1">&gt;block to ensure that all the preceeding RMA calls in that epoch have been
</span><br>
<span class="quotelev1">&gt;synced?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In that case, why is an undefined value returned when trying to load from
</span><br>
<span class="quotelev1">&gt;a local window? (see below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Alloc_mem(128, MPI_INFO_NULL, &amp;ptr);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_create(ptr, 128, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    // write to the target window of the head node
</span><br>
<span class="quotelev1">&gt;    if (rank == (size - 1)) {
</span><br>
<span class="quotelev1">&gt;        MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
</span><br>
<span class="quotelev1">&gt;        in = 10;
</span><br>
<span class="quotelev1">&gt;        MPI_Put(&amp;in, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Win_unlock(0, win);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        // busy wait
</span><br>
<span class="quotelev1">&gt;        start = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        end = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;        while ((end - start) &lt; 1)
</span><br>
<span class="quotelev1">&gt;            end = MPI_Wtime();
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    // read from the head node's window
</span><br>
<span class="quotelev1">&gt;    MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
</span><br>
<span class="quotelev1">&gt;    MPI_Get(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_unlock(0, win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    printf(&quot;R%d: %d\n&quot;, rank, out);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The output of the above program with 1.5.3rc1 (and also with MPICH2
</span><br>
<span class="quotelev1">&gt;1.4rc2) is:
</span><br>
<span class="quotelev1">&gt;R2: 10
</span><br>
<span class="quotelev1">&gt;R1: 10
</span><br>
<span class="quotelev1">&gt;R0: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;whereas I expect to see:
</span><br>
<span class="quotelev1">&gt;R2: 10
</span><br>
<span class="quotelev1">&gt;R1: 10
</span><br>
<span class="quotelev1">&gt;R0: 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Abhishek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16233.php">Abhishek Kulkarni: "[OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>In reply to:</strong> <a href="16233.php">Abhishek Kulkarni: "[OMPI users] MPI one-sided passive synchronization."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16235.php">Abhishek Kulkarni: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
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
