<?
$subject_val = "Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 12 08:56:25 2014" -->
<!-- isoreceived="20140212135625" -->
<!-- sent="Wed, 12 Feb 2014 13:56:23 +0000" -->
<!-- isosent="20140212135623" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux" -->
<!-- id="E501CF18-C067-4041-9159-BA2FD236C283_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15sY=UwMxZkC=rqM_xdDRahYuy-Yn09VFBS3bUYhzycFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with	xlc/ppc32/linux<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-12 08:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14057.php">Paul Hargrove: "[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Filed as <a href="https://svn.open-mpi.org/trac/ompi/ticket/4262">https://svn.open-mpi.org/trac/ompi/ticket/4262</a>
<br>
<p>On Feb 8, 2014, at 8:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Testing the current v1.7 tarball (1.7.5a1r30634), I get a failure when building the oshmem examples.
</span><br>
<span class="quotelev1">&gt; I've confirmed that the same problem exists on trunk (so not a problem with the CMR).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; mpifort -g ring_usempi.f90 -o ring_usempi
</span><br>
<span class="quotelev1">&gt; ** ring   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file ring_usempi.f90.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[1]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; shmemcc -g hello_oshmem_c.c -o hello_oshmem
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; shmemcc -g ring_oshmem_c.c -o ring_oshmem
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; shmemfort -g hello_oshmemfh.f90 -o hello_oshmemfh
</span><br>
<span class="quotelev1">&gt; ** hello_oshmem   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file hello_oshmemfh.f90.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh
</span><br>
<span class="quotelev1">&gt; ** ring_oshmem   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file ring_oshmemfh.f90.
</span><br>
<span class="quotelev1">&gt; ring_oshmemfh.o: In function `ring_oshmem':
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:33: undefined reference to `shmem_put8'
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:46: undefined reference to `shmem_int8_wait_until'
</span><br>
<span class="quotelev1">&gt; /gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples/ring_oshmemfh.f90:55: undefined reference to `shmem_put8'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ring_oshmemfh] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [oshmem] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gpfs-biou/phh1/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/BLD/examples'
</span><br>
<span class="quotelev1">&gt; make: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The link of ring_oshmemfh is failing with undefined references to shmem_put8 and shmem_int8_wait_until.
</span><br>
<span class="quotelev1">&gt; The relevant portion of &quot;make&quot; output in the example dir is shown above.
</span><br>
<span class="quotelev1">&gt; Note that ring_usempi linked fine, indicating that F90 MPI bindings are fine.
</span><br>
<span class="quotelev1">&gt; Additionally, ring_oshmem linked file, indicating that C language OSHMEM bindings are fine, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In case it is relevant: this build is configured with
</span><br>
<span class="quotelev1">&gt;   --enable-static --enable-shared --enable-mpi-fortran=usempi --disable-vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;--enable-static --enable-shared&quot; flags are just to make for a more thorough test.
</span><br>
<span class="quotelev1">&gt; However, retesting without --enable-static did not resolve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --enable-mpi-fortran flag is necessary because the F08 bindings don't build with this compiler (<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13802.php">http://www.open-mpi.org/community/lists/devel/2014/01/13802.php</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --disable-vt flag is necessary because the compiler crashes building VT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some misc bits of info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ shmemfort -g ring_oshmemfh.f90 -o ring_oshmemfh --show
</span><br>
<span class="quotelev1">&gt; xlf -g ring_oshmemfh.f90 -o ring_oshmemfh -I/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/include -I/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib -Wl,-rpath -Wl,/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib -Wl,--enable-new-dtags -L/home/phh1/SCRATCH/OMPI/openmpi-trunk-linux-ppc32-xlc-11.1/INST/lib -loshmem -lmpi_mpifh -lmpi -lm -lnuma -ldl -lrt -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ nm INST/lib/liboshmem.so | grep shmem_put8
</span><br>
<span class="quotelev1">&gt; 0009eab0 t 00000000.plt_pic32.shmem_put8_f
</span><br>
<span class="quotelev1">&gt; 00063f20 T shmem_put8_
</span><br>
<span class="quotelev1">&gt; 00063fa0 T shmem_put8__
</span><br>
<span class="quotelev1">&gt; 00063e00 T shmem_put8_f
</span><br>
<span class="quotelev1">&gt; $ nm INST/lib/liboshmem.a | grep shmem_put8
</span><br>
<span class="quotelev1">&gt; shmem_put8_f.o:
</span><br>
<span class="quotelev1">&gt; 00000120 T shmem_put8_
</span><br>
<span class="quotelev1">&gt; 000001a0 T shmem_put8__
</span><br>
<span class="quotelev1">&gt; 00000000 T shmem_put8_f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="14115.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.7.5a1: mpirun failure on ppc/linux (regression	vs 1.7.4)"</a>
<li><strong>Previous message:</strong> <a href="14113.php">Adrian Reber: "[OMPI devel] openmpi-1.7.5a1r30692 and slurm problems"</a>
<li><strong>In reply to:</strong> <a href="14057.php">Paul Hargrove: "[OMPI devel] v1.7 and trunk: hello_oshmemfh link failure with xlc/ppc32/linux"</a>
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
