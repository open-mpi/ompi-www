<?
$subject_val = "Re: [OMPI users] MPI_Bcast not broadcast to all processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 08:41:25 2007" -->
<!-- isoreceived="20071205134125" -->
<!-- sent="Wed, 5 Dec 2007 08:41:19 -0500" -->
<!-- isosent="20071205134119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast not broadcast to all processes" -->
<!-- id="71061FD0-62D9-4115-A242-309B0AD06BB3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="245028.53793.qm_at_web55115.mail.re4.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 08:41:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Reply:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you're seeing the same error from 2 entirely different MPI  
<br>
implementations, it is possible that it is an error in your code.
<br>
<p>Ensure that all processes are calling MPI_Bcast with the same  
<br>
arguments (e.g., count, datatype, root, etc.), even on that 4000th  
<br>
iteration.
<br>
<p>How big are the blocks that you are sending around?
<br>
<p><p>On Dec 5, 2007, at 4:08 AM, alireza ghahremanian wrote:
<br>
<p><span class="quotelev1">&gt; Dear Friends,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am writing a matrix multiplication program with MPI. MPI_Bcast does
</span><br>
<span class="quotelev1">&gt; not broadcast to all processes, in last iteration for block size
</span><br>
<span class="quotelev1">&gt; greater than a specific size. I test it with both MPICH and OPENMPI.I
</span><br>
<span class="quotelev1">&gt; have 12 processes which 7 of them are reached to MPI_Bcast but when
</span><br>
<span class="quotelev1">&gt; master (rank 0) send only 6 of them receive the broadcast (exactly  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; rank 1 to 6) and rank 7 stays in waiting. Surprisingly this happen  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; in iteration 3999 from 4000 and in the rest of cases every thing is  
</span><br>
<span class="quotelev1">&gt; all
</span><br>
<span class="quotelev1">&gt; right, also if I reduce the block size, which, will be sent, every
</span><br>
<span class="quotelev1">&gt; thing will be done correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; ____________________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Looking for last minute shopping deals?
</span><br>
<span class="quotelev1">&gt; Find them fast with Yahoo! Search.  <a href="http://tools.search.yahoo.com/newsearch/category.php?category=shopping">http://tools.search.yahoo.com/newsearch/category.php?category=shopping</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">de Almeida, Valmor F.: "Re: [OMPI users] suggested intel compiler version for openmpi-1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>In reply to:</strong> <a href="4595.php">alireza ghahremanian: "[OMPI users] MPI_Bcast not broadcast to all processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
<li><strong>Reply:</strong> <a href="4618.php">alireza ghahremanian: "Re: [OMPI users] MPI_Bcast not broadcast to all processes"</a>
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
