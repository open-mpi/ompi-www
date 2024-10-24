<?
$subject_val = "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 15 21:00:29 2015" -->
<!-- isoreceived="20150316010029" -->
<!-- sent="Sun, 15 Mar 2015 21:00:28 -0400" -->
<!-- isosent="20150316010028" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type" -->
<!-- id="CAMJJpkWG5pXrS+n1CXxuRgn9BXr_FHgtfZnCbGgKdctxJ1hLsg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKgEOENWLQV52YrthXED8noRG5oX=1yn3faxGYs+v23jvXUq9w_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-15 21:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>IWhat exactly is 'local_tlr_lookup(1)%wtlr'?
<br>
<p>I think the problem is that your MPI derived datatype use the pointer to
<br>
the allocatable arrays instead of using the pointer to the first element of
<br>
these arrays. As an example instead of doing
<br>
call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
<br>
I would go for
<br>
call mpi_get_address(local_tlr_lookup(1)%TLR(1,1),       offsets(3), ierr)
<br>
<p>Then you don't have to subtract offset(1) from the other, but instead you
<br>
can go for absolute addressing. Unfortunately this approach is not
<br>
compatible with sending multiple structures (aka. using a count != 1),
<br>
simply because each struct might have different displacements for the
<br>
internal allocatable arrays.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Sun, Mar 15, 2015 at 3:45 PM, Thomas Markovich &lt;thomasmarkovich_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi All,
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
<span class="quotelev1">&gt;     type tlr_lut
</span><br>
<span class="quotelev1">&gt;         sequence
</span><br>
<span class="quotelev1">&gt;         integer p
</span><br>
<span class="quotelev1">&gt;         integer q
</span><br>
<span class="quotelev1">&gt;         real(dp), dimension(3, 3) :: TLR
</span><br>
<span class="quotelev1">&gt;         real(dp), dimension(:, :, :, :) :: dTLRdr
</span><br>
<span class="quotelev1">&gt;         real(dp), dimension(3, 3, 3, 3) :: dTLRdh
</span><br>
<span class="quotelev1">&gt;         integer unique_ind
</span><br>
<span class="quotelev1">&gt;     end type tlr_lut
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
<span class="quotelev1">&gt;     p = unique_pairs(i)%p
</span><br>
<span class="quotelev1">&gt;     q = unique_pairs(i)%q
</span><br>
<span class="quotelev1">&gt;     cpuid = unique_pairs(i)%cpu
</span><br>
<span class="quotelev1">&gt;     if(cpuid.eq.me_image) then
</span><br>
<span class="quotelev1">&gt;         TLR = 0.0_DP
</span><br>
<span class="quotelev1">&gt;         dTLRdr = 0.0_DP
</span><br>
<span class="quotelev1">&gt;         dTLRdh = 0.0_DP
</span><br>
<span class="quotelev1">&gt;         call mbdvdw_TLR(p, q, TLR, dTLRdr, dTLRdh)
</span><br>
<span class="quotelev1">&gt;         if(.not.allocated(local_tlr_lookup(counter)%dTLRdr))
</span><br>
<span class="quotelev1">&gt; allocate(local_tlr_lookup(counter)%dTLRdr(3, 3, nat, 3))
</span><br>
<span class="quotelev1">&gt;         local_tlr_lookup(counter)%p = p
</span><br>
<span class="quotelev1">&gt;         local_tlr_lookup(counter)%q = q
</span><br>
<span class="quotelev1">&gt;         local_tlr_lookup(counter)%TLR(:, :) = TLR(:, :)
</span><br>
<span class="quotelev1">&gt;         local_tlr_lookup(counter)%dTLRdr(:,:,:,:) = dTLRdR(:,:,:,:)
</span><br>
<span class="quotelev1">&gt;         local_tlr_lookup(counter)%dTLRdh(:,:,:,:) = dTLRdh(:,:,:,:)
</span><br>
<span class="quotelev1">&gt;     end if
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
<span class="quotelev1">&gt;   offsets(i) = offsets(i) - offsets(1)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26472.php">http://www.open-mpi.org/community/lists/users/2015/03/26472.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26473/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26472.php">Thomas Markovich: "[OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
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
