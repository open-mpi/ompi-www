<?
$subject_val = "Re: [OMPI users] No output when adding host to hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 09:46:52 2014" -->
<!-- isoreceived="20140509134652" -->
<!-- sent="Fri, 9 May 2014 06:45:48 -0700" -->
<!-- isosent="20140509134548" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No output when adding host to hostfile" -->
<!-- id="AA7F7212-45CC-4AC0-854B-4F641C19890C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A210B65968E5994895DD3EAB8AC49C5F018C8CC5_at_FS22.APPLIKON.LOCAL" -->
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
<strong>Subject:</strong> Re: [OMPI users] No output when adding host to hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 09:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<li><strong>In reply to:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a known bug in the 1.8.1 release whereby daemons failing to start on a remote node will cause a silent failure. This has been fixed for the upcoming 1.8.2 release, but you might want to use one of the nightly 1.8.2 snapshots in the interim.
<br>
<p>Most likely causes:
<br>
<p>* not finding the required libraries on the remote node because the default PATH and LD_LIBRARY_PATH aren't setup correctly
<br>
<p>* firewall preventing TCP connections between the machines
<br>
<p>Ralph
<br>
<p><p>On May 9, 2014, at 5:30 AM, Wijnberg, Tom &lt;TWij_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have encountered a problem with openmpi I can't seem to be able to
</span><br>
<span class="quotelev1">&gt; diagnose or find precedence in in the mailing-list. I have two pc's with
</span><br>
<span class="quotelev1">&gt; a fresh install of Arch linux and openmpi 1.8.1. One is a dedicated PC
</span><br>
<span class="quotelev1">&gt; and the other is a virtualbox installation. The virtualbox install is
</span><br>
<span class="quotelev1">&gt; the master and I'm able to use mpirun without a problem (compiled a
</span><br>
<span class="quotelev1">&gt; small program that prints to stdout). In and output are as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram 
</span><br>
<span class="quotelev2">&gt;&gt; hello MPI user: from process = 1 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev2">&gt;&gt; hello MPI user: from process = 0 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev2">&gt;&gt; hello MPI user: from process = 2 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev2">&gt;&gt; hello MPI user: from  process = 3 on machine=vArch, of NCPU=4
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running programs on a single machine is not a problem. Also I'm able to
</span><br>
<span class="quotelev1">&gt; log into both machines using ssh without the need for a password so
</span><br>
<span class="quotelev1">&gt; communication between the machines should be oke. However when I add the
</span><br>
<span class="quotelev1">&gt; second host to the hostfile the I get no more feedback. What I mean with
</span><br>
<span class="quotelev1">&gt; this is that I get the following.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ echo &quot;10.5.10.224 slots=4&quot; &gt;&gt; mpiHosts $ mpirun -n 8 -hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No output is returned. I'm not sure if this is intended behavior but it
</span><br>
<span class="quotelev1">&gt; seems incorrect to me. Can anyone provide me with some insight as to why
</span><br>
<span class="quotelev1">&gt; I'm observing this en how I can diagnose the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; TWij
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<li><strong>In reply to:</strong> <a href="24331.php">Wijnberg, Tom: "[OMPI users] No output when adding host to hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24341.php">Wijnberg, Tom: "Re: [OMPI users] No output when adding host to hostfile"</a>
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
