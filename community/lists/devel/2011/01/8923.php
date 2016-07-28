<?
$subject_val = "Re: [OMPI devel] dummy component warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 17:51:55 2011" -->
<!-- isoreceived="20110125225155" -->
<!-- sent="Tue, 25 Jan 2011 14:51:30 -0800" -->
<!-- isosent="20110125225130" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dummy component warnings" -->
<!-- id="4D3F53F2.5020900_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.OSX.2.00.1101251543090.58734_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-25 17:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a root cause and a simpler/better simple fix:
<br>
<p>&nbsp;From manpage for gcc on Linux:
<br>
<span class="quotelev1">&gt;        file.s
</span><br>
<span class="quotelev1">&gt;            Assembler code.
</span><br>
<p>And from Darwin:
<br>
<p><span class="quotelev1">&gt;        file.s
</span><br>
<span class="quotelev1">&gt;            Assembler code.  Apple's version of GCC runs the 
</span><br>
<span class="quotelev1">&gt; preprocessor on these files as well as
</span><br>
<span class="quotelev1">&gt;            those ending in .S.
</span><br>
<p>So the problem/difference is that Apple insists on passing the .s 
<br>
through the preprocessor by default when FSF's gcc does not.
<br>
The fix appears to be an explict &quot;-xassembler&quot;:
<br>
<p>$ cat foo.s
<br>
.text
<br>
# _gsym_test_func
<br>
.globl _gsym_test_func
<br>
_gsym_test_func:
<br>
# _gsym_test_func
<br>
<p>$ gcc -std=c99 -c  foo.s
<br>
foo.s:2:3: error: invalid preprocessing directive #_gsym_test_func
<br>
foo.s:5:3: error: invalid preprocessing directive #_gsym_test_func
<br>
<p>$ gcc -std=c99 -c -xassembler foo.s
<br>
[no output]
<br>
<p>-Paul
<br>
<p><p>On 1/25/2011 2:48 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; Ok, then there are two possible simple fixes:
</span><br>
<span class="quotelev1">&gt;  - Strip -std from CCASFLAGS if Apple's gcc 4.0 is encountered, or
</span><br>
<span class="quotelev1">&gt;  - Always strip -std from CCASFLAGS. The flag shouln't have any effect 
</span><br>
<span class="quotelev1">&gt; when compiling assembly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; HPC-3, LANL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 25 Jan 2011, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can confirm that the problem appears specific to Apple's compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since the failure was reported to be configure-time, that took less 
</span><br>
<span class="quotelev2">&gt;&gt; time to check up on that I'd expected.
</span><br>
<span class="quotelev2">&gt;&gt; What I find is that gcc-4.0.0 on Linux/x86 *does* fail the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;#_gsym_test_func&quot; test, but for the RIGHT reason, and then goes on to
</span><br>
<span class="quotelev2">&gt;&gt; pass the next test case with the proper form of global symbol.  The 
</span><br>
<span class="quotelev2">&gt;&gt; relevent portion of config.log appears below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:27399: checking prefix for global symbol labels
</span><br>
<span class="quotelev2">&gt;&gt; configure: trying _
</span><br>
<span class="quotelev2">&gt;&gt; configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27442: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27450: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt;
</span><br>
<span class="quotelev2">&gt;&gt; conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27458: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; conftest_c.o: In function `main':
</span><br>
<span class="quotelev2">&gt;&gt; conftest_c.o(.text+0xd): undefined reference to `gsym_test_func'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; configure: failed C program was:
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev2">&gt;&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; void gsym_test_func(void);
</span><br>
<span class="quotelev2">&gt;&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; int
</span><br>
<span class="quotelev2">&gt;&gt; main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     gsym_test_func();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; configure: failed ASM program was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .text
</span><br>
<span class="quotelev2">&gt;&gt; # _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt; .globl _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt; _gsym_test_func:
</span><br>
<span class="quotelev2">&gt;&gt; # _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: trying
</span><br>
<span class="quotelev2">&gt;&gt; configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27442: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27450: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt;
</span><br>
<span class="quotelev2">&gt;&gt; conftest.link 2&gt;&amp;1
</span><br>
<span class="quotelev2">&gt;&gt; configure:27458: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:27496: result:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/25/2011 2:19 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;       I have gcc-4.0.0 on Linux built from unmodified FSF sources.
</span><br>
<span class="quotelev2">&gt;&gt;       I will try to reproduce.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       On 1/25/2011 1:47 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;             Looks like a bug in Apple's gcc 4.0. I tried the source 
</span><br>
<span class="quotelev2">&gt;&gt; with gcc 3.4.6 and gcc 4.1.2 on Linux and did not
</span><br>
<span class="quotelev2">&gt;&gt;             see that error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I will take a look and see if there is a simple fix to 
</span><br>
<span class="quotelev2">&gt;&gt; get around this apparent compiler bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Tue, 25 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   Short version
</span><br>
<span class="quotelev2">&gt;&gt;                   =============
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   MTT turned up a problem with -std=gnu99 on OS X 
</span><br>
<span class="quotelev2">&gt;&gt; Leopard, which ships with the gcc 4.0
</span><br>
<span class="quotelev2">&gt;&gt;                   compiler (OS X Snow Leopard ships with gcc 4.2, and 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't have a problem).  Does anyone
</span><br>
<span class="quotelev2">&gt;&gt;                   have gcc 4.0 on Linux?  I'm wondering if the same 
</span><br>
<span class="quotelev2">&gt;&gt; problem would occur.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   More details:
</span><br>
<span class="quotelev2">&gt;&gt;                   =============
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         From our friends at Absoft:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   -----
</span><br>
<span class="quotelev2">&gt;&gt;                   The -std=gnu99 is causing the problem when used 
</span><br>
<span class="quotelev2">&gt;&gt; with gcc-4.0 ( the default on Leopard with
</span><br>
<span class="quotelev2">&gt;&gt;                   Apple's XCode 3.1 development tools ):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   BigMac:ompi cag$ gcc --version -std=gnu99 -c 
</span><br>
<span class="quotelev2">&gt;&gt; conftest.s
</span><br>
<span class="quotelev2">&gt;&gt;                   conftest.s:2:3: error: invalid preprocessing 
</span><br>
<span class="quotelev2">&gt;&gt; directive #_gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   conftest.s:5:3: error: invalid preprocessing 
</span><br>
<span class="quotelev2">&gt;&gt; directive #_gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   BigMac:ompi cag$ gcc-4.0 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev2">&gt;&gt;                   conftest.s:2:3: error: invalid preprocessing 
</span><br>
<span class="quotelev2">&gt;&gt; directive #_gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   conftest.s:5:3: error: invalid preprocessing 
</span><br>
<span class="quotelev2">&gt;&gt; directive #_gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   BigMac:ompi cag$ gcc-4.2 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev2">&gt;&gt;                   BigMac:ompi cag$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   On Snow Leopard with Apple's XCode 3.2 development 
</span><br>
<span class="quotelev2">&gt;&gt; tools, the default compiler is 4.2.
</span><br>
<span class="quotelev2">&gt;&gt;                   -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   The compile line he's talking about in particular 
</span><br>
<span class="quotelev2">&gt;&gt; is from a configure test in
</span><br>
<span class="quotelev2">&gt;&gt;                   opal/config/opal_config_asm.m4, where we're looking 
</span><br>
<span class="quotelev2">&gt;&gt; for assembly global symbols.  The source
</span><br>
<span class="quotelev2">&gt;&gt;                   that we're trying to compile is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   -----
</span><br>
<span class="quotelev2">&gt;&gt;                   .text
</span><br>
<span class="quotelev2">&gt;&gt;                   # _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   .globl _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   _gsym_test_func:
</span><br>
<span class="quotelev2">&gt;&gt;                   # _gsym_test_func
</span><br>
<span class="quotelev2">&gt;&gt;                   -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   (configure tries a few prefixes)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   But the &quot;#&quot; token with the -std=gnu99 option is 
</span><br>
<span class="quotelev2">&gt;&gt; causing failures where it shouldn't (i.e., it
</span><br>
<span class="quotelev2">&gt;&gt;                   causes configure to abort because all the assembly 
</span><br>
<span class="quotelev2">&gt;&gt; tests looking for the global symbols error
</span><br>
<span class="quotelev2">&gt;&gt;                   out due to the # token.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   So I think we either need to find a workaround for 
</span><br>
<span class="quotelev2">&gt;&gt; this assembly test or whack the idea of
</span><br>
<span class="quotelev2">&gt;&gt;                   the C99 stuff.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   On Jan 24, 2011, at 10:29 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         No, they didn't get added (adding them now). 
</span><br>
<span class="quotelev2">&gt;&gt; I didn't get a chance to add them
</span><br>
<span class="quotelev2">&gt;&gt;                         over the weekend.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         On Mon, 24 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               I'm getting these:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               CC     dummy_component.lo
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:25: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:28: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:29: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:30: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:31: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:33: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:34: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:35: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:37: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:39: warning: ISO C90 
</span><br>
<span class="quotelev2">&gt;&gt; forbids specifying subobject
</span><br>
<span class="quotelev2">&gt;&gt;                               to initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c: In function 
</span><br>
<span class="quotelev2">&gt;&gt; 'component_open':
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy_component.c:45: warning: unused 
</span><br>
<span class="quotelev2">&gt;&gt; variable 'c'
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy.c:67: warning: ISO C90 forbids 
</span><br>
<span class="quotelev2">&gt;&gt; specifying subobject to
</span><br>
<span class="quotelev2">&gt;&gt;                               initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy.c:68: warning: ISO C90 forbids 
</span><br>
<span class="quotelev2">&gt;&gt; specifying subobject to
</span><br>
<span class="quotelev2">&gt;&gt;                               initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy.c:69: warning: ISO C90 forbids 
</span><br>
<span class="quotelev2">&gt;&gt; specifying subobject to
</span><br>
<span class="quotelev2">&gt;&gt;                               initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               dummy.c:70: warning: ISO C90 forbids 
</span><br>
<span class="quotelev2">&gt;&gt; specifying subobject to
</span><br>
<span class="quotelev2">&gt;&gt;                               initialize
</span><br>
<span class="quotelev2">&gt;&gt;                               CCLD   mca_debugger_dummy.la
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               Did the autoconf tests not get added?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               --
</span><br>
<span class="quotelev2">&gt;&gt;                               Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                               jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                               For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;                               
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                               
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                               devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                               devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                               
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                         
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   --
</span><br>
<span class="quotelev2">&gt;&gt;                   Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt;                   jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                   For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt;                   
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                   devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                   devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;                   <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8924.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8925.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8926.php">Jeff Squyres: "Re: [OMPI devel] dummy component warnings"</a>
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
