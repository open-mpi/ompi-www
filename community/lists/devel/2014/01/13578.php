<?
$subject_val = "[OMPI devel] RFC: OB1 optimizations";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 18:44:51 2014" -->
<!-- isoreceived="20140107234451" -->
<!-- sent="Tue, 7 Jan 2014 16:44:50 -0700" -->
<!-- isosent="20140107234450" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: OB1 optimizations" -->
<!-- id="20140107234450.GF61812_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: OB1 optimizations<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 18:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Push some ob1 optimizations to the trunk and 1.7.5.
<br>
<p>What: This patch contains two optimizations:
<br>
<p>&nbsp;&nbsp;- Introduce a fast send path for blocking send calls. This path uses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the btl sendi function to put the data on the wire without the need
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for setting up a send request. In the case of btl/vader this can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;also avoid allocating/initializing a new fragment. With btl/vader
<br>
&nbsp;&nbsp;&nbsp;&nbsp;this optimization improves small message latency by 50-200ns in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ping-pong type benchmarks. Larger messages may take a small hit in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the range of 10-20ns.
<br>
<p>&nbsp;&nbsp;- Use a stack-allocated receive request for blocking recieves. This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;optimization saves the extra instructions associated with accessing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the receive request free list. I was able to get another 50-200ns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;improvement in the small-message ping-pong with this optimization. I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;see no hit for larger messages.
<br>
<p>When: These changes touch the critical path in ob1 and are targeted for
<br>
1.7.5. As such I will set a moderately long timeout. Timeout set for
<br>
next Friday (Jan 17).
<br>
<p>Some results from osu_latency on haswell:
<br>
<p>hjelmn_at_cn143 pt2pt]$ mpirun -n 2 --bind-to core -mca btl vader,self ./osu_latency
<br>
# OSU MPI Latency Test v4.0.1
<br>
# Size          Latency (us)
<br>
0                       0.11
<br>
1                       0.14
<br>
2                       0.14
<br>
4                       0.14
<br>
8                       0.14
<br>
16                      0.14
<br>
32                      0.15
<br>
64                      0.18
<br>
128                     0.36
<br>
256                     0.37
<br>
512                     0.46
<br>
1024                    0.56
<br>
2048                    0.80
<br>
4096                    1.12
<br>
8192                    1.68
<br>
16384                   2.98
<br>
32768                   5.10
<br>
65536                   8.12
<br>
131072                 14.07
<br>
262144                 25.30
<br>
524288                 47.40
<br>
1048576                91.71
<br>
2097152               195.56
<br>
4194304               487.05
<br>
<p><p>Patch Attached.
<br>
<p>-Nathan
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13578/ob1_optimization.patch">ob1_optimization.patch</a>
</ul>
<!-- attachment="ob1_optimization.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13578/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Reply:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
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
