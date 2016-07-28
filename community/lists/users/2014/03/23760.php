<?
$subject_val = "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:41:53 2014" -->
<!-- isoreceived="20140304004153" -->
<!-- sent="Mon, 3 Mar 2014 16:41:51 -0800" -->
<!-- isosent="20140304004151" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.5rc1, error &amp;quot;COLL-ML ml_discover_hierarchy exited with error.&amp;quot;" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601A069FC9_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C62B8680-AFAA-4296-9551-AA07F11CF68E_at_gmail.com" -->
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
<strong>Date:</strong> 2014-03-03 19:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23761.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is something going wrong with the ml collective component.  So, if you disable it, things work.
<br>
I just reconfigured without any CUDA-aware support, and I see the same failure so it has nothing to do with CUDA.
<br>
<p>Looks like Jeff Squyres just made a bug for it.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/4331">https://svn.open-mpi.org/trac/ompi/ticket/4331</a>
<br>
<p><p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo Spiga
</span><br>
<span class="quotelev1">&gt;Sent: Monday, March 03, 2014 7:32 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy
</span><br>
<span class="quotelev1">&gt;exited with error.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;your suggestion works!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ mpirun -np 4 --map-by ppr:1:socket -bind-to core  --mca coll ^ml osu_alltoall
</span><br>
<span class="quotelev1">&gt;# OSU MPI All-to-All Personalized Exchange Latency Test v4.2
</span><br>
<span class="quotelev1">&gt;# Size       Avg Latency(us)
</span><br>
<span class="quotelev1">&gt;1                       8.02
</span><br>
<span class="quotelev1">&gt;2                       2.96
</span><br>
<span class="quotelev1">&gt;4                       2.91
</span><br>
<span class="quotelev1">&gt;8                       2.91
</span><br>
<span class="quotelev1">&gt;16                      2.96
</span><br>
<span class="quotelev1">&gt;32                      3.07
</span><br>
<span class="quotelev1">&gt;64                      3.25
</span><br>
<span class="quotelev1">&gt;128                     3.74
</span><br>
<span class="quotelev1">&gt;256                     3.85
</span><br>
<span class="quotelev1">&gt;512                     4.11
</span><br>
<span class="quotelev1">&gt;1024                    4.79
</span><br>
<span class="quotelev1">&gt;2048                    5.91
</span><br>
<span class="quotelev1">&gt;4096                   15.84
</span><br>
<span class="quotelev1">&gt;8192                   24.88
</span><br>
<span class="quotelev1">&gt;16384                  35.35
</span><br>
<span class="quotelev1">&gt;32768                  56.20
</span><br>
<span class="quotelev1">&gt;65536                  66.88
</span><br>
<span class="quotelev1">&gt;131072                114.89
</span><br>
<span class="quotelev1">&gt;262144                209.36
</span><br>
<span class="quotelev1">&gt;524288                396.12
</span><br>
<span class="quotelev1">&gt;1048576               765.65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you clarify exactly where the problem come from?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Regards,
</span><br>
<span class="quotelev1">&gt;Filippo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 4, 2014, at 12:17 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you try running with --mca coll ^ml and see if things work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Filippo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spiga
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, March 03, 2014 7:14 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exited with error.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI developers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hit an expected error running OSU osu_alltoall benchmark using Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1.7.5rc1. Here the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -np 4 --map-by ppr:1:socket -bind-to core osu_alltoall In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory
</span><br>
<span class="quotelev1">&gt;failed In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tesla50][[6927,1],1][../../../../../ompi/mca/coll/ml/coll_ml_module.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c:2996:mc a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tesla50:42200] In base_bcol_masesmuma_setup_library_buffers and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool was not successfully setup!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tesla50][[6927,1],0][../../../../../ompi/mca/coll/ml/coll_ml_module.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c:2996:mc a_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [tesla50:42201] In base_bcol_masesmuma_setup_library_buffers and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpool was not successfully setup!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OSU MPI All-to-All Personalized Exchange Latency Test v4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Size       Avg Latency(us)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- mpirun noticed that process rank 3 with PID 4508 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tesla51 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea where this come from?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled Open MPI using Intel 12.1, latest Mellanox stack and CUDA
</span><br>
<span class="quotelev1">&gt;6.0RC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached outputs grabbed from configure, make and run. The configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export MXM_DIR=/opt/mellanox/mxm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -print0) export FCA_DIR=/opt/mellanox/fca export
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HCOLL_DIR=/opt/mellanox/hcoll
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../configure CC=icc CXX=icpc F77=ifort FC=ifort FFLAGS=&quot;-xSSE4.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -axAVX -ip -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; O3 -fno-fnalias&quot; FCFLAGS=&quot;-xSSE4.2 -axAVX -ip -O3 -fno-fnalias&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=&lt;...&gt; --enable-mpirun-prefix-by-default --with-fca=$FCA_DIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with- mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda=$CUDA_INSTALL_PATH --enable-mpi-thread-multiple --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc=internal --with-verbs 2&gt;&amp;1 | tee config.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filippo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mr. Filippo SPIGA, M.Sc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Nobody will drive us out of Cantor's paradise.&gt; ~ David Hilbert
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disclaimer: &quot;Please note this message and any attachments are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CONFIDENTIAL and may be privileged or otherwise protected from
</span><br>
<span class="quotelev1">&gt;disclosure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The contents are not to be disclosed to anyone other than the addressee.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unauthorized recipients are requested to preserve this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidentiality and to advise the sender immediately of any error in
</span><br>
<span class="quotelev1">&gt;transmission.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23761.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>In reply to:</strong> <a href="23759.php">Filippo Spiga: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
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
