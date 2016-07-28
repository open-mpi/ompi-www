<?
$subject_val = "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  1 15:46:36 2013" -->
<!-- isoreceived="20130501194636" -->
<!-- sent="Wed, 01 May 2013 15:46:31 -0400" -->
<!-- isosent="20130501194631" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to reduce Isend &amp;amp; Irecv bandwidth?" -->
<!-- id="51817117.50307_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAKj9NDm2woy9O4KT1PJfF3JfvFyYHnXxOTvO7+V-PtSDj7=Ynw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-01 15:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21841.php">Thomas Watson: "[OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21841.php">Thomas Watson: "[OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe start the data exchange by sending a (presumably short)
<br>
list/array/index-function of the dirty/not-dirty blocks status
<br>
(say, 0=not-dirty,1=dirty),
<br>
then putting if conditionals before the Isend/Irecv so that only
<br>
dirty blocks are exchanged?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p><p>On 05/01/2013 01:28 PM, Thomas Watson wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a program where each MPI rank hosts a set of data blocks. After
</span><br>
<span class="quotelev1">&gt; doing computation over *some of* its local data blocks, each MPI rank
</span><br>
<span class="quotelev1">&gt; needs to exchange data with other ranks. Note that the computation may
</span><br>
<span class="quotelev1">&gt; involve only a subset of the data blocks on a MPI rank. The data
</span><br>
<span class="quotelev1">&gt; exchange is achieved at each MPI rank through Isend and Irecv and then
</span><br>
<span class="quotelev1">&gt; Waitall to complete the requests. Each pair of Isend and Irecv exchanges
</span><br>
<span class="quotelev1">&gt; a corresponding pair of data blocks at different ranks. Right now, we do
</span><br>
<span class="quotelev1">&gt; Isend/Irecv for EVERY block!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that because the computation at a rank may only involves a
</span><br>
<span class="quotelev1">&gt; subset of blocks, we could mark those blocks as dirty during the
</span><br>
<span class="quotelev1">&gt; computation. And to reduce data exchange bandwidth, we could only
</span><br>
<span class="quotelev1">&gt; exchanges those *dirty* pairs across ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is: if a rank does not compute on a block 'm', and if it
</span><br>
<span class="quotelev1">&gt; does not call Isend for 'm', then the receiving rank must somehow know
</span><br>
<span class="quotelev1">&gt; this and either a) does not call Irecv for 'm' as well, or b) let Irecv
</span><br>
<span class="quotelev1">&gt; for 'm' fail gracefully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; 1. how Irecv will behave (actually how MPI_Waitall will behave) if the
</span><br>
<span class="quotelev1">&gt; corresponding Isend is missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If we still post Isend for 'm', but because we really do not need to
</span><br>
<span class="quotelev1">&gt; send any data for 'm', can I just set a &quot;flag&quot; in Isend so that
</span><br>
<span class="quotelev1">&gt; MPI_Waitall on the receiving side will &quot;cancel&quot; the corresponding Irecv
</span><br>
<span class="quotelev1">&gt; immediately? For example, I can set the count in Isend to 0, and on the
</span><br>
<span class="quotelev1">&gt; receiving side, when MPI_Waitall see a message with empty payload, it
</span><br>
<span class="quotelev1">&gt; reclaims the corresponding Irecv? In my code, the correspondence between
</span><br>
<span class="quotelev1">&gt; a pair of Isend and Irecv is established by a matching TAG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jacky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="21841.php">Thomas Watson: "[OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="21841.php">Thomas Watson: "[OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
<li><strong>Reply:</strong> <a href="21843.php">Thomas Watson: "Re: [OMPI users] How to reduce Isend &amp; Irecv bandwidth?"</a>
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
