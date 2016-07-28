<?
$subject_val = "Re: [OMPI users] segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 06:01:44 2009" -->
<!-- isoreceived="20091123110144" -->
<!-- sent="Mon, 23 Nov 2009 12:01:36 +0100" -->
<!-- isosent="20091123110136" -->
<!-- name="Iris Pernille Lohmann" -->
<!-- email="ipl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault: Address not mapped" -->
<!-- id="66D0CDDB47B56E49985BE88D9E9DD4507566FC50DB_at_mx7serv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="66D0CDDB47B56E49985BE88D9E9DD4507521C168F8_at_mx7serv" -->
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
<strong>From:</strong> Iris Pernille Lohmann (<em>ipl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 06:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>This is in relation to a problem I wrote to the list about several weeks ago - sorry for the delay (I've been working on other issues since then...). Anyways, I get an occasional crash in MPI_Isend, and the problem mainly occurs when I use more than 1 node, and more than 4 processors total. When I use e.g. 2 nodes with 16 processors, the problem happens all the time so the run never succeeds. In my last email to the list I included the error message I get for the crash, indicating the problem in MPI_Isend, with an 'address not mapped' message.
<br>
<p>It seems the buffer which is passed is OK. I think the problem is caused by a conflict of types of 'com' (type MPI_Comm) used as the 6th argument of MPI_Isend.
<br>
<p>In my application, com is found by MPI_Comm_create as an MPI_Com -type and then converted to int -type. 
<br>
<p>Then in the call to MPI_Isend, it is converted back to an MPI_Comm. 
<br>
<p>When compiling, I get warnings, first where com is created as an MPI_Comm and changed to an int:
<br>
Warning:Cast from pointer to integer of different size 
<br>
And then when using MPI_Isend with the change from int to MPI_Comm:
<br>
Warning:Cast to pointer from integer of different size.
<br>
<p>When I look in mpi.h I cannot find the definition of MPI_Comm.
<br>
<p>I can probably solve the problem by NOT changing the type from MPI_Comm to int. However, I would like to understand the problem. I hope this description may give you an idea.
<br>
<p>Thanks,
<br>
Iris Lohmann
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Iris Pernille Lohmann
<br>
Sent: 04 November 2009 10:20
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] segmentation fault: Address not mapped
<br>
<p>Hi Jeff,
<br>
<p>Thanks for your reply.
<br>
<p>There are no core files associated with the crash. Based on your answer, and the fact that the crash only appears occasionally, I think I need to debug more carefully as you suggest - it may very well be something not working completely right in the application. 
<br>
<p>Thanks again, and thanks for all the help which is passed on through this list - it is very helpful and a lot of work.
<br>
<p>Iris
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: 03 November 2009 03:19
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] segmentation fault: Address not mapped
<br>
<p>Many thanks for all this information.  Unfortunately, it's not enough  
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
<span class="quotelev1">&gt; The crash does not appear always - sometimes the application runs  
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
<span class="quotelev1">&gt; ompi_info -all:
</span><br>
<span class="quotelev1">&gt; attached
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application (named flow) was launched on hydra11 by
</span><br>
<span class="quotelev1">&gt; nohup mpirun -H hydra11,hydra12 -np 8 ./flow caseC.in &amp;
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
<span class="quotelev1">&gt; ulimit -l (hydra11): 6000000
</span><br>
<span class="quotelev1">&gt; ulimit -l (hydra12): unlimited
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
<span class="quotelev1">&gt; WATER  .  ENVIRONMENT  .  HEALTH
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11251.php">Rob Latham: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11249.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11058.php">Iris Pernille Lohmann: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Reply:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
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
