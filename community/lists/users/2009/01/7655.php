<?
$subject_val = "Re: [OMPI users] Open MPI and mpi-defaults";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 06:29:17 2009" -->
<!-- isoreceived="20090107112917" -->
<!-- sent="Wed, 7 Jan 2009 06:29:07 -0500" -->
<!-- isosent="20090107112907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and mpi-defaults" -->
<!-- id="AC69197D-4346-4F52-B72B-228991EA6799_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1231277625.13978.54.camel_at_workhorse" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and mpi-defaults<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-07 06:29:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like we need an alpha implementation (and mips?) of our  
<br>
assembly code...
<br>
<p>I don't think anyone in the community currently supports either of  
<br>
these platforms, unfortunately.
<br>
<p><p><p>On Jan 6, 2009, at 4:33 PM, Adam C Powell IV wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 2009-01-06 at 12:25 -0600, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that openmpi is now owner of a FTFBS against mpi-defaults  
</span><br>
<span class="quotelev2">&gt;&gt; because
</span><br>
<span class="quotelev2">&gt;&gt; the latter wants the former which is missing on Alpha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, I was supposed to let you know about this, as this openmpi
</span><br>
<span class="quotelev1">&gt; failure is keeping arpack++ out of Lenny.  The real problem is that
</span><br>
<span class="quotelev1">&gt; openmpi is FTBFS on alpha, see below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody dive in there and sort this out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The openmpi buildd log on alpha [1] ends with:
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://buildd.debian.org/fetch.cgi?pkg=openmpi;ver=1.2.8-3;arch=alpha;stamp=1225663211">http://buildd.debian.org/fetch.cgi?pkg=openmpi;ver=1.2.8-3;arch=alpha;stamp=1225663211</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX   --mode=link g++  -DNDEBUG -g - 
</span><br>
<span class="quotelev1">&gt; O2 -finline-functions -pthread  -export-dynamic   -o ompi_info  
</span><br>
<span class="quotelev1">&gt; components.o ompi_info.o output.o param.o version.o ../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; libmpi.la -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -DNDEBUG -g -O2 -finline-functions -pthread - 
</span><br>
<span class="quotelev1">&gt; o .libs/ompi_info components.o ompi_info.o output.o param.o  
</span><br>
<span class="quotelev1">&gt; version.o -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so /usr/ 
</span><br>
<span class="quotelev1">&gt; lib/libibverbs.so -lpthread -lrt /build/buildd/openmpi-1.2.8/build/ 
</span><br>
<span class="quotelev1">&gt; static/orte/.libs/libopen-rte.so /build/buildd/openmpi-1.2.8/build/ 
</span><br>
<span class="quotelev1">&gt; static/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread -Wl,- 
</span><br>
<span class="quotelev1">&gt; rpath -Wl,/usr/lib/openmpi/lib
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `opal_sys_timer_get_cycles'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[3]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/build/buildd/openmpi-1.2.8/build/static/ 
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Earlier on we have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/build/buildd/openmpi-1.2.8/build/basic/ 
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib'
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../orte/include -I../../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../../ompi/mca/btl/openib -DPKGDATADIR=\&quot;/usr/share/ 
</span><br>
<span class="quotelev1">&gt; openmpi\&quot; -I../../../../../.. -I../../../.. -I../../../../../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../../../orte/include -I../../../../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -DNDEBUG -Wall -g -O2 -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -pthread -MT btl_openib_component.lo -MD -MP -MF .deps/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_component.Tpo -c ../../../../../../ompi/mca/btl/openib/ 
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c  -fPIC -DPIC -o .libs/btl_openib_component.o
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/mca/btl/openib/btl_openib_component.c: In  
</span><br>
<span class="quotelev1">&gt; function 'btl_openib_component_init':
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/mca/btl/openib/btl_openib_component.c:666:  
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function 'opal_sys_timer_get_cycles'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, found it.  This function is inline assembly in timer.h, which
</span><br>
<span class="quotelev1">&gt; exists in opal/sys/amd64, ia32, ia64, powerpc and sparcv9 but not  
</span><br>
<span class="quotelev1">&gt; alpha,
</span><br>
<span class="quotelev1">&gt; mips, sparc or win32.  That said, timer.h in opal/sys has:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifndef OPAL_HAVE_SYS_TIMER_GET_CYCLES
</span><br>
<span class="quotelev1">&gt; #define OPAL_HAVE_SYS_TIMER_GET_CYCLES 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which somehow is working on sparc (no reference to this function in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; buildd log) but not alpha.  (On mips, there are a bunch of assembler
</span><br>
<span class="quotelev1">&gt; errors of the form &quot;opcode not supported on this processor&quot;.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's about what I have time for now.  Don't worry about mpi- 
</span><br>
<span class="quotelev1">&gt; defaults,
</span><br>
<span class="quotelev1">&gt; it's not trying to get into Lenny; but we should worry about OpenMPI  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; building on alpha.  Does anyone on users_at_[hidden] have any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Adam
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; GPG fingerprint: D54D 1AEE B11C CE9B A02B  C5DD 526F 01E8 564E E4B6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Engineering consulting with open source tools
</span><br>
<span class="quotelev1">&gt; <a href="http://www.opennovation.com/">http://www.opennovation.com/</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7656.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7654.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_rank: Out-of-range coordinates are erroneous for non-periodic dimensions"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Adam C Powell IV: "Re: [OMPI users] Open MPI and mpi-defaults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
<li><strong>Reply:</strong> <a href="7657.php">Manuel Prinz: "Re: [OMPI users] [Pkg-openmpi-maintainers] Open MPI and	mpi-defaults"</a>
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
