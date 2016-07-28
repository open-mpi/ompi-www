<?
$subject_val = "Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 09:23:32 2011" -->
<!-- isoreceived="20110924132332" -->
<!-- sent="Sat, 24 Sep 2011 09:23:27 -0400" -->
<!-- isosent="20110924132327" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers" -->
<!-- id="B38FAD4F-AA5C-439D-A3F0-245B857C410C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275FB9DBCB_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 09:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="17364.php">Blosch, Edwin L: "[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just out of curiosity, does Open MPI 1.5.4 build properly?
<br>
<p>We've seen problems with the PGI compiler suite before -- it *does* look like a problem with libtool-building issues; e.g., a switch is too old or is missing or something.  Meaning: it looks like PGI thinks it's trying to build an application, not a library.  This is usually bit rot in libtool (i.e., PGI may have changed their options, but we're using an older Libtool in the 1.4.x series that doesn't know about this option).
<br>
<p>I do note that we fixed some libtool issues in the 1.4.4 tarball; could you try the 1.4.4rc and see if that fixes the issue?  If not, we might have missed some patches to bring over to the v1.4 branch.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
<br>
<p><p><p>On Sep 20, 2011, at 1:16 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I'm having trouble building 1.4.3 using PGI 10.9.  I searched the list archives briefly but I didn't stumble across anything that looked like the same problem, so I thought I'd ask if an expert might recognize the nature of the problem here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The configure command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/release/openmpi-pgi --without-tm --without-sge --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --with-mpi-f90-size=small --enable-static --disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc 'CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' 'CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' F77=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' FC=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' 'LDFLAGS= -Bstatic_pgi'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The place where the build eventually dies:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link /appserv/pgi/linux86-64/10.9/bin/pgCC  -DNDEBUG   -O2 -Mcache_align -Minfo -Msignextend -Msignextend  -version-info 0:1:0 -export-dynamic  -Bstatic_pgi  -o libmpi_cxx.la -rpath /release/cfd/openmpi-pgi/lib mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev1">&gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev1">&gt; libtool: link:  rm -rf Template.dir
</span><br>
<span class="quotelev1">&gt; libtool: link:  /appserv/pgi/linux86-64/10.9/bin/pgCC --prelink_objects --instantiation_dir Template.dir   mpicxx.o intercepts.o comm.o datatype.o win.o file.o
</span><br>
<span class="quotelev1">&gt; pgCC-Warning-prelink_objects switch is deprecated
</span><br>
<span class="quotelev1">&gt; pgCC-Warning-instantiation_dir switch is deprecated
</span><br>
<span class="quotelev1">&gt; /usr/lib64/crt1.o: In function `_start':
</span><br>
<span class="quotelev1">&gt; /usr/src/packages/BUILD/glibc-2.9/csu/../sysdeps/x86_64/elf/start.S:109: undefined reference to `main'
</span><br>
<span class="quotelev1">&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev1">&gt; (.text+0x49): undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev1">&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev1">&gt; (.text+0x62): undefined reference to `ompi_mpi_errors_return'
</span><br>
<span class="quotelev1">&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev1">&gt; (.text+0x7b): undefined reference to `ompi_mpi_errors_throw_exceptions'
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17431.php">Jeff Squyres: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv question"</a>
<li><strong>Previous message:</strong> <a href="17429.php">Jeff Squyres: "Re: [OMPI users] problems with Intel 12.x compilers and OpenMPI (1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="17364.php">Blosch, Edwin L: "[OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Reply:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
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
