<?
$subject_val = "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 21 07:55:17 2007" -->
<!-- isoreceived="20071121125517" -->
<!-- sent="Wed, 21 Nov 2007 07:55:11 -0500" -->
<!-- isosent="20071121125511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard" -->
<!-- id="D5BFD761-FCCA-4647-AF31-3428960BF031_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A3855008-1120-42A0-B67E-609C23C6BC86_at_Princeton.EDU" -->
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
<strong>Date:</strong> 2007-11-21 07:55:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Previous message:</strong> <a href="4498.php">Jeff Squyres: "Re: [OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>In reply to:</strong> <a href="4493.php">Mark Dobossy: "[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try also adding CCASFLAGS=-no-multibyte-chars?
<br>
<p><p>On Nov 20, 2007, at 2:45 PM, Mark Dobossy wrote:
<br>
<p><span class="quotelev1">&gt; I am running into some roadblocks in compiling OpenMPI 1.2.4 using  
</span><br>
<span class="quotelev1">&gt; the latest Intel Compilers (icc, icpc, ifort) version 10.1.006 on OS  
</span><br>
<span class="quotelev1">&gt; X Leopard (10.5.1).  Using the last revision of the intel compilers  
</span><br>
<span class="quotelev1">&gt; (version 10.0.20) works, but I need the 10.1 compilers to fix  
</span><br>
<span class="quotelev1">&gt; compilation of the code I am trying to parallelize, so I need to get  
</span><br>
<span class="quotelev1">&gt; everything working with 10.1.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I issue my standard ./configure line:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi --with-fortran --enable- 
</span><br>
<span class="quotelev1">&gt; shared --disable-static --with-xgrid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; None of the test c or c++ programs can be compiled, due to a locale  
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; Catastrophic error: could not set locale &quot;&quot; to allow processing of  
</span><br>
<span class="quotelev1">&gt; multibyte characters
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a problem that intel seems to know about, and they have  
</span><br>
<span class="quotelev1">&gt; suggested adding a -no-multibyte-chars flag to fix it.  When I add  
</span><br>
<span class="quotelev1">&gt; the -no-multibyte-chars flag (via CFLAGS=-no-multibyte-chars  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-no-multibyte-chars), the configure script runs  
</span><br>
<span class="quotelev1">&gt; successfully.  However, when I then try to compile, I fail with the  
</span><br>
<span class="quotelev1">&gt; following when making asm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; source='asm.c' object='asm.lo' libtool=yes \
</span><br>
<span class="quotelev1">&gt; 	DEPDIR=.deps depmode=none /bin/sh ../../config/depcomp \
</span><br>
<span class="quotelev1">&gt; 	/bin/sh ../../libtool --tag=CC   --mode=compile /Users/mark/Desktop/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4/config/compile icc -DHAVE_CONFIG_H -I. -I../../opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../orte/include -I../../ompi/include   -I../..  - 
</span><br>
<span class="quotelev1">&gt; D_REENTRANT  -O3 -DNDEBUG -no-multibyte-chars -finline-functions - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -restrict  -c -o asm.lo asm.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile  
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../ompi/include -I../.. -D_REENTRANT -O3 -DNDEBUG -no-multibyte- 
</span><br>
<span class="quotelev1">&gt; chars -finline-functions -fno-strict-aliasing -restrict -c asm.c  - 
</span><br>
<span class="quotelev1">&gt; fno-common -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.s
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.s
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool   --mode=compile /Users/mark/Desktop/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict -c -o atomic-asm.lo  
</span><br>
<span class="quotelev1">&gt; atomic-asm.s
</span><br>
<span class="quotelev1">&gt; libtool: compile:  /Users/mark/Desktop/openmpi-1.2.4/config/compile  
</span><br>
<span class="quotelev1">&gt; icc -O3 -DNDEBUG -no-multibyte-chars -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -c atomic-asm.s  -fno-common -DPIC -o .libs/ 
</span><br>
<span class="quotelev1">&gt; atomic-asm.o
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=CC   --mode=link /Users/mark/Desktop/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4/config/compile icc  -O3 -DNDEBUG -no-multibyte-chars - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing -restrict   -export-dynamic    
</span><br>
<span class="quotelev1">&gt; -Wl,-u,_munmap -Wl,-multiply_defined,suppress -o libasm.la  asm.lo  
</span><br>
<span class="quotelev1">&gt; atomic-asm.lo  -lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: ar cru .libs/libasm.a .libs/asm.o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; ar: .libs/atomic-asm.o: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libasm.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached to this email are two tar/gzipped files.  The first,  
</span><br>
<span class="quotelev1">&gt; &quot;openMPI_config_fail.tgz&quot; contains the config.log, and output from ./ 
</span><br>
<span class="quotelev1">&gt; configure, if I do not specify the -no-multibyte-chars option.  The  
</span><br>
<span class="quotelev1">&gt; second, openMPI_make_fail.tgz, contains the config.log, ./configure  
</span><br>
<span class="quotelev1">&gt; output, and make output, if I do specify -no-multibyte-chars.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any feedback on how to solve this issue would be greatly  
</span><br>
<span class="quotelev1">&gt; appreciated.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;openMPI_config_fail.tgz&gt;&lt;openMPI_make_fail.tgz&gt;&lt;mime- 
</span><br>
<span class="quotelev1">&gt; attachment.txt&gt;&lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="4500.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] openmpi-sessions-userid directories"</a>
<li><strong>Previous message:</strong> <a href="4498.php">Jeff Squyres: "Re: [OMPI users] reg. heterogeneous cluster confguration"</a>
<li><strong>In reply to:</strong> <a href="4493.php">Mark Dobossy: "[OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
<li><strong>Reply:</strong> <a href="4504.php">Mark Dobossy: "Re: [OMPI users] Problems compiling 1.2.4 using Intel Compiler 10.1.006 on Leopard"</a>
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
