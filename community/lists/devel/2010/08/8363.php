<?
$subject_val = "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 18:06:39 2010" -->
<!-- isoreceived="20100825220639" -->
<!-- sent="Wed, 25 Aug 2010 18:04:48 -0400" -->
<!-- isosent="20100825220448" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C759380.1020907_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C757582.7020707_at_lbl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 18:04:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Paul H. Hargrove: "[OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul, is it possible for you to try one more thing.  Can you reconfigure 
<br>
with
<br>
<p>CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
<br>
<p>I think this will get past the configure test as the configure test is 
<br>
compiling a piece
<br>
of assembly, and for some reason, the -mv8plus is not finding its way to 
<br>
the assembler.
<br>
<p>If that works, then we eliminate #2 on your list below, and have to 
<br>
decide between
<br>
#1 and #3. 
<br>
<p>Rolf
<br>
<p>On 08/25/10 15:56, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; In both 1.5rc5 and 1.4.3rc1, README says:
</span><br>
<span class="quotelev1">&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev1">&gt;  default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev1">&gt;  targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev1">&gt;  done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev1">&gt;  -xarch=v8plus for the Sun compilers, -mv8plus for GCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the -mv8plus flag DOES NOT work for me.
</span><br>
<span class="quotelev1">&gt; The following occurs for both 1.5rc5 and 1.4.3rc1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There 
</span><br>
<span class="quotelev1">&gt; is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev1">&gt; CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; checking if have Sparc v8+/v9 support... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Sparc v8 target is not supported in this release 
</span><br>
<span class="quotelev1">&gt; of Open MPI.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: You must specify the target architecture v8plus
</span><br>
<span class="quotelev1">&gt; configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, 
</span><br>
<span class="quotelev1">&gt; CXXFLAGS,
</span><br>
<span class="quotelev1">&gt; configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 bit 
</span><br>
<span class="quotelev1">&gt; mode on
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Sparc processors
</span><br>
<span class="quotelev1">&gt; configure: error: Can not continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following the recommendation from configure:
</span><br>
<span class="quotelev1">&gt;  $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev1">&gt; CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
</span><br>
<span class="quotelev1">&gt; DOES work for both of the current RCs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I see a few possibilities:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) -mv8plus SHOULD work (as -xarch=v8plus appears to w/ Suc C 5.10) 
</span><br>
<span class="quotelev1">&gt; but configure is unconditionally too strict.
</span><br>
<span class="quotelev1">&gt; OR
</span><br>
<span class="quotelev1">&gt; 2) My gcc is older than other have tested and configure is mistakenly 
</span><br>
<span class="quotelev1">&gt; thinking the ABI is wrong.
</span><br>
<span class="quotelev1">&gt; OR
</span><br>
<span class="quotelev1">&gt; 3) -mcpu=v9 is the proper incantation and README needs correction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No matter which of the above is correct, I suspect REAME and configure 
</span><br>
<span class="quotelev1">&gt; need to give the user the same information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.  I can provide temporary machine access if needed to resolve this.
</span><br>
<span class="quotelev1">&gt; P.P.S.  I am /still/ not finished testing all the platforms available 
</span><br>
<span class="quotelev1">&gt; to me ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Previous message:</strong> <a href="8362.php">Paul H. Hargrove: "[OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>In reply to:</strong> <a href="8359.php">Paul H. Hargrove: "[OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8364.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
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
