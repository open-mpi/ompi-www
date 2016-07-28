<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 08:52:12 2013" -->
<!-- isoreceived="20130818125212" -->
<!-- sent="Sun, 18 Aug 2013 08:51:31 -0400" -->
<!-- isosent="20130818125131" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPkf6e3xtJMmK3w6+a-HmLXhHXq2TjRSuK9rg4xf1T9UfTau3w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
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
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 08:51:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22505.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22505.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22506.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22511.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Thanks for the reply,
<br>
<p><span class="quotelev1">   &gt; My requirements:
</span><br>
<p><span class="quotelev2">&gt;  &gt; 1. Avoid the OS from scheduling tasks on cores 0-7 allocated to my
</span><br>
<span class="quotelev2">&gt; &gt; process.
</span><br>
<span class="quotelev2">&gt; &gt; 2. Avoid rescheduling of processes to other cores.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My solution: I use Linux's CPU-shielding.
</span><br>
<span class="quotelev2">&gt; &gt; [ Man page:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html">http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html</a>
</span><br>
<span class="quotelev2">&gt; &gt; ]
</span><br>
<span class="quotelev2">&gt; &gt; I create a cpuset called &quot;socket1&quot; with cores 8-15 in the dev fs. I
</span><br>
<span class="quotelev2">&gt; &gt; iterate through all the tasks in /dev/cpuset/tasks and copy them to
</span><br>
<span class="quotelev2">&gt; &gt; /dev/cpuset/socket1/tasks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Most of these existing tasks are system tasks. Some actually *want* to
</span><br>
<span class="quotelev1">&gt; run on specific cores outside of socket1. For instance some kernel
</span><br>
<span class="quotelev1">&gt; threads are doing the scheduler load balancing on each core. Others are
</span><br>
<span class="quotelev1">&gt; doing defered work in the kernel that your application may need. I
</span><br>
<span class="quotelev1">&gt; wonder what happens when you move them. The kernel may reject your
</span><br>
<p>request, or it may actually break things.
<br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, when I  move all system tasks, the movable kernel tasks are easily
<br>
moved without complains. The ones that can't be moved return an error code.
<br>
But since their CPU usage is very less, I decide to ignore them anyway.
<br>
Nothing breaks really.
<br>
<p><p><span class="quotelev1">&gt; Also most of these tasks do nothing but sleeping 99.9% of the times
</span><br>
<span class="quotelev1">&gt; anyway. If you're worried about having too many system tasks on your
</span><br>
<span class="quotelev1">&gt; applications' core, just make sure you don't install useless packages
</span><br>
<span class="quotelev1">&gt; (or disable some services at startup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
For my use case, I have ensured that the heavy tasks that I wanted to be
<br>
moved out of socket0 could be moved without complaints. The non-movable
<br>
ones, as I mentioned, were left as is.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you *really* want to have 100% CPU for your application on cores 0-7,
</span><br>
<span class="quotelev1">&gt; be aware that other things such as interrupts will be stealing some CPU
</span><br>
<span class="quotelev1">&gt; cycles anyway.
</span><br>
<p>Noted. As mentioned, the tasks that really matter were safely moved to a
<br>
different socket.
<br>
<p><p><span class="quotelev2">&gt; &gt; I create a cpuset called &quot;socket0&quot; with cores 0-7 .
</span><br>
<span class="quotelev2">&gt; &gt; At the start of the application, (before MPI_Init()), I schedule my
</span><br>
<span class="quotelev2">&gt; &gt; MPI process on the cpuset as follows:
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; sprintf(str,&quot;/bin/echo %d &gt;&gt; /dev/cpuset/socket0/tasks &quot;,mypid);
</span><br>
<span class="quotelev2">&gt; &gt; system(str);
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; In order to ensure that my processes remain bound to the cores, I am
</span><br>
<span class="quotelev2">&gt; &gt; passing the --bind-to-core option to mpirun. I do this, instead of
</span><br>
<span class="quotelev2">&gt; &gt; using sched_setaffinity from within the application. Is there a chance
</span><br>
<span class="quotelev2">&gt; &gt; that mpirun's &quot;binding-to-core&quot; will clash with the above ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you also specified the NUMA node in your cpuset &quot;mems&quot; file
</span><br>
<span class="quotelev1">&gt; too.That's required before the cpuset can be used (otherwise adding a
</span><br>
<p>task will fail). And make sure that the application can add itself to
<br>
<span class="quotelev1">&gt; the cpuset, usually only root can add tasks to cpusets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, I have ensured all of these. The application has enough rights to add
<br>
itself to the cpuset.
<br>
<p><p><p><span class="quotelev1">&gt; And you may want to open/write/close on /dev/cpuset/socket0/tasks and
</span><br>
<span class="quotelev1">&gt; check the return values instead of this system() call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Checked. Everything works as expected.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If all the above works and does not return errors (you should check that
</span><br>
<span class="quotelev1">&gt; your application's PID is in /dev/cpuset/socket0/tasks while running),
</span><br>
<span class="quotelev1">&gt; bind-to-core won't clash with it, at least when using a OMPI that uses
</span><br>
<span class="quotelev1">&gt; hwloc for binding (v1.5.2 or later if I remember correctly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
My concern is that hwloc is used before the application begins executing
<br>
and so mpirun might use it to bind the application to different cores than
<br>
the ones I want them to bind to. If there were a way to specify the cores
<br>
through the hostfile, this problem should be solved. Is there? I sit
<br>
possible to specify the &quot;cores&quot; in the hostfile.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; While this solution seems to work temporarily, I am not sure whether
</span><br>
<span class="quotelev2">&gt; &gt; this is good solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Usually the administrator or PBS/Torque/... creates the cpuset and
</span><br>
<span class="quotelev1">&gt; places tasks in there for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, this is what was done in my case for the kernel tasks.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22503/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe in reply to:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22505.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22505.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22506.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22511.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
