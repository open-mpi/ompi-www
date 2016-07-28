<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 06:10:20 2005" -->
<!-- isoreceived="20051123111020" -->
<!-- sent="Wed, 23 Nov 2005 06:10:13 -0500" -->
<!-- isosent="20051123111013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun --prefix" -->
<!-- id="5ca7bd70c117adda4a18991c97fbf1f3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0511221104401.23144_at_schwinn.mcs.anl.gov" -->
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
<strong>Date:</strong> 2005-11-23 06:10:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 22, 2005, at 12:20 PM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt; This is not a bug just wonder if this can be improved.  I have been
</span><br>
<span class="quotelev1">&gt; running openmpi linked program with command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-install-dir&gt;/bin/mpirun --prefix &lt;openmpi-install-dir&gt; \
</span><br>
<span class="quotelev1">&gt;                                  --host A  -np N a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My understanding is that --prefix allows extra search path in addition 
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH, correct me if I am wrong.
</span><br>
<p>Sort of.  It actually uses an absolute pathname to launch various 
<br>
executables (as opposed to launching executables with relative 
<br>
filenames and letting the $PATH figure it out).
<br>
<p><span class="quotelev1">&gt; Assuming that openmpi's install directory structure is fixed, would it 
</span><br>
<span class="quotelev1">&gt; possible for
</span><br>
<span class="quotelev1">&gt; mpirun to search &lt;openmpi-install-dir&gt; automatically for libmpi.so &amp;
</span><br>
<span class="quotelev1">&gt; friends so to avoid the redundant --prefix &lt;openmpi-install-dir&gt; to
</span><br>
<span class="quotelev1">&gt; mpirun ?
</span><br>
<p>Yes and no.
<br>
<p>For the launched processes, yes, we set PATH and LD_LIBRARY_PATH so 
<br>
that you don't have to in your shell startup files.
<br>
<p>But for mpirun itself, no we cannot, because of unix linker/shell 
<br>
semantics.  When you type &quot;mpirun&quot;, mpirun itself won't launch until 
<br>
liborte.so can be found (one of our support libraries).  So if the unix 
<br>
linker can't find liborte.so when you try to launch mpirun, there's 
<br>
nothing we can do about it -- mpirun isn't even launched, so there's no 
<br>
code that we can have to set LD_LIBRARY_PATH.  That being said, the 
<br>
rpath in mpirun should be set such that liborte.so should be found 
<br>
automatically (i.e., without you having to set LD_LIBRARY_PATH).  
<br>
Hence, the unix linker should be able to find liborte.so regardless of 
<br>
what you have in LD_LIBRARY_PATH.
<br>
<p>The --prefix option is to set LD_LIBRARY_PATH for the started 
<br>
executables because, at least at the moment, we are not setting the 
<br>
rpath in user-compiled MPI executables via the wrapper compilers.  This 
<br>
is on the to-do list, but it didn't happen for 1.0.
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
<li><strong>Next message:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0384.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0387.php">Rainer Keller: "Re: [O-MPI users] mpirun --prefix"</a>
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
