<?
$subject_val = "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 16:07:02 2011" -->
<!-- isoreceived="20111108210702" -->
<!-- sent="Tue, 8 Nov 2011 16:06:57 -0500" -->
<!-- isosent="20111108210657" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers" -->
<!-- id="23C4E4CE-47F3-46F6-A8D4-22FBD2F0A273_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 16:06:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI pros
<br>
<p>When I try to build OpenMPI 1.4.4 with PGI compilers 11.7 [pgcc, pgcc, pgfortran]
<br>
I get the awkward error message on the bottom of this email.
<br>
<p>I say awkward because I assigned the value 'shanghai-64' to the '-tp' flag,
<br>
as you can see from the successful 'libtool:compile' command in the error message.
<br>
However, the subsequent 'libtool:link' command has '-tp' without a value.
<br>
Note that the remaining flags '-fast -Mfprelaxed' were also dropped in the libtool:link command. 
<br>
The 'partial' flag '-tp' is worse than no flag at all, and the pgcc compiler fails.
<br>
<p>By contrast, OpenMPI 1.4.3 builds just fine with  the same compilers and 
<br>
the same compiler flags.
<br>
<p>Is this the revival of an old idiosyncrasy between libtool and PGI?
<br>
Could perhaps the OMPI 1.4.4. configure script have stripped off my compiler flags after '-tp',
<br>
when passing it to libtool in link mode? [Somehow it works in 1.4.3.]
<br>
Is there any workaround or patch?
<br>
<p><p>Many thanks,
<br>
Gus Correa
<br>
<p>******
<br>
<p>More details:
<br>
CentOS Linux 5.2 x86_64, libtool 1.5.22, PGI 11.7.
<br>
<p>Configure parameters:
<br>
export CC=pgcc
<br>
export CXX=pgcpp
<br>
export F77='pgfortran'
<br>
export FC=${F77}
<br>
<p>export CFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
<br>
export CXXFLAGS=${CFLAGS}
<br>
export FFLAGS=${CFLAGS}
<br>
export FCFLAGS=${FFLAGS}
<br>
<p>../configure \
<br>
--prefix=${MYINSTALLDIR} \
<br>
--with-libnuma=/usr \
<br>
--with-tm=/opt/torque/2.4.11/gnu-4.1.2 \
<br>
--with-openib=/usr \
<br>
--enable-static \
<br>
2&gt;&amp;1 | tee configure_${build_id}.log
<br>
<p>****
<br>
<p>#################### ERROR MESSAGE ###########################
<br>
<p>libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../../opal/mca/memory/ptmalloc2 -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/pthread -I../../../../../opal/mca/memory/ptmalloc2/sysdeps/generic -I../../../../.. -I../../../.. -I../../../../../opal/include -I../../../../../orte/include -I../../../../../ompi/include -D_REENTRANT -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed -c ../../../../../opal/mca/memory/ptmalloc2/dummy.c -o dummy.o &gt;/dev/null 2&gt;&amp;1
<br>
/bin/sh ../../../../libtool --tag=CC   --mode=link pgcc  -DNDEBUG -tp shanghai-64 -fast -Mfprelaxed   -export-dynamic   -o libopenmpi_malloc.la -rpath /home/sw/openmpi/1.4.4/pgi-11.7/lib dummy.lo  -lnsl -lutil  
<br>
libtool: link: pgcc -shared  -fpic -DPIC  .libs/dummy.o   -lnsl -lutil -lc  -tp   -Wl,-soname -Wl,libopenmpi_malloc.so.0 -o .libs/libopenmpi_malloc.so.0.0.0
<br>
pgcc-Fatal-Switch -tp must have a value
<br>
-tp=amd64|amd64e|athlon|athlonxp|barcelona|barcelona-32|barcelona-64|core2|core2-32|core2-64|istanbul|istanbul-32|istanbul-64|k7|k8|k8-32|k8-64|k8-64e|nehalem|nehalem-32|nehalem-64|p5|p6|p7|p7-32|p7-64|penryn|penryn-32|penryn-64|piii|piv|px|px-32|px-64|sandybridge|sandybridge-32|sandybridge-64|shanghai|shanghai-32|shanghai-64|x64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose target processor type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amd64           Same as -tp k8-64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;amd64e          Same as -tp k8-64e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;athlon          AMD 32-bit Athlon Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;athlonxp        AMD 32-bit Athlon XP Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;barcelona       AMD Barcelona processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;barcelona-32    AMD Barcelona processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;barcelona-64    AMD Barcelona processor, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;core2           Intel Core-2 Architecture
<br>
&nbsp;&nbsp;&nbsp;&nbsp;core2-32        Intel Core-2 Architecture, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;core2-64        Intel Core-2 Architecture, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;istanbul        AMD Istanbul processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;istanbul-32     AMD Istanbul processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;istanbul-64     AMD Istanbul processor, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k7              AMD Athlon Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k8              AMD64 Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k8-32           AMD64 Processor 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k8-64           AMD64 Processor 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k8-64e          AMD64 Processor rev E or later, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nehalem         Intel Nehalem processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nehalem-32      Intel Nehalem processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nehalem-64      Intel Nehalem processor, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p5              Intel P5 Pentium Architecture
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p6              Intel P6 Architecture (Pentium Pro, II, III)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p7              Intel P7 Architecture (Pentium 4, Xeon, Centrino)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p7-32           Intel P7 Architecture (Pentium 4, Xeon, Centrino)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p7-64           Intel P7 Architecture with EM64T, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;penryn          Intel Penryn Architecture
<br>
&nbsp;&nbsp;&nbsp;&nbsp;penryn-32       Intel Penryn Architecture, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;penryn-64       Intel Penryn Architecture, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;piii            Intel Pentium III
<br>
&nbsp;&nbsp;&nbsp;&nbsp;piv             Intel Pentium 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;px              Generic x86 Processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;px-32           Generic x86 Processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;px-64           Generic x86-64 architecture
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sandybridge     Intel SandyBridge processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sandybridge-32  Intel SandyBridge processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sandybridge-64  Intel SandyBridge processor, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shanghai        AMD Shanghai processor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shanghai-32     AMD Shanghai processor, 32-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shanghai-64     AMD Shanghai processor, 64-bit mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;x64             Unified AMD/Intel 64-bit mode
<br>
make[2]: *** [libopenmpi_malloc.la] Error 2
<br>
make[2]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal/mca/memory/ptmalloc2'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/swinst/openmpi/1.4.4/openmpi-1.4.4/build_pgi-11.7/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17724.php">Jeffrey A Cummings: "[OMPI users]  Socket ports"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Reply:</strong> <a href="17726.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
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
