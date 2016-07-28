<?
$subject_val = "[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 04:00:00 2010" -->
<!-- isoreceived="20100217090000" -->
<!-- sent="Wed, 17 Feb 2010 09:59:55 +0100" -->
<!-- isosent="20100217085955" -->
<!-- name="Michael Hofmann" -->
<!-- email="michael.hofmann_at_[hidden]" -->
<!-- subject="[OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial" -->
<!-- id="op.u79kl5d3nx0z8g_at_amplitude.informatik.tu-chemnitz.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial<br>
<strong>From:</strong> Michael Hofmann (<em>michael.hofmann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 03:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Reply:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to the MPI Standard, &quot;only arguments sendbuf, sendcount,  
<br>
sendtype, root, and comm are significant&quot; on non-root processes in  
<br>
MPI_Gather. However, in routine &quot;ompi_coll_tuned_gather_intra_binomial&quot;  
<br>
the value of &quot;rdtype&quot; (&quot;recvtype&quot; of MPI_Gather) is used. This leads to  
<br>
crash if an uninitialized value is used.
<br>
<p>The problem exists in version 1.4.1.
<br>
<p><p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Previous message:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
<li><strong>Reply:</strong> <a href="12095.php">Jeff Squyres: "Re: [OMPI users] Bug: non-root processes use receive-type in ompi_coll_tuned_gather_intra_binomial"</a>
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
