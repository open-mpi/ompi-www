<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:16:13 2009" -->
<!-- isoreceived="20090527151613" -->
<!-- sent="Wed, 27 May 2009 18:16:06 +0300" -->
<!-- isosent="20090527151606" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905271816.06625.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1D5104.7090501_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU<br>
<strong>From:</strong> vasilis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Rank 0 accumulates all the res_cpu values into a single array, res.  It
</span><br>
<span class="quotelev1">&gt; starts with its own res_cpu and then adds all other processes.  When
</span><br>
<span class="quotelev1">&gt; np=2, that means the order is prescribed.  When np&gt;2, the order is no
</span><br>
<span class="quotelev1">&gt; longer prescribed and some floating-point rounding variations can start
</span><br>
<span class="quotelev1">&gt; to occur.
</span><br>
<p>Yes you are right. Now, the question is why would these floating-point rounding 
<br>
variations occur for np&gt;2? It cannot be  due to a not prescribed order!!
<br>
<p><span class="quotelev1">&gt; If you want results to be more deterministic, you need to fix the order
</span><br>
<span class="quotelev1">&gt; in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE, loop
</span><br>
<span class="quotelev1">&gt; over the peer processes in a specific order.
</span><br>
<p><span class="quotelev1">&gt; P.S.  It seems to me that you could use MPI collective operations to
</span><br>
<span class="quotelev1">&gt; implement what you're doing.  E.g., something like:
</span><br>
I could use these operations for the res variable (Will it make the summation 
<br>
any faster?). But, I can not use them for the other 3 variables.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9441.php">Jeff Squyres: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
