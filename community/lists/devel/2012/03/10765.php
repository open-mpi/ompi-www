<?
$subject_val = "[OMPI devel] barrier problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 08:20:23 2012" -->
<!-- isoreceived="20120323122023" -->
<!-- sent="Fri, 23 Mar 2012 16:20:18 +0400" -->
<!-- isosent="20120323122018" -->
<!-- name="Pavel Mezentsev" -->
<!-- email="pavel.mezentsev_at_[hidden]" -->
<!-- subject="[OMPI devel] barrier problem" -->
<!-- id="CAFamD4Xy6kYiqJ1uCjSqZsixw+Pf8nj-pysPLUgYpTWFT8enTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] barrier problem<br>
<strong>From:</strong> Pavel Mezentsev (<em>pavel.mezentsev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-23 08:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I'm doing some testing with IMB and dicovered a strange thing:
<br>
<p>Since I have a system with new AMD opteron 6276 processors I'm using
<br>
1.5.5rc3 since it supports binding to cores.
<br>
<p>But when I run the barrier test form intel mpi benchmarks, the best I get
<br>
is:
<br>
#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;598     15159.56     15211.05     15184.70
<br>
&nbsp;(/opt/openmpi-1.5.5rc3/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile
<br>
hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
<br>
coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 1 -np 256
<br>
openmpi-1.5.5rc3/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
<br>
barrier)
<br>
<p>And with openmpi 1.5.4 the result is much better:
<br>
#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000       113.23       113.33       113.28
<br>
<p>(/opt/openmpi-1.5.4/intel12/bin/mpirun -x OMP_NUM_THREADS=1  -hostfile
<br>
hosts_all2all_2 -npernode 32 --mca btl openib,sm,self -mca
<br>
coll_tuned_use_dynamic_rules 1 -mca coll_tuned_barrier_algorithm 3 -np 256
<br>
openmpi-1.5.4/intel12/IMB-MPI1 -off_cache 16,64 -msglog 1:16 -npmin 256
<br>
barrier)
<br>
<p>and still I couldn't come close to the result I got with mvapich:
<br>
#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000        17.51        17.53        17.53
<br>
<p>(/opt/mvapich2-1.8/intel12/bin/mpiexec.hydra -env OMP_NUM_THREADS 1
<br>
-hostfile hosts_all2all_2 -np 256 mvapich2-1.8/intel12/IMB-MPI1 -mem 2
<br>
-off_cache 16,64 -msglog 1:16 -npmin 256 barrier)
<br>
<p>I dunno if this is a bug or me doing something not the way I should. So is
<br>
there a way to improve my results?
<br>
<p>Best regards,
<br>
Pavel Mezentsev
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10765/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Previous message:</strong> <a href="10764.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26180"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
<li><strong>Reply:</strong> <a href="10766.php">Ralph Castain: "Re: [OMPI devel] barrier problem"</a>
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
