<?
$subject_val = "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 15 15:45:02 2015" -->
<!-- isoreceived="20150315194502" -->
<!-- sent="Sun, 15 Mar 2015 19:45:01 +0000" -->
<!-- isosent="20150315194501" -->
<!-- name="Thomas Markovich" -->
<!-- email="thomasmarkovich_at_[hidden]" -->
<!-- subject="[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type" -->
<!-- id="CAKgEOENWLQV52YrthXED8noRG5oX=1yn3faxGYs+v23jvXUq9w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type<br>
<strong>From:</strong> Thomas Markovich (<em>thomasmarkovich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-15 15:45:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Maybe reply:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I'm trying to parallelize my code by distributing the computation of
<br>
various elements of a lookup table and then sync that lookup table across
<br>
all nodes. To make the code easier to read, and to keep track of everything
<br>
easier, I've decided to use a derived data type in fortran defined as
<br>
follows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type tlr_lut
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sequence
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer q
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(dp), dimension(3, 3) :: TLR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(dp), dimension(:, :, :, :) :: dTLRdr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(dp), dimension(3, 3, 3, 3) :: dTLRdh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer unique_ind
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end type tlr_lut
<br>
<p>and this works quite well in serial. I just have to allocate dTLRdr at run
<br>
time. This is because TLR should be size 3x3xNx3, where N is a constant
<br>
known at run time but not compile time. I've tried to create a custom data
<br>
type to tell open-mpi what the size should be but I'm at a loss for how to
<br>
deal with the allocatable array. I've tried something like this:
<br>
<p>type(tlr_lut), dimension(:), allocatable :: tlr_lookup, temp_tlr_lookup
<br>
type(tlr_lut), dimension(:), allocatable :: local_tlr_lookup
<br>
integer :: datatype, oldtypes(6), blockcounts(6)
<br>
INTEGER(KIND=MPI_ADDRESS_KIND) :: offsets(6)
<br>
integer :: numtasks, rank, i,  ierr
<br>
integer :: n, status(mpi_status_size)
<br>
<p>do i = 1, num_pairs, 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p = unique_pairs(i)%p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;q = unique_pairs(i)%q
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpuid = unique_pairs(i)%cpu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(cpuid.eq.me_image) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TLR = 0.0_DP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dTLRdr = 0.0_DP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dTLRdh = 0.0_DP
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mbdvdw_TLR(p, q, TLR, dTLRdr, dTLRdh)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(.not.allocated(local_tlr_lookup(counter)%dTLRdr))
<br>
allocate(local_tlr_lookup(counter)%dTLRdr(3, 3, nat, 3))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_tlr_lookup(counter)%p = p
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_tlr_lookup(counter)%q = q
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_tlr_lookup(counter)%TLR(:, :) = TLR(:, :)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_tlr_lookup(counter)%dTLRdr(:,:,:,:) = dTLRdR(:,:,:,:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_tlr_lookup(counter)%dTLRdh(:,:,:,:) = dTLRdh(:,:,:,:)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
end do
<br>
<p>call mpi_get_address(local_tlr_lookup(1)%p,          offsets(1), ierr)
<br>
call mpi_get_address(local_tlr_lookup(1)%q,          offsets(2), ierr)
<br>
call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
<br>
call mpi_get_address(local_tlr_lookup(1)%wdtlrdr,    offsets(4), ierr)
<br>
call mpi_get_address(local_tlr_lookup(1)%wdtlrdh,    offsets(5), ierr)
<br>
call mpi_get_address(local_tlr_lookup(1)%unique_ind, offsets(6), ierr)
<br>
<p>do i = 2, size(offsets)
<br>
&nbsp;&nbsp;offsets(i) = offsets(i) - offsets(1)
<br>
end do
<br>
offsets(1) = 0
<br>
<p>oldtypes = (/mpi_integer, mpi_integer, mpi_real, mpi_real, mpi_real,
<br>
mpi_integer/)
<br>
blockcounts = (/1, 1, 3*3, 3*3*nat*3, 3*3*3*3, 1/)
<br>
<p>But it didn't seem to work and I'm sorta at a loss. Any suggestions?
<br>
<p>Best,
<br>
Thomas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26472/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26471.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Maybe reply:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
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
