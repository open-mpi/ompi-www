<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 03:36:13 2013" -->
<!-- isoreceived="20130818073613" -->
<!-- sent="Sun, 18 Aug 2013 09:36:10 +0200" -->
<!-- isosent="20130818073610" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="5210796A.6050506_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPkf6e09HPcKX7QgXr1VSLbeebU-7WqT4vnSvaTNsSbrhjA76g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 03:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/08/2013 05:34, Siddhartha Jana a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My requirement: 
</span><br>
<span class="quotelev1">&gt; 1. Avoid the OS from scheduling tasks on cores 0-7 allocated to my
</span><br>
<span class="quotelev1">&gt; process. 
</span><br>
<span class="quotelev1">&gt; 2. Avoid rescheduling of processes to other cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My solution: I use Linux's CPU-shielding. 
</span><br>
<span class="quotelev1">&gt; [ Man page: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html">http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html</a> 
</span><br>
<span class="quotelev1">&gt; ]
</span><br>
<span class="quotelev1">&gt; I create a cpuset called &quot;socket1&quot; with cores 8-15 in the dev fs. I
</span><br>
<span class="quotelev1">&gt; iterate through all the tasks in /dev/cpuset/tasks and copy them to
</span><br>
<span class="quotelev1">&gt; /dev/cpuset/socket1/tasks
</span><br>
<p>Hello,
<br>
<p>Most of these existing tasks are system tasks. Some actually *want* to
<br>
run on specific cores outside of socket1. For instance some kernel
<br>
threads are doing the scheduler load balancing on each core. Others are
<br>
doing defered work in the kernel that your application may need. I
<br>
wonder what happens when you move them. The kernel may reject your
<br>
request, or it may actually break things.
<br>
<p>Also most of these tasks do nothing but sleeping 99.9% of the times
<br>
anyway. If you're worried about having too many system tasks on your
<br>
applications' core, just make sure you don't install useless packages
<br>
(or disable some services at startup).
<br>
<p>If you *really* want to have 100% CPU for your application on cores 0-7,
<br>
be aware that other things such as interrupts will be stealing some CPU
<br>
cycles anyway. You could move these to cores 8-15 as well, but that
<br>
seems overkill to me.
<br>
<p><span class="quotelev1">&gt; I create a cpuset called &quot;socket0&quot; with cores 0-7 .
</span><br>
<span class="quotelev1">&gt; At the start of the application, (before MPI_Init()), I schedule my
</span><br>
<span class="quotelev1">&gt; MPI process on the cpuset as follows:
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; sprintf(str,&quot;/bin/echo %d &gt;&gt; /dev/cpuset/socket0/tasks &quot;,mypid);
</span><br>
<span class="quotelev1">&gt; system(str);
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; In order to ensure that my processes remain bound to the cores, I am
</span><br>
<span class="quotelev1">&gt; passing the --bind-to-core option to mpirun. I do this, instead of
</span><br>
<span class="quotelev1">&gt; using sched_setaffinity from within the application. Is there a chance
</span><br>
<span class="quotelev1">&gt; that mpirun's &quot;binding-to-core&quot; will clash with the above ?
</span><br>
<p>Make sure you also specified the NUMA node in your cpuset &quot;mems&quot; file
<br>
too. That's required before the cpuset can be used (otherwise adding a
<br>
task will fail). And make sure that the application can add itself to
<br>
the cpuset, usually only root can add tasks to cpusets.
<br>
<p>And you may want to open/write/close on /dev/cpuset/socket0/tasks and
<br>
check the return values instead of this system() call.
<br>
<p>If all the above works and does not return errors (you should check that
<br>
your application's PID is in /dev/cpuset/socket0/tasks while running),
<br>
bind-to-core won't clash with it, at least when using a OMPI that uses
<br>
hwloc for binding (v1.5.2 or later if I remember correctly).
<br>
<p><span class="quotelev1">&gt; While this solution seems to work temporarily, I am not sure whether
</span><br>
<span class="quotelev1">&gt; this is good solution.
</span><br>
<p>Usually the administrator or PBS/Torque/... creates the cpuset and
<br>
places tasks in there for you.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
