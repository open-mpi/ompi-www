<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 18:31:00 2006" -->
<!-- isoreceived="20060526223100" -->
<!-- sent="Fri, 26 May 2006 15:31:21 -0700" -->
<!-- isosent="20060526223121" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] MTT resurrected" -->
<!-- id="447781B9.6070301_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0605261500200.2494_at_milliways.osl.iu.edu" -->
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
<strong>Date:</strong> 2006-05-26 18:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've been mostly working out of our home directories.  postgres is 
<br>
installed system-wide, and a newer python is installed in 
<br>
/opt/python-2.4/bin.
<br>
<p>I have a module file for perfbase - milliways:~afriedle/perfbase-module. 
<br>
&nbsp;&nbsp;Give me a call after 5pm pacific for the postgres password, which I've 
<br>
just been setting in the environment for perfbase.  My home directory 
<br>
should be open for you to poke around and look at as a reference.
<br>
<p>First thing is to set up perfbase - grab the latest release and install 
<br>
it somewhere - perfbase.tigris.org.  Perfbase includes a pair of python 
<br>
modules that it requires - build/install those, and set up paths to them 
<br>
as done in my perfbase-module.
<br>
<p>Try one of the included perfbase examples to make sure that all works. 
<br>
There should already be some MTT experiments created in perfbase.  They 
<br>
don't contain any important data, and perfbase will likely complain that 
<br>
their format is out of date.  Feel free to upgrade/blow away as necessary.
<br>
<p>Finally, grab MTT svn.  The server directory contains all the perfbase 
<br>
xml, php scripts, and email.pl, which is my cron reporter.
<br>
<p>Put the PHP and xml somewhere in your web space.  Then take a look at 
<br>
mtt-config.php and fillin the appropriate environment stuff.  We've also 
<br>
been using .htaccess for authentication.
<br>
<p>Unless Jeff has changed the fields again, you should be able to point an 
<br>
MTT client at the perfbase url you set up and have results go to 
<br>
perfbase.  Expect bugs :)
<br>
<p>This should get you started for now.. like I said, I'll figure out where 
<br>
I left off tonight/tomorrow.
<br>
<p>Andrew
<br>
<p><p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; So to clarify -  at this point my time (and goal) is to get a nightly 
</span><br>
<span class="quotelev1">&gt; report of whether the three nightly tarballs 1) built 2) passed the intel 
</span><br>
<span class="quotelev1">&gt; and IBM test suites on a couple of platforms.  Features like disconnected 
</span><br>
<span class="quotelev1">&gt; scenarios and performance results are important, but are not something I 
</span><br>
<span class="quotelev1">&gt; have time allocated for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andy - where are things installed on milliways (both URL and local 
</span><br>
<span class="quotelev1">&gt; filesystem)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 26 May 2006, Andrew Friedley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;After long interim periods of inactivity, I finally finished at least a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;good chunk of what my to-do tasks were from the IU MTT meeting several
</span><br>
<span class="quotelev3">&gt;&gt;&gt;months ago.   I committed r175 earlier today.  Specifically:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- reverse linkage (i.e., later phases refer to prior phases)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- Trivial modules (testing MPI hello world)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;There is a strong push to start using MTT, mainly for 1.1 release
</span><br>
<span class="quotelev3">&gt;&gt;&gt;testing but also for other reasons.  So the question is -- what do we
</span><br>
<span class="quotelev3">&gt;&gt;&gt;need to be able to get a few sites running MTT via cron and dumping the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;results back to a central perfbase?  Granted -- MTT is not feature
</span><br>
<span class="quotelev3">&gt;&gt;&gt;complete.  There are parts that are not where we'd like them to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;(e.g., based on what we discussed at the IU MTT meeting).  But with my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;commit this morning, MTT should be functional again, so we might as well
</span><br>
<span class="quotelev3">&gt;&gt;&gt;start using it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Note that samples/sample.ini is now out of date.  samples/odin.in is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;most recent and shows all the correct linkage.  It can still be cleaned
</span><br>
<span class="quotelev3">&gt;&gt;&gt;up quite a bit (e.g., Brian was totally unimpressed with &quot;test build:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;intel&quot;, but that very definitely was a test case for my Shell build
</span><br>
<span class="quotelev3">&gt;&gt;&gt;module -- none of that gorp has to be there; it can be moved off into a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;.pm and hidden behind the scenes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Can samples/sample.ini be brought up to date or removed?  No point in
</span><br>
<span class="quotelev2">&gt;&gt;having it as-is.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brian has been given some cycles by LANL to help get this going ASAP.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Andy's only got off-hours time to dedicate to MTT, and as experience has
</span><br>
<span class="quotelev3">&gt;&gt;&gt;shown, my time available for MTT, while nonzero, is totally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;unpredictable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Here's the obvious things I see that need to be done:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- verify that the server side of MTT is still functional:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - is it still running / usable at IU?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - verify that the code hasn't bit-rotted at all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - there was a perfbase release this morning; is it worth it to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;upgrade?  I saw one or two features that we may care about
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Which features?  I'm guessing they're the ones I wrote and sent to
</span><br>
<span class="quotelev2">&gt;&gt;Joachim (xml, multi-line), or was there something else you saw?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - clear out all previous test data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - setup a few user accounts for the basic auth
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- verify the linkage between mtt client and perfbase
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- write some perfbase reports (cron-friendly) for periodic e-mails
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - nightly builds that failed (mpi or tests)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - nightly test runs that failed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I think I had mpi install and test build done, will have to look.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- get it all running for ompi members
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - setup production perfbase instance at IU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - ship a standard starter client config to put in cron to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  - distribute usernames/passwords
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; we may not support disconnected scenarios yet; even getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&quot;connected&quot; scenarios working will be a big step forward and get us a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;lot of data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- verify that we can have a 2nd perfbase running for continued
</span><br>
<span class="quotelev3">&gt;&gt;&gt;testing/development/debugging that will not impact the production
</span><br>
<span class="quotelev3">&gt;&gt;&gt;perfbase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;We can - just a matter of using a different URL in the client config and
</span><br>
<span class="quotelev2">&gt;&gt;changing some names in the XML.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Brian's probably got the most cycles to spend on this; Andrew -- can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;point him in the right direction for server-side stuff, or help him get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;it running at IU?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Yeah, either tonight or tomorrow I'll go take a look at where I left off
</span><br>
<span class="quotelev2">&gt;&gt;and get in touch with Brian.  There shouldn't be much to do to have
</span><br>
<span class="quotelev2">&gt;&gt;*something* working.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Andrew
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0010.php">Ethan Mallove: "[MTT users] multiple testing configurations from a single workspace"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<li><strong>In reply to:</strong> <a href="0008.php">Brian W. Barrett: "Re: [MTT users] MTT resurrected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0007.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] MTT resurrected"</a>
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
