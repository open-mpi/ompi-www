<?
$subject_val = "Re: [OMPI users] orte-clean hang in 1.8.5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  8 21:51:16 2015" -->
<!-- isoreceived="20150609015116" -->
<!-- sent="Mon, 8 Jun 2015 18:51:12 -0700" -->
<!-- isosent="20150609015112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte-clean hang in 1.8.5" -->
<!-- id="21EA2D09-3634-4D75-A33F-4128D02C268D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="557612C2.7010509_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte-clean hang in 1.8.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-08 21:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27054.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27052.php">David Shrader: "[OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27052.php">David Shrader: "[OMPI users] orte-clean hang in 1.8.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not expected, no - but given how little it is used any more, I&#226;&#128;&#153;m not surprised. I can take a quick gander and see if I can easily fix it.
<br>
<p><p><span class="quotelev1">&gt; On Jun 8, 2015, at 3:10 PM, David Shrader &lt;dshrader_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a user report that orte-clean is hanging on him with Open MPI 1.8.5. Here are the steps I used to reproduce what he reported:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %&gt; which orte-clean
</span><br>
<span class="quotelev1">&gt; /usr/projects/hpcsoft/toss2/moonlight/openmpi/1.6.5-gcc-4.4/bin/orte-clean
</span><br>
<span class="quotelev1">&gt; %&gt; mpirun -n 1 /usr/projects/hpcsoft/toss2/moonlight/openmpi/1.6.5-gcc-4.4/bin/orte-clean
</span><br>
<span class="quotelev1">&gt; Reported: 1 (out of 1) daemons - 1 (out of 1) procs
</span><br>
<span class="quotelev1">&gt; [hangs]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have found that the same behavior does not happen using 1.6.5. That is, I get a command prompt after running orte-clean.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this behavior expected? I am not familiar with orte-clean, so I am not sure if it hanging when used in this fashion is an actual problem with orte-clean. If it is unexpected behavior, I'll dig some more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for your time,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27052.php">http://www.open-mpi.org/community/lists/users/2015/06/27052.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27054.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27052.php">David Shrader: "[OMPI users] orte-clean hang in 1.8.5"</a>
<li><strong>In reply to:</strong> <a href="27052.php">David Shrader: "[OMPI users] orte-clean hang in 1.8.5"</a>
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
