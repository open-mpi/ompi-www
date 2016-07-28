<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 08:23:16 2006" -->
<!-- isoreceived="20060629122316" -->
<!-- sent="Thu, 29 Jun 2006 08:23:11 -0400" -->
<!-- isosent="20060629122311" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] Revised server-side processing for MTT" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9A16_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 08:23:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Reply:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Maybe reply:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The apache upload limit is there for a good reason (hogging of
<br>
resources), so instead of simply increasing it, perhaps we should be a
<br>
bit smarter about how we send data back.  Indeed, every web server is
<br>
going to have some finite limit.  And realistically, we should really
<br>
try to send [much] less data than the upload limit, anyway.  
<br>
<p>Right now, perfbase.php is basically a pass-through to the back-end
<br>
perfbase command line application.  Whatever we receive via HTTP is sent
<br>
back to perfbase for processing.  I'm wondering if we should insert a
<br>
thin processing layer *before* perfbase is invoked.  Something that's
<br>
relatively simple, but could save us on bandwidth and apache processing
<br>
(which is always good; even though IU is not lacking in bandwidth,
<br>
milliways is also our production mail and web server, so cutting down
<br>
its work is always a Good Thing).  
<br>
<p>I'm thinking something like the following:
<br>
<p>- the client takes its total data that it needs to submit for one
<br>
perfbase action, compresses it (since text compresses extremely well),
<br>
and breaks it up into multiple uploads if necessary.  It serially
<br>
uploads each portion of the compressed file.
<br>
<p>- the server php becomes even dumber than it is now: it simply accepts
<br>
the upload and puts it into a temporary storage place on the server (we
<br>
can put limits on this to ensure we don't run out of disk space, etc.)
<br>
and returns a handle to the client (e.g., the filename).
<br>
<p>- the client gets the handle for each portion of the upload (say it
<br>
uploaded 3 parts) and then transmits a final &quot;action&quot; upload that
<br>
indicates what to do with the uploaded parts.  Something along the lines
<br>
of &quot;combine &lt;handle A&gt;, &lt;handle B&gt;, and &lt;handle C&gt; and make them one
<br>
submission to perfbase.&quot;
<br>
<p>- the server php saves this as a special &quot;action&quot; file.
<br>
<p>- a cron job periodically sweeps the storage space on the server looking
<br>
for action files.  It processes them as it sees them (e.g.,
<br>
uncompressing and collating &lt;A&gt;, &lt;B&gt;, and &lt;C&gt;, submitting them to
<br>
perfbase, and removing all temporary files).
<br>
<p>- for good measure, we should also sweep the storage space to remove
<br>
old/stale temporary files (e.g., if a client never submitted a
<br>
corresponding action file).
<br>
<p>This solves several problems:
<br>
<p>1. We can compress data sent to the server, which could save a *lot* of
<br>
bandwidth.
<br>
<p>2. Since the server can apply some intelligence before submitting data
<br>
to perfbase, the client can also send *abbreviated* data.  Specifically,
<br>
the client can send *one* copy of all the platform, architecture,
<br>
compiler, mpirun params, etc., and then all the test results that were
<br>
generated with that (remember that we currently send all that header
<br>
data with *every* test result).  The server side can then reconstruct
<br>
this into the format that perfbase needs (e.g., adding the same header
<br>
to every data portion before submitting to perfbase).  I'm guessing that
<br>
this will actually be a massive savings in bandwidth.
<br>
<p>3. We can send arbitrarily large upload files (although since text
<br>
compresses so well, this might not be much of an issue), regardless of
<br>
the apache limit
<br>
<p>4. All the intelligence of perfbase processing moves out of apache
<br>
<p>This doesn't seem too complicated to write, either.
<br>
<p>Additionally, the bandwidth savings from #2 may make #1 unnecessary (at
<br>
least initially -- sending plain, uncompressed text will probably make
<br>
debugging at least slightly easier).  More specifically, we can always
<br>
add compression later if we want/need to.
<br>
<p>Comments?
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
<li><strong>Next message:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0019.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Reply:</strong> <a href="0022.php">Andrew Friedley: "Re: [MTT users] Revised server-side processing for MTT"</a>
<li><strong>Maybe reply:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
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
