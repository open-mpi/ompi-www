<?
$subject_val = "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 14:51:29 2009" -->
<!-- isoreceived="20091110195129" -->
<!-- sent="Tue, 10 Nov 2009 12:51:16 -0700" -->
<!-- isosent="20091110195116" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB499D6AD2_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 14:51:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Previous message:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build OpenMPI with Intel compilers, both static and dynamic libs, then move it to a system that does not have Intel compilers.  I don't care about system libraries or OpenMPI loadable modules being dynamic, that's all fine.  But I need the compiler libs to be statically linked into any executable.
<br>
<p>I don't seem to be smart enough to figure out how to get the Intel libs statically linked into the &quot;orterun&quot; command.
<br>
<p>Can someone help suggest the right way to achieve this?
<br>
<p>Here's my configure command and the relevant output from the &quot;make&quot; inside tools/orterun.  Notice that I am passing -i-static in LDFLAGS, and it does indeed appear to have made it into the link line for orterun.  It just didn't have the desired effect.  A subsequent 'ldd' shows that there is still a dependency on the libimf.so.
<br>
<p>Thanks
<br>
<p>./configure
<br>
--prefix=/release/cfd/openmpi-intel
<br>
--enable-mpirun-prefix-by-default
<br>
--enable-contrib-no-build=vt
<br>
--disable-per-user-config-files
<br>
--enable-mca-no-build=maffinity
<br>
--enable-static
<br>
--without-openib
<br>
--without-tm
<br>
--with-mpi-f90-size=small
<br>
CXX=/appserv/intel/cce/10.1.021/bin/icpc
<br>
CC=/appserv/intel/cce/10.1.021/bin/icc
<br>
'CFLAGS=  -O2'
<br>
'CXXFLAGS=  -O2'
<br>
F77=/appserv/intel/fce/10.1.021/bin/ifort
<br>
'FFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
<br>
FC=/appserv/intel/fce/10.1.021/bin/ifort
<br>
'FCFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
<br>
'LDFLAGS= -i-static'
<br>
<p><p><p>make[2]: Entering directory `/home/bloscel/builds/openmpi/orte/tools/orterun'
<br>
depbase=`echo main.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
/appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -MT main.o -MD -MP -MF $depbase.Tpo -c -o main.o main.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
depbase=`echo orterun.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
/appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -MT orterun.o -MD -MP -MF $depbase.Tpo -c -o orterun.o orterun.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
depbase=`echo debuggers.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
/appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -MT debuggers.o -MD -MP -MF $depbase.Tpo -c -o debuggers.o debuggers.c &amp;&amp;\
<br>
mv -f $depbase.Tpo $depbase.Po
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link /appserv/intel/cce/10.1.021/bin/icc  -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g  -export-dynamic  -i-static  -o orterun main.o orterun.o debuggers.o ../../../orte/libopen-rte.la -lnsl -lutil
<br>
libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -i-static -o .libs/orterun main.o orterun.o debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
<br>
/appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning: feupdateenv is not implemented and will always fail
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11133/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<li><strong>Previous message:</strong> <a href="11132.php">amjad ali: "[OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
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
