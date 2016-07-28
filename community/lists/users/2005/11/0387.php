<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 06:42:44 2005" -->
<!-- isoreceived="20051123114244" -->
<!-- sent="Wed, 23 Nov 2005 12:40:48 +0100" -->
<!-- isosent="20051123114048" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun --prefix" -->
<!-- id="200511231240.49181.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 06:40:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Anthony,
<br>
On Tuesday 22 November 2005 18:20, Anthony Chan wrote:
<br>
<span class="quotelev1">&gt; This is not a bug just wonder if this can be improved.  I have been
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
<span class="quotelev1">&gt; My understanding is that --prefix allows extra search path in addition to
</span><br>
<span class="quotelev1">&gt; PATH and LD_LIBRARY_PATH, correct me if I am wrong.  Assuming that
</span><br>
<span class="quotelev1">&gt; openmpi's install directory structure is fixed, would it possible for
</span><br>
<span class="quotelev1">&gt; mpirun to search &lt;openmpi-install-dir&gt; automatically for libmpi.so &amp;
</span><br>
<span class="quotelev1">&gt; friends so to avoid the redundant --prefix &lt;openmpi-install-dir&gt; to
</span><br>
<span class="quotelev1">&gt; mpirun ?
</span><br>
The problem is, that You need the LD_LIBRARY_PATH set to the 
<br>
ompi/orte-libraries installed on Your system
<br>
However, with rsh-based startup-method, those paths may not be set on the 
<br>
actual node.
<br>
Therefore, one solution is to copy those flags responsible with -x PATH and -x 
<br>
LD_LIBRARY_PATH, or shorter to use --prefix so that the rsh-code sets these 
<br>
env.-flags itself.
<br>
<p>However, You may need to play with the --mca rsh_assume_same_shell 0 flag to 
<br>
the mpirun startup  to figure out the way these flags should be set (bash/sh, 
<br>
tcsh/csh-way)... Otherwise, it assumes the same shell as on the machine You 
<br>
run the mpirun/mpiexec.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0388.php">Rainer Keller: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>Previous message:</strong> <a href="0386.php">Max Manfrin: "[O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0383.php">Anthony Chan: "[O-MPI users] mpirun --prefix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0477.php">Jeff Squyres: "Re: [O-MPI users] mpirun --prefix"</a>
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
