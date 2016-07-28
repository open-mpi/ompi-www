<?
$subject_val = "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 11:53:14 2009" -->
<!-- isoreceived="20090130165314" -->
<!-- sent="Fri, 30 Jan 2009 11:53:09 -0500" -->
<!-- isosent="20090130165309" -->
<!-- name="Greg Koenig" -->
<!-- email="koenig_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380" -->
<!-- id="C5A89AA5.CA2%koenig_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220901291358s2ac125e3s23c9169fd658775d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380<br>
<strong>From:</strong> Greg Koenig (<em>koenig_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 11:53:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5336.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>In reply to:</strong> <a href="5336.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Mattox,
<br>
Thanks for your very good suggestion; I will make sure that the author of
<br>
that script incorporates it.  It is possible he may not have a history of
<br>
using Subversion and may not have understood the significance.  Since ORNL
<br>
now has four people working on the BTL move project (cf., &quot;Author: lb7&quot; in
<br>
the commit message, whereas my username is &quot;koenig&quot;) I am not always aware
<br>
of what some of the other worker bees may have done.
<br>
Thanks again -- Greg Koenig.
<br>
<p>On 1/29/09 4:58 PM, &quot;Tim Mattox&quot; &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greg Koenig,
</span><br>
<span class="quotelev1">&gt; I would suggest that for this tmp/koenig-btl/modif script
</span><br>
<span class="quotelev1">&gt; that you use this construct to move files within a
</span><br>
<span class="quotelev1">&gt; subversion checkout: &quot;svn mv ompi/mca/allocator onet/mca/&quot;
</span><br>
<span class="quotelev1">&gt; rather than without the &quot;svn&quot;.
</span><br>
<span class="quotelev1">&gt; Using &quot;svn mv&quot; preserves the change history of the files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 28, 2009 at 1:10 PM,  &lt;lb7_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: lb7
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2009-01-28 13:10:36 EST (Wed, 28 Jan 2009)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 20380
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20380">https://svn.open-mpi.org/trac/ompi/changeset/20380</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; modifying script updated
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   tmp/koenig-btl/modif |    17 +++++++++++++++++
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 17 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: tmp/koenig-btl/modif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
=============================================================================&gt;&gt;
<br>
=
<br>
<span class="quotelev2">&gt;&gt; --- tmp/koenig-btl/modif        (original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ tmp/koenig-btl/modif        2009-01-28 13:10:36 EST (Wed, 28 Jan 2009)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -159,6 +159,14 @@
</span><br>
<span class="quotelev2">&gt;&gt;  mv ompi/mca/common onet/mca/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  echo
</span><br>
<span class="quotelev2">&gt;&gt; +echo Moving the allocator there
</span><br>
<span class="quotelev2">&gt;&gt; +mv ompi/mca/allocator onet/mca/
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +echo
</span><br>
<span class="quotelev2">&gt;&gt; +echo Moving the rcache there
</span><br>
<span class="quotelev2">&gt;&gt; +mv ompi/mca/rcache onet/mca/
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5336.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>In reply to:</strong> <a href="5336.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
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
