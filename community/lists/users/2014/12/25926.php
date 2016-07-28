<?
$subject_val = "Re: [OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 10:00:05 2014" -->
<!-- isoreceived="20141208150005" -->
<!-- sent="Mon, 8 Dec 2014 16:00:03 +0100" -->
<!-- isosent="20141208150003" -->
<!-- name="G&#195;&#182;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="CACd6u-piF1FPS+f_mjBew6Pr3djRNSw8QAm1sBNB45EwmAQwFA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z-51ofPOZ765=XbYh0yE6at_c7tN==tWznToUL5tPWT+g_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#195;&#182;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 10:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I had tested 1.8.4rc1 and it wasn't fixed. I can try again though,
<br>
maybe I had made an error.
<br>
<p>Regards, G&#195;&#182;tz Waschk
<br>
<p>On Mon, Dec 8, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should be fixed in OMPI 1.8.3. Is it possible for you to give 1.8.3 a
</span><br>
<span class="quotelev1">&gt; shot?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 8:43 AM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Open-MPI experts,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have updated my little cluster from Scientific Linux 6.5 to 6.6,
</span><br>
<span class="quotelev2">&gt;&gt; this included extensive changes in the Infiniband drivers and a newer
</span><br>
<span class="quotelev2">&gt;&gt; openmpi version (1.8.1). Now I'm getting this message on all nodes
</span><br>
<span class="quotelev2">&gt;&gt; with more than 32 GB of RAM:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev2">&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev2">&gt;&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev2">&gt;&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev2">&gt;&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev2">&gt;&gt; physical memory on your machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel
</span><br>
<span class="quotelev2">&gt;&gt; module
</span><br>
<span class="quotelev2">&gt;&gt; parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:              pax98
</span><br>
<span class="quotelev2">&gt;&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev2">&gt;&gt;   Total memory:            49106 MiB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The issue is similar to the one described in a previous thread about
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu nodes:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; But the Infiniband driver is different, the values log_num_mtt and
</span><br>
<span class="quotelev2">&gt;&gt; log_mtts_per_seg both still exist, but they cannot be changed and have
</span><br>
<span class="quotelev2">&gt;&gt; on all configurations the same values:
</span><br>
<span class="quotelev2">&gt;&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_num_mtt
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev2">&gt;&gt; 3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The kernel changelog says that Red Hat has included this commit:
</span><br>
<span class="quotelev2">&gt;&gt; mlx4: Scale size of MTT table with system RAM (Doug Ledford)
</span><br>
<span class="quotelev2">&gt;&gt; so it should be all fine, the buffers scale automatically, however, as
</span><br>
<span class="quotelev2">&gt;&gt; far as I can see, the wrong value calculated by calculate_max_reg() is
</span><br>
<span class="quotelev2">&gt;&gt; used in the code, so I think I cannot simply ignore the warning. Also,
</span><br>
<span class="quotelev2">&gt;&gt; a user has reported a problem with a job, I cannot confirm that this
</span><br>
<span class="quotelev2">&gt;&gt; is the cause.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My workaround was to simply load the mlx5_core kernel module, as this
</span><br>
<span class="quotelev2">&gt;&gt; is used by calculate_max_reg() to detect OFED 2.0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, G&#195;&#182;tz Waschk
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25923.php">http://www.open-mpi.org/community/lists/users/2014/12/25923.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a>
</span><br>
<p><p><p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25927.php">Ralph Castain: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25925.php">John Bray: "Re: [OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>In reply to:</strong> <a href="25924.php">Joshua Ladd: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="25929.php">Götz Waschk: "Re: [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
