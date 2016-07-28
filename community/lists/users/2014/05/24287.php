<?
$subject_val = "[OMPI users] MPI File Open does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 07:24:37 2014" -->
<!-- isoreceived="20140506112437" -->
<!-- sent="Tue, 06 May 2014 13:24:35 +0200" -->
<!-- isosent="20140506112435" -->
<!-- name="Imran Ali" -->
<!-- email="imranal_at_[hidden]" -->
<!-- subject="[OMPI users] MPI File Open does not work" -->
<!-- id="d57bdf499c00360b737205b085c50660_at_ulrik.uio.no" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI File Open does not work<br>
<strong>From:</strong> Imran Ali (<em>imranal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-06 07:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24286.php">Richard Shaw: "[OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>I get the following error when I try to run the following python
<br>
code 
<br>
import mpi4py.MPI as MPI 
<br>
comm = MPI.COMM_WORLD
<br>
<p>MPI.File.Open(comm,&quot;some.file&quot;) 
<br>
<p>$ mpirun -np 1 python
<br>
test_mpi.py
<br>
Traceback (most recent call last):
<br>
&nbsp;File &quot;test_mpi.py&quot;, line
<br>
3, in &lt;module&gt;
<br>
&nbsp;MPI.File.Open(comm,&quot; h5ex_d_alloc.h5&quot;)
<br>
&nbsp;File &quot;File.pyx&quot;,
<br>
line 67, in mpi4py.MPI.File.Open
<br>
(src/mpi4py.MPI.c:89639)
<br>
mpi4py.MPI.Exception: MPI_ERR_OTHER: known
<br>
error not in
<br>
list
<br>
--------------------------------------------------------------------------
<br>
mpirun
<br>
noticed that the job aborted, but has no info as to the process
<br>
that
<br>
caused that
<br>
situation.
<br>
--------------------------------------------------------------------------
<br>
<p><p>My mpirun version is (Open MPI) 1.6.2. I installed openmpi using the
<br>
dorsal script (<a href="https://github.com/FEniCS/dorsal">https://github.com/FEniCS/dorsal</a>) for Redhat Enterprise 6
<br>
(OS I am using, release 6.5) . It configured the build as following :
<br>
<p><p>./configure --enable-mpi-thread-multiple --enable-opal-multi-threads
<br>
--with-threads=posix --disable-mpi-profile
<br>
<p>I need emphasize that I do
<br>
not have root acces on the system I am running my application. 
<br>
<p>Imran
<br>
<p><p>&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24287/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24286.php">Richard Shaw: "[OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
<li><strong>Reply:</strong> <a href="24288.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI File Open does not work"</a>
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
