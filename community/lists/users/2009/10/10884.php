<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 08:57:47 2009" -->
<!-- isoreceived="20091005125747" -->
<!-- sent="Mon, 5 Oct 2009 06:57:36 -0600" -->
<!-- isosent="20091005125736" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="661778BC-AB81-4AB7-8324-6B4FB4F4C46E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AC9A167.7050300_at_biggjapan.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-05 08:57:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are these threads running for long periods of time? I ask because  
<br>
there typically are system limits on the number of pipes any one  
<br>
process can open, which is what you appear to be hitting. You can  
<br>
check two things (as the error message tells you :-)):
<br>
<p>1. set -mca opal_set_max_sys_limits 1 on your cmd line (or in  
<br>
environ). This will tell OMPI to automatically set the system to the  
<br>
max allowed values
<br>
<p>2. check &quot;ulimit&quot; to see what you are allowed. You might need to talk  
<br>
to you sys admin about upping limits.
<br>
<p><p>On Oct 5, 2009, at 1:33 AM, Ashika Umanga Umagiliya wrote:
<br>
<p><span class="quotelev1">&gt; Greetings all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all thank you all for the help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried using locks and still I get following problems :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) When multiple threads calling MPI_Comm_Spawn (sequentially or in  
</span><br>
<span class="quotelev1">&gt; parallel), some spawned processes hang up on its
</span><br>
<span class="quotelev1">&gt; &quot;MPI_Init_thread(NULL,NULL,MPI_THREAD_MULTIPLE,&amp;sup);&quot;
</span><br>
<span class="quotelev1">&gt; method. (I can see list of all spawned processes are stacked in the  
</span><br>
<span class="quotelev1">&gt; 'top' command.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Randomly, program (webservice) crashes with the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;[umanga:06488] [[4594,0],0] ORTE_ERROR_LOG: The system limit on  
</span><br>
<span class="quotelev1">&gt; number of pipes a process can open was reached in file  
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 218
</span><br>
<span class="quotelev1">&gt; [umanga:06488] [[4594,0],0] ORTE_ERROR_LOG: The system limit on  
</span><br>
<span class="quotelev1">&gt; number of network connections a process can open was reached in file  
</span><br>
<span class="quotelev1">&gt; oob_tcp.c at line 447
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: system limit exceeded on number of network connections that  
</span><br>
<span class="quotelev1">&gt; can be open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This can be resolved by setting the mca parameter  
</span><br>
<span class="quotelev1">&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev1">&gt; increasing your limit descriptor setting (using limit or ulimit  
</span><br>
<span class="quotelev1">&gt; commands),
</span><br>
<span class="quotelev1">&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advices ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Treumann wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SELF is one example. The only task it contains is the  
</span><br>
<span class="quotelev2">&gt;&gt; local task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other case I had in mind is where there is a master doing all  
</span><br>
<span class="quotelev2">&gt;&gt; spawns. Master is launched as an MPI &quot;job&quot; but it has only one  
</span><br>
<span class="quotelev2">&gt;&gt; task. In that master, even MPI_COMM_WORLD is what I called a  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;single task communicator&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Because the collective spawn call is &quot;collective: across only one  
</span><br>
<span class="quotelev2">&gt;&gt; task in this case, it does not have the same sort of dependency on  
</span><br>
<span class="quotelev2">&gt;&gt; what other tasks do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it is common for a single task master to have  
</span><br>
<span class="quotelev2">&gt;&gt; responsibility for all spawns in the kind of model yours sounds  
</span><br>
<span class="quotelev2">&gt;&gt; like. I did not study the conversation enough to knew if you are  
</span><br>
<span class="quotelev2">&gt;&gt; doing all spawn calls from a &quot;single task communicator&quot; and I was  
</span><br>
<span class="quotelev2">&gt;&gt; trying to give a broadly useful explanation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev2">&gt;&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev2">&gt;&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt;&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users-bounces_at_[hidden] wrote on 09/25/2009 02:59:04 AM:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [image removed]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ashika Umanga Umagiliya
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 09/25/2009 03:00 AM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sent by:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you Dick for your detailed reply,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I am sorry, could you explain more what you meant by &quot;unless you  
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make an MPI_Comm_spawn call&quot; , i am confused with the term &quot;single
</span><br>
<span class="quotelev3">&gt;&gt; &gt; task communicator&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; umanga
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Richard Treumann wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is dangerous to hold a local lock (like a mutex} across a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; blocking MPI call unless you can be 100% sure everything that must
</span><br>
<span class="quotelev3">&gt;&gt; &gt; happen remotely will be completely independent of what is done with
</span><br>
<span class="quotelev3">&gt;&gt; &gt; local locks &amp; communication dependancies on other tasks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is likely that a MPI_Comm_spawn call in which the spawning
</span><br>
<span class="quotelev3">&gt;&gt; &gt; communicator is MPI_COMM_SELF would be safe to serialize with a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mutex. But be careful and do not view this as an approach to making
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI applications thread safe in general. Also, unless you are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make an MPI_Comm_spawn call. MPI requires that collective calls  
</span><br>
<span class="quotelev2">&gt;&gt; on a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; given communicator be made in the same order by all participating  
</span><br>
<span class="quotelev2">&gt;&gt; tasks.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If there are two or more tasks making the MPI_Comm_spawn call
</span><br>
<span class="quotelev3">&gt;&gt; &gt; collectively from multiple threads (even with per-thread input
</span><br>
<span class="quotelev3">&gt;&gt; &gt; communicators) then using a local lock this way is pretty sure to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; deadlock at some point. Say task 0 serializes spawning threads as A
</span><br>
<span class="quotelev3">&gt;&gt; &gt; then B and task 1 serializes them as B then A. The job will  
</span><br>
<span class="quotelev2">&gt;&gt; deadlock
</span><br>
<span class="quotelev3">&gt;&gt; &gt; because task 0 cannot free its lock for thread A until task 1 makes
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the spawn call for thread A as well. That will never happen if task
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1 is stuck in a lock that will not release until task 0 makes its
</span><br>
<span class="quotelev3">&gt;&gt; &gt; call for thread B.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When you look at the code for a particular task and consider thread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; interactions within the task, the use of the lock looks safe. It is
</span><br>
<span class="quotelev3">&gt;&gt; &gt; only when you consider the dependancies on what other tasks are
</span><br>
<span class="quotelev3">&gt;&gt; &gt; doing that the danger becomes clear. This particular case is pretty
</span><br>
<span class="quotelev3">&gt;&gt; &gt; easy to see but sometime when there is a temptation to hold a local
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mutex across an blocking MPI call, the chain of dependancies that
</span><br>
<span class="quotelev3">&gt;&gt; &gt; can lead to deadlock becomes very hard to predict.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; BTW - maybe this is obvious but you also need to protect the logic
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which calls MPI_Thread_init to make sure you do not have a a race  
</span><br>
<span class="quotelev2">&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which 2 threads each race to test the flag for whether
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Init_thread has already been called. If two thread do:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) if (MPI_Inited_flag == FALSE) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) set MPI_Inited_flag
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3) MPI_Init_thread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4) }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; You have a couple race conditions.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1) Two threads may both try to call MPI_Iint_thread if one thread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; tests &quot; if (MPI_Inited_flag == FALSE)&quot; while the other is between
</span><br>
<span class="quotelev3">&gt;&gt; &gt; statements 1 &amp; 2.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2) If some thread tests &quot;if (MPI_Inited_flag == FALSE)&quot; while
</span><br>
<span class="quotelev3">&gt;&gt; &gt; another thread is between statements 2 and 3, that thread could
</span><br>
<span class="quotelev3">&gt;&gt; &gt; assume MPI_Init_thread is done and make the MPI_Comm_spawn call
</span><br>
<span class="quotelev3">&gt;&gt; &gt; before the thread that is trying to initialize MPI manages to do  
</span><br>
<span class="quotelev2">&gt;&gt; it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dick
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev3">&gt;&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users-bounces_at_[hidden] wrote on 09/17/2009 11:36:48 PM:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; [image removed]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Ralph Castain
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; to:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 09/17/2009 11:37 PM
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Sent by:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Only thing I can suggest is to place a thread lock around the  
</span><br>
<span class="quotelev2">&gt;&gt; call to
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; comm_spawn so that only one thread at a time can execute that
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; function. The call to mpi_init_thread is fine - you just need to
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10883.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Reply:</strong> <a href="10885.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
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
