<?
$subject_val = "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 12:16:55 2012" -->
<!-- isoreceived="20120529161655" -->
<!-- sent="Tue, 29 May 2012 12:16:49 -0400" -->
<!-- isosent="20120529161649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6" -->
<!-- id="4C15DC2A-0730-4842-8EDD-B0060179BEAD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FC4BEB7.3000206_at_ictp.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 12:16:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19392.php">Jeff Squyres: "Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>In reply to:</strong> <a href="19388.php">Antonio Messina: "[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you also send this file (please compress):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal/libltdl/config.log
<br>
<p><p>On May 29, 2012, at 8:19 AM, Antonio Messina wrote:
<br>
<p><span class="quotelev1">&gt; Dear all, I'm having troubles while compiling (well, trying to compile)
</span><br>
<span class="quotelev1">&gt; openmpi 1.6 with intel 12.0.4. The error message I am getting while
</span><br>
<span class="quotelev1">&gt; running the configure script is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** GNU libltdl setup
</span><br>
<span class="quotelev1">&gt; checking location of libltdl... internal copy
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Failed to build GNU libltdl.  This usually means
</span><br>
<span class="quotelev1">&gt; that something
</span><br>
<span class="quotelev1">&gt; configure: WARNING: is incorrectly setup with your environment.  There
</span><br>
<span class="quotelev1">&gt; may be useful information in
</span><br>
<span class="quotelev1">&gt; configure: WARNING: opal/libltdl/config.log.  You can also disable GNU
</span><br>
<span class="quotelev1">&gt; libltdl, which will disable
</span><br>
<span class="quotelev1">&gt; configure: WARNING: dynamic shared object loading, by configuring with
</span><br>
<span class="quotelev1">&gt; --disable-dlopen.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line I'm using is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/1.6/intel/2011  --with-tm=/opt/torque
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using &quot;module environment&quot; which is setting the following variables:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PATH=/opt/intel/2011/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/maui/bin:/opt/maui/sbin:/opt/bin:/opt/torque/bin:/opt/torque/sbin:/root/bin
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/intel/2011/lib/intel64:/opt/intel/2011/mkl/lib/intel64:/opt/torque/lib
</span><br>
<span class="quotelev1">&gt; F77=ifort
</span><br>
<span class="quotelev1">&gt; CXX=icpc
</span><br>
<span class="quotelev1">&gt; FC=ifort
</span><br>
<span class="quotelev1">&gt; CC=icc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The machine used to comiple the software is a fresh CentOS 6.2 x86_64.
</span><br>
<span class="quotelev1">&gt; In attach you will find the config.log and the output of the configure
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compilation with the following compilers goes fine:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * gcc 4.6.2
</span><br>
<span class="quotelev1">&gt; * intel 11.1
</span><br>
<span class="quotelev1">&gt; * pgi 10.9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can provide logs and compilation/configure outputs for those
</span><br>
<span class="quotelev1">&gt; compilation as well, if needed, and the list of installed packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much in advance for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .a.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;&lt;openmpi-1.6_intel.2011_configure.log.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19392.php">Jeff Squyres: "Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<li><strong>In reply to:</strong> <a href="19388.php">Antonio Messina: "[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Reply:</strong> <a href="19394.php">Antonio Messina: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
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
