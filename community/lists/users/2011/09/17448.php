<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI	10.9 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 14:00:11 2011" -->
<!-- isoreceived="20110927180011" -->
<!-- sent="Tue, 27 Sep 2011 11:59:59 -0600" -->
<!-- isosent="20110927175959" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI	10.9 compilers" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275FE00E75_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B6FD1936-7EDE-47EE-B081-F98DE4C1E265_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI	10.9 compilers<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 13:59:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17449.php">Gus Correa: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17447.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17450.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I've been copying around the source tree.  That was the problem. If I am careful to preserve the original timestamps, there are no problems.
<br>
<p>Thanks
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
<br>
Sent: Monday, September 26, 2011 6:16 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers
<br>
<p>On Sep 26, 2011, at 6:53 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Actually I can download OpenMPI 1.5.4, 1.4.4rc3 or 1.4.3 - and ALL of them build just fine.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Apparently what isn't working is the version of 1.4.3 that I have downloaded and copied from place to place, i.e. timestamps on files may have changed (otherwise the files are the same).
</span><br>
<p>Are you copying the source tree around, like &quot;cp -r my_orig_ompi_tree my_new_ompi_tree&quot;?
<br>
<p>If so, you might be running into timestamp issues.  Automake is actually fairly sensitive to timestamps; it makes tarballs in fairly specific ordering so that the timestamps will be correct when you un-tar them.
<br>
<p>You might be able to get away with something like &quot;cp -rp my_orig my_new&quot;.  But I find it usually just easier to just un-tar the original tarball.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It seems to be a configure behavior, but I don't understand enough to figure it out.  Perhaps you can advise me.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Key differences that I noted were:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (1) in config.log, the configure command that gets rerun appears to add some arguments in the bad build:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Bad build includes the underlined 3 options at the end below:
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/release/cfd/openmpi-pgi --without-tm --without-sge --without-lsf --without-psm --without-portals --without-gm --without-elan --without-slurm --without-loadleveler --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --enable-static --disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend F77=/appserv/pgi/linux86-64/10.9/bin/pgf95 FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical FC=/appserv/pgi/linux86-64/10.9/bin/pgf95 FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical LDFLAGS= -Bstatic_pgi --enable-ltdl-convenience --no-create --no-recursion
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Good build:
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/release/cfd/openmpi-pgi --without-tm --without-sge --without-lsf --without-psm --without-portals --without-gm --without-elan --without-slurm --without-loadleveler --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --enable-static --disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend F77=/appserv/pgi/linux86-64/10.9/bin/pgf95 FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical FC=/appserv/pgi/linux86-64/10.9/bin/pgf95 FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical LDFLAGS= -Bstatic_pgi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (2) in configure itself, the version number is missing in the bad build:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Bad build:
</span><br>
<span class="quotelev1">&gt; #! /bin/sh
</span><br>
<span class="quotelev1">&gt; # Guess values for system-dependent variables and create Makefiles.
</span><br>
<span class="quotelev1">&gt; # Generated by GNU Autoconf 2.63 for Open MPI .
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Good build:
</span><br>
<span class="quotelev1">&gt; #! /bin/sh
</span><br>
<span class="quotelev1">&gt; # Guess values for system-dependent variables and create Makefiles.
</span><br>
<span class="quotelev1">&gt; # Generated by GNU Autoconf 2.63 for Open MPI 1.4.3.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; (3) also in configure, the good build has picked up availability of pgfortran but the bad one does not:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; - Bad build:  for ac_prog in g77 xlf f77 frt pgf77 cf77 fort77 fl32 af77 xlf90 f90 pgf90 pghpf epcf90 gfortran g95 xlf95 f95 fort ifort ifc efc pgf95 lf95 ftn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; - Good build: for ac_prog in g77 xlf f77 frt pgf77 cf77 fort77 fl32 af77 xlf90 f90 pgf90 pghpf epcf90 gfortran g95 xlf95 f95 fort ifort ifc efcpgfortran pgf95 lf95 ftn
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you have any idea what could cause these differences, I'm all ears...
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, September 24, 2011 8:23 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXTERNAL: Re: [OMPI users] Trouble compiling 1.4.3 with PGI 10.9 compilers
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just out of curiosity, does Open MPI 1.5.4 build properly?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We've seen problems with the PGI compiler suite before -- it *does* look like a problem with libtool-building issues; e.g., a switch is too old or is missing or something.  Meaning: it looks like PGI thinks it's trying to build an application, not a library.  This is usually bit rot in libtool (i.e., PGI may have changed their options, but we're using an older Libtool in the 1.4.x series that doesn't know about this option).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I do note that we fixed some libtool issues in the 1.4.4 tarball; could you try the 1.4.4rc and see if that fixes the issue?  If not, we might have missed some patches to bring over to the v1.4 branch.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2011, at 1:16 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; I'm having trouble building 1.4.3 using PGI 10.9.  I searched the list archives briefly but I didn't stumble across anything that looked like the same problem, so I thought I'd ask if an expert might recognize the nature of the problem here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The configure command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/release/openmpi-pgi --without-tm --without-sge --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca-no-build=maffinity --disable-per-user-config-files --disable-io-romio --with-mpi-f90-size=small --enable-static --disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc 'CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' 'CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend' F77=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' FC=/appserv/pgi/linux86-64/10.9/bin/pgf95 'FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical' 'LDFLAGS= -Bstatic_pgi'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The place where the build eventually dies:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool --tag=CXX   --mode=link /appserv/pgi/linux86-64/10.9/bin/pgCC  -DNDEBUG   -O2 -Mcache_align -Minfo -Msignextend -Msignextend  -version-info 0:1:0 -export-dynamic  -Bstatic_pgi  -o libmpi_cxx.la -rpath /release/cfd/openmpi-pgi/lib mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo file.lo ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link:  rm -rf Template.dir
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link:  /appserv/pgi/linux86-64/10.9/bin/pgCC --prelink_objects --instantiation_dir Template.dir   mpicxx.o intercepts.o comm.o datatype.o win.o file.o
</span><br>
<span class="quotelev2">&gt; &gt; pgCC-Warning-prelink_objects switch is deprecated
</span><br>
<span class="quotelev2">&gt; &gt; pgCC-Warning-instantiation_dir switch is deprecated
</span><br>
<span class="quotelev2">&gt; &gt; /usr/lib64/crt1.o: In function `_start':
</span><br>
<span class="quotelev2">&gt; &gt; /usr/src/packages/BUILD/glibc-2.9/csu/../sysdeps/x86_64/elf/start.S:109: undefined reference to `main'
</span><br>
<span class="quotelev2">&gt; &gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev2">&gt; &gt; (.text+0x49): undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev2">&gt; &gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev2">&gt; &gt; (.text+0x62): undefined reference to `ompi_mpi_errors_return'
</span><br>
<span class="quotelev2">&gt; &gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev2">&gt; &gt; (.text+0x7b): undefined reference to `ompi_mpi_errors_throw_exceptions'
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17449.php">Gus Correa: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17447.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17450.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
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
