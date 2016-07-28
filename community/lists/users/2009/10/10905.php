<?
$subject_val = "[OMPI users] Openmpi not using IB and no warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 11 06:25:21 2009" -->
<!-- isoreceived="20091011102521" -->
<!-- sent="Sun, 11 Oct 2009 15:55:16 +0530" -->
<!-- isosent="20091011102516" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi not using IB and no warning message" -->
<!-- id="cb60cbc40910110325j441d3a4fh98877ba82e37d838_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi not using IB and no warning message<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-11 06:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Previous message:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A fortran application is installed with Intel Fortran 10.1, MKL-10 and
<br>
Openmpi-1.3.3 on a Rocks-5.1 HPC Linux cluster. The jobs are not scaling
<br>
when more than one node is used. The cluster has Intel Quad core Xeon
<br>
(E5472) @ 3.00GHz Dual processor (total 8 cores per node, 16GB RAM) and
<br>
Infiniband interconnectivity.
<br>
<p>Here are some of the timings:
<br>
<p>12 cores (Node 1: 8 cores, Node2: 4 cores)  --  No progress in the job
<br>
&nbsp;8 cores (Node 1: 8 cores)                           -- 21 hours (38 CG move
<br>
steps)
<br>
&nbsp;4 cores (Node 1: 4 cores)                           -- 25 hours
<br>
12 cores (Node 1, Node 2, Node 3: 4cores each) -- No progress
<br>
<p><p>&nbsp;&nbsp;&nbsp;Later to check, whether Open MPI is using IB or not, I used --mca btl
<br>
openib. But the job failed with following error message:
<br>
# cat /home1/g03/apps_test/amber/test16/err.352.job16
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[23671,1],12]) is on host: compute-0-12.local
<br>
&nbsp;&nbsp;Process 2 ([[23671,1],12]) is on host: compute-0-12.local
<br>
&nbsp;&nbsp;BTLs attempted: openib
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
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
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-12.local:5496] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-5.local:6916] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-5.local:6914] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-5.local:6915] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
[compute-0-5.local:6913] Abort before MPI_INIT completed successfully; not
<br>
able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
mpirun has exited due to process rank 12 with PID 5496 on
<br>
node compute-0-12.local exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-0-5.local:06910] 15 more processes have sent help message
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
[compute-0-5.local:06910] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0
<br>
to see all help / error messages
<br>
[compute-0-5.local:06910] 15 more processes have sent help message
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[23958,1],2]) is on host: compute-0-5.local
<br>
&nbsp;&nbsp;Process 2 ([[23958,1],2]) is on host: compute-0-5.local
<br>
&nbsp;&nbsp;BTLs attempted: openib
<br>
<p>Then added 'self' to --mca btl openib,. With this it started running, but I
<br>
can make sure its not using IB as I observed it from the netstat -i command.
<br>
<p>1st Snap:
<br>
<p>Every 2.0s: netstat
<br>
-i
<br>
Sun Oct 11 15:29:29 2009
<br>
<p>Kernel Interface table
<br>
Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP
<br>
TX-OVR Flg
<br>
eth0       1500   0  1847619      0     0    0  2073010    0      0      0
<br>
BMRU
<br>
ib0      65520   0     708      0     0    0      509    0      5      0
<br>
BMRU
<br>
lo        16436   0     5731      0     0    0     5731    0      0      0
<br>
LRU
<br>
<p>2nd Snap:
<br>
<p>Every 2.0s: netstat
<br>
-i
<br>
Sun Oct 11 15:29:57 2009
<br>
<p>Kernel Interface table
<br>
Iface       MTU Met    RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP
<br>
TX-OVR Flg
<br>
eth0       1500   0  1847647      0     0    0  2073073    0      0      0
<br>
BMRU
<br>
ib0      65520   0     708      0     0    0      509    0      5      0
<br>
BMRU
<br>
lo        16436   0     5731      0     0    0     5731    0      0      0
<br>
LRU
<br>
<p>Why OpenMPI is not able to use IB?
<br>
<p>The ldd to the executable shows, no IB libraries are linked. Is this the
<br>
reason:
<br>
ldd /opt/apps/siesta/siesta_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_lp64.so(0x00002aaaaaaad000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_intel_thread.so(0x00002aaaaadc2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/intel/mkl/10.0.5.025/lib/em64t/libmkl_core.so (0x00002aaaab2ad000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00000034a6200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f90.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi_f90.so.0
<br>
(0x00002aaaab4a0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpi_f77.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi_f77.so.0
<br>
(0x00002aaaab6a3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libmpi.so.0
<br>
(0x00002aaaab8db000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen-rte.so.0
<br>
(0x00002aaaabbaa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /opt/mpi/openmpi/1.3.3/intel/lib/libopen-pal.so.0
<br>
(0x00002aaaabe07000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000034a5e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000034a8200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000034a6600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libifport.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifport.so.5
<br>
(0x00002aaaac09a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libifcoremt.so.5 =&gt; /opt/intel/fce/10.1.008/lib/libifcoremt.so.5
<br>
(0x00002aaaac1d0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/cce/10.1.018/lib/libimf.so (0x00002aaaac401000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/cce/10.1.018/lib/libsvml.so
<br>
(0x00002aaaac766000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00000034a6e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libguide.so =&gt;
<br>
/opt/intel/mkl/10.0.5.025/lib/em64t/libguide.so(0x00002aaaac8f1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /opt/intel/cce/10.1.018/lib/libintlc.so.5
<br>
(0x00002aaaaca65000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00000034a5a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000034a7e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00000034a5600000)
<br>
<p>With the help of Open MPI FAQ:
<br>
<p># /opt/mpi/openmpi/1.3.3/intel/bin/ompi_info --param btl openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_base_verbose&quot; (current value: &quot;0&quot;,
<br>
data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level of the BTL framework
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl&quot; (current value: &lt;none&gt;, data
<br>
source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the btl
<br>
framework (&lt;none&gt; means use all components that can be found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_verbose&quot; (current value:
<br>
&quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Output some verbose OpenIB BTL information (0 = no
<br>
output, nonzero = output)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_warn_no_device_params_found&quot;
<br>
(current value: &quot;1&quot;, data source: default value, synonyms:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_hca_params_found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warn when no device-specific parameters are found
<br>
in the INI file specified by the btl_openib_device_param_files MCA parameter
<br>
(0 =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do not warn; any other value = warn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_warn_no_hca_params_found&quot;
<br>
(current value: &quot;1&quot;, data source: default value, deprecated, synonym of:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_device_params_found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warn when no device-specific parameters are found
<br>
in the INI file specified by the btl_openib_device_param_files MCA parameter
<br>
(0 =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do not warn; any other value = warn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_warn_default_gid_prefix&quot;
<br>
(current value: &quot;1&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warn when there is more than one active ports and
<br>
at least one of them connected to the network with only default GID prefix
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configured (0 = do not warn; any other value =
<br>
warn)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_openib_warn_nonexistent_if&quot;
<br>
(current value: &quot;1&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Warn if non-existent devices and/or ports are
<br>
specified in the btl_openib_if_[in|ex]clude MCA parameters (0 = do not warn;
<br>
any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other value = warn)
<br>
<p>During Open MPI install I've used --with-openib=/usr. So I believe its
<br>
compiled with IB support.
<br>
<p>The IB utilities such as ibv_rc_pingpong are working fine.
<br>
<p>I'm not getting why its OMPI is not using IB? Please help me to resolve this
<br>
issue.
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10905/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10906.php">Mostyn Lewis: "[OMPI users] Today's SVN 1.7a1r22089_svn simple job failure"</a>
<li><strong>Previous message:</strong> <a href="10904.php">John R. Cary: "Re: [OMPI users] Openmpi failure on dual quad linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
<li><strong>Reply:</strong> <a href="10908.php">Sangamesh B: "Re: [OMPI users] Openmpi not using IB and no warning message"</a>
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
