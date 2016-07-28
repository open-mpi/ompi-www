<?
$subject_val = "[OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 02:58:40 2012" -->
<!-- isoreceived="20120523065840" -->
<!-- sent="Wed, 23 May 2012 08:58:27 +0200" -->
<!-- isosent="20120523065827" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="4FBC8A93.2020403_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.6 undefined reference<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 02:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build openmpi-1.6 for cygwin with dynamic libs
<br>
<p>---------------------------------------------------------
<br>
./autogen.sh
<br>
cd build_dir
<br>
source_dir/configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-mca-dso \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-udapl \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--without-cs-fs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt \
<br>
&nbsp;
<br>
--enable-mca-nobuild=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
<br>
make
<br>
---------------------------------------------------------
<br>
<p>the build stop here :
<br>
&nbsp;&nbsp;&nbsp;CCLD   libompitrace.la
<br>
Creating library file: .libs/libompitrace.dll.a.libs/abort.o: In 
<br>
function `MPI_Abort':
<br>
/pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: 
<br>
undefined reference to `_o           mpi_mpi_comm_world'
<br>
/pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: 
<br>
undefined reference to `_P           MPI_Comm_rank'
<br>
/pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:33: 
<br>
undefined reference to `_P           MPI_Comm_get_name'
<br>
/pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:38: 
<br>
undefined reference to `_P           MPI_Abort'
<br>
<p>I do not find &quot;mpi_mpi_comm_world&quot; defined in any of the
<br>
already built objects, except
<br>
<p>./ompi/communicator/.libs/comm_init.o
<br>
00000200 C _ompi_mpi_comm_world
<br>
<p>and on libmpi.dll.a
<br>
<p>d002278.o:
<br>
00000000 i .idata$4
<br>
00000000 i .idata$5
<br>
00000000 i .idata$6
<br>
00000000 i .idata$7
<br>
00000000 t .text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;U __head_cygmpi_1_dll
<br>
00000000 I __imp__ompi_mpi_comm_world
<br>
00000000 I __nm__ompi_mpi_comm_world
<br>
<p><p>Hint ?
<br>
<p>Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19331.php">Orion Poplawski: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
