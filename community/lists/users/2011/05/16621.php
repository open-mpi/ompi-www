<?
$subject_val = "[OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 07:16:11 2011" -->
<!-- isoreceived="20110525111611" -->
<!-- sent="Wed, 25 May 2011 15:16:04 +0400" -->
<!-- isosent="20110525111604" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="4ddce4f4.0e7d0e0a.4f7f.127f_at_mx.google.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allgather with derived type crash<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 07:16:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16620.php">sai sudheesh: "[OMPI users] I added you as a friend on Quepasa.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16625.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list, 
<br>
<p>&nbsp;
<br>
<p>I have an application which uses MPI_Allgather with derived types. It works
<br>
correctly with mpich2 and mvapich2. However it crashes periodically with
<br>
openmpi2. After investigation I found that the crash takes place when I use
<br>
derived datatypes with MPI_AllGather and number of ranks greater than 8.
<br>
I've written a simple application which demonstrates the crash. It simply
<br>
calls for MPI_Allgather with derived datatype that consists of 1 shifted
<br>
integer . The sample works correctly with number of ranks 2-8. But when
<br>
number of ranks is greater than 8 it crashes with segmentation fault inside
<br>
MPI_Type_free, MPI_Allgather or MPI_Type_create_struct functions. This
<br>
sample also works correctly with mv2, mpich2 with any number of ranks. Is
<br>
this a limitation of ompi allgather?
<br>
<p>&nbsp;
<br>
<p>Crashed output:
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>Press any key...
<br>
<p>[amd1:24260] *** Process received signal ***
<br>
<p>[amd1:24260] Signal: Segmentation fault (11)
<br>
<p>[amd1:24260] Signal code: Address not mapped (1)
<br>
<p>[amd1:24260] Failing at address: 0x18
<br>
<p>[amd1:24262] *** Process received signal ***
<br>
<p>[amd1:24262] Signal: Segmentation fault (11)
<br>
<p>[amd1:24262] Signal code: Address not mapped (1)
<br>
<p>[amd1:24262] Failing at address: 0x18
<br>
<p>[amd1:24258] *** Process received signal ***
<br>
<p>[amd1:24258] Signal: Segmentation fault (11)
<br>
<p>[amd1:24258] Signal code: Address not mapped (1)
<br>
<p>[amd1:24258] Failing at address: 0x18
<br>
<p>[amd1:24260] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
<br>
<p>[amd1:24260] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
<br>
<p>[amd1:24260] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
<br>
<p>[amd1:24260] [ 3]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(o
<br>
pal_free+0x4e) [0x2ae52f5836bd]
<br>
<p>[amd1:24260] [ 4]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ae52efd05aa]
<br>
<p>[amd1:24260] [ 5]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ae52efd1e20]
<br>
<p>[amd1:24260] [ 6]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_d
<br>
dt_destroy+0xe3) [0x2ae52efd1d7b]
<br>
<p>[amd1:24260] [ 7]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Ty
<br>
pe_free+0xf0) [0x2ae52f0202ec]
<br>
<p>[amd1:24260] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
<br>
<p>[amd1:24260] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
<br>
<p>[amd1:24260] [10] ./gather_openmpi_153 [0x400ba9]
<br>
<p>[amd1:24260] *** End of error message ***
<br>
<p>[amd1:24262] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
<br>
<p>[amd1:24262] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
<br>
<p>[amd1:24262] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
<br>
<p>[amd1:24262] [ 3]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(o
<br>
pal_free+0x4e) [0x2aedeea596bd]
<br>
<p>[amd1:24262] [ 4]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2aedee4a65aa]
<br>
<p>[amd1:24262] [ 5]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2aedee4a7e20]
<br>
<p>[amd1:24262] [ 6]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_d
<br>
dt_destroy+0xe3) [0x2aedee4a7d7b]
<br>
<p>[amd1:24262] [ 7]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Ty
<br>
pe_free+0xf0) [0x2aedee4f62ec]
<br>
<p>[amd1:24262] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
<br>
<p>[amd1:24262] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
<br>
<p>[amd1:24262] [10] ./gather_openmpi_153 [0x400ba9]
<br>
<p>[amd1:24262] *** End of error message ***
<br>
<p>[amd1:24258] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
<br>
<p>[amd1:24258] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
<br>
<p>[amd1:24258] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
<br>
<p>[amd1:24258] [ 3]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(o
<br>
pal_free+0x4e) [0x2ab92cc786bd]
<br>
<p>[amd1:24258] [ 4]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ab92c6c55aa]
<br>
<p>[amd1:24258] [ 5]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ab92c6c6e20]
<br>
<p>[amd1:24258] [ 6]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_d
<br>
dt_destroy+0xe3) [0x2ab92c6c6d7b]
<br>
<p>[amd1:24258] [ 7]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Ty
<br>
pe_free+0xf0) [0x2ab92c7152ec]
<br>
<p>[amd1:24258] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
<br>
<p>[amd1:24258] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
<br>
<p>[amd1:24258] [10] ./gather_openmpi_153 [0x400ba9]
<br>
<p>[amd1:24258] *** End of error message ***
<br>
<p>[amd1:24256] *** Process received signal ***
<br>
<p>[amd1:24256] Signal: Segmentation fault (11)
<br>
<p>[amd1:24256] Signal code: Address not mapped (1)
<br>
<p>[amd1:24256] Failing at address: 0x18
<br>
<p>[amd1:24256] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
<br>
<p>[amd1:24256] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
<br>
<p>[amd1:24256] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
<br>
<p>[amd1:24256] [ 3]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(o
<br>
pal_free+0x4e) [0x2ba5a8c866bd]
<br>
<p>[amd1:24256] [ 4]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ba5a86d35aa]
<br>
<p>[amd1:24256] [ 5]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1
<br>
[0x2ba5a86d4e20]
<br>
<p>[amd1:24256] [ 6]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_d
<br>
dt_destroy+0xe3) [0x2ba5a86d4d7b]
<br>
<p>[amd1:24256] [ 7]
<br>
/hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Ty
<br>
pe_free+0xf0) [0x2ba5a87232ec]
<br>
<p>[amd1:24256] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
<br>
<p>[amd1:24256] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
<br>
<p>[amd1:24256] [10] ./gather_openmpi_153 [0x400ba9]
<br>
<p>[amd1:24256] *** End of error message ***
<br>
<p>--------------------------------------------------------------------------
<br>
<p>mpirun noticed that process rank 7 with PID 24262 on node amd1 exited on
<br>
signal 11 (Segmentation fault).
<br>
<p>--------------------------------------------------------------------------
<br>
<p>&nbsp;
<br>
<p>The sample source code:
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>#include &lt;string.h&gt;
<br>
<p>#include &quot;stdio.h&quot;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p>&nbsp;
<br>
<p>#define MAX_ERROR_LENGTH 128
<br>
<p>&nbsp;
<br>
<p>#define num_types 3
<br>
<p>MPI_Aint disp[num_types] = {0, 10, 20};
<br>
<p>MPI_Datatype type[num_types] = {MPI_LB, MPI_INT, MPI_UB};
<br>
<p>int blocklen[num_types] = {1, 1, 1};
<br>
<p>&nbsp;
<br>
<p>void generate_derived_type(MPI_Datatype *dtype)
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;status = MPI_Type_create_struct( num_types, blocklen, disp, type, dtype
<br>
);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (status != MPI_SUCCESS)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;status of create_struct = %i, rank = %i\n&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;status = MPI_Type_commit( dtype );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (status != MPI_SUCCESS)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;status of type_commit = %i, rank = %i\n&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>int main(int argc, char *argv[])
<br>
<p>{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype stype;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int *send_buf = 0, *recv_buf = 0;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;send_buf = (int*)calloc(sizeof(int), 10000000);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;recv_buf = (int*)calloc(sizeof(int), 10000000);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Press any key...\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;getchar();
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; 20000; i++)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int status = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;generate_derived_type(&amp;stype);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = MPI_Allgather(send_buf, 1, stype, recv_buf, 1, stype,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (status != MPI_SUCCESS)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;status of all_gather = %i, rank = %i\n&quot;, 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = MPI_Type_free( &amp;stype);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (status != MPI_SUCCESS)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;status of type_free = %i, rank = %i\n&quot;,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status, rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(send_buf);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;free(recv_buf);
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Thanks, 
<br>
<p>Andrew.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16621/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Previous message:</strong> <a href="16620.php">sai sudheesh: "[OMPI users] I added you as a friend on Quepasa.com"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16622.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16625.php">Peter Kjellström: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
<li><strong>Reply:</strong> <a href="16634.php">Jeff Squyres: "Re: [OMPI users] MPI_Allgather with derived type crash"</a>
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
