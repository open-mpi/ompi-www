<?
$subject_val = "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:17:19 2014" -->
<!-- isoreceived="20140304001719" -->
<!-- sent="Mon, 3 Mar 2014 16:17:17 -0800" -->
<!-- isosent="20140304001717" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.5rc1, error &amp;quot;COLL-ML ml_discover_hierarchy exited with error.&amp;quot;" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601A069FAC_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A5A4FB41-46A1-4D50-BE6F-237787618521_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 19:17:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try running with --mca coll ^ml and see if things work? 
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev1">&gt;Sent: Monday, March 03, 2014 7:14 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited
</span><br>
<span class="quotelev1">&gt;with error.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I hit an expected error running OSU osu_alltoall benchmark using Open MPI
</span><br>
<span class="quotelev1">&gt;1.7.5rc1. Here the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpirun -np 4 --map-by ppr:1:socket -bind-to core osu_alltoall In
</span><br>
<span class="quotelev1">&gt;bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory failed
</span><br>
<span class="quotelev1">&gt;In bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory
</span><br>
<span class="quotelev1">&gt;failed
</span><br>
<span class="quotelev1">&gt;[tesla50][[6927,1],1][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mc
</span><br>
<span class="quotelev1">&gt;a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[tesla50:42200] In base_bcol_masesmuma_setup_library_buffers and mpool
</span><br>
<span class="quotelev1">&gt;was not successfully setup!
</span><br>
<span class="quotelev1">&gt;[tesla50][[6927,1],0][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mc
</span><br>
<span class="quotelev1">&gt;a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[tesla50:42201] In base_bcol_masesmuma_setup_library_buffers and mpool
</span><br>
<span class="quotelev1">&gt;was not successfully setup!
</span><br>
<span class="quotelev1">&gt;# OSU MPI All-to-All Personalized Exchange Latency Test v4.2
</span><br>
<span class="quotelev1">&gt;# Size       Avg Latency(us)
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpirun noticed that process rank 3 with PID 4508 on node tesla51 exited on
</span><br>
<span class="quotelev1">&gt;signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any idea where this come from?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I compiled Open MPI using Intel 12.1, latest Mellanox stack and CUDA 6.0RC.
</span><br>
<span class="quotelev1">&gt;Attached outputs grabbed from configure, make and run. The configure was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev1">&gt;export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev1">&gt;export FCA_DIR=/opt/mellanox/fca export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;../configure CC=icc CXX=icpc F77=ifort FC=ifort FFLAGS=&quot;-xSSE4.2 -axAVX -ip -
</span><br>
<span class="quotelev1">&gt;O3 -fno-fnalias&quot; FCFLAGS=&quot;-xSSE4.2 -axAVX -ip -O3 -fno-fnalias&quot; --prefix=&lt;...&gt;
</span><br>
<span class="quotelev1">&gt;--enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev1">&gt;mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-
</span><br>
<span class="quotelev1">&gt;cuda=$CUDA_INSTALL_PATH --enable-mpi-thread-multiple --with-
</span><br>
<span class="quotelev1">&gt;hwloc=internal --with-verbs 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks in advance,
</span><br>
<span class="quotelev1">&gt;Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev1">&gt;<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&lt;Nobody will drive us out of Cantor's paradise.&gt; ~ David Hilbert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;*****
</span><br>
<span class="quotelev1">&gt;Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev1">&gt;CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev1">&gt;The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev1">&gt;Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev1">&gt;advise the sender immediately of any error in transmission.&quot;
</span><br>
<p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23756.php">Filippo Spiga: "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
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
