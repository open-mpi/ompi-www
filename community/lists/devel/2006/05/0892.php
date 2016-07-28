<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 08:15:08 2006" -->
<!-- isoreceived="20060524121508" -->
<!-- sent="Wed, 24 May 2006 08:14:57 -0400" -->
<!-- isosent="20060524121457" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3CE1_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Oversubscription/Scheduling Bug" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 08:14:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0891.php">Andre Lichei: "[OMPI devel] behavior of the r2 component"</a>
<li><strong>Maybe in reply to:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Many thanks for your detailed report.  I apparently missed a whole
<br>
boatload of e-mails on 2 May due to a problem with my mail client.  Deep
<br>
apologies for missing this mail!  :-(
<br>
<p>More information below.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Donohue
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 05, 2006 10:47 PM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] Oversubscription/Scheduling Bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to be able to start a non-oversubscribed run of 
</span><br>
<span class="quotelev1">&gt; a program in OpenMPI as if it were oversubscribed, so that 
</span><br>
<span class="quotelev1">&gt; the processes run in Degraded Mode, such that I have the 
</span><br>
<span class="quotelev1">&gt; option to start an additional simultaneous run on the same 
</span><br>
<span class="quotelev1">&gt; nodes if necessary.
</span><br>
<span class="quotelev1">&gt; (Basically, I have a program that will ask for some data, run 
</span><br>
<span class="quotelev1">&gt; for a while, then print some results, then stop and ask for 
</span><br>
<span class="quotelev1">&gt; more data.  It takes some time to collect and input the 
</span><br>
<span class="quotelev1">&gt; additional data, so I would like to be able to start another 
</span><br>
<span class="quotelev1">&gt; instance of the program which can be running while i'm 
</span><br>
<span class="quotelev1">&gt; inputting data to the first instance, and can be inputting 
</span><br>
<span class="quotelev1">&gt; while the first instance is running).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I have single-processor nodes, the obvious solution 
</span><br>
<span class="quotelev1">&gt; would be to set slots=0 for each of my nodes, so that using 1 
</span><br>
<span class="quotelev1">&gt; slot for every run causes the nodes to be oversubscribed.  
</span><br>
<span class="quotelev1">&gt; However, it seems that slots=0 is treated like 
</span><br>
<span class="quotelev1">&gt; slots=infinity, so my processes run in Aggressive Mode, and I 
</span><br>
<span class="quotelev1">&gt; loose the ability to oversubscribe my node using two 
</span><br>
<span class="quotelev1">&gt; independent processes.
</span><br>
<p>I'd prefer to keep the slots=0 synonymous to &quot;infinity&quot;, if only for
<br>
historical reasons (it's also less code to change :-) ).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; So, I tried setting '--mca mpi_yield_when_idle 1', since this 
</span><br>
<span class="quotelev1">&gt; sounded like it was meant to force Degraded Mode.  But, it 
</span><br>
<span class="quotelev1">&gt; didn't seem to do anything - my processes still ran in 
</span><br>
<span class="quotelev1">&gt; Aggressive Mode.  I skimmed through the source code real 
</span><br>
<span class="quotelev1">&gt; quick, and it doesn't look like mpi_yield_when_idle is ever 
</span><br>
<span class="quotelev1">&gt; actually used.
</span><br>
<p>Are you sure?  How did you test this?
<br>
<p>I just did a few tests and it seems to work fine for me.  The MCA param
<br>
&quot;mpi_yield_when_idle&quot; is actually used within the OPAL layer (the name
<br>
is somewhat of an abstraction break -- it reflects the fact that the
<br>
progression engine used to be up in the MPI layer; it got put in OPAL
<br>
when the entire source code tree was split into OPAL, ORTE, and OMPI) in
<br>
opal/runtime/opal_progress.c.
<br>
<p>You can check for whether this param is set or not by using the
<br>
mpi_show_mca_params MCA parameter.  Setting this parameter to 1 will
<br>
make all MPI processes display the current values for their MCA
<br>
parameters to stderr.  For example:
<br>
<p>-----
<br>
shell% mpirun -np 1 --mca mpi_show_mca_params 1 hello | &amp; grep yield
<br>
[foo.example.com:23206] mpi_yield_when_idle=0
<br>
shell% mpirun -np 1 --mca mpi_yield_when_idle 1 --mca
<br>
mpi_show_mca_params 1 hello | &amp; grep yield
<br>
[foo.example.com:23213] mpi_yield_when_idle=1
<br>
-----
<br>
<p>It may be difficult to tell if this behavior is working properly
<br>
because, by definition, if you're in an oversubscribed situation
<br>
(assuming that all your processes are trying to fully utilize the CPU),
<br>
the entire system could be running pretty slowly anyway.
<br>
<p>The difference between aggressive and degraded mode is that we call
<br>
yield() in the middle of tight progression loops in OMPI.  Hence, if
<br>
you're oversubscribed, this actually gives other processes a chance of
<br>
being scheduled / run by the OS.  For example, if you oversubscribe and
<br>
don't have this param set, because OMPI uses tight repetitive loops for
<br>
progression, you will typically see one process completely hogging the
<br>
CPU for a long, long time before the OS finally lets another be
<br>
scheduled.  
<br>
<p>I just did a small test: running 3 processes on a 2-way SMP.  Each MPI
<br>
process sends a short message around in a ring pattern 100 times:
<br>
<p>- mpi_yield_when_idle=1 : 1.4 seconds running time
<br>
- mpi_tield_when_idle=0 : 22.8 seconds running time
<br>
<p>So it can make a big difference.  But don't expect it to completely
<br>
mitigate the effects of oversubscription.
<br>
<p><span class="quotelev1">&gt; I also noticed another bug in the scheduler:
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt;  A slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt;  B slots=2 max-slots=2
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 5' quits with an over-subscription error
</span><br>
<span class="quotelev1">&gt; 'mpirun -np 3 --host B' hangs and just chews up CPU cycles forever
</span><br>
<p>Yoinks; this is definitely a bug.  I've filed a bug in our tracker to
<br>
get this fixed.  Thanks for reporting it.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; And finally, on <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a> 
</span><br>
<span class="quotelev1">&gt; - 11. How do I tell Open MPI to use processor and/or memory affinity?
</span><br>
<span class="quotelev1">&gt; It mentions that OpenMPI will automatically disable processor 
</span><br>
<span class="quotelev1">&gt; affinity on oversubscribed nodes.  When I first read it, I 
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; made the assumption that processor affinity and Degraded Mode 
</span><br>
<span class="quotelev1">&gt; were incompatible.  However, it seems that independent 
</span><br>
<span class="quotelev1">&gt; non-oversubscribed processes running in Degraded Mode work 
</span><br>
<span class="quotelev1">&gt; fine with processor affinity - it's only actually 
</span><br>
<span class="quotelev1">&gt; oversubscribed processes which have problems.  A note that 
</span><br>
<span class="quotelev1">&gt; Degraded Mode and Processor Affinity work together even 
</span><br>
<span class="quotelev1">&gt; though Processor Affinity and oversubscription do not would be nice.
</span><br>
<p>Good point.  I'll update the FAQ later today; thanks!
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0891.php">Andre Lichei: "[OMPI devel] behavior of the r2 component"</a>
<li><strong>Maybe in reply to:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0893.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
