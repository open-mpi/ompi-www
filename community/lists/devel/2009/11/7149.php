<?
$subject_val = "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 26 10:46:52 2009" -->
<!-- isoreceived="20091126154652" -->
<!-- sent="Thu, 26 Nov 2009 16:38:16 +0100" -->
<!-- isosent="20091126153816" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed" -->
<!-- id="1259249896.2627.48.camel_at_frecb000730" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4AE61D4E.8070105_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated	SRQwhen	ibv_resize_cq() has failed<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-26 10:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7150.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-10-26 at 15:06 -0700, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Retrying w/ fewer CQ entires as Jeff describes is a good idea to help 
</span><br>
<span class="quotelev1">&gt; ensure that EINVAL actually does signify that the count exceeds the max 
</span><br>
<span class="quotelev1">&gt; instead of just assuming this is so).  If it actually was signifying 
</span><br>
<span class="quotelev1">&gt; some other error case, then one would probably not want to continue.
</span><br>
<p>Sorry for the delay, but I had many other things to do...
<br>
<p>You'll find a patch proposal in attachment, ready for review.
<br>
<p>The only part I'm not sure about is the following hunk:
<br>
<p>@@ -496,7 +540,13 @@ int mca_btl_openib_add_procs(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peers[i] = endpoint;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    return mca_btl_openib_size_queues(openib_btl, nprocs);
<br>
+    rc = mca_btl_openib_size_queues(openib_btl, nprocs);
<br>
+    if (OMPI_SUCCESS != rc) {
<br>
+        mca_btl_openib_del_procs(btl, nprocs, ompi_procs, peers);
<br>
+        opal_bitmap_clear_all_bits(reachable);
<br>
+    }
<br>
+
<br>
+    return rc;
<br>
<p>Don't know if there's a &quot;less violent&quot; way of undoing things.
<br>
<p>Anyway, things work well with the path applied.
<br>
<p>You'll also find in attachment:
<br>
1. the output without the patch applied
<br>
2. the output with the patch applied
<br>
3. the output with the patch applied + an emulation of an EINVAL that is
<br>
still returned.
<br>
<p>Comments would be welcome.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the analysis!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We've argued about btl_r2_add_btls() before -- IIRC, the consensus is 
</span><br>
<span class="quotelev2">&gt; &gt; that we want it to be able to continue even if a BTL fails.  So I 
</span><br>
<span class="quotelev2">&gt; &gt; *think* that your #1 answer is better.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, we might want to try a little harder if EINVAL is returned -- 
</span><br>
<span class="quotelev2">&gt; &gt; perhaps try decreasing number of CQ entries and try again until either 
</span><br>
<span class="quotelev2">&gt; &gt; we have too few CQ entries to be useful (e.g., 0 or some higher number 
</span><br>
<span class="quotelev2">&gt; &gt; that is still &quot;too small&quot;), or fail the BTL alltogether...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 23, 2009, at 10:10 AM, Nadia Derbey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yesterdays I had to analyze a SIGSEV occuring after the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; message had been output:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [.... adjust_cq] cannot resize completion queue, error: 22
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What I found is the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When ibv_resize_cq() fails to resize a CQ (in my case it returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; EINVAL), adjust_cq() returns an error and create_srq() is not called by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_size_queues().
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note: One of our infiniband specialists told me that EINVAL was returned
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in that case because we were asking for more CQ entries than the max
</span><br>
<span class="quotelev3">&gt; &gt;&gt; available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_bml_r2_add_btls() goes on executing.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Then qp_create_all() is called (connect/btl_openib_connect_oob.c).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ibv_create_qp() succeeds even though init_attr.srq is a NULL pointer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (remember that create_srq() has not been previously called).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since all the QPs have been successfully created, qp_create_all() then
</span><br>
<span class="quotelev3">&gt; &gt;&gt; calls:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mca_btl_openib_endpoint_post_recvs()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   --&gt; mca_btl_openib_post_srr()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       --&gt; ibv_post_srq_recv() on a NULL SRQ
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ==&gt; SIGSEGV
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If I'm not wrong in the analysis above, we have the choice between 2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; solutions to fix this problem:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. if EINVAL is returned by ibv_resize_cq() in adjust_cq(), treat this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as the ENOSYS case: do not return an error, since the CQ has
</span><br>
<span class="quotelev3">&gt; &gt;&gt; successfully been created may be with less entries than needed, but it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is there.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doing this we assume that EINVAL will always be the symptom of a &quot;too
</span><br>
<span class="quotelev3">&gt; &gt;&gt; many entries asked for&quot; error from the IB stack. I don't have the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; answer...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + I don't know if this won't imply a degraded mode in terms of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; performances.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. Fix mca_bml_r2_add_btls() to cleanly exit if an error occurs during
</span><br>
<span class="quotelev3">&gt; &gt;&gt; btl_add_procs().
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; FYI I tested solution #1 and it worked...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any suggestion or comment would be welcome.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;


</pre>
<p>
<p>[derbeyn_at_inti0 ~]$ salloc -n 16 -N 2 -p Zeus mpirun --mca btl openib,self /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1 -npmin 16 sendrecv
<br>
salloc: Granted job allocation 90732
<br>
[inti42][[4571,1],13][../../../../../ompi/mca/btl/openib/btl_openib.c:201:adjust_cq] cannot resize completion queue, error: 22
<br>
[inti41][[4571,1],6][../../../../../ompi/mca/btl/openib/btl_openib.c:201:adjust_cq] cannot resize completion queue, error: 22
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part    
<br>
#---------------------------------------------------
<br>
# Date       : Thu Nov 26 15:52:27 2009
<br>
# Machine    : x86_64# System     : Linux
<br>
# Release    : 2.6.18-128.el5.Bull.3
<br>
# Version    : #1 SMP Fri Feb 13 10:09:19 CET 2009
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   16777216
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE 
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM  
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Sendrecv
<br>
[inti41:06482] *** Process received signal ***
<br>
[inti41:06482] Signal: Segmentation fault (11)
<br>
[inti41:06482] Signal code: Address not mapped (1)
<br>
[inti41:06482] Failing at address: (nil)
<br>
[inti41:06482] [ 0] /lib64/libpthread.so.0 [0x305d00de60]
<br>
[inti41:06482] [ 1] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_btl_openib.so [0x2aac3d401597]
<br>
[inti41:06482] [ 2] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_btl_openib.so [0x2aac3d409e2c]
<br>
[inti41:06482] [ 3] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_btl_openib.so [0x2aac3d4134c5]
<br>
[inti41:06482] [ 4] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_rml_oob.so [0x2aac3b1868a1]
<br>
[inti41:06482] [ 5] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_oob_tcp.so [0x2aac3b3901a0]
<br>
[inti41:06482] [ 6] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_oob_tcp.so [0x2aac3b3914ca]
<br>
[inti41:06482] [ 7] /home_nfs/derbeyn/DISTS/openmpi-default/lib/libopen-pal.so.0 [0x2aac3a908fcb]
<br>
[inti41:06482] [ 8] /home_nfs/derbeyn/DISTS/openmpi-default/lib/libopen-pal.so.0(opal_progress+0x9e) [0x2aac3a8f57fe]
<br>
[inti41:06482] [ 9] /home_nfs/derbeyn/DISTS/openmpi-default/lib/libmpi.so.0 [0x2aac3a418035]
<br>
[inti41:06482] [10] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_coll_tuned.so [0x2aac3e67ed55]
<br>
[inti41:06482] [11] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_coll_tuned.so [0x2aac3e67eed7]
<br>
[inti41:06482] [12] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_coll_tuned.so [0x2aac3e674d7f]
<br>
[inti41:06482] [13] /home_nfs/derbeyn/DISTS/openmpi-default/lib/openmpi/mca_coll_sync.so [0x2aac3e4712d9]
<br>
[inti41:06482] [14] /home_nfs/derbeyn/DISTS/openmpi-default/lib/libmpi.so.0(MPI_Bcast+0x171) [0x2aac3a4241b1]
<br>
[inti41:06482] [15] /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1(IMB_basic_input+0x956) [0x4042d6]
<br>
[inti41:06482] [16] /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1(main+0x6b) [0x402eab]
<br>
[inti41:06482] [17] /lib64/libc.so.6(__libc_start_main+0xf4) [0x305c41d8a4]
<br>
[inti41:06482] [18] /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1 [0x402d89]
<br>
[inti41:06482] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 6 with PID 6482 on node inti41 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
salloc: Relinquishing job allocation 90732
<br>
<p><p><p>
<br><p>
<p><p>[derbeyn_at_inti0 ~]$ salloc -n 16 -N 2 -p Zeus mpirun --mca btl openib,self /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1 -npmin 16 sendrecv
<br>
salloc: Granted job allocation 90737
<br>
--------------------------------------------------------------------------
<br>
WARNING: Could not resize CQ to the size originally asked for.
<br>
<p>&nbsp;&nbsp;Local host:     inti41
<br>
&nbsp;&nbsp;Device name:    mthca0
<br>
&nbsp;&nbsp;Size asked for: 9344
<br>
&nbsp;&nbsp;Actual CQ size: 7008
<br>
<p>This may result in lower performance.
<br>
--------------------------------------------------------------------------
<br>
#---------------------------------------------------
<br>
#    Intel (R) MPI Benchmark Suite V2.3, MPI-1 part    
<br>
#---------------------------------------------------
<br>
# Date       : Thu Nov 26 15:55:03 2009
<br>
# Machine    : x86_64# System     : Linux
<br>
# Release    : 2.6.18-128.el5.Bull.3
<br>
# Version    : #1 SMP Fri Feb 13 10:09:19 CET 2009
<br>
<p>#
<br>
# Minimum message length in bytes:   0
<br>
# Maximum message length in bytes:   16777216
<br>
#
<br>
# MPI_Datatype                   :   MPI_BYTE 
<br>
# MPI_Datatype for reductions    :   MPI_FLOAT
<br>
# MPI_Op                         :   MPI_SUM  
<br>
#
<br>
#
<br>
<p># List of Benchmarks to run:
<br>
<p># Sendrecv
<br>
<p>#-----------------------------------------------------------------------------
<br>
# Benchmarking Sendrecv 
<br>
# #processes = 16 
<br>
#-----------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]   Mbytes/sec
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000        30.91        31.07        30.99         0.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        30.15        30.32        30.24         0.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        29.79        30.04        29.96         0.13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        29.38        29.56        29.47         0.26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        39.45        39.60        39.55         0.39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        29.22        29.38        29.32         1.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        29.44        29.97        29.85         2.04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        39.91        41.17        40.51         2.97
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        38.99        39.62        39.47         6.16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        28.58        28.81        28.72        16.95
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        29.67        29.85        29.77        32.72
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        42.02        42.18        42.07        46.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000        46.98        47.27        47.16        82.64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000        47.91        48.25        48.12       161.93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000        88.36        88.62        88.49       176.31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       254.80       255.03       254.96       122.53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       360.07       361.14       360.73       173.06
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640       561.28       574.89       571.20       217.43
<br>
[inti0:22534] 3 more processes have sent help message help-mpi-btl-openib.txt / CQ resized lower
<br>
[inti0:22534] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      1054.02      1077.62      1069.75       231.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      2098.44      2128.30      2119.77       234.93
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      4234.15      4258.82      4250.09       234.81
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40      8390.82      8463.80      8435.44       236.30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     16565.85     16796.04     16712.02       238.15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     32637.41     33899.59     33395.27       235.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8388608            5     61666.01     68091.20     65520.32       234.98
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16777216            2    129991.41    138666.51    134618.62       230.77
<br>
salloc: Relinquishing job allocation 90737
<br>
<p><p>
<br><p>
<p>[derbeyn_at_inti0 ~]$ salloc -n 16 -N 2 -p Zeus mpirun --mca btl openib,self /home_nfs/derbeyn/Bull-vs2//opt/IMB/IMB-MPI1 -npmin 16 sendrecv
<br>
salloc: Granted job allocation 90741
<br>
[inti42][[6518,1],11][../../../../../ompi/mca/btl/openib/btl_openib.c:220:adjust_cq] cannot resize completion queue, error: 22
<br>
[inti41][[6518,1],4][../../../../../ompi/mca/btl/openib/btl_openib.c:220:adjust_cq] cannot resize completion queue, error: 22
<br>
[inti41][[6518,1],4][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:788:rml_recv_cb] can't find suitable endpoint for this peer
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 4 with PID 6569 on
<br>
node inti41 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
salloc: Relinquishing job allocation 90741
<br>
<p><p><p>This result has been obtained applying the following patch to emulate an
<br>
unconditional EINVAL.
<br>
<p><p>btl/openib: emulate persisting EINVAL
<br>
<p>diff -r bd820c9c0415 ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c	Thu Nov 26 15:53:22 2009 +0100
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c	Thu Nov 26 15:59:03 2009 +0100
<br>
@@ -214,6 +214,7 @@ static int adjust_cq(mca_btl_openib_devi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (EINVAL == abs(rc) &amp;&amp; cq_size &gt; old_cq_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cq_size = old_cq_size + ((cq_size - old_cq_size) / 2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ibv_resize_cq(device-&gt;ib_cq[cq], cq_size);
<br>
+rc = EINVAL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;cannot resize completion queue, error: %d&quot;, rc));
<br>
<p><p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7149/001_manage_resize_cq_einval.patch__charset_UTF-8">001_manage_resize_cq_einval.patch__charset_UTF-8</a>
</ul>
<!-- attachment="001_manage_resize_cq_einval.patch__charset_UTF-8" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7150.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7148.php">Barrett, Brian W: "[OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7036.php">Paul H. Hargrove: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
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
