<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 09:14:33 2006" -->
<!-- isoreceived="20060313141433" -->
<!-- sent="Mon, 13 Mar 2006 09:14:29 -0500" -->
<!-- isosent="20060313141429" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="F99D0AD8-0C65-4B71-9910-F54EEF60D040_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f95ec92a1857.1857f95ec92a_at_ucd.ie" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 09:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ravi -
<br>
<p>With the help of another Open MPI user, I spent the weekend finding a  
<br>
couple of issues with Open MPI on Solaris.  I believe you are running  
<br>
into the same problems.  We're in the process of certifying the  
<br>
changes for release as part of 1.0.2, but it's Monday morning and the  
<br>
release manager hasn't gotten them into the release branch just yet.   
<br>
Could you give the nightly tarball from our development trunk a try  
<br>
and let us know if it solves your problems on Solaris?  You probably  
<br>
want last night's 1.1a1r9260 release.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>On Mar 12, 2006, at 11:23 PM, Ravi Manumachu wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thank you for your help. I have attached all the files you have asked
</span><br>
<span class="quotelev1">&gt;  for in a tar file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Please find attached the 'config.log' and 'libmpi.la' for my Solaris
</span><br>
<span class="quotelev1">&gt;  installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The output from 'mpicc -showme' is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sunos$ mpicc -showme
</span><br>
<span class="quotelev1">&gt;  gcc -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/ 
</span><br>
<span class="quotelev1">&gt; include
</span><br>
<span class="quotelev1">&gt;  -I/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-
</span><br>
<span class="quotelev1">&gt;  5.9/include/openmpi/ompi-L/home/cs/manredd/OpenMPI/openmpi-
</span><br>
<span class="quotelev1">&gt;  1.0.1/OpenMPI-SunOS-5.9/lib -lmpi
</span><br>
<span class="quotelev1">&gt;  -lorte -lopal -lnsl -lsocket -lthread -laio -lm -lnsl -lsocket -
</span><br>
<span class="quotelev1">&gt;  lthread -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  There are serious issues when running on just solaris machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am using the host file and app file shown below. Both the
</span><br>
<span class="quotelev1">&gt;  machines are
</span><br>
<span class="quotelev1">&gt;  SunOS and are similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hosts.txt
</span><br>
<span class="quotelev1">&gt;  ---------
</span><br>
<span class="quotelev1">&gt;  csultra01 slots=1
</span><br>
<span class="quotelev1">&gt;  csultra02 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpiinit_appfile
</span><br>
<span class="quotelev1">&gt;  ---------------
</span><br>
<span class="quotelev1">&gt;  -np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
</span><br>
<span class="quotelev1">&gt;  -np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Running mpirun without -d option hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  csultra01$ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev1">&gt;  hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Running mpirun with -d option dumps core with output in the file
</span><br>
<span class="quotelev1">&gt;  &quot;mpirun_output_d_option.txt&quot;, which is attached. The core is also
</span><br>
<span class="quotelev1">&gt;  attached.
</span><br>
<span class="quotelev1">&gt;  Running just on only one host is also not working. The output from
</span><br>
<span class="quotelev1">&gt;  mpirun using &quot;-d&quot; option for this scenario is attached in file
</span><br>
<span class="quotelev1">&gt;  &quot;mpirun_output_d_option_one_host.txt&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have also attached the list of packages installed on my solaris
</span><br>
<span class="quotelev1">&gt;  machine in &quot;pkginfo.txt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I hope these will help you to resolve the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Regards,
</span><br>
<span class="quotelev1">&gt;  Ravi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: Brian Barrett &lt;brbarret_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Friday, March 10, 2006 7:09 pm
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9;
</span><br>
<span class="quotelev2">&gt;&gt; problems on heterogeneous cluster
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 10, 2006, at 12:09 AM, Ravi Manumachu wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am facing problems running OpenMPI-1.0.1 on a heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster.&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a Linux machine and a SunOS machine in this cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linux$ uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06
</span><br>
<span class="quotelev2">&gt;&gt; EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2004&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sunos$ uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, this will not work with Open MPI at present.  Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.0.x does not have any support for running across platforms with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different endianness.  Open MPI 1.1.x has much better support for
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such situations, but is far from complete, as the MPI datatype
</span><br>
<span class="quotelev3">&gt;&gt;&gt; engine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not properly fix up endian issues.  We're working on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but can not give a timetable for completion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also note that (while not a problem here) Open MPI also does not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support running in a mixed 32 bit / 64 bit environment.  All
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes must be 32 or 64 bit, but not a mix.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiinit_sunos:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fatal: relocation error: file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiinit_sunos:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fatal: relocation error: file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have fixed this by compiling with &quot;-lrt&quot; option to the linker.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You shouldn't have to do this...  Could you send me the
</span><br>
<span class="quotelev2">&gt;&gt; config.log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file configure for Open MPI, the installed $prefix/lib/libmpi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file, and the output of mpicc -showme?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However when I run this again, I get the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pg1cluster01:19858] ERROR: A daemon on node csultra01 failed
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start&gt; as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pg1cluster01:19858] ERROR: There may be more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pg1cluster01:19858] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [pg1cluster01:19858] ERROR: The daemon exited unexpectedly with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status 255.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both of these are quite unexpected.  It looks like there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong with your Solaris build.  Can you run on *just* the Solaris
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine?  We only have limited resources for testing on Solaris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have not run into this issue before.  What happens if you run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on just the Solaris machine with the -d option to mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sometimes I get the error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csultra01:06256] mca_common_sm_mmap_init: ftruncate failed
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errno=28
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [csultra01:06256] mca_mpool_sm_init: unable to create shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel
</span><br>
<span class="quotelev2">&gt;&gt; process can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some&gt; additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI&gt; developer):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   PML add procs failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like you got far enough along that you ran into our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endianness issues, so this is about the best case you can hope
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your configuration.  The ftruncate error worries me, however.
</span><br>
<span class="quotelev2">&gt;&gt; But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think this is another symptom of something wrong with your Sun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sparc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Brian Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Open MPI developer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;OpenMPI-1.0.1-SunOS-5.9.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0839.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0837.php">Brian Barrett: "Re: [OMPI users] Using Multiple Gigabit Ethernet Interface"</a>
<li><strong>In reply to:</strong> <a href="0834.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0870.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
