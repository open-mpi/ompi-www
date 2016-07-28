<?
$subject_val = "Re: [OMPI users] Send variable size of matrices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 02:30:30 2009" -->
<!-- isoreceived="20090721063030" -->
<!-- sent="Tue, 21 Jul 2009 16:30:19 +1000" -->
<!-- isosent="20090721063019" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send variable size of matrices" -->
<!-- id="1248157819.5784.17.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="610ca1a30907202323y65a89fefy79fe782b599f758d_at_mail.gmail.com" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 02:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10020.php">Prasadcse Perera: "[OMPI users] Send variable size of matrices"</a>
<li><strong>In reply to:</strong> <a href="10020.php">Prasadcse Perera: "[OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which language bindings?
<br>
<p>For Fortran, consider pack or reshape.  (I *think* whether array
<br>
sections are bundled off into temporary, contiguous storage is
<br>
implementation-dependent.)
<br>
<p>Isn't it easier to broadcast the size first?
<br>
<p><p>On Tue, 2009-07-21 at 11:53 +0530, Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I'm writing an application which requires sending some variable size
</span><br>
<span class="quotelev1">&gt; of sub matrices to a set of processes by a lead process who holds the
</span><br>
<span class="quotelev1">&gt; original matrix.  Here, the matrices are square matrices and the
</span><br>
<span class="quotelev1">&gt; receiving process doesn't  know the size of the receiving matrix. In
</span><br>
<span class="quotelev1">&gt; MPI_Bcast, I have seen that we can broadcast a whole matrix. Is there
</span><br>
<span class="quotelev1">&gt; a similar way to do this with a derived data type for the matrices
</span><br>
<span class="quotelev1">&gt; which we can send a matrix without looping the blocks ?.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prasad.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
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
<li><strong>Next message:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Previous message:</strong> <a href="10020.php">Prasadcse Perera: "[OMPI users] Send variable size of matrices"</a>
<li><strong>In reply to:</strong> <a href="10020.php">Prasadcse Perera: "[OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<li><strong>Reply:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
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
