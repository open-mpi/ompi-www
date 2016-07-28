<?
$subject_val = "Re: [OMPI users] Openmpi Checkpoint/Restart failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 23 21:04:02 2010" -->
<!-- isoreceived="20101224020402" -->
<!-- sent="Fri, 24 Dec 2010 10:03:55 +0800" -->
<!-- isosent="20101224020355" -->
<!-- name="&#195;&#207;&#207;&#220;&#190;&#252;" -->
<!-- email="xjun.meng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi Checkpoint/Restart failed" -->
<!-- id="AANLkTi==Db-au_mwi6UXHyG6uYLwLGA77TtyHThrwKd7_at_mail.gmail.com" -->
<!-- charset="GB2312" -->
<!-- inreplyto="AANLkTim+YLWRy42gU9TeqOQeZviRoQbMrWQuE+wC+XyG_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-12-23 21:03:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15221.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15218.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have figured it out. It was a simple issue, I didn't add the &quot;blcr lib&quot; to
<br>
the $PATH environment varable. However, it can make checkpoint operation,
<br>
but can't make restart operation successfully. It was so wield.
<br>
<p><p>Best regards
<br>
Xianjun Meng
<br>
<p>&#212;&#218; 2010&#196;&#234;12&#212;&#194;23&#200;&#213; &#207;&#194;&#206;&#231;5:35&#163;&#172;&#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;&#208;&#180;&#181;&#192;&#163;&#186;
<br>
<p><span class="quotelev1">&gt; My main question is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after I finished the checkpoint operation against a simple task which ran
</span><br>
<span class="quotelev1">&gt; on tow machines, I can only restart it on one machine. if I ran the
</span><br>
<span class="quotelev1">&gt; following command to force the ompi-restart to run the program on two
</span><br>
<span class="quotelev1">&gt; machines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *ompi-restart  -hostfile  ./machine_names  ompi_global_snapshot_XXX.ckpt*
</span><br>
<span class="quotelev1">&gt; (the machine_names include two host names)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the output is:
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;        checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 0] /lib64/tls/libpthread.so.0 [0x302b80c420]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 1] /lib64/tls/libc.so.6(__libc_free+0x25)
</span><br>
<span class="quotelev1">&gt; [0x302af68b85]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_argv_free+0x41)
</span><br>
<span class="quotelev1">&gt; [0x2a9557de31]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_event_fini+0x27)
</span><br>
<span class="quotelev1">&gt; [0x2a95573ac7]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/hpc_meng/openmpi/lib/libopen-pal.so.0(opal_finalize+0x2f)
</span><br>
<span class="quotelev1">&gt; [0x2a95568a0f]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 5] opal-restart [0x401888]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 6] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x302af1c4bb]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] [ 7] opal-restart [0x40147a]
</span><br>
<span class="quotelev1">&gt; [jx-mpi-fcr048:04116] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 4116 on node
</span><br>
<span class="quotelev1">&gt; jx-mpi-fcr048.jx.baidu.com exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My global_snapshot_meta.data is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *# Seq: 0
</span><br>
<span class="quotelev1">&gt; # Timestamp: Thu Dec 23 16:39:46 2010
</span><br>
<span class="quotelev1">&gt; # Process: 1680080897.0
</span><br>
<span class="quotelev1">&gt; # OPAL CRS Component: blcr
</span><br>
<span class="quotelev1">&gt; # Snapshot Reference: opal_snapshot_0.ckpt
</span><br>
<span class="quotelev1">&gt; # Snapshot Location:
</span><br>
<span class="quotelev1">&gt; /home/work/checkpoint/ompi_global_snapshot_22817.ckpt/0
</span><br>
<span class="quotelev1">&gt; # Process: 1680080897.1
</span><br>
<span class="quotelev1">&gt; # OPAL CRS Component: blcr
</span><br>
<span class="quotelev1">&gt; # Snapshot Reference: opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt; # Snapshot Location:
</span><br>
<span class="quotelev1">&gt; /home/work/checkpoint/ompi_global_snapshot_22817.ckpt/0
</span><br>
<span class="quotelev1">&gt; # Timestamp: Thu Dec 23 16:39:47 2010
</span><br>
<span class="quotelev1">&gt; # Finished Seq: 0*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anabody know why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Xianjun Meng
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/12/23 &#195;&#207;&#207;&#220;&#190;&#252; &lt;xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had to try the checkpoint/restart function of Openmpi recently, and
</span><br>
<span class="quotelev2">&gt;&gt; after several failure and checking lots of the docement, I am still very
</span><br>
<span class="quotelev2">&gt;&gt; confused about how to config the checkpoint/restart function. Can anybody
</span><br>
<span class="quotelev2">&gt;&gt; give me a $HOME/.openmpi/mca-params.conf script and introduce me what
</span><br>
<span class="quotelev2">&gt;&gt; parameters I should specified when i install the openmpi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I want to install the openmpi1.5.1 and blcr 0.8.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Xianjun Meng
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15222/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15223.php">Advanced Computing Group University of Padova: "[OMPI users] openmpi hangs when running on more than one node (unless i use --debug-daemons )"</a>
<li><strong>Previous message:</strong> <a href="15221.php">Ralph Castain: "Re: [OMPI users] srun and openmpi"</a>
<li><strong>In reply to:</strong> <a href="15218.php">&#195;&#207;&#207;&#220;&#190;&#252;: "Re: [OMPI users] Openmpi Checkpoint/Restart failed"</a>
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
