<?
$subject_val = "Re: [OMPI devel] c_accumulate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 09:19:20 2015" -->
<!-- isoreceived="20150420131920" -->
<!-- sent="Mon, 20 Apr 2015 13:19:17 +0000" -->
<!-- isosent="20150420131917" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] c_accumulate" -->
<!-- id="b58f5f2726fc4d419dbf57a0fa535dd2_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5saeyUM6WKR19CVHOW0oe6mcqPxEDgL=gZDSEr9bOorcA_at_mail.gmail.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 09:19:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17273.php">Elena Elkina: "[OMPI devel]  binding output error"</a>
<li><strong>Previous message:</strong> <a href="17271.php">Gilles Gouaillardet: "[OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17271.php">Gilles Gouaillardet: "[OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles:
<br>
Is your failure similar to this ticket?
<br>
<a href="https://github.com/open-mpi/ompi/issues/393">https://github.com/open-mpi/ompi/issues/393</a>
<br>
Rolf
<br>

<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Gilles Gouaillardet
<br>
Sent: Monday, April 20, 2015 9:12 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] c_accumulate
<br>

<br>
Folks,
<br>

<br>
i (sometimes) get some failure with the c_accumulate test from the ibm test suite on one host with 4 mpi tasks
<br>

<br>
so far, i was only able to observe this on linux/sparc with the vader btl
<br>

<br>
here is a snippet of the test :
<br>

<br>

<br>
MPI_Win_create(&amp;RecvBuff, sizeOfInt, 1, MPI_INFO_NULL,
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;Win);
<br>

<br>

<br>

<br>
&nbsp;&nbsp;SendBuff = rank + 100;
<br>

<br>
&nbsp;&nbsp;RecvBuff = 0;
<br>

<br>

<br>

<br>
&nbsp;&nbsp;/* Accumulate to everyone, just for the heck of it */
<br>

<br>

<br>

<br>
&nbsp;&nbsp;MPI_Win_fence(MPI_MODE_NOPRECEDE, Win);
<br>

<br>
&nbsp;&nbsp;for (i = 0; i &lt; size; ++i)
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Accumulate(&amp;SendBuff, 1, MPI_INT, i, 0, 1, MPI_INT, MPI_SUM, Win);
<br>

<br>
&nbsp;&nbsp;MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOSUCCEED), Win);
<br>

<br>
when the test fails, RecvBuff in (rank+100) instead of the accumulated value (100 * nprocs + (nprocs -1)*nprocs/2
<br>

<br>
i am not familiar with onesided operations nor MPI_Win_fence.
<br>
that being said, i found suspicious RecvBuff is initialized *after* MPI_Win_create ...
<br>

<br>
does MPI_Win_fence implies MPI_Barrier ?
<br>

<br>
if not, i guess RecvBuff should be initialized *before* MPI_Win_create.
<br>

<br>
makes sense ?
<br>

<br>
(and if it does make sense, then this issue is not related to sparc, and vader is not the root cause)
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17273.php">Elena Elkina: "[OMPI devel]  binding output error"</a>
<li><strong>Previous message:</strong> <a href="17271.php">Gilles Gouaillardet: "[OMPI devel] c_accumulate"</a>
<li><strong>In reply to:</strong> <a href="17271.php">Gilles Gouaillardet: "[OMPI devel] c_accumulate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17288.php">Gilles Gouaillardet: "Re: [OMPI devel] c_accumulate"</a>
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
