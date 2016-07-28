<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 14 16:41:07 2006" -->
<!-- isoreceived="20060214214107" -->
<!-- sent="Tue, 14 Feb 2006 16:41:04 -0500" -->
<!-- isosent="20060214214104" -->
<!-- name="Zhao, Yongsheng" -->
<!-- email="yongsheng.zhao_at_[hidden]" -->
<!-- subject="[OMPI users] Dynamic process question" -->
<!-- id="8D0C5C7A848CE0469B41D1A6C7ED3C5122FC3E_at_MAILIS.pecs.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Zhao, Yongsheng (<em>yongsheng.zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-14 16:41:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Maybe reply:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>

<br>
I am trying to use the dynamic process property of the open-mpi, but met some
<br>
problems.
<br>

<br>
In my program, the master program spawns some worker programs, the number of
<br>
workers depends on the universe_size. Now the problem is that the worker
<br>
programs can only be spawned on one node, the same node where the master
<br>
program is on. I specified the nodes using the hostfiles. Here is the content
<br>
of my hostfile:
<br>
n18 slots=1
<br>
n17 slots=4
<br>

<br>
The master is running on the n18, and I hope it can spawn 4 workers on the
<br>
n17. The command I started the program is:
<br>
mpirun --hostfile hostfile -np 1 master ...
<br>

<br>
Howerver, all the 4 workers are spawned on the n18 too, none of them running
<br>
on the n17. Here is my code to spawn workers:
<br>

<br>
// Spawns workers.
<br>
void master::Master::spawnWorkers(const char* command, const char*
<br>
arguments[]) {
<br>

<br>
&nbsp;&nbsp;char schema[80];
<br>
&nbsp;&nbsp;int mpi_spawn_error;
<br>
&nbsp;&nbsp;Task * task = tasks.front();
<br>
&nbsp;&nbsp;mpi_spawn_info=MPI::Info::Create();
<br>
&nbsp;
<br>
&nbsp;&nbsp;for(int iworker=1; iworker&lt;=number_of_workers; ++iworker) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sprintf(schema, &quot;c%d&quot;, iworker);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_spawn_info.Set(&quot;spawn_sched_round_robin&quot;, schema);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intercomm_workers[iworker]=MPI::COMM_SELF.Spawn(command, arguments, 1,
<br>
mpi_spawn_info, mpi_comm_rank, &amp;mpi_spawn_error);
<br>
&nbsp;&nbsp;&nbsp;if (mpi_spawn_error!=MPI::SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;(Master) Error in spawning worker (rank=&quot; &lt;&lt;
<br>
mpi_comm_rank &lt;&lt; &quot;).\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Abort((1 &lt;&lt; 16)+1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Master spawned worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intracomm_workers[iworker]=intercomm_workers[iworker].Merge(true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;Master merging inter - and intra - communicators for
<br>
worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;mpi_spawn_info.Free();
<br>

<br>
}
<br>

<br>
In the code the command is just executable file name of the worker.
<br>

<br>
I guess I didn't set the mpi_spaw_info which is MPI::Info type correctly. But
<br>
I have no idea how to set it.
<br>

<br>
Any advice?
<br>

<br>
Thanks.
<br>

<br>
Regards
<br>
Yongsheng Zhao 
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0661/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Jeff Squyres: "Re: [OMPI users] problem running Migrate with open-MPI"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Xiaoning (David) Yang: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Maybe reply:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
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
