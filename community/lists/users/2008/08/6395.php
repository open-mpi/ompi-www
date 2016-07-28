<?
$subject_val = "Re: [OMPI users] Checkpoint problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 08:48:39 2008" -->
<!-- isoreceived="20080820124839" -->
<!-- sent="Wed, 20 Aug 2008 08:48:34 -0400" -->
<!-- isosent="20080820124834" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint problem" -->
<!-- id="ea86ce220808200548x7d2af1e1r3da2dad5e43c8c2c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48ABD1B1.20008_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint problem<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-20 08:48:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
Three things...
<br>
1) Josh, the main developer for checkpoint/restart, has been away for
<br>
a few weeks
<br>
and has just returned.  I suspect he will get unburied from e-mail in
<br>
another day or two.
<br>
<p>2) The 1.4 (and 1.3) branch is very much under rapid development, and
<br>
there will be times
<br>
when basic functionality will just break for a day or so.  If you run
<br>
into a problem, please try
<br>
to be more specific about what version (include the r#) that you tried.
<br>
<p>3) The checkpoint/restart functionality currently only supports a
<br>
subset of the network
<br>
transports.  I think all that you should expect to work right now is
<br>
TCP and shared memory.
<br>
Josh is working on other transports, but those are very much a &quot;work
<br>
in progress&quot;.
<br>
<p>On Wed, Aug 20, 2008 at 4:11 AM, Matthias Hovestadt
<br>
&lt;maho_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Gabriele!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this case, mpirun works well, but the checkpoint procedure fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi-checkpoint 20109
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] Error: Unable to get the current working directory
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] [[42404,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; orte-checkpoint.c at line 395
</span><br>
<span class="quotelev2">&gt;&gt; [node0316:20134] HNP with PID 20109 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had exactly the same problem on my machine. Neither modifying
</span><br>
<span class="quotelev1">&gt; the configure parameters nor the way of invoking the ompi-checkpoint
</span><br>
<span class="quotelev1">&gt; command did help. Since I am using the source from subversion checkout,
</span><br>
<span class="quotelev1">&gt; I also updated the source several times, following the day to day
</span><br>
<span class="quotelev1">&gt; progress. However, this problem remained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Luckily, updating the source to SVN revision 19265 finally solved
</span><br>
<span class="quotelev1">&gt; this checkpointing issue. Maybe the problem shows up again in later
</span><br>
<span class="quotelev1">&gt; versions...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
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
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
 I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6396.php">Mi Yan: "[OMPI users] run OpenMPI job on heterogeneous processor"</a>
<li><strong>Previous message:</strong> <a href="6394.php">Ralph Castain: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>In reply to:</strong> <a href="6393.php">Matthias Hovestadt: "Re: [OMPI users] Checkpoint problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
<li><strong>Reply:</strong> <a href="6421.php">Gabriele Fatigati: "Re: [OMPI users] Checkpoint problem"</a>
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
