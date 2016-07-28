<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 14:28:51 2008" -->
<!-- isoreceived="20080903182851" -->
<!-- sent="Wed, 3 Sep 2008 14:17:11 -0400" -->
<!-- isosent="20080903181711" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="OF09B81941.2BCA229F-ON852574B9.0061E7DA-852574B9.0064737E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48BEC524.70309_at_polytechnique.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 14:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vincent
<br>
<p>1) Assume you are running an MPI program which has 16 tasks in
<br>
MPI_COMM_WORLD, you have 16 dedicated CPUs and each task is single
<br>
threaded. (a task is a distinct process, a process can contain one or more
<br>
threads) The is the most common traditional model.  In this model, when a
<br>
task makes a blocking call, the CPU is used to poll the communication
<br>
layer.  With only one thread per task, there is no way the CPU can be given
<br>
other useful work because the only thread is in the MPI_Bast and not
<br>
available to compute.  With nothing else for the CPU to do anyway, it may
<br>
as well poll because that is likely to complete the blocking operation in
<br>
shortest time. Polling is the right choice. You should not worry that the
<br>
CPU is being &quot;burned&quot;.  It will not wear out.
<br>
<p>2) Now assume you have the same number of tasks and CPUs but you have
<br>
provided a compute thread and a communication thread in each task.  At the
<br>
moment you make an MPI_Bcast call on each task's communication thread you
<br>
have unfinished computation that the CPUs could process on the compute
<br>
threads.  In this case you want the CPU to be released by the blocked
<br>
MPI_Bcast so it can be used by the compute thread.  The MPI_Bcast may take
<br>
longer to complete because it is not burning the CPU but if useful
<br>
computation is going forward you come out ahead. A non-polling mode for the
<br>
blocking MPI_Bcast is the better option.
<br>
<p>3) Take a third case - the CPUs are not dedicated to your MPI job.  You
<br>
have only one thread per task but when that thread is blocked in an
<br>
MPI_Bcast you want other processes to be able to run.  This is not a common
<br>
situation in production environments but may be common in learning or
<br>
development situations. Perhaps your MPI homework problem is running at the
<br>
same time someone else is trying to compile theirs on the same nodes.  In
<br>
this case you really do not need the MPI_Bcast to finish in the shortest
<br>
possible time and you do want the people who share the node with you to
<br>
quit complaining.  Again. a non-polling mode than gives up the CPU and lets
<br>
your neighbors compilation run is best.
<br>
<p>Which of these is closest to your situation?  If it is situation 1, why
<br>
would you care that CPU is burning?  If it is situation 2 or 3 then you do
<br>
have reason to care.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick
<br>
<p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 09/03/2008 01:11:00 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] CPU burning in Wait state
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent Rotival
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
<span class="quotelev1">&gt; 09/03/2008 01:15 PM
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
<span class="quotelev1">&gt; Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No what I'd like is that when doing something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the program continues AFTER the Bcast is completed (so no control
</span><br>
<span class="quotelev1">&gt; returned to user), but while threads with rank &gt; 0 are waiting in Bcast
</span><br>
<span class="quotelev1">&gt; they are not taking CPU resources
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it is more clear, I apologize for not being clear in the first
</span><br>
place
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The solution I retained was for the main thread to isend data
</span><br>
<span class="quotelev3">&gt; &gt;&gt; separately to each other threads that are using Irecv + loop on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but
</span><br>
<span class="quotelev3">&gt; &gt;&gt; works much better than using Bcast
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the clarification.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But this strikes me more as a question about the MPI standard than
</span><br>
<span class="quotelev2">&gt; &gt; about the Open MPI implementation.  That is, what you really want is
</span><br>
<span class="quotelev2">&gt; &gt; for the MPI API to support a non-blocking form of collectives.  You
</span><br>
<span class="quotelev2">&gt; &gt; want control to return to the user program before the
</span><br>
<span class="quotelev2">&gt; &gt; barrier/bcast/etc. operation has completed.  That's an API change.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6466/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6468.php">Jeff Squyres: "Re: [OMPI users] CPU burning in Wait state"</a>
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
