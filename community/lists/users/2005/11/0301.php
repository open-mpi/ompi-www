<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 10 04:38:37 2005" -->
<!-- isoreceived="20051110093837" -->
<!-- sent="Thu, 10 Nov 2005 20:38:07 +1100" -->
<!-- isosent="20051110093807" -->
<!-- name="Clement Chu" -->
<!-- email="clement.chu_at_[hidden]" -->
<!-- subject="[O-MPI users] Error on mpirun in Redhat Fedora Core 4" -->
<!-- id="437314FF.9020800_at_csse.monash.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2005-11-10 04:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;I got an error when tried the mpirun on mpi program.  The following is
<br>
the error message:
<br>
<p>[clement_at_kfc TestMPI]$ mpicc -g -o test main.c
<br>
[clement_at_kfc TestMPI]$ mpirun -np 2 test
<br>
mpirun noticed that job rank 1 with PID 0 on node &quot;localhost&quot; exited on
<br>
signal 11.
<br>
[kfc:28466] ERROR: A daemon on node localhost failed to start as expected.
<br>
[kfc:28466] ERROR: There may be more information available from
<br>
[kfc:28466] ERROR: the remote shell (see above).
<br>
[kfc:28466] The daemon received a signal 11.
<br>
1 additional process aborted (not shown)
<br>
[clement_at_kfc TestMPI]$
<br>
<p>I am using openmpi-1.0rc4 and running on Linux Redhat Fedora Core 4.
<br>
The kernal is 2.6.12-1.1456_FC4.  My building procedure is as below:
<br>
1.  ./configure --prefix=/home/clement/openmpi --with-devel-headers
<br>
2.  make all install
<br>
3.  login root.  add openmpi's path and lib in /etc/bashrc
<br>
4.  see the $PATH and $LD_LIBRARY_PATH as below
<br>
[clement_at_kfc TestMPI]$ echo $PATH
<br>
/usr/java/jdk1.5.0_05/bin:/home/clement/openmpi/bin:/usr/java/jdk1.5.0_05/bin:/home/clement/mpich-1.2.7/bin:/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/clement/bin
<br>
[clement_at_kfc TestMPI]$ echo $LD_LIBRARY_PATH
<br>
/home/clement/openmpi/lib
<br>
[clement_at_kfc TestMPI]$
<br>
<p>5.  go to mpi program's directory
<br>
6.  mpicc -g -o test main.c
<br>
7.  mpirun -np 2 test
<br>
<p>Any idea of this problem.  Many thanks.
<br>
<p>Regards,
<br>
Clement
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0300.php">Jeff Squyres: "Re: [O-MPI users] can't get openmpi to run across two multi-NICmachines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Reply:</strong> <a href="0302.php">Jeff Squyres: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
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
