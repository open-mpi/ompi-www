<?
$subject_val = "[OMPI users] Question about oversubscribing";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  4 10:06:19 2012" -->
<!-- isoreceived="20121104150619" -->
<!-- sent="Sun, 04 Nov 2012 16:05:55 +0100" -->
<!-- isosent="20121104150555" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="[OMPI users] Question about oversubscribing" -->
<!-- id="50968453.2070904_at_markomanolis.com" -->
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
<strong>Subject:</strong> [OMPI users] Question about oversubscribing<br>
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-04 10:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Reply:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Maybe reply:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am trying to execute an experiment by oversubscribing the nodes. So I 
<br>
have available some clusters (I can use up to 8-10 different clusters 
<br>
during one execution) and I have totally around to 1300 cores. I am 
<br>
executing the EP benchmark from the NAS suite which means that there are 
<br>
not a lot of MPI messages, just some collective MPI calls.
<br>
<p>The number of the MPI processes per node, depends on the available 
<br>
memory of each node. Thus in the machinefile I have declared one node 13 
<br>
times if I want 13 MPI processes on it. Is that correct? Giving a 
<br>
machinefile of 32768 nodes when I want to execute 32768 processes, does 
<br>
OpenMPI behave like there is no oversubscribing? If yes how can I give a 
<br>
machinefile where there is different number of MPI processes on each 
<br>
node? The maximum number of MPI processes that I have in a node is 388.
<br>
<p>My problem is that I can execute 16384 processes but not 32768. In the 
<br>
first case I need around to 3 minutes for the execution but in the 
<br>
second case, even after 7 hours the benchmark does not even start. There 
<br>
is no error, I am just cancelling the job by myself but I am assuming 
<br>
that something is wrong because 7 hours it is too much. I have to say 
<br>
that I executed the instance of 16384 processes without any problem. I 
<br>
added some debug info in the benchmark and I can see that the execution 
<br>
is delayed during MPI_Init, it never passes this point. For the instance 
<br>
of 16384 processes I need around to 2 minutes to finish the MPI_Init 
<br>
call. I am checking the memory of all the nodes and there is at least 
<br>
0.5GB free memory on each node.
<br>
<p>I know about the parameter mpi_yield_when_idle but I have read that if 
<br>
there are not a lot of MPI messages will not improve the performance. I 
<br>
tried though and nothing changed. I tried also the mpi_preconnect_mpi 
<br>
just in case but again nothing. Could you please indicate a reason why 
<br>
is this happening?
<br>
<p>Moreover I used just one node with 48GB memory in order to execute 2048 
<br>
MPI processes without any problem, of course I just had to wait a lot.
<br>
<p>I am using OpenMPI v1.4.1 and all the clusters are 64 bit.
<br>
<p>I execute the benchmark with the following command:
<br>
mpirun --mca pml ob1 --mca btl tcp,self --mca btl_tcp_if_exclude 
<br>
ib0,lo,myri0 -machinefile machines -np 32768 ep.D.32768
<br>
<p>Best regards,
<br>
George Markomanolis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Previous message:</strong> <a href="20632.php">Jens Glaser: "[OMPI users] mpi_leave_pinned is dangerous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Reply:</strong> <a href="20634.php">Ralph Castain: "Re: [OMPI users] Question about oversubscribing"</a>
<li><strong>Maybe reply:</strong> <a href="20635.php">George Markomanolis: "Re: [OMPI users] Question about oversubscribing"</a>
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
