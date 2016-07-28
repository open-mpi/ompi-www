<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 23:20:00 2006" -->
<!-- isoreceived="20060313042000" -->
<!-- sent="Mon, 13 Mar 2006 09:19:49 +0500" -->
<!-- isosent="20060313041949" -->
<!-- name="Ravi Manumachu" -->
<!-- email="manumachu.reddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="fb91973d7c13.7c13fb91973d_at_ucd.ie" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EBEC0A9A-56FD-4005-B7B2-C32D84360F8D_at_open-mpi.org" -->
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
<strong>From:</strong> Ravi Manumachu (<em>manumachu.reddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-12 23:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<p>Thank you for your help. I have attached all the files you have asked
<br>
for in a tar file.
<br>
<p>Please find attached the 'config.log' and 'libmpi.la' for my Solaris
<br>
installation.
<br>
<p>The output from 'mpicc -showme' is
<br>
<p>sunos$ mpicc -showme
<br>
gcc -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/include
<br>
-I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/include/openmpi/ompi
<br>
-L/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib -lmpi
<br>
-lorte -lopal -lnsl -lsocket -lthread -laio -lm -lnsl -lsocket -lthread -ldl
<br>
<p>There are serious issues when running on just solaris machines.
<br>
<p>I am using the host file and app file shown below. Both the machines are
<br>
SunOS and are similar.
<br>
<p>hosts.txt
<br>
---------
<br>
csultra01 slots=1
<br>
csultra02 slots=1
<br>
<p>mpiinit_appfile
<br>
---------------
<br>
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
<br>
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
<br>
<p>Running mpirun without -d option hangs.
<br>
<p>csultra01$ mpirun --hostfile hosts.txt --app mpiinit_appfile
<br>
hangs
<br>
<p>Running mpirun with -d option dumps core with output in the file
<br>
&quot;mpirun_output_d_option.txt&quot;, which is attached. The core is also attached.
<br>
<p>Running just on only one host is also not working. The output from
<br>
mpirun using &quot;-d&quot; option for this scenario is attached in file
<br>
&quot;mpirun_output_d_option_one_host.txt&quot;.
<br>
<p>I have also attached the list of packages installed on my solaris
<br>
machine in &quot;pkginfo.txt&quot;
<br>
<p>I hope these will help you to resolve the issue.
<br>
<p>Regards,
<br>
Ravi.
<br>
<p>----- Original Message -----
<br>
From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
<br>
Date: Friday, March 10, 2006 7:09 pm
<br>
Subject: Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9;
<br>
problems on heterogeneous cluster
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Mar 10, 2006, at 12:09 AM, Ravi Manumachu wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am facing problems running OpenMPI-1.0.1 on a heterogeneous 
</span><br>
<span class="quotelev1">&gt; cluster.&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a Linux machine and a SunOS machine in this cluster.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; linux$ uname -a
</span><br>
<span class="quotelev2">&gt; &gt; Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06 EDT 
</span><br>
<span class="quotelev1">&gt; 2004&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sunos$ uname -a
</span><br>
<span class="quotelev2">&gt; &gt; SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, this will not work with Open MPI at present.  Open 
</span><br>
<span class="quotelev1">&gt; MPI  
</span><br>
<span class="quotelev1">&gt; 1.0.x does not have any support for running across platforms with  
</span><br>
<span class="quotelev1">&gt; different endianness.  Open MPI 1.1.x has much better support for  
</span><br>
<span class="quotelev1">&gt; such situations, but is far from complete, as the MPI datatype 
</span><br>
<span class="quotelev1">&gt; engine  
</span><br>
<span class="quotelev1">&gt; does not properly fix up endian issues.  We're working on the 
</span><br>
<span class="quotelev1">&gt; issue,  
</span><br>
<span class="quotelev1">&gt; but can not give a timetable for completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also note that (while not a problem here) Open MPI also does not  
</span><br>
<span class="quotelev1">&gt; support running in a mixed 32 bit / 64 bit environment.  All  
</span><br>
<span class="quotelev1">&gt; processes must be 32 or 64 bit, but not a mix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev2">&gt; &gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev2">&gt; &gt; mpiinit_sunos:
</span><br>
<span class="quotelev2">&gt; &gt; fatal: relocation error: file
</span><br>
<span class="quotelev2">&gt; &gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev2">&gt; &gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev2">&gt; &gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt; &gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev2">&gt; &gt; mpiinit_sunos:
</span><br>
<span class="quotelev2">&gt; &gt; fatal: relocation error: file
</span><br>
<span class="quotelev2">&gt; &gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev2">&gt; &gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev2">&gt; &gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have fixed this by compiling with &quot;-lrt&quot; option to the linker.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You shouldn't have to do this...  Could you send me the config.log  
</span><br>
<span class="quotelev1">&gt; file configure for Open MPI, the installed $prefix/lib/libmpi.la  
</span><br>
<span class="quotelev1">&gt; file, and the output of mpicc -showme?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However when I run this again, I get the error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev2">&gt; &gt; [pg1cluster01:19858] ERROR: A daemon on node csultra01 failed to 
</span><br>
<span class="quotelev1">&gt; start&gt; as expected.
</span><br>
<span class="quotelev2">&gt; &gt; [pg1cluster01:19858] ERROR: There may be more information 
</span><br>
<span class="quotelev1">&gt; available  
</span><br>
<span class="quotelev2">&gt; &gt; from
</span><br>
<span class="quotelev2">&gt; &gt; [pg1cluster01:19858] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt; &gt; [pg1cluster01:19858] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev2">&gt; &gt; status 255.
</span><br>
<span class="quotelev2">&gt; &gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both of these are quite unexpected.  It looks like there is 
</span><br>
<span class="quotelev1">&gt; something  
</span><br>
<span class="quotelev1">&gt; wrong with your Solaris build.  Can you run on *just* the Solaris  
</span><br>
<span class="quotelev1">&gt; machine?  We only have limited resources for testing on Solaris, 
</span><br>
<span class="quotelev1">&gt; but  
</span><br>
<span class="quotelev1">&gt; have not run into this issue before.  What happens if you run 
</span><br>
<span class="quotelev1">&gt; mpirun  
</span><br>
<span class="quotelev1">&gt; on just the Solaris machine with the -d option to mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sometimes I get the error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev2">&gt; &gt; [csultra01:06256] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev2">&gt; &gt; errno=28
</span><br>
<span class="quotelev2">&gt; &gt; [csultra01:06256] mca_mpool_sm_init: unable to create shared 
</span><br>
<span class="quotelev1">&gt; memory  
</span><br>
<span class="quotelev2">&gt; &gt; mapping
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- 
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt; &gt; process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's 
</span><br>
<span class="quotelev1">&gt; some&gt; additional information (which may only be relevant to an Open 
</span><br>
<span class="quotelev1">&gt; MPI&gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- 
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like you got far enough along that you ran into our  
</span><br>
<span class="quotelev1">&gt; endianness issues, so this is about the best case you can hope for 
</span><br>
<span class="quotelev1">&gt; in  
</span><br>
<span class="quotelev1">&gt; your configuration.  The ftruncate error worries me, however.  But 
</span><br>
<span class="quotelev1">&gt; I  
</span><br>
<span class="quotelev1">&gt; think this is another symptom of something wrong with your Sun 
</span><br>
<span class="quotelev1">&gt; Sparc  
</span><br>
<span class="quotelev1">&gt; build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian Barrett
</span><br>
<span class="quotelev1">&gt;   Open MPI developer
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Previous message:</strong> <a href="0832.php">Brian Barrett: "Re: [OMPI users] svn r9191 build failure on ppc32-linux"</a>
<li><strong>In reply to:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
