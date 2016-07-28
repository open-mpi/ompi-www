<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 10 00:09:52 2006" -->
<!-- isoreceived="20060310050952" -->
<!-- sent="Fri, 10 Mar 2006 10:09:46 +0500" -->
<!-- isosent="20060310050946" -->
<!-- name="Ravi Manumachu" -->
<!-- email="manumachu.reddy_at_[hidden]" -->
<!-- subject="[OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster" -->
<!-- id="fd06e84e528f.528ffd06e84e_at_ucd.ie" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2006-03-10 00:09:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am facing problems running OpenMPI-1.0.1 on a heterogeneous cluster.
<br>
<p>I have a Linux machine and a SunOS machine in this cluster.
<br>
<p>linux$ uname -a
<br>
Linux pg1cluster01 2.6.8-1.521smp #1 SMP Mon Aug 16 09:25:06 EDT 2004
<br>
i686 i686 i386 GNU/Linux
<br>
<p>OpenMPI-1.0.1 is installed uisng 
<br>
<p>./configure --prefix=...
<br>
make all install
<br>
<p>sunos$ uname -a
<br>
SunOS csultra01 5.9 Generic_112233-10 sun4u sparc SUNW,Ultra-5_10
<br>
<p>OpenMPI-1.0.1 is installed uisng 
<br>
<p>./configure --prefix=...
<br>
make all install
<br>
<p><p>I use ssh. Both nodes are accessible without prompts for password.
<br>
<p>I use the following simple application:
<br>
<p>------------------------------------------------------------------------
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc, me;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char pname[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int plen;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;argc,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;argv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Comm_rank(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;me
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rc != MPI_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pname,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;plen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s:Hello world from %d\n&quot;, pname, me);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
------------------------------------------------------------------------
<br>
<p>It is compiled as follows:
<br>
<p>linux$ mpicc -o mpiinit_linux mpiinit.c
<br>
sunos$ mpicc -o mpiinit_sunos mpiinit.c
<br>
<p>My hosts file is
<br>
<p>hosts.txt
<br>
---------
<br>
pg1cluster01 slots=2
<br>
csultra01 slots=1
<br>
<p>My app file is
<br>
<p>mpiinit_appfile
<br>
---------------
<br>
-np 2 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_linux
<br>
-np 1 /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos
<br>
<p>$ mpirun --hostfile hosts.txt --app mpiinit_appfile
<br>
ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos:
<br>
fatal: relocation error: file
<br>
/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/libmca_common_sm.so.0:
<br>
symbol nanosleep: referenced symbol not found
<br>
ld.so.1: /home/cs/manredd/OpenMPI/openmpi-1.0.1/MPITESTS/mpiinit_sunos:
<br>
fatal: relocation error: file
<br>
/home/cs/manredd/OpenMPI/openmpi-1.0.1/OpenMPI-SunOS-5.9/lib/libmca_common_sm.so.0:
<br>
symbol nanosleep: referenced symbol not found
<br>
<p>I have fixed this by compiling with &quot;-lrt&quot; option to the linker.
<br>
<p>sunos$ mpicc -o mpiinit_sunos mpiinit.c -lrt
<br>
<p>However when I run this again, I get the error:
<br>
<p>$ mpirun --hostfile hosts.txt --app mpiinit_appfile
<br>
[pg1cluster01:19858] ERROR: A daemon on node csultra01 failed to start
<br>
as expected.
<br>
[pg1cluster01:19858] ERROR: There may be more information available from
<br>
[pg1cluster01:19858] ERROR: the remote shell (see above).
<br>
[pg1cluster01:19858] ERROR: The daemon exited unexpectedly with status 255.
<br>
2 processes killed (possibly by Open MPI)
<br>
<p>Sometimes I get the error.
<br>
<p>$ mpirun --hostfile hosts.txt --app mpiinit_appfile
<br>
[csultra01:06256] mca_common_sm_mmap_init: ftruncate failed with errno=28
<br>
[csultra01:06256] mca_mpool_sm_init: unable to create shared memory mapping
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OMPI_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>Please let me know the resolution of this problem. Please let me know if
<br>
you need more details.
<br>
<p>Regards,
<br>
Ravi.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0815.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0813.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
<li><strong>Reply:</strong> <a href="0822.php">Brian Barrett: "Re: [OMPI users] problems with OpenMPI-1.0.1 on SunOS 5.9; problems on heterogeneous cluster"</a>
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
