<?
$subject_val = "Re: [OMPI devel] flex warning from flex-2.5.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 18:44:05 2012" -->
<!-- isoreceived="20120220234405" -->
<!-- sent="Mon, 20 Feb 2012 16:43:56 -0700" -->
<!-- isosent="20120220234356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] flex warning from flex-2.5.4" -->
<!-- id="FEEC40D8-107A-41F0-8921-F59E468012EC_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F42D8EC.4090600_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] flex warning from flex-2.5.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 18:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10523.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10521.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10521.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10525.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I'll have to move to another machine to test, though - my Mac Lion is running flex 2.5.35, and I no longer see those warnings. Interesting as I was under the impression that flex is no longer supported&#133;.
<br>
<p><p>On Feb 20, 2012, at 4:36 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The change below removes the warning, but very slightly changes the syntax that is parsed.
</span><br>
<span class="quotelev1">&gt; In the original, anything following the &quot;[tag]&quot; was considered trailing context.
</span><br>
<span class="quotelev1">&gt; However that made inputs like &quot;[tag]foo]&quot; ambiguous to the parser (hence the warning).
</span><br>
<span class="quotelev1">&gt; With the change below, both &quot;]&quot; will be in the matched string.
</span><br>
<span class="quotelev1">&gt; I am pretty sure that shouldn't ever happen in valid inputs anyway.
</span><br>
<span class="quotelev1">&gt; NOTE: I've not yet actually tested the resulting show_help utility [but soon].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: opal/util/show_help_lex.l
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/util/show_help_lex.l   (revision 25974)
</span><br>
<span class="quotelev1">&gt; +++ opal/util/show_help_lex.l   (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -62,7 +62,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #.*\n               ; /* comment line */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -^\[.+\]/.*\n { BEGIN(CHOMP); return OPAL_SHOW_HELP_PARSE_TOPIC; }
</span><br>
<span class="quotelev1">&gt; +^\[.+\]/[^\]\n]*\n { BEGIN(CHOMP); return OPAL_SHOW_HELP_PARSE_TOPIC; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;CHOMP&gt;.*\n { BEGIN(INITIAL); }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 3:26 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My bad - didn't look closely enough. I'll take a look at it and see if there is anything we can do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 20, 2012, at 4:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you sure this is a flex-generated file?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am looking at opal/util/show_help_lex.l in the svn trunk and it certainly looks human-generated to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please clue me in if I am missing something.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warning is from flex when processing the .l file, NOT from the compilation of the flex-generated .c file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/19/2012 7:55 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We get that everywhere, unfortunately - it comes from flex and is outside our control as the file it complains about is actually generated by flex itself. Unfortunately, flex is no longer maintained, and so nothing has been done to correct it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 19, 2012, at 8:47 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've not checked any other systems, but building the trunk on OpenBSD and FreeBSD (w/ flex-2.5.4) I see the following:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  LEX    show_help_lex.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;[srcdir]/opal/util/show_help_lex.l&quot;, line 65: warning, dangerous trailing context
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I found this message in the flex documentation, and it mentions that the POSIX draft for LEX leaves such cases undefined.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://flex.sourceforge.net/manual/Limitations.html">http://flex.sourceforge.net/manual/Limitations.html</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10523.php">Edgar Gabriel: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25966"</a>
<li><strong>Previous message:</strong> <a href="10521.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<li><strong>In reply to:</strong> <a href="10521.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10525.php">Paul H. Hargrove: "Re: [OMPI devel] flex warning from flex-2.5.4"</a>
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
