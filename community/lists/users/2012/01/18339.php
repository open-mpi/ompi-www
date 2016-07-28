<?
$subject_val = "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 11:17:01 2012" -->
<!-- isoreceived="20120131161701" -->
<!-- sent="Tue, 31 Jan 2012 08:16:56 -0800 (PST)" -->
<!-- isosent="20120131161656" -->
<!-- name="adrian sabou" -->
<!-- email="adrian.sabou_at_[hidden]" -->
<!-- subject="[OMPI users]  OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="1328026616.11998.YahooMailNeo_at_web161703.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking<br>
<strong>From:</strong> adrian sabou (<em>adrian.sabou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 11:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18338.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
&#160;
I'm having this weird problem when running a very simple OpenMPI application. The application sends an integer from the rank 0 process to the rank 1 process. The sequence of code that&#160;I use to accomplish this is the following:
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (rank == 0)
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;{
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;printf(&quot;Process %d - Sending...\n&quot;, rank);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MPI_Send(&amp;sent, 1, MPI_INT, 1, 1, MPI_COMM_WORLD);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;printf(&quot;Process %d - Sent.\n&quot;, rank);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;if (rank == 1)
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;{
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; printf(&quot;Process %d - Receiving...\n&quot;, rank);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MPI_Recv(&amp;received, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, &amp;stat);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;printf(&quot;Process %d - Received.\n&quot;, rank&quot;);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;}
&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;printf(&quot;Process %d - Barrier reached.\n&quot;, rank);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;MPI_Barrier(MPI_COMM_WORLD);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;printf(&quot;Process %d - Barrier passed.\n&quot;, rank&quot;);
&#160;
Like I said, a very simple program.
When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier. However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
&#160;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;salloc: Granted job allocation 1138
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 0 - Sending...
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 1 - Receiving...
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 1 - Received.
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 1 - Barrier reached.
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 0 - Sent.
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Process 0 - Barrier reached.
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;(it just hangs here)
&#160;
I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have&#160;also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1), the operating system on the cluster on which I tried to run my application is Ubuntu 10.04 LTS Server x64. If anyone is willing to help me out, I will happily provide any other&#160;info requested (as long as the request comes with instructions on how to get that info).
&#160;
Your answers will be of great help! Thanks!
&#160;
Adrian
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18339/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18338.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18372.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
