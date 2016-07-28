<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 10:27:57 2016" -->
<!-- isoreceived="20160505142757" -->
<!-- sent="Thu, 5 May 2016 23:27:55 +0900" -->
<!-- isosent="20160505142755" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CAAkFZ5s5ois6kW6Qu2Nbooqij-Vj7X8fNLGEN4DDRm8y1kUjnA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALb_wBTUvv41v5jS2GyB6YHHBVU2mq7EQCGk95VWS2=vPHEjRg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-05 10:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Out of curiosity, can you try
<br>
mpirun --mca btl self,sm ...
<br>
and
<br>
mpirun --mca btl self,vader ...
<br>
<p>and see if one performs better than the other ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Zhen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 4, 2016 at 8:43 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note there is no progress thread in openmpi 1.10
</span><br>
<span class="quotelev2">&gt;&gt; from a pragmatic point of view, that means that for &quot;large&quot; messages, no
</span><br>
<span class="quotelev2">&gt;&gt; data is sent in MPI_Isend, and the data is sent when MPI &quot;progresses&quot; e.g.
</span><br>
<span class="quotelev2">&gt;&gt; call a MPI_Test, MPI_Probe, MPI_Recv or some similar subroutine.
</span><br>
<span class="quotelev2">&gt;&gt; in your example, the data is transferred after the first usleep completes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I agree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that being said, it takes quite a while, and there could be an issue.
</span><br>
<span class="quotelev2">&gt;&gt; what if you use MPI_Send instead () ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 started at 08:37:10.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 finished at 08:37:10.
</span><br>
<span class="quotelev1">&gt; MPI 0: Send of 0 started at 08:37:10.
</span><br>
<span class="quotelev1">&gt; MPI 0: Send of 0 finished at 08:37:10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what if you send/Recv a large message first (to &quot;warmup&quot; connections),
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Barrier, and then start your MPI_Isend ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Not working. For what I want to accomplish, is my code the right way to
</span><br>
<span class="quotelev1">&gt; go? Is there an altenative method? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 1 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 2 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 3 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 4 started at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 0 finished at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 1 started at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 0 finished at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 1 finished at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 2 started at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 1 finished at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 2 finished at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 3 started at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 2 finished at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 3 finished at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 4 started at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 3 finished at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:02.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 1: Recv of 4 finished at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev1">&gt; MPI 0: Isend of 4 finished at 08:39:06.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','toddwz_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The source is attached.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The source is built with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and run in one node with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Recvs data, and computes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29086.php">http://www.open-mpi.org/community/lists/users/2016/05/29086.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29097/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29098.php">Gus Correa: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Previous message:</strong> <a href="29096.php">Siegmar Gross: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>In reply to:</strong> <a href="29095.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
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
