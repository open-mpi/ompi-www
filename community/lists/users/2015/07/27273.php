<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 18:07:13 2015" -->
<!-- isoreceived="20150713220713" -->
<!-- sent="Mon, 13 Jul 2015 18:03:24 -0400" -->
<!-- isosent="20150713220324" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E1C5BEA20D0_at_NRCCENMB1.nrc.ca" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D2239BC7-3ABF-475D-8409-85B120F59536_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-13 18:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
<li><strong>Reply:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph for this quick response.
<br>
<p>In the two attachements you will find the output I got when running the following commands:
<br>
<p>[audet_at_fn1 mpi]$ mpiexec --mca oob_base_verbose 100 -n 1 ./simpleserver 2&gt;&amp;1 | tee server_out.txt
<br>
<p>[audet_at_linux15 mpi]$ mpiexec --mca oob_base_verbose 100 -n 1 ./simpleclient '2444427264.0;tcp://172.17.15.20:56377+2444427265.0;tcp://172.17.15.20:34776:300' 2&gt;&amp;1 | tee client_out.txt
<br>
<p>Martin
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Monday, July 13, 2015 5:29 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail   between two different machines
<br>
<p>Try running it with &#147;&#151;mca oob_base_verbose 100&#148; on both client and server - it will tell us why the connection was refused.
<br>
<p><p><span class="quotelev1">&gt; On Jul 13, 2015, at 2:14 PM, Audet, Martin &lt;Martin.Audet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi OMPI_Developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that I am unable to establish an MPI communication between two independently started MPI programs using the simplest client/server call sequence I can imagine (see the two attached files) when the client and server process are started on different machines. Note that I have no problems when the client and server program run on the same machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example if I do the following on the server machine (running on fn1):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [audet_at_fn1 mpi]$ mpicc -Wall simpleserver.c -o simpleserver
</span><br>
<span class="quotelev1">&gt; [audet_at_fn1 mpi]$ mpiexec -n 1 ./simpleserver
</span><br>
<span class="quotelev1">&gt; Server port = '3054370816.0;tcp://172.17.15.20:54458+3054370817.0;tcp://172.17.15.20:58943:300'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The server prints its port (created with MPI_Open_port()) and wait for a connection by calling MPI_Comm_accept().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now on the client machine (running on linux15) if I compile the client and run it with the above port address on the command line, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [audet_at_linux15 mpi]$ mpicc -Wall simpleclient.c -o simpleclient
</span><br>
<span class="quotelev1">&gt; [audet_at_linux15 mpi]$ mpiexec -n 1 ./simpleclient '3054370816.0;tcp://172.17.15.20:54458+3054370817.0;tcp://172.17.15.20:58943:300'
</span><br>
<span class="quotelev1">&gt; trying to connect...
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev1">&gt; to another process:
</span><br>
<span class="quotelev1">&gt;  Local host:    linux15
</span><br>
<span class="quotelev1">&gt;  Remote host:   linux15
</span><br>
<span class="quotelev1">&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev1">&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev1">&gt; try again.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [linux15:24193] [[13075,0],0]-[[46606,0],0] mca_oob_tcp_peer_send_handler: invalid connection state (6) on socket 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then I have to stop the client program by pressing ^C (and also the server which doesn't seems affected).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And I am almost sure there is no firewall running on linux15.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is not the first MPI client/server application I am developing (with both OpenMPI and mpich).
</span><br>
<span class="quotelev1">&gt; These simple MPI client/server programs work well with mpich (version 3.1.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem happens with both OpenMPI 1.8.3 and 1.8.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linux15 and fn1 run both on Fedora Core 12 Linux (64 bits) and are connected by a Gigabit Ethernet (the normal network).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And again if client and server run on the same machine (either fn1 or linux15) no such problems happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Martin Audet&lt;simpleserver.c&gt;&lt;simpleclient.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27271.php">http://www.open-mpi.org/community/lists/users/2015/07/27271.php</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27272.php">http://www.open-mpi.org/community/lists/users/2015/07/27272.php</a>
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27273/server_out.txt">server_out.txt</a>
</ul>
<!-- attachment="server_out.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27273/client_out.txt">client_out.txt</a>
</ul>
<!-- attachment="client_out.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>In reply to:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
<li><strong>Reply:</strong> <a href="27274.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail	between two different machines"</a>
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
