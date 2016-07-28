<?
$subject_val = "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 28 19:21:41 2013" -->
<!-- isoreceived="20131129002141" -->
<!-- sent="Thu, 28 Nov 2013 19:21:00 -0500" -->
<!-- isosent="20131129002100" -->
<!-- name="Jean-Francois St-Pierre" -->
<!-- email="jf.stpierre_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)" -->
<!-- id="CADRnAS5fFkbPVhpGjF=CHTxPs-cREfF14AnVAuLftP6pF7OaRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)<br>
<strong>From:</strong> Jean-Francois St-Pierre (<em>jf.stpierre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-28 19:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Reply:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I've compiled ompi1.6.5 with multi-thread support (using Intel
<br>
compilers 12.0.4.191, but I get the same result with gcc) :
<br>
<p>./configure --with-tm/opt/torque --with-openib
<br>
--enable-mpi-thread-multiple CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>And i've built a simple sample code that only does the Init and one
<br>
MPI_Barrier. The core of the code is :
<br>
<p>&nbsp;&nbsp;setbuf(stdout, NULL);
<br>
&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);
<br>
&nbsp;&nbsp;fprintf(stdout,&quot;%6d: Provided thread support %d &quot;, getpid(), provided);
<br>
&nbsp;&nbsp;int flag,claimed;
<br>
&nbsp;&nbsp;MPI_Is_thread_main( &amp;flag );
<br>
&nbsp;&nbsp;MPI_Query_thread( &amp;claimed );
<br>
<p>&nbsp;&nbsp;fprintf(stdout,&quot;%6d: Before Comm_rank, flag %d, claimed %d \n&quot;,
<br>
getpid(), flag, claimed);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;gRank);
<br>
<p>&nbsp;&nbsp;fprintf(stdout,&quot;%6d: Comm_size rank %d\n&quot;,getpid(), gRank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;gNTasks);
<br>
<p>&nbsp;&nbsp;fprintf(stdout,&quot;%6d: Before Barrier\n&quot;, getpid());
<br>
&nbsp;&nbsp;MPI_Barrier( MPI_COMM_WORLD );
<br>
<p>&nbsp;&nbsp;fprintf(stdout,&quot;%6d: After Barrier\n&quot;, getpid());
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>When I launch it on 2 nodes (mono-core per node) I get this sample output :
<br>
<p>/***  Output
<br>
&nbsp;mpirun -pernode -np 2 sample_code
<br>
&nbsp;7356: Provided thread support 3 MPI_THREAD_MULTIPLE
<br>
&nbsp;7356: Before Comm_rank, flag 1, claimed 3
<br>
&nbsp;7356: Comm_size rank 0
<br>
&nbsp;7356: Before Barrier
<br>
&nbsp;26277: Provided thread support 3 MPI_THREAD_MULTIPLE
<br>
&nbsp;26277: Before Comm_rank, flag 1, claimed 3
<br>
&nbsp;26277: Comm_size rank 1
<br>
&nbsp;26277: Before Barrier
<br>
&nbsp;^Cmpirun: killing job...
<br>
&nbsp;*/
<br>
<p>The deadlock never gets over the MPI_Barrier when I use
<br>
MPI_THREAD_MULTIPLE, but it runs fine using MPI_THREAD_SERIALIZED .  I
<br>
get the same behavior with ompi 1.7.3. I don't get a deadlock when the
<br>
2 MPI processes are hosted on the same node.
<br>
<p>In attachement, you'll find my config.out, config.log, environment
<br>
variables on the execution node, both make.out, sample code and output
<br>
etc.
<br>
<p>Thanks,
<br>
<p>Jeff
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23106/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Reply:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
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
