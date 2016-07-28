<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 16:21:09 2012" -->
<!-- isoreceived="20121204212109" -->
<!-- sent="Tue, 4 Dec 2012 13:21:00 -0800" -->
<!-- isosent="20121204212100" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file" -->
<!-- id="2483413A-C066-402A-84AB-36CF0CE48173_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD239F9D29_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 16:21:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see that Automake is including a .l.c rule.  And I see that if I touch a .l file, it automatically runs flex to generate a new .c file, and then compiles that .c file.  For example:
<br>
<p>------
<br>
[13:19] jsquyres-mac:~/svn/ompi3/opal/util % touch show_help_lex.l
<br>
[13:20] jsquyres-mac:~/svn/ompi3/opal/util % make
<br>
Making all in keyval
<br>
make[1]: Nothing to be done for `all'.
<br>
&nbsp;&nbsp;LEX    show_help_lex.c
<br>
&nbsp;&nbsp;CC     show_help_lex.lo
<br>
&nbsp;&nbsp;CCLD   libopalutil.la
<br>
/usr/bin/ranlib: file: .libs/libopalutil.a(qsort.o) has no symbols
<br>
-----
<br>
<p>So I guess I'd like to see a specific case where editing a .l file does not re-generate the .c file properly.
<br>
<p><p>On Dec 4, 2012, at 9:58 AM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; We should never have to have the makefile extension. Just making sure the lex file gets included should work. When Nathan commits his patch, I'll take a look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; &lt;Original message contents unavailable&gt;
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11833.php">Christopher Samuel: "[OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<li><strong>Previous message:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<li><strong>In reply to:</strong> <a href="11831.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r27580 - in trunk: ompi/mca/btl/openib ompi/mca/btl/wv ompi/mca/coll/ml opal/util/keyval orte/mca/rmaps/rank_file"</a>
<!-- nextthread="start" -->
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
