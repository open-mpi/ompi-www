<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 18:01:02 2015" -->
<!-- isoreceived="20150910220102" -->
<!-- sent="Thu, 10 Sep 2015 22:00:58 +0000" -->
<!-- isosent="20150910220058" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293F199ED_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87613ifkox.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-10 18:00:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Previous message:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So qsort_args is supposed to be set to NONE? I had thought when the FAQ said qsort_args is
<br>
&quot;necessary&quot; that meant a value other than NONE had to be put there.
<br>
<p>For some reason the mpi parallel environment in our Son-of-Gridengine install has control
<br>
slaves set to FALSE and has defined scripts for start_proc_args and stop_proc_args.
<br>
<p>Anyway, thanks for the information.
<br>
<p>-Bill L,
<br>
________________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Dave Love [d.love_at_[hidden]]
<br>
Sent: Thursday, September 10, 2015 6:49 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Son of Grid Engine,   Parallel Environments and OpenMPI 1.8.7
<br>
<p>&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Our issues with OpenMPI 1.8.7 and Son-of-Gridengine turned out to be
</span><br>
<span class="quotelev1">&gt; down to using the wrong Parallel Environment. Having a PE with
</span><br>
<span class="quotelev1">&gt; control_slaves set to TRUE and start_proc_args and stop_proc_args set
</span><br>
<span class="quotelev1">&gt; to NONE cleared up all our issues, at least for my MPI test code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qsort_args was left set to NONE, which directly contradicts the FAQ
</span><br>
<span class="quotelev1">&gt; for running OpenMPI through Son-of-Gridengine so maybe the OpenMPI FAQ
</span><br>
<span class="quotelev1">&gt; WRT SOGE should be revised.
</span><br>
<p>I don't see how.  The example in the FAQ is correct, and exactly what is
<br>
used here in some PEs (apart from the name).
<br>
<p><span class="quotelev1">&gt; Qsort_args is an API that involves writing
</span><br>
<span class="quotelev1">&gt; your own function in a dynamically shared object that determines what
</span><br>
<span class="quotelev1">&gt; nodes should be used to schedule a job.
</span><br>
<p>Yes, as in sge_pe(1), and it's NONE in the example.  (The obvious
<br>
application for it is to optimize the topology of the allocation.)
<br>
<p>This isn't openmpi-specific, though.  It should be the same with any
<br>
other MPI that provides tight integration directly, like those using
<br>
hydra.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27555.php">http://www.open-mpi.org/community/lists/users/2015/09/27555.php</a>
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Previous message:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27572.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
