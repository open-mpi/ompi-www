<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 15:01:55 2006" -->
<!-- isoreceived="20060526190155" -->
<!-- sent="Fri, 26 May 2006 15:01:47 -0400" -->
<!-- isosent="20060526190147" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT resurrected" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD83B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] MTT resurrected" -->
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
<strong>Date:</strong> 2006-05-26 15:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Maybe in reply to:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Andrew Friedley
</span><br>
<span class="quotelev1">&gt; Sent: Friday, May 26, 2006 2:53 PM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] MTT resurrected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Note that samples/sample.ini is now out of date.  
</span><br>
<span class="quotelev1">&gt; samples/odin.in is the
</span><br>
<span class="quotelev2">&gt; &gt; most recent and shows all the correct linkage.  It can 
</span><br>
<span class="quotelev1">&gt; still be cleaned
</span><br>
<span class="quotelev2">&gt; &gt; up quite a bit (e.g., Brian was totally unimpressed with 
</span><br>
<span class="quotelev1">&gt; &quot;test build:
</span><br>
<span class="quotelev2">&gt; &gt; intel&quot;, but that very definitely was a test case for my Shell build
</span><br>
<span class="quotelev2">&gt; &gt; module -- none of that gorp has to be there; it can be 
</span><br>
<span class="quotelev1">&gt; moved off into a
</span><br>
<span class="quotelev2">&gt; &gt; .pm and hidden behind the scenes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can samples/sample.ini be brought up to date or removed?  No point in 
</span><br>
<span class="quotelev1">&gt; having it as-is.
</span><br>
<p>Yes, it can certainly be brought up to date.  But I'm turning into a
<br>
pumpkin for the weekend shortly and wanted to commit stuff so that
<br>
progress could be made over the weekend.  There wasn't time to update
<br>
sample.ini.  I put a note in there saying &quot;don't look here&quot; in case
<br>
someone does.
<br>
<p>There's still a lot of good info in sample.ini (e.g., it shows a lot of
<br>
the &amp;functions that are available); it just has the wrong linkage
<br>
between phases.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; Brian has been given some cycles by LANL to help get this 
</span><br>
<span class="quotelev1">&gt; going ASAP.
</span><br>
<span class="quotelev2">&gt; &gt; Andy's only got off-hours time to dedicate to MTT, and as 
</span><br>
<span class="quotelev1">&gt; experience has
</span><br>
<span class="quotelev2">&gt; &gt; shown, my time available for MTT, while nonzero, is totally
</span><br>
<span class="quotelev2">&gt; &gt; unpredictable.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here's the obvious things I see that need to be done:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - verify that the server side of MTT is still functional:
</span><br>
<span class="quotelev2">&gt; &gt;   - is it still running / usable at IU?
</span><br>
<span class="quotelev2">&gt; &gt;   - verify that the code hasn't bit-rotted at all
</span><br>
<span class="quotelev2">&gt; &gt;   - there was a perfbase release this morning; is it worth it to
</span><br>
<span class="quotelev2">&gt; &gt; upgrade?  I saw one or two features that we may care about
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which features?  I'm guessing they're the ones I wrote and sent to 
</span><br>
<span class="quotelev1">&gt; Joachim (xml, multi-line), or was there something else you saw?
</span><br>
<p>Yes, those.  Are we currently running an SVN version?  All things being
<br>
equal, it might be better to run a stable release (if we aren't
<br>
already).  Easier for Jochim to help us when things break.  :-)
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt;   - clear out all previous test data
</span><br>
<span class="quotelev2">&gt; &gt;   - setup a few user accounts for the basic auth
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - verify the linkage between mtt client and perfbase
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - write some perfbase reports (cron-friendly) for periodic e-mails
</span><br>
<span class="quotelev2">&gt; &gt;   - nightly builds that failed (mpi or tests)
</span><br>
<span class="quotelev2">&gt; &gt;   - nightly test runs that failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I had mpi install and test build done, will have to look.
</span><br>
<p>Ok.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; - verify that we can have a 2nd perfbase running for continued
</span><br>
<span class="quotelev2">&gt; &gt; testing/development/debugging that will not impact the production
</span><br>
<span class="quotelev2">&gt; &gt; perfbase 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can - just a matter of using a different URL in the client 
</span><br>
<span class="quotelev1">&gt; config and 
</span><br>
<span class="quotelev1">&gt; changing some names in the XML.
</span><br>
<p>Ok -- the second part is what I'm not clear on.  I remember having
<br>
discussions about the problems of having multiple perfbases running on a
<br>
single machine since it makes multiple *databases* (not tables) on the
<br>
server.  What names in the XML need to change, specifically?
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; Brian's probably got the most cycles to spend on this; 
</span><br>
<span class="quotelev1">&gt; Andrew -- can you
</span><br>
<span class="quotelev2">&gt; &gt; point him in the right direction for server-side stuff, or 
</span><br>
<span class="quotelev1">&gt; help him get
</span><br>
<span class="quotelev2">&gt; &gt; it running at IU?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, either tonight or tomorrow I'll go take a look at where 
</span><br>
<span class="quotelev1">&gt; I left off 
</span><br>
<span class="quotelev1">&gt; and get in touch with Brian.  There shouldn't be much to do to have 
</span><br>
<span class="quotelev1">&gt; *something* working.
</span><br>
<p>Excellent.  If you could, keep your threads on this list -- when/if I
<br>
get time to work on MTT, it would be good to be kept in the loop.
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
<li><strong>Next message:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Maybe in reply to:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
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
