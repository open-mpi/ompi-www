<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 13:45:30 2007" -->
<!-- isoreceived="20070824174530" -->
<!-- sent="Fri, 24 Aug 2007 13:45:08 -0400" -->
<!-- isosent="20070824174508" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [MTT users] MTT Database and Reporter Upgrade **Action Required**" -->
<!-- id="B3CB8C92-5DEA-4B00-B709-3F16FC4D4D17_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="58B351F2-6879-42B9-B44B-079A1BADFDC4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-24 13:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Jeff Squyres: "[OMPI devel] Better web searching of mail archives"</a>
<li><strong>Previous message:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI.  The MTT database will be down for a few hours on Monday  
<br>
morning.  It'll be replaced with a much mo'better version -- [much]  
<br>
faster than it was before.  Details below.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 24, 2007 1:37:18 PM EDT
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool &lt;mtt-users_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [MTT users] MTT Database and Reporter Upgrade **Action  
</span><br>
<span class="quotelev1">&gt; Required**
</span><br>
<span class="quotelev1">&gt; Reply-To: General user list for the MPI Testing Tool &lt;mtt- 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short Version:
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; The MTT development group is rolling out newly optimized web frontend
</span><br>
<span class="quotelev1">&gt; and backend database. As a result we will be taking down the MTT site
</span><br>
<span class="quotelev1">&gt; at IU Monday, August 27 from 8 am to Noon US eastern time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During this time you will not be able to submit data to the MTT
</span><br>
<span class="quotelev1">&gt; database. Therefore you need to disable any runs that will report
</span><br>
<span class="quotelev1">&gt; during this time or your client will fail with unable to connect to
</span><br>
<span class="quotelev1">&gt; server messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This change does not affect the client configurations, so MTT users
</span><br>
<span class="quotelev1">&gt; do *not* need to update their clients at this time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Longer Version:
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; The MTT development team has been working diligently on server side
</span><br>
<span class="quotelev1">&gt; optimizations over the past few months. This work involved major
</span><br>
<span class="quotelev1">&gt; changes to the database schema, web reporter, and web submit
</span><br>
<span class="quotelev1">&gt; components of the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We want to roll out the new server side optimizations on Monday, Aug.
</span><br>
<span class="quotelev1">&gt; 27. Given the extensive nature of the improvements the MTT server
</span><br>
<span class="quotelev1">&gt; will need to be taken down for a few hours for this upgrade to take
</span><br>
<span class="quotelev1">&gt; place. We are planning on taking down the MTT server at 8 am and
</span><br>
<span class="quotelev1">&gt; we hope to have it back by Noon US Eastern time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MTT users that would normally submit results during this time range
</span><br>
<span class="quotelev1">&gt; will need to disable their runs, or they will see server error
</span><br>
<span class="quotelev1">&gt; messages during this outage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This upgrade does not require any client changes, so outside of the
</span><br>
<span class="quotelev1">&gt; down time contributors need not change or upgrade their MTT
</span><br>
<span class="quotelev1">&gt; installations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below are a few rough performance numbers illustrating the difference
</span><br>
<span class="quotelev1">&gt; between the old and new server versions as seen by the reporter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary report: 24 hours, all orgs
</span><br>
<span class="quotelev1">&gt;      87 sec - old version
</span><br>
<span class="quotelev1">&gt;       6 sec - new version
</span><br>
<span class="quotelev1">&gt; Summary report: 24 hours, org = 'iu'
</span><br>
<span class="quotelev1">&gt;      37 sec - old
</span><br>
<span class="quotelev1">&gt;       4 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 3 days, all orgs
</span><br>
<span class="quotelev1">&gt;     138 sec - old
</span><br>
<span class="quotelev1">&gt;       9 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 3 days, org = 'iu'
</span><br>
<span class="quotelev1">&gt;      49 sec - old
</span><br>
<span class="quotelev1">&gt;      11 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 2 weeks, all orgs
</span><br>
<span class="quotelev1">&gt;     863 sec - old
</span><br>
<span class="quotelev1">&gt;      34 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 2 weeks, org = 'iu'
</span><br>
<span class="quotelev1">&gt;     878 sec - old
</span><br>
<span class="quotelev1">&gt;      12 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 1 month, all org
</span><br>
<span class="quotelev1">&gt;    1395 sec - old
</span><br>
<span class="quotelev1">&gt;     158 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: Past 1 month, org = 'iu'
</span><br>
<span class="quotelev1">&gt;    1069 sec - old
</span><br>
<span class="quotelev1">&gt;      39 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: (2007-06-18 - 2007-06-19), all org
</span><br>
<span class="quotelev1">&gt;     484 sec - old
</span><br>
<span class="quotelev1">&gt;       5 sec - new
</span><br>
<span class="quotelev1">&gt; Summary report: (2007-06-18 - 2007-06-19), org = 'iu'
</span><br>
<span class="quotelev1">&gt;     479 sec - old
</span><br>
<span class="quotelev1">&gt;       2 sec - new
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2215.php">Jeff Squyres: "[OMPI devel] Better web searching of mail archives"</a>
<li><strong>Previous message:</strong> <a href="2213.php">George Bosilca: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Reply:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
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
