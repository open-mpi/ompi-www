<?
$subject_val = "Re: [OMPI users] One-sided datatype errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 10:06:11 2010" -->
<!-- isoreceived="20101214150611" -->
<!-- sent="Tue, 14 Dec 2010 10:05:17 -0500" -->
<!-- isosent="20101214150517" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] One-sided datatype errors" -->
<!-- id="4D0787AD.7040806_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D06AFC0.2060504_at_mcs.anl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 10:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15122.php">Ralph Castain: "Re: [OMPI users] Spawning with the ompi-server option"</a>
<li><strong>In reply to:</strong> <a href="15116.php">James Dinan: "[OMPI users] One-sided datatype errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Reply:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi James:
<br>
I can reproduce the problem on a single node with Open MPI 1.5 and the 
<br>
trunk.  I have submitted a ticket with
<br>
the information.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2656">https://svn.open-mpi.org/trac/ompi/ticket/2656</a>
<br>
<p>Rolf
<br>
<p>On 12/13/10 18:44, James Dinan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting strange behavior using datatypes in a one-sided 
</span><br>
<span class="quotelev1">&gt; MPI_Accumulate operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached example performs an accumulate into a patch of a shared 
</span><br>
<span class="quotelev1">&gt; 2d matrix.  It uses indexed datatypes and can be built with 
</span><br>
<span class="quotelev1">&gt; displacement or absolute indices (hindexed) - both cases fail.  I'm 
</span><br>
<span class="quotelev1">&gt; seeing data validation errors, hanging, or other erroneous behavior 
</span><br>
<span class="quotelev1">&gt; under OpenMPI 1.5 on Infiniband.  The example works correctly under 
</span><br>
<span class="quotelev1">&gt; the current release of MVAPICH on IB and under MPICH on shared memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;  ~Jim.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15124.php">Lydia Heck: "[OMPI users] jobs with more that 2, 500 processes will not even start"</a>
<li><strong>Previous message:</strong> <a href="15122.php">Ralph Castain: "Re: [OMPI users] Spawning with the ompi-server option"</a>
<li><strong>In reply to:</strong> <a href="15116.php">James Dinan: "[OMPI users] One-sided datatype errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
<li><strong>Reply:</strong> <a href="15128.php">James Dinan: "Re: [OMPI users] One-sided datatype errors"</a>
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
