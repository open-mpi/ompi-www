<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 16:19:02 2006" -->
<!-- isoreceived="20060306211902" -->
<!-- sent="Mon, 6 Mar 2006 16:18:53 -0500" -->
<!-- isosent="20060306211853" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="E17477CA-AA98-46A9-994C-26C735E6475E_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C031EBE3.9113%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 16:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 6, 2006, at 3:38 PM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I'm not quite sure how collective computation calls work. For  
</span><br>
<span class="quotelev1">&gt; example, for an MPI_REDUCE with MPI_SUM, do all the processes  
</span><br>
<span class="quotelev1">&gt; collect values from all the processes and calculate the sum and put  
</span><br>
<span class="quotelev1">&gt; result in recvbuf on root? Sounds strange.
</span><br>
<p>The implementation of how MPI_REDUCE works is not specified by the  
<br>
standard.  Only the semantics are specified (when MPI_REDUCE with  
<br>
MPI_SUM returns, the root's recvbuf has the sum of all the data from  
<br>
the non-root processes).  As such, an MPI implementation is free to  
<br>
implement it however it wishes.
<br>
<p>There has been a considerable amount of research on how to optimize  
<br>
collective algorithm implementations in MPI over the past ~5 years  
<br>
(and outside of MPI for 20+ years before that).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
