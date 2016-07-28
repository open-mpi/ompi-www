<?
$subject_val = "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 15 22:18:52 2015" -->
<!-- isoreceived="20150316021852" -->
<!-- sent="Sun, 15 Mar 2015 20:18:46 -0600" -->
<!-- isosent="20150316021846" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type" -->
<!-- id="59B56D1A-2537-4855-BF9D-1C895EC5C108_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAKgEOEOeSHAwRU9JQvorMd9F6rj+rEbvE25aBA2zHx4Xdf600Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-03-15 22:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Previous message:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>The struct idea makes perfect sense. As apparently you have multiple local_tlr_lookup the current approach will certainly not work. As you mentioned the allocatable arrays do not have similar relative displacements, and this prevent the derived datatype from being correctly constructed. Moreover, in order to be able to build a consistent datatype with a repetition count, one must suppose that your &#226;&#128;&#156;nat&quot; is a constant.  You then have 2 possible approaches:
<br>
<p>1. Get rid of the allocatable arrays in the tlr_lut structure. (this is an easy solution but not very flexible).
<br>
<p>2. (Spoiler alert: I have no idea how to implement this in Fortran, but this is a regular trick for C programmers). Reshape your structure to have all fixed size elements in the beginning, and the only variable size one at the end (in your case this require to move the dTLRdr at the end of the struct). Then allocate a memory area large enough to hold all your structures, and the the pointers manually (also each datatype will have to be resized at the correct length). Let me give you an example (in C)
<br>
<p>typedef struct my_t {
<br>
&nbsp;&nbsp;int a;
<br>
&nbsp;&nbsp;double b[1];
<br>
} my_t;
<br>
<p>/* suppose the maximum size of the d component is NMAX (3*3*nat*3), and that
<br>
&nbsp;* I dare allocate a little extra memory (in case the d&#226;&#128;&#153;s are not all of the
<br>
&nbsp;* same size).
<br>
&nbsp;*/
<br>
size_t my_struct_size = (sizeof(my_t) + NMAX * sizeof(double)) * nb_elements;
<br>
my_t* elements = (my_t*)malloc(my_struct_size);
<br>
/* it is now unsafe to access elements[i] but I can build a datatype that match */
<br>
displ[0] = &amp;elements[0].a - &amp;element[0];
<br>
displ[1] = &amp;elements[0].d - &amp;element[0];
<br>
types[0] = MPI_INT;
<br>
types[1] = MPI_DOUBLE;
<br>
bl[0] = 1;
<br>
bl[1] = NMAX;
<br>
/* create the base struct bstr*/
<br>
MPI_Type_create_resized(bstr, 0, my_size_struct, &amp;my_mpi_dt);
<br>
/* you can now send using my_mpi_dt and a count */
<br>
<p>Good luck ? ;)
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 15, 2015, at 19:50 , Thomas Markovich &lt;thomasmarkovich_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for taking the time to look at my question! wtlr was a typo when I was stripping things down for a smaller example... TLR should be a 3x3 matrix (long range dipole dipole tensor). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to split up the computation of anywhere between 30k and 15m individual dipole-dipole tensors, and I figured that I'd use a struct to help with the book keeping. It appears that having an allocatable tensor (dTLRdr) throws a wrench in the whole thing. When I looked more into the memory layout with totalview, it looks like the various dTLRdR isn't even contiguously connected with the rest of the array! This is supported by the fact that my offsets for each dTLRdr ( offset of tlr_lookup(1)%dTLRdr, tlr_lookup(2)%dTLRdr, tlr_lookup(3)%dTLRdr) are different. Unfortunately, I'm not totally sure that it's possible to do what I was trying to do. I'm going to try a different strategy that sidesteps this issue of derived data types, though. Perhaps that'll help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 15, 2015 at 9:00 PM George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Thomas,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IWhat exactly is 'local_tlr_lookup(1)%wtlr'?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the problem is that your MPI derived datatype use the pointer to the allocatable arrays instead of using the pointer to the first element of these arrays. As an example instead of doing
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%wtlr,       offsets(3), ierr)
</span><br>
<span class="quotelev1">&gt; I would go for
</span><br>
<span class="quotelev1">&gt; call mpi_get_address(local_tlr_lookup(1)%TLR(1,1),       offsets(3), ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then you don't have to subtract offset(1) from the other, but instead you can go for absolute addressing. Unfortunately this approach is not compatible with sending multiple structures (aka. using a count != 1), simply because each struct might have different displacements for the internal allocatable arrays.
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
<span class="quotelev1">&gt; On Sun, Mar 15, 2015 at 3:45 PM, Thomas Markovich &lt;thomasmarkovich_at_[hidden] &lt;mailto:thomasmarkovich_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to parallelize my code by distributing the computation of various elements of a lookup table and then sync that lookup table across all nodes. To make the code easier to read, and to keep track of everything easier, I've decided to use a derived data type in fortran defined as follows:
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
<span class="quotelev1">&gt; and this works quite well in serial. I just have to allocate dTLRdr at run time. This is because TLR should be size 3x3xNx3, where N is a constant known at run time but not compile time. I've tried to create a custom data type to tell open-mpi what the size should be but I'm at a loss for how to deal with the allocatable array. I've tried something like this:
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
<span class="quotelev1">&gt;         if(.not.allocated(local_tlr_lookup(counter)%dTLRdr)) allocate(local_tlr_lookup(counter)%dTLRdr(3, 3, nat, 3))
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
<span class="quotelev1">&gt; oldtypes = (/mpi_integer, mpi_integer, mpi_real, mpi_real, mpi_real, mpi_integer/)
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
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26472.php">http://www.open-mpi.org/community/lists/users/2015/03/26472.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26472.php">http://www.open-mpi.org/community/lists/users/2015/03/26472.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26473.php">http://www.open-mpi.org/community/lists/users/2015/03/26473.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26473.php">http://www.open-mpi.org/community/lists/users/2015/03/26473.php</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26474.php">http://www.open-mpi.org/community/lists/users/2015/03/26474.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26476.php">Pablo Escobar Lopez: "[OMPI users] will openmpi with infiniband support fall back to ethernet if infiniband not available?"</a>
<li><strong>Previous message:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>In reply to:</strong> <a href="26474.php">Thomas Markovich: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
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
