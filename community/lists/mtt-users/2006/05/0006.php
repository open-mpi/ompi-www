<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 14:52:52 2006" -->
<!-- isoreceived="20060526185252" -->
<!-- sent="Fri, 26 May 2006 11:53:13 -0700" -->
<!-- isosent="20060526185313" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT resurrected" -->
<!-- id="44774E99.7000300_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD824_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 14:53:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; After long interim periods of inactivity, I finally finished at least a
</span><br>
<span class="quotelev1">&gt; good chunk of what my to-do tasks were from the IU MTT meeting several
</span><br>
<span class="quotelev1">&gt; months ago.   I committed r175 earlier today.  Specifically:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - reverse linkage (i.e., later phases refer to prior phases)
</span><br>
<span class="quotelev1">&gt; - Trivial modules (testing MPI hello world)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a strong push to start using MTT, mainly for 1.1 release
</span><br>
<span class="quotelev1">&gt; testing but also for other reasons.  So the question is -- what do we
</span><br>
<span class="quotelev1">&gt; need to be able to get a few sites running MTT via cron and dumping the
</span><br>
<span class="quotelev1">&gt; results back to a central perfbase?  Granted -- MTT is not feature
</span><br>
<span class="quotelev1">&gt; complete.  There are parts that are not where we'd like them to be
</span><br>
<span class="quotelev1">&gt; (e.g., based on what we discussed at the IU MTT meeting).  But with my
</span><br>
<span class="quotelev1">&gt; commit this morning, MTT should be functional again, so we might as well
</span><br>
<span class="quotelev1">&gt; start using it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that samples/sample.ini is now out of date.  samples/odin.in is the
</span><br>
<span class="quotelev1">&gt; most recent and shows all the correct linkage.  It can still be cleaned
</span><br>
<span class="quotelev1">&gt; up quite a bit (e.g., Brian was totally unimpressed with &quot;test build:
</span><br>
<span class="quotelev1">&gt; intel&quot;, but that very definitely was a test case for my Shell build
</span><br>
<span class="quotelev1">&gt; module -- none of that gorp has to be there; it can be moved off into a
</span><br>
<span class="quotelev1">&gt; .pm and hidden behind the scenes).
</span><br>
<p>Can samples/sample.ini be brought up to date or removed?  No point in 
<br>
having it as-is.
<br>
<p><span class="quotelev1">&gt; Brian has been given some cycles by LANL to help get this going ASAP.
</span><br>
<span class="quotelev1">&gt; Andy's only got off-hours time to dedicate to MTT, and as experience has
</span><br>
<span class="quotelev1">&gt; shown, my time available for MTT, while nonzero, is totally
</span><br>
<span class="quotelev1">&gt; unpredictable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the obvious things I see that need to be done:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - verify that the server side of MTT is still functional:
</span><br>
<span class="quotelev1">&gt;   - is it still running / usable at IU?
</span><br>
<span class="quotelev1">&gt;   - verify that the code hasn't bit-rotted at all
</span><br>
<span class="quotelev1">&gt;   - there was a perfbase release this morning; is it worth it to
</span><br>
<span class="quotelev1">&gt; upgrade?  I saw one or two features that we may care about
</span><br>
<p>Which features?  I'm guessing they're the ones I wrote and sent to 
<br>
Joachim (xml, multi-line), or was there something else you saw?
<br>
<p><span class="quotelev1">&gt;   - clear out all previous test data
</span><br>
<span class="quotelev1">&gt;   - setup a few user accounts for the basic auth
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - verify the linkage between mtt client and perfbase
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1">&gt; - write some perfbase reports (cron-friendly) for periodic e-mails
</span><br>
<span class="quotelev1">&gt;   - nightly builds that failed (mpi or tests)
</span><br>
<span class="quotelev1">&gt;   - nightly test runs that failed
</span><br>
<p>I think I had mpi install and test build done, will have to look.
<br>
<p><span class="quotelev1">&gt; - get it all running for ompi members
</span><br>
<span class="quotelev1">&gt;   - setup production perfbase instance at IU
</span><br>
<span class="quotelev1">&gt;   - ship a standard starter client config to put in cron to run
</span><br>
<span class="quotelev1">&gt;   - distribute usernames/passwords
</span><br>
<span class="quotelev1">&gt;   --&gt; we may not support disconnected scenarios yet; even getting
</span><br>
<span class="quotelev1">&gt; &quot;connected&quot; scenarios working will be a big step forward and get us a
</span><br>
<span class="quotelev1">&gt; lot of data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - verify that we can have a 2nd perfbase running for continued
</span><br>
<span class="quotelev1">&gt; testing/development/debugging that will not impact the production
</span><br>
<span class="quotelev1">&gt; perfbase 
</span><br>
<p>We can - just a matter of using a different URL in the client config and 
<br>
changing some names in the XML.
<br>
<p><span class="quotelev1">&gt; Brian's probably got the most cycles to spend on this; Andrew -- can you
</span><br>
<span class="quotelev1">&gt; point him in the right direction for server-side stuff, or help him get
</span><br>
<span class="quotelev1">&gt; it running at IU?
</span><br>
<p>Yeah, either tonight or tomorrow I'll go take a look at where I left off 
<br>
and get in touch with Brian.  There shouldn't be much to do to have 
<br>
*something* working.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0005.php">Jeff Squyres \(jsquyres\): "[MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
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
