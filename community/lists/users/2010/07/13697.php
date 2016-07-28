<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 19 03:37:36 2010" -->
<!-- isoreceived="20100719073736" -->
<!-- sent="Mon, 19 Jul 2010 01:37:26 -0600" -->
<!-- isosent="20100719073726" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="24F88EAB-EE08-4DC6-8C9E-8E98B4392F05_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTikiHQT2tEX7z9EA9AmhJN8R8RtXIq32JArpeX_H_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-19 03:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13696.php">Stefan Kuhne: "[OMPI users] MPE logging GUI"</a>
<li><strong>In reply to:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2010, at 4:09 PM, Philippe wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for investigating.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've applied the two patches you mentioned earlier and ran with the
</span><br>
<span class="quotelev1">&gt; ompi server. Although i was able to runn our standalone test, when I
</span><br>
<span class="quotelev1">&gt; integrated the changes to our code, the processes entered a crazy loop
</span><br>
<span class="quotelev1">&gt; and allocated all the memory available when calling MPI_Port_Connect.
</span><br>
<span class="quotelev1">&gt; I was not able to identify why it works standalone but not integrated
</span><br>
<span class="quotelev1">&gt; with our code. If I found why, I'll let your know.
</span><br>
<p>How many processes are we talking about?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; looking forward to your findings. We'll be happy to test any patches
</span><br>
<span class="quotelev1">&gt; if you have some!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; p.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 17, 2010 at 9:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I can reproduce this problem. Frankly, I don't think this ever worked with OMPI, and I'm not sure how the choice of BTL makes a difference.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program is crashing in the communicator definition, which involves a communication over our internal out-of-band messaging system. That system has zero connection to any BTL, so it should crash either way.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regardless, I will play with this a little as time allows. Thanks for the reproducer!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 25, 2010, at 7:23 AM, Philippe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to run a test program which consists of a server creating a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port using MPI_Open_port and N clients using MPI_Comm_connect to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connect to the server.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm able to do so with 1 server and 2 clients, but with 1 server + 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clients, I get the following error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   [node003:32274] [[37084,0],0]:route_callback tried routing message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from [[37084,1],0] to [[40912,1],0]:102, can't find route
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is only happening with the openib BTL. With tcp BTL it works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perfectly fine (ofud also works as a matter of fact...). This has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tested on two completely different clusters, with identical results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In either cases, the IB frabic works normally.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be greatly appreciated! Several people in my team
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looked at the problem. Google and the mailing list archive did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide any clue. I believe that from an MPI standpoint, my test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program is valid (and it works with TCP, which make me feel better
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the sequence of MPI calls)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philippe.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Background:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I intend to use openMPI to transport data inside a much larger
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application. Because of that, I cannot used mpiexec. Each process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started by our own &quot;job management&quot; and use a name server to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about each others. Once all the clients are connected, I would like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the server to do MPI_Recv to get the data from all the client. I dont
</span><br>
<span class="quotelev3">&gt;&gt;&gt; care about the order or which client are sending data, as long as I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can receive it with on call. Do do that, the clients and the server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are going through a series of Comm_accept/Conn_connect/Intercomm_merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that at the end, all the clients and the server are inside the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intracomm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steps:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a sample program that show the issue. I tried to make it as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; short as possible. It needs to be executed on a shared file system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like NFS because the server write the port info to a file that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; client will read. To reproduce the issue, the following steps should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be performed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. ssh to the machine that will be the server
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. run ./ben12 3 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. ssh to the machine that will be the client #1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. run ./ben12 3 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. repeat step 3-4 for client #2 and #3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the server accept the connection from client #1 and merge it in a new
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intracomm. It then accept connection from client #2 and merge it. when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the client #3 arrives, the server accept the connection, but that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause client #1 and #2 to die with the error above (see the complete
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trace in the tarball).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The exact steps are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server open port
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server does accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - client #1 does connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server and client #1 do merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server does accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - client #2 does connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server, client #1 and client #2 do merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server does accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - client #3 does connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     - server, client #1, client #2 and client #3 do merge
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My infiniband network works normally with other test programs or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications (MPI or others like Verbs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Info about my setup:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.3, nightly snapshot of 1.5 --- all show the same error)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    config.log in the tarball
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;ompi_info --all&quot; in the tarball
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OFED version = 1.3 installed from RHEL 5.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Distro = RedHat Entreprise Linux 5.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Kernel = 2.6.18-128.4.1.el5 x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    subnet manager = built-in SM from the cisco/topspin switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &quot;ulimit -l&quot; says &quot;unlimited&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tarball contains:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - ben12.c: my test program showing the behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - config.log / config.out / make.out / make-install.out /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - trace-tcp.txt: output of the server and each client when it works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - trace-ib.txt: output of the server and each client when it fails
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope I provided enough info for somebody to reproduce the problem...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="13696.php">Stefan Kuhne: "[OMPI users] MPE logging GUI"</a>
<li><strong>In reply to:</strong> <a href="13694.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
