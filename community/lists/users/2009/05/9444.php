<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 11:50:50 2009" -->
<!-- isoreceived="20090527155050" -->
<!-- sent="Wed, 27 May 2009 11:50:39 -0400" -->
<!-- isosent="20090527155039" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="76612AF8-E1D7-4854-B827-38A359F22B09_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905271816.06625.gkanis_at_ipta.demokritos.gr" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 11:50:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9453.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a problem of numerical stability, and there is no solution for  
<br>
such a problem in MPI. Usually,  preconditioning the input matrix  
<br>
improve the numerical stability.
<br>
<p>If you read the MPI standard, there is a __short__ section about what  
<br>
guarantees the MPI collective communications provide. There is only  
<br>
one: if you run the same collective twice, on the same set of nodes  
<br>
with the same input data, you will get the same output. In fact the  
<br>
main problem is that MPI consider all default operations (MPI_OP) as  
<br>
being commutative and associative, which is usually the case in real  
<br>
world but not when floating point rounding is around. When you  
<br>
increase the number of nodes, the data will be spread in smaller  
<br>
pieces, which means more operations will have to be done in order to  
<br>
achieve the reduction, i.e. more rounding errors might occur and so on.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 27, 2009, at 11:16 , vasilis wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Rank 0 accumulates all the res_cpu values into a single array,  
</span><br>
<span class="quotelev2">&gt;&gt; res.  It
</span><br>
<span class="quotelev2">&gt;&gt; starts with its own res_cpu and then adds all other processes.  When
</span><br>
<span class="quotelev2">&gt;&gt; np=2, that means the order is prescribed.  When np&gt;2, the order is no
</span><br>
<span class="quotelev2">&gt;&gt; longer prescribed and some floating-point rounding variations can  
</span><br>
<span class="quotelev2">&gt;&gt; start
</span><br>
<span class="quotelev2">&gt;&gt; to occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you are right. Now, the question is why would these floating- 
</span><br>
<span class="quotelev1">&gt; point rounding
</span><br>
<span class="quotelev1">&gt; variations occur for np&gt;2? It cannot be  due to a not prescribed  
</span><br>
<span class="quotelev1">&gt; order!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you want results to be more deterministic, you need to fix the  
</span><br>
<span class="quotelev2">&gt;&gt; order
</span><br>
<span class="quotelev2">&gt;&gt; in which res is aggregated.  E.g., instead of using MPI_ANY_SOURCE,  
</span><br>
<span class="quotelev2">&gt;&gt; loop
</span><br>
<span class="quotelev2">&gt;&gt; over the peer processes in a specific order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S.  It seems to me that you could use MPI collective operations to
</span><br>
<span class="quotelev2">&gt;&gt; implement what you're doing.  E.g., something like:
</span><br>
<span class="quotelev1">&gt; I could use these operations for the res variable (Will it make the  
</span><br>
<span class="quotelev1">&gt; summation
</span><br>
<span class="quotelev1">&gt; any faster?). But, I can not use them for the other 3 variables.
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
<li><strong>Next message:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9443.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9453.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
