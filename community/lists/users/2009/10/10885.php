<?
$subject_val = "Re: [OMPI users] Multi-threading  with OpenMPI ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  5 22:48:57 2009" -->
<!-- isoreceived="20091006024857" -->
<!-- sent="Tue, 06 Oct 2009 11:48:43 +0900" -->
<!-- isosent="20091006024843" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multi-threading  with OpenMPI ?" -->
<!-- id="4ACAB00B.6010504_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="661778BC-AB81-4AB7-8324-6B4FB4F4C46E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-10-05 22:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10884.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10884.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph , thank you for your help.
<br>
<p>I set &quot;-mca opal_set_max_sys_limits 1&quot; and my &quot;ulimit&quot; us &quot;unlimited&quot; , 
<br>
but still I get the errors.
<br>
What's happening now is ,for every user request(webservice request)  a 
<br>
new thread is created and in the same thread I spawn processes and these 
<br>
newly spawned processes do the calculation is parallel.
<br>
I think, I have to change the design so that I put the &quot;Requests&quot; in a 
<br>
queue and execute &quot;parallel job&quot; one at a time ,rather than runing 
<br>
multiple &quot;parallel jobs&quot; at once.(this might eventually run-out of 
<br>
system resources ).
<br>
<p>Thank you ,
<br>
umanga
<br>
<p><p><p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Are these threads running for long periods of time? I ask because 
</span><br>
<span class="quotelev1">&gt; there typically are system limits on the number of pipes any one 
</span><br>
<span class="quotelev1">&gt; process can open, which is what you appear to be hitting. You can 
</span><br>
<span class="quotelev1">&gt; check two things (as the error message tells you :-)):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. set -mca opal_set_max_sys_limits 1 on your cmd line (or in 
</span><br>
<span class="quotelev1">&gt; environ). This will tell OMPI to automatically set the system to the 
</span><br>
<span class="quotelev1">&gt; max allowed values
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. check &quot;ulimit&quot; to see what you are allowed. You might need to talk 
</span><br>
<span class="quotelev1">&gt; to you sys admin about upping limits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 5, 2009, at 1:33 AM, Ashika Umanga Umagiliya wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all thank you all for the help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried using locks and still I get following problems :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) When multiple threads calling MPI_Comm_Spawn (sequentially or in 
</span><br>
<span class="quotelev2">&gt;&gt; parallel), some spawned processes hang up on its
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI_Init_thread(NULL,NULL,MPI_THREAD_MULTIPLE,&amp;sup);&quot;
</span><br>
<span class="quotelev2">&gt;&gt; method. (I can see list of all spawned processes are stacked in the 
</span><br>
<span class="quotelev2">&gt;&gt; 'top' command.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Randomly, program (webservice) crashes with the error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;[umanga:06488] [[4594,0],0] ORTE_ERROR_LOG: The system limit on 
</span><br>
<span class="quotelev2">&gt;&gt; number of pipes a process can open was reached in file 
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.c at line 218
</span><br>
<span class="quotelev2">&gt;&gt; [umanga:06488] [[4594,0],0] ORTE_ERROR_LOG: The system limit on 
</span><br>
<span class="quotelev2">&gt;&gt; number of network connections a process can open was reached in file 
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp.c at line 447
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: system limit exceeded on number of network connections that 
</span><br>
<span class="quotelev2">&gt;&gt; can be open
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This can be resolved by setting the mca parameter 
</span><br>
<span class="quotelev2">&gt;&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev2">&gt;&gt; increasing your limit descriptor setting (using limit or ulimit 
</span><br>
<span class="quotelev2">&gt;&gt; commands),
</span><br>
<span class="quotelev2">&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advices ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Treumann wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_SELF is one example. The only task it contains is the local 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; task.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The other case I had in mind is where there is a master doing all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawns. Master is launched as an MPI &quot;job&quot; but it has only one task. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In that master, even MPI_COMM_WORLD is what I called a &quot;single task 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because the collective spawn call is &quot;collective: across only one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; task in this case, it does not have the same sort of dependency on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what other tasks do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think it is common for a single task master to have responsibility 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for all spawns in the kind of model yours sounds like. I did not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; study the conversation enough to knew if you are doing all spawn 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls from a &quot;single task communicator&quot; and I was trying to give a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broadly useful explanation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users-bounces_at_[hidden] wrote on 09/25/2009 02:59:04 AM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [image removed]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Ashika Umanga Umagiliya
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 09/25/2009 03:00 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Sent by:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank you Dick for your detailed reply,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am sorry, could you explain more what you meant by &quot;unless you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; make an MPI_Comm_spawn call&quot; , i am confused with the term &quot;single
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; task communicator&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; umanga
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Richard Treumann wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It is dangerous to hold a local lock (like a mutex} across a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; blocking MPI call unless you can be 100% sure everything that must
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; happen remotely will be completely independent of what is done with
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; local locks &amp; communication dependancies on other tasks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It is likely that a MPI_Comm_spawn call in which the spawning
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; communicator is MPI_COMM_SELF would be safe to serialize with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mutex. But be careful and do not view this as an approach to making
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI applications thread safe in general. Also, unless you are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; calling MPI_Comm_spawn on a single task communicator you would need
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; to have a different input communicator for each thread that will
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; make an MPI_Comm_spawn call. MPI requires that collective calls on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; given communicator be made in the same order by all participating 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tasks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; If there are two or more tasks making the MPI_Comm_spawn call
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; collectively from multiple threads (even with per-thread input
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; communicators) then using a local lock this way is pretty sure to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; deadlock at some point. Say task 0 serializes spawning threads as A
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; then B and task 1 serializes them as B then A. The job will deadlock
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; because task 0 cannot free its lock for thread A until task 1 makes
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; the spawn call for thread A as well. That will never happen if task
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1 is stuck in a lock that will not release until task 0 makes its
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; call for thread B.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When you look at the code for a particular task and consider thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; interactions within the task, the use of the lock looks safe. It is
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; only when you consider the dependancies on what other tasks are
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; doing that the danger becomes clear. This particular case is pretty
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; easy to see but sometime when there is a temptation to hold a local
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mutex across an blocking MPI call, the chain of dependancies that
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; can lead to deadlock becomes very hard to predict.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; BTW - maybe this is obvious but you also need to protect the logic
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; which calls MPI_Thread_init to make sure you do not have a a race in
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; which 2 threads each race to test the flag for whether
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Init_thread has already been called. If two thread do:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1) if (MPI_Inited_flag == FALSE) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2) set MPI_Inited_flag
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 3) MPI_Init_thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 4) }
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; You have a couple race conditions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 1) Two threads may both try to call MPI_Iint_thread if one thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; tests &quot; if (MPI_Inited_flag == FALSE)&quot; while the other is between
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; statements 1 &amp; 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 2) If some thread tests &quot;if (MPI_Inited_flag == FALSE)&quot; while
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; another thread is between statements 2 and 3, that thread could
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; assume MPI_Init_thread is done and make the MPI_Comm_spawn call
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; before the thread that is trying to initialize MPI manages to do it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dick
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dick Treumann - MPI Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users-bounces_at_[hidden] wrote on 09/17/2009 11:36:48 PM:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; [image removed]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Re: [OMPI users] Multi-threading with OpenMPI ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Ralph Castain
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 09/17/2009 11:37 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Sent by:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Only thing I can suggest is to place a thread lock around the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; comm_spawn so that only one thread at a time can execute that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; function. The call to mpi_init_thread is fine - you just need to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; explicitly protect the call to comm_spawn.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10885/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10886.php">souvik bhattacherjee: "Re: [OMPI users] Program hangs when run in the remote host ..."</a>
<li><strong>Previous message:</strong> <a href="10884.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>In reply to:</strong> <a href="10884.php">Ralph Castain: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<!-- nextthread="start" -->
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
