<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 14 19:45:14 2005" -->
<!-- isoreceived="20050615004514" -->
<!-- sent="Tue, 14 Jun 2005 20:45:12 -0400" -->
<!-- isosent="20050615004512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Questions on status" -->
<!-- id="bdc690411d30f6a875cbdfefd7ca1971_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050614210425.28338.qmail_at_web31501.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2005-06-14 19:45:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Ben Allan: "Re: [O-MPI users] shell interaction"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2005, at 5:04 PM, Jonathan Day wrote:
<br>
<p><span class="quotelev1">&gt; The mailing list has fallen virtually silent, there's
</span><br>
<span class="quotelev1">&gt; no beta yet out and (although I may have missed it)
</span><br>
<span class="quotelev1">&gt; there doesn't seem to be much in the way of updates on
</span><br>
<span class="quotelev1">&gt; the website.
</span><br>
<p>We're a quiet bunch.  :-)
<br>
<p>Seriously, we didn't really anticipate much activity on this list until 
<br>
the software becomes available.  Then we plan for this list to be the 
<br>
main &quot;user questions&quot; kind of list for Open MPI.  A corresponding 
<br>
&quot;devel&quot; list will also be made available for development questions 
<br>
(i.e., tinkering around in the code of Open MPI itself).
<br>
<p>The beta is not out yet, but barring any unforeseen problems, it should 
<br>
be out &quot;real soon now&quot; (we're adhering to the same policy as LAM/MPI: 
<br>
no absolute predictions on release dates, because they will inevitably 
<br>
end up being wrong).  It will still definitely be beta quality -- a bit 
<br>
rough around the edges (e.g., we have taken just about zero effort so 
<br>
far with making clear user error messages) and still in need of 
<br>
additional work, but the intent is to get the code out in the real 
<br>
world and a) find interesting ways for people to break it, and b) give 
<br>
3rd parties direct insight into how our component system works, and c) 
<br>
encourage others to join the process.
<br>
<p>We actually branched in our subversion repository for the beta about a 
<br>
month ago.  So the beta is actually a bit behind the main trunk HEAD of 
<br>
development, but it'll represent a relatively stable snapshot of the 
<br>
code base.
<br>
<p>As for the web site, we intend to eventually make it quite full of 
<br>
information -- similar to (and someday replacing) the LAM/MPI web site. 
<br>
&nbsp;&nbsp;It has been our experience that the more self-serve information that 
<br>
is up on the web site, the quicker users are able to help themselves 
<br>
when/if problems occur.  But again, the first thing that has to happen 
<br>
is a software release.
<br>
<p><span class="quotelev1">&gt; Can someone on the project just confirm that you are,
</span><br>
<span class="quotelev1">&gt; indeed, all alive and well, not kidnapped by aliens,
</span><br>
<span class="quotelev1">&gt; or been delayed for anything other than the usual
</span><br>
<span class="quotelev1">&gt; round of unpredictable last-minute code glitches?
</span><br>
<p>I can neither confirm nor deny that we have (or have not) been 
<br>
kidnapped by aliens.
<br>
<p>Admittedly, this is taking us longer than we anticipated.  :-(  But we 
<br>
are making steady progress in making what we believe to be a 
<br>
world-class MPI.  As you probably know, Open MPI is the result of 
<br>
merging several different MPI projects, so we're taking the best ideas 
<br>
from each and putting them in Open MPI.  While not all the features 
<br>
from each of the prior MPI implementations will be in Open MPI's first 
<br>
release, they will eventually migrate into Open MPI over time.
<br>
<p><span class="quotelev1">&gt; Also, is anyone in the project doing a Linus Torvalds
</span><br>
<span class="quotelev1">&gt; and using the time to add bunches of new features?
</span><br>
<span class="quotelev1">&gt; (And if so, what are they? :)
</span><br>
<p>We actually implemented a lot of MPI-3 in Open MPI... which mainly 
<br>
consists of removing all the useless parts of MPI-2.  ;-)
<br>
<p>I'm kidding, of course.  Open MPI's first releases will have all of 
<br>
MPI-2 except the one-sided functionality (this was the plan from the 
<br>
beginning, actually -- there was enough else to do and not much demand 
<br>
for the one-sided stuff to justify putting it in the first versions).
<br>
<p>What features were you thinking of?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Previous message:</strong> <a href="0056.php">Ben Allan: "Re: [O-MPI users] shell interaction"</a>
<li><strong>In reply to:</strong> <a href="0053.php">Jonathan Day: "[O-MPI users] Questions on status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
<li><strong>Reply:</strong> <a href="0058.php">Scott Feldman: "Re: [O-MPI users] Questions on status"</a>
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
