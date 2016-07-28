<?
$subject_val = "Re: [OMPI devel] oshmem enabled by default";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 10:52:26 2014" -->
<!-- isoreceived="20140805145226" -->
<!-- sent="Tue, 5 Aug 2014 07:52:04 -0700" -->
<!-- isosent="20140805145204" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] oshmem enabled by default" -->
<!-- id="58D6954D-CDEB-41B0-97F3-A7A88C6D708F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA163pGca=Xa+fkGMfynPhhjxN8xgxmqxw+EPXpJJB--0OA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 10:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15518.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
<li><strong>In reply to:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like clearer language - done!
<br>
<p>On Aug 4, 2014, at 7:58 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since &quot;disabled by default&quot; is just part of a macro argument we can say anything we want.
</span><br>
<span class="quotelev1">&gt; I propose the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: config/oshmem_configure_options.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/oshmem_configure_options.m4  (revision 32424)
</span><br>
<span class="quotelev1">&gt; +++ config/oshmem_configure_options.m4  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -22,7 +22,7 @@
</span><br>
<span class="quotelev1">&gt;  AC_MSG_CHECKING([if want oshmem])
</span><br>
<span class="quotelev1">&gt;  AC_ARG_ENABLE([oshmem],
</span><br>
<span class="quotelev1">&gt;                [AC_HELP_STRING([--enable-oshmem],
</span><br>
<span class="quotelev1">&gt; -                              [Enable building the OpenSHMEM interface (disabled by default)])],
</span><br>
<span class="quotelev1">&gt; +                              [Enable building the OpenSHMEM interface (available on Linux only, where it is enabled by default)])],
</span><br>
<span class="quotelev1">&gt;                [oshmem_arg_given=yes],
</span><br>
<span class="quotelev1">&gt;                [oshmem_arg_given=no])
</span><br>
<span class="quotelev1">&gt;  if test &quot;$oshmem_arg_given&quot; = &quot;yes&quot;; then
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 4, 2014 at 7:34 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul,
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
<span class="quotelev1">&gt; so the configure message (disabled by default) is correct on non Linux platform, and incorrect on Linux platform ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i do not know what should be done, here are some options :
</span><br>
<span class="quotelev1">&gt; - have a different behaviour on Linux vs non Linux platforms (by the way, does autotools support this ?)
</span><br>
<span class="quotelev1">&gt; - disable by default, provide only the --enable-oshmem option (so configure abort if --enable-oshmem on non Linux platforms)
</span><br>
<span class="quotelev1">&gt; - provide only the --disable-oshmem option, useful only on Linux platforms. on non Linux platforms do not build oshmem and this is not an error
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
<span class="quotelev1">&gt; As per the thread on ticket #4399, OSHMEM does not support non-Linux platforms. So provide a check for Linux and error out if --enable-oshmem is given on a non-supported platform. If no OSHMEM option is given (enable or disable), then don't attempt to build OSHMEM unless we are on a Linux platform. Default to building if we are on Linux for now, pending the outcome of the Debian situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/08/05 6:41, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; In both trunk and 1.8.2rc3 the behavior is to enable oshmem by default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In the 1.8.2rc3 tarball the configure help output matches the behavior.
</span><br>
<span class="quotelev2">&gt;&gt; HOWEVER, in the trunk the configure help output still says oshmem is
</span><br>
<span class="quotelev2">&gt;&gt; DISabled by default.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {~/OMPI/ompi-trunk}$ svn info | grep &quot;Revision&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Revision: 32422
</span><br>
<span class="quotelev2">&gt;&gt; {~/OMPI/ompi-trunk}$ ./configure --help | grep -A1 'enable-oshmem '
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-oshmem         Enable building the OpenSHMEM interface (disabled
</span><br>
<span class="quotelev2">&gt;&gt; by
</span><br>
<span class="quotelev2">&gt;&gt;                           default)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 24, 2014 at 2:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, it already is set correctly - the help message was out of date,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so I corrected that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 24, 2014, at 10:58 AM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 24/07/2014 15:52, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oshmem should be enabled by default now
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ok,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so please reverse the configure switch
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-oshmem         Enable building the OpenSHMEM interface
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (disabled by default)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will test enabling it in the meantime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Marco
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15254.php">http://www.open-mpi.org/community/lists/devel/2014/07/15254.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15261.php">http://www.open-mpi.org/community/lists/devel/2014/07/15261.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15502.php">http://www.open-mpi.org/community/lists/devel/2014/08/15502.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15507.php">http://www.open-mpi.org/community/lists/devel/2014/08/15507.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15508.php">http://www.open-mpi.org/community/lists/devel/2014/08/15508.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15518.php">George Bosilca: "Re: [OMPI devel] OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15516.php">Ralph Castain: "Re: [OMPI devel] minor atomics nit"</a>
<li><strong>In reply to:</strong> <a href="15508.php">Paul Hargrove: "Re: [OMPI devel] oshmem enabled by default"</a>
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
