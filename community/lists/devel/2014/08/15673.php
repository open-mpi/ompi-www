<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 23:31:38 2014" -->
<!-- isoreceived="20140821033138" -->
<!-- sent="Thu, 21 Aug 2014 12:31:43 +0900" -->
<!-- isosent="20140821033143" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif" -->
<!-- id="53F5681F.8020609_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15EKcnuAZE9xvv_zvV_0pt+OJLDgXGr44MFL8UMTzvrUA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 23:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>In reply to:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>the piece of code that causes an issue with PGI 2013 and older is just a
<br>
bit more complex.
<br>
<p>here is the enhanced test :
<br>
<p>struct S { int i; double d; };
<br>
struct Y { struct S s; } ;
<br>
struct S x = {1,0};
<br>
<p>int main (void)
<br>
{
<br>
&nbsp;&nbsp;struct Y y = { .s = x };
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>it compiles just fine with PGI 2014 (14.7) but fails with PGI 2013
<br>
(13.9) and 2012 (12.10)
<br>
-c9x nor -c99 help with the older compilers :
<br>
<p>[gouaillardet_at_soleil tmp]$ /opt/pgi/linux86-64/14.7/bin/pgcc -c test.c
<br>
[gouaillardet_at_soleil tmp]$ /opt/pgi/linux86-64/13.9/bin/pgcc -c test.c
<br>
PGC-S-0094-Illegal type conversion required (test.c: 7)
<br>
PGC/x86-64 Linux 13.9-0: compilation completed with severe errors
<br>
[gouaillardet_at_soleil tmp]$ /opt/pgi/linux86-64/12.10/bin/pgcc -c test.c
<br>
PGC-S-0094-Illegal type conversion required (test.c: 7)
<br>
PGC/x86-64 Linux 12.10-0: compilation completed with severe errors
<br>
[gouaillardet_at_soleil tmp]$ /opt/pgi/linux86-64/13.9/bin/pgcc -c9x -c test.c
<br>
PGC-S-0094-Illegal type conversion required (test.c: 7)
<br>
PGC/x86-64 Linux 13.9-0: compilation completed with severe errors
<br>
[gouaillardet_at_soleil tmp]$ /opt/pgi/linux86-64/13.9/bin/pgcc -c99 -c test.c
<br>
PGC-S-0094-Illegal type conversion required (test.c: 7)
<br>
PGC/x86-64 Linux 13.9-0: compilation completed with severe errors
<br>
<p><p>so unless there is room for interpretation in C99, this is a compiler bug.
<br>
<p>All,
<br>
<p>one option is r32555
<br>
an other option is to detect this in configure and skip the scif btl
<br>
an other option is not to support PGI compilers 2013 and older
<br>
and i am out of ideas for other options ...
<br>
<p>imho, r32555 is the less worst (not to say the best) option here
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/21 2:06, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Can somebody confirm that configure is adding &quot;-c9x&quot; or &quot;-c99&quot; to CFLAGS
</span><br>
<span class="quotelev1">&gt; with this compiler?
</span><br>
<span class="quotelev1">&gt; If not then r32555 could possibly be reverted in favor of adding the proper
</span><br>
<span class="quotelev1">&gt; compiler flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I am suspicious of this failure because even without a language-level
</span><br>
<span class="quotelev1">&gt; option pgcc 12.9 and 13.4 compile the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; struct S { int i; double d; };
</span><br>
<span class="quotelev1">&gt; struct S x = {1,0};
</span><br>
<span class="quotelev1">&gt; int main (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   struct S y = { .i = x.i };
</span><br>
<span class="quotelev1">&gt;   return y.i;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 20, 2014 at 7:20 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Really? That means PGI 2013 is NOT C99 compliant! Figures.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 19, 2014 at 10:48:48PM -0400, svn-commit-mailer_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: ggouaillardet (Gilles Gouaillardet)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2014-08-19 22:48:47 EDT (Tue, 19 Aug 2014)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 32555
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32555">https://svn.open-mpi.org/trac/ompi/changeset/32555</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl/scif: use safe syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGI compilers 2013 and older do not support the following syntax :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_scif_modex_t modex = {.port_id = mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so split it on two lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cmr=v1.8.2:reviewer=hjelmn
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    trunk/opal/mca/btl/scif/btl_scif_component.c |     3 ++-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Modified: trunk/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/opal/mca/btl/scif/btl_scif_component.c      Tue Aug 19
</span><br>
<span class="quotelev2">&gt;&gt; 18:34:49 2014        (r32554)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ trunk/opal/mca/btl/scif/btl_scif_component.c      2014-08-19
</span><br>
<span class="quotelev2">&gt;&gt; 22:48:47 EDT (Tue, 19 Aug 2014)      (r32555)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -208,7 +208,8 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  static int mca_btl_scif_modex_send (void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    mca_btl_scif_modex_t modex = {.port_id =
</span><br>
<span class="quotelev2">&gt;&gt; mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    mca_btl_scif_modex_t modex;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    modex.port_id = mca_btl_scif_module.port_id;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return opal_modex_send (&amp;mca_btl_scif_component.super.btl_version,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;modex, sizeof (modex));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15667.php">http://www.open-mpi.org/community/lists/devel/2014/08/15667.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15669.php">http://www.open-mpi.org/community/lists/devel/2014/08/15669.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>In reply to:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15674.php">Ashley Pittman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
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
