<?
$subject_val = "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 09:37:49 2014" -->
<!-- isoreceived="20141210143749" -->
<!-- sent="Wed, 10 Dec 2014 09:37:47 -0500" -->
<!-- isosent="20141210143747" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="CAG4F6z_MMJzwq9wtETRBNZuvairCHNnfowCjB4oRuci93-D6kg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="54865DA7.5040706_at_iferc.org" -->
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
<strong>Date:</strong> 2014-12-10 09:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16492.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>In reply to:</strong> <a href="16454.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Gilles
<br>
<p>We're back to looking at this (yet again.) It's a false positive, yes,
<br>
however, it's not completely benign. The max_reg that's calculated is much
<br>
smaller than it should be. In OFED 3.12, max_reg should be 2*TOTAL_RAM. We
<br>
should have a fix for 1.8.4.
<br>
<p>Josh
<br>
<p>On Mon, Dec 8, 2014 at 9:25 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, i observe a similar behaviour on my system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; imho, the root cause is OFED has been upgraded from a (quite) older
</span><br>
<span class="quotelev1">&gt; version to latest 3.12 version
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the relevant part of code (btl_openib.c from the master) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static uint64_t calculate_max_reg (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     if (0 == stat(&quot;/sys/module/mlx4_core/parameters/log_num_mtt&quot;,
</span><br>
<span class="quotelev1">&gt; &amp;statinfo)) {
</span><br>
<span class="quotelev1">&gt;     } else if (0 == stat(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;,
</span><br>
<span class="quotelev1">&gt; &amp;statinfo)) {
</span><br>
<span class="quotelev1">&gt;         mtts_per_seg = 1 &lt;&lt;
</span><br>
<span class="quotelev1">&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/log_mtts_per_seg&quot;, 1);
</span><br>
<span class="quotelev1">&gt;         num_mtt =
</span><br>
<span class="quotelev1">&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;, 1 &lt;&lt; 20);
</span><br>
<span class="quotelev1">&gt;         reserved_mtt =
</span><br>
<span class="quotelev1">&gt; read_module_param(&quot;/sys/module/ib_mthca/parameters/fmr_reserved_mtts&quot;, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         max_reg = (num_mtt - reserved_mtt) * opal_getpagesize () *
</span><br>
<span class="quotelev1">&gt; mtts_per_seg;
</span><br>
<span class="quotelev1">&gt;     } else if (
</span><br>
<span class="quotelev1">&gt;             (0 == stat(&quot;/sys/module/mlx5_core&quot;, &amp;statinfo)) ||
</span><br>
<span class="quotelev1">&gt;             (0 == stat(&quot;/sys/module/mlx4_core/parameters&quot;, &amp;statinfo)) ||
</span><br>
<span class="quotelev1">&gt;             (0 == stat(&quot;/sys/module/ib_mthca/parameters&quot;, &amp;statinfo))
</span><br>
<span class="quotelev1">&gt;             ) {
</span><br>
<span class="quotelev1">&gt;         /* mlx5 means that we have ofed 2.0 and it can always register
</span><br>
<span class="quotelev1">&gt; 2xmem_total for any mlx hca */
</span><br>
<span class="quotelev1">&gt;         max_reg = 2 * mem_total;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* Print a warning if we can't register more than 75% of physical
</span><br>
<span class="quotelev1">&gt;        memory.  Abort if the abort_not_enough_reg_mem MCA param was
</span><br>
<span class="quotelev1">&gt;        set. */
</span><br>
<span class="quotelev1">&gt;     if (max_reg &lt; mem_total * 3 / 4) {
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     return (max_reg * 7) &gt;&gt; 3;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with OFED 3.12, the /sys/module/mlx4_core/parameters/log_num_mtt pseudo
</span><br>
<span class="quotelev1">&gt; file does *not* exist any more
</span><br>
<span class="quotelev1">&gt; /sys/module/ib_mthca/parameters/num_mtt exists so the second path is taken
</span><br>
<span class="quotelev1">&gt; and mtts_per_seg is read from
</span><br>
<span class="quotelev1">&gt; /sys/module/ib_mthca/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i noted that log_mtts_per_seg is also a parameter of mlx4_core :
</span><br>
<span class="quotelev1">&gt; /sys/module/mlx4_core/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the value is 3 in ib_mthca (and leads to a warning) but 5 in mlx4_core
</span><br>
<span class="quotelev1">&gt; (big enough, and does not lead to a warning if this value is read)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i had no time to read the latest ofed doc, so i cannot answer :
</span><br>
<span class="quotelev1">&gt; - should log_mtts_per_seg be read from mlx4_core instead ?
</span><br>
<span class="quotelev1">&gt; - is the warning a false positive ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my only point is this warning *might* be a false positive and the root
</span><br>
<span class="quotelev1">&gt; cause *might* be calculate_max_reg logic
</span><br>
<span class="quotelev1">&gt; *could* be wrong with the latest OFED stack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could the Mellanox folks comment on this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/12/09 3:18, G&#195;&#182;tz Waschk wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here's another test with openmpi 1.8.3. With 1.8.1, 32GB was detected, now
</span><br>
<span class="quotelev1">&gt; it is just 16:
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 /usr/lib64/openmpi-intel/bin/mpitests-osu_get_bw
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:              pax95
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     16384 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            49106 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # OSU MPI_Get Bandwidth Test v4.3
</span><br>
<span class="quotelev1">&gt; # Window creation: MPI_Win_allocate
</span><br>
<span class="quotelev1">&gt; # Synchronization: MPI_Win_flush
</span><br>
<span class="quotelev1">&gt; # Size      Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                      28.56
</span><br>
<span class="quotelev1">&gt; 2                      58.74
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it wasn't fixed for RHEL 6.6.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#195;&#182;tz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 4:00 PM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; &lt;goetz.waschk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had tested 1.8.4rc1 and it wasn't fixed. I can try again though,
</span><br>
<span class="quotelev1">&gt; maybe I had made an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#195;&#182;tz Waschk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should be fixed in OMPI 1.8.3. Is it possible for you to give 1.8.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  shot?
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
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 8:43 AM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; &lt;goetz.waschk_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dear Open-MPI experts,
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
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  only
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  allow registering part of your physical memory.  This can cause MPI jobs
</span><br>
<span class="quotelev1">&gt; to
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
<span class="quotelev1">&gt; Ubuntu nodes:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25923.php">http://www.open-mpi.org/community/lists/users/2014/12/25923.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; AL I:40: Do what thou wilt shall be the whole of the Law.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25929.php">http://www.open-mpi.org/community/lists/users/2014/12/25929.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16454.php">http://www.open-mpi.org/community/lists/devel/2014/12/16454.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16492.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16490.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] OMPI devel] openmpi and XRC API from ofed-3.12"</a>
<li><strong>In reply to:</strong> <a href="16454.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="16618.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
