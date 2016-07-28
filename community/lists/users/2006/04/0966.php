<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 17:45:49 2006" -->
<!-- isoreceived="20060405214549" -->
<!-- sent="Wed, 5 Apr 2006 17:42:57 -0400" -->
<!-- isosent="20060405214257" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0" -->
<!-- id="6AF61386-0AB5-475C-8507-3D34217A42B8_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="443436EB.70806_at_charter.net" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 17:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Reply:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
./configure --help will give you the full list of configuration  
<br>
flags. To disable romio one should type --disable-io-romio not -- 
<br>
disable-romio. Adding --enable-static will build 2 sets of libraries  
<br>
(as explained in the configure --help output), one dynamic and one  
<br>
static. If you're looking on having just the static version (and thus  
<br>
increasing the compilation speed) you should specify &quot;--enable-static  
<br>
--disable-shared&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 5, 2006, at 5:30 PM, Jeffrey B. Layton wrote:
<br>
<p><span class="quotelev1">&gt; Good afternoon (evening),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I'm trying to build OpenMPI-1.0.1 on a SLES9 system with
</span><br>
<span class="quotelev1">&gt; PGI 6.0 (gcc and pgcc). I'm disabling romio and enabling
</span><br>
<span class="quotelev1">&gt; static libraries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/jlayton/bin/OPENMPI-1.0.1-PGI6.0-OPTERON
</span><br>
<span class="quotelev1">&gt; --disable-romio \
</span><br>
<span class="quotelev1">&gt;        --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During the build I get the following error (using gcc):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -shared  -Wl,--whole-archive attribute/.libs/libattribute.a
</span><br>
<span class="quotelev1">&gt; class/.libs/libclass.a communicator/.libs/libcommunicator.a
</span><br>
<span class="quotelev1">&gt; datatype/.libs/libdatatype.a debuggers/.libs/libdebuggers.a
</span><br>
<span class="quotelev1">&gt; errhandler/.libs/liberrhandler.a file/.libs/libfile.a
</span><br>
<span class="quotelev1">&gt; group/.libs/libgroup.a info/.libs/libinfo.a mpi/c/.libs/libmpi_c.a
</span><br>
<span class="quotelev1">&gt; mpi/c/profile/.libs/libmpi_c_pmpi.a mpi/f77/.libs/libmpi_f77.a
</span><br>
<span class="quotelev1">&gt; mpi/f77/profile/.libs/libmpi_f77_pmpi.a runtime/.libs/libmpiruntime.a
</span><br>
<span class="quotelev1">&gt; op/.libs/libop.a proc/.libs/libproc.a request/.libs/librequest.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/base/.libs/libmca_allocator_base.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/bucket/.libs/libmca_allocator_bucket.a
</span><br>
<span class="quotelev1">&gt; mca/allocator/basic/.libs/libmca_allocator_basic.a
</span><br>
<span class="quotelev1">&gt; mca/bml/base/.libs/libmca_bml_base.a mca/bml/r2/.libs/libmca_bml_r2.a
</span><br>
<span class="quotelev1">&gt; mca/btl/base/.libs/libmca_btl_base.a mca/btl/tcp/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_btl_tcp.a
</span><br>
<span class="quotelev1">&gt; mca/btl/sm/.libs/libmca_btl_sm.a mca/btl/self/.libs/libmca_btl_self.a
</span><br>
<span class="quotelev1">&gt; mca/coll/base/.libs/libmca_coll_base.a
</span><br>
<span class="quotelev1">&gt; mca/coll/sm/.libs/libmca_coll_sm.a
</span><br>
<span class="quotelev1">&gt; mca/coll/self/.libs/libmca_coll_self.a
</span><br>
<span class="quotelev1">&gt; mca/coll/basic/.libs/libmca_coll_basic.a
</span><br>
<span class="quotelev1">&gt; mca/common/sm/.libs/libmca_common_sm_noinst.a
</span><br>
<span class="quotelev1">&gt; mca/io/base/.libs/libmca_io_base.a mca/io/romio/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_io_romio.a
</span><br>
<span class="quotelev1">&gt; mca/mpool/base/.libs/libmca_mpool_base.a
</span><br>
<span class="quotelev1">&gt; mca/mpool/sm/.libs/libmca_mpool_sm.a
</span><br>
<span class="quotelev1">&gt; mca/pml/base/.libs/libmca_pml_base.a mca/pml/teg/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_pml_teg.a
</span><br>
<span class="quotelev1">&gt; mca/pml/ob1/.libs/libmca_pml_ob1.a mca/ptl/base/.libs/ 
</span><br>
<span class="quotelev1">&gt; libmca_ptl_base.a
</span><br>
<span class="quotelev1">&gt; mca/ptl/tcp/.libs/libmca_ptl_tcp.a mca/ptl/sm/.libs/libmca_ptl_sm.a
</span><br>
<span class="quotelev1">&gt; mca/ptl/self/.libs/libmca_ptl_self.a
</span><br>
<span class="quotelev1">&gt; mca/rcache/base/.libs/libmca_rcache_base.a
</span><br>
<span class="quotelev1">&gt; mca/rcache/rb/.libs/libmca_rcache_rb.a
</span><br>
<span class="quotelev1">&gt; mca/topo/base/.libs/libmca_topo_base.a
</span><br>
<span class="quotelev1">&gt; mca/topo/unity/.libs/libmca_topo_unity.a -Wl,--no-whole-archive
</span><br>
<span class="quotelev1">&gt; -Wl,--rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/orte/.libs
</span><br>
<span class="quotelev1">&gt; -Wl,--rpath -Wl,/home/jlayton/bin/OPENMPI-1.0.1-PGI6.0-OPTERON/lib
</span><br>
<span class="quotelev1">&gt; /home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/orte/.libs/liborte.so
</span><br>
<span class="quotelev1">&gt; -L/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/opal/.libs -laio -lm
</span><br>
<span class="quotelev1">&gt; -lutil -lnsl -lpthread  -pthread -Wl,-soname -Wl,libmpi.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse- 
</span><br>
<span class="quotelev1">&gt; linux/bin/ld:
</span><br>
<span class="quotelev1">&gt; mca/io/romio/.libs/libmca_io_romio.a(io_romio_ad_nfs_iwrite.o):
</span><br>
<span class="quotelev1">&gt; relocation R_X86_64_32 can not be used when making a shared object;
</span><br>
<span class="quotelev1">&gt; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; mca/io/romio/.libs/libmca_io_romio.a(io_romio_ad_nfs_iwrite.o): could
</span><br>
<span class="quotelev1">&gt; not read symbols: Bad value
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas how to fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
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
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="0965.php">Jeffrey B. Layton: "[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Reply:</strong> <a href="0967.php">Jeffrey B. Layton: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
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
