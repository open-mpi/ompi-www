<?
$subject_val = "Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 11:09:09 2013" -->
<!-- isoreceived="20131017150909" -->
<!-- sent="Thu, 17 Oct 2013 08:02:34 -0700" -->
<!-- isosent="20131017150234" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)" -->
<!-- id="9829C834-A56B-48C5-87E7-572767D7BECB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DEE37B508E36B64285856EEA9FC0C3370BC9A8A1_at_ucolhp8z.easf.csd.disa.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 11:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22799.php">Jeferson Fs: "[OMPI users] Send a struct with Vector or dynamics arrays"</a>
<li><strong>Previous message:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect the problem is in Intercomm_merge, as the comment in your file suggests. There were some bug fixes in that code, but they haven't migrated to the 1.7 branch yet (scheduled for 1.7.4).
<br>
<p><p>On Oct 17, 2013, at 6:56 AM, &quot;Burns, Andrew J CTR (US)&quot; &lt;andrew.j.burns35.ctr_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Possibly related to:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2904">https://svn.open-mpi.org/trac/ompi/ticket/2904</a>
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2012/09/11509.php">http://www.open-mpi.org/community/lists/devel/2012/09/11509.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attempting to link communicators from a series of programs together and am running into inconsistent behavior when using
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is a minimalistic example of code that will generate this issue, the same code executes without issue when using MPICH2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached code is compiled with the commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpicxx mpiAccept.cpp -o acceptTest
</span><br>
<span class="quotelev1">&gt; mpicxx mpiConnect.cpp -o connectTest
</span><br>
<span class="quotelev1">&gt; mpicxx mpiConnect2.cpp -o connect2Test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I used gcc 4.4.1 and openmpi 1.6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Job file contains the following relevant options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/tcsh
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=00:05:00
</span><br>
<span class="quotelev1">&gt; #PBS -l select=3:ncpus=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and executes the program using the following commands:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 8 ./acceptTest &gt; logConnect1.log &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sleep 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 8 ./connectTest &gt; logConnect2.log &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sleep 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 8 ./connect2Test &gt; logConnect3.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the number of cores is 8, this is a case that executes properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, changing the execution commands to the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 7 ./acceptTest &gt; logConnect1.log &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sleep 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 7 ./connectTest &gt; logConnect2.log &amp;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sleep 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --tag-output -n 7 ./connect2Test &gt; logConnect3.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; causes errors of the form:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hostname:31326] [[14363,0],0]:route_callback tried routing message from
</span><br>
<span class="quotelev1">&gt; [[14363,1],0] to [[14337,1],2]:102, can't find route
</span><br>
<span class="quotelev1">&gt; [0] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2ad8c884b9ef]
</span><br>
<span class="quotelev1">&gt; [1] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_rml_oob.so(+0x26ba) [0x2ad8ca6f26ba]
</span><br>
<span class="quotelev1">&gt; [2] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x278) 
</span><br>
<span class="quotelev1">&gt; [0x2ad8cad1b358]
</span><br>
<span class="quotelev1">&gt; [3] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/openmpi/mca_oob_tcp.so(+0x980a) [0x2ad8cad1c80a]
</span><br>
<span class="quotelev1">&gt; [4] func:[higher levels stripped]/opmpi/gcc/4.4.1/openmpi-1.6.3/lib/libopen-rte.so.4(opal_event_base_loop+0x238) [0x2ad8c8835888]
</span><br>
<span class="quotelev1">&gt; [5] func:mpirun(orterun+0xe80) [0x404bae]
</span><br>
<span class="quotelev1">&gt; [6] func:mpirun(main+0x20) [0x403ae4]
</span><br>
<span class="quotelev1">&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2ad8c9797bc6]
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun() [0x403a09]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The point of failure seems to be in a MPI_Bcast call. Most of the cores make it through the call and show the broadcast value as 
</span><br>
<span class="quotelev1">&gt; appropriate. However, there are several cores on the second and third processes (connectTest and connect2Test) that hang at the last
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; broadcast and at least one throws the above error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried several combinations of core amounts and have gotten the following results:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of the form (# acceptTest cores, # connectTest cores, # connect2Test cores)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Successes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 1 1 across 1:3
</span><br>
<span class="quotelev1">&gt; 2 2 2 across 1:6
</span><br>
<span class="quotelev1">&gt; 4 4 4 across 2:8
</span><br>
<span class="quotelev1">&gt; 8 8 8 across 3:8
</span><br>
<span class="quotelev1">&gt; 16 16 16 across 6:8
</span><br>
<span class="quotelev1">&gt; 16 4 4 across 3:8
</span><br>
<span class="quotelev1">&gt; 16 4 16 across 5:8
</span><br>
<span class="quotelev1">&gt; 8 4 4 across 2:8
</span><br>
<span class="quotelev1">&gt; 8 7 7 across 3:8
</span><br>
<span class="quotelev1">&gt; 8 7 6 across 3:8
</span><br>
<span class="quotelev1">&gt; 4 3 2 across 2:8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Failures:
</span><br>
<span class="quotelev1">&gt; 3 3 3 across 2:8
</span><br>
<span class="quotelev1">&gt; 5 5 5 across 2:8
</span><br>
<span class="quotelev1">&gt; 6 6 6 across 3:8
</span><br>
<span class="quotelev1">&gt; 7 7 7 across 3:8
</span><br>
<span class="quotelev1">&gt; 9 9 9 across 4:8
</span><br>
<span class="quotelev1">&gt; 10 10 10 across 4:8
</span><br>
<span class="quotelev1">&gt; 11 11 11 across 5:8
</span><br>
<span class="quotelev1">&gt; 12 12 12 across 5:8
</span><br>
<span class="quotelev1">&gt; 13 13 13 across 5:8
</span><br>
<span class="quotelev1">&gt; 14 14 14 across 6:8
</span><br>
<span class="quotelev1">&gt; 15 15 15 across 6:8
</span><br>
<span class="quotelev1">&gt; 4 4 16 across 3:8
</span><br>
<span class="quotelev1">&gt; 4 4 8 across 2:8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other notes:
</span><br>
<span class="quotelev1">&gt; In the case of 6 6 6 across 3:8 it is consistently cores 0 and 1 of process 2 and cores 2 and 3 of process 3 that get blocked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that the first process must have a number of cores that is a power of 2 and must also have a number of cores greater than
</span><br>
<span class="quotelev1">&gt; the 
</span><br>
<span class="quotelev1">&gt; other two processes individually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other versions of OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.7.2:
</span><br>
<span class="quotelev1">&gt; Fails in all cases during MPI_Comm_accept/MPI_Comm_connect with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hostname:16109] [[27626,0],0]:route_callback tried routing message from [[27626,1],0] to [[27557,1],0]:30, can't find route
</span><br>
<span class="quotelev1">&gt; [0] func:[higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_backtrace_print+0x1f) [0x2abd542a876f]
</span><br>
<span class="quotelev1">&gt; [1] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_rml_oob.so(+0x25f3) [0x2abd5676f5f3]
</span><br>
<span class="quotelev1">&gt; [2] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x2c0)
</span><br>
<span class="quotelev1">&gt; [0x2abd5697d040]
</span><br>
<span class="quotelev1">&gt; [3] func:[higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(+0xb0a7) [0x2abd5697f0a7]
</span><br>
<span class="quotelev1">&gt; [4] func:[higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_libevent2019_event_base_loop+0x323) [0x2abd542ade63]
</span><br>
<span class="quotelev1">&gt; [5] func:mpirun(orterun+0xe3b) [0x404c3f]
</span><br>
<span class="quotelev1">&gt; [6] func:mpirun(main+0x20) [0x403bb4]
</span><br>
<span class="quotelev1">&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2abd55406bc6]
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun() [0x403ad9]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [hostname:15968] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [hostname:15968] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [hostname:15968] Failing at address: 0x6ef34010
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 0] /lib64/libpthread.so.0(+0xf6b0) [0x2b75859cf6b0]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 1] /lib64/libc.so.6(+0x77d0f) [0x2b7585c54d0f]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 2] /lib64/libc.so.6(__libc_malloc+0x77) [0x2b7585c572d7]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 3] [higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_handler+0x15f) 
</span><br>
<span class="quotelev1">&gt; [0x2b75871716af]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 4] [higher levels stripped]/openmpi-1.7.2built/lib/openmpi/mca_oob_tcp.so(+0xb078) [0x2b7587174078]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 5] [higher levels stripped]/openmpi-1.7.2built/lib/libopen-pal.so.5(opal_libevent2019_event_base_loop+0x323) 
</span><br>
<span class="quotelev1">&gt; [0x2b7584aa2e63]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 6] mpirun(orterun+0xe3b) [0x404c3f]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 7] mpirun(main+0x20) [0x403bb4]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 8] /lib64/libc.so.6(__libc_start_main+0xe6) [0x2b7585bfbbc6]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] [ 9] mpirun() [0x403ad9]
</span><br>
<span class="quotelev1">&gt; [hostname:15968] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.7.3rc
</span><br>
<span class="quotelev1">&gt; Fails in all cases during MPI_Comm_accept/MPI_Comm_connect with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hostname:19222] [[19635,0],0]:route_callback tried routing message from [[19635,1],0] to [[19793,1],0]:30, can't find route
</span><br>
<span class="quotelev1">&gt; [0] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/libopen-pal.so.6(opal_backtrace_print+0x1f) [0x2b43eb07088f]
</span><br>
<span class="quotelev1">&gt; [1] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_rml_oob.so(+0x2733) [0x2b43ed55f733]
</span><br>
<span class="quotelev1">&gt; [2] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_msg_recv_complete+0x2c0) 
</span><br>
<span class="quotelev1">&gt; [0x2b43ed76d440]
</span><br>
<span class="quotelev1">&gt; [3] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/openmpi/mca_oob_tcp.so(+0xb4a7) [0x2b43ed76f4a7]
</span><br>
<span class="quotelev1">&gt; [4] func:[higher levels stripped]/openmpi-1.7.3rc3built/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x88c)
</span><br>
<span class="quotelev1">&gt; [0x2b43eb07844c]
</span><br>
<span class="quotelev1">&gt; [5] func:mpirun(orterun+0xe25) [0x404c29]
</span><br>
<span class="quotelev1">&gt; [6] func:mpirun(main+0x20) [0x403bb4]
</span><br>
<span class="quotelev1">&gt; [7] func:/lib64/libc.so.6(__libc_start_main+0xe6) [0x2b43ec1d3bc6]
</span><br>
<span class="quotelev1">&gt; [8] func:mpirun() [0x403ad9]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew Burns
</span><br>
<span class="quotelev1">&gt; Lockheed Martin
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; 410-306-0409
</span><br>
<span class="quotelev1">&gt; andrew.j.burns2_at_[hidden]
</span><br>
<span class="quotelev1">&gt; andrew.j.burns35.ctr_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Classification: UNCLASSIFIED
</span><br>
<span class="quotelev1">&gt; Caveats: NONE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test files.zip&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="22799.php">Jeferson Fs: "[OMPI users] Send a struct with Vector or dynamics arrays"</a>
<li><strong>Previous message:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
<li><strong>In reply to:</strong> <a href="22797.php">Burns, Andrew J CTR (US): "[OMPI users] FW: OMPI v1.6.3 Inconsistent behaviour involving MPI_Comm_connect (can't find route) (UNCLASSIFIED)"</a>
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
