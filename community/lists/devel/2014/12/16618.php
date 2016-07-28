<?
$subject_val = "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 16 14:16:31 2014" -->
<!-- isoreceived="20141216191631" -->
<!-- sent="Tue, 16 Dec 2014 14:16:29 -0500" -->
<!-- isosent="20141216191629" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="CAG4F6z9aW5HC5GMAY0iEwgLbhMXd=MwF9z8okX911XkEMi4gow_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z_MMJzwq9wtETRBNZuvairCHNnfowCjB4oRuci93-D6kg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-16 14:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16619.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16617.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We pushed a fix for this that hopefully resolves all of these issues. It
<br>
was merged into the release branch this morning. You can give it a try
<br>
there, or you can wait until the 1.8.4rc5 drops.
<br>
<p>Josh
<br>
<p>On Wed, Dec 10, 2014 at 9:37 AM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're back to looking at this (yet again.) It's a false positive, yes,
</span><br>
<span class="quotelev1">&gt; however, it's not completely benign. The max_reg that's calculated is much
</span><br>
<span class="quotelev1">&gt; smaller than it should be. In OFED 3.12, max_reg should be 2*TOTAL_RAM. We
</span><br>
<span class="quotelev1">&gt; should have a fix for 1.8.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 9:25 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, i observe a similar behaviour on my system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; imho, the root cause is OFED has been upgraded from a (quite) older
</span><br>
<span class="quotelev2">&gt;&gt; version to latest 3.12 version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the relevant part of code (btl_openib.c from the master) :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static uint64_t calculate_max_reg (void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     if (0 == stat(&quot;/sys/module/mlx4_core/parameters/log_num_mtt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;statinfo)) {
</span><br>
<span class="quotelev2">&gt;&gt;     } else if (0 == stat(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;statinfo)) {
</span><br>
<span class="quotelev2">&gt;&gt;         mtts_per_seg = 1 &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/log_mtts_per_seg&quot;, 1);
</span><br>
<span class="quotelev2">&gt;&gt;         num_mtt =
</span><br>
<span class="quotelev2">&gt;&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;, 1 &lt;&lt; 20);
</span><br>
<span class="quotelev2">&gt;&gt;         reserved_mtt =
</span><br>
<span class="quotelev2">&gt;&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/fmr_reserved_mtts&quot;, 0);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         max_reg = (num_mtt - reserved_mtt) * opal_getpagesize () *
</span><br>
<span class="quotelev2">&gt;&gt; mtts_per_seg;
</span><br>
<span class="quotelev2">&gt;&gt;     } else if (
</span><br>
<span class="quotelev2">&gt;&gt;             (0 == stat(&quot;/sys/module/mlx5_core&quot;, &amp;statinfo)) ||
</span><br>
<span class="quotelev2">&gt;&gt;             (0 == stat(&quot;/sys/module/mlx4_core/parameters&quot;, &amp;statinfo)) ||
</span><br>
<span class="quotelev2">&gt;&gt;             (0 == stat(&quot;/sys/module/ib_mthca/parameters&quot;, &amp;statinfo))
</span><br>
<span class="quotelev2">&gt;&gt;             ) {
</span><br>
<span class="quotelev2">&gt;&gt;         /* mlx5 means that we have ofed 2.0 and it can always register
</span><br>
<span class="quotelev2">&gt;&gt; 2xmem_total for any mlx hca */
</span><br>
<span class="quotelev2">&gt;&gt;         max_reg = 2 * mem_total;
</span><br>
<span class="quotelev2">&gt;&gt;     } else {
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     /* Print a warning if we can't register more than 75% of physical
</span><br>
<span class="quotelev2">&gt;&gt;        memory.  Abort if the abort_not_enough_reg_mem MCA param was
</span><br>
<span class="quotelev2">&gt;&gt;        set. */
</span><br>
<span class="quotelev2">&gt;&gt;     if (max_reg &lt; mem_total * 3 / 4) {
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     return (max_reg * 7) &gt;&gt; 3;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with OFED 3.12, the /sys/module/mlx4_core/parameters/log_num_mtt pseudo
</span><br>
<span class="quotelev2">&gt;&gt; file does *not* exist any more
</span><br>
<span class="quotelev2">&gt;&gt; /sys/module/ib_mthca/parameters/num_mtt exists so the second path is taken
</span><br>
<span class="quotelev2">&gt;&gt; and mtts_per_seg is read from
</span><br>
<span class="quotelev2">&gt;&gt; /sys/module/ib_mthca/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i noted that log_mtts_per_seg is also a parameter of mlx4_core :
</span><br>
<span class="quotelev2">&gt;&gt; /sys/module/mlx4_core/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the value is 3 in ib_mthca (and leads to a warning) but 5 in mlx4_core
</span><br>
<span class="quotelev2">&gt;&gt; (big enough, and does not lead to a warning if this value is read)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i had no time to read the latest ofed doc, so i cannot answer :
</span><br>
<span class="quotelev2">&gt;&gt; - should log_mtts_per_seg be read from mlx4_core instead ?
</span><br>
<span class="quotelev2">&gt;&gt; - is the warning a false positive ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my only point is this warning *might* be a false positive and the root
</span><br>
<span class="quotelev2">&gt;&gt; cause *might* be calculate_max_reg logic
</span><br>
<span class="quotelev2">&gt;&gt; *could* be wrong with the latest OFED stack.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could the Mellanox folks comment on this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/09 3:18, G&#195;&#182;tz Waschk wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here's another test with openmpi 1.8.3. With 1.8.1, 32GB was detected, now
</span><br>
<span class="quotelev2">&gt;&gt; it is just 16:
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 2 /usr/lib64/openmpi-intel/bin/mpitests-osu_get_bw
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev2">&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs to
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
<span class="quotelev2">&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev2">&gt;&gt; parameters:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:              pax95
</span><br>
<span class="quotelev2">&gt;&gt;   Registerable memory:     16384 MiB
</span><br>
<span class="quotelev2">&gt;&gt;   Total memory:            49106 MiB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI_Get Bandwidth Test v4.3
</span><br>
<span class="quotelev2">&gt;&gt; # Window creation: MPI_Win_allocate
</span><br>
<span class="quotelev2">&gt;&gt; # Synchronization: MPI_Win_flush
</span><br>
<span class="quotelev2">&gt;&gt; # Size      Bandwidth (MB/s)
</span><br>
<span class="quotelev2">&gt;&gt; 1                      28.56
</span><br>
<span class="quotelev2">&gt;&gt; 2                      58.74
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it wasn't fixed for RHEL 6.6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, G&#195;&#182;tz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 8, 2014 at 4:00 PM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; &lt;goetz.waschk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had tested 1.8.4rc1 and it wasn't fixed. I can try again though,
</span><br>
<span class="quotelev2">&gt;&gt; maybe I had made an error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, G&#195;&#182;tz Waschk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 8, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should be fixed in OMPI 1.8.3. Is it possible for you to give 1.8.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  shot?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 8, 2014 at 8:43 AM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; &lt;goetz.waschk_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Dear Open-MPI experts,
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
<span class="quotelev2">&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  only
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  allow registering part of your physical memory.  This can cause MPI jobs
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
<span class="quotelev2">&gt;&gt; Ubuntu nodes:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
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
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25923.php">http://www.open-mpi.org/community/lists/users/2014/12/25923.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; AL I:40: Do what thou wilt shall be the whole of the Law.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25929.php">http://www.open-mpi.org/community/lists/users/2014/12/25929.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16454.php">http://www.open-mpi.org/community/lists/devel/2014/12/16454.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16618/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16619.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16617.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
