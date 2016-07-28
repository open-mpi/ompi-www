<?
$subject_val = "[OMPI users] ompi-checkpoint problem on shared storage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:09:11 2011" -->
<!-- isoreceived="20110923190911" -->
<!-- sent="Fri, 23 Sep 2011 13:08:57 -0600" -->
<!-- isosent="20110923190857" -->
<!-- name="Dave Schulz" -->
<!-- email="dschulz_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-checkpoint problem on shared storage" -->
<!-- id="4E7CD949.9070903_at_ucalgary.ca" -->
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
<strong>Subject:</strong> [OMPI users] ompi-checkpoint problem on shared storage<br>
<strong>From:</strong> Dave Schulz (<em>dschulz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:08:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17415.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Reply:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone.
<br>
<p>I've been trying to figure out an issue with ompi-checkpoint/blcr.  The 
<br>
symptoms seem to be related to what filesystem the 
<br>
snapc_base_global_snapshot_dir is located on.
<br>
<p>I wrote a simple mpi program where rank 0 sends to 1, 1 to 2, etc. then 
<br>
the highest sends to 0. then it waits 1 sec and repeats.
<br>
<p>I'm using openmpi-1.4.3 and when I run &quot;ompi-checkpoint --term 
<br>
&lt;pidofmpirun&gt;&quot; on the shared filesystems, the ompi-checkpoint returns a 
<br>
checkpoint reference, the worker processes go away, but the mpirun 
<br>
remains but is stuck (It dies right away if I run kill on it -- so it's 
<br>
responding to SIGTERM).  If I attach an strace to the mpirun, I get the 
<br>
following from strace forever:
<br>
<p>poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, 
<br>
events=POLLIN}], 6, 1000) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, 
<br>
events=POLLIN}], 6, 1000) = 0 (Timeout)
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, 
<br>
events=POLLIN}], 6, 1000) = 0 (Timeout)
<br>
<p>I'm running with:
<br>
mpirun -machinefile machines -am ft-enable-cr ./mpiloop
<br>
the &quot;machines&quot; file simply has the local hostname listed a few times.  
<br>
I've tried 2 and 8.  I can try up to 24 as this node is a pretty big one 
<br>
if it's deemed useful.  Also, there's 256Gb of RAM.  And it's Opteron 6 
<br>
core, 4 socket if that helps.
<br>
<p><p>I initially installed this on a test system with only local harddisks 
<br>
and standard nfs on Centos 5.6 where everything worked as expected.  
<br>
When I moved over to the production system things started breaking.  The 
<br>
filesystem is the major software difference.  The shared filesystems are 
<br>
Ibrix and that is where the above symptoms started to appear.
<br>
<p>I haven't even moved on to multi-node mpi runs as I can't even get this 
<br>
to work for any number of processes on the local machine except if I set 
<br>
the checkpoint directory to /tmp which is on a local xfs harddisk.  If I 
<br>
put the checkpoints on any shared directory, things fail.
<br>
<p>I've tried a number of *_verbose mca parameters and none of them seem to 
<br>
issue any messages at the point of checkpoint, only when I give-up and 
<br>
send kill `pidof mpirun` are there any further messages.
<br>
<p>openmpi is compiled with:
<br>
./configure --prefix=/global/software/openmpi-blcr 
<br>
--with-blcr=/global/software/blcr 
<br>
--with-blcr-libdir=/global/software/blcr/lib/ --with-ft=cr 
<br>
--enable-ft-thread --enable-mpi-threads --with-openib --with-tm
<br>
<p>and blcr only has a prefix to put it in /global/software/blcr otherwise 
<br>
it's vanilla.  Both are compiled with the default gcc.
<br>
<p>One final note, is that occasionally it does succeed and terminate.  But 
<br>
it seems completely random.
<br>
<p>What I'm wondering is has anyone else seen symptoms like this -- 
<br>
especially where the mpirun doesn't quit after a checkpoint with --term 
<br>
but the worker processes do?
<br>
<p>Also, is there some sort of somewhat unusual filesystem semantic that 
<br>
our shared filesystem may not support that ompi/ompi-checkpoint is needing?
<br>
<p>Thanks for any insights you may have.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17415.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Reply:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
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
