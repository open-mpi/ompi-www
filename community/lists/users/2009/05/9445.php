<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 12:47:18 2009" -->
<!-- isoreceived="20090527164718" -->
<!-- sent="Wed, 27 May 2009 10:47:06 -0600" -->
<!-- isosent="20090527164706" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1D6E8A.60705_at_0x544745.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="76612AF8-E1D7-4854-B827-38A359F22B09_at_eecs.utk.edu" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 12:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've seen this behaviour with MUMPS on shared-memory machines as well 
<br>
using MPI.  I use the iterative refinement capability to sharpen the 
<br>
last few digits of the solution ( 2 or 3 iterations is usually enough).  
<br>
If you're not using that, give it a try, it will probably reduce the 
<br>
noise you're getting in your results.  The quality of the answer from a 
<br>
direct solve is highly dependent on the matrix scaling and pivot order 
<br>
and it's easy to get differences in the last few digits.  MUMPS itself 
<br>
is also asynchronous, and might not be completely deterministic in how 
<br>
it solves if MPI processes can run in a different order.
<br>
<p>Damien 
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; This is a problem of numerical stability, and there is no solution for 
</span><br>
<span class="quotelev1">&gt; such a problem in MPI. Usually,  preconditioning the input matrix 
</span><br>
<span class="quotelev1">&gt; improve the numerical stability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you read the MPI standard, there is a __short__ section about what 
</span><br>
<span class="quotelev1">&gt; guarantees the MPI collective communications provide. There is only 
</span><br>
<span class="quotelev1">&gt; one: if you run the same collective twice, on the same set of nodes 
</span><br>
<span class="quotelev1">&gt; with the same input data, you will get the same output. In fact the 
</span><br>
<span class="quotelev1">&gt; main problem is that MPI consider all default operations (MPI_OP) as 
</span><br>
<span class="quotelev1">&gt; being commutative and associative, which is usually the case in real 
</span><br>
<span class="quotelev1">&gt; world but not when floating point rounding is around. When you 
</span><br>
<span class="quotelev1">&gt; increase the number of nodes, the data will be spread in smaller 
</span><br>
<span class="quotelev1">&gt; pieces, which means more operations will have to be done in order to 
</span><br>
<span class="quotelev1">&gt; achieve the reduction, i.e. more rounding errors might occur and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 11:16 , vasilis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rank 0 accumulates all the res_cpu values into a single array, res.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starts with its own res_cpu and then adds all other processes.  When
</span><br>
<span class="quotelev3">&gt;&gt;&gt; np=2, that means the order is prescribed.  When np&gt;2, the order is no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; longer prescribed and some floating-point rounding variations can start
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes you are right. Now, the question is why would these 
</span><br>
<span class="quotelev2">&gt;&gt; floating-point rounding
</span><br>
<span class="quotelev2">&gt;&gt; variations occur for np&gt;2? It cannot be  due to a not prescribed order!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want results to be more deterministic, you need to fix the order
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop
</span><br>
<span class="quotelev3">&gt;&gt;&gt; over the peer processes in a specific order.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S.  It seems to me that you could use MPI collective operations to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implement what you're doing.  E.g., something like:
</span><br>
<span class="quotelev2">&gt;&gt; I could use these operations for the res variable (Will it make the 
</span><br>
<span class="quotelev2">&gt;&gt; summation
</span><br>
<span class="quotelev2">&gt;&gt; any faster?). But, I can not use them for the other 3 variables.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
