<?
$subject_val = "Re: [OMPI users] Client/Server test";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 11:30:13 2008" -->
<!-- isoreceived="20080426153013" -->
<!-- sent="Sat, 26 Apr 2008 11:29:56 -0400" -->
<!-- isosent="20080426152956" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Client/Server test" -->
<!-- id="51668A37-F7A4-451B-B703-09A3CD69B1AC_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E3CCE4F-84BC-46B4-B8C8-877C05FDAA10_at_gmail.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 11:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5540.php">Daniel: "[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>Previous message:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>In reply to:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This scenario is known to be buggy in some versions of Open MPI. It is  
<br>
now fixed in svn version and will be part of the 1.3 release.
<br>
<p>To quick fix your application, you'll need to spawn both applications  
<br>
with the same mpirun, with MPMD syntax. However this will have the  
<br>
adverse effect of having a larger than expected MPI_COMM_WORLD.
<br>
<p>Aurelien
<br>
<p><p>Le 26 avr. 08 &#224; 00:31, Alberto Giannetti a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I want to connect two MPI programs through the MPI_Comm_connect/
</span><br>
<span class="quotelev1">&gt; MPI_Comm_Accept API.
</span><br>
<span class="quotelev1">&gt; This is my server app:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, count;
</span><br>
<span class="quotelev1">&gt;   int i;
</span><br>
<span class="quotelev1">&gt;   float data[100];
</span><br>
<span class="quotelev1">&gt;   char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;   MPI_Status status;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d (%d, Receiver) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Open_port(MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Opened port %s\n&quot;, myport);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Waiting for connections on %s...\n&quot;, myport);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,  
</span><br>
<span class="quotelev1">&gt; &amp;intercomm);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;New connection on port %s\n&quot;, myport);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d waiting for data from new intercomm...\n&quot;,
</span><br>
<span class="quotelev1">&gt; rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Recv(data, 100, MPI_FLOAT, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt; intercomm, &amp;status);
</span><br>
<span class="quotelev1">&gt;   MPI_Get_count(&amp;status, MPI_FLOAT, &amp;count);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d got %d elements: %f, %f, %f...\n&quot;, rank,
</span><br>
<span class="quotelev1">&gt; count, data[0], data[1], data[2]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And my client program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int rank, i;
</span><br>
<span class="quotelev1">&gt;   float data[100];
</span><br>
<span class="quotelev1">&gt;   char myport[MPI_MAX_PORT_NAME];
</span><br>
<span class="quotelev1">&gt;   MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d (%d, Sender) initialized\n&quot;, rank, getpid());
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if( argc &lt; 2 ) {
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;Require server port name\n&quot;);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     exit(-1);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for( i = 0; i &lt; 100; i++ )
</span><br>
<span class="quotelev1">&gt;     data[i] = i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   strcpy(myport, argv[1]);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d connecting to '%s'\n&quot;, rank, myport);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_connect(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,
</span><br>
<span class="quotelev1">&gt; &amp;intercomm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d sending data through intercomm...\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;   MPI_Send(data, 100, MPI_FLOAT, 0, 55, intercomm);
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Processor %d data sent!\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run the server program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 app2
</span><br>
<span class="quotelev1">&gt; Processor 0 (7916, Receiver) initialized
</span><br>
<span class="quotelev1">&gt; Processor 1 (7918, Receiver) initialized
</span><br>
<span class="quotelev1">&gt; Opened port 0.1.0:2000
</span><br>
<span class="quotelev1">&gt; Waiting for connections on 0.1.0:2000...
</span><br>
<span class="quotelev1">&gt; Opened port 0.1.1:2001
</span><br>
<span class="quotelev1">&gt; Waiting for connections on 0.1.1:2001...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then the client:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 app1 0.1.0:2000
</span><br>
<span class="quotelev1">&gt; Processor 0 (7933, Sender) initialized
</span><br>
<span class="quotelev1">&gt; Processor 0 connecting to '0.1.0:2000'
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/orte/dss/
</span><br>
<span class="quotelev1">&gt; dss_unpack.c at line 209
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] [0,1,0] ORTE_ERROR_LOG: Not
</span><br>
<span class="quotelev1">&gt; found in file /tmp/buildpackage-3432/openmpi-1.2.4/ompi/communicator/
</span><br>
<span class="quotelev1">&gt; comm_dyn.c at line 186
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] *** An error occurred in
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] *** on communicator
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SELF
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERR_INTERN:
</span><br>
<span class="quotelev1">&gt; internal error
</span><br>
<span class="quotelev1">&gt; [alberto-giannettis-computer.local:07933] *** MPI_ERRORS_ARE_FATAL
</span><br>
<span class="quotelev1">&gt; (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why do I have an internal error? If I try to connect to 0.1.1:2001
</span><br>
<span class="quotelev1">&gt; from the client the program hangs.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5540.php">Daniel: "[OMPI users] IRIX: unrecognized opcode `leaf(opal_atomic_mb)'"</a>
<li><strong>Previous message:</strong> <a href="5538.php">Jeff Squyres: "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<li><strong>In reply to:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Reply:</strong> <a href="5544.php">Alberto Giannetti: "Re: [OMPI users] Client/Server test"</a>
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
