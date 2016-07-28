<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 09:56:25 2007" -->
<!-- isoreceived="20070501135625" -->
<!-- sent="Tue, 1 May 2007 06:56:16 -0700" -->
<!-- isosent="20070501135616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.1: &amp;quot;configure --enable-static&amp;quot;: then make ends with error" -->
<!-- id="E165E092-9475-4CC7-8B6D-AD1282DD2DAA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="603611.23147.qm_at_web33312.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 09:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian --
<br>
<p>Is this due to missing assembly functionality for Alpha platforms in  
<br>
opal?  (I'm not sure why it would work with dynamic if that were the  
<br>
case, though...)
<br>
<p><p>On May 1, 2007, at 6:41 AM, Rob wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use gcc-4.1.3 (gcc/g++/gfortran) with openmpi-1.2.1 on an Alpha  
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; with Linux CentOS 4.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;--enable-static&quot; configure option causes the make to end with  
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt; Without this configure option, there is no problem with the make.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I need the &quot;-mfp-trap-mode=su&quot; compiler flag with this alpha
</span><br>
<span class="quotelev1">&gt; system, to avoid a runtime sigsegv abort. This is what I have done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ./configure CPP=/opt/gcc/bin/cpp \
</span><br>
<span class="quotelev1">&gt;             CC=/opt/gcc/bin/gcc  CFLAGS=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             CXX=/opt/gcc/bin/g++ CXXFLAGS=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             F77=/opt/gcc/bin/gfortran FFLAGS=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             FC=/opt/gcc/bin/gfortran FCFLAGS=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             --with-wrapper-cflags=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             --with-wrapper-cxxflags=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             --with-wrapper-fflags=-mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             --with-wrapper-fcflags=mfp-trap-mode=su \
</span><br>
<span class="quotelev1">&gt;             --enable-static --prefix=/opt/openmpi
</span><br>
<span class="quotelev1">&gt; [ ...snip... ]
</span><br>
<span class="quotelev1">&gt; $ make all
</span><br>
<span class="quotelev1">&gt; [ ...snip... ]
</span><br>
<span class="quotelev1">&gt; if /opt/gcc/bin/g++ -DHAVE_CONFIG_H -I. -I. -I../../../opal/include  
</span><br>
<span class="quotelev1">&gt; -I../../../orte/include -I../../../ompi/include -I../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include  -DOMPI_CONFIGURE_USER=&quot;\&quot;rob\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;alpha\&quot;&quot; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Tue May   
</span><br>
<span class="quotelev1">&gt; 1 21:48:43 KST 2007\&quot;&quot; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG -mfp-trap-mode=su -finline- 
</span><br>
<span class="quotelev1">&gt; functions -fno-strict-aliasing -pthread\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;- 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;- 
</span><br>
<span class="quotelev1">&gt; mfp-trap-mode=su\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;-mfp-trap-mode=su\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;- 
</span><br>
<span class="quotelev1">&gt; lnsl -lutil  -lm \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/gcc\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CXX_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/g++\&quot;&quot; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/ 
</span><br>
<span class="quotelev1">&gt; opt/gcc/bin/gfortran\&quot;&quot; -DOMPI_F90_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/gfortran 
</span><br>
<span class="quotelev1">&gt; \&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..    -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; mfp-trap-mode=su -finline-functions -pthread -MT version.o -MD -MP - 
</span><br>
<span class="quotelev1">&gt; MF &quot;$depbase.Tpo&quot; -c -o version.o version.cc; \
</span><br>
<span class="quotelev1">&gt; then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Po&quot;; else rm -f &quot;$depbase.Tpo&quot;;  
</span><br>
<span class="quotelev1">&gt; exit 1; fi
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CXX --mode=link /opt/gcc/bin/g++  - 
</span><br>
<span class="quotelev1">&gt; O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread  -export- 
</span><br>
<span class="quotelev1">&gt; dynamic   -o ompi_info  components.o ompi_info.o output.o param.o  
</span><br>
<span class="quotelev1">&gt; version.o ../../../ompi/libmpi.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/gcc/bin/g++ -O3 -DNDEBUG -mfp-trap-mode=su - 
</span><br>
<span class="quotelev1">&gt; finline-functions -pthread -o .libs/ompi_info components.o  
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o -Wl,--export- 
</span><br>
<span class="quotelev1">&gt; dynamic  ../../../ompi/.libs/libmpi.so -libverbs -lrt /home/lahaye/ 
</span><br>
<span class="quotelev1">&gt; Software/openmpi-1.2.1/orte/.libs/libopen-rte.so -pthread /home/ 
</span><br>
<span class="quotelev1">&gt; lahaye/Software/openmpi-1.2.1/opal/.libs/libopen-pal.so -ldl -lnsl - 
</span><br>
<span class="quotelev1">&gt; lutil -lm -Wl,-rpath -Wl,/opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to  
</span><br>
<span class="quotelev1">&gt; `opal_sys_timer_get_cycles'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [ompi_info] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/lahaye/Software/openmpi-1.2.1/ 
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/lahaye/Software/openmpi-1.2.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why this goes wrong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once again, when I remove the &quot;--enable-static&quot; in the configure  
</span><br>
<span class="quotelev1">&gt; line, then
</span><br>
<span class="quotelev1">&gt; all goes well....
</span><br>
<span class="quotelev1">&gt; But I need the static libraries for compiling Blacs/ScaLapack.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahhh...imagining that irresistible &quot;new car&quot; smell?
</span><br>
<span class="quotelev1">&gt; Check out new cars at Yahoo! Autos.
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
<li><strong>Next message:</strong> <a href="3167.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>In reply to:</strong> <a href="3165.php">Rob: "[OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
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
