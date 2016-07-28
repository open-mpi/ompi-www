<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 10:09:38 2016" -->
<!-- isoreceived="20160530140938" -->
<!-- sent="Mon, 30 May 2016 10:09:37 -0400" -->
<!-- isosent="20160530140937" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="CA+ssbKVjYj40ujZJJQ00apZn2ZrEjzGHD6HZvptJgqgyP_-1ag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5urZK+3jiJGT5dXefqeMCZUHLTGcrQCVr65fWYtJXfidA_at_mail.gmail.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 10:09:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Previous message:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, you mean that it guarantees the value received after the bcast call is
<br>
consistent with value sent from root, but it doesn't have to wait till all
<br>
the ranks have received it?
<br>
<p>Still, in this benchmark shouldn't the max time for bcast be equal to that
<br>
of barrier?
<br>
<p>On Mon, May 30, 2016 at 9:33 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; These are very different algorithms, so performance might differ (greatly)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for example, MPI_Bcast on root rank can MPI_Send() and return, if the
</span><br>
<span class="quotelev1">&gt; message is short, this is likely an eager send which is very fast.
</span><br>
<span class="quotelev1">&gt; that means MPI_Bcast() returns before all ranks received the data, or even
</span><br>
<span class="quotelev1">&gt; entered MPI_Bcast.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the other hand, MPI_Barrier() cannot return before all ranks entered
</span><br>
<span class="quotelev1">&gt; the barrier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also, you might find <a href="https://github.com/open-mpi/ompi/issues/1713">https://github.com/open-mpi/ompi/issues/1713</a> useful.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday, May 30, 2016, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran Ohio micro benchmarks for openmpi and noticed broadcast with
</span><br>
<span class="quotelev2">&gt;&gt; smaller number of bytes is faster than a barrier - 2us vs 120us.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to understand how this could happen?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29326.php">http://www.open-mpi.org/community/lists/users/2016/05/29326.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Previous message:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29326.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Reply:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
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
