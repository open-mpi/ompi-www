<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 25 00:45:21 2016" -->
<!-- isoreceived="20160325044521" -->
<!-- sent="Fri, 25 Mar 2016 04:45:18 +0000" -->
<!-- isosent="20160325044518" -->
<!-- name="Elio Physics" -->
<!-- email="Elio-Physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="BLUPR10MB075455E232A7E64E65442058EA830_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56F4330B.4070307_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in compiling a code with dynamic linking<br>
<strong>From:</strong> Elio Physics (<em>Elio-Physics_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-25 00:45:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First of all, I really want to thank Gilles, Thomas and Gus for their time in helping me as much as possible with my problem.
<br>
<p>Problem was resolved. Actually, i have forgotten to include the libraries in the PBS script.. The cluster we have provides modules of libraries such as :
<br>
<p>compilers/intel-12.1                   libraries/mkl-11.2/intel-15.0                          
<br>
compilers/intel-14.0                   libraries/netcdf/4.3-intel-15.0        
<br>
compilers/intel-15.0                   libraries/openmpi/1.8-gnu-4.4         
<br>
compilers/pgi-12.5                     libraries/openmpi/1.8-intel-12.1     
<br>
libraries/fftw/3.3-gnu-4.4             libraries/openmpi/1.8-intel-14.0     
<br>
libraries/hdf5/1.8-intel-15.0          libraries/openmpi/1.8-intel-15.0       
<br>
libraries/impi/5.0-intel-15.0          libraries/openmpi/1.8-pgi-12.5        
<br>
libraries/libxc/2.2-intel-15.0         libraries/openmpi-1.5.4/gnu-4.4        
<br>
libraries/mkl-10.3/intel-12.1          libraries/wannier/1.2-intel-15.0       
<br>
libraries/mkl-11.0/intel-14.0          libraries/wannier/2.0-intel-15.0  
<br>
<p>Including module load (librariries that I used in compilation) in the PBS script solved everything.
<br>
<p><p>________________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gus Correa &lt;gus_at_[hidden]&gt;
<br>
Sent: Thursday, March 24, 2016 4:33 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problems in compiling a code with dynamic linking
<br>
<p>Hi Elie
<br>
<p>Besides Gilles' and Thomas' suggestions:
<br>
<p>1) Do you have any file system in your cluster head node that is an
<br>
NFS export, and presumably mounted on the compute nodes?
<br>
<p>If you do, that would be the best place to install the Intel compiler.
<br>
This would make it available on the compute nodes, and the
<br>
compilervars.sh script would be OK everywhere.
<br>
Say, something like /my/nfs/shared/software/intel/version
<br>
<p>You will need to append the corresponding bin
<br>
subdirectories to your PATH, and the corresponding
<br>
lib subdirectories to your LD_LIBRARY_PATH.
<br>
<p>Actually, in a small cluster, that is the best/easy location to install
<br>
any software applications that need to be shared by all nodes,
<br>
and this includes compilers, MPI (Open MPI), etc.
<br>
<p>Installing applications in /opt or /usr/local, which as Gilles' said
<br>
are local to each node, is sure to put you in a dead end.
<br>
Everything will be only available on the head node, nothing on the
<br>
compute nodes.
<br>
<p>Often times the person that installed the cluster first time
<br>
didn't realize this, and only made /home an NFS share,
<br>
and now (s)he doesn't have any free disk or disk partition to make
<br>
an additional NFS share for software.
<br>
In this case the remedy is to install such software applications
<br>
in, say, /home/software.
<br>
<p>**
<br>
<p>2) As Gilles' said, /opt is a local file system, you have one on the
<br>
head node, where the compiler was installed, and a (different) /opt
<br>
on each compute node (where there is no compiler installed).
<br>
<p>Hence, even Thomas' suggestion is unlikely to work, because there is no
<br>
intel compiler on compute_node:/opt.
<br>
<p>A brute force solution would be to install the Intel compiler on all
<br>
nodes, on /opt, but this is not very nice (and a maintenance/consistency
<br>
nightmare).
<br>
<p>You could also install only the Intel runtime libraries on the nodes'
<br>
/opt, which *probably* will work:
<br>
<p><a href="https://software.intel.com/en-us/articles/intelr-composer-redistributable-libraries-by-version">https://software.intel.com/en-us/articles/intelr-composer-redistributable-libraries-by-version</a>
<br>
<p>**
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 03/24/2016 12:01 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Elio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; usually, /opt is a local filesystem, so it is possible /opt/intel is
</span><br>
<span class="quotelev1">&gt; only available on your login nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your best option is to ask your sysadmin where the mkl libs are on the
</span><br>
<span class="quotelev1">&gt; compute nodes, and/or how to use mkl in your jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; feel free to submit a dumb pbs script
</span><br>
<span class="quotelev1">&gt; ls -l /opt
</span><br>
<span class="quotelev1">&gt; ls -l /opt/intel
</span><br>
<span class="quotelev1">&gt; ls -l /opt/intel/mkl
</span><br>
<span class="quotelev1">&gt; so you can hopefully find that by yourself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option is to use the static mkl libs if they are available
</span><br>
<span class="quotelev1">&gt; for example, your LIB line could be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIB = -static -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64  -lmkl_intel_lp64 -lmkl_core
</span><br>
<span class="quotelev1">&gt; -lmkl_sequential -dynamic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/24/2016 12:43 PM, Elio Physics wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your reply and your options. I have tried the first option,
</span><br>
<span class="quotelev2">&gt;&gt; hich for me basically is the easiest. I have compiled using &quot;make.inc&quot;
</span><br>
<span class="quotelev2">&gt;&gt; but now setting  LIB = -L/opt/intel/mkl/lib/intel64 -lmkl_blas95_lp64
</span><br>
<span class="quotelev2">&gt;&gt; -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core -lmkl_sequential
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Every went well. Then I tried the PBS script wjere I have added  these
</span><br>
<span class="quotelev2">&gt;&gt; two lines:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source /opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=/opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But i still get the same error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/mkl/bin/mklvars.sh: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just cannot understand why is it giving the same error and why it
</span><br>
<span class="quotelev2">&gt;&gt; could not find the file : /opt/intel/mkl/bin/mklvars.sh although the
</span><br>
<span class="quotelev2">&gt;&gt; link is true!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice please?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles
</span><br>
<span class="quotelev2">&gt;&gt; Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Thursday, March 24, 2016 12:22 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] Problems in compiling a code with dynamic
</span><br>
<span class="quotelev2">&gt;&gt; linking
</span><br>
<span class="quotelev2">&gt;&gt; Elio,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it seems /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh is only
</span><br>
<span class="quotelev2">&gt;&gt; available on your login/frontend nodes,
</span><br>
<span class="quotelev2">&gt;&gt; but not on your compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt; you might be luckier with
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; an other option is to
</span><br>
<span class="quotelev2">&gt;&gt; ldd /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
</span><br>
<span class="quotelev2">&gt;&gt; on your login node, and explicitly set the LD_LIBRARY_PATH in your PBS
</span><br>
<span class="quotelev2">&gt;&gt; script
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if /opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 is available on
</span><br>
<span class="quotelev2">&gt;&gt; your compute nodes, you might want to append
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath,/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt; to LIB
</span><br>
<span class="quotelev2">&gt;&gt; /* if you do that, keep in mind you might not automatically use the
</span><br>
<span class="quotelev2">&gt;&gt; most up to date mkl lib when they get upgraded by your sysadmin */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/24/2016 11:03 AM, Elio Physics wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been trying ,for the last week, compiling a code (SPRKKR). the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation went through ok. however, there are problems with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; executable (kkrscf6.3MPI) not finding the MKL library links. i could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not fix the problem..I have tried several things but in vain..I will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post both the &quot;make&quot; file and the &quot;PBS&quot; script file. Please can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone help me in this? the error I am getting is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh: No such file or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _make file :_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Here the common makefile starts which does depend on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS              ####
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  FC:          compiler name and common options e.g. f77 -c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  LINK:        linker name and common options e.g. g77 -shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  FFLAGS:      optimization e.g. -O3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # OP0:         force nooptimisation for some routiens e.g. -O0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  VERSION:     additional string for executable e.g. 6.3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  LIB:         library names   e.g. -L/usr/lib -latlas -lblas -llapack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #               (lapack and blas libraries are needed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  BUILD_TYPE:  string &quot;debug&quot; switches on debugging options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #               (NOTE: you may call, e.g. &quot;make scf BUILD_TYPE=debug&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #                to produce executable with debugging flags from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command line)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  BIN:         directory for executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #  INCLUDE:     directory for include files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #               (NOTE: directory with mpi include files has to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #                even for sequential executable)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BUILD_TYPE ?=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BUILD_TYPE := debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VERSION = 6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BIN=~/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lmkl_sequential
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Include mpif.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #FFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS = -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI=MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _PBS script:_
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BIN=~/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lmkl_sequential
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Include mpif.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #FFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS = -O2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI=MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [emoujaes_at_jlborges SPRKKR]$ cd Fe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [emoujaes_at_jlborges Fe]$ ls
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fe.inp  Fe.pbs  Fescf.e50505  Fescf.o50505
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scf-50505.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [emoujaes_at_jlborges Fe]$ more Fe.pbs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -S /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l walltime=70:00:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -N Fescf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # procura o nome o input baseado no nome do job (linha #PBS -N xxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; acima).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; INP=Fe.inp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OUT=scf-$PBS_JOBID.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## Configura o no de calculo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module load libraries/openmpi-1.5.4/gnu-4.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ormacoes do job no arquivo de saida
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qstat -an -u $USER
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ########################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #-------  Inicio do trabalho     ----- #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ########################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ## executa o programa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI $INP &gt; $OUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28812.php">http://www.open-mpi.org/community/lists/users/2016/03/28812.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28814.php">http://www.open-mpi.org/community/lists/users/2016/03/28814.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28815.php">http://www.open-mpi.org/community/lists/users/2016/03/28815.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28821.php">http://www.open-mpi.org/community/lists/users/2016/03/28821.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28828.php">Ronald Cohen: "[OMPI users] loading processes per node"</a>
<li><strong>Previous message:</strong> <a href="28826.php">Gilles Gouaillardet: "Re: [OMPI users] Collective MPI-IO + MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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
