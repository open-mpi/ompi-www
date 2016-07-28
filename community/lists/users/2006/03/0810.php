<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 21:45:04 2006" -->
<!-- isoreceived="20060310024504" -->
<!-- sent="Thu, 9 Mar 2006 21:44:58 -0500" -->
<!-- isosent="20060310024458" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90" -->
<!-- id="FA0A8B01-1CA8-4949-8BF4-80B054D28459_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060310022855.GA5945_at_greglaptop.internal.keyresearch.com" -->
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
<strong>Date:</strong> 2006-03-09 21:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 9, 2006, at 9:28 PM, Greg Lindahl wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Mar 09, 2006 at 09:13:46PM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I have this fixed on the trunk.  It looks like PGI tried to
</span><br>
<span class="quotelev2">&gt;&gt; make the 6.1 compilers support GCC inline assembly, but it doesn't
</span><br>
<span class="quotelev2">&gt;&gt; look like it's 100% correct,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... and that's no surprise. The spec in the gcc info pages doesn't
</span><br>
<span class="quotelev1">&gt; reflect reality, and with our compiler, I filed 20 bugs before we got
</span><br>
<span class="quotelev1">&gt; gmp (gnu multi-precision library, a heavy user of inline assembly) to
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doctor, it hurts when I do this...
</span><br>
<p>Yes, the inline assembly is the second least favorite part of the  
<br>
Open MPI code base for me.  And we don't even do that much  
<br>
complicated with our inline assembly (memory barriers on platforms  
<br>
that need them, spinlocks, and atomic add).  The part I found  
<br>
interesting is it's the only compiler I've run into to date where the  
<br>
C compiler handled the super-simple test properly and the C++  
<br>
compiler did not.  Oh well, it works well enough for our purposes, so  
<br>
on to more broken things.
<br>
<p>The least favorite, of course, is the games we have to play to deal  
<br>
with free() and pinned memory caching.  But that's a different story  
<br>
altogether...
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
<li><strong>Next message:</strong> <a href="0811.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>In reply to:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0749.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
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
