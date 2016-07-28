<?
$subject_val = "[OMPI devel] Unbelievable situation  BUG";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 12:01:06 2008" -->
<!-- isoreceived="20080427160106" -->
<!-- sent="Sun, 27 Apr 2008 19:00:57 +0300" -->
<!-- isosent="20080427160057" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] Unbelievable situation  BUG" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14D69_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> [OMPI devel] Unbelievable situation  BUG<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-27 12:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>Previous message:</strong> <a href="3768.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>Reply:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all 
<br>
<p>I faced the &quot;Unbelievable situation&quot;
<br>
<p>during running IMB benchmark.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>/home/USERS/lenny/OMPI_ORTE_LMC/bin/mpirun -np 96 --bynode  -hostfile
<br>
hostfile_ompi -mca btl_openib_max_lmc 1 ./IMB-MPI1 PingPong PingPing
<br>
Sendrecv Exchange Allreduce Reduce Reduce_scatter Bcast Barrier
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>#----------------------------------------------------------------
<br>
<p># Benchmarking Allreduce
<br>
<p># #processes = 96
<br>
<p>#----------------------------------------------------------------
<br>
<p>#Benchmarking        #procs       #bytes #repetitions  t_min[usec]
<br>
t_max[usec]  t_avg[usec]
<br>
<p>Allreduce       96                  0         1000         0.02
<br>
0.03         0.02
<br>
<p>Allreduce       96                  4         1000       297.88
<br>
298.07       297.95
<br>
<p>Allreduce       96                  8         1000       296.15
<br>
296.32       296.24
<br>
<p>Allreduce       96                 16         1000       297.99
<br>
298.17       298.09
<br>
<p>Allreduce       96                 32         1000       296.97
<br>
297.20       297.04
<br>
<p>Allreduce       96                 64         1000       298.43
<br>
298.64       298.49
<br>
<p>Allreduce       96                128         1000       296.86
<br>
297.07       296.93
<br>
<p>Allreduce       96                256         1000       298.00
<br>
298.30       298.09
<br>
<p>Allreduce       96                512         1000       296.79
<br>
296.96       296.85
<br>
<p>Allreduce       96               1024         1000       299.23
<br>
299.39       299.31
<br>
<p>Allreduce       96               2048         1000       295.51
<br>
295.64       295.57
<br>
<p>Allreduce       96               4096         1000       246.02
<br>
246.13       246.08
<br>
<p>Allreduce       96               8192         1000       492.52
<br>
492.74       492.63
<br>
<p>Allreduce       96              16384         1000      5380.59
<br>
5381.47      5381.10
<br>
<p>Allreduce       96              32768         1000      5372.86
<br>
5373.69      5373.36
<br>
<p>Allreduce       96              65536          640      5470.41
<br>
5471.88      5471.16
<br>
<p>Allreduce       96             131072          320      5554.52
<br>
5556.82      5555.75
<br>
<p>[witch24:15639] Unbelievable situation ... we got a duplicated fragment
<br>
with seq number of 0 (expected 65534) from witch23
<br>
<p>[witch24:15639] Unbelievable situation ... we got a duplicated fragment
<br>
with seq number of 65116 (expected 65534) from witch23
<br>
<p>[witch24:15639] *** Process received signal ***
<br>
<p>[witch24:15639] Signal: Segmentation fault (11)
<br>
<p>[witch24:15639] Signal code: Address not mapped (1)
<br>
<p>[witch24:15639] Failing at address: 0x632457d0
<br>
<p>[witch24:15639] [ 0] /lib64/libpthread.so.0 [0x2b7929a9bc10]
<br>
<p>[witch24:15639] [ 1]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_allocator_bucket.so
<br>
[0x2b792aa47d34]
<br>
<p>[witch24:15639] [ 2]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b792b172163]
<br>
<p>[witch24:15639] [ 3]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_btl_openib.so
<br>
[0x2b792b6b0772]
<br>
<p>[witch24:15639] [ 4]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_btl_openib.so
<br>
[0x2b792b6b15ff]
<br>
<p>[witch24:15639] [ 5]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_bml_r2.so
<br>
[0x2b792b38307f]
<br>
<p>[witch24:15639] [ 6]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/libopen-pal.so.0(opal_progress+0x4a)
<br>
[0x2b79294cd16a]
<br>
<p>[witch24:15639] [ 7] /home/USERS/lenny/OMPI_ORTE_LMC/lib/libmpi.so.0
<br>
[0x2b79292163a8]
<br>
<p>[witch24:15639] [ 8]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b792c077cb7]
<br>
<p>[witch24:15639] [ 9]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b792c07b296]
<br>
<p>[witch24:15639] [10]
<br>
/home/USERS/lenny/OMPI_ORTE_LMC/lib/libmpi.so.0(PMPI_Allreduce+0x1e7)
<br>
[0x2b7929229907]
<br>
<p>[witch24:15639] [11] ./IMB-MPI1(IMB_allreduce+0x8e) [0x40764e]
<br>
<p>[witch24:15639] [12] ./IMB-MPI1(main+0x3aa) [0x4034ea]
<br>
<p>[witch24:15639] [13] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2b7929bc2154]
<br>
<p>[witch24:15639] [14] ./IMB-MPI1 [0x4030a9]
<br>
<p>[witch24:15639] *** End of error message ***
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
Best Regards,
Lenny.
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>Previous message:</strong> <a href="3768.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r18303"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>Reply:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
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
