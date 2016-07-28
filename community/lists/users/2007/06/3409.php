<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 09:29:31 2007" -->
<!-- isoreceived="20070608132931" -->
<!-- sent="Sat, 9 Jun 2007 01:29:27 +1200" -->
<!-- isosent="20070608132927" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes" -->
<!-- id="1626092b0706080629k72ad8231y945df65a2c520b90_at_mail.gmail.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 09:29:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Reply:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I compiled openmpi-1.2.2 with:
<br>
<p>./configure CFLAGS=-g -pg -O3
<br>
--prefix=/home/foo/490_research/490/src/mpi.optimized_profiling/  \
<br>
--enable-mpi-threads --enable-progress-threads --enable-static
<br>
--disable-shared --without-memory-manager  \
<br>
--without-libnuma --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-cxx
<br>
--disable-mpi-cxx-seek --disable-dlopen
<br>
<p>(Thanks Jeff, now I know that I have to add --without-memory-manager and
<br>
--without-libnuma for static linking)
<br>
<p>make all
<br>
<p>make install
<br>
<p>then I run my client app with:
<br>
<p>/home/foo/490_research/490/src/mpi.optimized_profiling/bin/mpirun --hostfile
<br>
../hostfile -n 32 raytrace -finputs/car.env
<br>
<p>The program runs well and each process completes succssfully (I can tell
<br>
because all processes have now generated gmon.out successfully and a &quot;ps
<br>
aux&quot; on other slave nodes (except the originating node) show that my program
<br>
in slave nodes have already exited (not existant).  Therefore I think this
<br>
may have something to do with mpirun,which hangs forever.
<br>
<p>Can you see anything wrong in my ./configure command which explains the
<br>
mpirun hang at the end of the run?  How can I fix it?
<br>
<p>Thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Previous message:</strong> <a href="3408.php">Aaron Thompson: "Re: [OMPI users] Issues with DL POLY"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Reply:</strong> <a href="3416.php">Jeff Squyres: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
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
