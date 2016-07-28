<?
$subject_val = "[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 09:47:16 2015" -->
<!-- isoreceived="20150730134716" -->
<!-- sent="Thu, 30 Jul 2015 09:45:24 -0400" -->
<!-- isosent="20150730134524" -->
<!-- name="Shahzeb" -->
<!-- email="sms5713_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4" -->
<!-- id="55BA2A74.80703_at_psu.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4<br>
<strong>From:</strong> Shahzeb (<em>sms5713_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 09:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am getting error in my make and make installl  with building OpenMPI 
<br>
with CUDA support using PGI compiler. Please help me fix this problem. 
<br>
No clue why it is happening. We are using PGI 15.4
<br>
<p>&nbsp;&nbsp;./configure --prefix=/usr/global/openmpi/pgi/1.8.7 CC=pgcc CXX=pgCC 
<br>
FC=pgfortran --with-cuda=/usr/global/cuda/7.0/include/
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
make[2]: Leaving directory 
<br>
`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/sm'
<br>
Making all in mca/common/verbs
<br>
make[2]: Entering directory 
<br>
`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/verbs'
<br>
if test -z &quot;libmca_common_verbs.la&quot;; then \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f &quot;libmca_common_verbs.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s &quot;libmca_common_verbs_noinst.la&quot; &quot;libmca_common_verbs.la&quot;; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
make[2]: Leaving directory 
<br>
`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/verbs'
<br>
Making all in mca/common/cuda
<br>
make[2]: Entering directory 
<br>
`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/cuda'
<br>
&nbsp;&nbsp;&nbsp;CC       common_cuda.lo
<br>
PGC-S-0039-Use of undeclared variable mca_common_cuda_cumemcpy_async 
<br>
(common_cuda.c: 320)
<br>
PGC-S-0039-Use of undeclared variable libcuda_handle (common_cuda.c: 396)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 396)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
397)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 441)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 441)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 442)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 442)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 443)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 443)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 444)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 444)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 445)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 445)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 446)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 446)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 447)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 447)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 448)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 448)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 449)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 449)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 450)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 450)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 451)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 451)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 452)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 452)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 453)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 453)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 454)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 454)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 455)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 455)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 463)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 463)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 464)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 464)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 465)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 465)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 469)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 469)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 470)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 470)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 471)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 471)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 472)
<br>
PGC-W-0155-Pointer value created from a nonlong integral type 
<br>
(common_cuda.c: 472)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_dtoh_num_used 
<br>
(common_cuda.c: 591)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_dtoh_first_avail 
<br>
(common_cuda.c: 592)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_dtoh_first_used 
<br>
(common_cuda.c: 593)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_max (common_cuda.c: 595)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_dtoh_array 
<br>
(common_cuda.c: 595)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 595)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
596)
<br>
PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c: 604)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 604)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_dtoh_frag_array 
<br>
(common_cuda.c: 615)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 615)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
616)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_htod_num_used 
<br>
(common_cuda.c: 624)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_htod_first_avail 
<br>
(common_cuda.c: 625)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_htod_first_used 
<br>
(common_cuda.c: 626)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_htod_array 
<br>
(common_cuda.c: 628)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 628)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
629)
<br>
PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c: 637)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 637)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_htod_frag_array 
<br>
(common_cuda.c: 648)
<br>
PGC-W-0095-Type cast required for this conversion (common_cuda.c: 648)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
649)
<br>
PGC-S-0039-Use of undeclared variable checkmem (common_cuda.c: 715)
<br>
PGC-S-0039-Use of undeclared variable ctx_ok (common_cuda.c: 773)
<br>
PGC-S-0039-Use of undeclared variable cuda_event_ipc_array 
<br>
(common_cuda.c: 779)
<br>
PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c: 
<br>
779)
<br>
PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c: 782)
<br>
PGC-F-0008-Error limit exceeded (common_cuda.c: 782)
<br>
PGC/x86-64 Linux 15.4-0: compilation aborted
<br>
make[2]: *** [common_cuda.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/cuda'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><pre>
-- 
Shahzeb Siddiqui
222A Computer Building
R&amp;D Software Systems Engineer
Advanced CyberInfrastructure
Office:+18148676074
Cell:+14844257705
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27362.php">Nathan Hjelm: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27360.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with	OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27390.php">Rolf vandeVaart: "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4"</a>
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
