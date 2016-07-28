<?
$subject_val = "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 11:50:26 2012" -->
<!-- isoreceived="20121102155026" -->
<!-- sent="Fri, 2 Nov 2012 15:49:18 +0000" -->
<!-- isosent="20121102154918" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with PSM &amp;quot;Could not detect network connectivity&amp;quot;" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F1682B6_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 11:49:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Previous message:</strong> <a href="20622.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Reply:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting a problem where something called &quot;PSM&quot; is failing to start and that in turn is preventing my job from running.  Command and output are below.  I would like to understand what's going on.  Apparently this version of OpenMPI decided to build itself with support for PSM, but if it's not available, why fail if other transports are available?  Also, in my command I think I've told OpenMPI not to use anything but self and sm, so why would it try to use PSM? 
<br>
<p>Thanks in advance for any help...
<br>
<p>user_at_machinename:~&gt; /usr/mpi/intel/openmpi-1.4.3/bin/ompi_info -all | grep psm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: psm (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_connect_timeout&quot; (current value: &quot;180&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_debug&quot; (current value: &quot;1&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_unit&quot; (current value: &quot;-1&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_port&quot; (current value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_service_level&quot; (current value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_ib_pkey&quot; (current value: &quot;32767&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: parameter &quot;mtl_psm_priority&quot; (current value: &quot;0&quot;, data source: default value)
<br>
<p>Here is my command:
<br>
<p>/usr/mpi/intel/openmpi-1.4.3/bin/mpirun -n 1 --mca btl_base_verbose 30 --mca btl self,sm /release/cfd/simgrid/P_OPT.LINUX64
<br>
<p>and here is the output:
<br>
<p>[machinename:01124] mca: base: components_open: Looking for btl components
<br>
[machinename:01124] mca: base: components_open: opening btl components
<br>
[machinename:01124] mca: base: components_open: found loaded component self
<br>
[machinename:01124] mca: base: components_open: component self has no register function
<br>
[machinename:01124] mca: base: components_open: component self open function successful
<br>
[machinename:01124] mca: base: components_open: found loaded component sm
<br>
[machinename:01124] mca: base: components_open: component sm has no register function
<br>
[machinename:01124] mca: base: components_open: component sm open function successful
<br>
machinename.1124ipath_userinit: assign_context command failed: Network is down
<br>
machinename.1124can't open /dev/ipath, network down (err=26)
<br>
--------------------------------------------------------------------------
<br>
PSM was unable to open an endpoint. Please make sure that the network link is
<br>
active on the node and the hardware is functioning.
<br>
<p>&nbsp;&nbsp;Error: Could not detect network connectivity
<br>
--------------------------------------------------------------------------
<br>
[machinename:01124] mca: base: close: component self closed
<br>
[machinename:01124] mca: base: close: unloading component self
<br>
[machinename:01124] mca: base: close: component sm closed
<br>
[machinename:01124] mca: base: close: unloading component sm
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
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Previous message:</strong> <a href="20622.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>Reply:</strong> <a href="20624.php">Ralph Castain: "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
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
