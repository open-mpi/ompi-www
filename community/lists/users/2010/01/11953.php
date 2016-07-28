<?
$subject_val = "[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 31 22:40:03 2010" -->
<!-- isoreceived="20100201034003" -->
<!-- sent="Sun, 31 Jan 2010 22:39:37 -0500" -->
<!-- isosent="20100201033937" -->
<!-- name="Kapil Arya" -->
<!-- email="kapil_at_[hidden]" -->
<!-- subject="[OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI" -->
<!-- id="b1c06a3b1001311939w5ee2052dmb9f37141a7d2004b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI<br>
<strong>From:</strong> Kapil Arya (<em>kapil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-31 22:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11952.php">Terry Frankcombe: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>As of January 29, 2010, we recently produced a new release (1.1.3) of
<br>
DMTCP (Distributed MultiThreaded CheckPointing). Its web page is at
<br>
<a href="http://dmtcp.sourceforge.net/">http://dmtcp.sourceforge.net/</a> . We (the developers of DMTCP) have
<br>
tried to carefully test this this version of DMTCP on OpenMPI 1.4.1,
<br>
and we believe it to be working well. We would welcome feedback from
<br>
any OpenMPI users who would care to test it on their own applications.
<br>
<p>The DMTCP package provides an alternative solution for
<br>
checkpoint-restart of OpenMPI computations.  Using it is as simple as:
<br>
&nbsp;dmtcp_checkpoint dmtcp_checkpoint mpirun ./hello_mpi
<br>
&nbsp;# Manually checkpoint from any other terminal
<br>
&nbsp;dmtcp_command --checkpoint
<br>
&nbsp;# Execute restart script, which invokes ckpt images that were generated.
<br>
&nbsp;./dmtcp_restart_script.sh
<br>
<p>DMTCP works by creating a separate, stateless checkpoint coordinator,
<br>
independent of OpenMPI's orterun.  All OpenMPI processes are then
<br>
checkpointed, including orterun.  At restart time, a new DMTCP
<br>
checkpoint coordinator can be used.  DMTCP is transparent and runs
<br>
entirely in user space.  There is no modification to the MPI
<br>
application binary, nor to OpenMPI nor to the operating system kernel.
<br>
<p>DMTCP also supports a dmtcpaware interface (application-initiated
<br>
checkpoints), and numerous other features.  At this time, DMTCP
<br>
supports only the use of Ethernet (TCP/IP) and shared memory for
<br>
transport. We are looking at supporting the Infiniband transport layer
<br>
in the future.
<br>
<p>Finally, a bit of history.  DMTCP began with a goal of checkpointing
<br>
distributed desktop applications.  We recognize thefine
<br>
checkpoint-restart solution that already exists in OpenMPI:
<br>
checkpoint-restart service on top of BLCR.  We offer DMTCP as an
<br>
alternative for some unusual situations, such as when the end user
<br>
does not have privilege to add the BLCR kernel module.  We are eager
<br>
to gain feedback from the OpenMPI community.
<br>
<p>Thanks,
<br>
DMTCP Developers
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/11954.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Previous message:</strong> <a href="11952.php">Terry Frankcombe: "Re: [OMPI users] Test OpenMPI on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12024.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12026.php">Jeff Squyres: "Re: [OMPI users] DMTCP: Checkpoint-Restart solution for OpenMPI"</a>
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
