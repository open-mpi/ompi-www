<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 05:42:21 2007" -->
<!-- isoreceived="20070814094221" -->
<!-- sent="Tue, 14 Aug 2007 11:42:17 +0200" -->
<!-- isosent="20070814094217" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun hangs" -->
<!-- id="9b0da5ce0708140242x52b80329h1a890b22f2cdc0d9_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 05:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3846.php">Rodrigo Faccioli: "[OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I installed openmpi 1.2.2 on a quad core intel machine running fedora 6
<br>
(hostname plankton)
<br>
I set PATH and LD_LIBRARY in the .zshrc file:
<br>
$ echo $PATH
<br>
/opt/openmpi/bin:/usr/kerberos/bin:/usr/local/bin:/usr/bin:/bin:/usr/X11R6/bin:/home/jody/bin
<br>
$ echo $LD_LIBRARY_PATH
<br>
/opt/openmpi/lib:
<br>
<p>When i run
<br>
$ mpirun -np 2 ./MPITest2
<br>
i get the message
<br>
./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
./MPI2Test2: error while loading shared libraries: libmpi_cxx.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
<p>However
<br>
$ mpirun -np 2 --prefix /opt/openmpi ./MPI2Test2
<br>
works.  Any explanation?
<br>
<p>Second problem:
<br>
I have also  installed openmpi 1.2.2 on an AMD machine running gentoo linux
<br>
(hostname nano_02).
<br>
Here as well PATH and LD_LIBRARY_PATH are set correctly,
<br>
and
<br>
$ mpirun -np 2 ./MPITest2
<br>
works locally on nano_02.
<br>
<p>If, however, from plankton i call
<br>
$ mpirun -np 2 --prefix /opt/openmpi --host nano_02 ./MPI2Test2
<br>
the call hangs with no output whatsoever.
<br>
Any pointers on how to solve this problem?
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3845/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3846.php">Rodrigo Faccioli: "[OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
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
