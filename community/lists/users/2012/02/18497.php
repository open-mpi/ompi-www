<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 16:44:06 2012" -->
<!-- isoreceived="20120215214406" -->
<!-- sent="Wed, 15 Feb 2012 22:43:53 +0100" -->
<!-- isosent="20120215214353" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="F563032D-0E0E-4339-A6D8-239A2F145AC2_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C21BD.9090709_at_uw.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with gridengine integration on RHEL 6<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 16:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.02.2012 um 22:21 schrieb Brian McNally:
<br>
<p><span class="quotelev1">&gt; Hello Open MPI community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted gets spawned via qrsh and under RHEL 6 orted gets spanwed via SSH. This is happening in the same cluster environment with the same parallel environment setup. I want orted to get spawned via qrsh because we impose memory limits if a job is spawned through SSH.
</span><br>
<p>Is it spawned by SSH directly or as a result of `qrsh -inherit ...`, while:
<br>
<p>$ qconf -sconf
<br>
...
<br>
qlogin_command               builtin
<br>
qlogin_daemon                builtin
<br>
rlogin_command               builtin
<br>
rlogin_daemon                builtin
<br>
rsh_command                  builtin
<br>
rsh_daemon                   builtin
<br>
<p>is set in the old cluster but different in the new one (i.e. pointing to SSH there)?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL 6. In the former I'm using the openmpi 1.4.3 package, in the latter I'm using openmpi 1.5.3. Both are supposedly built to support the gridengine ras.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts? The documentation indicates that &quot;Open MPI will automatically detect when it is running inside SGE and will just 'do the Right Thing.'&quot; In my case that isn't the case!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Brian McNally
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>In reply to:</strong> <a href="18496.php">Brian McNally: "[OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Reply:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
