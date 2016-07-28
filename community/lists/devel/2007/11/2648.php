<?
$subject_val = "Re: [OMPI devel] === CREATE FAILURE ===";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 19 21:20:43 2007" -->
<!-- isoreceived="20071120022043" -->
<!-- sent="Mon, 19 Nov 2007 21:20:28 -0500" -->
<!-- isosent="20071120022028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] === CREATE FAILURE ===" -->
<!-- id="2A777F67-E0EA-4E00-A0B7-2A00CC424EF3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200711200205.lAK25Dq0007734_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] === CREATE FAILURE ===<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-19 21:20:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Previous message:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Maybe in reply to:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2760.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch will fix the problem -- the OMPI_VAR_SCOPE stuff didn't  
<br>
make it over to the v1.2 branch:
<br>
<p>Index: config/ompi_config_asm.m4
<br>
===================================================================
<br>
--- config/ompi_config_asm.m4	(revision 16740)
<br>
+++ config/ompi_config_asm.m4	(working copy)
<br>
@@ -801,7 +801,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# OS X Leopard ld bus errors if you have &quot;-g&quot; in the link line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# with our assembly (!).  So remove it from CCASFLAGS if it's
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# there (and we're on Leopard).
<br>
-    OMPI_VAR_SCOPE_PUSH([ompi_config_asm_flags_new  
<br>
ompi_config_asm_flag])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([if need to remove -g from CCASFLAGS])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case &quot;$host&quot; in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*-apple-darwin9.0*)
<br>
@@ -817,7 +816,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([no])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
-    OMPI_VAR_SCOPE_POP
<br>
+    unset ompi_config_asm_flags_new ompi_config_asm_flag
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([whether to enable smp locks])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_ARG_ENABLE([smp-locks],
<br>
<p><p><p>On Nov 19, 2007, at 9:05 PM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status
</span><br>
<span class="quotelev1">&gt;       ./configure --enable-dist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Start time: Mon Nov 19 21:00:11 EST 2007
</span><br>
<span class="quotelev1">&gt; End time:   Mon Nov 19 21:05:13 EST 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; checking size of ssize_t... 4
</span><br>
<span class="quotelev1">&gt; checking for ptrdiff_t... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking size of ptrdiff_t... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of char... 1
</span><br>
<span class="quotelev1">&gt; checking alignment of short... 2
</span><br>
<span class="quotelev1">&gt; checking alignment of wchar_t... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of int... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of long... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of long long... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of float... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of double... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of long double... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of void *... 4
</span><br>
<span class="quotelev1">&gt; checking for C bool type... no
</span><br>
<span class="quotelev1">&gt; checking for inline... __inline__
</span><br>
<span class="quotelev1">&gt; checking for C/C++ restrict keyword... __restrict
</span><br>
<span class="quotelev1">&gt; checking for weak symbol support... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for g++... g++
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether g++ accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking dependency style of g++... gcc3
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... g++ -E
</span><br>
<span class="quotelev1">&gt; checking for the C++ compiler vendor... gnu
</span><br>
<span class="quotelev1">&gt; checking if C++ compiler works... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING: -g has been added to CXXFLAGS (--enable-debug)
</span><br>
<span class="quotelev1">&gt; checking if g++ supports -Wno-long-double... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: -Wall -Wundef -Wno-long-long has been added to  
</span><br>
<span class="quotelev1">&gt; CXXFLAGS (--enable-picky)
</span><br>
<span class="quotelev1">&gt; checking if g++ supports -finline-functions... yes
</span><br>
<span class="quotelev1">&gt; configure: WARNING:  -finline-functions has been added to CXXFLAGS
</span><br>
<span class="quotelev1">&gt; checking if want C++ exception handling... no
</span><br>
<span class="quotelev1">&gt; checking if C and C++ are link compatible... yes
</span><br>
<span class="quotelev1">&gt; checking for C++ template_repository_directory... not used
</span><br>
<span class="quotelev1">&gt; checking for C++ compiler template parameters... none needed
</span><br>
<span class="quotelev1">&gt; checking if g++ supports __builtin_expect... yes
</span><br>
<span class="quotelev1">&gt; checking if g++ supports __builtin_prefetch... yes
</span><br>
<span class="quotelev1">&gt; checking if g++ supports const_cast&lt;&gt; properly... yes
</span><br>
<span class="quotelev1">&gt; checking for C++ optimization flags... -g -Wall -Wundef -Wno-long- 
</span><br>
<span class="quotelev1">&gt; long -finline-functions
</span><br>
<span class="quotelev1">&gt; checking for bool... yes
</span><br>
<span class="quotelev1">&gt; checking size of bool... 1
</span><br>
<span class="quotelev1">&gt; checking alignment of bool... 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of gcc... gcc3
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /bin/grep -F
</span><br>
<span class="quotelev1">&gt; ./configure: line 24662: syntax error near unexpected token  
</span><br>
<span class="quotelev1">&gt; `ompi_config_asm_flags_new'
</span><br>
<span class="quotelev1">&gt; ./configure: line 24662: `     
</span><br>
<span class="quotelev1">&gt; OMPI_VAR_SCOPE_PUSH(ompi_config_asm_flags_new ompi_config_asm_flag)'
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
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
<li><strong>Next message:</strong> <a href="2649.php">Ralph Castain: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Previous message:</strong> <a href="2647.php">Tim Prins: "Re: [OMPI devel] ORTE process name,, nodeid.."</a>
<li><strong>Maybe in reply to:</strong> <a href="2599.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2760.php">George Bosilca: "Re: [OMPI devel] === CREATE FAILURE ==="</a>
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
