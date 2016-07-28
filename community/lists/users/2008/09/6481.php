<?
$subject_val = "[OMPI users] libimf.so Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 09:52:42 2008" -->
<!-- isoreceived="20080909135242" -->
<!-- sent="Tue, 9 Sep 2008 09:52:35 -0400" -->
<!-- isosent="20080909135235" -->
<!-- name="Christopher Tanner" -->
<!-- email="christopher.tanner_at_[hidden]" -->
<!-- subject="[OMPI users] libimf.so Error" -->
<!-- id="1B07603D-769D-4711-90C9-D46C92336A03_at_gatech.edu" -->
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
<strong>Subject:</strong> [OMPI users] libimf.so Error<br>
<strong>From:</strong> Christopher Tanner (<em>christopher.tanner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 09:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Previous message:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Reply:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just installed Open MPI on our cluster and whenever I try to execute  
<br>
a process on more than one node, I get this error:
<br>
<p>$ mpirun -hostfile $HOSTFILE -n 1 hello_c
<br>
orted: error while loading shared libraries: libimf.so: cannot open  
<br>
shared object file: No such file or directory
<br>
... followed by a whole bunch of timeout errors that I'm assuming were  
<br>
caused by the library error above.
<br>
<p>The cluster has 16 nodes and is running Ubuntu 8.04 Server. The Open  
<br>
MPI source was compiled with openib support using the Intel compilers:
<br>
$ ./configure --prefix=/usr/local --with-openib=/usr/local/lib CC=icc  
<br>
CFLAGS=-m64 CXX=icpc CXXFLAGS=-m64 F77=ifort FFLAGS=-m64 FC=ifort  
<br>
FCFLAGS=-m64
<br>
<p>I've installed the Intel compilers on the master node only, but I've  
<br>
installed them in the /usr/local directory, which is accessible to all  
<br>
nodes via NFS. Similarly, I've compiled / installed Open MPI only on  
<br>
the master node, but in the NFS-shared /usr/local directory as well.  
<br>
Finally, I've compiled / installed all of the OpenFabrics libraries on  
<br>
the master node only but in the NFS-shared /usr/local/lib directory.
<br>
<p>I've run the iccvars.sh and ifortvar.sh scripts on each node to ensure  
<br>
that the environment variables were setup for the Intel compilers on  
<br>
each node.   Additionally, I've modified the LD_LIBRARY_PATH variable  
<br>
on each node to include /usr/local/lib and /usr/local/lib/openmpi so  
<br>
that each node can see the Infiniband and OpenMPI libraries.
<br>
<p>If I only execute Open MPI on the master node, it works fine
<br>
$ mpirun -hostfile $HOSTFILE -n 1 hello_c
<br>
Hello, world, I am 0 of 1
<br>
<p>Sorry for the long post and thanks for your help in advance!
<br>
<p>-------------------------------------------
<br>
Chris Tanner
<br>
Space Systems Design Lab
<br>
Georgia Institute of Technology
<br>
christopher.tanner_at_[hidden]
<br>
-------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Previous message:</strong> <a href="6480.php">Paul Kapinos: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
<li><strong>Reply:</strong> <a href="6482.php">Jeremy Stout: "Re: [OMPI users] libimf.so Error"</a>
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
