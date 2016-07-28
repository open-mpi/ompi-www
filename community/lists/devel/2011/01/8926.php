<?
$subject_val = "Re: [OMPI devel] dummy component warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 17:59:08 2011" -->
<!-- isoreceived="20110125225908" -->
<!-- sent="Tue, 25 Jan 2011 17:59:03 -0500" -->
<!-- isosent="20110125225903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dummy component warnings" -->
<!-- id="DDB771A7-ECE7-4971-9487-540958027007_at_cisco.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 17:59:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, we might have a deal breaker back here at Cisco...
<br>
<p>The OMPI code base is being used in an embedded environment with a toolchain that (we think) was derived from gcc 3.x.  It seems to totally hate the -std=gnu99 flag.  :-(
<br>
<p>Further, it is extremely unlikely that the toolchain will be upgraded (this is something beyond our control).
<br>
<p>Cisco must therefore vote &quot;thumbs down&quot; on the C99 stuff.
<br>
<p>Sorry guys!  :-(
<br>
<p><p><p>On Jan 25, 2011, at 5:51 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I found a root cause and a simpler/better simple fix:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From manpage for gcc on Linux:
</span><br>
<span class="quotelev2">&gt;&gt;        file.s
</span><br>
<span class="quotelev2">&gt;&gt;            Assembler code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And from Darwin:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        file.s
</span><br>
<span class="quotelev2">&gt;&gt;            Assembler code.  Apple's version of GCC runs the preprocessor on these files as well as
</span><br>
<span class="quotelev2">&gt;&gt;            those ending in .S.
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
<span class="quotelev1">&gt; $ gcc -std=c99 -c  foo.s
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
<span class="quotelev2">&gt;&gt; Ok, then there are two possible simple fixes: 
</span><br>
<span class="quotelev2">&gt;&gt;  - Strip -std from CCASFLAGS if Apple's gcc 4.0 is encountered, or 
</span><br>
<span class="quotelev2">&gt;&gt;  - Always strip -std from CCASFLAGS. The flag shouln't have any effect when compiling assembly. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan 
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3, LANL 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 25 Jan 2011, Paul H. Hargrove wrote: 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can confirm that the problem appears specific to Apple's compiler. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Since the failure was reported to be configure-time, that took less time to check up on that I'd expected. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I find is that gcc-4.0.0 on Linux/x86 *does* fail the &quot;#_gsym_test_func&quot; test, but for the RIGHT reason, and then goes on to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass the next test case with the proper form of global symbol.  The relevent portion of config.log appears below. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27399: checking prefix for global symbol labels 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: trying _ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27442: $? = 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27450: $? = 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing conftest_c.o conftest.o -o conftest    &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.link 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27458: $? = 1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest_c.o: In function `main': 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest_c.o(.text+0xd): undefined reference to `gsym_test_func' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: failed C program was: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef __cplusplus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; extern &quot;C&quot; { 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void gsym_test_func(void); 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #ifdef __cplusplus 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; main() 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; { 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     gsym_test_func(); 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: failed ASM program was: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .text 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .globl _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _gsym_test_func: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: trying 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27442: $? = 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27450: $? = 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions -fno-strict-aliasing conftest_c.o conftest.o -o conftest    &gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.link 2&gt;&amp;1 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27458: $? = 0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:27496: result: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 1/25/2011 2:19 PM, Paul H. Hargrove wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I have gcc-4.0.0 on Linux built from unmodified FSF sources. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       I will try to reproduce. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -Paul 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       On 1/25/2011 1:47 PM, Nathan Hjelm wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Looks like a bug in Apple's gcc 4.0. I tried the source with gcc 3.4.6 and gcc 4.1.2 on Linux and did not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             see that error. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             I will take a look and see if there is a simple fix to get around this apparent compiler bug. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -Nathan 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Tue, 25 Jan 2011, Jeff Squyres wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Short version 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ============= 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   MTT turned up a problem with -std=gnu99 on OS X Leopard, which ships with the gcc 4.0 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   compiler (OS X Snow Leopard ships with gcc 4.2, and doesn't have a problem).  Does anyone 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   have gcc 4.0 on Linux?  I'm wondering if the same problem would occur. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   More details: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ============= 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         From our friends at Absoft: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   The -std=gnu99 is causing the problem when used with gcc-4.0 ( the default on Leopard with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Apple's XCode 3.1 development tools ): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   BigMac:ompi cag$ gcc --version -std=gnu99 -c conftest.s 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   BigMac:ompi cag$ gcc-4.0 -std=gnu99 -c conftest.s 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   BigMac:ompi cag$ gcc-4.2 -std=gnu99 -c conftest.s 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   BigMac:ompi cag$ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   On Snow Leopard with Apple's XCode 3.2 development tools, the default compiler is 4.2. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   The compile line he's talking about in particular is from a configure test in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   opal/config/opal_config_asm.m4, where we're looking for assembly global symbols.  The source 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   that we're trying to compile is: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   .text 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   # _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   .globl _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   _gsym_test_func: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   # _gsym_test_func 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   ----- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   (configure tries a few prefixes) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   But the &quot;#&quot; token with the -std=gnu99 option is causing failures where it shouldn't (i.e., it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   causes configure to abort because all the assembly tests looking for the global symbols error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   out due to the # token. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   So I think we either need to find a workaround for this assembly test or whack the idea of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   the C99 stuff.  :-( 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   On Jan 24, 2011, at 10:29 AM, Nathan Hjelm wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         No, they didn't get added (adding them now). I didn't get a chance to add them 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         over the weekend. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         -Nathan 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         On Mon, 24 Jan 2011, Jeff Squyres wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               I'm getting these: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               CC     dummy_component.lo 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:25: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:28: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:29: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:30: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:31: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:33: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:34: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:35: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:37: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:39: warning: ISO C90 forbids specifying subobject 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               to initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c: In function &#145;component_open&#146;: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy_component.c:45: warning: unused variable &#145;c&#146; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy.c:67: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy.c:68: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy.c:69: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               dummy.c:70: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               initialize 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               CCLD   mca_debugger_dummy.la 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Did the autoconf tests not get added? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               Jeff Squyres 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               jsquyres_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               For corporate legal information go to: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               _______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               devel_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                               <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         _______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         devel_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Jeff Squyres 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   jsquyres_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   For corporate legal information go to: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   _______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   devel_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8923.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8927.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
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
