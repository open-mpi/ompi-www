<?
$subject_val = "Re: [OMPI users] Openmpi Checkpoint/Restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 23 04:35:06 2010" -->
<!-- isoreceived="20101223093506" -->
<!-- sent="Thu, 23 Dec 2010 17:35:01 +0800" -->
<!-- isosent="20101223093501" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi Checkpoint/Restart failed" -->
<!-- id="AANLkTim+YLWRy42gU9TeqOQeZviRoQbMrWQuE+wC+XyG_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTikLZWczUS6K+ofP2S3OkituZY1xe40qi3kFk7+v_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi Checkpoint/Restart failed<br>
<strong>From:</strong> &#195;&#207;&#207;&#220;&#190;&#252; (<em>xjun.meng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-23 04:35:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15217.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>In reply to:</strong> <a href="15217.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15222.php">цооэ╬Э: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>Reply:</strong> <a href="15222.php">цооэ╬Э: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My main question is:
<br>
<p>after I finished the checkpoint operation against a simple task which ran on
<br>
tow machines, I can only restart it on one machine. if I ran the following
<br>
command to force the ompi-restart to run the program on two machines:
<br>
<p>*ompi-restart  -hostfile  ./machine_names  ompi_global_snapshot_XXX.ckpt*
<br>
(the machine_names include two host names)
<br>
<p>the output is:
<br>
*--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_1.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
[jx-mpi-fcr048:04116] [ 0] /lib64/tls/libpthread.so.0 [0x302b80c420]
<br>
[jx-mpi-fcr048:04116] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25)
<br>
[0x302af68b85]
<br>
[jx-mpi-fcr048:04116] [ 2]
<br>
/home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_argv_free+0x41)
<br>
[0x2a9557de31]
<br>
[jx-mpi-fcr048:04116] [ 3]
<br>
/home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_event_fini+0x27)
<br>
[0x2a95573ac7]
<br>
[jx-mpi-fcr048:04116] [ 4]
<br>
/home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_finalize+0x2f)
<br>
[0x2a95568a0f]
<br>
[jx-mpi-fcr048:04116] [ 5] opal-restart [0x401888]
<br>
[jx-mpi-fcr048:04116] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x302af1c4bb]
<br>
[jx-mpi-fcr048:04116] [ 7] opal-restart [0x40147a]
<br>
[jx-mpi-fcr048:04116] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 4116 on node
<br>
jx-mpi-fcr048.jx.baidu.com exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------*
<br>
<p>My global_snapshot_meta.data is:
<br>
<p>*# Seq: 0
<br>
# Timestamp: Thu Dec 23 16:39:46 2010
<br>
# Process: 1680080897.0
<br>
# OPAL CRS Component: blcr
<br>
# Snapshot Reference: opal_snapshot_0.ckpt
<br>
# Snapshot Location: /home/work/checkpoint/ompi_global_snapshot_22817.ckpt/0
<br>
# Process: 1680080897.1
<br>
# OPAL CRS Component: blcr
<br>
# Snapshot Reference: opal_snapshot_1.ckpt
<br>
# Snapshot Location: /home/work/checkpoint/ompi_global_snapshot_22817.ckpt/0
<br>
# Timestamp: Thu Dec 23 16:39:47 2010
<br>
# Finished Seq: 0*
<br>
<p>Does anabody know why?
<br>
<p>Thanks
<br>
Xianjun Meng
<br>
<p><p>2010/12/23 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to try the checkpoint/restart function of Openmpi recently, and after
</span><br>
<span class="quotelev1">&gt; several failure and checking lots of the docement, I am still very confused
</span><br>
<span class="quotelev1">&gt; about how to config the checkpoint/restart function. Can anybody give me a
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf script and introduce me what parameters I
</span><br>
<span class="quotelev1">&gt; should specified when i install the openmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, I want to install the openmpi1.5.1 and blcr 0.8.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Xianjun Meng
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15218/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15219.php">Yiannis Papadopoulos: "Re: [OMPI users] Call to MPI_Test has large time-jitter"</a>
<li><strong>Previous message:</strong> <a href="15217.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>In reply to:</strong> <a href="15217.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15222.php">цооэ╬Э: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<li><strong>Reply:</strong> <a href="15222.php">цооэ╬Э: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
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
