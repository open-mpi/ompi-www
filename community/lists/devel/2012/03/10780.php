<?
$subject_val = "Re: [OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 06:37:41 2012" -->
<!-- isoreceived="20120328103741" -->
<!-- sent="Wed, 28 Mar 2012 14:37:35 +0400" -->
<!-- isosent="20120328103735" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] barrier problem" -->
<!-- id="CAFamD4VfPKJXffj63sx-s55oL4JUje1EFWvY0Tv+MhPuRXnvhw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1AB37ADB-E159-4DD0-AEFA-63AEABB0444D_at_cisco.com" -->
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
<strong>Date:</strong> 2012-03-28 06:37:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10781.php">Jeffrey Squyres: "[OMPI devel] opal/mca/common: you can remove this directory"</a>
<li><strong>Previous message:</strong> <a href="10779.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took the best result from each version, that's why different algotithm
<br>
numbers were chosen.
<br>
<p>I've studied the matter a bit further and here's what I got:
<br>
with openmpi 1.5.4 these are the average times:
<br>
/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile
<br>
hosts_all2all_4 -npernode 32 --mca btl openib,sm,self -mca
<br>
coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm $i -np 128
<br>
openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 128
<br>
barrier
<br>
0 - 71.78
<br>
3 - 69.39
<br>
6 - 69.05
<br>
<p>If I pin the processes with the following script:
<br>
#!/bin/bash
<br>
<p>s=$(($OMPI_COMM_WORLD_NODE_RANK))
<br>
<p>numactl --physcpubind=$((s)) --localalloc openmpi-1.5.4/intel12/IMB-MPI1
<br>
-off_cache 16,64 -msglog 1:16 -npmin 128 barrier
<br>
then the results improve:
<br>
0 - 51.96
<br>
3 - 52.39
<br>
6 - 28.64
<br>
<p>On openmpi-1.5.5rc3 without any binding the results are awful (14964.15 is
<br>
the best)
<br>
If I use the '--bind-to-core' flag then the results are almost the same as
<br>
in 1.5.4 with binding script:
<br>
0 - 52.85
<br>
3 - 52.69
<br>
6 - 23.34
<br>
<p>So almost everything seems to work fine now. The only problem left is that
<br>
algorithm number 5 hangs
<br>
<p>2012/3/28 Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. There were definitely some issues with binding to cores and process
</span><br>
<span class="quotelev1">&gt; layouts on Opterons that should be fixed in the 1.5.5 that was finally
</span><br>
<span class="quotelev1">&gt; released today.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. It is strange that the performance of barrier is so much different
</span><br>
<span class="quotelev1">&gt; between 1.5.4 and 1.5.5.  Is there a reason you were choosing different
</span><br>
<span class="quotelev1">&gt; algorithm numbers between the two?  (one of your command lines had
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_barrier_algorithm 1&quot;, the other had
</span><br>
<span class="quotelev1">&gt; &quot;coll_tuned_barrier_algorithm 3&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2012, at 10:11 AM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pavel,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Mvapich implements multicore optimized collectives, which perform
</span><br>
<span class="quotelev1">&gt; substantially better than default algorithms.
</span><br>
<span class="quotelev2">&gt; &gt; FYI,  ORNL team works on new high performance collectives framework for
</span><br>
<span class="quotelev1">&gt; OMPI. The framework provides significant boost in collectives performance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Application Performance Tools Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science and Math Division
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 23, 2012, at 9:17 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've been comparing 1.5.4 and 1.5.5rc3 with the same parameters that's
</span><br>
<span class="quotelev1">&gt; why I didn't use --bind-to-core. I checked and the usage of --bind-to-core
</span><br>
<span class="quotelev1">&gt; improved the result comparing to 1.5.4:
</span><br>
<span class="quotelev2">&gt; &gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt; &gt;         1000        84.96        85.08        85.02
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I guess with 1.5.5 the processes move from core to core within node
</span><br>
<span class="quotelev1">&gt; even though I use all cores, right? Then why 1.5.4 behaves differently?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need --bind-to-core in some cases and that's why I need 1.5.5rc3
</span><br>
<span class="quotelev1">&gt; instead of more stable 1.5.4. I know that I can use numactl explicitly but
</span><br>
<span class="quotelev1">&gt; --bind-to-core is more convinient :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2012/3/23 Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see where you told OMPI to --bind-to-core. We don't
</span><br>
<span class="quotelev1">&gt; automatically bind, so you have to explicitly tell us to do so.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 23, 2012, at 6:20 AM, Pavel Mezentsev wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm doing some testing with IMB and dicovered a strange thing:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since I have a system with new AMD opteron 6276 processors I'm using
</span><br>
<span class="quotelev1">&gt; 1.5.5rc3 since it supports binding to cores.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But when I run the barrier test form intel mpi benchmarks, the best I
</span><br>
<span class="quotelev1">&gt; get is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          598     15159.56     15211.05     15184.70
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt;  -hostfile hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
</span><br>
<span class="quotelev1">&gt; barrier)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And with openmpi 1.5.4 the result is much better:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         1000       113.23       113.33       113.28
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile
</span><br>
<span class="quotelev1">&gt; hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
</span><br>
<span class="quotelev1">&gt; coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
</span><br>
<span class="quotelev1">&gt; barrier)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and still I couldn't come close to the result I got with mvapich:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;         1000        17.51        17.53        17.53
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1
</span><br>
<span class="quotelev1">&gt; -hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2
</span><br>
<span class="quotelev1">&gt; -off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I dunno if this is a bug or me doing something not the way I should. So
</span><br>
<span class="quotelev1">&gt; is there a way to improve my results?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pavel Mezentsev
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10781.php">Jeffrey Squyres: "[OMPI devel] opal/mca/common: you can remove this directory"</a>
<li><strong>Previous message:</strong> <a href="10779.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  Remove Portals support?"</a>
<li><strong>In reply to:</strong> <a href="10778.php">Jeffrey Squyres: "Re: [OMPI devel] barrier problem"</a>
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
