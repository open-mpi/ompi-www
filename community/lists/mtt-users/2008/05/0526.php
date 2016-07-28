<?
$subject_val = "Re: [MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 09:52:53 2008" -->
<!-- isoreceived="20080506135253" -->
<!-- sent="Tue, 6 May 2008 09:52:39 -0400" -->
<!-- isosent="20080506135239" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT server side problem" -->
<!-- id="20080506135239.GR51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48204E83.4020700_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [MTT users] MTT server side problem<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 09:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>In reply to:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Pasha,
<br>
<p>I thought this issue was solved in r1119 (see below). Do you
<br>
have the latest mtt/server scripts?
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit">https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit</a>
<br>
<p>-Ethan
<br>
<p>On Tue, May/06/2008 03:26:43PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; About the issue:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not get a 
</span><br>
<span class="quotelev1">&gt; serial&quot;
</span><br>
<span class="quotelev1">&gt; As result of the error some of MTT results is not visible via the web 
</span><br>
<span class="quotelev1">&gt; reporter
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev1">&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size of 33554432 
</span><br>
<span class="quotelev1">&gt; bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev1">&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) : eval()'d 
</span><br>
<span class="quotelev1">&gt; code on line 77515
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled (wrapper: 
</span><br>
<span class="quotelev1">&gt; /usr/sbin/suexec)
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating secret for digest 
</span><br>
<span class="quotelev1">&gt; authentication ...
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP SDK
</span><br>
<span class="quotelev1">&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Ethan Mallove: "Re: [MTT users] propose reducing MPI Install stdout_save_lines to	50"</a>
<li><strong>In reply to:</strong> <a href="0523.php">Pavel Shamis (Pasha): "[MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0527.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
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
