<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 19:55:32 2016" -->
<!-- isoreceived="20160317235532" -->
<!-- sent="Thu, 17 Mar 2016 23:55:28 +0000" -->
<!-- isosent="20160317235528" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&amp;gt;=	4096 still required?" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF2A29F1EAB_at_cshsmsgmbx01.CSMC.EDU" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF2A29F1E9A_at_cshsmsgmbx01.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 19:55:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28748.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28748.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Reply:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran OpenMPI using the &quot;-mca btl ^vader&quot; switch Ralph recommended and I'm still getting the same errors
<br>
<p>qsub -q short.q -V -pe make 206 -b y mpirun -np 206 --prefix /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^vader --mca plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
<br>
<p>[csclprd3-5-2:10512] [[42154,0],0] plm:base:receive got update_proc_state for job [42154,1]
<br>
[csclprd3-6-12:30667] *** Process received signal ***
<br>
[csclprd3-6-12:30667] Signal: Bus error (7)
<br>
[csclprd3-6-12:30667] Signal code: Non-existant physical address (2)
<br>
[csclprd3-6-12:30667] Failing at address: 0x2b1b18a2d000
<br>
[csclprd3-6-12:30667] [ 0] /lib64/libpthread.so.0(+0xf500)[0x2b1b0e06c500]
<br>
[csclprd3-6-12:30667] [ 1] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_shmem_mmap.so(+0x1524)[0x2b1b0f5fd524]
<br>
[csclprd3-6-12:30667] [ 2] /hpc/apps/mpi/openmpi/1.10.1/lib/libmca_common_sm.so.4(mca_common_sm_module_create_and_attach+0x56)[0x2b1b124daab6]
<br>
[csclprd3-6-12:30667] [ 3] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_sm.so(+0x39cb)[0x2b1b12d749cb]
<br>
[csclprd3-6-12:30667] [ 4] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_sm.so(+0x3f2a)[0x2b1b12d74f2a]
<br>
[csclprd3-6-12:30667] [ 5] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_btl_base_select+0x117)[0x2b1b0ddfdb07]
<br>
[csclprd3-6-12:30667] [ 6] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x2b1b126de7b2]
<br>
[csclprd3-6-12:30667] [ 7] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_bml_base_init+0x99)[0x2b1b0ddfd309]
<br>
[csclprd3-6-12:30667] [ 8] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_pml_ob1.so(+0x538c)[0x2b1b133a138c]
<br>
[csclprd3-6-12:30667] [ 9] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_pml_base_select+0x1e0)[0x2b1b0de0e780]
<br>
[csclprd3-6-12:30667] [10] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(ompi_mpi_init+0x51d)[0x2b1b0ddc017d]
<br>
[csclprd3-6-12:30667] [11] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(MPI_Init+0x170)[0x2b1b0dddf820]
<br>
[csclprd3-6-12:30667] [12] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400ad0]
<br>
[csclprd3-6-12:30667] [13] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b1b0e298cdd]
<br>
[csclprd3-6-12:30667] [14] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400999]
<br>
[csclprd3-6-12:30667] *** End of error message ***
<br>
<p>-Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Lane, William [William.Lane_at_[hidden]]
<br>
Sent: Thursday, March 17, 2016 4:49 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?
<br>
<p>I apologize Ralph, I forgot to include my command line for invoking OpenMPI on SoGE:
<br>
<p>qsub -q short.q -V -pe make 87 -b y mpirun -np 87 --prefix /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^sm --mca plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
<br>
<p>a_1_10_1.out is my OpenMPI test code binary compiled under OpenMPI 1.10.1.
<br>
<p>Thanks for the quick response!
<br>
<p>-Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Thursday, March 17, 2016 4:44 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?
<br>
<p>No, that shouldn&#146;t be the issue any more - and that isn&#146;t what the backtrace indicates. It looks instead like there was a problem with the shared memory backing file on a remote node, and that caused the vader shared memory BTL to segfault.
<br>
<p>Try turning vader off and see if that helps - I&#146;m not sure what you are using, but maybe &#147;-mca btl ^vader&#148; will suffice
<br>
<p>Nathan - any other suggestions?
<br>
<p><p>On Mar 17, 2016, at 4:40 PM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
<p>I remember years ago, OpenMPI (version 1.3.3) required the hard/soft open
<br>
files limits be &gt;= 4096 in order to function when large numbers of slots
<br>
were requested (with 1.3.3 this was at roughly 85 slots). Is this requirement
<br>
still present for OpenMPI versions 1.10.1 and greater?
<br>
<p>I'm having some issues now with OpenMPI version 1.10.1 that remind me
<br>
of the issues I had w/1.3.3 where OpenMPI worked fine as long as I don't
<br>
request too many slots.
<br>
<p>When I look at the ulimits -a (soft limit) I see:
<br>
open files                      (-n) 1024
<br>
<p>Ulimits -Ha (hard limit) gives:
<br>
open files                      (-n) 4096
<br>
<p>I'm getting errors of the form:
<br>
[csclprd3-5-5:15248] [[40732,0],0] plm:base:receive got update_proc_state for job [40732,1]
<br>
[csclprd3-6-12:30567] *** Process received signal ***
<br>
[csclprd3-6-12:30567] Signal: Bus error (7)
<br>
[csclprd3-6-12:30567] Signal code: Non-existant physical address (2)
<br>
[csclprd3-6-12:30567] Failing at address: 0x2b3d19f72000
<br>
[csclprd3-6-12:30568] *** Process received signal ***
<br>
[csclprd3-6-12:30567] [ 0] /lib64/libpthread.so.0(+0xf500)[0x2b3d0f71f500]
<br>
[csclprd3-6-12:30567] [ 1] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_shmem_mmap.so(+0x1524)[0x2b3d10cb0524]
<br>
[csclprd3-6-12:30567] [ 2] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_vader.so(+0x3674)[0x2b3d18494674]
<br>
[csclprd3-6-12:30567] [ 3] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_btl_base_select+0x117)[0x2b3d0f4b0b07]
<br>
[csclprd3-6-12:30567] [ 4] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x2b3d13d917b2]
<br>
[csclprd3-6-12:30567] [ 5] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_bml_base_init+0x99)[0x2b3d0f4b0309]
<br>
[csclprd3-6-12:30567] [ 6] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_pml_ob1.so(+0x538c)[0x2b3d18ac238c]
<br>
[csclprd3-6-12:30567] [ 7] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_pml_base_select+0x1e0)[0x2b3d0f4c1780]
<br>
[csclprd3-6-12:30567] [ 8] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(ompi_mpi_init+0x51d)[0x2b3d0f47317d]
<br>
[csclprd3-6-12:30567] [ 9] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(MPI_Init+0x170)[0x2b3d0f492820]
<br>
[csclprd3-6-12:30567] [10] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400ad0]
<br>
[csclprd3-6-12:30567] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b3d0f94bcdd]
<br>
[csclprd3-6-12:30567] [12] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400999]
<br>
[csclprd3-6-12:30567] *** End of error message ***
<br>
<p>Ugh.
<br>
<p>Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28746.php">http://www.open-mpi.org/community/lists/users/2016/03/28746.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28750.php">Gilles Gouaillardet: "Re: [OMPI users] Dynamically throttle/scale processes"</a>
<li><strong>Previous message:</strong> <a href="28748.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28748.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Reply:</strong> <a href="28751.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
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
