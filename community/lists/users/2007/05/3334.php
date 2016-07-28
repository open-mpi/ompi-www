<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 28 17:44:15 2007" -->
<!-- isoreceived="20070528214415" -->
<!-- sent="Mon, 28 May 2007 17:44:06 -0400" -->
<!-- isosent="20070528214406" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing an array in an MPI program?" -->
<!-- id="C280C566.7B96%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="009301c7a11f$cad60430$d80cb38b_at_bs" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-28 17:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>In reply to:</strong> <a href="3332.php">Tahir Malas: "[OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is nothing preventing you from creating your own shared memory segment
<br>
for use by your application.  This does not impact the MPI implementation.
<br>
You need to make sure you take care of all the issues associated with
<br>
multiple procs/threads accessing the same cache lines, which can cause quite
<br>
a bit of performance degradation, if not managed.
<br>
<p>Rich
<br>
<p><p>On 5/28/07 8:00 AM, &quot;Tahir Malas&quot; &lt;tmalas_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; We have an 8-node cluster of SMP nodes, which have dual-quad core
</span><br>
<span class="quotelev1">&gt; processors. The network is Infiniband. Each process in our parallel FORTRAN
</span><br>
<span class="quotelev1">&gt; 90 program holds an identical array that is used in all parts of the
</span><br>
<span class="quotelev1">&gt; program. However, when the size of the problem gets larger and larger, this
</span><br>
<span class="quotelev1">&gt; memory cost has started to become a memory bottleneck for us.
</span><br>
<span class="quotelev1">&gt; If all 8 processes in the same node could just read from the same memory
</span><br>
<span class="quotelev1">&gt; instead of holding their arrays, we would have significant memory gain. This
</span><br>
<span class="quotelev1">&gt; would be natural in a node if were to use OpenMP, but I wonder whether this
</span><br>
<span class="quotelev1">&gt; is somehow possible with only MPI? We know that passing to hybrid
</span><br>
<span class="quotelev1">&gt; programming (MPI + OpenMP) is a choice, but we look for simpler choices for
</span><br>
<span class="quotelev1">&gt; the time being.
</span><br>
<span class="quotelev1">&gt; In another post I have seen something like &quot;you could share the memory
</span><br>
<span class="quotelev1">&gt; between processes using the shm_xxx system calls of unix&quot;, but this isn't
</span><br>
<span class="quotelev1">&gt; clear to me. 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tahir Malas
</span><br>
<span class="quotelev1">&gt; Bilkent University
</span><br>
<span class="quotelev1">&gt; Electrical and Electronics Engineering Department
</span><br>
<span class="quotelev1">&gt; Phone: +90 312 290 1385
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Previous message:</strong> <a href="3333.php">Brian Barrett: "Re: [OMPI users] Weird interaction with modem under OS X"</a>
<li><strong>In reply to:</strong> <a href="3332.php">Tahir Malas: "[OMPI users] Sharing an array in an MPI program?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
<li><strong>Reply:</strong> <a href="3335.php">Tahir Malas: "Re: [OMPI users] Sharing an array in an MPI program?"</a>
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
