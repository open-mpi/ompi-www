<?
$subject_val = "Re: [OMPI users] MPI daemon died unexpectedly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 07:06:29 2012" -->
<!-- isoreceived="20120327110629" -->
<!-- sent="Tue, 27 Mar 2012 13:05:51 +0200" -->
<!-- isosent="20120327110551" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon died unexpectedly" -->
<!-- id="CAGYuqpatLsJfz0wCeLJYj9Wr6Vu2JWv4h60=uOuZStFAbAs=Tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPqNE2ULYsCy0-OdNt8YvGjuwQdUC4-_VP+O0tjBvpa1mvnPaw_at_mail.gmail.com" -->
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
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-27 07:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John, thank you for your reply.
<br>
<p>I checked the system logs and there are no signs of oom killer.
<br>
<p>What do you mean by cleaning 'orphan' processes? Should I check if
<br>
there are any processes left after each job execution? I have always
<br>
been assuming that when mpirun terminates, everything is cleaned up.
<br>
Currently there are no processes left on the nodes. The failure
<br>
happend on Friday and after that tens of similar jobs completed
<br>
successfully.
<br>
<p>Regards,
<br>
Grzegorz Maj
<br>
<p>2012/3/27 John Hearns &lt;hearnsj_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Have you checked the system logs on the machines where this is running?
</span><br>
<span class="quotelev1">&gt; Is it perhaps that the processes use lots of memory and the Out Of
</span><br>
<span class="quotelev1">&gt; Memory (OOM) killer is killing them?
</span><br>
<span class="quotelev1">&gt; Also check all nodes for left-over 'orphan' processes which are still
</span><br>
<span class="quotelev1">&gt; running after a job finishes - these should be killed or the node
</span><br>
<span class="quotelev1">&gt; rebooted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 27/03/2012, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I have an MPI application using ScaLAPACK routines. I'm running it on
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.3. I'm using mpirun to launch less than 100 processes. I'm
</span><br>
<span class="quotelev2">&gt;&gt; using it quite extensively for almost two years and it almost always
</span><br>
<span class="quotelev2">&gt;&gt; works fine. However, once every 3-4 months I get the following error
</span><br>
<span class="quotelev2">&gt;&gt; during the execution:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
</span><br>
<span class="quotelev2">&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev2">&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev2">&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev2">&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev2">&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It says that the daemon died while attempting to launch, but my
</span><br>
<span class="quotelev2">&gt;&gt; application (MPI grid) was running for about 14 minutes before it
</span><br>
<span class="quotelev2">&gt;&gt; failed. I can say that based on the log messages I'm producing during
</span><br>
<span class="quotelev2">&gt;&gt; the execution of my application. There is no more information from
</span><br>
<span class="quotelev2">&gt;&gt; mpirun. One more thing I know is that mpirun exit status was 1, but I
</span><br>
<span class="quotelev2">&gt;&gt; guess it is not very helpful. There are no core files.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would appreciate any suggestions on how to debug this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Previous message:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18849.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>Reply:</strong> <a href="18851.php">John Hearns: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
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
