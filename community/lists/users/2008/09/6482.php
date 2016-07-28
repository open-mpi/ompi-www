<?
$subject_val = "Re: [OMPI users] libimf.so Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 10:01:14 2008" -->
<!-- isoreceived="20080909140114" -->
<!-- sent="Tue, 9 Sep 2008 10:01:10 -0400" -->
<!-- isosent="20080909140110" -->
<!-- name="Jeremy Stout" -->
<!-- email="stout.jeremy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libimf.so Error" -->
<!-- id="a6bc6cc0809090701s249419d3s1a96c4ca79ab3a3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B07603D-769D-4711-90C9-D46C92336A03_at_gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] libimf.so Error<br>
<strong>From:</strong> Jeremy Stout (<em>stout.jeremy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 10:01:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
<li><strong>In reply to:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 9, 2008 at 9:52 AM, Christopher Tanner
<br>
&lt;christopher.tanner_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I just installed Open MPI on our cluster and whenever I try to execute a
</span><br>
<span class="quotelev1">&gt; process on more than one node, I get this error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -hostfile $HOSTFILE -n 1 hello_c
</span><br>
<span class="quotelev1">&gt; orted: error while loading shared libraries: libimf.so: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; ... followed by a whole bunch of timeout errors that I'm assuming were
</span><br>
<span class="quotelev1">&gt; caused by the library error above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The cluster has 16 nodes and is running Ubuntu 8.04 Server. The Open MPI
</span><br>
<span class="quotelev1">&gt; source was compiled with openib support using the Intel compilers:
</span><br>
<span class="quotelev1">&gt; $ ./configure --prefix=/usr/local --with-openib=/usr/local/lib CC=icc
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m64 CXX=icpc CXXFLAGS=-m64 F77=ifort FFLAGS=-m64 FC=ifort
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've installed the Intel compilers on the master node only, but I've
</span><br>
<span class="quotelev1">&gt; installed them in the /usr/local directory, which is accessible to all nodes
</span><br>
<span class="quotelev1">&gt; via NFS. Similarly, I've compiled / installed Open MPI only on the master
</span><br>
<span class="quotelev1">&gt; node, but in the NFS-shared /usr/local directory as well. Finally, I've
</span><br>
<span class="quotelev1">&gt; compiled / installed all of the OpenFabrics libraries on the master node
</span><br>
<span class="quotelev1">&gt; only but in the NFS-shared /usr/local/lib directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've run the iccvars.sh and ifortvar.sh scripts on each node to ensure that
</span><br>
<span class="quotelev1">&gt; the environment variables were setup for the Intel compilers on each node.
</span><br>
<span class="quotelev1">&gt; Additionally, I've modified the LD_LIBRARY_PATH variable on each node to
</span><br>
<span class="quotelev1">&gt; include /usr/local/lib and /usr/local/lib/openmpi so that each node can see
</span><br>
<span class="quotelev1">&gt; the Infiniband and OpenMPI libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I only execute Open MPI on the master node, it works fine
</span><br>
<span class="quotelev1">&gt; $ mpirun -hostfile $HOSTFILE -n 1 hello_c
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the long post and thanks for your help in advance!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<span class="quotelev1">&gt; Chris Tanner
</span><br>
<span class="quotelev1">&gt; Space Systems Design Lab
</span><br>
<span class="quotelev1">&gt; Georgia Institute of Technology
</span><br>
<span class="quotelev1">&gt; christopher.tanner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; -------------------------------------------
</span><br>
<p>The library you specified in your post (libimf.so) is part of the
<br>
Intel Compiler Suite (fce and cce). You'll need to make those
<br>
libraries available to your computation nodes and update the
<br>
LD_LIBRARY_PATH accordingly.
<br>
<p>Jeremy Stout
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6483.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
<li><strong>In reply to:</strong> <a href="6481.php">Christopher Tanner: "[OMPI users] libimf.so Error"</a>
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
