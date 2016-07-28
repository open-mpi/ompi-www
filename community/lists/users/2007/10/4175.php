<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 02:09:27 2007" -->
<!-- isoreceived="20071009060927" -->
<!-- sent="Tue, 9 Oct 2007 08:08:30 +0200" -->
<!-- isosent="20071009060830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sed and openmpi on Mac OSX 10.4.10" -->
<!-- id="93575E3B-E530-406B-8B3A-F7E0DD9592B9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="392D60FD-C09F-4B23-95E6-B5DE43B449B9_at_san.rr.com" -->
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
<strong>Date:</strong> 2007-10-09 02:08:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 7, 2007, at 11:46 PM, Michael Clover wrote:
<br>
<p><span class="quotelev1">&gt; I tried to look  at the checksum of my version of sed, and got a
</span><br>
<span class="quotelev1">&gt; different number.  I also found instructions on an Octave web page
</span><br>
<span class="quotelev1">&gt; about loading the GNU sed on a Mac, to replace the POSIX flavored one
</span><br>
<span class="quotelev1">&gt; that comes with it.  I was able to load sed-4.1.4, but still don't
</span><br>
<span class="quotelev1">&gt; get your checksums (I changed the name of the original Mac sed to
</span><br>
<span class="quotelev1">&gt; __sed).  Are you using the Mac supplied sed or not?
</span><br>
<p>Yes -- I'm using the Mac-supplied sed.
<br>
<p><span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.3:[132]&gt;md5 /usr/local/bin/sed
</span><br>
<span class="quotelev1">&gt; MD5 (/usr/local/bin/sed) = 010000f9ed14ed1fa9fcf7406dd8a609
</span><br>
<span class="quotelev1">&gt; cloverm:~/bin/openmpi-1.2.3:[133]&gt;md5 /usr/bin/__sed
</span><br>
<span class="quotelev1">&gt; MD5 (/usr/bin/__sed) = e8e106779d71f6f2cca9c7157ce4b5eb
</span><br>
<p>I don't have either of these sed's -- mine is /usr/bin/sed.
<br>
<p><span class="quotelev1">&gt; However, this new sed made only a slight difference on
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.3:  instead of getting unescaped newlines, I now get
</span><br>
<span class="quotelev1">&gt; unterminated &quot;s&quot; commands:
</span><br>
<span class="quotelev1">&gt; (and with openmpi-1.2.4, I still get the same problem reported
</span><br>
<span class="quotelev1">&gt; yesterday when I try to &quot;make&quot; the successfully configured 1.2.4,
</span><br>
<span class="quotelev1">&gt; namely that line 602 of Makefile is missing a separator).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking for OMPI LIBS...
</span><br>
<span class="quotelev1">&gt; checking for OMPI extra include dirs...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Final output
</span><br>
<span class="quotelev1">&gt; configure: creating ./config.status
</span><br>
<span class="quotelev1">&gt; config.status: creating ompi/include/ompi/version.h
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatA1BhUF/subs-3.sed line 33: unterminated `s'  
</span><br>
<span class="quotelev1">&gt; command
</span><br>
<span class="quotelev1">&gt; sed: file ./confstatA1BhUF/subs-4.sed line 4: unterminated `s' command
</span><br>
<span class="quotelev1">&gt; config.status: creating orte/include/orte/version.h
</span><br>
<p>Ahh... I think I see the problem in your other mail... going to reply  
<br>
there...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4176.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4174.php">Jeff Squyres: "Re: [OMPI users] Tool communication"</a>
<li><strong>In reply to:</strong> <a href="4167.php">Michael Clover: "[OMPI users] sed and openmpi on Mac OSX 10.4.10"</a>
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
