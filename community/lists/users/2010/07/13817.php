<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 23:45:05 2010" -->
<!-- isoreceived="20100728034505" -->
<!-- sent="Wed, 28 Jul 2010 13:44:54 +1000" -->
<!-- isosent="20100728034454" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280288694.6370.194.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4C4F3F58.2040300_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 23:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2010-07-27 at 16:19 -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Hugo, David, Jeff, Terry, Anton, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose maybe we're guessing that somehow on Hugo's iMac 
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION may not have as many bytes as dp = kind(1.d0),
</span><br>
<span class="quotelev1">&gt; hence the segmentation fault on MPI_Allreduce.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a simple way to check the number of bytes associated to each
</span><br>
<span class="quotelev1">&gt; MPI basic type of OpenMPI on a specific machine (or machine+compiler)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something that would come out easily, say, from ompi_info?
</span><br>
<p>bit_size() will give you the integer size.  For reals, digits() will
<br>
give you a hint, but the Fortran real data model is designed to not tie
<br>
you to a particular representation (my interpretation), so there's no
<br>
language feature to give a simple word size.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13818.php">Nysal Jan: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13816.php">Yves Caniou: "[OMPI users] OpenMPI providing rank?"</a>
<li><strong>In reply to:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13825.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
