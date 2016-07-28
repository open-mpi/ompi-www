<?
$subject_val = "[OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 14:09:41 2011" -->
<!-- isoreceived="20110419180941" -->
<!-- sent="Tue, 19 Apr 2011 13:09:36 -0500" -->
<!-- isosent="20110419180936" -->
<!-- name="Ormiston, Scott J." -->
<!-- email="SJ_Ormiston_at_[hidden]" -->
<!-- subject="[OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="4DADCFE0.4070806_at_UManitoba.ca" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux<br>
<strong>From:</strong> Ormiston, Scott J. (<em>SJ_Ormiston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 14:09:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16285.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>Previous message:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build OpenMPI with the Intel v12.0 compiler on Linux 
<br>
(Centos 5).
<br>
&nbsp;&nbsp;I configured using:
<br>
<p>./configure --prefix=/home/mecfd/common/sw/openmpi-intel/ \
<br>
&nbsp;&nbsp;CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>but when it was compiling it died with the following errors at the end:
<br>
<p>...
<br>
&nbsp;&nbsp;Making all in tools/wrappers
<br>
&nbsp;&nbsp;make[2]: Entering directory 
<br>
`/home/mecfd/common/sw/openmpi-1.4.3/opal/tools/wrappers'
<br>
&nbsp;&nbsp;depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include 
<br>
-I../../../orte/include -I../../../ompi/include 
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread 
<br>
-fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o 
<br>
opal_wrapper.o opal_wrapper.c &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Po
<br>
&nbsp;&nbsp;/bin/sh ../../../libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG 
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread 
<br>
-fvisibility=hidden  -export-dynamic   -o opal_wrapper opal_wrapper.o 
<br>
../../../opal/libopen-pal.la -lnsl -lutil
<br>
&nbsp;&nbsp;libtool: link: icc -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing -restrict -pthread -fvisibility=hidden -o 
<br>
.libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic 
<br>
../../../opal/.libs/libopen-pal.so -lpthread -ldl -lnsl -lutil -pthread 
<br>
-Wl,-rpath -Wl,/home/mecfd/common/sw/openmpi-intel/lib
<br>
&nbsp;&nbsp;/usr/local/Intel/composerxe-2011.2.137/compiler/lib/intel64/libimf.so: 
<br>
warning: warning: feupdateenv is not implemented and will always fail
<br>
&nbsp;&nbsp;../../../opal/.libs/libopen-pal.so: undefined reference to `__c_mcopy1'
<br>
&nbsp;&nbsp;../../../opal/.libs/libopen-pal.so: undefined reference to `__c_bzero'
<br>
&nbsp;&nbsp;make[2]: *** [opal_wrapper] Error 1
<br>
&nbsp;&nbsp;make[2]: Leaving directory 
<br>
`/home/mecfd/common/sw/openmpi-1.4.3/opal/tools/wrappers'
<br>
&nbsp;&nbsp;make[1]: *** [all-recursive] Error 1
<br>
&nbsp;&nbsp;make[1]: Leaving directory `/home/mecfd/common/sw/openmpi-1.4.3/opal'
<br>
&nbsp;&nbsp;make: *** [all-recursive] Error 1
<br>
<p>Does anyone know how to avoid this error?
<br>
<p>Scott Ormiston
<br>
<p><!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16285.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>Previous message:</strong> <a href="16283.php">Jeff Squyres: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16286.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
