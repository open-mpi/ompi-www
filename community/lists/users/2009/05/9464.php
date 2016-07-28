<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 03:13:06 2009" -->
<!-- isoreceived="20090529071306" -->
<!-- sent="Fri, 29 May 2009 10:12:59 +0300" -->
<!-- isosent="20090529071259" -->
<!-- name="vasilis" -->
<!-- email="gkanis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="200905291013.00121.gkanis_at_ipta.demokritos.gr" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4A1EDB97.204_at_sun.com" -->
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
<strong>Date:</strong> 2009-05-29 03:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;  The original issue, still reflected by the subject heading of this e-mail,
</span><br>
<span class="quotelev1">&gt; was that a message overran its receive buffer.  That was fixed by using
</span><br>
<span class="quotelev1">&gt; tags to distinguish different kinds of messages (res, jacob, row, and col).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I thought the next problem was the small (10^-10) variations in results
</span><br>
<span class="quotelev1">&gt; when np&gt;2.  In my mind, a plausible explanation for this is that you're
</span><br>
<span class="quotelev1">&gt; adding the &quot;res_cpu&quot; contributions from all the various processes to the
</span><br>
<span class="quotelev1">&gt; &quot;res&quot; array in some arbitrary order.  The contribution from rank 0 is added
</span><br>
<span class="quotelev1">&gt; in first, but all the others come in in some nondeterministic order.  Since
</span><br>
<span class="quotelev1">&gt; you're using finite-precision arithmetic, this can lead to tiny round-off
</span><br>
<span class="quotelev1">&gt; variations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  If you want to get rid of those minor variations, you have to perform
</span><br>
<span class="quotelev1">&gt; floating-point arithmetic in a particular order.
</span><br>
<p>Unfortunately it did not work. I replaced the &quot;MPI_ANY_SOURCE&quot;  with &quot;JW&quot; but 
<br>
I did not see any difference.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9465.php">Jeff Layton: "[OMPI users] Problem with 1.3.2 - need tips on debugging"</a>
<li><strong>Previous message:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>In reply to:</strong> <a href="9461.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9466.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
