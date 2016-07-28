<?
$subject_val = "Re: [OMPI devel] oshmem enabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 22:34:04 2014" -->
<!-- isoreceived="20140805023404" -->
<!-- sent="Tue, 05 Aug 2014 11:34:02 +0900" -->
<!-- isosent="20140805023402" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem enabled by default" -->
<!-- id="53E0429A.4010906_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17uZ+j4ZJVfihAO+TyO5yScLMBmRU9k6HaGCmALEUHAaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] oshmem enabled by default<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 22:34:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
<li><strong>In reply to:</strong> <a href="15502.php">Paul Hargrove: "[OMPI devel] oshmem enabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>this is a bit trickier ...
<br>
<p>on a Linux platform oshmem is built by default,
<br>
on a non Linux platform, oshmem is *not* built by default.
<br>
<p>so the configure message (disabled by default) is correct on non Linux
<br>
platform, and incorrect on Linux platform ...
<br>
<p>i do not know what should be done, here are some options :
<br>
- have a different behaviour on Linux vs non Linux platforms (by the
<br>
way, does autotools support this ?)
<br>
- disable by default, provide only the --enable-oshmem option (so
<br>
configure abort if --enable-oshmem on non Linux platforms)
<br>
- provide only the --disable-oshmem option, useful only on Linux
<br>
platforms. on non Linux platforms do not build oshmem and this is not an
<br>
error
<br>
- other ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>r31155 | rhc | 2014-03-20 05:32:15 +0900 (Thu, 20 Mar 2014) | 5 lines
<br>
<p>As per the thread on ticket #4399, OSHMEM does not support non-Linux
<br>
platforms. So provide a check for Linux and error out if --enable-oshmem
<br>
is given on a non-supported platform. If no OSHMEM option is given
<br>
(enable or disable), then don't attempt to build OSHMEM unless we are on
<br>
a Linux platform. Default to building if we are on Linux for now,
<br>
pending the outcome of the Debian situation.
<br>
<p><p>On 2014/08/05 6:41, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; In both trunk and 1.8.2rc3 the behavior is to enable oshmem by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1.8.2rc3 tarball the configure help output matches the behavior.
</span><br>
<span class="quotelev1">&gt; HOWEVER, in the trunk the configure help output still says oshmem is
</span><br>
<span class="quotelev1">&gt; DISabled by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {~/OMPI/ompi-trunk}$ svn info | grep &quot;Revision&quot;
</span><br>
<span class="quotelev1">&gt; Revision: 32422
</span><br>
<span class="quotelev1">&gt; {~/OMPI/ompi-trunk}$ ./configure --help | grep -A1 'enable-oshmem '
</span><br>
<span class="quotelev1">&gt;   --enable-oshmem         Enable building the OpenSHMEM interface (disabled
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt;                           default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 24, 2014 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, it already is set correctly - the help message was out of date,
</span><br>
<span class="quotelev2">&gt;&gt; so I corrected that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 24, 2014, at 10:58 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 24/07/2014 15:52, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oshmem should be enabled by default now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so please reverse the configure switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --enable-oshmem         Enable building the OpenSHMEM interface
</span><br>
<span class="quotelev2">&gt;&gt; (disabled by default)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will test enabling it in the meantime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marco
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15254.php">http://www.open-mpi.org/community/lists/devel/2014/07/15254.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15261.php">http://www.open-mpi.org/community/lists/devel/2014/07/15261.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15502.php">http://www.open-mpi.org/community/lists/devel/2014/08/15502.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15507/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Previous message:</strong> <a href="15506.php">Paul Hargrove: "[OMPI devel] minor atomics nit"</a>
<li><strong>In reply to:</strong> <a href="15502.php">Paul Hargrove: "[OMPI devel] oshmem enabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
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
