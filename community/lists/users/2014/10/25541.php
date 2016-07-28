<?
$subject_val = "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 20 22:12:42 2014" -->
<!-- isoreceived="20141021021242" -->
<!-- sent="Tue, 21 Oct 2014 13:12:21 +1100" -->
<!-- isosent="20141021021221" -->
<!-- name="Marshall Ward" -->
<!-- email="marshall.ward_at_[hidden]" -->
<!-- subject="Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus" -->
<!-- id="CANtTEmZ-q-kas-K1XcvDGR6XA5tXPHSL_BhEvjPJiw9UyFoZLw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2C181DB7-67C8-4DED-9E6E-BECC1728C919_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-10-20 22:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25540.php">Steven Eliuk: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Reply:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, it's at least good to know that the behaviour isn't normal!
<br>
<p>Could it be some sort of memory leak in the call? The code in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;ompi/runtime/ompi_mpi_preconnect.c
<br>
<p>looks reasonably safe, though maybe doing thousands of of isend/irecv
<br>
pairs is causing problems with the buffer used in ptp messages?
<br>
<p>I'm trying to see if valgrind can see anything, but nothing from
<br>
ompi_init_preconnect_mpi is coming up (although there are some other
<br>
warnings).
<br>
<p><p>On Sun, Oct 19, 2014 at 2:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2014, at 3:37 AM, Marshall Ward &lt;marshall.ward_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I currently have a numerical model that, for reasons unknown, requires
</span><br>
<span class="quotelev2">&gt;&gt; preconnection to avoid hanging on an initial MPI_Allreduce call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is indeed odd - it might take a while for all the connections to form, but it shouldn&#226;&#128;&#153;t hang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But
</span><br>
<span class="quotelev2">&gt;&gt; when we try to scale out beyond around 1000 cores, we are unable to
</span><br>
<span class="quotelev2">&gt;&gt; get past MPI_Init's preconnection phase.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To test this, I have a basic C program containing only MPI_Init() and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize() named `mpi_init`, which I compile and run using `mpirun
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpi_preconnect_mpi 1 mpi_init`.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt preconnect has been tested in a rather long time as I&#226;&#128;&#153;m unaware of anyone still using it (we originally provided it for some legacy code that otherwise took a long time to initialize). However, I could give it a try and see what happens. FWIW: because it was so targeted and hasn&#226;&#128;&#153;t been used in a long time, the preconnect algo is really not very efficient. Still, shouldn&#226;&#128;&#153;t have anything to do with memory footprint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This preconnection seems to consume a large amount of memory, and is
</span><br>
<span class="quotelev2">&gt;&gt; exceeding the available memory on our nodes (~2GiB/core) as the number
</span><br>
<span class="quotelev2">&gt;&gt; gets into the thousands (~4000 or so). If we try to preconnect to
</span><br>
<span class="quotelev2">&gt;&gt; around ~6000, we start to see hangs and crashes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A failed 5600 core preconnection gave this warning (~10k times) while
</span><br>
<span class="quotelev2">&gt;&gt; hanging for 30 minutes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [warn] opal_libevent2021_event_base_loop: reentrant invocation.
</span><br>
<span class="quotelev2">&gt;&gt; Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A failed 6000-core preconnection job crashed almost immediately with
</span><br>
<span class="quotelev2">&gt;&gt; the following error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev2">&gt;&gt; file ras_tm_module.c at line 159
</span><br>
<span class="quotelev2">&gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev2">&gt;&gt; file ras_tm_module.c at line 85
</span><br>
<span class="quotelev2">&gt;&gt;    [r104:18459] [[32743,0],0] ORTE_ERROR_LOG: File open failure in
</span><br>
<span class="quotelev2">&gt;&gt; file base/ras_base_allocate.c at line 187
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn&#226;&#128;&#153;t have anything to do with preconnect - it indicates that mpirun was unable to open the Torque allocation file. However, it shouldn&#226;&#128;&#153;t have &#226;&#128;&#156;crashed&#226;&#128;&#157;, but instead simply exited with an error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Should we expect to use very large amounts of memory for
</span><br>
<span class="quotelev2">&gt;&gt; preconnections of thousands of CPUs? And can these
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using Open MPI 1.8.2 on Linux 2.6.32 (centOS) and FDR infiniband
</span><br>
<span class="quotelev2">&gt;&gt; network. This is probably not enough information, but I'll try to
</span><br>
<span class="quotelev2">&gt;&gt; provide more if necessary. My knowledge of implementation is
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately very limited.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25527.php">http://www.open-mpi.org/community/lists/users/2014/10/25527.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25536.php">http://www.open-mpi.org/community/lists/users/2014/10/25536.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25540.php">Steven Eliuk: "Re: [OMPI users] CuEventCreate Failed..."</a>
<li><strong>In reply to:</strong> <a href="25536.php">Ralph Castain: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Reply:</strong> <a href="25542.php">Nathan Hjelm: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
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
