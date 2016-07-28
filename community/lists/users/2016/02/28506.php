<?
$subject_val = "Re: [OMPI users] shared memory zero size segment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 11:46:03 2016" -->
<!-- isoreceived="20160211164603" -->
<!-- sent="Thu, 11 Feb 2016 09:46:01 -0700" -->
<!-- isosent="20160211164601" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] shared memory zero size segment" -->
<!-- id="20160211164601.GA27952_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1083313430.354599.1455200260945.JavaMail.zimbra_at_met.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] shared memory zero size segment<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 11:46:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 11, 2016 at 02:17:40PM +0000, Peter Wind wrote:
<br>
<span class="quotelev1">&gt;    I would add that the present situation is bound to give problems for some
</span><br>
<span class="quotelev1">&gt;    users.
</span><br>
<span class="quotelev1">&gt;    It is natural to divide an array in segments, each process treating its
</span><br>
<span class="quotelev1">&gt;    own segment, but needing to read adjacent segments too.
</span><br>
<span class="quotelev1">&gt;    MPI_Win_allocate_shared seems to be designed for this.
</span><br>
<span class="quotelev1">&gt;    This will work fine as long as no segment as size zero. It can also be
</span><br>
<span class="quotelev1">&gt;    expected that most testing would be done with all segments larger than
</span><br>
<span class="quotelev1">&gt;    zero.
</span><br>
<span class="quotelev1">&gt;    The document adding &quot;size = 0 is valid&quot;, would also make people confident
</span><br>
<span class="quotelev1">&gt;    that it will be consistent for that special case too.
</span><br>
<p>Nope, that statement says its ok for a rank to specify that the local
<br>
shared memory segment is 0 bytes. Nothing more. The standard
<br>
unfortunately does not define what pointer value is returned for a rank
<br>
that specifies size = 0. Not sure if the RMA working group intentionally
<br>
left that undefine... Anyway, Open MPI does not appear to be out of
<br>
compliance with the standard here.
<br>
<p>To be safe you should use MPI_Win_shared_query as suggested. You can
<br>
pass MPI_PROC_NULL as the rank to get the pointer for the first non-zero
<br>
sized segment in the shared memory window.
<br>
<p>-Nathan
<br>
HPC-5, LANL
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28506/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>In reply to:</strong> <a href="28505.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28507.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Reply:</strong> <a href="28512.php">Peter Wind: "Re: [OMPI users] shared memory zero size segment"</a>
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
