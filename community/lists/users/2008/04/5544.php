<?
$subject_val = "Re: [OMPI users] Client/Server test";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 14:07:55 2008" -->
<!-- isoreceived="20080426180755" -->
<!-- sent="Sat, 26 Apr 2008 14:07:36 -0400" -->
<!-- isosent="20080426180736" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Client/Server test" -->
<!-- id="F1EFDA16-F5DA-44C0-9D17-39E9B3411F99_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51668A37-F7A4-451B-B703-09A3CD69B1AC_at_eecs.utk.edu" -->
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
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 14:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5545.php">Tim Mattox: "Re: [OMPI users] Fwd: hanging orteds"</a>
<li><strong>Previous message:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>In reply to:</strong> <a href="5539.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doesn't seem to work. This is the appfile I'm using:
<br>
<p># Application context files specify each sub-application in the
<br>
# parallel job, one per line.
<br>
# Server
<br>
-np 2 server
<br>
# Client
<br>
-np 1 client 0.1.0:2001
<br>
<p>And the output:
<br>
<p>mpirun --app ./appfile
<br>
Processor 0 (3659, Receiver) initialized
<br>
Processor 1 (3661, Receiver) initialized
<br>
Processor 0 opened port 0.1.0:2001
<br>
Processor 0 waiting for connections on 0.1.0:2001...
<br>
Processor 1 opened port 0.1.1:2000
<br>
Processor 1 waiting for connections on 0.1.1:2000...
<br>
Processor 2 (3663, Sender) initialized
<br>
Processor 2 connecting to '0.1.0:2001'
<br>
<p><p>The client hangs during the connect.
<br>
<p><p>On Apr 26, 2008, at 11:29 AM, Aur&#233;lien Bouteiller wrote:
<br>
<span class="quotelev1">&gt; This scenario is known to be buggy in some versions of Open MPI. It is
</span><br>
<span class="quotelev1">&gt; now fixed in svn version and will be part of the 1.3 release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To quick fix your application, you'll need to spawn both applications
</span><br>
<span class="quotelev1">&gt; with the same mpirun, with MPMD syntax. However this will have the
</span><br>
<span class="quotelev1">&gt; adverse effect of having a larger than expected MPI_COMM_WORLD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 26 avr. 08 &#224; 00:31, Alberto Giannetti a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to connect two MPI programs through the MPI_Comm_connect/
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_Accept API.
</span><br>
<span class="quotelev2">&gt;&gt; This is my server app:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank, count;
</span><br>
<span class="quotelev2">&gt;&gt;   int i;
</span><br>
<span class="quotelev2">&gt;&gt;   float data[100];
</span><br>
<span class="quotelev2">&gt;&gt;   char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d (%d, Receiver) initialized\n&quot;, rank, getpid 
</span><br>
<span class="quotelev2">&gt;&gt; ());
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Open_port(MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Opened port %s\n&quot;, myport);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Waiting for connections on %s...\n&quot;, myport);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;intercomm);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;New connection on port %s\n&quot;, myport);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d waiting for data from new intercomm...\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Recv(data, 100, MPI_FLOAT, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt;&gt; intercomm, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d got %d elements: %f, %f, %f...\n&quot;, rank,
</span><br>
<span class="quotelev2">&gt;&gt; count, data[0], data[1], data[2]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And my client program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int rank, i;
</span><br>
<span class="quotelev2">&gt;&gt;   float data[100];
</span><br>
<span class="quotelev2">&gt;&gt;   char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if( argc &lt; 2 ) {
</span><br>
<span class="quotelev2">&gt;&gt;     fprintf(stderr, &quot;Require server port name\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     exit(-1);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   for( i = 0; i &lt; 100; i++ )
</span><br>
<span class="quotelev2">&gt;&gt;     data[i] = i;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   strcpy(myport, argv[1]);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;intercomm);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d sending data through intercomm...\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Send(data, 100, MPI_FLOAT, 0, 55, intercomm);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;Processor %d data sent!\n&quot;, rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run the server program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 app2
</span><br>
<span class="quotelev2">&gt;&gt; Processor 0 (7916, Receiver) initialized
</span><br>
<span class="quotelev2">&gt;&gt; Processor 1 (7918, Receiver) initialized
</span><br>
<span class="quotelev2">&gt;&gt; Opened port 0.1.0:2000
</span><br>
<span class="quotelev2">&gt;&gt; Waiting for connections on 0.1.0:2000...
</span><br>
<span class="quotelev2">&gt;&gt; Opened port 0.1.1:2001
</span><br>
<span class="quotelev2">&gt;&gt; Waiting for connections on 0.1.1:2001...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the client:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 app1 0.1.0:2000
</span><br>
<span class="quotelev2">&gt;&gt; Processor 0 (7933, Sender) initialized
</span><br>
<span class="quotelev2">&gt;&gt; Processor 0 connecting to '0.1.0:2000'
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/orte/dss/
</span><br>
<span class="quotelev2">&gt;&gt; dss_unpack.c at line 209
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev2">&gt;&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/ompi/communicator/
</span><br>
<span class="quotelev2">&gt;&gt; comm_dyn.c at line 186
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] *** An error occurred in
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_connect
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] *** on communicator
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_SELF
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERR_INTERN:
</span><br>
<span class="quotelev2">&gt;&gt; internal error
</span><br>
<span class="quotelev2">&gt;&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev2">&gt;&gt; (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why do I have an internal error? If I try to connect to 0.1.1:2001
</span><br>
<span class="quotelev2">&gt;&gt; from the client the program hangs.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5545.php">Tim Mattox: "Re: [OMPI users] Fwd: hanging orteds"</a>
<li><strong>Previous message:</strong> <a href="5543.php">George Bosilca: "Re: [OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>In reply to:</strong> <a href="5539.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5597.php">Jeff Squyres: "Re: [OMPI users] Client/Server test"</a>
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
