<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 09:35:23 2005" -->
<!-- isoreceived="20051110143523" -->
<!-- sent="Thu, 10 Nov 2005 09:35:13 -0500" -->
<!-- isosent="20051110143513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="6910cfa662c05f61d4414b47079e7865_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="437353B2.1010908_at_csse.monash.edu.au" -->
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
<strong>Date:</strong> 2005-11-10 09:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry -- I wasn't entirely clear:
<br>
<p>1. Are you using a 1.0 nightly tarball or a 1.1 nightly tarball?  We 
<br>
have made a bunch of fixes to the 1.1 tree (i.e., the Subversion 
<br>
trunk), but have not fully vetted them yet, so they have not yet been 
<br>
taken to the 1.0 release branch yet.  If you have not done so already, 
<br>
could you try a tarball from the trunk?  
<br>
<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>2. The error you are seeing looks like a proxy process is failing to 
<br>
start because it seg faults.  Are you getting corefiles?  If so, can 
<br>
you send the backtrace?  The corefile should be from the 
<br>
$prefix/bin/orted executable.
<br>
<p>3. Failing that, can you run with the &quot;-d&quot; switch?  It should give a 
<br>
bunch of debugging output that might be helpful.  &quot;mpirun -d -np 2 
<br>
./test&quot;, for example.
<br>
<p>4. Also please send the output of the &quot;ompi_info&quot; command.
<br>
<p><p>On Nov 10, 2005, at 9:05 AM, Clement Chu wrote:
<br>
<p><span class="quotelev1">&gt; I have tried the latest version (rc5 8053), but the error is still 
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've actually made quite a few bug fixes since RC4 (RC5 is not
</span><br>
<span class="quotelev2">&gt;&gt; available yet).  Would you mind trying with a nightly snapshot 
</span><br>
<span class="quotelev2">&gt;&gt; tarball?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (there were some SVN commits last night after the nightly snapshot was
</span><br>
<span class="quotelev2">&gt;&gt; made; I've just initiated another snapshot build -- r8085 should be on
</span><br>
<span class="quotelev2">&gt;&gt; the web site within an hour or so)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2005, at 4:38 AM, Clement Chu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I got an error when tried the mpirun on mpi program.  The following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$ mpicc -g -o test main.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$ mpirun -np 2 test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kfc:28466] ERROR: A daemon on node localhost failed to start as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kfc:28466] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kfc:28466] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [kfc:28466] The daemon received a signal 11.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using openmpi-1.0rc4 and running on Linux Redhat Fedora Core 4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The kernal is 2.6.12-1.1456_FC4.  My building procedure is as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.  ./configure --prefix=/home/clement/openmpi --with-devel-headers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.  make all install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3.  login root.  add openmpi's path and lib in /etc/bashrc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4.  see the $PATH and $LD_LIBRARY_PATH as below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$ echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/java/jdk1.5.0_05/bin:/home/clement/openmpi/bin:/usr/java/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jdk1.5.0_05/bin:/home/clement/mpich-1.2.7/bin:/usr/kerberos/bin:/usr/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/clement/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/clement/openmpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5.  go to mpi program's directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6.  mpicc -g -o test main.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7.  mpirun -np 2 test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea of this problem.  Many thanks.
</span><br>
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
<li><strong>Next message:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0309.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0310.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
