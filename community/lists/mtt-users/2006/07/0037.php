<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 12 12:13:02 2006" -->
<!-- isoreceived="20060712161302" -->
<!-- sent="Wed, 12 Jul 2006 12:12:51 -0400" -->
<!-- isosent="20060712161251" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFB73C49_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]" -->
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
<strong>Date:</strong> 2006-07-12 12:12:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt r196 - in trunk: lib/MTT lib/MTT/Reporter server"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Ethan Mallove: "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiple steps]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: mtt-users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:mtt-users-bounces_at_[hidden]] On Behalf Of Ethan Mallove
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 12, 2006 10:38 AM
</span><br>
<span class="quotelev1">&gt; To: mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [MTT users] [Fwd: [perfbase-users] Submitting a 
</span><br>
<span class="quotelev1">&gt; run in multiplesteps]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres (jsquyres) wrote On 07/10/06 17:48,:
</span><br>
<span class="quotelev2">&gt; &gt; I think the latter is what we'll likely do; our goal is to 
</span><br>
<span class="quotelev1">&gt; see partial
</span><br>
<span class="quotelev2">&gt; &gt; results (e.g., not have to wait 10 hours to see that every 
</span><br>
<span class="quotelev1">&gt; single test
</span><br>
<span class="quotelev2">&gt; &gt; failed) rather than be able to submit lots of results at once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To see partial results, I have this in my .ini file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; [Reporter: IU database]
</span><br>
<span class="quotelev1">&gt; module = Perfbase
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; perfbase_realm = OMPI
</span><br>
<span class="quotelev1">&gt; perfbase_username = postgres
</span><br>
<span class="quotelev1">&gt; ... [snip] ...
</span><br>
<span class="quotelev1">&gt; perfbase_debug_filename = pb_debug
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can then look at the pb_debug* files to see the results as 
</span><br>
<span class="quotelev1">&gt; they're happening. They're not pretty
</span><br>
<span class="quotelev1">&gt; results in tabular or graphical format, but could these raw 
</span><br>
<span class="quotelev1">&gt; results suffice for most situations?
</span><br>
<p>They could suffice for some, I suppose.  Note that I implemented the
<br>
debug_filename option as a &quot;either dump to a file *or* submit back to
<br>
perfbase&quot; kind of thing.  So if you have the debug_filename, it won't
<br>
submit back to perfbase.  That's easy enough to change, of course (i.e.,
<br>
there's no technical reason preventing both from happening), but that's
<br>
the way it is right now.
<br>
<p>But also keep in mind that this will only dump out output at the same
<br>
time that we would have reported back to perfbase.  So the timing of the
<br>
results will be about the same.
<br>
<p>The code currently reports back to perfbase after each test execution
<br>
(as opposed to after the entire suite), so our granularity for &quot;real
<br>
time results&quot; is quite good right now.  I suspect that we'll want to do
<br>
a blocking mechanism before going production (e.g., collect N results at
<br>
a time and submit them all at once so that we don't hammer on the IU
<br>
server).  That should also not be difficult to do.
<br>
<p><span class="quotelev1">&gt; E.g., you can get a pretty good idea of how the tests are 
</span><br>
<span class="quotelev1">&gt; going by just doing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ grep -E 'test_pass|test_name' pb_debug*
</span><br>
<span class="quotelev1">&gt; pb_debug.0.txt:test_name: c_hello
</span><br>
<span class="quotelev1">&gt; pb_debug.0.txt:test_pass: 1
</span><br>
<span class="quotelev1">&gt; pb_debug.1.txt:test_name: cxx_hello
</span><br>
<span class="quotelev1">&gt; pb_debug.1.txt:test_pass: 1
</span><br>
<span class="quotelev1">&gt; pb_debug.10.txt:test_name: MPI_Barrier_c
</span><br>
<span class="quotelev1">&gt; pb_debug.10.txt:test_pass: 1
</span><br>
<span class="quotelev1">&gt; pb_debug.11.txt:test_name: MPI_Bcast_c
</span><br>
<span class="quotelev1">&gt; pb_debug.11.txt:test_pass: 1
</span><br>
<span class="quotelev1">&gt; ... [snip] ... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think though, that the Perbase.pm code needs to be adjusted 
</span><br>
<span class="quotelev1">&gt; to allow for results to go to both the
</span><br>
<span class="quotelev1">&gt; perfbase debug files _and_ to IU's perfbase simultaneously 
</span><br>
<span class="quotelev1">&gt; (right now there's an if-else preventing
</span><br>
<span class="quotelev1">&gt; this).
</span><br>
<p>Yep -- you hit the nail on the head.  No reason it can't do both; I just
<br>
coded it up that way, well, *because*.  :-)
<br>
&nbsp;
<br>
<pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Ethan Mallove: "Re: [MTT users] [MTT svn] svn:mtt r196 - in trunk: lib/MTT lib/MTT/Reporter server"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Ethan Mallove: "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiple steps]"</a>
<!-- nextthread="start" -->
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
