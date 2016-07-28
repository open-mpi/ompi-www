<?
$subject_val = "Re: [OMPI users] MPI_Bcast not broadcast to all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  7 06:58:22 2007" -->
<!-- isoreceived="20071207115822" -->
<!-- sent="Fri, 7 Dec 2007 03:57:59 -0800 (PST)" -->
<!-- isosent="20071207115759" -->
<!-- name="alireza ghahremanian" -->
<!-- email="mat2ag_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast not broadcast to all processes" -->
<!-- id="479531.91841.qm_at_web55105.mail.re4.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="71061FD0-62D9-4115-A242-309B0AD06BB3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast not broadcast to all processes<br>
<strong>From:</strong> alireza ghahremanian (<em>mat2ag_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-07 06:57:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff
<br>
<p>I want to send an integer vector of size 4000.It is a
<br>
very confusing problem.
<br>
<p>--- Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you're seeing the same error from 2 entirely
</span><br>
<span class="quotelev1">&gt; different MPI  
</span><br>
<span class="quotelev1">&gt; implementations, it is possible that it is an error
</span><br>
<span class="quotelev1">&gt; in your code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ensure that all processes are calling MPI_Bcast with
</span><br>
<span class="quotelev1">&gt; the same  
</span><br>
<span class="quotelev1">&gt; arguments (e.g., count, datatype, root, etc.), even
</span><br>
<span class="quotelev1">&gt; on that 4000th  
</span><br>
<span class="quotelev1">&gt; iteration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How big are the blocks that you are sending around?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2007, at 4:08 AM, alireza ghahremanian
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear Friends,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am writing a matrix multiplication program with
</span><br>
<span class="quotelev1">&gt; MPI. MPI_Bcast does
</span><br>
<span class="quotelev2">&gt; &gt; not broadcast to all processes, in last iteration
</span><br>
<span class="quotelev1">&gt; for block size
</span><br>
<span class="quotelev2">&gt; &gt; greater than a specific size. I test it with both
</span><br>
<span class="quotelev1">&gt; MPICH and OPENMPI.I
</span><br>
<span class="quotelev2">&gt; &gt; have 12 processes which 7 of them are reached to
</span><br>
<span class="quotelev1">&gt; MPI_Bcast but when
</span><br>
<span class="quotelev2">&gt; &gt; master (rank 0) send only 6 of them receive the
</span><br>
<span class="quotelev1">&gt; broadcast (exactly  
</span><br>
<span class="quotelev2">&gt; &gt; from
</span><br>
<span class="quotelev2">&gt; &gt; rank 1 to 6) and rank 7 stays in waiting.
</span><br>
<span class="quotelev1">&gt; Surprisingly this happen  
</span><br>
<span class="quotelev2">&gt; &gt; only
</span><br>
<span class="quotelev2">&gt; &gt; in iteration 3999 from 4000 and in the rest of
</span><br>
<span class="quotelev1">&gt; cases every thing is  
</span><br>
<span class="quotelev2">&gt; &gt; all
</span><br>
<span class="quotelev2">&gt; &gt; right, also if I reduce the block size, which,
</span><br>
<span class="quotelev1">&gt; will be sent, every
</span><br>
<span class="quotelev2">&gt; &gt; thing will be done correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
____________________________________________________________________________________
<br>
<span class="quotelev2">&gt; &gt; Looking for last minute shopping deals?
</span><br>
<span class="quotelev2">&gt; &gt; Find them fast with Yahoo! Search. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
<br>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;____________________________________________________________________________________
<br>
Looking for last minute shopping deals?  
<br>
Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4619.php">Jeff Squyres: "Re: [OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>Previous message:</strong> <a href="4617.php">Eric Thibodeau: "[OMPI users] Configure fails with icc 10.1.008"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
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
