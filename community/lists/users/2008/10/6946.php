<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 20:46:44 2008" -->
<!-- isoreceived="20081011004644" -->
<!-- sent="Fri, 10 Oct 2008 20:46:35 -0400" -->
<!-- isosent="20081011004635" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="48EFF76B.20808_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F749C5E-F657-4B46-9730-DCCD6C4C4FA0_at_eecs.utk.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 20:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Craig, George, list
<br>
<p>Here is a quick and dirty solution I used before for a similar problem.
<br>
Link the Intel libraries statically,  using the &quot;-static-intel&quot; flag.
<br>
Other shared libraries continue to be dynamically linked.
<br>
<p>For instance:
<br>
<p>mipf90 -static-intel my_mpi_program.f90
<br>
<p>What is not clear to me is why to use orted instead of 
<br>
mpirun/mpiexec/orterun,
<br>
which has a mechanism to pass environment variables to the hosts
<br>
with &quot;-x LD_LIBRARY_PATH=/my/intel/lib&quot;.
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
George Bosilca wrote:
&gt; Craig,
&gt;
&gt; This is a problem with the Intel libraries and not the Open MPI ones.  
&gt; You have to somehow make these libraries available on the compute nodes.
&gt;
&gt; What I usually do (but it's not the best way to solve this problem) 
&gt; is  to copy these libraries somewhere on my home area and to add the  
&gt; directory to my LD_LIBRARY_PATH.
&gt;
&gt;   george.
&gt;
&gt; On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
&gt;
&gt;&gt; I am having problems launching openmpi jobs on my system.  I support  
&gt;&gt; multiple versions
&gt;&gt; of MPI and compilers using GNU Modules.  For the default compiler,  
&gt;&gt; everything is fine.
&gt;&gt; For non-default, I am having problems.
&gt;&gt;
&gt;&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure  options:
&gt;&gt;
&gt;&gt; # module load intel/10.1
&gt;&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort --prefix=/ 
&gt;&gt; opt/openmpi/1.2.7-intel-10.1 --without-
&gt;&gt; gridengine --enable-io-romio --with-io-romio-flags=--with-file- 
&gt;&gt; sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
&gt;&gt;
&gt;&gt; When I launch a job, I run the module command for the right compiler/ 
&gt;&gt; MPI version to set the paths
&gt;&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am  
&gt;&gt; launching, but not orted.
&gt;&gt;
&gt;&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
&gt;&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
&gt;&gt;
&gt;&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading shared  
&gt;&gt; libraries: libintlc.so.5: cannot open shared object file: No such  
&gt;&gt; file or directory
&gt;&gt;
&gt;&gt; How do others solve this problem?
&gt;&gt;
&gt;&gt; Thanks,
&gt;&gt; Craig
&gt;&gt;
&gt;&gt;
&gt;&gt; -- 
&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6947.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Previous message:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
