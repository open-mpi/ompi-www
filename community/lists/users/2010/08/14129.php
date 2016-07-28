<?
$subject_val = "Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 08:21:43 2010" -->
<!-- isoreceived="20100827122143" -->
<!-- sent="Fri, 27 Aug 2010 08:21:32 -0400" -->
<!-- isosent="20100827122132" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI" -->
<!-- id="F32F55CE-C063-417C-80FC-7188685DAFC9_at_open-mpi.org" -->
<!-- charset="GB2312" -->
<!-- inreplyto="000001cb45bc$bbc8d360$335a7a20$_at_shu.edu.cn" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint problem with BLCR + OpenMPI<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 08:21:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Previous message:</strong> <a href="14128.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14128.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2010, at 3:52 AM, &#179;&#194;&#206;&#196;&#186;&#198; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OMPI Users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have installed BLCR(0.8.2) and OpenMPI(1.4.2) successfully. But now I met a problem when I take a checkpoint.
</span><br>
<span class="quotelev1">&gt; I run CG NPB(NPROCS=16, two nodes: blade02 &amp; blade04, CLASS=C, NFS: $HOME &amp; /opt are shared)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; BLCR configure: ./configure &#168;Cprefix=/opt/blcr &#168;Cenable-static
</span><br>
<span class="quotelev1">&gt; OpenMPi configure: ./configure &#168;Cprefix=/opt/ompi &#168;Cwith-ft=cr &#168;Cwith-blcr=/opt/blcr &#168;Cenable-static (I didn&#161;&#175;t add &#161;&#174;enable-ft-thread&#161;&#175; param for I think it might affect the performance. Is it right?? And mpi-threads are enabled by default, so I didn't add &#161;&#174;enable-mpi-threads&#161;&#175; param) And Can anyone tell me these two params will make the checkpoint time shorter or longer?
</span><br>
<span class="quotelev1">&gt; Our blades use NFS. $HOME and /opt are shared. The checkpoint file is created in the $HOME directory by default. Will it cause the long checkpoint time???
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In $HOME/.openmpi/mca-params.conf:
</span><br>
<span class="quotelev1">&gt; crs_base_snapshot_dir=/tmp/
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir=$HOME/ompi-cr-file
</span><br>
<span class="quotelev1">&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then in mpirun terminal:
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile mf -am ft-enable-cr -n 8 ./cg.C.8
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In checkpoint terminal:
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint --status 11133
</span><br>
<span class="quotelev1">&gt; [blade02:11171]                 Requested - Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [blade02:11171]                   Pending - Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [blade02:11171]                   Running - Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [blade02:11171]             File Transfer - Global Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In mpirun terminal:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Could not preload specified file: File already exists.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Fileset: $HOME/ompi-cr-file/ompi_global_snapshot_11133.ckpt/0
</span><br>
<span class="quotelev1">&gt; Host: blade02
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [blade02:11133] 3 more processes have sent help message help-orte-filem-rsh.txt / orte-filem-rsh:get-file-exists
</span><br>
<span class="quotelev1">&gt; [blade02:11133] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; How to disable the &#161;&#174;preload&#161;&#175; and how to solve this problems. Thanks.
</span><br>
<p>The staging option is known to be broken in the v1.4 series, per the ticket below:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>If you need/want the staging feature I would suggest trying the current Open MPI trunk, or the v1.5 release series. In v1.4 you can disable the preload by removing the 'snapc_base_store_in_place' option from your mca-params.conf file.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Btw, when there is no mca-param.conf, and the checkpoint file is placed in $HOME directory by default, I can checkpoint successfully. BUT, it takes a very very long time to checkpoint. With no checkpoint, CG runs about 100s, but with checkpoint, it runs 300s. 200% overhead ratio. WHY?
</span><br>
<p>So by default the files are stored in $HOME (overridden with the snapc_base_global_snapshot_dir parameter). Depending on how your $HOME directory is mounted and your NFS is setup will determine how fast or slow this operation will take. Checkpointing directly to a shared file system can stress that file system considerably since all processes are writing at approximately the same time. Staging and other such techniques help reduce this pressure by controlling the stress on the file system. Additionally, checkpointing directly to the shared file system causes the application to remain suspended until its file is completely written, which may take a considerable amount of time depending on the speed of the file system. Staging considerably reduces the impact of checkpointing on application runtime.
<br>
<p>I suggest trying the staging option with either the v1.5 (pre-)release or the trunk.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Whchen
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14130.php">Brock Palen: "[OMPI users] random IB failures when running medium core counts"</a>
<li><strong>Previous message:</strong> <a href="14128.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="14128.php">&#179;&#194;&#206;&#196;&#186;&#198;: "[OMPI users] Checkpoint problem with BLCR + OpenMPI"</a>
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
