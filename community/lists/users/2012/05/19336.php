<?
$subject_val = "Re: [OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 08:08:58 2012" -->
<!-- isoreceived="20120523120858" -->
<!-- sent="Wed, 23 May 2012 06:08:50 -0600" -->
<!-- isosent="20120523120850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="EB11070D-960E-4996-8E9E-18D5972DD2A3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBC8A93.2020403_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6 undefined reference<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 08:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19337.php">Christophe Peyret: "[OMPI users] openmpi-1.6 + Intel compilers"</a>
<li><strong>Previous message:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add &quot;libompitrace&quot; to your enable-contrib-no-build list. There is likely a missing include in there, but you don't need that lib to run. We'll take a look at it.
<br>
<p><p>On May 23, 2012, at 12:58 AM, marco atzeri wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to build openmpi-1.6 for cygwin with dynamic libs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; cd build_dir
</span><br>
<span class="quotelev1">&gt; source_dir/configure \
</span><br>
<span class="quotelev1">&gt;   LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev1">&gt;   --disable-mca-dso \
</span><br>
<span class="quotelev1">&gt;   --without-udapl \
</span><br>
<span class="quotelev1">&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;   --enable-progress-threads \
</span><br>
<span class="quotelev1">&gt;   --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;   --without-cs-fs \
</span><br>
<span class="quotelev1">&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;   --with-mpi-param_check=always \
</span><br>
<span class="quotelev1">&gt;   --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev1">&gt; --enable-mca-nobuild=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the build stop here :
</span><br>
<span class="quotelev1">&gt;  CCLD   libompitrace.la
</span><br>
<span class="quotelev1">&gt; Creating library file: .libs/libompitrace.dll.a.libs/abort.o: In function `MPI_Abort':
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: undefined reference to `_o           mpi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: undefined reference to `_P           MPI_Comm_rank'
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:33: undefined reference to `_P           MPI_Comm_get_name'
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:38: undefined reference to `_P           MPI_Abort'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not find &quot;mpi_mpi_comm_world&quot; defined in any of the
</span><br>
<span class="quotelev1">&gt; already built objects, except
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./ompi/communicator/.libs/comm_init.o
</span><br>
<span class="quotelev1">&gt; 00000200 C _ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and on libmpi.dll.a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; d002278.o:
</span><br>
<span class="quotelev1">&gt; 00000000 i .idata$4
</span><br>
<span class="quotelev1">&gt; 00000000 i .idata$5
</span><br>
<span class="quotelev1">&gt; 00000000 i .idata$6
</span><br>
<span class="quotelev1">&gt; 00000000 i .idata$7
</span><br>
<span class="quotelev1">&gt; 00000000 t .text
</span><br>
<span class="quotelev1">&gt;         U __head_cygmpi_1_dll
</span><br>
<span class="quotelev1">&gt; 00000000 I __imp__ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt; 00000000 I __nm__ompi_mpi_comm_world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hint ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marco
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19337.php">Christophe Peyret: "[OMPI users] openmpi-1.6 + Intel compilers"</a>
<li><strong>Previous message:</strong> <a href="19335.php">Simone Pellegrini: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19344.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
