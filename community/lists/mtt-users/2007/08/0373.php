<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 04:12:50 2007" -->
<!-- isoreceived="20070828081250" -->
<!-- sent="Tue, 28 Aug 2007 11:15:28 +0300" -->
<!-- isosent="20070828081528" -->
<!-- name="Shai Venter" -->
<!-- email="venters_at_[hidden]" -->
<!-- subject="[MTT users] Please, forward this question to open-mpi developers" -->
<!-- id="6C2C79E72C305246B504CBA17B5500C902258027_at_mtlexch01.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.25.1188057612.22629.mtt-users_at_open-mpi.org" -->
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
<strong>From:</strong> Shai Venter (<em>venters_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 04:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Tim Prins: "[MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT users] results being submitted as wrong suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
<li><strong>Reply:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys,
<br>
Ive found that when entering &quot;./ompi_info --param oob tcp&quot;  for help on
<br>
the oob, I see this: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_include&quot; (current value: &lt;none&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: parameter &quot;oob_tcp_exclude&quot; (current value: &lt;none&gt;)
<br>
<p>Should'nt it be oob_tcp_if_include , oob_tcp_if_exclude ?
<br>
<p><p>Regards,
<br>
Shai Venter.
<br>
<p>-----Original Message-----
<br>
From: mtt-users-bounces_at_[hidden]
<br>
[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of
<br>
mtt-users-request_at_[hidden]
<br>
Sent: Saturday, August 25, 2007 7:00 PM
<br>
To: mtt-users_at_[hidden]
<br>
Subject: mtt-users Digest, Vol 18, Issue 3
<br>
<p>Send mtt-users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mtt-users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific
<br>
than &quot;Re: Contents of mtt-users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;&nbsp;1. MTT Database and Reporter Upgrade **Action Required**
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Josh Hursey)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Fri, 24 Aug 2007 13:37:18 -0400
<br>
From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: [MTT users] MTT Database and Reporter Upgrade **Action
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Required**
<br>
To: General user list for the MPI Testing Tool
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;mtt-users_at_[hidden]&gt;
<br>
Message-ID: &lt;58B351F2-6879-42B9-B44B-079A1BADFDC4_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
<br>
<p>Short Version:
<br>
--------------
<br>
The MTT development group is rolling out newly optimized web frontend  
<br>
and backend database. As a result we will be taking down the MTT site  
<br>
at IU Monday, August 27 from 8 am to Noon US eastern time.
<br>
<p>During this time you will not be able to submit data to the MTT  
<br>
database. Therefore you need to disable any runs that will report  
<br>
during this time or your client will fail with unable to connect to  
<br>
server messages.
<br>
<p>This change does not affect the client configurations, so MTT users  
<br>
do *not* need to update their clients at this time.
<br>
<p><p>Longer Version:
<br>
---------------
<br>
The MTT development team has been working diligently on server side
<br>
optimizations over the past few months. This work involved major
<br>
changes to the database schema, web reporter, and web submit
<br>
components of the server.
<br>
<p>We want to roll out the new server side optimizations on Monday, Aug.
<br>
27. Given the extensive nature of the improvements the MTT server
<br>
will need to be taken down for a few hours for this upgrade to take
<br>
place. We are planning on taking down the MTT server at 8 am and
<br>
we hope to have it back by Noon US Eastern time.
<br>
<p>MTT users that would normally submit results during this time range
<br>
will need to disable their runs, or they will see server error
<br>
messages during this outage.
<br>
<p>This upgrade does not require any client changes, so outside of the
<br>
down time contributors need not change or upgrade their MTT
<br>
installations.
<br>
<p>Below are a few rough performance numbers illustrating the difference
<br>
between the old and new server versions as seen by the reporter.
<br>
<p>Summary report: 24 hours, all orgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;87 sec - old version
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 sec - new version
<br>
Summary report: 24 hours, org = 'iu'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;37 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 sec - new
<br>
Summary report: Past 3 days, all orgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;138 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9 sec - new
<br>
Summary report: Past 3 days, org = 'iu'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;49 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11 sec - new
<br>
Summary report: Past 2 weeks, all orgs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;863 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;34 sec - new
<br>
Summary report: Past 2 weeks, org = 'iu'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;878 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;12 sec - new
<br>
Summary report: Past 1 month, all org
<br>
&nbsp;&nbsp;&nbsp;1395 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;158 sec - new
<br>
Summary report: Past 1 month, org = 'iu'
<br>
&nbsp;&nbsp;&nbsp;1069 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;39 sec - new
<br>
Summary report: (2007-06-18 - 2007-06-19), all org
<br>
&nbsp;&nbsp;&nbsp;&nbsp;484 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 sec - new
<br>
Summary report: (2007-06-18 - 2007-06-19), org = 'iu'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;479 sec - old
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 sec - new
<br>
<p><p><p>------------------------------
<br>
<p>_______________________________________________
<br>
mtt-users mailing list
<br>
mtt-users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
<br>
<p><p>End of mtt-users Digest, Vol 18, Issue 3
<br>
****************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0374.php">Tim Prins: "[MTT users] Database submit error"</a>
<li><strong>Previous message:</strong> <a href="0372.php">Jeff Squyres: "Re: [MTT users] results being submitted as wrong suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
<li><strong>Reply:</strong> <a href="0379.php">Jeff Squyres: "Re: [MTT users] Please, forward this question to open-mpi developers"</a>
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
