<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 20:48:54 2011" -->
<!-- isoreceived="20111109014854" -->
<!-- sent="Tue, 8 Nov 2011 20:48:49 -0500" -->
<!-- isosent="20111109014849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers" -->
<!-- id="B0F1C324-2038-4E80-9915-A63437339C24_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B9E5166E-CE37-43D9-B6E5-EC8CD22A9444_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 20:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17728.php">George Bosilca: "[OMPI users] [OMPI devel] Open MPI BOF"</a>
<li><strong>In reply to:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sam --
<br>
<p>The production tarballs are pre-Autotools-bootstrapped; the end user doesn't even have to have the GNU autotools installed at all.  As such, it doesn't matter what version of OMPI they have installed.
<br>
<p><p><p>On Nov 8, 2011, at 4:24 PM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I've seen this before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't speak to the details surrounding this issue, but when I upgraded to the newest version of libtool, the problem went away &lt;shrug&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take a look at &quot;Use of GNU m4, Autoconf, Automake, and Libtool&quot; in our HACKING file.  libtool-2.4.2.tar.gz **should** work, if that's the problem that you are experiencing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would suggest starting with a fresh source tree, before you try again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 8, 2011, at 2:06 PM, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI pros
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I try to build OpenMPI 1.4.4 with PGI compilers 11.7 [pgcc, pgcc, pgfortran]
</span><br>
<span class="quotelev2">&gt;&gt; I get the awkward error message on the bottom of this email.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I say awkward because I assigned the value 'shanghai-64' to the '-tp' flag,
</span><br>
<span class="quotelev2">&gt;&gt; as you can see from the successful 'libtool:compile' command in the error message.
</span><br>
<span class="quotelev2">&gt;&gt; However, the subsequent 'libtool:link' command has '-tp' without a value.
</span><br>
<span class="quotelev2">&gt;&gt; Note that the remaining flags '-fast -Mfprelaxed' were also dropped in the libtool:link command. 
</span><br>
<span class="quotelev2">&gt;&gt; The 'partial' flag '-tp' is worse than no flag at all, and the pgcc compiler fails.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By contrast, OpenMPI 1.4.3 builds just fine with  the same compilers and 
</span><br>
<span class="quotelev2">&gt;&gt; the same compiler flags.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is this the revival of an old idiosyncrasy between libtool and PGI?
</span><br>
<span class="quotelev2">&gt;&gt; Could perhaps the OMPI 1.4.4. configure script have stripped off my compiler flags after '-tp',
</span><br>
<span class="quotelev2">&gt;&gt; when passing it to libtool in link mode? [Somehow it works in 1.4.3.]
</span><br>
<span class="quotelev2">&gt;&gt; Is there any workaround or patch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ******
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More details:
</span><br>
<span class="quotelev2">&gt;&gt; CentOS Linux 5.2 x86_64, libtool 1.5.22, PGI 11.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configure parameters:
</span><br>
<span class="quotelev2">&gt;&gt; export CC=pgcc
</span><br>
<span class="quotelev2">&gt;&gt; export CXX=pgcpp
</span><br>
<span class="quotelev2">&gt;&gt; export F77='pgfortran'
</span><br>
<span class="quotelev2">&gt;&gt; export FC=${F77}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; export CFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
</span><br>
<span class="quotelev2">&gt;&gt; export CXXFLAGS=${CFLAGS}
</span><br>
<span class="quotelev2">&gt;&gt; export FFLAGS=${CFLAGS}
</span><br>
<span class="quotelev2">&gt;&gt; export FCFLAGS=${FFLAGS}
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ../configure \
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/opt/torque/2.4.11/gnu-4.1.2 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static \
</span><br>
<span class="quotelev2">&gt;&gt; 2&gt;&amp;1 | tee configure_${build_id}.log
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ****
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #################### ERROR MESSAGE ###########################
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c -o dummy.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed   -export-dynamic   -o libopenmpi_malloc.la -rpath /home/sw/openmpi/1.4.4/pgi-11.7/lib dummy.lo  -lnsl -lutil  
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Fatal-Switch -tp must have a value
</span><br>
<span class="quotelev2">&gt;&gt; -tp=amd64|amd64e|athlon|athlonxp|barcelona|barcelona-32|barcelona-64|core2|core2-32|core2-64|istanbul|istanbul-32|istanbul-64|k7|k8|k8-32|k8-64|k8-64e|nehalem|nehalem-32|nehalem-64|p5|p6|p7|p7-32|p7-64|penryn|penryn-32|penryn-64|piii|piv|px|px-32|px-64|sandybridge|sandybridge-32|sandybridge-64|shanghai|shanghai-32|shanghai-64|x64
</span><br>
<span class="quotelev2">&gt;&gt;                   Choose target processor type
</span><br>
<span class="quotelev2">&gt;&gt;   amd64           Same as -tp k8-64
</span><br>
<span class="quotelev2">&gt;&gt;   amd64e          Same as -tp k8-64e
</span><br>
<span class="quotelev2">&gt;&gt;   athlon          AMD 32-bit Athlon Processor
</span><br>
<span class="quotelev2">&gt;&gt;   athlonxp        AMD 32-bit Athlon XP Processor
</span><br>
<span class="quotelev2">&gt;&gt;   barcelona       AMD Barcelona processor
</span><br>
<span class="quotelev2">&gt;&gt;   barcelona-32    AMD Barcelona processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   barcelona-64    AMD Barcelona processor, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   core2           Intel Core-2 Architecture
</span><br>
<span class="quotelev2">&gt;&gt;   core2-32        Intel Core-2 Architecture, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   core2-64        Intel Core-2 Architecture, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   istanbul        AMD Istanbul processor
</span><br>
<span class="quotelev2">&gt;&gt;   istanbul-32     AMD Istanbul processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   istanbul-64     AMD Istanbul processor, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   k7              AMD Athlon Processor
</span><br>
<span class="quotelev2">&gt;&gt;   k8              AMD64 Processor
</span><br>
<span class="quotelev2">&gt;&gt;   k8-32           AMD64 Processor 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   k8-64           AMD64 Processor 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   k8-64e          AMD64 Processor rev E or later, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   nehalem         Intel Nehalem processor
</span><br>
<span class="quotelev2">&gt;&gt;   nehalem-32      Intel Nehalem processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   nehalem-64      Intel Nehalem processor, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   p5              Intel P5 Pentium Architecture
</span><br>
<span class="quotelev2">&gt;&gt;   p6              Intel P6 Architecture (Pentium Pro, II, III)
</span><br>
<span class="quotelev2">&gt;&gt;   p7              Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev2">&gt;&gt;   p7-32           Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev2">&gt;&gt;   p7-64           Intel P7 Architecture with EM64T, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   penryn          Intel Penryn Architecture
</span><br>
<span class="quotelev2">&gt;&gt;   penryn-32       Intel Penryn Architecture, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   penryn-64       Intel Penryn Architecture, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   piii            Intel Pentium III
</span><br>
<span class="quotelev2">&gt;&gt;   piv             Intel Pentium 4
</span><br>
<span class="quotelev2">&gt;&gt;   px              Generic x86 Processor
</span><br>
<span class="quotelev2">&gt;&gt;   px-32           Generic x86 Processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   px-64           Generic x86-64 architecture
</span><br>
<span class="quotelev2">&gt;&gt;   sandybridge     Intel SandyBridge processor
</span><br>
<span class="quotelev2">&gt;&gt;   sandybridge-32  Intel SandyBridge processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   sandybridge-64  Intel SandyBridge processor, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   shanghai        AMD Shanghai processor
</span><br>
<span class="quotelev2">&gt;&gt;   shanghai-32     AMD Shanghai processor, 32-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   shanghai-64     AMD Shanghai processor, 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt;   x64             Unified AMD/Intel 64-bit mode
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libopenmpi_malloc.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal/mca/memory/ptmalloc2'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="17730.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17728.php">George Bosilca: "[OMPI users] [OMPI devel] Open MPI BOF"</a>
<li><strong>In reply to:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
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
