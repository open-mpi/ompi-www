<?
$subject_val = "Re: [OMPI devel] yyunput warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 11 09:42:06 2011" -->
<!-- isoreceived="20111011134206" -->
<!-- sent="Tue, 11 Oct 2011 09:42:02 -0400" -->
<!-- isosent="20111011134202" -->
<!-- name="Boehm, Swen" -->
<!-- email="bohms_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] yyunput warnings" -->
<!-- id="5AD01115-2C4E-4A63-824F-113EF69B65C5_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="94C0361B-62E1-47DD-AC27-BE2EEA86EBD1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] yyunput warnings<br>
<strong>From:</strong> Boehm, Swen (<em>bohms_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-11 09:42:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I know for sure that it works with 2.5.35 but I am confident that it will work with 2.5.33.
<br>
I committed the changes to trunk.
<br>
<p>-- Swen
<br>
<p>On Oct 6, 2011, at 5:48 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I'm fine with bumping up the minimum version of flex required.  I just want to have a clue what to bump it up *to*.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're confident that 2.5.33 is a good number, that's probably good enough for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you find someone at ORNL to commit?  I think that this would be fine on the trunk and v1.5 series.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 6, 2011, at 3:25 PM, Boehm, Swen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if it works with 2.5.4 for sure but I have seen lexer files that handle differences between 2.5.4 and 2.5.33 and they don't handle %option noun put differently. I would assume it will work. Maybe someone still using 2.5.4 can validate this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Swen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 6, 2011, at 2:59 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nifty -- I had no idea that %unput existed.  Do you know how far back it works in flex versions?  We currently say on the web site that developers need at least flex 2.5.4 to build.  Will using an %unput (say, in trunk and v1.5) require a new minimum flex version?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 6, 2011, at 2:55 PM, Boehm, Swen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fwiw I created a patch to get rid of the following warnings:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; keyval_lex.c:1251: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; show_help_lex.c:1182: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; carto_file_lex.c:1256: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; util/hostfile/hostfile_lex.c:1665: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rmaps_rank_file_lex.c:1408: warning: 'yyunput' defined but not used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; let me know what you think.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Swen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;ompi_yyunput.diff&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
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
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.cisco.com/web/about/doing_business/legal/cri/
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
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
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
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; hxxp://www.cisco.com/web/about/doing_business/legal/cri/
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
<span class="quotelev1">&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/devel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Previous message:</strong> <a href="9808.php">Ralph Castain: "Re: [OMPI devel] Launcher in trunk is broken?"</a>
<li><strong>In reply to:</strong> <a href="9790.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
<li><strong>Reply:</strong> <a href="9810.php">Jeff Squyres: "Re: [OMPI devel] yyunput warnings"</a>
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
