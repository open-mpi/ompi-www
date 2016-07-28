<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 00:11:32 2006" -->
<!-- isoreceived="20060629041132" -->
<!-- sent="Wed, 28 Jun 2006 21:10:22 -0800" -->
<!-- isosent="20060629051022" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] Test output to perfbase" -->
<!-- id="44A360BE.6000603_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE988B_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 01:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Andrew Friedley: "Re: [MTT users] Perfbase and '"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Andrew --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that I have this straight, but before I dive deep into this, I
</span><br>
<span class="quotelev1">&gt; just wanted to confirm with you to make sure I'm right.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I know you sent one before, but I've made a mess of managing huge
</span><br>
<span class="quotelev1">&gt; volumes of mail with Outlook, and I can't find the example you sent of
</span><br>
<span class="quotelev1">&gt; the format that perfbase is expecting for all the test run results.  Can
</span><br>
<span class="quotelev1">&gt; you send the example again?  This is the send-all-the-results-at-once
</span><br>
<span class="quotelev1">&gt; vs. send-one-result-at-a-time issue.
</span><br>
<p>I can't find it, is this recent or from a long time ago?
<br>
<p><span class="quotelev1">&gt; - Apache is going to have a max upload size (2MB?  I always forget what
</span><br>
<span class="quotelev1">&gt; milliways is configured for).  The client will need to be able to split
</span><br>
<span class="quotelev1">&gt; up results that are larger than this.  This has two implications:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. If a single report is larger than this size (e.g., if the output from
</span><br>
<span class="quotelev1">&gt; an &quot;install MPI&quot; phase is larger than the max upload size), Badness will
</span><br>
<span class="quotelev1">&gt; ensure.  I don't quite know how to handle this.
</span><br>
<p>Make the max upload size bigger :)
<br>
<p><span class="quotelev1">&gt; 2. In the test run phase, given that we're switching to sending all the
</span><br>
<span class="quotelev1">&gt; output from each test individually to sending them all at once, if the
</span><br>
<span class="quotelev1">&gt; total size of a given report is larger than the max limit, can I
</span><br>
<span class="quotelev1">&gt; arbitrarily split up the output results and send them in &lt;max_size
</span><br>
<span class="quotelev1">&gt; chunks?  (preserving header/data groupings, of course)  I'm assuming
</span><br>
<span class="quotelev1">&gt; yes, but just wanted to make sure.
</span><br>
<p>Not sure.  I think this will work, but it should be avoided.  With how 
<br>
things are now, this is going to generate a run per submission, and the 
<br>
whole point of sending test results all at once is to consolidate them 
<br>
into one run.  Not the best, but not the end of the world either.
<br>
<p>Though I think it's possible for us to collect several files on the 
<br>
server side before submitting them to perfbase as one single run. 
<br>
Problem is, that's going to be a lot of work on the server side.
<br>
<p>Depending on how the apache limit is enforced, this would involve 
<br>
writing files to storage or preserving the data between HTTP POSTs in 
<br>
some way.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0017.php">Andrew Friedley: "Re: [MTT users] Perfbase and '"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Jeff Squyres \(jsquyres\): "[MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
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
