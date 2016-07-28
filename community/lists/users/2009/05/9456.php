<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 03:58:03 2009" -->
<!-- isoreceived="20090528075803" -->
<!-- sent="Thu, 28 May 2009 10:57:58 +0300" -->
<!-- isosent="20090528075758" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905281057.58454.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1D6E8A.60705_at_0x544745.com" -->
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
<strong>Date:</strong> 2009-05-28 03:57:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 27 of May 2009 7:47:06 pm Damien Hocking wrote:
<br>
<span class="quotelev1">&gt; I've seen this behaviour with MUMPS on shared-memory machines as well
</span><br>
<span class="quotelev1">&gt; using MPI.  I use the iterative refinement capability to sharpen the
</span><br>
<span class="quotelev1">&gt; last few digits of the solution ( 2 or 3 iterations is usually enough).
</span><br>
<span class="quotelev1">&gt; If you're not using that, give it a try, it will probably reduce the
</span><br>
<span class="quotelev1">&gt; noise you're getting in your results.  The quality of the answer from a
</span><br>
<span class="quotelev1">&gt; direct solve is highly dependent on the matrix scaling and pivot order
</span><br>
<span class="quotelev1">&gt; and it's easy to get differences in the last few digits.  MUMPS itself
</span><br>
<span class="quotelev1">&gt; is also asynchronous, and might not be completely deterministic in how
</span><br>
<span class="quotelev1">&gt; it solves if MPI processes can run in a different order.
</span><br>
<p>I set the maximum step of refinement to 5. It did change the solution, but it 
<br>
is not the same when I run it with 2CPUs
<br>
<p><p><p><span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is a problem of numerical stability, and there is no solution for
</span><br>
<span class="quotelev2">&gt; &gt; such a problem in MPI. Usually,  preconditioning the input matrix
</span><br>
<span class="quotelev2">&gt; &gt; improve the numerical stability.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you read the MPI standard, there is a __short__ section about what
</span><br>
<span class="quotelev2">&gt; &gt; guarantees the MPI collective communications provide. There is only
</span><br>
<span class="quotelev2">&gt; &gt; one: if you run the same collective twice, on the same set of nodes
</span><br>
<span class="quotelev2">&gt; &gt; with the same input data, you will get the same output. In fact the
</span><br>
<span class="quotelev2">&gt; &gt; main problem is that MPI consider all default operations (MPI_OP) as
</span><br>
<span class="quotelev2">&gt; &gt; being commutative and associative, which is usually the case in real
</span><br>
<span class="quotelev2">&gt; &gt; world but not when floating point rounding is around. When you
</span><br>
<span class="quotelev2">&gt; &gt; increase the number of nodes, the data will be spread in smaller
</span><br>
<span class="quotelev2">&gt; &gt; pieces, which means more operations will have to be done in order to
</span><br>
<span class="quotelev2">&gt; &gt; achieve the reduction, i.e. more rounding errors might occur and so on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;     george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 27, 2009, at 11:16 , vasilis wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Rank 0 accumulates all the res_cpu values into a single array, res.  It
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; starts with its own res_cpu and then adds all other processes.  When
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; np=2, that means the order is prescribed.  When np&gt;2, the order is no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; longer prescribed and some floating-point rounding variations can start
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to occur.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes you are right. Now, the question is why would these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; floating-point rounding
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variations occur for np&gt;2? It cannot be  due to a not prescribed order!!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you want results to be more deterministic, you need to fix the order
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; loop
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; over the peer processes in a specific order.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; P.S.  It seems to me that you could use MPI collective operations to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; implement what you're doing.  E.g., something like:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I could use these operations for the res variable (Will it make the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; summation
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any faster?). But, I can not use them for the other 3 variables.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="9457.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1242, Issue 5"</a>
<li><strong>Previous message:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
