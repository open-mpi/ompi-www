<?
$subject_val = "[OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  7 14:08:41 2011" -->
<!-- isoreceived="20111007180841" -->
<!-- sent="Fri, 7 Oct 2011 11:08:36 -0700" -->
<!-- isosent="20111007180836" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="[OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)" -->
<!-- id="DD4BA393-B195-4B44-A795-99E7086F49E7_at_usgs.gov" -->
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
<strong>Subject:</strong> [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-07 14:08:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into a problem this past week trying to upgrade our OpenMPI  
<br>
1.4.3 for the latest Intel 2011 compiler, 2011.6.233.
<br>
<p>make check fails with Segmentation Fault errors:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.4.3]# tail -20 ../openmpi-1.4.3-check-intel. 
</span><br>
<span class="quotelev1">&gt; 6.233.log
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link icc  -DNDEBUG -g -O3 - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev1">&gt; fvisibility=hidden -shared-intel -export-dynamic -shared-intel  -o  
</span><br>
<span class="quotelev1">&gt; ddt_pack ddt_pack.o ../../ompi/libmpi.la -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: icc -DNDEBUG -g -O3 -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -pthread -fvisibility=hidden -shared-intel - 
</span><br>
<span class="quotelev1">&gt; shared-intel -o .libs/ddt_pack ddt_pack.o -Wl,--export- 
</span><br>
<span class="quotelev1">&gt; dynamic  ../../ompi/.libs/libmpi.so /usr/local/src/openmpi-1.4.3/ 
</span><br>
<span class="quotelev1">&gt; orte/.libs/libopen-rte.so /usr/local/src/openmpi-1.4.3/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.so -ldl -lnsl -lutil -pthread -Wl,-rpath -Wl,/usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/ 
</span><br>
<span class="quotelev1">&gt; test/datatype'
</span><br>
<span class="quotelev1">&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 4:  6322 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: checksum
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 4:  6355 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: position
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/ 
</span><br>
<span class="quotelev1">&gt; test/datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/ 
</span><br>
<span class="quotelev1">&gt; test/datatype'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/ 
</span><br>
<span class="quotelev1">&gt; test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<p><p>Before trying to track down the problem, I thought I'd describe what I  
<br>
see here in case someone recognizes what might be happening.
<br>
<p>We have been using OpenMPI 1.4.3 compiled with the Intel 2011.3.174  
<br>
compiler.  I've updated the Intel 2011 compilers as they have come out  
<br>
with new versions: 2011.4.191, 2011.5.220, and now 2011.6.233.   
<br>
However, I've not recompiled OpenMPI 1.4.3 until now.
<br>
<p>Since the original compilation of OpenMPI 1.4.3 with the Intel  
<br>
2011.3.174 compilers, I have installed libnuma and libnuma-devel RPMs  
<br>
on our cluster front end.  I noticed that changed the OpenMPI 1.4.3 ./ 
<br>
configure output.  To test that this was not the cause of the problem,  
<br>
I recompiled OpenMPI 1.4.3 using both the CentOS/Rocks GNU compilers  
<br>
and the Intel 2011.3.174 compilers.  They both passed all the make  
<br>
check tests.
<br>
<p>To find out when this problem first occurs, I systematically  
<br>
configured, compiled, and checked OpenMPI 1.4.3 with all four versions  
<br>
of the Intel 2011 compilers we have.  We use the modules package to  
<br>
load the compiler environment:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.4.3]# env | grep /opt/intel
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/intel/composer_xe_2011_sp1.6.233/compiler/lib/ 
</span><br>
<span class="quotelev1">&gt; intel64:/opt/intel/composer_xe_2011_sp1.6.233/mkl/lib/intel64
</span><br>
<span class="quotelev1">&gt; PATH=/opt/intel/composer_xe_2011_sp1.6.233/bin/intel64:/usr/kerberos/ 
</span><br>
<span class="quotelev1">&gt; sbin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/sbin:/usr/ 
</span><br>
<span class="quotelev1">&gt; local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/eclipse:/opt/ganglia/ 
</span><br>
<span class="quotelev1">&gt; bin:/opt/ganglia/sbin:/opt/maui/bin:/opt/torque/bin:/opt/torque/ 
</span><br>
<span class="quotelev1">&gt; sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<p><p>Here's the steps I use to make and test OpenMPI 1.4.3 (I use a patched  
<br>
version to accommodate the six compilers we have; I've submitted those  
<br>
patches here in the past):
<br>
<p><span class="quotelev1">&gt; # cd /usr/local/src
</span><br>
<span class="quotelev1">&gt; # tar -xjf openmpi-1.4.3-patched.tar.bz2
</span><br>
<span class="quotelev1">&gt; # cd openmpi-1.4.3
</span><br>
<span class="quotelev1">&gt; # module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev1">&gt; # ./configure &gt;../openmpi-1.4.3-configure-intel.6.233.log 2&gt;&amp;1 -- 
</span><br>
<span class="quotelev1">&gt; with-tm --with-openib --without-valgrind --without-udapl --enable- 
</span><br>
<span class="quotelev1">&gt; contrib-no-build=vt --with-wrapper-ldflags=&quot;-shared-intel&quot; CC=&quot;icc&quot;  
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-g -O3&quot; CXX=&quot;icpc&quot; CXXFLAGS=&quot;-g -O3&quot; FC=&quot;ifort&quot; FCFLAGS=&quot;-g - 
</span><br>
<span class="quotelev1">&gt; O3&quot; F77=&quot;ifort&quot; FFLAGS=&quot;-g -O3&quot; LDFLAGS=&quot;-shared-intel&quot;
</span><br>
<span class="quotelev1">&gt; # make &gt;../openmpi-1.4.3-make-intel.6.233.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; # make check &gt;../openmpi-1.4.3-check-intel.6.233.log 2&gt;&amp;1
</span><br>
<p>(When I generate the OpenMPI 1.4.3 library we actually use, I also add  
<br>
a --prefix.  But, that complicates diff's of the stdout files for  
<br>
these steps, so it is not used here.  Thus, I do NOT proceed to make  
<br>
install any of these libraries.)
<br>
<p>The three earlier versions of the Intel 2011 compilers all pass the  
<br>
make check tests.  When I compare the ./configure stdout files, they  
<br>
are all identical.  However, the ./configure stdout file for the Intel  
<br>
2011.6.233 compilers has one difference:
<br>
<p><span class="quotelev1">&gt; [root_at_hydra openmpi-1.4.3]# diff ../openmpi-1.4.3-configure-intel. 
</span><br>
<span class="quotelev1">&gt; {5.220,6.233}.log
</span><br>
<span class="quotelev1">&gt; 178c178
</span><br>
<span class="quotelev1">&gt; &lt; checking for __attribute__(may_alias)... no
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; checking for __attribute__(may_alias)... yes
</span><br>
<p>That is obviously where I will start looking for the source of the  
<br>
problem.
<br>
<p>Maybe someone reading this list knows what the purpose of that test  
<br>
is, whether the Intel 2011 compilers are expected to have this feature  
<br>
enabled, and whether the code this enables can cause this problem if  
<br>
the Intel 2011.6.233 compilers do not fully support whatever this test  
<br>
is intended to discern.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9791/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9792.php">Josh Hursey: "Re: [OMPI devel] RFC: CRS Module for MTCP Checkpointing Package"</a>
<li><strong>Previous message:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9795.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
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
