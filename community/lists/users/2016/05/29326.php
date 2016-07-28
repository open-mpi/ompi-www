<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 09:33:22 2016" -->
<!-- isoreceived="20160530133322" -->
<!-- sent="Mon, 30 May 2016 22:33:21 +0900" -->
<!-- isosent="20160530133321" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="CAAkFZ5urZK+3jiJGT5dXefqeMCZUHLTGcrQCVr65fWYtJXfidA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKXED0gUUPzBu_sCgOOYRsgMLEKuE4A08ihgzdcSMRks1Q_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 09:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29325.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29323.php">Saliya Ekanayake: "[OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These are very different algorithms, so performance might differ (greatly)
<br>
<p>for example, MPI_Bcast on root rank can MPI_Send() and return, if the
<br>
message is short, this is likely an eager send which is very fast.
<br>
that means MPI_Bcast() returns before all ranks received the data, or even
<br>
entered MPI_Bcast.
<br>
<p>On the other hand, MPI_Barrier() cannot return before all ranks entered the
<br>
barrier.
<br>
<p>also, you might find <a href="https://github.com/open-mpi/ompi/issues/1713">https://github.com/open-mpi/ompi/issues/1713</a> useful.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, May 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran Ohio micro benchmarks for openmpi and noticed broadcast with smaller
</span><br>
<span class="quotelev1">&gt; number of bytes is faster than a barrier - 2us vs 120us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to understand how this could happen?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29325.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29323.php">Saliya Ekanayake: "[OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29327.php">Saliya Ekanayake: "Re: [OMPI users] Broadcast faster than barrier"</a>
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
