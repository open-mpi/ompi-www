<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 12 10:38:11 2006" -->
<!-- isoreceived="20060712143811" -->
<!-- sent="Wed, 12 Jul 2006 10:38:07 -0400" -->
<!-- isosent="20060712143807" -->
<!-- name="Ethan Mallove" -->
<!-- email="Ethan.Mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiple steps]" -->
<!-- id="44B5094F.8070406_at_Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFB735CF_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>Ethan.Mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-12 10:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres (jsquyres) wrote On 07/10/06 17:48,:
<br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: Joachim Worringen [mailto:joachim_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Monday, July 10, 2006 7:41 AM
</span><br>
<span class="quotelev2">&gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [Fwd: [perfbase-users] Submitting a run in 
</span><br>
<span class="quotelev2">&gt;&gt;multiple steps]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;The current version of perfbase does no longer create a new table for 
</span><br>
<span class="quotelev2">&gt;&gt;each run, but only a new index. Indexes are cheap, but queries might 
</span><br>
<span class="quotelev2">&gt;&gt;become somewhat slower if a large list of run indexes has to be 
</span><br>
<span class="quotelev2">&gt;&gt;processed. Note that this really reads *might*, as I don't 
</span><br>
<span class="quotelev2">&gt;&gt;know how well 
</span><br>
<span class="quotelev2">&gt;&gt;PostgreSQL handles/optimizes such SQL constructs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;It's an important characteristic of perfbase that runs can not be 
</span><br>
<span class="quotelev2">&gt;&gt;modified once they have been created. Thus, the thing you thought of 
</span><br>
<span class="quotelev2">&gt;&gt;won't be possible.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;However, it is possible to create a single run from an 
</span><br>
<span class="quotelev2">&gt;&gt;unlimited number 
</span><br>
<span class="quotelev2">&gt;&gt;of input files by using the &quot;--join&quot; option for the input command. I 
</span><br>
<span class="quotelev2">&gt;&gt;guess that's the way to go. Additionally, if you can not 
</span><br>
<span class="quotelev2">&gt;&gt;avoid to create 
</span><br>
<span class="quotelev2">&gt;&gt;multiple perfbase runs for a single test suite run, you should group 
</span><br>
<span class="quotelev2">&gt;&gt;these run via a dedicated parameter value, or use the 
</span><br>
<span class="quotelev2">&gt;&gt;synopsis for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the latter is what we'll likely do; our goal is to see partial
</span><br>
<span class="quotelev1">&gt; results (e.g., not have to wait 10 hours to see that every single test
</span><br>
<span class="quotelev1">&gt; failed) rather than be able to submit lots of results at once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To see partial results, I have this in my .ini file:
<br>
<p><pre>
---
[Reporter: IU database]
module = Perfbase
perfbase_realm = OMPI
perfbase_username = postgres
... [snip] ...
perfbase_debug_filename = pb_debug
---
I can then look at the pb_debug* files to see the results as they're happening. They're not pretty
results in tabular or graphical format, but could these raw results suffice for most situations?
E.g., you can get a pretty good idea of how the tests are going by just doing:
$ grep -E 'test_pass|test_name' pb_debug*
pb_debug.0.txt:test_name: c_hello
pb_debug.0.txt:test_pass: 1
pb_debug.1.txt:test_name: cxx_hello
pb_debug.1.txt:test_pass: 1
pb_debug.10.txt:test_name: MPI_Barrier_c
pb_debug.10.txt:test_pass: 1
pb_debug.11.txt:test_name: MPI_Bcast_c
pb_debug.11.txt:test_pass: 1
... [snip] ...
I think though, that the Perbase.pm code needs to be adjusted to allow for results to go to both the
perfbase debug files _and_ to IU's perfbase simultaneously (right now there's an if-else preventing
this).
-Ethan
&gt; Thanks!
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] [Fwd: [perfbase-users] Submitting a run in multiplesteps]"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] sha1sum on x64 Solaris"</a>
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
