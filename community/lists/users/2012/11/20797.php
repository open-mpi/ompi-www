<?
$subject_val = "Re: [OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 17:03:43 2012" -->
<!-- isoreceived="20121128220343" -->
<!-- sent="Wed, 28 Nov 2012 17:03:13 -0500" -->
<!-- isosent="20121128220313" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not turn off C++ build." -->
<!-- id="50B68A21.5090705_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="37F871E4-1A05-45F2-A198-112D05A81695_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can not turn off C++ build.<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 17:03:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
&nbsp;&nbsp;&nbsp;Thanks.  I am just running the Intel 13.0.1 compiler on the Quarry 
<br>
cluster at IU. It would be very odd to have a serious issue without 
<br>
users complaining.  I tried running it again with C++ turned on with:
<br>
<p>&nbsp;&nbsp;./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot; 
<br>
FC=ifort FCFLAGS=&quot;-xT -O2&quot; CXX=icpc --enable-static --disable-shared 
<br>
--with-threads=posix --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
<br>
<p>The block ends very similarly to how it acted with g++:
<br>
<p>*** C++ compiler and preprocessor
<br>
checking whether we are using the GNU C++ compiler... yes
<br>
checking whether icpc accepts -g... yes
<br>
checking dependency style of icpc... gcc3
<br>
checking how to run the C++ preprocessor... icpc -E
<br>
checking for the C++ compiler vendor... intel
<br>
checking if icpc supports -finline-functions... yes
<br>
configure: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
checking if C and C++ are link compatible... yes
<br>
checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
<br>
checking size of bool... 0
<br>
checking alignment of bool... configure: WARNING: *** Problem running 
<br>
configure test!
<br>
configure: WARNING: *** See config.log for details.
<br>
configure: error: *** Cannot continue.
<br>
<p><p>Checking the config.log and picking it up around config 16462:
<br>
<p>configure:16462: checking for the C++ compiler vendor
<br>
configure:16491: icpc -c -DNDEBUG   conftest.cpp &gt;&amp;5
<br>
configure:16491: $? = 0
<br>
configure:17030: result: intel
<br>
configure:17283: checking if icpc supports -finline-functions
<br>
configure:17299: icc -c -DNDEBUG -xT -O2 -finline-functions 
<br>
-fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
<br>
icc: command line remark #10279: option '-xT' is deprecated and will be 
<br>
removed in a future release. See '-help deprecated'
<br>
configure:17299: $? = 0
<br>
configure:17306: result: yes
<br>
configure:17393: WARNING:  -finline-functions has been added to CXXFLAGS
<br>
configure:17404: checking if C and C++ are link compatible
<br>
configure:17430: icc -c -DNDEBUG -xT -O2 -finline-functions 
<br>
-fno-strict-aliasing -restrict  conftest_c.c
<br>
icc: command line remark #10279: option '-xT' is deprecated and will be 
<br>
removed in a future release. See '-help deprecated'
<br>
configure:17437: $? = 0
<br>
configure:17468: icpc -o conftest -DNDEBUG -finline-functions 
<br>
conftest.cpp conftest_c.o  &gt;&amp;5
<br>
configure:17468: $? = 0
<br>
configure:17494: result: yes
<br>
configure:17589: checking for C++ optimization flags
<br>
configure:17591: result: -O3 -DNDEBUG -finline-functions
<br>
configure:17606: checking size of bool
<br>
configure:17611: icpc -o conftest -O3 -DNDEBUG -finline-functions   
<br>
conftest.cpp  &gt;&amp;5
<br>
/usr/include/bits/stdio.h(118): error: identifier &quot;__getdelim&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return __getdelim (__lineptr, __n, '\n', __stream);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for conftest.cpp (code 2)
<br>
configure:17611: $? = 2
<br>
configure: program exited with status 2
<br>
configure: failed program was:
<br>
| /* confdefs.h */
<br>
|
<br>
____________________________________
<br>
<p>So, I am lost.  Thanks again
<br>
Ray
<br>
<p><p><p><p><p><p><p>On 11/28/2012 4:17 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'll bet we're not disabling the C++ test properly when you disable the C++ bindings.  Bummer.  I'll file a bug, but I don't know when that will be fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this kind of error typically only occurs when your C++ compiler fails altogether (e.g., it's broken).  Check the config.log file and see what it says happened for this specific test -- it may well be that your C++ compiler is faulty and needs to be fixed anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2012, at 2:19 PM, Ray Sheppard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;   I am trying to build OpenMPI 1.6.3 on an IBM/Intel RHEL-6 cluster.
</span><br>
<span class="quotelev2">&gt;&gt;   I tried building with variations (meaning enable-...=no, disable-,
</span><br>
<span class="quotelev2">&gt;&gt; changing switch order, etc.) of this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot;
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort FCFLAGS=&quot;-xT -O2&quot; --enable-mpi-cxx=no --disable-mpi-cxx-seek
</span><br>
<span class="quotelev2">&gt;&gt; --enable-static --disable-shared --with-threads=posix
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I first tried using icpc as a CXX compiler but it dies shortly after
</span><br>
<span class="quotelev2">&gt;&gt; checking the alignment of bool.  C++ bindings are not that popular so I
</span><br>
<span class="quotelev2">&gt;&gt; decided to just turn them off.  Now, it just picks up g++ and tries
</span><br>
<span class="quotelev2">&gt;&gt; building the C++ bindings anyway:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ** C++ compiler and preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; checking for g++... g++
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether g++ accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking dependency style of g++... gcc3
</span><br>
<span class="quotelev2">&gt;&gt; checking how to run the C++ preprocessor... g++ -E
</span><br>
<span class="quotelev2">&gt;&gt; checking for the C++ compiler vendor... gnu
</span><br>
<span class="quotelev2">&gt;&gt; checking if g++ supports -finline-functions... yes
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; checking size of bool... 0
</span><br>
<span class="quotelev2">&gt;&gt; checking alignment of bool... configure: WARNING: *** Problem running
</span><br>
<span class="quotelev2">&gt;&gt; configure test!
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It still errors.  I am happy to just kill C++ but it won't.  What is
</span><br>
<span class="quotelev2">&gt;&gt; wrong?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;                               Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;                          Respectfully,
</span><br>
<span class="quotelev2">&gt;&gt;                            Ray Sheppard
</span><br>
<span class="quotelev2">&gt;&gt; 			RSheppar_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 			<a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
</span><br>
<span class="quotelev2">&gt;&gt;                            317-274-0016
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                    Principal Analyst
</span><br>
<span class="quotelev2">&gt;&gt;                    Scientific Applications and Performance Tuning
</span><br>
<span class="quotelev2">&gt;&gt;                    Research Technologies
</span><br>
<span class="quotelev2">&gt;&gt;                    University Information Technological Services
</span><br>
<span class="quotelev2">&gt;&gt;                    IUPUI campus
</span><br>
<span class="quotelev2">&gt;&gt;                    Indiana University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    My &quot;pithy&quot; saying:  Science is the art of translating the world
</span><br>
<span class="quotelev2">&gt;&gt;        into language. Unfortunately, that language is mathematics.
</span><br>
<span class="quotelev2">&gt;&gt;    Bumper sticker wisdom: Make it idiot-proof and they will make a
</span><br>
<span class="quotelev2">&gt;&gt;        better idiot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20796.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
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
