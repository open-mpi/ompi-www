<?
$subject_val = "Re: [OMPI users] Problems in compiling a code with dynamic linking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 23:43:13 2016" -->
<!-- isoreceived="20160324034313" -->
<!-- sent="Thu, 24 Mar 2016 03:43:00 +0000" -->
<!-- isosent="20160324034300" -->
<!-- name="Elio Physics" -->
<!-- email="Elio-Physics_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in compiling a code with dynamic linking" -->
<!-- id="BLUPR10MB0754D47FDD81D55C91DEF7FEEA820_at_BLUPR10MB0754.namprd10.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56F34F70.3050604_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-03-23 23:43:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles,
<br>
<p><p>thanks for your reply and your options. I have tried the first option, hich for me basically is the easiest. I have compiled using &quot;make.inc&quot; but now setting  LIB = -L/opt/intel/mkl/lib/intel64 -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  -lmkl_sequential
<br>
<p><p>Every went well. Then I tried the PBS script wjere I have added  these two lines:
<br>
<p><p>source /opt/intel/mkl/bin/mklvars.sh
<br>
export LD_LIBRARY_PATH=/opt/intel/mkl/bin/mklvars.sh
<br>
<p><p>But i still get the same error:
<br>
<p><p>/opt/intel/mkl/bin/mklvars.sh: No such file or directory
<br>
/home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading shared libraries: libmkl_intel_lp64.so: cannot open shared object file: No such file or directory
<br>
<p><p><p>I just cannot understand why is it giving the same error and why it could not find the file : /opt/intel/mkl/bin/mklvars.sh although the link is true!
<br>
<p><p>Any advice please?
<br>
<p><p>Thanks
<br>
<p><p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
Sent: Thursday, March 24, 2016 12:22 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problems in compiling a code with dynamic linking
<br>
<p>Elio,
<br>
<p>it seems /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh is only available on your login/frontend nodes,
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
on your login node, and explicitly set the LD_LIBRARY_PATH in your PBS script
<br>
<p>if /opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 is available on your compute nodes, you might want to append
<br>
-Wl,-rpath,/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64
<br>
to LIB
<br>
/* if you do that, keep in mind you might not automatically use the most up to date mkl lib when they get upgraded by your sysadmin */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/24/2016 11:03 AM, Elio Physics wrote:
<br>
<p>Dear all,
<br>
<p><p>I have been trying ,for the last week, compiling a code (SPRKKR). the compilation went through ok. however, there are problems with the executable (kkrscf6.3MPI) not finding the MKL library links. i could not fix the problem..I have tried several things but in vain..I will post both the &quot;make&quot; file and the &quot;PBS&quot; script file. Please can anyone help me in this? the error I am getting is:
<br>
<p><p>&nbsp;/opt/intel/composer_xe_2013_sp1/bin/compilervars.sh: No such file or directory
<br>
/home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading shared libraries: libmkl_intel_lp64.so: cannot open shared object file: No such file or directory
<br>
/home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading shared libraries: libmkl_intel_lp64.so: cannot open shared object file: No such file or directory
<br>
/home/emoujaes/Elie/SPRKKR/bin/kkrscf6.3MPI: error while loading shared libraries: libmkl_intel_lp64.so: cannot open shared object file: No such file or directory
<br>
<p><p><p>make file :
<br>
<p><p>###############################################################################
<br>
# Here the common makefile starts which does depend on the OS              ####
<br>
###############################################################################
<br>
#
<br>
#  FC:          compiler name and common options e.g. f77 -c
<br>
#  LINK:        linker name and common options e.g. g77 -shared
<br>
#  FFLAGS:      optimization e.g. -O3
<br>
# OP0:         force nooptimisation for some routiens e.g. -O0
<br>
#  VERSION:     additional string for executable e.g. 6.3.0
<br>
#  LIB:         library names   e.g. -L/usr/lib -latlas -lblas -llapack
<br>
#               (lapack and blas libraries are needed)
<br>
#  BUILD_TYPE:  string &quot;debug&quot; switches on debugging options
<br>
#               (NOTE: you may call, e.g. &quot;make scf BUILD_TYPE=debug&quot;
<br>
#                to produce executable with debugging flags from command line)
<br>
#  BIN:         directory for executables
<br>
#  INCLUDE:     directory for include files
<br>
#               (NOTE: directory with mpi include files has to be properly set
<br>
#                even for sequential executable)
<br>
###############################################################################
<br>
<p>BUILD_TYPE ?=
<br>
#BUILD_TYPE := debug
<br>
<p>VERSION = 6.3
<br>
<p>ifeq ($(BUILD_TYPE), debug)
<br>
&nbsp;VERSION := $(VERSION)$(BUILD_TYPE)
<br>
endif
<br>
<p>BIN =~/Elie/SPRKKR/bin
<br>
#BIN=~/bin
<br>
#BIN=/tmp/$(USER)
<br>
<p><p><p>LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  -lmkl_sequential
<br>
<p><p># Include mpif.h
<br>
INCLUDE =-I/usr/include/openmpi-x86_64
<br>
<p><p>#FFLAGS
<br>
FFLAGS = -O2
<br>
<p><p>FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
<br>
LINK = mpif90   $(FFLAGS) $(INCLUDE)
<br>
<p>MPI=MPI
<br>
<p><p><p>PBS script:
<br>
<p><p>BIN =~/Elie/SPRKKR/bin
<br>
#BIN=~/bin
<br>
#BIN=/tmp/$(USER)
<br>
<p><p><p>LIB = -L/opt/intel/composer_xe_2013_sp1/mkl/lib/intel64 -lmkl_blas95_lp64 -lmkl_lapack95_lp64 -lmkl_intel_lp64 -lmkl_core  -lmkl_sequential
<br>
<p><p># Include mpif.h
<br>
INCLUDE =-I/usr/include/openmpi-x86_64
<br>
<p><p>#FFLAGS
<br>
FFLAGS = -O2
<br>
<p><p>FC   = mpif90 -c $(FFLAGS) $(INCLUDE)
<br>
LINK = mpif90   $(FFLAGS) $(INCLUDE)
<br>
<p>MPI=MPI
<br>
<p>[emoujaes_at_jlborges SPRKKR]$ cd Fe
<br>
[emoujaes_at_jlborges Fe]$ ls
<br>
Fe.inp  Fe.pbs  Fescf.e50505  Fescf.o50505  scf-50505.jlborges.fisica.ufmg.br.out
<br>
[emoujaes_at_jlborges Fe]$ more Fe.pbs
<br>
#PBS -S /bin/bash
<br>
#PBS -l nodes=1:ppn=8
<br>
#PBS -l walltime=70:00:00
<br>
#PBS -N Fescf
<br>
<p><p># procura o nome o input baseado no nome do job (linha #PBS -N xxx acima).
<br>
INP=Fe.inp
<br>
<p>OUT=scf-$PBS_JOBID.out
<br>
<p>## Configura o no de calculo
<br>
<p>source /opt/intel/composer_xe_2013_sp1/bin/compilervars.sh
<br>
<p>module load libraries/openmpi-1.5.4/gnu-4.4
<br>
#ormacoes do job no arquivo de saida
<br>
qstat -an -u $USER
<br>
cat $PBS_NODEFILE
<br>
<p><p>########################################
<br>
#-------  Inicio do trabalho     ----- #
<br>
########################################
<br>
<p><p>## executa o programa
<br>
cd $PBS_O_WORKDIR
<br>
<p>export OMP_NUM_THREADS=1
<br>
<p>mpirun ~/Elie/SPRKKR/bin/kkrscf6.3MPI $INP &gt; $OUT
<br>
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28812.php">http://www.open-mpi.org/community/lists/users/2016/03/28812.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28814/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>In reply to:</strong> <a href="28813.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
<li><strong>Reply:</strong> <a href="28815.php">Gilles Gouaillardet: "Re: [OMPI users] Problems in compiling a code with dynamic linking"</a>
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
