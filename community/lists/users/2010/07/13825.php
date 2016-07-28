<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 07:55:47 2010" -->
<!-- isoreceived="20100728115547" -->
<!-- sent="Wed, 28 Jul 2010 07:56:19 -0400" -->
<!-- isosent="20100728115619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="26ACC128-05DB-4662-A2BE-992869FA903E_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 07:56:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2010, at 4:19 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Is there a simple way to check the number of bytes associated to each
</span><br>
<span class="quotelev1">&gt; MPI basic type of OpenMPI on a specific machine (or machine+compiler)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something that would come out easily, say, from ompi_info?
</span><br>
<p>Not via ompi_info, but the MPI function MPI_GET_EXTENT will tell you the datatype's size.
<br>
<p>-----
<br>
[4:54] svbu-mpi:~/mpi % cat extent.f90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr, ext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TYPE_EXTENT(MPI_DOUBLE_PRECISION, ext, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Type extent of DOUBLE_PREC is', ext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
[4:54] svbu-mpi:~/mpi % mpif90 extent.f90 -o extent -g
<br>
[4:54] svbu-mpi:~/mpi % ./extent
<br>
&nbsp;Type extent of DOUBLE_PREC is           8
<br>
[4:54] svbu-mpi:~/mpi % 
<br>
-----
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
<li><strong>Next message:</strong> <a href="13826.php">Yves Caniou: "Re: [OMPI users] OpenMPI providing rank?"</a>
<li><strong>Previous message:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13807.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13830.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
