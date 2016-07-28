<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 12:21:35 2010" -->
<!-- isoreceived="20100728162135" -->
<!-- sent="Wed, 28 Jul 2010 18:21:28 +0200" -->
<!-- isosent="20100728162128" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280334088.7889.11.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="4C50515E.7090909_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 12:21:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13840.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-07-28 at 11:48 -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Hugo, Jeff, list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo: I think David Zhang's suggestion was to use
</span><br>
<span class="quotelev1">&gt; MPI_REAL8 not MPI_REAL, instead of MPI_DOUBLE_PRECISION in your
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Still, to me it looks like OpenMPI is making double precision 4-byte 
</span><br>
<span class="quotelev1">&gt; long, which shorter than I expected it be (8 bytes),
</span><br>
<span class="quotelev1">&gt; at least when looking at the output of ompi_info --all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I always get get a size 4 for dbl prec in my x86_64 machine,
</span><br>
<span class="quotelev1">&gt; from ompi_info --all.
</span><br>
<span class="quotelev1">&gt; I confirmed this in six builds of OpenMPI 1.4.2:  gcc+gfortran,
</span><br>
<span class="quotelev1">&gt; gcc+pgf90, gcc+ifort, icc+ifort, pgcc+pgf90, and opencc+openf95.
</span><br>
<span class="quotelev1">&gt; Although the output of ompi_info never says this is actually the size
</span><br>
<span class="quotelev1">&gt; of MPI_DOUBLE_PRECISION, just of &quot;dbl prec&quot;, which is a bit ambiguous.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I include the output below.  Note that alignment for gcc+ifort
</span><br>
<span class="quotelev1">&gt; is 1, all others are 4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff:  Is this correct?
</span><br>
<p>This is wrong, it should be 8 and alignement should be 8 even for intel.
<br>
And i also see exactly the same thing.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13842.php">christophe petit: "[OMPI users] MPIRUN Error on Mac pro i7 laptop and linux desktop"</a>
<li><strong>Previous message:</strong> <a href="13840.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13837.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
