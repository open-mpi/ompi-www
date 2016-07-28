<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 28 14:08:57 2005" -->
<!-- isoreceived="20051028190857" -->
<!-- sent="Fri, 28 Oct 2005 15:08:46 -0400" -->
<!-- isosent="20051028190846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Tests and Bugs (RC4):" -->
<!-- id="2d4c74dbf950a112fff36a40955fde09_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.szbexresies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-28 14:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0245.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0245.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2005, at 1:30 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; I've been running a number of benchmarks &amp; tests with OpenMPI 1.0rc4.  
</span><br>
<span class="quotelev1">&gt; I've run into a few issues that I believe are related to OpenMPI; if 
</span><br>
<span class="quotelev1">&gt; they aren't, I'd appreciate the education. :)
</span><br>
<p>No, they're unfortunately probably bugs.  I think we've fixed a bunch 
<br>
of them, but I'm sure that some still remain.  For example, we still 
<br>
have some issue left that HPL will not complete if you use the internal 
<br>
datatype support (Tim and George are still analyzing this).  If you 
<br>
tell HPL to turn of datatypes, runs should complete.
<br>
<p><span class="quotelev1">&gt; The attached tarball does not have the MPICH variant results (the 
</span><br>
<span class="quotelev1">&gt; tarball is 87 kb as it is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run the same tests with MVAPICH, MPICH-GM, and MPICH-MX with no 
</span><br>
<span class="quotelev1">&gt; problems.  The benchmarks were built from source rpm's (that I 
</span><br>
<span class="quotelev1">&gt; maintain), so I can say the build procedure for the benchmarks is 
</span><br>
<span class="quotelev1">&gt; essentially identical from one MPI to another.
</span><br>
<p>Excellent.  Many thanks for all your diligence here -- this is 
<br>
extremely helpful to us!
<br>
<p><span class="quotelev1">&gt; A short summary:
</span><br>
<span class="quotelev1">&gt; [snipped]
</span><br>
<p><span class="quotelev1">&gt; Quick summary of results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC Challenge:
</span><br>
<span class="quotelev1">&gt; * Never completed an entire run on any interconnect
</span><br>
<span class="quotelev1">&gt; 	- MVAPI came close; crashed after the HPL section.
</span><br>
<span class="quotelev1">&gt; 		-Error messages:
</span><br>
<span class="quotelev1">&gt; 		[n60:21912] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; 		[n60:21912] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; 		[n60:21912] *** MPI_ERR_OP: invalid reduce operation
</span><br>
<span class="quotelev1">&gt; 	- GM wedges itself in the HPL section
</span><br>
<span class="quotelev1">&gt; 	- MX crashes during the PTRANS test (the first test performed)
</span><br>
<span class="quotelev1">&gt; (See earlier thread on this list about OpenMPI wedging itself; I did 
</span><br>
<span class="quotelev1">&gt; apply that workaround).
</span><br>
<p>A bunch of fixes have been committed post-rc4 on the 1.0 branch that 
<br>
may help with this.  Two notes:
<br>
<p>1. I'm concerned about the MPI_Reduce error -- that one shouldn't be 
<br>
happening at all.  We have table lookups for the MPI_Op/MPI_Datatype 
<br>
combinations that are supposed to work; the fact that you're getting 
<br>
this error means that HPCC is using a combination that falls outside 
<br>
the pairs that are defined in the MPI standard.  Sigh.  But it's HPCC, 
<br>
so we should support it ;-).
<br>
<p>I just committed a fix to both the trunk and v1.0 branch that gives a 
<br>
bit more helpful error message when this happens -- it tells what MPI 
<br>
datatype (if it's intrinsic or named) and what MPI_Op were used.  
<br>
Brian, one of the OMPI developers, thinks that he's seen something 
<br>
similar from back in our LAM days -- he has a dim recollection that it 
<br>
might be in the Random test.  Can you grab either the latest v1.0 SVN 
<br>
or the v1.0 snapshot and give it a whirl?
<br>
<p>(I just initiated the creation of new snapshots rather than wait until 
<br>
midnight tonight -- should be up on the web site in ~30 minutes -- look 
<br>
for r7924 at <a href="http://www.open-mpi.org/nightly/v1.0/">http://www.open-mpi.org/nightly/v1.0/</a> )
<br>
<p>2. Some of the fixes that we committed were deep within the voodoo of 
<br>
what could loosely be called the &quot;main progression engine&quot; (i.e., the 
<br>
ob1 and teg PML components).  These bugs could well have caused 
<br>
problems across the board (i.e., regardless of interconnect).  I still 
<br>
don't think we have all the kinks worked out yet, but if you've got an 
<br>
automated testing procedure, if you could kick it off with the newest 
<br>
stuff, we'd appreciate knowing if you get further, etc.
<br>
<p><span class="quotelev1">&gt; HPL:
</span><br>
<span class="quotelev1">&gt; 	- MX gives an error:  MX: assertion: &lt;&lt;not yet implemented&gt;&gt;  failed 
</span><br>
<span class="quotelev1">&gt; at line 281, file ../mx__shmem.c
</span><br>
<p>Wow -- that's neat.  Passing this one on to George, who did our MX 
<br>
support...
<br>
<p><span class="quotelev1">&gt; IMB:
</span><br>
<span class="quotelev1">&gt; * Only completes with one interconnect:
</span><br>
<span class="quotelev1">&gt; Presta:
</span><br>
<span class="quotelev1">&gt; * Completes with varying degrees of success
</span><br>
<p>These are quite symptomatic of the errors that we had in the 
<br>
progression engine. It's amazing how tiny logic errors can hose an 
<br>
entire MPI implementation ;-).  (read: these were not serious errors, 
<br>
just run-of-the-mill typos/mistakes, but unfortunately are within the 
<br>
central innards of the whole implementation, making it look like the 
<br>
entire implementation was wonky).
<br>
<p>Hopefully now you'll be able to get a bit further in the tests...?
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0244.php">Jeff Squyres: "Re: [O-MPI users] OpenMPI hang issue"</a>
<li><strong>Previous message:</strong> <a href="0242.php">Brian Barrett: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>In reply to:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0245.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0245.php">Troy Telford: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Reply:</strong> <a href="0267.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
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
