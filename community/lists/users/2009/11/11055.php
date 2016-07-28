<?
$subject_val = "Re: [OMPI users] segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 21:19:08 2009" -->
<!-- isoreceived="20091103021908" -->
<!-- sent="Mon, 2 Nov 2009 21:19:03 -0500" -->
<!-- isosent="20091103021903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault: Address not mapped" -->
<!-- id="DA0A0F7D-E951-4486-B4B4-60A656B53024_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1709_1256564592_n9QDh6G4032651_66D0CDDB47B56E49985BE88D9E9DD4507521ACD739_at_mx7serv" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault: Address not mapped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 21:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<li><strong>Previous message:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10964.php">Iris Pernille Lohmann: "[OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for all this information.  Unfortunately, it's not enough  
<br>
to know what's going on.  :-(
<br>
<p>Do you know for sure that the application is correct?  E.g., is it  
<br>
possible that a bad buffer is being passed to MPI_Isend?  I note that  
<br>
it is fairly odd to fail in MPI_Isend itself because that function is  
<br>
actually pretty short -- it mainly checks parameters and then calls a  
<br>
back-end Open MPI function to actually do the send.
<br>
<p>Do you get corefiles with the killed processes, and can you analyze  
<br>
where the application failed?  If so, can you verify that all state in  
<br>
the application appears to be correct?  It might be helpful to analyze  
<br>
exactly where the application failed (e.g., compile at least ompi/mpi/ 
<br>
c/isend.c with the -g flag so that you can get some debugging  
<br>
information about exactly where in MPI_Isend it failed -- like I said,  
<br>
it's a short function that mainly checks parameters).  You might want  
<br>
to have your application double check all the parameters that are  
<br>
passed to MPI_Isend, too.
<br>
<p><p>On Oct 26, 2009, at 9:43 AM, Iris Pernille Lohmann wrote:
<br>
<p><span class="quotelev1">&gt; Dear list members
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.3.3 with OFED on a HP cluster with redhatLinux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Occasionally (not always) I get a crash with the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] Failing at address: 0xffffffffab5f30a8
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 0] /lib64/libpthread.so.0 [0x3c1400e4c0]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 1] /home/ipl/openmpi-1.3.3/platforms/hp/lib/ 
</span><br>
<span class="quotelev1">&gt; libmpi.so.0(MPI_Isend+0x93) [0x2af1be45a3e3]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 2] ./flow(MP_SendReal+0x60) [0x6bc993]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 3] ./flow(SendRealsAlongFaceWithOffset_3D+0x4ab)  
</span><br>
<span class="quotelev1">&gt; [0x68ba19]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 4] ./flow(MP_SendVertexArrayBlock+0x23d) [0x6891e1]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 5] ./flow(MB_CommAllVertex+0x65) [0x6848ba]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 6] ./flow(MB_SetupVertexArray+0xd5) [0x68c837]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 7] ./flow(MB_SetupGrid+0xa8) [0x68be51]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 8] ./flow(SetGrid+0x58) [0x446224]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [ 9] ./flow(main+0x148) [0x43b728]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [10] /lib64/libc.so.6(__libc_start_main+0xf4)  
</span><br>
<span class="quotelev1">&gt; [0x3c1341d974]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] [11] ./flow(__gxx_personality_v0+0xd9) [0x429b19]
</span><br>
<span class="quotelev1">&gt; [hydra11:09312] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 6 with PID 9312 on node hydra11  
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The crash does not appear always &#150; sometimes the application runs  
</span><br>
<span class="quotelev1">&gt; fine. However, it seems that the crash especially occurs when I run  
</span><br>
<span class="quotelev1">&gt; on more than 1 node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have consulted the archive of open-mpi and have found many error  
</span><br>
<span class="quotelev1">&gt; messages of the same kind, but none from the 1.3.3 version, and none  
</span><br>
<span class="quotelev1">&gt; of direct relevance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would really appreciate comments on this. Below is the information  
</span><br>
<span class="quotelev1">&gt; required according to the openmpi web,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config.log: attached (config.zip)
</span><br>
<span class="quotelev1">&gt; Open mpi was configured with prefix and with the path to openib, and  
</span><br>
<span class="quotelev1">&gt; with the following compiler flags
</span><br>
<span class="quotelev1">&gt; setenv CC gcc
</span><br>
<span class="quotelev1">&gt; setenv CFLAGS '-O'
</span><br>
<span class="quotelev1">&gt; setenv CXX g++
</span><br>
<span class="quotelev1">&gt; setenv CXXFLAGS '-O'
</span><br>
<span class="quotelev1">&gt; setenv F77 'gfortran'
</span><br>
<span class="quotelev1">&gt; setenv FFLAGS '-O'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info &#150;all:
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application (named flow) was launched on hydra11 by
</span><br>
<span class="quotelev1">&gt; nohup mpirun &#150;H hydra11,hydra12 &#150;np 8 ./flow caseC.in &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the PATH and LD_LIBRARY_PATH, hydra11 and hydra12:
</span><br>
<span class="quotelev1">&gt; PATH=/home/ipl/openmpi-1.3.3/platforms/hp/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH= /home/ipl/openmpi-1.3.3/platforms/hp/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenFabrics version: 1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux:
</span><br>
<span class="quotelev1">&gt; X86_64-redhat-linux/3.4.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ibv_devinfo, hydra11: attached
</span><br>
<span class="quotelev1">&gt; ibv_devinfo, hydra12: attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ifconfig, hydra11: attached
</span><br>
<span class="quotelev1">&gt; ifconfig, hydra12: attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit &#150;l (hydra11): 6000000
</span><br>
<span class="quotelev1">&gt; ulimit &#150;l (hydra12): unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Furthermore, I can say that I have not specified any MCA parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application which I am running  (named flow) is linked from  
</span><br>
<span class="quotelev1">&gt; fortran, c and c++ libraries with the following:
</span><br>
<span class="quotelev1">&gt; /home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicc        -DMP - 
</span><br>
<span class="quotelev1">&gt; DNS3_ARCH_LINUX -DLAPACK  -I/home/ipl/ns3/engine/include_forLinux -I/ 
</span><br>
<span class="quotelev1">&gt; home/ipl/openmpi-1.3.3/platforms/hp/include    -c -o user_small_3D.o  
</span><br>
<span class="quotelev1">&gt; user_small_3D.c
</span><br>
<span class="quotelev1">&gt; rm -f flow
</span><br>
<span class="quotelev1">&gt; /home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicxx   -o flow   
</span><br>
<span class="quotelev1">&gt; user_small_3D.o  -L/home/ipl/ns3/engine/lib_forLinux -lns3main - 
</span><br>
<span class="quotelev1">&gt; lns3pars -lns3util -lns3vofl -lns3turb -lns3solv -lns3mesh -lns3diff  
</span><br>
<span class="quotelev1">&gt; -lns3grid -lns3line -lns3data -lns3base -lfitpack -lillusolve - 
</span><br>
<span class="quotelev1">&gt; lfftpack_small -lfenton -lns3air -lns3dens -lns3poro -lns3sedi - 
</span><br>
<span class="quotelev1">&gt; llapack_small -lblas_small -lm -lgfortran  /home/ipl/ns3/engine/ 
</span><br>
<span class="quotelev1">&gt; lib_Tecplot_forLinux/tecio64.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you need more info!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Iris Lohmann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iris Pernille Lohmann
</span><br>
<span class="quotelev1">&gt; MSc, PhD
</span><br>
<span class="quotelev1">&gt; Ports &amp; Offshore Technology (POT)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;image001.gif&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DHI
</span><br>
<span class="quotelev1">&gt; Agern All&#233; 5
</span><br>
<span class="quotelev1">&gt; DK-2970 H&#248;rsholm
</span><br>
<span class="quotelev1">&gt; Denmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +45 4516 9200
</span><br>
<span class="quotelev1">&gt; Direct:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 45169427
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ipl_at_[hidden]
</span><br>
<span class="quotelev1">&gt; www.dhigroup.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WATER  &#149;  ENVIRONMENT  &#149;  HEALTH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** WARNING:  This email contains an attachment of a very suspicious  
</span><br>
<span class="quotelev1">&gt; type.  **
</span><br>
<span class="quotelev1">&gt; ** You are urged NOT to open this attachment unless you are  
</span><br>
<span class="quotelev1">&gt; absolutely     **
</span><br>
<span class="quotelev1">&gt; ** sure it is legitimate.  Opening this attachment may cause  
</span><br>
<span class="quotelev1">&gt; irreparable   **
</span><br>
<span class="quotelev1">&gt; ** damage to your computer and your files.  If you have any  
</span><br>
<span class="quotelev1">&gt; questions      **
</span><br>
<span class="quotelev1">&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE  
</span><br>
<span class="quotelev1">&gt; OPENING IT. **
</span><br>
<span class="quotelev1">&gt; **                                                                         **
</span><br>
<span class="quotelev1">&gt; ** This warning was added by the IU Computer Science Dept. mail  
</span><br>
<span class="quotelev1">&gt; scanner.   **
</span><br>
<span class="quotelev1">&gt; *****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; config 
</span><br>
<span class="quotelev1">&gt; .zip 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ompi_info_all 
</span><br>
<span class="quotelev1">&gt; .zip 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ibv_devinfo_hydra11 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ibv_devinfo_hydra12 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt; 
</span><br>
<span class="quotelev1">&gt; ifconfig_hydra11 
</span><br>
<span class="quotelev1">&gt; .out 
</span><br>
<span class="quotelev2">&gt; &gt;&lt;ifconfig_hydra12.out&gt;_______________________________________________
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11056.php">George Bosilca: "Re: [OMPI users] using specific algorithm for collective communication, and knowing the root cpu?"</a>
<li><strong>Previous message:</strong> <a href="11054.php">Andreea m. \(Costea\): "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10964.php">Iris Pernille Lohmann: "[OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
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
