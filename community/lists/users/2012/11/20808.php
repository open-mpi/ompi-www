<?
$subject_val = "Re: [OMPI users] Can not turn off C++ build.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 11:17:38 2012" -->
<!-- isoreceived="20121129161738" -->
<!-- sent="Thu, 29 Nov 2012 11:17:11 -0500" -->
<!-- isosent="20121129161711" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not turn off C++ build." -->
<!-- id="50B78A87.4080108_at_iu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DDFB23C2-444A-4BBB-878D-3A5DDDC14F9B_at_cisco.com" -->
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
<strong>Date:</strong> 2012-11-29 11:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
&nbsp;&nbsp;&nbsp;Of course you were right. I had thought the lost function was 
<br>
something internal to y'alls build. It is pretty scary that they have 
<br>
been building and porting for weeks (while I was running around SC and 
<br>
the holidays) and it takes an old fortran guy to notice they don't have 
<br>
a working C++ compiler.  Well, truth be told, you did the noticing. 
<br>
Thanks again.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>On 11/28/2012 5:09 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; According to config.log, your icpc is broken -- it won't compile a trivial C++ program.  Try it yourself -- try compiling
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;      cout &lt;&lt; &quot;Hello, world&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you need to set some environment variables before you invoke the Intel compilers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2012, at 5:03 PM, Ray Sheppard wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks.  I am just running the Intel 13.0.1 compiler on the Quarry cluster at IU. It would be very odd to have a serious issue without users complaining.  I tried running it again with C++ turned on with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=icc CFLAGS=&quot;-xT -O2&quot; F77=ifort FFLAGS=&quot;-xT -O2&quot; FC=ifort FCFLAGS=&quot;-xT -O2&quot; CXX=icpc --enable-static --disable-shared --with-threads=posix --prefix=/N/soft/rhel6/openmpi/intel/openmpi-1.6.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The block ends very similarly to how it acted with g++:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking whether icpc accepts -g... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking dependency style of icpc... gcc3
</span><br>
<span class="quotelev2">&gt;&gt; checking how to run the C++ preprocessor... icpc -E
</span><br>
<span class="quotelev2">&gt;&gt; checking for the C++ compiler vendor... intel
</span><br>
<span class="quotelev2">&gt;&gt; checking if icpc supports -finline-functions... yes
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev2">&gt;&gt; checking for C++ optimization flags... -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; checking size of bool... 0
</span><br>
<span class="quotelev2">&gt;&gt; checking alignment of bool... configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Checking the config.log and picking it up around config 16462:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:16462: checking for the C++ compiler vendor
</span><br>
<span class="quotelev2">&gt;&gt; configure:16491: icpc -c -DNDEBUG   conftest.cpp &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; configure:16491: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:17030: result: intel
</span><br>
<span class="quotelev2">&gt;&gt; configure:17283: checking if icpc supports -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; configure:17299: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev2">&gt;&gt; configure:17299: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:17306: result: yes
</span><br>
<span class="quotelev2">&gt;&gt; configure:17393: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; configure:17404: checking if C and C++ are link compatible
</span><br>
<span class="quotelev2">&gt;&gt; configure:17430: icc -c -DNDEBUG -xT -O2 -finline-functions -fno-strict-aliasing -restrict  conftest_c.c
</span><br>
<span class="quotelev2">&gt;&gt; icc: command line remark #10279: option '-xT' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev2">&gt;&gt; configure:17437: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:17468: icpc -o conftest -DNDEBUG -finline-functions conftest.cpp conftest_c.o  &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; configure:17468: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:17494: result: yes
</span><br>
<span class="quotelev2">&gt;&gt; configure:17589: checking for C++ optimization flags
</span><br>
<span class="quotelev2">&gt;&gt; configure:17591: result: -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev2">&gt;&gt; configure:17606: checking size of bool
</span><br>
<span class="quotelev2">&gt;&gt; configure:17611: icpc -o conftest -O3 -DNDEBUG -finline-functions   conftest.cpp  &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include/bits/stdio.h(118): error: identifier &quot;__getdelim&quot; is undefined
</span><br>
<span class="quotelev2">&gt;&gt;     return __getdelim (__lineptr, __n, '\n', __stream);
</span><br>
<span class="quotelev2">&gt;&gt;            ^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for conftest.cpp (code 2)
</span><br>
<span class="quotelev2">&gt;&gt; configure:17611: $? = 2
</span><br>
<span class="quotelev2">&gt;&gt; configure: program exited with status 2
</span><br>
<span class="quotelev2">&gt;&gt; configure: failed program was:
</span><br>
<span class="quotelev2">&gt;&gt; | /* confdefs.h */
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; ____________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I am lost.  Thanks again
</span><br>
<span class="quotelev2">&gt;&gt; Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20798.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Reply:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
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
