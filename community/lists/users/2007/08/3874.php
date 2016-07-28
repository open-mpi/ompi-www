<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 12:04:22 2007" -->
<!-- isoreceived="20070816160422" -->
<!-- sent="Thu, 16 Aug 2007 18:04:07 +0200" -->
<!-- isosent="20070816160407" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="[OMPI users] Process termination problem" -->
<!-- id="op.tw5tk5aghvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 12:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI user list members,
<br>
<p>I am currently having a user with an application where one of the  
<br>
MPI-processes die, but the openmpi-system does not kill the rest of the  
<br>
application.
<br>
<p>Since the mpirun man page states the following I would expect it to take  
<br>
care of killing the application if a process exits without calling  
<br>
MPI_Finalize:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process Termination / Signal Handling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;During  the run of an MPI application, if any rank dies abnormally  
<br>
(either exiting before invoking MPI_FINALIZE, or dying as the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result of a signal), mpirun will print out an error message and  
<br>
kill the rest of the MPI application.
<br>
<p>The following test program demonstrates the behaviour (program hangs until  
<br>
it is killed by the user or batch system):
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define RANK_DEATH 1
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;sleep(10);
<br>
&nbsp;&nbsp;&nbsp;if (rank==RANK_DEATH)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;sleep(10);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I have tested this on openmpi 1.2.1 as well as the latest stable 1.2.3. I  
<br>
am on Linux x86_64.
<br>
<p>Is this a bug, or are there some flags I can use to force the mpirun (or  
<br>
orted, or...) to kill the whole MPI program when this happens?
<br>
<p>If one of the application processes die from a signal (I have tested SEGV  
<br>
and FPE) rather than just exiting the whole application is indeed killed.
<br>
<p>Best regards
<br>
Daniel Sp&#229;ngberg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3875.php">Tom Conerly: "[OMPI users] &quot;bash: orted: command not found&quot; running NPB2.4 with tau"</a>
<li><strong>Previous message:</strong> <a href="3873.php">George Bosilca: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
<li><strong>Reply:</strong> <a href="3879.php">George Bosilca: "Re: [OMPI users] Process termination problem"</a>
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
