<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 18:46:12 2006" -->
<!-- isoreceived="20060630224612" -->
<!-- sent="Fri, 30 Jun 2006 18:46:10 -0400" -->
<!-- isosent="20060630224610" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] database and all that" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAEA22C_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 18:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew and I got on the phone to talk about the database stuff that
<br>
we've been discussing on the mailing list.  There were several
<br>
miscommunications, but I think we understand each other now.  Here's the
<br>
important bits:
<br>
<p>- mtt does currently submit one test result at a time (e.g., the result
<br>
of a single intel test).  It certainly can be adjusted to submit them
<br>
all at once, but right now it submits them individually.
<br>
- a perfbase &quot;run&quot; is actually a unique *table* in the database that
<br>
holds the variant data (not a *row* in an existing table, as I thought).
<br>
<p>Hence, submitting 400+ &quot;runs&quot; for a single invocation of the intel test
<br>
suite would be so inefficient that we need to consider something better
<br>
(especially since we'll be invoking the intel test suite potentially
<br>
many times a night at each testing site -- so it's not just that we'll
<br>
be creating boatloads of tables; we'll be creating N time boatloads of
<br>
tables).
<br>
<p>So for the moment, we do need to submit all the intel tests as a single
<br>
&quot;run&quot;, meaning that we have to submit them to the database all at once
<br>
(how we upload them to the server is a different issue).  This
<br>
unfortunately means no partial results.
<br>
<p>For the immediate need, I think that this is ok because we're focusing
<br>
on nightly tests where partial results aren't as important.  But this is
<br>
definitely something that we should ponder further as MTT becomes more
<br>
pervasive (e.g., during a release cycle when we might be running MTT
<br>
multiple times a day).  It is probably even worth talking to the
<br>
perfbase author about this issue [...starting to compose a mail to the
<br>
perfbase mailing list...].
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="0030.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] escaping quotes issue in DoCommand.pm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0032.php">Terry D. Dontje: "Re: [MTT users] database and all that"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/07/0034.php">Ethan Mallove: "[MTT users] sha1sum on x64 Solaris"</a>
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
