<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 17:18:58 2008" -->
<!-- isoreceived="20081014211858" -->
<!-- sent="Tue, 14 Oct 2008 15:18:53 -0600" -->
<!-- isosent="20081014211853" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="48F50CBD.2090007_at_noaa.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2AAC92D7-22A0-4733-BC49-C3C512AFF319_at_lanl.gov" -->
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
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-14 17:18:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6983.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6986.php">Reuti: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I -think- there is...at least here, it does seem to behave that way on 
</span><br>
<span class="quotelev1">&gt; our systems. Not sure if there is something done locally to make it work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, though, I have noted that LD_LIBRARY_PATH does seem to be getting 
</span><br>
<span class="quotelev1">&gt; forwarded on the 1.3 branch in some environments. OMPI isn't doing it 
</span><br>
<span class="quotelev1">&gt; directly to the best of my knowledge, but I think the base environment 
</span><br>
<span class="quotelev1">&gt; might be. Specifically, I noticed it on slurm earlier today. I'll check 
</span><br>
<span class="quotelev1">&gt; the others as far as I can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig: what environment are you using? ssh?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We are using ssh (we do not use tight integration in SGE).
<br>
<p>Craig
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 14, 2008, at 1:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I use modules too, but they only work locally. Or is there a feature 
</span><br>
<span class="quotelev2">&gt;&gt; in &quot;module&quot; to automatically load the list of currently loaded local 
</span><br>
<span class="quotelev2">&gt;&gt; modules remotely ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 14, 2008, at 3:03 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might consider using something like  &quot;module&quot; - we use that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system for exactly this reason. Works quite well and solves the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple compiler issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 14, 2008, at 12:56 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The option to expand the remote LD_LIBRARY_PATH, in such a way that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI related applications have their dependencies satisfied, is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the trunk. The fact that the compiler requires some 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH is out of the scope of an MPI implementation, and I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; don't think we should take care of it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Passing the local LD_LIBRARY_PATH to the remote nodes doesn't make 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; much sense. There are plenty of environment, where the head node 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have a different configuration than the compute nodes. Again, in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this case my original solution seems not that bad. If you copy (or 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make a link if you prefer) in the Open MPI lib directory to the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; compiler shared libraries, this will work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This does work.  It just increases maintenance for each new version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of OpenMPI.   How often does a head node have a different configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than the compute node?  It would see that this would even more 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passing of LD_LIBRARY_PATH for OpenMPI tools to support a heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration as you described.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 14, 2008, at 12:11 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Craig,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is a problem with the Intel libraries and not the Open MPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ones. You have to somehow make these libraries available on the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; compute nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I usually do (but it's not the best way to solve this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; problem) is to copy these libraries somewhere on my home area and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to add the directory to my LD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is ok when you only ever use one compiler, but it isn't very 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; flexible.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I want to keep it as simple as possible for my users, while having 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; a maintainable
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; system.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The libraries are on the compute nodes, the problem deals with 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; supporting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; multiple versions of compilers.  I can't just list all of the lib 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; paths
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in ld.so.conf, because then the user will never get the correct 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; one.  I can't
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; specify a static LD_LIBRARY_PATH for the same reason.  I would 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; prefer not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to build my system libraries static.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To the OpenMPI developers, what is your opinion on changing 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; orterun/mpirun
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to pass LD_LIBRARY_PATH to the remote hosts when starting OpenMPI 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; processes?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; By hand, all that would be done is:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; env LD_LIBRARY_PATH=$LD_LIBRARY_PATH $OPMIPATH/orted &lt;args&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This would ensure that orted is launched correctly.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Or is it better to just build the OpenMPI tools statically?  We also
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; use other compilers (PGI, Lahey) so I need a solution that works for
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all of them.
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
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am having problems launching openmpi jobs on my system.  I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; support multiple versions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; of MPI and compilers using GNU Modules.  For the default 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compiler, everything is fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; For non-default, I am having problems.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; options:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # module load intel/10.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --prefix=/opt/openmpi/1.2.7-intel-10.1 --without-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; gridengine --enable-io-romio 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-io-romio-flags=--with-file-sys=nfs+ufs 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I launch a job, I run the module command for the right 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; compiler/MPI version to set the paths
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; launching, but not orted.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared libraries: libintlc.so.5: cannot open shared object file: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No such file or directory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How do others solve this problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Craig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Craig Tierney (craig.tierney_at_[hidden])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Craig Tierney (craig.tierney_at_[hidden])
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6983.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6981.php">Ralph Castain: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6985.php">Jeff Squyres: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6986.php">Reuti: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
