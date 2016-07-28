<?
$subject_val = "[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe).";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 10:59:28 2009" -->
<!-- isoreceived="20091106155928" -->
<!-- sent="Fri, 6 Nov 2009 07:59:23 -0800 (PST)" -->
<!-- isosent="20091106155923" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)." -->
<!-- id="812745.57131.qm_at_web31006.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe).<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 10:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<li><strong>Reply:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have install openmpi 1.3 and blcr 0.81 on my laptop (single processor).
<br>
<p>I am trying to checkpoint a small test application:
<br>
<p>###########
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include&lt;unistd.h&gt;
<br>
#include&lt;signal.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
int rank,size;
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
<br>
system(&quot;sleep 10&quot;);
<br>
printf(&quot;mpisleep bye \n&quot;);
<br>
MPI_Finalize();
<br>
return 0;
<br>
}
<br>
###################
<br>
<p>I compile it as follows:
<br>
<p>mpicc mpisleep.c -o mpisleep
<br>
<p>and i run it as follows:
<br>
<p>mpirun -am ft-enable-cr -np 2 mpisleep.
<br>
<p>When i try checkpointing ( ompi-checkpoint -v 8118) it, it checkpoints fine but when i restart it, i get the following:
<br>
<p>I am processor no 0 of a total of 2 procs 
<br>
I am processor no 1 of a total of 2 procs 
<br>
mpisleep bye 
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 8118 on node raj-laptop exited on signal 13 (Broken pipe).
<br>
--------------------------------------------------------------------------
<br>
<p>Any suggestions is very much appreciated
<br>
<p>Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11093.php">Arnaud Westenberg: "[OMPI users] Distribute app over open mpi"</a>
<li><strong>Previous message:</strong> <a href="11091.php">Paul Kapinos: "[OMPI users] an environment variable with same meaning than the -x option of mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<li><strong>Reply:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
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
