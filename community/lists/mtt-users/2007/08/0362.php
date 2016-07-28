<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 13:37:22 2007" -->
<!-- isoreceived="20070824173722" -->
<!-- sent="Fri, 24 Aug 2007 13:37:18 -0400" -->
<!-- isosent="20070824173718" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT users] MTT Database and Reporter Upgrade **Action Required**" -->
<!-- id="58B351F2-6879-42B9-B44B-079A1BADFDC4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 13:37:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Tim Prins: "[MTT users] trouble with new reporter"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Josh Hursey: "Re: [MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Maybe reply:</strong> <a href="0364.php">Josh Hursey: "Re: [MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short Version:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Tim Prins: "[MTT users] trouble with new reporter"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Jeff Squyres: "Re: [MTT users] WriteINI() calls in MPI/Install and Test/Build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0364.php">Josh Hursey: "Re: [MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
<li><strong>Maybe reply:</strong> <a href="0364.php">Josh Hursey: "Re: [MTT users] MTT Database and Reporter Upgrade **Action Required**"</a>
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
