<?
$subject_val = "Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  4 15:47:37 2015" -->
<!-- isoreceived="20150804194737" -->
<!-- sent="Tue, 4 Aug 2015 19:47:34 +0000" -->
<!-- isosent="20150804194734" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4" -->
<!-- id="c62ca72fd24a437eb232f0ee2ead641e_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55BA2A74.80703_at_psu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi	compiler 15.4<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-04 15:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27361.php">Shahzeb: "[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shahzeb:
<br>
I believe another colleague of mine may have helped you with this issue (I was not around last week).  However, to help me better understand the issue you are seeing, could you send me your config.log file  from when you did the configuration?  You can just send to rvandevaart_at_nvidia.com.
<br>
Thanks, Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Shahzeb
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, July 30, 2015 9:45 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] openmpi 1.8.7 build error with cuda support using pgi
</span><br>
<span class="quotelev1">&gt;compiler 15.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am getting error in my make and make installl  with building OpenMPI with
</span><br>
<span class="quotelev1">&gt;CUDA support using PGI compiler. Please help me fix this problem.
</span><br>
<span class="quotelev1">&gt;No clue why it is happening. We are using PGI 15.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/global/openmpi/pgi/1.8.7 CC=pgcc CXX=pgCC
</span><br>
<span class="quotelev1">&gt;FC=pgfortran --with-cuda=/usr/global/cuda/7.0/include/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/sm'
</span><br>
<span class="quotelev1">&gt;Making all in mca/common/verbs
</span><br>
<span class="quotelev1">&gt;make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/verbs'
</span><br>
<span class="quotelev1">&gt;if test -z &quot;libmca_common_verbs.la&quot;; then \
</span><br>
<span class="quotelev1">&gt;       rm -f &quot;libmca_common_verbs.la&quot;; \
</span><br>
<span class="quotelev1">&gt;       ln -s &quot;libmca_common_verbs_noinst.la&quot; &quot;libmca_common_verbs.la&quot;; \
</span><br>
<span class="quotelev1">&gt;     fi
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/verbs'
</span><br>
<span class="quotelev1">&gt;Making all in mca/common/cuda
</span><br>
<span class="quotelev1">&gt;make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt;`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/cuda'
</span><br>
<span class="quotelev1">&gt;   CC       common_cuda.lo
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable
</span><br>
<span class="quotelev1">&gt;mca_common_cuda_cumemcpy_async
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 320)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable libcuda_handle (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;396)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 396)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;397)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 441)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 441)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 442)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 442)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 443)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 443)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 444)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 444)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 445)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 445)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 446)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 446)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 447)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 447)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 448)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 448)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 449)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 449)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 450)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 450)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 451)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 451)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 452)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 452)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 453)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 453)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 454)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 454)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 455)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 455)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 463)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 463)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 464)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 464)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 465)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 465)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 469)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 469)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 470)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 470)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 471)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 471)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 472)
</span><br>
<span class="quotelev1">&gt;PGC-W-0155-Pointer value created from a nonlong integral type
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 472)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_dtoh_num_used
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 591)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_dtoh_first_avail
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 592)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_dtoh_first_used
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 593)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_max (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;595)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_dtoh_array
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 595)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 595)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;596)
</span><br>
<span class="quotelev1">&gt;PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;604)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 604)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_dtoh_frag_array
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 615)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 615)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;616)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_htod_num_used
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 624)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_htod_first_avail
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 625)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_htod_first_used
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 626)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_htod_array
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 628)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 628)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;629)
</span><br>
<span class="quotelev1">&gt;PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;637)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 637)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_htod_frag_array
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 648)
</span><br>
<span class="quotelev1">&gt;PGC-W-0095-Type cast required for this conversion (common_cuda.c: 648)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;649)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable checkmem (common_cuda.c: 715)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable ctx_ok (common_cuda.c: 773)
</span><br>
<span class="quotelev1">&gt;PGC-S-0039-Use of undeclared variable cuda_event_ipc_array
</span><br>
<span class="quotelev1">&gt;(common_cuda.c: 779)
</span><br>
<span class="quotelev1">&gt;PGC-S-0103-Illegal operand types for comparison operator (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;779)
</span><br>
<span class="quotelev1">&gt;PGC-S-0054-Subscript operator ([]) applied to non-array (common_cuda.c:
</span><br>
<span class="quotelev1">&gt;782)
</span><br>
<span class="quotelev1">&gt;PGC-F-0008-Error limit exceeded (common_cuda.c: 782)
</span><br>
<span class="quotelev1">&gt;PGC/x86-64 Linux 15.4-0: compilation aborted
</span><br>
<span class="quotelev1">&gt;make[2]: *** [common_cuda.lo] Error 1
</span><br>
<span class="quotelev1">&gt;make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;`/gpfs/work/i/install/openmpi/openmpi-1.8.7/ompi/mca/common/cuda'
</span><br>
<span class="quotelev1">&gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;make[1]: Leaving directory `/gpfs/work/i/install/openmpi/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.7/ompi'
</span><br>
<span class="quotelev1">&gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Shahzeb Siddiqui
</span><br>
<span class="quotelev1">&gt;222A Computer Building
</span><br>
<span class="quotelev1">&gt;R&amp;D Software Systems Engineer
</span><br>
<span class="quotelev1">&gt;Advanced CyberInfrastructure
</span><br>
<span class="quotelev1">&gt;Office:+18148676074
</span><br>
<span class="quotelev1">&gt;Cell:+14844257705
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/07/27361.php
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27391.php">Nate Chambers: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27389.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27361.php">Shahzeb: "[OMPI users] openmpi 1.8.7 build error with cuda support using pgi compiler 15.4"</a>
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
