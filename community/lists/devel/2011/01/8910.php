<?
$subject_val = "Re: [OMPI devel] RFC: use ISO C99 style struct initialization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 16:49:55 2011" -->
<!-- isoreceived="20110120214955" -->
<!-- sent="Thu, 20 Jan 2011 13:47:26 -0800" -->
<!-- isosent="20110120214726" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: use ISO C99 style struct initialization" -->
<!-- id="4D38AD6E.6040701_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6C66C5A-5F5B-4793-897C-EE5B75C3CF3A_at_eecs.utk.edu" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 16:47:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="8909.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8908.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is because gcc is defaulting to -std=c90.  I strongly suspect that 
<br>
adding -std=c99 to the CFLAGS eliminates George's warnings.  However, 
<br>
one may need to hunt down equivalent dialect flags for other compilers too.
<br>
<p>-Paul
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; same type of warnings with gcc-4.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2011, at 15:21 , George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Even before getting into the Oracle compiler, a fully compliant C99 compiler such as gcc 4.2.1 complains a lot about the new code. Here is what I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:25: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:28: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:29: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:30: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:31: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:33: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:34: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:35: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:37: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:39: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c: In function 'component_open':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy_component.c:45: warning: unused variable 'c'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:67: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:68: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:69: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/debugger/dummy/dummy.c:70: warning: ISO C90 forbids specifying subobject to initialize
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2011, at 20:36 , Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully we'll find out tomorrow but I think I vaguely remember an issue with the Studio compilers and this type of initialization style.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 01/19/2011 05:22 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Done. I added the module orte/mca/debugger/dummy and I will remove it tomorrow. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-3, LANL 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 19 Jan 2011, Jeff Squyres wrote: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +1 on Ralph and George's comments. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Want to make a dummy component somewhere that uses this kind of initialization and see what happens?  Put a test for the C99 initialization style in configure.m4 to see if it works or not;         MTT will then check this for all the compilers that we care about. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 3:58 PM, Ralph Castain wrote: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I believe the majority of structs used in OMPI are actually declared to be opal objects of some           flavor, so I'm not sure how much this will actually accomplish. Other than that, I have no real objection - either way works fine for me. 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 12:29 PM, George Bosilca wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm with you on that. Let's create a fake module using the ISO C99 naming scheme, and leave it to MTT to figure out where is breaks! 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; george. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 19, 2011, at 14:23 , Nathan Hjelm wrote: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I don't know if this has been discussed before or if this will break Windows (or some obscure platform) support but I would like to start using the ISO C99 style for struct initialization (see section 6.7.8, example 10 in <a href="http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf">http://www.open-std.org/jtc1/sc22/wg14/www/docs/n1124.pdf</a>). Using this style would make mca code much easier to read. Any thoughts? Would this break something? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Example: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; struct module_foo { 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    char *bar; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    int   baz; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; struct foo foobar = { 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    .bar = &quot;foobar&quot;, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    .baz = 1 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Nathan 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC-3, LANL 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;                 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;               
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;Mail Attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="8911.php">Francis Poulin: "[OMPI devel] ompi_mpi_init: orte_init failed"</a>
<li><strong>Previous message:</strong> <a href="8909.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>In reply to:</strong> <a href="8908.php">George Bosilca: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
<li><strong>Reply:</strong> <a href="8912.php">Nathan Hjelm: "Re: [OMPI devel] RFC: use ISO C99 style struct initialization"</a>
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
