<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 15:03:09 2006" -->
<!-- isoreceived="20060526190309" -->
<!-- sent="Fri, 26 May 2006 15:03:07 -0400 (EDT)" -->
<!-- isosent="20060526190307" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT resurrected" -->
<!-- id="Pine.LNX.4.64.0605261500200.2494_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44774E99.7000300_at_open-mpi.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 15:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So to clarify -  at this point my time (and goal) is to get a nightly 
<br>
report of whether the three nightly tarballs 1) built 2) passed the intel 
<br>
and IBM test suites on a couple of platforms.  Features like disconnected 
<br>
scenarios and performance results are important, but are not something I 
<br>
have time allocated for.
<br>
<p>Andy - where are things installed on milliways (both URL and local 
<br>
filesystem)?
<br>
<p>Brian
<br>
<p>On Fri, 26 May 2006, Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After long interim periods of inactivity, I finally finished at least a
</span><br>
<span class="quotelev2">&gt;&gt; good chunk of what my to-do tasks were from the IU MTT meeting several
</span><br>
<span class="quotelev2">&gt;&gt; months ago.   I committed r175 earlier today.  Specifically:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - reverse linkage (i.e., later phases refer to prior phases)
</span><br>
<span class="quotelev2">&gt;&gt; - Trivial modules (testing MPI hello world)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a strong push to start using MTT, mainly for 1.1 release
</span><br>
<span class="quotelev2">&gt;&gt; testing but also for other reasons.  So the question is -- what do we
</span><br>
<span class="quotelev2">&gt;&gt; need to be able to get a few sites running MTT via cron and dumping the
</span><br>
<span class="quotelev2">&gt;&gt; results back to a central perfbase?  Granted -- MTT is not feature
</span><br>
<span class="quotelev2">&gt;&gt; complete.  There are parts that are not where we'd like them to be
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., based on what we discussed at the IU MTT meeting).  But with my
</span><br>
<span class="quotelev2">&gt;&gt; commit this morning, MTT should be functional again, so we might as well
</span><br>
<span class="quotelev2">&gt;&gt; start using it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that samples/sample.ini is now out of date.  samples/odin.in is the
</span><br>
<span class="quotelev2">&gt;&gt; most recent and shows all the correct linkage.  It can still be cleaned
</span><br>
<span class="quotelev2">&gt;&gt; up quite a bit (e.g., Brian was totally unimpressed with &quot;test build:
</span><br>
<span class="quotelev2">&gt;&gt; intel&quot;, but that very definitely was a test case for my Shell build
</span><br>
<span class="quotelev2">&gt;&gt; module -- none of that gorp has to be there; it can be moved off into a
</span><br>
<span class="quotelev2">&gt;&gt; .pm and hidden behind the scenes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can samples/sample.ini be brought up to date or removed?  No point in
</span><br>
<span class="quotelev1">&gt; having it as-is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian has been given some cycles by LANL to help get this going ASAP.
</span><br>
<span class="quotelev2">&gt;&gt; Andy's only got off-hours time to dedicate to MTT, and as experience has
</span><br>
<span class="quotelev2">&gt;&gt; shown, my time available for MTT, while nonzero, is totally
</span><br>
<span class="quotelev2">&gt;&gt; unpredictable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the obvious things I see that need to be done:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - verify that the server side of MTT is still functional:
</span><br>
<span class="quotelev2">&gt;&gt;   - is it still running / usable at IU?
</span><br>
<span class="quotelev2">&gt;&gt;   - verify that the code hasn't bit-rotted at all
</span><br>
<span class="quotelev2">&gt;&gt;   - there was a perfbase release this morning; is it worth it to
</span><br>
<span class="quotelev2">&gt;&gt; upgrade?  I saw one or two features that we may care about
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which features?  I'm guessing they're the ones I wrote and sent to
</span><br>
<span class="quotelev1">&gt; Joachim (xml, multi-line), or was there something else you saw?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   - clear out all previous test data
</span><br>
<span class="quotelev2">&gt;&gt;   - setup a few user accounts for the basic auth
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - verify the linkage between mtt client and perfbase
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; - write some perfbase reports (cron-friendly) for periodic e-mails
</span><br>
<span class="quotelev2">&gt;&gt;   - nightly builds that failed (mpi or tests)
</span><br>
<span class="quotelev2">&gt;&gt;   - nightly test runs that failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I had mpi install and test build done, will have to look.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - get it all running for ompi members
</span><br>
<span class="quotelev2">&gt;&gt;   - setup production perfbase instance at IU
</span><br>
<span class="quotelev2">&gt;&gt;   - ship a standard starter client config to put in cron to run
</span><br>
<span class="quotelev2">&gt;&gt;   - distribute usernames/passwords
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; we may not support disconnected scenarios yet; even getting
</span><br>
<span class="quotelev2">&gt;&gt; &quot;connected&quot; scenarios working will be a big step forward and get us a
</span><br>
<span class="quotelev2">&gt;&gt; lot of data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - verify that we can have a 2nd perfbase running for continued
</span><br>
<span class="quotelev2">&gt;&gt; testing/development/debugging that will not impact the production
</span><br>
<span class="quotelev2">&gt;&gt; perfbase
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can - just a matter of using a different URL in the client config and
</span><br>
<span class="quotelev1">&gt; changing some names in the XML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian's probably got the most cycles to spend on this; Andrew -- can you
</span><br>
<span class="quotelev2">&gt;&gt; point him in the right direction for server-side stuff, or help him get
</span><br>
<span class="quotelev2">&gt;&gt; it running at IU?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, either tonight or tomorrow I'll go take a look at where I left off
</span><br>
<span class="quotelev1">&gt; and get in touch with Brian.  There shouldn't be much to do to have
</span><br>
<span class="quotelev1">&gt; *something* working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Previous message:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0006.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
<li><strong>Reply:</strong> <a href="0009.php">Andrew Friedley: "Re: [MTT users] MTT resurrected"</a>
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
