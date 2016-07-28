<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 12 18:02:02 2006" -->
<!-- isoreceived="20061012220202" -->
<!-- sent="Thu, 12 Oct 2006 15:01:53 -0700" -->
<!-- isosent="20061012220153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests build, but do not run" -->
<!-- id="C9077899-03A5-47BC-969F-98DBE8EF124A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061011183432.GD39581_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 18:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0145.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2006, at 11:34 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; So if I do put the four combinations of platform/bitness in
</span><br>
<span class="quotelev1">&gt; a single ini file, I then have to do some ugly ini param
</span><br>
<span class="quotelev1">&gt; overriding to line up the sections, e.g.,:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Command 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /home/em162155/mtt/all.ini |
</span><br>
<span class="quotelev1">&gt;      client/mtt  -p -d -
</span><br>
<span class="quotelev1">&gt;       [...]
</span><br>
<span class="quotelev1">&gt;        mpi_get='ompi-nightly-trunk'
</span><br>
<span class="quotelev1">&gt;        &quot;intel:test_build='intel $arch $bit'&quot;
</span><br>
<span class="quotelev1">&gt;        &quot;imb:test_build='imb $arch $bit'&quot;
</span><br>
<span class="quotelev1">&gt;        &quot;ibm:test_build='ibm $arch $bit'&quot;
</span><br>
<span class="quotelev1">&gt;        &quot;trivial:test_build='trivial $arch $bit'&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was thinking it would be nice if I could do something
</span><br>
<span class="quotelev1">&gt; like this in my ini:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Test get: intel all]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<span class="quotelev1">&gt; [Test build: intel sparc 32]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<span class="quotelev1">&gt; [Test build: intel sparc 64]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<span class="quotelev1">&gt; [Test build: intel i386 32]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<span class="quotelev1">&gt; [Test build: intel i386 64]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<span class="quotelev1">&gt; [Test run: intel all]
</span><br>
<span class="quotelev1">&gt; suite_name = intel
</span><br>
<p>Why do you need different test build sections?
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
<li><strong>Next message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0142.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0145.php">Ethan Mallove: "Re: [MTT users] Tests build, but do not run"</a>
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
