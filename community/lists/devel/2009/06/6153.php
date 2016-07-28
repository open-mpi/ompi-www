<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21340";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 10:27:04 2009" -->
<!-- isoreceived="20090601142704" -->
<!-- sent="Mon, 1 Jun 2009 08:26:59 -0600" -->
<!-- isosent="20090601142659" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21340" -->
<!-- id="71d2d8cc0906010726s7623895h271ce49fb8506bee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200906011407.n51E78EI029192_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21340<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 10:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6154.php">Jeff Squyres: "[OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My fault - I copied the Makefile.am over from another place and didn't
<br>
notice that line. Sorry for the problem...
<br>
<p><p><p>On Mon, Jun 1, 2009 at 8:07 AM, &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2009-06-01 10:07:08 EDT (Mon, 01 Jun 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21340
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21340">https://svn.open-mpi.org/trac/ompi/changeset/21340</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; I'm (temporarily?) removing this entry because there's no .window file
</span><br>
<span class="quotelev1">&gt; in this directory and it's causing &quot;make dist&quot; to break.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing -- is there a missing file in this directory?  If so, please
</span><br>
<span class="quotelev1">&gt; add it and restore the EXTRA_DIST line I just removed.  Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/routed/cm/Makefile.am |     2 --
</span><br>
<span class="quotelev1">&gt;   1 files changed, 0 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/routed/cm/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/orte/mca/routed/cm/Makefile.am        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/orte/mca/routed/cm/Makefile.am        2009-06-01 10:07:08 EDT
</span><br>
<span class="quotelev1">&gt; (Mon, 01 Jun 2009)
</span><br>
<span class="quotelev1">&gt; @@ -7,8 +7,6 @@
</span><br>
<span class="quotelev1">&gt;  # $HEADER$
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -EXTRA_DIST = .windows
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;  sources = \
</span><br>
<span class="quotelev1">&gt;        routed_cm.h \
</span><br>
<span class="quotelev1">&gt;        routed_cm.c \
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6154.php">Jeff Squyres: "[OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
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
