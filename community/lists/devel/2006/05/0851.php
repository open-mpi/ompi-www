<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May  5 22:46:46 2006" -->
<!-- isoreceived="20060506024646" -->
<!-- sent="Fri, 5 May 2006 22:46:35 -0400" -->
<!-- isosent="20060506024635" -->
<!-- name="Paul Donohue" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="20060506024635.GN10323_at_TopQuark.net" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Paul Donohue (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-05 22:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0927.php">Josh Hursey: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would like to be able to start a non-oversubscribed run of a program in OpenMPI as if it were oversubscribed, so that the processes run in Degraded Mode, such that I have the option to start an additional simultaneous run on the same nodes if necessary.
<br>
(Basically, I have a program that will ask for some data, run for a while, then print some results, then stop and ask for more data.  It takes some time to collect and input the additional data, so I would like to be able to start another instance of the program which can be running while i'm inputting data to the first instance, and can be inputting while the first instance is running).
<br>
<p>Since I have single-processor nodes, the obvious solution would be to set slots=0 for each of my nodes, so that using 1 slot for every run causes the nodes to be oversubscribed.  However, it seems that slots=0 is treated like slots=infinity, so my processes run in Aggressive Mode, and I loose the ability to oversubscribe my node using two independent processes.
<br>
<p>So, I tried setting '--mca mpi_yield_when_idle 1', since this sounded like it was meant to force Degraded Mode.  But, it didn't seem to do anything - my processes still ran in Aggressive Mode.  I skimmed through the source code real quick, and it doesn't look like mpi_yield_when_idle is ever actually used.
<br>
<p>So, could either slots=0 be changed to really mean slots=0, or could mpi_yield_when_idle be implemented so I can force my processes to run in Degraded Mode?
<br>
<p><p>I also noticed another bug in the scheduler:
<br>
hostfile:
<br>
&nbsp;A slots=2 max-slots=2
<br>
&nbsp;B slots=2 max-slots=2
<br>
'mpirun -np 5' quits with an over-subscription error
<br>
'mpirun -np 3 --host B' hangs and just chews up CPU cycles forever
<br>
<p><p>And finally, on <a href="http://www.open-mpi.org/faq/?category=tuning">http://www.open-mpi.org/faq/?category=tuning</a> - 11. How do I tell Open MPI to use processor and/or memory affinity?
<br>
It mentions that OpenMPI will automatically disable processor affinity on oversubscribed nodes.  When I first read it, I made the assumption that processor affinity and Degraded Mode were incompatible.  However, it seems that independent non-oversubscribed processes running in Degraded Mode work fine with processor affinity - it's only actually oversubscribed processes which have problems.  A note that Degraded Mode and Processor Affinity work together even though Processor Affinity and oversubscription do not would be nice.
<br>
<p>Thanks a ton!
<br>
-Paul
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0850.php">Ralf Wildenhues: "Re: [OMPI devel] openmpi-1.0.2 - two bugs in Fortran90 M4-macros"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="0892.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="0897.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0927.php">Josh Hursey: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0928.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
