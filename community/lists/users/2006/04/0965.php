<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 17:31:57 2006" -->
<!-- isoreceived="20060405213157" -->
<!-- sent="Wed, 05 Apr 2006 17:30:19 -0400" -->
<!-- isosent="20060405213019" -->
<!-- name="Jeffrey B. Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0" -->
<!-- id="443436EB.70806_at_charter.net" -->
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
<strong>From:</strong> Jeffrey B. Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-05 17:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Reply:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good afternoon (evening),
<br>
<p>&nbsp;&nbsp;&nbsp;I'm trying to build OpenMPI-1.0.1 on a SLES9 system with
<br>
PGI 6.0 (gcc and pgcc). I'm disabling romio and enabling
<br>
static libraries:
<br>
<p>./configure --prefix=/home/jlayton/bin/OPENMPI-1.0.1-PGI6.0-OPTERON 
<br>
--disable-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static
<br>
<p>During the build I get the following error (using gcc):
<br>
<p>gcc -shared  -Wl,--whole-archive attribute/.libs/libattribute.a 
<br>
class/.libs/libclass.a communicator/.libs/libcommunicator.a 
<br>
datatype/.libs/libdatatype.a debuggers/.libs/libdebuggers.a 
<br>
errhandler/.libs/liberrhandler.a file/.libs/libfile.a 
<br>
group/.libs/libgroup.a info/.libs/libinfo.a mpi/c/.libs/libmpi_c.a 
<br>
mpi/c/profile/.libs/libmpi_c_pmpi.a mpi/f77/.libs/libmpi_f77.a 
<br>
mpi/f77/profile/.libs/libmpi_f77_pmpi.a runtime/.libs/libmpiruntime.a 
<br>
op/.libs/libop.a proc/.libs/libproc.a request/.libs/librequest.a 
<br>
mca/allocator/base/.libs/libmca_allocator_base.a 
<br>
mca/allocator/bucket/.libs/libmca_allocator_bucket.a 
<br>
mca/allocator/basic/.libs/libmca_allocator_basic.a 
<br>
mca/bml/base/.libs/libmca_bml_base.a mca/bml/r2/.libs/libmca_bml_r2.a 
<br>
mca/btl/base/.libs/libmca_btl_base.a mca/btl/tcp/.libs/libmca_btl_tcp.a 
<br>
mca/btl/sm/.libs/libmca_btl_sm.a mca/btl/self/.libs/libmca_btl_self.a 
<br>
mca/coll/base/.libs/libmca_coll_base.a 
<br>
mca/coll/sm/.libs/libmca_coll_sm.a 
<br>
mca/coll/self/.libs/libmca_coll_self.a 
<br>
mca/coll/basic/.libs/libmca_coll_basic.a 
<br>
mca/common/sm/.libs/libmca_common_sm_noinst.a 
<br>
mca/io/base/.libs/libmca_io_base.a mca/io/romio/.libs/libmca_io_romio.a 
<br>
mca/mpool/base/.libs/libmca_mpool_base.a 
<br>
mca/mpool/sm/.libs/libmca_mpool_sm.a 
<br>
mca/pml/base/.libs/libmca_pml_base.a mca/pml/teg/.libs/libmca_pml_teg.a 
<br>
mca/pml/ob1/.libs/libmca_pml_ob1.a mca/ptl/base/.libs/libmca_ptl_base.a 
<br>
mca/ptl/tcp/.libs/libmca_ptl_tcp.a mca/ptl/sm/.libs/libmca_ptl_sm.a 
<br>
mca/ptl/self/.libs/libmca_ptl_self.a 
<br>
mca/rcache/base/.libs/libmca_rcache_base.a 
<br>
mca/rcache/rb/.libs/libmca_rcache_rb.a 
<br>
mca/topo/base/.libs/libmca_topo_base.a 
<br>
mca/topo/unity/.libs/libmca_topo_unity.a -Wl,--no-whole-archive  
<br>
-Wl,--rpath 
<br>
-Wl,/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/orte/.libs 
<br>
-Wl,--rpath -Wl,/home/jlayton/bin/OPENMPI-1.0.1-PGI6.0-OPTERON/lib 
<br>
/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/orte/.libs/liborte.so 
<br>
-L/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/opal/.libs -laio -lm 
<br>
-lutil -lnsl -lpthread  -pthread -Wl,-soname -Wl,libmpi.so.0 -o 
<br>
.libs/libmpi.so.0.0.0
<br>
/usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld: 
<br>
mca/io/romio/.libs/libmca_io_romio.a(io_romio_ad_nfs_iwrite.o): 
<br>
relocation R_X86_64_32 can not be used when making a shared object; 
<br>
recompile with -fPIC
<br>
mca/io/romio/.libs/libmca_io_romio.a(io_romio_ad_nfs_iwrite.o): could 
<br>
not read symbols: Bad value
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [libmpi.la] Error 1
<br>
make[2]: Leaving directory 
<br>
`/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/ompi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/home/jlayton/src/openmpi-1.0.1-opteron-pgi6.0/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Any ideas how to fix this?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="0964.php">George Bosilca: "Re: [OMPI users] Send problems on AMD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
<li><strong>Reply:</strong> <a href="0966.php">George Bosilca: "Re: [OMPI users] Problem building OpenMPI 1.0.1 with PGI 6.0"</a>
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
