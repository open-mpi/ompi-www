<?
$subject_val = "Re: [OMPI devel] 1.8.4rc Status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 21:07:30 2014" -->
<!-- isoreceived="20141216020730" -->
<!-- sent="Tue, 16 Dec 2014 11:07:28 +0900" -->
<!-- isosent="20141216020728" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.4rc Status" -->
<!-- id="548F93E0.3090601_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17cvCPP6hgG6yJSAzP1jHQxyYemOGAh=uWsT86U+zgjAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.4rc Status<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 21:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>could you please make sure configure added  &quot;-D_REENTRANT&quot; to the CFLAGS ?
<br>
/* otherwise, errno is a global variable instead of a per thread
<br>
variable, which can
<br>
explains some weird behaviour. note this should have been already fixed */
<br>
<p>assuming -D_REENTRANT is set, could you please give the attached patch a
<br>
try ?
<br>
<p>i suspect the CLOSE_THE_SOCKET macro resets errno, and hence the
<br>
confusing error message
<br>
e.g. failed: Error 0 (0)
<br>
<p>FWIW, master is also affected.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/16 10:47, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have tried with a oob_tcp_if_include setting so that there is now only 1
</span><br>
<span class="quotelev1">&gt; interface.
</span><br>
<span class="quotelev1">&gt; Even with just one interface and -mt=yes in both LDFLAGS and
</span><br>
<span class="quotelev1">&gt; wrapper-ldflags I *still* getting messages like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pcp-j-20:11470] mca_oob_tcp_accept: accept() failed: Error 0 (0).
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev1">&gt; to another process:
</span><br>
<span class="quotelev1">&gt;   Local host:    pcp-j-20
</span><br>
<span class="quotelev1">&gt;   Remote host:   172.16.0.120
</span><br>
<span class="quotelev1">&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev1">&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev1">&gt; try again.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting less certain that my speculation about thread-safe libs is
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 15, 2014 at 1:24 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; A little more reading finds that...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Docs says that one needs &quot;-mt&quot; without the &quot;=yes&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; That will work for both old and new compilers, where &quot;-mt=yes&quot; chokes
</span><br>
<span class="quotelev2">&gt;&gt; older ones.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, man pages say &quot;-mt&quot; must come before &quot;-lpthread&quot; in the link command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Dec 15, 2014 at 12:52 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Dec 15, 2014 at 5:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 7. Linkage issue on Solaris-11 reported by Paul Hargrove. Missing the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; multi-threaded C libraries, apparently need &quot;-mt=yes&quot; in both compile and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; link. Need someone to investigate.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The lack of multi-thread libraries is my SPECULATION.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The fact that configuring with LDFLAGS=-mt=yes did not help may or may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not prove anything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't see them in &quot;mpicc -show&quot; and so maybe they needed to be in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapper-ldflags instead.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My time this week is quite limited, but I can &quot;fire an forget&quot; tests of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any tarballs you provide.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16607.php">http://www.open-mpi.org/community/lists/devel/2014/12/16607.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16608/oob.patch">oob.patch</a>
</ul>
<!-- attachment="oob.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16609.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Previous message:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>In reply to:</strong> <a href="16607.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
<li><strong>Reply:</strong> <a href="16610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.4rc Status"</a>
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
