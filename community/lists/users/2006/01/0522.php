<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 07:57:42 2006" -->
<!-- isoreceived="20060126125742" -->
<!-- sent="Thu, 26 Jan 2006 07:57:34 -0500" -->
<!-- isosent="20060126125734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown" -->
<!-- id="37332798-F963-4B57-AFE8-244D56E2F566_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="001D8B60-2DF3-4CE5-B656-BCAFB2CE13E5_at_nrl.navy.mil" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-26 07:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like your g95 may not be installed correctly.  Here's the  
<br>
relevant information from the config.log:
<br>
<p>configure:32697: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c conftest.c
<br>
configure:32704: $? = 0
<br>
configure:32714: g95   conftestf.f90 conftest.o -o conftest
<br>
ld: Undefined symbols:
<br>
_fprintf$LDBLStub
<br>
<p>That is, configure tried to compile a .f90 file and link it with a C- 
<br>
compiled .o file (normally, this should work just fine).  In  
<br>
performing the final link, however, it did not find the symbol fprintf 
<br>
().
<br>
<p>This seems to indicate that the g95 compiler was not able to find the  
<br>
C libraries properly.
<br>
<p>Can you verify that everything is installed properly, and that g95 is  
<br>
able to link to C libraries?
<br>
<p><p><p>On Jan 24, 2006, at 3:11 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; Building Open MPI 1.0.1 on a PowerMac running OS X 10.4.4 using
</span><br>
<span class="quotelev1">&gt; 1) Apple gnu compilers from Xcode 2.2.1
</span><br>
<span class="quotelev1">&gt; 2) fink-installed g77
</span><br>
<span class="quotelev1">&gt; 3) latest g95 &quot;G95 (GCC 4.0.1 (g95!) Jan 23 2006)&quot;
</span><br>
<span class="quotelev1">&gt;  (the binary from G95 Home)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv F77 g77
</span><br>
<span class="quotelev1">&gt; setenv FC g95
</span><br>
<span class="quotelev1">&gt; ./configure
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the G95 section of the configure I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gzipped config.log attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I change to the older Fink g95 &quot;G95 (GCC 4.0.2 (g95!) Dec 19  
</span><br>
<span class="quotelev1">&gt; 2005)&quot; I don't see this problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System info:
</span><br>
<span class="quotelev1">&gt; uname -a
</span><br>
<span class="quotelev1">&gt; Darwin 8.4.0 Darwin Kernel Version 8.4.0: Tue Jan  3 18:22:10 PST  
</span><br>
<span class="quotelev1">&gt; 2006; root:xnu-792.6.56.obj~1/RELEASE_PPC Power Macintosh  
</span><br>
<span class="quotelev1">&gt; powerpcgcc --version
</span><br>
<span class="quotelev1">&gt; powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 (Apple Computer, Inc.
</span><br>
<span class="quotelev1">&gt; build 5026)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g++ --version
</span><br>
<span class="quotelev1">&gt; powerpc-apple-darwin8-g++-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc.  
</span><br>
<span class="quotelev1">&gt; build 5250)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  g77 --version
</span><br>
<span class="quotelev1">&gt; GNU Fortran (GCC) 3.4.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details on latest G95 build:
</span><br>
<span class="quotelev1">&gt; g95 -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target:
</span><br>
<span class="quotelev1">&gt; Configured with: /Users/andy/g95/osx/gcc.osx/configure --enable- 
</span><br>
<span class="quotelev1">&gt; languages=c
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.0.1 (g95!) Jan 23 2006
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Details on older Fink g95 build:
</span><br>
<span class="quotelev1">&gt; g95 -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target:
</span><br>
<span class="quotelev1">&gt; Configured with: ../configure --prefix=/sw/lib/gcc-lib/powerpc- 
</span><br>
<span class="quotelev1">&gt; apple-darwin8/4.0.2 --with-gmp=/sw --enable-languages=c --disable- 
</span><br>
<span class="quotelev1">&gt; checking --with-included-gettext
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.0.2 (g95!) Dec 19 2005
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Glenn Morris: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0519.php">Michael Kluskens: "[O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0525.php">Kraig Winters: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
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
