<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 09:44:45 2010" -->
<!-- isoreceived="20100721134445" -->
<!-- sent="Wed, 21 Jul 2010 09:44:39 -0400" -->
<!-- isosent="20100721134439" -->
<!-- name="Philippe" -->
<!-- email="philmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="AANLkTinxfFYoi3e773XDuvoTxrUat1AqQOsercia4W91_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="593E4202-7A5F-406F-AD8E-42554E841F3B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-21 09:44:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13720.php">Brian Smith: "[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Sorry for the late reply -- I was away on vacation.
<br>
<p>regarding your earlier question about how many processes where
<br>
involved when the memory was entirely allocated, it was only two, a
<br>
sender and a receiver. I'm still trying to pinpoint what can be
<br>
different between the standalone case and the &quot;integrated&quot; case. I
<br>
will try to find out what part of the code is allocating memory in a
<br>
loop.
<br>
<p><p>On Tue, Jul 20, 2010 at 12:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Well, I finally managed to make this work without the required ompi-server rendezvous point. The fix is only in the devel trunk right now - I'll have to ask the release managers for 1.5 and 1.4 if they want it ported to those series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>great -- i'll give it a try
<br>
<p><span class="quotelev1">&gt; On the notion of integrating OMPI to your launch environment: remember that we don't necessarily require that you use mpiexec for that purpose. If your launch environment provides just a little info in the environment of the launched procs, we can usually devise a method that allows the procs to perform an MPI_Init as a single job without all this work you are doing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm working on creating operators using MPI for the IBM product
<br>
&quot;InfoSphere Streams&quot;. It has its own launching mechanism to start the
<br>
processes. However I can pass some information to the processes that
<br>
belong to the same job (Streams job -- which should neatly map to MPI
<br>
job).
<br>
<p><span class="quotelev1">&gt; Only difference is that your procs will all block in MPI_Init until they -all- have executed that function. If that isn't a problem, this would be a much more scalable and reliable method than doing it thru massive calls to MPI_Port_connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>in the general case, that would be a problem, but for my prototype,
<br>
this is acceptable.
<br>
<p>In general, each process is composed of operators, some may be MPI
<br>
related and some may not. But in my case, I know ahead of time which
<br>
processes will be part of the MPI job, so I can easily deal with the
<br>
fact that they would block on MPI_init (actually -- MPI_thread_init
<br>
since its using a lot of threads).
<br>
<p>Is there a documentation or example I can use to see what information
<br>
I can pass to the processes to enable that? Is it just environment
<br>
variables?
<br>
<p>Many thanks!
<br>
p.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 18, 2010, at 4:09 PM, Philippe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for investigating.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've applied the two patches you mentioned earlier and ran with the
</span><br>
<span class="quotelev2">&gt;&gt; ompi server. Although i was able to runn our standalone test, when I
</span><br>
<span class="quotelev2">&gt;&gt; integrated the changes to our code, the processes entered a crazy loop
</span><br>
<span class="quotelev2">&gt;&gt; and allocated all the memory available when calling MPI_Port_Connect.
</span><br>
<span class="quotelev2">&gt;&gt; I was not able to identify why it works standalone but not integrated
</span><br>
<span class="quotelev2">&gt;&gt; with our code. If I found why, I'll let your know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; looking forward to your findings. We'll be happy to test any patches
</span><br>
<span class="quotelev2">&gt;&gt; if you have some!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; p.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jul 17, 2010 at 9:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, I can reproduce this problem. Frankly, I don't think this ever worked with OMPI, and I'm not sure how the choice of BTL makes a difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The program is crashing in the communicator definition, which involves a communication over our internal out-of-band messaging system. That system has zero connection to any BTL, so it should crash either way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regardless, I will play with this a little as time allows. Thanks for the reproducer!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 25, 2010, at 7:23 AM, Philippe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to run a test program which consists of a server creating a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; port using MPI_Open_port and N clients using MPI_Comm_connect to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; connect to the server.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm able to do so with 1 server and 2 clients, but with 1 server + 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; clients, I get the following error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; [node003:32274] [[37084,0],0]:route_callback tried routing message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from [[37084,1],0] to [[40912,1],0]:102, can't find route
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is only happening with the openib BTL. With tcp BTL it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perfectly fine (ofud also works as a matter of fact...). This has been
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tested on two completely different clusters, with identical results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In either cases, the IB frabic works normally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help would be greatly appreciated! Several people in my team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looked at the problem. Google and the mailing list archive did not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provide any clue. I believe that from an MPI standpoint, my test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program is valid (and it works with TCP, which make me feel better
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about the sequence of MPI calls)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Philippe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Background:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I intend to use openMPI to transport data inside a much larger
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application. Because of that, I cannot used mpiexec. Each process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; started by our own &quot;job management&quot; and use a name server to find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about each others. Once all the clients are connected, I would like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the server to do MPI_Recv to get the data from all the client. I dont
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; care about the order or which client are sending data, as long as I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can receive it with on call. Do do that, the clients and the server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are going through a series of Comm_accept/Conn_connect/Intercomm_merge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so that at the end, all the clients and the server are inside the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intracomm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Steps:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a sample program that show the issue. I tried to make it as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; short as possible. It needs to be executed on a shared file system
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like NFS because the server write the port info to a file that the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; client will read. To reproduce the issue, the following steps should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be performed:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. ssh to the machine that will be the server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. run ./ben12 3 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. ssh to the machine that will be the client #1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4. run ./ben12 3 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5. repeat step 3-4 for client #2 and #3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the server accept the connection from client #1 and merge it in a new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intracomm. It then accept connection from client #2 and merge it. when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the client #3 arrives, the server accept the connection, but that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cause client #1 and #2 to die with the error above (see the complete
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trace in the tarball).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The exact steps are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server open port
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #1 does connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server and client #1 do merge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #2 does connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1 and client #2 do merge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #3 does connect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1, client #2 and client #3 do merge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My infiniband network works normally with other test programs or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; applications (MPI or others like Verbs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Info about my setup:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.4.3, nightly snapshot of 1.5 --- all show the same error)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;config.log in the tarball
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;&quot;ompi_info --all&quot; in the tarball
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;OFED version = 1.3 installed from RHEL 5.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;Distro = RedHat Entreprise Linux 5.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;Kernel = 2.6.18-128.4.1.el5 x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;subnet manager = built-in SM from the cisco/topspin switch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;&quot;ulimit -l&quot; says &quot;unlimited&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The tarball contains:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; - ben12.c: my test program showing the behavior
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; - config.log / config.out / make.out / make-install.out /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; - trace-tcp.txt: output of the server and each client when it works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#194;&#160; - trace-ib.txt: output of the server and each client when it fails
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope I provided enough info for somebody to reproduce the problem...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="13720.php">Brian Smith: "[OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13718.php">Eugene Loh: "Re: [OMPI users] Partitioning problem set data"</a>
<li><strong>In reply to:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
