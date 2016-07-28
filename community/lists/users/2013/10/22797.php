<?
$subject_val = "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 09:56:41 2013" -->
<!-- isoreceived="20131017135641" -->
<!-- sent="Thu, 17 Oct 2013 13:56:32 +0000" -->
<!-- isosent="20131017135632" -->
<!-- name="Burns, Andrew J CTR (US)" -->
<!-- email="andrew.j.burns35.ctr_at_[hidden]" -->
<!-- subject="[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)" -->
<!-- id="DEE37B508E36B64285856EEA9FC0C3370BC9A8A1_at_ucolhp8z.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)<br>
<strong>From:</strong> Burns, Andrew J CTR (US) (<em>andrew.j.burns35.ctr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 09:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p>Possibly related to:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
<br>
and
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/09/11509.php">http://www.open-mpi.org/community/lists/devel/2012/09/11509.php</a>
<br>
<p>I am attempting to link communicators from a series of programs together and am running into inconsistent behavior when using
<br>
OpenMPI.
<br>
<p>Attached is a minimalistic example of code that will generate this issue, the same code executes without issue when using MPICH2.
<br>
<p>The attached code is compiled with the commands:
<br>
<p>mpicxx mpiAccept.cpp -o acceptTest
<br>
mpicxx mpiConnect.cpp -o connectTest
<br>
mpicxx mpiConnect2.cpp -o connect2Test
<br>
<p>I used gcc 4.4.1 and openmpi 1.6.3
<br>
<p><p>Job file contains the following relevant options:
<br>
<p>#!/bin/tcsh
<br>
#PBS -l walltime=00:05:00
<br>
#PBS -l select=3:ncpus=8
<br>
<p><p>and executes the program using the following commands:
<br>
<p><p>mpirun --tag-output -n 8 ./acceptTest &gt; logConnect1.log &amp;
<br>
<p>sleep 5
<br>
<p>mpirun --tag-output -n 8 ./connectTest &gt; logConnect2.log &amp;
<br>
<p>sleep 5
<br>
<p>mpirun --tag-output -n 8 ./connect2Test &gt; logConnect3.log
<br>
<p><p>Note that the number of cores is 8, this is a case that executes properly.
<br>
<p>However, changing the execution commands to the following:
<br>
<p><p>mpirun --tag-output -n 7 ./acceptTest &gt; logConnect1.log &amp;
<br>
<p>sleep 5
<br>
<p>mpirun --tag-output -n 7 ./connectTest &gt; logConnect2.log &amp;
<br>
<p>sleep 5
<br>
<p>mpirun --tag-output -n 7 ./connect2Test &gt; logConnect3.log
<br>
<p><p>causes errors of the form:
<br>
<p>[hostname:31326] [[14363,0],0]:route_callback tried routing message from
<br>
[[14363,1],0] to [[14337,1],2]:102, can't find route
<br>
[0] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2ad8c884b9ef]
<br>
[1] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_rml_oob.so(+0x26ba) [0x2ad8ca6f26ba]
<br>
[2] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x278) 
<br>
[0x2ad8cad1b358]
<br>
[3] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_oob_tcp.so(+0x980a) [0x2ad8cad1c80a]
<br>
[4] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/libopen-rte.so.4(opal_event_base_loop+0x238) [0x2ad8c8835888]
<br>
[5] func:mpirun(orterun+0xe80) [0x404bae]
<br>
[6] func:mpirun(main+0x20) [0x403ae4]
<br>
[7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2ad8c9797bc6]
<br>
[8] func:mpirun() [0x403a09]
<br>
<p>The point of failure seems to be in a MPI_Bcast call. Most of the cores make it through the call and show the broadcast value as 
<br>
appropriate. However, there are several cores on the second and third processes (connectTest and connect2Test) that hang at the last
<br>
<p>broadcast and at least one throws the above error.
<br>
<p><p>I have tried several combinations of core amounts and have gotten the following results:
<br>
<p>Of the form (# acceptTest cores, # connectTest cores, # connect2Test cores)
<br>
<p>Successes:
<br>
<p>1 1 1 across 1:3
<br>
2 2 2 across 1:6
<br>
4 4 4 across 2:8
<br>
8 8 8 across 3:8
<br>
16 16 16 across 6:8
<br>
16 4 4 across 3:8
<br>
16 4 16 across 5:8
<br>
8 4 4 across 2:8
<br>
8 7 7 across 3:8
<br>
8 7 6 across 3:8
<br>
4 3 2 across 2:8
<br>
<p>Failures:
<br>
3 3 3 across 2:8
<br>
5 5 5 across 2:8
<br>
6 6 6 across 3:8
<br>
7 7 7 across 3:8
<br>
9 9 9 across 4:8
<br>
10 10 10 across 4:8
<br>
11 11 11 across 5:8
<br>
12 12 12 across 5:8
<br>
13 13 13 across 5:8
<br>
14 14 14 across 6:8
<br>
15 15 15 across 6:8
<br>
4 4 16 across 3:8
<br>
4 4 8 across 2:8
<br>
<p><p>Other notes:
<br>
In the case of 6 6 6 across 3:8 it is consistently cores 0 and 1 of process 2 and cores 2 and 3 of process 3 that get blocked.
<br>
<p>It seems that the first process must have a number of cores that is a power of 2 and must also have a number of cores greater than
<br>
the 
<br>
other two processes individually.
<br>
<p><p>Other versions of OpenMPI:
<br>
<p>OpenMPI 1.7.2:
<br>
Fails in all cases during MPI_Comm_accept/MPI_Comm_connect with the following error:
<br>
<p>[hostname:16109] [[27626,0],0]:route_callback tried routing message from [[27626,1],0] to [[27557,1],0]:30, can't find route
<br>
[0] func:[higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_backtrace_print+0x1f) [0x2abd542a876f]
<br>
[1] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_rml_oob.so(+0x25f3) [0x2abd5676f5f3]
<br>
[2] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x2c0)
<br>
[0x2abd5697d040]
<br>
[3] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(+0xb0a7) [0x2abd5697f0a7]
<br>
[4] func:[higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_libevent2019_event_base_loop+0x323) [0x2abd542ade63]
<br>
[5] func:mpirun(orterun+0xe3b) [0x404c3f]
<br>
[6] func:mpirun(main+0x20) [0x403bb4]
<br>
[7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2abd55406bc6]
<br>
[8] func:mpirun() [0x403ad9]
<br>
[hostname:15968] *** Process received signal ***
<br>
[hostname:15968] Signal: Segmentation fault (11)
<br>
[hostname:15968] Signal code: Address not mapped (1)
<br>
[hostname:15968] Failing at address: 0x6ef34010
<br>
[hostname:15968] [ 0] /lib64/libpthread.so.0(+0xf6b0) [0x2b75859cf6b0]
<br>
[hostname:15968] [ 1] /lib64/libc.so.6(+0x77d0f) [0x2b7585c54d0f]
<br>
[hostname:15968] [ 2] /lib64/libc.so.6(__libc_malloc+0x77) [0x2b7585c572d7]
<br>
[hostname:15968] [ 3] [higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_handler+0x15f) 
<br>
[0x2b75871716af]
<br>
[hostname:15968] [ 4] [higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(+0xb078) [0x2b7587174078]
<br>
[hostname:15968] [ 5] [higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_libevent2019_event_base_loop+0x323) 
<br>
[0x2b7584aa2e63]
<br>
[hostname:15968] [ 6] mpirun(orterun+0xe3b) [0x404c3f]
<br>
[hostname:15968] [ 7] mpirun(main+0x20) [0x403bb4]
<br>
[hostname:15968] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x2b7585bfbbc6]
<br>
[hostname:15968] [ 9] mpirun() [0x403ad9]
<br>
[hostname:15968] *** End of error message ***
<br>
<p><p>OpenMPI 1.7.3rc
<br>
Fails in all cases during MPI_Comm_accept/MPI_Comm_connect with the following error:
<br>
<p>[hostname:19222] [[19635,0],0]:route_callback tried routing message from [[19635,1],0] to [[19793,1],0]:30, can't find route
<br>
[0] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/libopen-pal.so.6(opal_backtrace_print+0x1f) [0x2b43eb07088f]
<br>
[1] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_rml_oob.so(+0x2733) [0x2b43ed55f733]
<br>
[2] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x2c0) 
<br>
[0x2b43ed76d440]
<br>
[3] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_oob_tcp.so(+0xb4a7) [0x2b43ed76f4a7]
<br>
[4] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x88c)
<br>
[0x2b43eb07844c]
<br>
[5] func:mpirun(orterun+0xe25) [0x404c29]
<br>
[6] func:mpirun(main+0x20) [0x403bb4]
<br>
[7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2b43ec1d3bc6]
<br>
[8] func:mpirun() [0x403ad9]
<br>
<p><p>Andrew Burns
<br>
Lockheed Martin
<br>
Software Engineer
<br>
410-306-0409
<br>
andrew.j.burns2_at_[hidden]
<br>
andrew.j.burns35.ctr_at_[hidden]
<br>
<p>Classification: UNCLASSIFIED
<br>
Caveats: NONE
<br>
<p><p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22797/test_files.zip">test_files.zip</a>
</ul>
<!-- attachment="test_files.zip" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22797/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Previous message:</strong> <a href="22796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>Reply:</strong> <a href="22798.php">Ralph Castain: "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
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
