<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 09:04:55 2009" -->
<!-- isoreceived="20090219140455" -->
<!-- sent="Thu, 19 Feb 2009 09:04:29 -0500" -->
<!-- isosent="20090219140429" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499D66ED.7010502_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F9BD6BC-D3E5-4EFD-9649-30D115B0CD02_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] workspace management question<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 09:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2009, at 5:39 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's what I typically run to bring down changes from SVN to HG:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Ensure all the latest hg repo changes are in the working dir
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hg up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Bring in all the SVN changes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; svn up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Refresh the .hgignore file (may change due to the svn up)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Add / remove any files to hg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hg addremove
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Now commit to hg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hg ci -m &quot;Up to SVN rzzzzz&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would you mind adding something like this to the wiki page?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As it has been spoken, so has it been done:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________
</span><br>
<span class="quotelev2">&gt;&gt; I was looking at the added stuff and it looks to me that the steps 
</span><br>
<span class="quotelev2">&gt;&gt; are missing doing an &quot;hg up&quot; on the SVN/HG workspace before doing the 
</span><br>
<span class="quotelev2">&gt;&gt; svn up.  Am I missing something here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No - the doc is missing that step, but you should do it (or at least, 
</span><br>
<span class="quotelev1">&gt; I always do, and it &quot;works for me&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Ok, I'll add it then.
<br>
<p>--td
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
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
<li><strong>Next message:</strong> <a href="5477.php">Lisandro Dalcin: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>In reply to:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5478.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
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
