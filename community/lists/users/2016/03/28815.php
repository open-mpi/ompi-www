<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 00:01:55 2016" -->
<!-- isoreceived="20160324040155" -->
<!-- sent="Thu, 24 Mar 2016 13:01:50 +0900" -->
<!-- isosent="20160324040150" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="56F366AE.2050906_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLUPR10MB0754D47FDD81D55C91DEF7FEEA820_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-24 00:01:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elio,
<br>
<p>usually, /opt is a local filesystem, so it is possible /opt/intel is 
<br>
only available on your login nodes.
<br>
<p>your best option is to ask your sysadmin where the mkl libs are on the 
<br>
compute nodes, and/or how to use mkl in your jobs.
<br>
<p>feel free to submit a dumb pbs script
<br>
ls -l /opt
<br>
ls -l /opt/intel
<br>
ls -l /opt/intel/mkl
<br>
so you can hopefully find that by yourself.
<br>
<p>an other option is to use the static mkl libs if they are available
<br>
for example, your LIB line could be
<br>
<p>LIB = -static -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 
<br>
-lmkl_blas95_lp64 -lmkl_lapack95_lp64  -lmkl_intel_lp64 -lmkl_core 
<br>
-lmkl_sequential -dynamic
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/24/2016 12:43 PM, Elio Physics wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your reply and your options. I have tried the first option, 
</span><br>
<span class="quotelev1">&gt; hich for me basically is the easiest. I have compiled using &quot;make.inc&quot; 
</span><br>
<span class="quotelev1">&gt; but now setting  LIB = -L/opt/intel/mkl/lib/intel64 -lmkl_blas95_lp64 
</span><br>
<span class="quotelev1">&gt; -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core -lmkl_sequential
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Every went well. Then I tried the PBS script wjere I have added  these 
</span><br>
<span class="quotelev1">&gt; two lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i still get the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/intel/mkl/bin/mklvars.sh: No such file or directory
</span><br>
<span class="quotelev1">&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading 
</span><br>
<span class="quotelev1">&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object 
</span><br>
<span class="quotelev1">&gt; file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just cannot understand why is it giving the same error and why it 
</span><br>
<span class="quotelev1">&gt; could not find the file : /opt/intel/mkl/bin/mklvars.sh although the 
</span><br>
<span class="quotelev1">&gt; link is true!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, March 24, 2016 12:22 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Problems in compiling a code with dynamic 
</span><br>
<span class="quotelev1">&gt; linking
</span><br>
<span class="quotelev1">&gt; Elio,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh is only 
</span><br>
<span class="quotelev1">&gt; available on your login/frontend nodes,
</span><br>
<span class="quotelev1">&gt; but not on your compute nodes.
</span><br>
<span class="quotelev1">&gt; you might be luckier with
</span><br>
<span class="quotelev1">&gt; /opt/intel/mkl/bin/mklvars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; an other option is to
</span><br>
<span class="quotelev1">&gt; ldd /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
</span><br>
<span class="quotelev1">&gt; on your login node, and explicitly set the LD_LIBRARY_PATH in your PBS 
</span><br>
<span class="quotelev1">&gt; script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if /opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 is available on 
</span><br>
<span class="quotelev1">&gt; your compute nodes, you might want to append
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; to LIB
</span><br>
<span class="quotelev1">&gt; /* if you do that, keep in mind you might not automatically use the 
</span><br>
<span class="quotelev1">&gt; most up to date mkl lib when they get upgraded by your sysadmin */
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
<span class="quotelev1">&gt; On 3/24/2016 11:03 AM, Elio Physics wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been trying ,for the last week, compiling a code (SPRKKR). the 
</span><br>
<span class="quotelev2">&gt;&gt; compilation went through ok. however, there are problems with the 
</span><br>
<span class="quotelev2">&gt;&gt; executable (kkrscf6.3MPI) not finding the MKL library links. i could 
</span><br>
<span class="quotelev2">&gt;&gt; not fix the problem..I have tried several things but in vain..I will 
</span><br>
<span class="quotelev2">&gt;&gt; post both the &quot;make&quot; file and the &quot;PBS&quot; script file. Please can 
</span><br>
<span class="quotelev2">&gt;&gt; anyone help me in this? the error I am getting is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading 
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object 
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading 
</span><br>
<span class="quotelev2">&gt;&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object 
</span><br>
<span class="quotelev2">&gt;&gt; file: No such file or directory
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
<span class="quotelev2">&gt;&gt; _make file :_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev2">&gt;&gt; # Here the common makefile starts which does depend on the 
</span><br>
<span class="quotelev2">&gt;&gt; OS              ####
</span><br>
<span class="quotelev2">&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #  FC:          compiler name and common options e.g. f77 -c
</span><br>
<span class="quotelev2">&gt;&gt; #  LINK:        linker name and common options e.g. g77 -shared
</span><br>
<span class="quotelev2">&gt;&gt; #  FFLAGS:      optimization e.g. -O3
</span><br>
<span class="quotelev2">&gt;&gt; # OP0:         force nooptimisation for some routiens e.g. -O0
</span><br>
<span class="quotelev2">&gt;&gt; #  VERSION:     additional string for executable e.g. 6.3.0
</span><br>
<span class="quotelev2">&gt;&gt; #  LIB:         library names   e.g. -L/usr/lib -latlas -lblas -llapack
</span><br>
<span class="quotelev2">&gt;&gt; #               (lapack and blas libraries are needed)
</span><br>
<span class="quotelev2">&gt;&gt; #  BUILD_TYPE:  string &quot;debug&quot; switches on debugging options
</span><br>
<span class="quotelev2">&gt;&gt; #               (NOTE: you may call, e.g. &quot;make scf BUILD_TYPE=debug&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #                to produce executable with debugging flags from 
</span><br>
<span class="quotelev2">&gt;&gt; command line)
</span><br>
<span class="quotelev2">&gt;&gt; #  BIN:         directory for executables
</span><br>
<span class="quotelev2">&gt;&gt; #  INCLUDE:     directory for include files
</span><br>
<span class="quotelev2">&gt;&gt; #               (NOTE: directory with mpi include files has to be 
</span><br>
<span class="quotelev2">&gt;&gt; properly set
</span><br>
<span class="quotelev2">&gt;&gt; #                even for sequential executable)
</span><br>
<span class="quotelev2">&gt;&gt; ###############################################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BUILD_TYPE ?=
</span><br>
<span class="quotelev2">&gt;&gt; #BUILD_TYPE := debug
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; VERSION = 6.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev2">&gt;&gt;  VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=~/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 
</span><br>
<span class="quotelev2">&gt;&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  
</span><br>
<span class="quotelev2">&gt;&gt; -lmkl_sequential
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Include mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS = -O2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI=MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _PBS script:_
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=~/bin
</span><br>
<span class="quotelev2">&gt;&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 
</span><br>
<span class="quotelev2">&gt;&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  
</span><br>
<span class="quotelev2">&gt;&gt; -lmkl_sequential
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Include mpif.h
</span><br>
<span class="quotelev2">&gt;&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; FFLAGS = -O2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI=MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [emoujaes_at_jlborges SPRKKR]$ cd Fe
</span><br>
<span class="quotelev2">&gt;&gt; [emoujaes_at_jlborges Fe]$ ls
</span><br>
<span class="quotelev2">&gt;&gt; Fe.inp  Fe.pbs  Fescf.e50505  Fescf.o50505 
</span><br>
<span class="quotelev2">&gt;&gt; scf-50505.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev2">&gt;&gt; [emoujaes_at_jlborges Fe]$ more Fe.pbs
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l walltime=70:00:00
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N Fescf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # procura o nome o input baseado no nome do job (linha #PBS -N xxx 
</span><br>
<span class="quotelev2">&gt;&gt; acima).
</span><br>
<span class="quotelev2">&gt;&gt; INP=Fe.inp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OUT=scf-$PBS_JOBID.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## Configura o no de calculo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; source /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; module load libraries/openmpi-1.5.4/gnu-4.4
</span><br>
<span class="quotelev2">&gt;&gt; #ormacoes do job no arquivo de saida
</span><br>
<span class="quotelev2">&gt;&gt; qstat -an -u $USER
</span><br>
<span class="quotelev2">&gt;&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ########################################
</span><br>
<span class="quotelev2">&gt;&gt; #-------  Inicio do trabalho     ----- #
</span><br>
<span class="quotelev2">&gt;&gt; ########################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ## executa o programa
</span><br>
<span class="quotelev2">&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI $INP &gt; $OUT
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28812.php">http://www.open-mpi.org/community/lists/users/2016/03/28812.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28814.php">http://www.open-mpi.org/community/lists/users/2016/03/28814.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28817.php">Tim Prince: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28821.php">Gus Correa: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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
