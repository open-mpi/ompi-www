<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jan 28 15:29:11 2006" -->
<!-- isoreceived="20060128202911" -->
<!-- sent="Sat, 28 Jan 2006 15:29:05 -0500" -->
<!-- isosent="20060128202905" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Trouble combining OpenMPI and OpenMP" -->
<!-- id="10BDE040-D925-43B3-9DD2-0E52D3AB559A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="tfacdigzuf.fsf_at_iris02.slac.stanford.edu" -->
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
<strong>Date:</strong> 2006-01-28 15:29:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>In reply to:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0547.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2006, at 9:38 PM, Glenn Morris wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From the stack trace, it looks like you're in the middle of a
</span><br>
<span class="quotelev2">&gt;&gt; complex deallocation of some C++ objects, so I really can't tell
</span><br>
<span class="quotelev2">&gt;&gt; (i.e., not in an MPI function at all).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, not intentionally! I'm just calling &quot;deallocate&quot; in a purely
</span><br>
<span class="quotelev1">&gt; Fortran program. No C++ around anywhere.
</span><br>
<p>It looks like the memory manager doesn't like that particular free  
<br>
too much.  I can't tell what exactly is going on from the call stack  
<br>
you provided earlier.  Can you rebuild Open MPI with debugging  
<br>
symbols (just setting CFLAGS to -g during configure should do it),  
<br>
rebuild, and get a full call stack with line numbers?
<br>
<p><span class="quotelev2">&gt;&gt; - configure your Open MPI --with-memory-manager=none and see if the
</span><br>
<span class="quotelev2">&gt;&gt; problem goes away. This tells Open MPI to not intercept memory
</span><br>
<span class="quotelev2">&gt;&gt; manager functions, so if you still have the problem, it's more
</span><br>
<span class="quotelev2">&gt;&gt; likely to be a problem in your application than in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I compile with --with-memory-manager=none the program runs to
</span><br>
<span class="quotelev1">&gt; completion with no problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - run your application through a memory-checking debugger (such as
</span><br>
<span class="quotelev2">&gt;&gt; valgrind) and see if it identifies any memory faults within your
</span><br>
<span class="quotelev2">&gt;&gt; code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried, but I'm not convinced valgrind understands Fortran 90. I
</span><br>
<span class="quotelev1">&gt; certainly don't understand valgrind... It spat out a lot of
</span><br>
<span class="quotelev1">&gt; information, but I don't think any of it was especially relevant to
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<p>The output might be useful to us, if we could take a look (at least,  
<br>
on the OMPI build that fails).  Again, doing this with a build of  
<br>
Open MPI that contains debugging symbols would greatly increase the  
<br>
usefulness to us.
<br>
<p>Thanks,
<br>
<p>Brian
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
<li><strong>Next message:</strong> <a href="0538.php">Brian Granger: "[O-MPI users] Configuring process startup on OS X"</a>
<li><strong>Previous message:</strong> <a href="0536.php">Jeff Squyres: "Re: [O-MPI users] a familiar problem?"</a>
<li><strong>In reply to:</strong> <a href="0528.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0547.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>Reply:</strong> <a href="0547.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
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
