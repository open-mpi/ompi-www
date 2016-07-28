<?
$subject_val = "[OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 08:43:10 2014" -->
<!-- isoreceived="20141208134310" -->
<!-- sent="Mon, 8 Dec 2014 14:43:08 +0100" -->
<!-- isosent="20141208134308" -->
<!-- name="G&#195;&#182;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="CACd6u-opiQRyOEdyT4ijA7yGTv=CumFeU0086Cz-E0+-yfK_6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Warning about not enough registerable memory on SL6.6<br>
<strong>From:</strong> G&#195;&#182;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 08:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="25922.php">Brice Goglin: "Re: [OMPI users] netloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI experts,
<br>
<p>I have updated my little cluster from Scientific Linux 6.5 to 6.6,
<br>
this included extensive changes in the Infiniband drivers and a newer
<br>
openmpi version (1.8.1). Now I'm getting this message on all nodes
<br>
with more than 32 GB of RAM:
<br>
<p><p>WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              pax98
<br>
&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            49106 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
<p><p>The issue is similar to the one described in a previous thread about
<br>
Ubuntu nodes:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
<br>
But the Infiniband driver is different, the values log_num_mtt and
<br>
log_mtts_per_seg both still exist, but they cannot be changed and have
<br>
on all configurations the same values:
<br>
[pax52] /root # cat /sys/module/mlx4_core/parameters/log_num_mtt
<br>
0
<br>
[pax52] /root # cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
<br>
3
<br>
<p>The kernel changelog says that Red Hat has included this commit:
<br>
mlx4: Scale size of MTT table with system RAM (Doug Ledford)
<br>
so it should be all fine, the buffers scale automatically, however, as
<br>
far as I can see, the wrong value calculated by calculate_max_reg() is
<br>
used in the code, so I think I cannot simply ignore the warning. Also,
<br>
a user has reported a problem with a job, I cannot confirm that this
<br>
is the cause.
<br>
<p>My workaround was to simply load the mlx5_core kernel module, as this
<br>
is used by calculate_max_reg() to detect OFED 2.0.
<br>
<p>Regards, G&#195;&#182;tz Waschk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Previous message:</strong> <a href="25922.php">Brice Goglin: "Re: [OMPI users] netloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
