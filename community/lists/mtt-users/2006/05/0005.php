<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 14:39:58 2006" -->
<!-- isoreceived="20060526183958" -->
<!-- sent="Fri, 26 May 2006 14:39:48 -0400" -->
<!-- isosent="20060526183948" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] MTT resurrected" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD824_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-05-26 14:39:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/04/0004.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Status / new people"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Maybe reply:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After long interim periods of inactivity, I finally finished at least a
<br>
good chunk of what my to-do tasks were from the IU MTT meeting several
<br>
months ago.   I committed r175 earlier today.  Specifically:
<br>
<p>- reverse linkage (i.e., later phases refer to prior phases)
<br>
- Trivial modules (testing MPI hello world)
<br>
<p>There is a strong push to start using MTT, mainly for 1.1 release
<br>
testing but also for other reasons.  So the question is -- what do we
<br>
need to be able to get a few sites running MTT via cron and dumping the
<br>
results back to a central perfbase?  Granted -- MTT is not feature
<br>
complete.  There are parts that are not where we'd like them to be
<br>
(e.g., based on what we discussed at the IU MTT meeting).  But with my
<br>
commit this morning, MTT should be functional again, so we might as well
<br>
start using it.
<br>
<p>Note that samples/sample.ini is now out of date.  samples/odin.in is the
<br>
most recent and shows all the correct linkage.  It can still be cleaned
<br>
up quite a bit (e.g., Brian was totally unimpressed with &quot;test build:
<br>
intel&quot;, but that very definitely was a test case for my Shell build
<br>
module -- none of that gorp has to be there; it can be moved off into a
<br>
.pm and hidden behind the scenes).
<br>
<p>Brian has been given some cycles by LANL to help get this going ASAP.
<br>
Andy's only got off-hours time to dedicate to MTT, and as experience has
<br>
shown, my time available for MTT, while nonzero, is totally
<br>
unpredictable.
<br>
<p>Here's the obvious things I see that need to be done:
<br>
<p>- verify that the server side of MTT is still functional:
<br>
&nbsp;&nbsp;- is it still running / usable at IU?
<br>
&nbsp;&nbsp;- verify that the code hasn't bit-rotted at all
<br>
&nbsp;&nbsp;- there was a perfbase release this morning; is it worth it to
<br>
upgrade?  I saw one or two features that we may care about
<br>
&nbsp;&nbsp;- clear out all previous test data
<br>
&nbsp;&nbsp;- setup a few user accounts for the basic auth
<br>
<p>- verify the linkage between mtt client and perfbase
<br>
<p>- write some perfbase reports (cron-friendly) for periodic e-mails
<br>
&nbsp;&nbsp;- nightly builds that failed (mpi or tests)
<br>
&nbsp;&nbsp;- nightly test runs that failed
<br>
<p>- get it all running for ompi members
<br>
&nbsp;&nbsp;- setup production perfbase instance at IU
<br>
&nbsp;&nbsp;- ship a standard starter client config to put in cron to run
<br>
&nbsp;&nbsp;- distribute usernames/passwords
<br>
&nbsp;&nbsp;--&gt; we may not support disconnected scenarios yet; even getting
<br>
&quot;connected&quot; scenarios working will be a big step forward and get us a
<br>
lot of data
<br>
<p>- verify that we can have a 2nd perfbase running for continued
<br>
testing/development/debugging that will not impact the production
<br>
perfbase 
<br>
<p>Brian's probably got the most cycles to spend on this; Andrew -- can you
<br>
point him in the right direction for server-side stuff, or help him get
<br>
it running at IU?
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
<li><strong>Next message:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/04/0004.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Status / new people"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Maybe reply:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
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
