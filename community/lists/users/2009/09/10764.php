<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 07:40:05 2009" -->
<!-- isoreceived="20090925114005" -->
<!-- sent="Fri, 25 Sep 2009 07:39:49 -0400" -->
<!-- isosent="20090925113949" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="OF86A115FB.E6CB1DD6-ON8525763C.003EE2A7-8525763C.00401256_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4ABC6A38.4070504_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multi-threading  with OpenMPI ?<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 07:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<li><strong>Previous message:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_COMM_SELF is one example. The only task it contains is the local task.
<br>
<p>The other case I had in mind is where there is a master  doing all spawns.
<br>
Master is launched as an MPI &quot;job&quot; but it has only one task. In that
<br>
master, even MPI_COMM_WORLD is what I called a &quot;single task communicator&quot;.
<br>
<p>Because the collective spawn call is &quot;collective: across only one task in
<br>
this case, it does not have the same sort of dependency on what other tasks
<br>
do.
<br>
<p>I think it is common for a single task master to have responsibility for
<br>
all spawns in the kind of model yours sounds like.  I did not study the
<br>
conversation enough to knew if you are doing all spawn calls from a
<br>
&quot;single task communicator&quot; and I was trying to give a broadly useful
<br>
explanation.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/25/2009 02:59:04 AM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ashika Umanga Umagiliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 09/25/2009 03:00 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Dick for your detailed reply,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry, could you explain more what you meant by &quot;unless you are
</span><br>
<span class="quotelev1">&gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev1">&gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev1">&gt; make an MPI_Comm_spawn call&quot; , i am confused with the term &quot;single
</span><br>
<span class="quotelev1">&gt; task communicator&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Treumann wrote:
</span><br>
<span class="quotelev1">&gt; It is dangerous to hold a local lock (like a mutex} across a
</span><br>
<span class="quotelev1">&gt; blocking MPI call unless you can be 100% sure everything that must
</span><br>
<span class="quotelev1">&gt; happen remotely will be completely independent of what is done with
</span><br>
<span class="quotelev1">&gt; local locks &amp; communication dependancies on other tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is likely that a MPI_Comm_spawn call in which the spawning
</span><br>
<span class="quotelev1">&gt; communicator is MPI_COMM_SELF would be safe to serialize with a
</span><br>
<span class="quotelev1">&gt; mutex. But be careful and do not view this as an approach to making
</span><br>
<span class="quotelev1">&gt; MPI applications thread safe in general. Also, unless you are
</span><br>
<span class="quotelev1">&gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev1">&gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev1">&gt; make an MPI_Comm_spawn call. MPI requires that collective calls on a
</span><br>
<span class="quotelev1">&gt; given communicator be made in the same order by all participating tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If there are two or more tasks making the MPI_Comm_spawn call
</span><br>
<span class="quotelev1">&gt; collectively from multiple threads (even with per-thread input
</span><br>
<span class="quotelev1">&gt; communicators) then using a local lock this way is pretty sure to
</span><br>
<span class="quotelev1">&gt; deadlock at some point. Say task 0 serializes spawning threads as A
</span><br>
<span class="quotelev1">&gt; then B and task 1 serializes them as B then A. The job will deadlock
</span><br>
<span class="quotelev1">&gt; because task 0 cannot free its lock for thread A until task 1 makes
</span><br>
<span class="quotelev1">&gt; the spawn call for thread A as well. That will never happen if task
</span><br>
<span class="quotelev1">&gt; 1 is stuck in a lock that will not release until task 0 makes its
</span><br>
<span class="quotelev1">&gt; call for thread B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you look at the code for a particular task and consider thread
</span><br>
<span class="quotelev1">&gt; interactions within the task, the use of the lock looks safe. It is
</span><br>
<span class="quotelev1">&gt; only when you consider the dependancies on what other tasks are
</span><br>
<span class="quotelev1">&gt; doing that the danger becomes clear. This particular case is pretty
</span><br>
<span class="quotelev1">&gt; easy to see but sometime when there is a temptation to hold a local
</span><br>
<span class="quotelev1">&gt; mutex across an blocking MPI call, the chain of dependancies that
</span><br>
<span class="quotelev1">&gt; can lead to deadlock becomes very hard to predict.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW - maybe this is obvious but you also need to protect the logic
</span><br>
<span class="quotelev1">&gt; which calls MPI_Thread_init to make sure you do not have a a race in
</span><br>
<span class="quotelev1">&gt; which 2 threads each race to test the flag for whether
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread has already been called. If two thread do:
</span><br>
<span class="quotelev1">&gt; 1) if (MPI_Inited_flag == FALSE) {
</span><br>
<span class="quotelev1">&gt; 2) set MPI_Inited_flag
</span><br>
<span class="quotelev1">&gt; 3) MPI_Init_thread
</span><br>
<span class="quotelev1">&gt; 4) }
</span><br>
<span class="quotelev1">&gt; You have a couple race conditions.
</span><br>
<span class="quotelev1">&gt; 1) Two threads may both try to call MPI_Iint_thread if one thread
</span><br>
<span class="quotelev1">&gt; tests &quot; if (MPI_Inited_flag == FALSE)&quot; while the other is between
</span><br>
<span class="quotelev1">&gt; statements 1 &amp; 2.
</span><br>
<span class="quotelev1">&gt; 2) If some thread tests &quot;if (MPI_Inited_flag == FALSE)&quot; while
</span><br>
<span class="quotelev1">&gt; another thread is between statements 2 and 3, that thread could
</span><br>
<span class="quotelev1">&gt; assume MPI_Init_thread is done and make the MPI_Comm_spawn call
</span><br>
<span class="quotelev1">&gt; before the thread that is trying to initialize MPI manages to do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 09/17/2009 11:36:48 PM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [image removed]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 09/17/2009 11:37 PM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Only thing I can suggest is to place a thread lock around the call to
</span><br>
<span class="quotelev2">&gt; &gt; comm_spawn so that only one thread at a time can execute that
</span><br>
<span class="quotelev2">&gt; &gt; function. The call to mpi_init_thread is fine - you just need to
</span><br>
<span class="quotelev2">&gt; &gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<li><strong>Previous message:</strong> <a href="10763.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
