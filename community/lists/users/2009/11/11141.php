<?
$subject_val = "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 17:26:50 2009" -->
<!-- isoreceived="20091110222650" -->
<!-- sent="Tue, 10 Nov 2009 17:26:41 -0500" -->
<!-- isosent="20091110222641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?" -->
<!-- id="A89A75CD-A7FA-447F-9616-4B6622909F7D_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB499D6AD2_at_HDXMSPB.us.lmco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 17:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm away from icc help resources, but try the -static-intel compiler  
<br>
flag.
<br>
<p><p>On Nov 10, 2009, at 2:51 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m trying to build OpenMPI with Intel compilers, both static and  
</span><br>
<span class="quotelev1">&gt; dynamic libs, then move it to a system that does not have Intel  
</span><br>
<span class="quotelev1">&gt; compilers.  I don&#146;t care about system libraries or OpenMPI loadable  
</span><br>
<span class="quotelev1">&gt; modules being dynamic, that&#146;s all fine.  But I need the compiler  
</span><br>
<span class="quotelev1">&gt; libs to be statically linked into any executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don&#146;t seem to be smart enough to figure out how to get the Intel  
</span><br>
<span class="quotelev1">&gt; libs statically linked into the &#147;orterun&#148; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone help suggest the right way to achieve this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s my configure command and the relevant output from the &#147;make&#148;  
</span><br>
<span class="quotelev1">&gt; inside tools/orterun.  Notice that I am passing &#150;i-static in  
</span><br>
<span class="quotelev1">&gt; LDFLAGS, and it does indeed appear to have made it into the link  
</span><br>
<span class="quotelev1">&gt; line for orterun.  It just didn&#146;t have the desired effect.  A  
</span><br>
<span class="quotelev1">&gt; subsequent &#145;ldd&#146; shows that there is still a dependency on the  
</span><br>
<span class="quotelev1">&gt; libimf.so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt; --prefix=/release/cfd/openmpi-intel
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; --disable-per-user-config-files
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=maffinity
</span><br>
<span class="quotelev1">&gt; --enable-static
</span><br>
<span class="quotelev1">&gt; --without-openib
</span><br>
<span class="quotelev1">&gt; --without-tm
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=small
</span><br>
<span class="quotelev1">&gt; CXX=/appserv/intel/cce/10.1.021/bin/icpc
</span><br>
<span class="quotelev1">&gt; CC=/appserv/intel/cce/10.1.021/bin/icc
</span><br>
<span class="quotelev1">&gt; 'CFLAGS=  -O2'
</span><br>
<span class="quotelev1">&gt; 'CXXFLAGS=  -O2'
</span><br>
<span class="quotelev1">&gt; F77=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev1">&gt; 'FFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev1">&gt; FC=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev1">&gt; 'FCFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev1">&gt; 'LDFLAGS= -i-static'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/bloscel/builds/openmpi/orte/tools/ 
</span><br>
<span class="quotelev1">&gt; orterun'
</span><br>
<span class="quotelev1">&gt; depbase=`echo main.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -g -MT main.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; main.o main.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo orterun.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -g -MT orterun.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; orterun.o orterun.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; depbase=`echo debuggers.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../ 
</span><br>
<span class="quotelev1">&gt; opal/include -I../../../orte/include -I../../../ompi/include - 
</span><br>
<span class="quotelev1">&gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -g -MT debuggers.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; debuggers.o debuggers.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /appserv/intel/cce/ 
</span><br>
<span class="quotelev1">&gt; 10.1.021/bin/icc  -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; restrict -pthread -fvisibility=hidden -g  -export-dynamic  -i- 
</span><br>
<span class="quotelev1">&gt; static  -o orterun main.o orterun.o debuggers.o ../../../orte/ 
</span><br>
<span class="quotelev1">&gt; libopen-rte.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -g -i-static -o .libs/orterun main.o orterun.o  
</span><br>
<span class="quotelev1">&gt; debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen- 
</span><br>
<span class="quotelev1">&gt; rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl - 
</span><br>
<span class="quotelev1">&gt; lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
</span><br>
<span class="quotelev1">&gt; /appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning:  
</span><br>
<span class="quotelev1">&gt; feupdateenv is not implemented and will always fail
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11133.php">Blosch, Edwin L: "[OMPI users] How do you get static linkage for Intel compiler libs for the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11142.php">Reuti: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
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
