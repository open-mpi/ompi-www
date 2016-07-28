<?
$subject_val = "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:30:51 2011" -->
<!-- isoreceived="20110419193051" -->
<!-- sent="Tue, 19 Apr 2011 15:30:41 -0400" -->
<!-- isosent="20110419193041" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux" -->
<!-- id="4DADE2E1.6020904_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4DADCFE0.4070806_at_UManitoba.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-19 15:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16287.php">David Zhang: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16285.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>In reply to:</strong> <a href="16284.php">Ormiston, Scott J.: "[OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Scott
<br>
<p>Is it possible that the Intel compiler environment is not set?
<br>
<p>Just in case, did you source the right Intel scripts to setup
<br>
the icc, icpc, and ifort environment?
<br>
Something like this (for a 64-bit machine):
<br>
<p>source /opt/intel/composerxe-2011.1.107/bin/compilervars.csh intel64
<br>
<p>and perhaps a similar command for icc/icpc.
<br>
Check the compiler documentation for details.
<br>
<p>I only have ifort 12.0 in one of our machines here, no icc or icpc.
<br>
However, the OS is CentOS 5.4 64-bit,
<br>
and I compiled OpenMPI 1.4.3 there with gcc, g++ and ifort
<br>
without any problem.
<br>
I would guess you can do it with icc, icpc and ifort too.
<br>
<p>Another possibility is some name mangling issue.
<br>
Maybe the leading double underscore on the C symbols?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>Ormiston, Scott J. wrote:
<br>
<span class="quotelev1">&gt; I am trying to build OpenMPI with the Intel v12.0 compiler on Linux 
</span><br>
<span class="quotelev1">&gt; (Centos 5).
</span><br>
<span class="quotelev1">&gt;  I configured using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/mecfd/common/sw/openmpi-intel/ \
</span><br>
<span class="quotelev1">&gt;  CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but when it was compiling it died with the following errors at the end:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  Making all in tools/wrappers
</span><br>
<span class="quotelev1">&gt;  make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/mecfd/common/sw/openmpi-1.4.3/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;  depbase=`echo opal_wrapper.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt;          icc &quot;-DEXEEXT=\&quot;\&quot;&quot; -I. -I../../../opal/include 
</span><br>
<span class="quotelev1">&gt; -I../../../orte/include -I../../../ompi/include 
</span><br>
<span class="quotelev1">&gt; -I../../../opal/mca/paffinity/linux/plpa/src/libplpa   -I../../..    -O3 
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread 
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden -MT opal_wrapper.o -MD -MP -MF $depbase.Tpo -c -o 
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o opal_wrapper.c &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;          mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../../../libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG 
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread 
</span><br>
<span class="quotelev1">&gt; -fvisibility=hidden  -export-dynamic   -o opal_wrapper opal_wrapper.o 
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt;  libtool: link: icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing 
</span><br>
<span class="quotelev1">&gt; -restrict -pthread -fvisibility=hidden -o .libs/opal_wrapper 
</span><br>
<span class="quotelev1">&gt; opal_wrapper.o -Wl,--export-dynamic ../../../opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl -lnsl -lutil -pthread -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/mecfd/common/sw/openmpi-intel/lib
</span><br>
<span class="quotelev1">&gt;  /usr/local/Intel/composerxe-2011.2.137/compiler/lib/intel64/libimf.so: 
</span><br>
<span class="quotelev1">&gt; warning: warning: feupdateenv is not implemented and will always fail
</span><br>
<span class="quotelev1">&gt;  ../../../opal/.libs/libopen-pal.so: undefined reference to `__c_mcopy1'
</span><br>
<span class="quotelev1">&gt;  ../../../opal/.libs/libopen-pal.so: undefined reference to `__c_bzero'
</span><br>
<span class="quotelev1">&gt;  make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt;  make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/mecfd/common/sw/openmpi-1.4.3/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;  make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;  make[1]: Leaving directory `/home/mecfd/common/sw/openmpi-1.4.3/opal'
</span><br>
<span class="quotelev1">&gt;  make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know how to avoid this error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott Ormiston
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
<li><strong>Next message:</strong> <a href="16287.php">David Zhang: "Re: [OMPI users] Problem compiling OpenMPI on Ubuntu 11.04"</a>
<li><strong>Previous message:</strong> <a href="16285.php">christophe petit: "[OMPI users] [SPAM:### 84%]"</a>
<li><strong>In reply to:</strong> <a href="16284.php">Ormiston, Scott J.: "[OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Reply:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
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
