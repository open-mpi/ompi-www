<?
$subject_val = "[OMPI users] problems with establishing an intercommunicator";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 21:40:58 2011" -->
<!-- isoreceived="20110309024058" -->
<!-- sent="Tue, 08 Mar 2011 20:40:53 -0600" -->
<!-- isosent="20110309024053" -->
<!-- name="Waclaw Kusnierczyk" -->
<!-- email="waku_at_[hidden]" -->
<!-- subject="[OMPI users] problems with establishing an intercommunicator" -->
<!-- id="4D76E8B5.20308_at_idi.ntnu.no" -->
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
<strong>Subject:</strong> [OMPI users] problems with establishing an intercommunicator<br>
<strong>From:</strong> Waclaw Kusnierczyk (<em>waku_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 21:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15820.php">Gus Correa: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Reply:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to connect two independent MPI process groups with an 
<br>
intercommunicator, using ports, as described in sec. 10.4 of the MPI 
<br>
standard.  One group runs a server, the other a client.  The server 
<br>
opens a port, publishes the port's name, and waits for a connection.  
<br>
The client obtains the port's name, and connects to it.  The problem is, 
<br>
the code works if both the server and the client are run in a 
<br>
one-process MPI group each.  If any of the MPI groups has more than one 
<br>
process, the program hangs.
<br>
<p>The following are two fragments of a minimal code example reproducing 
<br>
the problem on my machine.  The server:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int fifo = open(argv[1], O_WRONLY);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(fifo, port, MPI_MAX_PORT_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(fifo);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[server] listening on port '%s'\n&quot;, port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(port, MPI_INFO_NULL, 0, this, &amp;that);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[server] connected\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Close_port(port); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(this);
<br>
<p>and the client:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int fifo = open(buffer, O_RDONLY);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(fifo, port, MPI_MAX_PORT_NAME);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(fifo);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[client] connecting to port '%s'\n&quot;, port);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_connect(port, MPI_INFO_NULL, 0, this, &amp;that);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[client] connected\n&quot;); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(this);
<br>
<p>where 'this' is the local MPI_COMM_WORLD, and the port name is 
<br>
transmitted via a named pipe.  (Complete code together with a makefile 
<br>
is attached for reference.)
<br>
<p>When the compiled codes are run on one MPI process each:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkfifo port
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ./server port &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 1 ./client port
<br>
<p>the connection is established as expected.  With more than one process 
<br>
on either side, however, the execution blocks at the connect-accept step 
<br>
(i.e., after the 'listening' and 'connecting' messages are printed, but 
<br>
before the 'connected' messages are); using the attached code,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make NS=2 run
<br>
<p>or
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;make NC=2 run
<br>
<p>should reproduce the problem.
<br>
<p>I'm using OpenMPI on two different machines: 1.4 on a 2-core laptop, and 
<br>
1.3.3 on a large supercomputer, having the same problem on both.  Where 
<br>
do I go wrong?
<br>
<p>One more, related question:  once I manage to establish an 
<br>
intercommunicator for two multi-process MPI groups, can any process in 
<br>
one group send a message to any process in the other, directly, or does 
<br>
the communication have to go through the root nodes?
<br>
<p>Regards,
<br>
Wacek
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15821/rendezvous.tgz">rendezvous.tgz</a>
</ul>
<!-- attachment="rendezvous.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Previous message:</strong> <a href="15820.php">Gus Correa: "Re: [OMPI users] Problem running openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Reply:</strong> <a href="15822.php">Jeff Squyres: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
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
