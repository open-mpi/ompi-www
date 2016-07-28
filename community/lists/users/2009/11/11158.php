<?
$subject_val = "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 09:49:39 2009" -->
<!-- isoreceived="20091111144939" -->
<!-- sent="Wed, 11 Nov 2009 07:49:25 -0700" -->
<!-- isosent="20091111144925" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB49A25921_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 09:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply, Jeff,
<br>
<p>I think -i-static is an Intel 9 option, but unfortunately it didn't make a difference switching to -static-intel:
<br>
<p><p>libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -g -static-intel -o .libs/orterun main.o orterun.o debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
<br>
/appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning: feupdateenv is not implemented and will always fail
<br>
<p><p>The option is passed, but ldd gives:
<br>
<p>ldd ./orterun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; &lt;some path&gt;/lib/libopen-rte.so.0 (0x00002b1cd4a01000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; &lt;some path&gt;/lib/libopen-pal.so.0 (0x00002b1cd4ba9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b1cd4d5f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002b1cd4e63000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002b1cd4f7a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002b1cd507d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002b1cd51d2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002b1cd52e0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002b1cd53f9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002b1cd48e5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; not found
<br>
<p><p><p>The Intel libs are listed twice.  I presume that means something.
<br>
<p>Is it possible that the -static-intel option needs to be somewhere different within the link line?  Is it possible that open-rte.so or open-pal.so require libimf.so instead of libimf.a?
<br>
<p>Thanks
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 10, 2009 4:27 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How do you get static linkage for Intel compiler
</span><br>
<span class="quotelev1">&gt; libsfor the orterun executable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm away from icc help resources, but try the -static-intel compiler
</span><br>
<span class="quotelev1">&gt; flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 2:51 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to build OpenMPI with Intel compilers, both static and
</span><br>
<span class="quotelev2">&gt; &gt; dynamic libs, then move it to a system that does not have Intel
</span><br>
<span class="quotelev2">&gt; &gt; compilers.  I don't care about system libraries or OpenMPI loadable
</span><br>
<span class="quotelev2">&gt; &gt; modules being dynamic, that's all fine.  But I need the compiler
</span><br>
<span class="quotelev2">&gt; &gt; libs to be statically linked into any executable.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't seem to be smart enough to figure out how to get the Intel
</span><br>
<span class="quotelev2">&gt; &gt; libs statically linked into the &quot;orterun&quot; command.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can someone help suggest the right way to achieve this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's my configure command and the relevant output from the &quot;make&quot;
</span><br>
<span class="quotelev2">&gt; &gt; inside tools/orterun.  Notice that I am passing -i-static in
</span><br>
<span class="quotelev2">&gt; &gt; LDFLAGS, and it does indeed appear to have made it into the link
</span><br>
<span class="quotelev2">&gt; &gt; line for orterun.  It just didn't have the desired effect.  A
</span><br>
<span class="quotelev2">&gt; &gt; subsequent 'ldd' shows that there is still a dependency on the
</span><br>
<span class="quotelev2">&gt; &gt; libimf.so.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure
</span><br>
<span class="quotelev2">&gt; &gt; --prefix=/release/cfd/openmpi-intel
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt; --enable-contrib-no-build=vt
</span><br>
<span class="quotelev2">&gt; &gt; --disable-per-user-config-files
</span><br>
<span class="quotelev2">&gt; &gt; --enable-mca-no-build=maffinity
</span><br>
<span class="quotelev2">&gt; &gt; --enable-static
</span><br>
<span class="quotelev2">&gt; &gt; --without-openib
</span><br>
<span class="quotelev2">&gt; &gt; --without-tm
</span><br>
<span class="quotelev2">&gt; &gt; --with-mpi-f90-size=small
</span><br>
<span class="quotelev2">&gt; &gt; CXX=/appserv/intel/cce/10.1.021/bin/icpc
</span><br>
<span class="quotelev2">&gt; &gt; CC=/appserv/intel/cce/10.1.021/bin/icc
</span><br>
<span class="quotelev2">&gt; &gt; 'CFLAGS=  -O2'
</span><br>
<span class="quotelev2">&gt; &gt; 'CXXFLAGS=  -O2'
</span><br>
<span class="quotelev2">&gt; &gt; F77=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt; 'FFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev2">&gt; &gt; FC=/appserv/intel/fce/10.1.021/bin/ifort
</span><br>
<span class="quotelev2">&gt; &gt; 'FCFLAGS=-D_GNU_SOURCE -fpe0 -no-ftz -traceback  -O2'
</span><br>
<span class="quotelev2">&gt; &gt; 'LDFLAGS= -i-static'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Entering directory `/home/bloscel/builds/openmpi/orte/tools/
</span><br>
<span class="quotelev2">&gt; &gt; orterun'
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo main.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt; &gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../
</span><br>
<span class="quotelev2">&gt; &gt; opal/include -I../../../orte/include -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -
</span><br>
<span class="quotelev2">&gt; &gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -
</span><br>
<span class="quotelev2">&gt; &gt; fvisibility=hidden -g -MT main.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt; &gt; main.o main.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt; &gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo orterun.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt; &gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../
</span><br>
<span class="quotelev2">&gt; &gt; opal/include -I../../../orte/include -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -
</span><br>
<span class="quotelev2">&gt; &gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -
</span><br>
<span class="quotelev2">&gt; &gt; fvisibility=hidden -g -MT orterun.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt; &gt; orterun.o orterun.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt; &gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt; &gt; depbase=`echo debuggers.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev2">&gt; &gt; /appserv/intel/cce/10.1.021/bin/icc -DHAVE_CONFIG_H -I. -I../../../
</span><br>
<span class="quotelev2">&gt; &gt; opal/include -I../../../orte/include -I../../../ompi/include -
</span><br>
<span class="quotelev2">&gt; &gt; I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -
</span><br>
<span class="quotelev2">&gt; &gt; DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -
</span><br>
<span class="quotelev2">&gt; &gt; fvisibility=hidden -g -MT debuggers.o -MD -MP -MF $depbase.Tpo -c -o
</span><br>
<span class="quotelev2">&gt; &gt; debuggers.o debuggers.c &amp;&amp;\
</span><br>
<span class="quotelev2">&gt; &gt; mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh ../../../libtool --tag=CC   --mode=link /appserv/intel/cce/
</span><br>
<span class="quotelev2">&gt; &gt; 10.1.021/bin/icc  -DNDEBUG -finline-functions -fno-strict-aliasing -
</span><br>
<span class="quotelev2">&gt; &gt; restrict -pthread -fvisibility=hidden -g  -export-dynamic  -i-
</span><br>
<span class="quotelev2">&gt; &gt; static  -o orterun main.o orterun.o debuggers.o ../../../orte/
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt; &gt; libtool: link: /appserv/intel/cce/10.1.021/bin/icc -DNDEBUG -finline-
</span><br>
<span class="quotelev2">&gt; &gt; functions -fno-strict-aliasing -restrict -pthread -
</span><br>
<span class="quotelev2">&gt; &gt; fvisibility=hidden -g -i-static -o .libs/orterun main.o orterun.o
</span><br>
<span class="quotelev2">&gt; &gt; debuggers.o -Wl,--export-dynamic  ../../../orte/.libs/libopen-
</span><br>
<span class="quotelev2">&gt; &gt; rte.so /home/bloscel/builds/openmpi/opal/.libs/libopen-pal.so -ldl -
</span><br>
<span class="quotelev2">&gt; &gt; lnsl -lutil -pthread -Wl,-rpath -Wl,/release/cfd/openmpi-intel/lib
</span><br>
<span class="quotelev2">&gt; &gt; /appserv/intel/cce/10.1.021/lib/libimf.so: warning: warning:
</span><br>
<span class="quotelev2">&gt; &gt; feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>In reply to:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Reply:</strong> <a href="11166.php">Martin Siegert: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
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
