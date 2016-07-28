<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 14:56:22 2006" -->
<!-- isoreceived="20060331195622" -->
<!-- sent="Fri, 31 Mar 2006 12:56:10 -0700" -->
<!-- isosent="20060331195610" -->
<!-- name="Brunner, Thomas A." -->
<!-- email="tabrunn_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Testsome with no requests" -->
<!-- id="C052D770.25BF%tabrunn_at_sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Brunner, Thomas A. (<em>tabrunn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 14:56:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0944.php">Ralph Castain: "[OMPI users] HPCWire article on OpenRTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Reply:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have an algorithm that collects information in a tree like manner using
<br>
nonblocking communication.  Some nodes do not receive information from other
<br>
nodes, so there are no outstanding requests on those nodes.  On all
<br>
processors, I check for the incoming messages using MPI_Testsome().
<br>
MPI_Testsome fails with OpenMPI, however if the request length is zero.
<br>
Here is a code that can be run with only one processor that shows the same
<br>
behavior:
<br>
<p>///////////////////////////////////////////
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main( int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myid, numprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello from processor %i of %i\n&quot;, myid, numprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int size = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int num_done = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status* stat = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request* req = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int* done_indices = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Testsome( size, req, &amp;num_done, done_indices, stat);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Finalizing on processor %i of %i\n&quot;, myid, numprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>/////////////////////////////////////////
<br>
&nbsp;
<br>
The output using OpenMPI is:
<br>
<p>Hello from processor 0 of 1
<br>
[mymachine:09115] *** An error occurred in MPI_Testsome
<br>
[mymachine:09115] *** on communicator MPI_COMM_WORLD
<br>
[mymachine:09115] *** MPI_ERR_REQUEST: invalid request
<br>
[mymachine:09115] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
1 process killed (possibly by Open MPI)
<br>
<p><p>Many other MPI implementations support this, and reading the standard, it
<br>
seems like it should be OK.
<br>
<p>Thanks,
<br>
Tom
<br>
<p><p>



<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0945/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0945/testsome_test.out">testsome_test.out</a>
</ul>
<!-- attachment="testsome_test.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0945/testsome_test.c">testsome_test.c</a>
</ul>
<!-- attachment="testsome_test.c" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0945/ompi_info.out">ompi_info.out</a>
</ul>
<!-- attachment="ompi_info.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0944.php">Ralph Castain: "[OMPI users] HPCWire article on OpenRTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Reply:</strong> <a href="0946.php">George Bosilca: "Re: [OMPI users] MPI_Testsome with no requests"</a>
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
