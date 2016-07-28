<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 22:23:16 2006" -->
<!-- isoreceived="20060209032316" -->
<!-- sent="Wed, 8 Feb 2006 22:23:10 -0500" -->
<!-- isosent="20060209032310" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Multiply-defined munmap on OSX" -->
<!-- id="CEF7FD96-802F-431B-9A16-EA029E3242DD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C00E6119.7D4%bsaphir_at_numenta.com" -->
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
<strong>Date:</strong> 2006-02-08 22:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2006, at 5:37 PM, Bill Saphir wrote:
<br>
<p><span class="quotelev1">&gt; In an attempt to limit runtime dependencies, I am using static  
</span><br>
<span class="quotelev1">&gt; libraries
</span><br>
<span class="quotelev1">&gt; where possible. Under OSX (10.4.4) I get the following error when I  
</span><br>
<span class="quotelev1">&gt; try to
</span><br>
<span class="quotelev1">&gt; link my application:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: multiple definitions of symbol _munmap
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/powerpc-apple-darwin8/4.0.1/../../../libSystem.dylib 
</span><br>
<span class="quotelev1">&gt; (munmap.So)
</span><br>
<span class="quotelev1">&gt; definition of _munmap
</span><br>
<span class="quotelev1">&gt; [path-to-mpi-libs]/libopal.a(memory_darwin_component.o) definition of
</span><br>
<span class="quotelev1">&gt; _munmap in section (__TEXT,__text)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have configured R8901 with --disable-shared and --enable-static
</span><br>
<span class="quotelev1">&gt; (I have also tried --with-memory-manager=none, with no effect).
</span><br>
<p>Can you send the output of configure (and the config.log file) from a  
<br>
build where you tried with the --with-memory-manager=none flag?  That  
<br>
should most definitely remove this issue (at the cost of slightly  
<br>
slower communication when buffer reuse is high).  I couldn't make the  
<br>
memory manager component for OS X build when I specified that flag,  
<br>
but it's possible I missed something obvious along the way.
<br>
<p><span class="quotelev1">&gt; If I understand correctly, openmpi's munmap depends on munmap being  
</span><br>
<span class="quotelev1">&gt; a weak
</span><br>
<span class="quotelev1">&gt; symbol. But according to nm -mg, munmap is not a weak symbol in
</span><br>
<span class="quotelev1">&gt; libSystem.dylib (a.k.a. libc.dylib). In fact there aren't any weak  
</span><br>
<span class="quotelev1">&gt; symbols
</span><br>
<span class="quotelev1">&gt; in this library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would seem that this is technically a problem with shared  
</span><br>
<span class="quotelev1">&gt; libraries as
</span><br>
<span class="quotelev1">&gt; well, but it would only be detected at run time because there is so  
</span><br>
<span class="quotelev1">&gt; much
</span><br>
<span class="quotelev1">&gt; indirection (empirically, there is no problem problem with dynamic
</span><br>
<span class="quotelev1">&gt; libraries, though).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on a solution to this problem?
</span><br>
<p>Darwin unfortunately doesn't support the concept of weak symbols in  
<br>
quite the same way as Linux.  Thankfully, the issue above isn't  
<br>
generally an error, but a warning.  Are you using the wrapper  
<br>
compilers to build your application?  I believe we add the correct  
<br>
linker flags to make Darwin not complain about the duplicate symbols  
<br>
and (more importantly) load the libraries in the correct order so  
<br>
that our munamp (which eventually calls Darwin's munmap) is preferred  
<br>
by the user's application.  If you are using the wrapper compilers,  
<br>
can you run &quot;mpicc -showme&quot; and send the results to me?  If you  
<br>
aren't using the wrapper compilers, try adding the following to your  
<br>
link flags:
<br>
<p>&nbsp;&nbsp;&nbsp;-Wl,-u,_munmap -Wl,-multiply_defined,suppress
<br>
<p>that should do the right magic to make the linker more happy.
<br>
<p><p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Galen Shipman: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Jean-Christophe Hugly: "Re: [O-MPI users] direct openib btl and latency"</a>
<li><strong>In reply to:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
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
