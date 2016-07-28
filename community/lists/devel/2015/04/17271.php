<?
$subject_val = "[OMPI devel] c_accumulate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 20 09:12:16 2015" -->
<!-- isoreceived="20150420131216" -->
<!-- sent="Mon, 20 Apr 2015 22:12:13 +0900" -->
<!-- isosent="20150420131213" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] c_accumulate" -->
<!-- id="CAAkFZ5saeyUM6WKR19CVHOW0oe6mcqPxEDgL=gZDSEr9bOorcA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] c_accumulate<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-20 09:12:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17270.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i (sometimes) get some failure with the c_accumulate test from the ibm test
<br>
suite on one host with 4 mpi tasks
<br>
<p>so far, i was only able to observe this on linux/sparc with the vader btl
<br>
<p>here is a snippet of the test :
<br>
<p>MPI_Win_create(&amp;RecvBuff, sizeOfInt, 1, MPI_INFO_NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;Win);
<br>
<p>&nbsp;&nbsp;SendBuff = rank + 100;
<br>
&nbsp;&nbsp;RecvBuff = 0;
<br>
<p>&nbsp;&nbsp;/* Accumulate to everyone, just for the heck of it */
<br>
<p>&nbsp;&nbsp;MPI_Win_fence(MPI_MODE_NOPRECEDE, Win);
<br>
&nbsp;&nbsp;for (i = 0; i &lt; size; ++i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Accumulate(&amp;SendBuff, 1, MPI_INT, i, 0, 1, MPI_INT, MPI_SUM, Win);
<br>
&nbsp;&nbsp;MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOSUCCEED), Win);
<br>
<p><p>when the test fails, RecvBuff in (rank+100) instead of the accumulated
<br>
value (100 * nprocs + (nprocs -1)*nprocs/2
<br>
<p>i am not familiar with onesided operations nor MPI_Win_fence.
<br>
that being said, i found suspicious RecvBuff is initialized *after*
<br>
MPI_Win_create ...
<br>
<p>does MPI_Win_fence implies MPI_Barrier ?
<br>
<p>if not, i guess RecvBuff should be initialized *before* MPI_Win_create.
<br>
<p>makes sense ?
<br>
<p>(and if it does make sense, then this issue is not related to sparc, and
<br>
vader is not the root cause)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17271/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Previous message:</strong> <a href="17270.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
<li><strong>Reply:</strong> <a href="17272.php">Rolf vandeVaart: "Re: [OMPI devel] c_accumulate"</a>
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
