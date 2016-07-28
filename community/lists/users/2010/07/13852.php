<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 16:14:17 2010" -->
<!-- isoreceived="20100728201417" -->
<!-- sent="Wed, 28 Jul 2010 13:14:13 -0700" -->
<!-- isosent="20100728201413" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="20100728201413.GA30952_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100728200552.GB30397_at_stikine.its.sfu.ca" -->
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
<strong>Date:</strong> 2010-07-28 16:14:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 28, 2010 at 01:05:52PM -0700, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 28, 2010 at 11:19:43AM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Gagnon wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<span class="quotelev3">&gt; &gt;&gt; case:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does it make any sense to you?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Hugo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
</span><br>
<span class="quotelev2">&gt; &gt; same as real8, right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It doesn't make sense, but that's what I have (now that you told me
</span><br>
<span class="quotelev2">&gt; &gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $      Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt; &gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt; &gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt; &gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this a bug in OpenMPI perhaps?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I didn't come across to this problem, most likely because
</span><br>
<span class="quotelev2">&gt; &gt; the codes here don't use &quot;double precision&quot; but real*8 or similar.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also make sure you are picking the right ompi_info, mpif90/f77, mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt; Often times old versions and tangled PATH make things very confusing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is indeed worrisome as I confirm the findings on our clusters both
</span><br>
<span class="quotelev1">&gt; with ompi 1.3.3 and 1.4.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --all | grep -i fort
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;           Fort real size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev1">&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev1">&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev1">&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev1">&gt;       Fort integer align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev1">&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev1">&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev1">&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev1">&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev1">&gt;          Fort real align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev1">&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev1">&gt;          Fort cplx align: 4                                  
</span><br>
<span class="quotelev1">&gt;      Fort dbl cplx align: 4                                  
</span><br>
<span class="quotelev1">&gt;         Fort cplx8 align: 4                                  
</span><br>
<span class="quotelev1">&gt;        Fort cplx16 align: 8                                  
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this is the configure output:
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports REAL*8... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 REAL*8... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to REAL*8... double
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran REAL*8... 1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports DOUBLE PRECISION... yes
</span><br>
<span class="quotelev1">&gt; checking size of Fortran 77 DOUBLE PRECISION... 8
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to DOUBLE PRECISION... double
</span><br>
<span class="quotelev1">&gt; checking alignment of Fortran DOUBLE PRECISION... 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the following code actually appears to give the correct results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program types
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; integer :: mpierr, size
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    call MPI_Init(mpierr)
</span><br>
<span class="quotelev1">&gt;    call MPI_Type_size(MPI_DOUBLE_PRECISION, size, mpierr)
</span><br>
<span class="quotelev1">&gt;    print*, 'double precision size: ', size
</span><br>
<span class="quotelev1">&gt;    call MPI_Finalize(mpierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 -g types.f90
</span><br>
<span class="quotelev1">&gt; mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev1">&gt;  double precision size:            8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus is this a bug in ompi_info only?
</span><br>
<p>answering my own question:
<br>
This does not look right:
<br>
<p>ompi/tools/ompi_info/param.cc:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;out(&quot;Fort dbl prec size&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;compiler:fortran:sizeof:double_precision&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_SIZEOF_FORTRAN_REAL);
<br>
<p>that should be OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION.
<br>
<p>- Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13851.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
