<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 18:14:24 2011" -->
<!-- isoreceived="20110120231424" -->
<!-- sent="Thu, 20 Jan 2011 16:14:19 -0700 (MST)" -->
<!-- isosent="20110120231419" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="alpine.OSX.2.00.1101201454030.28834_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D38AD6E.6040701_at_lbl.gov" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 18:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="8910.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, it seems that if the standard is not specified gcc backs off to gnu89 (c90 + some of c99). I have tested the following compilers so far:
<br>
<p>&nbsp;&nbsp;gcc       : ok by default, not ok with -pedantic unless -std=c99 is specified
<br>
&nbsp;&nbsp;icc       : ok without any flags, strangely ok with -no-c99 (probably supported by intel c89 extensions?)
<br>
&nbsp;&nbsp;pgi       : ok with or without -c99, not so much with -c89
<br>
&nbsp;&nbsp;cray      : ok by default, not ok with -hnoc99
<br>
&nbsp;&nbsp;pathscale : same as gcc
<br>
<p>Microsoft's compiler is the likely going to be the compiler that is going to have problems with this. They implemented some of c99 but not all of it.
<br>
<p>-Nathan
<br>
<p>On Thu, 20 Jan 2011, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; This is because gcc is defaulting to -std=c90.  I strongly suspect that 
</span><br>
<span class="quotelev1">&gt; adding -std=c99 to the CFLAGS eliminates George's warnings.  However, one may 
</span><br>
<span class="quotelev1">&gt; need to hunt down equivalent dialect flags for other compilers too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; same type of warnings with gcc-4.3.3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 20, 2011, at 15:21 , George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even before getting into the Oracle compiler, a fully compliant C99 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler such as gcc 4.2.1 complains a lot about the new code. Here is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:25: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:28: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:29: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:30: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:31: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:33: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:34: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:35: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:37: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:39: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c: In function 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'component_open':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:45: warning: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unused variable 'c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:67: warning: ISO C90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:68: warning: ISO C90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:69: warning: ISO C90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:70: warning: ISO C90 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forbids specifying subobject to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2011, at 20:36 , Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully we'll find out tomorrow but I think I vaguely remember an issue 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the Studio compilers and this type of initialization style.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 01/19/2011 05:22 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Done. I added the module orte/mca/debugger/dummy and I will remove it 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tomorrow. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Nathan HPC-3, LANL 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Wed, 19 Jan 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +1 on Ralph and George's comments. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Want to make a dummy component somewhere that uses this kind of 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; initialization and see what happens?  Put a test for the C99 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; initialization style in configure.m4 to see if it works or not; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MTT will then check this for all the compilers that we care about. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 3:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I believe the majority of structs used in OMPI are actually declared 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to be opal objects of some           flavor, so I'm not sure how much 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this will actually accomplish. Other than that, I have no real 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; objection - either way works fine for me. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 12:29 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm with you on that. Let's create a fake module using the ISO C99 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; naming scheme, and leave it to MTT to figure out where is breaks! 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if this has been discussed before or if this will break 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Windows (or some obscure platform) support but I would like to start 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; using the ISO C99 style for struct initialization (see section 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 6.7.8, example 10 in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this style would make mca code much easier to read. Any thoughts? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would this break something? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Example: struct module_foo {    char *bar;    int   baz; }; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; struct foo foobar = {    .bar = &quot;foobar&quot;,    .baz = 1 }; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Nathan HPC-3, LANL _______________________________________________ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list devel_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres jsquyres_at_[hidden] For corporate legal information go to: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a> 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8913.php">Larry Baker: "Re: [OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>In reply to:</strong> <a href="8910.php">Paul H. Hargrove: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8914.php">Jeff Squyres: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
