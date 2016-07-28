<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 12:48:20 2013" -->
<!-- isoreceived="20130430164820" -->
<!-- sent="Tue, 30 Apr 2013 09:48:12 -0700" -->
<!-- isosent="20130430164812" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base" -->
<!-- id="29B8EEC7-2F78-4026-AE45-E6B5804D4E3E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BA7FE548-2F78-443A-82C5-2AA45D2BB59D_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 12:48:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12331.php">Jeff Squyres (jsquyres): "[OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>In reply to:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2013, at 9:41 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The log message is plain wrong. There is nothing non standard compliant in the way the PML V is using the output, it is just it use an internal storage for it's stream.
</span><br>
<p>My point was that vprotocol isn't a standalone framework like all the others we have - it is tightly coupled to the pml/v component. That isn't the standard way we do things, as you know. The arrangement has caused some issues in the past, and this was just one that bit Nathan as he didn't realize it.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be straightforward to fix it by removing __ALL__ references to the output variable not only the one from the structure.
</span><br>
<p>Yes, but that then requires that the pml/v component directly reference the vprotocol framework object, which seems equally ugly. If that's what you want, then please feel free to do so - in which case, you could have just fixed it the way you want yourself :-)
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 30, 2013, at 18:37 , svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2013-04-30 12:37:17 EDT (Tue, 30 Apr 2013)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 28418
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28418">https://svn.open-mpi.org/trac/ompi/changeset/28418</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Revert r28417 - given the non-standard way vprotocol is implemented, I see no way to use the framework verbosity here. Best to just leave it alone as those who use it know what they need to do to get debug output
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12331.php">Jeff Squyres (jsquyres): "[OMPI devel] June OMPI developer's meeting"</a>
<li><strong>Previous message:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>In reply to:</strong> <a href="12329.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
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
