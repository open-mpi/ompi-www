<?
$subject_val = "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 17 23:35:32 2013" -->
<!-- isoreceived="20130818033532" -->
<!-- sent="Sat, 17 Aug 2013 23:34:52 -0400" -->
<!-- isosent="20130818033452" -->
<!-- name="Siddhartha Jana" -->
<!-- email="siddharthajana24_at_[hidden]" -->
<!-- subject="[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="CAPkf6e09HPcKX7QgXr1VSLbeebU-7WqT4vnSvaTNsSbrhjA76g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Siddhartha Jana (<em>siddharthajana24_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-17 23:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22500.php">Richard Haney: "[OMPI users] Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22508.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22509.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>My requirement:
<br>
1. Avoid the OS from scheduling tasks on cores 0-7 allocated to my process.
<br>
2. Avoid rescheduling of processes to other cores.
<br>
<p>My solution: I use Linux's CPU-shielding.
<br>
[ Man page:
<br>
<a href="http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html">http://www.kernel.org/doc/man-pages/online/pages/man7/cpuset.7.html</a>
<br>
]
<br>
I create a cpuset called &quot;socket1&quot; with cores 8-15 in the dev fs. I iterate
<br>
through all the tasks in /dev/cpuset/tasks and copy them to
<br>
/dev/cpuset/socket1/tasks
<br>
I create a cpuset called &quot;socket0&quot; with cores 0-7 .
<br>
At the start of the application, (before MPI_Init()), I schedule my MPI
<br>
process on the cpuset as follows:
<br>
------------------------------------------------------
<br>
sprintf(str,&quot;/bin/echo %d &gt;&gt; /dev/cpuset/socket0/tasks &quot;,mypid);
<br>
system(str);
<br>
------------------------------------------------------
<br>
In order to ensure that my processes remain bound to the cores, I am
<br>
passing the --bind-to-core option to mpirun. I do this, instead of using
<br>
sched_setaffinity from within the application. Is there a chance that
<br>
mpirun's &quot;binding-to-core&quot; will clash with the above ?
<br>
<p>While this solution seems to work temporarily, I am not sure whether this
<br>
is good solution, given mpirun's own techniques of binding to cores,
<br>
scheduling processes by slot, et al.
<br>
<p>Will mpirun's bind-by-slot technique guarantee cpu shielding?
<br>
<p>I would be highly obliged if some one could direct me to the right
<br>
direction.
<br>
<p>Many thanks
<br>
Sincerely
<br>
Siddhartha Jana
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22500.php">Richard Haney: "[OMPI users] Assembler instruction errors for push and pop during make"</a>
<li><strong>Previous message:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22501.php">John Hearns: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Reply:</strong> <a href="22502.php">Brice Goglin: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22508.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22509.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22514.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Maybe reply:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
