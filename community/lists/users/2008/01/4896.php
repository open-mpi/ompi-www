<?
$subject_val = "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 14:51:51 2008" -->
<!-- isoreceived="20080128195151" -->
<!-- sent="Mon, 28 Jan 2008 14:51:22 -0500" -->
<!-- isosent="20080128195122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)" -->
<!-- id="6BAF65FA-E979-4865-88C6-AADCA27D2783_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2FE28C0766F7274AB44868F97FBF7EBF1A028D_at_CETO.net.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 14:51:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4897.php">Jeff Squyres: "Re: [OMPI users] Information about multi-path on IB-based systems"</a>
<li><strong>Previous message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier.
<br>
<p>I'm not a SCALAPACK expert, but a common mistake I've seen users make  
<br>
is to use the mpif.h from a different MPI implementation when  
<br>
compiling their fortran programs.  Can you verify that you're getting  
<br>
the Open MPI mpif.h?
<br>
<p>Also, there is a known problem that with the Pathscale compiler that  
<br>
they have stubbornly refused to comment on for about a year now  
<br>
(meaning: a problem was identified many moons ago, and it has not been  
<br>
tracked down to be either a Pathscale compiler problem or an Open MPI  
<br>
problem -- we did as much as we could and handed off to Pathscale, but  
<br>
with no forward progress since then).  So you *may* be running into  
<br>
that issue...?  FWIW, we only saw the pathscale problem when running  
<br>
on InfiniBand hardware, so YMMV.
<br>
<p>Can you run any other MPI programs with Open MPI?
<br>
<p><p><p>On Jan 22, 2008, at 4:06 PM, Backlund, Daniel wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all, I am using OMPI 1.2.4 on a Linux cluster (Rocks 4.2).  
</span><br>
<span class="quotelev1">&gt; OMPI was configured to use the
</span><br>
<span class="quotelev1">&gt; Pathscale Compiler Suite installed in the (NFS mounted on nodes) / 
</span><br>
<span class="quotelev1">&gt; home/PROGRAMS/pathscale. I am
</span><br>
<span class="quotelev1">&gt; trying to compile and run the example1.f that comes with the ACML  
</span><br>
<span class="quotelev1">&gt; package from AMD, and I am
</span><br>
<span class="quotelev1">&gt; unable to get it to run. All nodes have the same Opteron processors  
</span><br>
<span class="quotelev1">&gt; and 2GB ram per core. OMPI
</span><br>
<span class="quotelev1">&gt; was configured as below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export CC=pathcc
</span><br>
<span class="quotelev1">&gt; export CXX=pathCC
</span><br>
<span class="quotelev1">&gt; export FC=pathf90
</span><br>
<span class="quotelev1">&gt; export F77=pathf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/1.2.4 --enable-static --without- 
</span><br>
<span class="quotelev1">&gt; threads --without-memory-manager \
</span><br>
<span class="quotelev1">&gt;  --without-libnuma --disable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configuration was successful, the install was successful, I can  
</span><br>
<span class="quotelev1">&gt; even run a sample mpihello.f90
</span><br>
<span class="quotelev1">&gt; program. I would eventually like to link the ACML SCALAPACK and  
</span><br>
<span class="quotelev1">&gt; BLACS libraries to our code, but I
</span><br>
<span class="quotelev1">&gt; need some help. The ACML version is 3.1.0 for pathscale64. I go into  
</span><br>
<span class="quotelev1">&gt; the scalapack_examples directory,
</span><br>
<span class="quotelev1">&gt; modify GNUmakefile to the correct values, and compile successfully.  
</span><br>
<span class="quotelev1">&gt; I have made openmpi into an rpm and
</span><br>
<span class="quotelev1">&gt; pushed it to the nodes, modified LD_LIBRARY_PATH and PATH, and made  
</span><br>
<span class="quotelev1">&gt; sure I can see it on all nodes.
</span><br>
<span class="quotelev1">&gt; When I try to run the example1.exe which is generated, using /opt/ 
</span><br>
<span class="quotelev1">&gt; openmpi/1.2.4/bin/mpirun -np 6 example1.exe
</span><br>
<span class="quotelev1">&gt; I get the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt; example1.res &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31295] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31295] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31295] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31295] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31295] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31298] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31298] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31298] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31298] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31298] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31299] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31299] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31299] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31299] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31299] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31300] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31300] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31300] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31300] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31300] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31296] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31296] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31296] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31296] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31296] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31297] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31297] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31297] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31297] Failing at address: 0x44000070
</span><br>
<span class="quotelev1">&gt; [XXXXXXX:31297] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 31295 on node  
</span><br>
<span class="quotelev1">&gt; XXXXXXX.ourdomain.com exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; 5 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt; end example1.res &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the result of ldd example1.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt; ldd example1.exe &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;        libmpi_f90.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi_f90.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a9557d000)
</span><br>
<span class="quotelev1">&gt;        libmpi_f77.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi_f77.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a95681000)
</span><br>
<span class="quotelev1">&gt;        libmpi.so.0 =&gt; /opt/openmpi/1.2.4/lib/libmpi.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a957b3000)
</span><br>
<span class="quotelev1">&gt;        libopen-rte.so.0 =&gt; /opt/openmpi/1.2.4/lib/libopen-rte.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a959fb000)
</span><br>
<span class="quotelev1">&gt;        libopen-pal.so.0 =&gt; /opt/openmpi/1.2.4/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000002a95be7000)
</span><br>
<span class="quotelev1">&gt;        librt.so.1 =&gt; /lib64/tls/librt.so.1 (0x0000003e7cd00000)
</span><br>
<span class="quotelev1">&gt;        libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003e7c200000)
</span><br>
<span class="quotelev1">&gt;        libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003e79e00000)
</span><br>
<span class="quotelev1">&gt;        libmv.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/libmv.so.1  
</span><br>
<span class="quotelev1">&gt; (0x0000002a95d4d000)
</span><br>
<span class="quotelev1">&gt;        libmpath.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/libmpath.so. 
</span><br>
<span class="quotelev1">&gt; 1 (0x0000002a95e76000)
</span><br>
<span class="quotelev1">&gt;        libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003e77a00000)
</span><br>
<span class="quotelev1">&gt;        libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003e77c00000)
</span><br>
<span class="quotelev1">&gt;        libpathfortran.so.1 =&gt; /home/PROGRAMS/pathscale/lib/3.0/ 
</span><br>
<span class="quotelev1">&gt; libpathfortran.so.1 (0x0000002a95f97000)
</span><br>
<span class="quotelev1">&gt;        libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003e77700000)
</span><br>
<span class="quotelev1">&gt;        libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0  
</span><br>
<span class="quotelev1">&gt; (0x0000003e78200000)
</span><br>
<span class="quotelev1">&gt;        /lib64/ld-linux-x86-64.so.2 (0x0000003e76800000)
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt; end ldd &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Like I said, the compilation of the example program yields no  
</span><br>
<span class="quotelev1">&gt; errors, it just will not run.
</span><br>
<span class="quotelev1">&gt; Does anybody have any suggestions? Am I doing something wrong?
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4897.php">Jeff Squyres: "Re: [OMPI users] Information about multi-path on IB-based systems"</a>
<li><strong>Previous message:</strong> <a href="4895.php">Jeff Squyres: "Re: [OMPI users] Topology functions from MPI 1.1"</a>
<li><strong>In reply to:</strong> <a href="4865.php">Backlund, Daniel: "[OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4924.php">Backlund, Daniel: "Re: [OMPI users] SCALAPACK: Segmentation Fault (11) and Signal code:Address not mapped (1)"</a>
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
