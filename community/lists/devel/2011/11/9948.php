<?
$subject_val = "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 13:57:20 2011" -->
<!-- isoreceived="20111108185720" -->
<!-- sent="Tue, 8 Nov 2011 10:57:14 -0800" -->
<!-- isosent="20111108185714" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)" -->
<!-- id="725F0713-0D4B-442B-9C1A-73D0D8FED281_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37608E0C-EE47-45DE-BB3D-40730DD1FAE7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 13:57:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9949.php">George Bosilca: "[OMPI devel] Open MPI BOF"</a>
<li><strong>Previous message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The good news is that the issue reported in R25290 is fixed in the  
<br>
latest Intel compilers release (2011.7.256).  The bad news is that  
<br>
both the 2011.6.233 and 2011.7.256 releases identify themselves as  
<br>
V12.1.0 from the command line.  (I reported this bug to Intel  
<br>
already.)  They can only be reliably distinguished using the  
<br>
predefined __INTEL_COMPILER_BUILD_DATE macro.  I verified that the  
<br>
build dates for all three compilers we have -- Linux, Mac OS X, and  
<br>
Windows -- are the same.
<br>
<p>I developed a more targeted patch (attached) for OpenMPI 1.4.3 opal/ 
<br>
mca/memory/ptmalloc2/malloc.c which disables vectorization for  
<br>
_int_malloc() only if an Intel compiler with the 2011.6.233 release  
<br>
build date is found (__INTEL_COMPILER_BUILD_DATE == 20110811).  This  
<br>
patch could presumably make its way into all the copies of opal/mca/ 
<br>
memory/ptmalloc2/malloc.c in the various versions of OpenMPI that are  
<br>
still being maintained.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 17 Oct 2011, at 8:18 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Larry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for not updating this thread. The issue was identified and  
</span><br>
<span class="quotelev1">&gt; fixed by Rainer in r25290 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/25290">https://svn.open-mpi.org/trac/ompi/changeset/25290</a> 
</span><br>
<span class="quotelev1">&gt; ). Please read the comments and the linked thread on the Intel forum  
</span><br>
<span class="quotelev1">&gt; for more info about.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I couldn't find a trace of this being fixed in the 1.4 series, so I  
</span><br>
<span class="quotelev1">&gt; would wait upgrading until this issue gets resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 17, 2011, at 23:00 , Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not had time to look over the 1.4.3 make check failure for  
</span><br>
<span class="quotelev2">&gt;&gt; Intel 2011.6.233 compilers.  Have you?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had planned to get 1.4.3 compiled on all six of our compilers  
</span><br>
<span class="quotelev2">&gt;&gt; using the latest compiler releases.  I was putting off upgrading to  
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.4 or 1.5.x until after that to minimize the number of things  
</span><br>
<span class="quotelev2">&gt;&gt; that could go wrong.  Do you recommend otherwise?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7 Oct 2011, at 6:46 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The may_alias attribute was part of a forward-looking attribute  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking, at a time where few compiler supported them. This  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; explains why they are not widely used in the library itself.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moreover, as they do not affect the compilation itself (as your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test highlights this is not the issue with the icc 2011.6.233  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler), there is no urge to remove the may_alias support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just got that particular version of the compiler installed on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; one of our machines. I'll give it a try over the weekend.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 7, 2011, at 20:21 , Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The test for the __may_alias_ attribute uses the following short  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code snippet:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int * p_value __attribute__ ((__may_alias__));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; main ()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indeed, for Intel 2011 compilers prior to 2011.6.233, this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results in a warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; root_at_hydra openmpi-1.4.3]# module load compilers/intel/2011.5.220
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# icc -c may_alias_test.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may_alias_test.c(123): warning #1292: attribute &quot;__may_alias__&quot;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ignored
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   int * p_value __attribute__ ((__may_alias__));
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 ^
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# module unload compilers/intel/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011.5.220
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# icc -c may_alias_test.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I modified ./configure to force
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_cv___attribute__may_alias=0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then I compiled and tested the library.  Unfortunately, the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results were exactly the same:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4: 26326 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FAIL: checksum
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4: 26359 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FAIL: position
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I could not find any use of the may_alias attribute, other than  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a #define in opal/include/opal_config_bottom.h.  Is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI_HAVE_ATTRIBUTE_MAY_ALIAS just cruft that can be removed?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7 Oct 2011, at 11:08 AM, Larry Baker wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I ran into a problem this past week trying to upgrade our  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI 1.4.3 for the latest Intel 2011 compiler, 2011.6.233.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make check fails with Segmentation Fault errors:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# tail -20 ../openmpi-1.4.3-check- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intel.6.233.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh ../../libtool --tag=CC   --mode=link icc  -DNDEBUG -g - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; O3 -finline-functions -fno-strict-aliasing -restrict -pthread - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; fvisibility=hidden -shared-intel -export-dynamic -shared-intel   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -o ddt_pack ddt_pack.o ../../ompi/libmpi.la -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: icc -DNDEBUG -g -O3 -finline-functions -fno- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; strict-aliasing -restrict -pthread -fvisibility=hidden -shared- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intel -shared-intel -o .libs/ddt_pack ddt_pack.o -Wl,--export- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; dynamic  ../../ompi/.libs/libmpi.so /usr/local/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/orte/.libs/libopen-rte.so /usr/local/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil - 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pthread -Wl,-rpath -Wl,/usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4:  6322 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: checksum
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4:  6355 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: position
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/state/partition1/root/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/test'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Before trying to track down the problem, I thought I'd describe  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what I see here in case someone recognizes what might be  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; happening.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We have been using OpenMPI 1.4.3 compiled with the Intel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011.3.174 compiler.  I've updated the Intel 2011 compilers as  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; they have come out with new versions: 2011.4.191, 2011.5.220,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and now 2011.6.233.  However, I've not recompiled OpenMPI 1.4.3  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; until now.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since the original compilation of OpenMPI 1.4.3 with the Intel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2011.3.174 compilers, I have installed libnuma and libnuma-devel  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RPMs on our cluster front end.  I noticed that changed the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI 1.4.3 ./configure output.  To test that this was not the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cause of the problem, I recompiled OpenMPI 1.4.3 using both the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CentOS/Rocks GNU compilers and the Intel 2011.3.174 compilers.   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They both passed all the make check tests.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To find out when this problem first occurs, I systematically  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configured, compiled, and checked OpenMPI 1.4.3 with all four  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; versions of the Intel 2011 compilers we have.  We use the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; modules package to load the compiler environment:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# env | grep /opt/intel
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/opt/intel/composer_xe_2011_sp1.6.233/compiler/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lib/intel64:/opt/intel/composer_xe_2011_sp1.6.233/mkl/lib/intel64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PATH=/opt/intel/composer_xe_2011_sp1.6.233/bin/intel64:/usr/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; kerberos/sbin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/eclipse:/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opt/ganglia/bin:/opt/ganglia/sbin:/opt/maui/bin:/opt/torque/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; bin:/opt/torque/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here's the steps I use to make and test OpenMPI 1.4.3 (I use a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; patched version to accommodate the six compilers we have; I've  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; submitted those patches here in the past):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # cd /usr/local/src
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # tar -xjf openmpi-1.4.3-patched.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # cd openmpi-1.4.3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # ./configure &gt;../openmpi-1.4.3-configure-intel.6.233.log 2&gt;&amp;1  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --with-tm --with-openib --without-valgrind --without-udapl -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enable-contrib-no-build=vt --with-wrapper-ldflags=&quot;-shared- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intel&quot; CC=&quot;icc&quot; CFLAGS=&quot;-g -O3&quot; CXX=&quot;icpc&quot; CXXFLAGS=&quot;-g -O3&quot;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FC=&quot;ifort&quot; FCFLAGS=&quot;-g -O3&quot; F77=&quot;ifort&quot; FFLAGS=&quot;-g -O3&quot;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; LDFLAGS=&quot;-shared-intel&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # make &gt;../openmpi-1.4.3-make-intel.6.233.log 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # make check &gt;../openmpi-1.4.3-check-intel.6.233.log 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (When I generate the OpenMPI 1.4.3 library we actually use, I  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; also add a --prefix.  But, that complicates diff's of the stdout  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; files for these steps, so it is not used here.  Thus, I do NOT  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; proceed to make install any of these libraries.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The three earlier versions of the Intel 2011 compilers all pass  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the make check tests.  When I compare the ./configure stdout  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; files, they are all identical.  However, the ./configure stdout  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file for the Intel 2011.6.233 compilers has one difference:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff ../openmpi-1.4.3-configure- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; intel.{5.220,6.233}.log
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 178c178
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt; checking for __attribute__(may_alias)... no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; checking for __attribute__(may_alias)... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That is obviously where I will start looking for the source of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe someone reading this list knows what the purpose of that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; test is, whether the Intel 2011 compilers are expected to have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this feature enabled, and whether the code this enables can  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cause this problem if the Intel 2011.6.233 compilers do not  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fully support whatever this test is intended to discern.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9948/Intel20110811Fix.patch.txt">attachment</a>
</ul>
<!-- attachment="Intel20110811Fix.patch.txt" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9948/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9949.php">George Bosilca: "[OMPI devel] Open MPI BOF"</a>
<li><strong>Previous message:</strong> <a href="9947.php">Ralph Castain: "Re: [OMPI devel] debugger confusion"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9832.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9952.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
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
