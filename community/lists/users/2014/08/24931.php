<?
$subject_val = "[OMPI users] MPI-I/O issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  6 12:50:38 2014" -->
<!-- isoreceived="20140806165038" -->
<!-- sent="Wed, 06 Aug 2014 11:50:29 -0500" -->
<!-- isosent="20140806165029" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-I/O issues" -->
<!-- id="53E25CD5.3000205_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI-I/O issues<br>
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-06 12:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24930.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi 1.8.1 error witg gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm seeing some problems with dervided datatype construction and I/O 
<br>
with OpenMPI 1.8.1.
<br>
<p>I have replicated them in the attached program.
<br>
The first issue is that MPI_Type_create_hindexed_block() always 
<br>
sefgaults. Usage of this routine is commented out in the program. (I 
<br>
have a separate email thread with George and Edgar about this).
<br>
<p>The other issue is a segfault in MPI_File_set_view, when I have ranks &gt; 
<br>
0 creating the derived datatypes with count 0, and rank 0 creating a 
<br>
derived datatype of count NUM_BLOCKS. If I use MPI_Type_contiguous to 
<br>
create the 0 sized file and memory datatypes (instead of hindexed and 
<br>
hvector) it works fine.
<br>
To replicate, run the program with 2 or more procs:
<br>
<p>mpirun -np 2 ./hindexed_io mpi_test_file
<br>
<p>[jam:15566] *** Process received signal ***
<br>
[jam:15566] Signal: Segmentation fault (11)
<br>
[jam:15566] Signal code: Address not mapped (1)
<br>
[jam:15566] Failing at address: (nil)
<br>
[jam:15566] [ 0] [0xfcd440]
<br>
[jam:15566] [ 1] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIOI_Flatten_datatype+0x17a)[0xc80f2a]
<br>
[jam:15566] [ 2] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(ADIO_Set_view+0x1c1)[0xc72a6d]
<br>
[jam:15566] [ 3] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_dist_MPI_File_set_view+0x69b)[0xc8d11b]
<br>
[jam:15566] [ 4] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_romio_file_set_view+0x7c)[0xc4f7c5]
<br>
[jam:15566] [ 5] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(PMPI_File_set_view+0x1e6)[0xb32f7e]
<br>
[jam:15566] [ 6] ./hindexed_io[0x8048aa6]
<br>
[jam:15566] [ 7] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
<br>
[jam:15566] [ 8] ./hindexed_io[0x80487e1]
<br>
[jam:15566] *** End of error message ***
<br>
<p>If I use --mca io ompio with 2 or more procs, the program segfaults in 
<br>
write_at_all (regardless of what routine is used to construct a 0 sized 
<br>
datatype):
<br>
<p>[jam:15687] *** Process received signal ***
<br>
[jam:15687] Signal: Floating point exception (8)
<br>
[jam:15687] Signal code: Integer divide-by-zero (1)
<br>
[jam:15687] Failing at address: 0x3e29b7
<br>
[jam:15687] [ 0] [0xe56440]
<br>
[jam:15687] [ 1] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(ompi_io_ompio_set_explicit_offset+0x9d)[0x3513bc]
<br>
[jam:15687] [ 2] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(ompio_io_ompio_file_write_at_all+0x3e)[0x35869a]
<br>
[jam:15687] [ 3] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(mca_io_ompio_file_write_at_all+0x66)[0x358650]
<br>
[jam:15687] [ 4] 
<br>
/scr/chaarawi/install/ompi/lib/libmpi.so.1(MPI_File_write_at_all+0x1b3)[0x1f46f3]
<br>
[jam:15687] [ 5] ./hindexed_io[0x8048b07]
<br>
[jam:15687] [ 6] /lib/libc.so.6(__libc_start_main+0xdc)[0x7d5ebc]
<br>
[jam:15687] [ 7] ./hindexed_io[0x80487e1]
<br>
[jam:15687] *** End of error message ***
<br>
<p>If I use mpich 3.1.2 , I don't see those issues.
<br>
<p>Thanks,
<br>
Mohamad
<br>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24931/hindexed_io.c">hindexed_io.c</a>
</ul>
<!-- attachment="hindexed_io.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24930.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi 1.8.1 error witg gfortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24932.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24934.php">Rob Latham: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Reply:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
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
