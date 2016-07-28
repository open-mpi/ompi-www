<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 13:04:50 2006" -->
<!-- isoreceived="20060629170450" -->
<!-- sent="Thu, 29 Jun 2006 10:06:02 -0700" -->
<!-- isosent="20060629170602" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="44A4087A.6030209_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9BFA_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 13:06:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Ethan Mallove: "[MTT users] mtt-users mail archive"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>In reply to:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
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
<span class="quotelev2">&gt;&gt;Sent: Thursday, June 29, 2006 11:29 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: General user list for the MPI Testing Tool
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [MTT users] Test output to perfbase
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;I'll change my question to: can you send an example of the 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;format that
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;perfbase is expecting for submitting the data running 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;multiple tests in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;a single http post to perfbase.php?  E.g., say I have the results of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;running all the intel tests -- what is the format that you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;expecting?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I'll try to make some sample data tonight.  I need to review how line 
</span><br>
<span class="quotelev2">&gt;&gt;separators work with perfbase first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;Another question -- how exactly are you categorizing these 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;results on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the server?  You made mention of &quot;runs&quot; below -- from your 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;context I'm
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;assuming that &quot;run&quot; has some specific meaning to perfbase, 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;especially
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;with the categorization of output data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;For efficiency, one run is one run of a test suite.  What 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which efficiency?  Uploads?  Database storage?  Querying?
</span><br>
<p>Primarily database - each run is stored in postgres as a table in a 
<br>
database.  Fields that vary are stored as rows in the database - one row 
<br>
&nbsp;&nbsp;has all the varying fields i.e. each field is a column.  I think 
<br>
non-varying fields are stored once as a row in a special, separate table.
<br>
<p><span class="quotelev1">&gt; In a conversation with Sun, it turns out that we both want to have the
</span><br>
<span class="quotelev1">&gt; ability to see partial results (e.g., running the entire Intel suite may
</span><br>
<span class="quotelev1">&gt; take many hours -- it would be good to be able to see results
</span><br>
<span class="quotelev1">&gt; more-or-less as they occur).  Is there a technical issue that would
</span><br>
<span class="quotelev1">&gt; prevent submitting 1 (or small batches of) result(s) at a time?
</span><br>
<p>I think we're getting into the realm of 'too much' here.  Both the 
<br>
current design and especially your new proposed design are batch 
<br>
oriented, not stream oriented.  Heck, MTT in general.
<br>
<p>This is doable, but when we start hammering/scaling this system, getting 
<br>
as much information as possible in a perfbase run is going to be very 
<br>
important.  I remember Brian agreeing with me, tens/hundreds of 
<br>
thousands of tables in postgres is a bad idea.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;field is the 
</span><br>
<span class="quotelev2">&gt;&gt;BTL selection reported in?  If it 'occurs once' in the XML, 
</span><br>
<span class="quotelev2">&gt;&gt;it is stored 
</span><br>
<span class="quotelev2">&gt;&gt;per test suite (run), if it 'occurs many', that is a per-test 
</span><br>
<span class="quotelev2">&gt;&gt;field and 
</span><br>
<span class="quotelev2">&gt;&gt;can vary in a single run (i.e. tcp and openib would go together).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, good.  So this would help with the database storage required for
</span><br>
<span class="quotelev1">&gt; test results -- many of the fields will be the same for each of the
</span><br>
<span class="quotelev1">&gt; individual tests in the intel test suite (for example).
</span><br>
<p>Right - part of this field matching review might involve making sure we 
<br>
have the right fields marked as constant/varying over a test suite run.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;1. send all results from the above intel run in a single 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;submit (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;all tcp and all openib results).  Since we submit the MCA 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;params as part
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;of the data, our queries later can distinguish tcp vs. openib data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;This is what I want.  We can easily construct queries to only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I guess I'm still not clear on *why* you want this.  :-)  Can you
</span><br>
<span class="quotelev1">&gt; specify the reasons?
</span><br>
<p>Well, I think having a test suite run with all its variations 
<br>
interpreted as a single perfbase run makes sense.  We could certainly 
<br>
draw the line elsewhere, but I think its appropriate that a test suite 
<br>
run with a particular mpi install on a particular system makes a 
<br>
suitable base unit.  It matches both the MTT and perfbase architectures 
<br>
well - we can support this easily in MTT, it scales well in perfbase, 
<br>
doesn't compromise our query ability, and just plain gets the job done.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;get what 
</span><br>
<span class="quotelev2">&gt;&gt;we want i.e. just tcp, just threaded, just odin, etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2. send all the tcp results in one submit and then send the 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;openib data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;in a separate submit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Bleh - so this works if you only consider the 'btl' 
</span><br>
<span class="quotelev2">&gt;&gt;parameter.  But what 
</span><br>
<span class="quotelev2">&gt;&gt;ito consider other parameters in this way?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that information (tcp vs. openib) is in one of the fields that we
</span><br>
<span class="quotelev1">&gt; send back (it has to be, otherwise the results are somewhat
</span><br>
<span class="quotelev1">&gt; meaningless).  It's not a standalone &quot;btl&quot; field, though -- it's more of
</span><br>
<span class="quotelev1">&gt; a &quot;here's the MCA parameters that were specified&quot; field.  So queries for
</span><br>
<span class="quotelev1">&gt; tcp results will probably need to search for &quot;tcp&quot; in the MCA parameters
</span><br>
<span class="quotelev1">&gt; field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this is the same issue regardless of whether we submit 1 result at a
</span><br>
<span class="quotelev1">&gt; time or all at once, right?  I guess I don't see the difference for
</span><br>
<span class="quotelev1">&gt; selecting &quot;tcp&quot; vs. &quot;openib&quot; results based on whether we submit 1 result
</span><br>
<span class="quotelev1">&gt; at a time or all at once -- can you clarify?  I think I must be missing
</span><br>
<span class="quotelev1">&gt; something...
</span><br>
<p>I think you missed what I was saying - picking which BTL was used for 
<br>
any kind of storage differentiation just seems completely arbitrary to 
<br>
me.  Not only that, its open mpi specific, or do we not care about being 
<br>
MPI agnostic any more?
<br>
<p>Though, if your new server side idea is implemented, it doesnt really 
<br>
matter how you split stuff to send over HTTP, as it all gets thrown back 
<br>
together before going into perfbase.
<br>
<p>You're right in that it doesn't have much/anything to do with the split 
<br>
submission issue.
<br>
<p><span class="quotelev1">&gt; If this is all possible, then -- at least in my mind -- I don't see a
</span><br>
<span class="quotelev1">&gt; reason why multiple submits vs. a single submit is *required*.
</span><br>
<span class="quotelev1">&gt; Obviously, multiple submits will take more bandwidth than a single
</span><br>
<span class="quotelev1">&gt; submit -- but I see that as an optimization that we can [and should]
</span><br>
<span class="quotelev1">&gt; work out later.  Specifically: reducing the bandwidth of submits doesn't
</span><br>
<span class="quotelev1">&gt; need to be in the initial version since our primary, immediate goal is
</span><br>
<span class="quotelev1">&gt; to get this functional, running nightly tests, and sending out test
</span><br>
<span class="quotelev1">&gt; results in the morning as long as the current, unoptimized bandwidth
</span><br>
<span class="quotelev1">&gt; requirements are not too onerous on milliways.
</span><br>
<p>Well, the direction I was going with the server side was that a test 
<br>
suite run would be in one HTTP POST.  As far as I'm concerned its a 
<br>
matter of writing code to do it differently, and how soon you want this 
<br>
to work.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Ethan Mallove: "[MTT users] mtt-users mail archive"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>In reply to:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
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
