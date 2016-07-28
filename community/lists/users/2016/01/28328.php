<?
$subject_val = "Re: [OMPI users] MPI hangs on poll_device() with rdma";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 07:59:17 2016" -->
<!-- isoreceived="20160121125917" -->
<!-- sent="Thu, 21 Jan 2016 12:59:14 +0000" -->
<!-- isosent="20160121125914" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on poll_device() with rdma" -->
<!-- id="E1A32D70-ACC1-4B40-ACFF-00CF30FAE015_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHgSaRTe33HZuvUnrbzfUo9pBzTrNAq+GH_dbZN+NFVGn-Jzjw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on poll_device() with rdma<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 07:59:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 21, 2016, at 7:40 AM, Eva &lt;wuzhh01_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;1. Can you create a small example to reproduce the problem? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;2. The TCP and verbs-based transports use different thresholds and protocols, and can sometimes bring to light errors in the application (e.g., the application is making assumptions that just happen to be true for TCP, but not necessarily for other transports). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;3. Is your program multi-threaded? If so, MPI_THREAD_MULTIPLE support in the v1.8 and v1.10 series is not fully baked. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;4. Additionally, if you have buffering / matching / progression assumptions in your application, you might accidentally block. An experiment to try to is to convert all MPI_SEND and MPI_ISEND to MPI_SSEND and MPI_ISSEND, respectively, and see if your program still functions properly on TCP. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. I will try to create a mall example to reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I didn't get your point. I didn't make any assumptions for TCP. Is there any difference in MPI for TCP and RDMA?
</span><br>
<p>The way (Open) MPI communicates under the covers with TCP and other transports is different -- e.g., the amount of buffering is different, the eager sizes are different, etc.  Hence, if your application does an unsafe communication pattern (e.g., example 3.9 in MPI-3.1, page 43), it may coincidentally work on one transport and deadlock on another.
<br>
<p><span class="quotelev1">&gt; 3. My program doesn't enable MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. what do you mean by buffering / matching / progression assumptions in your application?
</span><br>
<p>Essentially the same thing I said above -- see example 3.9 in MPI-3.1.
<br>
<p><span class="quotelev1">&gt; My program communicates like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4 processes: process0, 1, 2, 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; process1/process3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  foreach to_id in process0, process2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        MPI_Send(send_buf, sendlen, to_id, TAG);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(recv_buf, recvlen, to_id, TAG);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; process0/process2:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       while(true):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            MPI_recv(recv_buf, any_source, TAG);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            MPI_Send(send_buf, source_id, TAG);
</span><br>
<p>I'm afraid I can't grok what the problem would be from this; it's not enough of a summary describing what your application is doing.
<br>
<p>If you can replicate the problem in a small example that you can share with the list, that would be most helpful.
<br>
<p>Also, try the SEND -&gt; SSEND and ISEND -&gt; ISSEND experiment I mentioned in my previous mail.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28329.php">Jeff Hammond: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<li><strong>Previous message:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>In reply to:</strong> <a href="28327.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
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
