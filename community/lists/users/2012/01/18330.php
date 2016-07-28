<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 05:02:31 2012" -->
<!-- isoreceived="20120131100231" -->
<!-- sent="Tue, 31 Jan 2012 11:02:19 +0100" -->
<!-- isosent="20120131100219" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="C53C8E5E-BE98-4163-B053-A9E4CB150858_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHwLALMLfR1g1qLxtUexdnjKd0RbaC51n8oGgShJxaw7Hu10tw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 05:02:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18331.php">Dave Love: "[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18329.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2012 um 06:33 schrieb Rayson Ho:
<br>
<p><span class="quotelev1">&gt; On Mon, Jan 30, 2012 at 11:33 PM, Tom Bryan &lt;tombry_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; For our use, yes, spawn_multiple makes sense.  We won't be spawning lots and
</span><br>
<span class="quotelev2">&gt;&gt; lots of jobs in quick succession.  We're using MPI as an robust way to get
</span><br>
<span class="quotelev2">&gt;&gt; IPC as we spawn multiple child processes while using SGE to help us with
</span><br>
<span class="quotelev2">&gt;&gt; load balancing our compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that spawn_multiple is not going to buy you anything as SGE and
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler (and most other batch systems) do not handle
</span><br>
<span class="quotelev1">&gt; dynamic slot allocation. There is no way to change the number of slots
</span><br>
<span class="quotelev1">&gt; that are used by a job once it's running.
</span><br>
<p>Agreed, the problem is first to phrase it in a submission command like: I need 2 cores for 2 hours, 4 cores for one hour and finally 1 core for 8 hours. And the application must act accordingly. This all sounds more like a real-time queuing system and application, where this can be ensured to happen in time.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; For this reason, I don't recall seeing any users using spawn_multiple
</span><br>
<span class="quotelev1">&gt; (and also, IIRC, the call was introduced in MPI-2)... and you might
</span><br>
<span class="quotelev1">&gt; want to make sure that normal MPI jobs work before debuging a
</span><br>
<span class="quotelev1">&gt; spawn_multiple() job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================
</span><br>
<span class="quotelev1">&gt; Grid Engine / Open Grid Scheduler
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scalable Grid Engine Support Program
</span><br>
<span class="quotelev1">&gt; <a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you see on the master node of the parallel job in:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I should have included that kind of output.  I'll have to run it again
</span><br>
<span class="quotelev2">&gt;&gt; with the cols option, but I used pstree to see that I have mpitest --child
</span><br>
<span class="quotelev2">&gt;&gt; processes as children of orted by way of sge_shepherd and sge_execd.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; ---Tom
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rayson
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt; Open Grid Scheduler - The Official Open Source Grid Engine
</span><br>
<span class="quotelev1">&gt; <a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
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
<li><strong>Next message:</strong> <a href="18331.php">Dave Love: "[OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>Previous message:</strong> <a href="18329.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="18326.php">Rayson Ho: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
