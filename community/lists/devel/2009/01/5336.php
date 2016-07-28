<?
$subject_val = "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 16:58:19 2009" -->
<!-- isoreceived="20090129215819" -->
<!-- sent="Thu, 29 Jan 2009 16:58:14 -0500" -->
<!-- isosent="20090129215814" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380" -->
<!-- id="ea86ce220901291358s2ac125e3s23c9169fd658775d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200901281810.n0SIAaM3018071_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 16:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>Previous message:</strong> <a href="5335.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Rescheduled] Outage of milliways on Jan 27th, 2009"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>Reply:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg Koenig,
<br>
I would suggest that for this tmp/koenig-btl/modif script
<br>
that you use this construct to move files within a
<br>
subversion checkout: &quot;svn mv ompi/mca/allocator onet/mca/&quot;
<br>
rather than without the &quot;svn&quot;.
<br>
Using &quot;svn mv&quot; preserves the change history of the files.
<br>
<p>On Wed, Jan 28, 2009 at 1:10 PM,  &lt;lb7_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: lb7
</span><br>
<span class="quotelev1">&gt; Date: 2009-01-28 13:10:36 EST (Wed, 28 Jan 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 20380
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/20380">https://svn.open-mpi.org/trac/ompi/changeset/20380</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; modifying script updated
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   tmp/koenig-btl/modif |    17 +++++++++++++++++
</span><br>
<span class="quotelev1">&gt;   1 files changed, 17 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: tmp/koenig-btl/modif
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- tmp/koenig-btl/modif        (original)
</span><br>
<span class="quotelev1">&gt; +++ tmp/koenig-btl/modif        2009-01-28 13:10:36 EST (Wed, 28 Jan 2009)
</span><br>
<span class="quotelev1">&gt; @@ -159,6 +159,14 @@
</span><br>
<span class="quotelev1">&gt;  mv ompi/mca/common onet/mca/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  echo
</span><br>
<span class="quotelev1">&gt; +echo Moving the allocator there
</span><br>
<span class="quotelev1">&gt; +mv ompi/mca/allocator onet/mca/
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +echo
</span><br>
<span class="quotelev1">&gt; +echo Moving the rcache there
</span><br>
<span class="quotelev1">&gt; +mv ompi/mca/rcache onet/mca/
</span><br>
<span class="quotelev1">&gt; +
</span><br>
[snip]
<br>
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>Previous message:</strong> <a href="5335.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] [Rescheduled] Outage of milliways on Jan 27th, 2009"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
<li><strong>Reply:</strong> <a href="5337.php">Greg Koenig: "Re: [OMPI devel] [OMPI svn-private] svn:open-mpi r20380"</a>
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
