<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 18 04:16:11 2012" -->
<!-- isoreceived="20120118091611" -->
<!-- sent="Wed, 18 Jan 2012 09:15:13 +0000" -->
<!-- isosent="20120118091513" -->
<!-- name="Theiner, Andre" -->
<!-- email="andre.theiner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )" -->
<!-- id="088B9CB56632924D9EAE7A408BB76580845AA2CD4B_at_GVW1102EXC.americas.hpqcorp.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="33297F53-4BA8-411E-AE27-32A0DB4F6903_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )<br>
<strong>From:</strong> Theiner, Andre (<em>andre.theiner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-18 04:15:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>In reply to:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Reply:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff and Ralph for your good help.
<br>
I do not know yet, whether OpenFoam uses threads with OpenMPI but I will find out.
<br>
<p>I ran &quot;ompi_info&quot; and it output the lines in the next chapter.
<br>
The important line is &quot; Thread support: posix (mpi: no, progress: no)&quot;.
<br>
At first sight the above line made me think that I found the cause of the problem
<br>
but I compared the output to the output of the same command run on another machine
<br>
where OpenFoam runs fine. The OpenMPI version of that machine is 1.3.2-1.1 and it
<br>
also does not have thread support.
<br>
The difference though is that that machine's OpenFoam version is 1.7.1 and not 2.0.1 and the
<br>
OS is SUSE Linux Enterprise Desktop 11 SP1 and not openSUSE 11.3.
<br>
So I am at the beginning of the search for the cause of the problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI abuild_at_build30 Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r21054
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Apr 21, 2009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.3.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /usr/lib64/mpi/gcc/openmpi
<br>
&nbsp;Configured architecture: x86_64-unknown-linux-gnu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: build30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: abuild
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: Fri Sep 23 05:58:54 UTC 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: build30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: abuild
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Sep 23 06:11:31 UTC 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: build30
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: yes (all)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: yes
<br>
&nbsp;Fortran90 bindings size: small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: /usr/bin/gcc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: g++
<br>
&nbsp;&nbsp;&nbsp;C++ compiler absolute: /usr/bin/g++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran77 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: gfortran
<br>
&nbsp;&nbsp;Fortran90 compiler abs: /usr/bin/gfortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: posix (mpi: no, progress: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: runtime
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: yes
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
&nbsp;mpirun default --prefix: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
Symbol visibility support: yes
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: no  (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA carto: file (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: self (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA io: romio (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA pml: v (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA odls: default (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: env (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.2)
<br>
<p><p>I also have requested the user to run the following adaption to his original
<br>
command &quot;mpriun -np 9 interFoam -parallel&quot;. I hoped to get a kind of debug output
<br>
which points me into the right way. The new command did not work and I am a bit lost.
<br>
Is the syntax wrong somehow or is there a problem in the user's PATH?
<br>
I do not understand what debugger is wanted. Does mpirun not have an internal debugger?
<br>
<p>testuser_at_caelde04:~/OpenFOAM/testuser-2.0.1/nozzleFlow2D&gt; mpirun -v --debug --debug-daemons -np 9 interfoam -parallel
<br>
--------------------------------------------------------------------------
<br>
A suitable debugger could not be found in your PATH.
<br>
Check the values specified in the orte_base_user_debugger MCA parameter for the list of debuggers that was searched.
<br>
<p><p><p><p>Gruss/Regards
<br>
<p>Andre
<br>
Tel. 05362-936222
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Dienstag, 17. Januar 2012 22:53
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
<br>
<p>You should probably also run the ompi_info command; it tells you details about your installation, and how it was configured.
<br>
<p>Is it known that OpenFoam uses threads with MPI?
<br>
<p><p>On Jan 17, 2012, at 9:08 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; You might first just try running a simple MPI &quot;hello&quot; to verify the installation. I don't know if OF is threaded or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 5:22 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andre,
</span><br>
<span class="quotelev2">&gt;&gt; you should not need the OpenMPI sources.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Install the openmpi-devel package from the same source
</span><br>
<span class="quotelev2">&gt;&gt; (zypper install openmpi-devel if you have that science repository enabled)
</span><br>
<span class="quotelev2">&gt;&gt; This will give you the mpi.h file and other include files, libraries
</span><br>
<span class="quotelev2">&gt;&gt; and manual pages.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That is a convention in Suse-style distros - the devel package
</span><br>
<span class="quotelev2">&gt;&gt; contains the stuf you need to 'develop'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 17/01/2012, Theiner, Andre &lt;andre.theiner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Devendra,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks for your interesting answer, up to now I expected to get a fully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operational openmpi installation package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by installing openmpi from the &quot;science&quot; repository (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3">http://download.opensuse.org/repositories/science/openSUSE_11.3</a>&quot; ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To compile your script I need to have the openmpi sources which I do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have at present, I will try to get them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How do I compile and build using multiple processors?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a special flag which tells the compiler to care for multiple CPUs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of devendra rai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Montag, 16. Januar 2012 13:25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Andre,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It may be possible that your openmpi does not support threaded MPI-calls (if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these are happening). I had a similar problem, and it was traced to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cause. If you installed your openmpi from available repositories, chances
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are that you do not have thread-support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a small script that you can use to determine whether or not you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thread support:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int myrank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int provided_thread_support;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;provided_thread_support);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* check if the thread support has been provided */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (provided_thread_support!=desired_thread_support)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     exit(-1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compile and build as usual, using multiple processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe this helps. If you do discover that you do not have support available,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you will need to rebuild MPI with --enable-mpi-threads=yes flag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Devendra
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, 16 January 2012, 11:55
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may I have your help on a strange problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; High performance computing is new to me and I have not much idea about
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI and OpenFoam (OF) which uses the &quot;mpirun&quot; command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to support the OF application in my company and have been trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; find the problem since about 1 week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 11.3 x86_64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux some weeks ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed OF 2.0.1 according to the vendors instructions at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here the problem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The experienced user tested the OF with a test case out of one of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendors tutorials.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He only used the computing power of his local machine &quot;caelde04&quot; , no other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computers were accessed by mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; He found no problem when testing in single &quot;processor mode&quot; but in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;multiprocessor mode&quot; his calculations hangs when he distributes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the calculations to more than 2 CPUs. The OF vendor thinks this is an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI problem somehow and that is why I am trying to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help from this forum here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I attached 2 files, one is the &quot;decomposeParDict&quot; which resides in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;system&quot; subdirectory of his test case and the other is the log file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the &quot;decomposePar&quot; command and the mpirun command &quot;mpirun -np 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interFoam -parallel&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have an idea where the problem is or how I can narrow it down?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks much for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18200.php">Robert garcia: "[OMPI users] How to configure Intel Visual Fortran to work with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="18198.php">Victor Pomponiu: "[OMPI users] MPI_Type_struct for template class with dynamic arrays and objs. instantiated from other classes"</a>
<li><strong>In reply to:</strong> <a href="18197.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Reply:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
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
