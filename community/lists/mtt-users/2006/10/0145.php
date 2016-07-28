<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 13 16:16:46 2006" -->
<!-- isoreceived="20061013201646" -->
<!-- sent="Thu, 12 Oct 2006 22:38:16 -0400" -->
<!-- isosent="20061013023816" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Tests build, but do not run" -->
<!-- id="20061013023815.GA23672_at_burl-ct-v440-4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9077899-03A5-47BC-969F-98DBE8EF124A_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-12 22:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Jeff Squyres: "[MTT users] IU: lessons learned from MTT"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Oct/12/2006 03:01:53PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 11, 2006, at 11:34 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;So if I do put the four combinations of platform/bitness in
</span><br>
<span class="quotelev2">&gt; &gt;a single ini file, I then have to do some ugly ini param
</span><br>
<span class="quotelev2">&gt; &gt;overriding to line up the sections, e.g.,:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Command 1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;$ cat /home/em162155/mtt/all.ini |
</span><br>
<span class="quotelev2">&gt; &gt;     client/mtt  -p -d -
</span><br>
<span class="quotelev2">&gt; &gt;      [...]
</span><br>
<span class="quotelev2">&gt; &gt;       mpi_get='ompi-nightly-trunk'
</span><br>
<span class="quotelev2">&gt; &gt;       &quot;intel:test_build='intel $arch $bit'&quot;
</span><br>
<span class="quotelev2">&gt; &gt;       &quot;imb:test_build='imb $arch $bit'&quot;
</span><br>
<span class="quotelev2">&gt; &gt;       &quot;ibm:test_build='ibm $arch $bit'&quot;
</span><br>
<span class="quotelev2">&gt; &gt;       &quot;trivial:test_build='trivial $arch $bit'&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I was thinking it would be nice if I could do something
</span><br>
<span class="quotelev2">&gt; &gt;like this in my ini:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[Test get: intel all]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev2">&gt; &gt;[Test build: intel sparc 32]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev2">&gt; &gt;[Test build: intel sparc 64]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev2">&gt; &gt;[Test build: intel i386 32]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev2">&gt; &gt;[Test build: intel i386 64]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev2">&gt; &gt;[Test run: intel all]
</span><br>
<span class="quotelev2">&gt; &gt;suite_name = intel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why do you need different test build sections?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Different intel_ompi_tests_(f|c)flags parameters for each.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Jeff Squyres: "[MTT users] IU: lessons learned from MTT"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
<li><strong>Reply:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT users] Tests build, but do not run"</a>
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
