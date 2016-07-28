<?
$subject_val = "Re: [OMPI users] Send variable size of matrices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 02:56:00 2009" -->
<!-- isoreceived="20090721065600" -->
<!-- sent="Tue, 21 Jul 2009 12:25:56 +0530" -->
<!-- isosent="20090721065556" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send variable size of matrices" -->
<!-- id="610ca1a30907202355w24af3610kf540472a4c0f23a1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1248157819.5784.17.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Send variable size of matrices<br>
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 02:55:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10023.php">Guillaume Sylvand: "[OMPI users] Failure in MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>In reply to:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Its C bindings and if I clear the picture a bit more, what it does is
<br>
partitioning the original matrix in to a set of sub matrices to be processed
<br>
by the a other processes. And it seems that the only option left is to
<br>
bundle off in to a temp buffer before sending as you have suggested. It
<br>
would have been nice if there was a derived data type to do the trick :) ?
<br>
<p>Thanks,
<br>
Prasad.
<br>
<p>On Tue, Jul 21, 2009 at 12:00 PM, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Which language bindings?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For Fortran, consider pack or reshape.  (I *think* whether array
</span><br>
<span class="quotelev1">&gt; sections are bundled off into temporary, contiguous storage is
</span><br>
<span class="quotelev1">&gt; implementation-dependent.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't it easier to broadcast the size first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-07-21 at 11:53 +0530, Prasadcse Perera wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; I'm writing an application which requires sending some variable size
</span><br>
<span class="quotelev2">&gt; &gt; of sub matrices to a set of processes by a lead process who holds the
</span><br>
<span class="quotelev2">&gt; &gt; original matrix.  Here, the matrices are square matrices and the
</span><br>
<span class="quotelev2">&gt; &gt; receiving process doesn't  know the size of the receiving matrix. In
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Bcast, I have seen that we can broadcast a whole matrix. Is there
</span><br>
<span class="quotelev2">&gt; &gt; a similar way to do this with a derived data type for the matrices
</span><br>
<span class="quotelev2">&gt; &gt; which we can send a matrix without looping the blocks ?.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Prasad.
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10023.php">Guillaume Sylvand: "[OMPI users] Failure in MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>In reply to:</strong> <a href="10021.php">Terry Frankcombe: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10104.php">Jeff Squyres: "Re: [OMPI users] Send variable size of matrices"</a>
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
