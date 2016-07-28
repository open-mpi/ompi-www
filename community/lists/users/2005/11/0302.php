<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 07:56:37 2005" -->
<!-- isoreceived="20051110125637" -->
<!-- sent="Thu, 10 Nov 2005 07:56:29 -0500" -->
<!-- isosent="20051110125629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="0434b4f5f15f05b28930bea516eb6846_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="437314FF.9020800_at_csse.monash.edu.au" -->
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
<strong>Date:</strong> 2005-11-10 07:56:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Clement Chu: "[O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0301.php">Clement Chu: "[O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've actually made quite a few bug fixes since RC4 (RC5 is not  
<br>
available yet).  Would you mind trying with a nightly snapshot tarball?
<br>
<p>(there were some SVN commits last night after the nightly snapshot was  
<br>
made; I've just initiated another snapshot build -- r8085 should be on  
<br>
the web site within an hour or so)
<br>
<p><p>On Nov 10, 2005, at 4:38 AM, Clement Chu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I got an error when tried the mpirun on mpi program.  The following  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; the error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ mpicc -g -o test main.c
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ mpirun -np 2 test
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev1">&gt; signal 11.
</span><br>
<span class="quotelev1">&gt; [kfc:28466] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev1">&gt; [kfc:28466] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [kfc:28466] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [kfc:28466] The daemon received a signal 11.
</span><br>
<span class="quotelev1">&gt; 1 additional process aborted (not shown)
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.0rc4 and running on Linux Redhat Fedora Core 4.
</span><br>
<span class="quotelev1">&gt; The kernal is 2.6.12-1.1456_FC4.  My building procedure is as below:
</span><br>
<span class="quotelev1">&gt; 1.  ./configure --prefix=/home/clement/openmpi --with-devel-headers
</span><br>
<span class="quotelev1">&gt; 2.  make all install
</span><br>
<span class="quotelev1">&gt; 3.  login root.  add openmpi's path and lib in /etc/bashrc
</span><br>
<span class="quotelev1">&gt; 4.  see the $PATH and $LD_LIBRARY_PATH as below
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ echo $PATH
</span><br>
<span class="quotelev1">&gt; /usr/java/jdk1.5.0_05/bin:/home/clement/openmpi/bin:/usr/java/ 
</span><br>
<span class="quotelev1">&gt; jdk1.5.0_05/bin:/home/clement/mpich-1.2.7/bin:/usr/kerberos/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/clement/bin
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /home/clement/openmpi/lib
</span><br>
<span class="quotelev1">&gt; [clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5.  go to mpi program's directory
</span><br>
<span class="quotelev1">&gt; 6.  mpicc -g -o test main.c
</span><br>
<span class="quotelev1">&gt; 7.  mpirun -np 2 test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea of this problem.  Many thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Clement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Clement Kam Man Chu
</span><br>
<span class="quotelev1">&gt; Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Computer Science &amp; Software Engineering
</span><br>
<span class="quotelev1">&gt; Monash University, Caulfield Campus
</span><br>
<span class="quotelev1">&gt; Ph: 61 3 9903 1964
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0303.php">Jeff Squyres: "Re: [O-MPI users] mpif90 error: undefined reference to `mpi_reduce0dr8`"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Clement Chu: "[O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>In reply to:</strong> <a href="0301.php">Clement Chu: "[O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0307.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
