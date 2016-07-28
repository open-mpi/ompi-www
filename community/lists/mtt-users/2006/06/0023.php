<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 12:45:10 2006" -->
<!-- isoreceived="20060629164510" -->
<!-- sent="Thu, 29 Jun 2006 12:45:08 -0400" -->
<!-- isosent="20060629164508" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9BFA_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] Test output to perfbase" -->
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
<strong>Date:</strong> 2006-06-29 12:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0025.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
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
<span class="quotelev1">&gt; Sent: Thursday, June 29, 2006 11:29 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] Test output to perfbase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'll change my question to: can you send an example of the 
</span><br>
<span class="quotelev1">&gt; format that
</span><br>
<span class="quotelev2">&gt; &gt; perfbase is expecting for submitting the data running 
</span><br>
<span class="quotelev1">&gt; multiple tests in
</span><br>
<span class="quotelev2">&gt; &gt; a single http post to perfbase.php?  E.g., say I have the results of
</span><br>
<span class="quotelev2">&gt; &gt; running all the intel tests -- what is the format that you are
</span><br>
<span class="quotelev2">&gt; &gt; expecting?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try to make some sample data tonight.  I need to review how line 
</span><br>
<span class="quotelev1">&gt; separators work with perfbase first.
</span><br>
<p>Thanks.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; Another question -- how exactly are you categorizing these 
</span><br>
<span class="quotelev1">&gt; results on
</span><br>
<span class="quotelev2">&gt; &gt; the server?  You made mention of &quot;runs&quot; below -- from your 
</span><br>
<span class="quotelev1">&gt; context I'm
</span><br>
<span class="quotelev2">&gt; &gt; assuming that &quot;run&quot; has some specific meaning to perfbase, 
</span><br>
<span class="quotelev1">&gt; especially
</span><br>
<span class="quotelev2">&gt; &gt; with the categorization of output data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For efficiency, one run is one run of a test suite.  What 
</span><br>
<p>Which efficiency?  Uploads?  Database storage?  Querying?
<br>
<p>In a conversation with Sun, it turns out that we both want to have the
<br>
ability to see partial results (e.g., running the entire Intel suite may
<br>
take many hours -- it would be good to be able to see results
<br>
more-or-less as they occur).  Is there a technical issue that would
<br>
prevent submitting 1 (or small batches of) result(s) at a time?
<br>
<p><span class="quotelev1">&gt; field is the 
</span><br>
<span class="quotelev1">&gt; BTL selection reported in?  If it 'occurs once' in the XML, 
</span><br>
<span class="quotelev1">&gt; it is stored 
</span><br>
<span class="quotelev1">&gt; per test suite (run), if it 'occurs many', that is a per-test 
</span><br>
<span class="quotelev1">&gt; field and 
</span><br>
<span class="quotelev1">&gt; can vary in a single run (i.e. tcp and openib would go together).
</span><br>
<p>Ok, good.  So this would help with the database storage required for
<br>
test results -- many of the fields will be the same for each of the
<br>
individual tests in the intel test suite (for example).
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; 1. send all results from the above intel run in a single 
</span><br>
<span class="quotelev1">&gt; submit (i.e.,
</span><br>
<span class="quotelev2">&gt; &gt; all tcp and all openib results).  Since we submit the MCA 
</span><br>
<span class="quotelev1">&gt; params as part
</span><br>
<span class="quotelev2">&gt; &gt; of the data, our queries later can distinguish tcp vs. openib data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I want.  We can easily construct queries to only
</span><br>
<p>So I guess I'm still not clear on *why* you want this.  :-)  Can you
<br>
specify the reasons?
<br>
<p><span class="quotelev1">&gt; get what 
</span><br>
<span class="quotelev1">&gt; we want i.e. just tcp, just threaded, just odin, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. send all the tcp results in one submit and then send the 
</span><br>
<span class="quotelev1">&gt; openib data
</span><br>
<span class="quotelev2">&gt; &gt; in a separate submit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bleh - so this works if you only consider the 'btl' 
</span><br>
<span class="quotelev1">&gt; parameter.  But what 
</span><br>
<span class="quotelev1">&gt; ito consider other parameters in this way?
</span><br>
<p>Yes, that information (tcp vs. openib) is in one of the fields that we
<br>
send back (it has to be, otherwise the results are somewhat
<br>
meaningless).  It's not a standalone &quot;btl&quot; field, though -- it's more of
<br>
a &quot;here's the MCA parameters that were specified&quot; field.  So queries for
<br>
tcp results will probably need to search for &quot;tcp&quot; in the MCA parameters
<br>
field.
<br>
<p>But this is the same issue regardless of whether we submit 1 result at a
<br>
time or all at once, right?  I guess I don't see the difference for
<br>
selecting &quot;tcp&quot; vs. &quot;openib&quot; results based on whether we submit 1 result
<br>
at a time or all at once -- can you clarify?  I think I must be missing
<br>
something...
<br>
<p>If this is all possible, then -- at least in my mind -- I don't see a
<br>
reason why multiple submits vs. a single submit is *required*.
<br>
Obviously, multiple submits will take more bandwidth than a single
<br>
submit -- but I see that as an optimization that we can [and should]
<br>
work out later.  Specifically: reducing the bandwidth of submits doesn't
<br>
need to be in the initial version since our primary, immediate goal is
<br>
to get this functional, running nightly tests, and sending out test
<br>
results in the morning as long as the current, unoptimized bandwidth
<br>
requirements are not too onerous on milliways.
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
<li><strong>Next message:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0025.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0025.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
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
