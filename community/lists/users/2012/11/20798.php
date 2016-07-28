<?
$subject_val = "Re: [OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 17:09:11 2012" -->
<!-- isoreceived="20121128220911" -->
<!-- sent="Wed, 28 Nov 2012 17:09:06 -0500" -->
<!-- isosent="20121128220906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not turn off C++ build." -->
<!-- id="DDFB23C2-444A-4BBB-878D-3A5DDDC14F9B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B68A21.5090705_at_iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-28 17:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20799.php">shiny knight: "[OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to config.log, your icpc is broken -- it won't compile a trivial C++ program.  Try it yourself -- try compiling
<br>
<p>-----
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;iostream&gt;
<br>
using namespace std;
<br>
int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Hello, world&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-----
<br>
<p>Do you need to set some environment variables before you invoke the Intel compilers?
<br>
<p><p>On Nov 28, 2012, at 5:03 PM, Ray Sheppard wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;  Thanks.  I am just running the Intel 13.0.1 compiler on the Quarry cluster at IU. It would be very odd to have a serious issue without users complaining.  I tried running it again with C++ turned on with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot; FC=ifort FCFLAGS=&quot;-xT -O2&quot; CXX=icpc --enable-static --disable-shared --with-threads=posix --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The block ends very similarly to how it acted with g++:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether icpc accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking dependency style of icpc... gcc3
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... icpc -E
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... intel
</span><br>
<span class="quotelev1">&gt; checking if icpc supports -finline-functions... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; checking size of bool... 0
</span><br>
<span class="quotelev1">&gt; checking alignment of bool... configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Checking the config.log and picking it up around config 16462:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:16462: checking for the C++ compiler vendor
</span><br>
<span class="quotelev1">&gt; configure:16491: icpc -c -DNDEBUG   conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:16491: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17030: result: intel
</span><br>
<span class="quotelev1">&gt; configure:17283: checking if icpc supports -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:17299: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev1">&gt; configure:17299: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17306: result: yes
</span><br>
<span class="quotelev1">&gt; configure:17393: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; configure:17404: checking if C and C++ are link compatible
</span><br>
<span class="quotelev1">&gt; configure:17430: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest_c.c
</span><br>
<span class="quotelev1">&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev1">&gt; configure:17437: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17468: icpc -o conftest -DNDEBUG -finline-functions conftest.cpp conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:17468: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:17494: result: yes
</span><br>
<span class="quotelev1">&gt; configure:17589: checking for C++ optimization flags
</span><br>
<span class="quotelev1">&gt; configure:17591: result: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; configure:17606: checking size of bool
</span><br>
<span class="quotelev1">&gt; configure:17611: icpc -o conftest -O3 -DNDEBUG -finline-functions   conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /usr/include/bits/stdio.h(118): error: identifier &quot;__getdelim&quot; is undefined
</span><br>
<span class="quotelev1">&gt;    return __getdelim (__lineptr, __n, '\n', __stream);
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for conftest.cpp (code 2)
</span><br>
<span class="quotelev1">&gt; configure:17611: $? = 2
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 2
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; | /* confdefs.h */
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; ____________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I am lost.  Thanks again
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/28/2012 4:17 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'll bet we're not disabling the C++ test properly when you disable the C++ bindings.  Bummer.  I'll file a bug, but I don't know when that will be fixed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, this kind of error typically only occurs when your C++ compiler fails altogether (e.g., it's broken).  Check the config.log file and see what it says happened for this specific test -- it may well be that your C++ compiler is faulty and needs to be fixed anyway.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2012, at 2:19 PM, Ray Sheppard wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I am trying to build OpenMPI 1.6.3 on an IBM/Intel RHEL-6 cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I tried building with variations (meaning enable-...=no, disable-,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changing switch order, etc.) of this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=ifort FCFLAGS=&quot;-xT -O2&quot; --enable-mpi-cxx=no --disable-mpi-cxx-seek
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-static --disable-shared --with-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I first tried using icpc as a CXX compiler but it dies shortly after
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking the alignment of bool.  C++ bindings are not that popular so I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decided to just turn them off.  Now, it just picks up g++ and tries
</span><br>
<span class="quotelev3">&gt;&gt;&gt; building the C++ bindings anyway:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** C++ compiler and preprocessor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for g++... g++
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether g++ accepts -g... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking dependency style of g++... gcc3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking how to run the C++ preprocessor... g++ -E
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for the C++ compiler vendor... gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if g++ supports -finline-functions... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking size of bool... 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking alignment of bool... configure: WARNING: *** Problem running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It still errors.  I am happy to just kill C++ but it won't.  What is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong?  Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              Ray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         Respectfully,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           Ray Sheppard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			RSheppar_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			<a href="http://pti.iu.edu/sciapt">http://pti.iu.edu/sciapt</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                           317-274-0016
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Principal Analyst
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Scientific Applications and Performance Tuning
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Research Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   University Information Technological Services
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   IUPUI campus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Indiana University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   My &quot;pithy&quot; saying:  Science is the art of translating the world
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       into language. Unfortunately, that language is mathematics.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Bumper sticker wisdom: Make it idiot-proof and they will make a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       better idiot.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20799.php">shiny knight: "[OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20797.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
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
