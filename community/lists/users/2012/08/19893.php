<?
$subject_val = "[OMPI users] mpi.h incorrect format error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 10:42:37 2012" -->
<!-- isoreceived="20120806144237" -->
<!-- sent="Mon, 06 Aug 2012 07:35:46 -0700" -->
<!-- isosent="20120806143546" -->
<!-- name="PattiMichelle" -->
<!-- email="miche1_at_[hidden]" -->
<!-- subject="[OMPI users] mpi.h incorrect format error?" -->
<!-- id="501FD642.6000801_at_earthlink.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50105865.5000501_at_khubla.com" -->
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
<strong>Subject:</strong> [OMPI users] mpi.h incorrect format error?<br>
<strong>From:</strong> PattiMichelle (<em>miche1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 10:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19892.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19824.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Reply:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Reply:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All:  I'm trying to build the weather code WRF under openSUSE 12.1 
<br>
x64 and it *should* be building easily but I'm getting a very odd error 
<br>
during the build where it claims my mpi.h file has an incorrect format.  
<br>
I suspect that there is some other needed file it's not finding, but I 
<br>
am not sure how to troubleshoot this.   Has anyone seen this before and 
<br>
can enlighten me as to what it means? I have tried a couple of different 
<br>
versions of openMPI and they all give the same error.
<br>
THANK YOU!!!!!!
<br>
<p>make[3]: Leaving directory 
<br>
`/home/patti/00_GCMs/WRF/WRFV3/external/io_netcdf'
<br>
( cd /home/patti/00_GCMs/WRF/WRFV3/external/RSL_LITE ; make CC=&quot;mpicc  
<br>
-DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL -DMAX_HISTORY=25&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=&quot;mpif90  -O3 -ftree-vectorize -ftree-loop-linear 
<br>
-funroll-loops -w -ffree-form -ffree-line-length-none 
<br>
-fconvert=big-endian -frecord-marker=4   -fconvert=big-endian 
<br>
-frecord-marker=4&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPP=&quot;/lib/cpp -C -P -I. -DEM_CORE=1 -DNMM_CORE=0 
<br>
-DNMM_MAX_DIM=2600 -DCOAMPS_CORE=0 -DDA_CORE=0 -DEXP_CORE=0 
<br>
-DIWORDSIZE=4 -DDWORDSIZE=8 -DRWORDSIZE=4 -DLWORDSIZE=4 
<br>
-DNONSTANDARD_SYSTEM_SUBR  -DDM_PARALLEL -DNETCDF -DUSE_ALLOCATABLES 
<br>
-DGRIB1 -DINTIO -DLIMIT_ARGS -DCONFIG_BUF_LEN=65536 -DMAX_DOMAINS_F=21 
<br>
-DMAX_HISTORY=25 -DNMM_NEST=0 -traditional&quot; AR=&quot;ar&quot; ARFLAGS=&quot;ru&quot; ;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranlib 
<br>
/home/patti/00_GCMs/WRF/WRFV3/external/RSL_LITE/librsl_lite.a )
<br>
make[3]: Entering directory 
<br>
`/home/patti/00_GCMs/WRF/WRFV3/external/RSL_LITE'
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c c_code.c
<br>
In file included from c_code.c:23:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [c_code.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c buf_for_proc.c
<br>
In file included from buf_for_proc.c:63:0:
<br>
*/usr/local/openmpi_16/include/mpi.h:1083:25: error: expected identifier 
<br>
or '(' before 'int'
<br>
/usr/local/openmpi_16/include/mpi.h:1097:25: error: 'MPI_Comm' 
<br>
redeclared as different kind of symbol
<br>
/usr/local/openmpi_16/include/mpi.h:319:37: note: previous declaration 
<br>
of 'MPI_Comm' was here
<br>
/usr/local/openmpi_16/include/mpi.h:1099:34: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:1100:38: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:1102:44: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'*
<br>
*/usr/local/openmpi_16/include/mpi.h:1103:38: error: expected 
<br>
declaration specifiers or '...' before 'MPI_Comm'
<br>
*
<br>
&lt;&lt; snip! &gt;&gt;
<br>
<p>*/usr/local/openmpi_16/include/mpi.h:1921:55: error: expected 
<br>
declaration specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:1924:40: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:1940:35: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:2027:32: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
/usr/local/openmpi_16/include/mpi.h:2045:51: error: expected declaration 
<br>
specifiers or '...' before 'MPI_Comm'
<br>
*make[3]: [buf_for_proc.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c rsl_malloc.c
<br>
In file included from rsl_malloc.c:87:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [rsl_malloc.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c rsl_bcast.c
<br>
In file included from rsl_bcast.c:67:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [rsl_bcast.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c task_for_point.c
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c period.c
<br>
In file included from period.c:13:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [period.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c swap.c
<br>
In file included from swap.c:13:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [swap.o] Error 1 (ignored)
<br>
mpicc  -DFSEEKO64_OK  -w -O3 -c -DLANDREAD_STUB -DDM_PARALLEL 
<br>
-DMAX_HISTORY=25  -c cycle.c
<br>
In file included from cycle.c:13:0:
<br>
rsl_lite.h:152:13: error: two or more data types in declaration specifiers
<br>
make[3]: [cycle.o] Error 1 (ignored)
<br>
mpif90  -O3 -ftree-vectorize -ftree-loop-linear -funroll-loops -w 
<br>
-ffree-form -ffree-line-length-none -fconvert=big-endian 
<br>
-frecord-marker=4   -
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Previous message:</strong> <a href="19892.php">Syed Ahsan Ali: "Re: [OMPI users] UC Permission denied, please try again."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19824.php">Damien: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Reply:</strong> <a href="19894.php">Tim Prince: "Re: [OMPI users] mpi.h incorrect format error?"</a>
<li><strong>Reply:</strong> <a href="19895.php">Jeff Squyres: "Re: [OMPI users] mpi.h incorrect format error?"</a>
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
