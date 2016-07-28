<?
$subject_val = "Re: [OMPI users] problems with establishing an intercommunicator";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  9 10:44:24 2011" -->
<!-- isoreceived="20110309154424" -->
<!-- sent="Wed, 9 Mar 2011 10:44:19 -0500" -->
<!-- isosent="20110309154419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with establishing an intercommunicator" -->
<!-- id="D0ABC68C-F2B6-4C58-9FCB-5E0F2077F622_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D76E8B5.20308_at_idi.ntnu.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with establishing an intercommunicator<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-09 10:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>In reply to:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Reply:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI_Comm_connect and MPI_Comm_accept calls are collective over their entire communicators.
<br>
<p>So if you pass MPI_COMM_WORLD into MPI_Comm_connect/accept, then *all* processes in those respective MPI_COMM_WORLD's need to call MPI_Comm_connect/accept.
<br>
<p>For your 2nd question, when you get this to work, then all processes can send directly to each other -- Open MPI doesn't currently have any &quot;routing&quot; capabilities (e.g., sending through some other process to get to a 3rd process).
<br>
<p>On Mar 8, 2011, at 9:40 PM, Waclaw Kusnierczyk wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to connect two independent MPI process groups with an intercommunicator, using ports, as described in sec. 10.4 of the MPI standard.  One group runs a server, the other a client.  The server opens a port, publishes the port's name, and waits for a connection.  The client obtains the port's name, and connects to it.  The problem is, the code works if both the server and the client are run in a one-process MPI group each.  If any of the MPI groups has more than one process, the program hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following are two fragments of a minimal code example reproducing the problem on my machine.  The server:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;        MPI_Open_port(MPI_INFO_NULL, port);
</span><br>
<span class="quotelev1">&gt;        int fifo = open(argv[1], O_WRONLY);
</span><br>
<span class="quotelev1">&gt;        write(fifo, port, MPI_MAX_PORT_NAME);
</span><br>
<span class="quotelev1">&gt;        close(fifo);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;[server] listening on port '%s'\n&quot;, port);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_accept(port, MPI_INFO_NULL, 0, this, &amp;that);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;[server] connected\n&quot;);
</span><br>
<span class="quotelev1">&gt;        MPI_Close_port(port); }
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(this);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the client:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;        int fifo = open(buffer, O_RDONLY);
</span><br>
<span class="quotelev1">&gt;        read(fifo, port, MPI_MAX_PORT_NAME);
</span><br>
<span class="quotelev1">&gt;        close(fifo);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;[client] connecting to port '%s'\n&quot;, port);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_connect(port, MPI_INFO_NULL, 0, this, &amp;that);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;[client] connected\n&quot;); }
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier(this);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where 'this' is the local MPI_COMM_WORLD, and the port name is transmitted via a named pipe.  (Complete code together with a makefile is attached for reference.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the compiled codes are run on one MPI process each:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mkfifo port
</span><br>
<span class="quotelev1">&gt;    mpirun -np 1 ./server port &amp;
</span><br>
<span class="quotelev1">&gt;    mpirun -np 1 ./client port
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the connection is established as expected.  With more than one process on either side, however, the execution blocks at the connect-accept step (i.e., after the 'listening' and 'connecting' messages are printed, but before the 'connected' messages are); using the attached code,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make NS=2 run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    make NC=2 run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI on two different machines: 1.4 on a 2-core laptop, and 1.3.3 on a large supercomputer, having the same problem on both.  Where do I go wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more, related question:  once I manage to establish an intercommunicator for two multi-process MPI groups, can any process in one group send a message to any process in the other, directly, or does the communication have to go through the root nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Wacek
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;rendezvous.tgz&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15823.php">Brice Goglin: "Re: [OMPI users] anybody tried OMPI with gpudirect?"</a>
<li><strong>Previous message:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>In reply to:</strong> <a href="15821.php">Waclaw Kusnierczyk: "[OMPI users] problems with establishing an intercommunicator"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
<li><strong>Reply:</strong> <a href="15824.php">Waclaw Kusnierczyk: "Re: [OMPI users] problems with establishing an intercommunicator"</a>
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
