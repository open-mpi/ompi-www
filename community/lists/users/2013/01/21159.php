<?
$subject_val = "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 19 09:44:16 2013" -->
<!-- isoreceived="20130119144416" -->
<!-- sent="Sat, 19 Jan 2013 06:44:08 -0800" -->
<!-- isosent="20130119144408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2" -->
<!-- id="148B49A6-CFA2-4019-A3D2-22E81E23EDE1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301190927.r0J9RUVQ023145_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-19 09:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21161.php">George Bosilca: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used your test code to confirm it also fails on our trunk - it looks like someone got the reference count wrong when creating/destructing groups.
<br>
<p>Afraid I'll have to defer to the authors of that code area...
<br>
<p><p>On Jan 19, 2013, at 1:27 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.6.4rc2 and have the following problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 110 ompi_info | grep &quot;Open MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.6.4rc2r27861
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 111 mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/usr/local/openmpi-1.6.4_64_gcc/include -fexceptions -pthread -m64 
</span><br>
<span class="quotelev1">&gt; -L/usr/local/openmpi-1.6.4_64_gcc/lib64 -lmpi -lm -lkstat -llgrp -lsocket -lnsl 
</span><br>
<span class="quotelev1">&gt; -lrt -lm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 112 mpiexec -np 4 data_type_4
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; original matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1     2     3     4     5     6     7     8     9    10
</span><br>
<span class="quotelev1">&gt;    11    12    13    14    15    16    17    18    19    20
</span><br>
<span class="quotelev1">&gt;    21    22    23    24    25    26    27    28    29    30
</span><br>
<span class="quotelev1">&gt;    31    32    33    34    35    36    37    38    39    40
</span><br>
<span class="quotelev1">&gt;    41    42    43    44    45    46    47    48    49    50
</span><br>
<span class="quotelev1">&gt;    51    52    53    54    55    56    57    58    59    60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; result matrix:
</span><br>
<span class="quotelev1">&gt;  elements are sqared in columns:
</span><br>
<span class="quotelev1">&gt;     0   1   2   6   7
</span><br>
<span class="quotelev1">&gt;  elements are multiplied with 2 in columns:
</span><br>
<span class="quotelev1">&gt;     3   4   5   8   9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1     4     9     8    10    12    49    64    18    20
</span><br>
<span class="quotelev1">&gt;   121   144   169    28    30    32   289   324    38    40
</span><br>
<span class="quotelev1">&gt;   441   484   529    48    50    52   729   784    58    60
</span><br>
<span class="quotelev1">&gt;   961  1024  1089    68    70    72  1369  1444    78    80
</span><br>
<span class="quotelev1">&gt;  1681  1764  1849    88    90    92  2209  2304    98   100
</span><br>
<span class="quotelev1">&gt;  2601  2704  2809   108   110   112  3249  3364   118   120
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (comm-&gt;c_remote_group)
</span><br>
<span class="quotelev1">&gt; )-&gt;obj_magic_id, file ../../openmpi-1.6.4rc2r27861/ompi/communicator/comm_init.c
</span><br>
<span class="quotelev1">&gt; , line 412
</span><br>
<span class="quotelev1">&gt; [tyr:18578] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:18578] Signal: Abort (6)
</span><br>
<span class="quotelev1">&gt; [tyr:18578] Signal code:  (-1)
</span><br>
<span class="quotelev1">&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (comm-&gt;c_remote_group)
</span><br>
<span class="quotelev1">&gt; )-&gt;obj_magic_id, file ../../openmpi-1.6.4rc2r27861/ompi/communicator/comm_init.c
</span><br>
<span class="quotelev1">&gt; , line 412
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:opal_backtr
</span><br>
<span class="quotelev1">&gt; ace_print+0x20
</span><br>
<span class="quotelev1">&gt; [tyr:18580] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0x2c1bc4
</span><br>
<span class="quotelev1">&gt; [tyr:18580] Signal: Abort (6)
</span><br>
<span class="quotelev1">&gt; [tyr:18580] Signal code:  (-1)
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd88a4
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc418
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc624
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 6 (ABRT)]
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:abort+0xd0
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:_assert+0x74
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0xa4c58
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:0xa2430
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:ompi_comm_f
</span><br>
<span class="quotelev1">&gt; inalize+0x168
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:ompi_mpi_fi
</span><br>
<span class="quotelev1">&gt; nalize+0xa60
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.6.4_64_gcc/lib64/libmpi.so.1.0.7:MPI_Finaliz
</span><br>
<span class="quotelev1">&gt; e+0x90
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/data_type_4:main+0x588
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/data_type_4:_start+0x7c
</span><br>
<span class="quotelev1">&gt; [tyr:18578] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works fine with LAM-MPI (even in a heterogeneous environment
</span><br>
<span class="quotelev1">&gt; with little-endian and big-endian machines) so that it is probably an
</span><br>
<span class="quotelev1">&gt; error in Open MPI (but you never know).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 125 mpicc -showme
</span><br>
<span class="quotelev1">&gt; gcc -I/usr/local/lam-6.5.9_64_gcc/include -L/usr/local/lam-6.5.9_64_gcc/lib 
</span><br>
<span class="quotelev1">&gt; -llamf77mpi -lmpi -llam -lsocket -lnsl 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 126 lamboot -v hosts.lam-mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM 6.5.9/MPI 2 C++ - Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executing hboot on n0 (tyr.informatik.hs-fulda.de - 2 CPUs)...
</span><br>
<span class="quotelev1">&gt; Executing hboot on n1 (sunpc1.informatik.hs-fulda.de - 4 CPUs)...
</span><br>
<span class="quotelev1">&gt; topology done      
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 127 mpirun -v app_data_type_4.lam-mpi
</span><br>
<span class="quotelev1">&gt; 22894 data_type_4 running on local
</span><br>
<span class="quotelev1">&gt; 22895 data_type_4 running on n0 (o)
</span><br>
<span class="quotelev1">&gt; 21998 data_type_4 running on n1
</span><br>
<span class="quotelev1">&gt; 22896 data_type_4 running on n0 (o)
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; original matrix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1     2     3     4     5     6     7     8     9    10
</span><br>
<span class="quotelev1">&gt;    11    12    13    14    15    16    17    18    19    20
</span><br>
<span class="quotelev1">&gt;    21    22    23    24    25    26    27    28    29    30
</span><br>
<span class="quotelev1">&gt;    31    32    33    34    35    36    37    38    39    40
</span><br>
<span class="quotelev1">&gt;    41    42    43    44    45    46    47    48    49    50
</span><br>
<span class="quotelev1">&gt;    51    52    53    54    55    56    57    58    59    60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; result matrix:
</span><br>
<span class="quotelev1">&gt;  elements are sqared in columns:
</span><br>
<span class="quotelev1">&gt;     0   1   2   6   7
</span><br>
<span class="quotelev1">&gt;  elements are multiplied with 2 in columns:
</span><br>
<span class="quotelev1">&gt;     3   4   5   8   9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     1     4     9     8    10    12    49    64    18    20
</span><br>
<span class="quotelev1">&gt;   121   144   169    28    30    32   289   324    38    40
</span><br>
<span class="quotelev1">&gt;   441   484   529    48    50    52   729   784    58    60
</span><br>
<span class="quotelev1">&gt;   961  1024  1089    68    70    72  1369  1444    78    80
</span><br>
<span class="quotelev1">&gt;  1681  1764  1849    88    90    92  2209  2304    98   100
</span><br>
<span class="quotelev1">&gt;  2601  2704  2809   108   110   112  3249  3364   118   120
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr strided_vector 128 lamhalt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM 6.5.9/MPI 2 C++ - Indiana University
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank you
</span><br>
<span class="quotelev1">&gt; very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; /* The program demonstrates how to set up and use a strided vector.
</span><br>
<span class="quotelev1">&gt; * The process with rank 0 creates a matrix. The columns of the
</span><br>
<span class="quotelev1">&gt; * matrix will then be distributed with a collective communication
</span><br>
<span class="quotelev1">&gt; * operation to all processes. Each process performs an operation on
</span><br>
<span class="quotelev1">&gt; * all column elements. Afterwards the results are collected in the
</span><br>
<span class="quotelev1">&gt; * source matrix overwriting the original column elements.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * The program uses between one and n processes to change the values
</span><br>
<span class="quotelev1">&gt; * of the column elements if the matrix has n columns. If you start
</span><br>
<span class="quotelev1">&gt; * the program with one process it has to work on all n columns alone
</span><br>
<span class="quotelev1">&gt; * and if you start it with n processes each process modifies the
</span><br>
<span class="quotelev1">&gt; * values of one column. Every process must know how many columns it
</span><br>
<span class="quotelev1">&gt; * has to modify so that it can allocate enough buffer space for its
</span><br>
<span class="quotelev1">&gt; * column block. Therefore the process with rank 0 computes the
</span><br>
<span class="quotelev1">&gt; * numbers of columns for each process in the array &quot;num_columns&quot; and
</span><br>
<span class="quotelev1">&gt; * distributes this array with MPI_Broadcast to all processes. Each
</span><br>
<span class="quotelev1">&gt; * process can now allocate memory for its column block. There is
</span><br>
<span class="quotelev1">&gt; * still one task to do before the columns of the matrix can be
</span><br>
<span class="quotelev1">&gt; * distributed with MPI_Scatterv: The size of every column block and
</span><br>
<span class="quotelev1">&gt; * the offset of every column block must be computed und stored in
</span><br>
<span class="quotelev1">&gt; * the arrays &quot;sr_counts&quot; and &quot;sr_disps&quot;.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * An MPI data type is defined by its size, its contents, and its
</span><br>
<span class="quotelev1">&gt; * extent. When multiple elements of the same size are used in a
</span><br>
<span class="quotelev1">&gt; * contiguous manner (e.g. in a &quot;scatter&quot; operation or an operation
</span><br>
<span class="quotelev1">&gt; * with &quot;count&quot; greater than one) the extent is used to compute where
</span><br>
<span class="quotelev1">&gt; * the next element will start. The extent for a derived data type is
</span><br>
<span class="quotelev1">&gt; * as big as the size of the derived data type so that the first
</span><br>
<span class="quotelev1">&gt; * elements of the second structure will start after the last element
</span><br>
<span class="quotelev1">&gt; * of the first structure, i.e., you have to &quot;resize&quot; the new data
</span><br>
<span class="quotelev1">&gt; * type if you want to send it multiple times (count &gt; 1) or to
</span><br>
<span class="quotelev1">&gt; * scatter/gather it to many processes. Restrict the extent of the
</span><br>
<span class="quotelev1">&gt; * derived data type for a strided vector in such a way that it looks
</span><br>
<span class="quotelev1">&gt; * like just one element if it is used with &quot;count &gt; 1&quot; or in a
</span><br>
<span class="quotelev1">&gt; * scatter/gather operation.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * This version constructs a new column type (strided vector) with
</span><br>
<span class="quotelev1">&gt; * &quot;MPI_Type_vector&quot; and uses collective communication. The new
</span><br>
<span class="quotelev1">&gt; * data type knows the number of elements within one column and the
</span><br>
<span class="quotelev1">&gt; * spacing between two column elements. The program uses at most
</span><br>
<span class="quotelev1">&gt; * n processes if the matrix has n columns, i.e. depending on the
</span><br>
<span class="quotelev1">&gt; * number of processes each process receives between 1 and n columns.
</span><br>
<span class="quotelev1">&gt; * You can execute this program with an arbitrary number of processes
</span><br>
<span class="quotelev1">&gt; * because it creates its own group with &quot;num_worker&quot; (&lt;= n) processes
</span><br>
<span class="quotelev1">&gt; * to perform the work if the matrix has n columns and the basic group
</span><br>
<span class="quotelev1">&gt; * contains too many processes.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Compiling:
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into local directory.
</span><br>
<span class="quotelev1">&gt; *     mpicc -o &lt;program name&gt; &lt;source code file name&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Store executable(s) into predefined directories.
</span><br>
<span class="quotelev1">&gt; *     make
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   Make program(s) automatically on all specified hosts. You must
</span><br>
<span class="quotelev1">&gt; *   edit the file &quot;make_compile&quot; and specify your host names before
</span><br>
<span class="quotelev1">&gt; *   you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_compile
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Running:
</span><br>
<span class="quotelev1">&gt; *   LAM-MPI:
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt; : \
</span><br>
<span class="quotelev1">&gt; *	 -host &lt;hostname&gt; -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -boot [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     lamboot [-v] [&lt;host file&gt;]
</span><br>
<span class="quotelev1">&gt; *       mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *	 or
</span><br>
<span class="quotelev1">&gt; *	 mpiexec [-v] -configfile &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *     lamhalt
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *   OpenMPI:
</span><br>
<span class="quotelev1">&gt; *     &quot;host1&quot;, &quot;host2&quot;, and so on can all have the same name,
</span><br>
<span class="quotelev1">&gt; *     if you want to start a virtual computer with some virtual
</span><br>
<span class="quotelev1">&gt; *     cpu's on the local host. The name &quot;localhost&quot; is allowed
</span><br>
<span class="quotelev1">&gt; *     as well.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *     mpiexec -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec --host &lt;host1,host2,...&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -hostfile &lt;hostfile name&gt; \
</span><br>
<span class="quotelev1">&gt; *	 -np &lt;number of processes&gt; &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     mpiexec -app &lt;application file&gt;
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Cleaning:
</span><br>
<span class="quotelev1">&gt; *   local computer:
</span><br>
<span class="quotelev1">&gt; *     rm &lt;program name&gt;
</span><br>
<span class="quotelev1">&gt; *     or
</span><br>
<span class="quotelev1">&gt; *     make clean_all
</span><br>
<span class="quotelev1">&gt; *   on all specified computers (you must edit the file &quot;make_clean_all&quot;
</span><br>
<span class="quotelev1">&gt; *   and specify your host names before you execute it.
</span><br>
<span class="quotelev1">&gt; *     make_clean_all
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * File: data_type_4.c			Author: S. Gross
</span><br>
<span class="quotelev1">&gt; * Date: 30.08.2012
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	P		6		/* # of rows			*/
</span><br>
<span class="quotelev1">&gt; #define Q		10		/* # of columns			*/
</span><br>
<span class="quotelev1">&gt; #define FACTOR		2		/* multiplicator for col. elem.	*/
</span><br>
<span class="quotelev1">&gt; #define DEF_NUM_WORKER	Q		/* # of workers, must be &lt;= Q	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* define macro to test the result of a &quot;malloc&quot; operation		*/
</span><br>
<span class="quotelev1">&gt; #define TestEqualsNULL(val)  \
</span><br>
<span class="quotelev1">&gt;  if (val == NULL) \
</span><br>
<span class="quotelev1">&gt;  { \
</span><br>
<span class="quotelev1">&gt;    fprintf (stderr, &quot;file: %s  line %d: Couldn't allocate memory.\n&quot;, \
</span><br>
<span class="quotelev1">&gt; 	     __FILE__, __LINE__); \
</span><br>
<span class="quotelev1">&gt;    exit (EXIT_FAILURE); \
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* define macro to determine the minimum of two values			*/
</span><br>
<span class="quotelev1">&gt; #define MIN(a,b)	((a) &lt; (b) ? (a) : (b))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void print_matrix (int p, int q, double **mat);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int    ntasks,			/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt;         mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;         namelen,			/* length of processor name	*/
</span><br>
<span class="quotelev1">&gt;         i, j,				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt; 	 *num_columns,			/* # of columns in column block	*/
</span><br>
<span class="quotelev1">&gt; 	 *sr_counts,			/* send/receive counts		*/
</span><br>
<span class="quotelev1">&gt; 	 *sr_disps,			/* send/receive displacements	*/
</span><br>
<span class="quotelev1">&gt; 	 tmp, tmp1;			/* temporary values		*/
</span><br>
<span class="quotelev1">&gt;  double matrix[P][Q],
</span><br>
<span class="quotelev1">&gt;    	 **col_block;			/* column block of matrix	*/
</span><br>
<span class="quotelev1">&gt;  char   processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;  MPI_Datatype	column_t,		/* column type (strided vector)	*/
</span><br>
<span class="quotelev1">&gt; 		col_block_t,
</span><br>
<span class="quotelev1">&gt; 		tmp_column_t;		/* needed to resize the extent	*/
</span><br>
<span class="quotelev1">&gt;  MPI_Group	group_comm_world,	/* processes in &quot;basic group&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		group_worker,		/* processes in new groups	*/
</span><br>
<span class="quotelev1">&gt; 		group_other;
</span><br>
<span class="quotelev1">&gt;  MPI_Comm	COMM_WORKER,		/* communicators for new groups	*/
</span><br>
<span class="quotelev1">&gt; 		COMM_OTHER;
</span><br>
<span class="quotelev1">&gt;  int		num_worker,		/* # of worker in &quot;group_worker&quot;*/
</span><br>
<span class="quotelev1">&gt; 		*group_w_mem,		/* array of worker members 	*/
</span><br>
<span class="quotelev1">&gt; 		group_w_ntasks,		/* # of tasks in &quot;group_worker&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		group_o_ntasks,		/* # of tasks in &quot;group_other&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		group_w_mytid,		/* my task id in &quot;group_worker&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		group_o_mytid,		/* my task id in &quot;group_other&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		*universe_size_ptr,	/* ptr to # of &quot;virtual cpu's&quot;	*/
</span><br>
<span class="quotelev1">&gt; 		universe_size_flag;	/* true if available		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  /* Determine the correct number of processes for this program. If
</span><br>
<span class="quotelev1">&gt;   * there are more than Q processes (i.e., more processes than
</span><br>
<span class="quotelev1">&gt;   * columns) available, we split the &quot;basic group&quot; into two groups.
</span><br>
<span class="quotelev1">&gt;   * This program uses a group &quot;group_worker&quot; to do the real work
</span><br>
<span class="quotelev1">&gt;   * and a group &quot;group_other&quot; for the remaining processes of the
</span><br>
<span class="quotelev1">&gt;   * &quot;basic group&quot;. The latter have nothing to do and can terminate
</span><br>
<span class="quotelev1">&gt;   * immediately. If there are less than or equal to Q processes
</span><br>
<span class="quotelev1">&gt;   * available all processes belong to group &quot;group_worker&quot; and group
</span><br>
<span class="quotelev1">&gt;   * &quot;group_other&quot; is empty. At first we find out which processes
</span><br>
<span class="quotelev1">&gt;   * belong to the &quot;basic group&quot;.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_group (MPI_COMM_WORLD, &amp;group_comm_world);
</span><br>
<span class="quotelev1">&gt;  if (ntasks &gt; Q)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    /* There are too many processes, so that we must build a new group
</span><br>
<span class="quotelev1">&gt;     * with &quot;num_worker&quot; processes. &quot;num_worker&quot; will be the minimum of
</span><br>
<span class="quotelev1">&gt;     * DEF_NUM_WORKER and the &quot;universe size&quot; if it is supported by the
</span><br>
<span class="quotelev1">&gt;     * MPI implementation. At first we must check if DEF_NUM_WORKER has
</span><br>
<span class="quotelev1">&gt;     * a suitable value.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    if (DEF_NUM_WORKER &gt; Q)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	fprintf (stderr, &quot;\nError:\tInternal program error.\n&quot;
</span><br>
<span class="quotelev1">&gt; 		 &quot;\tConstant DEF_NUM_WORKER has value %d but must be\n&quot;
</span><br>
<span class="quotelev1">&gt; 		 &quot;\tlower than or equal to %d. Please change source\n&quot;
</span><br>
<span class="quotelev1">&gt; 		 &quot;\tcode and compile the program again.\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 		 DEF_NUM_WORKER, Q);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      MPI_Group_free (&amp;group_comm_world);
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;      exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* determine the universe size, set &quot;num_worker&quot; in an
</span><br>
<span class="quotelev1">&gt;     * appropriate way, and allocate memory for the array containing
</span><br>
<span class="quotelev1">&gt;     * the ranks of the members of the new group
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_get_attr (MPI_COMM_WORLD, MPI_UNIVERSE_SIZE,
</span><br>
<span class="quotelev1">&gt; 		       &amp;universe_size_ptr, &amp;universe_size_flag);
</span><br>
<span class="quotelev1">&gt;    if ((universe_size_flag != 0) &amp;&amp; (*universe_size_ptr &gt; 0))
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      num_worker = MIN (DEF_NUM_WORKER, *universe_size_ptr);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    else
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      num_worker = DEF_NUM_WORKER;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    group_w_mem = (int *) malloc (num_worker * sizeof (int));
</span><br>
<span class="quotelev1">&gt;    TestEqualsNULL (group_w_mem);	/* test if memory was available	*/
</span><br>
<span class="quotelev1">&gt;    if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\nYou have started %d processes but I need at most &quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;%d processes.\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;The universe contains %d \&quot;virtual cpu's\&quot; (\&quot;0\&quot; means &quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;not supported).\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;I build a new worker group with %d processes. The &quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;processes with\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;the following ranks in the basic group belong to &quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;the new group:\n  &quot;,
</span><br>
<span class="quotelev1">&gt; 	      ntasks, Q, *universe_size_ptr, num_worker);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; num_worker; ++i)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      /* fetch some ranks from the basic group for the new worker
</span><br>
<span class="quotelev1">&gt;       * group, e.g. the last num_worker ranks to demonstrate that
</span><br>
<span class="quotelev1">&gt;       * a process may have different ranks in different groups
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      group_w_mem[i] = (ntasks - num_worker) + i;
</span><br>
<span class="quotelev1">&gt;      if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	printf (&quot;%d   &quot;, group_w_mem[i]);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* Create group &quot;group_worker&quot;					*/
</span><br>
<span class="quotelev1">&gt;    MPI_Group_incl (group_comm_world, num_worker, group_w_mem,
</span><br>
<span class="quotelev1">&gt; 		    &amp;group_worker);
</span><br>
<span class="quotelev1">&gt;    free (group_w_mem);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    /* there are at most as many processes as columns in our matrix,
</span><br>
<span class="quotelev1">&gt;     * i.e., we can use the &quot;basic group&quot;
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    group_worker = group_comm_world;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* Create group &quot;group_other&quot; which demonstrates only how to use
</span><br>
<span class="quotelev1">&gt;   * another group operation and which has  nothing to do in this
</span><br>
<span class="quotelev1">&gt;   * program.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Group_difference (group_comm_world, group_worker,
</span><br>
<span class="quotelev1">&gt; 			&amp;group_other);
</span><br>
<span class="quotelev1">&gt;  MPI_Group_free (&amp;group_comm_world);
</span><br>
<span class="quotelev1">&gt;  /* Create communicators for both groups. The communicator is only
</span><br>
<span class="quotelev1">&gt;   * defined for all processes of the group and it is undefined
</span><br>
<span class="quotelev1">&gt;   * (MPI_COMM_NULL) for all other processes.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_create (MPI_COMM_WORLD, group_worker, &amp;COMM_WORKER);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_create (MPI_COMM_WORLD, group_other, &amp;COMM_OTHER);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* =========================================================
</span><br>
<span class="quotelev1">&gt;   * ======						======
</span><br>
<span class="quotelev1">&gt;   * ======  Supply work for all different groups.	======
</span><br>
<span class="quotelev1">&gt;   * ======						======
</span><br>
<span class="quotelev1">&gt;   * ======						======
</span><br>
<span class="quotelev1">&gt;   * ====== At first you must find out if a process	======
</span><br>
<span class="quotelev1">&gt;   * ====== belongs to a special group. You can use	======
</span><br>
<span class="quotelev1">&gt;   * ====== MPI_Group_rank for this purpose. It returns	======
</span><br>
<span class="quotelev1">&gt;   * ====== the rank of the calling process in the	======
</span><br>
<span class="quotelev1">&gt;   * ====== specified group or MPI_UNDEFINED if the	======
</span><br>
<span class="quotelev1">&gt;   * ====== calling process is not a member of the	======
</span><br>
<span class="quotelev1">&gt;   * ====== group.					======
</span><br>
<span class="quotelev1">&gt;   * ======						======
</span><br>
<span class="quotelev1">&gt;   * =========================================================
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* =========================================================
</span><br>
<span class="quotelev1">&gt;   * ======  This is the group &quot;group_worker&quot;.		======
</span><br>
<span class="quotelev1">&gt;   * =========================================================
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Group_rank (group_worker, &amp;group_w_mytid);
</span><br>
<span class="quotelev1">&gt;  if (group_w_mytid != MPI_UNDEFINED)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (COMM_WORKER, &amp;group_w_ntasks);  /* # of processes	*/
</span><br>
<span class="quotelev1">&gt;    /* Now let's start with the real work				*/
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name (processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;    /* With the next statement every process executing this code will
</span><br>
<span class="quotelev1">&gt;     * print one line on the display. It may happen that the lines will
</span><br>
<span class="quotelev1">&gt;     * get mixed up because the display is a critical section. In general
</span><br>
<span class="quotelev1">&gt;     * only one process (mostly the process with rank 0) will print on
</span><br>
<span class="quotelev1">&gt;     * the display and all other processes will send their messages to
</span><br>
<span class="quotelev1">&gt;     * this process. Nevertheless for debugging purposes (or to
</span><br>
<span class="quotelev1">&gt;     * demonstrate that it is possible) it may be useful if every
</span><br>
<span class="quotelev1">&gt;     * process prints itself.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    fprintf (stdout, &quot;Process %d of %d running on %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	     group_w_mytid, group_w_ntasks, processor_name);
</span><br>
<span class="quotelev1">&gt;    fflush (stdout);
</span><br>
<span class="quotelev1">&gt;    MPI_Barrier (COMM_WORKER);		/* wait for all other processes	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Build the new type for a strided vector and resize the extent
</span><br>
<span class="quotelev1">&gt;     * of the new datatype in such a way that the extent of the whole
</span><br>
<span class="quotelev1">&gt;     * column looks like just one element so that the next column
</span><br>
<span class="quotelev1">&gt;     * starts in matrix[0][i] in MPI_Scatterv/MPI_Gatherv.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    MPI_Type_vector (P, 1, Q, MPI_DOUBLE, &amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_create_resized (tmp_column_t, 0, sizeof (double),
</span><br>
<span class="quotelev1">&gt; 			     &amp;column_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit (&amp;column_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_free (&amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;    if (group_w_mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      tmp = 1;
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; P; ++i)		/* initialize matrix		*/
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt; 	  matrix[i][j] = tmp++;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\noriginal matrix:\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;      print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* allocate memory for array containing the number of columns of a
</span><br>
<span class="quotelev1">&gt;     * column block for each process
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    num_columns = (int *) malloc (group_w_ntasks * sizeof (int));
</span><br>
<span class="quotelev1">&gt;    TestEqualsNULL (num_columns);	/* test if memory was available	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* do an unnecessary initialization to make the GNU compiler happy
</span><br>
<span class="quotelev1">&gt;     * so that you won't get a warning about the use of a possibly
</span><br>
<span class="quotelev1">&gt;     * uninitialized variable
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    sr_counts = NULL;
</span><br>
<span class="quotelev1">&gt;    sr_disps  = NULL;
</span><br>
<span class="quotelev1">&gt;    if (group_w_mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      /* allocate memory for arrays containing the size and
</span><br>
<span class="quotelev1">&gt;       * displacement of each column block
</span><br>
<span class="quotelev1">&gt;       */
</span><br>
<span class="quotelev1">&gt;      sr_counts = (int *) malloc (group_w_ntasks * sizeof (int));
</span><br>
<span class="quotelev1">&gt;      TestEqualsNULL (sr_counts);
</span><br>
<span class="quotelev1">&gt;      sr_disps = (int *) malloc (group_w_ntasks * sizeof (int));
</span><br>
<span class="quotelev1">&gt;      TestEqualsNULL (sr_disps);
</span><br>
<span class="quotelev1">&gt;      /* compute number of columns in column block for each process	*/
</span><br>
<span class="quotelev1">&gt;      tmp = Q / group_w_ntasks;
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; group_w_ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	num_columns[i] = tmp;		/* number of columns		*/
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; (Q % group_w_ntasks); ++i)	/* adjust size 	*/
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	num_columns[i]++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; group_w_ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	/* nothing to do because &quot;column_t&quot; contains already all
</span><br>
<span class="quotelev1">&gt; 	 * elements of a column, i.e., the &quot;size&quot; is equal to the
</span><br>
<span class="quotelev1">&gt; 	 * number of columns in the block
</span><br>
<span class="quotelev1">&gt; 	 */
</span><br>
<span class="quotelev1">&gt; 	sr_counts[i] = num_columns[i];	/* &quot;size&quot; of column-block	*/
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      sr_disps[0] = 0;			/* start of i-th column-block	*/
</span><br>
<span class="quotelev1">&gt;      for (i = 1; i &lt; group_w_ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	sr_disps[i] = sr_disps[i - 1] + sr_counts[i - 1];
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* inform all processes about their column block sizes		*/
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast (num_columns, group_w_ntasks, MPI_INT, 0, COMM_WORKER);
</span><br>
<span class="quotelev1">&gt;    /* allocate memory for a column block and define a new derived
</span><br>
<span class="quotelev1">&gt;     * data type for the column block. This data type is possibly
</span><br>
<span class="quotelev1">&gt;     * different for different processes if the number of processes
</span><br>
<span class="quotelev1">&gt;     * isn't a factor of the row size of the original matrix. Don't
</span><br>
<span class="quotelev1">&gt;     * forget to resize the extent of the new data type in such a
</span><br>
<span class="quotelev1">&gt;     * way that the extent of the whole column looks like just one
</span><br>
<span class="quotelev1">&gt;     * element so that the next column starts in col_block[0][i]
</span><br>
<span class="quotelev1">&gt;     * in MPI_Scatterv/MPI_Gatherv.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    col_block = (double **) malloc (P * num_columns[group_w_mytid] *
</span><br>
<span class="quotelev1">&gt; 				    sizeof (double));
</span><br>
<span class="quotelev1">&gt;    TestEqualsNULL (col_block);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_vector (P, 1, num_columns[group_w_mytid], MPI_DOUBLE,
</span><br>
<span class="quotelev1">&gt; 		     &amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_create_resized (tmp_column_t, 0, sizeof (double),
</span><br>
<span class="quotelev1">&gt; 			     &amp;col_block_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit (&amp;col_block_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_free (&amp;tmp_column_t);
</span><br>
<span class="quotelev1">&gt;    /* send column block i of &quot;matrix&quot; to process i			*/
</span><br>
<span class="quotelev1">&gt;    MPI_Scatterv (matrix, sr_counts, sr_disps, column_t,
</span><br>
<span class="quotelev1">&gt; 		  col_block, num_columns[group_w_mytid],
</span><br>
<span class="quotelev1">&gt; 		  col_block_t, 0, COMM_WORKER);
</span><br>
<span class="quotelev1">&gt;    /* Modify column elements. The compiler doesn't know the structure
</span><br>
<span class="quotelev1">&gt;     * of the column block matrix so that you have to do the index
</span><br>
<span class="quotelev1">&gt;     * calculations for mat[i][j] yourself. In C a matrix is stored
</span><br>
<span class="quotelev1">&gt;     * row-by-row so that the i-th row starts at location &quot;i * q&quot; if
</span><br>
<span class="quotelev1">&gt;     * the matrix has &quot;q&quot; columns. Therefore the address of mat[i][j]
</span><br>
<span class="quotelev1">&gt;     * can be expressed as &quot;(double *) mat + i * q + j&quot; and mat[i][j]
</span><br>
<span class="quotelev1">&gt;     * itself as &quot;*((double *) mat + i * q + j)&quot;.
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; num_columns[group_w_mytid]; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	if ((group_w_mytid % 2) == 0)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  /* col_block[i][j] *= col_block[i][j]				*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	  *((double *) col_block + i * num_columns[group_w_mytid] + j) *=
</span><br>
<span class="quotelev1">&gt; 	  *((double *) col_block + i * num_columns[group_w_mytid] + j);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	else
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  /* col_block[i][j] *= FACTOR					*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	  *((double *) col_block + i * num_columns[group_w_mytid] + j) *=
</span><br>
<span class="quotelev1">&gt; 	    FACTOR;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    /* receive column-block i of &quot;matrix&quot; from process i		*/
</span><br>
<span class="quotelev1">&gt;    MPI_Gatherv (col_block, num_columns[group_w_mytid], col_block_t,
</span><br>
<span class="quotelev1">&gt; 		 matrix, sr_counts, sr_disps, column_t,
</span><br>
<span class="quotelev1">&gt; 		 0, COMM_WORKER);
</span><br>
<span class="quotelev1">&gt;    if (group_w_mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\nresult matrix:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	      &quot;  elements are sqared in columns:\n  &quot;);
</span><br>
<span class="quotelev1">&gt;      tmp  = 0;
</span><br>
<span class="quotelev1">&gt;      tmp1 = 0;
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; group_w_ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	tmp1 = tmp1 + num_columns[i];
</span><br>
<span class="quotelev1">&gt; 	if ((i % 2) == 0)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  for (j = tmp; j &lt; tmp1; ++j)
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    printf (&quot;%4d&quot;, j);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	tmp = tmp1;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n  elements are multiplied with %d in columns:\n  &quot;,
</span><br>
<span class="quotelev1">&gt; 	      FACTOR);
</span><br>
<span class="quotelev1">&gt;      tmp  = 0;
</span><br>
<span class="quotelev1">&gt;      tmp1 = 0;
</span><br>
<span class="quotelev1">&gt;      for (i = 0; i &lt; group_w_ntasks; ++i)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	tmp1 = tmp1 + num_columns[i];
</span><br>
<span class="quotelev1">&gt; 	if ((i % 2) != 0)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 	  for (j = tmp; j &lt; tmp1; ++j)
</span><br>
<span class="quotelev1">&gt; 	  {
</span><br>
<span class="quotelev1">&gt; 	    printf (&quot;%4d&quot;, j);
</span><br>
<span class="quotelev1">&gt; 	  }
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	tmp = tmp1;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      printf (&quot;\n\n\n&quot;);
</span><br>
<span class="quotelev1">&gt;      print_matrix (P, Q, (double **) matrix);
</span><br>
<span class="quotelev1">&gt;      free (sr_counts);
</span><br>
<span class="quotelev1">&gt;      free (sr_disps);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    free (num_columns);
</span><br>
<span class="quotelev1">&gt;    free (col_block);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_free (&amp;column_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Type_free (&amp;col_block_t);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_free (&amp;COMM_WORKER);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* =========================================================
</span><br>
<span class="quotelev1">&gt;   * ======  This is the group &quot;group_other&quot;.		======
</span><br>
<span class="quotelev1">&gt;   * =========================================================
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Group_rank (group_other, &amp;group_o_mytid);
</span><br>
<span class="quotelev1">&gt;  if (group_o_mytid != MPI_UNDEFINED)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    /* Nothing to do (only to demonstrate how to divide work for
</span><br>
<span class="quotelev1">&gt;     * different groups).
</span><br>
<span class="quotelev1">&gt;     */
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (COMM_OTHER, &amp;group_o_ntasks);
</span><br>
<span class="quotelev1">&gt;    if (group_o_mytid == 0)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      if (group_o_ntasks == 1)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	printf (&quot;\nGroup \&quot;group_other\&quot; contains %d process &quot;
</span><br>
<span class="quotelev1">&gt; 		&quot;which has\n&quot;
</span><br>
<span class="quotelev1">&gt; 		&quot;nothing to do.\n\n&quot;, group_o_ntasks);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	printf (&quot;\nGroup \&quot;group_other\&quot; contains %d processes &quot;
</span><br>
<span class="quotelev1">&gt; 		&quot;which have\n&quot;
</span><br>
<span class="quotelev1">&gt; 		&quot;nothing to do.\n\n&quot;, group_o_ntasks);
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_free (&amp;COMM_OTHER);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* =========================================================
</span><br>
<span class="quotelev1">&gt;   * ======  all groups will reach this point		======
</span><br>
<span class="quotelev1">&gt;   * =========================================================
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;  MPI_Group_free (&amp;group_worker);
</span><br>
<span class="quotelev1">&gt;  MPI_Group_free (&amp;group_other);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Print the values of an arbitrary 2D-matrix of &quot;double&quot; values. The
</span><br>
<span class="quotelev1">&gt; * compiler doesn't know the structure of the matrix so that you have
</span><br>
<span class="quotelev1">&gt; * to do the index calculations for mat[i][j] yourself. In C a matrix
</span><br>
<span class="quotelev1">&gt; * is stored row-by-row so that the i-th row starts at location &quot;i * q&quot;
</span><br>
<span class="quotelev1">&gt; * if the matrix has &quot;q&quot; columns. Therefore the address of mat[i][j]
</span><br>
<span class="quotelev1">&gt; * can be expressed as &quot;(double *) mat + i * q + j&quot; and mat[i][j]
</span><br>
<span class="quotelev1">&gt; * itself as &quot;*((double *) mat + i * q + j)&quot;.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * input parameters:	p	number of rows
</span><br>
<span class="quotelev1">&gt; *			q	number of columns
</span><br>
<span class="quotelev1">&gt; *			mat	2D-matrix of &quot;double&quot; values
</span><br>
<span class="quotelev1">&gt; * output parameters:	none
</span><br>
<span class="quotelev1">&gt; * return value:	none
</span><br>
<span class="quotelev1">&gt; * side effects:	none
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; void print_matrix (int p, int q, double **mat)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i, j;				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; p; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    for (j = 0; j &lt; q; ++j)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%6g&quot;, *((double *) mat + i * q + j));
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Previous message:</strong> <a href="21158.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21156.php">Siegmar Gross: "[OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21160.php">Edgar Gabriel: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>Reply:</strong> <a href="21161.php">George Bosilca: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
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
