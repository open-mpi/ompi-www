<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 10 18:59:56 2010" -->
<!-- isoreceived="20100810225956" -->
<!-- sent="Tue, 10 Aug 2010 18:59:47 -0400" -->
<!-- isosent="20100810225947" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="4C61D9E3.8060209_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BDDA0039-62DD-40C0-AB43-FA384BBD06DD_at_cisco.com" -->
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
<strong>Date:</strong> 2010-08-10 18:59:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13966.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thank you for opening a ticket and taking care of this.
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 28, 2010, at 5:07 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Still, the alignment under Intel may or may not be right.
</span><br>
<span class="quotelev2">&gt;&gt; And this may or may not explain the errors that Hugo has got.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, the ompi_info from my OpenMPI 1.3.2 and 1.2.8
</span><br>
<span class="quotelev2">&gt;&gt; report exactly the same as OpenMPI 1.4.2, namely
</span><br>
<span class="quotelev2">&gt;&gt; Fort dbl prec size: 4  and
</span><br>
<span class="quotelev2">&gt;&gt; Fort dbl prec align: 4,
</span><br>
<span class="quotelev2">&gt;&gt; except that *if the Intel Fortran compiler (ifort) was used*
</span><br>
<span class="quotelev2">&gt;&gt; I get 1 byte alignment:
</span><br>
<span class="quotelev2">&gt;&gt; Fort dbl prec align: 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, this issue has been around for a while,
</span><br>
<span class="quotelev2">&gt;&gt; and involves both the size and the alignment (in Intel)
</span><br>
<span class="quotelev2">&gt;&gt; of double precision.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it's quite problematic to try to determine the alignment 
</span><br>
<span class="quotelev1">&gt; of Fortran types -- compilers can do different things 
</span><br>
<span class="quotelev1">&gt; and there's no reliable way (that I know of, at least) 
</span><br>
<span class="quotelev1">&gt; to absolutely get the &quot;native&quot; alignment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I can imagine this is not easy, specially with the large variety
<br>
of architectures, compilers, and environments, that OpenMPI handles.
<br>
<p><span class="quotelev1">&gt; That being said, we didn't previously find any correctness 
</span><br>
<span class="quotelev1">&gt; issues with using an alignment of 1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Does it affect only the information
<br>
provided by ompi_info, as Martin Siegert suggested?
<br>
<p>Or does it really affect the actual alignment of
<br>
MPI types when OpenMPI is compiled with Intel,
<br>
as Martin, Ake Sandgren, Hugo Gagnon, and myself
<br>
thought it might?
<br>
<p><span class="quotelev2">&gt;&gt; We have a number of pieces of code here where grep shows
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_PRECISION.
</span><br>
<span class="quotelev2">&gt;&gt; Not sure how much of it has actually been active, as there are always
</span><br>
<span class="quotelev2">&gt;&gt; lots of cpp directives to select active code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In particular I found this interesting snippet:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      if (MPI_DOUBLE_PRECISION==20 .and. MPI_REAL8==18) then
</span><br>
<span class="quotelev2">&gt;&gt;         ! LAM MPI defined MPI_REAL8 differently from MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;         ! and LAM MPI's allreduce does not accept on MPI_REAL8
</span><br>
<span class="quotelev2">&gt;&gt;         MPIreal_t    = MPI_DOUBLE_PRECISION
</span><br>
<span class="quotelev2">&gt;&gt;      else
</span><br>
<span class="quotelev2">&gt;&gt;         MPIreal_t    = MPI_REAL8
</span><br>
<span class="quotelev2">&gt;&gt;      endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This kind of thing shouldn't be an issue with Open MPI, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, you are right.
<br>
Actually, I checked (and wrote in my posting)
<br>
that OpenMPI MPI_DOUBLE_PRECISION = 17, hence the code above
<br>
boils down to redefining everything as MPI_REAL8 instead
<br>
(the &quot;else&quot; part), hence MPI_DOUBLE_PRECISION
<br>
is never actually used *in this source file*.
<br>
<p>BTW, I didn't write this code or the comments.
<br>
The source file is part of CCSM4/CAM4,
<br>
a widely used public domain big climate/atmosphere model:
<br>
<p><a href="http://www.cesm.ucar.edu/models/ccsm4.0/">http://www.cesm.ucar.edu/models/ccsm4.0/</a>
<br>
<p>This particular source file (parallel_mod.F90, circa line 169)
<br>
hasn't been used in previous incarnations of these programs 
<br>
(CAM3/CCSM3), which we ran extensively here, using OpenMPI.
<br>
In the old CAM3/CCSM3 most (perhaps all) of the 8-byte
<br>
floating point data are declared as real*8 or with the &quot;kind&quot; attribute,
<br>
not as double precision.
<br>
<p>However, not only this source file, but many other source files
<br>
in the new CCSM4/CAM4 declare 8-byte floating point data
<br>
as double precision,
<br>
and utilize MPI_DOUBLE_PRECISION in MPI function calls.
<br>
Despite this style being a bit outdated,
<br>
as Fortran90 seems to prefer to replace &quot;double precision&quot;
<br>
by &quot;real, kind(0.d0)&quot;, as Hugo did in his example.
<br>
<p>My concern is because we just started experimenting with CAM4/CCSM4,
<br>
and the plan was to use OpenMPI libraries compiled with Intel.
<br>
<p><span class="quotelev1">&gt; FWIW, OMPI uses different numbers for MPI_DOUBLE_PRECISION and MPI_REAL8 
</span><br>
<span class="quotelev1">&gt; than LAM.  They're distinct MPI datatypes because they *could* be different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Yes, I understand two different MPI_ constants should be kept,
<br>
although the actual values of their size and alignment may be the same
<br>
in specific architectures (e.g. x86_64).
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13966.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13964.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<li><strong>In reply to:</strong> <a href="13944.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="14038.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
