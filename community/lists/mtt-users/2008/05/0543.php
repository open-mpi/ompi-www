<?
$subject_val = "Re: [MTT users] MTT server side problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 08:08:28 2008" -->
<!-- isoreceived="20080512120828" -->
<!-- sent="Mon, 12 May 2008 15:08:17 +0300" -->
<!-- isosent="20080512120817" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT server side problem" -->
<!-- id="48283331.1000408_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3F14FDA8-ED5A-40AB-9CA5-4045125D03CD_at_open-mpi.org" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 08:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Wen Hao Wang: "[MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0539.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
I ported the error handling mechanism from submit/index.php to to the 
<br>
database.inc. Please review.
<br>
<p>Thanks,
<br>
Pasha
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Pasha,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm looking at the patch a bit closer and even though at a high level 
</span><br>
<span class="quotelev1">&gt; the do_pg_connect, do_pg_query, simple_select, and select functions do 
</span><br>
<span class="quotelev1">&gt; the same thing the versions in submit/index.php have some additional 
</span><br>
<span class="quotelev1">&gt; error handling mechanisms that the ones in database.inc do not have. 
</span><br>
<span class="quotelev1">&gt; Specifically they send email when the functions fail with messages 
</span><br>
<span class="quotelev1">&gt; indicating what failed so corrections can be made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So though I agree that we should unify the functionality I cannot 
</span><br>
<span class="quotelev1">&gt; recommend this patch since it will result in losing useful error 
</span><br>
<span class="quotelev1">&gt; handling functionality. Maybe there is another way to clean this up to 
</span><br>
<span class="quotelev1">&gt; preserve the error reporting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2008, at 11:56 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt; I had the original problem with some old revision from trunk.
</span><br>
<span class="quotelev2">&gt;&gt; Today I updated the server to latest revision from trunk + the patch 
</span><br>
<span class="quotelev2">&gt;&gt; and everything looks good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I commit the patch ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May/07/2008 06:04:07PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Josh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the patch I'm a little bit conserned. The 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;get_table_fields()&quot; is, as you mentioned, no longer used so 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should be removed. However the other functions are critical to the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submission script particularly 'do_pg_connect' which opens the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection to the backend database.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All the functions  are implemented in $topdir/database.inc file. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And the &quot;database.inc&quot; implementation is better because it use 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; password and username from config.ini. The original  implementation 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from submit/index use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hardcoded values defined in the file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Are you using the current development trunk (mtt/trunk) or the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stable release branch (mtt/branches/ompi-core-testers)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you send us the error messages that you were receiving?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client did not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get a serial&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As result of the error some of MTT results is not visible via the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; web reporter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size of 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 33554432 bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) : 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; eval()'d code on line 77515
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, shutting down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism enabled 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (wrapper: /usr/sbin/suexec)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating secret for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; digest authentication ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with OpenLDAP LDAP SDK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support unavailable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looks like PHP is actually using a 32MB limit (&quot;Allowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory size of 33554432 ...&quot;). Does a (Apache?) daemon need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be restarted for the php.ini file to take effect? To
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check your settings, this little PHP script will print an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTML page of all the active system settings (search on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;memory_limit&quot;).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;?php
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phpinfo();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ?&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 7, 2008, at 4:49 AM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I upgraded the server side (the mtt is still running , so don't 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; know if the problem was resolved)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; During upgrade I had some problem with the submit/index.php 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; script, it had some duplicated functions and some of them were 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; broken.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please review the attached patch.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Pasha
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May/06/2008 06:29:33PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure which cron jobs you're referring to. Do you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mean these?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/php/cron</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I talked about this one: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance">https://svn.open-mpi.org/trac/mtt/wiki/ServerMaintenance</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm guessing you would only be concerned with the below
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; periodic-maintenance.pl script, which just runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ANALYZE/VACUUM queries. I think you can start that up
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; whenever you want (and it should optimize the Reporter).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl">https://svn.open-mpi.org/trac/mtt/browser/trunk/server/sql/cron/periodic-maintenance.pl</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only thing there are the regular
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-results_at_[hidden] email alerts and some out-of-date
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; DB monitoring junk. You can ignore that stuff.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh, are there some nightly (DB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; pruning/cleaning/vacuuming?) cron jobs that Pasha should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; running?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I thought this issue was solved in r1119 (see below). Do you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have the latest mtt/server scripts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit">https://svn.open-mpi.org/trac/mtt/changeset/1119/trunk/server/php/submit</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, May/06/2008 03:26:43PM, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; About the issue:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. On client side I see &quot;&quot;*** WARNING: MTTDatabase client 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; did not get a serial&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As result of the error some of MTT results is not visible 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; via the web reporter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. On server side I found follow error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [client 10.4.3.214] PHP Fatal error:  Allowed memory size 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of 33554432 bytes exhausted (tried to allocate 23592960
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; bytes) in /.autodirect/swgwork/MTT/mtt/submit/index.php(79) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; : eval()'d code on line 77515
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:26:05 2008] [notice] caught SIGTERM, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shutting down
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] suEXEC mechanism 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; enabled (wrapper: /usr/sbin/suexec)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: generating 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; secret for digest authentication ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] Digest: done
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: Built with 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OpenLDAP LDAP SDK
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [Mon May 05 19:30:54 2008] [notice] LDAP: SSL support 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unavailable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; My memory limit in php.ini file was set on 256MB !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Index: submit/index.php
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- submit/index.php    (revision 1200)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ submit/index.php    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1,6 +1,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;?php
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +# Copyright (c) 2008      Mellanox Technologies.  All rights 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reserved.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -24,8 +25,7 @@ if (file_exists(&quot;$topdir/config.inc&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ini_set(&quot;memory_limit&quot;, &quot;32M&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $topdir = '..';
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -$ompi_home = '/l/osl/www/doc/www.open-mpi.org';
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -include_once(&quot;$ompi_home/dbpassword.inc&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +include_once(&quot;$topdir/database.inc&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; include_once(&quot;$topdir/reporter.inc&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1465,60 +1465,6 @@ function get_table_indexes($table_name,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    return simple_select($sql_cmd);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# Function used to determine which _POST fields
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# to INSERT. Prevent non-existent fields from being
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# INSERTed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function get_table_fields($table_name) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $dbname;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $id;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    # These indexes are special in that they link phases
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    # together and hence, can and do show up in _POST
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    if ($table_name == &quot;test_build&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $special_indexes = array(&quot;mpi_install$id&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    elseif ($table_name == &quot;test_run&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $special_indexes = array(&quot;test_build$id&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    # Crude way to tell whether a field is an index
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $is_not_index_clause =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (table_name = '$table_name' AND NOT &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (data_type = 'integer' AND &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t column_name ~ '_id$' AND &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t table_catalog = '$dbname'))&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $is_special_index_clause =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (table_name = '$table_name' AND &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -           &quot;\n\t (column_name = '$special_indexes[0]'))&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $is_index_columns = array(
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            &quot;column_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            &quot;data_type&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            &quot;column_default&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $sql_cmd = &quot;\n   SELECT &quot; . join(&quot;,&quot;,$is_index_columns) .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\n\t FROM information_schema.columns WHERE &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\n\t &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -                     $is_not_index_clause . &quot; OR &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -                     $is_special_index_clause . ';';
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    # This table will be easier to manage if it's
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    # keyed by column, instead of index
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $tmp = array();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $arr = array();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $arr = select($sql_cmd);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    foreach ($is_index_columns as $col) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $tmp[$col] = array();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        for ($i = 0; $i &lt; sizeof($arr); $i++) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            $tmp[$col][] = $arr[$i][$col];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return $tmp;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Useful display of all the parameters posted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Warning: this function could explode the memory footprint 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; causing the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1622,90 +1568,6 @@ function is_null_($var) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ###################################################################### 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function do_pg_connect() {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $dbname;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $user;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $pass;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    global $pgsql_conn;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    static $connected = false;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    if (!$connected) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $pgsql_conn =
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            pg_connect(&quot;host=localhost port=5432 dbname=$dbname 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; user=$user password=$pass&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # Exit if we cannot connect
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        if (!$pgsql_conn) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            mtt_abort(&quot;\nCould not connect to the $dbname 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; database; &quot; .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -                      &quot;submit this run later.&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        else {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            $connected = true;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            # Serialize all transactions by default - Safer that 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; way.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            do_pg_query(&quot;SET SESSION CHARACTERISTICS AS 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; TRANSACTION ISOLATION LEVEL SERIALIZABLE&quot;, false);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # pg_set_error_verbosity($pgsql_conn, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PGSQL_ERRORS_VERBOSE); # PHP 5 needed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # pg_trace($_ENV['HOME'] . &quot;/pgsql.trace&quot;, 'w', 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $pgsql_conn);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # debug(&quot;\npg_options: &quot; . 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; var_export(pg_options($pgsql_conn)));
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function do_pg_query($cmd, $silent) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $db_res = null;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    if (! ($db_res = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # Some errors are unsurprising, allow for silence in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        # such cases
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        if (! $silent) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            mtt_error($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -            mtt_send_mail($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nDatabase rows affected: &quot; . 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pg_affected_rows($db_res) . &quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return $db_res;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# Fetch scalar value
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function select_scalar($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $set = array();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $set = simple_select($cmd);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return array_shift($set);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# Fetch 1D array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function simple_select($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $rows = null;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        mtt_error($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        mtt_send_mail($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $max = pg_num_rows($result);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    for ($i = 0; $i &lt; $max; ++$i) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $row = pg_fetch_array($result, $i, PGSQL_NUM);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $rows[] = $row[0];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return $rows;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Fetch an associative hash (column name =&gt; value)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; function associative_select($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -1722,21 +1584,6 @@ function associative_select($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    return pg_fetch_array($result);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -# Fetch 2D array
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -function select($cmd) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    do_pg_connect();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    debug(&quot;\nSQL: $cmd\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    if (! ($result = pg_query($cmd))) {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        $out = &quot;\nSQL QUERY: &quot; . $cmd .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_last_error() .
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -               &quot;\nSQL ERROR: &quot; . pg_result_error();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        mtt_error($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -        mtt_send_mail($out);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    return pg_fetch_all($result);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -}
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ###################################################################### 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Function for reporting errors back to the client
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies

</pre>
<p>
Index: database.inc
<br>
===================================================================
<br>
--- database.inc	(revision 1200)
<br>
+++ database.inc	(working copy)
<br>
@@ -3,6 +3,7 @@
<br>
&nbsp;#
<br>
&nbsp;# Copyright (c) 2006 Sun Microsystems, Inc.
<br>
&nbsp;#                         All rights reserved.
<br>
+# Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
<br>
&nbsp;# $COPYRIGHT$
<br>
&nbsp;#
<br>
&nbsp;# Additional copyrights may follow
<br>
@@ -100,10 +101,13 @@ function do_pg_connect() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$pgsql_conn = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pg_connect(&quot;host=localhost port=5432 dbname=$mtt_database_name user=$mtt_database_username password=$mtt_database_password&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!$pgsql_conn) {
<br>
-            print(&quot;\nCould not connect to '$dbname' database.&quot;);
<br>
-            exit;
<br>
+            mtt_abort(&quot;\nCould not connect to the $dbname database; &quot; .
<br>
+                    &quot;submit this run later.&quot;);
<br>
+        } else {
<br>
+            $connected = true;
<br>
+# Serialize all transactions by default - Safer that way.
<br>
+            do_pg_query(&quot;SET SESSION CHARACTERISTICS AS TRANSACTION ISOLATION LEVEL SERIALIZABLE&quot;, false);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        $connected = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -113,12 +117,17 @@ function do_pg_query($cmd, $silent) {
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$start = time();
<br>
&nbsp;
<br>
-    debug_sql($cmd, 2);
<br>
+    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (! ($db_res = pg_query($cmd))) {
<br>
+        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
+
<br>
+# Some errors are unsurprising, allow for silence in
<br>
+# such cases
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (! $silent) {
<br>
-            print(&quot;\npostgres: &quot; .
<br>
-                        pg_last_error() . &quot;\n&quot; .
<br>
-                        pg_result_error());
<br>
+            mtt_error($out);
<br>
+            mtt_send_mail($out);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
@@ -137,21 +146,9 @@ function do_pg_query($cmd, $silent) {
<br>
&nbsp;
<br>
&nbsp;# Fetch scalar value
<br>
&nbsp;function select_scalar($cmd) {
<br>
-    do_pg_connect();
<br>
-
<br>
-    $rows = null;
<br>
-
<br>
-    debug_sql($cmd, 2);
<br>
-    if (! ($result = pg_query($cmd))) {
<br>
-        print(&quot;\npostgres: &quot; . pg_last_error() . &quot;\n&quot; .
<br>
-                  pg_result_error());
<br>
-    }
<br>
-    $max = pg_num_rows($result);
<br>
-    for ($i = 0; $i &lt; $max; ++$i) {
<br>
-        $row = pg_fetch_array($result, $i, PGSQL_NUM);
<br>
-        $rows[] = $row[0];
<br>
-    }
<br>
-    return array_shift($rows);
<br>
+    $set = array();
<br>
+    $set = simple_select($cmd);
<br>
+    return array_shift($set);
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;# Fetch 1D array
<br>
@@ -160,10 +157,13 @@ function simple_select($cmd) {
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$rows = null;
<br>
&nbsp;
<br>
-    debug_sql($cmd, 2);
<br>
+    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (! ($result = pg_query($cmd))) {
<br>
-        print(&quot;\npostgres: &quot; . pg_last_error() . &quot;\n&quot; .
<br>
-                  pg_result_error());
<br>
+        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
+        mtt_error($out);
<br>
+        mtt_send_mail($out);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$max = pg_num_rows($result);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ($i = 0; $i &lt; $max; ++$i) {
<br>
@@ -177,10 +177,13 @@ function simple_select($cmd) {
<br>
&nbsp;function select($cmd) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do_pg_connect();
<br>
&nbsp;
<br>
-    debug_sql($cmd, 2);
<br>
+    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (! ($result = pg_query($cmd))) {
<br>
-        print(&quot;\npostgres: &quot; . pg_last_error() . &quot;\n&quot; .
<br>
-                  pg_result_error());
<br>
+        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
+            &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
+        mtt_error($out);
<br>
+        mtt_send_mail($out);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pg_fetch_all($result);
<br>
&nbsp;}
<br>
Index: submit/index.php
<br>
===================================================================
<br>
--- submit/index.php	(revision 1200)
<br>
+++ submit/index.php	(working copy)
<br>
@@ -1,6 +1,7 @@
<br>
&nbsp;&lt;?php
<br>
&nbsp;# Copyright (c) 2006      Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;# Copyright (c) 2006-2007 Sun Microsystems, Inc.  All rights reserved.
<br>
+# Copyright (c) 2008      Mellanox Technologies.  All rights reserved.
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;#
<br>
@@ -24,8 +25,7 @@ if (file_exists(&quot;$topdir/config.inc&quot;)) {
<br>
&nbsp;ini_set(&quot;memory_limit&quot;, &quot;32M&quot;);
<br>
&nbsp;
<br>
&nbsp;$topdir = '..';
<br>
-$ompi_home = '/l/osl/www/doc/www.open-mpi.org';
<br>
-include_once(&quot;$ompi_home/dbpassword.inc&quot;);
<br>
+include_once(&quot;$topdir/database.inc&quot;);
<br>
&nbsp;include_once(&quot;$topdir/reporter.inc&quot;);
<br>
&nbsp;
<br>
&nbsp;
<br>
@@ -1465,60 +1465,6 @@ function get_table_indexes($table_name, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return simple_select($sql_cmd);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-# Function used to determine which _POST fields
<br>
-# to INSERT. Prevent non-existent fields from being
<br>
-# INSERTed
<br>
-function get_table_fields($table_name) {
<br>
-
<br>
-    global $dbname;
<br>
-    global $id;
<br>
-
<br>
-    # These indexes are special in that they link phases
<br>
-    # together and hence, can and do show up in _POST
<br>
-    if ($table_name == &quot;test_build&quot;)
<br>
-        $special_indexes = array(&quot;mpi_install$id&quot;);
<br>
-    elseif ($table_name == &quot;test_run&quot;)
<br>
-        $special_indexes = array(&quot;test_build$id&quot;);
<br>
-
<br>
-    # Crude way to tell whether a field is an index
<br>
-    $is_not_index_clause =
<br>
-           &quot;\n\t (table_name = '$table_name' AND NOT &quot; .
<br>
-           &quot;\n\t (data_type = 'integer' AND &quot; .
<br>
-           &quot;\n\t column_name ~ '_id$' AND &quot; .
<br>
-           &quot;\n\t table_catalog = '$dbname'))&quot;;
<br>
-
<br>
-    $is_special_index_clause = 
<br>
-           &quot;\n\t (table_name = '$table_name' AND &quot; .
<br>
-           &quot;\n\t (column_name = '$special_indexes[0]'))&quot;;
<br>
-
<br>
-    $is_index_columns = array(
<br>
-            &quot;column_name&quot;,
<br>
-            &quot;data_type&quot;,
<br>
-            &quot;column_default&quot;);
<br>
-
<br>
-    $sql_cmd = &quot;\n   SELECT &quot; . join(&quot;,&quot;,$is_index_columns) .
<br>
-               &quot;\n\t FROM information_schema.columns WHERE &quot; .
<br>
-               &quot;\n\t &quot; . 
<br>
-                     $is_not_index_clause . &quot; OR &quot; .
<br>
-                     $is_special_index_clause . ';';
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    # This table will be easier to manage if it's
<br>
-    # keyed by column, instead of index
<br>
-    $tmp = array();
<br>
-    $arr = array();
<br>
-    $arr = select($sql_cmd);
<br>
-
<br>
-    foreach ($is_index_columns as $col) {
<br>
-        $tmp[$col] = array();
<br>
-        for ($i = 0; $i &lt; sizeof($arr); $i++) {
<br>
-            $tmp[$col][] = $arr[$i][$col];
<br>
-        }
<br>
-    }
<br>
-    return $tmp;
<br>
-}
<br>
-
<br>
&nbsp;#
<br>
&nbsp;# Useful display of all the parameters posted.
<br>
&nbsp;# Warning: this function could explode the memory footprint causing the 
<br>
@@ -1622,90 +1568,6 @@ function is_null_($var) {
<br>
&nbsp;
<br>
&nbsp;######################################################################
<br>
&nbsp;
<br>
-function do_pg_connect() {
<br>
-
<br>
-    global $dbname;
<br>
-    global $user;
<br>
-    global $pass;
<br>
-    global $pgsql_conn;
<br>
-    static $connected = false;
<br>
-
<br>
-    if (!$connected) {
<br>
-        $pgsql_conn =
<br>
-            pg_connect(&quot;host=localhost port=5432 dbname=$dbname user=$user password=$pass&quot;);
<br>
-
<br>
-        # Exit if we cannot connect
<br>
-        if (!$pgsql_conn) {
<br>
-            mtt_abort(&quot;\nCould not connect to the $dbname database; &quot; .
<br>
-                      &quot;submit this run later.&quot;);
<br>
-        }
<br>
-        else {
<br>
-            $connected = true;
<br>
-
<br>
-            # Serialize all transactions by default - Safer that way.
<br>
-            do_pg_query(&quot;SET SESSION CHARACTERISTICS AS TRANSACTION ISOLATION LEVEL SERIALIZABLE&quot;, false);
<br>
-        }
<br>
-
<br>
-        # pg_set_error_verbosity($pgsql_conn, PGSQL_ERRORS_VERBOSE); # PHP 5 needed
<br>
-        # pg_trace($_ENV['HOME'] . &quot;/pgsql.trace&quot;, 'w', $pgsql_conn);
<br>
-        # debug(&quot;\npg_options: &quot; . var_export(pg_options($pgsql_conn)));
<br>
-    }
<br>
-}
<br>
-
<br>
-function do_pg_query($cmd, $silent) {
<br>
-    $db_res = null;
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($db_res = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-
<br>
-        # Some errors are unsurprising, allow for silence in
<br>
-        # such cases
<br>
-        if (! $silent) {
<br>
-            mtt_error($out);
<br>
-            mtt_send_mail($out);
<br>
-        }
<br>
-    }
<br>
-    debug(&quot;\nDatabase rows affected: &quot; . pg_affected_rows($db_res) . &quot;\n&quot;);
<br>
-
<br>
-    return $db_res;
<br>
-}
<br>
-
<br>
-# Fetch scalar value
<br>
-function select_scalar($cmd) {
<br>
-
<br>
-    $set = array();
<br>
-    $set = simple_select($cmd);
<br>
-    return array_shift($set);
<br>
-}
<br>
-
<br>
-# Fetch 1D array
<br>
-function simple_select($cmd) {
<br>
-
<br>
-    do_pg_connect();
<br>
-
<br>
-    $rows = null;
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($result = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-        mtt_error($out);
<br>
-        mtt_send_mail($out);
<br>
-    }
<br>
-    $max = pg_num_rows($result);
<br>
-    for ($i = 0; $i &lt; $max; ++$i) {
<br>
-        $row = pg_fetch_array($result, $i, PGSQL_NUM);
<br>
-        $rows[] = $row[0];
<br>
-    }
<br>
-    return $rows;
<br>
-}
<br>
-
<br>
&nbsp;# Fetch an associative hash (column name =&gt; value)
<br>
&nbsp;function associative_select($cmd) {
<br>
&nbsp;
<br>
@@ -1722,21 +1584,6 @@ function associative_select($cmd) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return pg_fetch_array($result);
<br>
&nbsp;}
<br>
&nbsp;
<br>
-# Fetch 2D array
<br>
-function select($cmd) {
<br>
-    do_pg_connect();
<br>
-
<br>
-    debug(&quot;\nSQL: $cmd\n&quot;);
<br>
-    if (! ($result = pg_query($cmd))) {
<br>
-        $out = &quot;\nSQL QUERY: &quot; . $cmd .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_last_error() .
<br>
-               &quot;\nSQL ERROR: &quot; . pg_result_error();
<br>
-        mtt_error($out);
<br>
-        mtt_send_mail($out);
<br>
-    }
<br>
-    return pg_fetch_all($result);
<br>
-}
<br>
-
<br>
&nbsp;######################################################################
<br>
&nbsp;
<br>
&nbsp;# Function for reporting errors back to the client
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0544.php">Ethan Mallove: "Re: [MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>Previous message:</strong> <a href="0542.php">Wen Hao Wang: "[MTT users] MTT fail to require MTT::Test::Specify::Simple"</a>
<li><strong>In reply to:</strong> <a href="0539.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
<li><strong>Reply:</strong> <a href="0548.php">Josh Hursey: "Re: [MTT users] MTT server side problem"</a>
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
