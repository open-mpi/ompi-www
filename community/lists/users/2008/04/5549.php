<?
$subject_val = "[OMPI users] MPI_Lookup_name error";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 20:58:43 2008" -->
<!-- isoreceived="20080428005843" -->
<!-- sent="Sun, 27 Apr 2008 20:58:27 -0400" -->
<!-- isosent="20080428005827" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Lookup_name error" -->
<!-- id="903FDD6A-CAC6-4A66-B6EC-CB8CA893D00E_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Lookup_name error<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-27 20:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5550.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5548.php">Robert Taylor: "[OMPI users] trouble building on a macbook"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having error using MPI_Lookup_name. The same program works fine  
<br>
when using MPICH:
<br>
<p><p>/usr/local/bin/mpiexec -np 2 ./client myfriend
<br>
Processor 0 (662, Sender) initialized
<br>
Processor 0 looking for service myfriend-0
<br>
Processor 1 (664, Sender) initialized
<br>
Processor 1 looking for service myfriend-1
<br>
[local:00662] *** An error occurred in MPI_Lookup_name
<br>
[local:00662] *** on communicator MPI_COMM_WORLD
<br>
[local:00662] *** MPI_ERR_NAME: invalid name argument
<br>
[local:00662] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[local:00664] *** An error occurred in MPI_Lookup_name
<br>
[local:00664] *** on communicator MPI_COMM_WORLD
<br>
[local:00664] *** MPI_ERR_NAME: invalid name argument
<br>
[local:00664] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p><p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, i;
<br>
&nbsp;&nbsp;&nbsp;float data[100];
<br>
&nbsp;&nbsp;&nbsp;char cdata[64];
<br>
&nbsp;&nbsp;&nbsp;char myport[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;char myservice[64];
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;int intercomm_size;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
<br>
<p>&nbsp;&nbsp;&nbsp;if( argc &lt; 2 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Require server name\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(-1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;for( i = 0; i &lt; 100; i++ )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data[i] = i;
<br>
<p>&nbsp;&nbsp;&nbsp;sprintf(myservice, &quot;%s-%d&quot;, argv[1], rank);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d looking for service %s\n&quot;, rank, myservice);
<br>
&nbsp;&nbsp;&nbsp;MPI_Lookup_name(myservice, MPI_INFO_NULL, myport);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d found port %s looking for service %s\n&quot;,  
<br>
rank, myport, myservice);
<br>
<p>&nbsp;&nbsp;&nbsp;while( 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,  
<br>
&amp;intercomm) == MPI_SUCCESS )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d connected\n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_remote_size(intercomm, &amp;intercomm_size);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d remote comm size is %d\n&quot;, rank,  
<br>
intercomm_size);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d sending data through intercomm to rank 0... 
<br>
\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(data, 100, MPI_FLOAT, 0, rank, intercomm);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d data sent!\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(cdata, 12, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG,  
<br>
intercomm, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d received string data '%s' from rank %d, tag %d 
<br>
\n&quot;, rank, cdata, status.MPI_SOURCE, status.MPI_TAG);
<br>
<p>&nbsp;&nbsp;&nbsp;sleep(5);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d disconnecting communicator\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_disconnect(&amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d finalizing\n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d Goodbye!\n&quot;, rank);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5550.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5548.php">Robert Taylor: "[OMPI users] trouble building on a macbook"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5600.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name error"</a>
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
