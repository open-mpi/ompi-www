<?
$subject_val = "Re: [OMPI users] MPI_Gatherv and 0 size?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 15:28:37 2009" -->
<!-- isoreceived="20090223202837" -->
<!-- sent="Mon, 23 Feb 2009 15:28:32 -0500" -->
<!-- isosent="20090223202832" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gatherv and 0 size?" -->
<!-- id="829D8DF0-AFF0-4E71-993A-D0FE9CDB1620_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0902222355t3adcd698q6bf85308aa6a093f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Gatherv and 0 size?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 15:28:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Previous message:</strong> <a href="8163.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="8155.php">jody: "[OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only restriction the MPI standard impose on the sendcounts and  
<br>
recvcounts arrays is that the values be non-negative, so zero is a  
<br>
legal value.
<br>
<p>I don't really understand your second question. Where do you want to  
<br>
use NULL ? In general NULL is not accepted in MPI as an argument for  
<br>
any function ...
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Feb 23, 2009, at 02:55 , jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I have an application in which various processes create different
</span><br>
<span class="quotelev1">&gt; amounts of data (including no data at all).
</span><br>
<span class="quotelev1">&gt; I have found that MPI_Scatterv and MPI_Gatherv do work with arrays
</span><br>
<span class="quotelev1">&gt; sendcounts or receivecounts containing zeros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since i didn't find the case of 0 sizes in the descriptions
</span><br>
<span class="quotelev1">&gt; of these functions in the MPI reference, i wondered whether
</span><br>
<span class="quotelev1">&gt; the use of zeroes is legal or if i was simply lucky that it worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An other point: currently i use 1-sized buffers in the
</span><br>
<span class="quotelev1">&gt; case of a 0-sized data transfer.
</span><br>
<span class="quotelev1">&gt; Now if 0-sized data transfer is legal, would it be ok to
</span><br>
<span class="quotelev1">&gt; pass NULL for the buffer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Previous message:</strong> <a href="8163.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="8155.php">jody: "[OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8166.php">Eugene Loh: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
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
