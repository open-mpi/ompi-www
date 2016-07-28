<?
$subject_val = "[OMPI users] CygWin compilation of  OpenMPI-1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 05:59:54 2015" -->
<!-- isoreceived="20150608095954" -->
<!-- sent="Sun, 7 Jun 2015 15:52:08 +0000" -->
<!-- isosent="20150607155208" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] CygWin compilation of  OpenMPI-1.8.5" -->
<!-- id="0EC91541DFCC614DB6B36C4BAE80AB6E0FDF0277_at_MAILBOX3.umb.sk" -->
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
<strong>Subject:</strong> [OMPI users] CygWin compilation of  OpenMPI-1.8.5<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-07 11:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Reply:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>CygWin is interesting intermediating environment between Windows and Linux-like architectures, and the OpenMPI project is good platform for enabling parallel calculations.
<br>
<p>Here is my OpenMPI building experience with some problems encountered (with up-to-date CygWin &amp; OpenMPI):
<br>
<p>1) the &quot;default&quot; OpenMPI configuration (no special flags) gives these linking errors:
<br>
<p>make[2]: Leaving directory '/home/milias/bin/openmpi_1.8.5_gnu/openmpi-1.8.5/opal'
<br>
Making all in mca/compress/gzip
<br>
make[2]: Entering directory '/home/milias/bin/openmpi_1.8.5_gnu/openmpi-1.8.5/opal/mca/compress/gzip'
<br>
&nbsp;&nbsp;CCLD     mca_compress_gzip.la
<br>
.libs/compress_gzip_component.o:compress_gzip_component.c:(.text+0x5b): undefined reference to `opal_output_ver     bose'
<br>
.libs/compress_gzip_component.o:compress_gzip_component.c:(.text+0x5b): relocation truncated to fit: R_X86_64_P     C32 against undefined symbol `opal_output_verbose'
<br>
.libs/compress_gzip_component.o:compress_gzip_component.c:(.text+0x79): undefined reference to `opal_output_ver     bose'
<br>
.libs/compress_gzip_component.o:compress_gzip_component.c:(.text+0x79): relocation truncated to fit: R_X86_64_P     C32 against undefined symbol `opal_output_verbose'
<br>
.
<br>
.
<br>
.
<br>
<p>2) The OpenMPI configuration with the flags specified by  
<br>
<a href="https://www.open-mpi.org/community/lists/users/2014/04/24166.php">https://www.open-mpi.org/community/lists/users/2014/04/24166.php</a> 
<br>
produces working mpif90,mpicc,mpicxx... executables. 
<br>
<p>However, the &quot;make check&quot; testing  gives the second test wrong (see below).
<br>
<p>Any help how to fix this test issue ?
<br>
<p>Miro
<br>
.
<br>
.
<br>
.
<br>
=============================================
<br>
ompi_predefined_op_t = 2048 bytes
<br>
ompi_op_t = 1344 bytes
<br>
super = 0, 16
<br>
o_name = 16, 64
<br>
o_flags = 84, 4 ***
<br>
o_f_to_c_index = 88, 4
<br>
o_func = 96, 624 ***
<br>
o_3buff_instrinsic = 720, 624
<br>
=============================================
<br>
ompi_predefined_datatype_t = 512 bytes
<br>
ompi_datatype_t = 464 bytes
<br>
=============================================
<br>
ompi_predefined_win_t = 512 bytes
<br>
ompi_win_t = 168 bytes
<br>
w_base = 0, 16
<br>
w_lock = 16, 32
<br>
w_name = 48, 64
<br>
w_group = 112, 8
<br>
w_flags = 120, 2
<br>
w_keyhash = 128, 8 ***
<br>
w_f_to_c_index = 136, 4
<br>
error_handler = 144, 8 ***
<br>
errhandler_type = 152, 4
<br>
w_osc_module = 160, 8 ***
<br>
=============================================
<br>
ompi_predefined_info_t = 256 bytes
<br>
ompi_info_t = 88 bytes
<br>
super = 0, 64
<br>
i_f_to_c_index = 64, 4
<br>
i_lock = 72, 8 ***
<br>
i_freed = 80, 1
<br>
=============================================
<br>
ompi_predefined_file_t = 1536 bytes
<br>
ompi_file_t = 768 bytes
<br>
super = 0, 16
<br>
f_comm = 16, 8
<br>
f_filename = 24, 8
<br>
f_amode = 32, 4
<br>
f_info = 40, 8 ***
<br>
f_flags = 48, 4
<br>
f_f_to_c_index = 52, 4
<br>
error_handler = 56, 8
<br>
errhandler_type = 64, 4
<br>
f_io_version = 68, 4
<br>
f_io_selected_component = 72, 296
<br>
f_io_selected_module = 368, 392
<br>
f_io_selected_data = 760, 8
<br>
PASS: predefined_gap_test.exe
<br>
Running in CWD: /home/milias/bin/openmpi_1.8.5_gnu/openmpi-1.8.5/o    mpi/debuggers
<br>
Trying to open file with private namespace: ./libompi_dbg_msgq
<br>
Failed to open with private namespace: File not found
<br>
Retrying with global namespace
<br>
File failed to open with global namespace: File not found
<br>
Failed to open with private namespace: File not found
<br>
Retrying with global namespace
<br>
File failed to open with global namespace: File not found
<br>
FAIL: dlopen_test.exe
<br>
========================================================
<br>
1 of 2 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
Makefile:1865: recipe for target 'check-TESTS' failed
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[3]: Leaving directory '/home/milias/bin/openmpi_1.8.5_gnu/ope    nmpi-1.8.5/ompi/debuggers'
<br>
Makefile:1988: recipe for target 'check-am' failed
<br>
make[2]: *** [check-am] Error 2
<br>
make[2]: Leaving directory '/home/milias/bin/openmpi_1.8.5_gnu/ope    nmpi-1.8.5/ompi/debuggers'
<br>
Makefile:3138: recipe for target 'check-recursive' failed
<br>
make[1]: *** [check-recursive] Error 1
<br>
make[1]: Leaving directory '/home/milias/bin/openmpi_1.8.5_gnu/ope    nmpi-1.8.5/ompi'
<br>
Makefile:1698: recipe for target 'check-recursive' failed
<br>
make: *** [check-recursive] Error 1
<br>
UMB+milias_at_chemia:~/bin/openmpi_1.8.5_gnu/openmpi-1.8.5/.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Previous message:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
<li><strong>Reply:</strong> <a href="27048.php">Marco Atzeri: "Re: [OMPI users] CygWin compilation of  OpenMPI-1.8.5"</a>
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
