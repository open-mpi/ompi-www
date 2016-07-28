<?
$subject_val = "[OMPI users] Java bindings failed to load required libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 10:13:23 2012" -->
<!-- isoreceived="20121031141323" -->
<!-- sent="Wed, 31 Oct 2012 15:11:42 +0100 (CET)" -->
<!-- isosent="20121031141142" -->
<!-- name="Georg Ruzicka" -->
<!-- email="82ruge1bif_at_[hidden]" -->
<!-- subject="[OMPI users] Java bindings failed to load required libraries" -->
<!-- id="735f07db-1341-4d4d-9792-353aac7898cb_at_hft-stuttgart.de" -->
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
<strong>Subject:</strong> [OMPI users] Java bindings failed to load required libraries<br>
<strong>From:</strong> Georg Ruzicka (<em>82ruge1bif_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 10:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Reply:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20644.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello again.
<br>
<p>The fault is still there and I can't locate it.
<br>
<p>It seem's the first part of the message came from the file 
<br>
ompi/mpi/java/c/mpi_MPI.c   :   NO LT_DLADVISE - CANNOT LOAD LIBOMPI
<br>
and the second part from
<br>
ompi/mpi/java/java/MPI.java
<br>
<p>I run a 'make install' in both directories.
<br>
As the result I get a mpi.jar and the libmpi_java libraries installed in 
<br>
/buildpath/lib
<br>
of my open mpi installation.
<br>
<p>I also searched for the libompi but can't find anything.
<br>
I have a 'libmpi.la' library in my /lib directory but no libompi.
<br>
<p><p>Any ideas?
<br>
<p>Thanks Georg
<br>
<p><p><p><p><p>----- Urspr&#195;&#188;ngliche Mail -----
<br>
Betreff: Java bindings failed to load required libraries
<br>
<p>Hello.
<br>
<p>I installed open mpi and try to run the examples.
<br>
I used the developer trunk.
<br>
C, C++ and Fortran90 examples compiling and running well.
<br>
<p>When i tried to run the compiled Hello.java class
<br>
i get this messages:
<br>
<p>georg_at_ThinkPad-R61:~/ompi-svn/examples$ mpirun java Hello
<br>
[ThinkPad-R61:19720] NO LT_DLADVISE - CANNOT LOAD LIBOMPI
<br>
JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[43465,1],0]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p><p>I configure with:
<br>
./configure --prefix=/home/georg/ompi-install1 --with-platform=optimized --enable-mpi-java --with-jdk-dir=/opt/jdk1.7.0_09
<br>
<p>I work with ubuntu 10.10.
<br>
<p>I added to .bashrc:
<br>
export PATH=$PATH:/home/georg/tools/installed/bin:/home/georg/ompi-install1/bin:/opt/jdk1.7.0_09/bin:/opt/jdk1.7.0_09
<br>
export LD_LIBRARY_PATH=$LB_LIBRARY_PATH:/home/georg/ompi-install1/lib:/home/georg/ompi-install1/lib/openmpi:/home/georg/ompi-install1/lib/pkgconfig 
<br>
<p>I can compile and run java progs 
<br>
<p>Did anyone know the fault?
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Previous message:</strong> <a href="20599.php">Ralph Castain: "Re: [OMPI users] bug (?) opal_path_access incorrect call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20538.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20539.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="20541.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Reply:</strong> <a href="20601.php">Ralph Castain: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20644.php">Georg Ruzicka: "Re: [OMPI users] Java bindings failed to load required libraries"</a>
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
