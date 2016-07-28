<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 16:10:24 2008" -->
<!-- isoreceived="20080912201024" -->
<!-- sent="Fri, 12 Sep 2008 13:10:17 -0700" -->
<!-- isosent="20080912201017" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4F01AB9.31C2%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.23.1221235224.27021.users_at_open-mpi.org" -->
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
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-12 16:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;I have verified the openMPI version to be 1.2.7 on all the nodes and also
<br>
ompi_info | grep thread is Thread support: posix (mpi: no, progress: no) on
<br>
these machines.
<br>
<p>&nbsp;I get the error with and without -mca oob_tcp_listen_mode listen_thread.
<br>
Sometimes, the startup takes too long with the listen_thread enabled and I
<br>
have to resort to killing and restarting the program.
<br>
<p>&nbsp;Would the following matter in any way?
<br>
&nbsp;1. The head node (node where I start the mpi process) being a part of the
<br>
cluster
<br>
&nbsp;2. The head node also being the root node (node with vpid 0)
<br>
&nbsp;3. The head node not being a part of the cluster
<br>
<p>&nbsp;I am currently trying the above stuff and other combinations such as
<br>
tweaking -mca oob_tcp_thread_max_size.
<br>
<p>&nbsp;The test program I run is the following:
<br>
<p>#include &lt;boost/mpi.hpp&gt;
<br>
#include &lt;iostream&gt;
<br>
<p>int
<br>
main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;// Initialize  MPI environment
<br>
&nbsp;&nbsp;boost::mpi::environment env(argc, argv);
<br>
&nbsp;&nbsp;if (!env.initialized()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Could not initialize MPI environment!&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;boost::mpi::communicator world;
<br>
<p>&nbsp;&nbsp;// Find out my identity in the default communicator
<br>
&nbsp;&nbsp;int myrank = world.rank();
<br>
<p>&nbsp;&nbsp;// Find out how many processes there are in the default communicator
<br>
&nbsp;&nbsp;int ntasks = world.size();
<br>
<p>&nbsp;&nbsp;char hn[256];
<br>
&nbsp;&nbsp;gethostname(hn, 255);
<br>
<p>&nbsp;&nbsp;std::cout &lt;&lt; hn &lt;&lt; &quot; is node &quot; &lt;&lt; myrank &lt;&lt; &quot; of &quot; &lt;&lt; ntasks &lt;&lt; std::endl;
<br>
<p>&nbsp;&nbsp;int allranks = boost::mpi::all_reduce(world, myrank, std::plus&lt;int&gt;());
<br>
<p>&nbsp;&nbsp;world.barrier();
<br>
&nbsp;&nbsp;if (myrank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;ranks sum to &quot; &lt;&lt; allranks &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;// finalize MPI environment when env is destructed
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>&nbsp;I also tried a version without Boost::MPI with the same results.
<br>
<p>&nbsp;#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p><p>int main (int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);      /* starts MPI */
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);        /* get current process id */
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);        /* get number of processes
<br>
*/
<br>
&nbsp;&nbsp;char hn[256];
<br>
&nbsp;&nbsp;gethostname(hn, 255);
<br>
&nbsp;&nbsp;printf( &quot;%s is node %d of %d\n&quot;, hn, rank, size );
<br>
<p>&nbsp;&nbsp;int all_ranks;
<br>
&nbsp;&nbsp;int count[1024] = {1};
<br>
&nbsp;&nbsp;MPI_Reduce_scatter (&amp;rank,&amp;all_ranks, count, MPI_INT, MPI_SUM,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Barrier (MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if(rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf( &quot;ranks sum to %d\n&quot;,all_ranks);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
return 0;
<br>
}
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6520.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
