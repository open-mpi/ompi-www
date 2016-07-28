<?
$subject_val = "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  8 12:07:14 2013" -->
<!-- isoreceived="20130908160714" -->
<!-- sent="Sun, 8 Sep 2013 18:07:11 +0200" -->
<!-- isosent="20130908160711" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory" -->
<!-- id="6EC6F325-CEAE-4080-BA3E-1AD64B4081FE_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="522C72E0.9000301_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-08 12:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22624.php">Max Staufer: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22624.php">Max Staufer: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not supposed to happen. Can you please post an example highlighting this behavior?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Sep 8, 2013, at 14:51 , Max Staufer &lt;max.staufer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  using ompi 1.4.5 or 1.6.5 for that matter, I came across an
</span><br>
<span class="quotelev1">&gt; interesting thing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when an MPI function is called from in a recusivly called subroutine
</span><br>
<span class="quotelev1">&gt; (Fortran Interface)
</span><br>
<span class="quotelev1">&gt; the MPI_ALLREDUCE function allocates memory in the OMPI_LIST_GROW functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does this indefinitly. In our case OMPI allocated 100GB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there a method to limit this behaviour ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Max
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
<li><strong>Next message:</strong> <a href="22624.php">Max Staufer: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22624.php">Max Staufer: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
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
