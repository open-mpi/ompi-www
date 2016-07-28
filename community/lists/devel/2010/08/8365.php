<?
$subject_val = "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 18:54:21 2010" -->
<!-- isoreceived="20100825225421" -->
<!-- sent="Wed, 25 Aug 2010 15:53:54 -0700" -->
<!-- isosent="20100825225354" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C759F02.40105_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C759A06.90403_at_lbl.gov" -->
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
<strong>Date:</strong> 2010-08-25 18:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
<li><strong>Previous message:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the message below I fouled up some cut-and-paste.
<br>
Please mentally replace
<br>
<p>And have configured (again stopping after the Assembler ABI probe) with 
<br>
gcc-4.3.3 AND Rolf's flags
<br>
&nbsp;&nbsp;&nbsp;CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 CXX=g++-4.3.3 
<br>
CFLAGS=-mv8plus
<br>
<p>with
<br>
<p>And have configured (again stopping after the Assembler ABI probe) with 
<br>
gcc-4.3.3 AND Rolf's flags
<br>
&nbsp;&nbsp;&nbsp;CC=gcc-4.3.3 CXX=g++-4.3.3  CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; 
<br>
CXXFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
<br>
<p>-Paul
<br>
<p><p><p>Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Trying Rolf's suggestion, I configure 1.4.3rc1 with
</span><br>
<span class="quotelev1">&gt;   CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; CXXFLAGS=&quot;-mv8plus 
</span><br>
<span class="quotelev1">&gt; -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev1">&gt; I find that I get configure past the v8+/v9 Assembler ABI probe (but 
</span><br>
<span class="quotelev1">&gt; didn't wait for the full configure to run).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another datapoint in favor of #2 is that I can successfully build 
</span><br>
<span class="quotelev1">&gt; 1.4.3rc1 w/ gcc-4.3.3 when I configure with
</span><br>
<span class="quotelev1">&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev1">&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev1">&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 
</span><br>
<span class="quotelev1">&gt; CXX=g++-4.3.3 CFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, here is MY summary:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + For gcc-4.3.3 README is providing correct information
</span><br>
<span class="quotelev1">&gt; + For gcc-3.3.2 README is providing INcorrect information
</span><br>
<span class="quotelev1">&gt; + For both gcc versions configure provides correct info on failure, 
</span><br>
<span class="quotelev1">&gt; but following it prevents using the V8+ ABI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My suggestion fix:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Edit README and configure both to suggest &quot;-mv8plus 
</span><br>
<span class="quotelev1">&gt; -Wa,-xarch=v8plus&quot; as that should be correct for either compiler version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul, is it possible for you to try one more thing.  Can you 
</span><br>
<span class="quotelev2">&gt;&gt; reconfigure with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this will get past the configure test as the configure test 
</span><br>
<span class="quotelev2">&gt;&gt; is compiling a piece
</span><br>
<span class="quotelev2">&gt;&gt; of assembly, and for some reason, the -mv8plus is not finding its way 
</span><br>
<span class="quotelev2">&gt;&gt; to the assembler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If that works, then we eliminate #2 on your list below, and have to 
</span><br>
<span class="quotelev2">&gt;&gt; decide between
</span><br>
<span class="quotelev2">&gt;&gt; #1 and #3.
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 08/25/10 15:56, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In both 1.5rc5 and 1.4.3rc1, README says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -xarch=v8plus for the Sun compilers, -mv8plus for GCC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, the -mv8plus flag DOES NOT work for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following occurs for both 1.5rc5 and 1.4.3rc1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software; see the source for copying conditions.  There 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Assembler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if have Sparc v8+/v9 support... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: Sparc v8 target is not supported in this release 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: You must specify the target architecture v8plus
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CXXFLAGS,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bit mode on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: Sparc processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: Can not continue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Following the recommendation from configure:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DOES work for both of the current RCs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I see a few possibilities:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) -mv8plus SHOULD work (as -xarch=v8plus appears to w/ Suc C 5.10) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but configure is unconditionally too strict.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) My gcc is older than other have tested and configure is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mistakenly thinking the ABI is wrong.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) -mcpu=v9 is the proper incantation and README needs correction.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No matter which of the above is correct, I suspect REAME and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure need to give the user the same information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S.  I can provide temporary machine access if needed to resolve this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.P.S.  I am /still/ not finished testing all the platforms 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available to me ;-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8366.php">Tomas Oppelstrup: "[OMPI devel] Checkpoint/restart question"</a>
<li><strong>Previous message:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
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
