<?
$subject_val = "Re: [OMPI users] Isend, Recv and Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  5 21:05:55 2016" -->
<!-- isoreceived="20160506010555" -->
<!-- sent="Thu, 5 May 2016 20:05:33 -0500" -->
<!-- isosent="20160506010533" -->
<!-- name="Zhen Wang" -->
<!-- email="toddwz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Isend, Recv and Test" -->
<!-- id="CALb_wBQHT-1KhGFihGGo8McaP4K=yTFXUfaOk3NTpkNFZ8WnpQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5s5ois6kW6Qu2Nbooqij-Vj7X8fNLGEN4DDRm8y1kUjnA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-05 21:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2016-05-05 9:27 GMT-05:00 Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]
<br>
<span class="quotelev1">&gt;:
</span><br>
<p><span class="quotelev1">&gt; Out of curiosity, can you try
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,sm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
Same as before. Many MPI_Test calls.
<br>
<p><span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl self,vader ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      VirtualBox
<br>
Framework: btl
<br>
Component: vade
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;mca_bml_base_open() failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Not found&quot; (-13) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[VirtualBox:2188] Local abort before MPI_INIT completed successfully; not
<br>
able to aggregate error messages, and not able to guarantee that all other
<br>
processes were killed!
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[9235,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
[VirtualBox:02186] 1 more process has sent help message help-mca-base.txt /
<br>
find-available:not-valid
<br>
[VirtualBox:02186] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and see if one performs better than the other ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Zhen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May 4, 2016 at 8:43 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note there is no progress thread in openmpi 1.10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a pragmatic point of view, that means that for &quot;large&quot; messages, no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data is sent in MPI_Isend, and the data is sent when MPI &quot;progresses&quot; e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call a MPI_Test, MPI_Probe, MPI_Recv or some similar subroutine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your example, the data is transferred after the first usleep
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, it takes quite a while, and there could be an issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what if you use MPI_Send instead () ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Works as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 started at 08:37:10.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 finished at 08:37:10.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Send of 0 started at 08:37:10.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Send of 0 finished at 08:37:10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what if you send/Recv a large message first (to &quot;warmup&quot; connections),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Barrier, and then start your MPI_Isend ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not working. For what I want to accomplish, is my code the right way to
</span><br>
<span class="quotelev2">&gt;&gt; go? Is there an altenative method? Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 0 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 1 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 2 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 3 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 4 started at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:46.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:47.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:48.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:49.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 0 finished at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 1 started at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 0 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 0 finished at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:50.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:51.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:52.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:53.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 1 finished at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 2 started at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 1 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 1 finished at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:54.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:55.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:56.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:57.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 2 finished at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 3 started at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 2 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 2 finished at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:58.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:38:59.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:00.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:01.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 3 finished at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 4 started at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 3 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 3 finished at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:02.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:03.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:04.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:05.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 1: Recv of 4 finished at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: MPI_Test of 4 at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt; MPI 0: Isend of 4 finished at 08:39:06.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, May 5, 2016, Zhen Wang &lt;toddwz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having a problem with Isend, Recv and Test in Linux Mint 16 Petra.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The source is attached.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI 1.10.2 is configured with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --enable-debug --prefix=/home/&lt;me&gt;/Tool/openmpi-1.10.2-debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The source is built with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpiCC a5.cpp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and run in one node with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ~/Tool/openmpi-1.10.2-debug/bin/mpirun -n 2 ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The output is in the end. What puzzles me is why MPI_Test is called so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many times, and it takes so long to send a message. Am I doing something
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong? I'm simulating a more complicated program: MPI 0 Isends data to MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1, computes (usleep here), and calls Test to check if data are sent. MPI 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Recvs data, and computes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Zhen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: Isend of 0 started at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 1: Recv of 0 started at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:35.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:36.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:37.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:38.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 1: Recv of 0 finished at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: MPI_Test of 0 at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI 0: Isend of 0 finished at 20:32:39.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29086.php">http://www.open-mpi.org/community/lists/users/2016/05/29086.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29097.php">http://www.open-mpi.org/community/lists/users/2016/05/29097.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29104.php">Andy Riebs: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>Previous message:</strong> <a href="29102.php">Nathan Hjelm: "Re: [OMPI users] Problems using 1.10.2 with MOFED 3.1-1.1.0.1"</a>
<li><strong>In reply to:</strong> <a href="29097.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Reply:</strong> <a href="29119.php">Gilles Gouaillardet: "Re: [OMPI users] Isend, Recv and Test"</a>
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
