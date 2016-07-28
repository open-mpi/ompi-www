<?
$subject_val = "Re: [OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 09:19:28 2012" -->
<!-- isoreceived="20120523131928" -->
<!-- sent="Wed, 23 May 2012 13:19:23 +0000" -->
<!-- isosent="20120523131923" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="068E2B90-D89F-4041-BF88-D944599ACEAC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB11070D-960E-4996-8E9E-18D5972DD2A3_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 09:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious - are you running autogen for any particular reason?
<br>
<p>I don't know how much Cygwin testing we've done. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On May 23, 2012, at 6:09 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Add &quot;libompitrace&quot; to your enable-contrib-no-build list. There is likely a missing include in there, but you don't need that lib to run. We'll take a look at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2012, at 12:58 AM, marco atzeri wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to build openmpi-1.6 for cygwin with dynamic libs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; cd build_dir
</span><br>
<span class="quotelev2">&gt;&gt; source_dir/configure \
</span><br>
<span class="quotelev2">&gt;&gt;  LDFLAGS=&quot;-Wl,--export-all-symbols -no-undefined&quot;  \
</span><br>
<span class="quotelev2">&gt;&gt;  --disable-mca-dso \
</span><br>
<span class="quotelev2">&gt;&gt;  --without-udapl \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-progress-threads \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;  --without-cs-fs \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-mpi-param_check=always \
</span><br>
<span class="quotelev2">&gt;&gt;  --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-nobuild=memory_mallopt,paffinity,installdirs-windows,timer-windows,shmem-sysv
</span><br>
<span class="quotelev2">&gt;&gt; make
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the build stop here :
</span><br>
<span class="quotelev2">&gt;&gt; CCLD   libompitrace.la
</span><br>
<span class="quotelev2">&gt;&gt; Creating library file: .libs/libompitrace.dll.a.libs/abort.o: In function `MPI_Abort':
</span><br>
<span class="quotelev2">&gt;&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: undefined reference to `_o           mpi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt;&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:32: undefined reference to `_P           MPI_Comm_rank'
</span><br>
<span class="quotelev2">&gt;&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:33: undefined reference to `_P           MPI_Comm_get_name'
</span><br>
<span class="quotelev2">&gt;&gt; /pub/devel/openmpi/openmpi-1.6-2/src/openmpi-1.6/ompi/contrib/libompitrace/abort.c:38: undefined reference to `_P           MPI_Abort'
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not find &quot;mpi_mpi_comm_world&quot; defined in any of the
</span><br>
<span class="quotelev2">&gt;&gt; already built objects, except
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./ompi/communicator/.libs/comm_init.o
</span><br>
<span class="quotelev2">&gt;&gt; 00000200 C _ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and on libmpi.dll.a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; d002278.o:
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 i .idata$4
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 i .idata$5
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 i .idata$6
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 i .idata$7
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 t .text
</span><br>
<span class="quotelev2">&gt;&gt;        U __head_cygmpi_1_dll
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 I __imp__ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt; 00000000 I __nm__ompi_mpi_comm_world
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hint ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Marco
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19340.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19338.php">Jeff Squyres: "Re: [OMPI users] Shared Memory - Eager VS Rendezvous"</a>
<li><strong>In reply to:</strong> <a href="19336.php">Ralph Castain: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19697.php">devendra rai: "[OMPI users] How does OpenMPI's progress engine determine progress?"</a>
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
