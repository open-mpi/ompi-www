<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 11:27:40 2006" -->
<!-- isoreceived="20060629152740" -->
<!-- sent="Thu, 29 Jun 2006 08:28:52 -0700" -->
<!-- isosent="20060629152852" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="44A3F1B4.3070501_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9A10_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 11:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;[mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Andrew Friedley
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Thursday, June 29, 2006 1:10 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [MTT users] Test output to perfbase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- I know you sent one before, but I've made a mess of managing huge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;volumes of mail with Outlook, and I can't find the example 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;you sent of
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the format that perfbase is expecting for all the test run 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;results.  Can
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;you send the example again?  This is the 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;send-all-the-results-at-once
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;vs. send-one-result-at-a-time issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I can't find it, is this recent or from a long time ago?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, so maybe I'm didn't lose as much mail as I thought.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll change my question to: can you send an example of the format that
</span><br>
<span class="quotelev1">&gt; perfbase is expecting for submitting the data running multiple tests in
</span><br>
<span class="quotelev1">&gt; a single http post to perfbase.php?  E.g., say I have the results of
</span><br>
<span class="quotelev1">&gt; running all the intel tests -- what is the format that you are
</span><br>
<span class="quotelev1">&gt; expecting?
</span><br>
<p>I'll try to make some sample data tonight.  I need to review how line 
<br>
separators work with perfbase first.
<br>
<p><span class="quotelev1">&gt; Another question -- how exactly are you categorizing these results on
</span><br>
<span class="quotelev1">&gt; the server?  You made mention of &quot;runs&quot; below -- from your context I'm
</span><br>
<span class="quotelev1">&gt; assuming that &quot;run&quot; has some specific meaning to perfbase, especially
</span><br>
<span class="quotelev1">&gt; with the categorization of output data.
</span><br>
<p>For efficiency, one run is one run of a test suite.  What field is the 
<br>
BTL selection reported in?  If it 'occurs once' in the XML, it is stored 
<br>
per test suite (run), if it 'occurs many', that is a per-test field and 
<br>
can vary in a single run (i.e. tcp and openib would go together).
<br>
<p><p><span class="quotelev1">&gt; For example, let's say I have the following exec in my MPI Details
</span><br>
<span class="quotelev1">&gt; section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exec = mpirun --mca &amp;enumerate(&quot;tcp&quot;,&quot;openib&quot;),self -np &amp;test_np() \
</span><br>
<span class="quotelev1">&gt;     &amp;test_executable() &amp;test_argv()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will generate two mpirun command lines for every test executable
</span><br>
<span class="quotelev1">&gt; (one for tcp,self and one for openib,self).  Would you consider the tcp
</span><br>
<span class="quotelev1">&gt; outputs a different &quot;run&quot; than the openib outputs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regardless of the terminology, I eventually want to be able to query for
</span><br>
<span class="quotelev1">&gt; tcp run data separately from the openib run data.  I'm assuming that
</span><br>
<span class="quotelev1">&gt; this has a big impact on how we submit data to perfbase.  I see two
</span><br>
<span class="quotelev1">&gt; possibilities offhand:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. send all results from the above intel run in a single submit (i.e.,
</span><br>
<span class="quotelev1">&gt; all tcp and all openib results).  Since we submit the MCA params as part
</span><br>
<span class="quotelev1">&gt; of the data, our queries later can distinguish tcp vs. openib data.
</span><br>
<p>This is what I want.  We can easily construct queries to only get what 
<br>
we want i.e. just tcp, just threaded, just odin, etc.
<br>
<p><span class="quotelev1">&gt; 2. send all the tcp results in one submit and then send the openib data
</span><br>
<span class="quotelev1">&gt; in a separate submit.
</span><br>
<p>Bleh - so this works if you only consider the 'btl' parameter.  But what 
<br>
ito consider other parameters in this way?
<br>
<p><span class="quotelev1">&gt; I assume that there are storage and/or query efficiency issues with this
</span><br>
<span class="quotelev1">&gt; decision.  We can do either of these groupings in the client -- which
</span><br>
<span class="quotelev1">&gt; should we use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;- Apache is going to have a max upload size (2MB?  I always 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;forget what
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;milliways is configured for).  The client will need to be 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;able to split
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;up results that are larger than this.  This has two implications:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1. If a single report is larger than this size (e.g., if 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;the output from
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;an &quot;install MPI&quot; phase is larger than the max upload size), 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Badness will
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;ensure.  I don't quite know how to handle this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Make the max upload size bigger :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More on this below.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2. In the test run phase, given that we're switching to 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;sending all the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;output from each test individually to sending them all at 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;once, if the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;total size of a given report is larger than the max limit, can I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;arbitrarily split up the output results and send them in &lt;max_size
</span><br>
<span class="quotelev3">&gt;&gt;&gt;chunks?  (preserving header/data groupings, of course)  I'm assuming
</span><br>
<span class="quotelev3">&gt;&gt;&gt;yes, but just wanted to make sure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Not sure.  I think this will work, but it should be avoided.  
</span><br>
<span class="quotelev2">&gt;&gt;With how 
</span><br>
<span class="quotelev2">&gt;&gt;things are now, this is going to generate a run per 
</span><br>
<span class="quotelev2">&gt;&gt;submission, and the 
</span><br>
<span class="quotelev2">&gt;&gt;whole point of sending test results all at once is to 
</span><br>
<span class="quotelev2">&gt;&gt;consolidate them 
</span><br>
<span class="quotelev2">&gt;&gt;into one run.  Not the best, but not the end of the world either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow this (again, I think you have some special meaning
</span><br>
<span class="quotelev1">&gt; for the word &quot;run&quot; -- can you explain?).  What are the benefits /
</span><br>
<span class="quotelev1">&gt; drawbacks of sending in a single submit vs. multiple submits?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Though I think it's possible for us to collect several files on the 
</span><br>
<span class="quotelev2">&gt;&gt;server side before submitting them to perfbase as one single run. 
</span><br>
<span class="quotelev2">&gt;&gt;Problem is, that's going to be a lot of work on the server side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depends on how it's done.  It doesn't have to be too much work or too
</span><br>
<span class="quotelev1">&gt; complicated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;Depending on how the apache limit is enforced, this would involve 
</span><br>
<span class="quotelev2">&gt;&gt;writing files to storage or preserving the data between HTTP POSTs in 
</span><br>
<span class="quotelev2">&gt;&gt;some way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Apache enforces the limit by effectively terminating the input (it might
</span><br>
<span class="quotelev1">&gt; even close the socket?  I don't remember offhand).  Suffice it to say
</span><br>
<span class="quotelev1">&gt; that whatever the mechanism, we can't go over the limit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have some thoughts on this, but I'll start another thread for it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<li><strong>In reply to:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
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
