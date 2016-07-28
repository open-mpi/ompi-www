<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 02:59:15 2009" -->
<!-- isoreceived="20090925065915" -->
<!-- sent="Fri, 25 Sep 2009 15:59:04 +0900" -->
<!-- isosent="20090925065904" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4ABC6A38.4070504_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF03664EA7.CC6CA21E-ON85257635.003E9F4B-85257635.004218D2_at_us.ibm.com" -->
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
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 02:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10762.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Dick for your detailed reply,
<br>
<p>I am sorry, could you explain more what you meant by &quot;unless you are 
<br>
calling MPI_Comm_spawn on a single task communicator you would need to 
<br>
have a different input communicator for each thread that will make an 
<br>
MPI_Comm_spawn call&quot; , i am confused with the term &quot;single task 
<br>
communicator&quot;
<br>
<p>Best Regards,
<br>
umanga
<br>
<p>Richard Treumann wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is dangerous to hold a local lock (like a mutex} across a blocking 
</span><br>
<span class="quotelev1">&gt; MPI call unless you can be 100% sure everything that must happen 
</span><br>
<span class="quotelev1">&gt; remotely will be completely independent of what is done with local 
</span><br>
<span class="quotelev1">&gt; locks &amp; communication dependancies on other tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is likely that a MPI_Comm_spawn call in which the spawning 
</span><br>
<span class="quotelev1">&gt; communicator is MPI_COMM_SELF would be safe to serialize with a mutex. 
</span><br>
<span class="quotelev1">&gt; But be careful and do not view this as an approach to making MPI 
</span><br>
<span class="quotelev1">&gt; applications thread safe in general. Also, unless you are calling 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn on a single task communicator you would need to have a 
</span><br>
<span class="quotelev1">&gt; different input communicator for each thread that will make an 
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn call. MPI requires that collective calls on a given 
</span><br>
<span class="quotelev1">&gt; communicator be made in the same order by all participating tasks.
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
<span class="quotelev1">&gt; the spawn call for thread A as well. That will never happen if task 1 
</span><br>
<span class="quotelev1">&gt; is stuck in a lock that will not release until task 0 makes its call 
</span><br>
<span class="quotelev1">&gt; for thread B.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you look at the code for a particular task and consider thread 
</span><br>
<span class="quotelev1">&gt; interactions within the task, the use of the lock looks safe. It is 
</span><br>
<span class="quotelev1">&gt; only when you consider the dependancies on what other tasks are doing 
</span><br>
<span class="quotelev1">&gt; that the danger becomes clear. This particular case is pretty easy to 
</span><br>
<span class="quotelev1">&gt; see but sometime when there is a temptation to hold a local mutex 
</span><br>
<span class="quotelev1">&gt; across an blocking MPI call, the chain of dependancies that can lead 
</span><br>
<span class="quotelev1">&gt; to deadlock becomes very hard to predict.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW - maybe this is obvious but you also need to protect the logic 
</span><br>
<span class="quotelev1">&gt; which calls MPI_Thread_init to make sure you do not have a a race in 
</span><br>
<span class="quotelev1">&gt; which 2 threads each race to test the flag for whether MPI_Init_thread 
</span><br>
<span class="quotelev1">&gt; has already been called. If two thread do:
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
<span class="quotelev1">&gt; 2) If some thread tests &quot;if (MPI_Inited_flag == FALSE)&quot; while another 
</span><br>
<span class="quotelev1">&gt; thread is between statements 2 and 3, that thread could assume 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread is done and make the MPI_Comm_spawn call before the 
</span><br>
<span class="quotelev1">&gt; thread that is trying to initialize MPI manages to do it.
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10762.php">Mallikarjuna Shastry: "[OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="10760.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<li><strong>In reply to:</strong> <a href="10682.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10764.php">Richard Treumann: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
