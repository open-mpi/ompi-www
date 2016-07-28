<?
$subject_val = "Re: [OMPI devel] c_accumulate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 21:25:19 2015" -->
<!-- isoreceived="20150421012519" -->
<!-- sent="Tue, 21 Apr 2015 10:25:05 +0900" -->
<!-- isosent="20150421012505" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] c_accumulate" -->
<!-- id="5535A6F1.6080909_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150421102009.092070e1e00fb537165dac10_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] c_accumulate<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 21:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
<li><strong>Previous message:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Kawashima-san,
<br>
<p>Nathan reached the same conclusion (see the github issue) and i fixed 
<br>
the test
<br>
by manually adding a MPI_Barrier.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/21/2015 10:20 AM, Kawashima, Takahiro wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles, Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read the MPI standard but I think the standard doesn't
</span><br>
<span class="quotelev1">&gt; require a barrier in the test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From the standards (11.5.1 Fence) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      A fence call usually entails a barrier synchronization:
</span><br>
<span class="quotelev1">&gt;    a process completes a call to MPI_WIN_FENCE only after all
</span><br>
<span class="quotelev1">&gt;    other processes in the group entered their matching call.
</span><br>
<span class="quotelev1">&gt;    However, a call to MPI_WIN_FENCE that is known not to end
</span><br>
<span class="quotelev1">&gt;    any epoch (in particular, a call with assert equal to
</span><br>
<span class="quotelev1">&gt;    MPI_MODE_NOPRECEDE) does not necessarily act as a barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This sentence is misleading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the non-MPI_MODE_NOPRECEDE case, a barrier is necessary
</span><br>
<span class="quotelev1">&gt; in the MPI implementation to end access/exposure epochs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the MPI_MODE_NOPRECEDE case, a barrier is not necessary
</span><br>
<span class="quotelev1">&gt; in the MPI implementation to end access/exposure epochs.
</span><br>
<span class="quotelev1">&gt; Also, a *global* barrier is not necessary in the MPI
</span><br>
<span class="quotelev1">&gt; implementation to start access/exposure epochs. But some
</span><br>
<span class="quotelev1">&gt; synchronizations are still needed to start an exposure epoch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, let's assume all ranks call MPI_WIN_FENCE(MPI_MODE_NOPRECEDE)
</span><br>
<span class="quotelev1">&gt; and then rank 0 calls MPI_PUT to rank 1. In this case, rank 0
</span><br>
<span class="quotelev1">&gt; can access the window on rank 1 before rank 2 or others
</span><br>
<span class="quotelev1">&gt; call MPI_WIN_FENCE. (But rank 0 must wait rank 1's MPI_WIN_FENCE.)
</span><br>
<span class="quotelev1">&gt; I think this is the intent of the sentence in the MPI standard
</span><br>
<span class="quotelev1">&gt; cited above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, same issue ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i attached a patch to the github issue ( the issue might be in the test).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   From the standards (11.5 Synchronization Calls) :
</span><br>
<span class="quotelev2">&gt;&gt; &quot;TheMPI_WIN_FENCE collective synchronization call supports a simple
</span><br>
<span class="quotelev2">&gt;&gt; synchroniza-
</span><br>
<span class="quotelev2">&gt;&gt; tion pattern that is often used in parallel computations: namely a
</span><br>
<span class="quotelev2">&gt;&gt; loosely-synchronous
</span><br>
<span class="quotelev2">&gt;&gt; model, where global computation phases alternate with global
</span><br>
<span class="quotelev2">&gt;&gt; communication phases.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; as far as i understand (disclaimer, i am *not* good at reading standards
</span><br>
<span class="quotelev2">&gt;&gt; ...) this is not
</span><br>
<span class="quotelev2">&gt;&gt; necessarily an MPI_Barrier, so there is a race condition in the test
</span><br>
<span class="quotelev2">&gt;&gt; case that can be avoided
</span><br>
<span class="quotelev2">&gt;&gt; by adding an MPI_Barrier after initializing RecvBuff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could someone (Jeff ? George ?) please double check this before i push a
</span><br>
<span class="quotelev2">&gt;&gt; fix into ompi-tests repo ?
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
<span class="quotelev2">&gt;&gt; On 4/20/2015 10:19 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is your failure similar to this ticket?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/issues/393">https://github.com/open-mpi/ompi/issues/393</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *From:*devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Sent:* Monday, April 20, 2015 9:12 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *Subject:* [OMPI devel] c_accumulate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i (sometimes) get some failure with the c_accumulate test from the ibm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test suite on one host with 4 mpi tasks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so far, i was only able to observe this on linux/sparc with the vader btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is a snippet of the test :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Win_create(&amp;RecvBuff, sizeOfInt, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MPI_COMM_WORLD, &amp;Win);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     SendBuff = rank + 100;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     RecvBuff = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Accumulate to everyone, just for the heck of it */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Win_fence(MPI_MODE_NOPRECEDE, Win);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     for (i = 0; i &lt; size; ++i)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       MPI_Accumulate(&amp;SendBuff, 1, MPI_INT, i, 0, 1, MPI_INT, MPI_SUM, Win);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOSUCCEED), Win);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the test fails, RecvBuff in (rank+100) instead of the accumulated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; value (100 * nprocs + (nprocs -1)*nprocs/2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i am not familiar with onesided operations nor MPI_Win_fence.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that being said, i found suspicious RecvBuff is initialized *after*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Win_create ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does MPI_Win_fence implies MPI_Barrier ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if not, i guess RecvBuff should be initialized *before* MPI_Win_create.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; makes sense ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and if it does make sense, then this issue is not related to sparc,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and vader is not the root cause)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17289.php">http://www.open-mpi.org/community/lists/devel/2015/04/17289.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17291.php">tmishima_at_[hidden]: "Re: [OMPI devel] binding output error"</a>
<li><strong>Previous message:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17292.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
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
