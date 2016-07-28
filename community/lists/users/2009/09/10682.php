<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 18 08:02:06 2009" -->
<!-- isoreceived="20090918120206" -->
<!-- sent="Fri, 18 Sep 2009 08:01:57 -0400" -->
<!-- isosent="20090918120157" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="OF03664EA7.CC6CA21E-ON85257635.003E9F4B-85257635.004218D2_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AAA81CC8-38B6-4EA9-9C3D-86C1DD16959A_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-09-18 08:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is dangerous to hold a local lock (like a mutex} across a blocking MPI
<br>
call unless you can be 100% sure everything that must happen remotely will
<br>
be completely independent of what is done with local locks &amp; communication
<br>
dependancies on other tasks.
<br>
<p>It is likely that a MPI_Comm_spawn call in which the spawning communicator
<br>
is MPI_COMM_SELF would be safe to serialize with a mutex. But be careful
<br>
and do not view this as an approach to making MPI applications thread safe
<br>
in general. Also, unless you are calling MPI_Comm_spawn on a single task
<br>
communicator you would need to have a different input communicator for each
<br>
thread that will make an MPI_Comm_spawn call. MPI requires that collective
<br>
calls on a given communicator be made in the same order by all
<br>
participating tasks.
<br>
<p>If there are two or more tasks making the MPI_Comm_spawn call collectively
<br>
from multiple threads (even with per-thread input communicators) then using
<br>
a local lock this way is pretty sure to deadlock at some point. Say task 0
<br>
serializes spawning threads as A then B and task 1 serializes them as B
<br>
then A.  The job will deadlock because task 0 cannot free its lock for
<br>
thread A until task 1 makes the spawn call for thread A as well.  That will
<br>
never happen if task 1 is stuck in a lock that will not release until task
<br>
0 makes its call for thread B.
<br>
<p>When you look at the code for a particular task and consider thread
<br>
interactions within the task, the use of the lock looks safe.  It is only
<br>
when you consider the dependancies on what other tasks are doing that the
<br>
danger becomes clear.  This particular case is pretty easy to see but
<br>
sometime when there is a temptation to hold a local mutex across an
<br>
blocking MPI call, the chain of dependancies that can lead to deadlock
<br>
becomes very hard to predict.
<br>
<p>BTW - maybe this is obvious but you also need to protect the logic which
<br>
calls MPI_Thread_init to make sure you do not have a a race in which 2
<br>
threads each race to test the flag for whether MPI_Init_thread has already
<br>
been called. If two thread do:
<br>
1) if (MPI_Inited_flag == FALSE) {
<br>
2)    set MPI_Inited_flag
<br>
3)    MPI_Init_thread
<br>
4) }
<br>
You have a couple race conditions.
<br>
1) Two threads may both try to call MPI_Iint_thread if one thread tests &quot;
<br>
if (MPI_Inited_flag == FALSE)&quot; while the other is between statements 1 &amp; 2.
<br>
2) If some thread tests &quot;if (MPI_Inited_flag == FALSE)&quot; while another
<br>
thread is between statements 2 and 3, that thread could assume
<br>
MPI_Init_thread is done and make the MPI_Comm_spawn call before the thread
<br>
that is trying to initialize MPI manages to do it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/17/2009 11:36:48 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain
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
<span class="quotelev1">&gt; 09/17/2009 11:37 PM
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
<span class="quotelev1">&gt; Only thing I can suggest is to place a thread lock around the call to
</span><br>
<span class="quotelev1">&gt; comm_spawn so that only one thread at a time can execute that
</span><br>
<span class="quotelev1">&gt; function. The call to mpi_init_thread is fine - you just need to
</span><br>
<span class="quotelev1">&gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10683.php">Whit Armstrong: "Re: [OMPI users] running open mpi on ubuntu 9.04"</a>
<li><strong>Previous message:</strong> <a href="10681.php">vipin kumar: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10676.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10761.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
