<?
$subject_val = "Re: [OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 09:17:33 2014" -->
<!-- isoreceived="20141208141733" -->
<!-- sent="Mon, 8 Dec 2014 09:17:31 -0500" -->
<!-- isosent="20141208141731" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="CAG4F6z-51ofPOZ765=XbYh0yE6at_c7tN==tWznToUL5tPWT+g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CACd6u-opiQRyOEdyT4ijA7yGTv=CumFeU0086Cz-E0+-yfK_6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warning about not enough registerable memory on SL6.6<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 09:17:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25923.php">G&#195;&#182;tz Waschk: "[OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="25923.php">G&#195;&#182;tz Waschk: "[OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25926.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25926.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This should be fixed in OMPI 1.8.3. Is it possible for you to give 1.8.3 a
<br>
shot?
<br>
<p>Best,
<br>
<p>Josh
<br>
<p>On Mon, Dec 8, 2014 at 8:43 AM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI experts,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have updated my little cluster from Scientific Linux 6.5 to 6.6,
</span><br>
<span class="quotelev1">&gt; this included extensive changes in the Infiniband drivers and a newer
</span><br>
<span class="quotelev1">&gt; openmpi version (1.8.1). Now I'm getting this message on all nodes
</span><br>
<span class="quotelev1">&gt; with more than 32 GB of RAM:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:              pax98
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            49106 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The issue is similar to the one described in a previous thread about
</span><br>
<span class="quotelev1">&gt; Ubuntu nodes:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
</span><br>
<span class="quotelev1">&gt; But the Infiniband driver is different, the values log_num_mtt and
</span><br>
<span class="quotelev1">&gt; log_mtts_per_seg both still exist, but they cannot be changed and have
</span><br>
<span class="quotelev1">&gt; on all configurations the same values:
</span><br>
<span class="quotelev1">&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_num_mtt
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The kernel changelog says that Red Hat has included this commit:
</span><br>
<span class="quotelev1">&gt; mlx4: Scale size of MTT table with system RAM (Doug Ledford)
</span><br>
<span class="quotelev1">&gt; so it should be all fine, the buffers scale automatically, however, as
</span><br>
<span class="quotelev1">&gt; far as I can see, the wrong value calculated by calculate_max_reg() is
</span><br>
<span class="quotelev1">&gt; used in the code, so I think I cannot simply ignore the warning. Also,
</span><br>
<span class="quotelev1">&gt; a user has reported a problem with a job, I cannot confirm that this
</span><br>
<span class="quotelev1">&gt; is the cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My workaround was to simply load the mlx5_core kernel module, as this
</span><br>
<span class="quotelev1">&gt; is used by calculate_max_reg() to detect OFED 2.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#195;&#182;tz Waschk
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25923.php">http://www.open-mpi.org/community/lists/users/2014/12/25923.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25924/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25923.php">G&#195;&#182;tz Waschk: "[OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="25923.php">G&#195;&#182;tz Waschk: "[OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25926.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25926.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
