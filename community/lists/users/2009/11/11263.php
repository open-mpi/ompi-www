<?
$subject_val = "Re: [OMPI users] segmentation fault: Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 04:28:12 2009" -->
<!-- isoreceived="20091124092812" -->
<!-- sent="Tue, 24 Nov 2009 10:28:05 +0100" -->
<!-- isosent="20091124092805" -->
<!-- name="Iris Pernille Lohmann" -->
<!-- email="ipl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault: Address not mapped" -->
<!-- id="66D0CDDB47B56E49985BE88D9E9DD45075670B2471_at_mx7serv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAC41CC-49C3-4D33-91B8-D4FD70D37449_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-11-24 04:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for explaining this to me. It is nice to understand what the problem is about.
<br>
<p>Thanks
<br>
Iris
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: 23 November 2009 19:39
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] segmentation fault: Address not mapped
<br>
<p>The MPI standard doesn't mandate what MPI_Comm is, and as such each  
<br>
MPI implementation if free to use whatever underlying type they want.  
<br>
In the case of Open MPI we use pointers, which are different than int  
<br>
on most cases (btw int is what MPICH is using I think). Therefore the  
<br>
conversion from MPI_Comm to int and then back to MPI_Comm will likely  
<br>
lose a significant part of the pointer and your program will crash.
<br>
<p>The obvious solution here is as you stated to avoid going through the  
<br>
conversions (int to/from MPI_Comm) and to keep the MPI handle as an  
<br>
MPI_Comm all over your application.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 23, 2009, at 03:01 , Iris Pernille Lohmann wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is in relation to a problem I wrote to the list about several  
</span><br>
<span class="quotelev1">&gt; weeks ago - sorry for the delay (I've been working on other issues  
</span><br>
<span class="quotelev1">&gt; since then...). Anyways, I get an occasional crash in MPI_Isend, and  
</span><br>
<span class="quotelev1">&gt; the problem mainly occurs when I use more than 1 node, and more than  
</span><br>
<span class="quotelev1">&gt; 4 processors total. When I use e.g. 2 nodes with 16 processors, the  
</span><br>
<span class="quotelev1">&gt; problem happens all the time so the run never succeeds. In my last  
</span><br>
<span class="quotelev1">&gt; email to the list I included the error message I get for the crash,  
</span><br>
<span class="quotelev1">&gt; indicating the problem in MPI_Isend, with an 'address not mapped'  
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems the buffer which is passed is OK. I think the problem is  
</span><br>
<span class="quotelev1">&gt; caused by a conflict of types of 'com' (type MPI_Comm) used as the  
</span><br>
<span class="quotelev1">&gt; 6th argument of MPI_Isend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my application, com is found by MPI_Comm_create as an MPI_Com - 
</span><br>
<span class="quotelev1">&gt; type and then converted to int -type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then in the call to MPI_Isend, it is converted back to an MPI_Comm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When compiling, I get warnings, first where com is created as an  
</span><br>
<span class="quotelev1">&gt; MPI_Comm and changed to an int:
</span><br>
<span class="quotelev1">&gt; Warning:Cast from pointer to integer of different size
</span><br>
<span class="quotelev1">&gt; And then when using MPI_Isend with the change from int to MPI_Comm:
</span><br>
<span class="quotelev1">&gt; Warning:Cast to pointer from integer of different size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I look in mpi.h I cannot find the definition of MPI_Comm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can probably solve the problem by NOT changing the type from  
</span><br>
<span class="quotelev1">&gt; MPI_Comm to int. However, I would like to understand the problem. I  
</span><br>
<span class="quotelev1">&gt; hope this description may give you an idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Iris Lohmann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Iris Pernille Lohmann
</span><br>
<span class="quotelev1">&gt; Sent: 04 November 2009 10:20
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] segmentation fault: Address not mapped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are no core files associated with the crash. Based on your  
</span><br>
<span class="quotelev1">&gt; answer, and the fact that the crash only appears occasionally, I  
</span><br>
<span class="quotelev1">&gt; think I need to debug more carefully as you suggest - it may very  
</span><br>
<span class="quotelev1">&gt; well be something not working completely right in the application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again, and thanks for all the help which is passed on through  
</span><br>
<span class="quotelev1">&gt; this list - it is very helpful and a lot of work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iris
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]  
</span><br>
<span class="quotelev1">&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: 03 November 2009 03:19
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] segmentation fault: Address not mapped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for all this information.  Unfortunately, it's not enough
</span><br>
<span class="quotelev1">&gt; to know what's going on.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know for sure that the application is correct?  E.g., is it
</span><br>
<span class="quotelev1">&gt; possible that a bad buffer is being passed to MPI_Isend?  I note that
</span><br>
<span class="quotelev1">&gt; it is fairly odd to fail in MPI_Isend itself because that function is
</span><br>
<span class="quotelev1">&gt; actually pretty short -- it mainly checks parameters and then calls a
</span><br>
<span class="quotelev1">&gt; back-end Open MPI function to actually do the send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you get corefiles with the killed processes, and can you analyze
</span><br>
<span class="quotelev1">&gt; where the application failed?  If so, can you verify that all state in
</span><br>
<span class="quotelev1">&gt; the application appears to be correct?  It might be helpful to analyze
</span><br>
<span class="quotelev1">&gt; exactly where the application failed (e.g., compile at least ompi/mpi/
</span><br>
<span class="quotelev1">&gt; c/isend.c with the -g flag so that you can get some debugging
</span><br>
<span class="quotelev1">&gt; information about exactly where in MPI_Isend it failed -- like I said,
</span><br>
<span class="quotelev1">&gt; it's a short function that mainly checks parameters).  You might want
</span><br>
<span class="quotelev1">&gt; to have your application double check all the parameters that are
</span><br>
<span class="quotelev1">&gt; passed to MPI_Isend, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 26, 2009, at 9:43 AM, Iris Pernille Lohmann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear list members
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using openmpi 1.3.3 with OFED on a HP cluster with redhatLinux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Occasionally (not always) I get a crash with the following message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] Failing at address: 0xffffffffab5f30a8
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 0] /lib64/libpthread.so.0 [0x3c1400e4c0]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 1] /home/ipl/openmpi-1.3.3/platforms/hp/lib/
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0(MPI_Isend+0x93) [0x2af1be45a3e3]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 2] ./flow(MP_SendReal+0x60) [0x6bc993]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 3] ./flow(SendRealsAlongFaceWithOffset_3D+0x4ab)
</span><br>
<span class="quotelev2">&gt;&gt; [0x68ba19]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 4] ./flow(MP_SendVertexArrayBlock+0x23d) [0x6891e1]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 5] ./flow(MB_CommAllVertex+0x65) [0x6848ba]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 6] ./flow(MB_SetupVertexArray+0xd5) [0x68c837]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 7] ./flow(MB_SetupGrid+0xa8) [0x68be51]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 8] ./flow(SetGrid+0x58) [0x446224]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [ 9] ./flow(main+0x148) [0x43b728]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev2">&gt;&gt; [0x3c1341d974]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] [11] ./flow(__gxx_personality_v0+0xd9) [0x429b19]
</span><br>
<span class="quotelev2">&gt;&gt; [hydra11:09312] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 6 with PID 9312 on node hydra11
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The crash does not appear always - sometimes the application runs
</span><br>
<span class="quotelev2">&gt;&gt; fine. However, it seems that the crash especially occurs when I run
</span><br>
<span class="quotelev2">&gt;&gt; on more than 1 node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have consulted the archive of open-mpi and have found many error
</span><br>
<span class="quotelev2">&gt;&gt; messages of the same kind, but none from the 1.3.3 version, and none
</span><br>
<span class="quotelev2">&gt;&gt; of direct relevance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would really appreciate comments on this. Below is the information
</span><br>
<span class="quotelev2">&gt;&gt; required according to the openmpi web,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Config.log: attached (config.zip)
</span><br>
<span class="quotelev2">&gt;&gt; Open mpi was configured with prefix and with the path to openib, and
</span><br>
<span class="quotelev2">&gt;&gt; with the following compiler flags
</span><br>
<span class="quotelev2">&gt;&gt; setenv CC gcc
</span><br>
<span class="quotelev2">&gt;&gt; setenv CFLAGS '-O'
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXX g++
</span><br>
<span class="quotelev2">&gt;&gt; setenv CXXFLAGS '-O'
</span><br>
<span class="quotelev2">&gt;&gt; setenv F77 'gfortran'
</span><br>
<span class="quotelev2">&gt;&gt; setenv FFLAGS '-O'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -all:
</span><br>
<span class="quotelev2">&gt;&gt; attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application (named flow) was launched on hydra11 by
</span><br>
<span class="quotelev2">&gt;&gt; nohup mpirun -H hydra11,hydra12 -np 8 ./flow caseC.in &amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the PATH and LD_LIBRARY_PATH, hydra11 and hydra12:
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/home/ipl/openmpi-1.3.3/platforms/hp/bin
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH= /home/ipl/openmpi-1.3.3/platforms/hp/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics version: 1.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Linux:
</span><br>
<span class="quotelev2">&gt;&gt; X86_64-redhat-linux/3.4.6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devinfo, hydra11: attached
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devinfo, hydra12: attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ifconfig, hydra11: attached
</span><br>
<span class="quotelev2">&gt;&gt; ifconfig, hydra12: attached
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ulimit -l (hydra11): 6000000
</span><br>
<span class="quotelev2">&gt;&gt; ulimit -l (hydra12): unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore, I can say that I have not specified any MCA parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application which I am running  (named flow) is linked from
</span><br>
<span class="quotelev2">&gt;&gt; fortran, c and c++ libraries with the following:
</span><br>
<span class="quotelev2">&gt;&gt; /home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicc        -DMP -
</span><br>
<span class="quotelev2">&gt;&gt; DNS3_ARCH_LINUX -DLAPACK  -I/home/ipl/ns3/engine/include_forLinux -I/
</span><br>
<span class="quotelev2">&gt;&gt; home/ipl/openmpi-1.3.3/platforms/hp/include    -c -o user_small_3D.o
</span><br>
<span class="quotelev2">&gt;&gt; user_small_3D.c
</span><br>
<span class="quotelev2">&gt;&gt; rm -f flow
</span><br>
<span class="quotelev2">&gt;&gt; /home/ipl/openmpi-1.3.3/platforms/hp/bin/mpicxx   -o flow
</span><br>
<span class="quotelev2">&gt;&gt; user_small_3D.o  -L/home/ipl/ns3/engine/lib_forLinux -lns3main -
</span><br>
<span class="quotelev2">&gt;&gt; lns3pars -lns3util -lns3vofl -lns3turb -lns3solv -lns3mesh -lns3diff
</span><br>
<span class="quotelev2">&gt;&gt; -lns3grid -lns3line -lns3data -lns3base -lfitpack -lillusolve -
</span><br>
<span class="quotelev2">&gt;&gt; lfftpack_small -lfenton -lns3air -lns3dens -lns3poro -lns3sedi -
</span><br>
<span class="quotelev2">&gt;&gt; llapack_small -lblas_small -lm -lgfortran  /home/ipl/ns3/engine/
</span><br>
<span class="quotelev2">&gt;&gt; lib_Tecplot_forLinux/tecio64.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know if you need more info!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Iris Lohmann
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Iris Pernille Lohmann
</span><br>
<span class="quotelev2">&gt;&gt; MSc, PhD
</span><br>
<span class="quotelev2">&gt;&gt; Ports &amp; Offshore Technology (POT)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;image001.gif&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DHI
</span><br>
<span class="quotelev2">&gt;&gt; Agern All&#233; 5
</span><br>
<span class="quotelev2">&gt;&gt; DK-2970 H&#248;rsholm
</span><br>
<span class="quotelev2">&gt;&gt; Denmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +45 4516 9200
</span><br>
<span class="quotelev2">&gt;&gt; Direct:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 45169427
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ipl_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; www.dhigroup.com
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WATER  .  ENVIRONMENT  .  HEALTH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev2">&gt;&gt; ** WARNING:  This email contains an attachment of a very suspicious
</span><br>
<span class="quotelev2">&gt;&gt; type.  **
</span><br>
<span class="quotelev2">&gt;&gt; ** You are urged NOT to open this attachment unless you are
</span><br>
<span class="quotelev2">&gt;&gt; absolutely     **
</span><br>
<span class="quotelev2">&gt;&gt; ** sure it is legitimate.  Opening this attachment may cause
</span><br>
<span class="quotelev2">&gt;&gt; irreparable   **
</span><br>
<span class="quotelev2">&gt;&gt; ** damage to your computer and your files.  If you have any
</span><br>
<span class="quotelev2">&gt;&gt; questions      **
</span><br>
<span class="quotelev2">&gt;&gt; ** about the validity of this message, PLEASE SEEK HELP BEFORE
</span><br>
<span class="quotelev2">&gt;&gt; OPENING IT. **
</span><br>
<span class="quotelev2">&gt;&gt; **                                                                         **
</span><br>
<span class="quotelev2">&gt;&gt; ** This warning was added by the IU Computer Science Dept. mail
</span><br>
<span class="quotelev2">&gt;&gt; scanner.   **
</span><br>
<span class="quotelev2">&gt;&gt; *****************************************************************************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; config
</span><br>
<span class="quotelev2">&gt;&gt; .zip
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info_all
</span><br>
<span class="quotelev2">&gt;&gt; .zip
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devinfo_hydra11
</span><br>
<span class="quotelev2">&gt;&gt; .out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; ibv_devinfo_hydra12
</span><br>
<span class="quotelev2">&gt;&gt; .out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;
</span><br>
<span class="quotelev2">&gt;&gt; ifconfig_hydra11
</span><br>
<span class="quotelev2">&gt;&gt; .out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ifconfig_hydra12.out&gt;_______________________________________________
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11264.php">Vivek Satpute: "[OMPI users] Open MPI Query"</a>
<li><strong>Previous message:</strong> <a href="11262.php">Jiaye Li: "[OMPI users] Program hangs"</a>
<li><strong>In reply to:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
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
