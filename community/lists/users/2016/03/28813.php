<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 22:22:46 2016" -->
<!-- isoreceived="20160324022246" -->
<!-- sent="Thu, 24 Mar 2016 11:22:40 +0900" -->
<!-- isosent="20160324022240" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="56F34F70.3050604_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLUPR10MB07549A414FACB8A90357E666EA820_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
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
<strong>Date:</strong> 2016-03-23 22:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Elio,
<br>
<p>it seems /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh is only 
<br>
available on your login/frontend nodes,
<br>
but not on your compute nodes.
<br>
you might be luckier with
<br>
/opt/intel/mkl/bin/mklvars.sh
<br>
<p>an other option is to
<br>
ldd /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI
<br>
on your login node, and explicitly set the LD_LIBRARY_PATH in your PBS 
<br>
script
<br>
<p>if /opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 is available on your 
<br>
compute nodes, you might want to append
<br>
-Wl,-rpath,/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
<br>
to LIB
<br>
/* if you do that, keep in mind you might not automatically use the most 
<br>
up to date mkl lib when they get upgraded by your sysadmin */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/24/2016 11:03 AM, Elio Physics wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been trying ,for the last week, compiling a code (SPRKKR). the 
</span><br>
<span class="quotelev1">&gt; compilation went through ok. however, there are problems with the 
</span><br>
<span class="quotelev1">&gt; executable (kkrscf6.3MPI) not finding the MKL library links. i could 
</span><br>
<span class="quotelev1">&gt; not fix the problem..I have tried several things but in vain..I will 
</span><br>
<span class="quotelev1">&gt; post both the &quot;make&quot; file and the &quot;PBS&quot; script file. Please can anyone 
</span><br>
<span class="quotelev1">&gt; help me in this? the error I am getting is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh: No such file or 
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading 
</span><br>
<span class="quotelev1">&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object 
</span><br>
<span class="quotelev1">&gt; file: No such file or directory
</span><br>
<span class="quotelev1">&gt; /home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading 
</span><br>
<span class="quotelev1">&gt; shared libraries: libmkl_intel_lp64.so: cannot open shared object 
</span><br>
<span class="quotelev1">&gt; file: No such file or directory
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
<span class="quotelev1">&gt; _make file :_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _
</span><br>
<span class="quotelev1">&gt; _
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ###############################################################################
</span><br>
<span class="quotelev1">&gt; # Here the common makefile starts which does depend on the 
</span><br>
<span class="quotelev1">&gt; OS              ####
</span><br>
<span class="quotelev1">&gt; ###############################################################################
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #  FC:          compiler name and common options e.g. f77 -c
</span><br>
<span class="quotelev1">&gt; #  LINK:        linker name and common options e.g. g77 -shared
</span><br>
<span class="quotelev1">&gt; #  FFLAGS:      optimization e.g. -O3
</span><br>
<span class="quotelev1">&gt; # OP0:         force nooptimisation for some routiens e.g. -O0
</span><br>
<span class="quotelev1">&gt; #  VERSION:     additional string for executable e.g. 6.3.0
</span><br>
<span class="quotelev1">&gt; #  LIB:         library names   e.g. -L/usr/lib -latlas -lblas -llapack
</span><br>
<span class="quotelev1">&gt; #               (lapack and blas libraries are needed)
</span><br>
<span class="quotelev1">&gt; #  BUILD_TYPE:  string &quot;debug&quot; switches on debugging options
</span><br>
<span class="quotelev1">&gt; #               (NOTE: you may call, e.g. &quot;make scf BUILD_TYPE=debug&quot;
</span><br>
<span class="quotelev1">&gt; #                to produce executable with debugging flags from 
</span><br>
<span class="quotelev1">&gt; command line)
</span><br>
<span class="quotelev1">&gt; #  BIN:         directory for executables
</span><br>
<span class="quotelev1">&gt; #  INCLUDE:     directory for include files
</span><br>
<span class="quotelev1">&gt; #               (NOTE: directory with mpi include files has to be 
</span><br>
<span class="quotelev1">&gt; properly set
</span><br>
<span class="quotelev1">&gt; #                even for sequential executable)
</span><br>
<span class="quotelev1">&gt; ###############################################################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUILD_TYPE ?=
</span><br>
<span class="quotelev1">&gt; #BUILD_TYPE := debug
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VERSION = 6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifeq ($(BUILD_TYPE), debug)
</span><br>
<span class="quotelev1">&gt;  VERSION := $(VERSION)$(BUILD_TYPE)
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev1">&gt; #BIN=~/bin
</span><br>
<span class="quotelev1">&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 
</span><br>
<span class="quotelev1">&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  
</span><br>
<span class="quotelev1">&gt; -lmkl_sequential
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Include mpif.h
</span><br>
<span class="quotelev1">&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #FFLAGS
</span><br>
<span class="quotelev1">&gt; FFLAGS = -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI=MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _PBS script:_
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _
</span><br>
<span class="quotelev1">&gt; _
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BIN =~/Elie/SPRKKR/bin
</span><br>
<span class="quotelev1">&gt; #BIN=~/bin
</span><br>
<span class="quotelev1">&gt; #BIN=/tmp/$(USER)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 
</span><br>
<span class="quotelev1">&gt; -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  
</span><br>
<span class="quotelev1">&gt; -lmkl_sequential
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Include mpif.h
</span><br>
<span class="quotelev1">&gt; INCLUDE =-I/usr/include/openmpi-x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #FFLAGS
</span><br>
<span class="quotelev1">&gt; FFLAGS = -O2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt; LINK = mpif90   $(FFLAGS) $(INCLUDE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI=MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [emoujaes_at_jlborges SPRKKR]$ cd Fe
</span><br>
<span class="quotelev1">&gt; [emoujaes_at_jlborges Fe]$ ls
</span><br>
<span class="quotelev1">&gt; Fe.inp  Fe.pbs  Fescf.e50505  Fescf.o50505 
</span><br>
<span class="quotelev1">&gt; scf-50505.jlborges.fisica.ufmg.br.out
</span><br>
<span class="quotelev1">&gt; [emoujaes_at_jlborges Fe]$ more Fe.pbs
</span><br>
<span class="quotelev1">&gt; #PBS -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=8
</span><br>
<span class="quotelev1">&gt; #PBS -l walltime=70:00:00
</span><br>
<span class="quotelev1">&gt; #PBS -N Fescf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # procura o nome o input baseado no nome do job (linha #PBS -N xxx acima).
</span><br>
<span class="quotelev1">&gt; INP=Fe.inp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OUT=scf-$PBS_JOBID.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## Configura o no de calculo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; source /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module load libraries/openmpi-1.5.4/gnu-4.4
</span><br>
<span class="quotelev1">&gt; #ormacoes do job no arquivo de saida
</span><br>
<span class="quotelev1">&gt; qstat -an -u $USER
</span><br>
<span class="quotelev1">&gt; cat $PBS_NODEFILE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ########################################
</span><br>
<span class="quotelev1">&gt; #-------  Inicio do trabalho     ----- #
</span><br>
<span class="quotelev1">&gt; ########################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ## executa o programa
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI $INP &gt; $OUT
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28812.php">http://www.open-mpi.org/community/lists/users/2016/03/28812.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28814.php">Elio Physics: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28816.php">Thomas Jahns: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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
