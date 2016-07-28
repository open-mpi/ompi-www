<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 22 06:30:30 2011" -->
<!-- isoreceived="20110122113030" -->
<!-- sent="Sat, 22 Jan 2011 06:30:24 -0500" -->
<!-- isosent="20110122113024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="45844747-EFB7-46B7-B405-85AB768FD471_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.OSX.2.00.1101201454030.28834_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: use ISO C99 style struct initialization<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-22 06:30:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8915.php">Jeff Squyres: "[OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8909.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a little nervous about needing to specify per-compiler flags just to get basic compilation of the code (per-compiler optimization flags are a different thing).
<br>
<p>I suppose we could use the Autoconf AC_PROG_CC_C99 macro to try to find out the right flags; I *assume* that it will handle all the compilers we care about (it sets ac_cv_prog_cc_c99 to &quot;no&quot; if it can't find it).
<br>
<p>See <a href="http://www.gnu.org/software/hello/manual/autoconf/C-Compiler.html">http://www.gnu.org/software/hello/manual/autoconf/C-Compiler.html</a> (you have to scroll down a bit to see AC_PROG_CC_C99).
<br>
<p>Nathan -- do you want to try this AC macro in the top-level configure.ac and see what happens?
<br>
<p><p>On Jan 20, 2011, at 6:14 PM, Nathan Hjelm wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, it seems that if the standard is not specified gcc backs off to gnu89 (c90 + some of c99). I have tested the following compilers so far:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; gcc       : ok by default, not ok with -pedantic unless -std=c99 is specified
</span><br>
<span class="quotelev1">&gt; icc       : ok without any flags, strangely ok with -no-c99 (probably supported by intel c89 extensions?)
</span><br>
<span class="quotelev1">&gt; pgi       : ok with or without -c99, not so much with -c89
</span><br>
<span class="quotelev1">&gt; cray      : ok by default, not ok with -hnoc99
</span><br>
<span class="quotelev1">&gt; pathscale : same as gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Microsoft's compiler is the likely going to be the compiler that is going to have problems with this. They implemented some of c99 but not all of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, 20 Jan 2011, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is because gcc is defaulting to -std=c90.  I strongly suspect that adding -std=c99 to the CFLAGS eliminates George's warnings.  However, one may need to hunt down equivalent dialect flags for other compilers too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same type of warnings with gcc-4.3.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 20, 2011, at 15:21 , George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Even before getting into the Oracle compiler, a fully compliant C99 compiler such as gcc 4.2.1 complains a lot about the new code. Here is what I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:25: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:28: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:29: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:30: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:31: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:33: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:34: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:35: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:37: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:39: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c: In function 'component_open':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:45: warning: unused variable 'c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:67: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:68: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:69: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:70: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 19, 2011, at 20:36 , Terry Dontje wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hopefully we'll find out tomorrow but I think I vaguely remember an issue with the Studio compilers and this type of initialization style.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 01/19/2011 05:22 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Done. I added the module orte/mca/debugger/dummy and I will remove it tomorrow. -Nathan HPC-3, LANL On Wed, 19 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; +1 on Ralph and George's comments. Want to make a dummy component somewhere that uses this kind of initialization and see what happens?  Put a test for the C99 initialization style in configure.m4 to see if it works or not; MTT will then check this for all the compilers that we care about. On Jan 19, 2011, at 3:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I believe the majority of structs used in OMPI are actually declared to be opal objects of some           flavor, so I'm not sure how much this will actually accomplish. Other than that, I have no real objection - either way works fine for me. On Jan 19, 2011, at 12:29 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm with you on that. Let's create a fake module using the ISO C99 naming scheme, and leave it to MTT to figure out where is breaks! george. On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if this has been discussed before or if this will break Windows (or some obscure platform) support but I would like to start using the ISO C99 style for struct initialization (see section 6.7.8, example 10 in <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using this style would make mca code much easier to read. Any thoughts? Would this break something? Example: struct module_foo {    char *bar;    int   baz; }; struct foo foobar = {    .bar = &quot;foobar&quot;,    .baz = 1 }; -Nathan HPC-3, LANL _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres jsquyres_at_[hidden] For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden]
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
<li><strong>Next message:</strong> <a href="8915.php">Jeff Squyres: "[OMPI devel] dummy component warnings"</a>
<li><strong>Previous message:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8909.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
