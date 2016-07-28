<?
$subject_val = "Re: [OMPI users] ompi-checkpoint problem on shared storage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 17:23:27 2011" -->
<!-- isoreceived="20110927212327" -->
<!-- sent="Tue, 27 Sep 2011 15:22:56 -0600" -->
<!-- isosent="20110927212256" -->
<!-- name="Dave Schulz" -->
<!-- email="dschulz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint problem on shared storage" -->
<!-- id="4E823EB0.4020402_at_ucalgary.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAANzjE=H-7e2iUncW7CW9GwaX6J97G-hfy7pmEt+PGpeP94r1w_at_mail.gmail.com" -->
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
<strong>From:</strong> Dave Schulz (<em>dschulz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 17:22:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh,
<br>
<p>Just yesterday I stumbled upon another interesting detail about this 
<br>
issue.  While reconfiguring things, I accidentally ran as root, and the 
<br>
checkpointing all succeeded.  I'm not sure though how to go about 
<br>
finding what file things are hanging up on.  I've compared straces as 
<br>
root and user and can't see anything out of the ordinary that root can 
<br>
read or if necessary write to.  My /tmp is 777 sticky, my checkpoint 
<br>
directory (currently ~) is writable by the user.  The only files that 
<br>
root can read but users can't that appear in the strace are these files:
<br>
<p>open(&quot;/sys/devices/system/cpu/cpu1/online&quot;, O_RDONLY) = 3
<br>
<p>Root receives a file descriptor as shown above, users get this:
<br>
<p>open(&quot;/sys/devices/system/cpu/cpu2/online&quot;, O_RDONLY) = -1 EACCES 
<br>
(Permission denied)
<br>
<p>Which is what would be expected as the perms on the &quot;online&quot; files are 
<br>
600.  I don't know if this is actually a problem or not.  I did try on a 
<br>
&quot;sacrificial&quot; node to change the perms to 644, but it didn't help.  So I 
<br>
don't really think this is related to the cause.  I'm simply listing the 
<br>
difference that I found between the open syscalls when running as root 
<br>
vs. running as a user.
<br>
<p>Finally, I tried installing a vanilla CentOS 5.6 machine on the same 
<br>
hardware, Installing openmpi 1.4.3, blcr 0.8.3, Mellanox OFED 1.5.3 and 
<br>
using a vanilla NFS server on which I see the same symptoms.
<br>
<p>So, contrary to what was previously thought, this really isn't caused by 
<br>
the particular type of network filesystem.  Still, things work perfectly 
<br>
to /tmp (for the checkpoint directory).  I can still read the 
<br>
application and input from the NFS server.
<br>
<p>I also noted that when I run with lots of verbosity, I get messages like 
<br>
this:
<br>
<p>Snapshot Ref.:   0 ompi_global_snapshot_9333.ckpt
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 9338 on node b15 exited on 
<br>
signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpirun during cleanup)
<br>
[b15:09333] sess_dir_finalize: job session dir not empty - leaving
<br>
[b15:09333] snapc:full: module_finalize()
<br>
[b15:09333] snapc:full: close()
<br>
[b15:09333] mca: base: close: component full closed
<br>
[b15:09333] mca: base: close: unloading component full
<br>
[b15:09333] filem:rsh: close()
<br>
[b15:09333] mca: base: close: component rsh closed
<br>
[b15:09333] mca: base: close: unloading component rsh
<br>
[b15:09333] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status 0
<br>
<p>Specifically the sess_dir_finalize line.  It doesn't seem to be cleaning 
<br>
itself up.  it leaves these in the /tmp directory for every run (even 
<br>
successfully checkpointed and terminated runs):
<br>
<p>prw-r----- 1 root root    0 Sep 27 15:21 opal_cr_prog_read.9584
<br>
prw-r----- 1 root root    0 Sep 27 15:21 opal_cr_prog_read.9585
<br>
prw-r----- 1 root root    0 Sep 27 15:21 opal_cr_prog_write.9584
<br>
prw-r----- 1 root root    0 Sep 27 15:21 opal_cr_prog_write.9585
<br>
<p>I believe those are pipes.  But why they aren't cleaned up after the 
<br>
checkpoint completes, I don't understand as the job may be restarted on 
<br>
a different batch of nodes, so these will start accumulating over time.
<br>
<p>Any ideas?
<br>
<p>Thanks
<br>
-Dave
<br>
<p><p>On 09/23/2011 01:24 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; It sounds like there is a race happening in the shutdown of the
</span><br>
<span class="quotelev1">&gt; processes. I wonder if the app is shutting down in a way that mpirun
</span><br>
<span class="quotelev1">&gt; does not quite like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not tested the C/R functionality in the 1.4 series in a long
</span><br>
<span class="quotelev1">&gt; time. Can you give it a try with the 1.5 series, and see if there is
</span><br>
<span class="quotelev1">&gt; any variation? You might also try the trunk, but I have not tested it
</span><br>
<span class="quotelev1">&gt; recently enough to know if things are still working correctly or not
</span><br>
<span class="quotelev1">&gt; (have others?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll file a ticket so we do not lose track of the bug. Hopefully we
</span><br>
<span class="quotelev1">&gt; will get to it soon.
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2872">https://svn.open-mpi.org/trac/ompi/ticket/2872</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 23, 2011 at 3:08 PM, Dave Schulz&lt;dschulz_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Everyone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to figure out an issue with ompi-checkpoint/blcr.  The
</span><br>
<span class="quotelev2">&gt;&gt; symptoms seem to be related to what filesystem the
</span><br>
<span class="quotelev2">&gt;&gt; snapc_base_global_snapshot_dir is located on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wrote a simple mpi program where rank 0 sends to 1, 1 to 2, etc. then the
</span><br>
<span class="quotelev2">&gt;&gt; highest sends to 0. then it waits 1 sec and repeats.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi-1.4.3 and when I run &quot;ompi-checkpoint --term
</span><br>
<span class="quotelev2">&gt;&gt; &lt;pidofmpirun&gt;&quot; on the shared filesystems, the ompi-checkpoint returns a
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint reference, the worker processes go away, but the mpirun remains
</span><br>
<span class="quotelev2">&gt;&gt; but is stuck (It dies right away if I run kill on it -- so it's responding
</span><br>
<span class="quotelev2">&gt;&gt; to SIGTERM).  If I attach an strace to the mpirun, I get the following from
</span><br>
<span class="quotelev2">&gt;&gt; strace forever:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev2">&gt;&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev2">&gt;&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev2">&gt;&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev2">&gt;&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
</span><br>
<span class="quotelev2">&gt;&gt; {fd=8, events=POLLIN}, {fd=10, events=POLLIN}, {fd=0, events=POLLIN}], 6,
</span><br>
<span class="quotelev2">&gt;&gt; 1000) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running with:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -machinefile machines -am ft-enable-cr ./mpiloop
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;machines&quot; file simply has the local hostname listed a few times.  I've
</span><br>
<span class="quotelev2">&gt;&gt; tried 2 and 8.  I can try up to 24 as this node is a pretty big one if it's
</span><br>
<span class="quotelev2">&gt;&gt; deemed useful.  Also, there's 256Gb of RAM.  And it's Opteron 6 core, 4
</span><br>
<span class="quotelev2">&gt;&gt; socket if that helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I initially installed this on a test system with only local harddisks and
</span><br>
<span class="quotelev2">&gt;&gt; standard nfs on Centos 5.6 where everything worked as expected.  When I
</span><br>
<span class="quotelev2">&gt;&gt; moved over to the production system things started breaking.  The filesystem
</span><br>
<span class="quotelev2">&gt;&gt; is the major software difference.  The shared filesystems are Ibrix and that
</span><br>
<span class="quotelev2">&gt;&gt; is where the above symptoms started to appear.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't even moved on to multi-node mpi runs as I can't even get this to
</span><br>
<span class="quotelev2">&gt;&gt; work for any number of processes on the local machine except if I set the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint directory to /tmp which is on a local xfs harddisk.  If I put the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints on any shared directory, things fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tried a number of *_verbose mca parameters and none of them seem to
</span><br>
<span class="quotelev2">&gt;&gt; issue any messages at the point of checkpoint, only when I give-up and send
</span><br>
<span class="quotelev2">&gt;&gt; kill `pidof mpirun` are there any further messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi is compiled with:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/global/software/openmpi-blcr
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr=/global/software/blcr
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/global/software/blcr/lib/ --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread --enable-mpi-threads --with-openib --with-tm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and blcr only has a prefix to put it in /global/software/blcr otherwise it's
</span><br>
<span class="quotelev2">&gt;&gt; vanilla.  Both are compiled with the default gcc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One final note, is that occasionally it does succeed and terminate.  But it
</span><br>
<span class="quotelev2">&gt;&gt; seems completely random.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I'm wondering is has anyone else seen symptoms like this -- especially
</span><br>
<span class="quotelev2">&gt;&gt; where the mpirun doesn't quit after a checkpoint with --term but the worker
</span><br>
<span class="quotelev2">&gt;&gt; processes do?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, is there some sort of somewhat unusual filesystem semantic that our
</span><br>
<span class="quotelev2">&gt;&gt; shared filesystem may not support that ompi/ompi-checkpoint is needing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any insights you may have.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
===============================
Dave Schulz
Research Computing Services
Information Technologies
University of Calgary
dschulz_at_[hidden]
(403) 220-2102
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17456.php">Jeff Squyres: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>Previous message:</strong> <a href="17454.php">Prentice Bisbal: "Re: [OMPI users] Role of ethernet interfaces of startup of openmpi job using IB"</a>
<li><strong>In reply to:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
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
