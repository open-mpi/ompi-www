<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 07:48:47 2007" -->
<!-- isoreceived="20070827114847" -->
<!-- sent="Mon, 27 Aug 2007 07:48:28 -0400" -->
<!-- isosent="20070827114828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**" -->
<!-- id="83380E6D-2756-4349-8180-187B61BE36AF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="74BE0FCE-A439-4FE2-B717-703FD856CE26_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 07:48:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Josh Hursey: "[MTT devel] Upgrade cron question"</a>
<li><strong>Previous message:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think probably the easiest thing to do is just mv reporter.php and  
<br>
submit.php so that mtt clients and individuals browsing will not be  
<br>
able to access it.
<br>
<p><p>On Aug 26, 2007, at 10:58 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and Ethan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I shutdown the MTT server? Do I just log into milliways as
</span><br>
<span class="quotelev1">&gt; mtt, or can I disable it from my user?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: August 24, 2007 1:37:18 PM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: General user list for the MPI Testing Tool &lt;mtt-users_at_open-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [MTT users] MTT Database and Reporter Upgrade **Action
</span><br>
<span class="quotelev2">&gt;&gt; Required**
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: General user list for the MPI Testing Tool &lt;mtt-
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Short Version:
</span><br>
<span class="quotelev2">&gt;&gt; --------------
</span><br>
<span class="quotelev2">&gt;&gt; The MTT development group is rolling out newly optimized web frontend
</span><br>
<span class="quotelev2">&gt;&gt; and backend database. As a result we will be taking down the MTT site
</span><br>
<span class="quotelev2">&gt;&gt; at IU Monday, August 27 from 8 am to Noon US eastern time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During this time you will not be able to submit data to the MTT
</span><br>
<span class="quotelev2">&gt;&gt; database. Therefore you need to disable any runs that will report
</span><br>
<span class="quotelev2">&gt;&gt; during this time or your client will fail with unable to connect to
</span><br>
<span class="quotelev2">&gt;&gt; server messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This change does not affect the client configurations, so MTT users
</span><br>
<span class="quotelev2">&gt;&gt; do *not* need to update their clients at this time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Longer Version:
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt; The MTT development team has been working diligently on server side
</span><br>
<span class="quotelev2">&gt;&gt; optimizations over the past few months. This work involved major
</span><br>
<span class="quotelev2">&gt;&gt; changes to the database schema, web reporter, and web submit
</span><br>
<span class="quotelev2">&gt;&gt; components of the server.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We want to roll out the new server side optimizations on Monday, Aug.
</span><br>
<span class="quotelev2">&gt;&gt; 27. Given the extensive nature of the improvements the MTT server
</span><br>
<span class="quotelev2">&gt;&gt; will need to be taken down for a few hours for this upgrade to take
</span><br>
<span class="quotelev2">&gt;&gt; place. We are planning on taking down the MTT server at 8 am and
</span><br>
<span class="quotelev2">&gt;&gt; we hope to have it back by Noon US Eastern time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT users that would normally submit results during this time range
</span><br>
<span class="quotelev2">&gt;&gt; will need to disable their runs, or they will see server error
</span><br>
<span class="quotelev2">&gt;&gt; messages during this outage.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This upgrade does not require any client changes, so outside of the
</span><br>
<span class="quotelev2">&gt;&gt; down time contributors need not change or upgrade their MTT
</span><br>
<span class="quotelev2">&gt;&gt; installations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below are a few rough performance numbers illustrating the difference
</span><br>
<span class="quotelev2">&gt;&gt; between the old and new server versions as seen by the reporter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: 24 hours, all orgs
</span><br>
<span class="quotelev2">&gt;&gt;      87 sec - old version
</span><br>
<span class="quotelev2">&gt;&gt;       6 sec - new version
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: 24 hours, org = 'iu'
</span><br>
<span class="quotelev2">&gt;&gt;      37 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;       4 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 3 days, all orgs
</span><br>
<span class="quotelev2">&gt;&gt;     138 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;       9 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 3 days, org = 'iu'
</span><br>
<span class="quotelev2">&gt;&gt;      49 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;      11 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 2 weeks, all orgs
</span><br>
<span class="quotelev2">&gt;&gt;     863 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;      34 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 2 weeks, org = 'iu'
</span><br>
<span class="quotelev2">&gt;&gt;     878 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;      12 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 1 month, all org
</span><br>
<span class="quotelev2">&gt;&gt;    1395 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;     158 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: Past 1 month, org = 'iu'
</span><br>
<span class="quotelev2">&gt;&gt;    1069 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;      39 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: (2007-06-18 - 2007-06-19), all org
</span><br>
<span class="quotelev2">&gt;&gt;     484 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;       5 sec - new
</span><br>
<span class="quotelev2">&gt;&gt; Summary report: (2007-06-18 - 2007-06-19), org = 'iu'
</span><br>
<span class="quotelev2">&gt;&gt;     479 sec - old
</span><br>
<span class="quotelev2">&gt;&gt;       2 sec - new
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Josh Hursey: "[MTT devel] Upgrade cron question"</a>
<li><strong>Previous message:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0007.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
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
