<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 03:26:17 2009" -->
<!-- isoreceived="20090528072617" -->
<!-- sent="Thu, 28 May 2009 10:26:11 +0300" -->
<!-- isosent="20090528072611" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905281026.12012.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> vasilis (<em>gkanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-28 03:26:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This is a problem of numerical stability, and there is no solution for
</span><br>
<span class="quotelev1">&gt; such a problem in MPI. Usually,  preconditioning the input matrix
</span><br>
<span class="quotelev1">&gt; improve the numerical stability.
</span><br>
<p>It could be a numerical stability but this would imply that I have an ill-
<br>
conditioned matrix. This is not my case.
<br>
<p><span class="quotelev1">&gt; If you read the MPI standard, there is a __short__ section about what
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
<p>You could have a point if I would see these small differences in both matrices. 
<br>
I am solving the system Ax=b with the MUMPS libraries. The construction of the 
<br>
matrix A and the matrix-column b is distributed among np CPU. The matrix A is 
<br>
the same whether I use 2CPUs or np CPUs. The matrix b would slightly change if 
<br>
I use more than 2CPUs.
<br>
<p>My data are not spread in smaller pieces!! I am using the FEM to solve the 
<br>
system of equations, and I use MPI to partition the domain. Therefore, the 
<br>
data (i.e., the vector of unknowns) is the same in all the CPUs, and each CPU 
<br>
is constructing a portion of the matrices A,b. Then, in the host CPU I add all 
<br>
these pieces into A and b.
<br>
<p>Thank you,
<br>
Vasilis
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2009, at 11:16 , vasilis wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rank 0 accumulates all the res_cpu values into a single array,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; res.  It
</span><br>
<span class="quotelev3">&gt; &gt;&gt; starts with its own res_cpu and then adds all other processes.  When
</span><br>
<span class="quotelev3">&gt; &gt;&gt; np=2, that means the order is prescribed.  When np&gt;2, the order is no
</span><br>
<span class="quotelev3">&gt; &gt;&gt; longer prescribed and some floating-point rounding variations can
</span><br>
<span class="quotelev3">&gt; &gt;&gt; start
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to occur.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes you are right. Now, the question is why would these floating-
</span><br>
<span class="quotelev2">&gt; &gt; point rounding
</span><br>
<span class="quotelev2">&gt; &gt; variations occur for np&gt;2? It cannot be  due to a not prescribed
</span><br>
<span class="quotelev2">&gt; &gt; order!!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you want results to be more deterministic, you need to fix the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; order
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; loop
</span><br>
<span class="quotelev3">&gt; &gt;&gt; over the peer processes in a specific order.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; P.S.  It seems to me that you could use MPI collective operations to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; implement what you're doing.  E.g., something like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I could use these operations for the res variable (Will it make the
</span><br>
<span class="quotelev2">&gt; &gt; summation
</span><br>
<span class="quotelev2">&gt; &gt; any faster?). But, I can not use them for the other 3 variables.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9452.php">Michael Kuklik: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
