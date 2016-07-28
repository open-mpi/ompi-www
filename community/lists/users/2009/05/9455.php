<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 03:30:11 2009" -->
<!-- isoreceived="20090528073011" -->
<!-- sent="Thu, 28 May 2009 10:30:06 +0300" -->
<!-- isosent="20090528073006" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905281030.06381.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4A1D79F5.3080003_at_sun.com" -->
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
<strong>Date:</strong> 2009-05-28 03:30:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 27 of May 2009 8:35:49 pm Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; This is a problem of numerical stability, and there is no solution
</span><br>
<span class="quotelev2">&gt; &gt; for  such a problem in MPI. Usually,  preconditioning the input
</span><br>
<span class="quotelev2">&gt; &gt; matrix  improve the numerical stability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the level of this particular e-mail thread, the issue seems to me to
</span><br>
<span class="quotelev1">&gt; be different.  Results are added together in some arbitrary order and
</span><br>
<span class="quotelev1">&gt; there are variations on order of 10^-10.  This is not an issue of
</span><br>
<span class="quotelev1">&gt; numerical stability, but just of bitwise floating-point reproducibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And, given that one could fix the order (by using explicit source
</span><br>
<span class="quotelev1">&gt; processes instead of MPI_ANY_SOURCE), one could &quot;fix&quot; this particular
</span><br>
<span class="quotelev1">&gt; problem in MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, I'm just picking nits here.
</span><br>
<p><p>Eugene,
<br>
<p>I really do not understand why you insist on the order. Maybe there is 
<br>
something subtle about the order that I do not understand. Anyhow, I changed 
<br>
the code according to your suggestion.
<br>
<p>Thank you,
<br>
Vasilis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9456.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9454.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9446.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
