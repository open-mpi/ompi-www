<?
$subject_val = "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 13:36:04 2009" -->
<!-- isoreceived="20090527173604" -->
<!-- sent="Wed, 27 May 2009 10:35:49 -0700" -->
<!-- isosent="20090527173549" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;An error occurred in MPI_Recv&amp;quot; with more than 2 CPU" -->
<!-- id="4A1D79F5.3080003_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 13:35:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9447.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; This is a problem of numerical stability, and there is no solution 
</span><br>
<span class="quotelev1">&gt; for  such a problem in MPI. Usually,  preconditioning the input 
</span><br>
<span class="quotelev1">&gt; matrix  improve the numerical stability.
</span><br>
<p>At the level of this particular e-mail thread, the issue seems to me to 
<br>
be different.  Results are added together in some arbitrary order and 
<br>
there are variations on order of 10^-10.  This is not an issue of 
<br>
numerical stability, but just of bitwise floating-point reproducibility.
<br>
<p>And, given that one could fix the order (by using explicit source 
<br>
processes instead of MPI_ANY_SOURCE), one could &quot;fix&quot; this particular 
<br>
problem in MPI.
<br>
<p>Anyhow, I'm just picking nits here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9447.php">Jeff Squyres: "Re: [OMPI users] problem with installing openmpi with intel compiler onubuntu"</a>
<li><strong>Previous message:</strong> <a href="9445.php">Damien Hocking: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9444.php">George Bosilca: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Reply:</strong> <a href="9455.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
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
