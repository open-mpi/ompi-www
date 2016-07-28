<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 14:55:51 2014" -->
<!-- isoreceived="20140204195551" -->
<!-- sent="Tue, 4 Feb 2014 19:55:51 +0000" -->
<!-- isosent="20140204195551" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6" -->
<!-- id="EB969893-33E5-4D25-BE67-D0352313AAEB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140204194409.7B2D115FF63_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-04 14:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Reply:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2014, at 1:44 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 30555
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30555">https://svn.open-mpi.org/trac/ompi/changeset/30555</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix wrapper ldflags.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.4:reviewer=jsquyres
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/config/opal_setup_wrappers.m4              |     9 ++++-----                               
</span><br>
<span class="quotelev1">&gt;   trunk/configure.ac                               |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   trunk/contrib/platform/lanl/cray_xe6/cray-common |     4 ----                                    
</span><br>
<span class="quotelev1">&gt;   3 files changed, 6 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/opal_setup_wrappers.m4
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/opal_setup_wrappers.m4	Tue Feb  4 09:47:04 2014	(r30554)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/opal_setup_wrappers.m4	2014-02-04 14:44:08 EST (Tue, 04 Feb 2014)	(r30555)
</span><br>
<span class="quotelev1">&gt; @@ -150,7 +150,7 @@
</span><br>
<span class="quotelev1">&gt; # (because if script A sources script B, and B calls &quot;exit&quot;, then both
</span><br>
<span class="quotelev1">&gt; # B and A will exit).  Instead, we have to send the output to a file
</span><br>
<span class="quotelev1">&gt; # and then source that.
</span><br>
<span class="quotelev1">&gt; -$OMPI_TOP_BUILDDIR/opal/libltdl/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev1">&gt; +$OMPI_TOP_BUILDDIR/libtool --config &gt; $rpath_outfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; chmod +x $rpath_outfile
</span><br>
<span class="quotelev1">&gt; . ./$rpath_outfile
</span><br>
<span class="quotelev1">&gt; @@ -214,9 +214,8 @@
</span><br>
<span class="quotelev1">&gt; # runtime), and the RUNPATH args, if we have them.
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([RPATHIFY_LDFLAGS],[
</span><br>
<span class="quotelev1">&gt;     OPAL_VAR_SCOPE_PUSH([rpath_out rpath_dir rpath_tmp])
</span><br>
<span class="quotelev1">&gt; -    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;no&quot; -o &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot;],
</span><br>
<span class="quotelev1">&gt; -          [:],
</span><br>
<span class="quotelev1">&gt; -          [rpath_out=
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; -a ! &quot;$WRAPPER_RPATH_SUPPORT&quot; = &quot;disabled&quot; -a ! &quot;WRAPPER_RPATH_SUPPORT&quot; = &quot;unnecessary&quot;], [
</span><br>
<p>This &quot;test&quot; looks dangerous to me.  Both non-portable [1] and slightly challenging to read at first glance.  It would be better as:
<br>
<p>----8&lt;----
<br>
test &quot;$enable_wrapper_rpath&quot; = &quot;yes&quot; &amp;&amp;
<br>
test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;disabled&quot; &amp;&amp;
<br>
test &quot;$WRAPPER_RPATH_SUPPORT&quot; != &quot;unnecessary&quot;
<br>
----8&lt;----
<br>
<p>In fact, if you look carefully at the third test, there is a missing &quot;$&quot; before &quot;WRAPPER_RPATH_SUPPORT&quot; in the SVN version...
<br>
<p>[1] <a href="http://www.gnu.org/software/autoconf/manual/autoconf.html#index-g_t_0040command_007btest_007d-1793">http://www.gnu.org/software/autoconf/manual/autoconf.html#index-g_t_0040command_007btest_007d-1793</a>
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Previous message:</strong> <a href="13992.php">Adrian Reber: "Re: [OMPI devel] Use unique collective ids for the checkpoint/restart code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
<li><strong>Reply:</strong> <a href="13994.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30555 - in trunk: . config	contrib/platform/lanl/cray_xe6"</a>
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
