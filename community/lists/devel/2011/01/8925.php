<?
$subject_val = "Re: [OMPI devel] dummy component warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 17:58:54 2011" -->
<!-- isoreceived="20110125225854" -->
<!-- sent="Tue, 25 Jan 2011 15:58:50 -0700 (MST)" -->
<!-- isosent="20110125225850" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dummy component warnings" -->
<!-- id="alpine.OSX.2.00.1101251555430.58734_at_panthera.lanl.gov" -->
<!-- charset="ISO-8859-7" -->
<!-- inreplyto="4D3F53F2.5020900_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dummy component warnings<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 17:58:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, its a feature, not a bug. Its strange that it works without the -xassembler when using gcc 4.2.
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<p>On Tue, 25 Jan 2011, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I found a root cause and a simpler/better simple fix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From manpage for gcc on Linux:
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;&#160; file.s
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Assembler code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And from Darwin:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;&#160; file.s
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Assembler code.&#160; Apple's version of GCC runs the preprocessor on these files as well as
</span><br>
<span class="quotelev1">&gt;       &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; those ending in .S.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the problem/difference is that Apple insists on passing the .s through the preprocessor by default when FSF's gcc does not.
</span><br>
<span class="quotelev1">&gt; The fix appears to be an explict &quot;-xassembler&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat foo.s
</span><br>
<span class="quotelev1">&gt; .text
</span><br>
<span class="quotelev1">&gt; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt; .globl _gsym_test_func
</span><br>
<span class="quotelev1">&gt; _gsym_test_func:
</span><br>
<span class="quotelev1">&gt; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -std=c99 -c&#160; foo.s
</span><br>
<span class="quotelev1">&gt; foo.s:2:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt; foo.s:5:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc -std=c99 -c -xassembler foo.s
</span><br>
<span class="quotelev1">&gt; [no output]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/25/2011 2:48 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;       Ok, then there are two possible simple fixes:
</span><br>
<span class="quotelev1">&gt;       &#160;- Strip -std from CCASFLAGS if Apple's gcc 4.0 is encountered, or
</span><br>
<span class="quotelev1">&gt;       &#160;- Always strip -std from CCASFLAGS. The flag shouln't have any effect when compiling assembly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       -Nathan
</span><br>
<span class="quotelev1">&gt;       HPC-3, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Tue, 25 Jan 2011, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I can confirm that the problem appears specific to Apple's compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Since the failure was reported to be configure-time, that took less time to check up on that I'd
</span><br>
<span class="quotelev1">&gt;             expected.
</span><br>
<span class="quotelev1">&gt;             What I find is that gcc-4.0.0 on Linux/x86 *does* fail the &quot;#_gsym_test_func&quot; test, but for the RIGHT
</span><br>
<span class="quotelev1">&gt;             reason, and then goes on to
</span><br>
<span class="quotelev1">&gt;             pass the next test case with the proper form of global symbol.&#160; The relevent portion of config.log
</span><br>
<span class="quotelev1">&gt;             appears below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             configure:27399: checking prefix for global symbol labels
</span><br>
<span class="quotelev1">&gt;             configure: trying _
</span><br>
<span class="quotelev1">&gt;             configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -c conftest.s
</span><br>
<span class="quotelev2">&gt;             &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27442: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -I. conftest_c.c -c
</span><br>
<span class="quotelev2">&gt;             &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27450: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing conftest_c.o
</span><br>
<span class="quotelev1">&gt;             conftest.o -o conftest&#160;&#160;&#160; &gt;
</span><br>
<span class="quotelev1">&gt;             conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27458: $? = 1
</span><br>
<span class="quotelev1">&gt;             conftest_c.o: In function `main':
</span><br>
<span class="quotelev1">&gt;             conftest_c.o(.text+0xd): undefined reference to `gsym_test_func'
</span><br>
<span class="quotelev1">&gt;             collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;             configure: failed C program was:
</span><br>
<span class="quotelev1">&gt;             #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt;             extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt;             #endif
</span><br>
<span class="quotelev1">&gt;             void gsym_test_func(void);
</span><br>
<span class="quotelev1">&gt;             #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             #endif
</span><br>
<span class="quotelev1">&gt;             int
</span><br>
<span class="quotelev1">&gt;             main()
</span><br>
<span class="quotelev1">&gt;             {
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160; gsym_test_func();
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160; return 0;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             configure: failed ASM program was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             .text
</span><br>
<span class="quotelev1">&gt;             # _gsym_test_func
</span><br>
<span class="quotelev1">&gt;             .globl _gsym_test_func
</span><br>
<span class="quotelev1">&gt;             _gsym_test_func:
</span><br>
<span class="quotelev1">&gt;             # _gsym_test_func
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             configure: trying
</span><br>
<span class="quotelev1">&gt;             configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -c conftest.s
</span><br>
<span class="quotelev2">&gt;             &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27442: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -I. conftest_c.c -c
</span><br>
<span class="quotelev2">&gt;             &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27450: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing conftest_c.o
</span><br>
<span class="quotelev1">&gt;             conftest.o -o conftest&#160;&#160;&#160; &gt;
</span><br>
<span class="quotelev1">&gt;             conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt;             configure:27458: $? = 0
</span><br>
<span class="quotelev1">&gt;             configure:27496: result:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On 1/25/2011 2:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160; I have gcc-4.0.0 on Linux built from unmodified FSF sources.
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160; I will try to reproduce.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160; On 1/25/2011 1:47 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Looks like a bug in Apple's gcc 4.0. I tried the source with gcc 3.4.6 and gcc 4.1.2 on Linux
</span><br>
<span class="quotelev1">&gt;             and did not
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; see that error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I will take a look and see if there is a simple fix to get around this apparent compiler bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; On Tue, 25 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Short version
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; =============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MTT turned up a problem with -std=gnu99 on OS X Leopard, which ships with the gcc 4.0
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; compiler (OS X Snow Leopard ships with gcc 4.2, and doesn't have a problem).&#160; Does
</span><br>
<span class="quotelev1">&gt;             anyone
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; have gcc 4.0 on Linux?&#160; I'm wondering if the same problem would occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; More details:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; =============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; From our friends at Absoft:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The -std=gnu99 is causing the problem when used with gcc-4.0 ( the default on Leopard
</span><br>
<span class="quotelev1">&gt;             with
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Apple's XCode 3.1 development tools ):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; BigMac:ompi cag$ gcc --version -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; BigMac:ompi cag$ gcc-4.0 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; BigMac:ompi cag$ gcc-4.2 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; BigMac:ompi cag$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; On Snow Leopard with Apple's XCode 3.2 development tools, the default compiler is 4.2.
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The compile line he's talking about in particular is from a configure test in
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; opal/config/opal_config_asm.m4, where we're looking for assembly global symbols.&#160; The
</span><br>
<span class="quotelev1">&gt;             source
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; that we're trying to compile is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; .text
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; .globl _gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; _gsym_test_func:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; # _gsym_test_func
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; (configure tries a few prefixes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; But the &quot;#&quot; token with the -std=gnu99 option is causing failures where it shouldn't
</span><br>
<span class="quotelev1">&gt;             (i.e., it
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; causes configure to abort because all the assembly tests looking for the global symbols
</span><br>
<span class="quotelev1">&gt;             error
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; out due to the # token.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; So I think we either need to find a workaround for this assembly test or whack the idea
</span><br>
<span class="quotelev1">&gt;             of
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; the C99 stuff.&#160; :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; On Jan 24, 2011, at 10:29 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; No, they didn't get added (adding them now). I didn't get a chance to add them
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; over the weekend.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; On Mon, 24 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I'm getting these:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; CC&#160;&#160;&#160;&#160; dummy_component.lo
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:25: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:28: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:29: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:30: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:31: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:33: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:34: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:35: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:37: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:39: warning: ISO C90 forbids specifying subobject
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; to initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c: In function &#161;component_open&#162;:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy_component.c:45: warning: unused variable &#161;c&#162;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy.c:67: warning: ISO C90 forbids specifying subobject to
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy.c:68: warning: ISO C90 forbids specifying subobject to
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy.c:69: warning: ISO C90 forbids specifying subobject to
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; dummy.c:70: warning: ISO C90 forbids specifying subobject to
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; initialize
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; CCLD&#160;&#160; mca_debugger_dummy.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Did the autoconf tests not get added?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; --
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; _______________________________________________
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel mailing list
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; _______________________________________________
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel mailing list
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; --
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; _______________________________________________
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel mailing list
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Paul H. Hargrove&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Future Technologies Group
</span><br>
<span class="quotelev1">&gt;             HPC Research Department&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;             Lawrence Berkeley National Laboratory&#160;&#160;&#160;&#160; Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             devel mailing list
</span><br>
<span class="quotelev1">&gt;             devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             --
</span><br>
<span class="quotelev1">&gt;             Paul H. Hargrove&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Future Technologies Group
</span><br>
<span class="quotelev1">&gt;             HPC Research Department&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;             Lawrence Berkeley National Laboratory&#160;&#160;&#160;&#160; Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
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
