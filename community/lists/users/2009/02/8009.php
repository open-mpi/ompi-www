<?
$subject_val = "[OMPI users] Problem redirecting standard input";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 12:16:08 2009" -->
<!-- isoreceived="20090210171608" -->
<!-- sent="Tue, 10 Feb 2009 11:16:02 -0600" -->
<!-- isosent="20090210171602" -->
<!-- name="Champagne, Nathan J. (JSC-EV)[ESCG]" -->
<!-- email="Nathan.J.Champagne_at_[hidden]" -->
<!-- subject="[OMPI users] Problem redirecting standard input" -->
<!-- id="03261C2B265B89439DB2B424167AD39621D2760CD2_at_NDJSSCC01.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem redirecting standard input<br>
<strong>From:</strong> Champagne, Nathan J. (JSC-EV)[ESCG] (<em>Nathan.J.Champagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 12:16:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Reply:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have searched for solutions to this problem, but have not been successful. The following command works okay when using Open MPI 1.2.8:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ mpirun --hostfile procs -np 5 my_app &lt; my_input
<br>
<p>However, the above command produces the following error message when using Open MPI 1.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forrtl: severe (24): end-of-file during read, unit -4, file stdin
<br>
<p>Note that all the processes have access to the &quot;my_input&quot; file. Also, I have tried different process ranks for the &quot;--stdin&quot; flag to no avail.
<br>
<p>Anyone have any ideas or can point me to a solution?
<br>
<p>Thanks.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8009/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8008.php">Prentice Bisbal: "[OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
<li><strong>Reply:</strong> <a href="8010.php">Ralph Castain: "Re: [OMPI users] Problem redirecting standard input"</a>
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
