<?
$subject_val = "Re: [OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 09:17:17 2012" -->
<!-- isoreceived="20120323131717" -->
<!-- sent="Fri, 23 Mar 2012 17:17:12 +0400" -->
<!-- isosent="20120323131712" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier problem" -->
<!-- id="CAFamD4X4yRd_hHb-NVDztQ7H9fA+runfJetYPCn9E6YKN1J=-w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6C154DDD-8F1E-4BD0-8A51-CE35DBABF3E8_at_open-mpi.org" -->
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
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-23 09:17:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>In reply to:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been comparing 1.5.4 and 1.5.5rc3 with the same parameters that's why
<br>
I didn't use --bind-to-core. I checked and the usage of --bind-to-core
<br>
improved the result comparing to 1.5.4:
<br>
#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000        84.96        85.08        85.02
<br>
<p>So I guess with 1.5.5 the processes move from core to core within node even
<br>
though I use all cores, right? Then why 1.5.4 behaves differently?
<br>
<p>I need --bind-to-core in some cases and that's why I need 1.5.5rc3 instead
<br>
of more stable 1.5.4. I know that I can use numactl explicitly but
<br>
--bind-to-core is more convinient :)
<br>
<p>2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I don't see where you told OMPI to --bind-to-core. We don't automatically
</span><br>
<span class="quotelev1">&gt; bind, so you have to explicitly tell us to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2012, at 6:20 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm doing some testing with IMB and dicovered a strange thing:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Since I have a system with new AMD opteron 6276 processors I'm using
</span><br>
<span class="quotelev1">&gt; 1.5.5rc3 since it supports binding to cores.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But when I run the barrier test form intel mpi benchmarks, the best I
</span><br>
<span class="quotelev1">&gt; get is:
</span><br>
<span class="quotelev2">&gt; &gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt; &gt;           598     15159.56     15211.05     15184.70
</span><br>
<span class="quotelev2">&gt; &gt;  (/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt;  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
</span><br>
<span class="quotelev1">&gt; barrier)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And with openmpi 1.5.4 the result is much better:
</span><br>
<span class="quotelev2">&gt; &gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt; &gt;          1000       113.23       113.33       113.28
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile
</span><br>
<span class="quotelev1">&gt; hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
</span><br>
<span class="quotelev1">&gt; barrier)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and still I couldn't come close to the result I got with mvapich:
</span><br>
<span class="quotelev2">&gt; &gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt; &gt;          1000        17.51        17.53        17.53
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1
</span><br>
<span class="quotelev1">&gt; -hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2
</span><br>
<span class="quotelev1">&gt; -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I dunno if this is a bug or me doing something not the way I should. So
</span><br>
<span class="quotelev1">&gt; is there a way to improve my results?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Pavel Mezentsev
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10768.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  [OMPI svn] svn:open-mpi r26180"</a>
<li><strong>Previous message:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>In reply to:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10770.php">Shamis, Pavel: "Re: [OMPI devel] barrier problem"</a>
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
