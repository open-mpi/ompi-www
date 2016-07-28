<?
$subject_val = "[OMPI users] checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 08:12:55 2012" -->
<!-- isoreceived="20120614121255" -->
<!-- sent="Thu, 14 Jun 2012 22:12:48 +1000" -->
<!-- isosent="20120614121248" -->
<!-- name="Ifeanyi" -->
<!-- email="ifeanyeg2012_at_[hidden]" -->
<!-- subject="[OMPI users] checkpointing" -->
<!-- id="CAMxrTy_Q53TrAPPcn+0tSkQBn_zevFbDE518tV41ROxYG25iBQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] checkpointing<br>
<strong>From:</strong> Ifeanyi (<em>ifeanyeg2012_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 08:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19560.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19558.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Please help.
<br>
<p>I have installed openmpi-1.6, I have also tested the installation with
<br>
different mpi applications and my application executed successfully.
<br>
<p>Whenever I ran NPB-3.3  LU without checkpointing, NPB-3.3 completes
<br>
successfully.
<br>
however whenever I checkpointing the application, it aborts without
<br>
checkpointing with the following error
<br>
<p>&quot;mpirun noticed that process rank 1 with PID 1048 on node node1 exited on
<br>
signal 10 (User defined signal 1).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)&quot;
<br>
<p>However, when I ran HPL and checkpoint - checkpointing was successfully
<br>
completed as well as the application.
<br>
I have tried to resolved this without success.
<br>
<p>Please I need assistance - I am new user of open mpi.
<br>
<p>Regards,
<br>
Ifeanyi
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19560.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Building MPI on Windows"</a>
<li><strong>Previous message:</strong> <a href="19558.php">Damien: "Re: [OMPI users] Building MPI on Windows"</a>
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
