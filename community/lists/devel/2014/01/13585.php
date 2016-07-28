<?
$subject_val = "Re: [OMPI devel] RFC: OB1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 11:33:48 2014" -->
<!-- isoreceived="20140108163348" -->
<!-- sent="Wed, 8 Jan 2014 09:33:47 -0700" -->
<!-- isosent="20140108163347" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OB1 optimizations" -->
<!-- id="20140108163347.GH61812_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="732F668D-54D5-48E0-B338-AD7DD834F78E_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: OB1 optimizations<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 11:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13584.php">Christoph Niethammer: "Re: [OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>In reply to:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, good catch. A new version is attached that should eliminate the race
<br>
window for the multi-threaded case. Performance numbers are still
<br>
looking really good. We beat mvapich2 in the small message ping-pong by
<br>
a good margin. See the results below. The large message latency
<br>
difference for large messages is probably due to a difference in the max
<br>
send size for vader vs mvapich.
<br>
<p>To answer Pasha's question. I don't see a noticiable difference in
<br>
performance for btl's with no sendi function (this includes
<br>
ugni). OpenIB should get a boost. I will test that once I get an
<br>
allocation.
<br>
<p>CPU: Xeon E5-2670 @ 2.60 GHz
<br>
<p>Open MPI (-mca btl vader,self):
<br>
# OSU MPI Latency Test v4.1
<br>
# Size          Latency (us)
<br>
0                       0.17
<br>
1                       0.19
<br>
2                       0.19
<br>
4                       0.19
<br>
8                       0.19
<br>
16                      0.19
<br>
32                      0.19
<br>
64                      0.40
<br>
128                     0.40
<br>
256                     0.43
<br>
512                     0.52
<br>
1024                    0.67
<br>
2048                    0.94
<br>
4096                    1.44
<br>
8192                    2.04
<br>
16384                   3.47
<br>
32768                   6.10
<br>
65536                   9.38
<br>
131072                 16.47
<br>
262144                 29.63
<br>
524288                 54.81
<br>
1048576               106.63
<br>
2097152               206.84
<br>
4194304               421.26
<br>
<p><p>mvapich2 1.9:
<br>
# OSU MPI Latency Test
<br>
# Size            Latency (us)
<br>
0                         0.23
<br>
1                         0.23
<br>
2                         0.23
<br>
4                         0.23
<br>
8                         0.23
<br>
16                        0.28
<br>
32                        0.28
<br>
64                        0.39
<br>
128                       0.40
<br>
256                       0.40
<br>
512                       0.42
<br>
1024                      0.51
<br>
2048                      0.71
<br>
4096                      1.02
<br>
8192                      1.60
<br>
16384                     3.47
<br>
32768                     5.05
<br>
65536                     8.06
<br>
131072                   14.82
<br>
262144                   28.15
<br>
524288                   53.69
<br>
1048576                 127.47
<br>
2097152                 235.58
<br>
4194304                 683.90
<br>
<p><p>-Nathan
<br>
<p>On Tue, Jan 07, 2014 at 06:23:13PM -0700, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    The local request is not correctly released, leading to assert in debug
</span><br>
<span class="quotelev1">&gt;    mode. This is because you avoid calling MCA_PML_BASE_RECV_REQUEST_FINI,
</span><br>
<span class="quotelev1">&gt;    fact that leaves the request in an ACTIVE state, condition carefully
</span><br>
<span class="quotelev1">&gt;    checked during the call to destructor.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I attached a second patch that fixes the issue above, and implement a
</span><br>
<span class="quotelev1">&gt;    similar optimization for the blocking send.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Unfortunately, this is not enough. The mca_pml_ob1_send_inline
</span><br>
<span class="quotelev1">&gt;    optimization is horribly wrong in a multithreaded case as it alter the
</span><br>
<span class="quotelev1">&gt;    send_sequence without storing it. If you create a gap in the send_sequence
</span><br>
<span class="quotelev1">&gt;    a deadlock will __definitively__ occur. I strongly suggest you turn off
</span><br>
<span class="quotelev1">&gt;    the mca_pml_ob1_send_inline optimization on the multithreaded case. All
</span><br>
<span class="quotelev1">&gt;    the others optimizations should be safe in all cases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Jan 8, 2014, at 01:15 , Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;    &gt; Overall it looks good. It would be helpful to validate performance
</span><br>
<span class="quotelev1">&gt;    numbers for other interconnects as well.
</span><br>
<span class="quotelev2">&gt;    &gt; -Pasha
</span><br>
<span class="quotelev2">&gt;    &gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Hjelm
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Sent: Tuesday, January 07, 2014 6:45 PM
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Subject: [OMPI devel] RFC: OB1 optimizations
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; What: Push some ob1 optimizations to the trunk and 1.7.5.
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; What: This patch contains two optimizations:
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;  - Introduce a fast send path for blocking send calls. This path uses
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    the btl sendi function to put the data on the wire without the need
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    for setting up a send request. In the case of btl/vader this can
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    also avoid allocating/initializing a new fragment. With btl/vader
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    this optimization improves small message latency by 50-200ns in
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    ping-pong type benchmarks. Larger messages may take a small hit in
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    the range of 10-20ns.
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;  - Use a stack-allocated receive request for blocking recieves. This
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    optimization saves the extra instructions associated with accessing
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    the receive request free list. I was able to get another 50-200ns
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    improvement in the small-message ping-pong with this optimization. I
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;    see no hit for larger messages.
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; When: These changes touch the critical path in ob1 and are targeted for
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 1.7.5. As such I will set a moderately long timeout. Timeout set for
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; next Friday (Jan 17).
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Some results from osu_latency on haswell:
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; hjelmn_at_cn143 pt2pt]$ mpirun -n 2 --bind-to core -mca btl vader,self
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; ./osu_latency
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; # OSU MPI Latency Test v4.0.1
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 0                       0.11
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 1                       0.14
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 2                       0.14
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 4                       0.14
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 8                       0.14
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 16                      0.14
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 32                      0.15
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 64                      0.18
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 128                     0.36
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 256                     0.37
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 512                     0.46
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 1024                    0.56
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 2048                    0.80
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 4096                    1.12
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 8192                    1.68
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 16384                   2.98
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 32768                   5.10
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 65536                   8.12
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 131072                 14.07
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 262144                 25.30
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 524288                 47.40
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 1048576                91.71
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 2097152               195.56
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; 4194304               487.05
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Patch Attached.
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;    &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;    &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;    &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;    &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    devel mailing list
</span><br>
<span class="quotelev1">&gt;    devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13585/ob1_optimization_take3.patch">ob1_optimization_take3.patch</a>
</ul>
<!-- attachment="ob1_optimization_take3.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13585/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13584.php">Christoph Niethammer: "Re: [OMPI devel] Missing --bycore option in Open MPI 1.7.?"</a>
<li><strong>In reply to:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13586.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
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
