<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 18:48:40 2007" -->
<!-- isoreceived="20070711224840" -->
<!-- sent="Wed, 11 Jul 2007 22:47:27 -0000" -->
<!-- isosent="20070711224727" -->
<!-- name="Glendenning, Lisa" -->
<!-- email="lisa.glendenning_at_[hidden]" -->
<!-- subject="[OMPI devel] Notes on building and running Open MPI on Red Storm" -->
<!-- id="72208BE3C2373746A87FCCEBA1BF1B73026D2B63_at_G3W0069.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Glendenning, Lisa (<em>lisa.glendenning_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 18:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some supplementary information to the wiki at
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3">https://svn.open-mpi.org/trac/ompi/wiki/CrayXT3</a>.
<br>
<p><p>I. Accessing the Open MPI source:
<br>
<p>&nbsp;&nbsp;* Subversion is installed on redstorm in /projects/unsupported/bin
<br>
<p>&nbsp;&nbsp;* Reddish has subversion in the default path (you don't have to load a
<br>
module)
<br>
<p>&nbsp;&nbsp;* The proxy information in the wiki is accurate, and works on both
<br>
redstorm and reddish
<br>
<p><p>II. Building Open MPI on reddish:
<br>
<p>&nbsp;&nbsp;* 'module load PrgEnv-pgi-xc' to cross compile for redstorm
<br>
<p>&nbsp;&nbsp;* Reddish and redstorm do not have recent enough version of autotools,
<br>
so you must build your own (currently available in
<br>
/project/openmpi/rbbrigh/tools)
<br>
<p>&nbsp;&nbsp;* Suggested configuration: 'configure CC=qk-gcc CXX=qk-pgCC
<br>
F77=qk-pgf77 FC=qk-pgf90 --disable-mpi-profile --with-platform=redstorm
<br>
--host=x86_64-cray-linux-gnu --build=x86_64-unknown-linux-gnu
<br>
--disable-mpi-f90 --disable-mem-debug --disable-mem-profile
<br>
--disable-debug build_alias=x86_64-unknown-linux-gnu
<br>
host_alias=x86_64-cray-linux-gnu'
<br>
<p><p>III. Building with Open MPI:
<br>
<p>&nbsp;&nbsp;* No executables will be installed in $PREFIX/bin, so must compile
<br>
without mpicc, e.g. 'qk-gcc -I$PREFIX/include *.c -L$PREFIX/lib -lmpi
<br>
-lopen-rte -lopen-pal'
<br>
<p>&nbsp;&nbsp;* When linking with libopen-pal, the following warning is normal: 'In
<br>
function `checkpoint_response': warning: mkfifo is not implemented and
<br>
will always fail'
<br>
<p><p>IV. Running on Redstorm:
<br>
<p>&nbsp;&nbsp;* scp your executable from reddish to redstorm
<br>
<p>&nbsp;&nbsp;* Use 'qsub' to submit job and 'yod' to launch job (if you do an
<br>
interactive session, you can bypass PBS)
<br>
<p>&nbsp;&nbsp;* qsub expects project/task information - you can either provide this
<br>
with -A option or set it in $XT_ACCOUNT environmental variable
<br>
<p>&nbsp;&nbsp;* Sample job script for qsub with 8 nodes/processes and 10 minute
<br>
runtime:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;#!/bin/sh
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#PBS -lsize=8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#PBS -lwalltime=10:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cd $PBS_O_WORKDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;yod a.out
<br>
<p>&nbsp;&nbsp;* Use 'xtshowmesh' and 'qstat' to query job status and cluster
<br>
configuration
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1852.php">Lisandro Dalcin: "[OMPI devel] failures runing mpi4py testsuite, perhaps Comm.Split()"</a>
<li><strong>Previous message:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1856.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
<li><strong>Reply:</strong> <a href="1857.php">Brian Barrett: "Re: [OMPI devel] Notes on building and running Open MPI on Red Storm"</a>
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
