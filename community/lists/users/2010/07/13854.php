<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 17:25:13 2010" -->
<!-- isoreceived="20100728212513" -->
<!-- sent="Wed, 28 Jul 2010 17:25:07 -0400" -->
<!-- isosent="20100728212507" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280352307.7605.1387235545_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Hugo Gagnon (<em>sourceforge.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 17:25:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also get 8 from &quot;call MPI_Type_size(MPI_DOUBLE_PRECISION, size,
<br>
mpierr)&quot;, but really I don't think this is the issue anymore. I mean I
<br>
checked on my school cluster where OpenMPI has also been compiled with
<br>
the intel64 compilers and &quot;Fort dbl prec size:&quot; also returns 4 but
<br>
unlike on my Mac the code runs fine there. I am just saying that we
<br>
should stop worrying about ompi_info output and wait until Jeff Squyres
<br>
analyses my build output files that I sent to the list earlier. I might
<br>
be wrong too as I have no idea of what's going on.
<br>
<pre>
-- 
  Hugo Gagnon
On Wed, 28 Jul 2010 17:07 -0400, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
wrote:
&gt; Hi All
&gt; 
&gt; Martin Siegert wrote:
&gt; &gt; On Wed, Jul 28, 2010 at 01:05:52PM -0700, Martin Siegert wrote:
&gt; &gt;&gt; On Wed, Jul 28, 2010 at 11:19:43AM -0400, Gus Correa wrote:
&gt; &gt;&gt;&gt; Hugo Gagnon wrote:
&gt; &gt;&gt;&gt;&gt; Hi Gus,
&gt; &gt;&gt;&gt;&gt; Ompi_info --all lists its info regarding fortran right after C. In my
&gt; &gt;&gt;&gt;&gt; case:
&gt; &gt;&gt;&gt;&gt;           Fort real size: 4
&gt; &gt;&gt;&gt;&gt;          Fort real4 size: 4
&gt; &gt;&gt;&gt;&gt;          Fort real8 size: 8
&gt; &gt;&gt;&gt;&gt;         Fort real16 size: 16
&gt; &gt;&gt;&gt;&gt;       Fort dbl prec size: 4
&gt; &gt;&gt;&gt;&gt; Does it make any sense to you?
&gt; &gt;&gt;&gt; Hi Hugo
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; No, dbl prec size 4 sounds weird, should be 8, I suppose,
&gt; &gt;&gt;&gt; same as real8, right?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; It doesn't make sense, but that's what I have (now that you told me
&gt; &gt;&gt;&gt; that &quot;dbl&quot; , not &quot;double&quot;, is the string to search for):
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; $      Fort dbl prec size: 4
&gt; &gt;&gt;&gt;       Fort dbl cplx size: 4
&gt; &gt;&gt;&gt;      Fort dbl prec align: 4
&gt; &gt;&gt;&gt;      Fort dbl cplx align: 4
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Is this a bug in OpenMPI perhaps?
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I didn't come across to this problem, most likely because
&gt; &gt;&gt;&gt; the codes here don't use &quot;double precision&quot; but real*8 or similar.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Also make sure you are picking the right ompi_info, mpif90/f77, mpiexec.
&gt; &gt;&gt;&gt; Often times old versions and tangled PATH make things very confusing.
&gt; &gt;&gt; This is indeed worrisome as I confirm the findings on our clusters both
&gt; &gt;&gt; with ompi 1.3.3 and 1.4.1:
&gt; &gt;&gt;
&gt; &gt;&gt; ompi_info --all | grep -i fort
&gt; &gt;&gt; ...
&gt; &gt;&gt;           Fort real size: 4
&gt; &gt;&gt;          Fort real4 size: 4
&gt; &gt;&gt;          Fort real8 size: 8
&gt; &gt;&gt;         Fort real16 size: -1
&gt; &gt;&gt;       Fort dbl prec size: 4
&gt; &gt;&gt;           Fort cplx size: 4
&gt; &gt;&gt;       Fort dbl cplx size: 4
&gt; &gt;&gt;          Fort cplx8 size: 8
&gt; &gt;&gt;         Fort cplx16 size: 16
&gt; &gt;&gt;         Fort cplx32 size: -1
&gt; &gt;&gt;       Fort integer align: 4
&gt; &gt;&gt;      Fort integer1 align: 1
&gt; &gt;&gt;      Fort integer2 align: 2
&gt; &gt;&gt;      Fort integer4 align: 4
&gt; &gt;&gt;      Fort integer8 align: 8
&gt; &gt;&gt;     Fort integer16 align: -1
&gt; &gt;&gt;          Fort real align: 4
&gt; &gt;&gt;         Fort real4 align: 4
&gt; &gt;&gt;         Fort real8 align: 8
&gt; &gt;&gt;        Fort real16 align: -1
&gt; &gt;&gt;      Fort dbl prec align: 4
&gt; &gt;&gt;          Fort cplx align: 4                                  
&gt; &gt;&gt;      Fort dbl cplx align: 4                                  
&gt; &gt;&gt;         Fort cplx8 align: 4                                  
&gt; &gt;&gt;        Fort cplx16 align: 8                                  
&gt; &gt;&gt; ...
&gt; &gt;&gt;
&gt; &gt;&gt; And this is the configure output:
&gt; &gt;&gt; checking if Fortran 77 compiler supports REAL*8... yes
&gt; &gt;&gt; checking size of Fortran 77 REAL*8... 8
&gt; &gt;&gt; checking for C type corresponding to REAL*8... double
&gt; &gt;&gt; checking alignment of Fortran REAL*8... 1
&gt; &gt;&gt; ...
&gt; &gt;&gt; checking if Fortran 77 compiler supports DOUBLE PRECISION... yes
&gt; &gt;&gt; checking size of Fortran 77 DOUBLE PRECISION... 8
&gt; &gt;&gt; checking for C type corresponding to DOUBLE PRECISION... double
&gt; &gt;&gt; checking alignment of Fortran DOUBLE PRECISION... 1
&gt; &gt;&gt;
&gt; &gt;&gt; But the following code actually appears to give the correct results:
&gt; &gt;&gt;
&gt; &gt;&gt; program types
&gt; &gt;&gt; use mpi
&gt; &gt;&gt; implicit none
&gt; &gt;&gt; integer :: mpierr, size
&gt; &gt;&gt;
&gt; &gt;&gt;    call MPI_Init(mpierr)
&gt; &gt;&gt;    call MPI_Type_size(MPI_DOUBLE_PRECISION, size, mpierr)
&gt; &gt;&gt;    print*, 'double precision size: ', size
&gt; &gt;&gt;    call MPI_Finalize(mpierr)
&gt; &gt;&gt; end
&gt; &gt;&gt;
&gt; &gt;&gt; mpif90 -g types.f90
&gt; &gt;&gt; mpiexec -n 1 ./a.out
&gt; &gt;&gt;  double precision size:            8
&gt; &gt;&gt;
&gt; &gt;&gt; Thus is this a bug in ompi_info only?
&gt; &gt; 
&gt; &gt; answering my own question:
&gt; &gt; This does not look right:
&gt; &gt; 
&gt; &gt; ompi/tools/ompi_info/param.cc:
&gt; &gt; 
&gt; &gt;       out(&quot;Fort dbl prec size&quot;,
&gt; &gt;           &quot;compiler:fortran:sizeof:double_precision&quot;,
&gt; &gt;           OMPI_SIZEOF_FORTRAN_REAL);
&gt; &gt; 
&gt; &gt; that should be OMPI_SIZEOF_FORTRAN_DOUBLE_PRECISION.
&gt; &gt; 
&gt; &gt; - Martin
&gt; 
&gt; Hopefully Martin may got it and the issue is restricted to ompi_info.
&gt; Thanks, Martin, for writing and running the little diagnostic code,
&gt; and for checking the ompi_info guts!
&gt; 
&gt; Still, the alignment under Intel may or may not be right.
&gt; And this may or may not explain the errors that Hugo has got.
&gt; 
&gt; FYI, the ompi_info from my OpenMPI 1.3.2 and 1.2.8
&gt; report exactly the same as OpenMPI 1.4.2, namely
&gt; Fort dbl prec size: 4  and
&gt; Fort dbl prec align: 4,
&gt; except that *if the Intel Fortran compiler (ifort) was used*
&gt; I get 1 byte alignment:
&gt; Fort dbl prec align: 1
&gt; 
&gt; So, this issue has been around for a while,
&gt; and involves both the size and the alignment (in Intel)
&gt; of double precision.
&gt; 
&gt; We have a number of pieces of code here where grep shows 
&gt; MPI_DOUBLE_PRECISION.
&gt; Not sure how much of it has actually been active, as there are always
&gt; lots of cpp directives to select active code.
&gt; 
&gt; In particular I found this interesting snippet:
&gt; 
&gt;      if (MPI_DOUBLE_PRECISION==20 .and. MPI_REAL8==18) then
&gt;         ! LAM MPI defined MPI_REAL8 differently from MPI_DOUBLE_PRECISION
&gt;         ! and LAM MPI's allreduce does not accept on MPI_REAL8
&gt;         MPIreal_t    = MPI_DOUBLE_PRECISION
&gt;      else
&gt;         MPIreal_t    = MPI_REAL8
&gt;      endif
&gt; 
&gt; where eventually MPIreal_t is what is used as
&gt; the MPI type in some MPI calls, particularly in MPI_Allreduce,
&gt; which is the one that triggered all this discussion
&gt; (see this thread Subject line) when Hugo first
&gt; asked his original question.
&gt; 
&gt; Hopefully the if branch on the code snippet above worked alright,
&gt; because here in our OpenMPIs 1.4.2, 1.3.2, and 1.2.8,
&gt; MPI_DOUBLE_PRECISION value is 17,
&gt; which should have safely produced
&gt; MPIreal_t    = MPI_REAL8
&gt; 
&gt; I have a lot more of code to check, but maybe not.
&gt; If the issue is really restricted to ompi_info that would be a
&gt; big relief.
&gt; 
&gt; Many thanks,
&gt; Gus Correa
&gt; ---------------------------------------------------------------------
&gt; Gustavo Correa
&gt; Lamont-Doherty Earth Observatory - Columbia University
&gt; Palisades, NY, 10964-8000 - USA
&gt; ---------------------------------------------------------------------
&gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13855.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>Previous message:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13853.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
