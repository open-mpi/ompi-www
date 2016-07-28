<?
$subject_val = "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 21:25:41 2014" -->
<!-- isoreceived="20141209022541" -->
<!-- sent="Tue, 09 Dec 2014 11:25:43 +0900" -->
<!-- isosent="20141209022543" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6" -->
<!-- id="54865DA7.5040706_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACd6u-oJcv++20XZjd3TP5Lo_TRtn8J5NzPYS1C=s2nLSmLAHg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 21:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16453.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>FWIW, i observe a similar behaviour on my system.
<br>
<p>imho, the root cause is OFED has been upgraded from a (quite) older
<br>
version to latest 3.12 version
<br>
<p>here is the relevant part of code (btl_openib.c from the master) :
<br>
<p><p>static uint64_t calculate_max_reg (void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (0 == stat(&quot;/sys/module/mlx4_core/parameters/log_num_mtt&quot;,
<br>
&amp;statinfo)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (0 == stat(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;,
<br>
&amp;statinfo)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtts_per_seg = 1 &lt;&lt;
<br>
read_module_param(&quot;/sys/module/ib_mthca/parameters/log_mtts_per_seg&quot;, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_mtt =
<br>
read_module_param(&quot;/sys/module/ib_mthca/parameters/num_mtt&quot;, 1 &lt;&lt; 20);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reserved_mtt =
<br>
read_module_param(&quot;/sys/module/ib_mthca/parameters/fmr_reserved_mtts&quot;, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_reg = (num_mtt - reserved_mtt) * opal_getpagesize () *
<br>
mtts_per_seg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 == stat(&quot;/sys/module/mlx5_core&quot;, &amp;statinfo)) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 == stat(&quot;/sys/module/mlx4_core/parameters&quot;, &amp;statinfo)) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 == stat(&quot;/sys/module/ib_mthca/parameters&quot;, &amp;statinfo))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* mlx5 means that we have ofed 2.0 and it can always register
<br>
2xmem_total for any mlx hca */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_reg = 2 * mem_total;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Print a warning if we can't register more than 75% of physical
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory.  Abort if the abort_not_enough_reg_mem MCA param was
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (max_reg &lt; mem_total * 3 / 4) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (max_reg * 7) &gt;&gt; 3;
<br>
}
<br>
<p>with OFED 3.12, the /sys/module/mlx4_core/parameters/log_num_mtt pseudo
<br>
file does *not* exist any more
<br>
/sys/module/ib_mthca/parameters/num_mtt exists so the second path is taken
<br>
and mtts_per_seg is read from
<br>
/sys/module/ib_mthca/parameters/log_mtts_per_seg
<br>
<p>i noted that log_mtts_per_seg is also a parameter of mlx4_core :
<br>
/sys/module/mlx4_core/parameters/log_mtts_per_seg
<br>
<p>the value is 3 in ib_mthca (and leads to a warning) but 5 in mlx4_core
<br>
(big enough, and does not lead to a warning if this value is read)
<br>
<p><p>i had no time to read the latest ofed doc, so i cannot answer :
<br>
- should log_mtts_per_seg be read from mlx4_core instead ?
<br>
- is the warning a false positive ?
<br>
<p><p>my only point is this warning *might* be a false positive and the root
<br>
cause *might* be calculate_max_reg logic
<br>
*could* be wrong with the latest OFED stack.
<br>
<p>Could the Mellanox folks comment on this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>&nbsp;
<br>
<p><p>On 2014/12/09 3:18, G&#246;tz Waschk wrote:
<br>
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
<span class="quotelev1">&gt; Regards, G&#246;tz
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 8, 2014 at 4:00 PM, G&#246;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had tested 1.8.4rc1 and it wasn't fixed. I can try again though,
</span><br>
<span class="quotelev2">&gt;&gt; maybe I had made an error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 8, 2014 at 3:17 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should be fixed in OMPI 1.8.3. Is it possible for you to give 1.8.3
</span><br>
<span class="quotelev2">&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shot?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 8, 2014 at 8:43 AM, G&#246;tz Waschk &lt;goetz.waschk_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Open-MPI experts,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have updated my little cluster from Scientific Linux 6.5 to 6.6,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this included extensive changes in the Infiniband drivers and a newer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi version (1.8.1). Now I'm getting this message on all nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with more than 32 GB of RAM:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: It appears that your OpenFabrics subsystem is configured to
</span><br>
<span class="quotelev2">&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allow registering part of your physical memory.  This can cause MPI jobs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; physical memory on your machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See this Open MPI FAQ item for more information on these Linux kernel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parameters:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:              pax98
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Total memory:            49106 MiB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The issue is similar to the one described in a previous thread about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ubuntu nodes:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25090.php">http://www.open-mpi.org/community/lists/users/2014/08/25090.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But the Infiniband driver is different, the values log_num_mtt and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; log_mtts_per_seg both still exist, but they cannot be changed and have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on all configurations the same values:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_num_mtt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pax52] /root # cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The kernel changelog says that Red Hat has included this commit:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mlx4: Scale size of MTT table with system RAM (Doug Ledford)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so it should be all fine, the buffers scale automatically, however, as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; far as I can see, the wrong value calculated by calculate_max_reg() is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used in the code, so I think I cannot simply ignore the warning. Also,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a user has reported a problem with a job, I cannot confirm that this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is the cause.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My workaround was to simply load the mlx5_core kernel module, as this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is used by calculate_max_reg() to detect OFED 2.0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25923.php">http://www.open-mpi.org/community/lists/users/2014/12/25923.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25924.php">http://www.open-mpi.org/community/lists/users/2014/12/25924.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25929.php">http://www.open-mpi.org/community/lists/users/2014/12/25929.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16454/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16453.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>Reply:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
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
