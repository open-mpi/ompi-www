<?
$subject_val = "[OMPI users] Treatment of SIGHUP by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 22 14:04:38 2010" -->
<!-- isoreceived="20100422180438" -->
<!-- sent="Thu, 22 Apr 2010 19:04:31 +0100" -->
<!-- isosent="20100422180431" -->
<!-- name="Jon Hitchcock" -->
<!-- email="Jon.Hitchcock_at_[hidden]" -->
<!-- subject="[OMPI users] Treatment of SIGHUP by mpirun" -->
<!-- id="4BD09DBF0200006B00049963_at_gwia2.beds.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Treatment of SIGHUP by mpirun<br>
<strong>From:</strong> Jon Hitchcock (<em>Jon.Hitchcock_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-22 14:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Previous message:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Reply:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If a user connects to a cluster using SSH, starts an MPI program which contains an infinite loop, and then breaks the SSH connection, the processes running the MPI program continue to run on the compute nodes and they have to be killed manually.
<br>
<p>To investigate this, I found that if the user types Control-C (or sends SIGINT to mpirun), mpirun says &quot;killing job...&quot;, and on each compute node the orted process and the process running the MPI program are killed.
<br>
<p>However if SIGHUP is sent to mpirun, it says &quot;Hangup&quot; and exits, and on each compute node the orted process is killed but the process running the MPI program continues to run.
<br>
<p>This is with Rocks 5.3 and Open MPI.  There is no batch scheduler.  The MPI program is just:
<br>
<p>#include &quot;mpi.h&quot;
<br>
main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (1) ;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>I have two questions.  Is this the behaviour I should expect?  Is there an easy way to kill the processes? 
<br>
<p>Thanks, Jon Hitchcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Previous message:</strong> <a href="12735.php">Trent Creekmore: "Re: [OMPI users] How to debug Open MPI programs with gdb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
<li><strong>Reply:</strong> <a href="12737.php">Ralph Castain: "Re: [OMPI users] Treatment of SIGHUP by mpirun"</a>
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
