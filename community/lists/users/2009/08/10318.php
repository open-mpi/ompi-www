<?
$subject_val = "[OMPI users] PGI-9.0: -lpthread instead of -pthread";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 06:24:59 2009" -->
<!-- isoreceived="20090812102459" -->
<!-- sent="Wed, 12 Aug 2009 10:24:44 +0000" -->
<!-- isosent="20090812102444" -->
<!-- name="Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]" -->
<!-- email="Jalel.Chergui_at_[hidden]" -->
<!-- subject="[OMPI users] PGI-9.0: -lpthread instead of -pthread" -->
<!-- id="19074.39020.644880.231323_at_medoc.limsi.fr" -->
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
<strong>Subject:</strong> [OMPI users] PGI-9.0: -lpthread instead of -pthread<br>
<strong>From:</strong> Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden] (<em>Jalel.Chergui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 06:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Previous message:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Reply:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;Trying to link OpenMPI-1.3.3 with PGI 9.0-1 and got the following error :
<br>
<p># ./configure --prefix=/opt/ofed/mpi/pgi/openmpi-1.3.3 --with-openib=/opt/ofed
<br>
FC=pgf95 CC=gcc CXX=g++
<br>
<p># make
<br>
[...]
<br>
libtool: link: pgf95 -shared  -fpic -Mnomain  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/ompi/.libs -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/orte/.libs -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/opal/.libs -Wl,-rpath -Wl,/opt/ofed/mpi/pgi/openmpi-1.3.3/lib -L/usr/local/src/openmpi-1.3.3/orte/.libs -L/usr/local/src/openmpi-1.3.3/opal/.libs ../../../ompi/.libs/libmpi.so /usr/local/src/openmpi-1.3.3/orte/.libs/libopen-rte.so /usr/local/src/openmpi-1.3.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
<br>
pgf95-Error-Unknown switch: -pthread
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
make[4]: Leaving directory `/usr/local/src/openmpi-1.3.3/ompi/mpi/f90'
<br>
[...]
<br>
<p># uname -a
<br>
Linux turing.limsi.fr 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 13:38:27 BST 2006
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p>It seems configure missed -l switch before pthread string. Is there any workarround for
<br>
that. Thanks a lot for your help.
<br>
<p>Jalel
<br>
<pre>
-- 
*------------------------------------------------------------------------*
 Jalel CHERGUI, LIMSI-CNRS, B&#226;t. 508 - BP 133, 91403 Orsay cedex, FRANCE
 T&#233;l : (33 1) 69 85 81 27     ; T&#233;l&#233;copie : (33 1) 69 85 80 88
 M&#233;l : Jalel.Chergui_at_[hidden] ; R&#233;f&#233;rence : <a href="http://perso.limsi.fr/chergui">http://perso.limsi.fr/chergui</a>
*------------------------------------------------------------------------*
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10319.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel compiler"</a>
<li><strong>Previous message:</strong> <a href="10317.php">Shiqing Fan: "Re: [OMPI users] Memchecker and Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<li><strong>Reply:</strong> <a href="10325.php">Gus Correa: "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
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
