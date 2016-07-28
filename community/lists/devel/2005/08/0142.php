<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 20:47:51 2005" -->
<!-- isoreceived="20050813014751" -->
<!-- sent="Fri, 12 Aug 2005 20:47:45 -0500" -->
<!-- isosent="20050813014745" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Memory manager changes" -->
<!-- id="10C9E9AE-A4C4-429B-9E92-524E99758130_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 20:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>For those not on the telecon Tuesday, we finally broke down and  
<br>
decided we needed to do all the system nastiness to intercept free()  
<br>
and munmap() and the like for high speed interconnects so that we can  
<br>
do pinned page caching and not take the pinning performance hit on  
<br>
applications like NetPIPE (and, to be fair, many user applications).   
<br>
Unlike LAM, however, we're going to try to make this not be the  
<br>
center of all pain and suffering ;).  While we'll support the  
<br>
ptmalloc2 trick that LAM and MPICH-gm use, it will not be on by  
<br>
default and we're trying to find better alternatives.  Below are your  
<br>
current choices for intercepting memory releases back to the  
<br>
operating system.  The default is malloc_hooks on platforms that  
<br>
support it when threads aren't enabled.  Otherwise the current  
<br>
default is &quot;none&quot;.
<br>
<p>In all cases, in addition to dealing with free() and realloc(), we  
<br>
provide intercepts for munmap() to catch the user doing his own  
<br>
memory management.  We may also want to intercept SysV shared memory  
<br>
functions.
<br>
<p>You can choose exactly which &quot;memory manager&quot; to use with the --with- 
<br>
memory-manager=TYPE option to configure, where TYPE is one of  
<br>
&quot;ptmalloc2&quot;, &quot;malloc_hooks&quot;, &quot;darwin7&quot;, or &quot;ldpreload&quot;.  Of course,  
<br>
you can also use --without-memory-manager or --with-memory- 
<br>
manager=none to completely disable the things.
<br>
<p>* PTMALLOC2
<br>
<p>&nbsp;&nbsp;&nbsp;+ Very fast implementation of the full malloc/free suite.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Directly used by glibc as their memory manager.
<br>
&nbsp;&nbsp;&nbsp;+ Works properly in threaded environment
<br>
&nbsp;&nbsp;&nbsp;+ Only call unpin callbacks when giving memory back to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OS (ie, when sbrk() or munmap() are called)
<br>
&nbsp;&nbsp;&nbsp;- Does not work properly in some situations (abacus linker
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tricks, for example) that appear to be within the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spirit of using the MPI library
<br>
&nbsp;&nbsp;&nbsp;- Does not work on many platforms (everywhere but linux, really)
<br>
&nbsp;&nbsp;&nbsp;- Feels massively icky
<br>
<p>* MALLOC_HOOKS
<br>
<p>&nbsp;&nbsp;&nbsp;+ Use the hooks proviced by ptmalloc2 (and therefore glibc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to get callbacks when free(), realloc(), etc are called
<br>
&nbsp;&nbsp;&nbsp;+ No &quot;corner cases&quot; that cause unexpected behavior like with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptmalloc2
<br>
&nbsp;&nbsp;&nbsp;- Does not support threads (disables itself if either
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;progress or mpi threads are enabled)
<br>
&nbsp;&nbsp;&nbsp;- Have to call unpin callbacks when memory is free()d or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;realloc()ed, not when giving back to OS
<br>
&nbsp;&nbsp;&nbsp;- Very low performance impact (1-2%) on calling free() when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;there are no mpools registering callbacks
<br>
<p>* LDPRELOAD
<br>
<p>&nbsp;&nbsp;&nbsp;+ Thread safe
<br>
&nbsp;&nbsp;&nbsp;+ No &quot;corner cases&quot; that cause unexpected behavior like with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptmalloc2
<br>
&nbsp;&nbsp;&nbsp;+ Should work on every platform that supports LD Preload and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dlsym()
<br>
&nbsp;&nbsp;&nbsp;- Requires doing ldpreload tricks
<br>
&nbsp;&nbsp;&nbsp;- On some platforms, have to call unpin callbacks when
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory is free()d or realloc()ed, not when giving back
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;to the OS
<br>
&nbsp;&nbsp;&nbsp;- Did I mention, it requires doing ldpreload?
<br>
&nbsp;&nbsp;&nbsp;+ If LDPRELOAD doesn't succeed, opal can properly determine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this and will just say free() interception is unavailable
<br>
<p>* DARWIN7
<br>
<p>&nbsp;&nbsp;&nbsp;+ Thread safe
<br>
&nbsp;&nbsp;&nbsp;- Requires some nasty linker tricks to make work.  User
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;application must be linked with mpicc or a long list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of special flags
<br>
&nbsp;&nbsp;&nbsp;+ If application is not linked with the special sauce,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal should be able to properly determine this and just
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;say free() interception is unavailable.
<br>
&nbsp;&nbsp;&nbsp;- Total hack of linker tricks
<br>
<p>LD Preload is not yet implemented, but should be by the end of the  
<br>
weekend.  The initial version will most likely only support making  
<br>
callbacks every time free() / realloc() is called, rather than every  
<br>
time memory is given back to the OS.  Not optimal, but better than  
<br>
nothing.
<br>
<p>I'm going to talk with some Darwin developers about better ways to do  
<br>
things on Darwin, but probably won't have any results on that front  
<br>
until sometime middle of next week.
<br>
<p><p>Brian
<br>
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
<li><strong>Next message:</strong> <a href="0143.php">Rich L. Graham: "Fwd:  Memory manager changes"</a>
<li><strong>Previous message:</strong> <a href="0141.php">Jeff Squyres: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
