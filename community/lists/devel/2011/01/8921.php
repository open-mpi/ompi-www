<?
$subject_val = "Re: [OMPI devel] dummy component warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 25 17:37:22 2011" -->
<!-- isoreceived="20110125223722" -->
<!-- sent="Tue, 25 Jan 2011 14:36:58 -0800" -->
<!-- isosent="20110125223658" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dummy component warnings" -->
<!-- id="4D3F508A.7000702_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D3F4C88.2030705_at_lbl.gov" -->
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
<strong>Date:</strong> 2011-01-25 17:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8920.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8920.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm that the problem appears specific to Apple's compiler.
<br>
<p>Since the failure was reported to be configure-time, that took less time 
<br>
to check up on that I'd expected.
<br>
What I find is that gcc-4.0.0 on Linux/x86 *does* fail the 
<br>
&quot;#_gsym_test_func&quot; test, but for the RIGHT reason, and then goes on to 
<br>
pass the next test case with the proper form of global symbol.  The 
<br>
relevent portion of config.log appears below.
<br>
<p>-Paul
<br>
<p>configure:27399: checking prefix for global symbol labels
<br>
configure: trying _
<br>
configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:27442: $? = 0
<br>
configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
<br>
configure:27450: $? = 0
<br>
configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 
<br>
2&gt;&amp;1
<br>
configure:27458: $? = 1
<br>
conftest_c.o: In function `main':
<br>
conftest_c.o(.text+0xd): undefined reference to `gsym_test_func'
<br>
collect2: ld returned 1 exit status
<br>
configure: failed C program was:
<br>
#ifdef __cplusplus
<br>
extern &quot;C&quot; {
<br>
#endif
<br>
void gsym_test_func(void);
<br>
#ifdef __cplusplus
<br>
}
<br>
#endif
<br>
int
<br>
main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gsym_test_func();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
configure: failed ASM program was:
<br>
<p>.text
<br>
# _gsym_test_func
<br>
.globl _gsym_test_func
<br>
_gsym_test_func:
<br>
# _gsym_test_func
<br>
<p>configure: trying
<br>
configure:27439: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing -c conftest.s &gt;conftest.out 2&gt;&amp;1
<br>
configure:27442: $? = 0
<br>
configure:27447: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing -I. conftest_c.c -c &gt; conftest.cmpl 2&gt;&amp;1
<br>
configure:27450: $? = 0
<br>
configure:27455: gcc -std=gnu99 -O3 -DNDEBUG -finline-functions 
<br>
-fno-strict-aliasing conftest_c.o conftest.o -o conftest &gt; conftest.link 
<br>
2&gt;&amp;1
<br>
configure:27458: $? = 0
<br>
configure:27496: result:
<br>
<p><p><p><p>On 1/25/2011 2:19 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have gcc-4.0.0 on Linux built from unmodified FSF sources.
</span><br>
<span class="quotelev1">&gt; I will try to reproduce.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/25/2011 1:47 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Looks like a bug in Apple's gcc 4.0. I tried the source with gcc 
</span><br>
<span class="quotelev2">&gt;&gt; 3.4.6 and gcc 4.1.2 on Linux and did not see that error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will take a look and see if there is a simple fix to get around 
</span><br>
<span class="quotelev2">&gt;&gt; this apparent compiler bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 25 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MTT turned up a problem with -std=gnu99 on OS X Leopard, which ships 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the gcc 4.0 compiler (OS X Snow Leopard ships with gcc 4.2, and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't have a problem).  Does anyone have gcc 4.0 on Linux?  I'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wondering if the same problem would occur.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =============
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From our friends at Absoft:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The -std=gnu99 is causing the problem when used with gcc-4.0 ( the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default on Leopard with Apple's XCode 3.1 development tools ):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BigMac:ompi cag$ gcc --version -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BigMac:ompi cag$ gcc-4.0 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.s:2:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.s:5:3: error: invalid preprocessing directive #_gsym_test_func
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BigMac:ompi cag$ gcc-4.2 -std=gnu99 -c conftest.s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BigMac:ompi cag$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Snow Leopard with Apple's XCode 3.2 development tools, the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default compiler is 4.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The compile line he's talking about in particular is from a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure test in opal/config/opal_config_asm.m4, where we're 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking for assembly global symbols.  The source that we're trying 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to compile is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
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
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (configure tries a few prefixes)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the &quot;#&quot; token with the -std=gnu99 option is causing failures 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where it shouldn't (i.e., it causes configure to abort because all 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the assembly tests looking for the global symbols error out due to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the # token.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I think we either need to find a workaround for this assembly 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test or whack the idea of the C99 stuff.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 24, 2011, at 10:29 AM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, they didn't get added (adding them now). I didn't get a chance 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to add them over the weekend.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, 24 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm getting these:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC     dummy_component.lo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:25: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:28: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:29: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:30: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:31: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:33: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:34: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:35: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:37: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:39: warning: ISO C90 forbids specifying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subobject to initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c: In function 'component_open':
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy_component.c:45: warning: unused variable 'c'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy.c:67: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy.c:68: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy.c:69: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; dummy.c:70: warning: ISO C90 forbids specifying subobject to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; initialize
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CCLD   mca_debugger_dummy.la
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did the autoconf tests not get added?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. HargrovePHHargrove_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8920.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>In reply to:</strong> <a href="8920.php">Paul H. Hargrove: "Re: [OMPI devel] dummy component warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
<li><strong>Reply:</strong> <a href="8922.php">Nathan Hjelm: "Re: [OMPI devel] dummy component warnings"</a>
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
