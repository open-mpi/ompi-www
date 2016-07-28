<?
$subject_val = "Re: [OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 10:11:11 2012" -->
<!-- isoreceived="20120323141111" -->
<!-- sent="Fri, 23 Mar 2012 10:11:05 -0400" -->
<!-- isosent="20120323141105" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier problem" -->
<!-- id="D6FFB674-16DB-4A48-91AF-9C2CD1F3C517_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFamD4X4yRd_hHb-NVDztQ7H9fA+runfJetYPCn9E6YKN1J=-w_at_mail.gmail.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-23 10:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10769.php">Barrett, Brian W: "[OMPI devel] Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavel,
<br>
<p>Mvapich implements multicore optimized collectives, which perform substantially better than default algorithms.
<br>
FYI,  ORNL team works on new high performance collectives framework for OMPI. The framework provides significant boost in collectives performance.
<br>
<p>Regards,
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Mar 23, 2012, at 9:17 AM, Pavel Mezentsev wrote:
I've been comparing 1.5.4 and 1.5.5rc3 with the same parameters that's why I didn't use --bind-to-core. I checked and the usage of --bind-to-core improved the result comparing to 1.5.4:
#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
         1000        84.96        85.08        85.02
So I guess with 1.5.5 the processes move from core to core within node even though I use all cores, right? Then why 1.5.4 behaves differently?
I need --bind-to-core in some cases and that's why I need 1.5.5rc3 instead of more stable 1.5.4. I know that I can use numactl explicitly but --bind-to-core is more convinient :)
2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
I don't see where you told OMPI to --bind-to-core. We don't automatically bind, so you have to explicitly tell us to do so.
On Mar 23, 2012, at 6:20 AM, Pavel Mezentsev wrote:
&gt; Hello
&gt;
&gt; I'm doing some testing with IMB and dicovered a strange thing:
&gt;
&gt; Since I have a system with new AMD opteron 6276 processors I'm using 1.5.5rc3 since it supports binding to cores.
&gt;
&gt; But when I run the barrier test form intel mpi benchmarks, the best I get is:
&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt;           598     15159.56     15211.05     15184.70
&gt;  (/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256 openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
&gt;
&gt; And with openmpi 1.5.4 the result is much better:
&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt;          1000       113.23       113.33       113.28
&gt;
&gt; (/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256 openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
&gt;
&gt; and still I couldn't come close to the result I got with mvapich:
&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt;          1000        17.51        17.53        17.53
&gt;
&gt; (/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1 -hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2 -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
&gt;
&gt; I dunno if this is a bug or me doing something not the way I should. So is there a way to improve my results?
&gt;
&gt; Best regards,
&gt; Pavel Mezentsev
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
_______________________________________________
devel mailing list
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10771.php">Barrett, Brian W: "[OMPI devel] Debugger question"</a>
<li><strong>Previous message:</strong> <a href="10769.php">Barrett, Brian W: "[OMPI devel] Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10767.php">Pavel Mezentsev: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
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
