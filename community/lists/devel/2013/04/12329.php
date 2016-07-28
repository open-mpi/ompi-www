<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 12:41:30 2013" -->
<!-- isoreceived="20130430164130" -->
<!-- sent="Tue, 30 Apr 2013 18:41:24 +0200" -->
<!-- isosent="20130430164124" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base" -->
<!-- id="BA7FE548-2F78-443A-82C5-2AA45D2BB59D_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130430163718.2D29515F83E_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 12:41:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12328.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Reply:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>The log message is plain wrong. There is nothing non standard compliant in the way the PML V is using the output, it is just it use an internal storage for it's stream.
<br>
<p>It should be straightforward to fix it by removing __ALL__ references to the output variable not only the one from the structure.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Apr 30, 2013, at 18:37 , svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2013-04-30 12:37:17 EDT (Tue, 30 Apr 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28418
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28418">https://svn.open-mpi.org/trac/ompi/changeset/28418</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Revert r28417 - given the non-standard way vprotocol is implemented, I see no way to use the framework verbosity here. Best to just leave it alone as those who use it know what they need to do to get debug output
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Previous message:</strong> <a href="12328.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28417 - trunk/ompi/mca/vprotocol/base"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
<li><strong>Reply:</strong> <a href="12330.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28418 - trunk/ompi/mca/vprotocol/base"</a>
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
