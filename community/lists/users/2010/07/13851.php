<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 16:05:57 2010" -->
<!-- isoreceived="20100728200557" -->
<!-- sent="Wed, 28 Jul 2010 13:05:52 -0700" -->
<!-- isosent="20100728200552" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="20100728200552.GB30397_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C504A8F.80309_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 16:05:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 28, 2010 at 11:19:43AM -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hugo Gagnon wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<span class="quotelev2">&gt;&gt; case:
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt; Does it make any sense to you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Hugo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
</span><br>
<span class="quotelev1">&gt; same as real8, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't make sense, but that's what I have (now that you told me
</span><br>
<span class="quotelev1">&gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $      Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this a bug in OpenMPI perhaps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't come across to this problem, most likely because
</span><br>
<span class="quotelev1">&gt; the codes here don't use &quot;double precision&quot; but real*8 or similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also make sure you are picking the right ompi_info, mpif90/f77, mpiexec.
</span><br>
<span class="quotelev1">&gt; Often times old versions and tangled PATH make things very confusing.
</span><br>
<p>This is indeed worrisome as I confirm the findings on our clusters both
<br>
with ompi 1.3.3 and 1.4.1:
<br>
<p>ompi_info --all | grep -i fort
<br>
...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 size: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 size: 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx32 size: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer1 align: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer2 align: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Fort integer16 align: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real4 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 align: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real16 align: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl prec align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx align: 4                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort dbl cplx align: 4                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx8 align: 4                                  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort cplx16 align: 8                                  
<br>
...
<br>
<p>And this is the configure output:
<br>
checking if Fortran 77 compiler supports REAL*8... yes
<br>
checking size of Fortran 77 REAL*8... 8
<br>
checking for C type corresponding to REAL*8... double
<br>
checking alignment of Fortran REAL*8... 1
<br>
...
<br>
checking if Fortran 77 compiler supports DOUBLE PRECISION... yes
<br>
checking size of Fortran 77 DOUBLE PRECISION... 8
<br>
checking for C type corresponding to DOUBLE PRECISION... double
<br>
checking alignment of Fortran DOUBLE PRECISION... 1
<br>
<p>But the following code actually appears to give the correct results:
<br>
<p>program types
<br>
use mpi
<br>
implicit none
<br>
integer :: mpierr, size
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Init(mpierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_Type_size(MPI_DOUBLE_PRECISION, size, mpierr)
<br>
&nbsp;&nbsp;&nbsp;print*, 'double precision size: ', size
<br>
&nbsp;&nbsp;&nbsp;call MPI_Finalize(mpierr)
<br>
end
<br>
<p>mpif90 -g types.f90
<br>
mpiexec -n 1 ./a.out
<br>
&nbsp;double precision size:            8
<br>
<p>Thus is this a bug in ompi_info only?
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid/ComputeCanada Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13850.php">Cristobal Navarro: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13835.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
