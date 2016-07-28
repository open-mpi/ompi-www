<?
$subject_val = "Re: [OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 08:56:01 2012" -->
<!-- isoreceived="20120323125601" -->
<!-- sent="Fri, 23 Mar 2012 06:55:52 -0600" -->
<!-- isosent="20120323125552" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier problem" -->
<!-- id="6C154DDD-8F1E-4BD0-8A51-CE35DBABF3E8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFamD4Xy6kYiqJ1uCjSqZsixw+Pf8nj-pysPLUgYpTWFT8enTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] barrier problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-23 08:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<li><strong>In reply to:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't see where you told OMPI to --bind-to-core. We don't automatically bind, so you have to explicitly tell us to do so.
<br>
<p>On Mar 23, 2012, at 6:20 AM, Pavel Mezentsev wrote:
<br>
<p><span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm doing some testing with IMB and dicovered a strange thing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I have a system with new AMD opteron 6276 processors I'm using 1.5.5rc3 since it supports binding to cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I run the barrier test form intel mpi benchmarks, the best I get is:
</span><br>
<span class="quotelev1">&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;           598     15159.56     15211.05     15184.70
</span><br>
<span class="quotelev1">&gt;  (/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256 openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And with openmpi 1.5.4 the result is much better:
</span><br>
<span class="quotelev1">&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000       113.23       113.33       113.28
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256 openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and still I couldn't come close to the result I got with mvapich:
</span><br>
<span class="quotelev1">&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000        17.51        17.53        17.53
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1 -hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I dunno if this is a bug or me doing something not the way I should. So is there a way to improve my results?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Pavel Mezentsev
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<li><strong>In reply to:</strong> <a href="10765.php">Pavel Mezentsev: "[OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
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
