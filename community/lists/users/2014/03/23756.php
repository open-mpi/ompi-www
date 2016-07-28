<?
$subject_val = "[OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 19:14:07 2014" -->
<!-- isoreceived="20140304001407" -->
<!-- sent="Tue, 4 Mar 2014 00:14:05 +0000" -->
<!-- isosent="20140304001405" -->
<!-- name="Filippo Spiga" -->
<!-- email="spiga.filippo_at_[hidden]" -->
<!-- subject="[OMPI users] 1.7.5rc1, error &amp;quot;COLL-ML ml_discover_hierarchy exited with error.&amp;quot;" -->
<!-- id="A5A4FB41-46A1-4D50-BE6F-237787618521_at_gmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;<br>
<strong>From:</strong> Filippo Spiga (<em>spiga.filippo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 19:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23755.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>I hit an expected error running OSU osu_alltoall benchmark using Open MPI 1.7.5rc1. Here the error:
<br>
<p>$ mpirun -np 4 --map-by ppr:1:socket -bind-to core osu_alltoall 
<br>
In bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory failed 
<br>
In bcol_comm_query hmca_bcol_basesmuma_allocate_sm_ctl_memory failed 
<br>
[tesla50][[6927,1],1][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mca_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
<br>
<p>[tesla50:42200] In base_bcol_masesmuma_setup_library_buffers and mpool was not successfully setup!
<br>
[tesla50][[6927,1],0][../../../../../ompi/mca/coll/ml/coll_ml_module.c:2996:mca_coll_ml_comm_query] COLL-ML ml_discover_hierarchy exited with error.
<br>
<p>[tesla50:42201] In base_bcol_masesmuma_setup_library_buffers and mpool was not successfully setup!
<br>
# OSU MPI All-to-All Personalized Exchange Latency Test v4.2
<br>
# Size       Avg Latency(us)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 4508 on node tesla51 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>Any idea where this come from?
<br>
<p>I compiled Open MPI using Intel 12.1, latest Mellanox stack and CUDA 6.0RC.  Attached outputs grabbed from configure, make and run. The configure was
<br>
<p>export MXM_DIR=/opt/mellanox/mxm
<br>
export KNEM_DIR=$(find /opt -maxdepth 1 -type d -name &quot;knem*&quot; -print0)
<br>
export FCA_DIR=/opt/mellanox/fca
<br>
export HCOLL_DIR=/opt/mellanox/hcoll
<br>
<p>../configure CC=icc CXX=icpc F77=ifort FC=ifort FFLAGS=&quot;-xSSE4.2 -axAVX -ip -O3 -fno-fnalias&quot; FCFLAGS=&quot;-xSSE4.2 -axAVX -ip -O3 -fno-fnalias&quot; --prefix=&lt;...&gt;  --enable-mpirun-prefix-by-default --with-fca=$FCA_DIR --with-mxm=$MXM_DIR --with-knem=$KNEM_DIR  --with-cuda=$CUDA_INSTALL_PATH --enable-mpi-thread-multiple --with-hwloc=internal --with-verbs 2&gt;&amp;1 | tee config.out
<br>
<p><p>Thanks in advance,
<br>
Regards
<br>
<p>Filippo
<br>
<p><pre>
--
Mr. Filippo SPIGA, M.Sc.
<a href="http://www.linkedin.com/in/filippospiga">http://www.linkedin.com/in/filippospiga</a> ~ skype: filippo.spiga
&#171;Nobody will drive us out of Cantor's paradise.&#187; ~ David Hilbert
*****
Disclaimer: &quot;Please note this message and any attachments are CONFIDENTIAL and may be privileged or otherwise protected from disclosure. The contents are not to be disclosed to anyone other than the addressee. Unauthorized recipients are requested to preserve this confidentiality and to advise the sender immediately of any error in transmission.&quot;

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23756/openmpi-1.7.5rc1_wrong.tar.gz">openmpi-1.7.5rc1_wrong.tar.gz</a>
</ul>
<!-- attachment="openmpi-1.7.5rc1_wrong.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Previous message:</strong> <a href="23755.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
<li><strong>Reply:</strong> <a href="23757.php">Rolf vandeVaart: "Re: [OMPI users] 1.7.5rc1, error &quot;COLL-ML ml_discover_hierarchy exited with error.&quot;"</a>
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
