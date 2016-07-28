<?
$subject_val = "Re: [OMPI users] MPI daemon died unexpectedly";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 27 10:21:40 2012" -->
<!-- isoreceived="20120327142140" -->
<!-- sent="Tue, 27 Mar 2012 15:21:35 +0100" -->
<!-- isosent="20120327142135" -->
<!-- name="John Hearns" -->
<!-- email="hearnsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI daemon died unexpectedly" -->
<!-- id="CAPqNE2XSaNiCtpMYpHqLXh=PypdRCT+_NY4F=8rQrcdg5j6aiA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGYuqpatLsJfz0wCeLJYj9Wr6Vu2JWv4h60=uOuZStFAbAs=Tw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-03-27 10:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Grzegorz, sometimes when a parallel application quits there are
<br>
processes left running on the compute nodes. You can usually find
<br>
these by running 'pgrep -P 1' and excluding any processes owned by
<br>
root.
<br>
These 'orphan' processes use up memory - so if you are having problems
<br>
with applications quitting like you do it is worth looking at all
<br>
nodes and making sure that there are no orphan processes.
<br>
<p>But, as you say, it does not happen very often.
<br>
<p><p>On 27/03/2012, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; John, thank you for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the system logs and there are no signs of oom killer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean by cleaning 'orphan' processes? Should I check if
</span><br>
<span class="quotelev1">&gt; there are any processes left after each job execution? I have always
</span><br>
<span class="quotelev1">&gt; been assuming that when mpirun terminates, everything is cleaned up.
</span><br>
<span class="quotelev1">&gt; Currently there are no processes left on the nodes. The failure
</span><br>
<span class="quotelev1">&gt; happend on Friday and after that tens of similar jobs completed
</span><br>
<span class="quotelev1">&gt; successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/3/27 John Hearns &lt;hearnsj_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Have you checked the system logs on the machines where this is running?
</span><br>
<span class="quotelev2">&gt;&gt; Is it perhaps that the processes use lots of memory and the Out Of
</span><br>
<span class="quotelev2">&gt;&gt; Memory (OOM) killer is killing them?
</span><br>
<span class="quotelev2">&gt;&gt; Also check all nodes for left-over 'orphan' processes which are still
</span><br>
<span class="quotelev2">&gt;&gt; running after a job finishes - these should be killed or the node
</span><br>
<span class="quotelev2">&gt;&gt; rebooted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 27/03/2012, Grzegorz Maj &lt;maju3_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an MPI application using ScaLAPACK routines. I'm running it on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI 1.4.3. I'm using mpirun to launch less than 100 processes. I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using it quite extensively for almost two years and it almost always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works fine. However, once every 3-4 months I get the following error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during the execution:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid unknown) died unexpectedly on signal 1 &#160;while attempting to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It says that the daemon died while attempting to launch, but my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application (MPI grid) was running for about 14 minutes before it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed. I can say that based on the log messages I'm producing during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the execution of my application. There is no more information from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun. One more thing I know is that mpirun exit status was 1, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guess it is not very helpful. There are no core files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would appreciate any suggestions on how to debug this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="18852.php">Rodrigo Oliveira: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<li><strong>In reply to:</strong> <a href="18850.php">Grzegorz Maj: "Re: [OMPI users] MPI daemon died unexpectedly"</a>
<!-- nextthread="start" -->
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
