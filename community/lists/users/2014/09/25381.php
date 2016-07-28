<?
$subject_val = "[OMPI users] mpi_file_read and arrays of custom datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 02:56:33 2014" -->
<!-- isoreceived="20140924065633" -->
<!-- sent="Wed, 24 Sep 2014 08:56:32 +0200" -->
<!-- isosent="20140924065632" -->
<!-- name="Au Eelis" -->
<!-- email="aueelis_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_file_read and arrays of custom datatypes" -->
<!-- id="CABNNtPDkz1Bc+tyDbVN50aVzHifPuZSWQRq9Mt+5L4bS=fVxGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi_file_read and arrays of custom datatypes<br>
<strong>From:</strong> Au Eelis (<em>aueelis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 02:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25382.php">Brock Palen: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I want to convert the input/output of my program to MPI-IO routines. To
<br>
write the same data, as is written in the already implement textmode
<br>
routines, I need a custom datatype consisting of several integers and reals.
<br>
<p>While investigating the functionality, I created a module, which cares for
<br>
the type, and a small testprogram, which performs a mpi_scatter, a parallel
<br>
write with mpi_file_write and finally a single read from the master with
<br>
mpi_file_read, to compare the data with the original dataset.
<br>
<p>My testtype for this particular problem is defined as an 8 byte real
<br>
followed by a 4 byte integer. This way, the datasize is 12 byte, while the
<br>
extent differs for different compilers (gfortran has an extent of 16 byte,
<br>
while ifort has an extent of 12 byte). I know, that I can fix the extent
<br>
with the help of mpi_type_create_resized after measuring the distance of
<br>
the elements in an array, but this doesn't show the strange behaviour, I
<br>
don't understand.
<br>
<p>My problem is, that I don't really understand the way, how mpi_file_read
<br>
uses this extent to perform file-io on arrays of this data. On the one
<br>
hand, the data, which is written to the file, is only the data, which is
<br>
actually used, i.e. no padding is written to the file and thus, only the
<br>
mpi_type_size is interesting for the writing. On the other hand, the
<br>
missing padding in the extent of ifort causes mpi_file_read to skip some of
<br>
the last datasets. In my opinion, this would make some sense, if the
<br>
padding of the datasets would cause corruption on the read data after the
<br>
first padding, but this is not the case. If you execute the appended
<br>
program with 4 processes, the last two of eight datasets stay uninitialized
<br>
(keep their values of -1 for each member) what suggests that the amount of
<br>
data is somehow related to the extent rather than the type_size.
<br>
<p>What is the problem here? Do I misunderstand, how these routines should
<br>
work?
<br>
<p>Best regards,
<br>
Stefan
<br>
<p>PS: Does the stat(1) variable mean anything? It returns 0 all the time.
<br>
<p><p>### CODE ###
<br>
<p>module mpiio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;private
<br>
&nbsp;&nbsp;&nbsp;&nbsp;public :: r1i1_iotype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;public :: r1i1_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;public :: init_mpiio, get_mpiio_dtypes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type, bind(c) :: r1i1_iotype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real(8) :: r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end type
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;integer :: r1i1_mpi
<br>
<p>contains
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! initializer, which creates datatypes for all types in this module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutine init_mpiio()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r1i1_mpi = get_r1i1_type()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end subroutine
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! inforoutine, which prints information about all types in this module
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutine get_mpiio_dtypes()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,&quot;(A80)&quot;) &quot;=== Available Datatypes ================&quot; // &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; &quot;========================================&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call get_dtype_info(r1i1_mpi)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,&quot;(A80)&quot;) &quot;========================================&quot; // &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp; &quot;========================================&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end subroutine
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! generic routine, which prints information about a datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;subroutine get_dtype_info(dt)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: dt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierror, nl, i, sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character(LEN=63) :: type_name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_address_kind) :: lb, extent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_address_kind) :: true_lb, true_extent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: comb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: num_int, num_addr, num_dt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(:), allocatable :: aob
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_address_kind), dimension(:), allocatable :: aod
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(:), allocatable :: aot
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! get name of datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_name(dt, type_name, nl, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;Name: &quot;, type_name
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! get start address and extent
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_extent(dt, lb, extent, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_true_extent(dt, true_lb, true_extent, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;lb:     &quot;, lb,     &quot; true lb:     &quot;, true_lb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;extent: &quot;, extent, &quot; true extent: &quot;, true_extent
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! get contents
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_envelope(dt, num_int, num_addr, num_dt, comb,
<br>
ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(aob(num_int))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(aod(num_addr))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(aot(num_dt))
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_contents(dt, num_int, num_addr, num_dt, aob, aod,
<br>
aot, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;consists of: &quot;, num_int - 1, aob(1)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, num_int - 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_get_name(aot(i), type_name, nl, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) i, &quot;:&quot;, aob(i+1), aod(i), trim(type_name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_size(dt, sz, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;data size: &quot;, sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end subroutine
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;function get_r1i1_type() result(dt)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! datatype
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: dt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type(r1i1_iotype) :: t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_address_kind) :: a_base, a_r, a_i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! number of blocks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: cnt = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! elements in each block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(cnt) :: aob
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! types in each block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(cnt) :: aot
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! displacements of each block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_address_kind), dimension(cnt) :: aod
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aob = [1, 1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aot = [mpi_double_precision, mpi_integer]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! get base address and address of members
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_get_address(t, a_base, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_get_address(t%r, a_r, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_get_address(t%i, a_i, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! convert to offsets/displacements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a_r = a_r - a_base
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a_i = a_i - a_base
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! displacements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aod = [a_r, a_i]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! create type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_create_struct(cnt, aob, aod, aot, dt, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! name the type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_set_name(dt, &quot;r1i1&quot;, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! commit type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_commit(dt, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;end function
<br>
end module
<br>
<p>program test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use mpiio
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;type(r1i1_iotype), dimension(:), allocatable :: v, w
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: dt
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: myrank, mpisize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real(8) :: ranarray(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: i, n, m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: fh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(mpi_status_size) :: stat
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer(mpi_offset_kind) :: fp, fs, fs2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logical :: correct
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! problem size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m = 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! initializer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, myrank, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world, mpisize, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! initialize datatypes and print info
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call init_mpiio()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call get_mpiio_dtypes()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dt = r1i1_mpi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! synchronize to avoid mess of output
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! create data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;n = mpisize * m
<br>
&nbsp;&nbsp;&nbsp;&nbsp;allocate(w(m))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! root process will create a batch of values
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(v(n))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call random_number(ranarray)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v(i) % r = ranarray(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v(i) % i = int(huge(v(i)%i) * ranarray(2))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! scatter across the processes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_scatter(v, m, dt, w, m, dt, 0, mpi_comm_world, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! open collective file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_open(mpi_comm_world, &quot;testfile&quot;, mpi_mode_create +
<br>
mpi_mode_rdwr, mpi_info_null, fh, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! get size of datatype to calculate position in file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_type_size(dt, sz, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fs = n * sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fp = myrank * m * sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) sz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! search position for each process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_seek(fh, fp, mpi_seek_set, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! write personal part
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_write(fh, w, m, dt, stat, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;! synchronize the file, so the master process can start reading
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_sync(fh, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_barrier(mpi_comm_world, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! inquire the file size and compare with the previously calculated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_get_size(fh, fs2, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;file size: &quot;, fs2, &quot;(&quot;, fs, &quot;)&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! create space for read data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(w)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(w(n))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! initialize all fields with -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w(i) % r = -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;w(i) % i = -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! search the beginning
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_seek(fh, int(0,kind=mpi_offset_kind), mpi_seek_set,
<br>
ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! read all data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_read(fh, w, n, dt, stat, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) ierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) stat
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! compare
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correct = .true.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correct = correct .and. (v(i) % r == w(i) % r)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correct = correct .and. (v(i) % i == w(i) % i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) v(i) % r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) w(i) % r
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) v(i) % i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) w(i) % i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) &quot;original and read data are the same: &quot;, correct
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(v)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;deallocate(w)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! close file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_file_close(fh, ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;! finish
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierror)
<br>
<p>end program
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25382.php">Brock Palen: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<li><strong>Previous message:</strong> <a href="25380.php">Maxime Boissonneault: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/12/25894.php">Rob Latham: "Re: [OMPI users] mpi_file_read and arrays of custom datatypes"</a>
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
