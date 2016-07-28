<?
$subject_val = "[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  8 15:19:11 2008" -->
<!-- isoreceived="20081008191911" -->
<!-- sent="Wed, 8 Oct 2008 13:19:05 -0600" -->
<!-- isosent="20081008191905" -->
<!-- name="Sudhakar Mahalingam" -->
<!-- email="sudhakar_at_[hidden]" -->
<!-- subject="[OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5" -->
<!-- id="90AF6387-0AA4-4C1F-892B-8A26832668F4_at_txcorp.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5<br>
<strong>From:</strong> Sudhakar Mahalingam (<em>sudhakar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-08 15:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Reply:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Maybe reply:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am having a problem about &quot;Open&quot; Macro's number of arguments, when I  
<br>
try to build a C++ code with the openmpi-1.2.7 on my Mac OS 10.5.5  
<br>
machine. The error message is given below. When I look at the file.h  
<br>
and file_inln.h header files in the cxx folder, I am seeing that the  
<br>
&quot;Open&quot; function indeed takes four arguments but I don't know why there  
<br>
is this error about the number of arguments of 4. Does anyone else  
<br>
seen this type of error before ?.
<br>
<p>Thanks for your help.
<br>
<p>Sudhakar
<br>
<p>/usr/local/mpi/bin/mpicxx -DHAVE_CONFIG_H -I. -I. -I.. -I../advisor - 
<br>
I../physics -I../otools -I../otools -I../config -I../xg -I/usr/local/ 
<br>
hdf5mpi/include -I/usr/local/txphysics-2.1/include -I/usr/local/ 
<br>
petscmpi/include -I/usr/local/petscmpi/bmake/darwin9.5.0-c-debug - 
<br>
I.    -O3 -pipe -funroll-loops -Wall -Wno-unused  -O3 -pipe -funroll- 
<br>
loops   -DQT3_SUPPORT -DUNIX -DMPI_VERSION   -DNOX -c -o OopicMain.o  
<br>
OopicMain.cpp
<br>
In file included from /usr/local/hdf5mpi/include/H5public.h:54,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/hdf5mpi/include/hdf5.h:24,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../otools/dumpHDF5.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../physics/plsmadev.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.h:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.cpp:20:
<br>
/usr/local/openmpi-1.2.7/include/mpi.h:162:1: warning: &quot;MPI_VERSION&quot;  
<br>
redefined
<br>
&lt;command line&gt;:1:1: warning: this is the location of the previous  
<br>
definition
<br>
In file included from /usr/local/openmpi-1.2.7/include/openmpi/ompi/ 
<br>
mpi/cxx/mpicxx.h:200,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.2.7/include/mpi.h:1795,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/hdf5mpi/include/H5public.h:54,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/hdf5mpi/include/hdf5.h:24,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../otools/dumpHDF5.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../physics/plsmadev.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.h:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.cpp:20:
<br>
/usr/local/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/file.h:124:25:  
<br>
error: macro &quot;Open&quot; passed 4 arguments, but takes just 1
<br>
In file included from /usr/local/openmpi-1.2.7/include/openmpi/ompi/ 
<br>
mpi/cxx/mpicxx.h:257,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.2.7/include/mpi.h:1795,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/hdf5mpi/include/H5public.h:54,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from /usr/local/hdf5mpi/include/hdf5.h:24,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../otools/dumpHDF5.h:20,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../physics/plsmadev.h:35,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.h:42,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from OopicMain.cpp:20:
<br>
/usr/local/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/file_inln.h: 
<br>
189:27: error: macro &quot;Open&quot; passed 4 arguments, but takes just 1
<br>
/usr/local/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/file_inln.h:187:  
<br>
error: invalid function declaration
<br>
make[2]: *** [OopicMain.o] Error 1
<br>
make[2]: *** Waiting for unfinished jobs....
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all] Error 2
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Previous message:</strong> <a href="6905.php">Jeff Squyres: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Reply:</strong> <a href="6907.php">Jed Brown: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
<li><strong>Maybe reply:</strong> <a href="6913.php">Sudhakar Mahalingam: "Re: [OMPI users] compilation error about Open Macro when building the code with OpenMPI on Mac OS 10.5.5"</a>
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
