<?
$subject_val = "Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 09:38:17 2012" -->
<!-- isoreceived="20120119143817" -->
<!-- sent="Thu, 19 Jan 2012 09:38:08 -0500" -->
<!-- isosent="20120119143808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )" -->
<!-- id="A6DCF052-850E-422B-94F4-3E85DCED28FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="088B9CB56632924D9EAE7A408BB76580845AA2D3AF_at_GVW1102EXC.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 09:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18212.php">Jeff Squyres: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The thought occurs to me... (disclaimer: I know just about zero about OpenFoam and how to install/use it)
<br>
<p>If your customer has been dealing with binaries, I wonder if there is some kind of ABI incompatibility going on here.  Open MPI did not provide any ABI guarantees until Open MPI v1.3.2 -- see <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for details.
<br>
<p>Also, Open MPI v1.3.2 is a bit old.  There have been many bug fixes since then -- 1.4.4 is the latest stable.  There will be a 1.4.5 shortly, but that will be the last on the 1.4 series.
<br>
<p><p>On Jan 19, 2012, at 5:51 AM, Theiner, Andre wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have to stop my investigations and repairs on the request of my customer.
</span><br>
<span class="quotelev1">&gt; I will unsubscribe from this list soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found out that OpenFoam does not use threaded MPI-calls.
</span><br>
<span class="quotelev1">&gt; My next step would have been to compile openmpi-1.4.4 and have the user try this.
</span><br>
<span class="quotelev1">&gt; In case it would have also not worked I would have compiled the whole OpenFoam from the sources.
</span><br>
<span class="quotelev1">&gt; Up to now the user uses a rpm binary version of OF 2.0.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for all your  support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andre
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Theiner, Andre
</span><br>
<span class="quotelev1">&gt; Sent: Mittwoch, 18. Januar 2012 10:15
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: RE: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )
</span><br>
<span class="quotelev1">&gt; Importance: High
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jeff and Ralph for your good help.
</span><br>
<span class="quotelev1">&gt; I do not know yet, whether OpenFoam uses threads with OpenMPI but I will find out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran &quot;ompi_info&quot; and it output the lines in the next chapter.
</span><br>
<span class="quotelev1">&gt; The important line is &quot; Thread support: posix (mpi: no, progress: no)&quot;.
</span><br>
<span class="quotelev1">&gt; At first sight the above line made me think that I found the cause of the problem
</span><br>
<span class="quotelev1">&gt; but I compared the output to the output of the same command run on another machine
</span><br>
<span class="quotelev1">&gt; where OpenFoam runs fine. The OpenMPI version of that machine is 1.3.2-1.1 and it
</span><br>
<span class="quotelev1">&gt; also does not have thread support.
</span><br>
<span class="quotelev1">&gt; The difference though is that that machine's OpenFoam version is 1.7.1 and not 2.0.1 and the
</span><br>
<span class="quotelev1">&gt; OS is SUSE Linux Enterprise Desktop 11 SP1 and not openSUSE 11.3.
</span><br>
<span class="quotelev1">&gt; So I am at the beginning of the search for the cause of the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Package: Open MPI abuild_at_build30 Distribution
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3.2
</span><br>
<span class="quotelev1">&gt;   Open MPI SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;   Open MPI release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;                Open RTE: 1.3.2
</span><br>
<span class="quotelev1">&gt;   Open RTE SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;   Open RTE release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;                    OPAL: 1.3.2
</span><br>
<span class="quotelev1">&gt;       OPAL SVN revision: r21054
</span><br>
<span class="quotelev1">&gt;       OPAL release date: Apr 21, 2009
</span><br>
<span class="quotelev1">&gt;            Ident string: 1.3.2
</span><br>
<span class="quotelev1">&gt;                  Prefix: /usr/lib64/mpi/gcc/openmpi
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt;          Configure host: build30
</span><br>
<span class="quotelev1">&gt;           Configured by: abuild
</span><br>
<span class="quotelev1">&gt;           Configured on: Fri Sep 23 05:58:54 UTC 2011
</span><br>
<span class="quotelev1">&gt;          Configure host: build30
</span><br>
<span class="quotelev1">&gt;                Built by: abuild
</span><br>
<span class="quotelev1">&gt;                Built on: Fri Sep 23 06:11:31 UTC 2011
</span><br>
<span class="quotelev1">&gt;              Built host: build30
</span><br>
<span class="quotelev1">&gt;              C bindings: yes
</span><br>
<span class="quotelev1">&gt;            C++ bindings: yes
</span><br>
<span class="quotelev1">&gt;      Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev1">&gt;      Fortran90 bindings: yes
</span><br>
<span class="quotelev1">&gt; Fortran90 bindings size: small
</span><br>
<span class="quotelev1">&gt;              C compiler: gcc
</span><br>
<span class="quotelev1">&gt;     C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt;            C++ compiler: g++
</span><br>
<span class="quotelev1">&gt;   C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev1">&gt;      Fortran77 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran77 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;      Fortran90 compiler: gfortran
</span><br>
<span class="quotelev1">&gt;  Fortran90 compiler abs: /usr/bin/gfortran
</span><br>
<span class="quotelev1">&gt;             C profiling: yes
</span><br>
<span class="quotelev1">&gt;           C++ profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran77 profiling: yes
</span><br>
<span class="quotelev1">&gt;     Fortran90 profiling: yes
</span><br>
<span class="quotelev1">&gt;          C++ exceptions: no
</span><br>
<span class="quotelev1">&gt;          Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev1">&gt;           Sparse Groups: no
</span><br>
<span class="quotelev1">&gt;  Internal debug support: no
</span><br>
<span class="quotelev1">&gt;     MPI parameter check: runtime
</span><br>
<span class="quotelev1">&gt; Memory profiling support: no
</span><br>
<span class="quotelev1">&gt; Memory debugging support: no
</span><br>
<span class="quotelev1">&gt;         libltdl support: yes
</span><br>
<span class="quotelev1">&gt;   Heterogeneous support: no
</span><br>
<span class="quotelev1">&gt; mpirun default --prefix: no
</span><br>
<span class="quotelev1">&gt;         MPI I/O support: yes
</span><br>
<span class="quotelev1">&gt;       MPI_WTIME support: gettimeofday
</span><br>
<span class="quotelev1">&gt; Symbol visibility support: yes
</span><br>
<span class="quotelev1">&gt;   FT Checkpoint support: no  (checkpoint thread: no)
</span><br>
<span class="quotelev1">&gt;           MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA memory: ptmalloc2 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;           MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: auto_detect (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA carto: file (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;           MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA timer: linux (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;         MCA installdirs: config (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA dpm: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA pubsub: orte (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;           MCA allocator: bucket (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: hierarch (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: inter (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: sync (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA coll: tuned (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                  MCA io: romio (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: fake (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA mpool: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: cm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: csum (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: ob1 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA pml: v (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA bml: r2 (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA rcache: vma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: self (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: sm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA btl: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA topo: unity (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: pt2pt (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA osc: rdma (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: orted (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA iof: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                MCA odls: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ras: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: rank_file (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: round_robin (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA rmaps: seq (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: binomial (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: direct (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA routed: linear (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA plm: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;               MCA filem: rsh (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;              MCA errmgr: default (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: env (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: hnp (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: singleton (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: slurm (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;                 MCA ess: tool (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: bad (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt;             MCA grpcomm: basic (MCA v2.0, API v2.0, Component v1.3.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also have requested the user to run the following adaption to his original
</span><br>
<span class="quotelev1">&gt; command &quot;mpriun -np 9 interFoam -parallel&quot;. I hoped to get a kind of debug output
</span><br>
<span class="quotelev1">&gt; which points me into the right way. The new command did not work and I am a bit lost.
</span><br>
<span class="quotelev1">&gt; Is the syntax wrong somehow or is there a problem in the user's PATH?
</span><br>
<span class="quotelev1">&gt; I do not understand what debugger is wanted. Does mpirun not have an internal debugger?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; testuser_at_caelde04:~/OpenFOAM/testuser-2.0.1/nozzleFlow2D&gt; mpirun -v --debug --debug-daemons -np 9 interfoam -parallel
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A suitable debugger could not be found in your PATH.
</span><br>
<span class="quotelev1">&gt; Check the values specified in the orte_base_user_debugger MCA parameter for the list of debuggers that was searched.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gruss/Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andre
</span><br>
<span class="quotelev1">&gt; Tel. 05362-936222
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Dienstag, 17. Januar 2012 22:53
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should probably also run the ompi_info command; it tells you details about your installation, and how it was configured.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it known that OpenFoam uses threads with MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 9:08 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You might first just try running a simple MPI &quot;hello&quot; to verify the installation. I don't know if OF is threaded or not.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my iPad
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 17, 2012, at 5:22 AM, John Hearns &lt;hearnsj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Andre,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should not need the OpenMPI sources.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Install the openmpi-devel package from the same source
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (zypper install openmpi-devel if you have that science repository enabled)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will give you the mpi.h file and other include files, libraries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and manual pages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is a convention in Suse-style distros - the devel package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contains the stuf you need to 'develop'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 17/01/2012, Theiner, Andre &lt;andre.theiner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Devendra,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks for your interesting answer, up to now I expected to get a fully
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; operational openmpi installation package
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by installing openmpi from the &quot;science&quot; repository (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://download.opensuse.org/repositories/science/openSUSE_11.3">http://download.opensuse.org/repositories/science/openSUSE_11.3</a>&quot; ).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To compile your script I need to have the openmpi sources which I do not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have at present, I will try to get them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do I compile and build using multiple processors?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a special flag which tells the compiler to care for multiple CPUs?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Behalf Of devendra rai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Montag, 16. Januar 2012 13:25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello Andre,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It may be possible that your openmpi does not support threaded MPI-calls (if
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these are happening). I had a similar problem, and it was traced to this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cause. If you installed your openmpi from available repositories, chances
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are that you do not have thread-support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's a small script that you can use to determine whether or not you have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread support:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int myrank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int desired_thread_support = MPI_THREAD_MULTIPLE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int provided_thread_support;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;provided_thread_support);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* check if the thread support has been provided */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if (provided_thread_support!=desired_thread_support)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    std::cout &lt;&lt; &quot;MPI thread support not available! Aborted. &quot; &lt;&lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    exit(-1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Compile and build as usual, using multiple processors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maybe this helps. If you do discover that you do not have support available,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you will need to rebuild MPI with --enable-mpi-threads=yes flag.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Devendra
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: &quot;Theiner, Andre&quot; &lt;andre.theiner_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: &quot;users_at_[hidden]&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Monday, 16 January 2012, 11:55
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] mpirun hangs when used on more than 2 CPUs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; may I have your help on a strange problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High performance computing is new to me and I have not much idea about
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI and OpenFoam (OF) which uses the &quot;mpirun&quot; command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have to support the OF application in my company and have been trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find the problem since about 1 week.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The versions are openmpi-1.3.2 and OF 2.0.1 which are running on openSUSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 11.3 x86_64.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The computer is brand new, has 96 GB RAM, 12 CPUs and was installed with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux some weeks ago.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I installed OF 2.0.1 according to the vendors instructions at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.openfoam.org/archive/2.0.1/download/suse.php">http://www.openfoam.org/archive/2.0.1/download/suse.php</a>.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here the problem:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The experienced user tested the OF with a test case out of one of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; vendors tutorials.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; He only used the computing power of his local machine &quot;caelde04&quot; , no other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computers were accessed by mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; He found no problem when testing in single &quot;processor mode&quot; but in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;multiprocessor mode&quot; his calculations hangs when he distributes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the calculations to more than 2 CPUs. The OF vendor thinks this is an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI problem somehow and that is why I am trying to get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help from this forum here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I attached 2 files, one is the &quot;decomposeParDict&quot; which resides in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;system&quot; subdirectory of his test case and the other is the log file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the &quot;decomposePar&quot; command and the mpirun command &quot;mpirun -np 9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interFoam -parallel&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you have an idea where the problem is or how I can narrow it down?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks much for any help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andre
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18212.php">Jeff Squyres: "Re: [OMPI users] system() call corrupts MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18210.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
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
