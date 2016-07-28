<?
$subject_val = "[OMPI users] more Bugs in MPI_Abort() -- mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 01:43:08 2010" -->
<!-- isoreceived="20100623054308" -->
<!-- sent="Tue, 22 Jun 2010 22:43:02 -0700 (PDT)" -->
<!-- isosent="20100623054302" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="[OMPI users] more Bugs in MPI_Abort() -- mpirun" -->
<!-- id="94322.59187.qm_at_web50802.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] more Bugs in MPI_Abort() -- mpirun<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 01:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13395.php">&#205;&#245;&#238;&#163;: "[OMPI users] about OpenMPI user-directed fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a mpi program that aggregates data from multiple sql systems.&#160; It all runs fine.&#160; To test fault tolerance I switch one of the machines off while it is running.&#160; The result is always a hang, ie mpirun never completes.
<br>
&#160;
<br>
To try and avoid this I have replaced the send and receive calls with immediate calls (ie MPI_Isend, MPI_Irecv) to try and trap long waiting sends and receives but it makes no difference.
<br>
My requirement is that all complete or mpirun exits with an error - no matter where they are in their execution when a failure occurs.&#160; This system must continue (ie fail)&#160; if a machine dies, regroup and re-cast the job over the remaining nodes.
<br>
<p>I am running FC10, gcc 4.3.2 and openMPI 1.4.1
<br>
4G RAM, dual core intel all x86_64
<br>
<p><p>===============================================================================================================
<br>
The commands I have tried:
<br>
mpirun&#160; -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160;&#160; 
<br>
<p>mpirun -mca btl ^sm -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160; &#160;
<br>
<p>mpirun -mca orte_forward_job_control 1&#160; -hostfile ~/mpd.hosts -np 6&#160; ./ingsprinkle&#160; test t3&#160; &quot;select * from tab&quot;&#160; &#160;
<br>
<p><p>===============================================================================================================
<br>
<p>The results:
<br>
recv returned 0 with status 0
<br>
waited&#160; # 2000002 tiumes - now status is&#160; 0 flag is -1976147192
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
<br>
with errorcode 5.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 29141 on
<br>
node bd01 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>[*** wait a long time ***]
<br>
[bd01:29136] [[55293,0],0]-[[55293,0],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
<p>^Cmpirun: abort is already in progress...hit ctrl-c again to forcibly terminate
<br>
<p><p>===============================================================================================================
<br>
<p>As you can see, my trap can signal an abort, the tcp layer can time out but mpirun just keeps on running...
<br>
<p>Any help greatly appreciated..
<br>
Vlad
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13396/ompi.info.tar.gz">ompi.info.tar.gz</a>
</ul>
<!-- attachment="ompi.info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Previous message:</strong> <a href="13395.php">&#205;&#245;&#238;&#163;: "[OMPI users] about OpenMPI user-directed fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
<li><strong>Reply:</strong> <a href="13397.php">David Zhang: "Re: [OMPI users] more Bugs in MPI_Abort() -- mpirun"</a>
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
