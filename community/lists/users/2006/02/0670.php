<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 16 09:43:35 2006" -->
<!-- isoreceived="20060216144335" -->
<!-- sent="Thu, 16 Feb 2006 09:43:28 -0500" -->
<!-- isosent="20060216144328" -->
<!-- name="Zhao, Yongsheng" -->
<!-- email="yongsheng.zhao_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process question" -->
<!-- id="8D0C5C7A848CE0469B41D1A6C7ED3C5122FC43_at_MAILIS.pecs.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="[OMPI users] Dynamic process question" -->
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
<strong>Date:</strong> 2006-02-16 09:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Edgar:
<br>
<p>Thanks for your answering. However, I still have some questions. First, Could
<br>
you please explain more about &quot;wdir&quot; option, or where I can find the
<br>
information about it? Second, how to spawn all the processes at once, use the
<br>
Spawn_mutiple? 
<br>
<p>Thank you for your help
<br>
<p>Regards
<br>
Yongsheng Zhao
<br>
<p><p>-----Original Message-----
<br>
From:	users-bounces_at_[hidden] on behalf of Edgar Gabriel
<br>
Sent:	Thu 2/16/2006 8:01 PM
<br>
To:	Open MPI Users
<br>
Cc:	
<br>
Subject:	Re: [OMPI users] Dynamic process question
<br>
I have a partial answer to your question, I am however only aware of the 
<br>
MPI layer of the implementation of dynamic process management, not of 
<br>
the runtime environment.
<br>
<p>There was an info object called very similar to 
<br>
&quot;spawn_sched_round_robin&quot; in LAM/MPI. However, this is not one of the 
<br>
&quot;predefined&quot; info objects of MPI-2 for dynamic process management, but 
<br>
an extension of LAM/MPI (which is fine, since the MPI spec. explicitly 
<br>
allows MPI libraries to have their own info objects). There is right now 
<br>
no corresponding object in Open MPI. (In fact, the only info object 
<br>
currently recognized by Open MPI in this section is the &quot;wdir&quot; option). 
<br>
However, if you would not spawn every process separatly, but e.g. four 
<br>
processes at once, these four processes would be scheduled according to 
<br>
the hostfile, so you would not end up having all processes on the first 
<br>
host.
<br>
<p>Hope this helps.
<br>
<p>Edgar
<br>
<p>Zhao, Yongsheng wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to use the dynamic process property of the open-mpi, but met 
</span><br>
<span class="quotelev1">&gt; some problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my program, the master program spawns some worker programs, the 
</span><br>
<span class="quotelev1">&gt; number of workers depends on the universe_size. Now the problem is that 
</span><br>
<span class="quotelev1">&gt; the worker programs can only be spawned on one node, the same node where 
</span><br>
<span class="quotelev1">&gt; the master program is on. I specified the nodes using the hostfiles. 
</span><br>
<span class="quotelev1">&gt; Here is the content of my hostfile:
</span><br>
<span class="quotelev1">&gt; n18 slots=1
</span><br>
<span class="quotelev1">&gt; n17 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The master is running on the n18, and I hope it can spawn 4 workers on 
</span><br>
<span class="quotelev1">&gt; the n17. The command I started the program is:
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile -np 1 master ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howerver, all the 4 workers are spawned on the n18 too, none of them 
</span><br>
<span class="quotelev1">&gt; running on the n17. Here is my code to spawn workers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; // Spawns workers.
</span><br>
<span class="quotelev1">&gt; void master::Master::spawnWorkers(const char* command, const char* 
</span><br>
<span class="quotelev1">&gt; arguments[]) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   char schema[80];
</span><br>
<span class="quotelev1">&gt;   int mpi_spawn_error;
</span><br>
<span class="quotelev1">&gt;   Task * task = tasks.front();
</span><br>
<span class="quotelev1">&gt;   mpi_spawn_info=MPI::Info::Create();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   for(int iworker=1; iworker&lt;=number_of_workers; ++iworker) {
</span><br>
<span class="quotelev1">&gt;     sprintf(schema, &quot;c%d&quot;, iworker);
</span><br>
<span class="quotelev1">&gt;     mpi_spawn_info.Set(&quot;spawn_sched_round_robin&quot;, schema);
</span><br>
<span class="quotelev1">&gt;     intercomm_workers[iworker]=MPI::COMM_SELF.Spawn(command, arguments, 
</span><br>
<span class="quotelev1">&gt; 1, mpi_spawn_info, mpi_comm_rank, &amp;mpi_spawn_error);
</span><br>
<span class="quotelev1">&gt;    if (mpi_spawn_error!=MPI::SUCCESS) {
</span><br>
<span class="quotelev1">&gt;       std::cerr &lt;&lt; &quot;(Master) Error in spawning worker (rank=&quot; &lt;&lt; 
</span><br>
<span class="quotelev1">&gt; mpi_comm_rank &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev1">&gt;       MPI::COMM_WORLD.Abort((1 &lt;&lt; 16)+1);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;       std::cerr &lt;&lt; &quot;Master spawned worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev1">&gt;       intracomm_workers[iworker]=intercomm_workers[iworker].Merge(true);
</span><br>
<span class="quotelev1">&gt;       std::cerr &lt;&lt; &quot;Master merging inter - and intra - communicators for 
</span><br>
<span class="quotelev1">&gt; worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   mpi_spawn_info.Free();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the code the command is just executable file name of the worker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I didn't set the mpi_spaw_info which is MPI::Info type 
</span><br>
<span class="quotelev1">&gt; correctly. But I have no idea how to set it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any advice?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Yongsheng Zhao
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0670/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Previous message:</strong> <a href="0669.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Maybe in reply to:</strong> <a href="0661.php">Zhao, Yongsheng: "[OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0671.php">Edgar Gabriel: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>Reply:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
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
