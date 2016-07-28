<?
$subject_val = "[OMPI users] compiling from source from svn";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 10:17:46 2008" -->
<!-- isoreceived="20080516141746" -->
<!-- sent="Fri, 16 May 2008 14:17:37 +0000" -->
<!-- isosent="20080516141737" -->
<!-- name="Karsten Bolding" -->
<!-- email="karsten_at_[hidden]" -->
<!-- subject="[OMPI users] compiling from source from svn" -->
<!-- id="20080516141737.GA29230_at_dbmail.dk" -->
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
<strong>Subject:</strong> [OMPI users] compiling from source from svn<br>
<strong>From:</strong> Karsten Bolding (<em>karsten_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 10:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5679.php">Alex L.: "[OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>Due to a new feature - direct mapping between machinefile and rank - I
<br>
want to try out the svn version. However, I run into compilation
<br>
probloms. Here is what I do after I've updated svn.
<br>
<p>kb_at_gate:/data/kb/compile/openmpi-svn$ ./autogen.sh
<br>
kb_at_gate:/data/kb/compile/openmpi-svn$ mkdir build  
<br>
kb_at_gate:/data/kb/compile/openmpi-svn$ cd build
<br>
kb_at_gate:/data/kb/compile/openmpi-svn/build$ ../configure
<br>
--prefix=/opt/openmpi-svn/  F77=ifort F90=ifort
<br>
kb_at_gate:/data/kb/compile/openmpi-svn/build$ make
<br>
<p>lots of compilation is going on - and then
<br>
<p>make[2]: Entering directory
<br>
`/data/kb/compile/openmpi-svn/build/orte/tools/orted'
<br>
depbase=`echo orted.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../../../orte/tools/orted
<br>
-I../../../opal/include -I../../../orte/include -I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../../..
<br>
-I../../.. -I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include    -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread -fvisibility=hidden -MT orted.o -MD -MP
<br>
-MF $depbase.Tpo -c -o orted.o ../../../../orte/tools/orted/orted.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Po
<br>
/bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
<br>
-export-dynamic   -o orted orted.o ../../../orte/libopen-rte.la -lnsl
<br>
-lutil  -lm 
<br>
mkdir .libs
<br>
gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread
<br>
-fvisibility=hidden -o .libs/orted orted.o -Wl,--export-dynamic
<br>
../../../orte/.libs/libopen-rte.so -lnsl -lutil -lm  -Wl,--rpath
<br>
-Wl,/opt/openmpi-svn//lib
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`mca_base_select'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_output_vverbose'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_output_vstring'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_tmp_directory'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_show_help_vstring'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to `opal_filter'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_home_directory'
<br>
../../../orte/.libs/libopen-rte.so: undefined reference to
<br>
`opal_arch_compute_local_id'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [orted] Error 1
<br>
make[2]: Leaving directory
<br>
`/data/kb/compile/openmpi-svn/build/orte/tools/orted'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/data/kb/compile/openmpi-svn/build/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>The shared library libopen-rte.so does not seem to exist at all.
<br>
<p><p>Karsten
<br>
<p><pre>
-- 
----------------------------------------------------------------------
Karsten Bolding                    Bolding &amp; Burchard ApS
Strandgyden 25                     Phone: +45 64422058
DK-5466 Asperup                    Fax:   +45 64422068
Denmark                            Email: karsten_at_[hidden]
<a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
----------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5679.php">Alex L.: "[OMPI users] &quot;Sorry!  You were supposed to get help about...&quot;"</a>
<li><strong>Previous message:</strong> <a href="5677.php">Francesco Pietra: "[OMPI users] Replace 1.2.3 with 1.2.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
<li><strong>Reply:</strong> <a href="5684.php">Jeff Squyres: "Re: [OMPI users] compiling from source from svn"</a>
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
