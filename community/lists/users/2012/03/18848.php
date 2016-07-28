<?
$subject_val = "[OMPI users] MPI daemon died unexpectedly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 04:15:06 2012" -->
<!-- isoreceived="20120327081506" -->
<!-- sent="Tue, 27 Mar 2012 10:14:30 +0200" -->
<!-- isosent="20120327081430" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] MPI daemon died unexpectedly" -->
<!-- id="CAGYuqpbO1SB7RgPpWd-8jkcVeqEUXOxtByV-_g-mjE13vu31WA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI daemon died unexpectedly<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 04:14:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18847.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I have an MPI application using ScaLAPACK routines. I'm running it on
<br>
OpenMPI 1.4.3. I'm using mpirun to launch less than 100 processes. I'm
<br>
using it quite extensively for almost two years and it almost always
<br>
works fine. However, once every 3-4 months I get the following error
<br>
during the execution:
<br>
<p>--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
<p>It says that the daemon died while attempting to launch, but my
<br>
application (MPI grid) was running for about 14 minutes before it
<br>
failed. I can say that based on the log messages I'm producing during
<br>
the execution of my application. There is no more information from
<br>
mpirun. One more thing I know is that mpirun exit status was 1, but I
<br>
guess it is not very helpful. There are no core files.
<br>
<p>I would appreciate any suggestions on how to debug this issue.
<br>
<p>Regards,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18847.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
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
