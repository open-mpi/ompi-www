<?
$subject_val = "Re: [OMPI users] OK, got it installed, but...  can't find libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 14:31:10 2008" -->
<!-- isoreceived="20081105193110" -->
<!-- sent="Wed, 5 Nov 2008 14:31:04 -0500" -->
<!-- isosent="20081105193104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OK, got it installed, but...  can't find libraries" -->
<!-- id="35C8EE76-F94D-4434-8F52-C4C403EB4772_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4910F567.2000207_at_earthlink.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] OK, got it installed, but...  can't find libraries<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-05 14:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Previous message:</strong> <a href="7213.php">Daniel Gruner: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The errors you are seeing aren't related to using g95 vs. gfortran:
<br>
<p>1. The warnings from configure are fairly normal.  It's just configure  
<br>
trying to be responsible and telling you things that you might want to  
<br>
know (e.g., your system has no support for Fortran INTEGER*16, so OMPI  
<br>
is not including support for MPI_INTEGER16).
<br>
<p>2. The problem you are seeing is simply that your installation library  
<br>
directory is not included in your linker default search path.  You can  
<br>
typically fix this by prepending your LD_LIBRARY_PATH environment  
<br>
variable.  See <a href="http://www.open-mpi.org/faq/?category=running#run">http://www.open-mpi.org/faq/?category=running#run</a>- 
<br>
prereqs.
<br>
<p><p>On Nov 4, 2008, at 8:22 PM, PattiMichelle wrote:
<br>
<p><span class="quotelev1">&gt; I went through the compile process with openMPI - twice, using g95  
</span><br>
<span class="quotelev1">&gt; and gfortran (the default install on my openSuSE11.0 setup).  It  
</span><br>
<span class="quotelev1">&gt; seems to have trouble finding the libraries, in particular libopen- 
</span><br>
<span class="quotelev1">&gt; pal.so.0
</span><br>
<span class="quotelev1">&gt; I've seen shared-library problems with some x86_64 packages that I  
</span><br>
<span class="quotelev1">&gt; contrib to SourceForge and I'm wondering if this is a known problem  
</span><br>
<span class="quotelev1">&gt; with openMPI?  I'm using a TYAN 32-processor SMP machine with  
</span><br>
<span class="quotelev1">&gt; openSuSE11.0 installed.  (I tried copying the shared object file(s)  
</span><br>
<span class="quotelev1">&gt; to /usr/lib and /usr/lib64)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is STDERR output, the first time with g95 and then with gfortran:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 # ./configure FC=/usr/local/g95- 
</span><br>
<span class="quotelev1">&gt; install64bi/bin/x86_64-suse-linux-gnu-g95 --prefix=/usr/local/bin
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not  
</span><br>
<span class="quotelev1">&gt; link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt; configure: WARNING: On Linux and --with-udapl was not specified
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Not building the udapl BTL
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev1">&gt; configure: WARNING: File locks may not work with NFS.  See the  
</span><br>
<span class="quotelev1">&gt; Installation and
</span><br>
<span class="quotelev1">&gt; users manual for instructions on testing and if necessary fixing this
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 # mpif90
</span><br>
<span class="quotelev1">&gt; mpif90: error while loading shared libraries: libopen-pal.so.0:  
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... now try gfortran ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.2.8 # ./configure  --prefix=/usr/local/bin &gt;  
</span><br>
<span class="quotelev1">&gt; configure_STDIO.txt
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Corresponding Fortran 77 type (INTEGER*16)  
</span><br>
<span class="quotelev1">&gt; not supported
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Skipping Fortran 90 type (INTEGER*16)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: On Linux and --with-udapl was not specified
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Not building the udapl BTL
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev1">&gt; configure: WARNING: File locks may not work with NFS.  See the  
</span><br>
<span class="quotelev1">&gt; Installation and
</span><br>
<span class="quotelev1">&gt; users manual for instructions on testing and if necessary fixing this
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 # make all install &gt;  
</span><br>
<span class="quotelev1">&gt; GFortMakeAllInstall_STDIO.txt
</span><br>
<span class="quotelev1">&gt; mpif90
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_maffinity_first_use.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_maffinity_libnuma.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_paffinity_linux.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `libopen-rte.la'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;snip!&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_mpool_rdma.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_mpool_sm.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_pml_cm.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_pml_ob1.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_rcache_vma.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: warning: relinking `mca_topo_unity.la'
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 # mpif90
</span><br>
<span class="quotelev1">&gt; mpif90: error while loading shared libraries: libopen-pal.so.0:  
</span><br>
<span class="quotelev1">&gt; cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 #
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/openmpi-1.2.8 # cd /usr/local/lib
</span><br>
<span class="quotelev1">&gt; linux-pouh:/usr/local/lib # ls
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.la        libmpi_cxx.so        libmpi_f77.so.0       
</span><br>
<span class="quotelev1">&gt; libmpi.so.0.0.0       libopen-rte.la
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so        libmpi_cxx.so.0      libmpi_f77.so.0.0.0   
</span><br>
<span class="quotelev1">&gt; libopen-pal.la        libopen-rte.so
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0      libmpi_cxx.so.0.0.0  libmpi.la             
</span><br>
<span class="quotelev1">&gt; libopen-pal.so        libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; libmca_common_sm.so.0.0.0  libmpi_f77.la        libmpi.so             
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0      libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; libmpi_cxx.la              libmpi_f77.so        libmpi.so.0           
</span><br>
<span class="quotelev1">&gt; libopen-pal.so.0.0.0  openmpi
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7215.php">Jeff Squyres: "Re: [OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Previous message:</strong> <a href="7213.php">Daniel Gruner: "Re: [OMPI users] Beowulf cluster and openmpi"</a>
<li><strong>In reply to:</strong> <a href="7208.php">PattiMichelle: "[OMPI users] OK, got it installed, but...  can't find libraries"</a>
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
