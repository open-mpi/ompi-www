<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 14:48:03 2011" -->
<!-- isoreceived="20110516184803" -->
<!-- sent="Mon, 16 May 2011 12:47:54 -0600" -->
<!-- isosent="20110516184754" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="661659D7-C3E3-45D9-A8FD-D818C31EB601_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=SZiStb4-ObP7-OG8CPcaDizTaEQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scheduling dynamically spawned processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 14:47:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to use MPI_Comm_spawn_multiple. Despite the name, it results in a single communicator being created by a single launch - it just allows you to specify multiple applications to run.
<br>
<p>In this case, we use the same app, but give each element a different &quot;host&quot; info key to get the behavior we want. Looks something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm child;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char *cmds[3] = {&quot;myapp&quot;, &quot;myapp&quot;, &quot;myapp&quot;};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Info info[3];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int maxprocs[] = { 1, 3, 1 };
<br>
<p>&nbsp;&nbsp;MPI_Info_create(&amp;info[0]);
<br>
&nbsp;&nbsp;MPI_Info_set(info[0], &quot;host&quot;, &quot;m1&quot;);
<br>
<p>&nbsp;&nbsp;MPI_Info_create(&amp;info[1]);
<br>
&nbsp;&nbsp;MPI_Info_set(info[1], &quot;host&quot;, &quot;m2&quot;);
<br>
<p>&nbsp;&nbsp;MPI_Info_create(&amp;info[2]);
<br>
&nbsp;&nbsp;MPI_Info_set(info[2], &quot;host&quot;, &quot;m1&quot;);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_spawn_multiple(3, cmds, NULL, maxprocs, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info, 0, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;child, MPI_ERRCODES_IGNORE);
<br>
<p>I won't claim the above is correct - but it gives the gist of the idea.
<br>
<p><p>On May 16, 2011, at 12:19 PM, Thatyene Louise Alves de Souza Ramos wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same issue and I've been searching how to do this, but I couldn't find. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What exactly must be the string in the host info key to do what Rodrigo described?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a value 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; your slave to execute upon. Those hosts must have been included in 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to do what you said above but ompi ignores the repetition of hosts. Using Rodrigo's example I did:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; host info key = &quot;m1,m2,m2,m2,m3&quot; and number of processes = 5 and the result was
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m1 -&gt; 2
</span><br>
<span class="quotelev1">&gt; m2 -&gt; 2
</span><br>
<span class="quotelev1">&gt; m3 -&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and not
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m1 -&gt; 1
</span><br>
<span class="quotelev1">&gt; m2 -&gt; 3
</span><br>
<span class="quotelev1">&gt; m3 -&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as I wanted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 13, 2011 at 9:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I believe I answered that question. You can use the hostfile info key, or you can use the host info key - either one will do what you require.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 13, 2011, at 4:11 PM, Rodrigo Silva Oliveira wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think I was not specific enough. I need to spawn the copies of a process in a unique mpi_spawn call. It is, I have to specify a list of machines and how many copies of the process will be spawned on each one. Is it possible?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would be something like that:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; machines     #copies
</span><br>
<span class="quotelev2">&gt;&gt; m1                1
</span><br>
<span class="quotelev2">&gt;&gt; m2                3
</span><br>
<span class="quotelev2">&gt;&gt; m3                1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After an unique call to spawn, I want the copies running in this fashion. I tried use a hostfile with the option slot, but I'm not sure if it is the best way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hostfile:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; m1 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; m2 slots=3
</span><br>
<span class="quotelev2">&gt;&gt; m3 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Rodrigo Silva Oliveira
</span><br>
<span class="quotelev2">&gt;&gt; M.Sc. Student - Computer Science
</span><br>
<span class="quotelev2">&gt;&gt; Universidade Federal de Minas Gerais
</span><br>
<span class="quotelev2">&gt;&gt; www.dcc.ufmg.br/~rsilva
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16549/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16550.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16548.php">Peter Thompson: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16547.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
