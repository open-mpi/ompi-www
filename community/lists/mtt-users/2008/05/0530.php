<?
$subject_val = "Re: [MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 13:11:39 2008" -->
<!-- isoreceived="20080506171139" -->
<!-- sent="Tue, 6 May 2008 13:11:23 -0400" -->
<!-- isosent="20080506171123" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT server side problem" -->
<!-- id="20080506171122.GT51303_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4820795D.2080004_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2008-05-06 13:11:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0529.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, May/06/2008 06:29:33PM, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure which cron jobs you're referring to. Do you
</span><br>
<span class="quotelev2">&gt; &gt; mean these?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron</a>
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; I talked about this one: 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance">https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance</a>
</span><br>
<p>I'm guessing you would only be concerned with the below
<br>
periodic-maintenance.pl script, which just runs
<br>
ANALYZE/VACUUM queries. I think you can start that up
<br>
whenever you want (and it should optimize the Reporter).
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl</a>
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only thing there are the regular
</span><br>
<span class="quotelev2">&gt; &gt; mtt-results_at_[hidden] email alerts and some out-of-date
</span><br>
<span class="quotelev2">&gt; &gt; DB monitoring junk. You can ignore that stuff.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Josh, are there some nightly (DB
</span><br>
<span class="quotelev2">&gt; &gt; pruning/cleaning/vacuuming?) cron jobs that Pasha should be
</span><br>
<span class="quotelev2">&gt; &gt; running?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I thought this issue was solved in r1119 (see below). Do you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have the latest mtt/server scripts?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit">https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Tue, May/06/2008 03:26:43PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; About the issue:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not get a 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; serial&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As result of the error some of MTT results is not visible via the web 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; reporter
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size of 33554432 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) : eval()'d 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; code on line 77515
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled (wrapper: 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; /usr/sbin/suexec)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating secret for digest 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; authentication ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP SDK
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   
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
<li><strong>Next message:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Previous message:</strong> <a href="0529.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0529.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0531.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
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
