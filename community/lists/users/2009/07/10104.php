<?
$subject_val = "Re: [OMPI users] Send variable size of matrices";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 14:28:41 2009" -->
<!-- isoreceived="20090727182841" -->
<!-- sent="Mon, 27 Jul 2009 09:59:08 -0400" -->
<!-- isosent="20090727135908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send variable size of matrices" -->
<!-- id="C44E2A14-93F9-4039-BE51-37001E33280D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="610ca1a30907202355w24af3610kf540472a4c0f23a1_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 09:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you don't know the size a priori, you could always make a derived  
<br>
type that covers the memory region you want, send the size of that  
<br>
first, and then send the message with the real data (i.e., likely a  
<br>
derived type).
<br>
<p>On Jul 21, 2009, at 2:55 AM, Prasadcse Perera wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Its C bindings and if I clear the picture a bit more, what it does  
</span><br>
<span class="quotelev1">&gt; is partitioning the original matrix in to a set of sub matrices to  
</span><br>
<span class="quotelev1">&gt; be processed by the a other processes. And it seems that the only  
</span><br>
<span class="quotelev1">&gt; option left is to bundle off in to a temp buffer before sending as  
</span><br>
<span class="quotelev1">&gt; you have suggested. It would have been nice if there was a derived  
</span><br>
<span class="quotelev1">&gt; data type to do the trick :) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prasad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 21, 2009 at 12:00 PM, Terry Frankcombe  
</span><br>
<span class="quotelev1">&gt; &lt;terry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Which language bindings?
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
<span class="quotelev2">&gt; &gt; of sub matrices to a set of processes by a lead process who holds  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; original matrix.  Here, the matrices are square matrices and the
</span><br>
<span class="quotelev2">&gt; &gt; receiving process doesn't  know the size of the receiving matrix. In
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Bcast, I have seen that we can broadcast a whole matrix. Is  
</span><br>
<span class="quotelev1">&gt; there
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
<span class="quotelev2">&gt; &gt; <a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10103.php">Shaun Jackman: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="10022.php">Prasadcse Perera: "Re: [OMPI users] Send variable size of matrices"</a>
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
