<?
$subject_val = "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 13:07:52 2015" -->
<!-- isoreceived="20150316170752" -->
<!-- sent="Mon, 16 Mar 2015 18:07:50 +0100" -->
<!-- isosent="20150316170750" -->
<!-- name="Davide Cesari" -->
<!-- email="dcesari_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type" -->
<!-- id="55070DE6.1090103_at_arpa.emr.it" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="mailman.16.1426521603.29963.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type<br>
<strong>From:</strong> Davide Cesari (<em>dcesari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-16 13:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26482.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Maybe in reply to:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Thomas,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I suggest to have a look at Fortran2003 so-called &quot;parameterized 
<br>
derived types&quot;, where the size of one or more members of a derived type 
<br>
(dTLRdr in this case) depend on a size parameter which is defined when 
<br>
instantiating/allocating the whole derived type and are not allocated 
<br>
separately from the derived type storage; this should -in theory- 
<br>
guarantee that the data belonging to a single instance of a derived 
<br>
type, including all its array members with a variable size, are 
<br>
contiguous in memory. I am not sure, from your description, whether this 
<br>
could simplify your task, but if so, it could be worth to try. A 
<br>
drawback is that this feature is not well supported by GNU gfortran 
<br>
compiler yet, so you need a commercial compiler.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Best regards, Davide
<br>
<p>On 16/03/2015 17:00, users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Date: Sun, 15 Mar 2015 19:45:01 +0000
</span><br>
<span class="quotelev1">&gt; From: Thomas Markovich &lt;thomasmarkovich_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in
</span><br>
<span class="quotelev1">&gt; 	fortran derived data type
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;CAKgEOENWLQV52YrthXED8noRG5oX=1yn3faxGYs+v23jvXUq9w_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to parallelize my code by distributing the computation of
</span><br>
<span class="quotelev1">&gt; various elements of a lookup table and then sync that lookup table across
</span><br>
<span class="quotelev1">&gt; all nodes. To make the code easier to read, and to keep track of everything
</span><br>
<span class="quotelev1">&gt; easier, I've decided to use a derived data type in fortran defined as
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;      type tlr_lut
</span><br>
<span class="quotelev1">&gt;          sequence
</span><br>
<span class="quotelev1">&gt;          integer p
</span><br>
<span class="quotelev1">&gt;          integer q
</span><br>
<span class="quotelev1">&gt;          real(dp), dimension(3, 3) :: TLR
</span><br>
<span class="quotelev1">&gt;          real(dp), dimension(:, :, :, :) :: dTLRdr
</span><br>
<span class="quotelev1">&gt;          real(dp), dimension(3, 3, 3, 3) :: dTLRdh
</span><br>
<span class="quotelev1">&gt;          integer unique_ind
</span><br>
<span class="quotelev1">&gt;      end type tlr_lut
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and this works quite well in serial. I just have to allocate dTLRdr at run
</span><br>
<span class="quotelev1">&gt; time. This is because TLR should be size 3x3xNx3, where N is a constant
</span><br>
<span class="quotelev1">&gt; known at run time but not compile time. I've tried to create a custom data
</span><br>
<span class="quotelev1">&gt; type to tell open-mpi what the size should be but I'm at a loss for how to
</span><br>
<span class="quotelev1">&gt; deal with the allocatable array. I've tried something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; type(tlr_lut), dimension(:), allocatable :: tlr_lookup, temp_tlr_lookup
</span><br>
<span class="quotelev1">&gt; type(tlr_lut), dimension(:), allocatable :: local_tlr_lookup
</span><br>
<span class="quotelev1">&gt; integer :: datatype, oldtypes(6), blockcounts(6)
</span><br>
<span class="quotelev1">&gt; INTEGER(KIND=MPI_ADDRESS_KIND) :: offsets(6)
</span><br>
<span class="quotelev1">&gt; integer :: numtasks, rank, i,  ierr
</span><br>
<span class="quotelev1">&gt; integer :: n, status(mpi_status_size)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do i = 1, num_pairs, 1
</span><br>
<span class="quotelev1">&gt;      p = unique_pairs(i)%p
</span><br>
<span class="quotelev1">&gt;      q = unique_pairs(i)%q
</span><br>
<span class="quotelev1">&gt;      cpuid = unique_pairs(i)%cpu
</span><br>
<span class="quotelev1">&gt;      if(cpuid.eq.me_image) then
</span><br>
<span class="quotelev1">&gt;          TLR = 0.0_DP
</span><br>
<span class="quotelev1">&gt;          dTLRdr = 0.0_DP
</span><br>
<span class="quotelev1">&gt;          dTLRdh = 0.0_DP
</span><br>
<span class="quotelev1">&gt;          call mbdvdw_TLR(p, q, TLR, dTLRdr, dTLRdh)
</span><br>
<span class="quotelev1">&gt;          if(.not.allocated(local_tlr_lookup(counter)%dTLRdr))
</span><br>
<span class="quotelev1">&gt; allocate(local_tlr_lookup(counter)%dTLRdr(3, 3, nat, 3))
</span><br>
<span class="quotelev1">&gt;          local_tlr_lookup(counter)%p = p
</span><br>
<span class="quotelev1">&gt;          local_tlr_lookup(counter)%q = q
</span><br>
<span class="quotelev1">&gt;          local_tlr_lookup(counter)%TLR(:, :) = TLR(:, :)
</span><br>
<span class="quotelev1">&gt;          local_tlr_lookup(counter)%dTLRdr(:,:,:,:) = dTLRdR(:,:,:,:)
</span><br>
<span class="quotelev1">&gt;          local_tlr_lookup(counter)%dTLRdh(:,:,:,:) = dTLRdh(:,:,:,:)
</span><br>
<span class="quotelev1">&gt;      end if
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%p,          offsets(1), ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%q,          offsets(2), ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%wdtlrdr,    offsets(4), ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%wdtlrdh,    offsets(5), ierr)
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%unique_ind, offsets(6), ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do i = 2, size(offsets)
</span><br>
<span class="quotelev1">&gt;    offsets(i) = offsets(i) - offsets(1)
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt; offsets(1) = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oldtypes = (/mpi_integer, mpi_integer, mpi_real, mpi_real, mpi_real,
</span><br>
<span class="quotelev1">&gt; mpi_integer/)
</span><br>
<span class="quotelev1">&gt; blockcounts = (/1, 1, 3*3, 3*3*nat*3, 3*3*3*3, 1/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But it didn't seem to work and I'm sorta at a loss. Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<p><pre>
-- 
============================= Davide Cesari ============================
Dott**(0.5) Davide Cesari
ARPA-Emilia Romagna, Servizio IdroMeteoClima
NWP modelling - Modellistica numerica previsionale
Tel. +39 051525926
========================================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26482.php">Ralph Castain: "Re: [OMPI users] compiling OpenMPI 1.8.4 on system with multiarched SLURM libs (Ubuntu 15.04 prerelease)"</a>
<li><strong>Previous message:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Maybe in reply to:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
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
