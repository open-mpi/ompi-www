<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 27 17:26:55 2007" -->
<!-- isoreceived="20070227222655" -->
<!-- sent="Tue, 27 Feb 2007 16:26:28 -0600" -->
<!-- isosent="20070227222628" -->
<!-- name="Iannetti, Anthony C. \(GRC-RTB0\)" -->
<!-- email="anthony.c.iannetti_at_[hidden]" -->
<!-- subject="[OMPI users] Still having problems building 1.2 on Mac OSX" -->
<!-- id="B8983A9DF4CA054D8F9FFC97903B44940C5341_at_NDJSEVS13.ndc.nasa.gov" -->
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
<strong>From:</strong> Iannetti, Anthony C. \(GRC-RTB0\) (<em>anthony.c.iannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-27 17:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open-MPI:
<br>
<p>&nbsp;&nbsp;&nbsp;I am still ahving problems building OpenMPI 1.2 (now 1.2b4) on MacOSX 10.4 PPC 64.  In a message a while back, you gavce me a hack to override this problem.  I believe it was a problem with Libtool, or something like that.  Well, it looks like I still ahve to use that hack.
<br>
<p>Thanks,
<br>
Tony
<br>
<p><p>[72] [cortland] %make
<br>
Making all in config
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in contrib
<br>
make[1]: Nothing to be done for `all'.
<br>
Making all in opal
<br>
Making all in include
<br>
make  all-am
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in libltdl
<br>
make  all-am
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in asm
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in etc
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in event
<br>
Making all in compat
<br>
Making all in sys
<br>
make[4]: Nothing to be done for `all'.
<br>
make[4]: Nothing to be done for `all-am'.
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in util
<br>
Making all in keyval
<br>
make[3]: Nothing to be done for `all'.
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in mca/base
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/backtrace
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/maffinity
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/memcpy
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/memory
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/paffinity
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/timer
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/backtrace/darwin
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/memory/darwin
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/timer/darwin
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in .
<br>
make[2]: Nothing to be done for `all-am'.
<br>
Making all in mca/maffinity/first_use
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in tools/wrappers
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in orte
<br>
Making all in include
<br>
make  all-am
<br>
make[3]: Nothing to be done for `all-am'.
<br>
Making all in mca/errmgr
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/gpr
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/iof
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/ns
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/odls
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/oob
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/pls
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/ras
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/rds
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/rmaps
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/rmgr
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/rml
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/schema
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/sds
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in mca/smr
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in etc
<br>
make[2]: Nothing to be done for `all'.
<br>
Making all in .
<br>
make[2]: Nothing to be done for `all-am'.
<br>
Making all in mca/errmgr/hnp
<br>
/bin/sh ../../../../libtool --tag=CC --mode=link gcc  -O3 -DNDEBUG -arch ppc64 -finline-functions -fno-strict-aliasing   -export-dynamic   -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o mca_errmgr_hnp.la -rpath /Volumes/Homes/MPI/OpenMPI/openmpi-1.2b4/lib/openmpi -module -avoid-version errmgr_hnp_component.lo errmgr_hnp.lo /Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/orte/libopen-rte.la /Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/opal/libopen-pal.la
<br>
libtool: link: gcc -Wl,-flat_namespace -Wl,-undefined -Wl,suppress -o .libs/mca_errmgr_hnp.so -bundle  .libs/errmgr_hnp_component.o .libs/errmgr_hnp.o   /Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/orte/.libs/libopen-rte.dylib /Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/opal/.libs/libopen-pal.dylib -arch ppc64 -Wl,-u -Wl,_munmap -Wl,-multiply_defined -Wl,suppress       -Wl,-dylib_file -Wl,:/Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/opal/.libs/libopen-pal.dylib
<br>
/usr/bin/ld: -dylib_file argument: :/Volumes/Homes/aiann/MPI/OpenMPI/openmpi-1.2b4/opal/.libs/libopen-pal.dylib must have a ':' between its file names
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [mca_errmgr_hnp.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2737/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="2736.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_Spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
<li><strong>Reply:</strong> <a href="2738.php">Brian Barrett: "Re: [OMPI users] Still having problems building 1.2 on Mac OSX"</a>
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
