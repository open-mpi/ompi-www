<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 23 10:42:06 2005" -->
<!-- isoreceived="20051123154206" -->
<!-- sent="Wed, 23 Nov 2005 16:39:03 +0100" -->
<!-- isosent="20051123153903" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3" -->
<!-- id="200511231639.04312.Keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2D14E9CE-B707-4723-A38C-21A144C942DB_at_ulb.ac.be" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-23 10:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
On Wednesday 23 November 2005 14:38, Max Manfrin wrote:
<br>
<span class="quotelev1">&gt; 	I have now tried to configure using the following command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi-param_check=always --enable-mpi-threads --
</span><br>
<span class="quotelev1">&gt; disable-f77 | tee config.LOG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	but I still got the same error at the same point!!!!
</span><br>
Yes, but due to a different reason, this time ,-]
<br>
<p>configure:20663: gfortran  conftestf.f conftest.o -o conftest
<br>
ld: can't open: crt2.o (No such file or directory, errno = 2)
<br>
ld: can't locate file for: -lgcc_s
<br>
<p>The compiler cannot link, as it doesn't find the corresponding library 
<br>
libgcc_s.so...
<br>
<p>So, You use as gcc:
<br>
&nbsp;&nbsp;powerpc-apple-darwin8-g++-4.0.1
<br>
and as gfortran:
<br>
configure:20145: gfortran -v &lt;/dev/null &gt;&amp;5
<br>
Using built-in specs.
<br>
Target: powerpc-apple-darwin8
<br>
/Build/apple/gcc/build/obj/src/configure
<br>
gcc version 4.0.0 (Apple Computer, Inc. build 5202)
<br>
<p><p>I don't know OS X, but they seem to be compiled differently, did You install 
<br>
gcc/gfortran newly?
<br>
/private/var/tmp/gcc/gcc-5247.obj~4/src/configure 
<br>
gcc version 4.0.1 (Apple Computer, Inc. build 5247)
<br>
<p><p>Could You do me a favor and create the two files as in the configure script:
<br>
rusraink_at_pcglap12:/tmp&gt; cat conftest.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p><p>#ifdef __cplusplus
<br>
extern &quot;C&quot; {
<br>
#endif
<br>
void size_(char *a, char *b)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int diff = (int) (b - a);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FILE *f=fopen(&quot;conftestval&quot;, &quot;w&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (!f) exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(f, &quot;%d\n&quot;, diff);
<br>
}
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif
<br>
<p><p>and
<br>
rusraink_at_pcglap12:/tmp&gt; cat conftestf.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program fsize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;external SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL x(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call SIZE(x(1),x(2))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>Then compile the first:
<br>
rusraink_at_pcglap12:/tmp&gt; gcc -c conftest.c
<br>
Then compile and link both:
<br>
rusraink_at_pcglap12:/tmp&gt; gfortran conftestf.f conftest.o -o conftest
<br>
<p>This should generate conftest, which You may execute:
<br>
rusraink_at_pcglap12:/tmp&gt; ./conftest
<br>
<p>This produces the above-mentioned conftestval file:
<br>
rusraink_at_pcglap12:/tmp&gt; cat conftestval
<br>
4
<br>
<p>Which equals the size of one LOGICAL, here 4 bytes.
<br>
<p><p><pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Previous message:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
<li><strong>In reply to:</strong> <a href="0389.php">Max Manfrin: "Re: [O-MPI users] Can't configure OpenMPI 1.0 on Mac OS X 10.4.3"</a>
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
