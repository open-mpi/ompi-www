<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 26 11:36:00 2006" -->
<!-- isoreceived="20060126163600" -->
<!-- sent="Thu, 26 Jan 2006 08:35:51 -0800" -->
<!-- isosent="20060126163551" -->
<!-- name="Kraig Winters" -->
<!-- email="kraig_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown" -->
<!-- id="31F7DADD-3565-4AE0-BB4B-8519C742E158_at_coast.ucsd.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="37332798-F963-4B57-AFE8-244D56E2F566_at_open-mpi.org" -->
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
<strong>From:</strong> Kraig Winters (<em>kraig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-26 11:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that
<br>
<span class="quotelev1">&gt; ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _fprintf$LDBLStub
</span><br>
can be fixed by adding -L/usr/lib -lSystemStubs to your link statement.
<br>
For xlf, this can be done once and for all in the compiler configuration
<br>
file. I don't know if something similar can be done for g95. This  
<br>
problem
<br>
seems to have started w/ 10.4.
<br>
Kraig
<br>
<p>On Jan 26, 2006, at 4:57 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; It looks like your g95 may not be installed correctly.  Here's the
</span><br>
<span class="quotelev1">&gt; relevant information from the config.log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:32697: gcc -O3 -DNDEBUG -fno-strict-aliasing -I. -c  
</span><br>
<span class="quotelev1">&gt; conftest.c
</span><br>
<span class="quotelev1">&gt; configure:32704: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:32714: g95   conftestf.f90 conftest.o -o conftest
</span><br>
<span class="quotelev1">&gt; ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _fprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, configure tried to compile a .f90 file and link it with a C-
</span><br>
<span class="quotelev1">&gt; compiled .o file (normally, this should work just fine).  In
</span><br>
<span class="quotelev1">&gt; performing the final link, however, it did not find the symbol fprintf
</span><br>
<span class="quotelev1">&gt; ().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to indicate that the g95 compiler was not able to find the
</span><br>
<span class="quotelev1">&gt; C libraries properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you verify that everything is installed properly, and that g95 is
</span><br>
<span class="quotelev1">&gt; able to link to C libraries?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2006, at 3:11 PM, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Building Open MPI 1.0.1 on a PowerMac running OS X 10.4.4 using
</span><br>
<span class="quotelev2">&gt;&gt; 1) Apple gnu compilers from Xcode 2.2.1
</span><br>
<span class="quotelev2">&gt;&gt; 2) fink-installed g77
</span><br>
<span class="quotelev2">&gt;&gt; 3) latest g95 &quot;G95 (GCC 4.0.1 (g95!) Jan 23 2006)&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  (the binary from G95 Home)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv F77 g77
</span><br>
<span class="quotelev2">&gt;&gt; setenv FC g95
</span><br>
<span class="quotelev2">&gt;&gt; ./configure
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the G95 section of the configure I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; checking size of FORTRAN integer(selected_int_kind(2))... unknown
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gzipped config.log attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I change to the older Fink g95 &quot;G95 (GCC 4.0.2 (g95!) Dec 19
</span><br>
<span class="quotelev2">&gt;&gt; 2005)&quot; I don't see this problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System info:
</span><br>
<span class="quotelev2">&gt;&gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Darwin 8.4.0 Darwin Kernel Version 8.4.0: Tue Jan  3 18:22:10 PST
</span><br>
<span class="quotelev2">&gt;&gt; 2006; root:xnu-792.6.56.obj~1/RELEASE_PPC Power Macintosh
</span><br>
<span class="quotelev2">&gt;&gt; powerpcgcc --version
</span><br>
<span class="quotelev2">&gt;&gt; powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 (Apple Computer, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; build 5026)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g++ --version
</span><br>
<span class="quotelev2">&gt;&gt; powerpc-apple-darwin8-g++-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; build 5250)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  g77 --version
</span><br>
<span class="quotelev2">&gt;&gt; GNU Fortran (GCC) 3.4.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details on latest G95 build:
</span><br>
<span class="quotelev2">&gt;&gt; g95 -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target:
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: /Users/andy/g95/osx/gcc.osx/configure --enable-
</span><br>
<span class="quotelev2">&gt;&gt; languages=c
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.0.1 (g95!) Jan 23 2006
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Details on older Fink g95 build:
</span><br>
<span class="quotelev2">&gt;&gt; g95 -v
</span><br>
<span class="quotelev2">&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt; Target:
</span><br>
<span class="quotelev2">&gt;&gt; Configured with: ../configure --prefix=/sw/lib/gcc-lib/powerpc-
</span><br>
<span class="quotelev2">&gt;&gt; apple-darwin8/4.0.2 --with-gmp=/sw --enable-languages=c --disable-
</span><br>
<span class="quotelev2">&gt;&gt; checking --with-included-gettext
</span><br>
<span class="quotelev2">&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt; gcc version 4.0.2 (g95!) Dec 19 2005
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;config.log.gz&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Jeff Squyres: "Re: [O-MPI users] Trouble combining OpenMPI and OpenMP"</a>
<li><strong>In reply to:</strong> <a href="0522.php">Jeff Squyres: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
<li><strong>Reply:</strong> <a href="0526.php">Michael Kluskens: "Re: [O-MPI users] latest g95: size of FORTRAN integer(selected_int_kind(2))... unknown"</a>
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
