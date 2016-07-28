<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 13:45:43 2007" -->
<!-- isoreceived="20070124184543" -->
<!-- sent="Wed, 24 Jan 2007 13:47:36 -0500" -->
<!-- isosent="20070124184736" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] mpicc adds an inexitant directory in the include path." -->
<!-- id="CEECA3BE5A1E334EBB71ADD1B9ABEF820107F57C_at_webmail.imi.nrc.ca" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 13:47:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Reply:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I use sometimes OpenMPI and it looks like the mpicc wrapper gives gcc an inexistant directory with -I option. If I ask mpicc how it calls gcc it prints the following:
<br>
<p>&nbsp;&nbsp;&nbsp;[audet_at_linux15 libdfem]$ mpicc -show
<br>
&nbsp;&nbsp;&nbsp;gcc -I/usr/local/openmpi-1.1.2/include -I/usr/local/openmpi-1.1.2/include/openmpi -pthread -L/usr/local/openmpi-1.1.2/lib -lmpi -lorte -lopal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
<br>
&nbsp;&nbsp;&nbsp;[audet_at_linux15 libdfem]$ ls /usr/local/openmpi-1.1.2/include /usr/local/openmpi-1.1.2/include/openmpi
<br>
&nbsp;&nbsp;&nbsp;ls: /usr/local/openmpi-1.1.2/include/openmpi: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;/usr/local/openmpi-1.1.2/include:
<br>
&nbsp;&nbsp;&nbsp;mpi.h  mpif-common.h  mpif-config.h  mpif.h
<br>
&nbsp;&nbsp;&nbsp;[audet_at_linux15 libdfem]$                               
<br>
<p>The directory 'usr/local/openmpi-1.1.2/include/openmpi' doesn't exist. And this explains the annoying warnings I get when I compile my sources (I like to have no warning):
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;cc1plus: warning: /usr/local/openmpi-1.1.2/include/openmpi: No such file or directory
<br>
<p>This happens with OpenMPI 1.1.2 configured as follow:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.1.2 --disable-mpi-f90 --disable-mpi-cxx --disable-cxx-exceptions   --with-io-romio-flags=--with-file-system=ufs+nfs
<br>
<p>Thanks,
<br>
<p>Martin Audet
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2538/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2537.php">Reese Faucette: "[OMPI users] coredump in guess_strlen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Reply:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
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
