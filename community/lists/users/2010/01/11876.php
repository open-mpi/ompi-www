<?
$subject_val = "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 15:23:17 2010" -->
<!-- isoreceived="20100125202317" -->
<!-- sent="Mon, 25 Jan 2010 15:23:12 -0500" -->
<!-- isosent="20100125202312" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3" -->
<!-- id="C7F4E09A-2E6D-4F12-8417-63DAEB6FE7F8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5DCDB8.5000806_at_laposte.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-25 15:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11875.php">&#197;ke Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 25, 2010, at 11:58 AM, Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; I built OpenMPI-1.4.1 without openib support with the following configuration options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/develop/libs/OpenMPI/openmpi-1.4.1/LINUX_GCC_4_1_tcp_mach --enable-static --enable-shared --enable-cxx-exceptions --enable-mpi-f77 --disable-mpi-f90 --enable-mpi-cxx --disable-mpi-cxx-seek --enable-dist --enable-mpi-profile --enable-binaries --enable-mpi-threads --enable-memchecker --disable-debug --with-pic --with-threads   --with-sge
</span><br>
<p>Note that you should not use --enable-dist.  --enable-dist is used by the OMPI maintainers ONLY when generating official downloadable tarballs.  It is *NOT* guaranteed to make sane / correct builds for general purpose runs.  Here's what ./configure --help says about --enable-dist:
<br>
<p>&nbsp;&nbsp;--enable-dist           guarantee that that the &quot;dist&quot; make target will be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functional, although may not guarantee that any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other make target will be functional.
<br>
<p>Specifically: --enable-dist allows some configure tests to &quot;pass&quot; even though they shouldn't.  For example, I don't have MX installed on my systems.  But with --enable-dist, the MX tests in OMPI's configure script will &quot;pass&quot; just enough so that I can &quot;make dist&quot; to generate a tarball and still include all the MX plugin source code.  
<br>
<p><span class="quotelev1">&gt; On my cluster, I run a small test (a broadcast on a 100 integer array) on 12 processes balanced on 3 nodes, but I asked for using openib. It works with the following messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 12 -hostfile /tmp/72936.1.64.q/machines --mca btl openib,sm,self /home/numeca/tmp/gontier/bcast/exe_ompi_cluster -nloop 2 -nbuff 100
</span><br>
<p>Is your PATH and LD_LIBRARY_PATH set correctly such that you'll find the &quot;right&quot; ones (i.e., the ones that you just built/installed in /develop/libs/OpenMPI/openmpi-1.4.1/LINUX_GCC_4_1_tcp_mach)?  I.e., is it possible that you're finding some other OMPI install that has OpenFabrics support?
<br>
<p>Further, did you ever previously install Open MPI into that prefix and include OpenFabrics support?  I ask because OMPI's OpenFabrics support is in the form of a plugin -- if you simply installed another copy of OMPI into the same prefix without uninstalling first, the OpenFabrics plugin could still have been left in the tree, and therefore used at run time.
<br>
<p>Finally, note that you didn't tell Open MPI to *NOT* build OpenFabrics support.  In this case, OMPI's configure script looks for OpenFabrics support, and if it finds it, builds it.  But if it doesn't find OpenFabrics support (and you didn't specifically ask for it), it just skips it and keeps going.  You might want to look through the output of OMPI's configure and see if it found OpenFabrics support and therefore decided to build it.
<br>
<p><span class="quotelev1">&gt; I finally run ompi_info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./ompi_info | grep openib
</span><br>
<span class="quotelev1">&gt;                  MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Openib seems to be supported. That is weird because I did not ask for...
</span><br>
<p>Yep; see above.
<br>
<p><span class="quotelev1">&gt; So, assuming the compilation of OpenMPI which does not support openib here, what happened? Was tcp selected? How can I check which device has been used (or force an explicit message)?
</span><br>
<p>Unfortunately, OMPI currently lacks a good message indicating which device is used at run-time (because it's actually a surprisingly complex issue, since OMPI chooses a communication device based on which peer it's talking to, among other reasons).  We hope to have a good message in sometime in the OMPI 1.5 series.
<br>
<p><span class="quotelev1">&gt; By the way, what is the meaning of this message in my case?
</span><br>
<p>Do you mean this message?
<br>
<p>-----
<br>
WARNING: There was an error initializing an OpenFabrics device.
<br>
<p>&nbsp;&nbsp;Local host:   node005
<br>
&nbsp;&nbsp;Local device: mthca0
<br>
-----
<br>
<p>If so, it means that Open MPI was unable to initialize the InfiniBand HCA known as &quot;mthca0&quot; on the server known as node005.  
<br>
<p>The RLIMIT messages are likely symptoms of the issue; you likely need to set your registered memory limits to &quot;unlimited&quot;.  See the OMPI FAQ in the OpenFabrics section for questions about registered memory limits for instructions how.
<br>
<p><span class="quotelev1">&gt; By the way, another different think: does OpenMPI must be compiled with gcc-4.1 or later, or gcc-3.4 (for example) can be used? 
</span><br>
<p>gcc 3.4 should be fine.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11877.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Previous message:</strong> <a href="11875.php">&#197;ke Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="11869.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11887.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
