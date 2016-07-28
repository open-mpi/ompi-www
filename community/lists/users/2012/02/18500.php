<?
$subject_val = "Re: [OMPI users] Problems with gridengine integration on RHEL 6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 17:21:00 2012" -->
<!-- isoreceived="20120215222100" -->
<!-- sent="Wed, 15 Feb 2012 23:20:46 +0100" -->
<!-- isosent="20120215222046" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with gridengine integration on RHEL 6" -->
<!-- id="F8DDDEE0-71E3-481A-9284-B0DF0FC92469_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F3C2AC5.9070402_at_uw.edu" -->
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
<strong>Date:</strong> 2012-02-15 17:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18499.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.02.2012 um 22:59 schrieb Brian McNally:
<br>
<p><span class="quotelev1">&gt; For for responding so quickly Reuti!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be clear my RHEL 5 and RHEL 6 nodes are part of the same cluster. In the RHEL 5 case qrsh -inherit gets called via mpirun. In the RHEL 6 case /usr/bin/ssh gets called directly from mpirun. The cluster setup looks like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qlogin_command               /usr/local/bin/qlogin_command
</span><br>
<span class="quotelev1">&gt; qlogin_daemon                /usr/sbin/sshd -i
</span><br>
<span class="quotelev1">&gt; rlogin_command               builtin
</span><br>
<span class="quotelev1">&gt; rsh_command                  builtin
</span><br>
<span class="quotelev1">&gt; rsh_daemon                   builtin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't seem to have a &quot;rlogin_daemon&quot; set.
</span><br>
<p>It will use the former rlogin method, but if you don't use rlogin it doesn't matter and even would not work, as rlogin_command doesn't match.
<br>
<p>(Just for reference: <a href="http://arc.liv.ac.uk/SGE/htmlman/htmlman5/remote_startup.html">http://arc.liv.ac.uk/SGE/htmlman/htmlman5/remote_startup.html</a>)
<br>
<p>Are there any local configurations:
<br>
<p>$ qconf -sconfl
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brian McNally
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/15/2012 01:43 PM, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 15.02.2012 um 22:21 schrieb Brian McNally:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Open MPI community,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running the openmpi 1.5.3 package as provided by Redhat Enterprise Linux 6, along with SGE 6.2u3. I've discovered that under RHEL 5 orted gets spawned via qrsh and under RHEL 6 orted gets spanwed via SSH. This is happening in the same cluster environment with the same parallel environment setup. I want orted to get spawned via qrsh because we impose memory limits if a job is spawned through SSH.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it spawned by SSH directly or as a result of `qrsh -inherit ...`, while:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ qconf -sconf
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; qlogin_command               builtin
</span><br>
<span class="quotelev2">&gt;&gt; qlogin_daemon                builtin
</span><br>
<span class="quotelev2">&gt;&gt; rlogin_command               builtin
</span><br>
<span class="quotelev2">&gt;&gt; rlogin_daemon                builtin
</span><br>
<span class="quotelev2">&gt;&gt; rsh_command                  builtin
</span><br>
<span class="quotelev2">&gt;&gt; rsh_daemon                   builtin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; is set in the old cluster but different in the new one (i.e. pointing to SSH there)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I cannot determine WHY the behavior is different from RHEL 5 to RHEL 6. In the former I'm using the openmpi 1.4.3 package, in the latter I'm using openmpi 1.5.3. Both are supposedly built to support the gridengine ras.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.5.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts? The documentation indicates that &quot;Open MPI will automatically detect when it is running inside SGE and will just 'do the Right Thing.'&quot; In my case that isn't the case!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian McNally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<li><strong>Previous message:</strong> <a href="18499.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="18498.php">Brian McNally: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18501.php">Dave Love: "Re: [OMPI users] Problems with gridengine integration on RHEL 6"</a>
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
