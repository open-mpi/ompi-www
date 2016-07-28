<?
$subject_val = "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 13:47:47 2011" -->
<!-- isoreceived="20111019174747" -->
<!-- sent="Wed, 19 Oct 2011 13:47:41 -0400" -->
<!-- isosent="20111019174741" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)" -->
<!-- id="5B4C5AD8-D7E8-4C3B-B6B4-E3393C6AA683_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FF2B7EA6-A5E4-429F-B80F-A3D2F266421A_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 13:47:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9842.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did this get reported to the Intel compiler support people?
<br>
<p><p>On Oct 19, 2011, at 8:24 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Larry,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will forward this info upstream.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 18, 2011, at 21:56 , Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the update.  FYI, here's all the version numbers reported by the compiler releases I have installed:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module load compilers/intel/11.1.080
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ icc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version 11.1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module unload compilers/intel/11.1.080
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module load compilers/intel/2011.3.174
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ icc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version 12.0.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module unload compilers/intel/2011.3.174
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module load compilers/intel/2011.4.191
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ icc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version 12.0.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module unload compilers/intel/2011.4.191
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module load compilers/intel/2011.5.220
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ icc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version 12.0.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module unload compilers/intel/2011.5.220
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ icc -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc version 12.1.0 (gcc version 4.1.2 compatibility)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [baker_at_hydra ~]$ module unload compilers/intel/2011.6.233
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another problem I found with the Intel 12.1.0 compiler: I started to look at adding a test for the Intel compiler version around the #pragma that disables optimization for OpenMPI and I found the __ICC and __INTEL_COMPILER predefined macros (compiler version no.) are not properly defined:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ icc -E -dD hello.c | grep __INTEL_COMPILER
</span><br>
<span class="quotelev2">&gt;&gt; #define __INTEL_COMPILER 9999
</span><br>
<span class="quotelev2">&gt;&gt; #define __INTEL_COMPILER_BUILD_DATE 20110811
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ icc -E -dD hello.c | grep __ICC           
</span><br>
<span class="quotelev2">&gt;&gt; #define __ICC 9999
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ icc -v
</span><br>
<span class="quotelev2">&gt;&gt; icc version 12.1.0 (gcc version 4.1.2 compatibility)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if there is code in OpenMPI that looks at __ICC and __INTEL_COMPILER, but that could cause problems.  (Pass this on upstream to the libtool people?)
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
<span class="quotelev2">&gt;&gt; On 17 Oct 2011, at 8:18 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for not updating this thread. The issue was identified and fixed by Rainer in r25290 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/25290">https://svn.open-mpi.org/trac/ompi/changeset/25290</a>). Please read the comments and the linked thread on the Intel forum for more info about.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I couldn't find a trace of this being fixed in the 1.4 series, so I would wait upgrading until this issue gets resolved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 17, 2011, at 23:00 , Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have not had time to look over the 1.4.3 make check failure for Intel 2011.6.233 compilers.  Have you?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had planned to get 1.4.3 compiled on all six of our compilers using the latest compiler releases.  I was putting off upgrading to 1.4.4 or 1.5.x until after that to minimize the number of things that could go wrong.  Do you recommend otherwise?
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
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7 Oct 2011, at 6:46 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The may_alias attribute was part of a forward-looking attribute checking, at a time where few compiler supported them. This explains why they are not widely used in the library itself. Moreover, as they do not affect the compilation itself (as your test highlights this is not the issue with the icc 2011.6.233 compiler), there is no urge to remove the may_alias support.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just got that particular version of the compiler installed on one of our machines. I'll give it a try over the weekend.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 7, 2011, at 20:21 , Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The test for the __may_alias_ attribute uses the following short code snippet:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int * p_value __attribute__ ((__may_alias__));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; main ()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   ;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Indeed, for Intel 2011 compilers prior to 2011.6.233, this results in a warning:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; root_at_hydra openmpi-1.4.3]# module load compilers/intel/2011.5.220
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# icc -c may_alias_test.c 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; may_alias_test.c(123): warning #1292: attribute &quot;__may_alias__&quot; ignored
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   int * p_value __attribute__ ((__may_alias__));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;                                 ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# module unload compilers/intel/2011.5.220
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# icc -c may_alias_test.c 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I modified ./configure to force
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_cv___attribute__may_alias=0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Then I compiled and tested the library.  Unfortunately, the results were exactly the same:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/state/partition1/root/src/openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4: 26326 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; FAIL: checksum
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4: 26359 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; FAIL: position
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I could not find any use of the may_alias attribute, other than in a #define in opal/include/opal_config_bottom.h.  Is OMPI_HAVE_ATTRIBUTE_MAY_ALIAS just cruft that can be removed?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 7 Oct 2011, at 11:08 AM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ran into a problem this past week trying to upgrade our OpenMPI 1.4.3 for the latest Intel 2011 compiler, 2011.6.233.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make check fails with Segmentation Fault errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# tail -20 ../openmpi-1.4.3-check-intel.6.233.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh ../../libtool --tag=CC   --mode=link icc  -DNDEBUG -g -O3 -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -shared-intel -export-dynamic -shared-intel  -o ddt_pack ddt_pack.o ../../ompi/libmpi.la -lnsl -lutil  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libtool: link: icc -DNDEBUG -g -O3 -finline-functions -fno-strict-aliasing -restrict -pthread -fvisibility=hidden -shared-intel -shared-intel -o .libs/ddt_pack ddt_pack.o -Wl,--export-dynamic  ../../ompi/.libs/libmpi.so /usr/local/src/openmpi-1.4.3/orte/.libs/libopen-rte.so /usr/local/src/openmpi-1.4.3/opal/.libs/libopen-pal.so -ldl -lnsl -lutil -pthread -Wl,-rpath -Wl,/usr/local/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make  check-TESTS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Entering directory `/state/partition1/root/src/openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4:  6322 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FAIL: checksum
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /bin/sh: line 4:  6355 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; FAIL: position
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[3]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/test/datatype'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/state/partition1/root/src/openmpi-1.4.3/test'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Before trying to track down the problem, I thought I'd describe what I see here in case someone recognizes what might be happening.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We have been using OpenMPI 1.4.3 compiled with the Intel 2011.3.174 compiler.  I've updated the Intel 2011 compilers as they have come out with new versions: 2011.4.191, 2011.5.220, and now 2011.6.233.  However, I've not recompiled OpenMPI 1.4.3 until now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Since the original compilation of OpenMPI 1.4.3 with the Intel 2011.3.174 compilers, I have installed libnuma and libnuma-devel RPMs on our cluster front end.  I noticed that changed the OpenMPI 1.4.3 ./configure output.  To test that this was not the cause of the problem, I recompiled OpenMPI 1.4.3 using both the CentOS/Rocks GNU compilers and the Intel 2011.3.174 compilers.  They both passed all the make check tests.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To find out when this problem first occurs, I systematically configured, compiled, and checked OpenMPI 1.4.3 with all four versions of the Intel 2011 compilers we have.  We use the modules package to load the compiler environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# env | grep /opt/intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/opt/intel/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/opt/intel/composer_xe_2011_sp1.6.233/mkl/lib/intel64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; PATH=/opt/intel/composer_xe_2011_sp1.6.233/bin/intel64:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/java/latest/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/opt/eclipse:/opt/ganglia/bin:/opt/ganglia/sbin:/opt/maui/bin:/opt/torque/bin:/opt/torque/sbin:/opt/rocks/bin:/opt/rocks/sbin:/root/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's the steps I use to make and test OpenMPI 1.4.3 (I use a patched version to accommodate the six compilers we have; I've submitted those patches here in the past):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # cd /usr/local/src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # tar -xjf openmpi-1.4.3-patched.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # cd openmpi-1.4.3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # module load compilers/intel/2011.6.233
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # ./configure &gt;../openmpi-1.4.3-configure-intel.6.233.log 2&gt;&amp;1 --with-tm --with-openib --without-valgrind --without-udapl --enable-contrib-no-build=vt --with-wrapper-ldflags=&quot;-shared-intel&quot; CC=&quot;icc&quot; CFLAGS=&quot;-g -O3&quot; CXX=&quot;icpc&quot; CXXFLAGS=&quot;-g -O3&quot; FC=&quot;ifort&quot; FCFLAGS=&quot;-g -O3&quot; F77=&quot;ifort&quot; FFLAGS=&quot;-g -O3&quot; LDFLAGS=&quot;-shared-intel&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # make &gt;../openmpi-1.4.3-make-intel.6.233.log 2&gt;&amp;1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # make check &gt;../openmpi-1.4.3-check-intel.6.233.log 2&gt;&amp;1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (When I generate the OpenMPI 1.4.3 library we actually use, I also add a --prefix.  But, that complicates diff's of the stdout files for these steps, so it is not used here.  Thus, I do NOT proceed to make install any of these libraries.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The three earlier versions of the Intel 2011 compilers all pass the make check tests.  When I compare the ./configure stdout files, they are all identical.  However, the ./configure stdout file for the Intel 2011.6.233 compilers has one difference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_hydra openmpi-1.4.3]# diff ../openmpi-1.4.3-configure-intel.{5.220,6.233}.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 178c178
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt; checking for __attribute__(may_alias)... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt; checking for __attribute__(may_alias)... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That is obviously where I will start looking for the source of the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe someone reading this list knows what the purpose of that test is, whether the Intel 2011 compilers are expected to have this feature enabled, and whether the code this enables can cause this problem if the Intel 2011.6.233 compilers do not fully support whatever this test is intended to discern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9852.php">Barrett, Brian W: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9850.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>In reply to:</strong> <a href="9842.php">George Bosilca: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
<li><strong>Reply:</strong> <a href="9854.php">Larry Baker: "Re: [OMPI devel] make check fails for Intel 2011.6.233 (OpenMPI 1.4.3)"</a>
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
