<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 22:14:15 2005" -->
<!-- isoreceived="20050813031415" -->
<!-- sent="Fri, 12 Aug 2005 22:14:08 -0500" -->
<!-- isosent="20050813031408" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Fwd:  Memory manager changes" -->
<!-- id="D823B3B5-35F5-4173-891F-11665F63B22D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0a3647b0bd77b3ce73e5acfa0a8f2906_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 22:14:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Reply:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 12, 2005, at 9:43 PM, Rich L. Graham wrote:
<br>
<p><span class="quotelev1">&gt;     Sounds like I got off the call a bit too early ;-)
</span><br>
<span class="quotelev1">&gt;        Can we choose to use  standard platform  libraries, or are  
</span><br>
<span class="quotelev1">&gt; we pinning
</span><br>
<span class="quotelev1">&gt; ourselves into a corner ?  I.e., is this optional ?
</span><br>
<p>Yes - the code is all built around trying to use the standard  
<br>
platform.  And yes, everything is optional.  In many cases (pretty  
<br>
much everywhere but single threaded Linux), the default will be to  
<br>
not do any memory manager tricks at all.  Of course, not having any  
<br>
memory manager hooks lessens the performance of the BTLs since we  
<br>
have to do pin/rdma pipelining, but that's the price we have to pay.
<br>
<p><span class="quotelev1">&gt;   What sort of problems are we getting into playing with pre-load  
</span><br>
<span class="quotelev1">&gt; options ?  I would
</span><br>
<span class="quotelev1">&gt; be VERY careful here, and do plenty of testing, especially with c++  
</span><br>
<span class="quotelev1">&gt; codes, before
</span><br>
<span class="quotelev1">&gt; you decide to do this.  We used to use some of these tricks in LA- 
</span><br>
<span class="quotelev1">&gt; MPI, but backed
</span><br>
<span class="quotelev1">&gt; off because of loader ordering issues.
</span><br>
<p>Agreed - I'm one of the ones who was very against doing it in the  
<br>
first place :).  Currently, the default on everywhere but single  
<br>
threaded Linux is to not have any memory manager hooks at all.  On  
<br>
single threaded Linux, we use the hooks provided by glibc for doing  
<br>
&quot;something&quot; before the actual free/realloc occurs.  Because these are  
<br>
official, recommended ways of doing things, they should work on any  
<br>
C, C++, and Fortran codes, even if they are statically linked.  I've  
<br>
tested them with C++ apps, and they work as the documentation implies  
<br>
they would.
<br>
<p>I don't think that the ldpreload tricks should ever be the default.   
<br>
I'd like to provide them, because on threaded builds (where the glibc  
<br>
hooks aren't available), they provide a much better solution than  
<br>
using ptmalloc2.  The sysadmin/user would have to setup his  
<br>
environment to load the preload library.  If the module fails to  
<br>
preload, there is a facility in place for the memory code to tell the  
<br>
mpools that there is no memory manager interrupt and to fall back to  
<br>
the unpin after use mode.  Further, the ldpreload module (not yet  
<br>
committed, but half written) can run just fine even if the app  
<br>
started isn't an opal code (with little if any performance  
<br>
difference).  I don't envision us ever explicitly setting the  
<br>
LD_PRELOAD in the pls components or anything like that.  Instead, I  
<br>
see us documenting &quot;Add this to your LD_PRELOAD or /etc/ld.preload  
<br>
and OMPI goes faster&quot;.
<br>
<p><span class="quotelev1">&gt;   As you can tell, I am VERY leery of these sort of tricks for a  
</span><br>
<span class="quotelev1">&gt; production grade
</span><br>
<span class="quotelev1">&gt; bit of code.  If it is easy to decide at run-time if to use these  
</span><br>
<span class="quotelev1">&gt; tricks (w/o a performance
</span><br>
<span class="quotelev1">&gt; penalty), this is a different question.
</span><br>
<p>Some of these will be very difficult to turn off at runtime (the  
<br>
LD_PRELOAD probably being the exception - you can at least turn that  
<br>
off any time before the application starts running).  However, I  
<br>
don't think this is a problem because the defaults are going to be so  
<br>
pessimistic that we shouldn't get in a situation where the user is  
<br>
going to have to turn them off.  I'm thinking big, annoying warnings  
<br>
in the installation document about turning the less-safe ones on.
<br>
<p>Brian
<br>
<p><p><span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: August 12, 2005 7:47:45 PM MDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [O-MPI devel] Memory manager changes
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For those not on the telecon Tuesday, we finally broke down and
</span><br>
<span class="quotelev2">&gt;&gt; decided we needed to do all the system nastiness to intercept free()
</span><br>
<span class="quotelev2">&gt;&gt; and munmap() and the like for high speed interconnects so that we can
</span><br>
<span class="quotelev2">&gt;&gt; do pinned page caching and not take the pinning performance hit on
</span><br>
<span class="quotelev2">&gt;&gt; applications like NetPIPE (and, to be fair, many user applications).
</span><br>
<span class="quotelev2">&gt;&gt; Unlike LAM, however, we're going to try to make this not be the
</span><br>
<span class="quotelev2">&gt;&gt; center of all pain and suffering ;).  While we'll support the
</span><br>
<span class="quotelev2">&gt;&gt; ptmalloc2 trick that LAM and MPICH-gm use, it will not be on by
</span><br>
<span class="quotelev2">&gt;&gt; default and we're trying to find better alternatives.  Below are your
</span><br>
<span class="quotelev2">&gt;&gt; current choices for intercepting memory releases back to the
</span><br>
<span class="quotelev2">&gt;&gt; operating system.  The default is malloc_hooks on platforms that
</span><br>
<span class="quotelev2">&gt;&gt; support it when threads aren't enabled.  Otherwise the current
</span><br>
<span class="quotelev2">&gt;&gt; default is &quot;none&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In all cases, in addition to dealing with free() and realloc(), we
</span><br>
<span class="quotelev2">&gt;&gt; provide intercepts for munmap() to catch the user doing his own
</span><br>
<span class="quotelev2">&gt;&gt; memory management.  We may also want to intercept SysV shared memory
</span><br>
<span class="quotelev2">&gt;&gt; functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can choose exactly which &quot;memory manager&quot; to use with the --with-
</span><br>
<span class="quotelev2">&gt;&gt; memory-manager=TYPE option to configure, where TYPE is one of
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ptmalloc2&quot;, &quot;malloc_hooks&quot;, &quot;darwin7&quot;, or &quot;ldpreload&quot;.  Of course,
</span><br>
<span class="quotelev2">&gt;&gt; you can also use --without-memory-manager or --with-memory-
</span><br>
<span class="quotelev2">&gt;&gt; manager=none to completely disable the things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * PTMALLOC2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    + Very fast implementation of the full malloc/free suite.
</span><br>
<span class="quotelev2">&gt;&gt;      Directly used by glibc as their memory manager.
</span><br>
<span class="quotelev2">&gt;&gt;    + Works properly in threaded environment
</span><br>
<span class="quotelev2">&gt;&gt;    + Only call unpin callbacks when giving memory back to the
</span><br>
<span class="quotelev2">&gt;&gt;      OS (ie, when sbrk() or munmap() are called)
</span><br>
<span class="quotelev2">&gt;&gt;    - Does not work properly in some situations (abacus linker
</span><br>
<span class="quotelev2">&gt;&gt;      tricks, for example) that appear to be within the
</span><br>
<span class="quotelev2">&gt;&gt;      spirit of using the MPI library
</span><br>
<span class="quotelev2">&gt;&gt;    - Does not work on many platforms (everywhere but linux, really)
</span><br>
<span class="quotelev2">&gt;&gt;    - Feels massively icky
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * MALLOC_HOOKS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    + Use the hooks proviced by ptmalloc2 (and therefore glibc)
</span><br>
<span class="quotelev2">&gt;&gt;      to get callbacks when free(), realloc(), etc are called
</span><br>
<span class="quotelev2">&gt;&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev2">&gt;&gt;      ptmalloc2
</span><br>
<span class="quotelev2">&gt;&gt;    - Does not support threads (disables itself if either
</span><br>
<span class="quotelev2">&gt;&gt;      progress or mpi threads are enabled)
</span><br>
<span class="quotelev2">&gt;&gt;    - Have to call unpin callbacks when memory is free()d or
</span><br>
<span class="quotelev2">&gt;&gt;      realloc()ed, not when giving back to OS
</span><br>
<span class="quotelev2">&gt;&gt;    - Very low performance impact (1-2%) on calling free() when
</span><br>
<span class="quotelev2">&gt;&gt;      there are no mpools registering callbacks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * LDPRELOAD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    + Thread safe
</span><br>
<span class="quotelev2">&gt;&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev2">&gt;&gt;      ptmalloc2
</span><br>
<span class="quotelev2">&gt;&gt;    + Should work on every platform that supports LD Preload and
</span><br>
<span class="quotelev2">&gt;&gt;      dlsym()
</span><br>
<span class="quotelev2">&gt;&gt;    - Requires doing ldpreload tricks
</span><br>
<span class="quotelev2">&gt;&gt;    - On some platforms, have to call unpin callbacks when
</span><br>
<span class="quotelev2">&gt;&gt;      memory is free()d or realloc()ed, not when giving back
</span><br>
<span class="quotelev2">&gt;&gt;      to the OS
</span><br>
<span class="quotelev2">&gt;&gt;    - Did I mention, it requires doing ldpreload?
</span><br>
<span class="quotelev2">&gt;&gt;    + If LDPRELOAD doesn't succeed, opal can properly determine
</span><br>
<span class="quotelev2">&gt;&gt;      this and will just say free() interception is unavailable
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * DARWIN7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    + Thread safe
</span><br>
<span class="quotelev2">&gt;&gt;    - Requires some nasty linker tricks to make work.  User
</span><br>
<span class="quotelev2">&gt;&gt;      application must be linked with mpicc or a long list
</span><br>
<span class="quotelev2">&gt;&gt;      of special flags
</span><br>
<span class="quotelev2">&gt;&gt;    + If application is not linked with the special sauce,
</span><br>
<span class="quotelev2">&gt;&gt;      opal should be able to properly determine this and just
</span><br>
<span class="quotelev2">&gt;&gt;      say free() interception is unavailable.
</span><br>
<span class="quotelev2">&gt;&gt;    - Total hack of linker tricks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LD Preload is not yet implemented, but should be by the end of the
</span><br>
<span class="quotelev2">&gt;&gt; weekend.  The initial version will most likely only support making
</span><br>
<span class="quotelev2">&gt;&gt; callbacks every time free() / realloc() is called, rather than every
</span><br>
<span class="quotelev2">&gt;&gt; time memory is given back to the OS.  Not optimal, but better than
</span><br>
<span class="quotelev2">&gt;&gt; nothing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to talk with some Darwin developers about better ways to do
</span><br>
<span class="quotelev2">&gt;&gt; things on Darwin, but probably won't have any results on that front
</span><br>
<span class="quotelev2">&gt;&gt; until sometime middle of next week.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Reply:</strong> <a href="0145.php">Rich L. Graham: "Re:  Fwd:  Memory manager changes"</a>
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
