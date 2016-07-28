<?
$subject_val = "[OMPI users] MPI_ERR_COMM: invalid communicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 12:07:27 2013" -->
<!-- isoreceived="20130305170727" -->
<!-- sent="Tue, 5 Mar 2013 12:07:23 -0500" -->
<!-- isosent="20130305170723" -->
<!-- name="Chintu" -->
<!-- email="chintudcy_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ERR_COMM: invalid communicator" -->
<!-- id="CAB-MRFQzRm-06ZS4HsDcnCK5Za-PqhQ4iriiKdqMvFE5JwYN1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ERR_COMM: invalid communicator<br>
<strong>From:</strong> Chintu (<em>chintudcy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 12:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am running my jobs on openmpi linux platform. I am getting the following
<br>
errors:
<br>
<p>[compute-12-23.local:10203] *** An error occurred in MPI_Comm_rank
<br>
[compute-12-23.local:10203] *** on communicator MPI_COMM_WORLD
<br>
[compute-12-23.local:10203] *** MPI_ERR_COMM: invalid communicator
<br>
[compute-12-23.local:10203] *** MPI_ERRORS_ARE_FATAL: your MPI job will now
<br>
abort
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 11 with PID 10211 on
<br>
node compute-12-23.local exiting improperly. There are two reasons this
<br>
could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-12-23.local:10199] 11 more processes have sent help message
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[compute-12-23.local:10199] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
<br>
0 to see all help / error messages
<br>
rm: cannot remove `/tmp/145890.1.normal/rsh': No such file or directory
<br>
<p><p>Any help or suggestion will be appreciated.
<br>
<p>Thanks,
<br>
Praveen
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21501/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Previous message:</strong> <a href="21500.php">Ralph Castain: "Re: [OMPI users] Cluster hangs/shows error while executing simple MPI program in C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21502.php">Ralph Castain: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
<li><strong>Reply:</strong> <a href="21504.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ERR_COMM: invalid communicator"</a>
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
