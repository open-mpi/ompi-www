<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 13:56:30 2008" -->
<!-- isoreceived="20081014175630" -->
<!-- sent="Tue, 14 Oct 2008 13:56:18 -0400" -->
<!-- isosent="20081014175618" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="5B54261C-F5C2-4D5C-866B-1B18CCF58D19_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48F4C49C.8000307_at_noaa.gov" -->
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
<strong>Date:</strong> 2008-10-14 13:56:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The option to expand the remote LD_LIBRARY_PATH, in such a way that  
<br>
Open MPI related applications have their dependencies satisfied, is in  
<br>
the trunk. The fact that the compiler requires some LD_LIBRARY_PATH is  
<br>
out of the scope of an MPI implementation, and I don't think we should  
<br>
take care of it.
<br>
<p>Passing the local LD_LIBRARY_PATH to the remote nodes doesn't make  
<br>
much sense. There are plenty of environment, where the head node have  
<br>
a different configuration than the compute nodes. Again, in this case  
<br>
my original solution seems not that bad. If you copy (or make a link  
<br>
if you prefer) in the Open MPI lib directory to the compiler shared  
<br>
libraries, this will work.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 14, 2008, at 12:11 PM, Craig Tierney wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Craig,
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem with the Intel libraries and not the Open MPI  
</span><br>
<span class="quotelev2">&gt;&gt; ones. You have to somehow make these libraries available on the  
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt; What I usually do (but it's not the best way to solve this problem)  
</span><br>
<span class="quotelev2">&gt;&gt; is to copy these libraries somewhere on my home area and to add the  
</span><br>
<span class="quotelev2">&gt;&gt; directory to my LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is ok when you only ever use one compiler, but it isn't very  
</span><br>
<span class="quotelev1">&gt; flexible.
</span><br>
<span class="quotelev1">&gt; I want to keep it as simple as possible for my users, while having a  
</span><br>
<span class="quotelev1">&gt; maintainable
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The libraries are on the compute nodes, the problem deals with  
</span><br>
<span class="quotelev1">&gt; supporting
</span><br>
<span class="quotelev1">&gt; multiple versions of compilers.  I can't just list all of the lib  
</span><br>
<span class="quotelev1">&gt; paths
</span><br>
<span class="quotelev1">&gt; in ld.so.conf, because then the user will never get the correct  
</span><br>
<span class="quotelev1">&gt; one.  I can't
</span><br>
<span class="quotelev1">&gt; specify a static LD_LIBRARY_PATH for the same reason.  I would  
</span><br>
<span class="quotelev1">&gt; prefer not
</span><br>
<span class="quotelev1">&gt; to build my system libraries static.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To the OpenMPI developers, what is your opinion on changing orterun/ 
</span><br>
<span class="quotelev1">&gt; mpirun
</span><br>
<span class="quotelev1">&gt; to pass LD_LIBRARY_PATH to the remote hosts when starting OpenMPI  
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<span class="quotelev1">&gt; By hand, all that would be done is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; env LD_LIBRARY_PATH=$LD_LIBRARY_PATH $OPMIPATH/orted &lt;args&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would ensure that orted is launched correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or is it better to just build the OpenMPI tools statically?  We also
</span><br>
<span class="quotelev1">&gt; use other compilers (PGI, Lahey) so I need a solution that works for
</span><br>
<span class="quotelev1">&gt; all of them.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am having problems launching openmpi jobs on my system.  I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support multiple versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of MPI and compilers using GNU Modules.  For the default compiler,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything is fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For non-default, I am having problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # module load intel/10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prefix=/opt/openmpi/1.2.7-intel-10.1 --without-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine --enable-io-romio --with-io-romio-flags=--with-file- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I launch a job, I run the module command for the right  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler/MPI version to set the paths
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launching, but not orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared libraries: libintlc.so.5: cannot open shared object file:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do others solve this problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Craig
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6975.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6977.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
