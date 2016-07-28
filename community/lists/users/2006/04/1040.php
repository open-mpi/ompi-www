<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 16:35:09 2006" -->
<!-- isoreceived="20060412203509" -->
<!-- sent="Wed, 12 Apr 2006 16:34:06 -0400" -->
<!-- isosent="20060412203406" -->
<!-- name="Jeffrey B. Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="[OMPI users] Building 1.0.2 with Intel 9.0" -->
<!-- id="443D643E.5030602_at_charter.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeffrey B. Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 16:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">Jeffrey B. Layton: "[OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1042.php">Troy Telford: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1042.php">Troy Telford: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good afternoon,
<br>
<p>&nbsp;&nbsp;&nbsp;While we're on the subject of building OpenMPI-1.0.2 with
<br>
Intel, I'm having trouble building OpenMPI-1.0.2 with Intel 9.0.
<br>
I'm building OpenMPI-1.0.2 with the following options:
<br>
<p>./configure --prefix=/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T 
<br>
--disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static --enable-shared
<br>
<p>During the build I get the following errors:
<br>
<p>make[3]: Entering directory 
<br>
`/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/orte/tools/orted'
<br>
depbase=`echo orted.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`; \
<br>
if /opt/intel9.0/em64t/bin/icc -DHAVE_CONFIG_H -I. -I. 
<br>
-I../../../include -I../../../include  
<br>
-DOMPI_PREFIX=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T\&quot;&quot; 
<br>
-DOMPI_BINDIR=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/bin\&quot;&quot; 
<br>
-DOMPI_LIBDIR=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/lib\&quot;&quot; 
<br>
-DOMPI_INCDIR=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/include\&quot;&quot; 
<br>
-DOMPI_PKGLIBDIR=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/lib/openmpi\&quot;&quot; 
<br>
-DOMPI_SYSCONFDIR=&quot;\&quot;/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/etc\&quot;&quot; 
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;jlayton\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;lx64\&quot;&quot; 
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Wed Apr 12 13:38:42 MDT 2006\&quot;&quot; 
<br>
-DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG -fno-strict-aliasing -pthread\&quot;&quot; 
<br>
-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../include -I../../.. -I../../.. 
<br>
-I../../../include -I../../../opal -I../../../orte -I../../../ompi  \&quot;&quot; 
<br>
-DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; 
<br>
-DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../include -I../../.. -I../../.. 
<br>
-I../../../include -I../../../opal -I../../../orte -I../../../ompi  \&quot;&quot; 
<br>
-DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; 
<br>
-DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lm  
<br>
-lutil -lnsl \&quot;&quot; -I../../../include -I../../.. -I../../.. 
<br>
-I../../../include -I../../../opal -I../../../orte -I../../../ompi    
<br>
-O3 -DNDEBUG -fno-strict-aliasing -pthread -MT orted.o -MD -MP -MF 
<br>
&quot;$depbase.Tpo&quot; -c -o orted.o orted.c; \
<br>
then mv -f &quot;$depbase.Tpo&quot; &quot;$depbase.Po&quot;; else rm -f &quot;$depbase.Tpo&quot;; exit 
<br>
1; fi
<br>
/bin/sh ../../../libtool --tag=CC --mode=link 
<br>
/opt/intel9.0/em64t/bin/icc  -O3 -DNDEBUG -fno-strict-aliasing -pthread  
<br>
-export-dynamic   -o orted   orted.o ../../../orte/liborte.la 
<br>
../../../opal/libopal.la  -lm  -lutil -lnsl
<br>
mkdir .libs
<br>
/opt/intel9.0/em64t/bin/icc -O3 -DNDEBUG -fno-strict-aliasing -pthread 
<br>
-o .libs/orted orted.o -Wl,--export-dynamic  
<br>
../../../orte/.libs/liborte.so 
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so 
<br>
../../../opal/.libs/libopal.so -lnuma -ldl -lm -lutil -lnsl -Wl,--rpath 
<br>
-Wl,/home/jlayton/bin/OPENMPI-1.0.2-INTEL9.0-EM64T/lib
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so: 
<br>
undefined reference to `opal_show_help_finish_parsing'
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so: 
<br>
undefined reference to `opal_show_help_yyin'
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so: 
<br>
undefined reference to `opal_show_help_yylex'
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so: 
<br>
undefined reference to `opal_show_help_yytext'
<br>
/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/opal/.libs/libopal.so: 
<br>
undefined reference to `opal_show_help_init_buffer'
<br>
make[3]: *** [orted] Error 1
<br>
make[3]: Leaving directory 
<br>
`/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/orte/tools/orted'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/orte/tools'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/home/jlayton/src/openmpi-1.0.2-em64t-intel9.0/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Any ideas?
<br>
<p>Thanks!
<br>
<p>Jeff
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1041.php">Jeffrey B. Layton: "[OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>Previous message:</strong> <a href="1039.php">Aniruddha Shet: "Re: [OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1042.php">Troy Telford: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1042.php">Troy Telford: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
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
