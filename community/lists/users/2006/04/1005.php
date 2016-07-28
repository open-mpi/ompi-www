<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 14:17:33 2006" -->
<!-- isoreceived="20060410181733" -->
<!-- sent="Mon, 10 Apr 2006 11:17:26 -0700" -->
<!-- isosent="20060410181726" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF" -->
<!-- id="A9657269-EE04-4442-9AE2-3D37AA01440B_at_apple.com" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 14:17:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Reply:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running Mac OS X v 10.3.9 Panther and tried to get OpenMPI to  
<br>
compile with IBM XLC and XLF. The compilation failed, any ideas what  
<br>
might be going wrong? I used the following settings:
<br>
<p>export CC=/opt/ibmcmp/vacpp/6.0/bin/xlc
<br>
export CXX=/opt/ibmcmp/vacpp/6.0/bin/xlc++
<br>
export CFLAGS=&quot;-O3&quot;
<br>
export CXXFLAGS=&quot;-O3&quot;
<br>
export FFLAGS=&quot;-O3&quot;
<br>
./configure --with-gm=/opt/gm --prefix=/home/warner/mpi_src/ompi102
<br>
<p>ranlib .libs/libmpi_c_mpi.a
<br>
creating libmpi_c_mpi.la
<br>
(cd .libs &amp;&amp; rm -f libmpi_c_mpi.la &amp;&amp; ln -s ../libmpi_c_mpi.la  
<br>
libmpi_c_mpi.la)
<br>
Making all in cxx
<br>
source='mpicxx.cc' object='mpicxx.lo' libtool=yes \
<br>
DEPDIR=.deps depmode=none /bin/sh ../../.././config/depcomp \
<br>
/bin/sh ../../../libtool --tag=CXX --mode=compile /opt/ibmcmp/vacpp/ 
<br>
6.0/bin/xlc++ -DHAVE_CONFIG_H -I. -I. -I../../../include -I../../../ 
<br>
include   -I../../../include -I../../.. -I../../.. -I../../../include  
<br>
-I../../../opal -I../../../orte -I../../../ompi  -D_REENTRANT  - 
<br>
DNDEBUG -O3  -c -o mpicxx.lo mpicxx.cc
<br>
mkdir .libs
<br>
/opt/ibmcmp/vacpp/6.0/bin/xlc++ -DHAVE_CONFIG_H -I. -I. -I../../../ 
<br>
include -I../../../include -I../../../include -I../../.. -I../../.. - 
<br>
I../../../include -I../../../opal -I../../../orte -I../../../ompi - 
<br>
D_REENTRANT -DNDEBUG -O3 -c mpicxx.cc  -qnocommon -DPIC -o .libs/ 
<br>
mpicxx.o
<br>
&quot;../../../ompi/mpi/cxx/group_inln.h&quot;, line 100.66: 1540-0216 (S) An  
<br>
expression of type &quot;const int [][3]&quot; cannot be converted to type &quot;int  
<br>
(*)[3]&quot;.
<br>
&quot;../../../ompi/mpi/cxx/group_inln.h&quot;, line 108.66: 1540-0216 (S) An  
<br>
expression of type &quot;const int [][3]&quot; cannot be converted to type &quot;int  
<br>
(*)[3]&quot;.
<br>
make[3]: *** [mpicxx.lo] Error 1
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>-Thanks and have an OpenMPI day!
<br>
<p>Warner Yuen
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1005/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1006.php">Charles Williams: "Re: [OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<li><strong>Previous message:</strong> <a href="1004.php">Warner Yuen: "[OMPI users] Building OpenMPI on OS X Tiger with gcc-3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
<li><strong>Reply:</strong> <a href="1007.php">David Daniel: "Re: [OMPI users] Building OMPI-1.0.2 on OS X v10.3.9 with IBM XLC +XLF"</a>
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
