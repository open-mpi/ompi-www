<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 17:29:34 2010" -->
<!-- isoreceived="20100727212934" -->
<!-- sent="Tue, 27 Jul 2010 15:29:15 -0600" -->
<!-- isosent="20100727212915" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="2D973515-9890-45F9-BDAB-EE452E0FD772_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15628EE2-3D32-4037-8608-7C8D901ED291_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Debug info on Darwin<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 17:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8226.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8226.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2010, at 3:13 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 27, 2010, at 5:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, but say I'm using a custom built version of gcc that doesn't do -gstabs quite right.  Now you've screwed me.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure test checks to see if -gstabs+ is accepted by the compiler.
</span><br>
<p>Yes, but acceptance and usefulness are not the same thing.
<br>
<p>If the TARGET_VERSION is 10.3, the compiler will accept -gstabs, but the executable won't be debugable on 10.3, because 10.3 didn't use gstabs.  So I really, really want -g and you've just prevented me from doing what I want.  That's not just bad, it's awful.
<br>
<p><span class="quotelev2">&gt;&gt; I'm a firm believer that our configure script should do what the user says, as exactly as possible.  Changing AC behavior a little bit is a gray area, but one I'm almost ok with (since AC_PROG_CC will add -g if CFLAGS is empty).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We override that, though -- we take out that -g if CFLAGS was empty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand what you're saying, and in general I agree -- that we should add as little as possible to what the user said.  But I don't quite know how to balance:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * adding as few flags as possible
</span><br>
<span class="quotelev1">&gt; * making debugging symbols work for those of us who aren't familiar enough with OSX to know that you need the special/secret -gstabs+ flag (and just expect -g to be enough)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been developing POSIX software on a Mac for several years (i.e., not Mac-specific software, so I never dived into the details of Mac-specific functionality) and fell into the 2nd category until about a week ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Got any suggestions?
</span><br>
<p>Yes, don't cause problems - if the user specified -g, assume he meant -g.  I understand what you're saying, but I'm against changing what the user specified because we know better.  We usually don't, and in this case, there are known use cases where that's true.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8226.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8226.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8228.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
