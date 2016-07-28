<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 18 20:10:22 2016" -->
<!-- isoreceived="20160319001022" -->
<!-- sent="Fri, 18 Mar 2016 17:10:17 -0700" -->
<!-- isosent="20160319001017" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&amp;gt;=	4096 still required?" -->
<!-- id="B0AB8C15-6F30-43FC-B7D2-E2D727D55AF7_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF2A29F2456_at_cshsmsgmbx01.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-18 20:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28758.php">dpchoudh .: "[OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Previous message:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28773.php">Dave Love: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forget - have you tried this launch with the &quot;-mca plm_rsh_no_tree_spawn 1&#148;? It might let you progress on the launch, but I suspect you will then hit the shared memory error again.
<br>
<p>The problem is that your tmp file system is flooded and so we are hitting either qrsh being unable to launch on a backend node, or shared memory failing because it cannot create the backing file.
<br>
<p>The real question is: why is your tmp directory full? Perhaps you can point things at a different tmpdir where there is more room?
<br>
<p><p><span class="quotelev1">&gt; On Mar 18, 2016, at 4:05 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the following openMPI job submission:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qsub -q short.q -V -pe make 84 -b y mpirun -np 84 --prefix /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^sm --mca plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some more information on this issue. All the server daemons are started without error and before
</span><br>
<span class="quotelev1">&gt; I ever see the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [csclprd3-5-2:10512] [[42154,0],0] plm:base:receive got update_proc_state for job [42154,1]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-12:30667] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-12:30667] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qrsh throws the following error for various nodes taking part in the openmpi compute ring:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; unable to write to file /tmp/285507.1.short.q/qrsh_error: No space left on device[csclprd3-4-3:08052] [[24964,0],17] plm:rsh: using &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for launching
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does each and every node taking part in the openMPI compute ring need to write to a temporary directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, the submit node for this cluster has a soft open files limit of 1024 and a hard open files limit of 4096. All
</span><br>
<span class="quotelev1">&gt; compute nodes have a hard/soft open files limit of 4096.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 17, 2016 6:02 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, it looks like something is wrong with the mmap backend for some reason. It gets used by both vader and sm, so no help there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#146;m afraid I&#146;ll have to defer to Nathan from here as he is more familiar with it than I.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 17, 2016, at 4:55 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ran OpenMPI using the &quot;-mca btl ^vader&quot; switch Ralph recommended and I'm still getting the same errors
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; qsub -q short.q -V -pe make 206 -b y mpirun -np 206 --prefix /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^vader --mca plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-5-2:10512] [[42154,0],0] plm:base:receive got update_proc_state for job [42154,1]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] Signal: Bus error (7)
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] Failing at address: 0x2b1b18a2d000
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 0] /lib64/libpthread.so.0(+0xf500)[0x2b1b0e06c500]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 1] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_shmem_mmap.so(+0x1524)[0x2b1b0f5fd524]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 2] /hpc/apps/mpi/openmpi/1.10.1/lib/libmca_common_sm.so.4(mca_common_sm_module_create_and_attach+0x56)[0x2b1b124daab6]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 3] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_sm.so(+0x39cb)[0x2b1b12d749cb]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 4] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_sm.so(+0x3f2a)[0x2b1b12d74f2a]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 5] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_btl_base_select+0x117)[0x2b1b0ddfdb07]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 6] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x2b1b126de7b2]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 7] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_bml_base_init+0x99)[0x2b1b0ddfd309]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 8] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_pml_ob1.so(+0x538c)[0x2b1b133a138c]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [ 9] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_pml_base_select+0x1e0)[0x2b1b0de0e780]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [10] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(ompi_mpi_init+0x51d)[0x2b1b0ddc017d]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [11] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(MPI_Init+0x170)[0x2b1b0dddf820]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [12] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400ad0]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [13] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b1b0e298cdd]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] [14] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400999]
</span><br>
<span class="quotelev2">&gt;&gt; [csclprd3-6-12:30667] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill L.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Lane, William [William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 17, 2016 4:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I apologize Ralph, I forgot to include my command line for invoking OpenMPI on SoGE:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; qsub -q short.q -V -pe make 87 -b y mpirun -np 87 --prefix /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^sm --mca plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a_1_10_1.out is my OpenMPI test code binary compiled under OpenMPI 1.10.1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the quick response!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill L.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 17, 2016 4:44 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files limits &gt;= 4096 still required?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, that shouldn&#146;t be the issue any more - and that isn&#146;t what the backtrace indicates. It looks instead like there was a problem with the shared memory backing file on a remote node, and that caused the vader shared memory BTL to segfault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Try turning vader off and see if that helps - I&#146;m not sure what you are using, but maybe &#147;-mca btl ^vader&#148; will suffice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nathan - any other suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 17, 2016, at 4:40 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I remember years ago, OpenMPI (version 1.3.3) required the hard/soft open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files limits be &gt;= 4096 in order to function when large numbers of slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; were requested (with 1.3.3 this was at roughly 85 slots). Is this requirement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still present for OpenMPI versions 1.10.1 and greater?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having some issues now with OpenMPI version 1.10.1 that remind me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the issues I had w/1.3.3 where OpenMPI worked fine as long as I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request too many slots.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I look at the ulimits -a (soft limit) I see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ulimits -Ha (hard limit) gives:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting errors of the form:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-5-5:15248] [[40732,0],0] plm:base:receive got update_proc_state for job [40732,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] Signal: Bus error (7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] Failing at address: 0x2b3d19f72000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30568] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 0] /lib64/libpthread.so.0(+0xf500)[0x2b3d0f71f500]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 1] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_shmem_mmap.so(+0x1524)[0x2b3d10cb0524]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 2] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_btl_vader.so(+0x3674)[0x2b3d18494674]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 3] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_btl_base_select+0x117)[0x2b3d0f4b0b07]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 4] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x12)[0x2b3d13d917b2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 5] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_bml_base_init+0x99)[0x2b3d0f4b0309]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 6] /hpc/apps/mpi/openmpi/1.10.1/lib/openmpi/mca_pml_ob1.so(+0x538c)[0x2b3d18ac238c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 7] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(mca_pml_base_select+0x1e0)[0x2b3d0f4c1780]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 8] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(ompi_mpi_init+0x51d)[0x2b3d0f47317d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [ 9] /hpc/apps/mpi/openmpi/1.10.1/lib/libmpi.so.12(MPI_Init+0x170)[0x2b3d0f492820]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [10] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400ad0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [11] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b3d0f94bcdd]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] [12] /hpc/home/lanew/mpi/openmpi/a_1_10_1.out[0x400999]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [csclprd3-6-12:30567] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ugh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bill L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28746.php">http://www.open-mpi.org/community/lists/users/2016/03/28746.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28746.php">http://www.open-mpi.org/community/lists/users/2016/03/28746.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation._______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28749.php">http://www.open-mpi.org/community/lists/users/2016/03/28749.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28749.php">http://www.open-mpi.org/community/lists/users/2016/03/28749.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28756.php">http://www.open-mpi.org/community/lists/users/2016/03/28756.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/03/28756.php">http://www.open-mpi.org/community/lists/users/2016/03/28756.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28758.php">dpchoudh .: "[OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Previous message:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<li><strong>In reply to:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28773.php">Dave Love: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
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
