<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 13:06:55 2014" -->
<!-- isoreceived="20140820170655" -->
<!-- sent="Wed, 20 Aug 2014 10:06:19 -0700" -->
<!-- isosent="20140820170619" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif" -->
<!-- id="CAAvDA15EKcnuAZE9xvv_zvV_0pt+OJLDgXGr44MFL8UMTzvrUA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140820142054.GA53758_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 13:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>In reply to:</strong> <a href="15667.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can somebody confirm that configure is adding &quot;-c9x&quot; or &quot;-c99&quot; to CFLAGS
<br>
with this compiler?
<br>
If not then r32555 could possibly be reverted in favor of adding the proper
<br>
compiler flag.
<br>
<p>Also, I am suspicious of this failure because even without a language-level
<br>
option pgcc 12.9 and 13.4 compile the following:
<br>
<p>struct S { int i; double d; };
<br>
struct S x = {1,0};
<br>
int main (void)
<br>
{
<br>
&nbsp;&nbsp;struct S y = { .i = x.i };
<br>
&nbsp;&nbsp;return y.i;
<br>
}
<br>
<p><p>-Paul
<br>
<p><p>On Wed, Aug 20, 2014 at 7:20 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Really? That means PGI 2013 is NOT C99 compliant! Figures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 19, 2014 at 10:48:48PM -0400, svn-commit-mailer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: ggouaillardet (Gilles Gouaillardet)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2014-08-19 22:48:47 EDT (Tue, 19 Aug 2014)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 32555
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32555">https://svn.open-mpi.org/trac/ompi/changeset/32555</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; btl/scif: use safe syntax
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PGI compilers 2013 and older do not support the following syntax :
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_scif_modex_t modex = {.port_id = mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev2">&gt; &gt; so split it on two lines
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; cmr=v1.8.2:reviewer=hjelmn
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/opal/mca/btl/scif/btl_scif_component.c |     3 ++-
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/opal/mca/btl/scif/btl_scif_component.c      Tue Aug 19
</span><br>
<span class="quotelev1">&gt; 18:34:49 2014        (r32554)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/opal/mca/btl/scif/btl_scif_component.c      2014-08-19
</span><br>
<span class="quotelev1">&gt; 22:48:47 EDT (Tue, 19 Aug 2014)      (r32555)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -208,7 +208,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  static int mca_btl_scif_modex_send (void)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -    mca_btl_scif_modex_t modex = {.port_id =
</span><br>
<span class="quotelev1">&gt; mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev2">&gt; &gt; +    mca_btl_scif_modex_t modex;
</span><br>
<span class="quotelev2">&gt; &gt; +    modex.port_id = mca_btl_scif_module.port_id;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      return opal_modex_send (&amp;mca_btl_scif_component.super.btl_version,
</span><br>
<span class="quotelev1">&gt; &amp;modex, sizeof (modex));
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15667.php">http://www.open-mpi.org/community/lists/devel/2014/08/15667.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15669/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15670.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>In reply to:</strong> <a href="15667.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
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
