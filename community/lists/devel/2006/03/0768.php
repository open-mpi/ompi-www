<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 12:05:32 2006" -->
<!-- isoreceived="20060320170532" -->
<!-- sent="Mon, 20 Mar 2006 12:05:29 -0500" -->
<!-- isosent="20060320170529" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] PG 5.2 build problem with v1.0.2a10" -->
<!-- id="1C27C3E6-1A30-4EF3-9766-5A22207FF2AC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 12:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Reply:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Maybe reply:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently ran into a build problem using the Portland 5.2 compilers  
<br>
on Odin (x86_64). It looks like the soft link is broken in the build  
<br>
system.
<br>
It is linked to libopal.so.0.0.0 instead of libopal.so.0
<br>
<p>I configured the 1.0.2a10 tarball with:
<br>
./configure --prefix=/san/homedirs/jjhursey/local/odin//ompi/release  
<br>
CXX=pgCC CC=pgcc F77=pgf77 F90=pgf90
<br>
<p>&lt;snip&gt;
<br>
<p>pgcc -DHAVE_CONFIG_H -I. -I. -I../../../../include -I../../../../
<br>
include -I../../../../include -I../../../.. -I../../../.. -
<br>
I../../../../include -I../../../../opal -I../../../../orte -
<br>
I../../../../ompi -D_REENTRANT -O -DNDEBUG -c
<br>
maffinity_first_use_module.c  -fpic -DPIC -o .libs/
<br>
maffinity_first_use_module.o
<br>
/bin/sh ../../../../libtool --tag=CC --mode=link pgcc  -O -DNDEBUG
<br>
-export-dynamic   -o mca_maffinity_first_use.la -rpath /san/homedirs/
<br>
jjhursey/local/odin//ompi/release/lib/openmpi -module -avoid-version
<br>
maffinity_first_use_component.lo maffinity_first_use_module.lo /u/
<br>
jjhursey/svn/testing/openmpi-1.0.2a10r9336/opal/libopal.la -lm  -
<br>
lutil -lnsl -lpthread
<br>
pgcc -shared  -fpic -DPIC  .libs/
<br>
maffinity_first_use_component.o .libs/maffinity_first_use_module.o  -
<br>
Wl,--rpath -Wl,/u/jjhursey/svn/testing/openmpi-1.0.2a10r9336/
<br>
opal/.libs -Wl,--rpath -Wl,/san/homedirs/jjhursey/local/odin//ompi/
<br>
release/lib /u/jjhursey/svn/testing/openmpi-1.0.2a10r9336/opal/.libs/
<br>
libopal.so -lm -lutil -lnsl -lpthread -lc  -Wl,-soname -
<br>
Wl,mca_maffinity_first_use.so -o .libs/mca_maffinity_first_use.so
<br>
/usr/bin/ld: /u/jjhursey/svn/testing/openmpi-1.0.2a10r9336/opal/.libs/
<br>
libopal.so: No such file: No such file or directory
<br>
make[4]: *** [mca_maffinity_first_use.la] Error 2
<br>
make[4]: Leaving directory `/san/homedirs/jjhursey/svn/testing/
<br>
openmpi-1.0.2a10r9336/opal/mca/maffinity/first_use'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory `/san/homedirs/jjhursey/svn/testing/
<br>
openmpi-1.0.2a10r9336/opal/dynamic-mca/maffinity'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/san/homedirs/jjhursey/svn/testing/
<br>
openmpi-1.0.2a10r9336/opal/dynamic-mca'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/san/homedirs/jjhursey/svn/testing/
<br>
openmpi-1.0.2a10r9336/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>[openmpi-1.0.2a10r9336]$ find . -name &quot;libopal.so&quot;
<br>
./opal/.libs/libopal.so
<br>
<p>[openmpi-1.0.2a10r9336]$ ls /u/jjhursey/svn/testing/ 
<br>
openmpi-1.0.2a10r9336/opal/.libs/libopal.so
<br>
/u/jjhursey/svn/testing/openmpi-1.0.2a10r9336/opal/.libs/libopal.so
<br>
<p>[openmpi-1.0.2a10r9336]$ ls -la /u/jjhursey/svn/testing/ 
<br>
openmpi-1.0.2a10r9336/opal/.libs/libopal.so
<br>
lrwxrwxrwx  1 jjhursey students 16 Mar 20 10:20 /u/jjhursey/svn/ 
<br>
testing/openmpi-1.0.2a10r9336/opal/.libs/libopal.so -&gt; libopal.so.0.0.0
<br>
<p>[openmpi-1.0.2a10r9336]$ ls -la /u/jjhursey/svn/testing/ 
<br>
openmpi-1.0.2a10r9336/opal/.libs/libopal.so
<br>
libopal.so    libopal.so.0
<br>
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Greg Watson: "Re: [OMPI devel] bproc configure help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Reply:</strong> <a href="0769.php">Ralf Wildenhues: "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
<li><strong>Maybe reply:</strong> <a href="0775.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] PG 5.2 build problem with v1.0.2a10"</a>
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
