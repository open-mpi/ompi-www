<?
$subject_val = "Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 11:47:12 2009" -->
<!-- isoreceived="20090812154712" -->
<!-- sent="Wed, 12 Aug 2009 11:47:02 -0400" -->
<!-- isosent="20090812154702" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread" -->
<!-- id="4A82E3F6.7040400_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="19074.39020.644880.231323_at_medoc.limsi.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI-9.0: -lpthread instead of -pthread<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-12 11:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10326.php">Gabriele Fatigati: "[OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Previous message:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10318.php">Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]: "[OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jalel, list
<br>
<p>This is a libtool problem, I was told.
<br>
<p>I had the same problem with PGI 8.0-4 and OpenMPI 1.2.8 to 1.3.2
<br>
(I haven't tried 1.3.3. yet).
<br>
&nbsp;From what you say, apparently the problem is still there on OpenMPI 
<br>
1.3.3, PGI 9.0-1, and whatever libtool you have in your system.
<br>
<p>The workaround suggested by the OpenMPI developer (Jeff) then was
<br>
to make a fake pgf90 (pgf95 in your case) command that would
<br>
strip off the -pthread flag, which actually was inserted by libtool,
<br>
and was not really being used (AFAIK), and is not a PGI flag.
<br>
<p>My script for that goes like this
<br>
<p>#! /bin/bash
<br>
####################################
<br>
# Ugly thing to strip off the
<br>
# -pthread flag and fix the
<br>
# OpenMPI 1.3 build.
<br>
# According to Jeff Squires this
<br>
# flag is introduced by a bug in
<br>
# libtool
<br>
# Gus Correa, 20090331
<br>
####################################
<br>
newargs=`echo $@ | sed s/-pthread//g -`
<br>
$path-to-pgi/bin/pgf90  $newargs
<br>
exit
<br>
<p>Replace $path-to-pgi by your real path to PGI, pgf90 by pgf95,
<br>
put the script in, say, your bin directory,
<br>
change permissions to make it executable,
<br>
and make sure your bin directory appears before
<br>
the standard PGI bin directory in your PATH
<br>
(to override the actual PGI compiler).
<br>
<p>See this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/8724.php">http://www.open-mpi.org/community/lists/users/2009/04/8724.php</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Trying to link OpenMPI-1.3.3 with PGI 9.0-1 and got the following error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # ./configure --prefix=/opt/ofed/mpi/pgi/openmpi-1.3.3 --with-openib=/opt/ofed
</span><br>
<span class="quotelev1">&gt; FC=pgf95 CC=gcc CXX=g++
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; libtool: link: pgf95 -shared  -fpic -Mnomain  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/ompi/.libs -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/orte/.libs -Wl,-rpath -Wl,/usr/local/src/openmpi-1.3.3/opal/.libs -Wl,-rpath -Wl,/opt/ofed/mpi/pgi/openmpi-1.3.3/lib -L/usr/local/src/openmpi-1.3.3/orte/.libs -L/usr/local/src/openmpi-1.3.3/opal/.libs ../../../ompi/.libs/libmpi.so /usr/local/src/openmpi-1.3.3/orte/.libs/libopen-rte.so /usr/local/src/openmpi-1.3.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; pgf95-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/usr/local/src/openmpi-1.3.3/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # uname -a
</span><br>
<span class="quotelev1">&gt; Linux turing.limsi.fr 2.6.9-42.0.2.ELsmp #1 SMP Wed Aug 23 13:38:27 BST 2006
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems configure missed -l switch before pthread string. Is there any workarround for
</span><br>
<span class="quotelev1">&gt; that. Thanks a lot for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jalel
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10326.php">Gabriele Fatigati: "[OMPI users] Totalview and OpenMPI problem solved"</a>
<li><strong>Previous message:</strong> <a href="10324.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10318.php">Jalel Chergui (LIMSI-CNRS) &lt;Jalel.Chergui_at_[hidden]: "[OMPI users] PGI-9.0: -lpthread instead of -pthread"</a>
<!-- nextthread="start" -->
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
