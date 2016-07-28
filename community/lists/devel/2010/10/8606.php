<?
$subject_val = "Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 14 14:53:18 2010" -->
<!-- isoreceived="20101014185318" -->
<!-- sent="Thu, 14 Oct 2010 20:53:11 +0200" -->
<!-- isosent="20101014185311" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)" -->
<!-- id="20101014185310.GE15188_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C76D8D7.5060603_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-14 14:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8398.php">http://www.open-mpi.org/community/lists/devel/2010/08/8398.php</a> ]
<br>
<p>Hello Paul,
<br>
<p>sorry for the late reply.  This issue you reported is valid; it is
<br>
already fixed in upstream Libtool 2.2.8, with commit
<br>
v2.2.6-201-g519bf91:
<br>
&lt;<a href="http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91">http://git.savannah.gnu.org/cgit/libtool.git/commit/?id=v2.2.6-201-g519bf91</a>&gt;
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Paul H. Hargrove wrote on Thu, Aug 26, 2010 at 11:12:55PM CEST:
<br>
<span class="quotelev1">&gt; One of the platforms I've been testing is a Linux/PPC64 (which happens to be
</span><br>
<span class="quotelev1">&gt; the front-end to a BG/P, but don't be confused by that - I am NOT trying to
</span><br>
<span class="quotelev1">&gt; build for the BG/P).  On the system are IBM's XLC compilers (also sold under
</span><br>
<span class="quotelev1">&gt; the ABSoft name).  When passing &quot;-q64&quot; to the xlc compilers to get an LP64
</span><br>
<span class="quotelev1">&gt; ABI (default is ILP32), it seems that the scripts for constricting the F90
</span><br>
<span class="quotelev1">&gt; bindings somehow end up passing the &quot;-q64&quot; to /usr/bin/ld, which is not
</span><br>
<span class="quotelev1">&gt; happy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I don't set {C,CXX,F,FC}FLAGS=-q64 then there is no problem building the
</span><br>
<span class="quotelev1">&gt; F90 bindings (for ILP32 ABI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I --disable-mpi-f90 the build is fine (except for the atomic test failure
</span><br>
<span class="quotelev1">&gt; from &quot;make check&quot;, reported in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8369.php">http://www.open-mpi.org/community/lists/devel/2010/08/8369.php</a>)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the details of the platform:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux login1 2.6.16.60-0.67.1-ppc64 #1 SMP Thu Aug 5 10:54:46 UTC 2010
</span><br>
<span class="quotelev1">&gt; ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ which xlc
</span><br>
<span class="quotelev1">&gt; /soft/apps/ibmcmp-aug2010/vac/bg/9.0/bin/xlc
</span><br>
<span class="quotelev1">&gt; $ xlc -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ Advanced Edition for Blue Gene/P, V9.0
</span><br>
<span class="quotelev1">&gt; Version: 09.00.0000.0009
</span><br>
[...]
<br>
<p><span class="quotelev1">&gt; Here is the configure command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ [path_to]/configure --with-contrib-vt-flags=--with-platform=linux CC=xlc_r
</span><br>
<span class="quotelev1">&gt; CXX=xlC_r F77=xlf FC=xlf90 CFLAGS=-q64 CXXFLAGS=-q64 FFLAGS=-q64
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-q64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem exists with both 1.5rc5 and 1.4.3rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the failure from 1.4.3.rc1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=link xlf90 -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/mpi/f90  -q64 -version-info 0:0:0  -export-dynamic   -o
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la -rpath /usr/local/lib mpi.lo mpi_sizeof.lo
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/orte/.libs
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/opal/.libs
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-q64'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
[...]
<br>
<p><span class="quotelev1">&gt; Here is the failure from 1.5rc5 (including re-run w/ V=1)
</span><br>
<p><span class="quotelev1">&gt; $ make V=1
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=FC   --mode=link xlf90
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/include -I../../../../ompi/include -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/mpi/f90 -I../../../ompi/mpi/f90  -q64 -version-info 0:0:0
</span><br>
<span class="quotelev1">&gt; -export-dynamic  -o libmpi_f90.la -rpath /usr/local/lib mpi.lo mpi_sizeof.lo
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mpi/f77/libmpi_f77.la -lnsl  -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /usr/bin/ld -m elf64ppc -shared  .libs/mpi.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/.libs
</span><br>
<span class="quotelev1">&gt; ../../../ompi/mpi/f77/.libs/libmpi_f77.so
</span><br>
<span class="quotelev1">&gt; /home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/.libs/libmpi.so -ldl
</span><br>
<span class="quotelev1">&gt; -lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-q64'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/gpfs/home/hargrove/tmp/openmpi-1.5rc5/BLD-xlc_r-64/ompi/mpi/f90'
</span><br>
[...]
<br>
<p><p><span class="quotelev1">&gt; Based on the make output this might be a libtool issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I noticed the following comment in ompi/mpi/f90/Makefile.am:
</span><br>
<span class="quotelev1">&gt; # This Makefile.am is quite complex and confusing.  Part of the
</span><br>
<span class="quotelev1">&gt; # problem is that Libtool (v1.5.18) does not understand F90, so we
</span><br>
<span class="quotelev1">&gt; # have to do a few things manually (and no shared libraries). Here's a
</span><br>
<span class="quotelev1">&gt; # summary of what is happening:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which suggests to me that the problem might come from how libtool is USED in
</span><br>
<span class="quotelev1">&gt; this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did see that the Libool configure logic already found the proper ld flags:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Libtool configuration
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking whether the xlc_r -q64 linker (/usr/bin/ld -m elf64ppc) supports
</span><br>
<span class="quotelev1">&gt; shared libraries... yes
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking whether the xlC_r -q64 linker (/usr/bin/ld -m elf64ppc) supports
</span><br>
<span class="quotelev1">&gt; shared libraries... yes
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking whether the xlC_r -q64 linker (/usr/bin/ld -m elf64ppc) supports
</span><br>
<span class="quotelev1">&gt; shared libraries... yes
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking whether the xlf -q64 linker (/usr/bin/ld -m elf64ppc) supports
</span><br>
<span class="quotelev1">&gt; shared libraries... yes
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking whether the xlf90 -q64 linker (/usr/bin/ld -m elf64ppc) supports
</span><br>
<span class="quotelev1">&gt; shared libraries... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know the FAQ entry (singular) in the Libtool manual suggests trying
</span><br>
<span class="quotelev1">&gt; something like CC='xlc_r -q64' instead of CFLAGS-q64 if one has problems
</span><br>
<span class="quotelev1">&gt; with flags used to link a shared library.  However, I tried that and just
</span><br>
<span class="quotelev1">&gt; reach a slightly different instance of the same error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool   --mode=link xlf90 -q64 -I../../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I. -I../../../../ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; -I../../../ompi/mpi/f90   -version-info 0:0:0  -export-dynamic   -o
</span><br>
<span class="quotelev1">&gt; libmpi_f90.la -rpath /usr/local/lib mpi.lo mpi_sizeof.lo
</span><br>
<span class="quotelev1">&gt; mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo mpi_testsome_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_waitall_f90.lo mpi_waitsome_f90.lo mpi_wtick_f90.lo mpi_wtime_f90.lo
</span><br>
<span class="quotelev1">&gt; ../../../ompi/libmpi.la -lnsl -lutil libtool: link: /usr/bin/ld -m elf64ppc
</span><br>
<span class="quotelev1">&gt; -shared  .libs/mpi.o .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/orte/.libs
</span><br>
<span class="quotelev1">&gt; -L/home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/opal/.libs
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/orte/.libs/libopen-rte.so /home/hargrove/tmp/openmpi-1.4.3rc1/BLD-xlc_r-64-noflags/opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; -ldl -lnsl -lutil  -q64   -soname libmpi_f90.so.0 -o
</span><br>
<span class="quotelev1">&gt; .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-q64'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, at this point my best guess is that libtool believes that the -q64
</span><br>
<span class="quotelev1">&gt; argument is a linker flag, when in fact it is not.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8607.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8398.php">Paul H. Hargrove: "[OMPI devel] Failure (libtool?) to build F90 bindings w/ XLC/PPC64 (1.5rc5 and 1.4.3rc1)"</a>
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
