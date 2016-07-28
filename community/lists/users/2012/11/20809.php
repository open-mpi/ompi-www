<?
$subject_val = "Re: [OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 11:20:08 2012" -->
<!-- isoreceived="20121129162008" -->
<!-- sent="Thu, 29 Nov 2012 11:19:59 -0500" -->
<!-- isosent="20121129161959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not turn off C++ build." -->
<!-- id="C671BC0E-0D66-4DEC-AE6D-DA84FD5836AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B78A87.4080108_at_iu.edu" -->
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
<strong>Date:</strong> 2012-11-29 11:19:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No problem!  Glad to help.
<br>
<p>I added you to the ticket about not being able to turn off the C++ compiler checks (<a href="https://svn.open-mpi.org/trac/ompi/ticket/2999">https://svn.open-mpi.org/trac/ompi/ticket/2999</a>), in case that ever gets fixed.  It's somewhat of a low priority.
<br>
<p><p>On Nov 29, 2012, at 11:17 AM, Ray Sheppard wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeff,
</span><br>
<span class="quotelev1">&gt;  Of course you were right. I had thought the lost function was something internal to y'alls build. It is pretty scary that they have been building and porting for weeks (while I was running around SC and the holidays) and it takes an old fortran guy to notice they don't have a working C++ compiler.  Well, truth be told, you did the noticing. Thanks again.
</span><br>
<span class="quotelev1">&gt;                                   Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/28/2012 5:09 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; According to config.log, your icpc is broken -- it won't compile a trivial C++ program.  Try it yourself -- try compiling
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;&gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;     cout &lt;&lt; &quot;Hello, world&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you need to set some environment variables before you invoke the Intel compilers?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2012, at 5:03 PM, Ray Sheppard wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks.  I am just running the Intel 13.0.1 compiler on the Quarry cluster at IU. It would be very odd to have a serious issue without users complaining.  I tried running it again with C++ turned on with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot; FC=ifort FCFLAGS=&quot;-xT -O2&quot; CXX=icpc --enable-static --disable-shared --with-threads=posix --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The block ends very similarly to how it acted with g++:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking whether icpc accepts -g... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking dependency style of icpc... gcc3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking how to run the C++ preprocessor... icpc -E
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for the C++ compiler vendor... intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if icpc supports -finline-functions... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking size of bool... 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking alignment of bool... configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checking the config.log and picking it up around config 16462:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:16462: checking for the C++ compiler vendor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:16491: icpc -c -DNDEBUG   conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:16491: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17030: result: intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17283: checking if icpc supports -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17299: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17299: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17306: result: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17393: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17404: checking if C and C++ are link compatible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17430: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest_c.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17437: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17468: icpc -o conftest -DNDEBUG -finline-functions conftest.cpp conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17468: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17494: result: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17589: checking for C++ optimization flags
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17591: result: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17606: checking size of bool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17611: icpc -o conftest -O3 -DNDEBUG -finline-functions   conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/bits/stdio.h(118): error: identifier &quot;__getdelim&quot; is undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return __getdelim (__lineptr, __n, '\n', __stream);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation aborted for conftest.cpp (code 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:17611: $? = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: program exited with status 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: failed program was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | /* confdefs.h */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I am lost.  Thanks again
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Previous message:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
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
