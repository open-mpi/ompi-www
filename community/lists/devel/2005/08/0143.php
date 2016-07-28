<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 21:47:25 2005" -->
<!-- isoreceived="20050813024725" -->
<!-- sent="Fri, 12 Aug 2005 20:43:08 -0600" -->
<!-- isosent="20050813024308" -->
<!-- name="Rich L. Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Fwd:  Memory manager changes" -->
<!-- id="0a3647b0bd77b3ce73e5acfa0a8f2906_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-08-12 21:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Brian Barrett: "Memory manager changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Reply:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sounds like I got off the call a bit too early ;-)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Can we choose to use  standard platform  libraries, or are we 
<br>
pinning
<br>
ourselves into a corner ?  I.e., is this optional ?
<br>
&nbsp;&nbsp;&nbsp;What sort of problems are we getting into playing with pre-load 
<br>
options ?  I would
<br>
be VERY careful here, and do plenty of testing, especially with c++ 
<br>
codes, before
<br>
you decide to do this.  We used to use some of these tricks in LA-MPI, 
<br>
but backed
<br>
off because of loader ordering issues.
<br>
&nbsp;&nbsp;&nbsp;As you can tell, I am VERY leery of these sort of tricks for a 
<br>
production grade
<br>
bit of code.  If it is easy to decide at run-time if to use these 
<br>
tricks (w/o a performance
<br>
penalty), this is a different question.
<br>
<p>Rich
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: August 12, 2005 7:47:45 PM MDT
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [O-MPI devel] Memory manager changes
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those not on the telecon Tuesday, we finally broke down and
</span><br>
<span class="quotelev1">&gt; decided we needed to do all the system nastiness to intercept free()
</span><br>
<span class="quotelev1">&gt; and munmap() and the like for high speed interconnects so that we can
</span><br>
<span class="quotelev1">&gt; do pinned page caching and not take the pinning performance hit on
</span><br>
<span class="quotelev1">&gt; applications like NetPIPE (and, to be fair, many user applications).
</span><br>
<span class="quotelev1">&gt; Unlike LAM, however, we're going to try to make this not be the
</span><br>
<span class="quotelev1">&gt; center of all pain and suffering ;).  While we'll support the
</span><br>
<span class="quotelev1">&gt; ptmalloc2 trick that LAM and MPICH-gm use, it will not be on by
</span><br>
<span class="quotelev1">&gt; default and we're trying to find better alternatives.  Below are your
</span><br>
<span class="quotelev1">&gt; current choices for intercepting memory releases back to the
</span><br>
<span class="quotelev1">&gt; operating system.  The default is malloc_hooks on platforms that
</span><br>
<span class="quotelev1">&gt; support it when threads aren't enabled.  Otherwise the current
</span><br>
<span class="quotelev1">&gt; default is &quot;none&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In all cases, in addition to dealing with free() and realloc(), we
</span><br>
<span class="quotelev1">&gt; provide intercepts for munmap() to catch the user doing his own
</span><br>
<span class="quotelev1">&gt; memory management.  We may also want to intercept SysV shared memory
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can choose exactly which &quot;memory manager&quot; to use with the --with-
</span><br>
<span class="quotelev1">&gt; memory-manager=TYPE option to configure, where TYPE is one of
</span><br>
<span class="quotelev1">&gt; &quot;ptmalloc2&quot;, &quot;malloc_hooks&quot;, &quot;darwin7&quot;, or &quot;ldpreload&quot;.  Of course,
</span><br>
<span class="quotelev1">&gt; you can also use --without-memory-manager or --with-memory-
</span><br>
<span class="quotelev1">&gt; manager=none to completely disable the things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * PTMALLOC2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    + Very fast implementation of the full malloc/free suite.
</span><br>
<span class="quotelev1">&gt;      Directly used by glibc as their memory manager.
</span><br>
<span class="quotelev1">&gt;    + Works properly in threaded environment
</span><br>
<span class="quotelev1">&gt;    + Only call unpin callbacks when giving memory back to the
</span><br>
<span class="quotelev1">&gt;      OS (ie, when sbrk() or munmap() are called)
</span><br>
<span class="quotelev1">&gt;    - Does not work properly in some situations (abacus linker
</span><br>
<span class="quotelev1">&gt;      tricks, for example) that appear to be within the
</span><br>
<span class="quotelev1">&gt;      spirit of using the MPI library
</span><br>
<span class="quotelev1">&gt;    - Does not work on many platforms (everywhere but linux, really)
</span><br>
<span class="quotelev1">&gt;    - Feels massively icky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * MALLOC_HOOKS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    + Use the hooks proviced by ptmalloc2 (and therefore glibc)
</span><br>
<span class="quotelev1">&gt;      to get callbacks when free(), realloc(), etc are called
</span><br>
<span class="quotelev1">&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev1">&gt;      ptmalloc2
</span><br>
<span class="quotelev1">&gt;    - Does not support threads (disables itself if either
</span><br>
<span class="quotelev1">&gt;      progress or mpi threads are enabled)
</span><br>
<span class="quotelev1">&gt;    - Have to call unpin callbacks when memory is free()d or
</span><br>
<span class="quotelev1">&gt;      realloc()ed, not when giving back to OS
</span><br>
<span class="quotelev1">&gt;    - Very low performance impact (1-2%) on calling free() when
</span><br>
<span class="quotelev1">&gt;      there are no mpools registering callbacks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * LDPRELOAD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    + Thread safe
</span><br>
<span class="quotelev1">&gt;    + No &quot;corner cases&quot; that cause unexpected behavior like with
</span><br>
<span class="quotelev1">&gt;      ptmalloc2
</span><br>
<span class="quotelev1">&gt;    + Should work on every platform that supports LD Preload and
</span><br>
<span class="quotelev1">&gt;      dlsym()
</span><br>
<span class="quotelev1">&gt;    - Requires doing ldpreload tricks
</span><br>
<span class="quotelev1">&gt;    - On some platforms, have to call unpin callbacks when
</span><br>
<span class="quotelev1">&gt;      memory is free()d or realloc()ed, not when giving back
</span><br>
<span class="quotelev1">&gt;      to the OS
</span><br>
<span class="quotelev1">&gt;    - Did I mention, it requires doing ldpreload?
</span><br>
<span class="quotelev1">&gt;    + If LDPRELOAD doesn't succeed, opal can properly determine
</span><br>
<span class="quotelev1">&gt;      this and will just say free() interception is unavailable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * DARWIN7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    + Thread safe
</span><br>
<span class="quotelev1">&gt;    - Requires some nasty linker tricks to make work.  User
</span><br>
<span class="quotelev1">&gt;      application must be linked with mpicc or a long list
</span><br>
<span class="quotelev1">&gt;      of special flags
</span><br>
<span class="quotelev1">&gt;    + If application is not linked with the special sauce,
</span><br>
<span class="quotelev1">&gt;      opal should be able to properly determine this and just
</span><br>
<span class="quotelev1">&gt;      say free() interception is unavailable.
</span><br>
<span class="quotelev1">&gt;    - Total hack of linker tricks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD Preload is not yet implemented, but should be by the end of the
</span><br>
<span class="quotelev1">&gt; weekend.  The initial version will most likely only support making
</span><br>
<span class="quotelev1">&gt; callbacks every time free() / realloc() is called, rather than every
</span><br>
<span class="quotelev1">&gt; time memory is given back to the OS.  Not optimal, but better than
</span><br>
<span class="quotelev1">&gt; nothing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to talk with some Darwin developers about better ways to do
</span><br>
<span class="quotelev1">&gt; things on Darwin, but probably won't have any results on that front
</span><br>
<span class="quotelev1">&gt; until sometime middle of next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<p><p>
<p><p><hr>
<ul>
<li>text/enriched attachment: <a href="../../att-0143/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0142.php">Brian Barrett: "Memory manager changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
<li><strong>Reply:</strong> <a href="0144.php">Brian Barrett: "Re:  Fwd:  Memory manager changes"</a>
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
