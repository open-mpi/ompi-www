<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 17 16:13:16 2011" -->
<!-- isoreceived="20110517201316" -->
<!-- sent="Tue, 17 May 2011 14:13:05 -0600" -->
<!-- isosent="20110517201305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="83790D97-9CEF-4035-9EAD-4FF62D7155AE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=bJLuAsQzS+UZPDJTTrigi9MSuOw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-05-17 16:13:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16557.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;laugh&gt; Thanks for pointing this out - it's an error in our man page. I've fixed it on our devel trunk and will get it push'd to the release.
<br>
<p><p>On May 16, 2011, at 1:14 PM, Thatyene Louise Alves de Souza Ramos wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, thank you the reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just try what you said and it works! I didn't think to try the array of info arguments because in the spawn_multiple documentation I read the follow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;... array_of_info, is an array of info arguments; however, only the first argument in that array is used. Any subsequent arguments in the array are ignored because an info argument applies to the entire job that is spawned, and cannot be different for each executable in the job. See the INFO ARGUMENTS section for more information.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, I'm glad it works!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thatyene Ramos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, May 16, 2011 at 3:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You need to use MPI_Comm_spawn_multiple. Despite the name, it results in a single communicator being created by a single launch - it just allows you to specify multiple applications to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, we use the same app, but give each element a different &quot;host&quot; info key to get the behavior we want. Looks something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm child;
</span><br>
<span class="quotelev1">&gt;     char *cmds[3] = {&quot;myapp&quot;, &quot;myapp&quot;, &quot;myapp&quot;};
</span><br>
<span class="quotelev1">&gt;     MPI_Info info[3];
</span><br>
<span class="quotelev1">&gt;     int maxprocs[] = { 1, 3, 1 };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;info[0]);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(info[0], &quot;host&quot;, &quot;m1&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;info[1]);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(info[1], &quot;host&quot;, &quot;m2&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Info_create(&amp;info[2]);
</span><br>
<span class="quotelev1">&gt;   MPI_Info_set(info[2], &quot;host&quot;, &quot;m1&quot;);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_spawn_multiple(3, cmds, NULL, maxprocs, 
</span><br>
<span class="quotelev1">&gt;                                 info, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                                 &amp;child, MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I won't claim the above is correct - but it gives the gist of the idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 16, 2011, at 12:19 PM, Thatyene Louise Alves de Souza Ramos wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have the same issue and I've been searching how to do this, but I couldn't find. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What exactly must be the string in the host info key to do what Rodrigo described?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a value 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you want 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt; your slave to execute upon. Those hosts must have been included in 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&lt;&lt; my_hostfile. Include that key in the MPI_Info array passed to your Spawn.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to do what you said above but ompi ignores the repetition of hosts. Using Rodrigo's example I did:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; host info key = &quot;m1,m2,m2,m2,m3&quot; and number of processes = 5 and the result was
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; m1 -&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; m2 -&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; m3 -&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and not
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; m1 -&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; m2 -&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt; m3 -&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; as I wanted.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thatyene Ramos
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 13, 2011 at 9:16 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I believe I answered that question. You can use the hostfile info key, or you can use the host info key - either one will do what you require.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 13, 2011, at 4:11 PM, Rodrigo Silva Oliveira wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I was not specific enough. I need to spawn the copies of a process in a unique mpi_spawn call. It is, I have to specify a list of machines and how many copies of the process will be spawned on each one. Is it possible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would be something like that:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines     #copies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m1                1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m2                3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m3                1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After an unique call to spawn, I want the copies running in this fashion. I tried use a hostfile with the option slot, but I'm not sure if it is the best way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m1 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m2 slots=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m3 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rodrigo Silva Oliveira
</span><br>
<span class="quotelev3">&gt;&gt;&gt; M.Sc. Student - Computer Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidade Federal de Minas Gerais
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.dcc.ufmg.br/~rsilva
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16557.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16553.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16559.php">Rodrigo Silva Oliveira: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
