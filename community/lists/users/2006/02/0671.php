<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 16 10:02:30 2006" -->
<!-- isoreceived="20060216150230" -->
<!-- sent="Thu, 16 Feb 2006 09:02:29 -0600" -->
<!-- isosent="20060216150229" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Dynamic process question" -->
<!-- id="43F49405.7030702_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D0C5C7A848CE0469B41D1A6C7ED3C5122FC43_at_MAILIS.pecs.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-16 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Zhao, Yongsheng wrote:
<br>
<span class="quotelev1">&gt; Hello, Edgar:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your answering. However, I still have some questions. First, Could
</span><br>
<span class="quotelev1">&gt; you please explain more about &quot;wdir&quot; option, or where I can find the
</span><br>
<span class="quotelev1">&gt; information about it? 
</span><br>
e.g. in the MPI-2 specification, chapter 5.3.4, page 91 and 92, defines 
<br>
the info options for the dynamic process management. With &quot;wdir&quot; you can 
<br>
set the directory, where the MPI library should look for the executable.
<br>
<p><p><span class="quotelev1">&gt; Second, how to spawn all the processes at once, use the
</span><br>
<span class="quotelev1">&gt; Spawn_mutiple? 
</span><br>
<p>If the name of your executable is identical for all processes, you don't 
<br>
have to use spawn_multiple: the third argument of Spawn is an &quot;int 
<br>
maxprocs&quot;, the MPI library will spawn as many processes as you specified 
<br>
there. In your example, you passed in 1, thats why your code always 
<br>
spawns one processes...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help
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
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From:	users-bounces_at_[hidden] on behalf of Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Sent:	Thu 2/16/2006 8:01 PM
</span><br>
<span class="quotelev1">&gt; To:	Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc:	
</span><br>
<span class="quotelev1">&gt; Subject:	Re: [OMPI users] Dynamic process question
</span><br>
<span class="quotelev1">&gt; I have a partial answer to your question, I am however only aware of the 
</span><br>
<span class="quotelev1">&gt; MPI layer of the implementation of dynamic process management, not of 
</span><br>
<span class="quotelev1">&gt; the runtime environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There was an info object called very similar to 
</span><br>
<span class="quotelev1">&gt; &quot;spawn_sched_round_robin&quot; in LAM/MPI. However, this is not one of the 
</span><br>
<span class="quotelev1">&gt; &quot;predefined&quot; info objects of MPI-2 for dynamic process management, but 
</span><br>
<span class="quotelev1">&gt; an extension of LAM/MPI (which is fine, since the MPI spec. explicitly 
</span><br>
<span class="quotelev1">&gt; allows MPI libraries to have their own info objects). There is right now 
</span><br>
<span class="quotelev1">&gt; no corresponding object in Open MPI. (In fact, the only info object 
</span><br>
<span class="quotelev1">&gt; currently recognized by Open MPI in this section is the &quot;wdir&quot; option). 
</span><br>
<span class="quotelev1">&gt; However, if you would not spawn every process separatly, but e.g. four 
</span><br>
<span class="quotelev1">&gt; processes at once, these four processes would be scheduled according to 
</span><br>
<span class="quotelev1">&gt; the hostfile, so you would not end up having all processes on the first 
</span><br>
<span class="quotelev1">&gt; host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Zhao, Yongsheng wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am trying to use the dynamic process property of the open-mpi, but met 
</span><br>
<span class="quotelev2">&gt;&gt;some problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In my program, the master program spawns some worker programs, the 
</span><br>
<span class="quotelev2">&gt;&gt;number of workers depends on the universe_size. Now the problem is that 
</span><br>
<span class="quotelev2">&gt;&gt;the worker programs can only be spawned on one node, the same node where 
</span><br>
<span class="quotelev2">&gt;&gt;the master program is on. I specified the nodes using the hostfiles. 
</span><br>
<span class="quotelev2">&gt;&gt;Here is the content of my hostfile:
</span><br>
<span class="quotelev2">&gt;&gt;n18 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;n17 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The master is running on the n18, and I hope it can spawn 4 workers on 
</span><br>
<span class="quotelev2">&gt;&gt;the n17. The command I started the program is:
</span><br>
<span class="quotelev2">&gt;&gt;mpirun --hostfile hostfile -np 1 master ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Howerver, all the 4 workers are spawned on the n18 too, none of them 
</span><br>
<span class="quotelev2">&gt;&gt;running on the n17. Here is my code to spawn workers:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;// Spawns workers.
</span><br>
<span class="quotelev2">&gt;&gt;void master::Master::spawnWorkers(const char* command, const char* 
</span><br>
<span class="quotelev2">&gt;&gt;arguments[]) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  char schema[80];
</span><br>
<span class="quotelev2">&gt;&gt;  int mpi_spawn_error;
</span><br>
<span class="quotelev2">&gt;&gt;  Task * task = tasks.front();
</span><br>
<span class="quotelev2">&gt;&gt;  mpi_spawn_info=MPI::Info::Create();
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  for(int iworker=1; iworker&lt;=number_of_workers; ++iworker) {
</span><br>
<span class="quotelev2">&gt;&gt;    sprintf(schema, &quot;c%d&quot;, iworker);
</span><br>
<span class="quotelev2">&gt;&gt;    mpi_spawn_info.Set(&quot;spawn_sched_round_robin&quot;, schema);
</span><br>
<span class="quotelev2">&gt;&gt;    intercomm_workers[iworker]=MPI::COMM_SELF.Spawn(command, arguments, 
</span><br>
<span class="quotelev2">&gt;&gt;1, mpi_spawn_info, mpi_comm_rank, &amp;mpi_spawn_error);
</span><br>
<span class="quotelev2">&gt;&gt;   if (mpi_spawn_error!=MPI::SUCCESS) {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cerr &lt;&lt; &quot;(Master) Error in spawning worker (rank=&quot; &lt;&lt; 
</span><br>
<span class="quotelev2">&gt;&gt;mpi_comm_rank &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI::COMM_WORLD.Abort((1 &lt;&lt; 16)+1);
</span><br>
<span class="quotelev2">&gt;&gt;    } else {
</span><br>
<span class="quotelev2">&gt;&gt;      std::cerr &lt;&lt; &quot;Master spawned worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      intracomm_workers[iworker]=intercomm_workers[iworker].Merge(true);
</span><br>
<span class="quotelev2">&gt;&gt;      std::cerr &lt;&lt; &quot;Master merging inter - and intra - communicators for 
</span><br>
<span class="quotelev2">&gt;&gt;worker (rank=&quot; &lt;&lt; iworker &lt;&lt; &quot;).\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  mpi_spawn_info.Free();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;In the code the command is just executable file name of the worker.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I guess I didn't set the mpi_spaw_info which is MPI::Info type 
</span><br>
<span class="quotelev2">&gt;&gt;correctly. But I have no idea how to set it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any advice?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Regards
</span><br>
<span class="quotelev2">&gt;&gt;Yongsheng Zhao
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<li><strong>In reply to:</strong> <a href="0670.php">Zhao, Yongsheng: "Re: [OMPI users] Dynamic process question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
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
