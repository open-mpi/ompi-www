<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 16:24:43 2011" -->
<!-- isoreceived="20111108212443" -->
<!-- sent="Tue, 8 Nov 2011 14:24:39 -0700" -->
<!-- isosent="20111108212439" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers" -->
<!-- id="B9E5166E-CE37-43D9-B6E5-EC8CD22A9444_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="23C4E4CE-47F3-46F6-A8D4-22FBD2F0A273_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 16:24:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>In reply to:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17729.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think I've seen this before.
<br>
<p>I can't speak to the details surrounding this issue, but when I upgraded to the newest version of libtool, the problem went away &lt;shrug&gt;.
<br>
<p>Take a look at &quot;Use of GNU m4, Autoconf, Automake, and Libtool&quot; in our HACKING file.  libtool-2.4.2.tar.gz **should** work, if that's the problem that you are experiencing.
<br>
<p>I would suggest starting with a fresh source tree, before you try again.
<br>
<p>Hope that helps,
<br>
<p>Samuel K. Gutierrez
<br>
Los Alamos National Laboratory
<br>
<p>On Nov 8, 2011, at 2:06 PM, Gustavo Correa wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI pros
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to build OpenMPI 1.4.4 with PGI compilers 11.7 [pgcc, pgcc, pgfortran]
</span><br>
<span class="quotelev1">&gt; I get the awkward error message on the bottom of this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I say awkward because I assigned the value 'shanghai-64' to the '-tp' flag,
</span><br>
<span class="quotelev1">&gt; as you can see from the successful 'libtool:compile' command in the error message.
</span><br>
<span class="quotelev1">&gt; However, the subsequent 'libtool:link' command has '-tp' without a value.
</span><br>
<span class="quotelev1">&gt; Note that the remaining flags '-fast -Mfprelaxed' were also dropped in the libtool:link command. 
</span><br>
<span class="quotelev1">&gt; The 'partial' flag '-tp' is worse than no flag at all, and the pgcc compiler fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By contrast, OpenMPI 1.4.3 builds just fine with  the same compilers and 
</span><br>
<span class="quotelev1">&gt; the same compiler flags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this the revival of an old idiosyncrasy between libtool and PGI?
</span><br>
<span class="quotelev1">&gt; Could perhaps the OMPI 1.4.4. configure script have stripped off my compiler flags after '-tp',
</span><br>
<span class="quotelev1">&gt; when passing it to libtool in link mode? [Somehow it works in 1.4.3.]
</span><br>
<span class="quotelev1">&gt; Is there any workaround or patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ******
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; CentOS Linux 5.2 x86_64, libtool 1.5.22, PGI 11.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure parameters:
</span><br>
<span class="quotelev1">&gt; export CC=pgcc
</span><br>
<span class="quotelev1">&gt; export CXX=pgcpp
</span><br>
<span class="quotelev1">&gt; export F77='pgfortran'
</span><br>
<span class="quotelev1">&gt; export FC=${F77}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=${CFLAGS}
</span><br>
<span class="quotelev1">&gt; export FFLAGS=${CFLAGS}
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=${FFLAGS}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../configure \
</span><br>
<span class="quotelev1">&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque/2.4.11/gnu-4.1.2 \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt; --enable-static \
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1 | tee configure_${build_id}.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #################### ERROR MESSAGE ###########################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c -o dummy.o &gt;/dev/null 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed   -export-dynamic   -o libopenmpi_malloc.la -rpath /home/sw/openmpi/1.4.4/pgi-11.7/lib dummy.lo  -lnsl -lutil  
</span><br>
<span class="quotelev1">&gt; libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; pgcc-Fatal-Switch -tp must have a value
</span><br>
<span class="quotelev1">&gt; -tp=amd64|amd64e|athlon|athlonxp|barcelona|barcelona-32|barcelona-64|core2|core2-32|core2-64|istanbul|istanbul-32|istanbul-64|k7|k8|k8-32|k8-64|k8-64e|nehalem|nehalem-32|nehalem-64|p5|p6|p7|p7-32|p7-64|penryn|penryn-32|penryn-64|piii|piv|px|px-32|px-64|sandybridge|sandybridge-32|sandybridge-64|shanghai|shanghai-32|shanghai-64|x64
</span><br>
<span class="quotelev1">&gt;                    Choose target processor type
</span><br>
<span class="quotelev1">&gt;    amd64           Same as -tp k8-64
</span><br>
<span class="quotelev1">&gt;    amd64e          Same as -tp k8-64e
</span><br>
<span class="quotelev1">&gt;    athlon          AMD 32-bit Athlon Processor
</span><br>
<span class="quotelev1">&gt;    athlonxp        AMD 32-bit Athlon XP Processor
</span><br>
<span class="quotelev1">&gt;    barcelona       AMD Barcelona processor
</span><br>
<span class="quotelev1">&gt;    barcelona-32    AMD Barcelona processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    barcelona-64    AMD Barcelona processor, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    core2           Intel Core-2 Architecture
</span><br>
<span class="quotelev1">&gt;    core2-32        Intel Core-2 Architecture, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    core2-64        Intel Core-2 Architecture, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    istanbul        AMD Istanbul processor
</span><br>
<span class="quotelev1">&gt;    istanbul-32     AMD Istanbul processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    istanbul-64     AMD Istanbul processor, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    k7              AMD Athlon Processor
</span><br>
<span class="quotelev1">&gt;    k8              AMD64 Processor
</span><br>
<span class="quotelev1">&gt;    k8-32           AMD64 Processor 32-bit mode
</span><br>
<span class="quotelev1">&gt;    k8-64           AMD64 Processor 64-bit mode
</span><br>
<span class="quotelev1">&gt;    k8-64e          AMD64 Processor rev E or later, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    nehalem         Intel Nehalem processor
</span><br>
<span class="quotelev1">&gt;    nehalem-32      Intel Nehalem processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    nehalem-64      Intel Nehalem processor, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    p5              Intel P5 Pentium Architecture
</span><br>
<span class="quotelev1">&gt;    p6              Intel P6 Architecture (Pentium Pro, II, III)
</span><br>
<span class="quotelev1">&gt;    p7              Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev1">&gt;    p7-32           Intel P7 Architecture (Pentium 4, Xeon, Centrino)
</span><br>
<span class="quotelev1">&gt;    p7-64           Intel P7 Architecture with EM64T, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    penryn          Intel Penryn Architecture
</span><br>
<span class="quotelev1">&gt;    penryn-32       Intel Penryn Architecture, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    penryn-64       Intel Penryn Architecture, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    piii            Intel Pentium III
</span><br>
<span class="quotelev1">&gt;    piv             Intel Pentium 4
</span><br>
<span class="quotelev1">&gt;    px              Generic x86 Processor
</span><br>
<span class="quotelev1">&gt;    px-32           Generic x86 Processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    px-64           Generic x86-64 architecture
</span><br>
<span class="quotelev1">&gt;    sandybridge     Intel SandyBridge processor
</span><br>
<span class="quotelev1">&gt;    sandybridge-32  Intel SandyBridge processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    sandybridge-64  Intel SandyBridge processor, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    shanghai        AMD Shanghai processor
</span><br>
<span class="quotelev1">&gt;    shanghai-32     AMD Shanghai processor, 32-bit mode
</span><br>
<span class="quotelev1">&gt;    shanghai-64     AMD Shanghai processor, 64-bit mode
</span><br>
<span class="quotelev1">&gt;    x64             Unified AMD/Intel 64-bit mode
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopenmpi_malloc.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal/mca/memory/ptmalloc2'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
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
<li><strong>Next message:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>In reply to:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17727.php">Gustavo Correa: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17729.php">Jeff Squyres: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
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
