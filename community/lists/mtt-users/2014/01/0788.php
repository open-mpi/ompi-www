<?
$subject_val = "Re: [MTT users] mtt fails, error: identical key already exists";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 11:48:23 2014" -->
<!-- isoreceived="20140103164823" -->
<!-- sent="Fri, 3 Jan 2014 08:46:22 -0800" -->
<!-- isosent="20140103164622" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [MTT users] mtt fails, error: identical key already exists" -->
<!-- id="9D348DEB-4CC4-472E-B225-79CA53CB56C9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="32971603.18.1388765728794.JavaMail.wahaj_at_wahaj-ThinkPad-T510" -->
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
<strong>Date:</strong> 2014-01-03 11:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/0789.php">David Liu: "[MTT users] send post request to https://www.open-mpi.org:443/mtt/submit/ result in error &quot;MTT client version not specified.&quot;"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2014, at 8:15 AM, Muhammad Wahaj Sethi &lt;sethi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the quick reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now I am making use of option no 1. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As per my understanding, mtt runs tests only if new versions/updates are available. Info about last run is stored in the scratch dir.
</span><br>
<p>No, it is stored in the mtt-versions directory for just that reason. You should have an entry like the following in your .ini file:
<br>
<p>#======================================================================
<br>
# MPI get phase
<br>
#======================================================================
<br>
<p>[MPI get: ompi-nightly-trunk]
<br>
mpi_details = Open MPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/trunk">http://www.open-mpi.org/nightly/trunk</a>
<br>
ompi_snapshot_version_file = /home/common/mtt-versions/trunk&amp;getenv(&quot;MTT_VERSION_FILE_SUFFIX&quot;).txt
<br>
<p>#----------------------------------------------------------------------
<br>
<p># Get the 1.7 nightly
<br>
<p>[MPI get: ompi-nightly-v1.7]
<br>
mpi_details = Open MPI
<br>
<p>module = OMPI_Snapshot
<br>
ompi_snapshot_url = <a href="http://www.open-mpi.org/nightly/v1.7">http://www.open-mpi.org/nightly/v1.7</a>
<br>
ompi_snapshot_version_file = /home/common/mtt-versions/v1.7&amp;getenv(&quot;MTT_VERSION_FILE_SUFFIX&quot;).txt
<br>
<p>#----------------------------------------------------------------------
<br>
<p>Note the &quot;snapshot_version_file&quot; entry where the version gets stored
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By removing/changing workspace dir this info will be lost. And next mtt execution may submit old results again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;MTT Users&quot; &lt;mtt-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, January 3, 2014 4:11:18 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] mtt fails, error: identical key already exists
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. After each mtt execution, run a &quot;cleanup&quot; script that simply does &quot;rm -rf &lt;mtt-scratch-location&gt;&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. give the mtt scratch location a different name for each execution. However, be careful as you will fill your disk this way - so perhaps run a cleanup script every N times that whacks the oldest location
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2014, at 4:42 AM, Muhammad Wahaj Sethi &lt;sethi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello!
</span><br>
<span class="quotelev2">&gt;&gt;   I am running mtt daily using a cron job. After every successful execution, next mtt execution fails with the following error message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** ERROR: An identical key already exists in memory when MTT tried to read the file /lustre/ws1/ws/hpcmtt-mtt-0/mtt-scratch/sources/mpi_sources-ompi-nightly-trunk.1.9a1r30043.dump (key=1.9a1r30042).  This should not happen.  It likely indicates that multiple MTT clients are incorrectly operating in the same scratch tree. at /zhome/academic/HLRS/hlrs/hpcmtt/mtt-trunk/lib/MTT/Messages.pm line 131.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have checked mtt successful run log file and was not able to notice something unusual. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kindly, let me know if addition info is required.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help will be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; regards,
</span><br>
<span class="quotelev2">&gt;&gt; Wahaj
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2014/03/0789.php">David Liu: "[MTT users] send post request to https://www.open-mpi.org:443/mtt/submit/ result in error &quot;MTT client version not specified.&quot;"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
<li><strong>In reply to:</strong> <a href="0787.php">Muhammad Wahaj Sethi: "Re: [MTT users] mtt fails, error: identical key already exists"</a>
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
