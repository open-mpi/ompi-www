<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 09:14:46 2016" -->
<!-- isoreceived="20160506131446" -->
<!-- sent="Fri, 6 May 2016 22:14:43 +0900" -->
<!-- isosent="20160506131443" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CAAkFZ5sTsa8vjmBgs+PBoBT6x7Jx-6R0t1AyJa3dDkqsE3vHDQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALb_wBQHT-1KhGFihGGo8McaP4K=yTFXUfaOk3NTpkNFZ8WnpQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-06 09:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29118.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>In reply to:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
per the error message, you likely misspeled vader (e.g. missed the &quot;r&quot;)
<br>
<p>Jeff,
<br>
the behavior was initially reported on a single node, so the tcp btl is
<br>
unlikely used
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 6, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-05-05 9:27 GMT-05:00 Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Out of curiosity, can you try
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl self,sm ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Same as before. Many MPI_Test calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl self,vader ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; A requested component was not found, or was unable to be opened.  This
</span><br>
<span class="quotelev1">&gt; means that this component is either not installed or is unable to be
</span><br>
<span class="quotelev1">&gt; used on your system (e.g., sometimes this means that shared libraries
</span><br>
<span class="quotelev1">&gt; that the component requires are unable to be found/loaded).  Note that
</span><br>
<span class="quotelev1">&gt; Open MPI stopped checking at the first component that it did not find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:      VirtualBox
</span><br>
<span class="quotelev1">&gt; Framework: btl
</span><br>
<span class="quotelev1">&gt; Component: vade
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca_bml_base_open() failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [VirtualBox:2188] Local abort before MPI_INIT completed successfully; not
</span><br>
<span class="quotelev1">&gt; able to aggregate error messages, and not able to guarantee that all other
</span><br>
<span class="quotelev1">&gt; processes were killed!
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[9235,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [VirtualBox:02186] 1 more process has sent help message help-mca-base.txt
</span><br>
<span class="quotelev1">&gt; / find-available:not-valid
</span><br>
<span class="quotelev1">&gt; [VirtualBox:02186] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev1">&gt; see all help / error messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and see if one performs better than the other ?
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
<span class="quotelev2">&gt;&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','toddwz_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 4, 2016 at 8:43 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note there is no progress thread in openmpi 1.10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from a pragmatic point of view, that means that for &quot;large&quot; messages,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no data is sent in MPI_Isend, and the data is sent when MPI &quot;progresses&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e.g. call a MPI_Test, MPI_Probe, MPI_Recv or some similar subroutine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in your example, the data is transferred after the first usleep
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that being said, it takes quite a while, and there could be an issue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what if you use MPI_Send instead () ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Works as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 started at 08:37:10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 finished at 08:37:10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Send of 0 started at 08:37:10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Send of 0 finished at 08:37:10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what if you send/Recv a large message first (to &quot;warmup&quot; connections),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Barrier, and then start your MPI_Isend ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not working. For what I want to accomplish, is my code the right way to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; go? Is there an altenative method? Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 0 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 1 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 2 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 3 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 4 started at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 0 finished at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 1 started at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 0 finished at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 1 finished at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 2 started at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 1 finished at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 2 finished at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 3 started at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 2 finished at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 3 finished at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 4 started at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 3 finished at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:02.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1: Recv of 4 finished at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 0: Isend of 4 finished at 08:39:06.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The source is attached.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --enable-debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The source is built with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and run in one node with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Recvs data, and computes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Zhen
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29086.php">http://www.open-mpi.org/community/lists/users/2016/05/29086.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29097.php">http://www.open-mpi.org/community/lists/users/2016/05/29097.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29119/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29120.php">Gilles Gouaillardet: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>Previous message:</strong> <a href="29118.php">Joshua Ladd: "Re: [OMPI users] SLOAVx alltoallv"</a>
<li><strong>In reply to:</strong> <a href="29103.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29105.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Isend, Recv and Test"</a>
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
