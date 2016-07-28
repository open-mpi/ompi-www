<?
$subject_val = "[OMPI users] MPI Process Abortion";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 18 17:21:37 2015" -->
<!-- isoreceived="20150718212137" -->
<!-- sent="Sat, 18 Jul 2015 16:21:33 -0500" -->
<!-- isosent="20150718212133" -->
<!-- name="Juan Liu" -->
<!-- email="jlb3c_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Process Abortion" -->
<!-- id="CAPELB2b_hfeSF1cFmocwh+MCr1ftsjvZK_E0JUgSXsqm4k_fJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI Process Abortion<br>
<strong>From:</strong> Juan Liu (<em>jlb3c_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-18 17:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27285.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Reply:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have some trouble when running the command : mpirun -np 2 foam.ups
<br>
Here is the error report I got:
<br>
Can anyone commend on this? Thanks.
<br>
<p>Best,
<br>
-------------------------------------------------------------------------------------------------
<br>
[laptop:02500] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
ess_env_module.c at line 367
<br>
[laptop:02499] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
ess_env_module.c at line 367
<br>
[laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
<br>
[laptop:02497] tcp_peer_recv_connect_ack: invalid header type: 707067904
<br>
[(null):2499] *** An error occurred in MPI_Abort
<br>
[(null):2499] *** on a NULL communicator
<br>
[(null):2499] *** Unknown error
<br>
[(null):2499] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
[(null):2500] *** An error occurred in MPI_Abort
<br>
[(null):2500] *** on a NULL communicator
<br>
[(null):2500] *** Unknown error
<br>
[(null):2500] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: laptop
<br>
&nbsp;&nbsp;PID:        2499
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: laptop
<br>
&nbsp;&nbsp;PID:        2500
<br>
--------------------------------------------------------------------------
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[10789,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27287.php">Saliya Ekanayake: "[OMPI users] Passing a rank specific argument to the JVM"</a>
<li><strong>Previous message:</strong> <a href="27285.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
<li><strong>Reply:</strong> <a href="27290.php">Ralph Castain: "Re: [OMPI users] MPI Process Abortion"</a>
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
