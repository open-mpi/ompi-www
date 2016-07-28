<?
$subject_val = "Re: [OMPI devel] workspace management question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:39:52 2009" -->
<!-- isoreceived="20090219123952" -->
<!-- sent="Thu, 19 Feb 2009 07:39:47 -0500" -->
<!-- isosent="20090219123947" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] workspace management question" -->
<!-- id="499D5313.6060108_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="499B3F51.2070002_at_sun.com" -->
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
<strong>Date:</strong> 2009-02-19 07:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5470.php">Bert Wesarg: "[OMPI devel] [PATCH 2/4] opal-ps: fix header length calculus"</a>
<li><strong>In reply to:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's what I typically run to bring down changes from SVN to HG:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Ensure all the latest hg repo changes are in the working dir
</span><br>
<span class="quotelev2">&gt;&gt; hg up
</span><br>
<span class="quotelev2">&gt;&gt; # Bring in all the SVN changes
</span><br>
<span class="quotelev2">&gt;&gt; svn up
</span><br>
<span class="quotelev2">&gt;&gt; # Refresh the .hgignore file (may change due to the svn up)
</span><br>
<span class="quotelev2">&gt;&gt; ./contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev2">&gt;&gt; # Add / remove any files to hg
</span><br>
<span class="quotelev2">&gt;&gt; hg addremove
</span><br>
<span class="quotelev2">&gt;&gt; # Now commit to hg
</span><br>
<span class="quotelev2">&gt;&gt; hg ci -m &quot;Up to SVN rzzzzz&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind adding something like this to the wiki page?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As it has been spoken, so has it been done:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial#SyncingSVNandHGworkspaces</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________
</span><br>
I was looking at the added stuff and it looks to me that the steps are 
<br>
missing doing an &quot;hg up&quot; on the SVN/HG workspace before doing the svn 
<br>
up.  Am I missing something here?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5472.php">Jeff Squyres: "Re: [OMPI devel] possible bugs and unexpected values in returned errors classes"</a>
<li><strong>Previous message:</strong> <a href="5470.php">Bert Wesarg: "[OMPI devel] [PATCH 2/4] opal-ps: fix header length calculus"</a>
<li><strong>In reply to:</strong> <a href="5454.php">Eugene Loh: "Re: [OMPI devel] workspace management question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Reply:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
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
