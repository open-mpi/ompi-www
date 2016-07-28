<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 14:43:54 2011" -->
<!-- isoreceived="20110927184354" -->
<!-- sent="Tue, 27 Sep 2011 20:43:39 +0200" -->
<!-- isosent="20110927184339" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers" -->
<!-- id="DF1F58FF-7FB1-4383-A6FF-E0A8EAD78D7E_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 14:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17451.php">German Hoecht: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17449.php">Gus Correa: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 27.09.2011 um 01:16 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; On Sep 26, 2011, at 6:53 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually I can download OpenMPI 1.5.4, 1.4.4rc3 or 1.4.3 - and ALL  
</span><br>
<span class="quotelev2">&gt;&gt; of them build just fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Apparently what isn't working is the version of 1.4.3 that I have  
</span><br>
<span class="quotelev2">&gt;&gt; downloaded and copied from place to place, i.e. timestamps on files  
</span><br>
<span class="quotelev2">&gt;&gt; may have changed (otherwise the files are the same).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you copying the source tree around, like &quot;cp -r  
</span><br>
<span class="quotelev1">&gt; my_orig_ompi_tree my_new_ompi_tree&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, you might be running into timestamp issues.  Automake is  
</span><br>
<span class="quotelev1">&gt; actually fairly sensitive to timestamps; it makes tarballs in fairly  
</span><br>
<span class="quotelev1">&gt; specific ordering so that the timestamps will be correct when you un- 
</span><br>
<span class="quotelev1">&gt; tar them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might be able to get away with something like &quot;cp -rp my_orig  
</span><br>
<span class="quotelev1">&gt; my_new&quot;.  But I find it usually just easier to just un-tar the  
</span><br>
<span class="quotelev1">&gt; original tarball
</span><br>
<p>I don't know your exact test scenario: but it's not necessary to have  
<br>
the same source multiple times on the machine. You can create  
<br>
directories foobar1 and foobar2 at the same level as openmpi-1.4.3 and  
<br>
issue inside ../openmpi-1.4.3/configure [options] (i.e. going up one  
<br>
level and then address the necessary source's configure).
<br>
<p>AFAIK this is fully supported by the GNU build tools and to me it  
<br>
looks working.
<br>
<p>BTW: you are using PGI 10.9 as it's the last version you have access  
<br>
to? They are at 11.8 by now.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be a configure behavior, but I don't understand enough  
</span><br>
<span class="quotelev2">&gt;&gt; to figure it out.  Perhaps you can advise me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Key differences that I noted were:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1) in config.log, the configure command that gets rerun appears to  
</span><br>
<span class="quotelev2">&gt;&gt; add some arguments in the bad build:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bad build includes the underlined 3 options at the end below:
</span><br>
<span class="quotelev2">&gt;&gt;  $ ./configure --prefix=/release/cfd/openmpi-pgi --without-tm -- 
</span><br>
<span class="quotelev2">&gt;&gt; without-sge --without-lsf --without-psm --without-portals --without- 
</span><br>
<span class="quotelev2">&gt;&gt; gm --without-elan --without-slurm --without-loadleveler --enable- 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca- 
</span><br>
<span class="quotelev2">&gt;&gt; no-build=maffinity --disable-per-user-config-files --disable-io- 
</span><br>
<span class="quotelev2">&gt;&gt; romio --enable-static --disable-shared --with-wrapper-cflags=- 
</span><br>
<span class="quotelev2">&gt;&gt; Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/ 
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc  
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend  
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend F77=/ 
</span><br>
<span class="quotelev2">&gt;&gt; appserv/pgi/linux86-64/10.9/bin/pgf95 FFLAGS=-D_GNU_SOURCE  -O2 - 
</span><br>
<span class="quotelev2">&gt;&gt; Mcache_align -Minfo -Munixlogical FC=/appserv/pgi/linux86-64/10.9/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/pgf95 FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo - 
</span><br>
<span class="quotelev2">&gt;&gt; Munixlogical LDFLAGS= -Bstatic_pgi --enable-ltdl-convenience --no- 
</span><br>
<span class="quotelev2">&gt;&gt; create --no-recursion
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good build:
</span><br>
<span class="quotelev2">&gt;&gt;  $ ./configure --prefix=/release/cfd/openmpi-pgi --without-tm -- 
</span><br>
<span class="quotelev2">&gt;&gt; without-sge --without-lsf --without-psm --without-portals --without- 
</span><br>
<span class="quotelev2">&gt;&gt; gm --without-elan --without-slurm --without-loadleveler --enable- 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun-prefix-by-default --enable-contrib-no-build=vt --enable-mca- 
</span><br>
<span class="quotelev2">&gt;&gt; no-build=maffinity --disable-per-user-config-files --disable-io- 
</span><br>
<span class="quotelev2">&gt;&gt; romio --enable-static --disable-shared --with-wrapper-cflags=- 
</span><br>
<span class="quotelev2">&gt;&gt; Msignextend --with-wrapper-cxxflags=-Msignextend CXX=/appserv/pgi/ 
</span><br>
<span class="quotelev2">&gt;&gt; linux86-64/10.9/bin/pgCC CC=/appserv/pgi/linux86-64/10.9/bin/pgcc  
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend  
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=  -O2 -Mcache_align -Minfo -Msignextend -Msignextend F77=/ 
</span><br>
<span class="quotelev2">&gt;&gt; appserv/pgi/linux86-64/10.9/bin/pgf95 FFLAGS=-D_GNU_SOURCE  -O2 - 
</span><br>
<span class="quotelev2">&gt;&gt; Mcache_align -Minfo -Munixlogical FC=/appserv/pgi/linux86-64/10.9/ 
</span><br>
<span class="quotelev2">&gt;&gt; bin/pgf95 FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo - 
</span><br>
<span class="quotelev2">&gt;&gt; Munixlogical LDFLAGS= -Bstatic_pgi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (2) in configure itself, the version number is missing in the bad  
</span><br>
<span class="quotelev2">&gt;&gt; build:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bad build:
</span><br>
<span class="quotelev2">&gt;&gt; #! /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; # Guess values for system-dependent variables and create Makefiles.
</span><br>
<span class="quotelev2">&gt;&gt; # Generated by GNU Autoconf 2.63 for Open MPI .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good build:
</span><br>
<span class="quotelev2">&gt;&gt; #! /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; # Guess values for system-dependent variables and create Makefiles.
</span><br>
<span class="quotelev2">&gt;&gt; # Generated by GNU Autoconf 2.63 for Open MPI 1.4.3.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (3) also in configure, the good build has picked up availability of  
</span><br>
<span class="quotelev2">&gt;&gt; pgfortran but the bad one does not:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Bad build:  for ac_prog in g77 xlf f77 frt pgf77 cf77 fort77 fl32  
</span><br>
<span class="quotelev2">&gt;&gt; af77 xlf90 f90 pgf90 pghpf epcf90 gfortran g95 xlf95 f95 fort ifort  
</span><br>
<span class="quotelev2">&gt;&gt; ifc efc pgf95 lf95 ftn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Good build: for ac_prog in g77 xlf f77 frt pgf77 cf77 fort77 fl32  
</span><br>
<span class="quotelev2">&gt;&gt; af77 xlf90 f90 pgf90 pghpf epcf90 gfortran g95 xlf95 f95 fort ifort  
</span><br>
<span class="quotelev2">&gt;&gt; ifc efcpgfortran pgf95 lf95 ftn
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you have any idea what could cause these differences, I&#146;m all  
</span><br>
<span class="quotelev2">&gt;&gt; ears&#133;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org] On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, September 24, 2011 8:23 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: EXTERNAL: Re: [OMPI users] Trouble compiling 1.4.3 with  
</span><br>
<span class="quotelev2">&gt;&gt; PGI 10.9 compilers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just out of curiosity, does Open MPI 1.5.4 build properly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We've seen problems with the PGI compiler suite before -- it *does*  
</span><br>
<span class="quotelev2">&gt;&gt; look like a problem with libtool-building issues; e.g., a switch is  
</span><br>
<span class="quotelev2">&gt;&gt; too old or is missing or something.  Meaning: it looks like PGI  
</span><br>
<span class="quotelev2">&gt;&gt; thinks it's trying to build an application, not a library.  This is  
</span><br>
<span class="quotelev2">&gt;&gt; usually bit rot in libtool (i.e., PGI may have changed their  
</span><br>
<span class="quotelev2">&gt;&gt; options, but we're using an older Libtool in the 1.4.x series that  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't know about this option).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do note that we fixed some libtool issues in the 1.4.4 tarball;  
</span><br>
<span class="quotelev2">&gt;&gt; could you try the 1.4.4rc and see if that fixes the issue?  If not,  
</span><br>
<span class="quotelev2">&gt;&gt; we might have missed some patches to bring over to the v1.4 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 20, 2011, at 1:16 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having trouble building 1.4.3 using PGI 10.9.  I searched the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list archives briefly but I didn't stumble across anything that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looked like the same problem, so I thought I'd ask if an expert  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might recognize the nature of the problem here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The configure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/release/openmpi-pgi --without-tm --without- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sge --enable-mpirun-prefix-by-default --enable-contrib-no-build=vt  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mca-no-build=maffinity --disable-per-user-config-files -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable-io-romio --with-mpi-f90-size=small --enable-static -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; disable-shared --with-wrapper-cflags=-Msignextend --with-wrapper- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cxxflags=-Msignextend CXX=/appserv/pgi/linux86-64/10.9/bin/pgCC  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=/appserv/pgi/linux86-64/10.9/bin/pgcc 'CFLAGS=  -O2 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mcache_align -Minfo -Msignextend -Msignextend' 'CXXFLAGS=  -O2 - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mcache_align -Minfo -Msignextend -Msignextend' F77=/appserv/pgi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux86-64/10.9/bin/pgf95 'FFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Minfo -Munixlogical' FC=/appserv/pgi/linux86-64/10.9/bin/pgf95  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'FCFLAGS=-D_GNU_SOURCE  -O2 -Mcache_align -Minfo -Munixlogical'  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'LDFLAGS= -Bstatic_pgi'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The place where the build eventually dies:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link /appserv/pgi/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux86-64/10.9/bin/pgCC  -DNDEBUG   -O2 -Mcache_align -Minfo - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Msignextend -Msignextend  -version-info 0:1:0 -export-dynamic  - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bstatic_pgi  -o libmpi_cxx.la -rpath /release/cfd/openmpi-pgi/lib  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.lo intercepts.lo comm.lo datatype.lo win.lo  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file.lo ../../../ompi/libmpi.la -lnsl -lutil  -lpthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: tpldir=Template.dir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link:  rm -rf Template.dir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link:  /appserv/pgi/linux86-64/10.9/bin/pgCC -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prelink_objects --instantiation_dir Template.dir   mpicxx.o  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intercepts.o comm.o datatype.o win.o file.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgCC-Warning-prelink_objects switch is deprecated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pgCC-Warning-instantiation_dir switch is deprecated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/crt1.o: In function `_start':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/src/packages/BUILD/glibc-2.9/csu/../sysdeps/x86_64/elf/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start.S:109: undefined reference to `main'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (.text+0x49): undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (.text+0x62): undefined reference to `ompi_mpi_errors_return'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx.o: In function `__sti___9_mpicxx_cc_a6befbec':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (.text+0x7b): undefined reference to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `ompi_mpi_errors_throw_exceptions'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17451.php">German Hoecht: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17449.php">Gus Correa: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17440.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
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
