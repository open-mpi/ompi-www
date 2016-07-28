<?
$subject_val = "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:31:40 2014" -->
<!-- isoreceived="20140304003140" -->
<!-- sent="Tue, 4 Mar 2014 00:31:41 +0000" -->
<!-- isosent="20140304003141" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.5rc1, error &amp;quot;COLL-ML ml_discover_hierarchy exited with error.&amp;quot;" -->
<!-- id="C62B8680-AFAA-4296-9551-AA07F11CF68E_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F3601A069FAC_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 19:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rolf,
<br>
<p>your suggestion works!
<br>
<p>$ mpirun -np 4 --map-by ppr:1:socket -bind-to core  --mca coll ^ml osu_alltoall
<br>
# OSU MPI All-to-All Personalized Exchange Latency Test v4.2
<br>
# Size       Avg Latency(us)
<br>
1                       8.02
<br>
2                       2.96
<br>
4                       2.91
<br>
8                       2.91
<br>
16                      2.96
<br>
32                      3.07
<br>
64                      3.25
<br>
128                     3.74
<br>
256                     3.85
<br>
512                     4.11
<br>
1024                    4.79
<br>
2048                    5.91
<br>
4096                   15.84
<br>
8192                   24.88
<br>
16384                  35.35
<br>
32768                  56.20
<br>
65536                  66.88
<br>
131072                114.89
<br>
262144                209.36
<br>
524288                396.12
<br>
1048576               765.65
<br>
<p><p>Can you clarify exactly where the problem come from?
<br>
<p>Regards,
<br>
Filippo
<br>
<p><p>On Mar 4, 2014, at 12:17 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Can you try running with --mca coll ^ml and see if things work? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, March 03, 2014 7:14 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited
</span><br>
<span class="quotelev2">&gt;&gt; with error.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hit an expected error running OSU osu_alltoall benchmark using Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.5rc1. Here the error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 4 --map-by ppr:1:socket -bind-to core osu_alltoall In
</span><br>
<span class="quotelev2">&gt;&gt; bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory failed
</span><br>
<span class="quotelev2">&gt;&gt; In bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory
</span><br>
<span class="quotelev2">&gt;&gt; failed
</span><br>
<span class="quotelev2">&gt;&gt; [tesla50][[6927,1],1][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mc
</span><br>
<span class="quotelev2">&gt;&gt; a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [tesla50:42200] In base_bcol_masesmuma_setup_library_buffers and mpool
</span><br>
<span class="quotelev2">&gt;&gt; was not successfully setup!
</span><br>
<span class="quotelev2">&gt;&gt; [tesla50][[6927,1],0][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mc
</span><br>
<span class="quotelev2">&gt;&gt; a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [tesla50:42201] In base_bcol_masesmuma_setup_library_buffers and mpool
</span><br>
<span class="quotelev2">&gt;&gt; was not successfully setup!
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI All-to-All Personalized Exchange Latency Test v4.2
</span><br>
<span class="quotelev2">&gt;&gt; # Size       Avg Latency(us)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 3 with PID 4508 on node tesla51 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea where this come from?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compiled Open MPI using Intel 12.1, latest Mellanox stack and CUDA 6.0RC.
</span><br>
<span class="quotelev2">&gt;&gt; Attached outputs grabbed from configure, make and run. The configure was
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev2">&gt;&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
</span><br>
<span class="quotelev2">&gt;&gt; export FCA_DIR=/opt/mellanox/fca export HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../configure CC=icc CXX=icpc F77=ifort FC=ifort FFLAGS=&quot;-xSSE4.2 -axAVX -ip -
</span><br>
<span class="quotelev2">&gt;&gt; O3 -fno-fnalias&quot; FCFLAGS=&quot;-xSSE4.2 -axAVX -ip -O3 -fno-fnalias&quot; --prefix=&lt;...&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-
</span><br>
<span class="quotelev2">&gt;&gt; mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-
</span><br>
<span class="quotelev2">&gt;&gt; cuda=$CUDA_INSTALL_PATH --enable-mpi-thread-multiple --with-
</span><br>
<span class="quotelev2">&gt;&gt; hwloc=internal --with-verbs 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Filippo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Nobody will drive us out of Cantor's paradise.&gt; ~ David Hilbert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *****
</span><br>
<span class="quotelev2">&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev2">&gt;&gt; CONFIDENTIAL and may be privileged or otherwise protected from disclosure.
</span><br>
<span class="quotelev2">&gt;&gt; The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev2">&gt;&gt; Unauthorized recipients are requested to preserve this confidentiality and to
</span><br>
<span class="quotelev2">&gt;&gt; advise the sender immediately of any error in transmission.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23758.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23760.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
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
