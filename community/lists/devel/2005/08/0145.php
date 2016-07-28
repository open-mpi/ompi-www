<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 22:43:58 2005" -->
<!-- isoreceived="20050813034358" -->
<!-- sent="Fri, 12 Aug 2005 21:39:43 -0600" -->
<!-- isosent="20050813033943" -->
<!-- name="Rich L. Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re:  Fwd:  Memory manager changes" -->
<!-- id="3f6a3bbe2a031d9152674e769fbb04ea_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D823B3B5-35F5-4173-891F-11665F63B22D_at_open-mpi.org" -->
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
<strong>From:</strong> Rich L. Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 22:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sound reasonable - I am for being able to turn on optional things
<br>
that will improve performance...
<br>
<p>Thanks,
<br>
Rich
<br>
<p>On Aug 12, 2005, at 9:14 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 12, 2005, at 9:43 PM, Rich L. Graham wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Sounds like I got off the call a bit too early ;-)
</span><br>
<span class="quotelev2">&gt;&gt;        Can we choose to use  standard platform  libraries, or are
</span><br>
<span class="quotelev2">&gt;&gt; we pinning
</span><br>
<span class="quotelev2">&gt;&gt; ourselves into a corner ?  I.e., is this optional ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - the code is all built around trying to use the standard
</span><br>
<span class="quotelev1">&gt; platform.  And yes, everything is optional.  In many cases (pretty
</span><br>
<span class="quotelev1">&gt; much everywhere but single threaded Linux), the default will be to
</span><br>
<span class="quotelev1">&gt; not do any memory manager tricks at all.  Of course, not having any
</span><br>
<span class="quotelev1">&gt; memory manager hooks lessens the performance of the BTLs since we
</span><br>
<span class="quotelev1">&gt; have to do pin/rdma pipelining, but that's the price we have to pay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   What sort of problems are we getting into playing with pre-load
</span><br>
<span class="quotelev2">&gt;&gt; options ?  I would
</span><br>
<span class="quotelev2">&gt;&gt; be VERY careful here, and do plenty of testing, especially with c++
</span><br>
<span class="quotelev2">&gt;&gt; codes, before
</span><br>
<span class="quotelev2">&gt;&gt; you decide to do this.  We used to use some of these tricks in LA-
</span><br>
<span class="quotelev2">&gt;&gt; MPI, but backed
</span><br>
<span class="quotelev2">&gt;&gt; off because of loader ordering issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed - I'm one of the ones who was very against doing it in the
</span><br>
<span class="quotelev1">&gt; first place :).  Currently, the default on everywhere but single
</span><br>
<span class="quotelev1">&gt; threaded Linux is to not have any memory manager hooks at all.  On
</span><br>
<span class="quotelev1">&gt; single threaded Linux, we use the hooks provided by glibc for doing
</span><br>
<span class="quotelev1">&gt; &quot;something&quot; before the actual free/realloc occurs.  Because these are
</span><br>
<span class="quotelev1">&gt; official, recommended ways of doing things, they should work on any
</span><br>
<span class="quotelev1">&gt; C, C++, and Fortran codes, even if they are statically linked.  I've
</span><br>
<span class="quotelev1">&gt; tested them with C++ apps, and they work as the documentation implies
</span><br>
<span class="quotelev1">&gt; they would.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think that the ldpreload tricks should ever be the default.
</span><br>
<span class="quotelev1">&gt; I'd like to provide them, because on threaded builds (where the glibc
</span><br>
<span class="quotelev1">&gt; hooks aren't available), they provide a much better solution than
</span><br>
<span class="quotelev1">&gt; using ptmalloc2.  The sysadmin/user would have to setup his
</span><br>
<span class="quotelev1">&gt; environment to load the preload library.  If the module fails to
</span><br>
<span class="quotelev1">&gt; preload, there is a facility in place for the memory code to tell the
</span><br>
<span class="quotelev1">&gt; mpools that there is no memory manager interrupt and to fall back to
</span><br>
<span class="quotelev1">&gt; the unpin after use mode.  Further, the ldpreload module (not yet
</span><br>
<span class="quotelev1">&gt; committed, but half written) can run just fine even if the app
</span><br>
<span class="quotelev1">&gt; started isn't an opal code (with little if any performance
</span><br>
<span class="quotelev1">&gt; difference).  I don't envision us ever explicitly setting the
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD in the pls components or anything like that.  Instead, I
</span><br>
<span class="quotelev1">&gt; see us documenting &quot;Add this to your LD_PRELOAD or /etc/ld.preload
</span><br>
<span class="quotelev1">&gt; and OMPI goes faster&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   As you can tell, I am VERY leery of these sort of tricks for a
</span><br>
<span class="quotelev2">&gt;&gt; production grade
</span><br>
<span class="quotelev2">&gt;&gt; bit of code.  If it is easy to decide at run-time if to use these
</span><br>
<span class="quotelev2">&gt;&gt; tricks (w/o a performance
</span><br>
<span class="quotelev2">&gt;&gt; penalty), this is a different question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of these will be very difficult to turn off at runtime (the
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD probably being the exception - you can at least turn that
</span><br>
<span class="quotelev1">&gt; off any time before the application starts running).  However, I
</span><br>
<span class="quotelev1">&gt; don't think this is a problem because the defaults are going to be so
</span><br>
<span class="quotelev1">&gt; pessimistic that we shouldn't get in a situation where the user is
</span><br>
<span class="quotelev1">&gt; going to have to turn them off.  I'm thinking big, annoying warnings
</span><br>
<span class="quotelev1">&gt; in the installation document about turning the less-safe ones on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: August 12, 2005 7:47:45 PM MDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [O-MPI devel] Memory manager changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For those not on the telecon Tuesday, we finally broke down and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decided we needed to do all the system nastiness to intercept free()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and munmap() and the like for high speed interconnects so that we can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do pinned page caching and not take the pinning performance hit on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications like NetPIPE (and, to be fair, many user applications).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unlike LAM, however, we're going to try to make this not be the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; center of all pain and suffering ;).  While we'll support the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ptmalloc2 trick that LAM and MPICH-gm use, it will not be on by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default and we're trying to find better alternatives.  Below are your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current choices for intercepting memory releases back to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operating system.  The default is malloc_hooks on platforms that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support it when threads aren't enabled.  Otherwise the current
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default is &quot;none&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In all cases, in addition to dealing with free() and realloc(), we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide intercepts for munmap() to catch the user doing his own
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory management.  We may also want to intercept SysV shared memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can choose exactly which &quot;memory manager&quot; to use with the --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory-manager=TYPE option to configure, where TYPE is one of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;ptmalloc2&quot;, &quot;malloc_hooks&quot;, &quot;darwin7&quot;, or &quot;ldpreload&quot;.  Of course,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you can also use --without-memory-manager or --with-memory-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager=none to completely disable the things.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * PTMALLOC2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Very fast implementation of the full malloc/free suite.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Directly used by glibc as their memory manager.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Works properly in threaded environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Only call unpin callbacks when giving memory back to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      OS (ie, when sbrk() or munmap() are called)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Does not work properly in some situations (abacus linker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      tricks, for example) that appear to be within the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      spirit of using the MPI library
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Does not work on many platforms (everywhere but linux, really)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Feels massively icky
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * MALLOC_HOOKS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Use the hooks proviced by ptmalloc2 (and therefore glibc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      to get callbacks when free(), realloc(), etc are called
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ptmalloc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Does not support threads (disables itself if either
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      progress or mpi threads are enabled)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Have to call unpin callbacks when memory is free()d or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      realloc()ed, not when giving back to OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Very low performance impact (1-2%) on calling free() when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      there are no mpools registering callbacks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * LDPRELOAD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Thread safe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ptmalloc2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Should work on every platform that supports LD Preload and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      dlsym()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Requires doing ldpreload tricks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - On some platforms, have to call unpin callbacks when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      memory is free()d or realloc()ed, not when giving back
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      to the OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Did I mention, it requires doing ldpreload?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + If LDPRELOAD doesn't succeed, opal can properly determine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      this and will just say free() interception is unavailable
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * DARWIN7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + Thread safe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Requires some nasty linker tricks to make work.  User
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      application must be linked with mpicc or a long list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      of special flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    + If application is not linked with the special sauce,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal should be able to properly determine this and just
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      say free() interception is unavailable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    - Total hack of linker tricks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD Preload is not yet implemented, but should be by the end of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weekend.  The initial version will most likely only support making
</span><br>
<span class="quotelev3">&gt;&gt;&gt; callbacks every time free() / realloc() is called, rather than every
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time memory is given back to the OS.  Not optimal, but better than
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nothing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm going to talk with some Darwin developers about better ways to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things on Darwin, but probably won't have any results on that front
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until sometime middle of next week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
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
