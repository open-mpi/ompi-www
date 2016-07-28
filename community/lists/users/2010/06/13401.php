<?
$subject_val = "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 08:53:10 2010" -->
<!-- isoreceived="20100623125310" -->
<!-- sent="Wed, 23 Jun 2010 05:53:05 -0700 (PDT)" -->
<!-- isosent="20100623125305" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun" -->
<!-- id="511019.62702.qm_at_web50807.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="69A245DB-B3A0-460D-9167-5E9B961C3C00_at_cisco.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 08:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok,
<br>
Having confirmed that replacing MPI_Abort with exit() does not work and checking that under these conditions the only process left running appears to be mpirun,
<br>
I think I need to report a bug, ie:
<br>
Although the processes themselves can be stopped (by exit if nothing else)
<br>
mpirun hangs after a node is powered off and can never exit as it appears to wait indefinitely for the missing node to receive or send a signal.
<br>
<p><p>--- On Wed, 23/6/10, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Wednesday, 23 June, 2010, 9:10 PM
<br>
<p>Open MPI's fault tolerance support is fairly rudimentary.&#160; If you kill any process without calling MPI_Finalize, Open MPI will -- by default -- kill all the others in the job.
<br>
<p>Various research work is ongoing to improve fault tolerance in Open MPI, but I don't know the state of it in terms of surviving a failed process.&#160; I *think* that this kind of stuff is not ready for prime time, but I admit that this is not an area that I pay close attention to.
<br>
<p><p><p>On Jun 23, 2010, at 3:08 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; That is effectively what I have done by changing to the immediate send/receive and waiting in a loop a finite number of times for the transfers to complete - and calling MPI_abort if they do not complete in a set time.
</span><br>
<span class="quotelev1">&gt; It is not clear how I can kill mpirun in a manner consistent with the API.
</span><br>
<span class="quotelev1">&gt; Are you implying I should call exit() rather than MPI_abort?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Wed, 23/6/10, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: David Zhang &lt;solarbikedz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Received: Wednesday, 23 June, 2010, 4:37 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you turned the machine off instead of just killing one of the processes, no signals could be sent to other processes.&#160; Perhaps you could institute some sort of handshaking in your software that periodically check for the attendance of all machines, and timeout if not all are present within some alloted time?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jun 22, 2010 at 10:43 PM, Randolph Pullen &lt;randolph_pullen_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a mpi program that aggregates data from multiple sql systems.&#160; It all runs fine.&#160; To test fault tolerance I switch one of the machines off while it is running.&#160; The result is always a hang, ie mpirun never completes.
</span><br>
<span class="quotelev1">&gt;&#160; 
</span><br>
<span class="quotelev1">&gt; To try and avoid this I have replaced the send and receive calls with immediate calls (ie MPI_Isend, MPI_Irecv) to try and trap long waiting sends and receives but it makes no difference.
</span><br>
<span class="quotelev1">&gt; My requirement is that all complete or mpirun exits with an error - no matter where they are in their execution when a failure occurs.&#160; This system must continue (ie fail)&#160; if a machine dies, regroup and re-cast the job over the remaining nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running FC10, gcc 4.3.2 and openMPI 1.4.1
</span><br>
<span class="quotelev1">&gt; 4G RAM, dual core intel all x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================================================================================================
</span><br>
<span class="quotelev1">&gt; The commands I have tried:
</span><br>
<span class="quotelev1">&gt; mpirun&#160; -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160;&#160;&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl ^sm -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160;&#160;&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca orte_forward_job_control 1&#160; -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160;&#160;&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================================================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The results:
</span><br>
<span class="quotelev1">&gt; recv returned 0 with status 0
</span><br>
<span class="quotelev1">&gt; waited&#160; # 2000002 tiumes - now status is&#160; 0 flag is -1976147192
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; with errorcode 5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 29141 on
</span><br>
<span class="quotelev1">&gt; node bd01 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [*** wait a long time ***]
</span><br>
<span class="quotelev1">&gt; [bd01:29136] [[55293,0],0]-[[55293,0],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===============================================================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, my trap can signal an abort, the tcp layer can time out but mpirun just keeps on running...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help greatly appreciated..
</span><br>
<span class="quotelev1">&gt; Vlad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&#160; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<span class="quotelev1">&gt;&#160; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13401/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13400.php">Jeff Squyres: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13402.php">Ralph Castain: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
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
