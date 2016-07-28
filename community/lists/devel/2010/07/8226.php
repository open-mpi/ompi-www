<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 17:12:32 2010" -->
<!-- isoreceived="20100727211232" -->
<!-- sent="Tue, 27 Jul 2010 17:13:18 -0400" -->
<!-- isosent="20100727211318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="15628EE2-3D32-4037-8608-7C8D901ED291_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0E2501F-F932-47A2-923A-EBCDC3D3CF54_at_sandia.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 17:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8225.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8225.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 27, 2010, at 5:02 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Yes, but say I'm using a custom built version of gcc that doesn't do -gstabs quite right.  Now you've screwed me.  
</span><br>
<p>The configure test checks to see if -gstabs+ is accepted by the compiler.
<br>
<p><span class="quotelev1">&gt; I'm a firm believer that our configure script should do what the user says, as exactly as possible.  Changing AC behavior a little bit is a gray area, but one I'm almost ok with (since AC_PROG_CC will add -g if CFLAGS is empty).
</span><br>
<p>We override that, though -- we take out that -g if CFLAGS was empty.
<br>
<p>I understand what you're saying, and in general I agree -- that we should add as little as possible to what the user said.  But I don't quite know how to balance:
<br>
<p>&nbsp;* adding as few flags as possible
<br>
&nbsp;* making debugging symbols work for those of us who aren't familiar enough with OSX to know that you need the special/secret -gstabs+ flag (and just expect -g to be enough)
<br>
<p>I've been developing POSIX software on a Mac for several years (i.e., not Mac-specific software, so I never dived into the details of Mac-specific functionality) and fell into the 2nd category until about a week ago.
<br>
<p>Got any suggestions?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8225.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8225.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8227.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
