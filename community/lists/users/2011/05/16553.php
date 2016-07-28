<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 15:14:56 2011" -->
<!-- isoreceived="20110516191456" -->
<!-- sent="Mon, 16 May 2011 16:14:50 -0300" -->
<!-- isosent="20110516191450" -->
<!-- name="Thatyene Louise Alves de Souza Ramos" -->
<!-- email="thatyene_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="BANLkTi=bJLuAsQzS+UZPDJTTrigi9MSuOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="661659D7-C3E3-45D9-A8FD-D818C31EB601_at_open-mpi.org" -->
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
<strong>From:</strong> Thatyene Louise Alves de Souza Ramos (<em>thatyene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 15:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16554.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16552.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16558.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16558.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thank you the reply.
<br>
<p>I just try what you said and it works! I didn't think to try the array of
<br>
info arguments because in the spawn_multiple documentation I read the
<br>
follow:
<br>
<p>&quot;... *array_of_info*, is an array of *info *arguments; however, *only the
<br>
first argument in that array is used. Any subsequent arguments in the array
<br>
are ignored* because an *info* argument applies to the entire job that is
<br>
spawned, and cannot be different for each executable in the job. See the
<br>
INFO ARGUMENTS section for more information.&quot;
<br>
<p>Anyway, I'm glad it works!
<br>
<p>Thank you very much!
<br>
<p>Regards.
<br>
<p>Thatyene Ramos
<br>
<p>On Mon, May 16, 2011 at 3:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You need to use MPI_Comm_spawn_multiple. Despite the name, it results in a
</span><br>
<span class="quotelev1">&gt; single communicator being created by a single launch - it just allows you to
</span><br>
<span class="quotelev1">&gt; specify multiple applications to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In this case, we use the same app, but give each element a different &quot;host&quot;
</span><br>
<span class="quotelev1">&gt; info key to get the behavior we want. Looks something like this:
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
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the same issue and I've been searching how to do this, but I
</span><br>
<span class="quotelev1">&gt; couldn't find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly must be the string in the host info key to do what Rodrigo
</span><br>
<span class="quotelev1">&gt; described?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; Inside your master, you would create an MPI_Info key &quot;host&quot; that has a
</span><br>
<span class="quotelev1">&gt; value
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; consisting of a string &quot;host1,host2,host3&quot; identifying the hosts you
</span><br>
<span class="quotelev1">&gt; want
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; your slave to execute upon. Those hosts must have been included in
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt; my_hostfile. Include that key in the MPI_Info array passed to your
</span><br>
<span class="quotelev1">&gt; Spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to do what you said above but ompi ignores the repetition of hosts.
</span><br>
<span class="quotelev1">&gt; Using Rodrigo's example I did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; host info key = &quot;m1,m2,m2,m2,m3&quot; and number of processes = 5 and the result
</span><br>
<span class="quotelev1">&gt; was
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe I answered that question. You can use the hostfile info key, or
</span><br>
<span class="quotelev2">&gt;&gt; you can use the host info key - either one will do what you require.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 13, 2011, at 4:11 PM, Rodrigo Silva Oliveira wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I was not specific enough. I need to spawn the copies of a process
</span><br>
<span class="quotelev2">&gt;&gt; in a unique mpi_spawn call. It is, I have to specify a list of machines and
</span><br>
<span class="quotelev2">&gt;&gt; how many copies of the process will be spawned on each one. Is it possible?
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
<span class="quotelev2">&gt;&gt; After an unique call to spawn, I want the copies running in this fashion.
</span><br>
<span class="quotelev2">&gt;&gt; I tried use a hostfile with the option slot, but I'm not sure if it is the
</span><br>
<span class="quotelev2">&gt;&gt; best way.
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
<span class="quotelev2">&gt;&gt; www.dcc.ufmg.br/~rsilva &lt;<a href="http://www.dcc.ufmg.br/%7Ersilva">http://www.dcc.ufmg.br/%7Ersilva</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16554.php">hi: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>Previous message:</strong> <a href="16552.php">Ralph Castain: "Re: [OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16549.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16558.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Reply:</strong> <a href="16558.php">Ralph Castain: "Re: [OMPI users] Scheduling dynamically spawned processes"</a>
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
