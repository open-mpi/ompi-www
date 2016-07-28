<?
$subject_val = "[OMPI users] Highly variable performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 16:35:48 2010" -->
<!-- isoreceived="20100602203548" -->
<!-- sent="Wed, 02 Jun 2010 22:36:39 +0200" -->
<!-- isosent="20100602203639" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="[OMPI users] Highly variable performance" -->
<!-- id="87zkzdtbmw.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> [OMPI users] Highly variable performance<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 16:36:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13217.php">Cristobal Navarro: "[OMPI users] Question about tree generation (in parallel)"</a>
<li><strong>Previous message:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13399.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13399.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm investigating some very large performance variation and have reduced
<br>
the issue to a very simple MPI_Allreduce benchmark.  The variability
<br>
does not occur for serial jobs, but it does occur within single nodes.
<br>
I'm not at all convinced that this is an Open MPI-specific issue (in
<br>
fact the same variance is observed with MVAPICH2 which is an available,
<br>
but not &quot;recommended&quot;, implementation on that cluster) but perhaps
<br>
someone here can suggest steps to track down the issue.
<br>
<p>The nodes of interest are 4-socket Opteron 8380 (quad core, 2.5 GHz), connected
<br>
with QDR InfiniBand.  The benchmark loops over
<br>
<p>&nbsp;&nbsp;MPI_Allgather(localdata,nlocal,MPI_DOUBLE,globaldata,nlocal,MPI_DOUBLE,MPI_COMM_WORLD);
<br>
<p>with nlocal=10000 (80 KiB messages) 10000 times, so it normally runs in
<br>
a few seconds.  Open MPI 1.4.1 was compiled with gcc-4.3.3, and this
<br>
code was built with mpicc -O2.  All submissions were 8 process, timing
<br>
and host results are presented below in chronological order.  The jobs
<br>
were run with 2-minute time limits (to get through the queue easily)
<br>
jobs are marked &quot;killed&quot; if they went over this amount of time.  Jobs
<br>
were usually submitted in batches of 4.  The scheduler is LSF-7.0.
<br>
<p>The HOST field indicates the node that was actually used, a6* nodes are
<br>
of the type described above, a2* nodes are much older (2-socket Opteron
<br>
2220 (dual core, 2.8 GHz)) and use a Quadrics network, the timings are
<br>
very reliable on these older nodes.  When the issue first came up, I was
<br>
inclined to blame memory bandwidith issues with other jobs, but the
<br>
variance is still visible when our job runs on exactly a full node,
<br>
present regardless of affinity settings, and events that don't require
<br>
communication are well-balanced in both small and large runs.
<br>
<p>I then suspected possible contention between transport layers, ompi_info
<br>
gives
<br>
<p>&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &quot;self,sm,openib,tcp&quot;, data source: environment)
<br>
<p>so the timings below show many variations of restricting these values.
<br>
Unfortunately, the variance is large for all combinations, but I find it
<br>
notable that -mca btl self,openib is reliably much slower than self,tcp.
<br>
<p>Note that some nodes are used in multiple runs, yet there is no strict
<br>
relationship where some nodes are &quot;fast&quot;, for instance, a6200 is very
<br>
slow (6x and more) in the first set, then normal on the subsequent test.
<br>
Nevertheless, when the same node appears in temporally nearby tests,
<br>
there seems to be a correlation (though there is certainly not enough
<br>
data here to establish that with confidence).
<br>
<p>As a final observation, I think the performance in all cases is
<br>
unreasonably low since the same test on a (unrelated to the cluster)
<br>
2-socket Opteron 2356 (quad core, 2.3 GHz) always takes between 9.75 and
<br>
10.0 seconds, 30% faster than the fastest observations on the cluster
<br>
nodes with faster cores and memory.
<br>
<p>#  JOB       TIME (s)      HOST
<br>
<p>ompirun
<br>
lsf.o240562 killed       8*a6200
<br>
lsf.o240563 9.2110e+01   8*a6200
<br>
lsf.o240564 1.5638e+01   8*a6237
<br>
lsf.o240565 1.3873e+01   8*a6228
<br>
<p>ompirun -mca btl self,sm
<br>
lsf.o240574 1.6916e+01   8*a6237
<br>
lsf.o240575 1.7456e+01   8*a6200
<br>
lsf.o240576 1.4183e+01   8*a6161
<br>
lsf.o240577 1.3254e+01   8*a6203
<br>
lsf.o240578 1.8848e+01   8*a6274
<br>
<p>prun (quadrics)
<br>
lsf.o240602 1.6168e+01   4*a2108+4*a2109
<br>
lsf.o240603 1.6746e+01   4*a2110+4*a2111
<br>
lsf.o240604 1.6371e+01   4*a2108+4*a2109
<br>
lsf.o240606 1.6867e+01   4*a2110+4*a2111
<br>
<p>ompirun -mca btl self,openib
<br>
lsf.o240776 3.1463e+01   8*a6203
<br>
lsf.o240777 3.0418e+01   8*a6264
<br>
lsf.o240778 3.1394e+01   8*a6203
<br>
lsf.o240779 3.5111e+01   8*a6274
<br>
<p>ompirun -mca self,sm,openib
<br>
lsf.o240851 1.3848e+01   8*a6244
<br>
lsf.o240852 1.7362e+01   8*a6237
<br>
lsf.o240854 1.3266e+01   8*a6204
<br>
lsf.o240855 1.3423e+01   8*a6276
<br>
<p>ompirun
<br>
lsf.o240858 1.4415e+01   8*a6244
<br>
lsf.o240859 1.5092e+01   8*a6237
<br>
lsf.o240860 1.3940e+01   8*a6204
<br>
lsf.o240861 1.5521e+01   8*a6276
<br>
lsf.o240903 1.3273e+01   8*a6234
<br>
lsf.o240904 1.6700e+01   8*a6206
<br>
lsf.o240905 1.4636e+01   8*a6269
<br>
lsf.o240906 1.5056e+01   8*a6234
<br>
<p>ompirun -mca self,tcp
<br>
lsf.o240948 1.8504e+01   8*a6234
<br>
lsf.o240949 1.9317e+01   8*a6207
<br>
lsf.o240950 1.8964e+01   8*a6234
<br>
lsf.o240951 2.0764e+01   8*a6207
<br>
<p>ompirun -mca btl self,sm,openib
<br>
lsf.o240998 1.3265e+01   8*a6269
<br>
lsf.o240999 1.2884e+01   8*a6269
<br>
lsf.o241000 1.3092e+01   8*a6234
<br>
lsf.o241001 1.3044e+01   8*a6269
<br>
<p>ompirun -mca btl self,openib
<br>
lsf.o241013 3.1572e+01   8*a6229
<br>
lsf.o241014 3.0552e+01   8*a6234
<br>
lsf.o241015 3.1813e+01   8*a6229
<br>
lsf.o241016 3.2514e+01   8*a6252
<br>
<p>ompirun -mca btl self,sm
<br>
lsf.o241044 1.3417e+01   8*a6234
<br>
lsf.o241045 killed       8*a6232
<br>
lsf.o241046 1.4626e+01   8*a6269
<br>
lsf.o241047 1.5060e+01   8*a6253
<br>
lsf.o241166 1.3179e+01   8*a6228
<br>
lsf.o241167 2.7759e+01   8*a6232
<br>
lsf.o241168 1.4224e+01   8*a6234
<br>
lsf.o241169 1.4825e+01   8*a6228
<br>
lsf.o241446 1.4896e+01   8*a6204
<br>
lsf.o241447 1.4960e+01   8*a6228
<br>
lsf.o241448 1.7622e+01   8*a6222
<br>
lsf.o241449 1.5112e+01   8*a6204
<br>
<p>ompirun -mca btl self,tcp
<br>
lsf.o241556 1.9135e+01   8*a6204
<br>
lsf.o241557 2.4365e+01   8*a6261
<br>
lsf.o241558 4.2682e+01   8*a6214
<br>
lsf.o241560 2.0481e+01   8*a6262
<br>
<p>ompirun -mca btl self,sm,openib
<br>
lsf.o241635 1.4234e+01   8*a6204
<br>
lsf.o241636 1.2024e+01   8*a6214
<br>
lsf.o241637 1.2773e+01   8*a6214
<br>
lsf.o241638 killed       8*a6214
<br>
lsf.o241684 1.8050e+01   8*a6261
<br>
lsf.o241686 1.3567e+01   8*a6203
<br>
lsf.o241687 1.5020e+01   8*a6228
<br>
lsf.o241688 2.2387e+01   8*a6225
<br>
<p>ompirun -mca btl self,openib
<br>
lsf.o241723 3.0060e+01   8*a6228
<br>
lsf.o241724 3.4366e+01   8*a6244
<br>
lsf.o241725 3.0033e+01   8*a6203
<br>
lsf.o241726 3.0499e+01   8*a6228
<br>
lsf.o241741 3.0483e+01   8*a6234
<br>
lsf.o241743 6.9527e+01   8*a6225
<br>
lsf.o241744 3.0945e+01   8*a6244
<br>
lsf.o241745 3.2120e+01   8*a6220
<br>
<p>mvapich2 1.4.1
<br>
lsf.o243902 1.3661e+01   8*a6243
<br>
lsf.o244832 2.9471e+01   8*a6250
<br>
lsf.o244833 2.8425e+01   8*a6250
<br>
lsf.o244835 1.3644e+01   8*a6261
<br>
lsf.o244837 1.3793e+01   8*a6244
<br>
lsf.o244838 2.6907e+01   8*a6250
<br>
lsf.o247496 1.3632e+01   8*a6244
<br>
lsf.o247497 1.3368e+01   8*a6244
<br>
lsf.o247499 1.4120e+01   8*a6252
<br>
<p><p>Any suggestions?
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13217.php">Cristobal Navarro: "[OMPI users] Question about tree generation (in parallel)"</a>
<li><strong>Previous message:</strong> <a href="13215.php">Scott Atchley: "Re: [OMPI users] Segmentation fault in MPI_Finalize	with	IB	hardware and memory manager."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13399.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="13399.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/07/13651.php">Jeff Squyres: "Re: [OMPI users] Highly variable performance"</a>
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
