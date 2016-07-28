<?
$subject_val = "Re: [MTT users] mtt fails, error: identical key already exists";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 10:13:21 2014" -->
<!-- isoreceived="20140103151321" -->
<!-- sent="Fri, 3 Jan 2014 07:11:18 -0800" -->
<!-- isosent="20140103151118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt fails, error: identical key already exists" -->
<!-- id="CEFDD8D7-AF95-48F9-800F-796868132CC4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11723905.133.1388750881028.JavaMail.wahaj_at_wahaj-ThinkPad-T510" -->
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
<strong>Subject:</strong> Re: [MTT users] mtt fails, error: identical key already exists<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-03 10:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Reply:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You have two options:
<br>
<p>1. After each mtt execution, run a &quot;cleanup&quot; script that simply does &quot;rm -rf &lt;mtt-scratch-location&gt;&quot;
<br>
<p>2. give the mtt scratch location a different name for each execution. However, be careful as you will fill your disk this way - so perhaps run a cleanup script every N times that whacks the oldest location
<br>
<p>Ralph
<br>
<p>On Jan 3, 2014, at 4:42 AM, Muhammad Wahaj Sethi &lt;sethi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt;    I am running mtt daily using a cron job. After every successful execution, next mtt execution fails with the following error message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** ERROR: An identical key already exists in memory when MTT tried to read the file /lustre/ws1/ws/hpcmtt-mtt-0/mtt-scratch/sources/mpi_sources-ompi-nightly-trunk.1.9a1r30043.dump (key=1.9a1r30042).  This should not happen.  It likely indicates that multiple MTT clients are incorrectly operating in the same scratch tree. at /zhome/academic/HLRS/hlrs/hpcmtt/mtt-trunk/lib/MTT/Messages.pm line 131.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have checked mtt successful run log file and was not able to notice something unusual. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kindly, let me know if addition info is required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help will be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt; Wahaj
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Muhammad Wahaj Sethi: "[MTT users] mtt fails, error: identical key already exists"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>Reply:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
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
