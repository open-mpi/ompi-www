<?
$subject_val = "Re: [OMPI devel] [OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 18:28:58 2010" -->
<!-- isoreceived="20100727222858" -->
<!-- sent="Tue, 27 Jul 2010 18:29:44 -0400" -->
<!-- isosent="20100727222944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Debug info on Darwin" -->
<!-- id="4105CA7B-E608-4E0E-9CEE-B1CC01FEB0D4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F35A2C7-BE78-4A19-BCBA-5CD53100621B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-07-27 18:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8232.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8231.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, it occurs to me that my commit doesn't even fix the case that it was intended to fix -- @#$%@#$%%@#$ !!!
<br>
<p>The main point of the patch was to fix totalview support.  I did this by examining CFLAGS.  But because CFLAGS doesn't always contain -g, we use $DEBUGGER_CFLAGS (setup in orte/config/orte_setup_debugger_flags.m4) to always compile the &quot;special&quot; .c files in libompi that *must* be compiled with -g (and friends) for totalview/ddt to work.
<br>
<p>My patch didn't address DEBUGGER_CFLAGS at all -- it only addressed CFLAGS, so it doesn't guarantee that the ompi/debugger/*.c files are compiled with -gstabs+.  Sigh.  So regardless, my first commit is busted.
<br>
<p>Here's a summary of random points:
<br>
<p>- Per above, we clearly need to add -gstabs+ for the DEBUGGER_CFLAGS -- not CFLAGS.  But it *needs* to be added -- even if it's just for those ompi/debugger/*.c files.
<br>
&nbsp;&nbsp;===&gt; This is the most important point, I think.
<br>
&nbsp;&nbsp;===&gt; Is there a way to test to see if -gstabs+ is broken?
<br>
<p>- I agree that configure should always &quot;just work&quot; out of the box.  We shouldn't add something that may be broken in some environment.
<br>
<p>- I didn't think we cared about OS X 10.3 anymore (OMPI's readme says that the earliest OS X we have tested is 10.4).  Brian -- are you saying that you have a special environment that uses OS X 10.3 that we just broke?
<br>
<p>- FWIW: it is useful for OMPI *developers* to have -gstabs+.  I'd venture that most end users don't care about -gstabs+ -- if their debuggers just step over MPI function calls (because they can't step in), they don't care.
<br>
<p><p><p>On Jul 27, 2010, at 6:15 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I do sympathize with the &quot;the user said to do it&quot; argument as that is in keeping with our approach elsewhere. IIRC, what Jeff had implemented does print out a warning if we override the flag, so this would only be a minor change that might help alert people to what is going on. I would also suggest an FAQ entry as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 27, 2010, at 4:08 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Ok, so there is some middle ground I would dislike but not hate enough to object to.  How about having a AC_MSG_WARN if we find -g in the CFLAGS/CXXFLAGS on OS X version 10.4 or later?  Users get educated, I can still make executables that are debugabble for my weird environment, and this thread can die.  It's not perfect, but at least it seems to accomplish everyone's goals.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 27, 2010, at 4:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unfortunately, there really is no middle ground.  THe only option is to ask Apple to fix -g to mean -gstabs on OS X.  I'm cross compiling from one version to another, so running an executable won't work.  Looking at the three or four ways that you can specify a target version won't work (especially since at least in 10.4, you could change them without command line or environment variables).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sorry, there's no middle ground - this patch broke a use case that used to work.  I know you guys didn't know about -gstabs.  That doesn't make it right to do evil things.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 27, 2010, at 3:47 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can I offer a middle ground? I believe we have been burned enough with the -g vs -gstabs situation on OSX that it merits defaulting &quot;appropriately&quot;. So...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can we detect if gstabs is actually supported by the OS vs the compiler?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If not, can we add logic that checks the OS target version and &quot;does the right thing&quot;?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; My concern here is that our users are no more informed than Jeff or I were, and will almost certainly specify -g when what they really mean is &quot;I want a debuggable executable&quot;. Unfortunately, as we all know, that isn't what you get on OSX once you hit 10.4 and above.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jul 27, 2010, at 3:29 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jul 27, 2010, at 3:13 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jul 27, 2010, at 5:02 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; Yes, but say I'm using a custom built version of gcc that doesn't do -gstabs quite right.  Now you've screwed me. 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The configure test checks to see if -gstabs+ is accepted by the compiler.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, but acceptance and usefulness are not the same thing.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If the TARGET_VERSION is 10.3, the compiler will accept -gstabs, but the executable won't be debugable on 10.3, because 10.3 didn't use gstabs.  So I really, really want -g and you've just prevented me from doing what I want.  That's not just bad, it's awful.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm a firm believer that our configure script should do what the user says, as exactly as possible.  Changing AC behavior a little bit is a gray area, but one I'm almost ok with (since AC_PROG_CC will add -g if CFLAGS is empty).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We override that, though -- we take out that -g if CFLAGS was empty.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I understand what you're saying, and in general I agree -- that we should add as little as possible to what the user said.  But I don't quite know how to balance:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; * adding as few flags as possible
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; * making debugging symbols work for those of us who aren't familiar enough with OSX to know that you need the special/secret -gstabs+ flag (and just expect -g to be enough)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I've been developing POSIX software on a Mac for several years (i.e., not Mac-specific software, so I never dived into the details of Mac-specific functionality) and fell into the 2nd category until about a week ago.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Got any suggestions?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Yes, don't cause problems - if the user specified -g, assume he meant -g.  I understand what you're saying, but I'm against changing what the user specified because we know better.  We usually don't, and in this case, there are known use cases where that's true.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt; &gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt; &gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Previous message:</strong> <a href="8232.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>In reply to:</strong> <a href="8231.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="8234.php">Jeff Squyres: "Re: [OMPI devel] [OMPI users] Debug info on Darwin"</a>
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
