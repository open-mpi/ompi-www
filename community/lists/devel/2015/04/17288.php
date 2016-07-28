<?
$subject_val = "Re: [OMPI devel] c_accumulate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 20:42:32 2015" -->
<!-- isoreceived="20150421004232" -->
<!-- sent="Tue, 21 Apr 2015 09:42:24 +0900" -->
<!-- isosent="20150421004224" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] c_accumulate" -->
<!-- id="55359CF0.6010304_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="b58f5f2726fc4d419dbf57a0fa535dd2_at_HQMAIL102.nvidia.com" -->
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
<strong>Date:</strong> 2015-04-20 20:42:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>yes, same issue ...
<br>
<p>i attached a patch to the github issue ( the issue might be in the test).
<br>
<p>&nbsp;From the standards (11.5 Synchronization Calls) :
<br>
&quot;TheMPI_WIN_FENCE collective synchronization call supports a simple 
<br>
synchroniza-
<br>
tion pattern that is often used in parallel computations: namely a 
<br>
loosely-synchronous
<br>
model, where global computation phases alternate with global 
<br>
communication phases.&quot;
<br>
<p>as far as i understand (disclaimer, i am *not* good at reading standards 
<br>
...) this is not
<br>
necessarily an MPI_Barrier, so there is a race condition in the test 
<br>
case that can be avoided
<br>
by adding an MPI_Barrier after initializing RecvBuff.
<br>
<p>could someone (Jeff ? George ?) please double check this before i push a 
<br>
fix into ompi-tests repo ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/20/2015 10:19 PM, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your failure similar to this ticket?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/issues/393">https://github.com/open-mpi/ompi/issues/393</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*devel [mailto:devel-bounces_at_[hidden]] *On Behalf Of *Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; *Sent:* Monday, April 20, 2015 9:12 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject:* [OMPI devel] c_accumulate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i (sometimes) get some failure with the c_accumulate test from the ibm 
</span><br>
<span class="quotelev1">&gt; test suite on one host with 4 mpi tasks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so far, i was only able to observe this on linux/sparc with the vader btl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is a snippet of the test :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Win_create(&amp;RecvBuff, sizeOfInt, 1, MPI_INFO_NULL,
</span><br>
<span class="quotelev1">&gt;                  MPI_COMM_WORLD, &amp;Win);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    SendBuff = rank + 100;
</span><br>
<span class="quotelev1">&gt;    RecvBuff = 0;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    /* Accumulate to everyone, just for the heck of it */
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;    MPI_Win_fence(MPI_MODE_NOPRECEDE, Win);
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; size; ++i)
</span><br>
<span class="quotelev1">&gt;      MPI_Accumulate(&amp;SendBuff, 1, MPI_INT, i, 0, 1, MPI_INT, MPI_SUM, Win);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOSUCCEED), Win);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when the test fails, RecvBuff in (rank+100) instead of the accumulated 
</span><br>
<span class="quotelev1">&gt; value (100 * nprocs + (nprocs -1)*nprocs/2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i am not familiar with onesided operations nor MPI_Win_fence.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, i found suspicious RecvBuff is initialized *after* 
</span><br>
<span class="quotelev1">&gt; MPI_Win_create ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does MPI_Win_fence implies MPI_Barrier ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if not, i guess RecvBuff should be initialized *before* MPI_Win_create.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; makes sense ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and if it does make sense, then this issue is not related to sparc, 
</span><br>
<span class="quotelev1">&gt; and vader is not the root cause)
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) 
</span><br>
<span class="quotelev1">&gt; and may contain confidential information.  Any unauthorized review, 
</span><br>
<span class="quotelev1">&gt; use, disclosure or distribution is prohibited.  If you are not the 
</span><br>
<span class="quotelev1">&gt; intended recipient, please contact the sender by reply email and 
</span><br>
<span class="quotelev1">&gt; destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17272.php">http://www.open-mpi.org/community/lists/devel/2015/04/17272.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17288/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17287.php">Devendar Bureddy: "Re: [OMPI devel] binding output error"</a>
<li><strong>In reply to:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17289.php">Kawashima, Takahiro: "Re: [OMPI devel] c_accumulate"</a>
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
