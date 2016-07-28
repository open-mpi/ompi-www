<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 15:15:58 2014" -->
<!-- isoreceived="20140204201558" -->
<!-- sent="Tue, 4 Feb 2014 13:15:57 -0700" -->
<!-- isosent="20140204201557" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6" -->
<!-- id="20140204201557.GB88861_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140204200950.GA88861_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-02-04 15:15:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13996.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>In reply to:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in r30559
<br>
<p>-Nathan
<br>
<p>On Tue, Feb 04, 2014 at 01:09:50PM -0700, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Tue, Feb 04, 2014 at 07:55:51PM +0000, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 4, 2014, at 1:44 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: 2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; New Revision: 30555
</span><br>
<span class="quotelev3">&gt; &gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30555">https://svn.open-mpi.org/trac/ompi/changeset/30555</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Fix wrapper ldflags.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; cmr=v1.7.4:reviewer=jsquyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Text files modified: 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   trunk/config/opal_setup_wrappers.m4              |     9 ++++-----                               
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   trunk/configure.ac                               |     2 ++                                      
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   trunk/contrib/platform/lanl/cray_xe6/cray-common |     4 ----                                    
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   3 files changed, 6 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Modified: trunk/config/opal_setup_wrappers.m4
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- trunk/config/opal_setup_wrappers.m4	Tue Feb  4 09:47:04 2014	(r30554)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ trunk/config/opal_setup_wrappers.m4	2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)	(r30555)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -150,7 +150,7 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # (because if script A sources script B, and B calls &quot;exit&quot;, then both
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # B and A will exit).  Instead, we have to send the output to a file
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # and then source that.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -$OMPI_TOP_BUILDDIR/opal/libltdl/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +$OMPI_TOP_BUILDDIR/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; chmod +x $rpath_outfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; . ./$rpath_outfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -214,9 +214,8 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # runtime), and the RUNPATH args, if we have them.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; AC_DEFUN([RPATHIFY_LDFLAGS],[
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     OPAL_VAR_SCOPE_PUSH([rpath_out rpath_dir rpath_tmp])
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;no&quot; -o &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot;],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -          [:],
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -          [rpath_out=
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; -a ! &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot; -a ! &quot;WRAPPER_RPATH_SUPPORT&quot; = &quot;unnecessary&quot;], [
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This &quot;test&quot; looks dangerous to me.  Both non-portable [1] and slightly challenging to read at first glance.  It would be better as:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt; &gt; test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;disabled&quot; &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;unnecessary&quot;
</span><br>
<span class="quotelev2">&gt; &gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In fact, if you look carefully at the third test, there is a missing &quot;$&quot; before &quot;WRAPPER_RPATH_SUPPORT&quot; in the SVN version...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good catch on the typo. Neither I nor the reviewers noticed that. As for
</span><br>
<span class="quotelev1">&gt; the test semantics, I wasn't aware that -a, -o, and () were
</span><br>
<span class="quotelev1">&gt; deprecated. I will update the test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<p><p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13995/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13996.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.7.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>In reply to:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
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
