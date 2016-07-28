<?
$subject_val = "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 20:18:45 2014" -->
<!-- isoreceived="20141031001845" -->
<!-- sent="Fri, 31 Oct 2014 11:18:24 +1100" -->
<!-- isosent="20141031001824" -->
<!-- name="Marshall Ward" -->
<!-- email="marshall.ward_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus" -->
<!-- id="CANtTEmaLYpOm1RefBSbArwn_AecOAyV+-2v8o2hsWmk5eFSGig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141021144027.GL55306_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus<br>
<strong>From:</strong> Marshall Ward (<em>marshall.ward_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 20:18:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25651.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm just following up on this to say that the problem was not
<br>
related to preconnection, but just very large memory usage for high
<br>
CPU jobs.
<br>
<p>Preconnecting was just acting to send off a large number of
<br>
isend/irecv messages and trigger the memory consumption.
<br>
<p>I tried experimenting a bit with XRC, mostly just by copying the
<br>
values specified here in the faq:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues">http://www.open-mpi.org/faq/?category=openfabrics#ib-receive-queues</a>
<br>
<p>but it seems that I brought down some nodes in the process!
<br>
<p>Is this the right way to reduce my memory consumption per node? Is
<br>
there some other way to go about it? (Or a safe way that doesn't cause
<br>
kernel panics? :) )
<br>
<p>On Wed, Oct 22, 2014 at 1:40 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At those sizes it is possible you are running into resource
</span><br>
<span class="quotelev1">&gt; exhastion issues. Some of the resource exhaustion code paths still lead
</span><br>
<span class="quotelev1">&gt; to hangs. If the code does not need to be fully connected I would
</span><br>
<span class="quotelev1">&gt; suggest not using mpi_preconnect_mpi but instead track down why the
</span><br>
<span class="quotelev1">&gt; initial MPI_Allreduce hangs. I would suggest the stack trace analysis
</span><br>
<span class="quotelev1">&gt; tool (STAT). I might help you narrow down where the problem is
</span><br>
<span class="quotelev1">&gt; occuring.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; HPC-5, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 21, 2014 at 01:12:21PM +1100, Marshall Ward wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, it's at least good to know that the behaviour isn't normal!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could it be some sort of memory leak in the call? The code in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ompi/runtime/ompi_mpi_preconnect.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; looks reasonably safe, though maybe doing thousands of of isend/irecv
</span><br>
<span class="quotelev2">&gt;&gt; pairs is causing problems with the buffer used in ptp messages?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to see if valgrind can see anything, but nothing from
</span><br>
<span class="quotelev2">&gt;&gt; ompi_init_preconnect_mpi is coming up (although there are some other
</span><br>
<span class="quotelev2">&gt;&gt; warnings).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Oct 19, 2014 at 2:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Oct 17, 2014, at 3:37 AM, Marshall Ward &lt;marshall.ward_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I currently have a numerical model that, for reasons unknown, requires
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; preconnection to avoid hanging on an initial MPI_Allreduce call.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; That is indeed odd - it might take a while for all the connections to form, but it shouldn&#226;&#128;&#153;t hang
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; But
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; when we try to scale out beyond around 1000 cores, we are unable to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; get past MPI_Init's preconnection phase.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; To test this, I have a basic C program containing only MPI_Init() and
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; MPI_Finalize() named `mpi_init`, which I compile and run using `mpirun
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -mca mpi_preconnect_mpi 1 mpi_init`.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I doubt preconnect has been tested in a rather long time as I&#226;&#128;&#153;m unaware of anyone still using it (we originally provided it for some legacy code that otherwise took a long time to initialize). However, I could give it a try and see what happens. FWIW: because it was so targeted and hasn&#226;&#128;&#153;t been used in a long time, the preconnect algo is really not very efficient. Still, shouldn&#226;&#128;&#153;t have anything to do with memory footprint.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This preconnection seems to consume a large amount of memory, and is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; exceeding the available memory on our nodes (~2GiB/core) as the number
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; gets into the thousands (~4000 or so). If we try to preconnect to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; around ~6000, we start to see hangs and crashes.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; A failed 5600 core preconnection gave this warning (~10k times) while
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; hanging for 30 minutes:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    [warn] opal_libevent2021_event_base_loop: reentrant invocation.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; A failed 6000-core preconnection job crashed almost immediately with
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; the following error.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file ras_tm_module.c at line 159
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file ras_tm_module.c at line 85
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; file base/ras_base_allocate.c at line 187
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This doesn&#226;&#128;&#153;t have anything to do with preconnect - it indicates that mpirun was unable to open the Torque allocation file. However, it shouldn&#226;&#128;&#153;t have &#226;&#128;&#156;crashed&#226;&#128;&#157;, but instead simply exited with an error message.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Should we expect to use very large amounts of memory for
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; preconnections of thousands of CPUs? And can these
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I am using Open MPI 1.8.2 on Linux 2.6.32 (centOS) and FDR infiniband
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; network. This is probably not enough information, but I'll try to
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; provide more if necessary. My knowledge of implementation is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; unfortunately very limited.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25527.php">http://www.open-mpi.org/community/lists/users/2014/10/25527.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25536.php">http://www.open-mpi.org/community/lists/users/2014/10/25536.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25541.php">http://www.open-mpi.org/community/lists/users/2014/10/25541.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25542.php">http://www.open-mpi.org/community/lists/users/2014/10/25542.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25651.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
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
