<?
$subject_val = "[OMPI users] Client/Server test";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 00:32:13 2008" -->
<!-- isoreceived="20080426043213" -->
<!-- sent="Sat, 26 Apr 2008 00:31:54 -0400" -->
<!-- isosent="20080426043154" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="[OMPI users] Client/Server test" -->
<!-- id="5E3CCE4F-84BC-46B4-B8C8-877C05FDAA10_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Client/Server test<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 00:31:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>Previous message:</strong> <a href="5536.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries?	Withdrawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to connect two MPI programs through the MPI_Comm_connect/ 
<br>
MPI_Comm_Accept API.
<br>
This is my server app:
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, count;
<br>
&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;float data[100];
<br>
&nbsp;&nbsp;&nbsp;char myport[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d (%d, Receiver) initialized\n&quot;, rank, getpid());
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, myport);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Opened port %s\n&quot;, myport);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Waiting for connections on %s...\n&quot;, myport);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;New connection on port %s\n&quot;, myport);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d waiting for data from new intercomm...\n&quot;,  
<br>
rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv(data, 100, MPI_FLOAT, MPI_ANY_SOURCE, MPI_ANY_TAG,  
<br>
intercomm, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d got %d elements: %f, %f, %f...\n&quot;, rank,  
<br>
count, data[0], data[1], data[2]);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>And my client program:
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, i;
<br>
&nbsp;&nbsp;&nbsp;float data[100];
<br>
&nbsp;&nbsp;&nbsp;char myport[MPI_MAX_PORT_NAME];
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
<br>
<p>&nbsp;&nbsp;&nbsp;if( argc &lt; 2 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Require server port name\n&quot;);
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
<p>&nbsp;&nbsp;&nbsp;strcpy(myport, argv[1]);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,  
<br>
&amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d sending data through intercomm...\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Send(data, 100, MPI_FLOAT, 0, 55, intercomm);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d data sent!\n&quot;, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><p>I run the server program:
<br>
<p>mpirun -np 2 app2
<br>
Processor 0 (7916, Receiver) initialized
<br>
Processor 1 (7918, Receiver) initialized
<br>
Opened port 0.1.0:2000
<br>
Waiting for connections on 0.1.0:2000...
<br>
Opened port 0.1.1:2001
<br>
Waiting for connections on 0.1.1:2001...
<br>
<p><p>Then the client:
<br>
<p>mpirun -np 1 app1 0.1.0:2000
<br>
Processor 0 (7933, Sender) initialized
<br>
Processor 0 connecting to '0.1.0:2000'
<br>
[alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not  
<br>
found in file /tmp/buildpackage-3432/openmpi-1.2.4/orte/dss/ 
<br>
dss_unpack.c at line 209
<br>
[alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not  
<br>
found in file /tmp/buildpackage-3432/openmpi-1.2.4/ompi/communicator/ 
<br>
comm_dyn.c at line 186
<br>
[alberto-giannettis-computer.local:07933] *** An error occurred in  
<br>
MPI_Comm_connect
<br>
[alberto-giannettis-computer.local:07933] *** on communicator  
<br>
MPI_COMM_SELF
<br>
[alberto-giannettis-computer.local:07933] *** MPI_ERR_INTERN:  
<br>
internal error
<br>
[alberto-giannettis-computer.local:07933] *** MPI_ERRORS_ARE_FATAL  
<br>
(goodbye)
<br>
<p><p>Why do I have an internal error? If I try to connect to 0.1.1:2001  
<br>
from the client the program hangs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>Previous message:</strong> <a href="5536.php">Dirk Eddelbuettel: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries?	Withdrawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
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
