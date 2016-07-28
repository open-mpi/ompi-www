<?
$subject_val = "Re: [OMPI users] MPI_Allgather with derived type crash";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 25 19:52:02 2011" -->
<!-- isoreceived="20110525235202" -->
<!-- sent="Wed, 25 May 2011 19:51:48 -0400" -->
<!-- isosent="20110525235148" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather with derived type crash" -->
<!-- id="CFC54A42-D3EE-4A81-94B1-A04B1B978E43_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4ddce4f4.0e7d0e0a.4f7f.127f_at_mx.google.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather with derived type crash<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-25 19:51:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16633.php">Jeff Squyres: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16621.php">Andrew Senin: "[OMPI users] MPI_Allgather with derived type crash"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>When I run 10 copies on the same node with btl tcp,self (no sm or openib), valgrind reports the following to me (using ompi-1.4 branch HEAD):
<br>
<p>==23753== Invalid write of size 1
<br>
==23753==    at 0x4C6EA31: non_overlap_copy_content_same_ddt (dt_copy.h:170)
<br>
==23753==    by 0x4C6CC3B: ompi_ddt_copy_content_same_ddt (dt_copy.c:95)
<br>
==23753==    by 0xE873C82: ompi_coll_tuned_allgather_intra_bruck (coll_tuned_allgather.c:186)
<br>
==23753==    by 0xE86B9FC: ompi_coll_tuned_allgather_intra_dec_fixed (coll_tuned_decision_fixed.c:561)
<br>
==23753==    by 0x4C7D104: PMPI_Allgather (pallgather.c:114)
<br>
==23753==    by 0x400DC0: main (andrew.c:58)
<br>
==23753==  Address 0xeef4832 is 6 bytes after a block of size 124 alloc'd
<br>
==23753==    at 0x4A05793: calloc (vg_replace_malloc.c:467)
<br>
==23753==    by 0x51FBCAB: opal_calloc (malloc.c:131)
<br>
==23753==    by 0xE873C22: ompi_coll_tuned_allgather_intra_bruck (coll_tuned_allgather.c:177)
<br>
==23753==    by 0xE86B9FC: ompi_coll_tuned_allgather_intra_dec_fixed (coll_tuned_decision_fixed.c:561)
<br>
==23753==    by 0x4C7D104: PMPI_Allgather (pallgather.c:114)
<br>
==23753==    by 0x400DC0: main (andrew.c:58)
<br>
<p>I get lots of warnings like these (maybe 2 per process?).  In valgrind, it eventually completes, but without valgrind it definitely crashes.
<br>
<p>I've filed #2805 with this issue:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2805">https://svn.open-mpi.org/trac/ompi/ticket/2805</a>
<br>
<p><p><p><p>On May 25, 2011, at 7:16 AM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hello list,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have an application which uses MPI_Allgather with derived types. It works correctly with mpich2 and mvapich2. However it crashes periodically with openmpi2. After investigation I found that the crash takes place when I use derived datatypes with MPI_AllGather and number of ranks greater than 8. I&#146;ve written a simple application which demonstrates the crash. It simply calls for MPI_Allgather with derived datatype that consists of 1 shifted integer . The sample works correctly with number of ranks 2-8. But when number of ranks is greater than 8 it crashes with segmentation fault inside MPI_Type_free, MPI_Allgather or MPI_Type_create_struct functions. This sample also works correctly with mv2, mpich2 with any number of ranks. Is this a limitation of ompi allgather?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Crashed output:
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; Press any key...
</span><br>
<span class="quotelev1">&gt; [amd1:24260] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [amd1:24260] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [amd1:24260] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [amd1:24260] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [amd1:24262] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [amd1:24262] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [amd1:24262] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [amd1:24262] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [amd1:24258] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [amd1:24258] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [amd1:24258] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [amd1:24258] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 3] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(opal_free+0x4e) [0x2ae52f5836bd]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 4] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ae52efd05aa]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 5] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ae52efd1e20]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 6] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_ddt_destroy+0xe3) [0x2ae52efd1d7b]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 7] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Type_free+0xf0) [0x2ae52f0202ec]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] [10] ./gather_openmpi_153 [0x400ba9]
</span><br>
<span class="quotelev1">&gt; [amd1:24260] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 3] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(opal_free+0x4e) [0x2aedeea596bd]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 4] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2aedee4a65aa]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 5] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2aedee4a7e20]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 6] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_ddt_destroy+0xe3) [0x2aedee4a7d7b]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 7] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Type_free+0xf0) [0x2aedee4f62ec]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] [10] ./gather_openmpi_153 [0x400ba9]
</span><br>
<span class="quotelev1">&gt; [amd1:24262] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 3] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(opal_free+0x4e) [0x2ab92cc786bd]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 4] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ab92c6c55aa]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 5] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ab92c6c6e20]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 6] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_ddt_destroy+0xe3) [0x2ab92c6c6d7b]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 7] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Type_free+0xf0) [0x2ab92c7152ec]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] [10] ./gather_openmpi_153 [0x400ba9]
</span><br>
<span class="quotelev1">&gt; [amd1:24258] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [amd1:24256] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [amd1:24256] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [amd1:24256] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [amd1:24256] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 0] /lib64/libpthread.so.0 [0x3d6b20eb10]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 1] /lib64/libc.so.6 [0x3d6a671d80]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 2] /lib64/libc.so.6(cfree+0x4b) [0x3d6a67276b]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 3] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libopen-pal.so.0(opal_free+0x4e) [0x2ba5a8c866bd]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 4] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ba5a86d35aa]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 5] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1 [0x2ba5a86d4e20]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 6] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(ompi_ddt_destroy+0xe3) [0x2ba5a86d4d7b]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 7] /hpc/home/USERS/senina/projects/openmpi-1.4.3/install/lib/libmpi.so.1(MPI_Type_free+0xf0) [0x2ba5a87232ec]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 8] ./gather_openmpi_153(main+0xef) [0x400dc8]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [ 9] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3d6a61d994]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] [10] ./gather_openmpi_153 [0x400ba9]
</span><br>
<span class="quotelev1">&gt; [amd1:24256] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 7 with PID 24262 on node amd1 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The sample source code:
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;stdio.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #define MAX_ERROR_LENGTH 128
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; #define num_types 3
</span><br>
<span class="quotelev1">&gt; MPI_Aint disp[num_types] = {0, 10, 20};
</span><br>
<span class="quotelev1">&gt; MPI_Datatype type[num_types] = {MPI_LB, MPI_INT, MPI_UB};
</span><br>
<span class="quotelev1">&gt; int blocklen[num_types] = {1, 1, 1};
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; void generate_derived_type(MPI_Datatype *dtype)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;     int status;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;                         
</span><br>
<span class="quotelev1">&gt;     status = MPI_Type_create_struct( num_types, blocklen, disp, type, dtype );
</span><br>
<span class="quotelev1">&gt;     if (status != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;status of create_struct = %i, rank = %i\n&quot;,
</span><br>
<span class="quotelev1">&gt;                                status, rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;        
</span><br>
<span class="quotelev1">&gt;     status = MPI_Type_commit( dtype );
</span><br>
<span class="quotelev1">&gt;     if (status != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         printf(&quot;status of type_commit = %i, rank = %i\n&quot;,
</span><br>
<span class="quotelev1">&gt;            status, rank);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     int rank, size;
</span><br>
<span class="quotelev1">&gt;     MPI_Datatype stype;
</span><br>
<span class="quotelev1">&gt;     int *send_buf = 0, *recv_buf = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     send_buf = (int*)calloc(sizeof(int), 10000000);
</span><br>
<span class="quotelev1">&gt;     recv_buf = (int*)calloc(sizeof(int), 10000000);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Press any key...\n&quot;);
</span><br>
<span class="quotelev1">&gt;     getchar();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; 20000; i++)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;        int status = 0;
</span><br>
<span class="quotelev1">&gt;         generate_derived_type(&amp;stype);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         status = MPI_Allgather(send_buf, 1, stype, recv_buf, 1, stype, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         if (status != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             printf(&quot;status of all_gather = %i, rank = %i\n&quot;,
</span><br>
<span class="quotelev1">&gt;                     status, rank);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;         status = MPI_Type_free( &amp;stype);
</span><br>
<span class="quotelev1">&gt;         if (status != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;             printf(&quot;status of type_free = %i, rank = %i\n&quot;,
</span><br>
<span class="quotelev1">&gt;                     status, rank);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     free(send_buf);
</span><br>
<span class="quotelev1">&gt;     free(recv_buf);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrew.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16635.php">Jagannath Mondal: "[OMPI users] problem using mpirun over multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16633.php">Jeff Squyres: "Re: [OMPI users] FW: Issue with mpicc --showme in windows"</a>
<li><strong>In reply to:</strong> <a href="16621.php">Andrew Senin: "[OMPI users] MPI_Allgather with derived type crash"</a>
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
