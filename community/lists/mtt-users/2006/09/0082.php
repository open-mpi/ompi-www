<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 08:43:49 2006" -->
<!-- isoreceived="20060905124349" -->
<!-- sent="Tue, 05 Sep 2006 08:43:38 -0400" -->
<!-- isosent="20060905124338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] How's it going?" -->
<!-- id="C122E93A.25608%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-05 08:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/08/0081.php">Jeff Squyres: "[MTT users] Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IU / HLRS -- How's it going?  I see a bunch of submits from you guys in the
<br>
database, so I assume things are running smoothly.  But let me know one way
<br>
or another.
<br>
<p>We have a bunch of improvements waiting in the wings:
<br>
<p>1. The version that you are using makes N connections to the IU web server
<br>
to submit N results (i.e., one connection per result).  This is not a
<br>
problem for many people, but I kept getting cutoff by the Cisco web proxies
<br>
because they thought MTT was a worm.  So I implemented &quot;bulk submit&quot;,
<br>
meaning that results are gathered up (essentially a test run section at a
<br>
time) and submitted in one connection to the database.  Not only does this
<br>
make MTT not look like a worm, it's a bit more efficient (which is not a
<br>
necessarily primary concern, but it is a Good Thing).
<br>
<p>We need to coordinate when to deploy this to you because it affects both the
<br>
&quot;mtt&quot; client and the PHP at the URL that you are submitting to.  More
<br>
details to come on this.  I realize that you guys apparently don't *need*
<br>
this, but a) I do, and b) others might when we deploy MTT to the entire
<br>
group.
<br>
<p>2. Various bug fixes have been committed to the release branch over the last
<br>
week as a direct result of your feedback.  Keep the comments coming!
<br>
<p>3. Sun is actively working on reporting the data in spiffy web pages.  Stay
<br>
tuned on this front.
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
<li><strong>Next message:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/08/0081.php">Jeff Squyres: "[MTT users] Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
<li><strong>Reply:</strong> <a href="0083.php">Josh Hursey: "Re: [MTT users] How's it going?"</a>
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
