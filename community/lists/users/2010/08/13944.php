<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 13:10:45 2010" -->
<!-- isoreceived="20100809171045" -->
<!-- sent="Mon, 9 Aug 2010 13:11:54 -0400" -->
<!-- isosent="20100809171154" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="BDDA0039-62DD-40C0-AB43-FA384BBD06DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C509C11.4010904_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 13:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2010, at 5:07 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Still, the alignment under Intel may or may not be right.
</span><br>
<span class="quotelev1">&gt; And this may or may not explain the errors that Hugo has got.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, the ompi_info from my OpenMPI 1.3.2 and 1.2.8
</span><br>
<span class="quotelev1">&gt; report exactly the same as OpenMPI 1.4.2, namely
</span><br>
<span class="quotelev1">&gt; Fort dbl prec size: 4  and
</span><br>
<span class="quotelev1">&gt; Fort dbl prec align: 4,
</span><br>
<span class="quotelev1">&gt; except that *if the Intel Fortran compiler (ifort) was used*
</span><br>
<span class="quotelev1">&gt; I get 1 byte alignment:
</span><br>
<span class="quotelev1">&gt; Fort dbl prec align: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, this issue has been around for a while,
</span><br>
<span class="quotelev1">&gt; and involves both the size and the alignment (in Intel)
</span><br>
<span class="quotelev1">&gt; of double precision.
</span><br>
<p>Yes, it's quite problematic to try to determine the alignment of Fortran types -- compilers can do different things and there's no reliable way (that I know of, at least) to absolutely get the &quot;native&quot; alignment.
<br>
<p>That being said, we didn't previously find any correctness issues with using an alignment of 1.
<br>
<p><span class="quotelev1">&gt; We have a number of pieces of code here where grep shows
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION.
</span><br>
<span class="quotelev1">&gt; Not sure how much of it has actually been active, as there are always
</span><br>
<span class="quotelev1">&gt; lots of cpp directives to select active code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular I found this interesting snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      if (MPI_DOUBLE_PRECISION==20 .and. MPI_REAL8==18) then
</span><br>
<span class="quotelev1">&gt;         ! LAM MPI defined MPI_REAL8 differently from MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;         ! and LAM MPI's allreduce does not accept on MPI_REAL8
</span><br>
<span class="quotelev1">&gt;         MPIreal_t    = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;         MPIreal_t    = MPI_REAL8
</span><br>
<span class="quotelev1">&gt;      endif
</span><br>
<p>This kind of thing shouldn't be an issue with Open MPI, right?
<br>
<p>FWIW, OMPI uses different numbers for MPI_DOUBLE_PRECISION and MPI_REAL8 than LAM.  They're distinct MPI datatypes because they *could* be different.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13945.php">ananda.mudar_at_[hidden]: "[OMPI users] Checkpointing mpi4py program"</a>
<li><strong>Previous message:</strong> <a href="13943.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13965.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
