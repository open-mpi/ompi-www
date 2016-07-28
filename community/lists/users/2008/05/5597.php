<?
$subject_val = "Re: [OMPI users] Client/Server test";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 09:28:28 2008" -->
<!-- isoreceived="20080505132828" -->
<!-- sent="Mon, 5 May 2008 09:28:20 -0400" -->
<!-- isosent="20080505132820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Client/Server test" -->
<!-- id="6F21E7E4-A68A-4B13-8D3A-6661983AD3F7_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1EFDA16-F5DA-44C0-9D17-39E9B3411F99_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Client/Server test<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 09:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="5596.php">Jeff Squyres: "Re: [OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's been a lot of turnover in this exact portion of the code base  
<br>
on the SVN trunk in the last week or three.
<br>
<p>Ralph -- can you comment on where we are?
<br>
<p><p>On Apr 26, 2008, at 2:07 PM, Alberto Giannetti wrote:
<br>
<p><span class="quotelev1">&gt; Doesn't seem to work. This is the appfile I'm using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Application context files specify each sub-application in the
</span><br>
<span class="quotelev1">&gt; # parallel job, one per line.
</span><br>
<span class="quotelev1">&gt; # Server
</span><br>
<span class="quotelev1">&gt; -np 2 server
</span><br>
<span class="quotelev1">&gt; # Client
</span><br>
<span class="quotelev1">&gt; -np 1 client 0.1.0:2001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --app ./appfile
</span><br>
<span class="quotelev1">&gt; Processor 0 (3659, Receiver) initialized
</span><br>
<span class="quotelev1">&gt; Processor 1 (3661, Receiver) initialized
</span><br>
<span class="quotelev1">&gt; Processor 0 opened port 0.1.0:2001
</span><br>
<span class="quotelev1">&gt; Processor 0 waiting for connections on 0.1.0:2001...
</span><br>
<span class="quotelev1">&gt; Processor 1 opened port 0.1.1:2000
</span><br>
<span class="quotelev1">&gt; Processor 1 waiting for connections on 0.1.1:2000...
</span><br>
<span class="quotelev1">&gt; Processor 2 (3663, Sender) initialized
</span><br>
<span class="quotelev1">&gt; Processor 2 connecting to '0.1.0:2001'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The client hangs during the connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2008, at 11:29 AM, Aur&#233;lien Bouteiller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This scenario is known to be buggy in some versions of Open MPI. It  
</span><br>
<span class="quotelev2">&gt;&gt; is
</span><br>
<span class="quotelev2">&gt;&gt; now fixed in svn version and will be part of the 1.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To quick fix your application, you'll need to spawn both applications
</span><br>
<span class="quotelev2">&gt;&gt; with the same mpirun, with MPMD syntax. However this will have the
</span><br>
<span class="quotelev2">&gt;&gt; adverse effect of having a larger than expected MPI_COMM_WORLD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 26 avr. 08 &#224; 00:31, Alberto Giannetti a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to connect two MPI programs through the MPI_Comm_connect/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_Accept API.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is my server app:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rank, count;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  float data[100];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm intercomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d (%d, Receiver) initialized\n&quot;, rank, getpid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Open_port(MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Opened port %s\n&quot;, myport);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Waiting for connections on %s...\n&quot;, myport);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;New connection on port %s\n&quot;, myport);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d waiting for data from new intercomm...\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Recv(data, 100, MPI_FLOAT, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercomm, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d got %d elements: %f, %f, %f...\n&quot;, rank,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; count, data[0], data[1], data[2]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And my client program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int rank, i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  float data[100];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm intercomm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  if( argc &lt; 2 ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    fprintf(stderr, &quot;Require server port name\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    exit(-1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  for( i = 0; i &lt; 100; i++ )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    data[i] = i;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  strcpy(myport, argv[1]);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d sending data through intercomm...\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Send(data, 100, MPI_FLOAT, 0, 55, intercomm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  printf(&quot;Processor %d data sent!\n&quot;, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run the server program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 app2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor 0 (7916, Receiver) initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor 1 (7918, Receiver) initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opened port 0.1.0:2000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Waiting for connections on 0.1.0:2000...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opened port 0.1.1:2001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Waiting for connections on 0.1.1:2001...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then the client:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 app1 0.1.0:2000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor 0 (7933, Sender) initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor 0 connecting to '0.1.0:2000'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/orte/dss/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dss_unpack.c at line 209
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/ompi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicator/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comm_dyn.c at line 186
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] *** An error occurred in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] *** on communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_SELF
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERR_INTERN:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why do I have an internal error? If I try to connect to 0.1.1:2001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the client the program hangs.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev2">&gt;&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; * University of Tennessee
</span><br>
<span class="quotelev2">&gt;&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev2">&gt;&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt; * 865 974 6321
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5598.php">Jeff Squyres: "Re: [OMPI users] Optimal distribution of low and high CPU processes on a heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="5596.php">Jeff Squyres: "Re: [OMPI users] IRIX Assembler messages unrecognized opcode &gt; `leaf(opal_atomic_mb)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/04/5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
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
