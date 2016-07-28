<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 09:07:43 2005" -->
<!-- isoreceived="20051110140743" -->
<!-- sent="Fri, 11 Nov 2005 01:05:38 +1100" -->
<!-- isosent="20051110140538" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="437353B2.1010908_at_csse.monash.edu.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0434b4f5f15f05b28930bea516eb6846_at_open-mpi.org" -->
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
<strong>From:</strong> Clement Chu (<em>clement.chu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-10 09:05:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0306.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried the latest version (rc5 8053), but the error is still here.
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;We've actually made quite a few bug fixes since RC4 (RC5 is not  
</span><br>
<span class="quotelev1">&gt;available yet).  Would you mind trying with a nightly snapshot tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(there were some SVN commits last night after the nightly snapshot was  
</span><br>
<span class="quotelev1">&gt;made; I've just initiated another snapshot build -- r8085 should be on  
</span><br>
<span class="quotelev1">&gt;the web site within an hour or so)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Nov 10, 2005, at 4:38 AM, Clement Chu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I got an error when tried the mpirun on mpi program.  The following  
</span><br>
<span class="quotelev2">&gt;&gt;is
</span><br>
<span class="quotelev2">&gt;&gt;the error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ mpicc -g -o test main.c
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ mpirun -np 2 test
</span><br>
<span class="quotelev2">&gt;&gt;mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
</span><br>
<span class="quotelev2">&gt;&gt;signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:28466] ERROR: A daemon on node localhost failed to start as  
</span><br>
<span class="quotelev2">&gt;&gt;expected.
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:28466] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:28466] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt;[kfc:28466] The daemon received a signal 11.
</span><br>
<span class="quotelev2">&gt;&gt;1 additional process aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am using openmpi-1.0rc4 and running on Linux Redhat Fedora Core 4.
</span><br>
<span class="quotelev2">&gt;&gt;The kernal is 2.6.12-1.1456_FC4.  My building procedure is as below:
</span><br>
<span class="quotelev2">&gt;&gt;1.  ./configure --prefix=/home/clement/openmpi --with-devel-headers
</span><br>
<span class="quotelev2">&gt;&gt;2.  make all install
</span><br>
<span class="quotelev2">&gt;&gt;3.  login root.  add openmpi's path and lib in /etc/bashrc
</span><br>
<span class="quotelev2">&gt;&gt;4.  see the $PATH and $LD_LIBRARY_PATH as below
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ echo $PATH
</span><br>
<span class="quotelev2">&gt;&gt;/usr/java/jdk1.5.0_05/bin:/home/clement/openmpi/bin:/usr/java/ 
</span><br>
<span class="quotelev2">&gt;&gt;jdk1.5.0_05/bin:/home/clement/mpich-1.2.7/bin:/usr/kerberos/bin:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt;local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/clement/bin
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;/home/clement/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt;[clement_at_kfc TestMPI]$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;5.  go to mpi program's directory
</span><br>
<span class="quotelev2">&gt;&gt;6.  mpicc -g -o test main.c
</span><br>
<span class="quotelev2">&gt;&gt;7.  mpirun -np 2 test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any idea of this problem.  Many thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Regards,
</span><br>
<span class="quotelev2">&gt;&gt;Clement
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-- 
</span><br>
<span class="quotelev2">&gt;&gt;Clement Kam Man Chu
</span><br>
<span class="quotelev2">&gt;&gt;Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt;School of Computer Science &amp; Software Engineering
</span><br>
<span class="quotelev2">&gt;&gt;Monash University, Caulfield Campus
</span><br>
<span class="quotelev2">&gt;&gt;Ph: 61 3 9903 1964
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Clement Kam Man Chu
Research Assistant
School of Computer Science &amp; Software Engineering
Monash University, Caulfield Campus
Ph: 61 3 9903 1964
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0306.php">Marty Humphrey: "Re: [O-MPI users] can't get openmpi to run across twomulti-NICmachines"</a>
<li><strong>In reply to:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0308.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
