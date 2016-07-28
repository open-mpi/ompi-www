<?
$subject_val = "Re: [OMPI users] debugs for jobs not starting";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 12 10:03:06 2012" -->
<!-- isoreceived="20121012140306" -->
<!-- sent="Fri, 12 Oct 2012 10:03:02 -0400" -->
<!-- isosent="20121012140302" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugs for jobs not starting" -->
<!-- id="CABOsP2Mj9bdphdeL0UnUXHFvMWXHtdd4GjECXLxF5rdeNQRJ4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CABOsP2PbSOVZiYXHJS0aO7+aqaa-F+qndPdsfSBTpk6drfHtrQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] debugs for jobs not starting<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-12 10:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20479.php">Gus Correa: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20479.php">Gus Correa: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
turned on the daemon debugs for orted and noticed this difference
<br>
<p>---- i get this on all the good nodes (ones that actually started xhpl)
<br>
<p>Daemon was launched on node08 - beginning to initialize
<br>
[node08:21230] [[64354,0],1] orted_cmd: received add_local_procs
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],84]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],85]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],86]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],87]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],88]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],89]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],90]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],91]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],92]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],93]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],94]
<br>
[node08:21230] [[64354,0],0] orted_recv: received sync+nidmap from
<br>
local proc [[64354,1],95]
<br>
[node08:21230] [[64354,0],1] orted: up and running - waiting for commands!
<br>
[node08:21230] procdir: /tmp/openmpi-sessions-user_at_node08_0/28/1/1
<br>
[node08:21230] jobdir: /tmp/openmpi-sessions-user_at_node08_/44228/1
<br>
[node08:21230] top: openmpi-sessions-user_at_node08_0
<br>
[node08:21230] tmp: /tmp
<br>
[...repeats the above five lines a bunch of times...]
<br>
<p>--- get this on the ones that do not start xhpl
<br>
<p>Daemon was launched on node06 - beginning to initialize
<br>
[node06:11230] [[46344,0],1] orted: up and running - waiting for commands!
<br>
[node06:11230] procdir: /tmp/openmpi-sessions-user_at_node06_0/28/1/1
<br>
[node06:11230] jobdir: /tmp/openmpi-sessions-user_at_node06_/44228/1
<br>
[node06:11230] top: openmpi-sessions-user_at_node06_0
<br>
[node06:11230] tmp: /tmp
<br>
[...above lines only come out once...]
<br>
<p>On Fri, Oct 12, 2012 at 9:27 AM, Michael Di Domenico
<br>
&lt;mdidomenico4_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; what isn't working is when i fire off an MPI job with over 800 ranks,
</span><br>
<span class="quotelev1">&gt; they don't all actually start up a process
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fe, if i do srun -n 1024 --ntasks-per-node 12 xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then do a 'pgrep xhpl | wc -l', on all of the allocated nodes, not
</span><br>
<span class="quotelev1">&gt; all of them have actually started xhpl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; most will read 12 started processes, but an inconsistent list of nodes
</span><br>
<span class="quotelev1">&gt; will fail to actually start xhpl and stall the whole job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i look at all the nodes allocated to my job, it does start the orte
</span><br>
<span class="quotelev1">&gt; process though
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what i need to figure out, is why the orte process starts, but fails
</span><br>
<span class="quotelev1">&gt; to actually start xhpl on some of the nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unfortunately, the list of nodes that don't start xhpl during my runs
</span><br>
<span class="quotelev1">&gt; changes each time and no hardware errors are being detected.  if i
</span><br>
<span class="quotelev1">&gt; cancel the job and restart the job over and over, eventually one will
</span><br>
<span class="quotelev1">&gt; actually kick off and run to completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i run the process outside of slurm just using openmpi, it seems to
</span><br>
<span class="quotelev1">&gt; behave correctly, so i'm leaning towards a slurm interacting with
</span><br>
<span class="quotelev1">&gt; openmpi problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what i'd like to do is instrument a debug in openmpi that will tell me
</span><br>
<span class="quotelev1">&gt; what openmpi is waiting on in order to kick off the xhpl binary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm testing to see whether it's a psm related problem now, i'll check
</span><br>
<span class="quotelev1">&gt; back if i can narrow the scope a little more
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 11, 2012 at 10:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I'm confused - I don't understand what is and isn't working. What
</span><br>
<span class="quotelev2">&gt;&gt; &quot;next process&quot; isn't starting?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 11, 2012 at 9:41 AM, Michael Di Domenico
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding some additional info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; did an strace on an orted process where xhpl failed to start, i did
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this after the mpirun execution, so i probably missed some output, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it keeps scrolling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; poll([{fd=4, events=POLLIN},{fd=7, events=POLLIN},{fd=8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN},{fd=10, events=POLLIN},{fd=12, events=POLLIN},{fd=13,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN},{fd=14, events=POLLIN},{fd=15, events=POLLIN},{fd=16,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; events=POLLIN}], 9, 1000) = 0 (Timeout)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i didn't see anything useful in /proc under those file descriptors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but perhaps i missed something i don't know to look for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Oct 11, 2012 at 12:06 PM, Michael Di Domenico
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; too add a little more detail, it looks like xhpl is not actually
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; starting on all nodes when i kick off the mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; each time i cancel and restart the job, the nodes that do not start
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; change, so i can't call it a bad node
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; if i disable infiniband with --mca btl self,sm,tcp on occasion i can
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; get xhpl to actually run, but it's not consistent
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; i'm going to check my ethernet network and make sure there's no
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; problems there (could this be an OOB error with mpirun?), on the nodes
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; that fail to start xhpl, i do see the orte process, but nothing in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; logs about why it failed to launch xhpl
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Thu, Oct 11, 2012 at 11:49 AM, Michael Di Domenico
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I'm trying to diagnose an MPI job (in this case xhpl), that fails to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; start when the rank count gets fairly high into the thousands.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; My symptom is the jobs fires up via slurm, and I can see all the xhpl
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; processes on the nodes, but it never kicks over to the next process.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; My question is, what debugs should I turn on to tell me what the
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; system might be waiting on?
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I've checked a bunch of things, but I'm probably overlooking something
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; trivial (which is par for me).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I'm using the Openmpi 1.6.1, Slurm 2.4.2 on CentOS 6.3, with
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Infiniband/PSM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20479.php">Gus Correa: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>In reply to:</strong> <a href="20477.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20479.php">Gus Correa: "Re: [OMPI users] debugs for jobs not starting"</a>
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
