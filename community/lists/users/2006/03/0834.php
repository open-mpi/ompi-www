<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 23:23:43 2006" -->
<!-- isoreceived="20060313042343" -->
<!-- sent="Mon, 13 Mar 2006 09:23:31 +0500" -->
<!-- isosent="20060313042331" -->
<!-- name="Ravi Manumachu" -->
<!-- email="manumachu.reddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="f95ec92a1857.1857f95ec92a_at_ucd.ie" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="fb91973d7c13.7c13fb91973d_at_ucd.ie" -->
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
<strong>Date:</strong> 2006-03-12 23:23:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
&nbsp;Hi Brian,
<br>
&nbsp;
<br>
&nbsp;Thank you for your help. I have attached all the files you have asked
<br>
&nbsp;for in a tar file.
<br>
&nbsp;
<br>
&nbsp;Please find attached the 'config.log' and 'libmpi.la' for my Solaris
<br>
&nbsp;installation.
<br>
&nbsp;
<br>
&nbsp;The output from 'mpicc -showme' is
<br>
&nbsp;
<br>
&nbsp;sunos$ mpicc -showme
<br>
&nbsp;gcc -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/include
<br>
&nbsp;-I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-
<br>
&nbsp;5.9/include/openmpi/ompi-L/home/cs/manredd/OpenMPI/openmpi-
<br>
&nbsp;1.0.1/OpenMPI-SunOS-5.9/lib -lmpi
<br>
&nbsp;-lorte -lopal -lnsl -lsocket -lthread -laio -lm -lnsl -lsocket -
<br>
&nbsp;lthread -ldl
<br>
&nbsp;
<br>
&nbsp;There are serious issues when running on just solaris machines.
<br>
&nbsp;
<br>
&nbsp;I am using the host file and app file shown below. Both the 
<br>
&nbsp;machines are
<br>
&nbsp;SunOS and are similar.
<br>
&nbsp;
<br>
&nbsp;hosts.txt
<br>
&nbsp;---------
<br>
&nbsp;csultra01 slots=1
<br>
&nbsp;csultra02 slots=1
<br>
&nbsp;
<br>
&nbsp;mpiinit_appfile
<br>
&nbsp;---------------
<br>
&nbsp;-np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
<br>
&nbsp;-np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
<br>
&nbsp;
<br>
&nbsp;Running mpirun without -d option hangs.
<br>
&nbsp;
<br>
&nbsp;csultra01$ mpirun --hostfile hosts.txt --app mpiinit_appfile
<br>
&nbsp;hangs
<br>
&nbsp;
<br>
&nbsp;Running mpirun with -d option dumps core with output in the file
<br>
&nbsp;&quot;mpirun_output_d_option.txt&quot;, which is attached. The core is also 
<br>
&nbsp;attached.
<br>
&nbsp;Running just on only one host is also not working. The output from
<br>
&nbsp;mpirun using &quot;-d&quot; option for this scenario is attached in file
<br>
&nbsp;&quot;mpirun_output_d_option_one_host.txt&quot;.
<br>
&nbsp;
<br>
&nbsp;I have also attached the list of packages installed on my solaris
<br>
&nbsp;machine in &quot;pkginfo.txt&quot;
<br>
&nbsp;
<br>
&nbsp;I hope these will help you to resolve the issue.
<br>
&nbsp;
<br>
&nbsp;Regards,
<br>
&nbsp;Ravi.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Friday, March 10, 2006 7:09 pm
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9;
</span><br>
<span class="quotelev1">&gt; problems on heterogeneous cluster
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 10, 2006, at 12:09 AM, Ravi Manumachu wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am facing problems running OpenMPI-1.0.1 on a heterogeneous 
</span><br>
<span class="quotelev2">&gt; &gt; cluster.&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have a Linux machine and a SunOS machine in this cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; linux$ uname -a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06 
</span><br>
<span class="quotelev1">&gt; EDT 
</span><br>
<span class="quotelev2">&gt; &gt; 2004&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sunos$ uname -a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, this will not work with Open MPI at present.  Open 
</span><br>
<span class="quotelev2">&gt; &gt; MPI  
</span><br>
<span class="quotelev2">&gt; &gt; 1.0.x does not have any support for running across platforms with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; different endianness.  Open MPI 1.1.x has much better support for 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; such situations, but is far from complete, as the MPI datatype 
</span><br>
<span class="quotelev2">&gt; &gt; engine  
</span><br>
<span class="quotelev2">&gt; &gt; does not properly fix up endian issues.  We're working on the 
</span><br>
<span class="quotelev2">&gt; &gt; issue,  
</span><br>
<span class="quotelev2">&gt; &gt; but can not give a timetable for completion.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Also note that (while not a problem here) Open MPI also does not  
</span><br>
<span class="quotelev2">&gt; &gt; support running in a mixed 32 bit / 64 bit environment.  All  
</span><br>
<span class="quotelev2">&gt; &gt; processes must be 32 or 64 bit, but not a mix.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiinit_sunos:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fatal: relocation error: file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiinit_sunos:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fatal: relocation error: file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have fixed this by compiling with &quot;-lrt&quot; option to the linker.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You shouldn't have to do this...  Could you send me the 
</span><br>
<span class="quotelev1">&gt; config.log  
</span><br>
<span class="quotelev2">&gt; &gt; file configure for Open MPI, the installed $prefix/lib/libmpi.la  
</span><br>
<span class="quotelev2">&gt; &gt; file, and the output of mpicc -showme?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However when I run this again, I get the error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [pg1cluster01:19858] ERROR: A daemon on node csultra01 failed 
</span><br>
<span class="quotelev1">&gt; to 
</span><br>
<span class="quotelev2">&gt; &gt; start&gt; as expected.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [pg1cluster01:19858] ERROR: There may be more information 
</span><br>
<span class="quotelev2">&gt; &gt; available  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [pg1cluster01:19858] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [pg1cluster01:19858] ERROR: The daemon exited unexpectedly with 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; status 255.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Both of these are quite unexpected.  It looks like there is 
</span><br>
<span class="quotelev2">&gt; &gt; something  
</span><br>
<span class="quotelev2">&gt; &gt; wrong with your Solaris build.  Can you run on *just* the Solaris 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; machine?  We only have limited resources for testing on Solaris, 
</span><br>
<span class="quotelev2">&gt; &gt; but  
</span><br>
<span class="quotelev2">&gt; &gt; have not run into this issue before.  What happens if you run 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun  
</span><br>
<span class="quotelev2">&gt; &gt; on just the Solaris machine with the -d option to mpirun?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Sometimes I get the error.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [csultra01:06256] mca_common_sm_mmap_init: ftruncate failed 
</span><br>
<span class="quotelev1">&gt; with  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; errno=28
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [csultra01:06256] mca_mpool_sm_init: unable to create shared 
</span><br>
<span class="quotelev2">&gt; &gt; memory  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mapping
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ---- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; process is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; likely to abort.  There are many reasons that a parallel 
</span><br>
<span class="quotelev1">&gt; process can
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fail during MPI_INIT; some of which are due to configuration or 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; environment
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problems.  This failure appears to be an internal failure; 
</span><br>
<span class="quotelev1">&gt; here's 
</span><br>
<span class="quotelev2">&gt; &gt; some&gt; additional information (which may only be relevant to an 
</span><br>
<span class="quotelev1">&gt; Open 
</span><br>
<span class="quotelev2">&gt; &gt; MPI&gt; developer):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ---- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt; &gt; &gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This looks like you got far enough along that you ran into our  
</span><br>
<span class="quotelev2">&gt; &gt; endianness issues, so this is about the best case you can hope 
</span><br>
<span class="quotelev1">&gt; for 
</span><br>
<span class="quotelev2">&gt; &gt; in  
</span><br>
<span class="quotelev2">&gt; &gt; your configuration.  The ftruncate error worries me, however.  
</span><br>
<span class="quotelev1">&gt; But 
</span><br>
<span class="quotelev2">&gt; &gt; I  
</span><br>
<span class="quotelev2">&gt; &gt; think this is another symptom of something wrong with your Sun 
</span><br>
<span class="quotelev2">&gt; &gt; Sparc  
</span><br>
<span class="quotelev2">&gt; &gt; build.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;   Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;   Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0834/OpenMPI-1.0.1-SunOS-5.9.tar.gz">OpenMPI-1.0.1-SunOS-5.9.tar.gz</a>
</ul>
<!-- attachment="OpenMPI-1.0.1-SunOS-5.9.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">Michael Kluskens: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>Previous message:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>In reply to:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0838.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
