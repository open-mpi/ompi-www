<?
$subject_val = "Re: [OMPI devel] RFC: OB1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 19:15:46 2014" -->
<!-- isoreceived="20140108001546" -->
<!-- sent="Tue, 7 Jan 2014 19:15:44 -0500" -->
<!-- isosent="20140108001544" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: OB1 optimizations" -->
<!-- id="5C691E518F345F4882FAB9E9839E60BA1884362CFC_at_EXCHMB.ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140107234450.GF61812_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 19:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>In reply to:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Overall it looks good. It would be helpful to validate performance numbers for other interconnects as well.
<br>
-Pasha
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan
</span><br>
<span class="quotelev1">&gt; Hjelm
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 07, 2014 6:45 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] RFC: OB1 optimizations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: Push some ob1 optimizations to the trunk and 1.7.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What: This patch contains two optimizations:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - Introduce a fast send path for blocking send calls. This path uses
</span><br>
<span class="quotelev1">&gt;     the btl sendi function to put the data on the wire without the need
</span><br>
<span class="quotelev1">&gt;     for setting up a send request. In the case of btl/vader this can
</span><br>
<span class="quotelev1">&gt;     also avoid allocating/initializing a new fragment. With btl/vader
</span><br>
<span class="quotelev1">&gt;     this optimization improves small message latency by 50-200ns in
</span><br>
<span class="quotelev1">&gt;     ping-pong type benchmarks. Larger messages may take a small hit in
</span><br>
<span class="quotelev1">&gt;     the range of 10-20ns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - Use a stack-allocated receive request for blocking recieves. This
</span><br>
<span class="quotelev1">&gt;     optimization saves the extra instructions associated with accessing
</span><br>
<span class="quotelev1">&gt;     the receive request free list. I was able to get another 50-200ns
</span><br>
<span class="quotelev1">&gt;     improvement in the small-message ping-pong with this optimization. I
</span><br>
<span class="quotelev1">&gt;     see no hit for larger messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: These changes touch the critical path in ob1 and are targeted for
</span><br>
<span class="quotelev1">&gt; 1.7.5. As such I will set a moderately long timeout. Timeout set for
</span><br>
<span class="quotelev1">&gt; next Friday (Jan 17).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some results from osu_latency on haswell:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hjelmn_at_cn143 pt2pt]$ mpirun -n 2 --bind-to core -mca btl vader,self
</span><br>
<span class="quotelev1">&gt; ./osu_latency
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v4.0.1
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                       0.11
</span><br>
<span class="quotelev1">&gt; 1                       0.14
</span><br>
<span class="quotelev1">&gt; 2                       0.14
</span><br>
<span class="quotelev1">&gt; 4                       0.14
</span><br>
<span class="quotelev1">&gt; 8                       0.14
</span><br>
<span class="quotelev1">&gt; 16                      0.14
</span><br>
<span class="quotelev1">&gt; 32                      0.15
</span><br>
<span class="quotelev1">&gt; 64                      0.18
</span><br>
<span class="quotelev1">&gt; 128                     0.36
</span><br>
<span class="quotelev1">&gt; 256                     0.37
</span><br>
<span class="quotelev1">&gt; 512                     0.46
</span><br>
<span class="quotelev1">&gt; 1024                    0.56
</span><br>
<span class="quotelev1">&gt; 2048                    0.80
</span><br>
<span class="quotelev1">&gt; 4096                    1.12
</span><br>
<span class="quotelev1">&gt; 8192                    1.68
</span><br>
<span class="quotelev1">&gt; 16384                   2.98
</span><br>
<span class="quotelev1">&gt; 32768                   5.10
</span><br>
<span class="quotelev1">&gt; 65536                   8.12
</span><br>
<span class="quotelev1">&gt; 131072                 14.07
</span><br>
<span class="quotelev1">&gt; 262144                 25.30
</span><br>
<span class="quotelev1">&gt; 524288                 47.40
</span><br>
<span class="quotelev1">&gt; 1048576                91.71
</span><br>
<span class="quotelev1">&gt; 2097152               195.56
</span><br>
<span class="quotelev1">&gt; 4194304               487.05
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch Attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>In reply to:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13581.php">George Bosilca: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
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
