<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 17:07:38 2010" -->
<!-- isoreceived="20100728210738" -->
<!-- sent="Wed, 28 Jul 2010 17:07:29 -0400" -->
<!-- isosent="20100728210729" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C509C11.4010904_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100728201413.GA30952_at_stikine.its.sfu.ca" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 17:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All
<br>
<p>Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; On Wed, Jul 28, 2010 at 01:05:52PM -0700, Martin Siegert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jul 28, 2010 at 11:19:43AM -0400, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hugo Gagnon wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ompi_info --all lists its info regarding fortran right after C. In my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Fort real16 size: 16
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does it make any sense to you?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Hugo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same as real8, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't make sense, but that's what I have (now that you told me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $      Fort dbl prec size: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Fort dbl cplx align: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a bug in OpenMPI perhaps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't come across to this problem, most likely because
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the codes here don't use &quot;double precision&quot; but real*8 or similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also make sure you are picking the right ompi_info, mpif90/f77, mpiexec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Often times old versions and tangled PATH make things very confusing.
</span><br>
<span class="quotelev2">&gt;&gt; This is indeed worrisome as I confirm the findings on our clusters both
</span><br>
<span class="quotelev2">&gt;&gt; with ompi 1.3.3 and 1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info --all | grep -i fort
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;           Fort real size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real4 size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real16 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl prec size: 4
</span><br>
<span class="quotelev2">&gt;&gt;           Fort cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;       Fort dbl cplx size: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx8 size: 8
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx16 size: 16
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx32 size: -1
</span><br>
<span class="quotelev2">&gt;&gt;       Fort integer align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer1 align: 1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer2 align: 2
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;      Fort integer8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;     Fort integer16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;          Fort real align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real4 align: 4
</span><br>
<span class="quotelev2">&gt;&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev2">&gt;&gt;        Fort real16 align: -1
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl prec align: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Fort cplx align: 4                                  
</span><br>
<span class="quotelev2">&gt;&gt;      Fort dbl cplx align: 4                                  
</span><br>
<span class="quotelev2">&gt;&gt;         Fort cplx8 align: 4                                  
</span><br>
<span class="quotelev2">&gt;&gt;        Fort cplx16 align: 8                                  
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this is the configure output:
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler supports REAL*8... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran 77 REAL*8... 8
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to REAL*8... double
</span><br>
<span class="quotelev2">&gt;&gt; checking alignment of Fortran REAL*8... 1
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler supports DOUBLE PRECISION... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking size of Fortran 77 DOUBLE PRECISION... 8
</span><br>
<span class="quotelev2">&gt;&gt; checking for C type corresponding to DOUBLE PRECISION... double
</span><br>
<span class="quotelev2">&gt;&gt; checking alignment of Fortran DOUBLE PRECISION... 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the following code actually appears to give the correct results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program types
</span><br>
<span class="quotelev2">&gt;&gt; use mpi
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; integer :: mpierr, size
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Init(mpierr)
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Type_size(MPI_DOUBLE_PRECISION, size, mpierr)
</span><br>
<span class="quotelev2">&gt;&gt;    print*, 'double precision size: ', size
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_Finalize(mpierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpif90 -g types.f90
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -n 1 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;  double precision size:            8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thus is this a bug in ompi_info only?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; answering my own question:
</span><br>
<span class="quotelev1">&gt; This does not look right:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info/param.cc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       out(&quot;Fort dbl prec size&quot;,
</span><br>
<span class="quotelev1">&gt;           &quot;compiler:fortran:sizeof:double_precision&quot;,
</span><br>
<span class="quotelev1">&gt;           OMPI_SIZEOF_FORTRAN_REAL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that should be OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Martin
</span><br>
<p>Hopefully Martin may got it and the issue is restricted to ompi_info.
<br>
Thanks, Martin, for writing and running the little diagnostic code,
<br>
and for checking the ompi_info guts!
<br>
<p>Still, the alignment under Intel may or may not be right.
<br>
And this may or may not explain the errors that Hugo has got.
<br>
<p>FYI, the ompi_info from my OpenMPI 1.3.2 and 1.2.8
<br>
report exactly the same as OpenMPI 1.4.2, namely
<br>
Fort dbl prec size: 4  and
<br>
Fort dbl prec align: 4,
<br>
except that *if the Intel Fortran compiler (ifort) was used*
<br>
I get 1 byte alignment:
<br>
Fort dbl prec align: 1
<br>
<p>So, this issue has been around for a while,
<br>
and involves both the size and the alignment (in Intel)
<br>
of double precision.
<br>
<p>We have a number of pieces of code here where grep shows 
<br>
MPI_DOUBLE_PRECISION.
<br>
Not sure how much of it has actually been active, as there are always
<br>
lots of cpp directives to select active code.
<br>
<p>In particular I found this interesting snippet:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_DOUBLE_PRECISION==20 .and. MPI_REAL8==18) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! LAM MPI defined MPI_REAL8 differently from MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! and LAM MPI's allreduce does not accept on MPI_REAL8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIreal_t    = MPI_DOUBLE_PRECISION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIreal_t    = MPI_REAL8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>where eventually MPIreal_t is what is used as
<br>
the MPI type in some MPI calls, particularly in MPI_Allreduce,
<br>
which is the one that triggered all this discussion
<br>
(see this thread Subject line) when Hugo first
<br>
asked his original question.
<br>
<p>Hopefully the if branch on the code snippet above worked alright,
<br>
because here in our OpenMPIs 1.4.2, 1.3.2, and 1.2.8,
<br>
MPI_DOUBLE_PRECISION value is 17,
<br>
which should have safely produced
<br>
MPIreal_t    = MPI_REAL8
<br>
<p>I have a lot more of code to check, but maybe not.
<br>
If the issue is really restricted to ompi_info that would be a
<br>
big relief.
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Previous message:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13852.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13854.php">Hugo Gagnon: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
