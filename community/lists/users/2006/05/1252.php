<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 17 22:15:47 2006" -->
<!-- isoreceived="20060518021547" -->
<!-- sent="Wed, 17 May 2006 22:15:40 -0400" -->
<!-- isosent="20060518021540" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran flags using Absoft compilers" -->
<!-- id="6AE6BCD8-8E31-44A7-9A87-2218DEBEB4AE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="89DCB91F-A73C-4E13-9716-35BD3278D92F_at_euclid.colorado.edu" -->
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
<strong>Date:</strong> 2006-05-17 22:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1182.php">Jeffrey Fox: "[OMPI users] fortran flags using Absoft compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 1, 2006, at 7:16 PM, Jeffrey Fox wrote:
<br>
<p><span class="quotelev1">&gt; I get openmpi-1.0.2 to compile on a (small) G5 cluster. The C and C+ 
</span><br>
<span class="quotelev1">&gt; + compilers work fine so far, but the mpif77 and mpif90  scripts   
</span><br>
<span class="quotelev1">&gt; send the wrong flags to the f77 and f90 compilers. I've attached  
</span><br>
<span class="quotelev1">&gt; the config.log , make.out,  the error
</span><br>
<span class="quotelev1">&gt; messages, and the environment variables.
</span><br>
<span class="quotelev1">&gt; for f77 I get :Error: bad option:  -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; and for f90 :
</span><br>
<span class="quotelev1">&gt; cf90-78 f90fe: ERROR in command line
</span><br>
<span class="quotelev1">&gt;   -N option has an illegal argument &quot;l,--export-dynamic&quot;.
</span><br>
<span class="quotelev1">&gt; f90fe-912: 1 Errors found in command line.  Compilation aborted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I feel I am soooo close. :-)
</span><br>
Sorry about the delay in replying -- for some reason, this message  
<br>
slipped through the cracks.  Anyway, the problem is that older  
<br>
versions of the Absoft compilers didn't speak the same language as  
<br>
other compilers in the OS X (and general Unix) world.  In particular,  
<br>
they didn't know that -Wl, meant the rest of the option should be  
<br>
passed to the linker as an argument when the compiler invoked the  
<br>
linker.  Absoft has since updated their compilers to fix the issue,  
<br>
so upgrading the compilers will fix the issue.
<br>
<p>The other option is to just not do anything that requires special  
<br>
flags to the linker.  This means disabling our dynamically loaded  
<br>
components (and having them compiled into libmpi.so) and turing off  
<br>
some code we have for high-performance networks (Myrinet and  
<br>
InfiniBand, in particular).  Adding the configure options:
<br>
<p>&nbsp;&nbsp;&nbsp;--without-memory-manager --disable-dlopen
<br>
<p>Should give you a build that will avoid passing arguments that will  
<br>
annoy the Absoft compiler.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="1253.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Compiling with NAG f95"</a>
<li><strong>Previous message:</strong> <a href="1251.php">Brian Barrett: "Re: [OMPI users] Open MPI and OpenIB"</a>
<li><strong>In reply to:</strong> <a href="1182.php">Jeffrey Fox: "[OMPI users] fortran flags using Absoft compilers"</a>
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
