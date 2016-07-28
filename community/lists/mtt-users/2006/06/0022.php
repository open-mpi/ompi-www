<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 29 11:34:33 2006" -->
<!-- isoreceived="20060629153433" -->
<!-- sent="Thu, 29 Jun 2006 08:35:44 -0700" -->
<!-- isosent="20060629153544" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [MTT users] Revised server-side processing for MTT" -->
<!-- id="44A3F350.6080906_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAE9A16_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-29 11:35:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>In reply to:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; The apache upload limit is there for a good reason (hogging of
</span><br>
<span class="quotelev1">&gt; resources), so instead of simply increasing it, perhaps we should be a
</span><br>
<span class="quotelev1">&gt; bit smarter about how we send data back.  Indeed, every web server is
</span><br>
<span class="quotelev1">&gt; going to have some finite limit.  And realistically, we should really
</span><br>
<span class="quotelev1">&gt; try to send [much] less data than the upload limit, anyway.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, perfbase.php is basically a pass-through to the back-end
</span><br>
<span class="quotelev1">&gt; perfbase command line application.  Whatever we receive via HTTP is sent
</span><br>
<span class="quotelev1">&gt; back to perfbase for processing.  I'm wondering if we should insert a
</span><br>
<span class="quotelev1">&gt; thin processing layer *before* perfbase is invoked.  Something that's
</span><br>
<span class="quotelev1">&gt; relatively simple, but could save us on bandwidth and apache processing
</span><br>
<span class="quotelev1">&gt; (which is always good; even though IU is not lacking in bandwidth,
</span><br>
<span class="quotelev1">&gt; milliways is also our production mail and web server, so cutting down
</span><br>
<span class="quotelev1">&gt; its work is always a Good Thing).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm thinking something like the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the client takes its total data that it needs to submit for one
</span><br>
<span class="quotelev1">&gt; perfbase action, compresses it (since text compresses extremely well),
</span><br>
<span class="quotelev1">&gt; and breaks it up into multiple uploads if necessary.  It serially
</span><br>
<span class="quotelev1">&gt; uploads each portion of the compressed file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the server php becomes even dumber than it is now: it simply accepts
</span><br>
<span class="quotelev1">&gt; the upload and puts it into a temporary storage place on the server (we
</span><br>
<span class="quotelev1">&gt; can put limits on this to ensure we don't run out of disk space, etc.)
</span><br>
<span class="quotelev1">&gt; and returns a handle to the client (e.g., the filename).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the client gets the handle for each portion of the upload (say it
</span><br>
<span class="quotelev1">&gt; uploaded 3 parts) and then transmits a final &quot;action&quot; upload that
</span><br>
<span class="quotelev1">&gt; indicates what to do with the uploaded parts.  Something along the lines
</span><br>
<span class="quotelev1">&gt; of &quot;combine &lt;handle A&gt;, &lt;handle B&gt;, and &lt;handle C&gt; and make them one
</span><br>
<span class="quotelev1">&gt; submission to perfbase.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - the server php saves this as a special &quot;action&quot; file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - a cron job periodically sweeps the storage space on the server looking
</span><br>
<span class="quotelev1">&gt; for action files.  It processes them as it sees them (e.g.,
</span><br>
<span class="quotelev1">&gt; uncompressing and collating &lt;A&gt;, &lt;B&gt;, and &lt;C&gt;, submitting them to
</span><br>
<span class="quotelev1">&gt; perfbase, and removing all temporary files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - for good measure, we should also sweep the storage space to remove
</span><br>
<span class="quotelev1">&gt; old/stale temporary files (e.g., if a client never submitted a
</span><br>
<span class="quotelev1">&gt; corresponding action file).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This solves several problems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. We can compress data sent to the server, which could save a *lot* of
</span><br>
<span class="quotelev1">&gt; bandwidth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Since the server can apply some intelligence before submitting data
</span><br>
<span class="quotelev1">&gt; to perfbase, the client can also send *abbreviated* data.  Specifically,
</span><br>
<span class="quotelev1">&gt; the client can send *one* copy of all the platform, architecture,
</span><br>
<span class="quotelev1">&gt; compiler, mpirun params, etc., and then all the test results that were
</span><br>
<span class="quotelev1">&gt; generated with that (remember that we currently send all that header
</span><br>
<span class="quotelev1">&gt; data with *every* test result).  The server side can then reconstruct
</span><br>
<span class="quotelev1">&gt; this into the format that perfbase needs (e.g., adding the same header
</span><br>
<span class="quotelev1">&gt; to every data portion before submitting to perfbase).  I'm guessing that
</span><br>
<span class="quotelev1">&gt; this will actually be a massive savings in bandwidth.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. We can send arbitrarily large upload files (although since text
</span><br>
<span class="quotelev1">&gt; compresses so well, this might not be much of an issue), regardless of
</span><br>
<span class="quotelev1">&gt; the apache limit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. All the intelligence of perfbase processing moves out of apache
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This doesn't seem too complicated to write, either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, the bandwidth savings from #2 may make #1 unnecessary (at
</span><br>
<span class="quotelev1">&gt; least initially -- sending plain, uncompressed text will probably make
</span><br>
<span class="quotelev1">&gt; debugging at least slightly easier).  More specifically, we can always
</span><br>
<span class="quotelev1">&gt; add compression later if we want/need to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This was pretty much the original plan for the server side.. don't 
<br>
remember why we didn't do it.. complications maybe?  I seem to remember 
<br>
Brian hating all over it too :)
<br>
<p>Seems like a good solution to me, though I don't volunteer to code this 
<br>
right now.
<br>
<p>Something to think about is security and validity - authentication is 
<br>
mostly handled by .htaccess now, so we have something there.  But I 
<br>
wonder if we should be validating the data going into perfbase in some 
<br>
way?  Not sure, just a random idea.
<br>
<p>One thing that might be useful is that apache often does compression of 
<br>
outgoing web pages on the fly at the browser's request (in fact I think 
<br>
browsers request this by default nowadays? not sure).  I imagine the 
<br>
perl LWP stuff supports this on the fly as well.  If this works for HTTP 
<br>
POST, would make things a lot easier.  Though it also means apache is 
<br>
doing compression work.
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0023.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Test output to perfbase"</a>
<li><strong>Previous message:</strong> <a href="0021.php">Andrew Friedley: "Re: [MTT users] Test output to perfbase"</a>
<li><strong>In reply to:</strong> <a href="0020.php">Jeff Squyres \(jsquyres\): "[MTT users] Revised server-side processing for MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0024.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] Revised server-side processing for MTT"</a>
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
