<?
$subject_val = "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 00:33:19 2012" -->
<!-- isoreceived="20120131053319" -->
<!-- sent="Tue, 31 Jan 2012 00:33:14 -0500" -->
<!-- isosent="20120131053314" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine" -->
<!-- id="CAHwLALMLfR1g1qLxtUexdnjKd0RbaC51n8oGgShJxaw7Hu10tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB4CD93C.126C3%tombry_at_cisco.com" -->
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
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 00:33:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 30, 2012 at 11:33 PM, Tom Bryan &lt;tombry_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; For our use, yes, spawn_multiple makes sense. &#160;We won't be spawning lots and
</span><br>
<span class="quotelev1">&gt; lots of jobs in quick succession. &#160;We're using MPI as an robust way to get
</span><br>
<span class="quotelev1">&gt; IPC as we spawn multiple child processes while using SGE to help us with
</span><br>
<span class="quotelev1">&gt; load balancing our compute nodes.
</span><br>
<p>Note that spawn_multiple is not going to buy you anything as SGE and
<br>
Open Grid Scheduler (and most other batch systems) do not handle
<br>
dynamic slot allocation. There is no way to change the number of slots
<br>
that are used by a job once it's running.
<br>
<p>For this reason, I don't recall seeing any users using spawn_multiple
<br>
(and also, IIRC, the call was introduced in MPI-2)... and you might
<br>
want to make sure that normal MPI jobs work before debuging a
<br>
spawn_multiple() job.
<br>
<p>Rayson
<br>
<p>=================================
<br>
Grid Engine / Open Grid Scheduler
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway:
</span><br>
<span class="quotelev2">&gt;&gt; do you see on the master node of the parallel job in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I should have included that kind of output. &#160;I'll have to run it again
</span><br>
<span class="quotelev1">&gt; with the cols option, but I used pstree to see that I have mpitest --child
</span><br>
<span class="quotelev1">&gt; processes as children of orted by way of sge_shepherd and sge_execd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; ---Tom
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
<p><p><p><pre>
-- 
Rayson
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18327.php">Götz Waschk: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18325.php">Tom Bryan: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Reply:</strong> <a href="18330.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
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
