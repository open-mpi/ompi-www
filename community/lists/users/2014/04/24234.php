<?
$subject_val = "Re: [OMPI users] Conflicts between jobs running on the same node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 13:48:49 2014" -->
<!-- isoreceived="20140417174849" -->
<!-- sent="Thu, 17 Apr 2014 10:48:49 -0700" -->
<!-- isosent="20140417174849" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Conflicts between jobs running on the same node" -->
<!-- id="CAMD57ocn6-wBYM2cymnenpF_PcEADF+u4n=3buy2YFxE2FJ5pg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D80DA68B7508364190D631DB32964DE92212F13C_at_MAILBOXSERVER.tyndall.ie" -->
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
<strong>Subject:</strong> Re: [OMPI users] Conflicts between jobs running on the same node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 13:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>In reply to:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, each execution of mpirun has no knowledge of where the procs
<br>
have been placed and bound by another execution of mpirun. So what is
<br>
happening is that the procs of the two jobs are being bound to the same
<br>
cores, thus causing contention.
<br>
<p>If you truly want to run two jobs at the same time on the same nodes, then
<br>
you should add &quot;--bind-to none&quot; on the cmd line. Each job will see a
<br>
performance impact relative to running bound on their own, but the jobs
<br>
will run much better if they are sharing nodes.
<br>
<p>Ralph
<br>
<p><p><p>On Thu, Apr 17, 2014 at 10:37 AM, Alfonso Sanchez &lt;
<br>
alfonso.sanchez_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compiled OMPI 1.8 on a x64 linux cluster using the PGI compilers
</span><br>
<span class="quotelev1">&gt; v14.1 (I've tried it with PGI v11.10 and get the same result). I'm able to
</span><br>
<span class="quotelev1">&gt; compile with the resulting mpicc/mpifort/etc. When running the codes,
</span><br>
<span class="quotelev1">&gt; everything seems to be working fine when there's only one job running on a
</span><br>
<span class="quotelev1">&gt; given computing node. However, whenever a second job gets assigned the same
</span><br>
<span class="quotelev1">&gt; computing node, the CPU load of every process gets divided by 2. I'm using
</span><br>
<span class="quotelev1">&gt; pbs torque. As an example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Submit jobA using torque to node1 using mpirun -n 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -All 4 rocesses of jobA show 100% CPU load.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Submit jobB using torque to node1 using mpirun -n 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -All 8 processes ( 4 from jobA &amp; 4 from jobB ) show 50% CPU load.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, whilst jobA/jobB would run in 30 mins by itself; when both jobs
</span><br>
<span class="quotelev1">&gt; are on the same node they've gone 14 hrs without completing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm attaching config.log &amp; the output of ompi_info --all (bzipped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some more info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; ompi_info | grep tm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ess: tm (MCA v2.0, API v3.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt; MCA plm: tm (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt; MCA ras: tm (MCA v2.0, API v2.0, Component v1.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if this is a common problem but I've tried searching for posts
</span><br>
<span class="quotelev1">&gt; discussing similar problems but haven't been able to find any.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Alfonso
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>Previous message:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
<li><strong>In reply to:</strong> <a href="24233.php">Alfonso Sanchez: "[OMPI users] Conflicts between jobs running on the same node"</a>
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
