<?
$subject_val = "[OMPI users] Checkpoint problem with BLCR + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 03:52:12 2010" -->
<!-- isoreceived="20100827075212" -->
<!-- sent="Fri, 27 Aug 2010 15:52:01 +0800" -->
<!-- isosent="20100827075201" -->
<!-- name="&#179;&#194;&#206;&#196;&#186;&#198;" -->
<!-- email="whchen_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpoint problem with BLCR + OpenMPI" -->
<!-- id="000001cb45bc$bbc8d360$335a7a20$_at_shu.edu.cn" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] Checkpoint problem with BLCR + OpenMPI<br>
<strong>From:</strong> &#179;&#194;&#206;&#196;&#186;&#198; (<em>whchen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 03:52:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14127.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OMPI Users,
<br>
<p>&nbsp;
<br>
<p>I have installed BLCR(0.8.2) and OpenMPI(1.4.2) successfully. But now I met
<br>
a problem when I take a checkpoint.
<br>
<p>I run CG NPB(NPROCS=16, two nodes: blade02 &amp; blade04, CLASS=C, NFS: $HOME &amp;
<br>
/opt are shared)
<br>
<p>&nbsp;
<br>
<p>BLCR configure: ./configure &#168;Cprefix=/opt/blcr &#168;Cenable-static
<br>
<p>OpenMPi configure: ./configure &#168;Cprefix=/opt/ompi &#168;Cwith-ft=cr &#168;C
<br>
with-blcr=/opt/blcr &#168;Cenable-static (I didn&#161;&#175;t add &#161;&#174;enable-ft-thread&#161;&#175;
<br>
param for I think it might affect the performance. Is it right?? And
<br>
mpi-threads are enabled by default, so I didn't add &#161;&#174;enable-mpi-threads&#161;&#175;
<br>
param) And Can anyone tell me these two params will make the checkpoint time
<br>
shorter or longer?
<br>
<p>Our blades use NFS. $HOME and /opt are shared. The checkpoint file is
<br>
created in the $HOME directory by default. Will it cause the long checkpoint
<br>
time???
<br>
<p>&nbsp;
<br>
<p>In $HOME/.openmpi/mca-params.conf:
<br>
<p>crs_base_snapshot_dir=/tmp/
<br>
<p>snapc_base_global_snapshot_dir=$HOME/ompi-cr-file
<br>
<p>snapc_base_store_in_place=0
<br>
<p>&nbsp;
<br>
<p>Then in mpirun terminal:
<br>
<p>mpirun -machinefile mf -am ft-enable-cr -n 8 ./cg.C.8
<br>
<p>&nbsp;
<br>
<p>In checkpoint terminal:
<br>
<p>ompi-checkpoint --status 11133
<br>
<p>[blade02:11171]                 Requested - Global Snapshot Reference:
<br>
(null)
<br>
<p>[blade02:11171]                   Pending - Global Snapshot Reference:
<br>
(null)
<br>
<p>[blade02:11171]                   Running - Global Snapshot Reference:
<br>
(null)
<br>
<p>[blade02:11171]             File Transfer - Global Snapshot Reference:
<br>
(null)
<br>
<p>&nbsp;
<br>
<p>In mpirun terminal:
<br>
<p>--------------------------------------------------------------------------
<br>
<p>WARNING: Could not preload specified file: File already exists.
<br>
<p>&nbsp;
<br>
<p>Fileset: $HOME/ompi-cr-file/ompi_global_snapshot_11133.ckpt/0
<br>
<p>Host: blade02
<br>
<p>&nbsp;
<br>
<p>Will continue attempting to launch the process.
<br>
<p>&nbsp;
<br>
<p>--------------------------------------------------------------------------
<br>
<p>[blade02:11133] 3 more processes have sent help message help-orte-filem-rsh.
<br>
txt / orte-filem-rsh:get-file-exists
<br>
<p>[blade02:11133] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
<p>&nbsp;
<br>
<p>How to disable the &#161;&#174;preload&#161;&#175; and how to solve this problems. Thanks.
<br>
<p>&nbsp;
<br>
<p>Btw, when there is no mca-param.conf, and the checkpoint file is placed in
<br>
$HOME directory by default, I can checkpoint successfully. BUT, it takes a
<br>
very very long time to checkpoint. With no checkpoint, CG runs about 100s,
<br>
but with checkpoint, it runs 300s. 200% overhead ratio. WHY?
<br>
<p>&nbsp;
<br>
<p>Regards
<br>
<p>&nbsp;
<br>
<p>Whchen
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="14127.php">Rahul Nabar: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core counts: debug ideas?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="14129.php">Joshua Hursey: "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
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
