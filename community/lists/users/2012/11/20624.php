<?
$subject_val = "Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 12:03:10 2012" -->
<!-- isoreceived="20121102160310" -->
<!-- sent="Fri, 2 Nov 2012 09:03:02 -0700" -->
<!-- isosent="20121102160302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with PSM &amp;quot;Could not detect network connectivity&amp;quot;" -->
<!-- id="B282F666-4F86-4745-B900-3296D133C267_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F1682B6_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 12:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20625.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>In reply to:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try configuring --without-psm
<br>
<p>That  should solve the problem. We are probably picking up that you have PSM libraries on the machine, but it looks like you aren't actually running it.
<br>
<p>And yes - it should gracefully disable itself. You might check the 1.6 series to see if it behaves better - if not, we should fix it.
<br>
<p><p>On Nov 2, 2012, at 8:49 AM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am getting a problem where something called &quot;PSM&quot; is failing to start and that in turn is preventing my job from running.  Command and output are below.  I would like to understand what's going on.  Apparently this version of OpenMPI decided to build itself with support for PSM, but if it's not available, why fail if other transports are available?  Also, in my command I think I've told OpenMPI not to use anything but self and sm, so why would it try to use PSM? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; user_at_machinename:~&gt; /usr/mpi/intel/openmpi-1.4.3/bin/ompi_info -all | grep psm
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: psm (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_connect_timeout&quot; (current value: &quot;180&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_debug&quot; (current value: &quot;1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_ib_unit&quot; (current value: &quot;-1&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_ib_port&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_ib_service_level&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_ib_pkey&quot; (current value: &quot;32767&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: parameter &quot;mtl_psm_priority&quot; (current value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.4.3/bin/mpirun -n 1 --mca btl_base_verbose 30 --mca btl self,sm /release/cfd/simgrid/P_OPT.LINUX64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and here is the output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; machinename.1124ipath_userinit: assign_context command failed: Network is down
</span><br>
<span class="quotelev1">&gt; machinename.1124can't open /dev/ipath, network down (err=26)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; PSM was unable to open an endpoint. Please make sure that the network link is
</span><br>
<span class="quotelev1">&gt; active on the node and the hardware is functioning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Error: Could not detect network connectivity
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: close: component self closed
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: close: component sm closed
</span><br>
<span class="quotelev1">&gt; [machinename:01124] mca: base: close: unloading component sm
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20625.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<li><strong>Previous message:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
<li><strong>In reply to:</strong> <a href="20623.php">Blosch, Edwin L: "[OMPI users] Trouble with PSM &quot;Could not detect network connectivity&quot;"</a>
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
