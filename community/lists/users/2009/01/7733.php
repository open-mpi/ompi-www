<?
$subject_val = "[OMPI users] Restarting from a checkpoint (OMPI 1.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 06:07:19 2009" -->
<!-- isoreceived="20090120110719" -->
<!-- sent="Tue, 20 Jan 2009 12:07:12 +0100" -->
<!-- isosent="20090120110712" -->
<!-- name="Gregor Dschung" -->
<!-- email="gregor.dschung_at_[hidden]" -->
<!-- subject="[OMPI users] Restarting from a checkpoint (OMPI 1.3)" -->
<!-- id="4975B060.8010703_at_itwm.fraunhofer.de" -->
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
<strong>Subject:</strong> [OMPI users] Restarting from a checkpoint (OMPI 1.3)<br>
<strong>From:</strong> Gregor Dschung (<em>gregor.dschung_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 06:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7732.php">Tim Mattox: "[OMPI users] Announcing the release of Open MPI version 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7748.php">Josh Hursey: "Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<li><strong>Reply:</strong> <a href="7748.php">Josh Hursey: "Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey,
<br>
<p>I'm trying the new released Open MPI 1.3 in conjunction with BLCR to
<br>
provide the checkpoint/restart-feature.
<br>
<p>Configured with ./configure --prefix=/usr/local --with-ft=cr
<br>
--enable-ft-thread --enable-mpi-threads --with-blcr=/
<br>
<p>A MPI-job on a single machine (several threads) is checkpointed and
<br>
restarted very well.
<br>
<p>The checkpoint of a MPI-job across two hosts (ethernet, tcp) is also
<br>
done without warnings or errors (the homedir and the directory, where
<br>
the MPI-Application is, are shared with NFS). The restart works too, but
<br>
all threads are only started on the host, where I enter the ompi-restart
<br>
command. Even if I add the -hostfile argument to ompi-restart, only the
<br>
one host is used.
<br>
<p>Does anybody has a hint?
<br>
<p>Thanks,
<br>
Gregor
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7734.php">jody: "[OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7732.php">Tim Mattox: "[OMPI users] Announcing the release of Open MPI version 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7748.php">Josh Hursey: "Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
<li><strong>Reply:</strong> <a href="7748.php">Josh Hursey: "Re: [OMPI users] Restarting from a checkpoint (OMPI 1.3)"</a>
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
