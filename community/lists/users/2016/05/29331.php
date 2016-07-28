<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 21:24:51 2016" -->
<!-- isoreceived="20160531012451" -->
<!-- sent="Mon, 30 May 2016 18:24:50 -0700" -->
<!-- isosent="20160531012450" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="CAGKz=u+Lph=m+TEjMz+uocX33wxJJ15DNtmW41pNmgE1gbWqQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="556444bc-4933-65a9-85f8-250e56a32f2a_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Broadcast faster than barrier<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 21:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; So, you mean that it guarantees the value received after the bcast call is
</span><br>
<span class="quotelev1">&gt; consistent with value sent from root, but it doesn't have to wait till all
</span><br>
<span class="quotelev1">&gt; the ranks have received it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is what i believe, double checking the standard might not hurt though
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No function has barrier semantics, except a barrier, although some
<br>
functions have barrier semantics due to data-dependencies for non-zero
<br>
counts (allgather, alltoall, allreduce).
<br>
<p>Reduce, Bcast, gather, and scatter should never have barrier semantics and
<br>
should not synchronize more than the explicit data decencies require. The
<br>
send-only ranks may return long before the recv-only ranks do, particularly
<br>
when the messages go via an eager protocol.
<br>
<p>One can imagine barrier as a 1-byte allreduce, but there are more efficient
<br>
implantations. Allreduce should never be faster than Bcast, as Gilles
<br>
explained.
<br>
<p>There's a nice paper on self-consistent performance of MPI implementations
<br>
that has lots of details.
<br>
<p>Jeff
<br>
<p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29332.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
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
