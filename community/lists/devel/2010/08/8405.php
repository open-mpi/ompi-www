<?
$subject_val = "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 13:44:20 2010" -->
<!-- isoreceived="20100827174420" -->
<!-- sent="Fri, 27 Aug 2010 10:44:03 -0700" -->
<!-- isosent="20100827174403" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C77F963.2000503_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C77AFB3.7010101_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 13:44:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8406.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Previous message:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>Thanks, your explanation makes sense (intersection of ILP32 and V9 ISA 
<br>
yields V8+ ABI).
<br>
<p>When updating the README, please also consider my posting regarding the 
<br>
recommended flags for the Sun C compiler, which are causing warnings 
<br>
from recent Sun compilers:  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8334.php">http://www.open-mpi.org/community/lists/devel/2010/08/8334.php</a>
<br>
<p>-Paul
<br>
<p>Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; Paul, I believe you are right.  I was referencing information from 
</span><br>
<span class="quotelev1">&gt; here <a href="http://gcc.gnu.org/onlinedocs/gcc/SPARC-Options.html">http://gcc.gnu.org/onlinedocs/gcc/SPARC-Options.html</a>  From this 
</span><br>
<span class="quotelev1">&gt; site, I also read the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;With -mv8plus, GCC generates code for the SPARC-V8+ ABI. The 
</span><br>
<span class="quotelev1">&gt; difference from the V8 ABI is that the global and out registers are 
</span><br>
<span class="quotelev1">&gt; considered 64-bit wide. This is enabled by default on Solaris in 
</span><br>
<span class="quotelev1">&gt; 32-bit mode for all SPARC-V9 processors.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, by compiling in 32-bit mode with mcpu=v9, we get the same ABI.  I 
</span><br>
<span class="quotelev1">&gt; experimented with both &quot;-mcpu=v9&quot; and &quot;-mv8plus -Wa,-xarch=v8plus&quot; and 
</span><br>
<span class="quotelev1">&gt; the results were the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # file orterun
</span><br>
<span class="quotelev1">&gt; release-v8/bin/orterun: ELF 32-bit MSB executable SPARC32PLUS Version 
</span><br>
<span class="quotelev1">&gt; 1, V8+ Required, dynamically linked, not stripped
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/26/10 14:23, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking into this issue.  Can you explain for me why V8+ 
</span><br>
<span class="quotelev2">&gt;&gt; is OK w/ the Sun C complier, but V9 is required w/ gcc?  I am 
</span><br>
<span class="quotelev2">&gt;&gt; guessing that one is an ABI flag and the other is a CPU flag, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P.S.
</span><br>
<span class="quotelev2">&gt;&gt; The V8+ vs V9 ABI differences are described at 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://developers.sun.com/solaris/articles/sparcv9abi.html">http://developers.sun.com/solaris/articles/sparcv9abi.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have dug a little more into this.  I am now just planning to fix 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the README to match
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure message.  In short, use CFLAGS=&quot;-mcpu=v9&quot;.  It turns 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out this change
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was made in the configure code, but the README was never updated.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work properly for all cases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 8/25/2010 6:53 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the message below I fouled up some cut-and-paste.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please mentally replace
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXX=g++-4.3.3 CFLAGS=-mv8plus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   CC=gcc-4.3.3 CXX=g++-4.3.3  CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXXFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Trying Rolf's suggestion, I configure 1.4.3rc1 with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; CXXFLAGS=&quot;-mv8plus 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I find that I get configure past the v8+/v9 Assembler ABI probe 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (but didn't wait for the full configure to run).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Another datapoint in favor of #2 is that I can successfully build 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.4.3rc1 w/ gcc-4.3.3 when I configure with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CXX=g++-4.3.3 CFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, here is MY summary:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + For gcc-4.3.3 README is providing correct information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + For gcc-3.3.2 README is providing INcorrect information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + For both gcc versions configure provides correct info on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failure, but following it prevents using the V8+ ABI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My suggestion fix:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + Edit README and configure both to suggest &quot;-mv8plus 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Wa,-xarch=v8plus&quot; as that should be correct for either compiler 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; version.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Paul, is it possible for you to try one more thing.  Can you 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; reconfigure with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think this will get past the configure test as the configure 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; test is compiling a piece
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; of assembly, and for some reason, the -mv8plus is not finding its 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; way to the assembler.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If that works, then we eliminate #2 on your list below, and have 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to decide between
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1 and #3.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 08/25/10 15:56, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In both 1.5rc5 and 1.4.3rc1, README says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  -xarch=v8plus for the Sun compilers, -mv8plus for GCC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, the -mv8plus flag DOES NOT work for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The following occurs for both 1.5rc5 and 1.4.3rc1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PARTICULAR PURPOSE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** Assembler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; checking if have Sparc v8+/v9 support... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: Sparc v8 target is not supported in this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; release of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: You must specify the target architecture v8plus
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS, CXXFLAGS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 32 bit mode on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: WARNING: Sparc processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure: error: Can not continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Following the recommendation from configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; DOES work for both of the current RCs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, I see a few possibilities:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1) -mv8plus SHOULD work (as -xarch=v8plus appears to w/ Suc C 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 5.10) but configure is unconditionally too strict.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2) My gcc is older than other have tested and configure is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mistakenly thinking the ABI is wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3) -mcpu=v9 is the proper incantation and README needs correction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No matter which of the above is correct, I suspect REAME and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; configure need to give the user the same information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.S.  I can provide temporary machine access if needed to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; resolve this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.P.S.  I am /still/ not finished testing all the platforms 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; available to me ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8406.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Previous message:</strong> <a href="8404.php">Ralf Wildenhues: "Re: [OMPI devel] &quot;make check&quot; (libtool) failure on Linux/ppc w/ XLC (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8403.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
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
