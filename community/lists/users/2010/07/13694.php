<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 18 18:09:40 2010" -->
<!-- isoreceived="20100718220940" -->
<!-- sent="Sun, 18 Jul 2010 16:09:35 -0600" -->
<!-- isosent="20100718220935" -->
<!-- name="Philippe" -->
<!-- email="philmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="AANLkTikiHQT2tEX7z9EA9AmhJN8R8RtXIq32JArpeX_H_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1BA70AF7-5000-4C04-9065-B7FAF4E90E48_at_open-mpi.org" -->
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
<strong>From:</strong> Philippe (<em>philmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-18 18:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>In reply to:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>thanks for investigating.
<br>
<p>I've applied the two patches you mentioned earlier and ran with the
<br>
ompi server. Although i was able to runn our standalone test, when I
<br>
integrated the changes to our code, the processes entered a crazy loop
<br>
and allocated all the memory available when calling MPI_Port_Connect.
<br>
I was not able to identify why it works standalone but not integrated
<br>
with our code. If I found why, I'll let your know.
<br>
<p>looking forward to your findings. We'll be happy to test any patches
<br>
if you have some!
<br>
<p>p.
<br>
<p>On Sat, Jul 17, 2010 at 9:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Okay, I can reproduce this problem. Frankly, I don't think this ever worked with OMPI, and I'm not sure how the choice of BTL makes a difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is crashing in the communicator definition, which involves a communication over our internal out-of-band messaging system. That system has zero connection to any BTL, so it should crash either way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, I will play with this a little as time allows. Thanks for the reproducer!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2010, at 7:23 AM, Philippe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run a test program which consists of a server creating a
</span><br>
<span class="quotelev2">&gt;&gt; port using MPI_Open_port and N clients using MPI_Comm_connect to
</span><br>
<span class="quotelev2">&gt;&gt; connect to the server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm able to do so with 1 server and 2 clients, but with 1 server + 3
</span><br>
<span class="quotelev2">&gt;&gt; clients, I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; [node003:32274] [[37084,0],0]:route_callback tried routing message
</span><br>
<span class="quotelev2">&gt;&gt; from [[37084,1],0] to [[40912,1],0]:102, can't find route
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is only happening with the openib BTL. With tcp BTL it works
</span><br>
<span class="quotelev2">&gt;&gt; perfectly fine (ofud also works as a matter of fact...). This has been
</span><br>
<span class="quotelev2">&gt;&gt; tested on two completely different clusters, with identical results.
</span><br>
<span class="quotelev2">&gt;&gt; In either cases, the IB frabic works normally.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated! Several people in my team
</span><br>
<span class="quotelev2">&gt;&gt; looked at the problem. Google and the mailing list archive did not
</span><br>
<span class="quotelev2">&gt;&gt; provide any clue. I believe that from an MPI standpoint, my test
</span><br>
<span class="quotelev2">&gt;&gt; program is valid (and it works with TCP, which make me feel better
</span><br>
<span class="quotelev2">&gt;&gt; about the sequence of MPI calls)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Philippe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Background:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I intend to use openMPI to transport data inside a much larger
</span><br>
<span class="quotelev2">&gt;&gt; application. Because of that, I cannot used mpiexec. Each process is
</span><br>
<span class="quotelev2">&gt;&gt; started by our own &quot;job management&quot; and use a name server to find
</span><br>
<span class="quotelev2">&gt;&gt; about each others. Once all the clients are connected, I would like
</span><br>
<span class="quotelev2">&gt;&gt; the server to do MPI_Recv to get the data from all the client. I dont
</span><br>
<span class="quotelev2">&gt;&gt; care about the order or which client are sending data, as long as I
</span><br>
<span class="quotelev2">&gt;&gt; can receive it with on call. Do do that, the clients and the server
</span><br>
<span class="quotelev2">&gt;&gt; are going through a series of Comm_accept/Conn_connect/Intercomm_merge
</span><br>
<span class="quotelev2">&gt;&gt; so that at the end, all the clients and the server are inside the same
</span><br>
<span class="quotelev2">&gt;&gt; intracomm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a sample program that show the issue. I tried to make it as
</span><br>
<span class="quotelev2">&gt;&gt; short as possible. It needs to be executed on a shared file system
</span><br>
<span class="quotelev2">&gt;&gt; like NFS because the server write the port info to a file that the
</span><br>
<span class="quotelev2">&gt;&gt; client will read. To reproduce the issue, the following steps should
</span><br>
<span class="quotelev2">&gt;&gt; be performed:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 1. ssh to the machine that will be the server
</span><br>
<span class="quotelev2">&gt;&gt; 2. run ./ben12 3 1
</span><br>
<span class="quotelev2">&gt;&gt; 3. ssh to the machine that will be the client #1
</span><br>
<span class="quotelev2">&gt;&gt; 4. run ./ben12 3 0
</span><br>
<span class="quotelev2">&gt;&gt; 5. repeat step 3-4 for client #2 and #3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the server accept the connection from client #1 and merge it in a new
</span><br>
<span class="quotelev2">&gt;&gt; intracomm. It then accept connection from client #2 and merge it. when
</span><br>
<span class="quotelev2">&gt;&gt; the client #3 arrives, the server accept the connection, but that
</span><br>
<span class="quotelev2">&gt;&gt; cause client #1 and #2 to die with the error above (see the complete
</span><br>
<span class="quotelev2">&gt;&gt; trace in the tarball).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The exact steps are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server open port
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - client #1 does connect
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server and client #1 do merge
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - client #2 does connect
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1 and client #2 do merge
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - client #3 does connect
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1, client #2 and client #3 do merge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My infiniband network works normally with other test programs or
</span><br>
<span class="quotelev2">&gt;&gt; applications (MPI or others like Verbs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Info about my setup:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3, nightly snapshot of 1.5 --- all show the same error)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;config.log in the tarball
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;&quot;ompi_info --all&quot; in the tarball
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;OFED version = 1.3 installed from RHEL 5.3
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;Distro = RedHat Entreprise Linux 5.3
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;Kernel = 2.6.18-128.4.1.el5 x86_64
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;subnet manager = built-in SM from the cisco/topspin switch
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160;&quot;ulimit -l&quot; says &quot;unlimited&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The tarball contains:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; - ben12.c: my test program showing the behavior
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; - config.log / config.out / make.out / make-install.out /
</span><br>
<span class="quotelev2">&gt;&gt; ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; - trace-tcp.txt: output of the server and each client when it works
</span><br>
<span class="quotelev2">&gt;&gt; with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; - trace-ib.txt: output of the server and each client when it fails
</span><br>
<span class="quotelev2">&gt;&gt; with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope I provided enough info for somebody to reproduce the problem...
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13695.php">Tim Prince: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Previous message:</strong> <a href="13693.php">Bibrak Qamar: "[OMPI users] MPICH2 is working OpenMPI Not"</a>
<li><strong>In reply to:</strong> <a href="13689.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13697.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13698.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
