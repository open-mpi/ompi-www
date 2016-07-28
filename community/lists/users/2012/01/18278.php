<?
$subject_val = "[OMPI users] How to determine MPI rank/process number local to a socket/node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 12:51:07 2012" -->
<!-- isoreceived="20120126175107" -->
<!-- sent="Thu, 26 Jan 2012 17:51:01 +0000" -->
<!-- isosent="20120126175101" -->
<!-- name="Frank" -->
<!-- email="frank.t.winter_at_[hidden]" -->
<!-- subject="[OMPI users] How to determine MPI rank/process number local to a socket/node" -->
<!-- id="CAKpxCzJhsz7w0Z=_5aUc5UvzfYdOqoWm59ya4fOQ-HpuZUBegg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to determine MPI rank/process number local to a socket/node<br>
<strong>From:</strong> Frank (<em>frank.t.winter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 12:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Previous message:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Reply:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Say, I run a parallel program using MPI. Execution command
<br>
<p>mpirun -n 8 -npernode 2 &lt;prg&gt;
<br>
<p>launches 8 processes in total. That is 2 processes per node and 4
<br>
nodes in total. (OpenMPI 1.5). Where a node comprises 1 CPU (dual
<br>
core) and network interconnect between nodes is InfiniBand.
<br>
<p>Now, the rank number (or process number) can be determined with
<br>
<p>int myrank;
<br>
MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
<br>
<p>This returns a number between 0 and 7.
<br>
<p>But, How can I determine the node number (in this case a number
<br>
between 0 and 3) and the process number within a node (number between
<br>
0 and 1)?
<br>
<p>You can find this question on stackoverflow (if you prefer to answer
<br>
through their interface):
<br>
<p><a href="http://stackoverflow.com/questions/9022496/how-to-determine-mpi-rank-process-number-local-to-a-socket-node">http://stackoverflow.com/questions/9022496/how-to-determine-mpi-rank-process-number-local-to-a-socket-node</a>
<br>
<p>Best,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Previous message:</strong> <a href="18277.php">Rodrigo Oliveira: "Re: [OMPI users] MPI_Comm_split and intercommunicator - Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
<li><strong>Reply:</strong> <a href="18279.php">Ralph Castain: "Re: [OMPI users] How to determine MPI rank/process number local to a socket/node"</a>
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
