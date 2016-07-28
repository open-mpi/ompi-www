<?
$subject_val = "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 02:37:45 2010" -->
<!-- isoreceived="20100623063745" -->
<!-- sent="Tue, 22 Jun 2010 23:37:20 -0700" -->
<!-- isosent="20100623063720" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun" -->
<!-- id="AANLkTimZv6quB1ZIpryZtplhRfntKNgkhymnft-QapxK_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="94322.59187.qm_at_web50802.mail.re2.yahoo.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 02:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13396.php">Randolph Pullen: "[OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13396.php">Randolph Pullen: "[OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since you turned the machine off instead of just killing one of the
<br>
processes, no signals could be sent to other processes.  Perhaps you could
<br>
institute some sort of handshaking in your software that periodically check
<br>
for the attendance of all machines, and timeout if not all are present
<br>
within some alloted time?
<br>
<p>On Tue, Jun 22, 2010 at 10:43 PM, Randolph Pullen &lt;
<br>
randolph_pullen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a mpi program that aggregates data from multiple sql systems.  It
</span><br>
<span class="quotelev1">&gt; all runs fine.  To test fault tolerance I switch one of the machines off
</span><br>
<span class="quotelev1">&gt; while it is running.  The result is always a hang, ie mpirun never
</span><br>
<span class="quotelev1">&gt; completes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To try and avoid this I have replaced the send and receive calls with
</span><br>
<span class="quotelev1">&gt; immediate calls (ie MPI_Isend, MPI_Irecv) to try and trap long waiting sends
</span><br>
<span class="quotelev1">&gt; and receives but it makes no difference.
</span><br>
<span class="quotelev1">&gt; My requirement is that all complete or mpirun exits with an error - no
</span><br>
<span class="quotelev1">&gt; matter where they are in their execution when a failure occurs.  This system
</span><br>
<span class="quotelev1">&gt; must continue (ie fail)  if a machine dies, regroup and re-cast the job over
</span><br>
<span class="quotelev1">&gt; the remaining nodes.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===============================================================================================================
</span><br>
<span class="quotelev1">&gt; The commands I have tried:
</span><br>
<span class="quotelev1">&gt; mpirun  -hostfile ~/mpd.hosts -np 6  ./ingsprinkle  test t3  &quot;select * from
</span><br>
<span class="quotelev1">&gt; tab&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca btl ^sm -hostfile ~/mpd.hosts -np 6  ./ingsprinkle  test t3
</span><br>
<span class="quotelev1">&gt; &quot;select * from tab&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca orte_forward_job_control 1  -hostfile ~/mpd.hosts -np 6
</span><br>
<span class="quotelev1">&gt; ./ingsprinkle  test t3  &quot;select * from tab&quot;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; waited  # 2000002 tiumes - now status is  0 flag is -1976147192
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
<span class="quotelev1">&gt; [bd01:29136] [[55293,0],0]-[[55293,0],1] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: abort is already in progress...hit ctrl-c again to forcibly
</span><br>
<span class="quotelev1">&gt; terminate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===============================================================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, my trap can signal an abort, the tcp layer can time out but
</span><br>
<span class="quotelev1">&gt; mpirun just keeps on running...
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13396.php">Randolph Pullen: "[OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>In reply to:</strong> <a href="13396.php">Randolph Pullen: "[OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13398.php">Randolph Pullen: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
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
