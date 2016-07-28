<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 16:25:56 2008" -->
<!-- isoreceived="20080912202556" -->
<!-- sent="Fri, 12 Sep 2008 14:25:52 -0600" -->
<!-- isosent="20080912202552" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="d105ee120809121325u682b4f29i4980b106c5f8c42b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4F01AB9.31C2%prasanna_at_searchme.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-12 16:25:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Prasanna, do you have any unusual ethernet interfaces on your
<br>
nodes?  I have seen similar problems when using IP over Infiniband.
<br>
I'm not sure exactly why, but mixing interfaces of different types
<br>
(ib0 and eth0 for example) can sometimes cause these problems,
<br>
possibly because they are on different subnets.
<br>
<p>If you do have multiple interfaces on the same machine, use the
<br>
btl_tcp_if_include and oop_tcp_if_include parameters to explicitly set
<br>
the interfaces you want to use.
<br>
<p>I have also seen problems where eth0 on the head node is on a
<br>
different subnet than eth0 on the compute nodes.
<br>
<p>mch
<br>
<p>2008/9/12 Prasanna Ranganathan &lt;prasanna_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have verified the openMPI version to be 1.2.7 on all the nodes and also
</span><br>
<span class="quotelev1">&gt; ompi_info | grep thread is Thread support: posix (mpi: no, progress: no) on
</span><br>
<span class="quotelev1">&gt; these machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I get the error with and without -mca oob_tcp_listen_mode listen_thread.
</span><br>
<span class="quotelev1">&gt; Sometimes, the startup takes too long with the listen_thread enabled and I
</span><br>
<span class="quotelev1">&gt; have to resort to killing and restarting the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Would the following matter in any way?
</span><br>
<span class="quotelev1">&gt;  1. The head node (node where I start the mpi process) being a part of the
</span><br>
<span class="quotelev1">&gt; cluster
</span><br>
<span class="quotelev1">&gt;  2. The head node also being the root node (node with vpid 0)
</span><br>
<span class="quotelev1">&gt;  3. The head node not being a part of the cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am currently trying the above stuff and other combinations such as
</span><br>
<span class="quotelev1">&gt; tweaking -mca oob_tcp_thread_max_size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The test program I run is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  // Initialize  MPI environment
</span><br>
<span class="quotelev1">&gt;  boost::mpi::environment env(argc, argv);
</span><br>
<span class="quotelev1">&gt;  if (!env.initialized()) {
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Could not initialize MPI environment!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;    return -1;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  boost::mpi::communicator world;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  // Find out my identity in the default communicator
</span><br>
<span class="quotelev1">&gt;  int myrank = world.rank();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  // Find out how many processes there are in the default communicator
</span><br>
<span class="quotelev1">&gt;  int ntasks = world.size();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  char hn[256];
</span><br>
<span class="quotelev1">&gt;  gethostname(hn, 255);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  std::cout &lt;&lt; hn &lt;&lt; &quot; is node &quot; &lt;&lt; myrank &lt;&lt; &quot; of &quot; &lt;&lt; ntasks &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int allranks = boost::mpi::all_reduce(world, myrank, std::plus&lt;int&gt;());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  world.barrier();
</span><br>
<span class="quotelev1">&gt;  if (myrank == 0) {
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;ranks sum to &quot; &lt;&lt; allranks &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  // finalize MPI environment when env is destructed
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I also tried a version without Boost::MPI with the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int rank, size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of processes
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;  char hn[256];
</span><br>
<span class="quotelev1">&gt;  gethostname(hn, 255);
</span><br>
<span class="quotelev1">&gt;  printf( &quot;%s is node %d of %d\n&quot;, hn, rank, size );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  int all_ranks;
</span><br>
<span class="quotelev1">&gt;  int count[1024] = {1};
</span><br>
<span class="quotelev1">&gt;  MPI_Reduce_scatter (&amp;rank,&amp;all_ranks, count, MPI_INT, MPI_SUM,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier (MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if(rank == 0 )
</span><br>
<span class="quotelev1">&gt;    printf( &quot;ranks sum to %d\n&quot;,all_ranks);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasanna.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
