<?
$subject_val = "[OMPI users] OK, got it installed, but...  can't find libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 20:22:36 2008" -->
<!-- isoreceived="20081105012236" -->
<!-- sent="Tue, 04 Nov 2008 17:22:47 -0800" -->
<!-- isosent="20081105012247" -->
<!-- name="PattiMichelle" -->
<!-- email="miche1_at_[hidden]" -->
<!-- subject="[OMPI users] OK, got it installed, but...  can't find libraries" -->
<!-- id="4910F567.2000207_at_earthlink.net" -->
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
<strong>Subject:</strong> [OMPI users] OK, got it installed, but...  can't find libraries<br>
<strong>From:</strong> PattiMichelle (<em>miche1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 20:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7209.php">Mehdi Bozzo-Rey: "[OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Previous message:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Reply:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I went through the compile process with openMPI - twice, using g95 and
<br>
gfortran (the default install on my openSuSE11.0 setup).  It seems to
<br>
have trouble finding the libraries, in particular libopen-pal.so.0
<br>
I've seen shared-library problems with some x86_64 packages that I
<br>
contrib to SourceForge and I'm wondering if this is a known problem with
<br>
openMPI?  I'm using a TYAN 32-processor SMP machine with openSuSE11.0
<br>
installed.  (I tried copying the shared object file(s) to /usr/lib and
<br>
/usr/lib64)
<br>
<p>This is STDERR output, the first time with g95 and then with gfortran:
<br>
<p>linux-pouh:/usr/local/openmpi-1.2.8 # ./configure
<br>
FC=/usr/local/g95-install64bi/bin/x86_64-suse-linux-gnu-g95
<br>
--prefix=/usr/local/bin
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not link
<br>
compatible
<br>
configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
configure: WARNING: On Linux and --with-udapl was not specified
<br>
configure: WARNING: Not building the udapl BTL
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the
<br>
Installation and
<br>
users manual for instructions on testing and if necessary fixing this
<br>
linux-pouh:/usr/local/openmpi-1.2.8 # mpif90
<br>
mpif90: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-pouh:/usr/local/openmpi-1.2.8 #  
<br>
<p>... now try gfortran ...
<br>
<p>/usr/local/openmpi-1.2.8 # ./configure  --prefix=/usr/local/bin &gt;
<br>
configure_STDIO.txt
<br>
configure: WARNING:  -fno-strict-aliasing has been added to CFLAGS
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure: WARNING: *** Did not find corresponding C type
<br>
configure: WARNING: *** Corresponding Fortran 77 type (INTEGER*16) not
<br>
supported
<br>
configure: WARNING: *** Skipping Fortran 90 type (INTEGER*16)
<br>
configure: WARNING: On Linux and --with-udapl was not specified
<br>
configure: WARNING: Not building the udapl BTL
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the
<br>
Installation and
<br>
users manual for instructions on testing and if necessary fixing this
<br>
linux-pouh:/usr/local/openmpi-1.2.8 # make all install &gt;
<br>
GFortMakeAllInstall_STDIO.txt
<br>
mpif90
<br>
libtool: install: warning: relinking `mca_maffinity_first_use.la'
<br>
libtool: install: warning: relinking `mca_maffinity_libnuma.la'
<br>
libtool: install: warning: relinking `mca_paffinity_linux.la'
<br>
libtool: install: warning: relinking `libopen-rte.la'
<br>
<p>&lt;snip!&gt;
<br>
<p>libtool: install: warning: relinking `mca_mpool_rdma.la'
<br>
libtool: install: warning: relinking `mca_mpool_sm.la'
<br>
libtool: install: warning: relinking `mca_pml_cm.la'
<br>
libtool: install: warning: relinking `mca_pml_ob1.la'
<br>
libtool: install: warning: relinking `mca_rcache_vma.la'
<br>
libtool: install: warning: relinking `mca_topo_unity.la'
<br>
linux-pouh:/usr/local/openmpi-1.2.8 # mpif90
<br>
mpif90: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
linux-pouh:/usr/local/openmpi-1.2.8 #  
<br>
linux-pouh:/usr/local/openmpi-1.2.8 # cd /usr/local/lib
<br>
linux-pouh:/usr/local/lib # ls
<br>
libmca_common_sm.la        libmpi_cxx.so        libmpi_f77.so.0     
<br>
libmpi.so.0.0.0       libopen-rte.la
<br>
libmca_common_sm.so        libmpi_cxx.so.0      libmpi_f77.so.0.0.0 
<br>
libopen-pal.la        libopen-rte.so
<br>
libmca_common_sm.so.0      libmpi_cxx.so.0.0.0  libmpi.la           
<br>
libopen-pal.so        libopen-rte.so.0
<br>
libmca_common_sm.so.0.0.0  libmpi_f77.la        libmpi.so           
<br>
libopen-pal.so.0      libopen-rte.so.0.0.0
<br>
libmpi_cxx.la              libmpi_f77.so        libmpi.so.0         
<br>
libopen-pal.so.0.0.0  openmpi
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7209.php">Mehdi Bozzo-Rey: "[OMPI users] ompi 1.3 make distclean broken ?"</a>
<li><strong>Previous message:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
<li><strong>Reply:</strong> <a href="7214.php">Jeff Squyres: "Re: [OMPI users] OK, got it installed, but...  can't find libraries"</a>
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
