<?
$subject_val = "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 25 09:23:55 2010" -->
<!-- isoreceived="20100625132355" -->
<!-- sent="Fri, 25 Jun 2010 09:23:41 -0400" -->
<!-- isosent="20100625132341" -->
<!-- name="Philippe" -->
<!-- email="philmpi_at_[hidden]" -->
<!-- subject="[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="AANLkTilJTOp_yRFTqGjvvkuRJ4tXge8Q8StdWHaxVHtr_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand<br>
<strong>From:</strong> Philippe (<em>philmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-25 09:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13410.php">Nifty Tom Mitchell: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run a test program which consists of a server creating a
<br>
port using MPI_Open_port and N clients using MPI_Comm_connect to
<br>
connect to the server.
<br>
<p>I'm able to do so with 1 server and 2 clients, but with 1 server + 3
<br>
clients, I get the following error message:
<br>
<p>&nbsp;&nbsp;&nbsp;[node003:32274] [[37084,0],0]:route_callback tried routing message
<br>
from [[37084,1],0] to [[40912,1],0]:102, can't find route
<br>
<p>This is only happening with the openib BTL. With tcp BTL it works
<br>
perfectly fine (ofud also works as a matter of fact...). This has been
<br>
tested on two completely different clusters, with identical results.
<br>
In either cases, the IB frabic works normally.
<br>
<p>Any help would be greatly appreciated! Several people in my team
<br>
looked at the problem. Google and the mailing list archive did not
<br>
provide any clue. I believe that from an MPI standpoint, my test
<br>
program is valid (and it works with TCP, which make me feel better
<br>
about the sequence of MPI calls)
<br>
<p>Regards,
<br>
Philippe.
<br>
<p><p><p>Background:
<br>
<p>I intend to use openMPI to transport data inside a much larger
<br>
application. Because of that, I cannot used mpiexec. Each process is
<br>
started by our own &quot;job management&quot; and use a name server to find
<br>
about each others. Once all the clients are connected, I would like
<br>
the server to do MPI_Recv to get the data from all the client. I dont
<br>
care about the order or which client are sending data, as long as I
<br>
can receive it with on call. Do do that, the clients and the server
<br>
are going through a series of Comm_accept/Conn_connect/Intercomm_merge
<br>
so that at the end, all the clients and the server are inside the same
<br>
intracomm.
<br>
<p>Steps:
<br>
<p>I have a sample program that show the issue. I tried to make it as
<br>
short as possible. It needs to be executed on a shared file system
<br>
like NFS because the server write the port info to a file that the
<br>
client will read. To reproduce the issue, the following steps should
<br>
be performed:
<br>
<p>&nbsp;0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
<br>
&nbsp;1. ssh to the machine that will be the server
<br>
&nbsp;2. run ./ben12 3 1
<br>
&nbsp;3. ssh to the machine that will be the client #1
<br>
&nbsp;4. run ./ben12 3 0
<br>
&nbsp;5. repeat step 3-4 for client #2 and #3
<br>
<p>the server accept the connection from client #1 and merge it in a new
<br>
intracomm. It then accept connection from client #2 and merge it. when
<br>
the client #3 arrives, the server accept the connection, but that
<br>
cause client #1 and #2 to die with the error above (see the complete
<br>
trace in the tarball).
<br>
<p>The exact steps are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server open port
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server does accept
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- client #1 does connect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server and client #1 do merge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server does accept
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- client #2 does connect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server, client #1 and client #2 do merge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server does accept
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- client #3 does connect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- server, client #1, client #2 and client #3 do merge
<br>
<p><p>My infiniband network works normally with other test programs or
<br>
applications (MPI or others like Verbs).
<br>
<p>Info about my setup:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
<br>
1.4.3, nightly snapshot of 1.5 --- all show the same error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;config.log in the tarball
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;ompi_info --all&quot; in the tarball
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OFED version = 1.3 installed from RHEL 5.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Distro = RedHat Entreprise Linux 5.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Kernel = 2.6.18-128.4.1.el5 x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subnet manager = built-in SM from the cisco/topspin switch
<br>
&nbsp;&nbsp;&nbsp;&nbsp;output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;ulimit -l&quot; says &quot;unlimited&quot;
<br>
<p>The tarball contains:
<br>
<p>&nbsp;&nbsp;&nbsp;- ben12.c: my test program showing the behavior
<br>
&nbsp;&nbsp;&nbsp;- config.log / config.out / make.out / make-install.out /
<br>
ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
<br>
&nbsp;&nbsp;&nbsp;- trace-tcp.txt: output of the server and each client when it works
<br>
with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
<br>
&nbsp;&nbsp;&nbsp;- trace-ib.txt: output of the server and each client when it fails
<br>
with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
<br>
<p>I hope I provided enough info for somebody to reproduce the problem...
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13409/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13410.php">Nifty Tom Mitchell: "Re: [OMPI users] problem with mpirun"</a>
<li><strong>Previous message:</strong> <a href="13408.php">Jeff Squyres: "Re: [OMPI users] Unable to include mpich library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13594.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13687.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
