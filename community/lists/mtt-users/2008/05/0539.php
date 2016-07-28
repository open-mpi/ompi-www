<?
$subject_val = "Re: [MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 21:24:25 2008" -->
<!-- isoreceived="20080508012425" -->
<!-- sent="Wed, 7 May 2008 21:24:16 -0400" -->
<!-- isosent="20080508012416" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT server side problem" -->
<!-- id="3F14FDA8-ED5A-40AB-9CA5-4045125D03CD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4821D13B.1020203_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 21:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0540.php">Rafael Folco: "[MTT users] Open MPI Subversion repositories access"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha,
<br>
<p>I'm looking at the patch a bit closer and even though at a high level  
<br>
the do_pg_connect, do_pg_query, simple_select, and select functions do  
<br>
the same thing the versions in submit/index.php have some additional  
<br>
error handling mechanisms that the ones in database.inc do not have.  
<br>
Specifically they send email when the functions fail with messages  
<br>
indicating what failed so corrections can be made.
<br>
<p>So though I agree that we should unify the functionality I cannot  
<br>
recommend this patch since it will result in losing useful error  
<br>
handling functionality. Maybe there is another way to clean this up to  
<br>
preserve the error reporting.
<br>
<p>-- Josh
<br>
<p>On May 7, 2008, at 11:56 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; I had the original problem with some old revision from trunk.
</span><br>
<span class="quotelev1">&gt; Today I updated the server to latest revision from trunk + the patch  
</span><br>
<span class="quotelev1">&gt; and everything looks good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I commit the patch ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, May/07/2008 06:04:07PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the patch I'm a little bit conserned. The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;get_table_fields()&quot; is, as you mentioned, no longer used so  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be removed. However the other functions are critical to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the submission script particularly 'do_pg_connect' which opens  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the connection to the backend database.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All the functions  are implemented in $topdir/database.inc file.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the &quot;database.inc&quot; implementation is better because it use  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; password and username from config.ini. The original   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation from submit/index use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardcoded values defined in the file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you using the current development trunk (mtt/trunk) or the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stable release branch (mtt/branches/ompi-core-testers)?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can you send us the error messages that you were receiving?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get a serial&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As result of the error some of MTT results is not visible via the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; web reporter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 33554432 bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) :  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eval()'d code on line 77515
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (wrapper: /usr/sbin/suexec)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating secret for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; digest authentication ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SDK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like PHP is actually using a 32MB limit (&quot;Allowed
</span><br>
<span class="quotelev2">&gt;&gt; memory size of 33554432 ...&quot;). Does a (Apache?) daemon need
</span><br>
<span class="quotelev2">&gt;&gt; to be restarted for the php.ini file to take effect? To
</span><br>
<span class="quotelev2">&gt;&gt; check your settings, this little PHP script will print an
</span><br>
<span class="quotelev2">&gt;&gt; HTML page of all the active system settings (search on
</span><br>
<span class="quotelev2">&gt;&gt; &quot;memory_limit&quot;).
</span><br>
<span class="quotelev2">&gt;&gt; &lt;?php
</span><br>
<span class="quotelev2">&gt;&gt; phpinfo();
</span><br>
<span class="quotelev2">&gt;&gt; ?&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 7, 2008, at 4:49 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I upgraded the server side (the mtt is still running , so don't  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; know if the problem was resolved)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; During upgrade I had some problem with the submit/index.php  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; script, it had some duplicated functions and some of them were  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; broken.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please review the attached patch.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May/06/2008 06:29:33PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure which cron jobs you're referring to. Do you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mean these?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I talked about this one: <a href="https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance">https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm guessing you would only be concerned with the below
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; periodic-maintenance.pl script, which just runs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ANALYZE/VACUUM queries. I think you can start that up
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; whenever you want (and it should optimize the Reporter).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only thing there are the regular
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-results_at_[hidden] email alerts and some out-of-date
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; DB monitoring junk. You can ignore that stuff.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh, are there some nightly (DB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pruning/cleaning/vacuuming?) cron jobs that Pasha should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought this issue was solved in r1119 (see below). Do you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have the latest mtt/server scripts?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit">https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May/06/2008 03:26:43PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; About the issue:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; did not get a serial&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As result of the error some of MTT results is not visible  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; via the web reporter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of 33554432 bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; index.php(79) : eval()'d code on line 77515
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shutting down
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; enabled (wrapper: /usr/sbin/suexec)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; secret for digest authentication ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenLDAP LDAP SDK
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unavailable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Index: submit/index.php
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- submit/index.php    (revision 1200)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ submit/index.php    (working copy)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;?php
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Copyright (c) 2006      Cisco Systems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +# Copyright (c) 2008      Mellanox Technologies.  All rights  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -24,8 +25,7 @@ if (file_exists(&quot;$topdir/config.inc&quot;)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ini_set(&quot;memory_limit&quot;, &quot;32M&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $topdir = '..';
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -$ompi_home = '/l/osl/www/doc/www.open-mpi.org';
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -include_once(&quot;$ompi_home/dbpassword.inc&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +include_once(&quot;$topdir/database.inc&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; include_once(&quot;$topdir/reporter.inc&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -1465,60 +1465,6 @@ function get_table_indexes($table_name,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return simple_select($sql_cmd);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# Function used to determine which _POST fields
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# to INSERT. Prevent non-existent fields from being
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# INSERTed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function get_table_fields($table_name) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $dbname;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $id;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    # These indexes are special in that they link phases
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    # together and hence, can and do show up in _POST
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if ($table_name == &quot;test_build&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $special_indexes = array(&quot;mpi_install$id&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    elseif ($table_name == &quot;test_run&quot;)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $special_indexes = array(&quot;test_build$id&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    # Crude way to tell whether a field is an index
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $is_not_index_clause =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (table_name = '$table_name' AND NOT &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (data_type = 'integer' AND &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t column_name ~ '_id$' AND &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t table_catalog = '$dbname'))&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $is_special_index_clause =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (table_name = '$table_name' AND &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (column_name = '$special_indexes[0]'))&quot;;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $is_index_columns = array(
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            &quot;column_name&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            &quot;data_type&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            &quot;column_default&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $sql_cmd = &quot;\n   SELECT &quot; . join(&quot;,&quot;,$is_index_columns) .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\n\t FROM information_schema.columns WHERE &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\n\t &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                     $is_not_index_clause . &quot; OR &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                     $is_special_index_clause . ';';
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    # This table will be easier to manage if it's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    # keyed by column, instead of index
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $tmp = array();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $arr = array();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $arr = select($sql_cmd);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    foreach ($is_index_columns as $col) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $tmp[$col] = array();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        for ($i = 0; $i &lt; sizeof($arr); $i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            $tmp[$col][] = $arr[$i][$col];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    return $tmp;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Useful display of all the parameters posted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Warning: this function could explode the memory footprint  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; causing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -1622,90 +1568,6 @@ function is_null_($var) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ######################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function do_pg_connect() {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $dbname;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $user;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $pass;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    global $pgsql_conn;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    static $connected = false;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (!$connected) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $pgsql_conn =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            pg_connect(&quot;host=localhost port=5432 dbname=$dbname  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; user=$user password=$pass&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # Exit if we cannot connect
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        if (!$pgsql_conn) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            mtt_abort(&quot;\nCould not connect to the $dbname  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; database; &quot; .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -                      &quot;submit this run later.&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            $connected = true;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            # Serialize all transactions by default - Safer  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that way.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            do_pg_query(&quot;SET SESSION CHARACTERISTICS AS  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TRANSACTION ISOLATION LEVEL SERIALIZABLE&quot;, false);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # pg_set_error_verbosity($pgsql_conn,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PGSQL_ERRORS_VERBOSE); # PHP 5 needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # pg_trace($_ENV['HOME'] . &quot;/pgsql.trace&quot;, 'w',  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $pgsql_conn);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # debug(&quot;\npg_options: &quot; .  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; var_export(pg_options($pgsql_conn)));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function do_pg_query($cmd, $silent) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $db_res = null;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (! ($db_res = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # Some errors are unsurprising, allow for silence in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        # such cases
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        if (! $silent) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            mtt_error($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -            mtt_send_mail($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nDatabase rows affected: &quot; .  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pg_affected_rows($db_res) . &quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    return $db_res;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# Fetch scalar value
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function select_scalar($cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $set = array();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $set = simple_select($cmd);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    return array_shift($set);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# Fetch 1D array
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function simple_select($cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $rows = null;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        mtt_error($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        mtt_send_mail($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    $max = pg_num_rows($result);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    for ($i = 0; $i &lt; $max; ++$i) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $row = pg_fetch_array($result, $i, PGSQL_NUM);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $rows[] = $row[0];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    return $rows;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Fetch an associative hash (column name =&gt; value)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; function associative_select($cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -1722,21 +1584,6 @@ function associative_select($cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    return pg_fetch_array($result);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -# Fetch 2D array
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -function select($cmd) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        mtt_error($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        mtt_send_mail($out);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -    return pg_fetch_all($result);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ######################################################################
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Function for reporting errors back to the client
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0540.php">Rafael Folco: "[MTT users] Open MPI Subversion repositories access"</a>
<li><strong>Previous message:</strong> <a href="0538.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>In reply to:</strong> <a href="0538.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0543.php">Pavel Shamis (Pasha): "Re: [MTT users] MTT server side problem"</a>
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
