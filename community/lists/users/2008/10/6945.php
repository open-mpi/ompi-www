<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 19:32:33 2008" -->
<!-- isoreceived="20081010233233" -->
<!-- sent="Fri, 10 Oct 2008 19:32:24 -0400" -->
<!-- isosent="20081010233224" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="7F749C5E-F657-4B46-9730-DCCD6C4C4FA0_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48EFD461.30202_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passing LD_LIBRARY_PATH to orted<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 19:32:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig,
<br>
<p>This is a problem with the Intel libraries and not the Open MPI ones.  
<br>
You have to somehow make these libraries available on the compute nodes.
<br>
<p>What I usually do (but it's not the best way to solve this problem) is  
<br>
to copy these libraries somewhere on my home area and to add the  
<br>
directory to my LD_LIBRARY_PATH.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
<br>
<p><span class="quotelev1">&gt; I am having problems launching openmpi jobs on my system.  I support  
</span><br>
<span class="quotelev1">&gt; multiple versions
</span><br>
<span class="quotelev1">&gt; of MPI and compilers using GNU Modules.  For the default compiler,  
</span><br>
<span class="quotelev1">&gt; everything is fine.
</span><br>
<span class="quotelev1">&gt; For non-default, I am having problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure  
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # module load intel/10.1
</span><br>
<span class="quotelev1">&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort --prefix=/ 
</span><br>
<span class="quotelev1">&gt; opt/openmpi/1.2.7-intel-10.1 --without-
</span><br>
<span class="quotelev1">&gt; gridengine --enable-io-romio --with-io-romio-flags=--with-file- 
</span><br>
<span class="quotelev1">&gt; sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I launch a job, I run the module command for the right compiler/ 
</span><br>
<span class="quotelev1">&gt; MPI version to set the paths
</span><br>
<span class="quotelev1">&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am  
</span><br>
<span class="quotelev1">&gt; launching, but not orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading shared  
</span><br>
<span class="quotelev1">&gt; libraries: libintlc.so.5: cannot open shared object file: No such  
</span><br>
<span class="quotelev1">&gt; file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do others solve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Craig Tierney (craig.tierney_at_[hidden])
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6944.php">Craig Tierney: "[OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6946.php">Gus Correa: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
