<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 09:48:51 2007" -->
<!-- isoreceived="20070827134851" -->
<!-- sent="Mon, 27 Aug 2007 09:48:24 -0400" -->
<!-- isosent="20070827134824" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**" -->
<!-- id="A475DA9A-E820-4230-B8D1-E0D63B17CBA1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2FECCC2-CA3D-456C-8E6C-CACE6B16DC83_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-27 09:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's do some simple submits and ensure that we can query for them  
<br>
properly.  I'm guessing that everything will be fine, but let's be  
<br>
thorough...
<br>
<p>I'll kick off a simple round of get/install/get/build/run for trivial  
<br>
tests now.
<br>
<p>On Aug 27, 2007, at 9:28 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Yeah I was unsure if I had the proper permissions to move the file.
</span><br>
<span class="quotelev1">&gt; Apparently I do :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The upgrade is finished now. I just ran a simple MTT on the Odin
</span><br>
<span class="quotelev1">&gt; machine at IU and it seemed to have gone through well. Should we
</span><br>
<span class="quotelev1">&gt; announce to the larger list or did you all want to do some testing
</span><br>
<span class="quotelev1">&gt; first?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2007, at 7:48 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think probably the easiest thing to do is just mv reporter.php and
</span><br>
<span class="quotelev2">&gt;&gt; submit.php so that mtt clients and individuals browsing will not be
</span><br>
<span class="quotelev2">&gt;&gt; able to access it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 26, 2007, at 10:58 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff and Ethan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I shutdown the MTT server? Do I just log into milliways as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt, or can I disable it from my user?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: August 24, 2007 1:37:18 PM EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: General user list for the MPI Testing Tool &lt;mtt-users_at_open-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi.org&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [MTT users] MTT Database and Reporter Upgrade **Action
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Required**
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: General user list for the MPI Testing Tool &lt;mtt-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Short Version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MTT development group is rolling out newly optimized web
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; frontend
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and backend database. As a result we will be taking down the MTT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; site
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at IU Monday, August 27 from 8 am to Noon US eastern time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; During this time you will not be able to submit data to the MTT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; database. Therefore you need to disable any runs that will report
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; during this time or your client will fail with unable to connect to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; server messages.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This change does not affect the client configurations, so MTT users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do *not* need to update their clients at this time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Longer Version:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The MTT development team has been working diligently on server side
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; optimizations over the past few months. This work involved major
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes to the database schema, web reporter, and web submit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components of the server.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We want to roll out the new server side optimizations on Monday,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Aug.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 27. Given the extensive nature of the improvements the MTT server
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will need to be taken down for a few hours for this upgrade to take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; place. We are planning on taking down the MTT server at 8 am and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we hope to have it back by Noon US Eastern time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT users that would normally submit results during this time range
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will need to disable their runs, or they will see server error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; messages during this outage.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This upgrade does not require any client changes, so outside of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; down time contributors need not change or upgrade their MTT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Below are a few rough performance numbers illustrating the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; difference
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between the old and new server versions as seen by the reporter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: 24 hours, all orgs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      87 sec - old version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       6 sec - new version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: 24 hours, org = 'iu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      37 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       4 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 3 days, all orgs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     138 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       9 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 3 days, org = 'iu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      49 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      11 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 2 weeks, all orgs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     863 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      34 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 2 weeks, org = 'iu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     878 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      12 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 1 month, all org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1395 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     158 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: Past 1 month, org = 'iu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1069 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      39 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: (2007-06-18 - 2007-06-19), all org
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     484 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       5 sec - new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Summary report: (2007-06-18 - 2007-06-19), org = 'iu'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     479 sec - old
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       2 sec - new
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>In reply to:</strong> <a href="0010.php">Josh Hursey: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="0012.php">Jeff Squyres: "Re: [MTT devel] MTT Database and Reporter Upgrade **Action Required**"</a>
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
