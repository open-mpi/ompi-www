<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 19:43:06 2010" -->
<!-- isoreceived="20100727234306" -->
<!-- sent="Tue, 27 Jul 2010 17:42:46 -0600" -->
<!-- isosent="20100727234246" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="7C2CA314B8E94D49A25202C1ECF6F15F_at_wattdev1" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE951C94-8A15-4705-96F9-FABA9993E9E7_at_cisco.com" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 19:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wise decision. &quot;Platform heals&quot; went out with the '80's.
<br>
<p>Ken 
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Tuesday, July 27, 2010 5:40 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] [OMPI users] Debug info on Darwin
<br>
<p>In good email tradition, this thread went downhill.  :-)
<br>
<p>So Brian and I got on the phone and had a good long discussion about it.
<br>
The short version is that we need to ask those who know about compilers and
<br>
debuggers to figure out what the Right Thing to do is.
<br>
<p>I'm not going to hold up 1.5.0 for this fix (i.e., revert out what was put
<br>
in 1.5; I already reverted it out of the trunk).  There is a (sucky but
<br>
workable) workaround for Totalview/DDT support on OSX: ./configure
<br>
CFLAGS=-gstabs+ ...  We can get the real fix in 1.5.1 after getting some
<br>
advice from mo' smarter people.
<br>
<p><p><p>On Jul 27, 2010, at 6:29 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Actually, it occurs to me that my commit doesn't even fix the case that it
</span><br>
was intended to fix -- @#$%@#$%%@#$ !!!
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main point of the patch was to fix totalview support.  I did this by
</span><br>
examining CFLAGS.  But because CFLAGS doesn't always contain -g, we use
<br>
$DEBUGGER_CFLAGS (setup in orte/config/orte_setup_debugger_flags.m4) to
<br>
always compile the &quot;special&quot; .c files in libompi that *must* be compiled
<br>
with -g (and friends) for totalview/ddt to work.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My patch didn't address DEBUGGER_CFLAGS at all -- it only addressed
</span><br>
CFLAGS, so it doesn't guarantee that the ompi/debugger/*.c files are
<br>
compiled with -gstabs+.  Sigh.  So regardless, my first commit is busted.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a summary of random points:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Per above, we clearly need to add -gstabs+ for the DEBUGGER_CFLAGS --
</span><br>
not CFLAGS.  But it *needs* to be added -- even if it's just for those
<br>
ompi/debugger/*.c files.
<br>
<span class="quotelev1">&gt;   ===&gt; This is the most important point, I think.
</span><br>
<span class="quotelev1">&gt;   ===&gt; Is there a way to test to see if -gstabs+ is broken?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I agree that configure should always &quot;just work&quot; out of the box.  We
</span><br>
shouldn't add something that may be broken in some environment.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I didn't think we cared about OS X 10.3 anymore (OMPI's readme says that
</span><br>
the earliest OS X we have tested is 10.4).  Brian -- are you saying that you
<br>
have a special environment that uses OS X 10.3 that we just broke?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - FWIW: it is useful for OMPI *developers* to have -gstabs+.  I'd venture
</span><br>
that most end users don't care about -gstabs+ -- if their debuggers just
<br>
step over MPI function calls (because they can't step in), they don't care.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2010, at 6:15 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I do sympathize with the &quot;the user said to do it&quot; argument as that is in
</span><br>
keeping with our approach elsewhere. IIRC, what Jeff had implemented does
<br>
print out a warning if we override the flag, so this would only be a minor
<br>
change that might help alert people to what is going on. I would also
<br>
suggest an FAQ entry as well.
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 27, 2010, at 4:08 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ok, so there is some middle ground I would dislike but not hate enough
</span><br>
to object to.  How about having a AC_MSG_WARN if we find -g in the
<br>
CFLAGS/CXXFLAGS on OS X version 10.4 or later?  Users get educated, I can
<br>
still make executables that are debugabble for my weird environment, and
<br>
this thread can die.  It's not perfect, but at least it seems to accomplish
<br>
everyone's goals.
<br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Jul 27, 2010, at 4:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Unfortunately, there really is no middle ground.  THe only option is
</span><br>
to ask Apple to fix -g to mean -gstabs on OS X.  I'm cross compiling from
<br>
one version to another, so running an executable won't work.  Looking at the
<br>
three or four ways that you can specify a target version won't work
<br>
(especially since at least in 10.4, you could change them without command
<br>
line or environment variables).
<br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Sorry, there's no middle ground - this patch broke a use case that
</span><br>
used to work.  I know you guys didn't know about -gstabs.  That doesn't make
<br>
it right to do evil things.
<br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Brian
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Jul 27, 2010, at 3:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Can I offer a middle ground? I believe we have been burned enough
</span><br>
with the -g vs -gstabs situation on OSX that it merits defaulting
<br>
&quot;appropriately&quot;. So...
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Can we detect if gstabs is actually supported by the OS vs the
</span><br>
compiler?
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; If not, can we add logic that checks the OS target version and &quot;does
</span><br>
the right thing&quot;?
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; My concern here is that our users are no more informed than Jeff or
</span><br>
I were, and will almost certainly specify -g when what they really mean is
<br>
&quot;I want a debuggable executable&quot;. Unfortunately, as we all know, that isn't
<br>
what you get on OSX once you hit 10.4 and above.
<br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; On Jul 27, 2010, at 3:29 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; On Jul 27, 2010, at 3:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; On Jul 27, 2010, at 5:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; Yes, but say I'm using a custom built version of gcc that doesn't
</span><br>
do -gstabs quite right.  Now you've screwed me.
<br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; The configure test checks to see if -gstabs+ is accepted by the
</span><br>
compiler.
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Yes, but acceptance and usefulness are not the same thing.
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; If the TARGET_VERSION is 10.3, the compiler will accept -gstabs,
</span><br>
but the executable won't be debugable on 10.3, because 10.3 didn't use
<br>
gstabs.  So I really, really want -g and you've just prevented me from doing
<br>
what I want.  That's not just bad, it's awful.
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm a firm believer that our configure script should do what the
</span><br>
user says, as exactly as possible.  Changing AC behavior a little bit is a
<br>
gray area, but one I'm almost ok with (since AC_PROG_CC will add -g if
<br>
CFLAGS is empty).
<br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; We override that, though -- we take out that -g if CFLAGS was
</span><br>
empty.
<br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; I understand what you're saying, and in general I agree -- that we
</span><br>
should add as little as possible to what the user said.  But I don't quite
<br>
know how to balance:
<br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; * adding as few flags as possible
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; * making debugging symbols work for those of us who aren't 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; familiar enough with OSX to know that you need the 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; special/secret -gstabs+ flag (and just expect -g to be enough)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; I've been developing POSIX software on a Mac for several years
</span><br>
(i.e., not Mac-specific software, so I never dived into the details of
<br>
Mac-specific functionality) and fell into the 2nd category until about a
<br>
week ago.
<br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;&gt;&gt;&gt;&gt; Got any suggestions?
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Yes, don't cause problems - if the user specified -g, assume he
</span><br>
meant -g.  I understand what you're saying, but I'm against changing what
<br>
the user specified because we know better.  We usually don't, and in this
<br>
case, there are known use cases where that's true.
<br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software Sandia National 
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; Laboratories
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Dept. 1423: Scalable System Software Sandia National Laboratories
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Brian W. Barrett
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8236.php">Ralf Wildenhues: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
