<?
$subject_val = "Re: [OMPI devel] oshmem enabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  4 22:58:07 2014" -->
<!-- isoreceived="20140805025807" -->
<!-- sent="Mon, 4 Aug 2014 19:58:05 -0700" -->
<!-- isosent="20140805025805" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem enabled by default" -->
<!-- id="CAAvDA163pGca=Xa+fkGMfynPhhjxN8xgxmqxw+EPXpJJB--0OA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53E0429A.4010906_at_iferc.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-04 22:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15509.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>In reply to:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since &quot;disabled by default&quot; is just part of a macro argument we can say
<br>
anything we want.
<br>
I propose the following:
<br>
<p>Index: config/oshmem_configure_options.m4
<br>
===================================================================
<br>
--- config/oshmem_configure_options.m4  (revision 32424)
<br>
+++ config/oshmem_configure_options.m4  (working copy)
<br>
@@ -22,7 +22,7 @@
<br>
&nbsp;AC_MSG_CHECKING([if want oshmem])
<br>
&nbsp;AC_ARG_ENABLE([oshmem],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_HELP_STRING([--enable-oshmem],
<br>
-                              [Enable building the OpenSHMEM interface
<br>
(disabled by default)])],
<br>
+                              [Enable building the OpenSHMEM interface
<br>
(available on Linux only, where it is enabled by default)])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[oshmem_arg_given=yes],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[oshmem_arg_given=no])
<br>
&nbsp;if test &quot;$oshmem_arg_given&quot; = &quot;yes&quot;; then
<br>
<p><p>-Paul
<br>
<p><p><p><p>On Mon, Aug 4, 2014 at 7:34 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is a bit trickier ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on a Linux platform oshmem is built by default,
</span><br>
<span class="quotelev1">&gt; on a non Linux platform, oshmem is *not* built by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so the configure message (disabled by default) is correct on non Linux
</span><br>
<span class="quotelev1">&gt; platform, and incorrect on Linux platform ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i do not know what should be done, here are some options :
</span><br>
<span class="quotelev1">&gt; - have a different behaviour on Linux vs non Linux platforms (by the way,
</span><br>
<span class="quotelev1">&gt; does autotools support this ?)
</span><br>
<span class="quotelev1">&gt; - disable by default, provide only the --enable-oshmem option (so
</span><br>
<span class="quotelev1">&gt; configure abort if --enable-oshmem on non Linux platforms)
</span><br>
<span class="quotelev1">&gt; - provide only the --disable-oshmem option, useful only on Linux
</span><br>
<span class="quotelev1">&gt; platforms. on non Linux platforms do not build oshmem and this is not an
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; - other ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r31155 | rhc | 2014-03-20 05:32:15 +0900 (Thu, 20 Mar 2014) | 5 lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As per the thread on ticket #4399, OSHMEM does not support non-Linux
</span><br>
<span class="quotelev1">&gt; platforms. So provide a check for Linux and error out if --enable-oshmem is
</span><br>
<span class="quotelev1">&gt; given on a non-supported platform. If no OSHMEM option is given (enable or
</span><br>
<span class="quotelev1">&gt; disable), then don't attempt to build OSHMEM unless we are on a Linux
</span><br>
<span class="quotelev1">&gt; platform. Default to building if we are on Linux for now, pending the
</span><br>
<span class="quotelev1">&gt; outcome of the Debian situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/08/05 6:41, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; On Thu, Jul 24, 2014 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Actually, it already is set correctly - the help message was out of date,
</span><br>
<span class="quotelev1">&gt; so I corrected that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2014, at 10:58 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On 24/07/2014 15:52, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Oshmem should be enabled by default now
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ok,
</span><br>
<span class="quotelev1">&gt; so please reverse the configure switch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --enable-oshmem         Enable building the OpenSHMEM interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (disabled by default)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I will test enabling it in the meantime.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Marco
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15254.php">http://www.open-mpi.org/community/lists/devel/2014/07/15254.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15261.php">http://www.open-mpi.org/community/lists/devel/2014/07/15261.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15502.php">http://www.open-mpi.org/community/lists/devel/2014/08/15502.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15507.php">http://www.open-mpi.org/community/lists/devel/2014/08/15507.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15508/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15509.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>In reply to:</strong> <a href="15507.php">Gilles Gouaillardet: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
<li><strong>Reply:</strong> <a href="15517.php">Ralph Castain: "Re: [OMPI devel] oshmem enabled by default"</a>
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
