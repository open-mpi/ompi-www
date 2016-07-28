<?
$subject_val = "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 08:48:54 2010" -->
<!-- isoreceived="20100722124854" -->
<!-- sent="Thu, 22 Jul 2010 08:48:49 -0400" -->
<!-- isosent="20100722124849" -->
<!-- name="Philippe" -->
<!-- email="philmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand" -->
<!-- id="AANLkTikoXZ_pgRql6FznrNOTpgf_jK1vZC6lGQXlkvaX_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8515D8DD-248D-46A3-9FD4-2297AAE8AD2E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-22 08:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13742.php">Ralph Castain: "Re: [OMPI users] Thank you very much - How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent 	flag??"</a>
<li><strong>In reply to:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 21, 2010 at 10:44 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2010, at 7:44 AM, Philippe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for the late reply -- I was away on vacation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; no problem at all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regarding your earlier question about how many processes where
</span><br>
<span class="quotelev2">&gt;&gt; involved when the memory was entirely allocated, it was only two, a
</span><br>
<span class="quotelev2">&gt;&gt; sender and a receiver. I'm still trying to pinpoint what can be
</span><br>
<span class="quotelev2">&gt;&gt; different between the standalone case and the &quot;integrated&quot; case. I
</span><br>
<span class="quotelev2">&gt;&gt; will try to find out what part of the code is allocating memory in a
</span><br>
<span class="quotelev2">&gt;&gt; loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hmmm....that sounds like a bug in your program. let me know what you find
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Jul 20, 2010 at 12:51 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, I finally managed to make this work without the required ompi-server rendezvous point. The fix is only in the devel trunk right now - I'll have to ask the release managers for 1.5 and 1.4 if they want it ported to those series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; great -- i'll give it a try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On the notion of integrating OMPI to your launch environment: remember that we don't necessarily require that you use mpiexec for that purpose. If your launch environment provides just a little info in the environment of the launched procs, we can usually devise a method that allows the procs to perform an MPI_Init as a single job without all this work you are doing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on creating operators using MPI for the IBM product
</span><br>
<span class="quotelev2">&gt;&gt; &quot;InfoSphere Streams&quot;. It has its own launching mechanism to start the
</span><br>
<span class="quotelev2">&gt;&gt; processes. However I can pass some information to the processes that
</span><br>
<span class="quotelev2">&gt;&gt; belong to the same job (Streams job -- which should neatly map to MPI
</span><br>
<span class="quotelev2">&gt;&gt; job).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only difference is that your procs will all block in MPI_Init until they -all- have executed that function. If that isn't a problem, this would be a much more scalable and reliable method than doing it thru massive calls to MPI_Port_connect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in the general case, that would be a problem, but for my prototype,
</span><br>
<span class="quotelev2">&gt;&gt; this is acceptable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In general, each process is composed of operators, some may be MPI
</span><br>
<span class="quotelev2">&gt;&gt; related and some may not. But in my case, I know ahead of time which
</span><br>
<span class="quotelev2">&gt;&gt; processes will be part of the MPI job, so I can easily deal with the
</span><br>
<span class="quotelev2">&gt;&gt; fact that they would block on MPI_init (actually -- MPI_thread_init
</span><br>
<span class="quotelev2">&gt;&gt; since its using a lot of threads).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have talked in the past about creating a non-blocking MPI_Init as an extension to the standard. It would lock you to Open MPI, though...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, at some point you would have to know how many processes are going to be part of the job so you can know when MPI_Init is complete. I would think you would require that info for the singleton wireup anyway - yes? Otherwise, how would you know when to quit running connect-accept?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>the short answer is yes... although, the longer answer is a bit more
<br>
complicated. currently I do know the number of connect I need to do on
<br>
a per-port basis. a job can contains an arbitrary number of MPI
<br>
processes, each opening one or more ports. so i know the count port by
<br>
ports but I dont need to worry about how many MPI processes there is
<br>
globally. to make things a bit more complicated, each MPI operator can
<br>
be &quot;fused&quot; with other operators to make a process. each fused operator
<br>
may or may not require MPI. the bottom line is, to get the total
<br>
number of processes to calculate rank&amp;size, I need to reverse engineer
<br>
the fusing that the compiler may do.
<br>
<p>but that's ok, I'm willing to do that for our prototype :-)
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a documentation or example I can use to see what information
</span><br>
<span class="quotelev2">&gt;&gt; I can pass to the processes to enable that? Is it just environment
</span><br>
<span class="quotelev2">&gt;&gt; variables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No real documentation - a lack I should probably fill. At the moment, we don't have a &quot;generic&quot; module for standalone launch, but I can create one as it is pretty trivial. I would then need you to pass each process envars telling it the total number of processes in the MPI job, its rank within that job, and a file where some rendezvous process (can be rank=0) has provided that port string. Armed with that info, I can wireup the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Won't be as scalable as an mpirun-initiated startup, but will be much better than doing it from singletons.
</span><br>
<p>that would be great. I can definitely pass environment variables to
<br>
each process.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or if you prefer, we could setup an &quot;infosphere&quot; module that we could customize for this system. Main thing here would be to provide us with some kind of regex (or access to a file containing the info) that describes the map of rank to node so we can construct the wireup communication pattern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>i think for our prototype we are fine with the first method. I'd leave
<br>
the cleaner implementation as a task for the product team ;-)
<br>
<p>regarding the &quot;generic&quot; module, is that something you can put together
<br>
quickly? can I help in any way?
<br>
<p>Thanks!
<br>
p
<br>
<p><span class="quotelev1">&gt; Either way would work. The second is more scalable, but I don't know if you have (or can construct) the map info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks!
</span><br>
<span class="quotelev2">&gt;&gt; p.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 18, 2010, at 4:09 PM, Philippe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks for investigating.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've applied the two patches you mentioned earlier and ran with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi server. Although i was able to runn our standalone test, when I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integrated the changes to our code, the processes entered a crazy loop
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and allocated all the memory available when calling MPI_Port_Connect.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was not able to identify why it works standalone but not integrated
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with our code. If I found why, I'll let your know.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking forward to your findings. We'll be happy to test any patches
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if you have some!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; p.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sat, Jul 17, 2010 at 9:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Okay, I can reproduce this problem. Frankly, I don't think this ever worked with OMPI, and I'm not sure how the choice of BTL makes a difference.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The program is crashing in the communicator definition, which involves a communication over our internal out-of-band messaging system. That system has zero connection to any BTL, so it should crash either way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regardless, I will play with this a little as time allows. Thanks for the reproducer!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 25, 2010, at 7:23 AM, Philippe wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm trying to run a test program which consists of a server creating a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; port using MPI_Open_port and N clients using MPI_Comm_connect to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; connect to the server.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm able to do so with 1 server and 2 clients, but with 1 server + 3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; clients, I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; [node003:32274] [[37084,0],0]:route_callback tried routing message
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from [[37084,1],0] to [[40912,1],0]:102, can't find route
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is only happening with the openib BTL. With tcp BTL it works
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; perfectly fine (ofud also works as a matter of fact...). This has been
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tested on two completely different clusters, with identical results.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; In either cases, the IB frabic works normally.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any help would be greatly appreciated! Several people in my team
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; looked at the problem. Google and the mailing list archive did not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; provide any clue. I believe that from an MPI standpoint, my test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program is valid (and it works with TCP, which make me feel better
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about the sequence of MPI calls)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Philippe.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Background:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I intend to use openMPI to transport data inside a much larger
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; application. Because of that, I cannot used mpiexec. Each process is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; started by our own &quot;job management&quot; and use a name server to find
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about each others. Once all the clients are connected, I would like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the server to do MPI_Recv to get the data from all the client. I dont
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; care about the order or which client are sending data, as long as I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can receive it with on call. Do do that, the clients and the server
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are going through a series of Comm_accept/Conn_connect/Intercomm_merge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; so that at the end, all the clients and the server are inside the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intracomm.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Steps:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have a sample program that show the issue. I tried to make it as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; short as possible. It needs to be executed on a shared file system
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; like NFS because the server write the port info to a file that the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; client will read. To reproduce the issue, the following steps should
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; be performed:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0. compile the test with &quot;mpicc -o ben12 ben12.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1. ssh to the machine that will be the server
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2. run ./ben12 3 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 3. ssh to the machine that will be the client #1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 4. run ./ben12 3 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 5. repeat step 3-4 for client #2 and #3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the server accept the connection from client #1 and merge it in a new
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intracomm. It then accept connection from client #2 and merge it. when
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the client #3 arrives, the server accept the connection, but that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cause client #1 and #2 to die with the error above (see the complete
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; trace in the tarball).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The exact steps are:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server open port
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #1 does connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server and client #1 do merge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #2 does connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1 and client #2 do merge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server does accept
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - client #3 does connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160; - server, client #1, client #2 and client #3 do merge
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; My infiniband network works normally with other test programs or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; applications (MPI or others like Verbs).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Info about my setup:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;openMPI version = 1.4.1 (I also tried 1.4.2, nightly snapshot of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.4.3, nightly snapshot of 1.5 --- all show the same error)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;config.log in the tarball
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;&quot;ompi_info --all&quot; in the tarball
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;OFED version = 1.3 installed from RHEL 5.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;Distro = RedHat Entreprise Linux 5.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;Kernel = 2.6.18-128.4.1.el5 x86_64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;subnet manager = built-in SM from the cisco/topspin switch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;output of ibv_devinfo included in the tarball (there are no &quot;bad&quot; nodes)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; &#194;&#160;&quot;ulimit -l&quot; says &quot;unlimited&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The tarball contains:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; - ben12.c: my test program showing the behavior
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; - config.log / config.out / make.out / make-install.out /
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ifconfig.txt / ibv-devinfo.txt / ompi_info.txt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; - trace-tcp.txt: output of the server and each client when it works
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with TCP (I added &quot;btl = tcp,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160; - trace-ib.txt: output of the server and each client when it fails
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; with IB (I added &quot;btl = openib,self&quot; in ~/.openmpi/mca-params.conf)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I hope I provided enough info for somebody to reproduce the problem...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;ompi-output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13742.php">Ralph Castain: "Re: [OMPI users] Thank you very much - How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent 	flag??"</a>
<li><strong>In reply to:</strong> <a href="13722.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>Reply:</strong> <a href="13749.php">Ralph Castain: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
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
