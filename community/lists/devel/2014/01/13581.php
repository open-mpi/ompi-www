<?
$subject_val = "Re: [OMPI devel] RFC: OB1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 20:23:16 2014" -->
<!-- isoreceived="20140108012316" -->
<!-- sent="Wed, 8 Jan 2014 02:23:13 +0100" -->
<!-- isosent="20140108012313" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OB1 optimizations" -->
<!-- id="732F668D-54D5-48E0-B338-AD7DD834F78E_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5C691E518F345F4882FAB9E9839E60BA1884362CFC_at_EXCHMB.ornl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 20:23:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<li><strong>Previous message:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The local request is not correctly released, leading to assert in debug mode. This is because you avoid calling MCA_PML_BASE_RECV_REQUEST_FINI, fact that leaves the request in an ACTIVE state, condition carefully checked during the call to destructor.
<br>
<p>I attached a second patch that fixes the issue above, and implement a similar optimization for the blocking send.
<br>
<p>Unfortunately, this is not enough. The mca_pml_ob1_send_inline optimization is horribly wrong in a multithreaded case as it alter the send_sequence without storing it. If you create a gap in the send_sequence a deadlock will __definitively__ occur. I strongly suggest you turn off the mca_pml_ob1_send_inline optimization on the multithreaded case. All the others optimizations should be safe in all cases.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>

<br><p>
<p><p>On Jan 8, 2014, at 01:15 , Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Overall it looks good. It would be helpful to validate performance numbers for other interconnects as well.
</span><br>
<span class="quotelev1">&gt; -Pasha
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev2">&gt;&gt; Hjelm
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, January 07, 2014 6:45 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] RFC: OB1 optimizations
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: Push some ob1 optimizations to the trunk and 1.7.5.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What: This patch contains two optimizations:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  - Introduce a fast send path for blocking send calls. This path uses
</span><br>
<span class="quotelev2">&gt;&gt;    the btl sendi function to put the data on the wire without the need
</span><br>
<span class="quotelev2">&gt;&gt;    for setting up a send request. In the case of btl/vader this can
</span><br>
<span class="quotelev2">&gt;&gt;    also avoid allocating/initializing a new fragment. With btl/vader
</span><br>
<span class="quotelev2">&gt;&gt;    this optimization improves small message latency by 50-200ns in
</span><br>
<span class="quotelev2">&gt;&gt;    ping-pong type benchmarks. Larger messages may take a small hit in
</span><br>
<span class="quotelev2">&gt;&gt;    the range of 10-20ns.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  - Use a stack-allocated receive request for blocking recieves. This
</span><br>
<span class="quotelev2">&gt;&gt;    optimization saves the extra instructions associated with accessing
</span><br>
<span class="quotelev2">&gt;&gt;    the receive request free list. I was able to get another 50-200ns
</span><br>
<span class="quotelev2">&gt;&gt;    improvement in the small-message ping-pong with this optimization. I
</span><br>
<span class="quotelev2">&gt;&gt;    see no hit for larger messages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When: These changes touch the critical path in ob1 and are targeted for
</span><br>
<span class="quotelev2">&gt;&gt; 1.7.5. As such I will set a moderately long timeout. Timeout set for
</span><br>
<span class="quotelev2">&gt;&gt; next Friday (Jan 17).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some results from osu_latency on haswell:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hjelmn_at_cn143 pt2pt]$ mpirun -n 2 --bind-to core -mca btl vader,self
</span><br>
<span class="quotelev2">&gt;&gt; ./osu_latency
</span><br>
<span class="quotelev2">&gt;&gt; # OSU MPI Latency Test v4.0.1
</span><br>
<span class="quotelev2">&gt;&gt; # Size          Latency (us)
</span><br>
<span class="quotelev2">&gt;&gt; 0                       0.11
</span><br>
<span class="quotelev2">&gt;&gt; 1                       0.14
</span><br>
<span class="quotelev2">&gt;&gt; 2                       0.14
</span><br>
<span class="quotelev2">&gt;&gt; 4                       0.14
</span><br>
<span class="quotelev2">&gt;&gt; 8                       0.14
</span><br>
<span class="quotelev2">&gt;&gt; 16                      0.14
</span><br>
<span class="quotelev2">&gt;&gt; 32                      0.15
</span><br>
<span class="quotelev2">&gt;&gt; 64                      0.18
</span><br>
<span class="quotelev2">&gt;&gt; 128                     0.36
</span><br>
<span class="quotelev2">&gt;&gt; 256                     0.37
</span><br>
<span class="quotelev2">&gt;&gt; 512                     0.46
</span><br>
<span class="quotelev2">&gt;&gt; 1024                    0.56
</span><br>
<span class="quotelev2">&gt;&gt; 2048                    0.80
</span><br>
<span class="quotelev2">&gt;&gt; 4096                    1.12
</span><br>
<span class="quotelev2">&gt;&gt; 8192                    1.68
</span><br>
<span class="quotelev2">&gt;&gt; 16384                   2.98
</span><br>
<span class="quotelev2">&gt;&gt; 32768                   5.10
</span><br>
<span class="quotelev2">&gt;&gt; 65536                   8.12
</span><br>
<span class="quotelev2">&gt;&gt; 131072                 14.07
</span><br>
<span class="quotelev2">&gt;&gt; 262144                 25.30
</span><br>
<span class="quotelev2">&gt;&gt; 524288                 47.40
</span><br>
<span class="quotelev2">&gt;&gt; 1048576                91.71
</span><br>
<span class="quotelev2">&gt;&gt; 2097152               195.56
</span><br>
<span class="quotelev2">&gt;&gt; 4194304               487.05
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Patch Attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13581/ob1_optimization_take2.patch">ob1_optimization_take2.patch</a>
</ul>
<!-- attachment="ob1_optimization_take2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13582.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<li><strong>Previous message:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13585.php">Nathan Hjelm: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
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
