<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 14:18:12 2010" -->
<!-- isoreceived="20101028181812" -->
<!-- sent="Thu, 28 Oct 2010 13:18:05 -0500" -->
<!-- isosent="20101028181805" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CC9BE5D.70805_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E5C17D00-DE64-44E5-A9E1-F0FCD1EB3C96_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 14:18:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14638.php">jody: "[OMPI users] Help with a strange error"</a>
<li><strong>In reply to:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/22/2010 07:36 AM, Scott Atchley wrote:
<br>
<span class="quotelev1">&gt; Ray,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking back at your original message, you say that it works if you use the Myricom supplied mpirun from the Myrinet roll. I wonder if this is a mismatch between libraries on the compute nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you get if you use your OMPI's mpirun with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 1 -H &lt;remote_host&gt; ldd $PWD/&lt;your_binary&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering if ldd find the libraries from your compile or the Myrinet roll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>OK, a bit of a hiatus trying to get this resolved.  Had to tend other
<br>
fires...
<br>
<p>I do think I had an issue of mixed environments.   It is a Rocks 5.3
<br>
test cluster and it had an old version of OpenMPI installed as part of
<br>
the Rocks 5.3 HPC roll.  I have no removed the HPC roll. All nodes were
<br>
rebuilt.
<br>
<p>In the previous setup, we could actually run OpenMPI jobs over MX.
<br>
<p>With all other spurious versions of OpenMPI (and MPICH for that matter)
<br>
removed, I have rebuilt and re-installed, from a fresh source tree,
<br>
OpenMPI 1.4.3. It was built with PGI 10.8 compilers.
<br>
<p>Now, we cannot run with MX at all.
<br>
<p>The install was built with MX.
<br>
<p>$ ompi_info | grep mx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: mx (MCA v2.0, API v2.0, Component v1.4.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA mtl: mx (MCA v2.0, API v2.0, Component v1.4.3)
<br>
<p>I can run with TCP, but now I get
<br>
<p>[compute-0-1.local:24863] mca: base: component_find: unable to open
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx: perhaps a
<br>
missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
<p>$ ls -l /share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx*
<br>
-rwxr-xr-x 1 muno muno  1070 Oct 28 12:49
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx.la
<br>
-rwxr-xr-x 1 muno muno 32044 Oct 28 12:49
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx.so
<br>
<p>mpirun -v -nolocal -np 96 --x MX_RCACHE=2 -hostfile machines  --mca mtl
<br>
mx --mca pml cm cpi.pgi
<br>
[compute-0-3.local:21116] mca: base: component_find: unable to open
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx: perhaps a
<br>
missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
[compute-0-3.local:21115] mca: base: component_find: unable to open
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx: perhaps a
<br>
missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-3.local
<br>
Framework: mtl
<br>
Component: mx
<br>
--------------------------------------------------------------------------
<br>
[compute-0-3.local:21116] mca: base: components_open: component pml / cm
<br>
open function failed
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      compute-0-3.local
<br>
Framework: mtl
<br>
Component: mx
<br>
--------------------------------------------------------------------------
<br>
[compute-0-3.local:21115] mca: base: components_open: component pml / cm
<br>
open function failed
<br>
[compute-0-3.local:21117] mca: base: component_find: unable to open
<br>
/share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx: perhaps a
<br>
missing symbol, or compiled for a different version of Open MPI? (ignored)
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><pre>
--
 Ray Muno
 University of Minnesota
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14638.php">jody: "[OMPI users] Help with a strange error"</a>
<li><strong>In reply to:</strong> <a href="14548.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
