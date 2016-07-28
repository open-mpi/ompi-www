<?
$subject_val = "Re: [OMPI users] One-sided datatype errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 12:24:29 2010" -->
<!-- isoreceived="20101214172429" -->
<!-- sent="Tue, 14 Dec 2010 11:24:25 -0600" -->
<!-- isosent="20101214172425" -->
<!-- name="James Dinan" -->
<!-- email="dinan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided datatype errors" -->
<!-- id="4D07A849.8000108_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0787AD.7040806_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] One-sided datatype errors<br>
<strong>From:</strong> James Dinan (<em>dinan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 12:24:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Thanks for your help.  I also noticed trouble with subarray data types. 
<br>
&nbsp;&nbsp;I attached the same test again, but with subarray rather than indexed 
<br>
types.  It works correctly with MVAPICH on IB, but fails with OpenMPI 
<br>
1.5 with the following message:
<br>
<p>$ mpiexec -n 2 ./a.out
<br>
MPI RMA Strided Accumulate Test:
<br>
[f3:1747] *** An error occurred in MPI_Accumlate
<br>
[f3:1747] *** on win 3
<br>
[f3:1747] *** MPI_ERR_TYPE: invalid datatype
<br>
[f3:1747] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;~Jim.
<br>
<p>On 12/14/2010 09:05 AM, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Hi James:
</span><br>
<span class="quotelev1">&gt; I can reproduce the problem on a single node with Open MPI 1.5 and the
</span><br>
<span class="quotelev1">&gt; trunk. I have submitted a ticket with
</span><br>
<span class="quotelev1">&gt; the information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/13/10 18:44, James Dinan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting strange behavior using datatypes in a one-sided
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Accumulate operation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The attached example performs an accumulate into a patch of a shared
</span><br>
<span class="quotelev2">&gt;&gt; 2d matrix. It uses indexed datatypes and can be built with
</span><br>
<span class="quotelev2">&gt;&gt; displacement or absolute indices (hindexed) - both cases fail. I'm
</span><br>
<span class="quotelev2">&gt;&gt; seeing data validation errors, hanging, or other erroneous behavior
</span><br>
<span class="quotelev2">&gt;&gt; under OpenMPI 1.5 on Infiniband. The example works correctly under the
</span><br>
<span class="quotelev2">&gt;&gt; current release of MVAPICH on IB and under MPICH on shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; ~Jim.
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
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
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15128/test_mpi_subarray_accs.c">test_mpi_subarray_accs.c</a>
</ul>
<!-- attachment="test_mpi_subarray_accs.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15129.php">Ralph Castain: "Re: [OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15127.php">Eugene Loh: "Re: [OMPI users] MPI_Bcast vs. per worker MPI_Send?"</a>
<li><strong>In reply to:</strong> <a href="15123.php">Rolf vandeVaart: "Re: [OMPI users] One-sided datatype errors"</a>
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
