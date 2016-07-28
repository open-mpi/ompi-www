<?
$subject_val = "[OMPI users] Intel compiled undefined reference errors (i.e. mpi_reduce_)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 12:00:45 2013" -->
<!-- isoreceived="20130624160045" -->
<!-- sent="Mon, 24 Jun 2013 11:00:09 -0500" -->
<!-- isosent="20130624160009" -->
<!-- name="Jason Maldonis" -->
<!-- email="maldonis_at_[hidden]" -->
<!-- subject="[OMPI users] Intel compiled undefined reference errors (i.e. mpi_reduce_)" -->
<!-- id="CA+LevYKcVXcTXO97=m0RPtrPo=kQV4g94tQnadehOmtgbgPdqQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Intel compiled undefined reference errors (i.e. mpi_reduce_)<br>
<strong>From:</strong> Jason Maldonis (<em>maldonis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 12:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
<li><strong>Previous message:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
<li><strong>Reply:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I am using OpenMPI version 1.6.4 (installed with the Intel compilers) and I
<br>
am getting some undefined reference errors.
<br>
<p>First, I will give you some background.
<br>
<p>While reinstalling and upgrading our cluster, this is how I installed
<br>
openmpi:
<br>
While installing CentOS with ROCKS 6.1, openmpi was preinstalled. I left
<br>
this alone and installed the Intel compilers, and then installed openmpi
<br>
with the Intel compilers in a new directory
<br>
(/export/apps/openmpi_intel_20130618). So my understanding is that there
<br>
are now two openmpi version installed, one with gcc etc and one with the
<br>
Intel compilers.
<br>
<p>I then put our personal simulation code back onto the machine and tried to
<br>
&quot;make&quot; it. I received multiple errors, some of which I have fixed. I have
<br>
mostly done this by changing the PATH and LD_LIBRARY_PATH variables to
<br>
correctly point to the Intel version of OpenMPI. I also linked in mpi.mod
<br>
and some mpi*.h files, which may not have been the correct thing to do???
<br>
Note that these are linked to the Intel version of OpenMPI, not the GNU
<br>
version.
<br>
<p>The makefile I am using is a few years old, and I am still terrible at
<br>
understanding makefiles so there could easily be a problem in there (it is
<br>
pasted at the end).
<br>
<p>The Intel version of OpenMPI is installed in
<br>
/export/apps/openmpi_intel_20130618
<br>
and the GNU version is installed in /opt/openmpi
<br>
(At least this is my understanding...)
<br>
<p>Now I am still getting some undefined reference errors. Namely:
<br>
[root_at_odie 060911_rmc_eam_gr_vk_t4]# make
<br>
ifort -g -debug all -check all -implicitnone -warn all -o rmc_test ran2.o
<br>
globals.o read_inputs.o model.o rmc_functions.o scattering_factors.o fem1.o
<br>
gr.o eam.o rmc_v_1_0.o  -L /export/apps/openmpi_intel_20130618/lib -lmpi
<br>
ifort: warning #10182: disabling optimization; runtime debug checks enabled
<br>
fem1.o: In function `fem':
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/fem1.f90:583:
<br>
undefined reference to `mpi_reduce_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/fem1.f90:584:
<br>
undefined reference to `mpi_reduce_'
<br>
fem1.o: In function `fem_update':
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/fem1.f90:888:
<br>
undefined reference to `mpi_reduce_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/fem1.f90:889:
<br>
undefined reference to `mpi_reduce_'
<br>
rmc_v_1_0.o: In function `rmc':
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:79:
<br>
undefined reference to `mpi_init_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:80:
<br>
undefined reference to `mpi_comm_rank_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:81:
<br>
undefined reference to `mpi_comm_size_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:188:
<br>
undefined reference to `mpi_wtime_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:237:
<br>
undefined reference to `mpi_bcast_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:339:
<br>
undefined reference to `mpi_wtime_'
<br>
/state/partition1/home/jjmaldonis/Jinwoo/2011/060911_rmc_eam_gr_vk_t4/rmc_v_1_0.f90:370:
<br>
undefined reference to `mpi_finalize_'
<br>
make: *** [debug] Error 1
<br>
<p>The above undefined reference errors are my problem.
<br>
<p>Below are my PATH and LD_LIBRARY_PATH variables, if they are of help.
<br>
echo $PATH
<br>
/usr/lib64/qt-3.3/bin:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/bin/intel64:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/mpirt/bin/intel64:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/bin/intel64:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/bin/intel64_mic:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/debugger/gui/intel64:/export/apps/intel_20130618/advisor_xe_2013/bin64:/export/apps/intel_20130618/inspector_xe_2013/bin64:/export/apps/intel_20130618/vtune_amplifier_xe_2013/bin64:/usr/local/bin:/bin:/usr/bin:/bin:/usr/bin:/usr/local/sbin:/usr/sbin:/sbin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/usr/java/latest/bin:/opt/maven/bin:/export/apps/openmpi_intel_20130618/:/opt/pdsh/bin:/opt/rocks/bin:/opt/rocks/sbin:/opt/condor/bin:/opt/condor/sbin:/usr/local/samba/sbin:/opt/gridengine/bin/linux-x64:/export/apps/openmpi_intel_20130618/bin/:/usr/local/samba/sbin:/export/apps/openmpi_intel_20130618/bin/
<br>
<p>echo $LD_LIBRARY_PATH
<br>
/opt/gridengine/lib/linux-x64:/export/apps/openmpi_intel_20130618/lib:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/compiler/lib:/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/compiler/lib/intel64/
<br>
<p><p>Below I will paste my makefile, and attached are the compressed
<br>
&quot;./configure ...&quot; and &quot;make all install&quot; command logs. Please let me know
<br>
anything else that you need.
<br>
<p>I am still new to all this, so please be thorough in your explanations for
<br>
me!
<br>
<p>Thank you in advance,
<br>
Jason
<br>
<p>#
<br>
# default makefile for ifort compiler with more or less
<br>
# appropriate options for debugging and high performance
<br>
#
<br>
<p># application name
<br>
APP = rmc_test
<br>
<p># list of source files
<br>
SRC = ran2.f90 globals.f90 read_inputs.f90 model.f90 rmc_functions.f90
<br>
scattering_factors.f90 fem1.f90 gr.f90 eam.f90 rmc_v_1_0.f90
<br>
<p># list of object files
<br>
OBJ = ran2.o globals.o read_inputs.o model.o rmc_functions.o
<br>
scattering_factors.o fem1.o gr.o eam.o rmc_v_1_0.o
<br>
<p># define libraries needed by the linker
<br>
LIBS = -L /export/apps/openmpi_intel_20130618/lib -lmpi
<br>
# -rpath
<br>
/state/partition1/apps/intel_20130618/composer_xe_2013.3.163/compiler/lib/
<br>
<p># compiler options for debugging
<br>
FC_DEBUG = ifort -g -debug all -check all -implicitnone -warn all
<br>
<p># compiler options for optmized running
<br>
#FC_OPT = ifort -O3 -xO -ipo -no-prec-div -static
<br>
#FC_OPT = mpif90 -O3 -ipo -static
<br>
FC_OPT = mpif90 -O3
<br>
<p># build rules
<br>
<p>.SUFFIXES: .f90 .o
<br>
.f90.o:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${FC_DEBUG} -c $&lt;
<br>
<p>debug: ${OBJ}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${FC_DEBUG} -o ${APP} ${OBJ} ${LIBS}
<br>
<p>opt: ${SRC}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;${FC_OPT} -o ${APP} ${SRC} ${LIBS}
<br>
<p>clean:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f *.mod *.o ${APP}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ln -s /export/apps/openmpi_intel_20130618/lib/mpi.mod ./mpi.mod
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22202/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
<li><strong>Previous message:</strong> <a href="22201.php">Jeff Squyres (jsquyres): "Re: [OMPI users] errors trying to run a simple mpi task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
<li><strong>Reply:</strong> <a href="22203.php">Elken, Tom: "Re: [OMPI users] Intel compiled undefined reference errors (i.e.	mpi_reduce_)"</a>
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
