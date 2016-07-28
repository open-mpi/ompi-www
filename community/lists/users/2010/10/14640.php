<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 14:40:40 2010" -->
<!-- isoreceived="20101028184040" -->
<!-- sent="Thu, 28 Oct 2010 14:40:33 -0400" -->
<!-- isosent="20101028184033" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="85EA84BC-C04E-459D-9195-1DEAD9ADE631_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CC9BE5D.70805_at_aem.umn.edu" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 14:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2010, at 2:18 PM, Ray Muno wrote:
<br>
<p><span class="quotelev1">&gt; On 10/22/2010 07:36 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ray,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking back at your original message, you say that it works if you use the Myricom supplied mpirun from the Myrinet roll. I wonder if this is a mismatch between libraries on the compute nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What do you get if you use your OMPI's mpirun with:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -n 1 -H &lt;remote_host&gt; ldd $PWD/&lt;your_binary&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am wondering if ldd find the libraries from your compile or the Myrinet roll.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, a bit of a hiatus trying to get this resolved.  Had to tend other
</span><br>
<span class="quotelev1">&gt; fires...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do think I had an issue of mixed environments.   It is a Rocks 5.3
</span><br>
<span class="quotelev1">&gt; test cluster and it had an old version of OpenMPI installed as part of
</span><br>
<span class="quotelev1">&gt; the Rocks 5.3 HPC roll.  I have no removed the HPC roll. All nodes were
</span><br>
<span class="quotelev1">&gt; rebuilt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the previous setup, we could actually run OpenMPI jobs over MX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With all other spurious versions of OpenMPI (and MPICH for that matter)
</span><br>
<span class="quotelev1">&gt; removed, I have rebuilt and re-installed, from a fresh source tree,
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.3. It was built with PGI 10.8 compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, we cannot run with MX at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The install was built with MX.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ompi_info | grep mx
</span><br>
<span class="quotelev1">&gt;                 MCA btl: mx (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt;                 MCA mtl: mx (MCA v2.0, API v2.0, Component v1.4.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can run with TCP, but now I get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:24863] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx: perhaps a
</span><br>
<span class="quotelev1">&gt; missing symbol, or compiled for a different version of Open MPI? (ignored)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ls -l /share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx*
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 muno muno  1070 Oct 28 12:49
</span><br>
<span class="quotelev1">&gt; /share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx.la
</span><br>
<span class="quotelev1">&gt; -rwxr-xr-x 1 muno muno 32044 Oct 28 12:49
</span><br>
<span class="quotelev1">&gt; /share/apps/opt/OpenMPI/1.4.3/PGI/10.8/lib/openmpi/mca_mtl_mx.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v -nolocal -np 96 --x MX_RCACHE=2 -hostfile machines  --mca mtl
</span><br>
<span class="quotelev1">&gt; mx --mca pml cm cpi.pgi
</span><br>
<p>Does your environment have LD_LIBRARY_PATH set to point to $OMPI/lib and $MX/lib? Does it get set on login? Is $OMPI/bin in your PATH?
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14639.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
