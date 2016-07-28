<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 15:09:52 2014" -->
<!-- isoreceived="20140204200952" -->
<!-- sent="Tue, 4 Feb 2014 13:09:50 -0700" -->
<!-- isosent="20140204200950" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6" -->
<!-- id="20140204200950.GA88861_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EB969893-33E5-4D25-BE67-D0352313AAEB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-04 15:09:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>In reply to:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Reply:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 04, 2014 at 07:55:51PM +0000, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; On Feb 4, 2014, at 1:44 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 30555
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30555">https://svn.open-mpi.org/trac/ompi/changeset/30555</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Fix wrapper ldflags.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.7.4:reviewer=jsquyres
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/config/opal_setup_wrappers.m4              |     9 ++++-----                               
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/configure.ac                               |     2 ++                                      
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/contrib/platform/lanl/cray_xe6/cray-common |     4 ----                                    
</span><br>
<span class="quotelev2">&gt; &gt;   3 files changed, 6 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/config/opal_setup_wrappers.m4
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/config/opal_setup_wrappers.m4	Tue Feb  4 09:47:04 2014	(r30554)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/config/opal_setup_wrappers.m4	2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)	(r30555)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -150,7 +150,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; # (because if script A sources script B, and B calls &quot;exit&quot;, then both
</span><br>
<span class="quotelev2">&gt; &gt; # B and A will exit).  Instead, we have to send the output to a file
</span><br>
<span class="quotelev2">&gt; &gt; # and then source that.
</span><br>
<span class="quotelev2">&gt; &gt; -$OMPI_TOP_BUILDDIR/opal/libltdl/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev2">&gt; &gt; +$OMPI_TOP_BUILDDIR/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; chmod +x $rpath_outfile
</span><br>
<span class="quotelev2">&gt; &gt; . ./$rpath_outfile
</span><br>
<span class="quotelev2">&gt; &gt; @@ -214,9 +214,8 @@
</span><br>
<span class="quotelev2">&gt; &gt; # runtime), and the RUNPATH args, if we have them.
</span><br>
<span class="quotelev2">&gt; &gt; AC_DEFUN([RPATHIFY_LDFLAGS],[
</span><br>
<span class="quotelev2">&gt; &gt;     OPAL_VAR_SCOPE_PUSH([rpath_out rpath_dir rpath_tmp])
</span><br>
<span class="quotelev2">&gt; &gt; -    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;no&quot; -o &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; -          [:],
</span><br>
<span class="quotelev2">&gt; &gt; -          [rpath_out=
</span><br>
<span class="quotelev2">&gt; &gt; +    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; -a ! &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot; -a ! &quot;WRAPPER_RPATH_SUPPORT&quot; = &quot;unnecessary&quot;], [
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This &quot;test&quot; looks dangerous to me.  Both non-portable [1] and slightly challenging to read at first glance.  It would be better as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;disabled&quot; &amp;&amp;
</span><br>
<span class="quotelev1">&gt; test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;unnecessary&quot;
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In fact, if you look carefully at the third test, there is a missing &quot;$&quot; before &quot;WRAPPER_RPATH_SUPPORT&quot; in the SVN version...
</span><br>
<p>Good catch on the typo. Neither I nor the reviewers noticed that. As for
<br>
the test semantics, I wasn't aware that -a, -o, and () were
<br>
deprecated. I will update the test.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13994/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>In reply to:</strong> <a href="13993.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Reply:</strong> <a href="13995.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
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
