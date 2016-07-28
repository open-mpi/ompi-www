<?
$subject_val = "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 10:01:05 2010" -->
<!-- isoreceived="20100623140105" -->
<!-- sent="Wed, 23 Jun 2010 08:00:52 -0600" -->
<!-- isosent="20100623140052" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun" -->
<!-- id="FF1FC5FE-DF3B-40BE-BE47-3A63CF037507_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="511019.62702.qm_at_web50807.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 10:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13403.php">Durga Choudhury: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13401.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13401.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
mpirun is not an MPI process, so it makes no difference what your processes are doing wrt MPI_Abort or any other MPI function call.
<br>
<p>A quick glance thru the code shows that mpirun won't properly terminate under these conditions. It is waiting to hear that all daemons have terminated, and obviously is missing the one that was on the node that you powered off.
<br>
<p>This obviously isn't a scenario we regularly test. The work Jeff referred to is intended to better handle such situations, but isn't ready for release yet. I'm not sure if I'll have time to go back to the 1.4 series and resolve this behavior, but I'll put it on my list of things to look at if/when time permits.
<br>
<p><p>On Jun 23, 2010, at 6:53 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; ok,
</span><br>
<span class="quotelev1">&gt; Having confirmed that replacing MPI_Abort with exit() does not work and checking that under these conditions the only process left running appears to be mpirun,
</span><br>
<span class="quotelev1">&gt; I think I need to report a bug, ie:
</span><br>
<span class="quotelev1">&gt; Although the processes themselves can be stopped (by exit if nothing else)
</span><br>
<span class="quotelev1">&gt; mpirun hangs after a node is powered off and can never exit as it appears to wait indefinitely for the missing node to receive or send a signal.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Wed, 23/6/10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Wednesday, 23 June, 2010, 9:10 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's fault tolerance support is fairly rudimentary.  If you kill any process without calling MPI_Finalize, Open MPI will -- by default -- kill all the others in the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Various research work is ongoing to improve fault tolerance in Open MPI, but I don't know the state of it in terms of surviving a failed process.  I *think* that this kind of stuff is not ready for prime time, but I admit that this is not an area that I pay close attention to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2010, at 3:08 AM, Randolph Pullen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That is effectively what I have done by changing to the immediate send/receive and waiting in a loop a finite number of times for the transfers to complete - and calling MPI_abort if they do not complete in a set time.
</span><br>
<span class="quotelev2">&gt; &gt; It is not clear how I can kill mpirun in a manner consistent with the API.
</span><br>
<span class="quotelev2">&gt; &gt; Are you implying I should call exit() rather than MPI_abort?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --- On Wed, 23/6/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun
</span><br>
<span class="quotelev2">&gt; &gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Received: Wednesday, 23 June, 2010, 4:37 PM
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Since you turned the machine off instead of just killing one of the processes, no signals could be sent to other processes.  Perhaps you could institute some sort of handshaking in your software that periodically check for the attendance of all machines, and timeout if not all are present within some alloted time?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jun 22, 2010 at 10:43 PM, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a mpi program that aggregates data from multiple sql systems.  It all runs fine.  To test fault tolerance I switch one of the machines off while it is running.  The result is always a hang, ie mpirun never completes.
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; To try and avoid this I have replaced the send and receive calls with immediate calls (ie MPI_Isend, MPI_Irecv) to try and trap long waiting sends and receives but it makes no difference.
</span><br>
<span class="quotelev2">&gt; &gt; My requirement is that all complete or mpirun exits with an error - no matter where they are in their execution when a failure occurs.  This system must continue (ie fail)  if a machine dies, regroup and re-cast the job over the remaining nodes.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am running FC10, gcc 4.3.2 and openMPI 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; 4G RAM, dual core intel all x86_64
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ===============================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt; The commands I have tried:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  -hostfile ~/mpd.hosts -np 6  ./ingsprinkle  test t3  &quot;select * from tab&quot;   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -mca btl ^sm -hostfile ~/mpd.hosts -np 6  ./ingsprinkle  test t3  &quot;select * from tab&quot;   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -mca orte_forward_job_control 1  -hostfile ~/mpd.hosts -np 6  ./ingsprinkle  test t3  &quot;select * from tab&quot;   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ===============================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The results:
</span><br>
<span class="quotelev2">&gt; &gt; recv returned 0 with status 0
</span><br>
<span class="quotelev2">&gt; &gt; waited  # 2000002 tiumes - now status is  0 flag is -1976147192
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev2">&gt; &gt; with errorcode 5.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt; &gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt; &gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 0 with PID 29141 on
</span><br>
<span class="quotelev2">&gt; &gt; node bd01 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [*** wait a long time ***]
</span><br>
<span class="quotelev2">&gt; &gt; [bd01:29136] [[55293,0],0]-[[55293,0],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ^Cmpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ===============================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As you can see, my trap can signal an abort, the tcp layer can time out but mpirun just keeps on running...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help greatly appreciated..
</span><br>
<span class="quotelev2">&gt; &gt; Vlad
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  
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
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; David Zhang
</span><br>
<span class="quotelev2">&gt; &gt; University of California, San Diego
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<span class="quotelev2">&gt; &gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13403.php">Durga Choudhury: "Re: [OMPI users] Roadrunner blasts past the petaflop mark with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13401.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13401.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13404.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
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
