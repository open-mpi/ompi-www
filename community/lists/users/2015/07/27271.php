<?
$subject_val = "[OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 17:14:20 2015" -->
<!-- isoreceived="20150713211420" -->
<!-- sent="Mon, 13 Jul 2015 14:14:15 -0700" -->
<!-- isosent="20150713211415" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines" -->
<!-- id="0B97558E6915A6419306E91FD1DACA0E1C5BEA20CF_at_NRCCENMB1.nrc.ca" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-13 17:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Reply:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OMPI_Developers,
<br>
<p>It seems that I am unable to establish an MPI communication between two independently started MPI programs using the simplest client/server call sequence I can imagine (see the two attached files) when the client and server process are started on different machines. Note that I have no problems when the client and server program run on the same machine.
<br>
<p>For example if I do the following on the server machine (running on fn1):
<br>
<p>[audet_at_fn1 mpi]$ mpicc -Wall simpleserver.c -o simpleserver
<br>
[audet_at_fn1 mpi]$ mpiexec -n 1 ./simpleserver
<br>
Server port = '3054370816.0;tcp://172.17.15.20:54458+3054370817.0;tcp://172.17.15.20:58943:300'
<br>
<p>The server prints its port (created with MPI_Open_port()) and wait for a connection by calling MPI_Comm_accept().
<br>
<p>Now on the client machine (running on linux15) if I compile the client and run it with the above port address on the command line, I get:
<br>
<p>[audet_at_linux15 mpi]$ mpicc -Wall simpleclient.c -o simpleclient
<br>
[audet_at_linux15 mpi]$ mpiexec -n 1 ./simpleclient '3054370816.0;tcp://172.17.15.20:54458+3054370817.0;tcp://172.17.15.20:58943:300'
<br>
trying to connect...
<br>
------------------------------------------------------------
<br>
A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    linux15
<br>
&nbsp;&nbsp;Remote host:   linux15
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
[linux15:24193] [[13075,0],0]-[[46606,0],0] mca_oob_tcp_peer_send_handler: invalid connection state (6) on socket 16
<br>
<p>And then I have to stop the client program by pressing ^C (and also the server which doesn't seems affected).
<br>
<p>What's wrong ?
<br>
<p>And I am almost sure there is no firewall running on linux15.
<br>
<p>It is not the first MPI client/server application I am developing (with both OpenMPI and mpich).
<br>
These simple MPI client/server programs work well with mpich (version 3.1.3).
<br>
<p>This problem happens with both OpenMPI 1.8.3 and 1.8.6
<br>
<p>linux15 and fn1 run both on Fedora Core 12 Linux (64 bits) and are connected by a Gigabit Ethernet (the normal network).
<br>
<p>And again if client and server run on the same machine (either fn1 or linux15) no such problems happens.
<br>
<p>Thanks in advance,
<br>
<p>Martin Audet
<br>


<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27271/simpleserver.c">simpleserver.c</a>
</ul>
<!-- attachment="simpleserver.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27271/simpleclient.c">simpleclient.c</a>
</ul>
<!-- attachment="simpleclient.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Previous message:</strong> <a href="27270.php">Nils Smeds: "[OMPI users] binding/mapping using command line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
<li><strong>Reply:</strong> <a href="27272.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept() / MPI_Comm_connect() fail between two different machines"</a>
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
