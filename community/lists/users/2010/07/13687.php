<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 17:06:10 2010" -->
<!-- isoreceived="20100717210610" -->
<!-- sent="Sat, 17 Jul 2010 15:06:00 -0600" -->
<!-- isosent="20100717210600" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="58C646E9-A82A-4627-99E1-C62ED207ECA2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilJTOp_yRFTqGjvvkuRJ4tXge8Q8StdWHaxVHtr_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 17:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13688.php">Daniel Janzon: "[OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Previous message:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Reopening this thread. In searching another problem I ran across this one in a different context. Turns out there really is a bug here that needs to be addressed.
<br>
<p>I'll try to tackle it this weekend - will update you when done.
<br>
<p><p>On Jun 25, 2010, at 7:23 AM, Philippe wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run a test program which consists of a server creating a
</span><br>
<span class="quotelev1">&gt; port using MPI_Open_port and N clients using MPI_Comm_connect to
</span><br>
<span class="quotelev1">&gt; connect to the server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm able to do so with 1 server and 2 clients, but with 1 server + 3
</span><br>
<span class="quotelev1">&gt; clients, I get the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   [node003:32274] [[37084,0],0]:route_callback tried routing message
</span><br>
<span class="quotelev1">&gt; from [[37084,1],0] to [[40912,1],0]:102, can't find route
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is only happening with the openib BTL. With tcp BTL it works
</span><br>
<span class="quotelev1">&gt; perfectly fine (ofud also works as a matter of fact...). This has been
</span><br>
<span class="quotelev1">&gt; tested on two completely different clusters, with identical results.
</span><br>
<span class="quotelev1">&gt; In either cases, the IB frabic works normally.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated! Several people in my team
</span><br>
<span class="quotelev1">&gt; looked at the problem. Google and the mailing list archive did not
</span><br>
<span class="quotelev1">&gt; provide any clue. I believe that from an MPI standpoint, my test
</span><br>
<span class="quotelev1">&gt; program is valid (and it works with TCP, which make me feel better
</span><br>
<span class="quotelev1">&gt; about the sequence of MPI calls)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Philippe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Background:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I intend to use openMPI to transport data inside a much larger
</span><br>
<span class="quotelev1">&gt; application. Because of that, I cannot used mpiexec. Each process is
</span><br>
<span class="quotelev1">&gt; started by our own &quot;job management&quot; and use a name server to find
</span><br>
<span class="quotelev1">&gt; about each others. Once all the clients are connected, I would like
</span><br>
<span class="quotelev1">&gt; the server to do MPI_Recv to get the data from all the client. I dont
</span><br>
<span class="quotelev1">&gt; care about the order or which client are sending data, as long as I
</span><br>
<span class="quotelev1">&gt; can receive it with on call. Do do that, the clients and the server
</span><br>
<span class="quotelev1">&gt; are going through a series of Comm_accept/Conn_connect/Intercomm_merge
</span><br>
<span class="quotelev1">&gt; so that at the end, all the clients and the server are inside the same
</span><br>
<span class="quotelev1">&gt; intracomm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Steps:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a sample program that show the issue. I tried to make it as
</span><br>
<span class="quotelev1">&gt; short as possible. It needs to be executed on a shared file system
</span><br>
<span class="quotelev1">&gt; like NFS because the server write the port info to a file that the
</span><br>
<span class="quotelev1">&gt; client will read. To reproduce the issue, the following steps should
</span><br>
<span class="quotelev1">&gt; be performed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
</span><br>
<span class="quotelev1">&gt; 1. ssh to the machine that will be the server
</span><br>
<span class="quotelev1">&gt; 2. run ./ben12 3 1
</span><br>
<span class="quotelev1">&gt; 3. ssh to the machine that will be the client #1
</span><br>
<span class="quotelev1">&gt; 4. run ./ben12 3 0
</span><br>
<span class="quotelev1">&gt; 5. repeat step 3-4 for client #2 and #3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the server accept the connection from client #1 and merge it in a new
</span><br>
<span class="quotelev1">&gt; intracomm. It then accept connection from client #2 and merge it. when
</span><br>
<span class="quotelev1">&gt; the client #3 arrives, the server accept the connection, but that
</span><br>
<span class="quotelev1">&gt; cause client #1 and #2 to die with the error above (see the complete
</span><br>
<span class="quotelev1">&gt; trace in the tarball).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The exact steps are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     - server open port
</span><br>
<span class="quotelev1">&gt;     - server does accept
</span><br>
<span class="quotelev1">&gt;     - client #1 does connect
</span><br>
<span class="quotelev1">&gt;     - server and client #1 do merge
</span><br>
<span class="quotelev1">&gt;     - server does accept
</span><br>
<span class="quotelev1">&gt;     - client #2 does connect
</span><br>
<span class="quotelev1">&gt;     - server, client #1 and client #2 do merge
</span><br>
<span class="quotelev1">&gt;     - server does accept
</span><br>
<span class="quotelev1">&gt;     - client #3 does connect
</span><br>
<span class="quotelev1">&gt;     - server, client #1, client #2 and client #3 do merge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My infiniband network works normally with other test programs or
</span><br>
<span class="quotelev1">&gt; applications (MPI or others like Verbs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Info about my setup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
</span><br>
<span class="quotelev1">&gt; 1.4.3, nightly snapshot of 1.5 --- all show the same error)
</span><br>
<span class="quotelev1">&gt;    config.log in the tarball
</span><br>
<span class="quotelev1">&gt;    &quot;ompi_info --all&quot; in the tarball
</span><br>
<span class="quotelev1">&gt;    OFED version = 1.3 installed from RHEL 5.3
</span><br>
<span class="quotelev1">&gt;    Distro = RedHat Entreprise Linux 5.3
</span><br>
<span class="quotelev1">&gt;    Kernel = 2.6.18-128.4.1.el5 x86_64
</span><br>
<span class="quotelev1">&gt;    subnet manager = built-in SM from the cisco/topspin switch
</span><br>
<span class="quotelev1">&gt;    output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
</span><br>
<span class="quotelev1">&gt;    &quot;ulimit -l&quot; says &quot;unlimited&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The tarball contains:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - ben12.c: my test program showing the behavior
</span><br>
<span class="quotelev1">&gt;   - config.log / config.out / make.out / make-install.out /
</span><br>
<span class="quotelev1">&gt; ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
</span><br>
<span class="quotelev1">&gt;   - trace-tcp.txt: output of the server and each client when it works
</span><br>
<span class="quotelev1">&gt; with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev1">&gt;   - trace-ib.txt: output of the server and each client when it fails
</span><br>
<span class="quotelev1">&gt; with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope I provided enough info for somebody to reproduce the problem...
</span><br>
<span class="quotelev1">&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13688.php">Daniel Janzon: "[OMPI users] Ok, I've got OpenMPI set up, now what?!"</a>
<li><strong>Previous message:</strong> <a href="13686.php">Eugene Loh: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13409.php">Philippe: "[OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
