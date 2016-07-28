<?
$subject_val = "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 09:23:02 2010" -->
<!-- isoreceived="20100826132302" -->
<!-- sent="Thu, 26 Aug 2010 09:22:39 -0400" -->
<!-- isosent="20100826132239" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)" -->
<!-- id="4C766A9F.1040501_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C759F02.40105_at_lbl.gov" -->
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
<strong>Date:</strong> 2010-08-26 09:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Previous message:</strong> <a href="8379.php">Joshua Hursey: "Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>In reply to:</strong> <a href="8365.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I have dug a little more into this.  I am now just planning to fix the 
<br>
README to match
<br>
the configure message.  In short, use CFLAGS=&quot;-mcpu=v9&quot;.  It turns out 
<br>
this change
<br>
was made in the configure code, but the README was never updated.  This 
<br>
should
<br>
work properly for all cases.
<br>
<p>Rolf
<br>
<p>On 8/25/2010 6:53 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; In the message below I fouled up some cut-and-paste.
</span><br>
<span class="quotelev1">&gt; Please mentally replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev1">&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev1">&gt;   CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 
</span><br>
<span class="quotelev1">&gt; CXX=g++-4.3.3 CFLAGS=-mv8plus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev1">&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev1">&gt;   CC=gcc-4.3.3 CXX=g++-4.3.3  CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; 
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Trying Rolf's suggestion, I configure 1.4.3rc1 with
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot; CXXFLAGS=&quot;-mv8plus 
</span><br>
<span class="quotelev2">&gt;&gt; -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev2">&gt;&gt; I find that I get configure past the v8+/v9 Assembler ABI probe (but 
</span><br>
<span class="quotelev2">&gt;&gt; didn't wait for the full configure to run).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another datapoint in favor of #2 is that I can successfully build 
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3rc1 w/ gcc-4.3.3 when I configure with
</span><br>
<span class="quotelev2">&gt;&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev2">&gt;&gt; And have configured (again stopping after the Assembler ABI probe) 
</span><br>
<span class="quotelev2">&gt;&gt; with gcc-4.3.3 AND Rolf's flags
</span><br>
<span class="quotelev2">&gt;&gt;    CC=gcc-4.3.3 CXX=g++-4.3.3 CFLAGS=-mv8plus CC=gcc-4.3.3 
</span><br>
<span class="quotelev2">&gt;&gt; CXX=g++-4.3.3 CFLAGS=-mv8plus
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, here is MY summary:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + For gcc-4.3.3 README is providing correct information
</span><br>
<span class="quotelev2">&gt;&gt; + For gcc-3.3.2 README is providing INcorrect information
</span><br>
<span class="quotelev2">&gt;&gt; + For both gcc versions configure provides correct info on failure, 
</span><br>
<span class="quotelev2">&gt;&gt; but following it prevents using the V8+ ABI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My suggestion fix:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; + Edit README and configure both to suggest &quot;-mv8plus 
</span><br>
<span class="quotelev2">&gt;&gt; -Wa,-xarch=v8plus&quot; as that should be correct for either compiler 
</span><br>
<span class="quotelev2">&gt;&gt; version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul, is it possible for you to try one more thing.  Can you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reconfigure with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=&quot;-mv8plus -Wa,-xarch=v8plus&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this will get past the configure test as the configure test 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is compiling a piece
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of assembly, and for some reason, the -mv8plus is not finding its 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; way to the assembler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that works, then we eliminate #2 on your list below, and have to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decide between
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1 and #3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 08/25/10 15:56, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In both 1.5rc5 and 1.4.3rc1, README says:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Open MPI does not support the Sparc v8 CPU target, which is the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  default on Sun Solaris.  The v8plus (32 bit) or v9 (64 bit)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  targets must be used to build Open MPI on Solaris.  This can be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  done by including a flag in CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  -xarch=v8plus for the Sun compilers, -mv8plus for GCC.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, the -mv8plus flag DOES NOT work for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The following occurs for both 1.5rc5 and 1.4.3rc1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SunOS lem.lbl.gov 5.10 s10_69 sun4u sparc SUNW,Ultra-5_10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ gcc --version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc (GCC) 3.3.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Copyright (C) 2003 Free Software Foundation, Inc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is free software; see the source for copying conditions.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is NO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFLAGS=-mv8plus CXXFLAGS=-mv8plus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** Assembler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking if have Sparc v8+/v9 support... no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: Sparc v8 target is not supported in this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; release of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: You must specify the target architecture v8plus
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: (cc: -xarch=v8plus, gcc: -mcpu=v9) for CFLAGS, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CXXFLAGS,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: FFLAGS, and FCFLAGS to compile Open MPI in 32 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bit mode on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: Sparc processors
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: Can not continue.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Following the recommendation from configure:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  $ [path_to]/configure --disable-mpi-f77 --disable-mpi-f90 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CFLAGS=-mcpu=v9 CXXFLAGS=-mcpu=v9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DOES work for both of the current RCs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, I see a few possibilities:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1) -mv8plus SHOULD work (as -xarch=v8plus appears to w/ Suc C 5.10) 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but configure is unconditionally too strict.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) My gcc is older than other have tested and configure is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mistakenly thinking the ABI is wrong.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3) -mcpu=v9 is the proper incantation and README needs correction.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No matter which of the above is correct, I suspect REAME and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure need to give the user the same information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.S.  I can provide temporary machine access if needed to resolve 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.P.S.  I am /still/ not finished testing all the platforms 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available to me ;-)
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Previous message:</strong> <a href="8379.php">Joshua Hursey: "Re: [OMPI devel] nit-pick: typo in README (1.4.3rc1 and 1.5rc5)"</a>
<li><strong>In reply to:</strong> <a href="8365.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>Reply:</strong> <a href="8388.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
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
