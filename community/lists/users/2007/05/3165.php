<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 09:41:08 2007" -->
<!-- isoreceived="20070501134108" -->
<!-- sent="Tue, 1 May 2007 06:41:04 -0700 (PDT)" -->
<!-- isosent="20070501134104" -->
<!-- name="Rob" -->
<!-- email="spamrefuse_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.2.1: &amp;quot;configure --enable-static&amp;quot;: then make ends with error" -->
<!-- id="603611.23147.qm_at_web33312.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Rob (<em>spamrefuse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 09:41:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Reply:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Reply:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Maybe reply:</strong> <a href="3170.php">Rob: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I use gcc-4.1.3 (gcc/g++/gfortran) with openmpi-1.2.1 on an Alpha system
<br>
with Linux CentOS 4.4.
<br>
<p>The &quot;--enable-static&quot; configure option causes the make to end with error.
<br>
Without this configure option, there is no problem with the make.
<br>
<p>Note that I need the &quot;-mfp-trap-mode=su&quot; compiler flag with this alpha
<br>
system, to avoid a runtime sigsegv abort. This is what I have done:
<br>
<p>$ ./configure CPP=/opt/gcc/bin/cpp \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=/opt/gcc/bin/gcc  CFLAGS=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CXX=/opt/gcc/bin/g++ CXXFLAGS=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=/opt/gcc/bin/gfortran FFLAGS=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=/opt/gcc/bin/gfortran FCFLAGS=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fflags=-mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=mfp-trap-mode=su \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static --prefix=/opt/openmpi
<br>
[ ...snip... ]
<br>
$ make all
<br>
[ ...snip... ]
<br>
if /opt/gcc/bin/g++ -DHAVE_CONFIG_H -I. -I. -I../../../opal/include -I../../../orte/include -I../../../ompi/include -I../../../ompi/include  -DOMPI_CONFIGURE_USER=&quot;\&quot;rob\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;alpha\&quot;&quot; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Tue May  1 21:48:43 KST 2007\&quot;&quot; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -fno-strict-aliasing -pthread\&quot;&quot; -DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread\&quot;&quot; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;-mfp-trap-mode=su\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;-mfp-trap-mode=su\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  -lm \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/gcc\&quot;&quot; -DOMPI_CXX_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/g++\&quot;&quot; -DOMPI_F77_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/gfortran\&quot;&quot;
<br>
&nbsp;-DOMPI_F90_ABSOLUTE=&quot;\&quot;/opt/gcc/bin/gfortran\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..    -O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread -MT version.o -MD -MP -MF &quot;$depbase.Tpo&quot; -c -o version.o version.cc; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Po&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 1; fi
<br>
/bin/sh ../../../libtool --tag=CXX --mode=link /opt/gcc/bin/g++  -O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread  -export-dynamic   -o ompi_info  components.o ompi_info.o output.o param.o version.o ../../../ompi/libmpi.la -lnsl -lutil  -lm 
<br>
libtool: link: /opt/gcc/bin/g++ -O3 -DNDEBUG -mfp-trap-mode=su -finline-functions -pthread -o .libs/ompi_info components.o ompi_info.o output.o param.o version.o -Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -libverbs -lrt /home/lahaye/Software/openmpi-1.2.1/orte/.libs/libopen-rte.so -pthread /home/lahaye/Software/openmpi-1.2.1/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -Wl,-rpath -Wl,/opt/openmpi/lib
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `opal_sys_timer_get_cycles'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [ompi_info] Error 1
<br>
make[2]: Leaving directory `/home/lahaye/Software/openmpi-1.2.1/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/lahaye/Software/openmpi-1.2.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p>Any idea why this goes wrong?
<br>
<p>Once again, when I remove the &quot;--enable-static&quot; in the configure line, then
<br>
all goes well....
<br>
But I need the static libraries for compiling Blacs/ScaLapack.
<br>
<p>Thanks,
<br>
Rob.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Ahhh...imagining that irresistible &quot;new car&quot; smell?
<br>
&nbsp;Check outnew cars at Yahoo! Autos.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3165/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3164.php">Brian Barrett: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Reply:</strong> <a href="3166.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Reply:</strong> <a href="3169.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
<li><strong>Maybe reply:</strong> <a href="3170.php">Rob: "Re: [OMPI users] OpenMPI 1.2.1: &quot;configure --enable-static&quot;: then make ends with error"</a>
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
