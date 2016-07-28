<?
$subject_val = "Re: [OMPI users] ompi-checkpoint problem on shared storage";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:24:48 2011" -->
<!-- isoreceived="20110923192448" -->
<!-- sent="Fri, 23 Sep 2011 15:24:43 -0400" -->
<!-- isosent="20110923192443" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint problem on shared storage" -->
<!-- id="CAANzjE=H-7e2iUncW7CW9GwaX6J97G-hfy7pmEt+PGpeP94r1w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7CD949.9070903_at_ucalgary.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint problem on shared storage<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:24:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>In reply to:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Reply:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like there is a race happening in the shutdown of the
<br>
processes. I wonder if the app is shutting down in a way that mpirun
<br>
does not quite like.
<br>
<p>I have not tested the C/R functionality in the 1.4 series in a long
<br>
time. Can you give it a try with the 1.5 series, and see if there is
<br>
any variation? You might also try the trunk, but I have not tested it
<br>
recently enough to know if things are still working correctly or not
<br>
(have others?).
<br>
<p>I'll file a ticket so we do not lose track of the bug. Hopefully we
<br>
will get to it soon.
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2872">https://svn.open-mpi.org/trac/ompi/ticket/2872</a>
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Fri, Sep 23, 2011 at 3:08 PM, Dave Schulz &lt;dschulz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to figure out an issue with ompi-checkpoint/blcr. &#160;The
</span><br>
<span class="quotelev1">&gt; symptoms seem to be related to what filesystem the
</span><br>
<span class="quotelev1">&gt; snapc_base_global_snapshot_dir is located on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wrote a simple mpi program where rank 0 sends to 1, 1 to 2, etc. then the
</span><br>
<span class="quotelev1">&gt; highest sends to 0. then it waits 1 sec and repeats.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using openmpi-1.4.3 and when I run &quot;ompi-checkpoint --term
</span><br>
<span class="quotelev1">&gt; &lt;pidofmpirun&gt;&quot; on the shared filesystems, the ompi-checkpoint returns a
</span><br>
<span class="quotelev1">&gt; checkpoint reference, the worker processes go away, but the mpirun remains
</span><br>
<span class="quotelev1">&gt; but is stuck (It dies right away if I run kill on it -- so it's responding
</span><br>
<span class="quotelev1">&gt; to SIGTERM). &#160;If I attach an strace to the mpirun, I get the following from
</span><br>
<span class="quotelev1">&gt; strace forever:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev1">&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev1">&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev1">&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev1">&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running with:
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile machines -am ft-enable-cr ./mpiloop
</span><br>
<span class="quotelev1">&gt; the &quot;machines&quot; file simply has the local hostname listed a few times. &#160;I've
</span><br>
<span class="quotelev1">&gt; tried 2 and 8. &#160;I can try up to 24 as this node is a pretty big one if it's
</span><br>
<span class="quotelev1">&gt; deemed useful. &#160;Also, there's 256Gb of RAM. &#160;And it's Opteron 6 core, 4
</span><br>
<span class="quotelev1">&gt; socket if that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I initially installed this on a test system with only local harddisks and
</span><br>
<span class="quotelev1">&gt; standard nfs on Centos 5.6 where everything worked as expected. &#160;When I
</span><br>
<span class="quotelev1">&gt; moved over to the production system things started breaking. &#160;The filesystem
</span><br>
<span class="quotelev1">&gt; is the major software difference. &#160;The shared filesystems are Ibrix and that
</span><br>
<span class="quotelev1">&gt; is where the above symptoms started to appear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't even moved on to multi-node mpi runs as I can't even get this to
</span><br>
<span class="quotelev1">&gt; work for any number of processes on the local machine except if I set the
</span><br>
<span class="quotelev1">&gt; checkpoint directory to /tmp which is on a local xfs harddisk. &#160;If I put the
</span><br>
<span class="quotelev1">&gt; checkpoints on any shared directory, things fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried a number of *_verbose mca parameters and none of them seem to
</span><br>
<span class="quotelev1">&gt; issue any messages at the point of checkpoint, only when I give-up and send
</span><br>
<span class="quotelev1">&gt; kill `pidof mpirun` are there any further messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi is compiled with:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/global/software/openmpi-blcr
</span><br>
<span class="quotelev1">&gt; --with-blcr=/global/software/blcr
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/global/software/blcr/lib/ --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread --enable-mpi-threads --with-openib --with-tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and blcr only has a prefix to put it in /global/software/blcr otherwise it's
</span><br>
<span class="quotelev1">&gt; vanilla. &#160;Both are compiled with the default gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One final note, is that occasionally it does succeed and terminate. &#160;But it
</span><br>
<span class="quotelev1">&gt; seems completely random.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I'm wondering is has anyone else seen symptoms like this -- especially
</span><br>
<span class="quotelev1">&gt; where the mpirun doesn't quit after a checkpoint with --term but the worker
</span><br>
<span class="quotelev1">&gt; processes do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, is there some sort of somewhat unusual filesystem semantic that our
</span><br>
<span class="quotelev1">&gt; shared filesystem may not support that ompi/ompi-checkpoint is needing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any insights you may have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17417.php">Guilherme V: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>In reply to:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Reply:</strong> <a href="17455.php">Dave Schulz: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
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
