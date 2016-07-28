<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 07:42:28 2016" -->
<!-- isoreceived="20160505114228" -->
<!-- sent="Thu, 5 May 2016 06:42:06 -0500" -->
<!-- isosent="20160505114206" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBTUvv41v5jS2GyB6YHHBVU2mq7EQCGk95VWS2=vPHEjRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uhd1UQG5vA_UOyvb7fEDn+nFue5HgqXffr9na2dbcYmA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Isend, Recv and Test<br>
<strong>From:</strong> Zhen Wang (<em>toddwz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 07:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29094.php">Andy Riebs: "[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Thanks for your reply.
<br>
<p>Best regards,
<br>
Zhen
<br>
<p>On Wed, May 4, 2016 at 8:43 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note there is no progress thread in openmpi 1.10
</span><br>
<span class="quotelev1">&gt; from a pragmatic point of view, that means that for &quot;large&quot; messages, no
</span><br>
<span class="quotelev1">&gt; data is sent in MPI_Isend, and the data is sent when MPI &quot;progresses&quot; e.g.
</span><br>
<span class="quotelev1">&gt; call a MPI_Test, MPI_Probe, MPI_Recv or some similar subroutine.
</span><br>
<span class="quotelev1">&gt; in your example, the data is transferred after the first usleep completes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I agree.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, it takes quite a while, and there could be an issue.
</span><br>
<span class="quotelev1">&gt; what if you use MPI_Send instead () ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Works as expected.
<br>
<p>MPI 1: Recv of 0 started at 08:37:10.
<br>
MPI 1: Recv of 0 finished at 08:37:10.
<br>
MPI 0: Send of 0 started at 08:37:10.
<br>
MPI 0: Send of 0 finished at 08:37:10.
<br>
<p><p><span class="quotelev1">&gt; what if you send/Recv a large message first (to &quot;warmup&quot; connections),
</span><br>
<span class="quotelev1">&gt; MPI_Barrier, and then start your MPI_Isend ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not working. For what I want to accomplish, is my code the right way to go?
<br>
Is there an altenative method? Thanks.
<br>
<p>MPI 1: Recv of 0 started at 08:38:46.
<br>
MPI 0: Isend of 0 started at 08:38:46.
<br>
MPI 0: Isend of 1 started at 08:38:46.
<br>
MPI 0: Isend of 2 started at 08:38:46.
<br>
MPI 0: Isend of 3 started at 08:38:46.
<br>
MPI 0: Isend of 4 started at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:46.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:47.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:48.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:49.
<br>
MPI 0: MPI_Test of 0 at 08:38:50.
<br>
MPI 0: MPI_Test of 0 at 08:38:50.
<br>
MPI 0: MPI_Test of 0 at 08:38:50.
<br>
MPI 0: MPI_Test of 0 at 08:38:50.
<br>
MPI 1: Recv of 0 finished at 08:38:50.
<br>
MPI 1: Recv of 1 started at 08:38:50.
<br>
MPI 0: MPI_Test of 0 at 08:38:50.
<br>
MPI 0: Isend of 0 finished at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:50.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:51.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:52.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:53.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 1: Recv of 1 finished at 08:38:54.
<br>
MPI 1: Recv of 2 started at 08:38:54.
<br>
MPI 0: MPI_Test of 1 at 08:38:54.
<br>
MPI 0: Isend of 1 finished at 08:38:54.
<br>
MPI 0: MPI_Test of 2 at 08:38:54.
<br>
MPI 0: MPI_Test of 2 at 08:38:54.
<br>
MPI 0: MPI_Test of 2 at 08:38:54.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:55.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:56.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:57.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 1: Recv of 2 finished at 08:38:58.
<br>
MPI 1: Recv of 3 started at 08:38:58.
<br>
MPI 0: MPI_Test of 2 at 08:38:58.
<br>
MPI 0: Isend of 2 finished at 08:38:58.
<br>
MPI 0: MPI_Test of 3 at 08:38:58.
<br>
MPI 0: MPI_Test of 3 at 08:38:58.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:38:59.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:00.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:01.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 1: Recv of 3 finished at 08:39:02.
<br>
MPI 1: Recv of 4 started at 08:39:02.
<br>
MPI 0: MPI_Test of 3 at 08:39:02.
<br>
MPI 0: Isend of 3 finished at 08:39:02.
<br>
MPI 0: MPI_Test of 4 at 08:39:02.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:03.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:04.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:05.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 1: Recv of 4 finished at 08:39:06.
<br>
MPI 0: MPI_Test of 4 at 08:39:06.
<br>
MPI 0: Isend of 4 finished at 08:39:06.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra.
</span><br>
<span class="quotelev2">&gt;&gt; The source is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The source is built with
</span><br>
<span class="quotelev2">&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and run in one node with
</span><br>
<span class="quotelev2">&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev2">&gt;&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev2">&gt;&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev2">&gt;&gt; Recvs data, and computes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Zhen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29086.php">http://www.open-mpi.org/community/lists/users/2016/05/29086.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29094.php">Andy Riebs: "[OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29086.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
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
