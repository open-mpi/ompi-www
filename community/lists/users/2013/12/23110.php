<?
$subject_val = "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting.";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  1 08:51:44 2013" -->
<!-- isoreceived="20131201135144" -->
<!-- sent="Sun, 1 Dec 2013 08:51:42 -0500" -->
<!-- isosent="20131201135142" -->
<!-- name="Raiden Hasegawa" -->
<!-- email="raiden.hasegawa_at_[hidden]" -->
<!-- subject="[OMPI users] configure: error: Could not run a simple Fortran program. Aborting." -->
<!-- id="CAOkcFK2RnxNwiLPAw02VWV0ROR51LpdfaRLL6qeBMMy+7zqZbg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] configure: error: Could not run a simple Fortran program. Aborting.<br>
<strong>From:</strong> Raiden Hasegawa (<em>raiden.hasegawa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-01 08:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All, new to the list here.  I'm running into an error while trying to
<br>
configure:
<br>
<p>shell$ ./configure --prefix=/usr/local/Cellar/open-mpi/1.7.3
<br>
--disable-silent-rules --enable-ipv6
<br>
<p>Here is a blurb from the config.log (which I have attached as well):
<br>
<p>configure:29606: checking if Fortran compiler works
<br>
configure:29635: /usr/local/bin/gfortran -o conftest    conftest.f  &gt;&amp;5
<br>
Undefined symbols for architecture x86_64:
<br>
&nbsp;&nbsp;&quot;__gfortran_set_options&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in cccSAmNO.o
<br>
ld: symbol(s) not found for architecture x86_64
<br>
collect2: error: ld returned 1 exit status
<br>
configure:29635: $? = 1
<br>
configure: program exited with status 1
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|       end
<br>
configure:29651: result: no
<br>
configure:29665: error: Could not run a simple Fortran program.  Aborting.
<br>
<p>I have tested my gfortran compiler on some simple &quot;Hello World&quot; programs
<br>
and it works just fine.  I am having trouble diagnosing the problem and any
<br>
and all help would be appreciated.  Here are my specs:
<br>
<p>mac os x 10.8.4
<br>
gcc and gfortran 4.8.2 (both installed using homebrew)
<br>
open-mpi 1.7.3
<br>
<p>Best,
<br>
<p>Raiden
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23110/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23110/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
<li><strong>Reply:</strong> <a href="23114.php">Jeff Squyres (jsquyres): "Re: [OMPI users] configure: error: Could not run a simple Fortran	program. Aborting."</a>
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
