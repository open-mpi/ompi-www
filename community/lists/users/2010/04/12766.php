<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 24 22:15:47 2010" -->
<!-- isoreceived="20100425021547" -->
<!-- sent="Sun, 25 Apr 2010 12:14:32 +1000" -->
<!-- isosent="20100425021432" -->
<!-- name="Nev" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="1272161672.24425.68.camel_at_roo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1271887776.3054.4.camel_at_roo" -->
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
<strong>Subject:</strong> Re: [OMPI users] unresolved symbol mca_base_param_reg_int<br>
<strong>From:</strong> Nev (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-24 22:14:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Previous message:</strong> <a href="12765.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and CentOS"</a>
<li><strong>In reply to:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-04-22 at 08:09 +1000, Nev wrote:
<br>
<span class="quotelev1">&gt; O
</span><br>
<span class="quotelev1">&gt; n Tue, 2010-04-20 at 20:22 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 20, 2010, at 6:16 PM, Nev wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I did the install to the &quot;same place&quot;. I always use /opt/openmpi, the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; procedure I use when building is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure --prefix=/opt/openmpi ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rm -r /opt/openmpi/*
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make clean
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make all
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make install
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is this sufficient to un-install previous version, or is more required.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, that should be sufficient.  Is that what you did this time?  
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If so, is there any way you can provide a small code example of the problem you're seeing?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; OK, I will attempt to reduce to minimal code set, but will not be able
</span><br>
<span class="quotelev1">&gt; to do so until the week end.
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
<p>Hi Jeff,
<br>
Hopefully I have include sufficient information for you to identify what
<br>
I am doing incorrectly.
<br>
<p>Have created minimalist set of code which was built, linked and run
<br>
against version 1.2.7 shared, version 1.4.1 shared and version 1.4.1
<br>
static.
<br>
<p>But have not been able to get the same error message, as reported
<br>
earlier.
<br>
<p>v1.4.1 static WORKS with no error or warning messages.
<br>
v1.4.1 shared FAILS with message
<br>
&nbsp;&nbsp;&nbsp;&quot;mpirun noticed that process rank 0 with PID 31115 on node dingo3
<br>
exited on signal 11 (Segmentation fault)&quot;.
<br>
v1.2.7 shared WORKS but with message:
<br>
&nbsp;&nbsp;&nbsp;&quot;[dingo3:31123] mca: base: component_find: unable to open osc pt2pt:
<br>
file not found (ignored)&quot;
<br>
<p>I have also run the above 3 configuration with actual comms between the
<br>
processes and that works except for 1.4.1 shared.
<br>
<p>1.4.1 shared always fails in the call MPI_Init(...)
<br>
<p>To run command I used
<br>
/opt/openmpi/bin/mpirun -np 2 -mca btl tcp,self \
<br>
-x LD_LIBRARY_PATH=/opt/openmpi/lib:/work/lib \
<br>
-x PATH=/opt/openmpi/bin:/work/bin:/usr/bin \
<br>
-host dingo3 a3exec
<br>
setting the LD_LIBRARY_PATH and PATH are not my normal habit, but used
<br>
to minimise any external dependencies.
<br>
<p>This test machine is a newly installed (eg very clean) Ubuntu 9.10 64
<br>
desktop with server kernel. It is a dual socket 8 core hyperthreaded
<br>
intel box. It has installed
<br>
a. openssh + freenx
<br>
b. KVM
<br>
c. build-essential
<br>
d. 32 bit libraries
<br>
e. bridge-utils
<br>
f. uml-utilities
<br>
<p>openmpi was built with 
<br>
./configure prefix=/opt/openmpi CFLAGS=-m32 CXXFLAGS=-m32
<br>
plus --enable-static --disable-shared for static builds
<br>
<p>I have also tested on 32 bit Ubuntu 9.10 and 8.04 (not clean) with the
<br>
same results.
<br>
<p>Minimist files
<br>
init.c build as &quot;liba1lib.so&quot; using mpicc
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &quot;stdio.h&quot;
<br>
<p>static int mpiRank = -1;
<br>
static int mpiSize = -1;
<br>
<p>int connect(int * const pArgc, char * * pArgv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ENTER connect *pArgc=%d, *pArgv[0]=%s\n&quot;, *pArgc, (*pArgv)[0]);
<br>
fflush(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(pArgc, pArgv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// &lt;&lt;&lt;&lt;NEVER&gt;&gt;&gt;&gt; get to here for version 1.4.1 shared build
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;DONE MPI_init\n&quot;); fflush(0); 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mpiRank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;mpiSize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;MPI_rank = %d, MPI_size = %d\n&quot;, mpiRank, mpiSize); fflush(0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d EXITING connect\n&quot;, mpiRank); fflush(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>load.cpp build as &quot;liba2lib.so&quot; using g++
<br>
<p>extern &quot;C&quot; {
<br>
&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;&nbsp;#include &lt;dlfcn.h&gt;
<br>
&nbsp;&nbsp;typedef void (*tConnect)(int * pArgc, char * * pArgv[]);
<br>
&nbsp;&nbsp;void load(int * pArgc, char * * pArgv[]);
<br>
}
<br>
<p>void load(int * pArgc, char * * pArgv[])
<br>
{
<br>
&nbsp;&nbsp;printf(&quot;ENTER load\n&quot;); fflush(0);
<br>
<p>&nbsp;&nbsp;dlerror();
<br>
&nbsp;&nbsp;char const * const libName = &quot;liba1lib.so&quot;;
<br>
&nbsp;&nbsp;void * const result = dlopen(libName, RTLD_LAZY | RTLD_LOCAL);
<br>
&nbsp;&nbsp;if (result == 0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Failed to load library %s error = %s\n&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libName, dlerror()); fflush(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;char const * const symbolName = &quot;connect&quot;;
<br>
&nbsp;&nbsp;void * symbol = dlsym(result, symbolName);
<br>
&nbsp;&nbsp;if (symbol == 0)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;Failed to load symbol %s from %s error = %s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;symbolName, libName, dlerror()); fflush(0);
<br>
&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;((tConnect)symbol)(pArgc, pArgv);
<br>
&nbsp;&nbsp;printf(&quot;DONE load\n&quot;); fflush(0);
<br>
&nbsp;&nbsp;return;
<br>
}
<br>
<p>main.cpp built as &quot;a3exec&quot; using g++
<br>
<p>extern &quot;C&quot; {
<br>
&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;void load(int * pArgc, char * * pArgv[]);
<br>
}
<br>
<p>int main(int argc, char * argv[])
<br>
{
<br>
&nbsp;&nbsp;printf(&quot;ENTER main\n&quot;);
<br>
&nbsp;&nbsp;load(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;printf(&quot;EXIT main\n&quot;);
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Thanks Nev
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12767.php">Francesco Iannone: "Re: [OMPI users] Openpi 1.4.1 PGI 10.2.1 libpgnuma issue"</a>
<li><strong>Previous message:</strong> <a href="12765.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and CentOS"</a>
<li><strong>In reply to:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
