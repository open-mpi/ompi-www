<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 28 15:27:53 2006" -->
<!-- isoreceived="20060628192753" -->
<!-- sent="Wed, 28 Jun 2006 15:27:42 -0400" -->
<!-- isosent="20060628192742" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Test output to perfbase" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE988B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-06-28 15:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew --
<br>
<p>I think that I have this straight, but before I dive deep into this, I
<br>
just wanted to confirm with you to make sure I'm right.  
<br>
<p>- I know you sent one before, but I've made a mess of managing huge
<br>
volumes of mail with Outlook, and I can't find the example you sent of
<br>
the format that perfbase is expecting for all the test run results.  Can
<br>
you send the example again?  This is the send-all-the-results-at-once
<br>
vs. send-one-result-at-a-time issue.
<br>
<p>- Apache is going to have a max upload size (2MB?  I always forget what
<br>
milliways is configured for).  The client will need to be able to split
<br>
up results that are larger than this.  This has two implications:
<br>
<p>1. If a single report is larger than this size (e.g., if the output from
<br>
an &quot;install MPI&quot; phase is larger than the max upload size), Badness will
<br>
ensure.  I don't quite know how to handle this.
<br>
<p>2. In the test run phase, given that we're switching to sending all the
<br>
output from each test individually to sending them all at once, if the
<br>
total size of a given report is larger than the max limit, can I
<br>
arbitrarily split up the output results and send them in &lt;max_size
<br>
chunks?  (preserving header/data groupings, of course)  I'm assuming
<br>
yes, but just wanted to make sure.
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
<li><strong>Next message:</strong> <a href="0015.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Run MTT with pre-built ompi"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Ethan Mallove: "[MTT users] Run MTT with pre-built ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Reply:</strong> <a href="0018.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Maybe reply:</strong> <a href="0028.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
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
