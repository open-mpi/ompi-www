<?
$subject_val = "Re: [OMPI devel] c_accumulate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 21:20:15 2015" -->
<!-- isoreceived="20150421012015" -->
<!-- sent="Tue, 21 Apr 2015 01:20:10 +0000" -->
<!-- isosent="20150421012010" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] c_accumulate" -->
<!-- id="20150421102009.092070e1e00fb537165dac10_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="55359CF0.6010304_at_rist.or.jp" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 21:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles, Nathan,
<br>
<p>I read the MPI standard but I think the standard doesn't
<br>
require a barrier in the test program.
<br>
<p><span class="quotelev1">&gt;From the standards (11.5.1 Fence) :
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A fence call usually entails a barrier synchronization:
<br>
&nbsp;&nbsp;a process completes a call to MPI_WIN_FENCE only after all
<br>
&nbsp;&nbsp;other processes in the group entered their matching call.
<br>
&nbsp;&nbsp;However, a call to MPI_WIN_FENCE that is known not to end
<br>
&nbsp;&nbsp;any epoch (in particular, a call with assert equal to
<br>
&nbsp;&nbsp;MPI_MODE_NOPRECEDE) does not necessarily act as a barrier.
<br>
<p>This sentence is misleading.
<br>
<p>In the non-MPI_MODE_NOPRECEDE case, a barrier is necessary
<br>
in the MPI implementation to end access/exposure epochs.
<br>
<p>In the MPI_MODE_NOPRECEDE case, a barrier is not necessary
<br>
in the MPI implementation to end access/exposure epochs.
<br>
Also, a *global* barrier is not necessary in the MPI
<br>
implementation to start access/exposure epochs. But some
<br>
synchronizations are still needed to start an exposure epoch.
<br>
<p>For example, let's assume all ranks call MPI_WIN_FENCE(MPI_MODE_NOPRECEDE)
<br>
and then rank 0 calls MPI_PUT to rank 1. In this case, rank 0
<br>
can access the window on rank 1 before rank 2 or others
<br>
call MPI_WIN_FENCE. (But rank 0 must wait rank 1's MPI_WIN_FENCE.)
<br>
I think this is the intent of the sentence in the MPI standard
<br>
cited above.
<br>
<p>Thanks,
<br>
Takahiro Kawashima
<br>
<p><span class="quotelev1">&gt; Hi Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, same issue ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i attached a patch to the github issue ( the issue might be in the test).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the standards (11.5 Synchronization Calls) :
</span><br>
<span class="quotelev1">&gt; &quot;TheMPI_WIN_FENCE collective synchronization call supports a simple 
</span><br>
<span class="quotelev1">&gt; synchroniza-
</span><br>
<span class="quotelev1">&gt; tion pattern that is often used in parallel computations: namely a 
</span><br>
<span class="quotelev1">&gt; loosely-synchronous
</span><br>
<span class="quotelev1">&gt; model, where global computation phases alternate with global 
</span><br>
<span class="quotelev1">&gt; communication phases.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; as far as i understand (disclaimer, i am *not* good at reading standards 
</span><br>
<span class="quotelev1">&gt; ...) this is not
</span><br>
<span class="quotelev1">&gt; necessarily an MPI_Barrier, so there is a race condition in the test 
</span><br>
<span class="quotelev1">&gt; case that can be avoided
</span><br>
<span class="quotelev1">&gt; by adding an MPI_Barrier after initializing RecvBuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could someone (Jeff ? George ?) please double check this before i push a 
</span><br>
<span class="quotelev1">&gt; fix into ompi-tests repo ?
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
<span class="quotelev1">&gt; On 4/20/2015 10:19 PM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gilles:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is your failure similar to this ticket?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/issues/393">https://github.com/open-mpi/ompi/issues/393</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rolf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *From:*devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Gilles 
</span><br>
<span class="quotelev2">&gt; &gt; Gouaillardet
</span><br>
<span class="quotelev2">&gt; &gt; *Sent:* Monday, April 20, 2015 9:12 AM
</span><br>
<span class="quotelev2">&gt; &gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* [OMPI devel] c_accumulate
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i (sometimes) get some failure with the c_accumulate test from the ibm 
</span><br>
<span class="quotelev2">&gt; &gt; test suite on one host with 4 mpi tasks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; so far, i was only able to observe this on linux/sparc with the vader btl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; here is a snippet of the test :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Win_create(&amp;RecvBuff, sizeOfInt, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev2">&gt; &gt;                  MPI_COMM_WORLD, &amp;Win);
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;    SendBuff = rank + 100;
</span><br>
<span class="quotelev2">&gt; &gt;    RecvBuff = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;    /* Accumulate to everyone, just for the heck of it */
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_fence(MPI_MODE_NOPRECEDE, Win);
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; size; ++i)
</span><br>
<span class="quotelev2">&gt; &gt;      MPI_Accumulate(&amp;SendBuff, 1, MPI_INT, i, 0, 1, MPI_INT, MPI_SUM, Win);
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOSUCCEED), Win);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; when the test fails, RecvBuff in (rank+100) instead of the accumulated 
</span><br>
<span class="quotelev2">&gt; &gt; value (100 * nprocs + (nprocs -1)*nprocs/2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i am not familiar with onesided operations nor MPI_Win_fence.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that being said, i found suspicious RecvBuff is initialized *after* 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Win_create ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; does MPI_Win_fence implies MPI_Barrier ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if not, i guess RecvBuff should be initialized *before* MPI_Win_create.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; makes sense ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (and if it does make sense, then this issue is not related to sparc, 
</span><br>
<span class="quotelev2">&gt; &gt; and vader is not the root cause)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17290.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
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
