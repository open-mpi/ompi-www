<?
$subject_val = "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 17:12:24 2007" -->
<!-- isoreceived="20071126221224" -->
<!-- sent="Mon, 26 Nov 2007 17:12:16 -0500" -->
<!-- isosent="20071126221216" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard" -->
<!-- id="88D26A27-3634-44BD-99DB-B41C602A9C73_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="99CA0551-9BF4-47C0-85C2-6B2126A83651_at_princeton.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-26 17:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Warner Yuen: "Re: [OMPI users] users Digest, Vol 749, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you specify the CCASFLAGS and send the info listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Nov 21, 2007, at 3:15 PM, Mark Dobossy wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the suggestion Jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, that didn't fix the issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 21, 2007, at 7:55 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try also adding CCASFLAGS=-no-multibyte-chars?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2007, at 2:45 PM, Mark Dobossy wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running into some roadblocks in compiling OpenMPI 1.2.4 using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the latest Intel Compilers (icc, icpc, ifort) version 10.1.006 on OS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; X Leopard (10.5.1).  Using the last revision of the intel compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (version 10.0.20) works, but I need the 10.1 compilers to fix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation of the code I am trying to parallelize, so I need to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everything working with 10.1.x.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I issue my standard ./configure line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi --with-fortran --enable-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared --disable-static --with-xgrid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; None of the test c or c++ programs can be compiled, due to a locale
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Catastrophic error: could not set locale &quot;&quot; to allow processing of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multibyte characters
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a problem that intel seems to know about, and they have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggested adding a -no-multibyte-chars flag to fix it.  When I add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the -no-multibyte-chars flag (via CFLAGS=-no-multibyte-chars
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS=-no-multibyte-chars), the configure script runs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully.  However, when I then try to compile, I fail with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following when making asm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source='asm.c' object='asm.lo' libtool=yes \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	/bin/sh ../../libtool --tag=CC   --mode=compile /Users/mark/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Desktop/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.4/config/compile icc -DHAVE_CONFIG_H -I. -I../../opal/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; include -I../../orte/include -I../../ompi/include   -I../..  -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D_REENTRANT  -O3 -DNDEBUG -no-multibyte-chars -finline-functions -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-strict-aliasing -restrict  -c -o asm.lo asm.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I../../ompi/include -I../.. -D_REENTRANT -O3 -DNDEBUG -no-multibyte-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; chars -finline-functions -fno-strict-aliasing -restrict -c asm.c  -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fno-common -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f atomic-asm.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../libtool   --mode=compile /Users/mark/Desktop/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finline-functions -fno-strict-aliasing -restrict -c -o atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; icc -O3 -DNDEBUG -no-multibyte-chars -finline-functions -fno-strict-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aliasing -restrict -c atomic-asm.s  -fno-common -DPIC -o .libs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../libtool --tag=CC   --mode=link /Users/mark/Desktop/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; finline-functions -fno-strict-aliasing -restrict   -export-dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o libasm.la  asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.lo  -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ar: .libs/atomic-asm.o: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached to this email are two tar/gzipped files.  The first,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;openMPI_config_fail.tgz&quot; contains the config.log, and output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from ./
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure, if I do not specify the -no-multibyte-chars option.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; second, openMPI_make_fail.tgz, contains the config.log, ./configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output, and make output, if I do specify -no-multibyte-chars.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any feedback on how to solve this issue would be greatly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated.  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;openMPI_config_fail.tgz&gt;&lt;openMPI_make_fail.tgz&gt;&lt;mime-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachment.txt&gt;&lt;mime-attachment.txt&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4519.php">de Almeida, Valmor F.: "Re: [OMPI users] warning:regcache incompatible with malloc"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Warner Yuen: "Re: [OMPI users] users Digest, Vol 749, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
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
