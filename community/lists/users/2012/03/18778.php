<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 00:41:14 2012" -->
<!-- isoreceived="20120315044114" -->
<!-- sent="Thu, 15 Mar 2012 00:41:09 -0400" -->
<!-- isosent="20120315044109" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="CAHwLALN5hjz_Tkk=bXQkyqH90bMtxj8z_xG_1MuNcTDjB6Zozg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.02.1203150006060.23206_at_hogwarts.egr.duke.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 00:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joshua,
<br>
<p>I don't think the new built-in rsh in later versions of Grid Engine is
<br>
going to make any difference - the orted is the real starter of the
<br>
MPI tasks and should have a greater influence on the task environment.
<br>
<p>However, it would help if you can record the nice values and resource
<br>
limits of each of the MPI task - you can easily do so by using a shell
<br>
wrapper like this one:
<br>
<p>========================================
<br>
#!/bin/sh
<br>
<p># resource limit
<br>
ulimit -a &gt; /tmp/mpijob.$$
<br>
<p># nice value
<br>
ps -eo pid,user,nice,command | grep $$
<br>
<p># run real executable
<br>
&lt;PATH to real executable&gt;
<br>
<p>exit $?
<br>
========================================
<br>
<p>Use mpirun to submit it as if it is the real MPI application - then
<br>
you can see if there are limits introduced by Grid Engine that are
<br>
causing issues...
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p><p>On Thu, Mar 15, 2012 at 12:28 AM, Joshua Baker-LePain &lt;jlb17_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Thu, 15 Mar 2012 at 12:44am, Reuti wrote
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which version of SGE are you using? The traditional rsh startup was
</span><br>
<span class="quotelev2">&gt;&gt; replaced by the builtin startup some time ago (although it should still
</span><br>
<span class="quotelev2">&gt;&gt; work).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're currently running the rather ancient 6.1u4 (due to the &quot;If it ain't
</span><br>
<span class="quotelev1">&gt; broke...&quot; philosophy). &#160;The hardware for our new queue master recently
</span><br>
<span class="quotelev1">&gt; arrived and I'll soon be upgrading to the most recent Open Grid Scheduler
</span><br>
<span class="quotelev1">&gt; release. &#160;Are you saying that the upgrade with the new builtin startup
</span><br>
<span class="quotelev1">&gt; method should avoid this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe this shows already the problem: there are two `qrsh -inherit`, as
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI thinks these are different machines (I ran only with one slot on
</span><br>
<span class="quotelev2">&gt;&gt; each host hence didn't get it first but can reproduce it now). But for SGE
</span><br>
<span class="quotelev2">&gt;&gt; both may end up in the same queue overriding the openmpi-session in $TMPDIR.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Although it's running: you get all output? If I request 4 slots and get
</span><br>
<span class="quotelev2">&gt;&gt; one from each queue on both machines the mpihello outputs only 3 lines: the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Hello World from Node 3&quot; is always missing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do seem to get all the output -- there are indeed 64 Hello World lines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for all the help on this. &#160;This is one of the most productive
</span><br>
<span class="quotelev1">&gt; exchanges I've had on a mailing list in far too long.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF
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
==================================================
Open Grid Scheduler - The Official Open Source Grid Engine
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18777.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18766.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
