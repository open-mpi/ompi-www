<?
$subject_val = "[OMPI users] segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 09:43:12 2009" -->
<!-- isoreceived="20091026134312" -->
<!-- sent="Mon, 26 Oct 2009 14:43:05 +0100" -->
<!-- isosent="20091026134305" -->
<!-- name="Iris Pernille Lohmann" -->
<!-- email="ipl_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault: Address not mapped" -->
<!-- id="1709_1256564592_n9QDh6G4032651_66D0CDDB47B56E49985BE88D9E9DD4507521ACD739_at_mx7serv" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault: Address not mapped<br>
<strong>From:</strong> Iris Pernille Lohmann (<em>ipl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 09:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10963.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear list members
<br>
<p>I am using openmpi 1.3.3 with OFED on a HP cluster with redhatLinux.
<br>
<p>Occasionally (not always) I get a crash with the following message:
<br>
<p>[hydra11:09312] *** Process received signal ***
<br>
[hydra11:09312] Signal: Segmentation fault (11)
<br>
[hydra11:09312] Signal code: Address not mapped (1)
<br>
[hydra11:09312] Failing at address: 0xffffffffab5f30a8
<br>
[hydra11:09312] [ 0] /lib64/libpthread.so.0 [0x3c1400e4c0]
<br>
[hydra11:09312] [ 1] /home/ipl/openmpi-1.3.3/platforms/hp/lib/libmpi.so.0(MPI_Isend+0x93) [0x2af1be45a3e3]
<br>
[hydra11:09312] [ 2] ./flow(MP_SendReal+0x60) [0x6bc993]
<br>
[hydra11:09312] [ 3] ./flow(SendRealsAlongFaceWithOffset_3D+0x4ab) [0x68ba19]
<br>
[hydra11:09312] [ 4] ./flow(MP_SendVertexArrayBlock+0x23d) [0x6891e1]
<br>
[hydra11:09312] [ 5] ./flow(MB_CommAllVertex+0x65) [0x6848ba]
<br>
[hydra11:09312] [ 6] ./flow(MB_SetupVertexArray+0xd5) [0x68c837]
<br>
[hydra11:09312] [ 7] ./flow(MB_SetupGrid+0xa8) [0x68be51]
<br>
[hydra11:09312] [ 8] ./flow(SetGrid+0x58) [0x446224]
<br>
[hydra11:09312] [ 9] ./flow(main+0x148) [0x43b728]
<br>
[hydra11:09312] [10] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c1341d974]
<br>
[hydra11:09312] [11] ./flow(__gxx_personality_v0+0xd9) [0x429b19]
<br>
[hydra11:09312] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 6 with PID 9312 on node hydra11 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>The crash does not appear always - sometimes the application runs fine. However, it seems that the crash especially occurs when I run on more than 1 node.
<br>
<p>I have consulted the archive of open-mpi and have found many error messages of the same kind, but none from the 1.3.3 version, and none of direct relevance.
<br>
<p>I would really appreciate comments on this. Below is the information required according to the openmpi web,
<br>
<p>Config.log: attached (config.zip)
<br>
Open mpi was configured with prefix and with the path to openib, and with the following compiler flags
<br>
setenv CC gcc
<br>
setenv CFLAGS '-O'
<br>
setenv CXX g++
<br>
setenv CXXFLAGS '-O'
<br>
setenv F77 'gfortran'
<br>
setenv FFLAGS '-O'
<br>
<p>ompi_info -all:
<br>
attached
<br>
<p>The application (named flow) was launched on hydra11 by
<br>
nohup mpirun -H hydra11,hydra12 -np 8 ./flow caseC.in &amp;
<br>
<p>the PATH and LD_LIBRARY_PATH, hydra11 and hydra12:
<br>
PATH=/home/ipl/openmpi-1.3.3/platforms/hp/bin
<br>
LD_LIBRARY_PATH= /home/ipl/openmpi-1.3.3/platforms/hp/lib
<br>
<p>OpenFabrics version: 1.4
<br>
<p>Linux:
<br>
X86_64-redhat-linux/3.4.6
<br>
<p>ibv_devinfo, hydra11: attached
<br>
ibv_devinfo, hydra12: attached
<br>
<p>ifconfig, hydra11: attached
<br>
ifconfig, hydra12: attached
<br>
<p>ulimit -l (hydra11): 6000000
<br>
ulimit -l (hydra12): unlimited
<br>
<p>Furthermore, I can say that I have not specified any MCA parameters.
<br>
<p>The application which I am running  (named flow) is linked from fortran, c and c++ libraries with the following:
<br>
/home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicc        -DMP -DNS3_ARCH_LINUX -DLAPACK  -I/home/ipl/ns3/engine/include_forLinux -I/home/ipl/openmpi-1.3.3/platforms/hp/include    -c -o user_small_3D.o user_small_3D.c
<br>
rm -f flow
<br>
/home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicxx   -o flow  user_small_3D.o  -L/home/ipl/ns3/engine/lib_forLinux -lns3main -lns3pars -lns3util -lns3vofl -lns3turb -lns3solv -lns3mesh -lns3diff -lns3grid -lns3line -lns3data -lns3base -lfitpack -lillusolve -lfftpack_small -lfenton -lns3air -lns3dens -lns3poro -lns3sedi -llapack_small -lblas_small -lm -lgfortran  /home/ipl/ns3/engine/lib_Tecplot_forLinux/tecio64.a
<br>
<p>Please let me know if you need more info!
<br>
<p>Thanks in advance,
<br>
Iris Lohmann
<br>
<p><p><p><p><p>Iris Pernille Lohmann
<br>
<p>MSc, PhD
<br>
<p>Ports &amp; Offshore Technology (POT)
<br>
<p><p><p>[cid:image001.gif_at_01CA564A.A05EDAA0]
<br>
<p><p><p>DHI
<br>
<p>Agern All&#233; 5
<br>
<p>DK-2970 H&#248;rsholm
<br>
<p>Denmark
<br>
<p><p><p>Tel:
<br>
<p><p><p>+45 4516 9200
<br>
<p>Direct:
<br>
<p><p><p>45169427
<br>
<p><p><p>ipl_at_[hidden]
<br>
<p>www.dhigroup.com
<br>
<p><p><p>WATER  *  ENVIRONMENT  *  HEALTH
<br>
<p><p><p><p><p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable   **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p><p><p>
<p>
<br><p>
<p>





<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-10964/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/config.zip">config.zip</a>
</ul>
<!-- attachment="config.zip" -->
<hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/ompi_info_all.zip">ompi_info_all.zip</a>
</ul>
<!-- attachment="ompi_info_all.zip" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/ibv_devinfo_hydra11.out">ibv_devinfo_hydra11.out</a>
</ul>
<!-- attachment="ibv_devinfo_hydra11.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/ibv_devinfo_hydra12.out">ibv_devinfo_hydra12.out</a>
</ul>
<!-- attachment="ibv_devinfo_hydra12.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/ifconfig_hydra11.out">ifconfig_hydra11.out</a>
</ul>
<!-- attachment="ifconfig_hydra11.out" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10964/ifconfig_hydra12.out">ifconfig_hydra12.out</a>
</ul>
<!-- attachment="ifconfig_hydra12.out" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10965.php">Jeff Squyres: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Previous message:</strong> <a href="10963.php">Jeff Squyres: "Re: [OMPI users] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11055.php">Jeff Squyres: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
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
