<?
$subject_val = "Re: [OMPI users] Broadcast faster than barrier";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 22:48:46 2016" -->
<!-- isoreceived="20160531024846" -->
<!-- sent="Mon, 30 May 2016 22:48:45 -0400" -->
<!-- isosent="20160531024845" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Broadcast faster than barrier" -->
<!-- id="CA+ssbKUnqp4Yj5+JF88+p49Lw=c7W-x0gh7su_G4MQk8PqmzNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=u+Lph=m+TEjMz+uocX33wxJJ15DNtmW41pNmgE1gbWqQg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-05-30 22:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gilles and Jeff. This makes a lot of sense now.
<br>
<p>And, Jeff, I thnk the paper you mentioned is this
<br>
<a href="http://ieeexplore.ieee.org/xpl/login.jsp?tp=&amp;arnumber=5184825&amp;url=http%3A%2F%2Fieeexplore.ieee.org%2Fxpls%2Fabs_all.jsp%3Farnumber%3D5184825">http://ieeexplore.ieee.org/xpl/login.jsp?tp=&amp;arnumber=5184825&amp;url=http%3A%2F%2Fieeexplore.ieee.org%2Fxpls%2Fabs_all.jsp%3Farnumber%3D5184825</a>
<br>
?
<br>
<p>Thank you,
<br>
Slaiya
<br>
<p>On Mon, May 30, 2016 at 9:24 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, you mean that it guarantees the value received after the bcast call is
</span><br>
<span class="quotelev2">&gt;&gt; consistent with value sent from root, but it doesn't have to wait till all
</span><br>
<span class="quotelev2">&gt;&gt; the ranks have received it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is what i believe, double checking the standard might not hurt
</span><br>
<span class="quotelev2">&gt;&gt; though ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No function has barrier semantics, except a barrier, although some
</span><br>
<span class="quotelev1">&gt; functions have barrier semantics due to data-dependencies for non-zero
</span><br>
<span class="quotelev1">&gt; counts (allgather, alltoall, allreduce).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reduce, Bcast, gather, and scatter should never have barrier semantics and
</span><br>
<span class="quotelev1">&gt; should not synchronize more than the explicit data decencies require. The
</span><br>
<span class="quotelev1">&gt; send-only ranks may return long before the recv-only ranks do, particularly
</span><br>
<span class="quotelev1">&gt; when the messages go via an eager protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One can imagine barrier as a 1-byte allreduce, but there are more
</span><br>
<span class="quotelev1">&gt; efficient implantations. Allreduce should never be faster than Bcast, as
</span><br>
<span class="quotelev1">&gt; Gilles explained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a nice paper on self-consistent performance of MPI implementations
</span><br>
<span class="quotelev1">&gt; that has lots of details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29331.php">http://www.open-mpi.org/community/lists/users/2016/05/29331.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29333.php">Cihan Altinay: "[OMPI users] Regression in MPI_File_close?!"</a>
<li><strong>Previous message:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>In reply to:</strong> <a href="29331.php">Jeff Hammond: "Re: [OMPI users] Broadcast faster than barrier"</a>
<!-- nextthread="start" -->
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
