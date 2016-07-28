<?
$subject_val = "Re: [OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 16:24:54 2012" -->
<!-- isoreceived="20120327202454" -->
<!-- sent="Tue, 27 Mar 2012 16:24:45 -0400" -->
<!-- isosent="20120327202445" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier problem" -->
<!-- id="1AB37ADB-E159-4DD0-AEFA-63AEABB0444D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6FFB674-16DB-4A48-91AF-9C2CD1F3C517_at_ornl.gov" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 16:24:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10779.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10777.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW:
<br>
<p>1. There were definitely some issues with binding to cores and process layouts on Opterons that should be fixed in the 1.5.5 that was finally released today.
<br>
<p>2. It is strange that the performance of barrier is so much different between 1.5.4 and 1.5.5.  Is there a reason you were choosing different algorithm numbers between the two?  (one of your command lines had &quot;coll_tuned_barrier_algorithm 1&quot;, the other had &quot;coll_tuned_barrier_algorithm 3&quot;).
<br>
<p><p>On Mar 23, 2012, at 10:11 AM, Shamis, Pavel wrote:
<br>
<p><span class="quotelev1">&gt; Pavel,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mvapich implements multicore optimized collectives, which perform substantially better than default algorithms.
</span><br>
<span class="quotelev1">&gt; FYI,  ORNL team works on new high performance collectives framework for OMPI. The framework provides significant boost in collectives performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2012, at 9:17 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been comparing 1.5.4 and 1.5.5rc3 with the same parameters that's why I didn't use --bind-to-core. I checked and the usage of --bind-to-core improved the result comparing to 1.5.4:
</span><br>
<span class="quotelev1">&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;         1000        84.96        85.08        85.02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess with 1.5.5 the processes move from core to core within node even though I use all cores, right? Then why 1.5.4 behaves differently?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need --bind-to-core in some cases and that's why I need 1.5.5rc3 instead of more stable 1.5.4. I know that I can use numactl explicitly but --bind-to-core is more convinient :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I don't see where you told OMPI to --bind-to-core. We don't automatically bind, so you have to explicitly tell us to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2012, at 6:20 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm doing some testing with IMB and dicovered a strange thing:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since I have a system with new AMD opteron 6276 processors I'm using 1.5.5rc3 since it supports binding to cores.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But when I run the barrier test form intel mpi benchmarks, the best I get is:
</span><br>
<span class="quotelev2">&gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;          598     15159.56     15211.05     15184.70
</span><br>
<span class="quotelev2">&gt;&gt; (/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256 openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And with openmpi 1.5.4 the result is much better:
</span><br>
<span class="quotelev2">&gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;         1000       113.23       113.33       113.28
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256 openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and still I couldn't come close to the result I got with mvapich:
</span><br>
<span class="quotelev2">&gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;         1000        17.51        17.53        17.53
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1 -hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I dunno if this is a bug or me doing something not the way I should. So is there a way to improve my results?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Mezentsev
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10779.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Remove Portals support?"</a>
<li><strong>Previous message:</strong> <a href="10777.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10780.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
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
