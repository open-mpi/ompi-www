<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 15:35:50 2006" -->
<!-- isoreceived="20060331203550" -->
<!-- sent="Fri, 31 Mar 2006 15:35:44 -0500" -->
<!-- isosent="20060331203544" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Testsome with no requests" -->
<!-- id="2266F211-1232-4A2F-9331-EC8E837BB3E7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C052D770.25BF%tabrunn_at_sandia.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 15:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0945.php">Brunner, Thomas A.: "[OMPI users] MPI_Testsome with no requests"</a>
<li><strong>In reply to:</strong> <a href="0945.php">Brunner, Thomas A.: "[OMPI users] MPI_Testsome with no requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Reply:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When we're checking the arguments, we check for the request array to  
<br>
not be NULL without looking to the number of requests. I think it  
<br>
make sense, as I don't see why the user would call these functions  
<br>
with 0 requests ... But, the other way around make sense too. As I  
<br>
don't find anything in the MPI standard that stop the user doing that  
<br>
I add the additional check to all MPI_Wait* and MPI_Test* functions.
<br>
<p>Please get the version from trunk after revision 9504.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 31, 2006, at 2:56 PM, Brunner, Thomas A. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an algorithm that collects information in a tree like manner  
</span><br>
<span class="quotelev1">&gt; using
</span><br>
<span class="quotelev1">&gt; nonblocking communication.  Some nodes do not receive information  
</span><br>
<span class="quotelev1">&gt; from other
</span><br>
<span class="quotelev1">&gt; nodes, so there are no outstanding requests on those nodes.  On all
</span><br>
<span class="quotelev1">&gt; processors, I check for the incoming messages using MPI_Testsome().
</span><br>
<span class="quotelev1">&gt; MPI_Testsome fails with OpenMPI, however if the request length is  
</span><br>
<span class="quotelev1">&gt; zero.
</span><br>
<span class="quotelev1">&gt; Here is a code that can be run with only one processor that shows  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev1">&gt; behavior:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ///////////////////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int myid, numprocs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello from processor %i of %i\n&quot;, myid, numprocs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int size = 0;
</span><br>
<span class="quotelev1">&gt;     int num_done = 0;
</span><br>
<span class="quotelev1">&gt;     MPI_Status* stat = 0;
</span><br>
<span class="quotelev1">&gt;     MPI_Request* req = 0;
</span><br>
<span class="quotelev1">&gt;     int* done_indices = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Testsome( size, req, &amp;num_done, done_indices, stat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Finalizing on processor %i of %i\n&quot;, myid, numprocs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /////////////////////////////////////////
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output using OpenMPI is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello from processor 0 of 1
</span><br>
<span class="quotelev1">&gt; [mymachine:09115] *** An error occurred in MPI_Testsome
</span><br>
<span class="quotelev1">&gt; [mymachine:09115] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mymachine:09115] *** MPI_ERR_REQUEST: invalid request
</span><br>
<span class="quotelev1">&gt; [mymachine:09115] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 1 process killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many other MPI implementations support this, and reading the  
</span><br>
<span class="quotelev1">&gt; standard, it
</span><br>
<span class="quotelev1">&gt; seems like it should be OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;testsome_test.out&gt;
</span><br>
<span class="quotelev1">&gt; &lt;testsome_test.c&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.out&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Previous message:</strong> <a href="0945.php">Brunner, Thomas A.: "[OMPI users] MPI_Testsome with no requests"</a>
<li><strong>In reply to:</strong> <a href="0945.php">Brunner, Thomas A.: "[OMPI users] MPI_Testsome with no requests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
<li><strong>Reply:</strong> <a href="0947.php">Brunner, Thomas A.: "Re: [OMPI users] MPI_Testsome with no requests"</a>
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
