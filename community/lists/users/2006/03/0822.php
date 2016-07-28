<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 08:28:19 2006" -->
<!-- isoreceived="20060310132819" -->
<!-- sent="Fri, 10 Mar 2006 08:28:18 -0500" -->
<!-- isosent="20060310132818" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="EBEC0A9A-56FD-4005-B7B2-C32D84360F8D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="fd06e84e528f.528ffd06e84e_at_ucd.ie" -->
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
<strong>Date:</strong> 2006-03-10 08:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 10, 2006, at 12:09 AM, Ravi Manumachu wrote:
<br>
<p><span class="quotelev1">&gt; I am facing problems running OpenMPI-1.0.1 on a heterogeneous cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a Linux machine and a SunOS machine in this cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linux$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06 EDT 2004
</span><br>
<span class="quotelev1">&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sunos$ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
</span><br>
<p>Unfortunately, this will not work with Open MPI at present.  Open MPI  
<br>
1.0.x does not have any support for running across platforms with  
<br>
different endianness.  Open MPI 1.1.x has much better support for  
<br>
such situations, but is far from complete, as the MPI datatype engine  
<br>
does not properly fix up endian issues.  We're working on the issue,  
<br>
but can not give a timetable for completion.
<br>
<p>Also note that (while not a problem here) Open MPI also does not  
<br>
support running in a mixed 32 bit / 64 bit environment.  All  
<br>
processes must be 32 or 64 bit, but not a mix.
<br>
<p><span class="quotelev1">&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev1">&gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev1">&gt; mpiinit_sunos:
</span><br>
<span class="quotelev1">&gt; fatal: relocation error: file
</span><br>
<span class="quotelev1">&gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev1">&gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/ 
</span><br>
<span class="quotelev1">&gt; mpiinit_sunos:
</span><br>
<span class="quotelev1">&gt; fatal: relocation error: file
</span><br>
<span class="quotelev1">&gt; /home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/ 
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0:
</span><br>
<span class="quotelev1">&gt; symbol nanosleep: referenced symbol not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have fixed this by compiling with &quot;-lrt&quot; option to the linker.
</span><br>
<p>You shouldn't have to do this...  Could you send me the config.log  
<br>
file configure for Open MPI, the installed $prefix/lib/libmpi.la  
<br>
file, and the output of mpicc -showme?
<br>
<p><span class="quotelev1">&gt; sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However when I run this again, I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev1">&gt; [pg1cluster01:19858] ERROR: A daemon on node csultra01 failed to start
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; [pg1cluster01:19858] ERROR: There may be more information available  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; [pg1cluster01:19858] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [pg1cluster01:19858] ERROR: The daemon exited unexpectedly with  
</span><br>
<span class="quotelev1">&gt; status 255.
</span><br>
<span class="quotelev1">&gt; 2 processes killed (possibly by Open MPI)
</span><br>
<p>Both of these are quite unexpected.  It looks like there is something  
<br>
wrong with your Solaris build.  Can you run on *just* the Solaris  
<br>
machine?  We only have limited resources for testing on Solaris, but  
<br>
have not run into this issue before.  What happens if you run mpirun  
<br>
on just the Solaris machine with the -d option to mpirun?
<br>
<p><span class="quotelev1">&gt; Sometimes I get the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun --hostfile hosts.txt --app mpiinit_appfile
</span><br>
<span class="quotelev1">&gt; [csultra01:06256] mca_common_sm_mmap_init: ftruncate failed with  
</span><br>
<span class="quotelev1">&gt; errno=28
</span><br>
<span class="quotelev1">&gt; [csultra01:06256] mca_mpool_sm_init: unable to create shared memory  
</span><br>
<span class="quotelev1">&gt; mapping
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value -2 instead of OMPI_SUCCESS
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<p>This looks like you got far enough along that you ran into our  
<br>
endianness issues, so this is about the best case you can hope for in  
<br>
your configuration.  The ftruncate error worries me, however.  But I  
<br>
think this is another symptom of something wrong with your Sun Sparc  
<br>
build.
<br>
<p>Brian
<br>
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
<li><strong>Next message:</strong> <a href="0823.php">Brian Barrett: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>Previous message:</strong> <a href="0821.php">Brian Barrett: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0814.php">Ravi Manumachu: "[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0833.php">Ravi Manumachu: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
