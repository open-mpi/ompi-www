<?
$subject_val = "[OMPI users] Strange problem with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 23:01:46 2008" -->
<!-- isoreceived="20080711030146" -->
<!-- sent="Thu, 10 Jul 2008 23:04:30 -0400" -->
<!-- isosent="20080711030430" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="[OMPI users] Strange problem with 1.2.6" -->
<!-- id="4876CDBE.2030004_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> [OMPI users] Strange problem with 1.2.6<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 23:04:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6044.php">Matthias Hovestadt: "[OMPI users] OMPI and mpipov"</a>
<li><strong>Previous message:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks:
<br>
<p>&nbsp;&nbsp;&nbsp;I am running into a strange problem with Open-MPI 1.2.6, built using 
<br>
gcc/g++ and intel ifort 10.1.015, atop an OFED stack (1.1-ish).  The 
<br>
problem appears to be that if I run using the tcp btl, disabling sm and 
<br>
openib, the run completes successfully (on several different platforms), 
<br>
and does so repeatably.
<br>
<p>&nbsp;&nbsp;&nbsp;Similarly, if I enable either openib or sm btl, the run does not 
<br>
complete, hanging at different places.
<br>
<p>&nbsp;&nbsp;&nbsp;An strace of the master thread while it is hanging shows it in a 
<br>
tight loop
<br>
<p>Process 15547 attached - interrupt to quit
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART, 
<br>
0x2b8d766be130}, NULL, 8) = 0
<br>
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=
<br>
POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART, 
<br>
0x2b8d766be130}, NULL, 8) = 0
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART, 
<br>
0x2b8d766be130}, NULL, 8) = 0
<br>
rt_sigprocmask(SIG_UNBLOCK, [CHLD], NULL, 8) = 0
<br>
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, 
<br>
events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=
<br>
POLLIN}, {fd=10, events=POLLIN}], 6, 0) = 0
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
<br>
rt_sigaction(SIGCHLD, {0x2b8d7587f9b2, [CHLD], SA_RESTORER|SA_RESTART, 
<br>
0x2b8d766be130}, NULL, 8) = 0
<br>
rt_sigprocmask(SIG_BLOCK, [CHLD], NULL, 8) = 0
<br>
<p>The code ran fine about 18 months ago with earlier OpenMPI.  This is 
<br>
identical source and data to what is known to work, and demonstrated to 
<br>
work on a few different platforms.
<br>
<p>Posing the question on Beowulf, some suggested turning off sm and 
<br>
openib.  So this run works repeatedly when we do as indicated.  The 
<br>
suggestion was that there was some sort of buffer size issue on the sm 
<br>
device.
<br>
<p>Turning off sm and tcp, leaving openib also appears to loop forever.
<br>
<p>So, with all this, are there any sort of tunables that I should be 
<br>
playing with?
<br>
<p>I tried adusting a few things  by setting some mca parameters in 
<br>
$HOME/.openmpi/mca-params.conf , but this had no effect (and the mpirun 
<br>
claimed it was going to ignore those anyway).
<br>
<p>Any clues?  Thanks.
<br>
<p>Joe
<br>
<pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6044.php">Matthias Hovestadt: "[OMPI users] OMPI and mpipov"</a>
<li><strong>Previous message:</strong> <a href="6042.php">Ralph Castain: "Re: [OMPI users] Number of file handles limiting the number off processes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="6077.php">Jeff Squyres: "Re: [OMPI users] Strange problem with 1.2.6"</a>
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
