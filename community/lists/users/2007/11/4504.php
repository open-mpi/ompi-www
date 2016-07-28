<?
$subject_val = "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 15:15:21 2007" -->
<!-- isoreceived="20071121201521" -->
<!-- sent="Wed, 21 Nov 2007 15:15:00 -0500" -->
<!-- isosent="20071121201500" -->
<!-- name="Mark Dobossy" -->
<!-- email="mdobossy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard" -->
<!-- id="99CA0551-9BF4-47C0-85C2-6B2126A83651_at_princeton.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D5BFD761-FCCA-4647-AF31-3428960BF031_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard<br>
<strong>From:</strong> Mark Dobossy (<em>mdobossy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-21 15:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the suggestion Jeff.
<br>
<p>Unfortunately, that didn't fix the issue.
<br>
<p>-Mark
<br>
<p>On Nov 21, 2007, at 7:55 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Can you try also adding CCASFLAGS=-no-multibyte-chars?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2007, at 2:45 PM, Mark Dobossy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running into some roadblocks in compiling OpenMPI 1.2.4 using
</span><br>
<span class="quotelev2">&gt;&gt; the latest Intel Compilers (icc, icpc, ifort) version 10.1.006 on OS
</span><br>
<span class="quotelev2">&gt;&gt; X Leopard (10.5.1).  Using the last revision of the intel compilers
</span><br>
<span class="quotelev2">&gt;&gt; (version 10.0.20) works, but I need the 10.1 compilers to fix
</span><br>
<span class="quotelev2">&gt;&gt; compilation of the code I am trying to parallelize, so I need to get
</span><br>
<span class="quotelev2">&gt;&gt; everything working with 10.1.x.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I issue my standard ./configure line:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/openmpi --with-fortran --enable-
</span><br>
<span class="quotelev2">&gt;&gt; shared --disable-static --with-xgrid
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; None of the test c or c++ programs can be compiled, due to a locale
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt; Catastrophic error: could not set locale &quot;&quot; to allow processing of
</span><br>
<span class="quotelev2">&gt;&gt; multibyte characters
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a problem that intel seems to know about, and they have
</span><br>
<span class="quotelev2">&gt;&gt; suggested adding a -no-multibyte-chars flag to fix it.  When I add
</span><br>
<span class="quotelev2">&gt;&gt; the -no-multibyte-chars flag (via CFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev2">&gt;&gt; CXXFLAGS=-no-multibyte-chars), the configure script runs
</span><br>
<span class="quotelev2">&gt;&gt; successfully.  However, when I then try to compile, I fail with the
</span><br>
<span class="quotelev2">&gt;&gt; following when making asm:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in asm
</span><br>
<span class="quotelev2">&gt;&gt; source='asm.c' object='asm.lo' libtool=yes \
</span><br>
<span class="quotelev2">&gt;&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev2">&gt;&gt; 	/bin/sh ../../libtool --tag=CC   --mode=compile /Users/mark/Desktop/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.4/config/compile icc -DHAVE_CONFIG_H -I. -I../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../orte/include -I../../ompi/include   -I../..  -
</span><br>
<span class="quotelev2">&gt;&gt; D_REENTRANT  -O3 -DNDEBUG -no-multibyte-chars -finline-functions -
</span><br>
<span class="quotelev2">&gt;&gt; fno-strict-aliasing -restrict  -c -o asm.lo asm.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile
</span><br>
<span class="quotelev2">&gt;&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../ompi/include -I../.. -D_REENTRANT -O3 -DNDEBUG -no-multibyte-
</span><br>
<span class="quotelev2">&gt;&gt; chars -finline-functions -fno-strict-aliasing -restrict -c asm.c  -
</span><br>
<span class="quotelev2">&gt;&gt; fno-common -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev2">&gt;&gt; rm -f atomic-asm.s
</span><br>
<span class="quotelev2">&gt;&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.s
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool   --mode=compile /Users/mark/Desktop/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -restrict -c -o atomic-asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.s
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile
</span><br>
<span class="quotelev2">&gt;&gt; icc -O3 -DNDEBUG -no-multibyte-chars -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -restrict -c atomic-asm.s  -fno-common -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.o
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../libtool --tag=CC   --mode=link /Users/mark/Desktop/
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars -
</span><br>
<span class="quotelev2">&gt;&gt; finline-functions -fno-strict-aliasing -restrict   -export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o libasm.la  asm.lo
</span><br>
<span class="quotelev2">&gt;&gt; atomic-asm.lo  -lutil
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
</span><br>
<span class="quotelev2">&gt;&gt; ar: .libs/atomic-asm.o: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached to this email are two tar/gzipped files.  The first,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;openMPI_config_fail.tgz&quot; contains the config.log, and output from ./
</span><br>
<span class="quotelev2">&gt;&gt; configure, if I do not specify the -no-multibyte-chars option.  The
</span><br>
<span class="quotelev2">&gt;&gt; second, openMPI_make_fail.tgz, contains the config.log, ./configure
</span><br>
<span class="quotelev2">&gt;&gt; output, and make output, if I do specify -no-multibyte-chars.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any feedback on how to solve this issue would be greatly
</span><br>
<span class="quotelev2">&gt;&gt; appreciated.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openMPI_config_fail.tgz&gt;&lt;openMPI_make_fail.tgz&gt;&lt;mime-
</span><br>
<span class="quotelev2">&gt;&gt; attachment.txt&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4505.php">Brian Dobbins: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4503.php">Brock Palen: "[OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4499.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4518.php">Jeff Squyres: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
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
