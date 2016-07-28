<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 13:14:59 2012" -->
<!-- isoreceived="20120315171459" -->
<!-- sent="Thu, 15 Mar 2012 13:14:54 -0400 (EDT)" -->
<!-- isosent="20120315171454" -->
<!-- name="Joshua Baker-LePain" -->
<!-- email="jlb17_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="alpine.LRH.2.02.1203151300330.31702_at_hogwarts.egr.duke.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B8A38AF5-EA62-48C7-99B0-0BF50BEBBBD6_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2012-03-15 13:14:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18783.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 15 Mar 2012 at 1:53pm, Reuti wrote
<br>
<p><span class="quotelev1">&gt; PS: In your example you also had the case 2 slots in the low priority 
</span><br>
<span class="quotelev1">&gt; queue, what is the actual setup in your cluster?
</span><br>
<p>Our actual setup is:
<br>
<p>&nbsp;&nbsp;o lab.q, slots=numprocs, load_thresholds=np_load_avg=1.5, labs (=SGE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;projects) limited by RQS to a number of slots equal to their &quot;share&quot; of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the cluster, seq_no=0, priority=0.
<br>
<p>&nbsp;&nbsp;o long.q, slots=numprocs, load_thresholds=np_load_avg=0.9, seq_no=1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=19
<br>
<p>&nbsp;&nbsp;o short.q, slots=numprocs, load_thresholds=np_load_avg=1.25, users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;limited by RQS to 200 slots, runtime limited to 30 minutes, seq_no=2,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority=10
<br>
<p>Users are instructed to not select a queue when submitting jobs.  The 
<br>
theory is that even if non-contributing users have filled the cluster with 
<br>
long.q jobs, contributing users will still have instant access to &quot;their&quot; 
<br>
lab.q slots, overloading nodes with jobs running at a higher priority than 
<br>
the long.q jobs.  long.q jobs won't start on nodes full of lab.q jobs. 
<br>
And short.q is for quick, high priority jobs regardless of cluster status 
<br>
(the main use case being processing MRI data into images while a patient 
<br>
is physically in the scanner).
<br>
<p>The truth is our cluster is primarily used for, and thus SGE is tuned for, 
<br>
large numbers of serial jobs.  We do have *some* folks running parallel 
<br>
code, and it *is* starting to get to the point where I need to reconfigure 
<br>
things to make that part work better.
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
<li><strong>Next message:</strong> <a href="18785.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18783.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18779.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
