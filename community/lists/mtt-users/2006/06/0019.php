<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 08:19:04 2006" -->
<!-- isoreceived="20060629121904" -->
<!-- sent="Thu, 29 Jun 2006 08:18:56 -0400" -->
<!-- isosent="20060629121856" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9A10_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 08:18:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
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
<span class="quotelev1">&gt; Sent: Thursday, June 29, 2006 1:10 AM
</span><br>
<span class="quotelev1">&gt; To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] Test output to perfbase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - I know you sent one before, but I've made a mess of managing huge
</span><br>
<span class="quotelev2">&gt; &gt; volumes of mail with Outlook, and I can't find the example 
</span><br>
<span class="quotelev1">&gt; you sent of
</span><br>
<span class="quotelev2">&gt; &gt; the format that perfbase is expecting for all the test run 
</span><br>
<span class="quotelev1">&gt; results.  Can
</span><br>
<span class="quotelev2">&gt; &gt; you send the example again?  This is the 
</span><br>
<span class="quotelev1">&gt; send-all-the-results-at-once
</span><br>
<span class="quotelev2">&gt; &gt; vs. send-one-result-at-a-time issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't find it, is this recent or from a long time ago?
</span><br>
<p>Ok, so maybe I'm didn't lose as much mail as I thought.  :-)
<br>
<p>I'll change my question to: can you send an example of the format that
<br>
perfbase is expecting for submitting the data running multiple tests in
<br>
a single http post to perfbase.php?  E.g., say I have the results of
<br>
running all the intel tests -- what is the format that you are
<br>
expecting?
<br>
<p>Another question -- how exactly are you categorizing these results on
<br>
the server?  You made mention of &quot;runs&quot; below -- from your context I'm
<br>
assuming that &quot;run&quot; has some specific meaning to perfbase, especially
<br>
with the categorization of output data.
<br>
<p>For example, let's say I have the following exec in my MPI Details
<br>
section:
<br>
<p>exec = mpirun --mca &amp;enumerate(&quot;tcp&quot;,&quot;openib&quot;),self -np &amp;test_np() \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&amp;test_executable() &amp;test_argv()
<br>
<p>This will generate two mpirun command lines for every test executable
<br>
(one for tcp,self and one for openib,self).  Would you consider the tcp
<br>
outputs a different &quot;run&quot; than the openib outputs?
<br>
<p>Regardless of the terminology, I eventually want to be able to query for
<br>
tcp run data separately from the openib run data.  I'm assuming that
<br>
this has a big impact on how we submit data to perfbase.  I see two
<br>
possibilities offhand:
<br>
<p>1. send all results from the above intel run in a single submit (i.e.,
<br>
all tcp and all openib results).  Since we submit the MCA params as part
<br>
of the data, our queries later can distinguish tcp vs. openib data.
<br>
<p>2. send all the tcp results in one submit and then send the openib data
<br>
in a separate submit.
<br>
<p>I assume that there are storage and/or query efficiency issues with this
<br>
decision.  We can do either of these groupings in the client -- which
<br>
should we use?
<br>
<p><span class="quotelev2">&gt; &gt; - Apache is going to have a max upload size (2MB?  I always 
</span><br>
<span class="quotelev1">&gt; forget what
</span><br>
<span class="quotelev2">&gt; &gt; milliways is configured for).  The client will need to be 
</span><br>
<span class="quotelev1">&gt; able to split
</span><br>
<span class="quotelev2">&gt; &gt; up results that are larger than this.  This has two implications:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. If a single report is larger than this size (e.g., if 
</span><br>
<span class="quotelev1">&gt; the output from
</span><br>
<span class="quotelev2">&gt; &gt; an &quot;install MPI&quot; phase is larger than the max upload size), 
</span><br>
<span class="quotelev1">&gt; Badness will
</span><br>
<span class="quotelev2">&gt; &gt; ensure.  I don't quite know how to handle this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make the max upload size bigger :)
</span><br>
<p>More on this below.
<br>
&nbsp;
<br>
<span class="quotelev2">&gt; &gt; 2. In the test run phase, given that we're switching to 
</span><br>
<span class="quotelev1">&gt; sending all the
</span><br>
<span class="quotelev2">&gt; &gt; output from each test individually to sending them all at 
</span><br>
<span class="quotelev1">&gt; once, if the
</span><br>
<span class="quotelev2">&gt; &gt; total size of a given report is larger than the max limit, can I
</span><br>
<span class="quotelev2">&gt; &gt; arbitrarily split up the output results and send them in &lt;max_size
</span><br>
<span class="quotelev2">&gt; &gt; chunks?  (preserving header/data groupings, of course)  I'm assuming
</span><br>
<span class="quotelev2">&gt; &gt; yes, but just wanted to make sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure.  I think this will work, but it should be avoided.  
</span><br>
<span class="quotelev1">&gt; With how 
</span><br>
<span class="quotelev1">&gt; things are now, this is going to generate a run per 
</span><br>
<span class="quotelev1">&gt; submission, and the 
</span><br>
<span class="quotelev1">&gt; whole point of sending test results all at once is to 
</span><br>
<span class="quotelev1">&gt; consolidate them 
</span><br>
<span class="quotelev1">&gt; into one run.  Not the best, but not the end of the world either.
</span><br>
<p>I'm not sure I follow this (again, I think you have some special meaning
<br>
for the word &quot;run&quot; -- can you explain?).  What are the benefits /
<br>
drawbacks of sending in a single submit vs. multiple submits?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Though I think it's possible for us to collect several files on the 
</span><br>
<span class="quotelev1">&gt; server side before submitting them to perfbase as one single run. 
</span><br>
<span class="quotelev1">&gt; Problem is, that's going to be a lot of work on the server side.
</span><br>
<p>Depends on how it's done.  It doesn't have to be too much work or too
<br>
complicated.
<br>
<p><span class="quotelev1">&gt; Depending on how the apache limit is enforced, this would involve 
</span><br>
<span class="quotelev1">&gt; writing files to storage or preserving the data between HTTP POSTs in 
</span><br>
<span class="quotelev1">&gt; some way.
</span><br>
<p>Apache enforces the limit by effectively terminating the input (it might
<br>
even close the socket?  I don't remember offhand).  Suffice it to say
<br>
that whatever the mechanism, we can't go over the limit.
<br>
<p>I have some thoughts on this, but I'll start another thread for it.
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
<li><strong>Next message:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<li><strong>Previous message:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe in reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
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
