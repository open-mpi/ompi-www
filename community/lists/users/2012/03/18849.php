<?
$subject_val = "Re: [OMPI users] MPI daemon died unexpectedly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 04:48:48 2012" -->
<!-- isoreceived="20120327084848" -->
<!-- sent="Tue, 27 Mar 2012 09:48:44 +0100" -->
<!-- isosent="20120327084844" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon died unexpectedly" -->
<!-- id="CAPqNE2ULYsCy0-OdNt8YvGjuwQdUC4-_VP+O0tjBvpa1mvnPaw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGYuqpbO1SB7RgPpWd-8jkcVeqEUXOxtByV-_g-mjE13vu31WA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI daemon died unexpectedly<br>
<strong>From:</strong> John Hearns (<em>hearnsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 04:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you checked the system logs on the machines where this is running?
<br>
Is it perhaps that the processes use lots of memory and the Out Of
<br>
Memory (OOM) killer is killing them?
<br>
Also check all nodes for left-over 'orphan' processes which are still
<br>
running after a job finishes - these should be killed or the node
<br>
rebooted.
<br>
<p>On 27/03/2012, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have an MPI application using ScaLAPACK routines. I'm running it on
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.3. I'm using mpirun to launch less than 100 processes. I'm
</span><br>
<span class="quotelev1">&gt; using it quite extensively for almost two years and it almost always
</span><br>
<span class="quotelev1">&gt; works fine. However, once every 3-4 months I get the following error
</span><br>
<span class="quotelev1">&gt; during the execution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It says that the daemon died while attempting to launch, but my
</span><br>
<span class="quotelev1">&gt; application (MPI grid) was running for about 14 minutes before it
</span><br>
<span class="quotelev1">&gt; failed. I can say that based on the log messages I'm producing during
</span><br>
<span class="quotelev1">&gt; the execution of my application. There is no more information from
</span><br>
<span class="quotelev1">&gt; mpirun. One more thing I know is that mpirun exit status was 1, but I
</span><br>
<span class="quotelev1">&gt; guess it is not very helpful. There are no core files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate any suggestions on how to debug this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18848.php">Grzegorz Maj: "[OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
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
