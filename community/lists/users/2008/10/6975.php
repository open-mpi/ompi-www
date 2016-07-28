<?
$subject_val = "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 12:11:12 2008" -->
<!-- isoreceived="20081014161112" -->
<!-- sent="Tue, 14 Oct 2008 10:11:08 -0600" -->
<!-- isosent="20081014161108" -->
<!-- name="Craig Tierney" -->
<!-- email="Craig.Tierney_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passing LD_LIBRARY_PATH to orted" -->
<!-- id="48F4C49C.8000307_at_noaa.gov" -->
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
<strong>From:</strong> Craig Tierney (<em>Craig.Tierney_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-14 12:11:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Craig,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a problem with the Intel libraries and not the Open MPI ones. 
</span><br>
<span class="quotelev1">&gt; You have to somehow make these libraries available on the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I usually do (but it's not the best way to solve this problem) is 
</span><br>
<span class="quotelev1">&gt; to copy these libraries somewhere on my home area and to add the 
</span><br>
<span class="quotelev1">&gt; directory to my LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is ok when you only ever use one compiler, but it isn't very flexible.
<br>
I want to keep it as simple as possible for my users, while having a maintainable
<br>
system.
<br>
<p>The libraries are on the compute nodes, the problem deals with supporting
<br>
multiple versions of compilers.  I can't just list all of the lib paths
<br>
in ld.so.conf, because then the user will never get the correct one.  I can't
<br>
specify a static LD_LIBRARY_PATH for the same reason.  I would prefer not
<br>
to build my system libraries static.
<br>
<p>To the OpenMPI developers, what is your opinion on changing orterun/mpirun
<br>
to pass LD_LIBRARY_PATH to the remote hosts when starting OpenMPI processes?
<br>
By hand, all that would be done is:
<br>
<p>env LD_LIBRARY_PATH=$LD_LIBRARY_PATH $OPMIPATH/orted &lt;args&gt;
<br>
<p>This would ensure that orted is launched correctly.
<br>
<p>Or is it better to just build the OpenMPI tools statically?  We also
<br>
use other compilers (PGI, Lahey) so I need a solution that works for
<br>
all of them.
<br>
<p>Thanks,
<br>
Craig
<br>
<p><p><p><span class="quotelev1">&gt; On Oct 10, 2008, at 6:17 PM, Craig Tierney wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am having problems launching openmpi jobs on my system.  I support 
</span><br>
<span class="quotelev2">&gt;&gt; multiple versions
</span><br>
<span class="quotelev2">&gt;&gt; of MPI and compilers using GNU Modules.  For the default compiler, 
</span><br>
<span class="quotelev2">&gt;&gt; everything is fine.
</span><br>
<span class="quotelev2">&gt;&gt; For non-default, I am having problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I built Openmpi-1.2.6 (and 1.2.7) with the following configure options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # module load intel/10.1
</span><br>
<span class="quotelev2">&gt;&gt; # ./configure CC=icc CXX=icpc F77=ifort FC=ifort F90=ifort 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi/1.2.7-intel-10.1 --without-
</span><br>
<span class="quotelev2">&gt;&gt; gridengine --enable-io-romio 
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags=--with-file-sys=nfs+ufs 
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/opt/hjet/ofed/1.3.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I launch a job, I run the module command for the right 
</span><br>
<span class="quotelev2">&gt;&gt; compiler/MPI version to set the paths
</span><br>
<span class="quotelev2">&gt;&gt; correctly.  Mpirun passes LD_LIBRARY_PATH to the executable I am 
</span><br>
<span class="quotelev2">&gt;&gt; launching, but not orted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When orted is launched on the remote system, the LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; doesn't come with, and the Intel 10.1 libraries can't be found.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi/1.2.7-intel-10.1/bin/orted: error while loading shared 
</span><br>
<span class="quotelev2">&gt;&gt; libraries: libintlc.so.5: cannot open shared object file: No such file 
</span><br>
<span class="quotelev2">&gt;&gt; or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do others solve this problem?
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
<li><strong>Next message:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Previous message:</strong> <a href="6974.php">Craig Tierney: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>In reply to:</strong> <a href="6945.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
<li><strong>Reply:</strong> <a href="6976.php">George Bosilca: "Re: [OMPI users] Passing LD_LIBRARY_PATH to orted"</a>
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
