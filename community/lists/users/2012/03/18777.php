<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 00:28:11 2012" -->
<!-- isoreceived="20120315042811" -->
<!-- sent="Thu, 15 Mar 2012 00:28:07 -0400 (EDT)" -->
<!-- isosent="20120315042807" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203150006060.23206_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AC2CBF8D-A0CF-46D6-8606-470B21D4DE42_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Joshua Baker-LePain (<em>jlb17_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 00:28:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Mar 2012 at 12:44am, Reuti wrote
<br>
<p><span class="quotelev1">&gt; Which version of SGE are you using? The traditional rsh startup was 
</span><br>
<span class="quotelev1">&gt; replaced by the builtin startup some time ago (although it should still 
</span><br>
<span class="quotelev1">&gt; work).
</span><br>
<p>We're currently running the rather ancient 6.1u4 (due to the &quot;If it ain't 
<br>
broke...&quot; philosophy).  The hardware for our new queue master recently 
<br>
arrived and I'll soon be upgrading to the most recent Open Grid Scheduler 
<br>
release.  Are you saying that the upgrade with the new builtin startup 
<br>
method should avoid this problem?
<br>
<p><span class="quotelev1">&gt; Maybe this shows already the problem: there are two `qrsh -inherit`, as 
</span><br>
<span class="quotelev1">&gt; Open MPI thinks these are different machines (I ran only with one slot 
</span><br>
<span class="quotelev1">&gt; on each host hence didn't get it first but can reproduce it now). But 
</span><br>
<span class="quotelev1">&gt; for SGE both may end up in the same queue overriding the openmpi-session 
</span><br>
<span class="quotelev1">&gt; in $TMPDIR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Although it's running: you get all output? If I request 4 slots and get 
</span><br>
<span class="quotelev1">&gt; one from each queue on both machines the mpihello outputs only 3 lines: 
</span><br>
<span class="quotelev1">&gt; the &quot;Hello World from Node 3&quot; is always missing.
</span><br>
<p>I do seem to get all the output -- there are indeed 64 Hello World lines.
<br>
<p>Thanks again for all the help on this.  This is one of the most productive 
<br>
exchanges I've had on a mailing list in far too long.
<br>
<p><pre>
-- 
Joshua Baker-LePain
QB3 Shared Cluster Sysadmin
UCSF
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18776.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18774.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18778.php">Rayson Ho: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
