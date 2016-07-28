<?
$subject_val = "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 17:38:43 2009" -->
<!-- isoreceived="20091110223843" -->
<!-- sent="Tue, 10 Nov 2009 23:39:33 +0100" -->
<!-- isosent="20091110223933" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?" -->
<!-- id="6D3E1096-4A5C-4D20-98DC-A752C4CEA344_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="A89A75CD-A7FA-447F-9616-4B6622909F7D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 17:39:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 10.11.2009 um 23:26 schrieb Jeff Squyres:
<br>
<p><span class="quotelev1">&gt; I'm away from icc help resources, but try the -static-intel  
</span><br>
<span class="quotelev1">&gt; compiler flag.
</span><br>
<p>I also like the compiler specific libs to be linked in statically - I  
<br>
just rename the *.so to *.so.disabled. So the linker is forced to use  
<br>
the .a files of the Intel libs.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 2:51 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m trying to build OpenMPI with Intel compilers, both static and  
</span><br>
<span class="quotelev2">&gt;&gt; dynamic libs, then move it to a system that does not have Intel  
</span><br>
<span class="quotelev2">&gt;&gt; compilers.  I don&#146;t care about system libraries or OpenMPI  
</span><br>
<span class="quotelev2">&gt;&gt; loadable modules being dynamic, that&#146;s all fine.  But I need the  
</span><br>
<span class="quotelev2">&gt;&gt; compiler libs to be statically linked into any executable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don&#146;t seem to be smart enough to figure out how to get the Intel  
</span><br>
<span class="quotelev2">&gt;&gt; libs statically linked into the &#147;orterun&#148; command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone help suggest the right way to achieve this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here&#146;s my configure command and the relevant output from the  
</span><br>
<span class="quotelev2">&gt;&gt; &#147;make&#148; inside tools/orterun.  Notice that I am passing &#150;i-static  
</span><br>
<span class="quotelev2">&gt;&gt; in LDFLAGS, and it does indeed appear to have made it into the  
</span><br>
<span class="quotelev2">&gt;&gt; link line for orterun.  It just didn&#146;t have the desired effect.  A  
</span><br>
<span class="quotelev2">&gt;&gt; subsequent &#145;ldd&#146; shows that there is still a dependency on the  
</span><br>
<span class="quotelev2">&gt;&gt; libimf.so.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/release/cfd/openmpi-intel
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt; --enable-contrib-no-build=vt
</span><br>
<span class="quotelev2">&gt;&gt; --disable-per-user-config-files
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=maffinity
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; --without-openib
</span><br>
<span class="quotelev2">&gt;&gt; --without-tm
</span><br>
<span class="quotelev2">&gt;&gt; --with-mpi-f90-size=small
</span><br>
<span class="quotelev2">&gt;&gt; CXX=/appserv/intel/cce/10.1.021/bin/icpc
</span><br>
<span class="quotelev2">&gt;&gt; CC=/appserv/intel/cce/10.1.021/bin/icc
</span><br>
<span class="quotelev2">&gt;&gt; 'CFLAGS=  -O2'
</span><br>
<span class="quotelev2">&gt;&gt; 'CXXFLAGS=  -O2'
</span><br>
<span class="quotelev2">&gt;&gt; F77=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; 'FFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev2">&gt;&gt; FC=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt; 'FCFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev2">&gt;&gt; 'LDFLAGS= -i-static'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/home/bloscel/builds/openmpi/orte/ 
</span><br>
<span class="quotelev2">&gt;&gt; tools/orterun'
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo main.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; restrict -pthread -fvisibility=hidden -g -MT main.o -MD -MP -MF  
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o main.o main.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo orterun.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; restrict -pthread -fvisibility=hidden -g -MT orterun.o -MD -MP -MF  
</span><br>
<span class="quotelev2">&gt;&gt; $depbase.Tpo -c -o orterun.o orterun.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; depbase=`echo debuggers.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt;&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev2">&gt;&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   - 
</span><br>
<span class="quotelev2">&gt;&gt; I../../..    -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev2">&gt;&gt; restrict -pthread -fvisibility=hidden -g -MT debuggers.o -MD -MP - 
</span><br>
<span class="quotelev2">&gt;&gt; MF $depbase.Tpo -c -o debuggers.o debuggers.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt;&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /appserv/intel/cce/ 
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.021/bin/icc  -DNDEBUG -finline-functions -fno-strict-aliasing  
</span><br>
<span class="quotelev2">&gt;&gt; -restrict -pthread -fvisibility=hidden -g  -export-dynamic  -i- 
</span><br>
<span class="quotelev2">&gt;&gt; static  -o orterun main.o orterun.o debuggers.o ../../../orte/ 
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG - 
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev2">&gt;&gt; fvisibility=hidden -g -i-static -o .libs/orterun main.o orterun.o  
</span><br>
<span class="quotelev2">&gt;&gt; debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen- 
</span><br>
<span class="quotelev2">&gt;&gt; rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl  
</span><br>
<span class="quotelev2">&gt;&gt; -lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
</span><br>
<span class="quotelev2">&gt;&gt; /appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning:  
</span><br>
<span class="quotelev2">&gt;&gt; feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="11143.php">Eloi Gaudry: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>Previous message:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
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
