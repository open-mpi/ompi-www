<?
$subject_val = "[OMPI devel] ibm abort test hangs on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 07:02:49 2014" -->
<!-- isoreceived="20140808110249" -->
<!-- sent="Fri, 08 Aug 2014 20:02:43 +0900" -->
<!-- isosent="20140808110243" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] ibm abort test hangs on one node" -->
<!-- id="53E4AE53.2090903_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] ibm abort test hangs on one node<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 07:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15551.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>here is the description of a hang i briefly mentionned a few days ago.
<br>
<p>with the trunk (i did not check 1.8 ...) simply run on one node :
<br>
mpirun -np 2 --mca btl sm,self ./abort
<br>
<p>(the abort test is taken from the ibm test suite : process 0 call
<br>
MPI_Abort while process 1 enters an infinite loop)
<br>
<p>there is a race condition : sometimes it hangs, sometimes it aborts
<br>
nicely as expected.
<br>
when the hang occurs, both abort processes have exited and mpirun waits
<br>
forever
<br>
<p>i made some investigations and i have now a better idea of what happens
<br>
(but i am still clueless on how to fix this)
<br>
<p>when process 0 abort, it :
<br>
- closes the tcp socket connected to mpirun
<br>
- closes the pipe connected to mpirun
<br>
- send SIGCHLD to mpirun
<br>
<p>then on mpirun :
<br>
when SIGCHLD is received, the handler basically writes 17 (the signal
<br>
number) to a socketpair.
<br>
then libevent will return from a poll and here is the race condition,
<br>
basically :
<br>
if revents is non zero for the three fds (socket, pipe and socketpair)
<br>
then the program will abort nicely
<br>
if revents is non zero for both socket and pipe but is zero for the
<br>
socketpair, then the mpirun will hang
<br>
<p>i digged a bit deeper and found that when the event on the socketpair is
<br>
processed, it will end up calling
<br>
odls_base_default_wait_local_proc.
<br>
if proc-&gt;state is 5 (aka ORTE_PROC_STATE_REGISTERED), then the program
<br>
will abort nicely
<br>
*but* if proc-&gt;state is 6 (aka ORTE_PROC_STATE_IOF_COMPLETE), then the
<br>
program will hang
<br>
<p>an other way to put this is that
<br>
when the program aborts nicely, the call sequence is
<br>
odls_base_default_wait_local_proc
<br>
proc_errors(vpid=0)
<br>
proc_errors(vpid=0)
<br>
proc_errors(vpid=1)
<br>
proc_errors(vpid=1)
<br>
<p>when the program hangs, the call sequence is
<br>
proc_errors(vpid=0)
<br>
odls_base_default_wait_local_proc
<br>
proc_errors(vpid=0)
<br>
proc_errors(vpid=1)
<br>
proc_errors(vpid=1)
<br>
<p>i will resume this on Monday unless someone can fix this in the mean
<br>
time :-)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15553.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Previous message:</strong> <a href="15551.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
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
