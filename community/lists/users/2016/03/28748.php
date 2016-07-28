<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 19:49:31 2016" -->
<!-- isoreceived="20160317234931" -->
<!-- sent="Thu, 17 Mar 2016 23:49:29 +0000" -->
<!-- isosent="20160317234929" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &amp;gt;=	4096 still required?" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF2A29F1E9A_at_cshsmsgmbx01.CSMC.EDU" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="909A559D-0B58-4A5C-9917-8A693B1DC340_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;=	4096 still required?<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 19:49:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28747.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28747.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Reply:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I apologize Ralph, I forgot to include my command line for invoking OpenMPI on SoGE:
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
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Previous message:</strong> <a href="28747.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28747.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
<li><strong>Reply:</strong> <a href="28749.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits	&gt;=	4096 still required?"</a>
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
