<?
$subject_val = "Re: [OMPI users] MPI_Gatherv and 0 size?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 15:56:20 2009" -->
<!-- isoreceived="20090223205620" -->
<!-- sent="Mon, 23 Feb 2009 12:55:49 -0800" -->
<!-- isosent="20090223205549" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gatherv and 0 size?" -->
<!-- id="49A30D55.1070407_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="829D8DF0-AFF0-4E71-993A-D0FE9CDB1620_at_eecs.utk.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 15:55:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>In reply to:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8169.php">jody: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8169.php">jody: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the question is about passing NULL as a buffer pointer.  E.g.,
<br>
<p>MPI_Send(NULL, 0, mytype,dst, tag,comm);
<br>
<p>vs
<br>
<p>MPI_Send(&amp;dummy,0,mytype,dst,tag,comm);
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The only restriction the MPI standard impose on the sendcounts and  
</span><br>
<span class="quotelev1">&gt; recvcounts arrays is that the values be non-negative, so zero is a  
</span><br>
<span class="quotelev1">&gt; legal value.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't really understand your second question. Where do you want to  
</span><br>
<span class="quotelev1">&gt; use NULL ? In general NULL is not accepted in MPI as an argument for  
</span><br>
<span class="quotelev1">&gt; any function ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 23, 2009, at 02:55 , jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have an application in which various processes create different
</span><br>
<span class="quotelev2">&gt;&gt; amounts of data (including no data at all).
</span><br>
<span class="quotelev2">&gt;&gt; I have found that MPI_Scatterv and MPI_Gatherv do work with arrays
</span><br>
<span class="quotelev2">&gt;&gt; sendcounts or receivecounts containing zeros.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since i didn't find the case of 0 sizes in the descriptions
</span><br>
<span class="quotelev2">&gt;&gt; of these functions in the MPI reference, i wondered whether
</span><br>
<span class="quotelev2">&gt;&gt; the use of zeroes is legal or if i was simply lucky that it worked.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; An other point: currently i use 1-sized buffers in the
</span><br>
<span class="quotelev2">&gt;&gt; case of a 0-sized data transfer.
</span><br>
<span class="quotelev2">&gt;&gt; Now if 0-sized data transfer is legal, would it be ok to
</span><br>
<span class="quotelev2">&gt;&gt; pass NULL for the buffer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8167.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8165.php">Richard Treumann: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>In reply to:</strong> <a href="8164.php">George Bosilca: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8169.php">jody: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Reply:</strong> <a href="8169.php">jody: "Re: [OMPI users] MPI_Gatherv and 0 size?"</a>
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
