<?
$subject_val = "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 15 21:50:49 2015" -->
<!-- isoreceived="20150316015049" -->
<!-- sent="Mon, 16 Mar 2015 01:50:48 +0000" -->
<!-- isosent="20150316015048" -->
<!-- name="Thomas Markovich" -->
<!-- email="thomasmarkovich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type" -->
<!-- id="CAKgEOEOeSHAwRU9JQvorMd9F6rj+rEbvE25aBA2zHx4Xdf600Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWG5pXrS+n1CXxuRgn9BXr_FHgtfZnCbGgKdctxJ1hLsg_at_mail.gmail.com" -->
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
<strong>From:</strong> Thomas Markovich (<em>thomasmarkovich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-15 21:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>Thanks for taking the time to look at my question! wtlr was a typo when I
<br>
was stripping things down for a smaller example... TLR should be a 3x3
<br>
matrix (long range dipole dipole tensor).
<br>
<p>I'm trying to split up the computation of anywhere between 30k and 15m
<br>
individual dipole-dipole tensors, and I figured that I'd use a struct to
<br>
help with the book keeping. It appears that having an allocatable tensor
<br>
(dTLRdr) throws a wrench in the whole thing. When I looked more into the
<br>
memory layout with totalview, it looks like the various dTLRdR isn't even
<br>
contiguously connected with the rest of the array! This is supported by the
<br>
fact that my offsets for each dTLRdr ( offset of
<br>
tlr_lookup(1)%dTLRdr, tlr_lookup(2)%dTLRdr, tlr_lookup(3)%dTLRdr) are
<br>
different. Unfortunately, I'm not totally sure that it's possible to do
<br>
what I was trying to do. I'm going to try a different strategy that
<br>
sidesteps this issue of derived data types, though. Perhaps that'll help.
<br>
<p>Best,
<br>
Thomas
<br>
<p>On Sun, Mar 15, 2015 at 9:00 PM George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWhat exactly is 'local_tlr_lookup(1)%wtlr'?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem is that your MPI derived datatype use the pointer to
</span><br>
<span class="quotelev1">&gt; the allocatable arrays instead of using the pointer to the first element of
</span><br>
<span class="quotelev1">&gt; these arrays. As an example instead of doing
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
</span><br>
<span class="quotelev1">&gt; I would go for
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%TLR(1,1),       offsets(3), ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then you don't have to subtract offset(1) from the other, but instead you
</span><br>
<span class="quotelev1">&gt; can go for absolute addressing. Unfortunately this approach is not
</span><br>
<span class="quotelev1">&gt; compatible with sending multiple structures (aka. using a count != 1),
</span><br>
<span class="quotelev1">&gt; simply because each struct might have different displacements for the
</span><br>
<span class="quotelev1">&gt; internal allocatable arrays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 15, 2015 at 3:45 PM, Thomas Markovich &lt;
</span><br>
<span class="quotelev1">&gt; thomasmarkovich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to parallelize my code by distributing the computation of
</span><br>
<span class="quotelev2">&gt;&gt; various elements of a lookup table and then sync that lookup table across
</span><br>
<span class="quotelev2">&gt;&gt; all nodes. To make the code easier to read, and to keep track of everything
</span><br>
<span class="quotelev2">&gt;&gt; easier, I've decided to use a derived data type in fortran defined as
</span><br>
<span class="quotelev2">&gt;&gt; follows:
</span><br>
<span class="quotelev2">&gt;&gt;     type tlr_lut
</span><br>
<span class="quotelev2">&gt;&gt;         sequence
</span><br>
<span class="quotelev2">&gt;&gt;         integer p
</span><br>
<span class="quotelev2">&gt;&gt;         integer q
</span><br>
<span class="quotelev2">&gt;&gt;         real(dp), dimension(3, 3) :: TLR
</span><br>
<span class="quotelev2">&gt;&gt;         real(dp), dimension(:, :, :, :) :: dTLRdr
</span><br>
<span class="quotelev2">&gt;&gt;         real(dp), dimension(3, 3, 3, 3) :: dTLRdh
</span><br>
<span class="quotelev2">&gt;&gt;         integer unique_ind
</span><br>
<span class="quotelev2">&gt;&gt;     end type tlr_lut
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and this works quite well in serial. I just have to allocate dTLRdr at
</span><br>
<span class="quotelev2">&gt;&gt; run time. This is because TLR should be size 3x3xNx3, where N is a constant
</span><br>
<span class="quotelev2">&gt;&gt; known at run time but not compile time. I've tried to create a custom data
</span><br>
<span class="quotelev2">&gt;&gt; type to tell open-mpi what the size should be but I'm at a loss for how to
</span><br>
<span class="quotelev2">&gt;&gt; deal with the allocatable array. I've tried something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; type(tlr_lut), dimension(:), allocatable :: tlr_lookup, temp_tlr_lookup
</span><br>
<span class="quotelev2">&gt;&gt; type(tlr_lut), dimension(:), allocatable :: local_tlr_lookup
</span><br>
<span class="quotelev2">&gt;&gt; integer :: datatype, oldtypes(6), blockcounts(6)
</span><br>
<span class="quotelev2">&gt;&gt; INTEGER(KIND=MPI_ADDRESS_KIND) :: offsets(6)
</span><br>
<span class="quotelev2">&gt;&gt; integer :: numtasks, rank, i,  ierr
</span><br>
<span class="quotelev2">&gt;&gt; integer :: n, status(mpi_status_size)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do i = 1, num_pairs, 1
</span><br>
<span class="quotelev2">&gt;&gt;     p = unique_pairs(i)%p
</span><br>
<span class="quotelev2">&gt;&gt;     q = unique_pairs(i)%q
</span><br>
<span class="quotelev2">&gt;&gt;     cpuid = unique_pairs(i)%cpu
</span><br>
<span class="quotelev2">&gt;&gt;     if(cpuid.eq.me_image) then
</span><br>
<span class="quotelev2">&gt;&gt;         TLR = 0.0_DP
</span><br>
<span class="quotelev2">&gt;&gt;         dTLRdr = 0.0_DP
</span><br>
<span class="quotelev2">&gt;&gt;         dTLRdh = 0.0_DP
</span><br>
<span class="quotelev2">&gt;&gt;         call mbdvdw_TLR(p, q, TLR, dTLRdr, dTLRdh)
</span><br>
<span class="quotelev2">&gt;&gt;         if(.not.allocated(local_tlr_lookup(counter)%dTLRdr))
</span><br>
<span class="quotelev2">&gt;&gt; allocate(local_tlr_lookup(counter)%dTLRdr(3, 3, nat, 3))
</span><br>
<span class="quotelev2">&gt;&gt;         local_tlr_lookup(counter)%p = p
</span><br>
<span class="quotelev2">&gt;&gt;         local_tlr_lookup(counter)%q = q
</span><br>
<span class="quotelev2">&gt;&gt;         local_tlr_lookup(counter)%TLR(:, :) = TLR(:, :)
</span><br>
<span class="quotelev2">&gt;&gt;         local_tlr_lookup(counter)%dTLRdr(:,:,:,:) = dTLRdR(:,:,:,:)
</span><br>
<span class="quotelev2">&gt;&gt;         local_tlr_lookup(counter)%dTLRdh(:,:,:,:) = dTLRdh(:,:,:,:)
</span><br>
<span class="quotelev2">&gt;&gt;     end if
</span><br>
<span class="quotelev2">&gt;&gt; end do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%p,          offsets(1), ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%q,          offsets(2), ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%wdtlrdr,    offsets(4), ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%wdtlrdh,    offsets(5), ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_get_address(local_tlr_lookup(1)%unique_ind, offsets(6), ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do i = 2, size(offsets)
</span><br>
<span class="quotelev2">&gt;&gt;   offsets(i) = offsets(i) - offsets(1)
</span><br>
<span class="quotelev2">&gt;&gt; end do
</span><br>
<span class="quotelev2">&gt;&gt; offsets(1) = 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; oldtypes = (/mpi_integer, mpi_integer, mpi_real, mpi_real, mpi_real,
</span><br>
<span class="quotelev2">&gt;&gt; mpi_integer/)
</span><br>
<span class="quotelev2">&gt;&gt; blockcounts = (/1, 1, 3*3, 3*3*nat*3, 3*3*3*3, 1/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But it didn't seem to work and I'm sorta at a loss. Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26472.php">http://www.open-mpi.org/community/lists/users/2015/03/26472.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/">http://www.open-mpi.org/community/lists/users/2015/03/</a>
</span><br>
<span class="quotelev1">&gt; 26473.php
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26474/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26473.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Reply:</strong> <a href="26475.php">George Bosilca: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
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
