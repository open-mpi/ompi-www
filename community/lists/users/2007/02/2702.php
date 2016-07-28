<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 15:30:46 2007" -->
<!-- isoreceived="20070215203046" -->
<!-- sent="Thu, 15 Feb 2007 15:38:45 -0500" -->
<!-- isosent="20070215203845" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] compiling mpptest using OpenMPI" -->
<!-- id="200702151538.45513.kyron_at_neuralbs.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 15:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been attempting to compile mpptest on my nodes in vain. Here is my current setup:
<br>
<p>Openmpi is in &quot;$HOME/openmpi_`uname -m`&quot; which translates to &quot;/export/home/eric/openmpi_i686/&quot;. I tried the following approaches (you can see some of these were out of desperation):
<br>
<p>CFLAGS=`mpicc --showme:compile` LDFLAGS=`mpicc --showme:link` ./configure
<br>
<p>Configure fails on:
<br>
checking whether the C compiler works... configure: error: cannot run C compiled programs.
<br>
<p>The log shows that:
<br>
./a.out: error while loading shared libraries: liborte.so.0: cannot open shared object file: No such file or directory
<br>
<p><p>CC=&quot;/export/home/eric/openmpi_i686/bin/mpicc&quot; ./configure --with-mpi=$HOME/openmpi_`uname -m`
<br>
Same problems as above...
<br>
<p>LDFLAGS=&quot;$HOME/openmpi_`uname -m`/lib&quot; ./configure --with-mpi=$HOME/openmpi_`uname -m`
<br>
<p>Configure fails on:
<br>
checking for C compiler default output file name... configure: error: C compiler cannot create executables
<br>
<p>And...finally (not that all of this was done in the presented order):
<br>
./configure --with-mpi=$HOME/openmpi_`uname -m`
<br>
<p>Which ends with:
<br>
<p>checking for library containing MPI_Init... no
<br>
configure: error: Could not find MPI library
<br>
<p>Anyone can help me with this one...?
<br>
<p>Note that LAM-MPI is also installed on these systems...
<br>
<p>Eric Thibodeau
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2702/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2703.php">Steven A. DuChene: "[OMPI users] ORTE errors on simple fortran program with 1.2b3"</a>
<li><strong>Previous message:</strong> <a href="2701.php">George Bosilca: "Re: [OMPI users] problems with HPLinpack over myrinet MX-10G"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2707.php">Jeff Squyres: "Re: [OMPI users] compiling mpptest using OpenMPI"</a>
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
