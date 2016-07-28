<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 15:18:29 2008" -->
<!-- isoreceived="20081014191829" -->
<!-- sent="Tue, 14 Oct 2008 15:18:16 -0400" -->
<!-- isosent="20081014191816" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="41626378-49E6-4382-ACB4-96B016D7EBF2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5666F5FA-7DCD-4016-9BF5-9E4E84D3B264_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-14 15:18:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6979.php">Tim Mattox: "[OMPI users] Open MPI v1.2.8 released"</a>
<li><strong>In reply to:</strong> <a href="6978.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use modules too, but they only work locally. Or is there a feature  
<br>
in &quot;module&quot; to automatically load the list of currently loaded local  
<br>
modules remotely ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 14, 2008, at 3:03 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You might consider using something like  &quot;module&quot; - we use that  
</span><br>
<span class="quotelev1">&gt; system for exactly this reason. Works quite well and solves the  
</span><br>
<span class="quotelev1">&gt; multiple compiler issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2008, at 12:56 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The option to expand the remote LD_LIBRARY_PATH, in such a way  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that Open MPI related applications have their dependencies  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; satisfied, is in the trunk. The fact that the compiler requires  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some LD_LIBRARY_PATH is out of the scope of an MPI implementation,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I don't think we should take care of it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Passing the local LD_LIBRARY_PATH to the remote nodes doesn't make  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; much sense. There are plenty of environment, where the head node  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have a different configuration than the compute nodes. Again, in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this case my original solution seems not that bad. If you copy (or  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make a link if you prefer) in the Open MPI lib directory to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler shared libraries, this will work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This does work.  It just increases maintenance for each new version
</span><br>
<span class="quotelev2">&gt;&gt; of OpenMPI.   How often does a head node have a different  
</span><br>
<span class="quotelev2">&gt;&gt; configuration
</span><br>
<span class="quotelev2">&gt;&gt; than the compute node?  It would see that this would even more  
</span><br>
<span class="quotelev2">&gt;&gt; support the
</span><br>
<span class="quotelev2">&gt;&gt; passing of LD_LIBRARY_PATH for OpenMPI tools to support a  
</span><br>
<span class="quotelev2">&gt;&gt; heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt; configuration as you described.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 14, 2008, at 12:11 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Craig,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a problem with the Intel libraries and not the Open MPI  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ones. You have to somehow make these libraries available on the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compute nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What I usually do (but it's not the best way to solve this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem) is to copy these libraries somewhere on my home area  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and to add the directory to my LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is ok when you only ever use one compiler, but it isn't very  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flexible.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to keep it as simple as possible for my users, while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; having a maintainable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The libraries are on the compute nodes, the problem deals with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; supporting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multiple versions of compilers.  I can't just list all of the lib  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paths
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in ld.so.conf, because then the user will never get the correct  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one.  I can't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify a static LD_LIBRARY_PATH for the same reason.  I would  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prefer not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to build my system libraries static.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To the OpenMPI developers, what is your opinion on changing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orterun/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to pass LD_LIBRARY_PATH to the remote hosts when starting OpenMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By hand, all that would be done is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; env LD_LIBRARY_PATH=$LD_LIBRARY_PATH $OPMIPATH/orted &lt;args&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This would ensure that orted is launched correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or is it better to just build the OpenMPI tools statically?  We  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use other compilers (PGI, Lahey) so I need a solution that works  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all of them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Craig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am having problems launching openmpi jobs on my system.  I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; support multiple versions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of MPI and compilers using GNU Modules.  For the default  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compiler, everything is fine.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For non-default, I am having problems.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; options:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # module load intel/10.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prefix=/opt/openmpi/1.2.7-intel-10.1 --without-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gridengine --enable-io-romio --with-io-romio-flags=--with-file- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sys=nfs+ufs --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I launch a job, I run the module command for the right  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compiler/MPI version to set the paths
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; am launching, but not orted.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shared libraries: libintlc.so.5: cannot open shared object  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How do others solve this problem?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
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
<li><strong>Next message:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6979.php">Tim Mattox: "[OMPI users] Open MPI v1.2.8 released"</a>
<li><strong>In reply to:</strong> <a href="6978.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
