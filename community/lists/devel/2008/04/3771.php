<?
$subject_val = "Re: [OMPI devel] Unbelievable situation  BUG";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 27 14:26:37 2008" -->
<!-- isoreceived="20080427182637" -->
<!-- sent="Sun, 27 Apr 2008 14:26:22 -0400" -->
<!-- isosent="20080427182622" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unbelievable situation  BUG" -->
<!-- id="405B4649-80E7-4E36-AA13-221ABE78742C_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080427163350.GB10921_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unbelievable situation  BUG<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-27 14:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Previous message:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>In reply to:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mea culpa, I completely ignore the possible rollback of the sequence  
<br>
number. I will remove the commit asap.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 27, 2008, at 12:33 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, Apr 27, 2008 at 07:00:57PM +0300, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I faced the &quot;Unbelievable situation&quot;
</span><br>
<span class="quotelev1">&gt; The situation is believable, but commit r18274, that adds this  
</span><br>
<span class="quotelev1">&gt; output, is
</span><br>
<span class="quotelev1">&gt; not, as it doesn't take into account sequence number wrap around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; during running IMB benchmark.
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
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/bin/mpirun -np 96 --bynode  -hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfile_ompi -mca btl_openib_max_lmc 1 ./IMB-MPI1 PingPong PingPing
</span><br>
<span class="quotelev2">&gt;&gt; Sendrecv Exchange Allreduce Reduce Reduce_scatter Bcast Barrier
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Benchmarking Allreduce
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # #processes = 96
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #Benchmarking        #procs       #bytes #repetitions  t_min[usec]
</span><br>
<span class="quotelev2">&gt;&gt; t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                  0         1000         0.02
</span><br>
<span class="quotelev2">&gt;&gt; 0.03         0.02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                  4         1000       297.88
</span><br>
<span class="quotelev2">&gt;&gt; 298.07       297.95
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                  8         1000       296.15
</span><br>
<span class="quotelev2">&gt;&gt; 296.32       296.24
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                 16         1000       297.99
</span><br>
<span class="quotelev2">&gt;&gt; 298.17       298.09
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                 32         1000       296.97
</span><br>
<span class="quotelev2">&gt;&gt; 297.20       297.04
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                 64         1000       298.43
</span><br>
<span class="quotelev2">&gt;&gt; 298.64       298.49
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                128         1000       296.86
</span><br>
<span class="quotelev2">&gt;&gt; 297.07       296.93
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                256         1000       298.00
</span><br>
<span class="quotelev2">&gt;&gt; 298.30       298.09
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96                512         1000       296.79
</span><br>
<span class="quotelev2">&gt;&gt; 296.96       296.85
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96               1024         1000       299.23
</span><br>
<span class="quotelev2">&gt;&gt; 299.39       299.31
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96               2048         1000       295.51
</span><br>
<span class="quotelev2">&gt;&gt; 295.64       295.57
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96               4096         1000       246.02
</span><br>
<span class="quotelev2">&gt;&gt; 246.13       246.08
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96               8192         1000       492.52
</span><br>
<span class="quotelev2">&gt;&gt; 492.74       492.63
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96              16384         1000      5380.59
</span><br>
<span class="quotelev2">&gt;&gt; 5381.47      5381.10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96              32768         1000      5372.86
</span><br>
<span class="quotelev2">&gt;&gt; 5373.69      5373.36
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96              65536          640      5470.41
</span><br>
<span class="quotelev2">&gt;&gt; 5471.88      5471.16
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Allreduce       96             131072          320      5554.52
</span><br>
<span class="quotelev2">&gt;&gt; 5556.82      5555.75
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] Unbelievable situation ... we got a duplicated  
</span><br>
<span class="quotelev2">&gt;&gt; fragment
</span><br>
<span class="quotelev2">&gt;&gt; with seq number of 0 (expected 65534) from witch23
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] Unbelievable situation ... we got a duplicated  
</span><br>
<span class="quotelev2">&gt;&gt; fragment
</span><br>
<span class="quotelev2">&gt;&gt; with seq number of 65116 (expected 65534) from witch23
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] Failing at address: 0x632457d0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 0] /lib64/libpthread.so.0 [0x2b7929a9bc10]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_allocator_bucket.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792aa47d34]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792b172163]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792b6b0772]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792b6b15ff]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_bml_r2.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792b38307f]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/libopen-pal.so.0(opal_progress 
</span><br>
<span class="quotelev2">&gt;&gt; +0x4a)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b79294cd16a]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 7] /home/USERS/lenny/OMPI_ORTE_LMC/lib/libmpi.so.0
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b79292163a8]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792c077cb7]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [ 9]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/openmpi/mca_coll_tuned.so
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b792c07b296]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /home/USERS/lenny/OMPI_ORTE_LMC/lib/libmpi.so.0(PMPI_Allreduce+0x1e7)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b7929229907]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [11] ./IMB-MPI1(IMB_allreduce+0x8e) [0x40764e]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [12] ./IMB-MPI1(main+0x3aa) [0x4034ea]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [13] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2b7929bc2154]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] [14] ./IMB-MPI1 [0x4030a9]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [witch24:15639] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3771/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3772.php">Lenny Verkhovsky: "Re: [OMPI devel] Loadbalancing"</a>
<li><strong>Previous message:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
<li><strong>In reply to:</strong> <a href="3770.php">Gleb Natapov: "Re: [OMPI devel] Unbelievable situation  BUG"</a>
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
